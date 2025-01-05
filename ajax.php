

 
 <?php 

 
  $host      = "localhost";
 $username  = "root";
 $passwrod  = "";
 $dbName    = "neozipper";
  $con = mysqli_connect($host,$username,$passwrod,$dbName);


$id=$_GET['id'];
$product_query = "SELECT * FROM furniture_product WHERE pid=$id";

$product_run   = mysqli_query($con,$product_query);
if(mysqli_num_rows($product_run) )
{
        $response=[];
        while($data = mysqli_fetch_assoc($product_run)){
            $id=$data["pid"];
            $response['title']=$data["title"];
            $response['product_price']=$data["price"];
            $response['detail']=$data["detail"];
            $response['image']=$data["image"];
            $tourquery="SELECT categories.category
            FROM categories
            INNER JOIN furniture_product ON categories.id=60 LIMIT 1";
                  $result = $con->query($tourquery); 
                  $tourresult = $result->fetch_array()[0] ?? ''; 
              $response['category']=$tourresult;
        }
    
} 

echo json_encode($response);



?>