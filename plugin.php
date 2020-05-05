<?php
/**
 * Plugin Name: WPGraphQL Cache
 * Plugin URI: https://github.com/valu-digital/wp-graphql-cache
 * Description: Add caching for WPGraphQL
 * Author: Esa-Matti Suuronen, Valu Digital Oy
 * Version: 0.1.0
 */

namespace WPGraphQL\Extensions\Cache;

CacheManager::init();

// Cache::register_graphql_field_cache( [
// 	'group' => 'ding',
// 	'queryName' => 'Dongs',
// 	'fieldName' => 'menuItems',
// 	'expire' => 60 * 5,
// ] );
