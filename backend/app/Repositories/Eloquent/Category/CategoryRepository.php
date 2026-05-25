<?php

namespace App\Repositories\Eloquent\Category;

use App\Models\Category;
use App\Repositories\Contracts\Category\CategoryRepositoryInterface;
use Illuminate\Support\Facades\Cache;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function __construct(
        private readonly Category $model
    ) {}

    public function getAllCategories()
    {
        return Cache::tags(['categories'])->remember('categories.all', 3600, function () {
            return $this->model->with('children')->get();
        });
    }

    public function getCategoryBySlug(string $category_slug)
    {
        return Cache::tags(['categories'])->remember("category.slug.{$category_slug}", 3600, function () use ($category_slug) {
            $category = $this->model->where('slug', $category_slug)->first();

            if (! $category) {
                return collect();
            }

            if ($category->parent_id === null) {
                $childCategories = $this->model->where('parent_id', $category->id)->get();

                return collect([$category])->merge($childCategories);
            }

            return collect([$category]);
        });
    }
}
