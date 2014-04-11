<?php
$playlists = Spyc::YAMLLoad($CONFIG['web_root'] . 'config/playlists.yml');
?>

<h1>Vids</h1>
<p>Here's where the rubber meets the road. Watch videos from past screenings:</p>
<p>
	<ol class="videos-index">
		<?php
		foreach($playlists['monthly'] as $key => $data) {
		 echo "<li><a href=\"/vids/$key/\">".$data['name']."</a> <span class=\"date\">".strftime("(%B %e, %Y)", strtotime($data['date']))."</span></li>";
		}?>
	</ol>
	<h3>Kabaret Screenings:</h3>
	<ul class="videos-index">
		<?php
		foreach($playlists['kabaret'] as $key => $data) {
		 echo "<li><a href=\"/vids/$key/\">".$data['name']."</a> <span class=\"date\">".strftime("(%B %e, %Y)", strtotime($data['start_date'])).'&ndash;'.strftime("(%B %e, %Y)", strtotime($data['end_date']))."</span></li>";
		}?>		
	</ul>
</p>

<?php
$playlists = Spyc::YAMLLoad($CONFIG['web_root'] . 'config/playlists.yml');
?>