<?php


 include("include/dbcon.php"); 



if (isset($_POST['product_id'])) {

    $product_id=($_POST['product_id']);
    $comment=($_POST['comment']);
    $author=($_POST['author']);
    $email_1=($_POST['email_1']);

    $sql=$con->query("INSERT INTO reviews (name,email,comment,review_id) VALUE ('$author','$email_1','$comment','$product_id')");
    $sql_count=$con->query("SELECT COUNT(id) as total_comment FROM `reviews` where review_id='$product_id'");
    while($row = $sql_count -> fetch_assoc()){
      echo $row['total_comment'];
      exit;
    }
    

}



 
  if (isset($_POST["post_id"]))

  {
      $author = mysqli_real_escape_string($con, $_POST["author"]);
      $email = mysqli_real_escape_string($con, $_POST["email_1"]);
      $comment = mysqli_real_escape_string($con, $_POST["comment"]);
      $post_id = mysqli_real_escape_string($con, $_POST['post_id']);
      $reply_of = 0;
  
      mysqli_query($con, "INSERT INTO comments(name, email, comment, post_id, created_at, reply_of) VALUES ('" . $author . "', '" . $email . "', '" . $comment . "', '" . $post_id . "', NOW(), '" . $reply_of . "')");
      echo "<p>Comment has been posted.</p>";
  }


   
  if (isset($_POST["do_post_id"]))

  {
      $author = mysqli_real_escape_string($con, $_POST["do_author"]);
      $email = mysqli_real_escape_string($con, $_POST["do_email_1"]);
      $comment = mysqli_real_escape_string($con, $_POST["do_comment"]);
      $post_id = mysqli_real_escape_string($con, $_POST['do_post_id']);
      $reply_of = mysqli_real_escape_string($con, $_POST['do_reply_of']);

     
  
      mysqli_query($con, "INSERT INTO comments(name, email, comment, post_id, created_at, reply_of) VALUES ('" . $author . "', '" . $email . "', '" . $comment . "', '" . $post_id . "', NOW(), '" . $reply_of . "')");
      echo "<p>Comment has been posted.</p>";
  }



    
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


    
  if (isset($_POST["name"])){

                    $name=($_POST['name']);
                    $company=($_POST['company']);
                    $phone=($_POST['phone']);
                    $email=($_POST['email']);
                    $site=($_POST['site']);
                    $view=($_POST['view']);




if(!empty($email)){









           $to = "faysalkabir573@gmail.com";
$subject = "HTML email";

$message ="
<html>
<head>
<title>Message from handicrafts website</title>
</head>
<body>
<p> My name is '.echo $name.'</p> </br>

<table>
<tr>
<th> Name</th>
<th>Company Name</th>
<th>Phone Number</th>
<th>email/th>
<th>Website/th>
<th>Ask For </th>

</tr>
<tr>
<td>'.echo $name.'</td>
<td>'.echo $company.'</td>
<td>'.echo $phone.'</td>
<td>'.echo $email.'</td>
<td>'.echo $site.'</td>
<td>'.echo $view.'</td>




</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <$email>' . "\r\n";


mail($to,$subject,$message,$headers);

                    
echo "

<div class='col-md-6 mb-4'>
                                <div class='alert alert-success alert-simple alert-inline show-code-action'>
                                    <h4 class='alert-title'>Well done!</h4> You successfully read this important alert
                                    message.
                                </div>
                            </div>

";



 
}else {

    echo "

    <div class='col-md-6 mb-4'>
                                    <div class='alert alert-success alert-simple alert-inline show-code-action'>
                                        <h4 class='alert-title'>Oh Sorry! Try again later</h4> 
                                    </div>
                                </div>
    
    ";

}
  
}





 
