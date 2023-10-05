<?php 
include_once 'userRepository.php';
include_once 'user.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['firstname']) || empty($_POST['lastname'])  || empty($_POST['email']) || empty($_POST['password'])){
        echo 'Fill all fields';
    }else{
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = $firstname.rand(100,999);

        $user = new User ($id,$firstname,$lastname,$email,$password);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);
        
    }

}

?>