<x-app-layout>
    <div class="" style="margin-top: 6rem">
        <div class="container">
            <span class="mr-2" style="float: left; display: inline-block; padding-top:0.5rem; cursor: pointer;" id="go-back"><ion-icon name="return-up-back-outline" style="font-size:36px;"></ion-icon></span>
            <h3 class="mb-3" style="display: inline-block; padding-top:1rem; font-weight:500; font-size:20px"">
                LES PRODUITS
            </h3>
            <a href="{{ route('product.create') }}" style="display: inline-block; float: right; padding-top:1rem;"><x-button class="btn-custom">AJOUTER</x-button></a>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <div class="table-responsive">
                <table class="table table-hover" style="margin-top: 2rem;">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom produit</th>
                        <th scope="col">Categorie</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Quantités</th>
                        <th scope="col" style="min-width:140px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $n = 0 ?>
                        @foreach ($products as $product)
                        <?php $n = $n + 1 ?>
                            <tr>
                                <th scope="row">{{ $n }}</th>
                                <td>{{ $product->product_title }}</td>
                                <td>{{ $product->category_title }}</td>
                                <td>{{ $product->product_price }}</td>
                                <td>{{ $product->product_quantity }}</td>
                                <td class="justify-content-between icon-content">
                                    <a href="{{ route('dashboard.product.show', $product->product_slug) }}" style="display:inline-block; margin-right:0.75rem" title="Voir">
                                        <ion-icon name="eye-outline" style="font-size:24px;"></ion-icon>
                                    </a>
                                    <a href="{{ route('product.edit', $product->product_slug) }}" class="col icon-action icon-edit" style="display:inline-block; margin-right:0.75rem" title="Modifier">
                                        <ion-icon name="create-outline" style="font-size:24px;"></ion-icon>
                                    </a>
                                    <span class="col icon-action" style="display:inline-block;">
                                        <form method="POST" action="{{ route('product.destroy', $product->product_slug) }}">
                                            @csrf
                                            @method('delete')
                                                <button class="" type="submit" onclick="return confirm('Vraiment supprimer ce product ?')" title="Supprimer">
                                                    <ion-icon name="trash-outline" style="font-size:24px; color:red;"></ion-icon>
                                                </button>
                                        </form>
                                    </span>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $products->links() }}
        </div>
    </div>
</x-app-layout>