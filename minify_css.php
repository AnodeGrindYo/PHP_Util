<?php

/**
 * return a string with minified css
 * @param  [[String]] $filename [[path to file]]
 * @return [[String]] [[minified css]]
 */
function minify_css($filename)
{
	$css = file_get_contents($filename);
	return str_replace('; ',';',str_replace(' }','}',str_replace('{ ','{',str_replace(array("\r\n","\r","\n","\t",'  ','    ','    '),"",preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!','',$css)))));
}