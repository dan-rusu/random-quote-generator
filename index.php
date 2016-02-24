<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
		<meta name="author" content="Dan Andrei Rusu">
		<link rel='shortcut icon' type='image/x-icon' href='static/img/quotegen.ico' />

		<title>Quote Dispactcher</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">	

		<link rel="stylesheet" type="text/css" href="static/css/style.css">
		<link rel="stylesheet" type="text/css" href="static/css/bootstrap-social.css">
		<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
	</head>

	<body>
		<header>
			<h1>Qoute Dispatcher</h1>
		</header>
		<br/>

		<div class="quote-container">
			<h2 class="quote-content" id="quote-content"></h2>
			<div class="row customised">
				<div class="quote-title pull-right" id="quote-title"> </div>
				<div class="quote-source pull-left" id="quote-source"></div>
			</div>
			<br/>
			<div class="row"><button type="button" class="btn btn-success btn-lg btn3d" id="quote-button"><i class="fa fa-commenting"></i> Generate New Qoute</button></div>

			<div class="row" style="text-align: center">
				<a class="btn btn-social btn-twitter" id="tweet-it">
					<i class="fa fa-twitter"></i> Tweet this quote
      			</a>
			</div>

		</div>	


		<script>
		!function(d,s,id){
			var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
			if(!d.getElementById(id)){
				js=d.createElement(s);
				js.id=id;
				js.src=p+'://platform.twitter.com/widgets.js';
				fjs.parentNode.insertBefore(js,fjs);}
		}
		(document, 'script', 'twitter-wjs');
		</script>

		

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="static/js/dispatcher.js"></script>
	</body>
</html>