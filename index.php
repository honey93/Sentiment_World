<?php ?>
<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
	
		<title>Sentiment Detector App</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.scrollzer.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		
        <script type="text/javascript" src="js/index.js"></script>
		<script type="text/javascript" src="http://www.parsecdn.com/js/parse-1.3.2.min.js"></script>
		<script>

	
			
		
		
		
function validateForm() 
{

document.getElementById("demo").innerHTML = "Processing..." + "<Br> " + "In a few seconds results will be displayed";
document.getElementById("demo").style.color = "black";

//event.preventDefault();
	var y = 0;
    var z = 0;
	var l = 0;
	var ans = 0;
		
    var res = [];




		Parse.initialize("GOz4H9uZbN1pRGR4DxERGWBF9fbUGn8o77UEeQIn", "7eizxicb7Ir2CSaRSGmUqVhQ1N2lU3VDih1ytuaR");
var GameScore = Parse.Object.extend("ultimate_words");
var query = new Parse.Query(GameScore);
//query.equalTo("negative_words_a","absahi123");
query.limit(950);
query.notEqualTo("negative_words_a","absahi123");
query.find({
  success: function(results) {
   //alert("Successfully retrieved " + results.length + " scores.");
    // Do something with the returned Parse.Object values
   

	var m = document.forms["myForm"]["fname"].value;
	       var x = m.toLowerCase();
		   
    
	   var full_del = x.split('.').join('');
   var full_comm = full_del.split(',').join('');
    res = full_comm.split(" ");
   
    //alert(res);

    
    l = res.length;

   for (var i = 0; i < results.length; i++) {
     


	 var object = results[i];
	  
      //alert(object.id + ' - ' + object.get('section_name'));
    
	var marks = object.get('Positive_words_a');
	var marks_a = object.get('Positive_word_b');
    var marks_b	= object.get('positive_word_c');
	
	var neg_a = object.get('negative_words_a');
	var neg_b = object.get('negative_words_b');
	
	var neg_c = object.get('negative_words_c');
	var neg_d = object.get('negative_words_d');
	var neg_e =  object.get('negative_words_e');
	var neg_f =  object.get('negative_words_f');
	
	
	
	
	
	
	
	
	 
   for(j=0; j<res.length;  j++)
{
   if (res[j] == marks || res[j] == marks_b || res[j] == marks_a ) {
        
        
    y++; 
   }
   
   if (res[j] == neg_a || res[j] == neg_b || res[j] == neg_c || res[j] == neg_d || res[j] == neg_e || res[j] == neg_f  ) {
        
        
    z++; 
   }
  
  
  
  if ( ( res[j]  == "not"  || res[j]  == "can't" || res[j]  == "don't"    ||   res[j]  == "doesn't" )   && (res[j+1] == neg_a || res[j+1] == neg_b || res[j+1] == neg_c || res[j+1] == neg_d || res[j+1] == neg_e || res[j+1] == neg_f ) ) {
        
        
    z--;
    y++;	
   }
  
  
  if (( res[j]  == "not"  || res[j]  == "can't" || res[j]  == "don't"    ||   res[j]  == "doesn't" )   && (res[j+2] == neg_a || res[j+2] == neg_b || res[j+2] == neg_c || res[j+2] == neg_d || res[j+2] == neg_e || res[j+2] == neg_f ) ) {
        
        
    z--;
    y++;	
   }
  
  
  
  if (   ( ( res[j]  == "not"  || res[j]  == "can't" || res[j]  == "don't"    ||   res[j]  == "doesn't" )   &&     (res[j+2] == marks || res[j+2] == marks_b || res[j+2] == marks_a ) ) ) {
        
        
    y--;
	z++;
   //alert("hello");
   }

   
   
  if (   ( ( res[j]  == "not"  || res[j]  == "can't" || res[j]  == "don't"    ||   res[j]  == "doesn't" )   &&     (res[j+1] == marks || res[j+1] == marks_b || res[j+1] == marks_a ) ) ) {
        
        
    y--;
	z++;
   //alert("hello");
   }
  
  
  
  }

	
	
	
	
	
	}
	
	
	
 
  
  
if(y>z)
{
  ans = (y/(y+z))*100;
  
 
 document.getElementById("demo").innerHTML = "Positive Statement" + "<Br> " + "Total no of words are" + " " + l + "<br>" + "Percent positivity in the text is" + " " + ans + "%";
 document.getElementById("demo").style.color = "green";
 
 }

if(z>y)
{ 
  ans = (z/(y+z))*100;
 //alert("The statement is negative");
document.getElementById("demo").innerHTML = "Negative Statement" + "<Br> " + "Total no of words are" + " " + l + "<br>" + "Percent negativity in the text is" + " " + ans + "%";
document.getElementById("demo").style.color = "red";
}


if(z==y)
{
//alert("The statement is neutral");
document.getElementById("demo").innerHTML = "Neutral Statement";
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
  },
  error: function(error) {
    alert("poor Internet Connection" + error.code + " " + error.message);
  }
});
	









	
	

}
</script>
		
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>
	

		<!-- Header -->
			<div id="header" class="skel-layers-fixed">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span>
							<h1 id="title">Honey Thakuria</h1>
							<p>Polarity <br> Detector   
							App</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<!--
							
								Prologue's nav expects links in one of two formats:
								
								1. Hash link (scrolls to a different section within the page)
								
								   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

								2. Standard link (sends the user to another page/site)

								   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>
							
							-->
							<ul>
								<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Intro</span></a></li>
								<li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Tool</span></a></li>
								<li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Result Page</span></a></li>
								<li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contact</span></a></li>
							</ul>
						</nav>
						
				</div>
				
				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>
				
				</div>
			
			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

						
								<h2 class="alt">Welcome to <strong>Sentiment Analysis</strong> World.</h2>
								
								<h3><strong> Click Below to Analyse the text </strong> <br/> <br /> </h3>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							
							<footer>
							
								<a href="#portfolio" class="button scrolly">Analyse the text</a>
								
							</footer>

						</div>
					</section>
					
				<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">
					
							
								<h2>Sentiment Analysis Tool</h2>
							
							
							<p>Enter Your text here to see the polarity of the text.
							</p>
						
							<form  name="myForm"  action="#about" onsubmit="return validateForm()" >
								
								<div class="row 50%">
									<div class="12u">
										<textarea name="fname" placeholder="Message"></textarea>
									</div>
								</div>
								
							
								<div class="row">
									<div class="12u">

								 		 
									</div>
								</div>
							</form>
							<a href="#about" onclick="validateForm()" class="button scrolly">Analyse the text</a>

					</section>

				<!-- About Me -->
					<section id="about" class="three">
						<div class="container">

							<header>
								<h2>Result of polarity</h2>
							</header>
                                  <div id="demo" >Click above button to see the polarity </div>
							<h2>  If you like our work, or If you have some suggestion, click below  </h2>
							<a href="#contact" class="button scrolly">Feedback</a>
								

						</div>
					</section>
			
				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">

							
								<h2>Contact</h2>
							

							<p></p>
							 
					 <h1 id="fantastic">   <h1>
							
							<form name="myFormq" >
								<div class="row 50%">
									<div class="6u"><input type="text" name="nameq" placeholder="Name" /></div>
									<div class="6u"><input type="text" name="emailq" placeholder="Email" /></div>
								</div>
								<div class="row 50%">
									<div class="12u">
										<textarea name="messageq" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="12u">
										<input type="submit" onclick="regis()" name="submit" value="Send Message" />
									</div>
								</div>
							</form>

						</div>
					</section>
			
			</div>

		<!-- Footer -->
			<div id="footer">
				
				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				
			</div>

	</body>
	
	<script>

	function regis()
	{
	  
		 event.preventDefault();
  			Parse.initialize("GOz4H9uZbN1pRGR4DxERGWBF9fbUGn8o77UEeQIn", "7eizxicb7Ir2CSaRSGmUqVhQ1N2lU3VDih1ytuaR");

  			
	
	
	
	
    	// result is 'Hello world!'
  		
  		
  		var xq = document.forms["myFormq"]["nameq"].value;
        var yq = document.forms["myFormq"]["emailq"].value;
		var zq = document.forms["myFormq"]["messageq"].value;
	     
    	var GameScore = Parse.Object.extend("GameScore");
		var gameScore = new GameScore();	
		
		gameScore.set("NAME", xq);
		gameScore.set("EMAIL", yq);
		gameScore.set("MESSAGE", zq);
		
	     
		
		
		//gameScore.increment("user_id");
		//gameScore.save();
		
        //gameScore.set("skills", ["pwnage", "flying"]);
	
	gameScore.save(null, {
  		success: function(gameScore) {
    	
		document.getElementById("fantastic").innerHTML = "Thanks for your feedback";
    	
    	
    	
    	
    	//event.preventDefault();
    	//var q = localStorage.getItem("lastname");
    	//gameScore.set("username", p);
		//gameScore.set("password", q);
    	//gameScore.set("cheatMode", false);
        //gameScore.set("skills", ["row", "flying"]);
        //gameScore.save();
        //alert('New object created with objectId: ' + gameScore.id);
    	
    	
  		},
  		error: function(gameScore, error) {
    	alert('Failed to create new object, with error code: ' + error.message);
  		}
						 }); 
  		
  		
  		
  		
  		
  		
  		
	
	
		 

	}
	
	</script>

	</html>