<?php 
 require_once('include/header.php');
 if(!isset($_SESSION['email'])){
  header('location: signin.php');
}
if(isset($_SESSION['email'])){
    $session_id = $_SESSION['id'];
    $session_email = $_SESSION['email'];
    $session_name = $_SESSION['name'];
}
?>



<div class="container-fluid mt-2">
    <script src="ckeditor/ckeditor.js"></script>
      <div class="row">
        <div class="col-md-3 col-lg-3">
            <?php require_once('include/sidebar.php'); ?>
        </div>
        
		
		
        <div class="col-md-9 col-lg-9">
			<!--contact-breadcumb-end-->	

	 <div class="row">

		<div class ="col-3">	
			<div class="pagetitle">
			  <h1>Contact</h1>
			  <nav>
				<ol class="breadcrumb"  style="background-color:#fff!important;">
				  <li style="color: #6fd943;" class="breadcrumb-item"><a href="index.php">Home</a></li>
				  <li class="breadcrumb-item">Contact</li>
				 
				</ol>
			  </nav>
			</div>
		</div>	
		<div class ="col-3">	
			
		</div>	<div class ="col-3">	
			
		</div>	<div class ="col-3">	
			<div class="pagetitle" style="background-color:none!important;">
			 
			  <nav>
				<ol class="breadcrumb"  style="background-color:#fff!important;">
				<a href="add_new_contact.php" class="btn btn-sm btn-primary btn-icon m-1" data-bs-toggle="tooltip" title="" data-bs-original-title="Grid View">
        <i class="fa fa-plus text-white"></i>
    </a>
				  <a href="contact" data-url="" data-size="lg" data-ajax-popup="true" data-bs-toggle="tooltip" data-title="Create New Contact" title="" class="btn btn-sm btn-primary btn-icon m-1" data-bs-original-title="Create">
                <i class="fa fa-list" aria-hidden="true"></i>

            </a>
				 
				</ol>
			  </nav>
			</div>
		</div>	
	
				  
				  
                </div>
           
                 
            
			
			<section class="section">
      <div class="row">
        <div class="col-lg-2">



        

        </div>

        <div class="col-lg-8">
         
      
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Vertical Form</h5>

              <!-- Vertical Form -->
        
			  
			  
			  
			  <!-- Vertical Form -->
			  
			  
			            <form method="post" enctype="multipart/form-data">
             <?php if (!isset($_GET['edit_contact'])) {
                    if(isset($_POST['contact_submit'])){ 
                      $name      = $_POST['name'];
					  $company_name     = $_POST['company_name'];
					  
                    $address1       = $_POST['address1'];
                    $address2      = $_POST['address2'];
					
                   $date       = date("d-m-Y");
                    $phone     = $_POST['phone'];
                    $email   = $_POST['email'];
                    
                   /* $image      = $_FILES['upload']['name'];
                    $tmp_image  = $_FILES['upload']['tmp_name'];
                    $anotherimage      = $_FILES['imgupload']['name'];
                    $anothertmp_image  = $_FILES['imgupload']['tmp_name'];*/
                        
                    if(!empty($name) or !empty($address1) or !empty($phone)or !empty($phone)){
                     $query = "INSERT INTO contacts(`name`, `address1`, `address2`, `phone`, `email`, `company_name`, `created_at`)
          VALUES('$name', '$address1', '$address2', '$phone', '$email', '$company_name', NOW())";

					  
					  
                   $update_run =  mysqli_query($con,$query);
					    if ($update_run) {
                $message = "Contact details updated successfully.";
                header('Location:contact.php');
                exit(); // Stop script execution after redirect
            } else {
                $message = "Failed to update contact details.";
            }
                     
                    }
                                   
                }

                 if(isset($msg)){
                  echo "<span class='mt-3 mb-4' style='color:green; font-weight:bold;'><i style='color:green; font-weight:bold;' class='fas fa-smile'></i> $msg</span>";
                 }
                    ?>
       
            <div class="row">
                <?php if(isset($message)){
                        echo "<p style='color:green; font-weight:bold;'>$message</p>";
                    } else if(isset($error)){
               echo "<span style='color:red; font-weight:bold;'><i style='color:red; font-weight:bold;' class='fas fa-frown'></i> $error</span>";
                    }?>
                    <!-- Grid column -->
                    <div class="col-md-12">
                      <div class="form-group">
                       <label for="furniture">Name:</label>
                       <input type="text" class="form-control" name="name" id="inputEmail4MD" placeholder="Title">
                      </div>
					  
                    </div>
					<div class="col-md-12">
                      <div class="form-group">
                       <label for="furniture">Company Name:</label>
                       <input type="text" class="form-control" name="company_name" id="inputEmail4MD" placeholder="Company Name">
                      </div>
					  
                    </div>
					 <div class="col-md-12">
                      <div class="form-group">
                       <label for="furniture">address1:</label>
                       <input type="text" class="form-control" name="address1" id="inputEmail4MD" placeholder="Title">
                      </div>
                    </div>
					<div class="col-md-12">
                      <div class="form-group">
                       <label for="furniture">address2:</label>
                       <input type="text" class="form-control" name="address2" id="inputEmail4MD" placeholder="Title">
                      </div>
                    </div>
					<div class="col-md-12">
                      <div class="form-group">
                       <label for="furniture">Phone:</label>
                       <input type="text" class="form-control" name="phone" id="inputEmail4MD" placeholder="Title">
                      </div>
                    </div>
					<div class="col-md-12">
                      <div class="form-group">
                       <label for="furniture">email:</label>
                       <input type="text" class="form-control" name="email" id="inputEmail4MD" placeholder="Title">
                      </div>
                    </div>
                  
            </div>
         
              <input type="submit" name="contact_submit" class=" mt-3 btn btn-primary btn-md" value="Submit">
              </div>
              
              
           
                  
            </form>
<?php } ?>
			
		<?php
