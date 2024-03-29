<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\File;

use App\Repositories\ProductRepository;
use App\Repositories\FileRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\SubCategoryRepository;
use App\Repositories\SubSubCategoryRepository;
use App\Repositories\RayonRepository;


class ProductController extends Controller
{
    protected $productRepository;
    protected $fileRepository;
    protected $categoryRepository;
    protected $subCategoryRepository;
    protected $subSubCategoryRepository;
    protected $rayonRepository;

    public function __construct(ProductRepository $productRepository, FileRepository $fileRepository, 
                                CategoryRepository $categoryRepository, SubCategoryRepository $subCategoryRepository, CategoryRepository $subSubCategoryRepository,
                                RayonRepository $rayonRepository) 
    {
        $this->middleware('admin', ['only' => ['index', 'edit', 'update', 'destroy']]);

        $this->productRepository = $productRepository;
        $this->fileRepository = $fileRepository;
        $this->rayonRepository = $rayonRepository;
        $this->categoryRepository = $categoryRepository;
        $this->subCategoryRepository = $subCategoryRepository;
        $this->subSubCategoryRepository = $subSubCategoryRepository;
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::select('SELECT products.id as product_id, products.title as product_title, products.slug as product_slug, products.price as product_price,
        products.overview as product_overview, products.quantity as product_quantity, products.published as product_publised, products.discount as product_discount,
        categories.id as categorie_id, categories.title as category_title, categories.slug as categorie_slug
        FROM products LEFT JOIN categories ON products.category_id = categories.id
        WHERE products.quantity > 0 AND products.published = 1 ');
        return view('dashboards.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rayons = $this->rayonRepository->getBy('etat', '=', 'enabled');
        $categories = $this->categoryRepository->getBy('etat', '=', 'enabled');
        $sub_categories = $this->subCategoryRepository->getBy('etat', '=', 'enabled');
        $sub_sub_categories = $this->subSubCategoryRepository->getBy('etat', '=', 'enabled');
        return view('dashboards.products.create', compact('rayons', 'categories', 'sub_categories', 'sub_sub_categories' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'overview' => 'required',
            'price' => 'required'
        ]);

        //Creation du slug
        $i = 0;
        do {
            $i++;
            $slug = Str::slug($request->get('title'))."-".$i;
            if ($i == 1) $slug = Str::slug($request->get('title'));
            $slug_count = $this->productRepository->getBy('slug', '=', $slug)->count();
        } while ($slug_count >= 1);
        
        $request->merge([
            'slug' => $slug,
            'user_id' => Auth::user()->id,
        ]);
            
        $product = $this->productRepository->store($request->all());

        if($request->hasFile('product_image')) {
            foreach ($request->file('product_image') as $imagefile) {
                $fileModel = new File;
                $fileName = time().'_'.$imagefile->getClientOriginalName();
                $filePath = $imagefile->storeAs("uploads/product_image/".$product->id, $fileName, 'public');
                $fileModel->libelle = $fileName;
                $fileModel->file_path = '/storage/' . $filePath;
                $fileModel->user_id =  Auth::check() ? Auth::user()->id : null;
                $fileModel->product_id = $product->id;
                $fileModel->type = 'product_image';
                $fileModel->save();
            }
        } 

        return redirect('/dashboard/product/')->withStatus("Nouveau product (".$product->title.") vient d'être ajouté");
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = $this->productRepository->getBy('slug', '=', $slug)->first();
        $images = $this->fileRepository->getBy("product_id", '=', $product->id);
        $category = $this->categoryRepository->getById($product->category_id);
        $rayon = $this->rayonRepository->getById($category->rayon_id);

        if($product->discount != null &&  $product->discount > 0) 
        {
            $product->discount_price();
        }

        return view('products.show', compact('product', 'images', 'category', 'rayon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $product = $this->productRepository->getBy('slug', '=', $slug)->first();

        $rayons = $this->rayonRepository->getBy('etat', '=', 'enabled');
        $categories = $this->categoryRepository->getBy('etat', '=', 'enabled');
        $sub_categories = $this->subCategoryRepository->getBy('etat', '=', 'enabled');
        $sub_sub_categories = $this->subSubCategoryRepository->getBy('etat', '=', 'enabled');
        
        return view('dashboards.products.edit', compact('product', 'categories', 'rayons', 'sub_categories', 'sub_sub_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        if(isset($request->valeur_nutritionnelle) && $request->valeur_nutritionnelle = 1) {
            $request->merge([
                'valeur_nutritionnelle' => 1,
            ]);
        } else {
            $request->merge([
                'valeur_nutritionnelle' => 0,
            ]);
        }   
        
        $product = $this->productRepository->getBy('slug', '=', $slug)->first();
        $this->productRepository->update($product->id, $request->all());

        if($request->hasFile('product_image')) {
            // On supprime toutes les images du produit
            $this->fileRepository->deleteBy('product_id', $product->id);

            //On upload les images selectionner
            foreach ($request->file('product_image') as $imagefile) {
                $fileModel = new File;
                $fileName = time().'_'.$imagefile->getClientOriginalName();
                $filePath = $imagefile->storeAs("uploads/product_image/".$product->id, $fileName, 'public');
                $fileModel->libelle = $fileName;
                $fileModel->file_path = '/storage/' . $filePath;
                $fileModel->user_id =  Auth::check() ? Auth::user()->id : null;
                $fileModel->product_id = $product->id;
                $fileModel->type = 'product_image';
                $fileModel->save();
            }
        } 

        return redirect('/dashboard/product')->withStatus("Product a bien été modifier");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $product = $this->productRepository->getBy('slug', '=', $slug)->first();
        $this->productRepository->destroy($product->id);
        return redirect()->back()->withError("Product a bien été supprimer");
    }

    public function list()
    {
        $products = $this->productRepository->get();

        return view('products.show', compact('products'));
    }

    /**
     * Display a listing of the product.
     *
     * @return \Illuminate\Http\Response
     */
    public function more_products_ajax($page_number)
    {
        // variable to store the number of rows per page
        $limit = 12;
        // get the initial page number
        $initial_page = ($page_number-1) * $limit; 
        // query to retrieve all rows from the table Countries
        $getQuery = "select * from products";  
        // get the result
        $products = DB::select("SELECT products.id as product_id, products.title as product_title, products.slug as product_slug, products.overview as product_overview, 
            products.price as product_price, products.quantity as product_quantity, products.published as product_published, products.discount as product_discount
            FROM products
            WHERE products.published = 1");

        $total_rows = count($products);
        // get the required number of pages
        $total_pages = ceil ($total_rows / $limit);

        $products = DB::select("SELECT products.id as product_id, products.title as product_title, products.slug as product_slug, products.overview as product_overview, 
            products.price as product_price, products.quantity as product_quantity, products.published as product_published, products.discount as product_discount,
            files.file_path as files_file_path
            FROM products
            LEFT JOIN files ON files.product_id = products.id 
            WHERE products.published = 1 AND products.quantity > 0
            GROUP BY products.id
            LIMIT $initial_page , $limit");

        $rayons = $this->rayonRepository->get();

        return response()->json(['rayons' => $rayons, 'products' => $products, 'total_pages' => $total_pages, 'page_number' => $page_number]);
    }

    public function product_files_ajax($product_id) 
    {
        $files = getProductFiles($product_id);
        return response()->json($files);
    }


}
