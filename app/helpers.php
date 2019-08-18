<?php

namespace App;

use Roots\Sage\Container;

/**
 * Get the sage container.
 *
 * @param string $abstract
 * @param array  $parameters
 * @param Container $container
 * @return Container|mixed
 */
function sage($abstract = null, $parameters = [], Container $container = null)
{
    $container = $container ?: Container::getInstance();
    if (!$abstract) {
        return $container;
    }
    return $container->bound($abstract)
        ? $container->makeWith($abstract, $parameters)
        : $container->makeWith("sage.{$abstract}", $parameters);
}

/**
 * Get / set the specified configuration value.
 *
 * If an array is passed as the key, we will assume you want to set an array of values.
 *
 * @param array|string $key
 * @param mixed $default
 * @return mixed|\Roots\Sage\Config
 * @copyright Taylor Otwell
 * @link https://github.com/laravel/framework/blob/c0970285/src/Illuminate/Foundation/helpers.php#L254-L265
 */
function config($key = null, $default = null)
{
    if (is_null($key)) {
        return sage('config');
    }
    if (is_array($key)) {
        return sage('config')->set($key);
    }
    return sage('config')->get($key, $default);
}

/**
 * @param string $file
 * @param array $data
 * @return string
 */
function template($file, $data = [])
{
    if (remove_action('wp_head', 'wp_enqueue_scripts', 1)) {
        wp_enqueue_scripts();
    }

    return sage('blade')->render($file, $data);
}

/**
 * Retrieve path to a compiled blade view
 * @param $file
 * @param array $data
 * @return string
 */
function template_path($file, $data = [])
{
    return sage('blade')->compiledPath($file, $data);
}

/**
 * @param $asset
 * @return string
 */
function asset_path($asset)
{
    return sage('assets')->getUri($asset);
}

/**
 * @param string|string[] $templates Possible template files
 * @return array
 */
function filter_templates($templates)
{
    $paths = apply_filters('sage/filter_templates/paths', [
        'views',
        'resources/views'
    ]);
    $paths_pattern = "#^(" . implode('|', $paths) . ")/#";

    return collect($templates)
        ->map(function ($template) use ($paths_pattern) {
            /** Remove .blade.php/.blade/.php from template names */
            $template = preg_replace('#\.(blade\.?)?(php)?$#', '', ltrim($template));

            /** Remove partial $paths from the beginning of template names */
            if (strpos($template, '/')) {
                $template = preg_replace($paths_pattern, '', $template);
            }

            return $template;
        })
        ->flatMap(function ($template) use ($paths) {
            return collect($paths)
                ->flatMap(function ($path) use ($template) {
                    return [
                        "{$path}/{$template}.blade.php",
                        "{$path}/{$template}.php",
                        "{$template}.blade.php",
                        "{$template}.php",
                    ];
                });
        })
        ->filter()
        ->unique()
        ->all();
}

/**
 * @param string|string[] $templates Relative path to possible template files
 * @return string Location of the template
 */
function locate_template($templates)
{
    return \locate_template(filter_templates($templates));
}

/**
 * Determine whether to show the sidebar
 * @return bool
 */
function display_sidebar()
{
    static $display;
    isset($display) || $display = apply_filters('sage/display_sidebar', false);
    return $display;
}

function pagination($post_length, $pages = '', $range = 4){
     global $paged; //現在のページの値
     if( empty($paged) ){  //デフォルトのページ
         $paged = 1;
     }
 
     $posts_per_page = get_option('posts_per_page');
     $page_number_max = ceil($post_length / $posts_per_page);
 
     if( $pages == '' ){
         $pages = $page_number_max;  //全ページ数を取得
         if( !$pages ){ //全ページ数が空の場合は、1にする
             $pages = 1;
         }
     }
 
 
 
     if( 1 != $pages ){  //全ページ数が1以外の場合は以下を出力する
 //        echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
 //        if( $paged > 2 && $paged > $range+1 && $showItems < $pages ){
 //            echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
 //        }
 //        if( $paged > 1 && $showItems < $pages ){
 //            echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 //        }
         for ($i=1; $i <= $pages; $i++){
 //            if ( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showItems ){
 //                echo ($paged == $i)? "<span class=\"pagination-item current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"pagination-item inactive\">" . $i . "</a>";
 //            }
             echo ($paged == $i) ? "<span class=\"pagination-item current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"pagination-item inactive\">" . $i . "</a>";
         }
 
 //        if ( $paged < $pages && $showItems < $pages ){
 //            echo "<a class='pagination-item' href=\"".get_pagenum_link($paged + 1)."\">&rsaquo;</a>";
 //        }
 //        if ( $paged < $pages-1 &&  $paged+$range-1 < $pages && $showItems < $pages ){
 //            echo "<a class='pagination-item' href='".get_pagenum_link($pages)."'>&raquo;</a>";
 //        }
 //        echo "</div>\n";
     }
 }