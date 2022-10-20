<?php
ini_set('auto_detect_line_endings',TRUE);
$handle = fopen('../archive/users.csv','r');

include_once('Users.php');

while ( ($data = fgetcsv($handle) ) !== FALSE ) {
//lit la première variable du row du fichiers Users.csv
$user = new User($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8],$data[9],$data[10],$data[11]);
echo $data[0] . "\n";

//create table if not 

}
ini_set('auto_detect_line_endings',FALSE);
?>


