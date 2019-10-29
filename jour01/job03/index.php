<?php
$prenom = "Matteo";
$age = "16";
$taille= "2.00";
$float = 5.65;
$bool = false;
?>


<table>
        <thead>
                <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
                </tr>
        </thead>

        <tr>
                <td>None</td>
                <td>$prenom</td>
                <td><?php  echo $prenom?></td>
        </tr>

        <tr>
                <td>Nombre à virgule</td>
                <td>$taille</td>
                <td><?php  echo $taille?></td>
        </tr>

        <tr>
                <td>Nombre</td>
                <td>$age</td>
                <td><?php  echo $age?></td>
        </tr>

        <tr>
				<td>Float</td>
				<td>$float</td>
				<td>'.$float.'</td>
		</tr>

        <tr>
                <td>Boolean</td>
                <td>$bool</td>
                <td><?php  echo $bool?></td>
        </tr>
     
</table>