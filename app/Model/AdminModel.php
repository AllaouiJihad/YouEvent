<?php

namespace App\Model;

use PDO;
use PDOException;
use App\Database\Database;

class AdminModel {
    private $db;
    private $name;
 

    public function __construct() {
        $this->db = new Database();
    }

    public function setname($name) {
        $this->name = $name;
    }

    public function getname() {
        return $this->name;
    }

 

    public function getAllUsers() {
        $conn = $this->db->getConnection();
        $sql = "SELECT * FROM `users`";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        if ($result) {
            return $result;
        }
    }
   
    public function insurtuser(){
        $conn = $this->db->getConnection();
        $query="INSERT INTO users ( `name`, `image_url`) VALUES (? , ?)";
        $stmt = $conn->prepare($query);
        $res=  $stmt->execute([$this->getname() , $this->geturlimg()]);
       if ($res) { 
        return true ; 
    } else {
         return false;
         }
    }
}
