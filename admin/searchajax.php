<?php 
	 include("include/dbcon.php"); 
  
  
  

// Get the search parameter safely
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the search parameter safely
$name = isset($_POST['name']) ? trim($_POST['name']) : '';

// Build the query with search conditions
if (!empty($name)) {
    $nameEscaped = mysqli_real_escape_string($con, $name);
    $query = "SELECT * FROM customer WHERE cust_name LIKE '$nameEscaped%' ORDER BY cust_id DESC LIMIT 10";
} else {
    $query = "SELECT * FROM customer ORDER BY cust_id DESC LIMIT 10";
}

// Execute the query
$result = mysqli_query($con, $query);

// Check if the query executed successfully
if (!$result) {
    echo '<div class="result-item" style="padding: 5px; border-bottom: 1px solid #ddd; color: red;">Error: ' . mysqli_error($con) . '</div>';
    mysqli_close($con);
    exit;
}

// Return results
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      // Wrap the result item div with an anchor tag
        echo '<a href="order_entry.php?cus_id=' . $row['cust_id'] . '" style="text-decoration: none;">';  // Replace with the link you want to direct to
        echo '<div class="result-item" style="padding: 15px; margin-bottom: 10px; border-radius: 8px; background-color: #f9f9f9; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">';
        echo '<div style="font-size: 18px; font-weight: bold; color: #333;">' . htmlspecialchars($row['cust_name']) . '</div>';
        echo '<div style="font-size: 16px; color: #555;">Phone: <strong>' . htmlspecialchars($row['cust_number']) . '</strong></div>';
        echo '<div style="font-size: 16px; color: #555;">Address: <strong>' . htmlspecialchars($row['cust_add']) . '</strong></div>';
        echo '<div style="font-size: 16px; color: #555;">Customer ID: <strong>' . htmlspecialchars($row['cust_id']) . '</strong></div>';
        echo '</div>';
        echo '</a>';  // End the anchor tag
    }
} else {
    echo '<div class="result-item" style="padding: 5px; border-bottom: 1px solid #ddd;">No results found.</div>';
}

