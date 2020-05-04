<?php
if(!$_GET['wid'])
{
  ?>
  <script language="JavaScript">
  window.location="mobile.php?wid="+screen.width+"&hei="+screen.height;
  </script>
  <?php
}

$largeur=$_GET['wid'];
$hauteur=$_GET['hei'];
$largeur = (int)$largeur;

if($largeur > 980){echo'sup à 980';} else{echo'inf à 980';}
echo '<br/>'.$largeur;

?>
