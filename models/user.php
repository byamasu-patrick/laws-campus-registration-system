<?php

include_once('../db/db_conn.php');
class User extends Connection{
    // pro $db;
    public function __construct(){   
       parent::__construct();
        // var_dump($conn); 
    }
    /* Setting up user account */
    public function create($data){
        try {
            $sql_stmt = "INSERT INTO user(reg_num, username, password, account_type) VALUES ('". $data['reg_num'] ."', '". $data['username'] ."', '". $data['password'] ."', '". $data['account_type'] ."')";
            //var_dump(mysqli_query($this->db, $sql_stmt));
            if (!mysqli_query($this->db, $sql_stmt)) {
                echo "An error has occured while saving into the database";  
                return FALSE;              
            }
            return TRUE;

        } catch (\Throwable $th) {
            echo $th->getMessage();
            return FALSE;
        }
    }
    public function get_user($data){
        try {
            $sql_stmt = "SELECT * FROM user WHERE reg_num = '". $data['reg_num'] ."' AND password = '". $data['password'] ."'";

            $user_info = mysqli_query($this->db, $sql_stmt);
            if ($user_info) {
                $user_data = mysqli_fetch_assoc($user_info);
                return $user_data;
            }
            return NULL;
            
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}