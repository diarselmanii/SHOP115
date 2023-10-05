<?php
include_once 'userRepository.php';

$userId = $_GET['ID'];

$userRepository = new UserRepository();

$user = $userRepository->getUserById($userId);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
</div>
    <div class="form">
   <form action="" method="post">
    <input type="text" name="Id" value="<?= $user['id'] ?>" readonly> <br> <br>
    <input type="text" name="firstname" value="<?= $user['firstname'] ?>"> <br> <br>
    <input type="text" name="lastname" value="<?= $user['lastname'] ?>"> <br> <br>
    <input type="text" name="email" value="<?= $user['email'] ?>"> <br> <br>
    <input type="text" name="password" value="<?= $user['password'] ?>"> <br> <br>

    <input type="submit" value="saveBtn" value="save"><br><br>
   </form>
  
</div>


</body>

</html>