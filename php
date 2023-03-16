<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/register_style.css">
    <script src="profile.js"></script>
</head>
<body>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Profile</p>

                <form action="profile_handler.php" method="POST" class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">Your Age</label>
                      <input 
                        type="text"
                        class="form-control"
                        id="age"
                        name="age"
                        placeholder="Age"
                      />
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Your Date of Birth</label>
                      <input type="text"
                        class="form-control"
                        id="dob"
                        name="dob"
                        placeholder="Date of Birth" />
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example4c">Contact</label>
                      <input type="text"
                        class="form-control"
                        id="contact"
                        name="contact"
                        placeholder="Contact" />
                      
                    </div>
                  </div>


                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                  <input  type="submit" name="update_profile" class="btn btn-primary btn-lg" id="ppa" value="Update Profile">
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="images/register_image.webp"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
<?php 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/register_style.css">
    <script src="register.js"></script>
</head>
<body>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form action="register_handler.php" method="POST" class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">Your Name</label>
                      <input 
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        placeholder="Full Name"
                      />
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c">Your Email</label>
                      <input type="text"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="email@example.com" />
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example4c">Password</label>
                      <input type="password"
                        class="form-control"
                        id="password1"
                        name="password1"
                        placeholder="password" />
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example4cd">Repeat your password</label>
                      <input type="password"
                        class="form-control"
                        id="password2"
                        name="password2"
                        placeholder="password" />
                      
                    </div>
                  </div>


                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                  <input  type="submit" name="reg_button" class="btn btn-primary btn-lg" id="ppa" value="Register">
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="images/register_image.webp"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
<?php
session_start();

// Check if user is already logged in, redirect to profile page
if(isset($_SESSION['user_id'])){
    header("Location: profile.php");
    exit;
}

// Check if form is submitted
if(isset($_POST['submit'])){

    // Include database connection
    require_once 'db_connection.php';

    // Sanitize user input
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    // Validate user input
    $error = false;
    $errorMsg = "";
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = true;
        $errorMsg .= "Invalid email format.<br>";
    }
    if(empty($password)){
        $error = true;
        $errorMsg .= "Password is required.<br>";
    }

    // If input is valid, check if user exists in database
    if(!$error){
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        // If user exists, check if password is correct
        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            if(password_verify($password, $row['password'])){
                // Password is correct, set session variables and redirect to profile page
                $_SESSION['user_id'] = $row['id'];
                header("Location: profile.php");
                exit;
            } else {
                // Password is incorrect
                $errorMsg .= "Incorrect password.<br>";
            }
        } else {
            // User does not exist
            $errorMsg .= "User does not exist.<br>";
        }
    }

    // If there are errors, display error message
    if($error){
        echo '<div class="alert alert-danger">'.$errorMsg.'</div>';
    }

    // Close database connection
    $stmt->close();
    $conn->close();
}
?>
