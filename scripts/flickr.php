<?php
include_once($CONFIG['web_root'].'lib/phpFlickr/phpFlickr.php');
$FLICKR_API_KEY = $CONFIG['flickr_api_key'];


function flickr_test() {
	global $FLICKR_API_KEY;
	$f = new phpFlickr($FLICKR_API_KEY);
	var_dump($f);
	$recent = $f->photos_getRecent();
	foreach ($recent['photo'] as $photo) {
	    $owner = $f->people_getInfo($photo['owner']);
	    echo "<a href='http://www.flickr.com/photos/" . $photo['owner'] . "/" . $photo['id'] . "/'>";
	    echo $photo['title'];
	    echo "</a> Owner: ";
	    echo "<a href='http://www.flickr.com/people/" . $photo['owner'] . "/'>";
	    echo $owner['username'];
	    echo "</a><br>";
	}
}


function flickr_show_set($set_id, $size='s', $start=0, $limit=0, $bigsize='') {
	global $FLICKR_API_KEY;
	$f = new phpFlickr($FLICKR_API_KEY);
	$set = $f->photosets_getPhotos($set_id);
	
	$start = $start;
	$limit = $limit > 0 ? $limit : count($set['photo']); 
	
  flickr_output_from_set($set, $size, $start, $limit, $bigsize);
}

function flickr_output_from_set($set, $size, $start, $limit, $bigsize) {
  if(count($set['photo']) > 0) {
	  for($i=$start; $i<$limit; $i++) {
    // foreach ($set['photo'] as $photo) {
  		$out = "";
  		$base_img_url = "http://farm".$set['photo'][$i]['farm'].".static.flickr.com/".$set['photo'][$i]['server']."/".$set['photo'][$i]['id']."_".$set['photo'][$i]['secret'];
  		$thumb_url = $base_img_url . "_" . $size . ".jpg";
  		if($bigsize != '') { $bigsize = '_' . $bigsize; }
  		$large_url = $base_img_url . $bigsize . ".jpg";
		
  		// open a tag
  		$out .= '<a ';
  		$out .= 'href="' . $large_url . '" ';
  		$out .= 'title="' . $set['photo'][$i]['title'] . '" ';
  		$out .= '>';
		
  		// img tag
  		$out .= '<img ';
  		if ($size == 's') {
        $out .= 'width="75" ';
        $out .= 'height="75" ';
      }
  		$out .= 'src="' . $thumb_url . '" ';
  		$out .= '/>';
		
  		//close a tag
  		$out .= '</a>';
			
  		// print_r($set['photo'][$i]);
  		echo $out;
  	}
	}
}
?>