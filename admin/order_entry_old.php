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


<div class="container-fluid mt-4">
    <script src="ckeditor/ckeditor.js"></script>
    <div class="row">
        <div class="col-md-3 col-lg-3">
            <?php require_once('include/sidebar.php'); ?>
        </div>

        <div class="col-md-9 col-lg-9">
            <div class="container mt-5">
                
        <h3 style="font-size: 20px; font-weight: bold; margin-bottom: 10px;">Order Entry</h3>
       
		
		

		
		
    </div>
	
	<div class="col-md-3">
    <input class="form-control" name="searchName" type="text" id="searchName" placeholder="Search by Name">
</div>
<div id="results" class="results"></div>
 <?php if(isset($_GET['cus_id'])){
            $cus_id   = $_GET['cus_id'];
            $query = "SELECT * FROM customer WHERE cust_id  = '$cus_id'";
			 $connection = mysqli_query($con, $query);
              $row = mysqli_fetch_assoc($connection);
 }
			?>
				
                <form id="orderForm" method="POST" action="searchajax">
				
				 
				
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="customerName" class="form-label">Customer Name *</label>
                            <input type="text" id="customerName" value="<?php 
if (!empty($row['cust_name'])) {
    echo $row['cust_name'];
}
?>" placeholder="<?php 
if (!empty($row['cust_name'])) {
    echo $row['cust_name'];
}
?>" name="customer_name" class="form-control" required >
                        </div>
                        <div class="col-md-6">
                            <label for="customerAddress" class="form-label">Address</label>
                            <input type="text" id="customerAddress" name="address" class="form-control" value="<?php 
if (!empty($row['cust_add'])) {
    echo $row['cust_add'];
}
?>" placeholder="<?php 
if (!empty($row['cust_add'])) {
    echo $row['cust_add'];
}
?> "   >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="mobileNumber" class="form-label">Mobile Number</label>
                            <input type="text" id="mobileNumber" name="mobile_number" class="form-control" value="<?php 
if (!empty($row['cust_number'])) {
    echo $row['cust_number'];
}
?>" placeholder="<?php 
if (!empty($row['cust_number'])) {
    echo $row['cust_number'];
}
?> " >
                        </div>
                        <div class="col-md-6">
                            <label for="note" class="form-label">Note</label>
                            <input type="text" id="note" name="note" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="customerId" class="form-label">Customer ID:</label>
                            <input type="text" id="customerId" name="customer_id" class="form-control" >
                        </div>
                        <div class="col-md-6">
                            <label for="customerEmail" class="form-label">Customer Email:</label>
                            <input type="email" id="customerEmail" name="customer_email" class="form-control" value="<?php 
if (!empty($row['cust_email'])) {
    echo $row['cust_email'];
}
?>" placeholder="<?php 
if (!empty($row['cust_email'])) {
    echo $row['cust_email'];
}
?> " >
                        </div>
                    </div>

                    <div class="row mb-3 position-relative">
                        <div class="col-md-12">
                            <label for="itemSearch" class="form-label">Item</label>
                            <input type="text" id="itemSearch" class="form-control" placeholder="Search item..." >
                            <div id="autocomplete-results" class="autocomplete-results"></div>
                        </div>
                    </div>

                    <div id="orderSummary" class="mt-3">
                        <h6>Total Items:</h6>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="orderItems">
                                <!-- Dynamic Items Added Here -->
                            </tbody>
                        </table>
                        <div class="text-end">
                            <strong>Total: <span id="totalAmount">0</span> BDT</strong>
                        </div>
                    </div>

                    <button type="submit" name="submit_order" class="btn btn-success mt-3">Submit Order</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php 


?>


