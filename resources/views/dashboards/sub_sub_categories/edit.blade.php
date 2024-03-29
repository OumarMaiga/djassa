<x-app-layout>
    <div class="dashboard-content" style="margin-top: 6rem">
        <div class="container content">
            <div class="container content">
                <div style="margin-bottom:1rem">
                <span class="mr-2" style="float: left; display: inline-block; padding-top:0.5rem; cursor: pointer;" id="go-back"><ion-icon name="return-up-back-outline" style="font-size:36px;"></ion-icon></span>
                <h3 class="mb-3" style="display: inline-block; padding-top:1rem; font-weight:500; font-size:20px"">
                    {{ __('MODIFICATION DE SOUS SOUS-CATEGORIE') }}
                </h3>
            </div>
    
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
    
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
    
            <form method="POST" action="{{ route('dashboard.sub_sub_category.update', $sub_sub_category->slug) }}">
                @csrf
                @method('put')

                <div class="row">
                    <div class="form-item col-md-6">
                        <!-- Subcategory -->
                        <div>
                            <x-label for="title" :value="__('Modifier la sous sous-catégorie')" />
                            <x-input id="title" class="form-control" type="text" name="title" value="{{ $sub_sub_category->title }}" required autofocus />
                        </div>
                    </div>
                </div>
                
                <div class="row" style="margin-top: 0.75rem">
                    <div class="form-item col-md-6">
                        <select name="rayon_id" id="rayon_id" class="form-control">
                            <option value="">-- SELECTIONNEZ UN RAYON --</option>
                            @foreach($rayons as $rayon)
                                <option value="{{ $rayon->id }}" <?= ($rayon->id == $sub_sub_category->rayon_id) ? "selected=true" : "" ?>>{{ $rayon->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row" style="margin-top: 0.75rem">
                    <div class="form-item col-md-6">
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="">-- SELECTIONNEZ UNE CATÉGORIE --</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" <?= ($category->id == $sub_sub_category->category_id) ? "selected=true" : "" ?>>{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row" style="margin-top: 0.75rem">
                    <div class="form-item col-md-6">
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="">-- SELECTIONNEZ UNE CATÉGORIE --</option>
                            @foreach($sub_categories as $sub_category)
                                <option value="{{ $sub_category->id }}" <?= ($sub_category->id == $sub_sub_category->sub_category_id) ? "selected=true" : "" ?>>{{ $sub_category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                    
                <div class="mt-4">
                    <x-button type="submit" class="">
                        {{ __('AJOUTER') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
