<?php

 include 'connect.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableau d'affichage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
<button class="boutton my-5"> <a href="process-form.php" class="text-light">Add user</a>
</button>

<table class="table">
    <thead>
        <tr>
           <th scope="col">id</th>
           <th scope="col">Name</th>
           <th scope="col">Message</th>
           <th scope="col">Type</th>
           <th scope="col">Priority</th>
           <th scope="col">Opération</th>

        </tr>
    </thead>

    
    <?php

$sql="select * from message ";
$result=mysqli_query($conn,$sql);
if($result) {
    
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $message=$row['body'];
        $type=$row['type'];
        $priority=$row['priority'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$message.'</td>
        <td>'.$type.'</td>
        <td>'.$priority.'</td>
        <td>'.$operation.'</td>
        
        <td>
          <button class="btn btn-primary" > <a href="update.php?Id='.$id.' "class="text-light"> Update </a></button>
          <button class="btn btn-danger" > <a href="delete.php?Id='.$id.' " class="text-light">Delete</a></button>
      </td>

    </tr>';
    }
}
      ?>

      

    <!-- <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Alice</td>
            <td></td>
            <td>Suggestion</td>
            <td>Oui</td>
            <td>Modifier</td>
            
        </tr>

        <tr>
            <th scope="row">2</th>
            <td>Florence</td>
            <td></td>
            <td>Suggestion</td>
            <td>Oui</td>
            <td>Modifier</td>
        </tr>

        <tr>
            <th scope="row">3</th>
            <td>Pascal</td>
            <td></td>
            <td>Complaint</td>
            <td>Oui</td>
            <td>Modifier</td>
        </tr>

        <tr>
            <th scope="row">4</th>
            <td>Priscille</td>
            <td></td>
            <td>Suggestion</td>
            <td>Oui</td>
            <td>Modifier</td>
        </tr>

        <tr>
            <th scope="row">5</th>
            <td>Samson</td>
            <td></td>
            <td>Complaint</td>
            <td>Oui</td>
            <td>Modifier</td>
        </tr>
 -->

    </tbody>
</table>
</div>
</body>
</html>