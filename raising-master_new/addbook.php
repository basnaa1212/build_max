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
  </head>

  <body>
  <?php
     include 'header1.php';
     include 'sidebar.php';
     ?>
           

            
            <!-- User Details page -->
            <div class="col-lg-9 col-md-9">
                  <div class="row">
                    <!-- addproduct -->
              <div class="container-fluid pt-5">
                <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
                    <span class="pr-3">
                      Add Book
                    </span>
                </h2>

                <div class="row px-xl-5 pb-3">
                    <div class="col-lg-12 col-md-12 col-sm-12 pb-1">
                      <form 
                      
                      method="POST"
                      enctype="multipart/form-data"
                      >
                        <div class="form-row d-flex" style="display: flex; justify-content: space-between;">
                        
                          <!-- Field to enter bok name -->
                          <div class="form-group col-md-6" style="width: 40%;">
                            <label for="title">Book Title</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="title" 
                                name="title"
                                placeholder="book name"
                                required
                                >
                          </div>
                          <!-- /Field to enter bok name end -->
                        
                          <!-- Field to sellect syllabust -->
                          <div class="form-group col-md-6">
                            <label for="syllabus">Syllabus</label>
                            <select 
                              id="syllabus" 
                              name="syllabus" 
                              class="form-control" 
                              required
                              >
                                <option value="kerala">Kerala</option>
                                <option value="CBSE">CBSE</option>
                                <option value="ICSE">ICSE</option>
                                <option value="Libraries">Libraries</option>
                            </select>
                          </div>
                          <!-- /Field to sellect syllabust end -->
                        
                        </div>
                      
                        <!-- Field to endter class -->
                        <div class=" mt-2 form-row">

                          <div class="form-group col-md-6" style="width: 40%;">
                            <label for="classs">Class</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="classs" 
                                name="classs"
                                placeholder="class"
                                required
                                >
                          </div>
                          
                        </div>
                        <!-- /Field to endter class end -->
                         <!-- Field to endter price -->
                         <div class=" mt-2 form-row">

<div class="form-group col-md-6" style="width: 40%;">
  <label for="price">Price</label>
  <input 
      type="text" 
      class="form-control" 
      id="price" 
      name="price"
      placeholder="price"
      required
      >
</div>

</div>
<!-- /Field to enter  end price-->
                      
                        <!-- Field to choose product -->
                        <div class="mt-3 form-group">
                            <div class="form-group">
                                <label for="image">Choose an Image</label>
                                <input 
                                    type="file" 
                                    name="image" 
                                    class="form-control-file" 
                                    id="exampleFormControlFile1"
                                    accept=".png, .jpeg"
                                    multiple
                                    required
                                    >
                            </div>
                        </div>
                        <!-- /Field to choose product end -->
                              
                        <button type="submit" class="mt-2 btn btn-primary">Add</button>
                        </form>
                      </div>
                      </div>
                  </div>
                  <!-- /add product -->
                </div>
            </div>
            <!-- User Details page -->
      </div>
  </div>
  <!-- /Admin main condainer end -->

  <style>
    .hide {
      display: none;
    }

    .bg-coloer-t {
      background-color: rgb(254, 227, 55) !important;
    }

    .text-t-color {
      color:  rgb(239, 18, 18) !important;
    }
  
  </style>



<?php
require("config.php");

    if(isset($_POST['title']) || isset($_POST['syllabus']) || isset($_POST['classs']) || isset($_POST['price']) || isset($_POST['image']) )
    {
    $title=$_POST['title'];
    $syllabus = $_POST['syllabus'];  
    $class = $_POST['classs'];
    $price = $_POST['price'];
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];  
    $folder = "../../bookpics/".$filename;
    if (move_uploaded_file($tempname, $folder)) {

      $msg = "Image uploaded successfully";

  }else{

      $msg = "Failed to upload image";

}
   
    
      


    $q=mysqli_query($con,"insert into bookdetails(booktitle,syllabus,class,price,bookpics) values ('$title','$syllabus','$class','$price','$filename')");
   
    echo "<script>location.href = 'adminpage.php';</script>";
   
      }
        ?>
  </body>
</html>
