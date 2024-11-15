<body bgcolor="#FFCC" text="#FF0000">
<?php
include("../controllers/cursocontroller.php");
echo "<h1 align='center'>DATOS DE CURSOS</h1>";
echo "<table width='840' border='1' align='center'>";
echo "<tbody>";
echo "<tr>";
echo "<th width='100'> Id </th>";
echo "<th width='100'> Código </th>";
echo "<th width='100'> Nombre </th>";
echo "<th width='100'> Ciclo </th>";
echo "<th width='100'> Num. Creditos </th>";
echo "<th width='100'></th>";
echo "<th width='100'></th>";
echo "</tr>";
$sql=listaCursos();
while($row=mysqli_fetch_array($sql)){
echo "<tr>";
echo "<td align'center'>".$row['id']."</td>";
echo "<td align'center'>".$row['CodCur']."</td>";
echo "<td align'center'>".$row['NomCur']."</td>";
echo "<td align'center'>".$row['Ciclo']."</td>";
echo "<td align'center'>".$row['NumCre']."</td>";
echo '<td><a href="frmmodificar.php?idC='.$row['id'].'"> Modificar</a></td>';
echo '<td><a href="../controllers/cursoController.php?id='.$row['id'].'"> Eliminar</a></td>';
echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>
</body>