<script>
$(document).ready(function () {
    // Log the orderItems to check if it's populated
   
  function searchContacts() {
            let name = $("#searchName").val();

            $.ajax({
                url: "searchajax", // The PHP file to handle the search
                method: "POST",
                data: { name: name }, // Send the name as POST data
                success: function (response) {
                    $("#results").html(response); // Update the results container
                },
                error: function (xhr, status, error) {
                    console.error("Error: " + error);
                },
            });
        }

        // Trigger search on typing in the input field
        $("#searchName").on("keyup", function () {
            searchContacts();
        });
   console.log(orderItems);
	

    // Search items in the database
    $("#itemSearch").on("input", function () {
        const query = $(this).val();
        if (query.length > 1) { // Start search after 2 characters
            $.ajax({
                url: "searchajax.php", // Update to your PHP file path
                method: "GET",
                data: { search: query },
                success: function (data) {
                    const resultsContainer = $("#autocomplete-results");
                    resultsContainer.html(data); // Populate the autocomplete dropdown
                },
            });
        } else {
            $("#autocomplete-results").empty(); // Clear results if query is too short
        }
    });

    // Add selected item to the order
    $("#autocomplete-results").on("click", ".autocomplete-item", function () {
        const itemName = $(this).data("name"); // Corrected key for name
        const itemPrice = $(this).data("price"); // Corrected key for price
        const existingRow = $(`#orderItems tr[data-name="${itemName}"]`);

        if (existingRow.length) {
            const qtyInput = existingRow.find(".qty");
            const newQty = parseInt(qtyInput.val()) + 1;
            qtyInput.val(newQty);
            existingRow.find(".total").text((newQty * itemPrice).toFixed(2));
        } else {
            $("#orderItems").append(`
                <tr data-name="${itemName}">
                    <td>${itemName}</td>
                    <td><input type="number" class="form-control qty" value="1" min="1" style="width: 60px;"></td>
                    <td><input type="number" class="form-control price" value="${itemPrice}" min="0" style="width: 80px;"></td>
                    <td class="total">${itemPrice.toFixed(2)}</td>
                    <td><button type="button" class="btn btn-danger btn-sm remove-item">Remove</button></td>
                </tr>
            `);
        }
        calculateTotal();
        $("#itemSearch").val(""); // Clear the search field
        $("#autocomplete-results").empty(); // Clear the dropdown
    });

    // Update total price when quantity or price changes
    $("#orderItems").on("input", ".qty, .price", function () {
        const row = $(this).closest("tr");
        const qty = parseInt(row.find(".qty").val());
        const unitPrice = parseFloat(row.find(".price").val());
        const totalPrice = qty * unitPrice;

        row.find(".total").text(totalPrice.toFixed(2)); // Update the row's total
        calculateTotal(); // Update the grand total
    });

    // Remove item from the order
    $("#orderItems").on("click", ".remove-item", function () {
        $(this).closest("tr").remove(); // Remove the row
        calculateTotal(); // Recalculate the total after removal
    });

    // Calculate total amount, including delivery charge and discount
    function calculateTotal() {
        let total = 0;
        $("#orderItems .total").each(function () {
            total += parseFloat($(this).text());
        });

        // Get delivery charge and discount
        const deliveryCharge = parseFloat($("#deliveryCharge").val()) || 0;
        const discount = parseFloat($("#discount").val()) || 0;

        // Apply delivery charge and discount
        total += deliveryCharge;
        total -= discount;

        // Update total amount
        $("#totalAmount").text(total.toFixed(2)); // Show total with 2 decimals
    }

    // Update total when delivery charge or discount is modified
    $("#deliveryCharge, #discount").on("input", function () {
        calculateTotal(); // Recalculate total whenever delivery or discount is updated
    });

    // Collect customer and order data and send via AJAX
    $("#orderForm").on('submit', function (e) {
        e.preventDefault(); // Prevent default form submission

        // Collect customer form data
        const customerData = {
            customer_name: $('#customerName').val(),
            address: $('#customerAddress').val(),
            mobile_number: $('#mobileNumber').val(),
            note: $('#note').val(),
            customer_id: $('#customerId').val(),
            customer_email: $('#customerEmail').val()
        };

        // Collect the order items as an array
        const orderItems = [];
        $("#orderItems tr").each(function () {
            const productName = $(this).find("td:eq(0)").text();
            const quantity = $(this).find(".qty").val();
            const price = $(this).find(".price").val();
            const total = $(this).find(".total").text();
            
            orderItems.push({
                product_name: productName,
                quantity: quantity,
                price: price,
                total: total
            });
        });

        // Convert orderItems array to JSON string
        const orderItemsJson = JSON.stringify(orderItems);

        // Send the data to the PHP script using AJAX
        $.ajax({
            url: "searchajax.php",  // Replace with your PHP file path
            method: "POST",
            data: {
                ...customerData,
                orderItems: orderItemsJson  // Send the order items as a JSON string
            },
            success: function (response) {
                alert(response);  // Handle the success response
                window.location.href = 'searchajax.php'; // Redirect to confirmation page
            },
            error: function (xhr, status, error) {
                alert("There was an error processing your request.");
            }
        });
    });
});

</script>

<?php 
    require_once('include/footer.php');
?>
