<?php
namespace Drupal\format\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Fax' block.
 *
 * @Block(
 *   id = "content_block",
 *   admin_label = @Translation("Content block"),
 * )
 */
class ContentBlock extends BlockBase {
  // Override BlockPluginInterface methods here.

    /**
   * {@inheritdoc}
   */
  public function build() {
    $view = \Drupal\views\Views::getView('block_1');
    // Get the results of the view.
    $view_result = $view->result;
    return [
      '#theme' => 'content_block',
    ];
  }

}


?>