<?php 
/**
* The main template file For Homepage
*
* Template Name:Home
*
* @package WordPress
* @subpackage macd
* @since 1.0
* @version 1.0
*/
/*
get_header();

    // echo "Hii";
if (have_posts()) {
  while(have_posts()) {

    the_post();
    get_template_part('template-parts/content', 'archieve');

  }
} 

get_footer(); ?>
*/

get_header();

  get_template_part('template-parts/content', 'redoverlay');
  get_template_part('template-parts/content', 'news');
  get_template_part('template-parts/content', 'recent');

get_footer(); ?>