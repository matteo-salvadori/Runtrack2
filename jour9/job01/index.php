<?php

$connexion=mysqli_connect("localhost","root","","jour08");

$requete="SELECT * FROM `etudiants`";

$query= mysqli_query($connexion,$requete);

$resultat= mysqli_fetch_all($query);
?>

<table border="1">
<tr>
<td>Nom</td>
</tr>
<?php
while($donnees = mysqli_fetch_array($resultat))
{
?>
<tr>
    <td><?php echo $donnees['id'];?></td>
</tr>

<?php
}
mysqli_close();
?>

</table>
