# Shopsys Product Feed Google

[![Build Status](https://travis-ci.org/shopsys/product-feed-google.svg?branch=master)](https://travis-ci.org/shopsys/product-feed-google)
[![Downloads](https://img.shields.io/packagist/dt/shopsys/product-feed-google.svg)](https://packagist.org/packages/shopsys/product-feed-google)

Plugin for [Shopsys Framework](https://www.shopsys-framework.com) responsible for generating XML product feed for [Google](https://www.google.com).

For detailed information about the feed see [official documentation](https://support.google.com/merchants/answer/7052112?hl=en).

This repository is maintained by [shopsys/shopsys] monorepo, information about changes are in [monorepo CHANGELOG.md](https://github.com/shopsys/shopsys/blob/master/CHANGELOG.md).

## Installation
The plugin is a Symfony bundle and is installed in the same way:

### Download
First, you download the package using [Composer](https://getcomposer.org/):
```
composer require shopsys/product-feed-google
```

### Register
For the bundle to be loaded in your application you need to register it in the `app/AppKernel.php` file of your project:
```php
// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            // ...
            new Shopsys\ProductFeed\GoogleBundle\ShopsysProductFeedGoogleBundle(),
            // ...
        ];
        
        // ...

        return $bundles;
    }
    
    // ...
}
```

## How to use
You should see the new feed immediately after installation in the administration feed list.
All output XML files will be automatically generated by a cron module or they can be generated manually in administration when logged as superadmin.

## Contributing
Thank you for your contributions to Shopsys Product Feed Google package.
Together we are making Shopsys Framework better.

This repository is READ-ONLY.
If you want to [report issues](https://github.com/shopsys/shopsys/issues/new) and/or send [pull requests](https://github.com/shopsys/shopsys/compare),
please use the main [Shopsys repository](https://github.com/shopsys/shopsys).

Please, check our [Contribution Guide](https://github.com/shopsys/shopsys/blob/master/CONTRIBUTING.md) before contributing.

## Support
What to do when you are in troubles or need some help? Best way is to contact us on our Slack [http://slack.shopsys-framework.com/](http://slack.shopsys-framework.com/)

If you want to [report issues](https://github.com/shopsys/shopsys/issues/new), please use the main [Shopsys repository](https://github.com/shopsys/shopsys).

[shopsys/shopsys]:(https://github.com/shopsys/shopsys)
