<?php
  $companyName = 'Franklin\'s Fine Dining';
  include('includes/arrays.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <title><?php echo TITLE; ?></title>
  <link href="assets/styles.css" rel="stylesheet">  
</head>

<body id="final-example">
  <div class="wrapper">
    <div id="banner">
      <img src="img/banner.png" alt="Franklin's Fine Dining">
    </div>
    <div id="nav">
      <?php include('includes/nav.php'); ?>
    </div>
    <div class="content">