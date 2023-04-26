<?php
include("02.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <section class="h-100" style="background-image: url('reg_bg.jpg'); background-size: cover;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
  <div class="card card-registration my-4">
                <div class="row g-0">
                  <div class="col-xl-6 d-none d-xl-block" style="background-image: url('reg_id.jpg'); background-size: cover;">
                  </div>
                  <div class="col-xl-6">
                    <div class="card-body p-md-5 bg-dark text-white">
                      <h3 class="mb-5 text-uppercase"><u>Registration</u></h3>

                      <form action="02.php" method="POST">
      
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">

                            <input type="text" name="fname" class="form-control form-control-lg" />

                            <label class="form-label" for="form3Example1m">First name</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">

                            <input type="text" name="lname" class="form-control form-control-lg" />

                            <label class="form-label" for="form3Example1n">Last name</label>
                          </div>
                        </div>
                      </div>

                      
      
                      <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                        <h6 class="mb-0 me-4">Gender: </h6>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="Gender" id="femaleGender"
                            value="Female" />
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="Gender" id="maleGender"
                            value="Male" />
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                            value="O" />
                          <label class="form-check-label" for="otherGender">Other</label>
                        </div>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="date" name="DOB" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example9">DOB</label>
                      </div>


                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" name="state" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1m">State</label>
                          </div>
                        </div>

                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" name="city" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1n">City</label>
                          </div>
                        </div>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="text" name="address" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example8">Address</label>
                      </div>
      
                    
      
                      
      
                      <div class="form-outline mb-4">
                        <input type="number" name="pincode" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example90">Pincode</label>
                      </div>


                      <div class="form-outline mb-4">
                        <input type="number" name="Phone" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example90">Phone</label>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" name="email" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example99">Email ID</label>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="password" name="password" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example97">Password</label>
                      </div>
      
                      <div class="d-flex justify-content-end pt-3">
                        <input type="submit" class="btn btn-warning btn-lg ms-2" name="Register" value="Register">
                      </div>


                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>