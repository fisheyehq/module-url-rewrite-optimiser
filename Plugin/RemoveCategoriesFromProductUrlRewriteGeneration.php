<?php
/**
 * Copyright © Fisheye Media Ltd. All rights reserved.
 * See LICENCE.txt for licence details.
 */
namespace Fisheye\UrlRewriteOptimiser\Plugin;

use Fisheye\UrlRewriteOptimiser\Scope\Config;
use Magento\Catalog\Model\Product;
use Magento\CatalogUrlRewrite\Model\ProductScopeRewriteGenerator;

class RemoveCategoriesFromProductUrlRewriteGeneration
{
    /** Stores > Configuration paths */
    const XML_PATH_CATALOG_SEO_PRODUCT_USE_CATEGORIES = 'catalog/seo/product_use_categories';

    /**
     * @var Config
     */
    private $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * @param ProductScopeRewriteGenerator $subject
     * @param $storeId
     * @param $productCategories
     * @param Product $product
     * @param null $rootCategoryId
     *
     * @return array
     */
    public function beforeGenerateForSpecificStoreView(
        ProductScopeRewriteGenerator $subject,
        $storeId,
        $productCategories,
        Product $product,
        $rootCategoryId = null
    ): array {
        if (!$this->config->generateCategoryUrlsForProductRewrites($storeId)) {
            // Unset product categories to stop needless category path rewrites being created
            $productCategories = [];
        }
        return [$storeId, $productCategories, $product, $rootCategoryId];
    }
}
