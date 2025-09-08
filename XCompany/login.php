<?php
$userName=$password="";
$userNameErr=$passwordErr="";
$val1=$val2=false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (empty($_POST["userName"])) {
    $userNameErr = " User name is required";
  } else {
    $userName = test_input($_POST["userName"]);
    $val1=true;
  }

  if (empty($_POST["password"])) {
    $passwordErr = " password is required";
  } else {
    $password = test_input($_POST["password"]);
    $val2=true;
  }

  $value="registration.php";

  if($val1==true && $val2==true)
{
    $val1=$val2=false;
    header("Location:dashboard.php");
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
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header>
        <div>
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAilBMVEX///8/riooqAA8rSY4rCA7rSQyqhctqQ0jpwD4/Pc0qxsrqQhju1X7/vvz+vLI5cSl1Z7O6MptvmDp9efb7tig05mOy4VMszqb0ZN0wWh9xHK737bT6tBGsTKVzoyt2aff8Ny23bFZt0pmvFiHyX1StUDD475XtkeBxndywGXt9+yLyoHm9OSz3K0iPcBdAAAKbUlEQVR4nO2d23qqMBCFTTiD2lrroVqt1m611r7/620g1CIGWNGExH781y1hZAwzs2Zip9PS0tLS0tLS0qKR6VH3HahlsPD/tIWHF2rRoe67UMgjtQmhB923oYzBwiXkD1uYOChJLezrvhU1jBIHZRYGuu9FBQ/MQZmFPd13I5/hU+agf9XCqWeTHL7u+5HNA3EJ+cMWHs4clHmpnCsft3KucyNTapMikizszBZzSVe6ngsHTfEkXb1nR9aj1jfP8NJBU1xZCwyo5UZjbVFuj+egKaG0NWbxCiGdPUu7oAh8B02wHGmLBE7iJDZ9f5B2SZTjhu+gDHnrbGl6QSearOVdFGEaOeX2WQuJK71k3wTLc0fNBfRbp8xB2c1MJK7VD398xXK9j2aKB8dNVOGgsi3szOnvlW36+Srz2lx6S1rhoMzCf1JXfMrv2E60UxzpbK1KB2V3sZO6ZN87v7q3eFOXu9Q6KLuHd7mrrqOCj7jeUk2dBHBQZmFX8sKbi8gijPYryYvEzAEHZRZuJK98iC4Xsf3uQO4qqy7ioMzCJ7lLdzpvHm+Z6J/E1KM3xhyULf0ib+GMLnd1y7NlpR7zMITtix1IvoVDWrKW68pIPQQclFk4u33NIo88P2Wr0dnqtmsHYx93UGUWdt7Lb8Kmm1s2nbkr4qBsxb00u345+hUrOvTqTWf1Luag6izsjCrfVc51m07wJbCD5iz8kG9fzL+ae4k3HdFIZy20gyq3cFW2n/4u7L+I1Due/3niDsoW+lJiYWdZH1PZtIvWO4KPqxw0JRyrsbAzQcJ+ikXF3+I76C/2UpGFz7V+muA9AlfaXeugKaEqCztjKPb3V3XXWfp+5Lmhc62V4VSVhR2C3BNSRek/bx/Hm4mdGGoLfx8VWjiA/NSFN/Pg8Dof7Z9En2U4UmZh5wPaH3yxAvJzadBb9hECX/Vr6dnQ522LxDeBJfoM3TdlBqJ+aosk4Z/C7w2lFqZiTT3RN3zBOfSZxUGhfdp7XfzqV9BzIZ+K0PL4EPsSeuvH/WYR0XTv9dSKKFvoM4eLthWJZ95Atrf0joP1dL9TbOFJrKnGxeKOEfQIiyVgxe00fSzioojEgQWCpOl+0jmnfnqJRYBPegF9WJ7CNzyfJ8hPw/p6ERZAOHKlJoQ+9BAJrZOpHkAfXTVh1DlrcIuvLmv0sRePqy7OroBfBC9So4Jhzi5X8IXhiTUcKrPhN9DX9fS68MUazu2tSq9wxAx0VdVkasFikYq+kLrqZO0FVIM+grLCH1C5S4DiBkWUizXnt8jPhl+xF0WoqDKKgbkZCXmNRj0s67Wsxq3KU18ET+FmwzMs66WSlXRRqsWaE9FlRo5lYCRUo08IMMH89CIbBoMZEmofOgD99CJy7kLBTNkm1Sjgll/IhsFoAchNGgARa0jhrQY+ecs1YrgJzNEtJ/eNQr+9ZgxDgGJN3uPA/1DQM3MlWB2C0J9WBqykHPuoMSOGYPhlZdlwL8Q+kUj/MMsJrNby0zGJlSLFZAHVgCEmy4axMl38xI3x0YRBVTNRjjgbPmAuTaKGZx/qwMQa4kzA8g6xZXfI3kqAWRibCP5hTY1OA2CqAHUBJAYqlQevA9whMWR34kuhD77lICIjD70AhVwEpONIB1j9GsBIH03oi3aMlEGNPXqmOFlzJc1LhTiXkzVXoEEqxEEjskoqdA4DAMsvVeiRCnHAqLMcR49UiFM6WYOiSyrEAcWaBF4MpE8qxMFExZgJp+CmSc4Wo3KyJk/4uLkofvgapUIcrIkrxh2+FP60VEs1DFBUTF7ty7ONCWqhMoEV6qfusrPOm+hrlgpxQLEm1TJevdMTD5WMo6kBLIKnWsaQ/By7IdQZrhlQrGHKRNBlj9wEqRAHlF4yLWOWZF1mSIU4aE2NHWE5ooLTCwYAijU/FYs5rW3TNA5QrIkz+jRbejZGKoRBJTS9TV03ATb/FuTvuwIUa+5vFz0RgD1BQDO4qWzR4qLGBtIbgcWae8jsuQT4fnpXEVsOULIn9xfRxI+P7Y+fqJ/an5pvWJi9n+6PaI+leY0JdWypxTqfcbHGTFG0jEQPzprSYFFR8iF6iknNYu/xA1wh9gwXLPIwfcYK0/0R99P7CcGHmU1ZvAmLNZbEY2XVsvsxSdRP7yUEn55qNFn1DBcV7yMEf87Vg21RP42M6kfk0zurlbJ4EzxRgBjYr8fhfNbHstP8HRcVTe0V+qXYwJdV6mFR0fA+BV5zGxvMOsLit9G9Jh1eQ42wn5qdDfPeC9nwGSoq6h/Hq4Lvi+yOwTkgcor2jIT/nLJgbIqKNQaNyhQpE0azQV7cTwVOJ2qUcjGGJQ2w+B3/g5HZcK9cUMvqobD4bWgLbdXgcvYGACcViZnZcPU0AutWe8b91Deuva2mqCbsp+a11tQNLmdjwGiThnnZcH2Sy9wOFr9z85hGABwBknUdfuF+as4EaQd7mWd+CjdpEFv2L1jcALaBMD8FZ4ATzMmG0TFg5qdwk4Y52XBFMHMO89MefnSwKV3t4Cks5Oe9DzdpmNJRi45WktPY5B6frBE8q1cJuEJ4iqd7+EHeJnRkgqewJJxG0gQeu/6hfIExIPd3JE1golZ3NoxXX85GKQKBA+fhs3rVAJ7CknA27oM3aWguoOLZULEMCjdpwGf1KkEgUyiqn+AxvSn6tGGB6OSyzCswUasvG8aDGd4ohcBEra5sWOCtxitjg8efpujRhkXukHui1bfARK2Wc0AEvKykaQ0XFeX/niOAyKxoST0CF791zOivBHy09Ah8kcnvxrNhgWCmwsN2+FWa7pSG55pIZdMheExvSrPZsEAwU11PgidqSbOd0uAvzaTUBM64qNjo8WbwrAip3SEE0q8Gs2GRw4RqT7nAxW/uWb1KEDloB9gBBXblprJhgcoMkvjAE7WkqWxYIJjBDhsXSKMbyYZFtgZw7g4XvxvJhkW+NuAbTMRP1Q8rCgQzlod2/nwJ/Fqukl86zoFrY47njOF69ZJE8PalVhtGgxnH9Z/EYqzBjLqg/1OV2TBUq7ZsunsTD7B68y6FNBCV7URIHdfx3PHqyusPR5C3qsuG609js1z6eVvR6PXD82q9VVk7Uc1QgWVHk7fbvyPBvBvVeKu1UPPKqA5mEu+U9dEeR4tqb1Vzkk1VMGO50dNW6uf6unervFVJAbU0mLFCOnmUv4MH665fOimtop2oLJhxPPtL1Rd/OC31VvnDNfxgxnL9jVzvvFh35vMjAdmHRQe8YMZW4p1Feusu5UlAkn/T8jKYcTzvo6ku1+M0/i5c3IDUbLhYmYnf7Iq9s8hg5hW9VeZwTUFmsqPFqPlm+uD7PTr3VokH2OWDmcQ7danOq6mV31stR1Y70W9hOn6zd+daG7DPvDWUNFxzmgSxIzLSf9J2/3tHfyIBSUdNsEJRHHfuTZmXP55qAlKOmkg6s63Qf1/r76HLMXhJIwEZ2XAczMR759S8QaTg7T321tuHawLbozNTRx5Xy9C7ORvu7szyziIPL95t93dcybkRhRxM2f9aWlpaWlpaWlpaWlpaWlpaWlpa7pv/z8SS02s3zAoAAAAASUVORK5CYII=" alt="">
            <h1>Company</h1>
        </div>
        <div>
            <a href="Home.php">Home</a>
            <a href="Login.php">Login</a>
            <a href="Registration.php">Registration</a>
        </div>
    </header>
    <hr>
        
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <label>Login</label><br><br>
        <label for="name"> <strong>User Name: </strong></label>
            <input type="text" id="name" value="<?php echo($userName)?>" name="userName" autocomplete="off" class="form_input" style="margin_left: 10px">
            <span style="color:red;"><?php echo $userNameErr;?></span><br><br>

        <label for="password"><strong>Password: </strong></label>
            <input type="text" id="password" value="<?php echo($password)?>" name="password" autocomplete="off" class="form_input" >
            <span style="color:red;"><?php echo $passwordErr;?></span><br><br>
        <hr>
        <br>
        <input type="checkbox">Remember me
        <br><br>
        <input type="submit" name="submit">
        <a href="forgotpass.php">Forgot Password?</a>
    </form>
    
    <footer>
        <hr>
        Copyright &copy; 2017
    </footer>

    
</body>
</html>