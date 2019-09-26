<?php
class Bootstrap{
  private $controller;
  private $action;
  private $request;

  public function __construct($request){
    $this->request = $request;
    if($this->request['controller'] == "") {
        $this->controller = 'home';
    } else {
        $this->controller = $this->request['controller'];
    }
    if($this->request['action'] == ""){
      $this->action = 'index';
    } else {
      $this->action = $this->request['action'];
    }
  }
  public function createController() {
    // check for class
    if(class_exists($this->controller)){
      $parents = class_parents($this->controller);

      if(in_array("Controller", $parents)) {
        if(method_exists($this->controller, $this->action)){
          return new $this->controller($this->action, $this->request);
        }else {
          // Method not found
          echo '<h1>Metohod dont exist</h1>';
          return;
        }
      } else {
        // base controler not found
        echo '<h1>base controler dont exist</h1>';
          return;
      }
    } else {
      //  controler class not found
      echo '<h1>controler class dont exist</h1>';
      return;
    }
  }
}

?>