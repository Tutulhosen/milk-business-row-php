<?php include("include/header.php");
 if(!isset($_SESSION['email'])){
    header('location: signin.php');
}                

?>

<div class="container-fluid mt-2">
    <script src="ckeditor/ckeditor.js"></script>
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
		   
		   
		   <div class="row mb-5">
		   
		   <!--start--from-here-->
		   
		     <?php if(isset($_GET['all_post_id'])){
		
		
		$search_post_id = $_GET['all_post_id'];
		
		
		    $search_post_id;




								$blog_select = mysqli_query($con,"SELECT * FROM post Where post_list='$search_post_id'");
								$Sel_divide_post_part = mysqli_fetch_array($blog_select);
								
								
		} ?>
				
	
			  <!--start--from-here-->
		   
				
				
					<div class="col-6">
					
									<a href="blog_pro_view" class="btn btn-success btn-block">
							<i class="fas fa-trash"></i> Add Post
							
							
						  </a>
					</div>
					<div class="col-6">
					
									<a href="del.php?postdel=<?php echo $search_post_id; ?>" class="btn btn-danger btn-block">
							<i class="fas fa-trash"></i> Delete Post
							
							
						  </a>
					</div>
				
            
				
			
		   
		   <?php
                    if(isset($_POST['submit_post'])){ 
					
					
                    $catch      = $_POST['catch_post'];
                    $title      = $_POST['title'];
                     $desc      = $_POST['detail'];
					
					$image      = $_FILES['ppp']['name'];
                    $tmp_image  = $_FILES['ppp']['tmp_name'];
					
					$imageanother      = $_FILES['pppt']['name'];
                    $tmp_imageanother  = $_FILES['pppt']['tmp_name'];
					
				
					
					$date       = date("d-m-Y");
					$time		= date("h:i:sa");
					
                        
                    if(empty($image) or empty($imageanother)){
						
					 
					 
					 
					 $query = "UPDATE post SET post_title='$title', post_description='$desc', date='$date',time='$time' Where post_list=$catch";                            
                               
									  if(mysqli_query($con,$query)){
						$msg = "Catgory Updated Successfully!";
						
					
						
						 $bg_image_path = "img/post/".$image;
                            $tmnl_image_path = "img/post/".$imageanother;
						  move_uploaded_file($tmp_image,$bg_image_path);
                            move_uploaded_file($tmp_imageanother,$tmnl_image_path);
						
						
					 header("location:");
					}
                                              
                    }
					
					
					
					
					
					
					
					else if(! empty($image) or !empty($imageanother)){
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						$query = "UPDATE post SET post_title='$title', post_image='$imageanother', post_image_thumbnail='$image',post_description='$desc', date='date',time='time' Where post_list=$catch";                            
                               
					  if(mysqli_query($con,$query)){
                            $path = "img/post/".$image;
                              $path2 = "img/post/".$imageanother;
                            
                            if(move_uploaded_file($tmp_image,$path) == true){
                                copy($path,"/".$path);
                              
                                $msg = " Product Has Been Published";
                            }
							 if(move_uploaded_file($tmp_imageanother,$path2) == true){
                                copy($path2,"/".$path);
                              
                                $msg = " Product Has Been Published";
                            }
							
                        }
						
						
						
						
						
						
						
						
						
						
						
						
						
					}
                                   
                }
		   
		   ?>
		   

        
			  </form>
			  
			  
		  
		 
		  
		  
		  
		  
		  
		  
		  
        </div>
		  				
		   
		   
		   
		   
		   
	




		     <!-- DETAILS -->
  <section id="details">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Edit Post</h4>
            </div>
            <div class="card-body">
              <form id="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" name="title"value="<?php echo $Sel_divide_post_part['post_title'];?> "
				>
                </div>
           
                <div class="form-group">
                  <label for="">Thumbnail Image</label>
                  <div class="form-group">
                   <input type="file" name="ppp">
                  
                   
				   <small class="form-text text-muted"><?php echo $Sel_divide_post_part['post_image_thumbnail'];?> </small>
				   <small class="form-text text-muted">Max Size 3Mb</small>
					 <label for="">Upload Image</label>
                  <div class="form-group">
                   <input type="file" name="pppt">
                  
                   
				   <small class="form-text text-muted"><?php echo $Sel_divide_post_part['post_image'];?> </small>
				   <small class="form-text text-muted">Max Size 3Mb</small>
					
                  </div>
                  
				  
				     <div class="row">
                <div class="col-md-12">
					<label for="body">Description</label>
                  <textarea name="detail" value=""><?php echo $Sel_divide_post_part['post_description'];?></textarea>
                </div>
              </div>
				  
                </div>
				
				
				<input type="submit"value="submit" name="submit_post"/>
				<input type="hidden"value="<?php echo $search_post_id; ?>" name="catch_post"/>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
		   
		   
		
		   
		  
		   
		   
		   
		   
		   
		  
		  
		  
		  
		  
		  
		  
		  
	

       
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
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