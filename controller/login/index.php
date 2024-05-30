<?php

$conn = new Database();

if(!empty($_POST))
{
    try {

        $result = $conn->query("SELECT * FROM users WHERE email = :email", [
            'email' => $_POST['log_email']
        ])->fetch();

        if($result['email'] == $_POST['log_email'] && $result['password'] == $_POST['log_password'])
        {
            echo 'You login successfully';
            die();
        }else {
            echo 'You wrong password';
            die();
        }

    }catch (Exception $e)
    {
        echo $e;
        die();
    }
}


require 'View/login.html';