<?php include("include/header.php");
 if(!isset($_SESSION['email'])){
    header('location: signin.php');
}                

?>
    <script src="ckeditor/ckeditor.js"></script>
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
               <h1 class="ml-5 display-4 font-weight-normal">Blogs</h1>
              </div>
            </div>
           <hr>
		   <!--start--from-here-->
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   	<?php 	

if(isset($_GET['result'])){
	
	if($_GET['result'] == 'save changed'){
		
	echo '<h2 class="" style="text-align:right;font-size:20px;color:red;margin-left:30px;margin-top:30px;">SAVE CHANGES</h2>';
	}elseif($_GET['result'] == 'Please Try Again'){
		
	echo '<h2 class="" style="text-align:right;font-size:20px;color:red;margin-left:30px;margin-top:30px;">SAVE Not CHANGES</h2>';
	}
}


?>
		   
		   
		   
		   





  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
	  
	  <div class="col-md-6 mb-3">
          <a href="#" class="btn background-primary btn-block" data-toggle="modal" data-target="#addPostModal">
            <i class="fas fa-plus"></i> Add Post
          </a>
        </div>
        <div class="col-md-9" id="postLatestParent">
          <div class="card" id="postLatestContainer">
            <table class="table table-striped" id="postLatestTable">
              <thead class="background-dark text-center">
                <tbody id="categoryTableBody">
              </tbody><tr>
                 
                  <th>Title</th>
				  
                  <th>Details</th>
                 
                 
                </tr>
              </thead>
			   <?php 
										$menu_select = mysqli_query($con,"SELECT * FROM post");
								while($menu_select_part = mysqli_fetch_array($menu_select)):
									/* $menu_select_part['post_title'];
							$menu_select_part['menu_link']; */
									?>
			  <tr>
			  
              <td><?php echo $menu_select_part['post_title']; ?></td>
			
			  
			  <td><a href="details.php?all_post_id=<?php echo $menu_select_part['post_list'];?>" class="btn background-secondary">
      <i class="fas fa-angle-double-right"></i> Details
    </a></td>
			 </tr>
			    <?php endwhile; ?>
            </table>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center background-primary mb-3">
            <div class="card-body">
              <h3>Posts </h3>
			  <div style="position: relative; display: inline-block; padding: 10px;">
    <!-- Notification Bell Icon -->
    <i class="fa fa-bell" style="font-size: 24px; color: #333;"></i>
    
    <!-- Counter Badge -->
    <span style="
        position: absolute; 
        top: -5px; 
        right: -5px; 
        background-color: red; 
        color: white; 
        font-size: 12px; 
        padding: 2px 6px; 
        border-radius: 50%; 
        font-weight: bold;">
	<?php	$menu_select = mysqli_query($con, "SELECT * FROM post");

// Check if query was successful
if ($menu_select) {
    // Count the number of rows (posts) returned by the query
    $count = mysqli_num_rows($menu_select);
    
    // Output the count of posts
echo $count; }?>
    </span>
</div>
              <h4 class="display-4">
                <i class="fas fa-pencil-alt"></i>
                <span id=""></span>
              </h4>
             
            </div>

          </div>
          <div class="card text-center background-accent mb-3">
            <div class="card-body">
              <h3>Categories</h3>
              <h4 class="display-4">
                <i class="fas fa-folder"></i>
               
              </h4>
            
            </div>
          </div>
      <!--user    <div class="card text-center background-light mb-3">
            <div class="card-body">
              <h3>Users</h3>
              <h4 class="display-4">
                <i class="fas fa-users background-light"></i> 4
              </h4>
              <a href="users.html" class="btn btn-outline-dark btn-sm">View</a>
            </div>

          </div>-->
        </div>
      </div>
    </div>
  </section>
  <!-- FOOTER 
  <footer id="main-footer" class="background-dark mt-5 p-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead text-center">
            Copyright &copy; <span id="year"></span>
            Admin Panel
          </p>
        </div>
      </div>
    </div>
  </footer>-->
  <!-- MODALS -->
  <!-- ADD POST MODAL -->
  <div class="modal fade" id="addPostModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <!--<div class="modal-header background-primary text-white">
          <h5 class="modal-title">Add Post</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>-->
        <div class="modal-body">
		
		
		
		
		
		
		
		
		
		
			  <form id="postForm" method="post" enctype="multipart/form-data">
			              <div class="modal-header background-light">
						<button class="close" data-dismiss="modal">
            <span>&times;</span>
			</div>
          </button>
					<div class="form-group">
					  <label for="title">Title</label>
					  <input type="text"name="post-title" class="form-control" id="postTitle">
					</div>
					
					<div class="form-group">
					  <label for="image">Thumbnail Image</label> <br />
					  <label class="text-secondary"style="margin-left:10px;"></label>
						<input type="file" name="pppt" id="">
					<br />
					  </div>
					  <div class="form-group">
					  <label for="image">Upload Image</label><br />
					  <label class="text-secondary"style="margin-left:10px;"></label>
				<input type="file" name="ppp" id="">
				<br />
					  </div>
					
					  <br />
					  
					   <div class="row">
                <div class="col-md-12">
					<label for="body">Description</label>
                  <textarea name="detail" ></textarea>
                </div>
              </div>
					  
					   <div class="row">
             
              </div>
					  
					  <div class="modal-footer">
				  <button type="submit"name="post_submit"class="btn background-primary"  >Post</button>
				</div>
					</div>
					
					
					
					 <?php
                    if(isset($_POST['post_submit'])){ 
					
					
                    $title      = $_POST['post-title'];
                     $desc      = $_POST['detail'];
					
					$image      = $_FILES['ppp']['name'];
                    $tmp_image  = $_FILES['ppp']['tmp_name'];
					
					$imageanother      = $_FILES['pppt']['name'];
                    $tmp_imageanother  = $_FILES['pppt']['tmp_name'];
					
					$date       = date("d-m-Y");
					$time		= date("h:i:sa");
					
					
					
                        
                    if(!empty($title) or !empty($date) or !empty($time) or !empty($image)or !empty($imageanother)){
                     $query = "INSERT INTO post (`post_title`,`post_description`,`post_image`,`post_image_thumbnail`,`date`,`time`)
                      VALUES('$title','$desc','$image','$imageanother',$date,'$time')";
                     
                        if(mysqli_query($con,$query)){
                            $path = "img/post/".$image;
                              $path2 = "img/post/".$imageanother;
                            
                            if(move_uploaded_file($tmp_image,$path) == true){
                                copy($path,"../".$path);
                              
                                $msg = " Product Has Been Published";
                            }
							 if(move_uploaded_file($tmp_imageanother,$path2) == true){
                                copy($path2,"../".$path);
                              
                                $msg = " Product Has Been Published";
                            }
							
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
			  </form>
			  
			  
		  
		  
		  
		  
		  
		  
		  
		  
		  
        </div>
       
      </div>
    </div>
  </div>

  <!-- ADD USER MODAL -->
  <div class="modal fade" id="addUserModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header background-light">
          <h5 class="modal-title">Add User</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control">
            </div>
            <div class="form-group">
              <label for="password2">Confirm Password</label>
              <input type="password" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn background-light" data-dismiss="modal">Save Changes</button>
        </div>
      </div>
    </div>
  </div>
		   
		   
		   
       
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			   <!--end--from-here-->
        </div>



    </div>
</div>
<script>
 CKEDITOR.replace('detail', {
    filebrowserBrowseUrl: '/brows.php',
    filebrowserUploadUrl: '/upload.php'
});
</script>
<?php include("include/footer.php"); ?>