<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class FrontPage extends Controller
{

  static function get_interviews_data() {
    $descLength = 260;
    $size='medium';

    $args = array(
      'post_type' => 'interviews',
      'orderby' => 'date'
    );
    $the_query = new WP_Query( $args );

    if ( $the_query->have_posts() ) {
      $interviews_arr = array();
      $count = 0;

      while ( $the_query->have_posts() && $count < 5) {
        $the_query->the_post();

        $number = get_post_meta($the_query->post->ID, 'number', true);
        $title = get_the_title();
        $subtitle = get_post_meta($the_query->post->ID, 'subtitle', true);
        $lead = get_post_meta($the_query->post->ID, 'lead', true);
        if (strlen($lead) > $descLength) {
          $lead = mb_strimwidth($lead, 0, $descLength, "...", "UTF-8");
        }
        $image = get_the_post_thumbnail_url($the_query->post->ID, $size);

        $output = array(
          'link' => get_permalink(),
          'number' => $number,
          'title' => $title,
          'subtitle' => $subtitle,
          'lead' => $lead,
          'image' =>  $image,
        );

        array_push($interviews_arr, $output);
        $count ++;
      }
      wp_reset_postdata();
    }
    return $interviews_arr;
  }
}
