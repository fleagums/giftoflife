<?php

/**
 * @file
 * template.php
 */

function bootstrap_giftoflife_preprocess_html(&$variables) {
    drupal_add_css(
        'http://fonts.googleapis.com/css?family=Josefin+Sans',
        array('type' => 'external')
    );
}
