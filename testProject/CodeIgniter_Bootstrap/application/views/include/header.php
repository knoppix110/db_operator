<!DOCTYPE html>
<html lang="jp">
<head>
   <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">

   <title>CodeIgniter Bootstrap</title>

   <link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/font-awesome.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">

   <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
   <script src="<?php echo base_url('assets/js/jquery-ui.min.js') ?>"></script>
   <script src="<?php echo base_url('assets/js/lodash.min.js') ?>"></script>
   <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
   <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
   
   <script src="<?php echo base_url('assets/bootstrap-duallistbox/libraries/modernizr/modernizr-custom.min.js') ?>"></script>
<!--     
   <link href="<?php echo base_url('assets/bootstrap-duallistbox/bootstrap/css/bootstrap-theme.css') ?>" rel="stylesheet" type="text/css" media="all"> 
   <link href="<?php echo base_url('assets/bootstrap-duallistbox/bootstrap/css/bootstrap.css') ?>" rel="stylesheet" type="text/css" media="all">
-->
   <link href="<?php echo base_url('assets/bootstrap-duallistbox/libraries/prettify/prettify.css') ?>" rel="stylesheet" type="text/css" media="all">
   <link href="<?php echo base_url('assets/bootstrap-duallistbox/bootstrap-duallistbox/bootstrap-duallistbox.css') ?>" rel="stylesheet" type="text/css" media="all">
   <script src="<?php echo base_url('assets/bootstrap-duallistbox/libraries/prettify/prettify.js') ?>"></script>
   <script src="<?php echo base_url('assets/bootstrap-duallistbox/bootstrap-duallistbox/jquery.bootstrap-duallistbox.js')?>"></script> 

</head>
<body>
<div class="navbar navbar-inverse">
  <div class="navbar-inner">
    <ul class="nav">
	  <li><a href="<?php echo base_url('index.php/frontpage')?>">Home</a></li>

    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">カテゴリ管理<b class="caret"></b></a>
      <ul class="dropdown-menu">
	  		<li><a href="<?php echo base_url('index.php/category_registration') ?>">カテゴリ登録</a></li>
	  		<li><a href="<?php echo base_url('index.php/category_registration/category_list') ?>">カテゴリ一覧/削除/編集</a></li>
      </ul>
    </li>

    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">権限管理<b class="caret"></b></a>
      <ul class="dropdown-menu">
	  		<li><a href="<?php echo base_url('index.php/auth_registration') ?>">権限登録</a></li>
	  		<li><a href="<?php echo base_url('index.php/auth_registration/auth_list') ?>">権限一覧/削除/編集</a></li>
      </ul>
    </li>

    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">DB管理<b class="caret"></b></a>
      <ul class="dropdown-menu">
	  		<li><a href="<?php echo base_url('index.php/db_registration') ?>">DB登録</a></li>
	  		<li><a href="<?php echo base_url('index.php/db_registration/dblist') ?>">DB一覧/削除/編集</a></li>
      </ul>
    </li>


    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">SQL管理 <b class="caret"></b></a>
      <ul class="dropdown-menu">
		    <li><a href="<?php echo base_url('index.php/sql_registration') ?>">SQL登録</a>
		    <li><a href="<?php echo base_url('index.php/sql_registration/sqllist') ?>">SQL一覧/削除/編集</a>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
        </ul>
    </li>
    <li class="divider-vertical"></li>
    </ul>

    <ul class='nav pull-right'>
    <li><a href=#>Hi, <?php echo $username; ?>! You are logged in now. </a></li>
    <li><a href=<?php echo base_url('index.php/auth/logout/')?>>Logout</a></li> 
    </ul>

  </div>
</div>


<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
