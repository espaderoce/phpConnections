<?php
$dbcoon = pg_connect("host=www.tecnoweb.org.bo dbname=db_grupo12sc user=grupo12sc password=grup012grup012");
if ($dbcoon) {
    echo "Conectado a la Base de Datost";
} else {

    echo "Sorry Efrain Espadero, We have some problem to stablish communication with postgresql";
}


$query = 'Select * from Persona';


echo "<h1>Datos de Persona:</h1>";
echo  "<table>\n";
$result = pg_query($query);


while ($data = pg_fetch_array($result,null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($data as $value) {
     echo "<td>" . $value . "</td>";
        //echo $value;
    }
    echo "\t</tr>\n";
}

echo "</table>\n";

//liberando 
pg_free_result($result);

//cerrandoConexion
pg_close($dbcoon);