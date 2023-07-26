<?php
class MachineACafe
{
 private $marque = null; 
 private $enFonction;
 private $dosette = false;
 private $dosetteUtilisé = false;
 private $sucre = false;
 private $money = 0;

 public function allumage($On = false)
 {
   if($On){
    $this->setenFonction(false);
    return "La machine à café est en fonction";
   }else{
    $this->setenFonction(true);
    return "La machine à café n'est pas en fonction";
   }
 }
 public function faireDuCafe(){
 if($this->dosette == true && $this->dosetteUtilisé == false){
  $this->setdosetteUtilisé(true);
  return "Votre café est prêt";
 }else if($this->dosette == true && $this->dosetteUtilisé == true){
  return "Veuillez vider l'emplacement à dosette";
}
 }
 public function mettreUneDosette()
 {
  if($this->dosette == false){
    $this->setdosette(true);
    $this->setsucre(false);
    return "Vous pouvez mettre une dosette";
  }else{
    $this->setdosette(false);
    return "Veuillez vider l'emplacement à dosette";
  }
 }
 public function sucre($Sucre = false)
 {
   if($Sucre == false){
    $this->setsucre(true);
    return "Ajout de sucre en cours";
   }else{
    return "votre café est déjà sucré";
   }
 }
 public function __construct($marque)
 {
  $this->marque = $marque;
 }

 /**
  * Get the value of enFonction
  */ 
 public function getEnFonction()
 {
  return $this->enFonction;
 }

 /**
  * Set the value of enFonction
  *
  * @return  self
  */ 
 public function setEnFonction($enFonction)
 {
  $this->enFonction = $enFonction;

  return $this;
 }

 /**
  * Get the value of marque
  */ 
 public function getMarque()
 {
  return $this->marque;
 }

 /**
  * Set the value of marque
  *
  * @return  self
  */ 
 public function setMarque($marque)
 {
  $this->marque = $marque;

  return $this;
 }

 /**
  * Get the value of cafe
  */ 
 public function getDosetteUtilisé()
 {
  return $this->dosetteUtilisé;
 }

 /**
  * Set the value of cafe
  *
  * @return  self
  */ 
 public function setDosetteUtilisé($dosetteUtilisé)
 {
  $this->dosetteUtilisé = $dosetteUtilisé;

  return $this;
 }

 /**
  * Get the value of dosette
  */ 
 public function getDosette()
 {
  return $this->dosette;
 }

 /**
  * Set the value of dosette
  *
  * @return  self
  */ 
 public function setDosette($dosette)
 {
  $this->dosette = $dosette;

  return $this;
 }

 /**
  * Get the value of sucre
  */ 
 public function getSucre()
 {
  return $this->sucre;
 }

 /**
  * Set the value of sucre
  *
  * @return  self
  */ 
 public function setSucre($sucre)
 {
  $this->sucre = $sucre;

  return $this;
 }

 /**
  * Get the value of money
  */ 
 public function getMoney()
 {
  return $this->money;
 }

 /**
  * Set the value of money
  *
  * @return  self
  */ 
 public function setMoney($money)
 {
  $this->money = $money;

  return $this;
 }
}
?>