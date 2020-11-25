<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Entry Results</title>
</head>
<body>
    <h1>Book Entry Results</h1>
    <?php
    // TODO 3: Setup a connection to the appropriate database.
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "publications";
    $conn=new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // TODO 1: Create short variable names.
    // TODO 2: Check and filter data coming from the user.
    if(isset($_POST['submit'])){
        $isbn=$_POST['isbn'];
        $author=$_POST['author'];
        $title=$_POST['title'];
        $price=$_POST['price'];
    

    // TODO 4: Query the database.
    $sql="INSERT INTO catalogs('isbn','author','title','price') VALUES ('$isbn','$author','$title','$price')";
    // TODO 5: Display the feedback back to user.
    echo "Data Successfully Inserted";
}
    // TODO 6: Disconnecting from the database.
    $conn->close();
    ?>
</body>
</html>