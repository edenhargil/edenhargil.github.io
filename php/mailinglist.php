<html>
<body>

Hi <?php echo $_POST["data_2"]; ?>!<br />
Thank you for joining my mailing list.<br />
Your email address is: <?php echo $_POST["data_4"]; ?>

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
// Has the form been posted?
if(isset($_POST['data_4']))
{
  // Append the submitted e-mail to the list.
  $file = fopen('list.txt', 'a');
  fputs($file, $_POST['data_2','data_3','data_4'] . "\n");
  fclose($file);

  // Send a message to the browser.
  die('Added to mailing list.');
}
?>
