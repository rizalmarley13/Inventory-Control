<nav class="navbar navbar-inverse">
		<div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo base_url();?>index.php/home">Gudang Benang v.1.0</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	       <!--  <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
	        <li><a href="#">Link</a></li> -->
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Transaksi <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Penerimaan Benang</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Pengeluaran Benang</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Retur Benang</a></li>
	            <!-- <li role="separator" class="divider"></li>
	            <li><a href="#">One more separated link</a></li> -->
	          </ul>
	        </li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laporan <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Stok Harian</a></li>
	            <li><a href="#">Stok Bulanan</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Penerimaan Harian</a></li>
	            <li><a href="#">Penerimaan Bulanan</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Pengeluaran Harian</a></li>
	            <li><a href="#">Pengeluaran Bulanan</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Retur Benang</a></li>
	          </ul>
	        </li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Master Data <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo base_url();?>index.php/benang">Data Benang</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Data User</a></li>
	            <!-- <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">One more separated link</a></li> -->
	          </ul>
	        </li>
	        <li><a href="#">Stok Benang</a></li>
	      </ul>
	      <form class="navbar-form navbar-left">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">Link</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Profil</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="<?php echo base_url();?>index.php/login/logout">Logout</a></li>
	            <!-- <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li> -->
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>