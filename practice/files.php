$filename= 'cities.txt';
$handle = fopen($falename, 'r');
$contents = fread($handle, filesize($filename));
echo $contents;
fclose($handle);