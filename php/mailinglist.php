<html>
<body>

Hi <?php echo $_POST["data_2"]; ?><br>
Thank you for joining. Your email address is: <?php echo $_POST["data_4"]; ?>

</body>
</html>

<?php
// define variables and set to empty values
$firstname = $lastname = $email = $agree = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["data_2"]);
  $lastname = test_input($_POST["data_3"]);
  $email = test_input($_POST["data_4"]);
  $agree = test_input($_POST["data_5"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["data_2"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["data_2"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["data_4"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["data_4"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
}
?>