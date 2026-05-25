<?php

namespace App\Repositories\Contracts\Category;

interface CategoryRepositoryInterface
{
    public function getAllCategories();

    public function getCategoryBySlug($category_slug);
    /* public function getCategoryWithProducts($id);
     public function getActiveCategories();*/
}
