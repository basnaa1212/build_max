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
            <label for="plantype">Plan Type:</label>
            <input type="text" id="plantype" name="plantype" required><br><br />
            <button type="Submit" name="Submit" id="Submit">Add PlanType</button>
            </form>
    </section>
    </div>      
                
                
            </main>
        </div>
        <?php
if(isset($_POST['Submit']))	
{ 
    $plantype=$_POST['plantype'];
    $sql="insert into plantype_details(plantype) values('$plantype')";
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
        
            