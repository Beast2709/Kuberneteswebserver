<?php
echo "Inside K8s with MySQL DIj <br>";
$conn = new mysqli("mysql", "root", ".sweetpwd.", "my_db");
// Check connection
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}

$sql2= "Create table users(uid INT(11), name varchar(10))";
$rees = $conn->query($sql2);




$sql1 = "Insert into users(uid, name) VALUES(1,'Soumok')";
$res1 = $conn->query($sql1);


$sql = "SELECT distinct(name) FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
                echo $row['name']."<br>";
        }
} else {
        echo "0 results";
}
$conn->close();
