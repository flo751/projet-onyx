<?php 

class ChatModel extends Model{

    protected $dbh;

    public function __construct(){
        $this->dbh = new Model();
    }

    public function storemessage($message, $name, $color, $room, $time){
        
        $sql = "INSERT INTO messages(msg_text, msg_user_id, msg_date, msg_room_id,msg_color) VALUES(:msg_text,:msg_user_id,:msg_date,:msg_room_id,:msg_color)";
        $query = $this->dbh -> prepare($sql);
        $query ->bindParam(':msg_text',$message, PDO::PARAM_STR);
        $query ->bindParam(':msg_user_id',$name, PDO::PARAM_INT);
        $query ->bindParam(':msg_date',$time, PDO::PARAM_STR);
        $query ->bindParam(':msg_room_id',$room, PDO::PARAM_INT);
        $query ->bindParam(':msg_color',$color, PDO::PARAM_STR);
        $query -> execute();

    }

    public function getroom($room){
        $sql ="SELECT room_name FROM rooms WHERE room_id=$room";
        $query= $this->dbh->prepare($sql);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public function getlastmessage($room){
        $sql ="SELECT * FROM
        (SELECT msg_id, msg_text, msg_user_id, msg_date, msg_room_id, msg_color, user_name FROM messages 
        JOIN users
        ON messages.msg_user_id= users.user_id
        WHERE msg_room_id=$room
        ORDER BY msg_date DESC LIMIT 10)
        AS subquery
        ORDER BY msg_date ASC";
        $query = $this->dbh->prepare($sql);
        $query-> execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function getsearch($recherche){
        $query = $this->dbh->prepare("SELECT messages.msg_text,messages.msg_date,messages.msg_user_id,messages.msg_color,messages.msg_room_id, users.user_name, rooms.room_name
        FROM messages 
        JOIN users
        ON messages.msg_user_id = users.user_id
        JOIN rooms
        ON messages.msg_room_id = rooms.room_id
        WHERE MATCH (msg_text) AGAINST('$recherche')
        ORDER BY msg_date DESC");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }}
?>