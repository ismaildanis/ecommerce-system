<?php

namespace App\Services;

use App\Repositories\Contracts\Campaign\CampaignRepositoryInterface;
use App\Repositories\Contracts\Category\CategoryRepositoryInterface;
use App\Repositories\Contracts\Product\ProductRepositoryInterface;

class MainService
{
    public function __construct(
        private readonly ProductRepositoryInterface $productRepository,
        private readonly CategoryRepositoryInterface $categoryRepository,
        private readonly CampaignRepositoryInterface $campaignRepository,
    ) {}

    public function getProducts()
    {
        return $this->productRepository->getProductsWithCategory();
    }

    public function getProductsPopularVariants()
    {
        return $this->productRepository->getProductsWithCategory();
    }

    public function getCategories()
    {
        return $this->categoryRepository->getAllCategories();
    }

    public function getCategory($category_slug)
    {
        return $this->categoryRepository->getCategoryBySlug($category_slug);
    }

    public function getCampaigns()
    {
        return $this->campaignRepository->getActiveCampaigns();
    }
}
