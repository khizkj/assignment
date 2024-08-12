<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <button class="btn btn-dark my-3"><a href="index.php" class="text-light">Add a User:</a></button>
        <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Confirm Password</th>
      <th scope="col">Gender</th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">Address</th>
      <th scope="col">Update/Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "Select * from `hw`";
    $result = mysqli_query($conn,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $password = $row['password'];
            $confirmpassword = $row['confirmpassword'];
            $gender = $row['gender'];
            $dof = $row['dof'];
            $address = $row['address'];
            echo'<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$password.'</td>
      <td>'.$confirmpassword.'</td>
      <td>'.$gender.'</td>
      <td>'.$dof.'</td>
      <td>'.$address.'</td>
      <td>
    <button class="btn btn-info"><a href="update.php?updateid='.$id.'" class = "text-light">Update</a></button>
    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class ="text-light">Delete</a></button>
    <td>
    <tr>';
        }
    }

    ?>


  </tbody>
</table>
    </div>

    




<script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</script>
    
</body>
</html>