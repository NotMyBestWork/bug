<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="" xmlns="http://www.w3.org/1999/html"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/airhistory.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>

		<?php
		header('Content-type:text/html;charset=UTF-8');
		require_once('init_inc.php');

		$PhID1 = 956847;
		$PhID2 = 1213841;

		$DBH = ConnectDB();
		?>

		<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
				<h1>Hello, world!</h1>
				<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-6">
          <h2>Photo 1</h2>
					<p>
						<?php
						echo '<img src="photos/l/'.str_pad($PhID1,7,'0',STR_PAD_LEFT).'.jpg" class="img-thumbnail">';
						$SQL = "SELECT RegActual,MSNCurrent,Remark FROM Photo WHERE PhotoID = :PhotoID;";
						$Param = array(
							":PhotoID" => $PhID1,
						);
						$PSTmp = DoSQL($DBH,$SQL,"Error in QUERY for photo: {$PhID1}",$Param);
						$RowTmp = $PSTmp->fetch(pdo::FETCH_ASSOC);
						if ($RowTmp) {
							$Reg = $RowTmp['RegActual'];
							$MSN = $RowTmp['MSNCurrent'];
							$Text = $RowTmp['Remark'];
							echo $Reg.' (msn ',$MSN.') '.$Text;
						}
						?>
					</p>
          <p><a class="btn btn-default" href="#" role="button">View large &raquo;</a></p>
        </div>
				<div class="col-md-6">
					<h2>Photo 2</h2>
					<p>
						<?php
						echo '<img src="photos/l/'.str_pad($PhID2,7,'0',STR_PAD_LEFT).'.jpg" class="img-thumbnail">';
						$SQL = "SELECT RegActual,MSNCurrent,Remark FROM Photo WHERE PhotoID = :PhotoID;";
						$Param = array(
							":PhotoID" => $PhID2,
						);
						$PSTmp = DoSQL($DBH,$SQL,"Error in QUERY for photo: {$PhID2}",$Param);
						$RowTmp = $PSTmp->fetch(pdo::FETCH_ASSOC);
						if ($RowTmp) {
							$Reg = $RowTmp['RegActual'];
							$MSN = $RowTmp['MSNCurrent'];
							$Text = $RowTmp['Remark'];
							echo $Reg.' (msn ',$MSN.') '.$Text;
						}
						?>
					</p>
					<p><a class="btn btn-default" href="#" role="button">View large &raquo;</a></p>
				</div>
			</div>

      <hr>

      <footer>
        <p>&copy; Company 2015</p>
      </footer>

    </div> <!-- /container -->				<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/airhistory.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
										function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
										e=o.createElement(i);r=o.getElementsByTagName(i)[0];
										e.src='//www.google-analytics.com/analytics.js';
										r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
										ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
		<?php
		$DBH = NULL;
		?>
    </body>
</html>
