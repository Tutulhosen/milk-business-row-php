
<?php 
 $host      = "localhost";
 $username  = "root";
 $passwrod  = "";
 $dbName    = "furniture";

  $con = mysqli_connect($host,$username,$passwrod,$dbName);

 ?>
<div class="login-popup">
    <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
        <ul class="nav nav-tabs text-uppercase" role="tablist">
            <li class="nav-item">
                <a href="#sign-in" class="nav-link active">Sign In</a>
            </li>
            <li class="nav-item">
                <a href="#sign-up" class="nav-link">Sign Up</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="sign-in">
                <form action="" method="post">
                    <div class="form-group">
                        <label>Username or email address *</label>
                        <input type="text" class="form-control" name="username" id="username" required>
                    </div>
                    <div class="form-group mb-0">
                        <label>Password *</label>
                        <input type="text" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="form-checkbox d-flex align-items-center justify-content-between">
                        <input type="checkbox" class="custom-checkbox" id="remember" name="remember" required="">
                        <label for="remember">Remember me</label>
                    <!-- <a href="#">Last your password?</a>-->
                    </div>
                
                    <button type="submit" class="btn btn-primary"> Sign In </button>
                </form>
            </div>



            <?php
                    if(isset($_POST['submcreate_idit'])){ 
                    $name      = $_POST['name'];
                    $email       = $_POST['email'];
                    $password      = $_POST['password'];
              
                        
                    if(!empty($name) or !empty($name) or !empty($password)){
                     $query = "INSERT INTO customer (`cust_name`, `cust_email`, `cust_pass`)
                      VALUES('$name',$email,'$password')";
                       echo "<span class='mt-3 mb-4' style='color:green; font-weight:bold;'><i style='color:green; font-weight:bold;' class='fas fa-smile'></i> Success/span>";
                 
                                              
                    }
                                   
                }

               
                
                    ?>
       
       
             
         

            <div class="tab-pane" id="sign-up">
             <form  method="post">
                <div class="form-group">
                        <label>User Name  *</label>
                        <input type="text" class="form-control" name="name" id="email_1" required>
                </div>  
                
              
                <div class="form-group">
                        <label>Your Email address *</label>
                        <input type="text" class="form-control" name="email" id="email_1" required>
                    </div>
                    <div class="form-group mb-5">
                        <label>Password *</label>
                        <input type="text" class="form-control" name="password" id="password_1" required>
                    </div>
                    <p>Your personal data will be used to support your experience 
                        throughout this website, to manage access to your account, 
                        and for other purposes described in our <a href="#" class="text-primary">privacy policy</a>.</p>
                <!-- <a href="#" class="d-block mb-5 text-primary">Signup as a vendor?</a>-->
                    <div class="form-checkbox d-flex align-items-center justify-content-between mb-5">
                        <input type="checkbox" class="custom-checkbox" id="agree" name="agree" required="">
                        <label for="agree" class="font-size-md">I agree to the <a  href="#" class="text-primary font-size-md">privacy policy</a></label>
                    </div>
                   <!-- <a href="#" type="submit" class="btn btn-primary">Sign Up</a>-->
                   <button type="submit" name="create_id" class="btn btn-primary"> Sign Up </button>
                   <input type="submit"type="submit" name="create_id"value="submit">
                    </form>
            </div>


        </div>
       <!-- <p class="text-center">Sign in with social account</p>
        <div class="social-icons social-icon-border-color d-flex justify-content-center">
            <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
            <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
            <a href="#" class="social-icon social-google fab fa-google"></a>
        </div>
-->
    </div>
</div>