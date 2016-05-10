<?php

	$files = glob('*.csv');

	$csv = file($files[0]);

	echo "<pre>var nid = [\n";

	foreach ($csv as $flip_line) {
		
		if (strlen($flip_line) >= 2)

			echo '	' . json_encode(str_getcsv($flip_line)) . ",\n";
	
	}

	echo '];</pre>'

?>
