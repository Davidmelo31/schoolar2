<?php
include("../config/database.php");

$query = "SELECT id, usuario, email FROM usuarios";
$result = pg_query($conn, $query);
?>

<h3>Usuarios registrados</h3>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Usuario</th>
        <th>Email</th>
    </tr>
    <?php while ($row = pg_fetch_assoc($result)): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['usuario'] ?></td>
        <td><?= $row['email'] ?></td>
    </tr>
    <?php endwhile; ?>
</table>
