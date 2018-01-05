<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>




<?php
$ime=$_POST['ime'];
$email=$_POST['email'];
$poruka=$_POST['poruka'];
//ovde otkucajte e-mail adresu na koju ce stizati poruke koje ova skripta procesuira.
$to="Radmilovic05@hotmail.com";
$tekst_poruke="Poruka sa sajta:
$poruka
E-mail je posiljaoca: $email";
if (mail($to,$tekst_poruke,"From: $email")) 
{
	echo "Poruka je poslata";
} 
else 
{
	echo "Greska!";
}
?>

</body>
</html> 