// Handle editing a contact
if (isset($_GET['edit_contact'])) {
    $contact_id = $_GET['edit_contact'];
    $edit_query = "SELECT * FROM contacts WHERE id='$contact_id'";
    $edit_run = mysqli_query($con, $edit_query);
    $edit_contact = mysqli_fetch_array($edit_run);

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['contact_update'])) {
        // Get updated data from the form
        $name = $_POST['name'];
        $company_name = $_POST['company_name'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        // Validate input fields
        if (!empty($name) && !empty($address1) && !empty($phone)) {
            $update_query = "
                UPDATE contacts 
                SET name = '$name', 
                    company_name = '$company_name', 
                    address1 = '$address1', 
                    address2 = '$address2', 
                    phone = '$phone', 
                    email = '$email',
                    created_at = NOW() 
                WHERE id = '$contact_id'
            ";
            if (mysqli_query($con, $update_query)) {
                $message = "Contact updated successfully!";
				 header('Location: contact');
                exit();
				
            } else {
                $error = "Error updating contact: " . mysqli_error($con);
            }
        } else {
            $error = "Please fill in all required fields!";
        }
    }
?>
<div class="card-body">
    <h5 class="card-title">Edit Contact</h5>

    <!-- Feedback Messages -->
    <?php if (isset($message)) { ?>
        <p style="color: green; font-weight: bold;"><?php echo $message; ?></p>
    <?php } elseif (isset($error)) { ?>
        <p style="color: red; font-weight: bold;"><?php echo $error; ?></p>
    <?php } ?>

    <!-- Edit Contact Form -->
    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <!-- Name -->
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo htmlspecialchars($edit_contact['name']); ?>" required>
                </div>
            </div>
            <!-- Company Name -->
            <div class="col-md-12">
                <div class="form-group">
                    <label for="company_name">Company Name:</label>
                    <input type="text" class="form-control" name="company_name" id="company_name" value="<?php echo htmlspecialchars($edit_contact['company_name']); ?>">
                </div>
            </div>
            <!-- Address 1 -->
            <div class="col-md-12">
                <div class="form-group">
                    <label for="address1">Address 1:</label>
                    <input type="text" class="form-control" name="address1" id="address1" value="<?php echo htmlspecialchars($edit_contact['address1']); ?>" required>
                </div>
            </div>
            <!-- Address 2 -->
            <div class="col-md-12">
                <div class="form-group">
                    <label for="address2">Address 2:</label>
                    <input type="text" class="form-control" name="address2" id="address2" value="<?php echo htmlspecialchars($edit_contact['address2']); ?>">
                </div>
            </div>
            <!-- Phone -->
            <div class="col-md-12">
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="<?php echo htmlspecialchars($edit_contact['phone']); ?>" required>
                </div>
            </div>
            <!-- Email -->
            <div class="col-md-12">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?php echo htmlspecialchars($edit_contact['email']); ?>">
                </div>
            </div>
        </div>
        <!-- Submit Button -->
        <input type="submit" name="contact_update" class="mt-3 btn btn-primary btn-md" value="Update">
    </form>
</div>
<?php
}
?>
 <?php 
            
           
       
			
			?>
			
			
			
			
			
            </div>
          </div>


        </div>
      </div>
    </section>
			

        </div>
        
     </div>
        
<script>
 CKEDITOR.replace('detail', {
    filebrowserBrowseUrl: '/brows.php',
    filebrowserUploadUrl: '/upload.php'
});
</script>
      </div>
      <?php 
 require_once('include/footer.php');
?>