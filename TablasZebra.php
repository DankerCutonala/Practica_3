<!DOCTYPE html>
<html>
<head>

<title> Practica3 </title>
<center>
<h1> Tabla Estilo Cebra </h1>
</center>
<link rel="stylesheet" href="EstilosZebra.css"/>                                                   

</head> 

<body>

 <?php
 echo "<center>";
echo "<table border=5 bordercolor=orange>";

$n=1;
for ($f=1; $f<=10; $f++)
{
if ($f % 2 == 0)
echo "<tr bgcolor=purple>";
else
echo "<tr>";
for ($c=1; $c<=10; $c++)
{
echo "<td>", $n, "</td>";
$n=$n+1;
}
echo "</tr>";
}
echo "</table>"; 
echo "</center>";       
?>

</body>
</html>