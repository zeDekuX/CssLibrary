/*----------------------------------------------
BreadCrumps copy on function.php

<?php if (function_exists('custom_breadcrumbs')) {custom_breadcrumbs();}?> -> Home/.../...

------------------------------------------------ */

function custom_breadcrumbs() {
  $separator = ' / ';
  $home_title = 'Home';

  // Se non siamo sulla homepage
  if (!is_front_page()) {
      echo '<ul class="breadcrumbs ">';
      
      // Link alla homepage
      echo '<li><a href="' . get_home_url() . '" class="text-white text-decoration-none mx-1 ">' . $home_title . '</a></li>';
      echo '<li>' . $separator . '</li>';
      
      if (is_single()) { // Se è un articolo
          // Ottieni la categoria dell'articolo
          $category = get_the_category();
          if ($category) {
              $cat_name = $category[0]->cat_name;
              $cat_link = get_category_link($category[0]->term_id);
              echo '<li><a href="' . $cat_link . '" class="text-white text-decoration-none mx-1 fs-6 ">' . $cat_name . '</a></li>';
              echo '<li>' . $separator . '</li>';
          }
          echo '<li class="mx-1">' . get_the_title() . '</li>';
      } elseif (is_page()) { // Se è una pagina
          if ($post->post_parent) { // Se la pagina ha un genitore
              $parent_id  = $post->post_parent;
              $breadcrumbs = array();
              while ($parent_id) {
                  $page = get_page($parent_id);
                  $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '" class="text-white text-decoration-none mx-1 fs-6 ">' . get_the_title($page->ID) . '</a></li>';
                  $parent_id  = $page->post_parent;
              }
              $breadcrumbs = array_reverse($breadcrumbs);
              foreach ($breadcrumbs as $crumb) {
                  echo $crumb . '<li>' . $separator . '</li>';
              }
          }
          echo '<li class="mx-1">' . get_the_title() . '</li>';
      }
      echo '</ul>';
  }
}
