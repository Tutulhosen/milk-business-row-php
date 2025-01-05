<?php


 include("include/dbcon.php"); 

 
                 // Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the search parameters
$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';

// Build the query
$query = "SELECT * FROM contacts WHERE 1=1";

if (!empty($name)) {
    $query .= " AND name LIKE '%" . mysqli_real_escape_string($con, $name) . "%'";
}
if (!empty($phone)) {
    $query .= " AND phone LIKE '%" . mysqli_real_escape_string($con, $phone) . "%'";
}

$result = mysqli_query($con, $query);

// Return results
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="result-item">';
        echo '<strong>' . htmlspecialchars($row['name']) . '</strong><br>';
        echo 'Phone: ' . htmlspecialchars($row['phone']);
        echo '</div>';
    }
} else {
    echo '<div class="result-item">No results found.</div>';
}

 
	
					
                    if(isset($_POST['sample_submit'])){ 
					
					
				echo	$ref      = $_POST['ref'];
                 echo    $person_name      = $_POST['person_name'];
				echo	$phone      = $_POST['phone'];
                echo     $buyer_name      = $_POST['buyer_name'];
				echo	$factory_name      = $_POST['factory_name'];
                   
					
					
					
                        
                    if(!empty($ref) or !empty($person_name) or !empty($factory_name)){
                     $query = "INSERT INTO sample(`person_name`,`phone`,`factory_name`,`buyer_name`,`ref`)
                      VALUES('$person_name','$phone','$factory_name','$buyer_name','$ref')";
                     
					 mysqli_query($con,$query);
                       
							
							
                       
					}}
					          
					
                
				
                   




 
