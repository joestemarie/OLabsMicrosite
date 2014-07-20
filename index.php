<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="Sign the petition for a mayors task force" />
<meta property="og:site_name" content="Organizing Labs"/>
<meta property="og:url" content='http://act.organizinglabs.org/'/>
<meta property="og:type" content="petition" />
    <title>Untitled Landing Page</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body onload="loadfunction();">
  <!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MFPF72"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MFPF72');</script>
<!-- End Google Tag Manager -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
  $(function () {
    
    //grab the entire query string
    var query = document.location.search.replace('?', '');
    
    //extract each field/value pair
    query = query.replace("utm_source","SOURCE");
    query = query.replace("utm_medium","MEDIUM");
    query = query.replace("utm_term","TERM");
    query = query.replace("utm_content","CONTENT");
    query = query.replace("utm_campaign","CAMPAIGN");

    query = query.split('&');
    // query = query.replace("utm_","");
    
    //run through each pair
    for (var i = 0; i < query.length; i++) {
    
      //split up the field/value pair into an array
      var field = query[i].split("=");
      
      //target the field and assign its value
      $("input[name='" + field[0] + "'], select[name='" + field[0] + "']").val(field[1]);
    
    }
  });
function signedPetition(firstname) {

};

</script>

<body>
<!-- NEW FACEBOOK CODE -->
<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      //document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      //document.getElementById('status').innerHTML = 'Please log ' +
      //  'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : 672488586172328,
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.0' // use version 2.0
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      alert(response.name + "has logged in using Facebook! Their first name is " + response.first_name + "and email is " + response.email + "and age range is " + response.age_range);
    // document.mc-embedded-subscribe-form.mce-FNAME.value=response.first_name;
    // document.mc-embedded-subscribe-form.mce-LNAME.value=response.last_name;
    document.getElementById("mce-FNAME").value = response.first_name;
    document.getElementById("mce-LNAME").value = response.last_name;
    document.getElementById("mce-EMAIL").value = response.email;

    //document.getElementbyId("mce-EMAIL").value=response.email;
    document.getElementById("mc-embedded-subscribe-form").submit();
    });
  }
</script>


  <!-- END NEW FB CODE -->

  <div style="background-image: url('capitol-at-night.jpg'); background-attachment: fixed; background-size: 100%;">
    <div class="row">
    	<div class="large-6 columns;"></div>
    	<div class="large-6 medium-8 columns;">
    	<div style="background-color:rgba(255,255,255,0.6); margin:10%;">
	    <div class="row">
	        	<div class="large-12 columns">
	        	<div style="margin-left:5%; margin-right:5%;">
	      			<h3>Sign the petition to message</h3>
				    <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed metus lobortis, congue ligula quis, eleifend risus. Pellentesque ac condimentum risus. Quisque vitae eros ac eros auctor luctus. Nunc et dui feugiat, tempor orci eu, vehicula lacus.</p>
	        		<form action="http://joestemarie.us4.list-manage.com/subscribe/post?u=27e088ff809374f4111f30b29&amp;id=1361198e4e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	        		<div class="row">
	        			
	        			<div class="large-6 columns">
	        				<label for="mce-FNAME">First Name
	        					<input type="text" value="" name="FNAME" id="mce-FNAME" placeholder="more fields go here"/>
	        				</label>
	        			</div>
	        			<div class="large-6 columns">
	        				<label for="mce-LNAME">Last Name
	        					<input type="text" value="" name="LNAME" id="mce-LNAME" placeholder="more fields go here"/>
	        				</label>
	        			</div>
	        			<div class="large-12 columns">
	        				<label for="MCE-email">Email Address
	        					<input type="email"  value="" name="EMAIL" id="mce-EMAIL" placeholder="more fields go here"/>
	        				</label>
	        			</div>
	        			<div style="position: absolute; left: -5000px;"><input type="text" name="b_27e088ff809374f4111f30b29_1361198e4e" tabindex="-1" value=""></div>
	        			<div class="large-12 columns" style="align:center;">
	        			<input type="hidden" name="SOURCE" />
                <input type="hidden" name="MEDIUM" />
                <input type="hidden" name="TERM" />
                <input type="hidden" name="CONTENT" />
                <input type="hidden" name="CAMPAIGN" />
                <input type="hidden" name="PAGE" value="TaskforcePetition"/>
	        			<input type="submit" class="button [radius round]"/>
                </form>
                <p>Sign the petition with Facebook.</p>
                <fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>
	        			</div>
	        		</div>
	        	</div>
	        	</div>
	    		</div>
	    		</div>   
	    	</div>
	    </div>
	</div>
	</div>
</div>
	<div style="background-color:#FFFFFF;">
    	<div class="row">
    		<div class="large-6 columns" style="margin:1%;">
    			<h3 style="margin:5px;">This is where the details go</h3>
    			<p>Here are some words that we should absolutely definitely change before we launch this:</p>
    			<ul>
    				<li>Item 1</li>
    				<li>Item 2</li>
    				<li>Item 3</li>
    			</ul>
    			<p>orem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed metus lobortis, congue ligula quis, eleifend risus. Pellentesque ac condimentum risus. Quisque vitae eros ac eros auctor luctus. Nunc et dui feugiat, tempor orci eu, vehicula lacus.</p>
    			<p>orem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed metus lobortis, congue ligula quis, eleifend risus. Pellentesque ac condimentum risus. Quisque vitae eros ac eros auctor luctus. Nunc et dui feugiat, tempor orci eu, vehicula lacus.</p>
    		</div>
    		<div class="large-4 columns">
    			<img src="url.jpg" style="width:100%;"/>
    		</div>
    	</div>
    </div>
     <div style="background-image: url('monument.png'); background-attachment: fixed; background-height: 100%; background-repeat:no-repeat;">
     	<div class="row">
     		<div class="large-12 columns">
     		    	<div style="background-color:rgba(255,255,255,0.6); margin:5%; padding:5%;">
     	<h3>HEADER</h3>
     	<p>orem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed metus lobortis, congue ligula quis, eleifend risus. Pellentesque ac condimentum risus. Quisque vitae eros ac eros auctor luctus. Nunc et dui feugiat, tempor orci eu, vehicula lacus.</p>
     	<p>orem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed metus lobortis, congue ligula quis, eleifend risus. Pellentesque ac condimentum risus. Quisque vitae eros ac eros auctor luctus. Nunc et dui feugiat, tempor orci eu, vehicula lacus.</p>
     			</div>
     		</div>
     	</div>
     </div>
     <div style="background-color:#FFFFFF;">
    	<div class="row">
    		<div class="large-12 columns" style="margin:1%;">
    			<h3 style="margin:5px;">Who We Are</h3>
    			<p>Here are some words that we should absolutely definitely change before we launch this:</p>
    			<ul>
    				<li>Item 1</li>
    				<li>Item 2</li>
    				<li>Item 3</li>    				
    			</ul>
    			<img src="url.jpg" style="display:block; margin-left:auto; margin-right:auto;"/>
    		</div>
    	</div>
    </div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
