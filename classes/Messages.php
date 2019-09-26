<?php 
class Messages {
  public static function setMsg($text, $type) {
    if($type == 'error') {
      $_SESSION['errorMsg'] = $text;
    } else {
      $_SESSION['successMSG'] = $text;
    }
  }
  
  public static function display() {
    if(isset($_SESSION['errorMsg'])) {
      echo '<div>' .$_SESSION['errorMsg']. '</div>';
      unset($_SESSION['errorMsg']);
    }

    if(isset($_SESSION['successMsg'])) {
      echo '<div>' .$_SESSION['successMsg']. '</div>';
      unset($_SESSION['successMsg']);
    }
  }
}
?>