<?php




include "../../properties/constants.php";

class connection{

    public static function getConnection(){
       

        $conn=mysqli_connect(constants::db_host,constants::db_user,constants::db_pass,constants::db_name);
        if (!$conn) {
        return NULL;
        }
        return $conn;

    }


}
?>