<?php
require_once 'DB.class.php';

class User{
    public $id;
    public $username;
    public $hashedPassword;
    public $email;
    public $joinDate;

    function __construct($date){
        $this->id = (isset($date['id'])) ? $date['id'] : "";
        $this->username = (isset($date['username'])) ? $date['username'] : "";
        $this->hashedPassword = (isset($date['password'])) ? $date['password'] : "";
        $this->email = (isset($date['email'])) ? $date['email'] : "";
        $this->joinDate = (isset($date['join_date'])) ? $date['join_date'] : "";
    }

    public function save($isNewUser = false){
        $db = DB();

        if(!$isNewUser) {
            $date = array(
                "username" => "'$this->username'",
                "password" => "'$this->password'",
                "email" => "'$this->email'",
            );
            $db->update($data, 'users', 'id = ' . $this->id);
        }else{
            $date = array(
                "username"  => "'$this->username'",
                "password"  => "'$this->hashedPassword'",
                "email"     => "'$this->email'",
                "join_date" => "'".date("Y-m-d H:i:s",time())."'"
            );
            $this->id = $db->insert($data, 'users');
            $this->joinDate = time();
        }
        return true;
    }
}
?>

