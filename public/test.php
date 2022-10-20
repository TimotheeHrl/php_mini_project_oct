<?php
ini_set('auto_detect_line_endings',TRUE);
$handle = fopen('../data/accident_france_2006_2016/users.csv','r');

include_once('Users.php');

while ( ($data = fgetcsv($handle) ) !== FALSE ) {
//lit la première variable du row du fichiers Users.csv
echo $data[0] ;

}
ini_set('auto_detect_line_endings',FALSE);
?>

