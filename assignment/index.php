<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['fullName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmPassword'];
    $gender=$_POST['gender'];
    $dof=$_POST['dateOfBirth'];
    $address=$_POST['address'];

$sql = "insert into `hw`(`id`, `name`, `email`, `password`, `confirmpassword`, `gender`, `dof`, `address`) VALUES ('[value-1]','$name','$email','$password','$confirmpassword','$gender','$dof','$address')";
$res = mysqli_query($conn,$sql);
 if($res){
    header('location:display.php');
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
    body {
    font-family: Arial, sans-serif;
    text-align: center;
    margin: 50px;
}

form {
    width: 400px;
    margin: 0 auto;
    border: 1px solid #ccc;
    padding: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}
img{
    width: 25px;
    cursor: pointer;
    float: right;
}

input[type="text"],
input[type="email"],
input[type="password"],
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

    </style>
</head>
<body>
    <h1>User Personal Information:</h1>
    <form method = "post">
        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <label for="dateOfBirth">Date of Birth:</label>
        <input type="date" id="dateOfBirth" name="dateOfBirth" required>

        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea>

        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>