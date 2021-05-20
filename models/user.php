<?php

class UserModel extends Model
{
    public function register()
    {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $password = md5($post['password']);

        if($post['submit']):
            if($post['username'] == "" or $post['email'] == "" or $post['password'] == ""):
                Messages::setMsg("Please fill in all fields", "error");
                return;
            endif;
            $this->query('INSERT INTO users(username, email, password) VALUES(:username, :email, :password);');
            $this->bind(':username', htmlspecialchars($post['username']));
            $this->bind(':email', htmlspecialchars($post['email']));
            $this->bind(':password', $password);
            $this->execute();

            if($this->lastInsertId()):
                header('Location: '. ROOT_URL .'users/login');
            endif;
        endif;
        return ;
    }

    public function login()
    {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $password = md5($post['password']);

        if ($post['submit']):
            $this->query('SELECT * FROM users WHERE email = :email AND password = :password;');
            $this->bind(':email', htmlspecialchars($post['email']));
            $this->bind(':password', $password);
            $row = $this->single();

            if ($row) {
                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = array(
                    "id" => $row['id'],
                    "username" => $row['username']
                );
                header('Location: ' . ROOT_URL . 'shares');
            } else {
                Messages::setMsg('Incorrect Login', 'error');
            }

        endif;
        return;
    }
}