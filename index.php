<?php

$height = $weight = $result= $error = "";

if (!empty($_POST))
{
   // echo "We have received the results!\n";
   // echo " Here they are: ". json_encode($_GET);

    $height = $_POST["height"];
    $weight = $_POST["weight"];
  
    if(empty($height) && empty($weight))
    {
      echo "We didn't get any weight or any height!";
      } 
      else if (!empty($height) && empty($weight))
      {
        echo "We didn't get the weight!";
      }
        else if (empty($height)&& !empty($weight))
        {
          echo " We didn't get the height";
        }
          else 
          {
            echo "We got the data we need!";
            $result =$weight /($height **2);
            //echo " Your BMI is $result";
          }
   }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>BMI form</title>

  <!-- import the webpage's stylesheet -->
  <link rel="stylesheet" href="style.css">

  <!-- import the webpage's javascript file -->
  <script src="script.js" defer></script>
</head>

<body>

  <h1>Medical Record Form</h1>

  <p>
    Please submit your name, height, and weight to enter our, err, lucky draw. Yeah! Win a pair of ArPods!
  </p>

  <form action="" method="post">

    <div>
      
      Name: <input type="text" id="name" name="name">
    </div>

    <div>
      <label for="weight">Weight (kg)</label>
      <input type="number" id="weight" step="any" name="weight">
    </div>

    <div>
      <label for="height">Height (m)</label>
      <input type="number" id="height" step="any" name="height">
    </div>

    <div>
      <label for="comments">Comments</label><br>
      <textarea rows="8" cols="40" id="comments" name="comments" placeholder="I find this highly suspicious..."></textarea>
    </div>

    <input type="submit" id="submit" value="$ubmit">



 <div id="output">
   <?php

    if (!empty($error)){
      echo "<strong>Error!</strong>";
      echo "<p>$error</p>";
    }

    if(!empty($result)){
      echo"<p>Your BMI is $result</p>";
    }

   ?>


 </div>

    <?php
    include("contact.php");
    ?>

  </form>

</body>

</html>