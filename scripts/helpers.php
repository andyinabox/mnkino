<?php

function download($fn, $t='') {
	$location = isset($t) ? "/download.php?filename=$fn&type=$t" : "/download.php?filename=$fn";
	return $location;
}

function checkNavSection($section){
	global $SECTION;
	if ($SECTION == $section ) {
		return 'class="selected"';
	}
	else {
		return "";
	}
}

function showMainPlayer() {
	global $SECTION, $PAGE;
	# default player with featured playlist
	$src = "http://blip.tv/play/hKdni9cUmdVM";
	if ($SECTION == 'vids') {
		$playlists = Spyc::YAMLLoad($CONFIG['web_root'] . 'config/playlists.yml');
		if($playlists['monthly'][$_GET['playlist_name']] != null) { $src = $playlists['monthly'][$_GET['playlist_name']]['blip_player_url']; }
		elseif ($playlists['kabaret'][$_GET['playlist_name']] != null) { $src = $playlists['kabaret'][$_GET['playlist_name']]['blip_player_url']; }
	}
	
	return '<embed src="'.$src.'" type="application/x-shockwave-flash" width="550" height="416" allowscriptaccess="always" allowfullscreen="true"></embed>';
}

function http_data_request($request_url) {
	// create a new cURL resource
	$ch = curl_init();
	
	// set URL and other appropriate options
	curl_setopt($ch, CURLOPT_URL, $request_url );
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	// grab URL and pass it to the browser
	$response = curl_exec($ch);

	// close cURL resource, and free up system resources
	curl_close($ch);
	
	return $response;	
}


?>