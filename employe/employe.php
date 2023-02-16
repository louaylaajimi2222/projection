<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nbemploye=$_POST['nbemp'];
?>
<!-- <form method="post" action="rempliremployer.php?nbemp=<?php //print $nbemploye   ?>"> -->
<form method="post" action="rempliremployer.php">
<?php
//recuperer la valeur envoyer par le formulaire dans le champs ayant un nom 
for ($i=1; $i <= $nbemploye; $i++) { 
    

?>

<h2>les donne relatif a l'employe<?php print $i;?> </h2>
<label for="">nom</label>
<input type="text"  name="nom<?php print $i;?>" required />

<label for="">prenom</label>
<input type="text"  name="prenom<?php print $i;?>" required />

<label for="">tel</label>
<input type="text"  name="tel<?php print $i;?>" required />

<label for="">adresse</label>
<input type="text"  name="adresse<?php print $i;?>" required />

<label for="">cin</label>
<input type="text"  name="cin<?php print $i;?>" required />

<label for="">email</label>
<input type="text"  name="email<?php print $i;?>" required /> <br> <br>


<p><br></p>


      


<input type="hidden" value=<?php print $nbemploye;?> name="nbemp">
<!-- input du formulaire invisible qui permet de passer une variable a une autre page  -->



<?php

}

?>
<input type="submit" value="Send Request" />

</form>
<?php

}

?>