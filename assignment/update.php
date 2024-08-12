<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `hw` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$password=$row['password'];
$confirmpassword=$row['confirmpassword'];
$gender=$row['gender'];
$dof=$row['dof'];
$address=$row['address'];


if(isset($_POST['submit'])){
    $name=$_POST['fullName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmPassword'];
    $gender=$_POST['gender'];
    $dof=$_POST['dateOfBirth'];
    $address=$_POST['address'];

$sql = "update `hw` set id=$id,name='$name',email='$email',password='$password',confirmpassword='$confirmpassword',gender='$gender',dof='$dof',address='$address' where id=$id";
$result = mysqli_query($conn,$sql);
if($result){
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
    background-color: black;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

    </style>
</head>
<body>
    <h1>Update the User information:</h1>
    <form method = "post">
        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName" value=<?php echo $name;  ?>  required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value=<?php echo $email ?> required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value=<?php echo $password ?> required>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" value=<?php echo $confirmpassword  ?> required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" value=<?php echo $gender ?> required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <label for="dateOfBirth">Date of Birth:</label>
        <input type="date" id="dateOfBirth" name="dateOfBirth" value=<?php echo $dof ?> required>

        <label for="address">Address:</label>
        <textarea id="address" name="address" value=<?php echo $address ?> required></textarea>

        <input type="submit" value="Update" name="submit">
    </form>
</body>
</html>