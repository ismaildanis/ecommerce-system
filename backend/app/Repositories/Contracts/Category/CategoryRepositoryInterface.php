<?php

namespace App\Repositories\Contracts\Category;

interface CategoryRepositoryInterface
{
    public function getAllCategories();
    public function getCategoryBySlug(string $category_slug);
}
