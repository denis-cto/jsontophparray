<?php
/**
 * User: DenisIMac
 * Date: 24.02.16
 * Time: 18:12
 * Script takes JSON file as input and convert it to PHP-styled arrays
 * call it  yoursite/decoder.php and copy output from browser to where you need
 *
 */
$filename = 'snippets.json';
$f = file_get_contents( $filename );
$data = json_decode( $f, true );
echo "<pre>";
convertJSONtoArray( $data, 0 );
echo "</pre>";

function convertJSONtoArray( $data, $level )  // level - уровень вложенности чтобы табуляцию писать правильную
{
	foreach( $data as $key1 => $value1 )
	{
		if( is_array( $value1 ) )
		{
			echo str_repeat( "\t", $level ) . '["' . $key1 . '"] => array (' . "\n";
			convertJSONtoArray( $value1, $level + 1 );
			echo str_repeat( "\t", $level ) . ")," . "\n";

		}
		else
		{
			if( ( $value1=='true' ) or ( $value1=='false' ) or ( is_numeric( $value1 ) ) )  // if numeris or boolean we dont'add quotes
			{
				echo str_repeat( "\t", $level ) . '["' . $key1 . '"] => ' . $value1 . ',' . "\n";
			}
			else
			{
				echo str_repeat( "\t", $level ) . '["' . $key1 . '"] => "' . $value1 . '",' . "\n";
			}
		}
	}
}
