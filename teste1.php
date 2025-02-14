<?php
$connexion=mysqli_connect("localhost","root","","electromaroc");
if(!$connexion){
Die("Errors ! ".mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="container">
<table border=0 width=100%>
<td id="logo" class="link"><img src="logo.gif" width=220></td>
<td width=180></td>
<td width=20><img src="icons/chev_right.png" width=12></td>
<td width=110><a href=#  class="link">Ma liste d'envie</a></td>
<td width=15><img src="icons/chev_right.png" width=12></td>
<td width=80><a href=#  class="link">Connexion</a></td>
<td width=12><img src="icons/chev_right.png" width=12></td>
<td width=125><a href=#  class="link">Ouvrir un compte</a></td>
<td width=12><img src="icons/star.png" width=12></td>
<td><a href=#  class="link">Bookmark</a></td>
<td width=14><img src="icons/buy.png" width=14></td>
<td><a href=#  class="link"><!--Something-->item(s)</a></td>
</table>
</div><br>