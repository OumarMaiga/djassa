<x-app-layout>

    <div class="container" style="margin-top:6.5rem">
        <div class="row">
        
            <div class="col-6 col-sm-4 mt-3">
                <a href="{{ route('dashboard.product.index') }}">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <center>
                                <div class="mt-2"><ion-icon name="cube-outline" style="font-size:36px"></ion-icon></div>
                                <div class="text-2xl lg:text-3xl">{{ count($products) }}</div>
                                <h2 class="mb-2 text-md lg:text-xl font-medium pt-4">
                                    PRODUITS
                                </h2>
                            </center>
                        </div>
                    </div>
                </a>
            </div>
        
            <div class="col-6 col-sm-4 mt-3">
                <a href="http://127.0.0.1:8000/dashboard/recettes">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <center>
                                <div class="mt-2"><ion-icon name="cash-outline" style="font-size:36px"></ion-icon></div>
                                <h2 class="mb-2 text-md lg:text-xl font-medium pt-4">
                                    RECETTES
                                </h2>
                            </center>
                        </div>
                    </div>
                </a>
            </div>
            @if (Auth::check())
                @if(Auth::user()->type === "super-admin")
                    <div class="col-6 col-sm-4 mt-3">
                        <a href="{{ route('dashboard.rayon.index') }}">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <center>
                                        <div class="mt-2"><ion-icon name="file-tray-stacked-outline" style="font-size:36px"></ion-icon></div>
                                        <h2 class="mb-2 text-md lg:text-xl font-medium pt-4">
                                            RAYONS
                                        </h2>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 mt-3">
                        <a href="{{ route('dashboard.admin.index') }}">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <center>
                                        <div class="mt-2"><ion-icon name="people-outline" style="font-size:36px"></ion-icon></div>
                                        <div class="text-2xl lg:text-3xl">{{ count($admins) }}</div>
                                        <h2 class="mb-2 text-md lg:text-xl font-medium pt-4">
                                            ADMINISTRATEURS
                                        </h2>
                                    </center>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            @endif
            <div class="col-6 col-sm-4 mt-3">
                <a href="{{ route('dashboard.user.index') }}">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <center>
                                <div class="mt-2"><ion-icon name="people-outline" style="font-size:36px"></ion-icon></div>
                                <div class="text-2xl lg:text-3xl">{{ count($users) }}</div>
                                <h2 class="mb-2 text-md lg:text-xl font-medium pt-4">
                                    UTILISATEURS
                                </h2>
                            </center>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 mt-3">
                <a href="{{  route('dashboard.sells')}}">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <center>
                                <div class="mt-2"><ion-icon name="bag-check-outline" style="font-size:36px"></ion-icon></div>
                                <div class="text-2xl lg:text-3xl">{{ count($sells) }}</div>
                                <h2 class="mb-2 text-md lg:text-xl font-medium pt-4">
                                    TOUTES LES VENTES
                                </h2>
                            </center>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 mt-3">
                <a href="{{  route('dashboard.monthly_sells')}}">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <center>
                                <div class="mt-2"><ion-icon name="bag-check-outline" style="font-size:36px"></ion-icon></div>
                                <div class="text-2xl lg:text-3xl">{{ count($monthly_sells) }}</div>
                                <h2 class="mb-2 text-md lg:text-xl font-medium pt-4">
                                    VENTE DU MOIS
                                </h2>
                            </center>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 mt-3">
                <a href="{{  route('dashboard.commande.index')}}">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <center>
                                <div class="mt-2"><ion-icon name="file-tray-full-outline" style="font-size:36px"></ion-icon></div>
                                <div class="text-2xl lg:text-3xl">{{ count($commandes) }}</div>
                                <h2 class="mb-2 text-md lg:text-xl font-medium pt-4">
                                    COMMANDES EN COURS
                                </h2>
                            </center>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 mt-3">
                <a href="{{  route('dashboard.service.index')}}">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <center>
                                <div class="mt-2"><ion-icon name="file-tray-full-outline" style="font-size:36px"></ion-icon></div>
                                <div class="text-2xl lg:text-3xl">{{ count($services) }}</div>
                                <h2 class="mb-2 text-md lg:text-xl font-medium pt-4">
                                    SERVICES
                                </h2>
                            </center>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</x-app-layout>

