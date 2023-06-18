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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOGINSIGNUP</title>
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <!-- css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    </head>

<body class="dashboardbg">

        <header>

       
 
        <div class="container text-center">
        <div class="row justify-content-end py-4">
            <div class="col-4 col-lg-2">
            <a href="view.php" class="btn btn-warning" title="View Record"><i class="fa-solid fa-eye"></i></a>
            </div>
            <div class="col-4 col-lg-2">
            <a href="reset-password.php" class="btn btn-warning" title="RESET PASSWORD"><i class="fa-solid fa-pen-fancy"></i></a>
            </div>
            <div class="col-4 col-lg-2">
            <a href="logout.php" class="btn btn-danger ml-3"  title="LOGOUT"><i class="fa-solid fa-xmark"></i></a>
            </div>
            </div>
        </div>   
    
            <h1 class="my-5 text-center">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to VIE.</h1>
  
        </header>
<!-- section for desktop -->
        <section>
        <div class="d-none d-sm-none d-md-none d-lg-block">
        <div class="container">
        <!--  -->
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4 ">
                <p class="" style="text-align: justify; ">Lorem ipsum dolor sit amet. Cum eius voluptatum sit ipsum perspiciatis et dolore quos sed asperiores expedita est dolorem blanditiis. Ut vero harum et consequuntur omnis ut maxime natus et animi repellat ab laudantium consequatur.</p>

                <p class="" style="text-align: justify;">Cum perspiciatis et libero dignissimos ut fugit magni in nesciunt neque sit nisi magni sit tempore quae aut porro soluta! Ut sequi deleniti in corrupti internos a laudantium corrupti quo voluptas modi. At aperiam quia et velit facilis hic quia totam et dignissimos doloremque sed temporibus architecto et laudantium quos. Rem asperiores rerum a consequatur dolorem et autem neque.</p>

                </div>
                
                
                <div class="col-12 col-lg-4  justify-content-center">
                <img src="images\Minimalist-Black-White-Hello-English-Word-Poster-And-Print-Set-Wall-Art-Picture-Canvas-Painting-Aesthetic.jpg_Q90.jpg_.jpg" alt="..."style=" height: 400px; width: 400px;">
                </div>
            </div>

        <!--  -->
        </div>
        </div>
        </section>

<!-- section for mobile -->
            <section>
            <div class="d-flex d-sm-flex d-md-flex d-lg-none"> 
            <div class="container">
                    <!--  -->
                <div class="row justify-content-evenly">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                        <img src="images\depositphotos_430460192-stock-illustration-sign-page-abstract-concept-vector.jpg" alt="..."style=" height: 300px; width: 300px;">
                        </div>
                            
                        <div class="col-12 pt-2">
                        <p class="" style="text-align: justify;">Lorem ipsum dolor sit amet. dolorem blanditiis. Ut vero harum et consequuntur omnis ut maxime natus et animi repellat ab laudantium consequatur.</p>

                        <p class="" style="text-align: justify;">Cum perspiciatis et libero dignissimos sit tempore soluta! Rem asperiores  autem neque.</p>



                        </div>
                </div>


                    <!--  -->
            </div>
            </div>
            </section>
</body>
</html>