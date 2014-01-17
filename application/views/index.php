<!DOCTYPE html><html lang="en">
<head>
	<?php echo $map['js']; ?>
	<title>hanaloco</title>
   	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap-select.min.css" type="text/css" media="screen" charset="utf-8" />
</head>
<body>
	<div id="debug"></div> <!--debug text area -->
	<div id="map_canvas" >
		<?php echo $map['html']; ?>
	</div>
		<div id="body">
			<div class="twitter" id="twitter"></div>
			<div id="header" class="center"><a href="home"><img src="images/logo.png"></a></div>
			<div id="about">
				<a href="#myModal" role="button" class="btn btn-inverse" data-toggle="modal">About!</a>
			</div>
			<div id="selection">
				<!--<div id="topright">x</div><!--This div will be for a close or slide button, i havent figured out which as of yet, but stay tuned...-->
				<form action="filter" method="post" class="form-horizontal">
                	<label for="madeIn" style="margin-bottom:-3px">Made In:</label>
					<select name="madeIn" id="madeIn" class="selectpicker span2">
               	 		<option value="">--Select--</option>
						<option value="pdx">Portland</option>
						<option value="orwa">OR or WA</option>
                		<option value="usa">US</option>
					</select>
					<br />
               		<label for="product" style="margin-bottom:-3px">Product:</label>
                    <select name="product" id="product"  class="selectpicker span2">
						<option value="">--Select--</option>
						<option value="beer">Beer</option>
					</select>
					<div style="padding-top:10px; text-align: center;">
						<button type="submit" class="btn btn-success" value="Submit">Go!</button>
					</div>
				</form>
				<hr />
				<div id="addButton" style="text-align: center;"><a href="input" class="btn btn-mini btn-inverse">Add Location!</a></div>
			</div>
		</div>
		<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  			<div class="modal-header">
    			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    			<h3 id="myModalLabel">About us</h3>
  			</div>
  			<div class="modal-body">
    			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut arcu nunc, vehicula quis ultrices vel, fermentum vitae purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum quis justo diam, non volutpat ipsum. Vivamus ullamcorper accumsan purus, a elementum massa posuere quis. Suspendisse congue turpis eget sapien bibendum pharetra. Morbi sodales nulla nec justo sollicitudin ac hendrerit magna mollis. Cras et placerat justo. Pellentesque et consectetur orci. Phasellus vitae risus vitae elit bibendum ullamcorper. Praesent nec magna sapien. In placerat ante at nunc elementum auctor. Nam a rhoncus magna. Donec gravida, velit ac gravida convallis, arcu eros vestibulum risus, et ultrices nisi odio sit amet tortor. Pellentesque at tellus luctus mi elementum facilisis vitae eget risus. Sed tristique ligula in mauris viverra vitae vulputate tortor laoreet.</p>
  			</div>
  			<!--<div class="modal-footer"></div>-->
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
		$('#madeIn').selectpicker('val', '<?php echo $madeIn; ?>');
		$('#product').selectpicker('val', '<?php echo $product; ?>');
		$('#twitter').twitterbutton({user:'userName',layout:'horizontal'});
    	$('#selection').delay(1000).animate({right: '+=200'},3000,'easeOutQuart',function(){});
		$('#header').animate({top: '+=200'},3000,'easeOutQuart',function(){});
		$('#twitter').animate({top: '+=200'},5000,'easeOutQuart',function(){});
		$('#about').animate({top: '+=200'},7000,'easeOutQuart',function(){});
	});
	</script>
</body>
</html>