<html>
<body>

Name: <?php echo $_POST["first"]; ?><br>
 Last Name: <?php echo $_POST["last"]; ?><br>
 Gender: <?php echo $_POST["gender"]; ?><br>
 email: <?php echo $_POST["email"]; ?><br>
 phone: <?php echo $_POST["phone"]; ?><br>
 message: <?php echo $_POST["message"]; ?><br>

 <?php
 // define variables and set to empty values
 $nameErr = $emailErr = $genderErr = $websiteErr = "";
 $name = $email = $gender = $message = $phone = "";

 if ($_SERVER["PHP_SELF"] == "POST") {
   if (empty($_POST["first"])) {
     $firstErr = "Name is required";
   } else {
     $first = test_input($_POST["first"]);
   }
   if (empty($_POST["last"])) {
     $lastErr = "Last name is required";
   } else {
     $last = test_input($_POST["last"]);
   }

   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
   }

   if (empty($_POST["phone"])) {
     $phone = "";
   } else {
     $phone = test_input($_POST["phone"]);
   }

   if (empty($_POST["message"])) {
     $message = "";
   } else {
     $message = test_input($_POST["message"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
 }
 ?>
</body>
</html>
