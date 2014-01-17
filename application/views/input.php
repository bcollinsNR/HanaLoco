<!DOCTYPE html><html lang="en">
<head>
	<title>Submit a Location</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap-select.min.css" type="text/css" media="screen" charset="utf-8" />
</head>
<body>
	<div id="box">
	<div id="header">
		<a href="home"><img src="images/logo.png" alt=""></a>
	</div>
	</div>
	<div id="boxContainer">
	<div id="box" style="width:630px;">
		<form id="location" action="input/post" method="post" class="form-horizontal">
			<div class="hero-unit" style="height:10%">
				<h1>Submit a Location</h1>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputName" id="inputNameLabel">Name</label>
				<div class="controls">
					<input type="text" name="name" id="inputName" class="span4" placeholder="FooBar"/>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputCords" id="inputCordsLabel">Address</label>
				<div class="controls">
					<input type="text" name="cords" id="inputCords" class="span4" placeholder="123 Main St. City, State" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputUrl" id="inputUrlLabel">URL</label>
				<div class="controls">
						<input type="text" name="url" id="inputUrl" class="span4" placeholder="www.foobar.com"/>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPhone" id="inputPhoneLabel">Phone</label>
				<div class="controls">
					<div>
						<input type="text" name="phone" id="inputPhone" class="span4" placeholder="503-1234-567"/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputProduct" id="inputProductLabel">Product</label>
				<div class="controls">
					<select name="product" id="inputProduct" class="selectpicker span4" >
						<option value="0">--Select--</option>
						<option value="beer">Beer</option>
					</select>
				</div>	
			</div>
			<div class="control-group">
				<label class="control-label" for="inputMadeIn" id="inputMadeInLabel">Made In</label>
				<div class="controls">	
					<select name="made_in" id="inputMadeIn" class="selectpicker span4">
						<option value="0">--Select--</option>
						<option value="pdx">Portland</option>
						<option value="orwa">OR / WA</option>
						<option value="usa">USA</option>
					</select>
				</div>
			</div>
			<input type="hidden" name="active" value="1" /> 
			<div class="form-actions">
				<button type="submit" class="btn btn-info" value="Submit"><i class="icon-ok-sign"></i> Submit </button>
				<a href="home" class="btn"> Cancel </a>
			</div>
			</fieldset>
		</form>
	</div>
	</div>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobubble/src/infobubble-compiled.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/jquery.twitterbutton.1.1.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$('.selectpicker').selectpicker();
		$('#header').animate({top: '+=200'},3000,'easeOutQuart',function(){});
	});
	
	$('#location').submit(function() {
		if ($('#inputName').val() != "" && $('#inputCords').val() != "" && $('#inputUrl').val() != "" && $('#inputPhone').val() != "" && $('#inputProduct').val() != "0" && $('#inputMadeIn').val() != "0")
		{
			return true;
		}
		else
		{ //turn into each.()
			if ( $('#inputName').val() == "" ) 
				 $('#inputNameLabel').addClass("errorText");
			else $('#inputNameLabel').removeClass("errorText");		

			if ( $('#inputCords').val() == "" ) 
				 $('#inputCordsLabel').addClass("errorText");
			else $('#inputCordsLabel').removeClass("errorText");			
			
			if ( $('#inputUrl').val() == "" )
				 $('#inputUrlLabel').addClass("errorText");
			else $('#inputUrlLabel').removeClass("errorText");		
			
			if ( $('#inputPhone').val() == "")
				 $('#inputPhoneLabel').addClass("errorText");
			else $('#inputPhoneLabel').removeClass("errorText");
			//alert("phone format?"+ /\d{3}-\d{3}-\d{4}/.test($('#inputPhone').val()));
			
			if ( $('#inputProduct').val() == 0)
				 $('#inputProductLabel').addClass("errorText");
			else $('#inputProductLabel').removeClass("errorText");
				
			if ( $('#inputMadeIn').val() == 0)
				 $('#inputMadeInLabel').addClass("errorText");
			else $('#inputMadeInLabel').removeClass("errorText");
			return false;
		}
	});
	</script>
	</body>
</html>