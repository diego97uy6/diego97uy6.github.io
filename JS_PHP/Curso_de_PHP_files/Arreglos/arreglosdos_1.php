<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo</title>
    </head>
    <body>

        <?php
           $equipo_futbol = array
 					(
 					array("Rooney","Chicharito","Gigs"),
 					array("Suarez"),
 					array("Torres","Terry","Etoo")
 					);
 
 foreach($equipo_futbol as $equipo)
 	{
 	echo "En este equipo juegan: ";
 	foreach($equipo as $jugador)
 		{
 		echo $jugador ." ";
 		}
 	echo "<br>";
 	}
        ?>
            

    </body>
</html>