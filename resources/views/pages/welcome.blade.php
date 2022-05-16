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
        <!-- Banners -->
        <div style="display:inline-block; margin-right:1rem">
            <img src="https://source.unsplash.com/random/540x240" alt="">
            <h2 class="text-xl font-bold text-black" style="margin-top:2%; font-size:20px; font-weight:700">Faites vos courses sur Djassa</h2>
        </div>
        <div style="display:inline-block">
            <img src="https://source.unsplash.com/random/540x240" alt="">
            <h2 class="text-xl font-bold text-black" style="margin-top:2%; font-size:20px; font-weight:700">Acheter des billets</h2>
        </div>

        <h2 style="margin-top:5%; margin-bottom:1.5rem; font-size:24px; font-weight:700">Les offres de la semaine dans les magasins</h2>

        <div class="">
            <div class="row gx-1">
                <div class="col">
                    <div class="card shadow-sm" style="width:12rem">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:30%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm" style="width:12rem">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:30%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm" style="width:12rem">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:30%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm" style="width:12rem">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:30%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm" style="width:12rem">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:30%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-1 mt-4">
                <div class="col">
                    <div class="card shadow-sm" style="width:12rem">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:30%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm" style="width:12rem">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:30%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm" style="width:12rem">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:30%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm" style="width:12rem">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:30%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm" style="width:12rem">
                        <p class="py-2 mt-2 mx-3" style="background:#F6F6F6;text-align:center;border-radius:4px;font-weight:700; margin-bottom:25%">Voir les offres</p>
                        <img src="images/lunettes.webp" class="img-responsive mx-3" style="margin-bottom:10%" alt="...">
                        <div class="card-body">
                            <p class="px-2" style="background:#ec6333;color:#fff;font-weight:800; font-size:14px; width:30%">30%</p>
                            <p style="font-size:13px; font-weight:600">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display:flex; justify-content:center; align-items:center; margin-top:4%">
                <button style="color:#ec6333; border:2px solid #ec6333; padding:0.75em 4.5em; border-radius:0.5em; font-size:18px; font-weight:800; text-align:center;">
                    Afficher plus
                </button>
            </div>
            <div class="row gx-1" style="margin-top:5%">
                <div class="col">
                    <img src="images/body-lotion.jpg" alt="" style="border-radius:8px">
                    <h2 class="text-xl font-bold text-black" style="margin-top:2%; font-size:20px; font-weight:700">Les imbattables de la semaine</h2>
                </div>
                <div class="col">
                    <img src="images/body-lotion.jpg" alt="" style="border-radius:8px">
                    <h2 class="text-xl font-bold text-black" style="margin-top:2%; font-size:20px; font-weight:700">Un soin optimal et naturel</h2>
                </div>
                <div class="col">
                    <img src="images/care-products.jpeg" alt="" style="border-radius:8px">
                    <h2 class="text-xl font-bold text-black" style="margin-top:2%; font-size:20px; font-weight:700">Du nouveau en beauté</h2>
                </div>
            </div>
        </div>

        <x-footer></x-footer>
    </div>
</x-app-layout>