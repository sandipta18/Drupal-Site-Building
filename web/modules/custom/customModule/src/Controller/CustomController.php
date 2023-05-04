<?php
namespace Drupal\customModule\Controller;
use Drupal\Core\Controller\ControllerBase as ControllerControllerBase;

class CustomController extends ControllerControllerBase{

  public function customPage () {
    $content = [];
    $content['name'] = 'Example';
    return [
      "#type" => 'markup',
      '#markup' => $this->t(string: "This is a custom Module")
    ];
  }


}
