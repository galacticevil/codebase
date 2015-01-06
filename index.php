<?php

echo '<h3>Codebase Subtree Test</h3>';
echo '<p>We have an external Third Party Vendor lib which we will include as a Subtree</p>';

require('vendor/dummy/dummy/test.php');

$test = new Dummy\testClass('fred');
echo '<pre>' . print_r($test->getVal(), 1) . '</pre>';


