<?php

$fname=$lname=$email=$reason=$reason=$service=$hire=$pos="";
$fnameErr=$lnameErr=$emailErr=$reasonErr=$serviceErr=$hireErr=$posErr="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (empty($_POST["fname"])) {
    $fnameErr = " First Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
  }

  if (empty($_POST["lname"])) {
    $lnameErr = " Last Name is required";
  } else {
    $lname = test_input($_POST["lname"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = " Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["reason"])) {
    $reasonErr = " Select a option";
  } else {
    $reason = test_input($_POST["reason"]);
  }

  if (empty($_POST["service"])) {
    $serviceErr = " Select a option";
  } else {
    $service = test_input($_POST["service"]);
  }

  if (empty($_POST["hire"])) {
    $hireErr = " Select a option";
  } else {
    $hire = test_input($_POST["hire"]);
  }

  if (empty($_POST["pos"])) {
    $posErr = " Select a option";
  } else {
    $pos = test_input($_POST["pos"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>
<body>

    <div class="content">
        <br>
        <header id="p1">
            <a href="../index.html">Home</a>
            <a href="education.html">Education</a>
            <a href="experience.html">Experience</a>
            <a href="projects.html">Projects</a>
            <a href="contact.php" id="ery">Contact Me</a>
        </header>
        <br><br>
        
        <section><br>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <h1>Fill Out the Form to Get in Touch</h1>

                <div class="form_middle">
                <label>Firstname:</label>
                <input type="text" name="fname">
                <span style="color:red;"><?php echo $fnameErr;?></span><br><br>
                </div>

                <div class="form_middle">
                <label>Lastname:</label>
                <input type="text" name="lname" ><br><br>
                <span style="color:red;"><?php echo $lnameErr;?></span>
                </div>

                <div class="form_middle">
                <label>Email:</label>
                <input type="email" name="email" ><br><br>
                <span style="color:red;"><?php echo $emailErr;?></span>
                </div>

                <div class="form_middle">
                <label>Reason For Contacting</label>
                <input type="radio" name="reason"  value="Project">Project
                <input type="radio" name="reason" value="Thesis">Thesis
                <input type="radio" name="reason" value="Meet & Greet">Meet and Greet<br><br>
                <span style="color:red;"><?php echo $reasonErr;?></span>
                </div>

                <div class="form_middle">
                    <label>Select the services you need</label>
                    <div>
                    <input type="checkbox" name="service" value="Mobile Application Development" >Mobile Application Development<br>
                    <input type="checkbox" name="service" value="Web Application Development">Web Application Development<br>
                    <input type="checkbox" name="service" value="OpenGL or Graphics Programming">OpenGL or Graphics Programming<br><br>
                    </div>
                    <span style="color:red;"><?php echo $serviceErr;?></span>
                </div>
                

                <div class="form_middle">
                <label>Hire me<br></label>
                <input type="radio" name="hire" value="Yes">Yes
                <input type="radio" name="hire" value="No">No<br><br>
                <span style="color:red;"><?php echo $hireErr;?></span>
                </div>

                <div class="form_middle">
                <label>Your Position in Your Company<br></label>
                <input type="radio" name="pos" value="CEO">CEO
                <input type="radio" name="pos" value="HR">HR
                <input type="radio" name="pos" value="Person of Interest">Person of Interest<br><br>
                <span style="color:red;"><?php echo $posErr;?></span>
                </div>

                <input type="submit" value="Submit" class="sub">
            </form><br>
        </section>
    </div>

    <footer>
        <ol>
            <li>copyright 2025 by majedul islam</li>
            <li><a href="https://github.com/Majedul-Islam5"><img src="../image/github.png" height="40" class="foot"></a></li>
            <li><a href="https://www.facebook.com/anas.afsan"><img src="../image/facebook.webp" height="40" class="foot"></a></li>
        </ol>
    </footer>
    <br>
    
</body>
</html>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>
<body>
    <div class="content">
        <br>
        <header id="p1">
            <a href="../index.html">Home</a>
            <a href="education.html">Education</a>
            <a href="experience.html">Experience</a>
            <a href="projects.html">Projects</a>
            <a href="contact.php" id="ery">Contact Me</a>
        </header>
        <br><br>
        
        <section><br>
            <form action="<//?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
                <h1>Fill Out the Form to Get in Touch</h1>

                <div class="form_middle">
                <label>Firstname:</label>
                <input type="text" name="fname" required><br><br>
                <span><//?php echo $fnameErr;?></span>
                </div>

                <div class="form_middle">
                <label>Lastname:</label>
                <input type="text" name="lname" required><br><br>
                <span><//?php echo $lnameErr;?></span>
                </div>

                <div class="form_middle">
                <label>Email:</label>
                <input type="email" name="email" required><br><br>
                <span><//?php echo $emailErr;?></span>
                </div>

                <div class="form_middle">
                <label>Reason For Contacting</label>
                <input type="radio" name="reason" required value="Project">Project
                <input type="radio" name="reason" value="Thesis">Thesis
                <input type="radio" name="reason" value="Meet & Greet">Meet and Greet<br><br>
                <span><//?php echo $reasonErr;?></span>
                </div>

                <div class="form_middle">
                    <label>Select the services you need</label>
                    <div>
                    <input type="checkbox" name="service" value="Mobile Application Development" required>Mobile Application Development<br>
                    <input type="checkbox" name="service" value="Web Application Development">Web Application Development<br>
                    <input type="checkbox" name="service" value="OpenGL or Graphics Programming">OpenGL or Graphics Programming<br><br>
                    </div>
                    <span><//?php echo $serviceErr;?></span>
                </div>
                

                <div class="form_middle">
                <label>Hire me<br></label>
                <input type="radio" name="hire" value="Yes">Yes
                <input type="radio" name="hire" value="No">No<br><br>
                <span><//?php echo $hireErr;?></span>
                </div>

                <div class="form_middle">
                <label>Your Position in Your Company<br></label>
                <input type="radio" name="pos" value="CEO">CEO
                <input type="radio" name="pos" value="HR">HR
                <input type="radio" name="pos" value="Person of Interest">Person of Interest<br><br>
                <span><//?php echo $posErr;?></span>
                </div>

                <input type="submit" value="Submit" class="sub">
            </form><br>
        </section>
    </div>

    <footer>
        <ol>
            <li>copyright 2025 by majedul islam</li>
            <li><a href="https://github.com/Majedul-Islam5"><img src="../image/github.png" height="40" class="foot"></a></li>
            <li><a href="https://www.facebook.com/anas.afsan"><img src="../image/facebook.webp" height="40" class="foot"></a></li>
        </ol>
    </footer>
    <br>

</body>
</html>
-->