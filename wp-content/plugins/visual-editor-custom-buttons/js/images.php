<?php
function image_disign($string){
	$string = file_get_contents ( "images.txt" );
	$images = array ();
	$image_url = array ();
	$link_url = array ();
	$image_titles = array ();
	$link_titles = array ();
	preg_match_all ( '/(<img.+?>)/', $string, $images );
	$i = 0;
	foreach ( $images [0] as $image ) {
		preg_match_all ( '/(img|src)=("|\')[^"\'>]+/i', $image, $media );
		$data = preg_replace ( '/(img|src)("|\'|="|=\')(.*)/i', "$3", $media [0] );
		if (count (  $data  ) > 0) 
		$image_url [$i] = $data [0];
		else 
			$image_url [$i] = '';
		preg_match_all ( '/(img|alt)=("|\')[^"\'>]+/i', $image, $a );
		if (count ( $a ) > 0) {
			$alts = preg_replace ( '/(img|alt)("|\'|="|=\')(.*)/i', "$3", $a [0] );
			if (count ( $alts ) > 0)
				$image_alts [$i] = $alts [0];
			else
				$image_alts [$i] = '';
		} else
			$image_alts [$i] = '';
		preg_match_all ( '/(img|title)=("|\')[^"\'>]+/i', $image, $t );
		if (count ( $t ) > 0) {
			$titles = preg_replace ( '/(img|title)("|\'|="|=\')(.*)/i', "$3", $t [0] );
			$image_titles = $t [0];
		}
		$i ++;
	}
	echo 'image_alts:';
	print_r ( $image_alts );
	$hrefs = array ();
	preg_match_all ( '/(<a.+?>)/', $string, $hrefs );
	$i = 0;
	foreach ( $hrefs [0] as $href ) {
		preg_match_all ( '/(a|href)=("|\')[^"\'>]+/i', $href, $ha );
		
		if (count ( $ha ) > 0) {
			$link = preg_replace ( '/(a|href)("|\'|="|=\')(.*)/i', "$3", $ha [0] );
			if (count ( $link ) > 0)
				$link_url [$i] = $link [0];
			else
				$link_url [$i] = '';
		} else
			$link_url [$i] = '';

		
		preg_match_all ( '/(a|title)=("|\')[^"\'>]+/i', $href, $t1 );
		if (count ( $t1 ) > 0) {
			$titles = preg_replace ( '/(a|title)("|\'|="|=\')(.*)/i', "$3", $t1 [0] );
			if (count ( $titles ) > 0)
				$link_titles [$i] = $titles [0];
			else
				$link_titles [$i] = '';
		} else
			$link_titles [$i] = '';
		echo "link_titles:";
		print_r ( $link_titles );
		echo "\n";
		
		$i ++;
	}


	if (count ( $image_url ) == 0) {
		//echo ('error!');
		break;
	}

	if (count ( $link_url ) != count ( $image_url ))
		$link_url = $image_url;


	$arr_empty = array_fill ( 0, count ( $image_url ), "" );

	if (count ( $image_alts ) != count ( $image_url ))
		$image_alts = $arr_empty;
	

	if (count ( $link_titles ) != count ( $image_url )) {
		
		if (count ( $image_titles ) == count ( $image_url ))
			$link_titles = $image_titles;
		else
			$link_titles = $arr_empty;
	}
	
	$str = '<div class="dont-left"></div>' . "\n" . '<div class="flagcategory loaded">' . "\n";
	for($i = 0; $i < count ( $image_url ); $i ++) {
		$str .= '<a  href="' . $link_url [$i] . '"><img class="alignleft size-medium wp-image-29226" src="' . $image_url [$i] . '" alt="' . $image_alts [$i] . '" title="' . $link_titles [$i] . '" width="200" height="150"/></a>';
	}
	$str .= "\n" . '</div>' . "\n" . '<div class="dont-left"></div>' . "\n";
	return $str;
}