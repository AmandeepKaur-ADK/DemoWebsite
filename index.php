
<?php
$server = "localhost:3307";
$username = "root";
$password = "";
$dbname = "demo_website_form";

$con = mysqli_connect($server, $username, $password, $dbname);
if(!$con){
    echo "Connection Uunsuccessful ".mysqli_connect_error();
}
else{
    echo "Successfully connected to the database."
}
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO `form details` ( `name`, `email`, `subject`, `message`, `dt`) VALUES ( 'abc', 'abc@ab.cm', 'bca', 'this is nice', current_timestamp());";
echo $sql;

if($con -> query($sql) == true){
    echo "Inserted Successfully";
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
?>
