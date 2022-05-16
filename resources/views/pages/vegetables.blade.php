<x-app-layout>
    <div style="background:#F6F6F6; width:16rem; height:100vh; display:block; position:fixed; top:0; bottom:0; left:0;">
        <h2 class="text-xl font-bold text-black ml-4" style="margin-top:35%; margin-bottom:1rem">Tous les produits</h2>
        
        <x-menu-item :href="route('vegetables')">Fruits & Légumes</x-menu-item>
        <x-menu-item :href="route('vegetables')">Viandes & Poissons</x-menu-item>
        <x-menu-item :href="route('vegetables')">Produits laitiers et oeufs</x-menu-item>
        <x-menu-item :href="route('vegetables')">Boulangerie & Pâtisserie</x-menu-item>

        <hr class="border-gray-800 mt-3 mb-3" style="margin-right:1rem; margin-left:1rem" />

        <x-menu-item :href="route('vegetables')">Epicerie sucrée</x-menu-item>
        <x-menu-item :href="route('vegetables')">Epicerie salée</x-menu-item>
        <x-menu-item :href="route('vegetables')">Surgelés</x-menu-item>
        <x-menu-item :href="route('vegetables')">Boissons, Café & Thé</x-menu-item>
        <x-menu-item :href="route('vegetables')">Vins, Bières & Spititueux</x-menu-item>

        <hr class="border-gray-800 mt-3 mb-3" style="margin-right:1rem; margin-left:1rem" />

        <x-menu-item :href="route('vegetables')">Bébés & Enfants</x-menu-item>
        <x-menu-item :href="route('vegetables')">Hygiène & Beauté</x-menu-item>
        <x-menu-item :href="route('vegetables')">Entretien & Nettoyage</x-menu-item>
        <x-menu-item :href="route('vegetables')">Maisons & Equipements</x-menu-item>
        <x-menu-item :href="route('vegetables')">Vêtements & Accessoires</x-menu-item>
        <x-menu-item :href="route('vegetables')">Animaux</x-menu-item>
    </div>

    <div style="margin-left:19rem; margin-top:6.5rem">
        
        <h2 style="margin-top:5%; margin-bottom:1rem; font-size:30px; font-weight:600">Fruits & Légumes</h2>
        
        <!-- Cards -->
        <div class="row gx-1" style="margin-bottom:3%">
            <div class="col-3 mb-3">
                <div class="card shadow-sm" style="width:17rem">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-8">
                    <img src="images/vegetables01.jpeg" class="img-responsive" style="width:100%; height:6em" alt="...">
                    </div>
                </div>
                    
                    <div class="card-body" style="width:17rem">
                        <p class="" style="font-weight:700; font-size:18px; width:30%">Fruits</p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Pommes & Poires</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Agrumes</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Fruits rouges, Baies & Raisins</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Melons & Fruits à noyau</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Fruits exotiques</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Bananes</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow-sm" style="width:17rem">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-8">
                    <img src="images/vegetables02.jpeg" class="img-responsive" style="width:100%; height:6em" alt="...">
                    </div>
                </div>
                    
                    <div class="card-body">
                        <p class="" style="font-weight:700; font-size:18px; width:30%">Fruits</p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Pommes & Poires</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Agrumes</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Fruits rouges, Baies & Raisins</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Melons & Fruits à noyau</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Fruits exotiques</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Bananes</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow-sm" style="width:17rem">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-8">
                    <img src="images/vegetables03.jpeg" class="img-responsive" style="width:100%; height:6em" alt="...">
                    </div>
                </div>
                    
                    <div class="card-body">
                        <p class="" style="font-weight:700; font-size:18px; width:30%">Fruits</p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Pommes & Poires</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Agrumes</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Fruits rouges, Baies & Raisins</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Melons & Fruits à noyau</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Fruits exotiques</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Bananes</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow-sm" style="width:17rem">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-8">
                    <img src="images/vegetables04.jpeg" class="img-responsive" style="width:100%; height:6em" alt="...">
                    </div>
                </div>
                    
                    <div class="card-body">
                        <p class="" style="font-weight:700; font-size:18px; width:30%">Fruits</p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Pommes & Poires</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Agrumes</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Fruits rouges, Baies & Raisins</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Melons & Fruits à noyau</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Fruits exotiques</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Bananes</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow-sm" style="width:17rem">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-8">
                    <img src="images/vegetables05.jpeg" class="img-responsive" style="width:100%; height:6em" alt="...">
                    </div>
                </div>
                    
                    <div class="card-body">
                        <p class="" style="font-weight:700; font-size:18px; width:30%">Fruits</p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Pommes & Poires</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Agrumes</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Fruits rouges, Baies & Raisins</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Melons & Fruits à noyau</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Fruits exotiques</a>
                        </p>
                        <p>
                        <a class="text-sm font-normal text-black mt-3 hover:bg-orange-500 hover:cursor-pointer">Bananes</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
        <h2 style="margin-top:1%; margin-bottom:1rem; font-size:24px; font-weight:600; color:#ec6333;">Tous les produits</h2>
            <div class="row">
                <div class="col-2">
                    <div class="card shadow-sm">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:40%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card shadow-sm">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:40%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card shadow-sm">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:40%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card shadow-sm">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:40%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card shadow-sm">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:40%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card shadow-sm">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:40%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-2">
                    <div class="card shadow-sm">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:40%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card shadow-sm">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:40%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card shadow-sm">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:40%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card shadow-sm">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:40%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card shadow-sm">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:40%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card shadow-sm">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:40%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-2">
                    <div class="card shadow-sm">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:40%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card shadow-sm">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:40%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card shadow-sm">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:40%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card shadow-sm">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:40%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card shadow-sm">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:40%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up</p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card shadow-sm">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:40%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-footer></x-footer>
    </div>
</x-app-layout>