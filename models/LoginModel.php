<?php 

class LoginModel extends Model{

    protected $dbh;

    public function __construct(){
        $this->dbh = new Model();
    }

    public function existUser(){
        $pseudo = $this->validation($_POST['pseudo']);
        $pwd = password_hash($_POST['password'],PASSWORD_DEFAULT);

        $sql = "SELECT * FROM users WHERE user_name= :user_name ";
        $query = $this->dbh->prepare($sql);
        $query->bindParam(':user_name',$pseudo, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if(!empty($result) && password_verify($_POST['password'], $result['user_password'])){
            $_SESSION=$result;
            return $result['user_id'];
        // }else{
        //     echo "id ou mdp incorrecte";
        }
    }

    public function signup(){
    
    $name = $this->validation($_POST['pseudo']);
    $email = $this->validation($_POST['EmailId']);
    $mdp = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $sql = "INSERT INTO users(user_name, user_password, user_email) VALUES(:user_name, :user_password, :user_email)";
        $query = $this->dbh -> prepare($sql);
        $query ->bindParam(':user_name',$name, PDO::PARAM_STR);
        $query ->bindParam(':user_password',$mdp, PDO::PARAM_STR);
        $query ->bindParam(':user_email',$email, PDO::PARAM_STR);
        $query -> execute();
    
    $last_id = $this->dbh ->lastInsertId();
    if(!empty($last_id)){
        echo "<script> alert('cest ok');</script>";
       }
    // Sinon on affiche qu'il y a eu un problème
    else{
       echo "<script> alert('cest pas ok');</script>";
       }
    }


    public function forgotPassword(){

        $email = $this->validation($_POST['EmailId']);        
        $mdp = password_hash($_POST['password'],PASSWORD_DEFAULT);

        $sql = "SELECT * FROM users WHERE user_email= :EmailId";
        $query = $this->dbh -> prepare($sql);
            $query ->bindParam(':EmailId',$email, PDO::PARAM_STR);
            $query -> execute();
        // Si le resultat de recherche n'est pas vide
        $result = $query->fetch(PDO::FETCH_OBJ);

        if($result){
            $sql = "UPDATE users SET user_password= :user_password";
                $query = $this->dbh-> prepare($sql);
                $query ->bindParam(':user_password',$mdp, PDO::PARAM_STR);
                $query -> execute();

                echo  "<script> alert mdp modifier;</script>";
                }else{
                     echo "<script> alert mdp non changé;</script>";
        }}

}
   

    
?>