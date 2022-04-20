<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <title>KredoIT</title>
</head>
<body>
    <div class="center">
      <h3>Kredo IT Portal</h3>
      <p>Please register</p>
      <form method="post" action="login.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name">

        <label for="mobileNo">Mobile No</label>
        <input type="text" id="mobileno" name="mobileno" placeholder="Enter Mobile No">

        <label for="femail">Email</label>
        <input type="email" id="femail" name="femail" placeholder="Enter valid email address">

        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="japan">Japan</option>
          <option value="philippines">Philippines</option>
          <option value="usa">USA</option>
        </select>
      
        <input type="submit" value="Register">
      </form>
    </div>
</body>
</html>