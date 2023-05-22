<?php 

class ChatController{

    private $ochatModel;

    public function __construct(){
        $this->ochatModel = new ChatModel();
    }

    public function ChatIndex(){
        $params = explode('/', $_GET['action']);
        $room = $params[2];
        $historique = $this->ochatModel->getlastmessage($room);
        $titre = $this->ochatModel->getroom($room);

        if(isset($_POST['message'])){
            $message= $_POST['message'];
            $name= $_SESSION['user_id'];
            $color= $_POST['color'];
            $room= $_POST['room'];
            $time= date("Y-m-d h:i:s");

            $this->ochatModel->storemessage($message, $name, $color, $room, $time);
        }
        require_once(ROOT . '/views/chat/chatView.php');
       
    }

  public function ShearIndex(){
    
    if(isset($_POST['message'])){
      $recherche = $_POST['message'];
      $resultat= $this->ochatModel->getsearch($recherche);
    }
    require_once(ROOT . '/views/chat/searchView.php');
  }
}
?>