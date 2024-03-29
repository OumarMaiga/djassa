<?php

namespace App\Http\Controllers;

use App\Models\Rayon;

use App\Repositories\RayonRepository;
use App\Repositories\CategoryRepository;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RayonController extends Controller
{
    protected $rayonRepository;
    protected $categoryRepository;

    public function __construct(RayonRepository $rayonRepository, CategoryRepository $categoryRepository) {
        $this->middleware('superAdmin', ['only' => ['index', 'create', 'store', 'destroy', 'show', 'edit', 'update']]);
        $this->rayonRepository = $rayonRepository;
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rayons = $this->rayonRepository->get();
        return view('dashboards.rayons.index', compact('rayons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.rayons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required|max:255',
        ]);

        //Creation du slug
        $i = 0;
        do {
            $i++;
            $slug = Str::slug($request->get('title'))."-".$i;
            if ($i == 1) $slug = Str::slug($request->get('title'));
            $slug_count = $this->rayonRepository->getBy('slug', '=', $slug)->count();
        } while ($slug_count >= 1);
        
        $request->merge([
            'slug' => $slug,
            'user_id' => Auth::user()->id,
            'etat' => 'enabled',
        ]);
            
        $rayon = $this->rayonRepository->store($request->all());

        return redirect('/dashboard/rayon/')->withStatus("Nouveau rayon (".$rayon->title.") vient d'être ajouté");
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $rayon = $this->rayonRepository->getBy('slug', '=', $slug)->first();
        return view('dashboards.rayons.show', compact('rayon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $rayon = $this->rayonRepository->getBy('slug', '=', $slug)->first();
        return view('dashboards.rayons.edit', compact('rayon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $rayon = $this->rayonRepository->getBy('slug', '=', $slug)->first();
        $this->rayonRepository->update($rayon->id, $request->all());
        return redirect('/dashboard/rayon')->withStatus("Rayon a bien été modifier");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $rayon = $this->rayonRepository->getBy('slug', '=', $slug)->first();
        $this->rayonRepository->destroy($rayon->id);
        return redirect()->back()->withError("Rayon a bien été supprimer");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rayon  $rayon_id
     * @return \Illuminate\Http\Response
     */
    public function categories($id)
    {
        $categories = $this->categoryRepository->getBy('rayon_id', '=', $id);
        return response()->json(['categories' => $categories]);
    }
    
}
