<x-app-layout>
    <div class="dashboard-content" style="margin-top: 6rem">
        <div class="container content">
            <div class="content-title">{{ __('AJOUT DE SOUS-CATEGORY') }}</div>
    
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
    
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
    
            <form method="POST" action="{{ route('dashboard.sub_category.store') }}">
                @csrf
    
                <!-- Email Address -->
                <div class="row">
                    <div class="form-item col-md-6">
                        <label for="title">Titre</label>
                        <input id="title" class="form-control" type="text" name="title" value="{{ old('title') }}" placeholder="title" required />
                    </div>
                </div>
                
                <!-- Email Address -->
                <div class="row">
                    <div class="form-item col-md-6">
                        <select name="rayon_id">
                            <option value="">-- SELECTIONNEZ ICI --</option>
                            @foreach($rayons as $rayon)
                                <option value="{{ $rayon->id }}" <?= ($rayon->id == $sub_category->rayon_id) ? "selected=true" : "" ?>>{{ $rayon->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <!-- Email Address -->
                <div class="row">
                    <div class="form-item col-md-6">
                        <select name="category_id">
                            <option value="">-- SELECTIONNEZ ICI --</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                    
                <div class="mt-4">
                    <button type="submit" class="">
                        {{ __('AJOUTER') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
