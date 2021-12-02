<?php

/*
 * Responsively lazy addon for Bear Framework
 * https://github.com/ivopetkov/responsively-lazy-bearframework-addon
 * Copyright (c) Ivo Petkov
 * Free to use under the MIT license.
 */

/**
 * @runTestsInSeparateProcesses
 */
class ResponsivelyLazyTest extends BearFramework\AddonTests\PHPUnitTestCase
{

    /**
     * 
     */
    public function testOutput()
    {
        $app = $this->getApp();

        $html = '<html><head><link rel="client-packages-embed" name="responsivelyLazy"></head></html>';
        $result = $app->clientPackages->process($html);

        $this->assertTrue(strpos($result, '<script>var responsivelyLazy=') !== false);
    }
}
