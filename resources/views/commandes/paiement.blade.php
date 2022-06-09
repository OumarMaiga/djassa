<x-app-layout>
    <div class="container" style="margin-top: 6rem">
        <div class="row">
        <div class="col s12">
            <div class="card">        
            <div class="card-content">
                <div id="wrapper">          
                @if($commande)
                    <table class="table table-hover table-responsive-md">
                        <thead>
                            <tr>
                            <th scope="col">Fullname</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Code</th>
                            <th scope="col">Produits</th>
                            <th scope="col">Utilisateur</th>
                            <th scope="col">Etat</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>{{ "$commande->firstname $commande->lastname" }}</td>
                                    <td>{{ $commande->telephone }}</td>
                                    <td>{{ $commande->code }}</td>
                                    <td>
                                        <?php 
                                        $x = 0;
                                        foreach ($products as $product) {
                                            echo $x > 0 ? ", " : "";
                                            echo $product->product_title;
                                            $x++;
                                        }
                                        ?>
                                    </td>
                                    <td>{{ $commande->user_name }}</td>
                                    <td>{!! $commande->delivered ? "<b style=color:green>Livré</b>" : "<b style=color:red>Non livré</b>" !!}</td>
                                    <td>
                                        @if($commande->paid)
                                            <b style=color:green>Solder</b>
                                        @else
                                            <a href="{{ route('commande.create_paiement', $commande->id) }}">Payer</a>
                                        @endif
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                @else
                    <span class="card-title center-align">La liste de vos commande est vide</span>
                @endif
                </div>        
                <div id="loader" class="hide">
                <div class="loader"></div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="row">
            
            <div class="col s12">
                <form method="POST" action="{{ route('commande.store_paiement', $commande->id) }}">
                    @csrf
                    <!-- Montant -->
                    <div class="row">
                        <div class="form-item col-md-6">
                            <label for="montant">Montant</label>
                            <input id="montant" class="form-control" type="text" name="montant" value="{{ $commande->montant_du }}" readonly />
                            <input id="commande_id" class="form-control" type="hidden" name="commande_id" value="{{ $commande->id }}" readonly />
                            
                            <button type="submit" class="">
                                {{ __('Payez') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>