<?php

class ShareModel extends Model
{
    public function Index()
    {
        $this->query('SELECT * FROM shares ORDER BY created_date DESC');
        return $this->resultSet();
    }

    public function add(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($post['submit']):
            $this->query('INSERT INTO shares(title, body, link, user_id) VALUES(:title, :body, :link, :user_id);');
            $this->bind(':title', htmlspecialchars($post['title']));
            $this->bind(':body', htmlspecialchars($post['body']));
            $this->bind(':link', htmlspecialchars($post['link']));
            $this->bind(':user_id', $_SESSION['user_data']['user_id']);
            $this->execute();

            if($this->lastInsertId()):
                header('Location: '. ROOT_URL .'shares');
            endif;
        endif;
        return ;
    }
}