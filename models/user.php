<?php
class UserModel extends Model{
  public function register() {
        // Sanitaze POST arr
        $post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

        $password = md5($post['password']);

        if($post['submit']) {

          if($post['name'] == '' || $post['email'] == '' || $post['password'] == '') {
            Messages::setMsg('Please fill in all fields', 'error');
            return;
          }

          //insert into mysql
          $this->query('INSERT INTO users (name, email, password)VALUES(:name, :email, :password)');
          $this->bind(':name', $post['name']);
          $this->bind(':email', $post['email']);
          $this->bind(':password', $password);
          $this->execute();
          //verify
          if($this->lastInsertId()) {
            header('Location: '.ROOT_URL.'users/login');
          }
        }
        return;
      }

      public function login() {
      // Sanitaze POST arr
      $post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

      $password = md5($post['password']);

      if($post['submit']) {
        //insert into mysql
        $this->query('SELECT * FROM users WHERE email = :email AND password = :password');
        $this->bind(':email', $post['email']);
        $this->bind(':password', $password);
        
        $row = $this->single();

        if($row){
          $_SESSION['is_logged_in'] = true;
          $_SESSION['user_data'] = array(
            "id" => $row['id'],
            "name" => $row['name'],
            "email" => $row['email']
          );
          header('Location: '.ROOT_URL.'shares');
        } else {
          Messages::setMsg('Incorrect Login', 'error');
        }
      }
      return;
    }
  }
?>