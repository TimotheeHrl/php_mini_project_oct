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


}

?>