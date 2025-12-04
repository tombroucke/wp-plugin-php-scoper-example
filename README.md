# WP Plugin PHP scoper example

This example plugin shows how you can introduce [PHP-Scoper](https://github.com/humbug/php-scoper) to your WordPress plugin. In this project, PHP-scoper will prefix all dependencies.
We build a `vendor_prefixed` directory that contains all the prefixed dependencies. devDependencies will be installed to the `vendor` directory, so we can run tests (`composer test`).

## See it in action

To install this example plugin you can run

```
composer require tombroucke/wp-plugin-php-scoper-example
```

Alternatively, you can clone this repo and put it in your plugins directory.

## Building vendor_prefixed

### Prerequisites

- **jq** (`brew install jq`)
- **php-scoper** (`composer global require humbug/php-scoper`)

### Run the build script

Run `composer build` (or `./scoper.sh`) to build the `vendor_prefixed` directory. This will:

- Fetch dependencies that need prefixes from `composer.json`
- Install these dependencies (`composer require {dependency}`)
- Run `composer update`
- Add prefixes
- Remove all devDependencies
- Move the prefixed vendor dir from `build/vendor` to `vendor_prefixed`
- Set custom suffix (`PhpScoperExampleVendorSuffix`) for `ComposerAutoloaderInit`
- Remove the scoped dependencies from `composer.json`

## Adding dependencies

To add dependencies, you can add them in `extra.require-scoped` in `composer.json`. After adding the dependency, you need to rebuild the `vendor_prefixed` directory.

## Integrating in an existing plugin

0. install **jq** (`brew install jq`) and **php-scoper** (`composer global require humbug/php-scoper`)
1. Copy `scoper.inc.php`, replace `'prefix' => 'PhpScoperExampleVendor'` with your prefix and `'exclude-namespaces' => ['Otomaties\\PhpScoperExample']` at the bottom of the file with the namespace of your plugin.
2. Copy `scoper.sh`, replace `PhpScoperExampleVendorSuffix` with a custom suffix
3. Copy the build scripts from `composer.json`
4. Add your dependencies in `extra.require-scoped` in `composer.json`
5. Run `composer build`
6. Find & replace the namespaces in your plugin. (`use Illuminate\Support\Collection` > `use PhpScoperExampleVendor\Illuminate\Support\Collection`)
7. Include `vendor_prefixed` in your repository (should NOT be .gitignored)

## FAQ

Why not use the dependencies from `require` in `composer.json`?

> I want this plugin to be installable with composer. If the project requires `psr/log ^2`, and my `composer.json` file requires `psr/log ^3`, composer would not be able to install the plugin.

Why do I need a custom suffix for `ComposerAutoloaderInit`?

> The classname `ComposerAutoloaderInit{calculated_hash}` in `vendor_prefixed` would otherwise collide with the classname in `vendor`
