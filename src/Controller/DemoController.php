<?php
/**
 * @file
 * Contains \Drupal\amazing_forms\Controller\DemoController.
 */

namespace Drupal\amazing_forms\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Render\RendererInterface;

/**
 * DemoController.
 */
class DemoController {
  /**
   * Generates an example page.
   */
  public function demo() {
  // Calling service
   $service = \Drupal::service('amazing_forms.demo_service');
  
  // getting config value
   $config = \Drupal::config('amazing_forms.settings');
   $email_address  = $config->get('amazing_forms.email_address');


    return array(
      '#markup' => t($service->getDemoValue()),
    );
  }      
}