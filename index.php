<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link rel="stylesheet" href="./assets/css/components.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">    
</head>
<body>
    <a id="add" href="./controller/addController" >add controller</a>

    <a id="read"  href="readController">read controller</a>
    <?php 
    
        include('./controller/addController.php'); 
    

    include('./controller/readController.php');

    echo 'ehlo';

   
    include('./controller/addController.php'); 
    include './controller/deleteController.php';

    ?>

</body>
</html>
