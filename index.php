<?php
	include_once('scripts/boot.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	
	<title>MNKINO :: Do more with less. Make something move.</title>

	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="expires" content="-1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="robots" content="all" />
	<meta name="author" content="Andrew Dayton, Lindsey Borgerson" />
  <meta name="description" content="MNKINO is a monthly excuse for anyone to make a film, and to meet others who like doing the same. It's not just for film school graduates, MFA candidates, or videographers. It's for you.">
  
  <meta name="keywords" content="mnkino, kino, film, microcinema, video, kabaret, create">
	<meta name="date" content="2010-01-31" />
	
	<link rel="stylesheet" href="/css/main.css" type="text/css" />
	
	<script src="/js/jquery-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/js/hoverIntent.js" type="text/javascript" charset="utf-8"></script>
	<script src="/js/superfish.js" type="text/javascript" charset="utf-8"></script>
	<script src="/js/main.js" type="text/javascript" charset="utf-8"></script>
		
	<script type="text/javascript">
	// delete this script tag and use a "div.mc_inline_error{ XXX !important}" selector
	// or fill this in and it will be inlined when errors are generated
	var mc_custom_error_style = '';
	</script>
	<script type="text/javascript" src="http://mnkino.us1.list-manage.com/js/jquery.validate.js"></script>
	<script type="text/javascript" src="http://mnkino.us1.list-manage.com/js/jquery.form.js"></script>
	<script type="text/javascript" src="http://mnkino.us1.list-manage.com/subscribe/xs-js?u=c07dae0f3b87b3d98da1a7178&amp;id=185099a5cf"></script>

</head>

<body id="<?php echo $SECTION.'-'.$PAGE ?>">
	
	<div id="container">
		
	<!-- HEADER -->
		<div id="player">
			<?php echo showMainPlayer() ?>
		</div>
		<?php load_partial('navbar'); ?>
	<!-- /HEADER -->
	
	<!-- MAIN CONTENT -->
	<div id="main">
		
		<!-- PAGE CONTENT -->
		<div id="page">
			<?php load_page(); ?>
		</div>
		<!-- /PAGE CONTENT -->

		<!-- FOOTER -->
		<?php load_partial('footer'); ?>
		<!-- /FOOTER -->
		</div>
		
	</div>
	<!-- /MAIN CONTENT -->
	
	<!-- GOOGLE ANALYTICS -->
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
	var pageTracker = _gat._getTracker("UA-11185752-1");
	pageTracker._trackPageview();
	} catch(err) {}</script>
	<!-- /GOOGLE ANALYTICS -->
</body>
</html>
