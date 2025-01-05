<?php 
 require_once('include/header.php');

if(!isset($_SESSION['email'])){
    header('location: signin.php');
}
if(isset($_SESSION['email'])){
    $session_id = $_SESSION['id'];
    $session_email = $_SESSION['email'];
   
}
?><div class="container-fluid mt-2">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-3">
            <?php require_once('include/sidebar.php'); ?>
        </div>

        <!-- Main Content Area -->
        <div class="col-md-9 col-lg-9">
            <div class="row">
                <div class="col-md-1">
                    <i class="fad fa-user-cog fa-6x text-primary"></i>
                </div>
                <div class="col-md-11 text-left mt-4">
                    <h1 class="ml-5 display-4 font-weight-normal">Profile Setting:</h1>
                </div>
            </div>
            <hr>
<?php if (isset($_GET['customize']) && $_GET['customize'] == 'logo') { ?>
    <!-- Content to display if logo=success -->
            <!-- Form Section -->
            <form method="post" enctype="multipart/form-data">
                <?php
                $query = "SELECT * FROM customize_header WHERE email='$session_email'";
                $run = mysqli_query($con, $query);
                $row = mysqli_fetch_array($run);
                
                $db_name = $row['site_title'];
                $db_image = $row['image'];
                $image_another = $row['image_another'];

                if (isset($_POST['submit_header'])) {
                    $name = $_POST['title'];
                    $image = $_FILES['upload']['name'];
                    $tmp_image = $_FILES['upload']['tmp_name'];
                    $image_logo = $_FILES['upload_logo']['name'];
                    $tmp_image_logo = $_FILES['upload_logo']['tmp_name'];

                    $u_query = "UPDATE customize_header SET site_title='$name', image='$image', image_another='$image_logo' WHERE id ='$session_id'";

                    if (move_uploaded_file($tmp_image, "img/logo/" . $image) && move_uploaded_file($tmp_image_logo, "img/logo/" . $image_logo)) {
                        header('Location: customize.php?logo=success');
                        exit();
                    } else {
                        echo "<p style='color:red; font-weight:bold;'>Failed to upload one or both files.</p>";
                    }
                }
                ?>
                
                <div class="row">
                    <?php if (isset($message)) { echo "<p style='color:green; font-weight:bold;'>$message</p>"; } ?>
                  
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <!-- Title Input -->
                        <div class="form-group">
                            <label for="title" class="font-weight-bold">Title:</label>
                            <input type="text" name="title" value="<?php echo $db_name; ?>" class="form-control">
                        </div>

                        <!-- File Uploads -->
                        <div class="form-group">
                            <label class="font-weight-bold">Fav Icon:</label>
                            <input class="form-control-file border form-control" type="file" name="upload">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Logo:</label>
                            <input class="form-control-file border form-control" type="file" name="upload_logo">
							<input type="submit" name="submit_header" class="btn btn-primary btn-md" value="Submit">
                        </div>
                    </div>
					

                    <!-- Image Previews -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold">Current Fav Icon:</label>
                            <img src="img/logo/<?php echo $db_image; ?>" class="mt-2 img-fluid" width="50%">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Current Logo:</label>
                            <img src="img/logo/<?php echo $image_another; ?>" class="mt-2 img-fluid" width="50%">
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                
            </form>
			<?php } ?>
			

    <!-- Content to display if customize=contact -->
    
   <?php if (isset($_GET['customize']) && $_GET['customize'] == 'contact') { ?>
    <!-- Form Section -->
    <form method="post" enctype="multipart/form-data">
        <?php
        // Fetch existing contact details from the database
        $query = "SELECT * FROM customize_header";
        $run = mysqli_query($con, $query);
        $row = mysqli_fetch_array($run);

        $contact_number = $row['contact_number'];
        $whatsapp_number = $row['whatsapp_number'];

        // Handle form submission
        if (isset($_POST['submit_contact'])) {
            $contact_num = $_POST['contact_num'];
            $wapp_number = $_POST['wapp_number'];

            // Update query
            $u_query = "UPDATE customize_header SET contact_number='$contact_num', whatsapp_number='$wapp_number'";
            $update_run = mysqli_query($con, $u_query);

            if ($update_run) {
                $message = "Contact details updated successfully.";
                header('Location: customize.php?customize=contact&update=success');
                exit(); // Stop script execution after redirect
            } else {
                $message = "Failed to update contact details.";
            }
        }
        ?>
        
        <div class="row">
            <?php if (isset($message)) { echo "<p style='color:" . ($update_run ? "green" : "red") . "; font-weight:bold;'>$message</p>"; } ?>
        </div>


    </form>
<?php } ?>

    <!-- Content to display if customize=contact -->
    
   <?php if (isset($_GET['customize']) && $_GET['customize'] == 'contact') { ?>
    <!-- Form Section -->
    <form method="post" enctype="multipart/form-data">
        <?php
        // Fetch existing contact details from the database
        $query = "SELECT * FROM customize_header";
        $run = mysqli_query($con, $query);
        $row = mysqli_fetch_array($run);

        $contact_number = $row['contact_number'];
        $whatsapp_number = $row['whatsapp_number'];

        // Handle form submission
        if (isset($_POST['submit_contact'])) {
            $contact_num = $_POST['contact_num'];
            $wapp_number = $_POST['wapp_number'];

            // Update query
            $u_query = "UPDATE customize_header SET contact_number='$contact_num', whatsapp_number='$wapp_number'";
            $update_run = mysqli_query($con, $u_query);

            if ($update_run) {
                $message = "Contact details updated successfully.";
                header('Location: customize.php?customize=contact&update=success');
                exit(); // Stop script execution after redirect
            } else {
                $message = "Failed to update contact details.";
            }
        }
        ?>
        
        <div class="row">
            <?php if (isset($message)) { echo "<p style='color:" . ($update_run ? "green" : "red") . "; font-weight:bold;'>$message</p>"; } ?>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <!-- Contact Number Input -->
                <div class="form-group">
                    <label for="contact_num" class="font-weight-bold">Contact Number:</label>
                    <input type="text" id="contact_num" name="contact_num" value="<?php echo $contact_number; ?>" class="form-control" required>
                </div>
                
                <!-- WhatsApp Number Input -->
                <div class="form-group">
                    <label for="wapp_number" class="font-weight-bold">WhatsApp Number:</label>
                    <input type="text" id="wapp_number" name="wapp_number" value="<?php echo $whatsapp_number; ?>" class="form-control" required>
                </div>

                <!-- Submit Button -->
                <div class="form-group">
                    <input type="submit" name="submit_contact" class="btn btn-primary btn-md" value="Submit">
                </div>
            </div>
        </div>
    </form>
<?php } ?>


