<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>

    <?php
    include("data_class.php");

    $msg = "";

    if (!empty($_REQUEST['msg'])) {
        $msg = $_REQUEST['msg'];
    }

    if ($msg == "done") {
        echo "<div class='alert alert-success' role='alert'>Sucssefully Done</div>";
    } elseif ($msg == "fail") {
        echo "<div class='alert alert-danger' role='alert'>Fail</div>";
    }

    ?>



    <div class="container">
        <div class="innerdiv">
            <div class="leftinnerdiv">
                <!-- <Button class="greenbtn"> ADMIN</Button> -->
                <br>
                <a href="index.php"><Button class="greenbtn"><img class="icons" src="images/icon/book.png" width="30px" height="30px" /> LOGOUT</Button></a>
            </div>

            </script>
</body>

</html>