<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VIEW RECORD</title>
   
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <!-- css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>

    <div class="form">
    <div class="container h-100">
    <div class="white position-absolute top-50 start-50 translate-middle">
    
            <div class="container text-center">
            <div class="row justify-content-end py-4">
            
       
            <div class="col-2">
            <a href="welcome.php" class="btn btn-danger ml-3"  title="LOGOUT"><i class="fa-solid fa-xmark"></i></a>
            </div>

            </div>
            </div>   

        <p class="head">VIEW RECORD</h2>
        <p class="sub">Hello <?php echo htmlspecialchars($_SESSION["username"]); ?></b>!</p>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group py-3">
                <p class="label">USERNAME</p>
                <p class="label"><?php echo htmlspecialchars($_SESSION["username"]);?></p>
                
            </div>

            <div class="form-group py-3">
                <p class="label">PASSWORD</p>
                <p class="label"><?php echo htmlspecialchars($_SESSION["password"]); ?></p>
            </div>

        </form>
    </div>
    </div>
    </div> 
</body>
</html>