<?php
/**
 * Copyright © Fisheye Media Ltd. All rights reserved.
 * See LICENCE.txt for licence details.
 */
namespace Fisheye\UrlRewriteOptimiser\Scope;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Config
{
    /** Stores > Configuration paths */
    const XML_PATH_CATALOG_SEO_PRODUCT_USE_CATEGORIES = 'catalog/seo/product_use_categories';

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function generateCategoryUrlsForProductRewrites($storeId): bool
    {
        return $this->scopeConfig->isSetFlag(
            self::XML_PATH_CATALOG_SEO_PRODUCT_USE_CATEGORIES,
            ScopeInterface::SCOPE_STORE,
            $storeId);
    }
}
