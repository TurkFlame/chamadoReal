<?php

require_once "C:/xampp/htdocs/ChamadoReal/chamadoReal/src/models/User.php";

class LoginController{
    private $users;

    public function __construct(){
        $this->users = [];
        $this->users[] = new User(1, 'adm@teste.com.br', '1234', 1);
        $this->users[] = new User(2, 'user@teste.com.br', '1234', 2);
        $this->users[] = new User(3, 'jose@teste.com.br', '1234', 3);
    }

    public function autenticar($email, $password){
        foreach($this->users as $user){
            if(($user->email == $email) && password_verify($password,$user ->password)){
                $_SESSION['autenticar'] = 'SIM';
                $_SESSION['id'] = $user->id;
                $_SESSION['profile_id'] = $user->profile_id;
                header('Location: ../chamadoReal/src/view/home.php');
                exit;
            }
        }
        $_SESSION['autenticar'] == 'NAO';
        header('Location: index.php?login=erro');
        exit;
    }
}

?>