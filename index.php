<?php

/*
 * Responsively lazy addon for Bear Framework
 * https://github.com/ivopetkov/responsively-lazy-bearframework-addon
 * Copyright (c) Ivo Petkov
 * Free to use under the MIT license.
 */

use \BearFramework\App;

$app = App::get();
$context = $app->contexts->get(__DIR__);

$app->clientPackages
    ->add('responsivelyLazy', function (IvoPetkov\BearFrameworkAddons\ClientPackage $package) use ($context): void {
        $package->addJSCode(require_once __DIR__ . '/assets/responsivelyLazy.min.js.php');
        $package->get = 'return responsivelyLazy;';
    });
