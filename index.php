<!DOCTYPE html>
<html>
<head>
    <title></title>

</head>
<body>
<form method="post" action="index.php">
    Add your information:<br><br>
    Name: <input name="user_name" type="text" maxlength="20" size="25" value="" />
    <br><br>
    Date: <input name="user_date" type="date" maxlength="2" size="3" value="" />
    <br><br>
    Map: <input name="user_map" type="text" maxlength="20" size="25" value="" />
    <br><br>
    The number of threads of the pipeline: <input name="user_number" type="number" maxlength="20" size="25" value="" />
    <br><br>
    The name of the enterprise that operates the pipeline: <input name="user_namep" type="text" maxlength="40" size="25" value="" />
    <br><br>
    <input type=submit value="Done"></form>
<?php
$servername ="localhost";
$username = "root";
$password = "";
$name_db = "transgas";

$conn = new mysqli($servername, $username, $password, $name_db );
if ($conn-> connect_error){
    die("Connection failed: " .$conn->connect_error);
}
echo "Connection successfully";
echo "<br>";
$result = mysqli_query($conn, "SELECT * FROM `transgas`");

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name </th><th>Date </th><th>Map </th><th>The number of threads of the pipeline </th>
<th> The name of the enterprise that operates the pipeline</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["date"]. "</td><td>". $row["map"]. "</td><td>" . $row["the number of threads of the pipeline"]. "</td><td>"
            . $row["the name of the enterprise that operates the pipeline"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
    echo "You added";
    echo "<table>";
    echo "<tr><td>";
    echo $_POST["user_name"];
    echo "</td><td>";
    echo $_POST["user_date"];
    echo "</td><td>";
    echo $_POST["user_map"];
    echo "</td><td>";
    echo $_POST["user_number"];
    echo "</td><td>";
    echo $_POST["user_namep"];
    echo "</td></tr>";
    echo "</table>";



?>
</body>
</html>