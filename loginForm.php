<?php $title = "Login"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/loginForm.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <!-- <script defer src="./Final/js/index.js"></script> -->
    <link rel="stylesheet" href="./css/loginForm.css">
    

    <title><?php echo $title?></title>
</head>
<body>
    <div class="login-form">
        <section class="login">
            <div class="container">
                <div class="login-cover">
                    <div class="carousel">
                        <img src="./assets/logo.png" alt="">
                    </div>
                    <div class="button d-flex justify-content-center mt-3">
                        <form action="login.php" method="POST">
                            <?php if(isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?> </p>
                            <?php } ?>
                            <input name="uname" type="text" class="form-control" placeholder="Username" required/>  
                            <input name="password" type="password" class="form-control mt-3" placeholder="Password" required/>
                            
                            <div class="row">
                                <div class="col-sm-12 d-flex justify-content-center">
                                    <button type="submit">Login</button>
                                </div>  
                            </div>                                    
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>                                            
</body>
</html>
        