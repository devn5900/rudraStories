<?php
// check_login.php
session_start();
$empty = false;
$showAlert = false;
$showError = false;
$exists = false;
$_SESSION['loggin'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {

            
    // //connect to db
    require_once("../loginSignup/_dbconnect.php");

    //fetch data to form
    $username = $userPass = "";

    if (empty(trim($_POST['Username'])) || empty(trim($_POST['Userpass']))) {
        $empty = true;
    } else {
        // check if user already exists
        $sql = "select * from usersignupinfo where UserName=? and Password=?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $username, $Userpass);
            $username = trim($_POST['Username']);
            $Userpass = trim($_POST['Userpass']);
            // try to execute
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt)) {
                    session_start();
                    $_SESSION['loggin'] = true;
                    $_SESSION['ssn'] = $_POST['Username'];

                    // header('Location: index.php'); // default page
                    header("location:   /index");
                    // session_unset();
                    // session_destroy();

                } else {

                    $showError = "username or password not matched";
                }
            }
        }
    }
            // echo 'matched';
        }
        else{
            header("location: /Log_In/");

        }

?>