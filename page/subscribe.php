
     <?php
              include('../include/dbcon.php');           
					if(!empty($email = $_GET['subemail'])){
							
                    
                          
                         
                          if (!empty($email)){
                          
                                      
								$query = "INSERT INTO `subscribe`(`email`) VALUES ('$email')";
								 
								$msg = "First line of text\nSecond line of text";
								
								// use wordwrap() if lines are longer than 70 characters
								$msg = wordwrap($email,70);

								// send email
								mail("bahmedbd@gmail.com","My subject",$email);
								  
                          
						  if(mysqli_query($con,$query)){
							$msg = "Catgory Updated Successfully!";
						
					}
						else{
							$error="Not updated";
						}
						  
						  
						  
						  
                          }  }
												  
						  
                       
                            
                             //header("location:../index.php?result=success");		
							
                       //  header('Location: http://faysal.neofusiontech.com/');
						
					

						 
						
                    ?>
