<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <table>
        <tr>
            <th id="id">ID</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>email</th>
            <th>password</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php
        include_once 'userRepository.php';

        $userRepository = new UserRepository();

        $users = $userRepository->getAllUsers();

        foreach($users as $user){
            echo 
            "
            <tr>
                <td>$user[Id]</td>
                <td>$user[firstname]</td>
                <td>$user[lastname]</td>
                <td>$user[email]</td>
                <td>$user[password]</td>
                <td><a href='edit.php?=id=$user[Id]'>Edit</a></td>
                <td><a href='edit.php'>Delete</a></td>
                
            </tr>
            ";
        }
        ?>
    </table>
</body>
</html>

<body>
    
</body>