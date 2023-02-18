<?php

namespace Drupal\post\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for building the block instance add form.
 */
class PostController extends ControllerBase {

  /**
   * Build the block instance add form.
   *
   * @param string $plugin_id
   *   The plugin ID for the block instance.
   * @param string $theme
   *   The name of the theme for the block instance.
   *
   * @return array
   *   The block instance edit form.
   */
  public function post(){
    // $node = \Drupal::entityManager()->getStorage('node')->load($nid);
    // dd($node);

    $nids = \Drupal::entityQuery('node')->condition('type','article')->execute();
    
$nodes =  \Drupal\node\Entity\Node::loadMultiple($nids);
dd($nodes);


  }
    

}