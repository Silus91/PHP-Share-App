<?php
class ShareModel extends Model{
  public function Index() {
    $this->query('SELECT * FROM shared ORDER BY date DESC');
    $rows = $this->resultSet();
    return $rows;
  }

  public function add(){
    // Sanitaze POST arr
    $post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

    if($post['submit']) {
      //Compare login and pass

      if($post['title'] == '' || $post['body'] == '' || $post['link'] == '') {
        Messages::setMsg('Please fill in all fields', 'error');
        return;
      }

      $this->query('INSERT INTO shared (title, body, link, user_id) VALUES (:title, :body, :link, :user_id)');
      $this->bind(':title', $post['title']);
      $this->bind(':body', $post['body']);
      $this->bind(':link', $post['link']);
      $this->bind(':user_id', 3);

      $this->execute();
      //verify
      if($this->lastInsertId()) {
        header('Location: '.ROOT_URL.'shares');
      }
    }
    return;
  }
}
?>