<?php
$eqa = array();
$pos = array();
$neg = array();
foreach ( $arr as $a => $value ) {
	if ( $value > 0 ) {
		$a        = $value;
		$positive = array_push( $pos, $a );
	}
	if ( $value < 0 ) {
		$a        = $value;
		$negative = array_push( $neg, $a );
	}
	if ( $value == 0 ) {
		$a  = $value;
		$equal = array_push( $eqa, $a );
	}
}
	echo sprintf( '%0.6f%c', count( $pos ) / count( $arr ), 10 );
	echo sprintf( '%0.6f%c', count( $neg ) / count( $arr ), 10 );
	echo sprintf( '%0.6f%c', count( $eqa ) / count( $arr ), 10 );

