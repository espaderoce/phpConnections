<?php

 include("/usr/share/php/adodb/adodb.inc.php");
 $db = NewADOConnection('postgres');
 $db->Connect("mail.tecnoweb.org.bo", "grupo12sc", "grup012grup012", "db_grupo12sc");
 $result = $db->Execute("SELECT * FROM persona WHERE per_type=1;");
 if ($result === false) die("Falla la conexion..."); 
echo "<h1>Datos del Tabla amigo </h1>";

 while (!$result->EOF) {
    for ($i=0, $max=$result->FieldCount(); $i < $max; $i++)
           print $result->fields[$i].' ';
    $result->MoveNext();
    print "<br>\n";
 }