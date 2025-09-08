<?php
$fname=$lname=$address=$city=$state=$code=$country=$email=$amount=$mobile="";
$fnameErr=$lnameErr=$addressErr=$cityErr=$stateErr=$codeErr=$countryErr=$emailErr=$amountErr=$mobileErr="";



if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (!empty($_POST["mobile"]))
    {
        $mobile=$_POST["mobile"];

        if(!preg_match('/[0-9]/',$mobile ))
        {
            $mobileErr = "Mobile Number must be a digit";
            
        }else {
                $mobile = test_input($_POST["mobile"]);
            }
    }

    if (!empty($_POST["code"]))
    {
        $code=$_POST["code"];

        if(!preg_match('/[0-9]/',$code ))
        {
            $codeErr = "Zip code must be a digit";
            
        }else {
                $code = test_input($_POST["code"]);
            }
    }

    if (empty($_POST["fname"])) {
    $fnameErr = " First Name is required";
  }
  elseif(strlen($_POST["fname"])<3){
    $fname = test_input($_POST["fname"]);
    $fnameErr = " Name is less than 3";
  }
  
  else {
    $fname = test_input($_POST["fname"]);
  }

  if (empty($_POST["lname"])) {
    $lnameErr = " Last Name is required";
  } else {
    $lname = test_input($_POST["lname"]);
  }

  if (empty($_POST["address"])) {
    $addressErr = " Address is required";
  } else {
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["city"])) {
    $cityErr = " City Name is required";
  } else {
    $city = test_input($_POST["city"]);
  }

  if (empty($_POST["state"])) {
    $stateErr = " state Name is required";
  } else {
    $state = test_input($_POST["state"]);
  }

  if (empty($_POST["code"])) {
    $codeErr = " code Name is required";
  } else {
    $code = test_input($_POST["code"]);
  }

  if (empty($_POST["country"])) {
    $countryErr = " country Name is required";
  } else {
    $country = test_input($_POST["country"]);
  }

  if (empty($_POST["country"])) {
    $countryErr = " country Name is required";
  } else {
    $country = test_input($_POST["country"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = " Email is required";
  }
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {   
        $email = test_input($_POST["email"]);
        $emailErr = "Enter a valid email address";
    }
  else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["amount"])) {
    $amountErr = " amount is required";
  } else {
    $amount = test_input($_POST["amount"]);
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
    <title>Task-1</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        
        <p><strong>> 1 Donation</strong></p>
        <p>> 2 Confirmation</p>
        <p>> Thank You!</p>
        
        <h2>Donor Information</h2>
    </header>
    
    <section>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <div class="form_middle">
                <label for="fname"><strong>First Name</strong><label for="star" id="red">*</label></label>
                <input type="text" id="fname" name="fname" value="<?php echo $fname;?>">
                <span style="color:red;"><?php echo $fnameErr;?></span>
            </div>

            <div class="form_middle">
                <label for="lname"><strong>Last Name</strong><label for="star" id="red">*</label></label>
                <input type="text" id="lname" name="lname" value="<?php echo $lname;?>">
                <span style="color:red;"><?php echo $lnameErr;?></span>
            </div>

            <div class="form_middle">
                <label for="com"><strong>Company</strong></label>
                <input type="text" id="com">
            </div>

            <div class="form_middle">
                <label for="add1"><strong>Address 1</strong><label for="star" id="red">*</label></label>
                <input type="text" id="add1" name="address" value="<?php echo $address;?>">
                <span style="color:red;"><?php echo $addressErr;?></span>
            </div>

            <div class="form_middle">
                <label for="add2"><strong>Address 2</strong></label>
                <input type="text" id="add2" >
            </div>

            <div class="form_middle">
                <label for="city"><strong>City</strong><label for="star" id="red">*</label></label>
                <input type="text" id="city" name="city" value="<?php echo $city;?>">
                <span style="color:red;"><?php echo $cityErr;?></span>
            </div>

            <div class="form_middle">
                <label for="state"><strong>State</strong><label for="star" id="red">*</label></label>
                <select name="state" id="state" name="state" value="<?php echo $state;?>">
                    <option value="">Select a State</option>
                    <option value="North">North</option>
                    <option value="East">East</option>
                    <option value="South">South</option>
                </select>
                <span style="color:red;"><?php echo $stateErr;?></span>
            </div>

            <div class="form_middle">
                <label for="zip"><strong>Zip Code</strong><label for="star" id="red">*</label></label>
                <input type="text" id="zip" name="code" value="<?php echo $code;?>">
                <span style="color:red;"><?php echo $codeErr;?></span>
            </div>

            <div class="form_middle">
                <label for="country"><strong>Country</strong><label for="star" id="red">*</label></label>
                <select name="country" id="country" name="country" value="<?php echo $country;?>">
                    <option value="">Select a Country</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Malaysia">South</option>
                </select>
                <span style="color:red;"><?php echo $countryErr;?></span>
            </div>

            <div class="form_middle">
                <label for="mobile"><strong>Phone</strong></label>
                <input type="text" id="mobile" name="mobile" value="<?php echo $mobile;?>">
                <span style="color:red;"><?php echo $mobileErr;?></span>
            </div>

            <div class="form_middle">
                <label for="fax"><strong>Fax</strong></label>
                <input type="number" id="fax" >
            </div>

            <div class="form_middle">
                <label for="email"><strong>Email</strong><label for="star" id="red">*</label></label>
                <input type="email" id="email" name="email" value="<?php echo $email;?>">
                <span style="color:red;"><?php echo $emailErr;?></span>
            </div>

            <div class="form_middle" style="margin-bottom: 0px;">
                <label for="donation"><strong>Donation Amount</strong><label for="star" id="red">*</label></label>
                <input type="radio" name="amount" value="<?php echo $amount;?>">None
                <input type="radio" name="amount" value="<?php echo $amount;?>">$50
                <input type="radio" name="amount" value="<?php echo $amount;?>">$75
                <input type="radio" name="amount" value="<?php echo $amount;?>">$100
                <input type="radio" name="amount" value="<?php echo $amount;?>">$250
                <input type="radio" name="amount" value="<?php echo $amount;?>">Other
                <span style="color:red;"><?php echo $amountErr;?></span>
            </div>

            <div class="small">
                <label for="check">(Check a button or type in your amount)</label>
            </div>
            <div class="small" style="margin-left: 0px;text-align: left;">
                <div style="display: inline-block;width: 300px;">
                    <label for="amount"><strong>Other Amount $</strong></label>
                    <input type="number" id="amount" >
                </div>
            </div>

            <div class="form_middle" style="margin-bottom: 0px;">
                <label for="like"><strong>Recurring donation</strong></label>
                <input type="checkbox" name="recur">I am interested in giving on a regular basis
            </div>

            <div class="small">
                <label for="check">(Check if yes)</label>
            </div>

            <div class="small" style="margin-left: 0px;text-align: left;">
                <div style="display: inline-block;width: 400px;">
                    <label for="amount">Monthly Credit Card $</label>
                    <input type="number" id="amount" style="width: 50px;">
                    <label>for</label>
                    <input type="number" style="width: 50px;">
                    <label>Months</label>
                </div>
            </div>
            <br><br>
            <h2>Honorarium and Memorial Donation Information</h2>
            <div class="form_middle">
                <label for="like"><strong>I would like to make this donation</strong></label>
                <div>
                    <input type="radio" name="like">To Honour<br>
                    <input type="radio" name="like">In memory of
                </div>
            </div>

            <div class="form_middle">
                <label for="name"><strong>Name</strong></label>
                <input type="text" id="name" >
            </div>

            <div class="form_middle">
                <label for="ack"><strong>Acknowledge Donation to</strong></label>
                <input type="text" id="ack" >
            </div>

            <div class="form_middle">
                <label for="addr"><strong>Address</strong></label>
                <input type="text" id="addr" >
            </div>

            <div class="form_middle">
                <label for="cit"><strong>City</strong></label>
                <input type="text" id="cit" >
            </div>

            <div class="form_middle">
                <label for="State"><strong>State</strong></label>
                <select name="State" id="State">
                    <option value="">Select a State</option>
                    <option value="North">North</option>
                    <option value="East">East</option>
                    <option value="South">South</option>
                </select>
            </div>

            <div class="form_middle">
                <label for="zip"><strong>Zip</strong></label>
                <input type="text" id="zip" >
            </div>

            <br>

            <h2>Additional Information</h2>
            <label>Please enter your name, company or organization as you would like it to appear in our publication:</label>

            <div class="form_middle">
                <label for="nam"><strong>Name</strong></label>
                <input type="text" id="nam" >
            </div>

            <input type="checkbox" name="git" style="margin-right: 10px;">I would like my gift to remain anonymous<br>
            <input type="checkbox" name="er" style="margin-right: 10px;">My employer offers a matching gift program. I will mail the matching gift form.<br>
            <input type="checkbox" name="yu" style="margin-right: 10px;">Please save the cost of acknowledging this gift by not mailing a thank you letter<br>

            <div class="form_middle" style="margin-bottom: 0px;">
                <label for="comments"><strong>Comments</strong></label>
                <textarea name="comments"></textarea>

            </div>
            <div class="small" style="margin-top: 0px;">
                    <label for="check">(Please type any question or feed back here)</label>
            </div>

            <div class="form_middle">
                <label for="how"><strong>How may we contact you?</strong></label>
                <div>
                <input type="checkbox" name="email" style="margin-right: 10px;">E-mail<br>
                <input type="checkbox" name="postal" style="margin-right: 10px;">Postal Mail<br>
                <input type="checkbox" name="telephone" style="margin-right: 10px;">Telephone<br>
                <input type="checkbox" name="fax" style="margin-right: 10px;">Fax<br>
                </div>
            </div>

            <label style="color: grey;"><strong>I would like to receive newsletter and information about special events by:</strong></label>

            <div class="form_middle">
                <label for="how"><strong></strong></label>
                <div>
                <input type="checkbox" name="email" style="margin-right: 10px;">E-mail<br>
                <input type="checkbox" name="postal" style="margin-right: 10px;">Postal Mail<br>
                </div>
            </div>

            <input type="checkbox" name="git" style="margin-right: 10px;">I would like information about volunteering with the<br>
            <input type="text" style="width: 700px;"><br><br>
            <div style="margin-left: 250px;">
                <input type="submit" value="Reset" style="margin-right: 15px;">
                <input type="submit" value="Submit">
            </div>

            <br>

            <label>Donate online with confidence . you are on a secure server.</label><br>
            <label>If you have any problems or questions, please contact support.</label><br>
        </form>
    </section>
    
</body>
</html>