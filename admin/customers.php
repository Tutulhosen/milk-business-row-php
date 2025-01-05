<?php  require_once('include/header.php');
if(!isset($_SESSION['email'])){
  header('location: signin.php');
}
?>
<div class="container-fluid mt-2">
     <div class="row">
           <div class="col-md-3 col-lg-3">
            <?php require_once('include/sidebar.php'); ?>
           </div>

        <?php 
         if(!isset($_SESSION['email']))
         {
            header('location: signin.php');
          }
         ?>
        
              <div class="col-md-9 col-lg-9">
                <div class="row">
				
		<!--contact-breadcumb-end-->	

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
				 <h2 class="font-weight-bold">CONTACT</h2>
			  </nav>
			</div>
		</div>	
	
				  
				  
			<div class="col-md-12">

			<!--<button type="button" id="show_estimate" class="btn btn-success btn-xs mb10">Total Items <i class="fa fa-arrow-right"></i></button>-->
			

  
<?php if (isset($_GET['customize']) && $_GET['customize'] == 'lead')  ?>
    <!-- Form Section -->
    <form method="post" enctype="multipart/form-data">
        <?php
        // Message handling for notifications
        $message = '';

    

       
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
    $search_name = $_POST['search_name'] ?? '';
    $search_phone = $_POST['search_phone'] ?? '';
} else {
    // Default values for the first page load
    $start_date = '';
    $end_date = '';
    $sort_order = 'date_desc';
    $search_name = '';
    $search_phone = '';
}


?>
<div class="row">
    <div class="col-md-12">
   
   <div class="row">
    <!-- Left Section with Buttons -->
    <div class="col-3">
        <div class="pagetitle" style="background-color:none!important;">
            <nav>
                <ol class="breadcrumb" style="background-color:#fff!important; padding: 10px; border-radius: 5px;">
                    <!-- Add New Contact Button -->
                    <a href="add_new_contact.php" class="btn btn-sm btn-primary btn-icon m-1" data-bs-toggle="tooltip" title="Grid View">
                        <i class="fa fa-plus text-white"></i>
                    </a>
                    <!-- Create New Contact Button -->
                    <a href="contact.php" class="btn btn-sm btn-primary btn-icon m-1" data-bs-toggle="tooltip" title="Create New Contact">
                        <i class="fa fa-list" aria-hidden="true"></i>
                    </a>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-3">
	  </div>
	   <div class="col-3">
	  </div>
    <!-- Right Section with Excel Download Button -->
    <div class="col-3">
        <div class="text-end">
            <a href="#" id="excel" class="btn btn-success btn-md" style="display: inline-block; margin: 10px 0;">
                <i class="fa fa-file-excel-o" aria-hidden="true"></i> Download as Excel
            </a>
        </div>
    </div>
</div>

   
        <hr>


        <!-- Date Filter Form -->
        <form method="POST" action="">
            <div class="form-row">
				 <div class="col-md-3">
                    <label for="search_name">Search by Name</label>
                    <input type="text" name="search_name" id="search_name" class="form-control" placeholder="Enter name" value="<?php echo htmlspecialchars($search_name); ?>">
                </div>
                <div class="col-md-3">
                    <label for="search_phone">Search by Phone</label>
                    <input type="text" name="search_phone" id="search_phone" class="form-control" placeholder="Enter phone number" value="<?php echo htmlspecialchars($search_phone); ?>">
                </div>
			
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
        
        
    </div>
</form>


        <!-- Notice List Table -->
        <table class="table table-bordered table-striped" id="myTable">
            <thead>
                <tr class="bg-success">
                    <th>Name</th>
                    <th>Address 1</th>
                    <th>Address 2</th>
                    <th>Phone Number</th>
                    <th class="text-right">Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
				
				
				 // Handle deleting a notice
        if (isset($_GET['del_contact'])) {
            $del_contact = $_GET['del_contact'];
            $delete_notice = "DELETE FROM contacts WHERE id='$del_contact'";
            if (mysqli_query($con, $delete_notice)) {
				 $message = "Contact details updated successfully.";
                header('Location:contact.php');
              
            } else {
                $message = "Failed to delete notice.";
            }
        }
				
				
				
				
				
                // Build SQL query with filtering and sorting
                $query = "SELECT * FROM contacts WHERE 1=1";

                // Apply date filter if provided
                if ($start_date && $end_date) {
                    $query .= " AND created_at BETWEEN '$start_date' AND '$end_date'";
                } elseif ($start_date) {
                    $query .= " AND created_at >= '$start_date'";
                } elseif ($end_date) {
                    $query .= " AND created_at <= '$end_date'";
                }

                // Apply search filters
                if (!empty($search_name)) {
                    $query .= " AND name LIKE '%" . mysqli_real_escape_string($con, $search_name) . "%'";
                }
                if (!empty($search_phone)) {
                    $query .= " AND phone LIKE '%" . mysqli_real_escape_string($con, $search_phone) . "%'";
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
                        <td>" . htmlspecialchars($row['name']) . "</td>
                        <td>" . htmlspecialchars($row['address1']) . "</td>
                        <td>" . htmlspecialchars($row['address2']) . "</td>
                        <td>" . htmlspecialchars($row['phone']) . "</td>
                        <td>" . htmlspecialchars($row['email']) . "</td>
                        <td>
                            <a title='Print Order' class='btn btn-success' target='_blank' href='contact?del_contact=" . htmlspecialchars($row['id']) . "'>
                                <i class='fa fa fa-trash-o'></i>  
                            </a>
                            <a title='Update Order' class='btn btn-success' target='_blank' href='add_new_contact.php?edit_contact=" . htmlspecialchars($row['id']) . "'>
                                <i class='fa fa-edit'></i>
                            </a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
    </form>

  
      <?php 
 require_once('include/footer.php');
?>