<?php
function gavias_charityplus_render_block($key) {
  $block = \Drupal\block\Entity\Block::load($key);
  if($block){
  $block_content = \Drupal::entityManager()
    ->getViewBuilder('block')
    ->view($block);
    return drupal_render($block_content);
  }  
  return '';
}

function gavias_charityplus_makeid($length = 5){
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, strlen($characters) - 1)];
  }
  return $randomString;
}


function gavias_charityplus_base_url(){
  global $base_url;
  $theme_path = drupal_get_path('theme', 'gavias_charityplus');
  return $base_url . '/' . $theme_path . '/';
}

function gavias_charityplus_preprocess_node(&$variables) {
  $date = $variables['node']->getCreatedTime();
  $variables['date'] = date( 'j F Y', $date);
  
  if ($variables['teaser'] || !empty($variables['content']['comments']['comment_form'])) {
    unset($variables['content']['links']['comment']['#links']['comment-add']);
  }
  if ($variables['node']->getType() == 'article') {
      $node = $variables['node'];
      $variables['comment_count'] = $node->get('comment')->comment_count;
      $post_format = 'standard';
      try{
         $field_post_format = $node->get('field_post_format');
         if(isset($field_post_format->value) && $field_post_format->value){
            $post_format = $field_post_format->value;
         }
      }catch(Exception $e){
         $post_format = 'standard';
      }

      $iframe = '';
      if($post_format == 'video' || $post_format == 'audio'){
         try{
            $field_post_embed = $node->get('field_post_embed');
            if(isset($field_post_embed->value) && $field_post_embed->value){
               $autoembed = new AutoEmbed();
               $iframe = $autoembed->parse($field_post_embed->value);
            }else{
               $iframe = '';
               $post_format = 'standard';
            }
         }
         catch(Exception $e){
            $post_format = 'standard';
         }
      }
      $variables['gva_iframe'] = $iframe;
      $variables['post_format'] = $post_format;
  }
}

function gavias_charityplus_preprocess_node__portfolio(&$variables){
  $node = $variables['node'];
  
  // Override lesson list on single course
  $output = '';
  $count_information = 0;
  if($node->hasField('field_portfolio_information')){
    $informations = $node->get('field_portfolio_information');
    $count_information = count($informations);
    foreach ($informations as $key => $information) {
      $texts = preg_split('/--/', $information->value);
        $information_text = '';
        foreach ($texts as $k => $text) {
          $information_text .= '<span>' . $text . '</span>';
        }
      $output .= '<div class="item-information">' . $information_text . '</div>';
    }
  }
  $variables['count_information'] = $count_information;
  $variables['informations'] = $output;
}


function gavias_charityplus_preprocess_breadcrumb(&$variables){
  $variables['#cache']['max-age'] = 0;
  
  $request = \Drupal::request();
  $title = '';
  if ($route = $request->attributes->get(\Symfony\Cmf\Component\Routing\RouteObjectInterface::ROUTE_OBJECT)) {
    $title = \Drupal::service('title_resolver')->getTitle($request, $route);
  }

  if($variables['breadcrumb']){
     foreach ($variables['breadcrumb'] as $key => &$value) {
      if($value['text'] == 'Node'){
        unset($variables['breadcrumb'][$key]);
      }
    }
    if($node = \Drupal::routeMatch()->getParameter('node')){
      if($node->getType() == 'article'){
        $variables['breadcrumb'][] = array(
          'text' => ''
        );
        $variables['breadcrumb'][] = array(
          'text' => 'Article'
        );
      } 
      if($node->getType() == 'course'){
        $variables['breadcrumb'][] = array(
          'text' => ''
        );
        $variables['breadcrumb'][] = array(
          'text' => 'Course'
        ); 
      }
      if($node->getType() == 'event'){
        $variables['breadcrumb'][] = array(
          'text' => ''
        );
        $variables['breadcrumb'][] = array(
          'text' => 'Event'
        );
      }
      if($node->getType() == 'portfolio'){
        $variables['breadcrumb'][] = array(
          'text' => ''
        );
        $variables['breadcrumb'][] = array(
          'text' => 'Portfolio'
        );
      }
    }else{
      if(!empty($title)){
        $variables['breadcrumb'][] = array(
          'text' => ''
        );
        $variables['breadcrumb'][] = array(
          'text' => $title
        );  
      }  
    }
  }
}