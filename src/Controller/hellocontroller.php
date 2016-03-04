<?php
/**
 * @file
 * Contains \Drupal\hello\hellocontroller.
 */

namespace Drupal\hello;


use Drupal\Core\Controller\ControllerBase;


class hellocontroller extends ControllerBase {
  public function content() {
    return array(
        '#markup' => '' . t('Hello there!') . '',
    );
  }
}
