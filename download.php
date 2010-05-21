<?php
require_once('scripts/boot.php');

if(!isset( $_GET['filename'])) {
	header("Location: /");
}

$type = $_GET['type'];
$filename = $_GET['filename'];


switch($type) {
	case 'mpeg':
		header('Content-type: audio/mpeg; ');
		$subdirectory = 'audio/';
		break;
	case 'pdf':
		header('Content-type: application/pdf; ' );
		$subdirectory = 'pdf/';
		break;
	default:
		header('Content-type: application/octet-stream; ');
		$subdirectory = '';
		break;
}

$file_path = $CONFIG['web_root'].'files/'.$subdirectory.$filename;

// It will be called downloaded.pdf
header('Content-Disposition: attachment; filename="'.$filename.'"; ');

// Set file size

header('Content-Length: '.filesize($file_path).'; ');

// The PDF source is in original.pdf
readfile($file_path);
?>