<?php if (isset($_GET['customize']) && $_GET['customize'] == 'notice') { ?>
    <!-- Form Section -->
    <form method="post" enctype="multipart/form-data">
        <?php
        // Message handling for notifications
        $message = '';

        // Handle adding a new notice
        if (isset($_POST['submit_notice'])) {
            $notice_title = $_POST['notice_title'];
            $notice_content = $_POST['notice_content'];
            
            $insert_notice = "INSERT INTO notice (notice_title, notice_content, created_at) VALUES ('$notice_title ', '$notice_content', NOW())";
            if (mysqli_query($con, $insert_notice)) {
                $message = "Notice posted successfully.";
            } else {
                $message = "Failed to post notice.";
            }
        }

        // Handle editing a notice
        if (isset($_POST['edit_notice'])) {
            $notice_id = $_POST['notice_id'];
            $notice_title = $_POST['notice_title'];
            $notice_content = $_POST['notice_content'];
            
            $update_notice = "UPDATE notice SET notice_content='$notice_title', notice_title='$notice_content' WHERE id='$notice_id'";
            if (mysqli_query($con, $update_notice)) {
                $message = "Notice updated successfully.";
            } else {
                $message = "Failed to update notice.";
            }
        }

        // Handle deleting a notice
        if (isset($_GET['delete_notice'])) {
            $notice_id = $_GET['delete_notice'];
            $delete_notice = "DELETE FROM notice WHERE id='$notice_id'";
            if (mysqli_query($con, $delete_notice)) {
                $message = "Notice deleted successfully.";
            } else {
                $message = "Failed to delete notice.";
            }
        }
        ?>

        <!-- Display messages -->
		     <!-- Add New Notice Form -->
                <div class="new-notice mt-4">
                    <h4 class="font-weight-bold">Add New Notice</h4>
                    <form method="post">
                        <div class="form-group">
                            <label for="notice_title">Notice Title:</label>
                            <input type="text" name="notice_title" id="notice_title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="notice_content">Notice Content:</label>
                            <textarea name="notice_content" id="notice_content" rows="4" class="form-control" required></textarea>
                        </div>
                        <input type="submit" name="submit_notice" class="btn btn-success btn-md" value="Post Notice">
                    </form>
                </div>

		
        <div class="row">
            <?php if ($message) { echo "<p style='color:green; font-weight:bold;'>$message</p>"; } ?>
        </div>

        <!-- Notice Management Section -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="font-weight-bold">Notice Board</h2>
                <hr>

                <!-- Notice List Table -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Fetch and display notices from the database
                        $notice_query = "SELECT * FROM notice ORDER BY id DESC";
                        $notice_run = mysqli_query($con, $notice_query);
                        while ($notice = mysqli_fetch_array($notice_run)) {
                            echo "<tr>
                                <td>{$notice['notice_title']}</td>
                                <td>{$notice['notice_content']}</td>
                                <td>{$notice['created_at']}</td>
                                <td>
                                    <a href='?customize=notice&edit_notice={$notice['ID']}' class='btn btn-warning btn-sm'>Edit</a>
                                    <a href='?customize=notice&delete_notice={$notice['ID']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete this notice?\")'>Delete</a>
                                </td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>

           
                <!-- Edit Notice Form (Visible when editing) -->
                <?php if (isset($_GET['edit_notice'])) {
                    $notice_id = $_GET['edit_notice'];
                    $edit_query = "SELECT * FROM notice WHERE id='$notice_id'";
                    $edit_run = mysqli_query($con, $edit_query);
                    $edit_notice = mysqli_fetch_array($edit_run);
                ?>
                    <div class="edit-notice mt-4">
                        <h4 class="font-weight-bold">Edit Notice</h4>
                        <form method="post">
                            <input type="hidden" name="notice_id" value="<?php echo $edit_notice['id']; ?>">
                            <div class="form-group">
                                <label for="notice_title">Notice Title:</label>
                                <input type="text" name="notice_title" id="notice_title" class="form-control" value="<?php echo $edit_notice['notice_title']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="notice_content">Notice Content:</label>
                                <textarea name="notice_content" id="notice_content" rows="4" class="form-control" required><?php echo $edit_notice['notice_content']; ?></textarea>
                            </div>
                            <input type="submit" name="edit_notice" class="btn btn-primary btn-md" value="Update Notice">
                        </form>
                    </div>
                <?php } ?>
            </div>
        </div>
    </form>
<?php } ?>

<?php if (isset($_GET['customize']) && $_GET['customize'] == 'social_media') { ?>
    <!-- Form Section -->
    <form method="post" enctype="multipart/form-data">
        <?php
        // Fetch existing social media links from the database
        $query = "SELECT * FROM customize_header";
        $run = mysqli_query($con, $query);
        $row = mysqli_fetch_array($run);

        $facebook = $row['facebook'];
        $youtube = $row['youtube'];
        $instagram = $row['instagram'];
        $linkedin = $row['linkedin'];
        $twitter = $row['twitter'];

        // Handle form submission for social media links
        if (isset($_POST['submit_social_media'])) {
            $facebook = $_POST['facebook'];
            $youtube = $_POST['youtube'];
            $instagram = $_POST['instagram'];
            $linkedin = $_POST['linkedin'];
            $twitter = $_POST['twitter'];

            $update_query = "UPDATE customize_header SET 
                             facebook='$facebook', 
                             youtube='$youtube', 
                             instagram='$instagram', 
                             linkedin='$linkedin', 
                             twitter='$twitter'";
            $update_run = mysqli_query($con, $update_query);

            if ($update_run) {
                $message = "Social media links updated successfully.";
                header('Location: customize.php?customize=social_media&update=success');
                exit();
            } else {
                $message = "Failed to update social media links.";
            }
        }
        ?>

        <!-- Display messages -->
        <div class="row">
            <?php if (isset($message)) { echo "<p style='color:green; font-weight:bold;'>$message</p>"; } ?>
        </div>

        <!-- Social Media Entry Section -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="font-weight-bold">Social Media Links</h2>
                <hr>

                <!-- Social Media Form -->
                <div class="form-group">
                    <label for="facebook">Facebook URL:</label>
                    <input type="text" name="facebook" value="<?php echo $facebook; ?>" class="form-control" placeholder="Enter Facebook URL">
                </div>

                <div class="form-group">
                    <label for="youtube">YouTube URL:</label>
                    <input type="text" name="youtube" value="<?php echo $youtube; ?>" class="form-control" placeholder="Enter YouTube URL">
                </div>

                <div class="form-group">
                    <label for="instagram">Instagram URL:</label>
                    <input type="text" name="instagram" value="<?php echo $instagram; ?>" class="form-control" placeholder="Enter Instagram URL">
                </div>

                <div class="form-group">
                    <label for="linkedin">LinkedIn URL:</label>
                    <input type="text" name="linkedin" value="<?php echo $linkedin; ?>" class="form-control" placeholder="Enter LinkedIn URL">
                </div>

                <div class="form-group">
                    <label for="twitter">Twitter URL:</label>
                    <input type="text" name="twitter" value="<?php echo $twitter; ?>" class="form-control" placeholder="Enter Twitter URL">
                </div>

                <!-- Submit Button -->
                <div class="form-group">
                    <input type="submit" name="submit_social_media" class="btn btn-primary btn-md" value="Save Links">
                </div>
            </div>
        </div>
    </form>

    <!-- Display Social Media Icons -->
    <div class="social-icons mt-4">
        <h4>Follow Us:</h4>
        <a href="<?php echo $facebook; ?>" target="_blank"><img src="facebook_icon.png" alt="Facebook" class="social-icon"></a>
        <a href="<?php echo $youtube; ?>" target="_blank"><img src="youtube_icon.png" alt="YouTube" class="social-icon"></a>
        <a href="<?php echo $instagram; ?>" target="_blank"><img src="instagram_icon.png" alt="Instagram" class="social-icon"></a>
        <a href="<?php echo $linkedin; ?>" target="_blank"><img src="linkedin_icon.png" alt="LinkedIn" class="social-icon"></a>
        <a href="<?php echo $twitter; ?>" target="_blank"><img src="twitter_icon.png" alt="Twitter" class="social-icon"></a>
    
	</div>

    <style>
        .social-icons img.social-icon {
            width: 40px;
            height: 40px;
            margin: 0 5px;
            border-radius: 50%;
        }
    </style>
<?php } ?>
<?php if (isset($_GET['customize']) && $_GET['customize'] == 'lead') { ?>
    <!-- Form Section -->
    <form method="post" enctype="multipart/form-data">
        <?php
        // Message handling for notifications
        $message = '';

    

        // Handle editing a notice
        if (isset($_POST['edit_notice'])) {
            $notice_id = $_POST['notice_id'];
            $notice_title = $_POST['notice_title'];
            $notice_content = $_POST['notice_content'];
            
            $update_notice = "UPDATE notice SET notice_content='$notice_title', notice_title='$notice_content' WHERE id='$notice_id'";
            if (mysqli_query($con, $update_notice)) {
                $message = "Notice updated successfully.";
            } else {
                $message = "Failed to update notice.";
            }
        }

        // Handle deleting a notice
        if (isset($_GET['delete_notice'])) {
            $notice_id = $_GET['delete_notice'];
            $delete_notice = "DELETE FROM notice WHERE id='$notice_id'";
            if (mysqli_query($con, $delete_notice)) {
                $message = "Notice deleted successfully.";
            } else {
                $message = "Failed to delete notice.";
            }
        }

     
        ?>

   

        <!-- Notice Management Section -->
<!-- Notice Management Section -->

       


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the filter and sort data from the POST request
    $start_date = $_POST['start_date'] ?? '';
    $end_date = $_POST['end_date'] ?? '';
    $sort_order = $_POST['sort'] ?? 'date_desc'; // Default to descending
} else {
    // Default values for the first page load
    $start_date = '';
    $end_date = '';
    $sort_order = 'date_desc';
}


?>
<div class="row mt-5">
    <div class="col-md-12">
        <h2 class="font-weight-bold">Lead Generation</h2>
       
        <hr>


        <!-- Date Filter Form -->
        <form method="POST" action="">
            <div class="form-row">
                <div class="col-md-3">
                    <label for="start_date">Start Date</label>
                    <input type="date" name="start_date" id="start_date" class="form-control" value="<?php echo htmlspecialchars($start_date); ?>">
                </div>
                <div class="col-md-3">
                    <label for="end_date">End Date</label>
                    <input type="date" name="end_date" id="end_date" class="form-control" value="<?php echo htmlspecialchars($end_date); ?>">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary btn-md" style="margin-top: 30px;">
                        Filter
                    </button>
			
                </div>
            </div>
        </form>

       <!-- Sorting Form -->
<form method="POST" action="" style="margin-top: 20px;">
    <div class="d-flex justify-content-between">
        <!-- Sorting Buttons on the Left -->
        <div>
            <button type="submit" name="sort" value="date_asc" class="btn btn-link">Sort by Date ↑</button>
            <button type="submit" name="sort" value="date_desc" class="btn btn-link">Sort by Date ↓</button>
        </div>
        
        <!-- Excel Download Button on the Right -->
        <div>
            <a href="#" id="excel" class="btn btn-success btn-md">
                <i class="fa fa-file-excel-o" aria-hidden="true"></i> Download as Excel
            </a>
        </div>
    </div>
</form>


        <!-- Notice List Table -->
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Build SQL query with filtering and sorting
                $query = "SELECT * FROM notice";
                
                // Apply date filter if provided
                if ($start_date && $end_date) {
                    $query .= " WHERE created_at BETWEEN '$start_date' AND '$end_date'";
                } elseif ($start_date) {
                    $query .= " WHERE created_at >= '$start_date'";
                } elseif ($end_date) {
                    $query .= " WHERE created_at <= '$end_date'";
                }

                // Apply sorting based on the selected option
                if ($sort_order == 'date_asc') {
                    $query .= " ORDER BY created_at ASC";
                } else {
                    $query .= " ORDER BY created_at DESC";
                }

                // Execute the query
                $result = mysqli_query($con, $query);

                // Display the results in the table
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$row['notice_title']}</td>
                            <td>{$row['notice_content']}</td>
                            <td>{$row['created_at']}</td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
    </form>
