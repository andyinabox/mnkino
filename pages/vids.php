<?php
$playlists = Spyc::YAMLLoad($CONFIG['web_root'] . 'config/playlists.yml');
?>

<h1>Vids</h1>
<p>Here's where the rubber meets the road. Watch videos from past screenings:</p>
<p>
	<ol id="videos-index">
		<?php
		foreach($playlists as $key => $data) {
		 echo "<li><a href=\"/vids/$key/\">".$data['name']."</a> <span class=\"date\">".strftime("(%B %e, %Y)", strtotime($data['date']))."</span></li>";
		}?>
	</ol>
</p>

<?php
$playlists = Spyc::YAMLLoad($CONFIG['web_root'] . 'config/playlists.yml');
?>