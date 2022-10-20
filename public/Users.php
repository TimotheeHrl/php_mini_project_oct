<?php


class User_Acc{

public $num_Acc ;
public $place;
public $catu;
public $grav;
public $sexe;
public $trajet;
public $secu;
public $locp;
public $actp;
public $etatp;
public $an_nais;
public $num_veh;

public function __construct($num_Acc,$place,$catu,$grav,$sexe,$trajet,$secu,$locp,$actp,$etatp,$an_nais,$num_veh){
$this->num_Acc = $num_Acc;
$this->place = $place;
$this->catu = $catu;
$this->grav = $grav;
$this->sexe = $sexe;
$this->trajet = $trajet;
$this->secu = $secu;
$this->locp = $locp;
$this->actp = $actp;
$this->etatp = $etatp;
$this->an_nais = $an_nais;
$this->num_veh = $num_veh;
}

public function createUser(){
$mysql = new mysqli($_ENV['DATABASE_HOST'], $_ENV['DATABASE_USER'],
$_ENV['DATABASE_PASSWORD'], $_ENV['DATABASE_NAME']);
if (!$mysql) {
echo "Error: Unable to connect to MySQL." . PHP_EOL;
echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
exit;

  }

  $sql = "INSERT INTO users(num_Acc,place,catu,grav,sexe,trajet,secu,locp,actp,etatp,an_nais,num_veh)
 VALUES('" . $this->num_Acc . "','" . $this->place . "','" . $this->catu . "','" . $this->grav . "','" 
 . $this->sexe . "','" . $this->trajet . "','" . $this->secu . "','" . $this->locp . "','" . $this->actp 
 . "','" . $this->etatp . "','" . $this->an_nais . "','" . $this->num_veh . "')";
    $result = $mysql->query($sql);
    mysqli_close($mysql);

 }
    
    
private function createUserTable(){
$mysql = new mysqli($_ENV['DATABASE_HOST'], $_ENV['DATABASE_USER'],
$_ENV['DATABASE_PASSWORD'], $_ENV['DATABASE_NAME']);
if (!$mysql) {
echo "Error: Unable to connect to MySQL." . PHP_EOL;
echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
exit;
$sql = "CREATE TABLE IF NOT EXISTS users(
num_Acc INT(11) NOT NULL,
place INT(11) NOT NULL,
catu INT(11) NOT NULL,
grav INT(11) NOT NULL,
sexe INT(11) NOT NULL,
trajet INT(11) NOT NULL,
secu INT(11) NOT NULL,
locp INT(11) NOT NULL,
actp INT(11) NOT NULL,
etatp INT(11) NOT NULL,
an_nais INT(11) NOT NULL,
num_veh INT(11) NOT NULL,
PRIMARY KEY(num_Acc)
)";
$result = $mysql->query($sql);
mysqli_close($mysql);
}
}
}

?>