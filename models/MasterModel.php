<?php
class  MasterModel{
    public  function Get_All($table){
        $db= database::connect();
        $sql="SELECT * FROM $table";
        $stmt=$db->prepare($sql);
        $stmt->execute();
        $result=$stmt ->FetchALL(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $result;
    }
    public  function delete($table,$colume,$value){
        $db= database::connect();
        $sql="DELETE FROM $table WHERE $colume =$value";
        $stmt=$db->prepare($sql);
        $stmt->execute();
        $result=$stmt ->FetchALL(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $result;
    }
    public function Login ($email,$pass){
        $db= database::connect();
        $sql="SELECT * FROM users WHERE email='$email' and password ='$pass'";
        $stmt=$db->prepare($sql);
        $stmt->execute();
        $result=$stmt ->Fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $result;
    }
}










?>

