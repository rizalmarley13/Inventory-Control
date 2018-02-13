<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>Gudang Benang v.1.0</title>
	<!--bootstrap-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/bootstrap.min.css" media="screen">
	<!--font-awesome-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/style.css" media="screen">
</head>
<body>
<div class="container-fluid">

	<?php $this->load->view('home/view_menu.php')?>	
	<ol class="breadcrumb">
		<li><?php echo $judul;?></li>
		<li><?php echo $subjudul;?></li>
	</ol>

	<?php $this->load->view($content);?>
	
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<footer>
	<div class="wrapper clearfix">
            <div align="center">
                <p class="copyright"><b>&copy; 2018 reyege web developer</b></p>
            </div>
        </div>
</footer>
</body>
<!--jquery-->
<script src="<?php echo base_url();?>asset/js/jquery-2.2.3.min.js"></script>
<!--bootstrap-->
<script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
</html>
