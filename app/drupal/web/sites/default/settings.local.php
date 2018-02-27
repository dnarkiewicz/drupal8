<?php


$databases['default']['default'] = array (
  'database'  => getenv('DRUPAL_DB_DATABASE'),
  'username'  => getenv('DRUPAL_DB_USERNAME'),
  'password'  => getenv('DRUPAL_DB_PASSWORD'),
  'prefix'    => getenv('DRUPAL_DB_PREFIX'),
  'host'      => getenv('DRUPAL_DB_HOST'),
  'port'      => getenv('DRUPAL_DB_PORT'),
  'namespace' => getenv('DRUPAL_DB_NAMESPACE'),
  'driver'    => getenv('DRUPAL_DB_DRIVER'),
  'collation' => getenv('DRUPAL_DB_COLLATION'),
);

$config_directories['sync'] = '../config';

$settings['hash_salt'] = 'SSSSALTYYYY';

/// S3 SETTINGS

  $settings['php_storage']['twig']['directory'] = '../storage/php';

  if ( getenv('DRUPAL_S3FS_USE_INSTANCE_PROFILE')!==false ) {
    $config['s3fs.settings']['use_instance_profile'] = getenv('DRUPAL_S3FS_USE_INSTANCE_PROFILE');
  }
  if ( getenv('DRUPAL_S3FS_DEFAULT_CACHE_CONFIG')!==false ) {
    $config['s3fs.settings']['default_cache_config'] = getenv('DRUPAL_S3FS_DEFAULT_CACHE_CONFIG');
  }
  if ( getenv('DRUPAL_S3FS_BUCKET')!==false ) {
    $config['s3fs.settings']['bucket'] = getenv('DRUPAL_S3FS_BUCKET');
  }
  if ( getenv('DRUPAL_S3FS_REGION')!==false ) {
    $config['s3fs.settings']['region'] = getenv('DRUPAL_S3FS_REGION');
  }
  if ( getenv('DRUPAL_S3FS_USE_CNAME')!==false ) {
    $config['s3fs.settings']['use_cname'] = (bool)getenv('DRUPAL_S3FS_USE_CNAME');
  }
  if ( getenv('DRUPAL_S3FS_DOMAIN')!==false ) {
    $config['s3fs.settings']['domain'] = getenv('DRUPAL_S3FS_DOMAIN');
  }
  if ( getenv('DRUPAL_S3FS_USE_CUSTOMHOST')!==false ) {
    $config['s3fs.settings']['use_customhost'] = (bool)getenv('DRUPAL_S3FS_USE_CUSTOMHOST');
  }
  if ( getenv('DRUPAL_S3FS_HOSTNAME')!==false ) {
    $config['s3fs.settings']['hostname'] = getenv('DRUPAL_S3FS_HOSTNAME');
  }
  if ( getenv('DRUPAL_S3FS_IGNORE_CACHE')!==false ) {
    $config['s3fs.settings']['ignore_cache'] = (bool)getenv('DRUPAL_S3FS_IGNORE_CACHE');
  }
  if ( getenv('DRUPAL_S3FS_ROOT_FOLDER')!==false ) {
    $config['s3fs.settings']['root_folder'] = getenv('DRUPAL_S3FS_ROOT_FOLDER');
  }
  if ( getenv('DRUPAL_S3FS_PUBLIC_FOLDER')!==false ) {
    $config['s3fs.settings']['public_folder'] = getenv('DRUPAL_S3FS_PUBLIC_FOLDER');
  }
  if ( getenv('DRUPAL_S3FS_PRIVATE_FOLDER')!==false ) {
    $config['s3fs.settings']['private_folder'] = getenv('DRUPAL_S3FS_PRIVATE_FOLDER');
    $settings['file_private_path'] = getenv('DRUPAL_S3FS_PRIVATE_FOLDER');
  }
  if ( getenv('DRUPAL_S3FS_USE_HTTPS')!==false ) {
    $config['s3fs.settings']['use_https'] = (bool)getenv('DRUPAL_S3FS_USE_HTTPS');
  }
  if ( getenv('DRUPAL_S3FS_ACCESS_KEY')!==false ) {
    $config['s3fs.settings']['access_key'] = getenv('DRUPAL_S3FS_ACCESS_KEY');
  }
  if ( getenv('DRUPAL_S3FS_SECRET_KEY')!==false ) {
    $config['s3fs.settings']['secret_key'] = getenv('DRUPAL_S3FS_SECRET_KEY');
  }
  if ( getenv('DRUPAL_S3FS_USE_S3_FOR_PUBLIC')!==false ) {
    $settings['s3fs.use_s3_for_public'] = (bool)getenv('DRUPAL_S3FS_USE_S3_FOR_PUBLIC');
  }
  if ( getenv('DRUPAL_S3FS_USE_S3_FOR_PRIVATE')!==false ) {
    $settings['s3fs.use_s3_for_private'] = (bool)getenv('DRUPAL_S3FS_USE_S3_FOR_PRIVATE');
  }

/// AKAMAI SETTINGS

