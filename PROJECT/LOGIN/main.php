<?php
include("01.php");
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <style >
            .divider:after,
            .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
            }
            .h-custom {
            height: calc(100% - 73px);
            }
            @media (max-width: 450px) {
            .h-custom {
            height: 100%;
            }
            }
        </style>
    </head>
    <body>
        
        


        <section class="vh-100 bg-dark" style="background-image:url('booking_bg.jpg')">
            <div class="container-fluid h-custom">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5" style="background-image: url('Blue Flat Jet Logo.png')">
                  <img src="Air_tog_log.png"
                    class="img-fluid" alt="Sample image" style="border-radius: 20px;">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 bg-dark" style="border-radius: 20px; padding: 20px;">
                  <form  action="01.php" method="POST">
                    <div class="divider d-flex align-items-center my-4 bg-dark">
                      <p class="text-center fw-bold mx-3 mb-0 bg-dark"></p>
                    </div>
          
                    <!-- Email input -->
                    <label class="form-label" for="form3Example3" style="color: white;">Email address</label>
                    <div class="form-outline mb-4">
                      <input type="email" id="form3Example3" class="form-control form-control-lg"
                        placeholder="Enter a valid email address" name="Email" />
                    </div>
          
                    <!-- Password input -->
                    <label class="form-label" for="form3Example4" style="color: white;">Password</label>
                    <div class="form-outline mb-3">
                      <input type="password" id="form3Example4" class="form-control form-control-lg"
                        placeholder="Enter password" name="password"/>
                    </div>
          
                    <div class="d-flex justify-content-between align-items-center">
                      <!-- Checkbox 
                      <div class="form-check mb-0">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                        <label class="form-check-label" for="form2Example3">
                          Remember me
                        </label>
                      </div>
                    -->
                      
                    </div>
          
                    <div class="text-center text-lg-start mt-4 pt-2">
                      <input type="submit"  class="btn btn-primary btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;" name="Login" value="Login">
                      <p class="small fw-bold mt-2 pt-1 mb-0" style="color: white;">Don't have an account? <a href="register.php"
                          class="link" style="color: white; font-size: 20px; text-decoration: none;">   REGISTER!</a></p>

                    </div>
                    <p>
                      <?php
                       $_SESSION['LOGIN_FLAG'];
                       if ($_SESSION['LOGIN_FLAG']==1)
                        {
                        echo $_SESSION['msg'];
                        
                        } 
                        $_SESSION['LOGIN_FLAG']=0;
                      ?>
                    </p>
                  </form>
                </div>
              </div>
            </div>
            <div>

              
              <div>
                <a href="#!" class="text-white me-4">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-white me-4">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-white me-4">
                  <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-white">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
              
            </div>
          </section>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>