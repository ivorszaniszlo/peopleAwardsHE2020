<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peopleawards2020";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,
        $password,
		 array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
// set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, gift, jumper_size, transfer, address, city, zip_code, create_date) 
VALUES (:name, :email, :phone, :gift, :jumper_size, :transfer, :address, :city, :zip_code, NOW())");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
	$stmt->bindParam(':gift', $gift);
	$stmt->bindParam(':jumper_size', $jumper_size);
	$stmt->bindParam(':transfer', $transfer);
	$stmt->bindParam(':address', $address);
	$stmt->bindParam(':city', $city);
	$stmt->bindParam(':zip_code', $zip_code);

// insert a row
if (isset($_POST['jumper_size'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
	$gift = $_POST["gift"];
	$jumper_size = $_POST["jumper_size"];
	$transfer = $_POST["transfer"];
	$address= $_POST["address"];
	$city = $_POST["city"];
	$zip_code= $_POST["zip_code"];
} else {
	$name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
	$gift = $_POST["gift"];
	$transfer = $_POST["transfer"];
	$address= $_POST["address"];
	$city = $_POST["city"];
	$zip_code= $_POST["zip_code"];
}
	$stmt->execute();
    echo "Köszönjük, ".$gift." ajándékod rövidesen eljuttatjuk számodra.";
}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>