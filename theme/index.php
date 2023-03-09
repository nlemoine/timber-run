<?php

use Timber\Timber;

$context          = Timber::context();
$context['posts'] = Timber::get_posts();
$context['foo']   = 'bar';
$templates        = ['index.twig'];
Timber::render($templates, $context);
