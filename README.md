Drupal to Backdrop migrate
===============================

Experimental module that helps migrate a Drupal 7 site to Backdrop.


Installation
------------

1. Create a new empty BackdropCMS site (or use an unneeded development site for testing).
2. This new site must be on the same server as the Drupal 7 site you intend to upgrade.
3. Install this module and Backup and Migrate module.
4. Enable both modules at the module administration page.
5. Go to `d2b-migrate/start` and follow the step by step instructions.
6. This module will connect to the Drupal site, show information about which modules
   are available to download, or are in core, and allow to install available modules
   automatically.
7. Then the Drupal database will be imported into the Backdrop site to complete the upgrade.

License
-------

This project is GPL v2 software. See the LICENSE.txt file in this directory for
complete text.

Current Maintainers
-------------------

- docwilmot (https://github.com/docwilmot)

