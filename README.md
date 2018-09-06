# Fisheye_UrlRewriteOptimiser

## Overview
A Magento module that stops URL rewrites with category paths being generated for products when 'Use Categories Path for Product URLs' setting is disabled in config.

## Features

* Stop needless URL rewrites for products that include category paths being created
* Only applies when 'Use Categories Path for Product URLs' setting is set to 'No'

## Compatibility

* Magento Community Edition / Enterprise Edition 2.2.x
* Supports Magento 2 Full Page Cache (including Varnish)

## Installation
This extension is hosted on Fisheye's packagist.com composer repo and should ALWAYS be installed from here (even when contributing - see below):

* `composer require fisheye/module-url-rewrite-optimiser`

## Contributing
For contributing still install via composer, however add the `--prefer-source` flag so that you get all the git repository details also (i.e. so you can push and pull to this repo).

* `composer require --prefer-source fisheye/module-url-rewrite-optimiser`

ALWAYS tag any new changes to the repo using [semantic versioning (semver)](http://semver.org/) so that packagist.com is updated and updates to existing installations can be considered properly.  Note this may occur after a pull request in most cases.
