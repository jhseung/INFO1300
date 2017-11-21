<?php
$email = $_REQUEST["user_email"];
$name = $_REQUEST["user_name"];
?>

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
  <title>Ji Hwan Seung</title>
</head>

<body>
  <?php include("includes/header.php"); ?>
  <?php include("includes/navigation.php"); ?>

  <p class="main_text">Hi <strong><?php echo($name); ?></strong>, I received your message!<br/>
  I will reply back as soon as possible to <?php echo($email); ?>. <br/>
  Thank you for reaching out :)</p>

</body>

</html>
