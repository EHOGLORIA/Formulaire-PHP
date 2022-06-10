
<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $message=$_POST['message'];
    $type=$_POST['type'];
    $priority=$_POST['priority'];

    $sql="insert into 'message' (name, message, type, priority)
    values ('$name', '$message', '$type', '$priority')";

    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }
    else {
        die(mysqli_error($con));
    }
}
?>




<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
</head>
<body>

    <h1>Contact</h1>

    <form action="process-form.php" method="post">

        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        
        <label for="message">Message</label>
        <textarea id="message" name="message"></textarea>

        <label for="priority">Priority</label>
        <select id="priority" name="priority">
            <option value="1">Low</option>
            <option value="2" selected>Medium</option>
            <option value="3">High</option>
        </select>

        <fieldset>
            <legend>Type</legend>

            <label>
                <input type="radio" name="type" value="1" checked>
                Complaint
            </label>

            <br>

            <label>
                <input type="radio" name="type" value="2">
                Suggestion
            </label>

        </fieldset>

        <label>
            <input type="checkbox" name="terms">
            I agree to the terms and conditions
        </label>

        <br>

        <button>Send</button>
        <a href="display.php">affichage</a>

    </form>

</body>
</html>