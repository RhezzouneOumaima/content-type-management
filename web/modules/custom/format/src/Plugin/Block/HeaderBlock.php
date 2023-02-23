<?php
namespace Drupal\format\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Fax' block.
 *
 * @Block(
 *   id = "header_block",
 *   admin_label = @Translation("Header block"),
 * )
 */
class HeaderBlock extends BlockBase {
  // Override BlockPluginInterface methods here.

    /**
   * {@inheritdoc}
   */
  public function build() {
   
    $path = 'public://images/ed.png';
    $url = \Drupal\image\Entity\ImageStyle::load('medium')->buildUrl($path);
    return [
      '#theme' => 'header_block',
      '#data' => ['url' => $url],
        ];
  }

}


?>