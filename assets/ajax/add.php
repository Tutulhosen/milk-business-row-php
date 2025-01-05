<?php 
 $host      = "localhost";
 $username  = "root";
 $passwrod  = "";
 $dbName    = "furniture";

  $con = mysqli_connect($host,$username,$passwrod,$dbName);



      
               echo  $name      = $_POST['name'];
               echo  $email       = $_POST['email'];
               echo  $password      = $_POST['password'];

                    
                if(!empty($name) or !empty($name) or !empty($password)){
                $query = "INSERT INTO customer (`cust_name`, `cust_email`, `cust_pass`)VALUES('$name',$email,'$password')";
                echo "<span class='mt-3 mb-4' style='color:green; font-weight:bold;'><i style='color:green; font-weight:bold;' class='fas fa-smile'></i> Success/span>";
            
                                        
                }
                            
          
















 ?>