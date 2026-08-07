<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Big Cart</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon" /> -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <?php
     
             
     include('config.php');
     session_start();
     $sql="select * from sellerrequest";
     //read data from mysql
     $q=mysqli_query($con,$sql);
     ?>
  </head>

  <body>
  <?php
     include 'header1.php';
     include 'sidebar.php';
     
 
  
   
    

  
 
  
?>
 <table class="table align-items-center mb-0">
      <thead>
       
        <tr>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">syllabus</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Class</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">price</th>
       
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Approval</th>
          <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Seller</th> -->
        </tr>
        
      </thead>
      

      <tbody>
   
<!--Display data from mysql-->   
           <?php
        


    
                    if ($q->num_rows >0)  
                    { 
                        
                        
                        while($row = $q->fetch_assoc()) 
                        { 
                          ?>
                          <?php
                          $name=$row["name"];
                           $email=$row["email"];
                          $booktitle=$row["booktitle"];
                          $class=$row["class"];
                          $syllabus=$row["syllabus"];
                          $price=$row["price"];
                          
                          
                    //       $url=$row["product_image"];
                    //       $id=$row["product_id"];
                        ?>
                        
                   
        <tr>
        <td>
            <div class="d-flex px-2">
              
              <div class="my-auto">
                <h6 class="mb-0 text-xs"><?php echo $name ?></h6>
              </div>
            </div>
          </td>
          <td>
            <div class="d-flex px-2">
              
              <div class="my-auto">
                <h6 class="mb-0 text-xs"><?php echo $email ?></h6>
              </div>
            </div>
          </td>
          <td>
            <div class="d-flex px-2">
              
              <div class="my-auto">
                <h6 class="mb-0 text-xs"><?php echo $booktitle ?></h6>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-normal mb-0"><?php echo $class ?></p>
          </td>
          <td>
            <span class="badge badge-dot me-4">
              <i class="bg-info"></i>
              <span class="text-dark text-xs"><?php echo $syllabus ?></span>
            </span>
          </td>
          <td class="align-middle text-center">
            <div class="d-flex align-items-center">
              <span class="me-2 text-xs"><?php echo $price ?></span>
            </div>
          </td>
        <form method="post" action="viewseller.php">
          
          <td>
            <div class="d-flex px-2">
              
              <div class="my-auto">
                <input type="submit" name="s" id="s" value="approve">
              </div>
            </div>
          </td>
        </form>
        </tr>
        <?php
                        }}
                        
?>
<?php
//$approval=$row["approval"];
if(isset($_POST["s"]))


{

  $sql= mysqli_query($con,"UPDATE sellerrequest SET status='approved' where email='$email' ");

}
?>
        </tbody>
        </table>
       


     
           

  </body></html>