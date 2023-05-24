<?php

session_start();
include 'db_conn.php';

    if(isset($_POST['uname']) && isset($_POST['password'])) {
        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }
        $uname = validate($_POST['uname']);
        $password = validate($_POST['password']);

        if(empty($uname)) {
            header("Location: loginForm.php?error=username is required");
            exit();
        }
        else if (empty($password)) {
            header("Location: loginForm.php?error=Password is required");
            exit();
        } else {

            $sql = "SELECT * FROM users WHERE username = '$uname' AND password = '$password'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if($row['username'] === $uname && $row['password'] === $password) {
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: index.php");
                    exit();

                } else {
                    header("Location: loginForm.php?error=Incorrect username or password");
                    exit();
                }
            } else {
                header("Location: loginForm.php");
                exit();
            }
        }
    } else {
        header("Location: loginForm.php");
        exit();
    }

?>