<?php 
    $paragraph = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores ipsum perspiciatis ad dolore nisi repudiandae rerum, quam sed iure in!";
    $word = $_GET['name'];
    $censored = str_replace($word, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <p><?php echo $paragraph ?></p>
    <p><?php echo strlen($paragraph)?></p>
    <p><?php echo $censored?></p>
    <p><?php echo strlen($censored) ?></p>
</body>
</html>