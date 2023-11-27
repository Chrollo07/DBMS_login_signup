<?php
session_start();
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

        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users(firstname, middlename, lastname, house_num, street, barangay, municipality, city_province, zip_code, birthdate, contact_num, username, email, password)
        values('$firstname', '$middlename', '$lastname', '$house_num', '$street', '$barangay', '$municipality', '$city_province', '$zip_code', '$birthdate', '$contact_num', '$username', '$email', '$password_hash')";

        $email_duplicate = "SELECT * FROM users WHERE email = '$email'";
        $result = $connection->query($email_duplicate);
        if ($result->num_rows > 0){
            $error1 = 'email';
            $haserror = TRUE;
        }
        $contact_num_duplicate = "SELECT * FROM users WHERE contact_num = '$contact_num'";
        $result = $connection->query($contact_num_duplicate);
        if ($result->num_rows > 0){
            $error2 = 'contact_num';
            $haserror = TRUE;
        }
        $username_duplicate = "SELECT * FROM users WHERE username = '$username'";
        $result = $connection->query($username_duplicate);
        if ($result->num_rows > 0){
            $error3 = 'username';
            $haserror = TRUE;
        }
        if ($haserror === TRUE){
        header("Location: index.html?registration=$error1$error2$error3");
        exit();
        }else{
            if ($connection->query($query)) {
                header("Location: index.html?registration=success");
                exit();
            } else {
                echo "Error: " . $connection->error;
                header("Location: index.html?registration=failed");
                exit();
            }
        }
    }elseif(isset($_POST['username'])){

        $login_username = $_POST["username"];
        $login_password = $_POST["password"];
        $query = "SELECT * FROM users WHERE username = '$login_username' AND password = '$login_password'";
        $result = $connection->query($query);
        
        if ($result->num_rows > 0) {
            $_SESSION["authenticated"] = true;
            echo "Login successful!";
            header("Location: home.php");

        }else{
            $query_username = "SELECT * FROM users WHERE username = '$login_username'";
            $result = $connection->query($query_username);
            //NO USERNAME FOUND
            if ($result->num_rows <= 0) {
                $query_final = "SELECT * FROM users WHERE password = '$login_password'";
                $result = $connection->query($query_final);

                //INCORRECT USERNAME,PASSWORD DOESNT MATCH
                if ($result->num_rows > 0){
                    echo "Password doesn't match.";
                    header("Location: index.html?login=nomatch");

                }else{//USERNAME DOESNT EXIST
                echo "Username doesn't exist.";
                header("Location: index.html?login=username");
                }

            }else{
                //USERNAME FOUND BUT INCORRECT PASSWORD
                    echo "Password is incorrect.";
                    header("Location: index.html?login=password");
                }
            }
        }
        
    }

$connection->close();

?>