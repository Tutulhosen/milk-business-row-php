<?php include("include/header.php");
 if(!isset($_SESSION['email'])){
    header('location: signin.php');
}                

?>

<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-md-3">
            <?php include("include/sidebar.php");?>
        </div>
        
        <div class="col-md-9">
            <div class="row">
              <div class="col-md-1">
                <i class="fad fa-box-check fa-6x text-success"></i>
              </div>
              <div class="col-md-11 text-left mt-4">
               <h1 class="ml-5 display-4 font-weight-normal">Verified Orders:</h1>
              </div>
            </div>
           <hr>
		   
		   <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the filter and sort data from the POST request
    $start_date = $_POST['start_date'] ?? '';
    $end_date = $_POST['end_date'] ?? '';
    $sort_order = $_POST['sort'] ?? 'date_desc'; // Default to descending
    $search_name = $_POST['search_name'] ?? '';
    $search_phone = $_POST['search_phone'] ?? '';
	  $Order_number = $_POST['Order_number'] ?? '';
    $Order_status = $_POST['Order_status'] ?? '';
	
} else {
    // Default values for the first page load
    $start_date = '';
    $end_date = '';
    $sort_order = 'date_desc';
    $search_name = '';
    $search_phone = '';
	 $Order_number = '';
    $Order_status = '';
}




?>
<div class="row">
    <div class="col-md-12">
   
   <div class="row">
    <!-- Left Section with Buttons -->
    <div class="col-4">
        <div class="pagetitle" style="background-color:none!important;">
            <nav>
                <ol class="breadcrumb" style="background-color:#fff!important; padding: 10px; border-radius: 5px;">
                    <!-- Add New Contact Button -->
                    <a href="order_entry.php" class="btn btn-sm btn-primary btn-icon m-1" data-bs-toggle="tooltip" title="Grid View">
                        <i class="fa fa-plus text-white"></i>
                    </a>
                    <!-- Create New Contact Button -->
                    <a href="contact.php" class="btn btn-sm btn-primary btn-icon m-1" data-bs-toggle="tooltip" title="Create New Contact">
                       <i class="fa fa-home" aria-hidden="true"></i>
                    </a>
					<!-- Create New Contact Button -->
                    <a href="contact.php" class="btn btn-sm btn-primary btn-icon m-1" data-bs-toggle="tooltip" title="Create New Contact">
                       <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    </a>
					<!-- Create New Contact Button -->
                    <a href="contact.php" class="btn btn-sm btn-primary btn-icon m-1" data-bs-toggle="tooltip" title="Create New Contact">
                     <i class="fa fa-motorcycle" aria-hidden="true"></i>

                    </a>
					
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-1">
	  </div>
	   <div class="col-3">
	  </div>
</div>

   
        <hr>


        <!-- Date Filter Form -->
        <form method="POST" action="">
		
			  <div class="form-row">
				 <div class="col-md-3">
                    <label for="search_name">Order number:</label>
                    <input type="text" name="Order_number" id="Order_number" class="form-control">
                </div>
               <div class="col-md-3">
                    <label for="search_name">Order Status:</label>
                    <input type="text" name="Order_status" id="Order_status" class="form-control">
                </div>
               
			 </div>
			 
            <div class="form-row">
				 <div class="col-md-3">
                    <label for="search_name">Search by Name</label>
                    <input type="text" name="search_name" id="search_name" class="form-control" placeholder="Enter name" value="<?php echo htmlspecialchars($search_name); ?>">
                </div>
                <div class="col-md-3">
                    <label for="search_phone">Search by Phone</label>
                    <input type="text" name="search_phone" id="search_phone" class="form-control" placeholder="Enter phone number" value="<?php echo htmlspecialchars($search_phone); ?>">
                </div>
			 </div> 
			  <div class="form-row">
                <div class="col-md-3">
                    <label for="start_date">Start Date</label>
                    <input type="date" name="start_date" id="start_date" class="form-control" value="<?php echo htmlspecialchars($start_date); ?>">
                </div>
                <div class="col-md-3">
                    <label for="end_date">End Date</label>
                    <input type="date" name="end_date" id="end_date" class="form-control" value="<?php echo htmlspecialchars($end_date); ?>">
                </div>
				   </div>
				 <div class="form-row">
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
                    <th>Order ID</th>
					<th>Customer</th>
                    <th>Order Date</th>
                    <th>Customer</th>
                    <th>Note</th>
                    <th class="text-right">Ord. Status</th>
                    <th>Order Total	Action</th>
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
                $query = "SELECT * FROM customer_order WHERE 1=1";

                // Apply date filter if provided
                if ($start_date && $end_date) {
                    $query .= " AND order_date BETWEEN '$start_date' AND '$end_date'";
                } elseif ($start_date) {
                    $query .= " AND order_date >= '$start_date'";
                } elseif ($end_date) {
                    $query .= " AND order_date <= '$end_date'";
                }

                // Apply search filters
                if (!empty($search_name)) {
                    $query .= " AND customer_fullname LIKE '%" . mysqli_real_escape_string($con, $search_name) . "%'";
                }
                if (!empty($search_phone)) {
                    $query .= " AND customer_phonenumber LIKE '%" . mysqli_real_escape_string($con, $search_phone) . "%'";
                }
				 if (!empty($Order_number)) {
                    $query .= " AND invoice_no LIKE '%" . mysqli_real_escape_string($con, $Order_number) . "%'";
                }
				
	
   

                // Apply sorting based on the selected option
                if ($sort_order == 'date_asc') {
                    $query .= " ORDER BY order_date ASC";
                } else {
                    $query .= " ORDER BY order_date DESC";
                }

                // Execute the query
                $result = mysqli_query($con, $query);

                // Display the results in the table
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td>" . htmlspecialchars($row['invoice_no']) . "</td>
        <td>" . htmlspecialchars($row['customer_fullname']) . "</td>
        <td>" . htmlspecialchars($row['order_date']) . "</td>
        <td>" . htmlspecialchars($row['products_qty']) . "</td>
        <td>" . htmlspecialchars($row['product_amount']) . "</td>
        <td>";

        if ($row['order_status'] == 'verified') {
            echo "<i class='fas fa-check-circle text-success'></i> " . htmlspecialchars($row['order_status']);
        } else {
          
		    echo "<i class='fas fa-exclamation-circle text-warning'></i> " . htmlspecialchars($row['order_status']);
        }

		
                                 
                                  
		
echo "</td>
   
                             
                                  
                                  
						
                        <td>
                            <a title='Print Order' class='btn btn-success' target='_blank' href='invoice?invoice=" . htmlspecialchars($row['invoice_no']) . "'>
                                <i class='fa fa-print'></i>  
                            </a>
                            <a title='Update Order' class='btn btn-success' target='_blank' href='edit_furn_verify_pen?order_id=" . htmlspecialchars($row['order_id']) . "'>
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

		   
		   
		   
		   
		   
		   
		   
        
            </form>
        </div>



    </div>
</div>
<?php include("include/footer.php"); ?>