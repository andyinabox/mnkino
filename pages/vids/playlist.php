<?php
	$playlist = $_GET['playlist_name'];
	$playlists = Spyc::YAMLLoad($CONFIG['web_root'] . 'config/playlists.yml');
	$playlist_data = $playlists[$playlist];
	if( $playlist_data == null ) {
		echo "Oh no!";
	}
 
	$request_base = "http://blip.tv/rss/bookmarks/%s";
	$request = str_replace('%s', $playlist_data['blip_id'], $request_base);
	$response = fetch_rss($request);

?>


<h1>#<?php echo $playlist_data['num']?>: <?php echo $playlist_data['name']?></h1>
<ul class="screening-video-list">
	<?php
	foreach($response->items as $video) {
		echo "<li><a class=\"title\" href=\"".$video['link']."\">".$video['title']."</a> <span class=\"submitted-by\"> ".$video['blip']['puredescription']."</span>";
	}
	?>
</ul>