<?php } ?>

<?php 
// Check if the "customize" GET parameter is set to "mail"
if (isset($_GET['customize']) && $_GET['customize'] == 'mail') { 

    // Fetch the current email lead status from the database
    $query = "SELECT * FROM customize_header";
    $run = mysqli_query($con, $query);
    $row = mysqli_fetch_array($run);

    $lead_mail_status = $row['lead_mail']; // Get the existing email

    // Check if the email submission form has been submitted
    if (isset($_POST['submit_email'])) {
        $email = $_POST['email']; // Get the submitted email

        // Check if the email is valid (you can add more validation if needed)
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            // Update the email in the database
            $insert_email = "UPDATE customize_header SET lead_mail='$email'";
            if (mysqli_query($con, $insert_email)) {
                $message = "Thank you! Your email has been submitted."; // Success message
            } else {
                $message = "Failed to submit email. Please try again later."; // Failure message
            }

        } else {
            $message = "Please enter a valid email address."; // Invalid email message
        }
    }

?>

<!-- Email Submission Form -->
<div class="email-lead mt-5">
    <h4 class="font-weight-bold">Submit Your Email</h4>

    <!-- Display the message if it is set -->
    <?php if (isset($message)) { ?>
        <div class="alert alert-info"><?php echo $message; ?></div>
    <?php } ?>

    <!-- Email form -->
    <form method="post">
        <div class="form-group">
            <label for="email">Enter Your Email (lead):</label>
            <!-- Populate the email input field with the existing or default value -->
            <input type="email" name="email" id="email" class="form-control" value="<?php echo isset($email) ? $email : $lead_mail_status; ?>" required>
        </div>
        <input type="submit" name="submit_email" class="btn btn-info btn-md" value="Submit Email">
    </form>
</div>
<?php } ?>

			
        </div>
    </div>
</div>

<?php require_once('include/footer.php'); ?>
