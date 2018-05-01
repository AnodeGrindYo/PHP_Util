<?php

function whatsin($var)
{
	echo "<pre>";
	var_dump($var);
	echo "<pre>";
}

function consoloe_log($var)
{
	$output = $var;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'DEBUG: " . $output . "' );</script>";
}

function compareObjects(&$o1, &$o2)
{
    echo 'o1 == o2 : '.bool2str($o1 == $o2)."\n";
    echo 'o1 != o2 : '.bool2str($o1 != $o2)."\n";
    echo 'o1 === o2 : '.bool2str($o1 === $o2)."\n";
    echo 'o1 !== o2 : '.bool2str($o1 !== $o2)."\n";
}