<?php  require_once('include/header.php');
if(!isset($_SESSION['email'])){
  header('location: signin.php');
}
?>
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link href="css/imageuploadify.min.css" rel="stylesheet">
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
			
			  <nav>
				<ol class="breadcrumb"  style="background-color:#fff!important;">
				  <li style="color: #6fd943;" class="breadcrumb-item"><a href="index.php">Home</a></li>
				  <li class="breadcrumb-item">Slider</li>
				 
				</ol>
			  </nav>
			</div>
		</div>	
		<div class ="col-3">	
			
		</div>	<div class ="col-4">	
			
		</div>	<div class ="col-2">	
			<div class="pagetitle" style="background-color:none!important;">
			 
			  <nav>
				<ol class="breadcrumb"  style="background-color:#fff!important;">
		
				  
				 
				</ol>
			  </nav>
			</div>
		</div>	
	
				  
				  
			<div class="col-md-12">

			
			  
				  <div class="dash-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
          
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        
  
  <!--slider-image-start-from-here-->
  <?php
// Database connection

$con = mysqli_connect($host,$username,$passwrod,$dbName);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert or Update Image
if (isset($_POST['submit_slider'])) {
    $alt = $_POST['alt'];
    $image = $_FILES['upload']['name'];
    $tmp_image = $_FILES['upload']['tmp_name'];

    // Directory for storing images
    $target_dir = "img/slider/";

    if ($image != '') {
        $target_file = $target_dir . basename($image);

        // Move the uploaded file
        if (move_uploaded_file($tmp_image, $target_file)) {
            // Check if the image already exists in the database
            $query = "SELECT * FROM slider_images WHERE id = 1"; // Assuming single record for slider
            $result = mysqli_query($con, $query);

            if (mysqli_num_rows($result) > 0) {
                // Update record if exists
                $update_query = "UPDATE slider_images SET image_path='$image', alt='$alt' WHERE id=1";
                mysqli_query($con, $update_query);
            } else {
                // Insert new record if not exists
                $insert_query = "INSERT INTO slider_images (image_path, alt) VALUES ('$image', '$alt')";
                mysqli_query($con, $insert_query);
            }
             if (mysqli_query($con, $query)) {
        echo "<p style='color:green; font-weight:bold;'>Image upload successfully.</p>";
    } else {
        echo "<p style='color:red; font-weight:bold;'>Failed to delete image.</p>";
    }
          
        } else {
            echo "<p style='color:red; font-weight:bold;'>Failed to upload the image.</p>";
        }
    }
}

// Delete Image
if (isset($_POST['delete_image'])) {
    $image_id = $_POST['image_id'];
    $query = "DELETE FROM slider_images WHERE id='$image_id'";
    if (mysqli_query($con, $query)) {
        echo "<p style='color:green; font-weight:bold;'>Image deleted successfully.</p>";
    } else {
        echo "<p style='color:red; font-weight:bold;'>Failed to delete image.</p>";
    }
}



// Fetch images from the database for display
$query = "SELECT * FROM slider_images";
$result = mysqli_query($con, $query);
?>

<div class="container" style="max-width: 900px; margin: auto;">
    <!-- Page Title -->
    <div style="text-align: center; margin-bottom: 20px;">
        <h2 style="color: #007bff; font-weight: bold;">Manage Slider Images</h2>
        <p style="color: #6c757d;">Easily add, update, or delete slider images for your website. Recommended size: **1200x400 pixels**.</p>
    </div>

    <!-- Form to Add or Update Image -->
    <div style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; border-radius: 10px; background-color: #fff; margin-bottom: 30px;">
        <h4 style="color: #495057; margin-bottom: 15px;">Upload New Slider Image</h4>
        <form method="post" enctype="multipart/form-data">
            <div style="margin-bottom: 15px;">
                <label for="alt" style="font-weight: bold; color: #343a40;">Image ALT Text:</label>
                <input type="text" name="alt" class="form-control" placeholder="Enter image description" required 
                       style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="upload" style="font-weight: bold; color: #343a40;">Choose Image:</label>
                <input type="file" name="upload" class="form-control-file" required 
                       style="border: 1px solid #ced4da; padding: 10px; border-radius: 5px; width: 100%;">
            </div>
            <button type="submit" name="submit_slider" 
                    style="background-color: #28a745; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; width: 100%;">
                <i class="fas fa-upload"></i> Upload Image
            </button>
        </form>
    </div>

    <!-- Display Uploaded Images -->
    <div class="row" style="margin: 0;">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-lg-4 col-md-6" style="margin-bottom: 30px; padding: 10px;">
                <div style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px; overflow: hidden; background-color: #fff;">
                    <div style="text-align: center; padding: 15px;">
                        <img src="img/slider/<?php echo $row['image_path']; ?>" 
                             alt="<?php echo $row['alt']; ?>" 
                             style="width: 100%; height: 200px; object-fit: cover; border-radius: 5px;">
                    </div>
                    <div style="text-align: center; padding: 10px;">
                        <h5 style="color: #495057; font-size: 16px;"><?php echo $row['alt']; ?></h5>
                        <form method="post" class="d-inline">
                            <input type="hidden" name="image_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="delete_image" 
                                    style="background-color: #dc3545; color: #fff; padding: 5px 10px; border: none; border-radius: 5px; cursor: pointer;">
                                <i class="fas fa-trash-alt"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


  
   <!--slider-image-end-from-here-->
  
  
  
  
  <script type="text/javascript">
  <script type="text/javascript">
            $(document).ready(function() {
                $('input[type="file"]').imageuploadify();
            })
			
			
			
			
			
			$(function(){
  $('.input-images').imageUploader();
});

let preloaded = [
    {id: 1, src: '1.jpg'},
    {id: 2, src: '2.jpg'},
    {id: 3, src: '3.jpg'},
    // more images here
];

$('.input-images').imageUploader({
  preloaded: preloaded
});
$('.input-images').imageUploader({
2
	  extensions: ['.jpg', '.jpeg', '.png', '.gif', '.svg'],
3
	  mimes: ['image/jpeg', 'image/png', 'image/gif', 'image/svg+xml'],
4
	  maxSize: undefined,
5
	  maxFiles: undefined,
6
	});
        </script>


</script>
      <?php 
 require_once('include/footer.php');
 
?>
