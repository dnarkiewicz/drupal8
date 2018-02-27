<?php

$settings['trusted_host_patterns'] = array('.*');
$settings['container_yamls'][] = DRUPAL_ROOT .'/sites/development.services.yml';

$settings['cache']['bins']['render']             = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
$settings['system.performance']['css']['preprocess'] = FALSE;
$settings['system.performance']['js']['preprocess']  = FALSE;
$settings['system.logging']['error_level']  = 'verbose';
