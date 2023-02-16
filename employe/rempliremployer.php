<?php

 $nbemploye=$_POST['nbemp'];
print $nbemploye;


    
    


for ($i=1; $i <=$nbemploye ; $i++) { 
    
    creerfichier($i); 
    

}





function remplirtableauunemultidimension($nbe):array
{   
$tab=array();
$i=1;
while($i<= $nbe)
{
    $tab[$i]=remplirtableauuneseuledimension($i);
   
     $i++;
 }
 return $tab;
}




 function remplirtableauuneseuledimension($pos):array
{
   
    $employe=[];
    $nom=$_POST['nom'.$pos];
    $prenom=$_POST['prenom'.$pos];
    $tel=$_POST['tel'.$pos];
    $adresse=$_POST['adresse'.$pos];
    $email=$_POST['email'.$pos];
    $cin=$_POST['cin'.$pos];
   
    
    //$tab=array(array($nom0,$prenom0,$cin0,$tel0,$mail0,$adresse0),array($nom1,$prenom1,$cin1,$tel1,$mail1,$adresse1),array($nom2,$prenom2,$cin2,$tel2,$mail2,$adresse2))
    $employe[0]=$nom;
    $employe[1]=$prenom;
    $employe[2]=$cin;
    $employe[3]=$tel;
    $employe[4]=$email;
    $employe[5]=$adresse;
    return $employe;
    



}



function creerfichier($pos):void //creation fichier + remplir fichier 
{
    

        $f1=fopen("fiche/fiche_".$_POST['nom'.$pos]."_".$_POST['cin'.$pos]."html","w");
       
    $html=$_POST['nom'.$pos]." ".$_POST['cin'.$pos]." ".$_POST['prenom'.$pos]." ".$_POST['tel'.$pos]." ".$_POST['adresse'.$pos]." ".$_POST['email'.$pos];
    fwrite($f1,$html);
    if(   fwrite($f1,$html))
   print("le fichier d l'employe".$pos."a ete bien creer ");
    else 
    print("le fichier d l'employe".$pos."n' a pas ete bien creer ");
    fclose($f1);


}



?>