<?php

namespace App\Controller;

use App\Model\AdminModel;

class AdminController {

    public function index() {
        $this->getAllUser(); 
    }

    public function getAllUser() {
        $adminModel = new AdminModel();
        $users = $adminModel->getAllUsers();
        // echo '<pre>';
        // var_dump($users);
        // echo '</pre>';
        include_once '../app/View/dashboard/users.php';
    }
   
    // public function insertUser() {
    //     if(isset($_POST['insertUser'])){
    //         $username = $_POST['userName'];
    //         if(!empty($_FILES['userImage']['name']) ){
    //             $dir = "uploads/";
    //             $file = $dir .basename($_FILES["userImage"]["name"]);

    //             if(move_uploaded_file($_FILES["userImage"]["tmp_name"],  $file)){
    //                 $userimg= 'uploads/'. basename($_FILES["userImage"]["name"]);
    //             }
    //         }

    //         $adminmodel= new AdminModel();
    //         $adminmodel->setname($username);
    //         $adminmodel->seturlimg($userimg);
    //         if($adminmodel->insurtuser()){
    //             header("location: ?uri=admin/getAllUser");
    //         }

    //     }
       
    // }
   
}
