## Superfish bundle for the [Contao CMS](https://contao.org/en)

The official website of this project is: <http://users.tpg.com.au/j_birch/plugins/superfish>

### Installation

Add `"lionel/superfish": "~4.0@beta",` in the `composer.json` file.

Add `new LionelM\SuperfishBundle\LionelMSuperfishBundle(),` in the `app/AppKernel.php` file.

Create the symlink in `web/bundles` with `php app/console assets:install web --symlink`.
