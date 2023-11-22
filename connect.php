<?php

$connection = new mysqli("localhost","root","","login_signup");

if ($connection->connect_error){
    die("Connection failed: " .$connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['firstname'])){

        $firstname = $_POST["firstname"];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username2'];
        $house_num = $_POST['house_num'];
        $street = $_POST["street"];
        $barangay = $_POST["barangay"];
        $municipality = $_POST["municipality"];
        $city_province = $_POST["city_province"];
        $zip_code = $_POST["zip_code"];
        $birthdate = $_POST['birthdate'];
        $email = $_POST['email'];
        $contact_num = $_POST['contact_num'];
        $password = $_POST['password2'];

        $query = "INSERT INTO users(firstname, middlename, lastname, house_num, street, barangay, municipality, city_province, zip_code, birthdate, contact_num, username, email, password)
        values('$firstname', '$middlename', '$lastname', '$house_num', '$street', '$barangay', '$municipality', '$city_province', '$zip_code', '$birthdate', '$contact_num', '$username', '$email', '$password')";

        if ($connection->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
    }elseif(isset($_POST['username'])){

        $login_username = $_POST["username"];
        $login_password = $_POST["password"];
        $query = "SELECT * FROM users WHERE username = '$login_username' AND password = '$login_password'";
        $result = $connection->query($query);

        if ($result->num_rows > 0) {
            echo "Login successful!";
        } else {
            echo "Invalid username or password";
        }
        }
    }


// Close the connection
$connection->close();

?>