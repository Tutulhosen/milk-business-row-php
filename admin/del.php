
<?php

//all-post-delete-start
			 include("include/dbcon.php"); 
			
			
			
				
					
					
					
					
					
					 
        if(isset($_GET['postdel'])){
            $del   = $_GET['postdel'];
            $dlt_id = "SELECT * FROM post WHERE post_list = '$del'";
          
			  
			  $query_dlt_id = mysqli_query($con, $dlt_id);
              $after = mysqli_fetch_assoc($query_dlt_id);
              $bg_image_path = 'img/'.$after['post_image'];

              $tmnl_image_path = 'img/'.$after['post_image_thumbnail'];
			  
			  
              $str = $bg_image_path;
              $p=explode(' ',$str);
			  
              $path_1=$p[0].$p[1];
              $strr = $tmnl_image_path;
			  
              $pr=explode(' ',$strr);
              $path_1r=$pr[0].$pr[1];
			  
              unlink($path_1);
              unlink($path_1r);
            
             
             
            $query = "DELETE FROM post WHERE post_list = '$del'";
            $run   = mysqli_query($con,$query);
					
					echo ' <script> alert("Delete successfully");
					window.location="blog_pro_view.php?result=save changed";
					</script>';
					
				}else{
					
					header('location:blog_pro_view.php?result=Please Try Again');
				}
					
				
				//delete-widget-menu-id-end
				
				
				
				?>