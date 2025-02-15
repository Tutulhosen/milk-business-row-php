<?php include("include/header.php");?>
<?php
         if(!isset($_SESSION['email']))
          {
            header('location: signin.php');
          }

        if(isset($_GET['del'])){
            $del   = $_GET['del'];
            $image = "SELECT * FROM furniture_product WHERE pid = '$del'";
            $query = mysqli_query($con, $image);
            $after = mysqli_fetch_assoc($query);
            
            $path_1 = 'img/'.$after['image'];
            $path_2 = 'img/'.$after['anotherimg'];
            
            if (file_exists($path_1) || file_exists($path_2)) {
                unlink($path_1);
                unlink($path_2);
            }
            $query = "DELETE FROM `furniture_product` WHERE pid = $del";
            if(mysqli_query($con,$query)){
                
                echo "<script> alert('This product has been deleted');</script>";
            }
        }

        if(isset($_GET['status'])){
            $status   = $_GET['status'];
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
                   <i class="fad fa-th-list fa-6x text-primary"></i>
                 </div> 

                 <div class="col-md-7">
                   <h2 class="display-4 ml-2 mt-4">View Products:</h2>
                 </div> 
                 <div class="col-md-4">
                    <div class="font-weight-bold mt-5 text-right" style="font-size:24px;">
                    <label>Sort: </label> 
                    <a href="furniture_pro_view.php?status=publish">Publish</a> | <a href="furniture_pro_view.php?status=draft">Draft</a>
                    </div>
                 </div> 
				
                </div>
               <hr>
		
   

		<div class="input-group">
  <div class="">
  <form action=""method="post">
    <input id="getName" width="100%" autocomplete="off" type="text" name="name" placeholder="Search here.........."class="form-control"style=" padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 100%;
  background: #f1f1f1;" />
   </form>
  </div>

</div>



          



<table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Edit</th>
            <th>Copy</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody id="showdata">
         
        </tbody>
    </table>
        <table class="table table-responsive table-hover"id="showdata">
                      <thead class="thead-light">
                          <tr>
                              <th>Product Id</th>
                              <th>Image</th>
                              <th>Title</th>
                              <th>Category</th>
                              <th>Size</th>
                              <th>Price (Pkr)</th>
                              <th>Detail</th>
                              <th>Status</th>
                              <th>Date</th>
                              <th colspan="4">Actions(Edit/Del)</th>
                              <th colspan="4"></th>
                          </tr>
                      </thead>
                        <tbody>
                          <?php

                                       if(isset($status)){
                                           $pr_query = "SELECT * FROM furniture_product fp INNER JOIN categories cat ON fp.category = cat.id WHERE status = '$status' order by pid";
                                       } else{
                                           $pr_query = "SELECT * FROM furniture_product fp INNER JOIN categories cat ON fp.category = cat.id order by pid";
                                       }
                                        $pr_run   = mysqli_query($con,$pr_query);
                                        
                                        if(mysqli_num_rows($pr_run) > 0){
                                            while($pr_row = mysqli_fetch_array($pr_run)){
                                              $pid   = $pr_row['pid'];
                                              $title = $pr_row['title'];
                                              $category = $pr_row['category'];
                                              $size = $pr_row['size'];
                                              $price = $pr_row['price'];    
                                              $detail  = $pr_row['detail'];
                                              $image = $pr_row['image'];
                                              $status = $pr_row['status'];
                                              $date = $pr_row['date'];
                                              

                                            
                                              
                            ?> 
                             <tr>
                                 <td >
                                     <?php echo $pid;?>
                                 </td>
                                 <td width="120px">
                                     <img src="img/<?php echo $image;?>" width="100%">
                                 </td>

                                 <td width="150px">
                                    <?php echo $title;?>
                                 </td>

                                 <td>
                                    <?php echo $category;?>
                                 </td>

                                 <td><?php echo $size;?></td>

                                 <td><?php echo $price;?> </td>
                                 <td> 
                                 <?php echo $detail ?>  
                                </td>
                                <td><?php echo $status;?></td>
                                <td><?php echo $date;?></td>
                                <td colspan="40" width="400px" class="text-center"> 
                                 <?php 
                                   
                                   
                                   ?>
                                    <a title="Edit Product" href="furniture_pro_edit.php?pid=<?php echo $pid;?> " class="btn btn-primary btn-sm">
                                    <i class="fal fa-edit"></i>
                                    </a>
                                  

                                    <a title="Copy Product" href="furniture_pro_copy.php?pid=<?php echo $pid;?> " class="btn btn-info btn-sm">
                                    <i class="fal fa-copy"></i>
                                  
                                  </a>  

                                    <a title="Delete Product" href="furniture_pro_view.php?del=<?php echo $pid;?>" class="btn btn-danger btn-sm">X </a>  
                                 </td>
                             </tr>   
                           <?php 
                               }

                            }else {
                                echo "<h2 class='text-center text-secondary'>You haven't added any product yet</h2>";
                                }
                        
                     
                    
                    ?>
                              
                          
                      </tbody>
                  </table>

        </div>



    </div>
</div>
<?php include("include/footer.php"); ?>
      <script>
  $(document).ready(function(){
   $('#getName').on("keyup", function(){

     var getName = $(this).val();
    
     $.ajax({
       method:'POST',
       url:'searchajax',
       data:{name:getName},
       success:function(response)
       {
          console.log(response);
            $("#showdata").html(response);
       } 
     });
   });
  });
</script>
