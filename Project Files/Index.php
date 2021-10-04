<?php session_start(); ?>
<?php require_once 'protected/config.php'; ?>

<?php require_once USER_MANAGER ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pied Piper</title>
    <link rel="shortcut icon" href="./Used images/sml.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
  <!-- Custom styles for this template -->
  <link href="<?=PUBLIC_DIR.'index.css'?>" rel="stylesheet">

   <!--- Bootrstrap javascript --->
  <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php require_once PROTECTED_DIR.'navbar.php'; ?>
    <content><?php require_once PROTECTED_DIR.'routing.php'; ?></content>
    <footer><?php include_once PROTECTED_DIR.'footer.php'; ?></footer>
    
</body>
</html>
