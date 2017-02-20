<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <!--<link rel="icon" href="../../favicon.ico">-->

  <title>Admin</title>

  <!-- Bootstrap core CSS -->
  <link href="<?=base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="<?=base_url()?>assets/admin/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?=base_url()?>assets/admin/css/dashboard.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="<?=base_url()?>assets/admin/js/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

      <link href="<?=base_url()?>assets/bootstrap-fileinput/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

<!-- canvas-to-blob.min.js is only needed if you wish to resize images before upload.
 This must be loaded before fileinput.min.js -->
 <script src="<?=base_url()?>assets/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
 This must be loaded before fileinput.min.js -->
 <script src="<?=base_url()?>assets/bootstrap-fileinput/js/plugins/sortable.min.js" type="text/javascript"></script>
<!-- purify.min.js is only needed if you wish to purify HTML content in your preview for HTML files.
 This must be loaded before fileinput.min.js -->
 <script src="<?=base_url()?>assets/bootstrap-fileinput/js/plugins/purify.min.js" type="text/javascript"></script>
 <!-- the main fileinput plugin file -->
 <script src="<?=base_url()?>assets/bootstrap-fileinput/js/fileinput.min.js"></script>
<!-- optionally if you need a theme like font awesome theme you can include 
  it as mentioned below -->
  <script src="<?=base_url()?>assets/bootstrap-fileinput/themes/fa/theme.js"></script>
<!-- optionally if you need translation for your language then include 
  locale file as mentioned below -->

  <script src="<?=base_url()?>assets/bootstrap-fileinput/js/locales/pt.js"></script>
<!-- include summernote css/js-->
<link href="<?=base_url()?>assets/summernote/summernote.css" rel="stylesheet">
<script src="<?=base_url()?>assets/summernote/summernote.min.js"></script>
</head>

<body>
 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <?php
  if($msg=get_msg()):
    echo '<div class="msg-box">'.$msg.'</div>';
  endif;
  ?>
</div>

