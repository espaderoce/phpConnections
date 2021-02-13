
<HTML>
<HEAD>
<TITLE>contador.php</TITLE>
</HEAD>
<BODY>
<?php
  session_start();
  if(isset($_SESSION['contador'])==0){
      $_SESSION['contador']=0;
  }
  ++$_SESSION['contador'];
  echo "<a href=\"contador.php\">Has recargado esta pagina ".$_SESSION['contador']." veces</a>";
?>
</BODY>
</HTML>