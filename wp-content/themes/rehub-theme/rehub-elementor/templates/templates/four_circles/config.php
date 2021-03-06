<?php

if ( ! defined('ABSPATH') ) {
    exit('restricted access');
}

return [
    'id'               => 'four_circles',
    'title'            => esc_html__('Four circles with icons', 'rehub-theme'),
    'thumbnail'        => $local_dir_url . 'thumbnail.jpg',
    'tmpl_created'     => time(),
    'author'           => 'WPSM',
    'url'              => $ext_dir_url . 'four-circle',
    'type'             => 'block',
    'subtype'          => 'wpsm',
    'tags'             => ['projects', 'circles'],
    'menu_order'       => 0,
    'popularity_index' => 10,
    'trend_index'      => 1,
    'is_pro'           => 0,
    'has_page_settings'=> 0
];
