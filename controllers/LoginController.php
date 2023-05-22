<?php 

class LoginController{

    private $ologinModel;

    public function __construct(){
        $this->ologinModel = new LoginModel();
    }

    public function loginIndex(){

        if(isset($_POST['login'])){
            $uid = $this->ologinModel->existUser($_POST);

            if($uid > 0){
                header('location:../projet-onyx/chat/chatIndex/1');
            }
        }
        require_once(ROOT . '/views/login/loginView.php');
    }

    public function signup(){

        if(isset($_POST['signup'])){
            $userId = $this->ologinModel->signup();
            header('location: ../login/LoginIndex');
        }
        require_once(ROOT . '/views/login/SignupView.php');
    }

    public function forgotPassword(){

        if(isset($_POST['login'])){
            $pwd = $this->ologinModel->forgotPassword();
            header('location: ../login/LoginIndex');
        }
        require_once(ROOT . '/views/login/ForgotPasswordView.php');
    }
}