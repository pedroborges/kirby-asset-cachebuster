# Kirby Asset Cachebuster [![Release](https://img.shields.io/github/release/pedroborges/kirby-asset-cachebuster.svg)](https://github.com/pedroborges/kirby-asset-cachebuster/releases) [![Issues](https://img.shields.io/github/issues/pedroborges/kirby-asset-cachebuster.svg)](https://github.com/pedroborges/kirby-asset-cachebuster/issues)

Provides a simple function that generates versioned URLs from asset paths.

## Requirements
- Kirby 2.3.0+
- PHP 5.6+

## Installation
After [installing](#download) and enabling the plugin via the `cachebuster` [option](#option), you can start using the `asset` function provided by the plugin:

```php
    <link rel="stylesheet" href="<?= asset('assets/css/main.css') ?>">
```

Asset Cachebuster will generate a versioned URL that looks like:

```php
    <link rel="stylesheet" href="https://yoursite.com/assets/css/main.1511146146.css">
```

### Download
[Download the files](https://github.com/pedroborges/kirby-asset-cachebuster/archive/master.zip) and place them inside `site/plugins/asset-cachebuster`.

### Kirby CLI
Kirby's [command line interface](https://github.com/getkirby/cli) makes installing the Asset Cachebuster plugin a breeze:

    $ kirby plugin:install pedroborges/kirby-asset-cachebuster

Updating couldn't be any easier, simply run:

    $ kirby plugin:update pedroborges/kirby-asset-cachebuster

### Git Submodule
You can add the Asset Cachebuster plugin as a Git submodule.

    $ cd your/project/root
    $ git submodule add https://github.com/pedroborges/kirby-asset-cachebuster.git site/plugins/asset-cachebuster
    $ git submodule update --init --recursive
    $ git commit -am "Add Asset Cachebuster plugin"

Updating is as easy as running a few commands.

    $ cd your/project/root
    $ git submodule foreach git checkout master
    $ git submodule foreach git pull
    $ git commit -am "Update submodules"
    $ git submodule update --init --recursive

## Option
To enable the plugin, set the `cachebuster` option to `true`:

```php
c::set('cachebuster', true);
```

## Change Log
All notable changes to this project will be documented at: <https://github.com/pedroborges/kirby-asset-cachebuster/blob/master/changelog.md>

## License
Asset Cachebuster plugin is open-sourced software licensed under the [MIT license](http://www.opensource.org/licenses/mit-license.php).

Copyright © 2017 Pedro Borges <oi@pedroborg.es>
