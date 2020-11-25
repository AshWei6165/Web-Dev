<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Search Results</title>
</head>
<body>
    <h1>Book Search Results</h1>
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
        $searchtype=$_POST['searchtype'];
        $searchterm=$_POST['searchterm'];

    // TODO 4: Query the database.
    $sql="SELECT * FROM catalogs WHERE '$searchtype'='$searchterm'";
    $result = $conn->query($sql);

    // TODO 5: Retrieve the results.
    // TODO 6: Display the results back to user.
    echo "<table><tr>
    <th>ISBN</th>
    <th>Author</th>
    <th>Title</th>
    <th>Price</th>
    </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "
            <tr>
            <td>$row['isbn']</td>
            <td>$row['author']</td>
            <td>$row['title']</td>
            <td>$row['price']</td>
            </tr>
        ";
    }
    echo "</table>";
}

    // TODO 7: Disconnecting from the database.
    $conn->close();

    ?>
</body>
</html>