// Close the database connection

  
  
  
    if (isset($_POST["catch"]))

  {
    
  
    $name = $_POST['catch'];
    if(!empty( $name )){

      $sql = "SELECT * FROM furniture_product WHERE title LIKE '$name%' order by pid  limit 10";  
      $product_run   = mysqli_query($con,$sql);
      $output = '';
      if(mysqli_num_rows($product_run) )
      {
          
       
              while($data = mysqli_fetch_assoc($product_run)){
                  
                  $output .='<div  class="col-6 p-2 serchItemBox"style="border-bottom: 1px solid #dee2e6;
                  border-right: 1px solid #dee2e6;
                  float: left;">';
                  $output .='<div class="col-3 p-2 float-start"style="float: left !important;">
                              <a href="product-detail?product_id='.$data['pid'].'" >  <img src="img/'.$data['image'].'" alt="" width="80px" height="80px" style="transition: all .3s ease 0s;"></a>
      
                  
                            
                          </div>';
                  $output .='<div class="col-7 float-end"style="loat: right !important;margin-top:20px">
                              <a href="product-detail?product_id='.$data['pid'].'" class="h6" style="margin-top: 0;
                              margin-bottom: .5rem;
                              font-weight: 500;
                              font-size:10px;
                              line-height: 1.2;"> '.$data['title'].' </a><br>
                              <span class="bg-brand pt-1 pb-1 pr-10 pl-10 text-white border-radius-10">200</span>
                          </div>';
                  $output .='</div>';
              
              }
          
      } 
  ;
  
      echo $output;
      
  
  
  }




  }

  
  
  

  if(!empty( $name )){
   $name = $_POST['name'];
   $sql = "SELECT * FROM furniture_product WHERE title LIKE '$name%' order by pid  limit 10";  
   $query = mysqli_query($con,$sql);
   $data='';
   while($row = mysqli_fetch_assoc($query))
   {
       $data .= 
 "<tr><td>".$row['title']."</td><td><a title='Edit Product' href='furniture_pro_edit.php?pid=".$row['pid']."' class='btn btn-primary btn-sm'>
                                    <i class='fal fa-edit' aria-hidden='true'></i>
                                    </a></td>
                                    
                                    <td>
									
									
									<a title='Edit Product' href='furniture_pro_copy?pid=".$row['pid']."' class='btn btn-info btn-sm'>
                                    <i class='fal fa-copy' aria-hidden='true'></i>
                                    </a>
									
									
									
									
									</td>
                                    
                                    <td>
									
									
									<a title='Edit Product' href='furniture_pro_view.php?del=".$row['pid']."' class='btn btn-danger btn-sm'>
                                   X
                                    </a>
									
									
									
									
									</td></tr>";
   }
    echo $data;


  }
 if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Database connection
 if(!empty( $_GET['search'] )){
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the search query
$search = $_GET['search'] ?? '';

// Query to search products
$query = $con->prepare("SELECT * FROM furniture_product WHERE title LIKE CONCAT('%', ?, '%') LIMIT 10"); // Corrected the `LIKE` clause
$query->bind_param("s", $search);
$query->execute();
$result = $query->get_result();

// Display results
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="autocomplete-item" 
                    data-name="' . htmlspecialchars($row['title']) . '" 
                    data-price="' . htmlspecialchars($row['price']) . '"
                    style="display: flex; align-items: center; padding: 10px 15px; margin: 5px 0; border: 1px solid #ddd; border-radius: 8px; background-color: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); transition: transform 0.2s, box-shadow 0.2s; cursor: pointer;"
                    onmouseover="this.style.transform=\'translateY(-2px)\'; this.style.boxShadow=\'0 4px 8px rgba(0, 0, 0, 0.2)\'; this.style.backgroundColor=\'#f9f9f9\';"
                    onmouseout="this.style.transform=\'translateY(0)\'; this.style.boxShadow=\'0 2px 4px rgba(0, 0, 0, 0.1)\'; this.style.backgroundColor=\'#fff\';">
                <div class="autocomplete-content" style="display: flex; align-items: center; width: 100%;">
                    <img src="img/' . htmlspecialchars($row['image']) . '" alt="Product Image" 
                         style="width: 50px; height: 50px; border-radius: 5px; object-fit: cover; margin-right: 15px; border: 1px solid #ccc;">
                    <div class="product-details" style="flex: 1;">
                        <h4 class="product-title" style="font-size: 16px; font-weight: bold; color: #333; margin: 0;">' . htmlspecialchars($row['title']) . '</h4>
                        <p class="product-price" style="font-size: 14px; color: #555; margin: 5px 0 0;">' . htmlspecialchars($row['price']) . ' BDT</p>
                    </div>
                </div>
            </div>';
    }
}  else {
    echo '<div class="autocomplete-item">No results found</div>';
 } }

 
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if orderItems exists in POST data
    if (isset($_POST['orderItems'])) {
        $orderItems = json_decode($_POST['orderItems'], true);  // Decode JSON string to array

        if ($orderItems && is_array($orderItems)) {
            // Continue with the order processing logic
            foreach ($orderItems as $item) {
                // Your logic to handle each item
            }
        } else {
            echo "Error: Invalid order items data.";
        }
    } else {
        echo "Error: No order items provided.";
        exit;  // Exit early if no order items are provided
    }

    // Get the customer details from the form
    $customerName = mysqli_real_escape_string($con, $_POST['customer_name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $mobileNumber = mysqli_real_escape_string($con, $_POST['mobile_number']);
    $note = mysqli_real_escape_string($con, $_POST['note']);
    $customerId = mysqli_real_escape_string($con, $_POST['customer_id']);
    $customerEmail = mysqli_real_escape_string($con, $_POST['customer_email']);

    // Calculate the total amount for the order
    $totalAmount = 0;
    foreach ($orderItems as $item) {
        $totalAmount += $item['total'];  // Total is the total price for each item
    }

    // Insert the order details into the orders table
    $query = "INSERT INTO customer_order (customer_fullname, customer_address, customer_phonenumber, note, customer_id, customer_email, product_amount)
              VALUES ('$customerName', '$address', '$mobileNumber', '$note', '$customerId', '$customerEmail', '$totalAmount')";
    
    if (mysqli_query($con, $query)) {
        $orderId = mysqli_insert_id($con); // Get the inserted order ID

        // Insert each order item into the order_items table
        foreach ($orderItems as $item) {
            $productName = mysqli_real_escape_string($con, $item['product_name']);
            $quantity = $item['quantity'];
            $price = $item['price'];
            $total = $item['total'];

            $itemQuery = "INSERT INTO order_items (order_id, product_name, quantity, price, total)
                          VALUES ('$orderId', '$productName', '$quantity', '$price', '$total')";

            if (!mysqli_query($con, $itemQuery)) {
                // Handle error for individual item insert
                echo "Error inserting item: " . mysqli_error($con);
            }
        }

        // Redirect to confirmation page or return a success message
        echo "Order has been successfully placed!";
        // Optionally redirect to a confirmation page
        // header("Location: order_confirmation.php"); 
    } else {
        // Handle error for order insert
        echo "Error inserting order: " . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
}





?>


 
 
 
 
 
 

  





