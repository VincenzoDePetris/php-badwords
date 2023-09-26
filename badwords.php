<?php

$paragraph = $_GET["paragraph"];
$paragraph_len = strlen($paragraph);

$dashboard = $GET["dashbord"];
$censored_paragraph = str_replace($dashboard, '***', $paragraph);
$censored_len = strlen($censored_paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>badwords</title>
</head>
<body>
  <p>
    <b><?php echo $paragraph_len ?></b>
  </p>
  <p>
    <?php echo $paragraph ?>
  </p>  
  <p>
    <b><?php echo $censored_len ?></b>
  </p>
  <p>
    <?php echo $censored_paragraph ?>
  </p>
</body>
</html>