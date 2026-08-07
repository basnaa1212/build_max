<?php
include 'admin-side.php';
include 'connection.php';
?>
<html>
    <head></head>
    <body>
    <link rel="stylesheet" type="text/css" href="7.css">
  </body>
  </html>

      <main class="content"> 
        <div>
            <section>
        <form method="post">
            <label for="designtype">Design Type:</label>
            <input type="text" id="designtype" name="designtype" required><br><br />
            <button type="Submit" name="Submit" id="Submit">Add DesignType</button>
            </form>
    </section>
    </div>      
                
                
            </main>
        </div>
        <?php
if(isset($_POST['Submit']))	
{ 
    $designtype=$_POST['designtype'];
    $sql="insert into designtype_details(designtype) values('$designtype')";
    $result=mysqli_query($con,$sql);
    
    if($result==TRUE)
    {
        echo "inserted";
    }
    else{
       echo"<h1>not inserted.</h1>";
    
    }
    }
    
    ?>
    
    </html>
        
            