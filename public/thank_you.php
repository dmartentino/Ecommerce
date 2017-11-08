<?php require_once("../resources/config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

      <!-- Navigation -->
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>


<?php
if(isset($_GET['tx'])){
  $amount=$_GET['amt'];
  $currency=$_GET['cc'];
  $transaction=$_GET['tx'];
  $status=$_GET['st'];

  $query = query("INSERT INTO orders (order_amount, order_transaction, order_status, order_currency) VALUES('{$amount}','{$currency}', '{$transaction}', '{$status}')");

  confirm($query);
  session_destroy();
}else{
  redirect("index.php");
}

?>



<!-- Page Content -->
<div class="container">

    <h1 class="text-center">Thank you</h1>



<!-- Footer -->
<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>


</div>
<!-- /.container -->



</body>

</html>
