<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Bran Heatherby</title>

    <link href="assets/css/hover_pack.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/colors/color-74c9be.css" rel="stylesheet">    
    <link href="assets/css/animations.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    
    
    <!-- JavaScripts needed at the beginning
    ================================================== -->
    <!-- <script type="text/javascript" src="/assets/js/twitterFetcher.js"></script> -->
  
    
    
    <!-- Main Jquery & Hover Effects. Should load first -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover_pack.js"></script>
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
   <!-- <script src="//use.typekit.net/wfa8clu.js"></script>
<script>try{Typekit.load();}catch(e){}</script> -->

<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lora|Oranienbaum&text=Bran%20Heatherby">


  </head>

  <body>
	  
	  
	  
	  
<!=========HEADER=========>

<?php include('header.html') ;?>   
    

<!=========WORKS=========> 

   
    <div class="container">
    
    <div class="row mt">
	    		<div class="col-lg-4 col-lg-offset-4 centered works">
	    			<h3>works in progress</h3>
	    		</div>
	    		</div><!--/row mt -->
    	<div class="row mt">
    		<div class="col-lg-4 centered work-block">
    			
    			<h4><b>Brother Æthelstan's Paintbrush</b></h4><hr>
    			<p>One part M.R. James,<br/> one part Ma Liang's Magic Paintbrush.<br/>All creepy as hell.</p>
    			
    		</div>
    		<div class="col-lg-4 centered work-block">
    			
    			<h4><b>Retraction</b></h4><hr>
    			<p>Tara is an cat veterinarian. She used to be a goddess of health and resurrection. But some things still take a bit of a push to heal.</p>
    			
    		</div>
    		<div class="col-lg-4 centered work-block">
    			
    			<h4><b>Lore</b></h4><hr>
    			<p>Malcolm has got a long journey ahead of him. But at least in the land of faerie, he doesn't have to be in service.</p>
    			
    		</div>   	
    		 	
    	</div><!-- /row -->
    </div><!-- /container -->

<!=========SOCIAL=========> 
	
	<div id="social">
		<div class="container">
			<div class="row">
								
				<!-- TWEETS -->
				<div class="col-lg-8 tweet">
					<h4>Recent Tweets</h4>
					<div id="showtweets"></div>
					<!--<p id="follow"><i class="fa fa-twitter"></i> follow <a href="http://www.twitter.com/branheatherby">@BranHeatherby</a> on twitter</p> -->
					<p>
						
						<a id="twitter-timeline" 
						href="https://twitter.com/BranHeatherby">
<!--Tweets by @BranHeatherby -->
</a>
</p>
				</div><!-- /col-lg-8 -->
				
				<!-- LATEST POSTS -->
				<div class="col-lg-4 links">
					<a href="/about"><h4>bio.</h4></a>
					<a href="http://branheatherby.tumblr.com/"><h4>blog.</h4></a>
					

				</div><!-- /col-lg-4 -->
				
			</div><! --/row -->
		</div><!-- /container -->
	</div><!-- /f -->
	
<!=========FOOTER=========>
    
<?php include('footer.html') ;?>

  <script src="https://platform.twitter.com/widgets.js"></script>
  <script type="text/javascript">
  $(document).ready(function () {
  	window.twttr.widgets.createTimeline(
  		"510867893613899776",
  		document.getElementById("twitter-timeline"),
  		{
  			width: '900',
  			height: '300', 
  			chrome: 'nofooter transparent',
  			tweetLimit: '4'
  		}
  	);
  });
  </script>
  </body>
</html>
