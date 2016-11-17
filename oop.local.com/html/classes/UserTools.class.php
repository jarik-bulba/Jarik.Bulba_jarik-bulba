<?php
require_once 'User.class.php';
require_once 'DB.class.php';

class UserTools{
    public function login($username, $password){
        $hashedPassword = md5($password);
        $result = mysqli_query("SELECT * FROM users WHERE username = '$username' && password = '$hashedPassword'");
        if(mysqli_num_rows($result) == true){
            $_SESSION["user"] = serialize(new User(mysqli_fetch_assoc($result)));
            $_SESSION["login_time"] = time();
            $_SESSION['logegged_in'] = true;
            return true;
        }else{
            return false;
        }
    }

    public function logout(){
        unset ($_SESSION['user']);
        unset ($_SESSION['login_time']);
        unset ($_SESSION['Logegged_in']);
        session_destroy();
    }

    public function checkUsernameExist($username){
        $result = mysqli_query("select id from users where username = '$username'");
        if(mysqli_num_rows($result) == false){
            return false;
        }else{
            return true;
        }
    }

    public function get($id){
        $db = new DB();
        $result = $db->select('users', "id = $id");
        return new User($result);
    }
}

?>

