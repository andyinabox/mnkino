<?php
require_once('helpers.php');

session_start();
if(isset($_GET['s'])) {
	$SECTION = $_GET['s'];
	if(isset($_GET['p'])) {
		$PAGE = $_GET['p'];
	}
} else {$SECTION = 'home';}

// login / logout
if($SECTION == 'login') {    
  if ( isset($_POST['login']) ) {
    if (($_POST['password'] == $CONFIG['admin_password']) && ($_POST['username'] == $CONFIG['admin_username'])) {
      $_SESSION['phplogin'] = true;
      header('Location: /admin/');
    }
  } else if ( isset($_POST['logout']) ) {
    if (isset($_SESSION['phplogin'])) { unset($_SESSION['phplogin']); }
    header('Location: /login/');
  }
}

if($SECTION == 'admin') {
  if (!isset($_SESSION['phplogin']) || $_SESSION['phplogin'] !== true) {
    header('Location: /login/');
  }
  require_once("admin.php");
}

function load_page() {
	global $CONFIG, $SECTION, $PAGE, $ACTION;
	$load_page = $CONFIG['web_root'] . 'pages/';
	
	if(isset($PAGE)) {
	  if($SECTION == 'admin' && isset($ACTION)) {
	    $load_page .= $SECTION . '/' . $PAGE . '/' . $ACTION . '.php';
	  } else {
		  $load_page .=  $SECTION . '/' . $PAGE . '.php';
		}
	} else {
		$load_page .= $SECTION . '.php';
	}

	include($load_page);
}

function load_partial($name) {
	global $CONFIG, $SECTION, $PAGE;
	$load_partial = $CONFIG['web_root'] . 'partials/' . $name . '.php';
	include($load_partial);
}

function is_selected($section) {
	global $SECTION;
	if ($section == $SECTION) {
		return "class=\"selected\"";
	} else { return ""; }
}

function redirect_to_page($page=null) {
  global $SECTION, $PAGE;
  $page = is_null($page) ? $PAGE : $page;
  header("Location: /".$SECTION.'/'.$page.'/');
}
?>