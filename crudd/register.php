<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $email= $phone= $password = $confirm_password =$Role= "";
$username_err = $email_err= $phone_err= $password_err = $confirm_password_err = $Role_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
      // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = :email";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":email", $param_username, PDO::PARAM_STR);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }




      // Validate phone
    if(empty(trim($_POST["phone"]))){
        $phone_arr = "Please enter a phone.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE phone = :phone";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":phone", $param_phone, PDO::PARAM_STR);
            
            // Set parameters
            $param_phone = trim($_POST["phone"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $phone_err = "This phone is already taken.";
                } else{
                    $phone = trim($_POST["phone"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }





    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($email_err) && empty($phone_err) && empty($password_err) && empty($confirm_password_err)&& empty($Role_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, email,phone,password) VALUES (:username, :email, :phone, :password)";
         
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            $stmt->bindParam(":phone", $param_phone, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            // $stmt->bindParam(":Role", $param_Role, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = $username;
            $param_email = $email;
            $param_phone = $phone;
            $param_password = password_hash($password, PASSWORD_DEFAULT); 
            $param_Role=$Role;
            // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to index page
                header("location: gb.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);

    // if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    //     // Validate Role
    //     if(empty(trim($_POST["Role"]))){
    //         $Role_err = "Please enter a Role.";
    //     } else{
    //         // Prepare a select statement
    //         $sql = "SELECT id FROM users WHERE Role = :Role";
            
    //         if($stmt = $pdo->prepare($sql)){
    //             // Bind variables to the prepared statement as parameters
    //             $stmt->bindParam(":Role", $param_Role, PDO::PARAM_STR);
                
    //             // Set parameters
    //             $param_Role = trim($_POST["Role"]);
                
    //             // Attempt to execute the prepared statement
               
    //         }
    //         }
             
    //         // Close statement
    //         unset($stmt);
    //     }


}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <style type="text/css">
        body{ font: 14px sans-serif;
        /* background-color:#111; */
        background-size:cover;
      
        margin:0 auto; }
        .wrapper{ width: 450px;
             padding: 10px; 
             margin:0 auto;
        color:red;}
            .bs{
                background-color:red  !important;
            }
         

      
    </style>
</head>
<body background="https://wallpapercave.com/wp/wp2406521.jpg">
<?php
include_once("header.php");
?>
    <div class="wrapper">
        <h2>Sign Up into the Dark</h2>
        <p>Fill All Information here to Hack it.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>  
               <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>  
              <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                <label>phone</label>
                <input type="number" name="phone" class="form-control" value="<?php echo $phone; ?>">
                <span class="help-block"><?php echo $phone_err; ?></span>
            </div>  
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <!-- <div class="form-group <?php echo (!empty($Role_err)) ? 'has-error' : ''; ?>">
                <label>Role</label>
                <input type="text" name="Role" class="form-control" value="<?php echo $Role; ?>">
                <span class="help-block"><?php echo $Role_err; ?></span>
            </div> -->

            <div class="form-group ">
                <input type="submit" class="btn btn-primary bs" value="Submit">
                <!-- <input type="reset" class="btn btn-default" value="Reset"> -->
            </div>
            <p>Already have an account? <a href="login.php">log in here</a>.</p>
        </form>
    </div>    
</body>
</html>