<?php

    namespace App\Repositories;

    use App\Models\Category;

    class CategoryRepository extends ResourceRepository {

        public function __construct(Category $category) {
            $this->model = $category;
        }

    }