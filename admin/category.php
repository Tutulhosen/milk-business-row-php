<?php 
 require_once('include/header.php');
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
        if(isset($_GET['del'])){
            $del   = $_GET['del'];
            $dlt_id = "SELECT * FROM categories WHERE id = '$del'";
              $query_dlt_id = mysqli_query($con, $dlt_id);
              $after = mysqli_fetch_assoc($query_dlt_id);
              $bg_image_path = 'img/category/'.$after['bg_image'];

              $tmnl_image_path = 'img/category/'.$after['tmnl_image'];
              $str = $bg_image_path;
              $p=explode(' ',$str);
              $path_1=$p[0].$p[1];
              $strr = $tmnl_image_path;
              $pr=explode(' ',$strr);
              $path_1r=$pr[0].$pr[1];
              unlink($path_1);
              unlink($path_1r);
            
             
            $query = "DELETE FROM categories WHERE id = $del";
            $run   = mysqli_query($con,$query);
            
           
        }
        
         ?>
        <div class="col-md-9 col-lg-9">
           
               <div class="col-md-9">
                <div class="row">
                  <div class="col-md-1">
                    <i class="fad fa-th-list fa-6x text-primary"></i>
                  </div>
                  <div class="col-md-11 text-left mt-4">
                  <h1 class="ml-5 display-4 font-weight-normal">View Categories:</h1>
                  </div>
                </div>
              <hr>
                   <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                    <?php
                        if(isset($_POST['submit'] )){
							
							
                          $category = $_POST['category'];
                          $fontawesome = $_POST['fonts'];
                          $bg_image_name = $_FILES['bg_image']['name'];
                          $tmp_bg_image  = $_FILES['bg_image']['tmp_name'];
                          $tmnl_image_name = $_FILES['tmnl_image']['name'];
                          $tmp_tmnl_image  =$_FILES['tmnl_image']['tmp_name'];
                         
                          if (!empty($category)){
                          
                                      
                              $query = "INSERT INTO `categories`(`category`, `fontawesome-icon`,`bg_image`,`tmnl_image`) VALUES ('$category','$fontawesome',' $bg_image_name','$tmnl_image_name')";
                              $run = mysqli_query($con,$query);
                          
                          }
                          if ($query) {
                            $bg_image_path = "img/category/".$bg_image_name;
                            $tmnl_image_path = "img/category/".$tmnl_image_name;
                            move_uploaded_file($tmp_bg_image,$bg_image_path);
                            move_uploaded_file($tmp_tmnl_image,$tmnl_image_path);
                          }
                          
                            
                          
							
                        } 
						
						
						
                    ?>
                    
                   <div class="col-lg-8">
                     <div class="row">
                       <div class="col-lg-6">
                        <input type="text" name="category" class="form-control" placeholder="Add Category">
                       </div>

                       <div class="col-lg-6">
                         <input type="text" name="fonts" class="form-control" placeholder="Simply Add fa-example ">
                       </div>
                     </div><br>
                     <div class="row">
                       <div class="col-lg-6">
                        <label for="">Background image</label>
                       <input type="file" name="bg_image" class="form-control">
                       </div>

                       <div class="col-lg-6">
                       <label for="">Thumbnail image</label>
                       <input type="file" name="tmnl_image" class="form-control">
                       </div>
                     </div>
                   </div>
                    <div class="col-lg-4">
                    <input type="submit" name="submit" class="btn btn-primary" value="Add cat" name="category">
                       </div><br/>
                       
                       </div>
                    </form>
                    <?php
             $r_data = 6;
             $pquery = "SELECT * FROM categories";
             $prun   = mysqli_query($con,$pquery);
             $prow   = mysqli_num_rows($prun);
             $page   = ceil($prow / $r_data);
             
            if(isset($_GET['tdata_id'])){
                 $t_id =$_GET['tdata_id'];
             }
            else {
                $t_id =1;
            }
            $pro_start = ($t_id - 1) * $r_data;  
            $query=" SELECT * FROM categories ORDER BY id ASC LIMIT $pro_start,$r_data";
            $run = mysqli_query($con,$query);
            if(mysqli_num_rows($run) > 0){
            ?>
              <!-- Button to Open the Modal -->
       
        <div class="row mt-5">  
            <div class="col-md-12 col-lg-12">

              
             <table class="table table-hover">
                <thead class="thead-dark">
                   <tr>
                    
                    <th>ID</th>
                    <th>Font Awesome icon</th>
                    <th>Categories</th>
                    <th class="text-center">Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                 <?php
                
                    while($row = mysqli_fetch_array($run)){
                        $id = $row['id'];
                        $font_awesome = $row['fontawesome-icon'];
                        $category = ucfirst($row['category']);
                        
                      ?>
                     
                     <tr>                     
                        <td><?php echo $id;?></td>
                        <td><?=$font_awesome?></td>
                        <td><?php echo $category;?></td>
                        <td class="text-center">
                        <a  href="editcat.php?edit=<?php echo $id; ?>"><button type="button" class="btn btn-primary">Edit</button>
                            </a>
                            <a href="category.php?del=<?php echo $id;?>"><button class='ml-2 btn btn-danger' value='Delete'>Delete</button></a>
                        </td>
                     </tr>
                      <?php
                    }
                
                    ?>
                </tbody>
             
              </table>
                
                    <ul class="pagination">
                       <?php for($i=1; $i<= $page; $i++)
                        {
                        echo "<li class='page-item ".($t_id == $i ? 'active' : ''). "'><a class='page-link' href='category.php?tdata_id=".$i."'>$i</a></li>";
                    }
                        ?>
                    </ul>
                
             </div>
                      </div>
                  <?php
            }
             
            ?>    
        </div>
        
     </div>
         <!---edit category query-->
      
            <!-- Modal -->

      </div>
      <?php 

 require_once('include/footer.php');
?>