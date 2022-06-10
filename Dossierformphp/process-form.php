
<?php include 'connect.php'; ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class=" container">
    <!-- <form method="post">

    <div class="form-group">
    <label for="Name"></label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" >
    </div>

    <div class="form-group">
    <label for="message"></label>
    <input type="email" class="form-control" placeholder="Message" name="message" >
    </div>


    <div class="form-group">
    <label for="priority"></label>
    <input type="text" class="form-control" placeholder=" Your priority" name="priority" >
    </div>

    <div class="form-group">
    <label for="type"></label>
    <input type="text" class="form-control" placeholder=" Your type" name="type" >
    </div>
    <button>submit</button>
    </div>
    </form> -->
</body>
</html>

<?php

$name = $_POST["name"];
$message = $_POST["message"];
$priority = filter_input(INPUT_POST, "priority", FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, "type", FILTER_VALIDATE_INT);
$terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOL);

if ( ! $terms) {
    die("Terms must be accepted");
}   

          
        
$sql = "INSERT INTO message (name, body, priority, type)
        VALUES (?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssii",
                       $name,
                       $message,
                       $priority,
                       $type);

mysqli_stmt_execute($stmt);

echo "Record saved.";


$sql = "DELETE FROM message_db WHERE id=1";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }

  $sql = "UPDATE message_db SET name='eho gloria' WHERE id=2";
?>




