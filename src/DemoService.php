<?php

/**
 * @file
 * Contains Drupal\amazing_forms\DemoService.
 */

namespace Drupal\amazing_forms;

class DemoService {
  
  protected $demo_value;
  
  public function __construct() {
    $this->demo_value = 'Upchuk';
  }
  
  public function getDemoValue() {
    return $this->demo_value;
  }
  
}