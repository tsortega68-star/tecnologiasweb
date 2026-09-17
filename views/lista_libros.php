<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Biblioteca - MVC</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f6f9; margin: 0; padding: 20px; }
        .container { max-width: 800px; margin: auto; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #1F3B6E; border-bottom: 3px solid #2B5DA6; padding-bottom: 8px; }
        form { display: grid; grid-template-columns: 1fr 1fr 100px 120px; gap: 10px; margin-bottom: 20px; background: #eef3f8; padding: 15px; border-radius: 6px; }
        input { padding: 8px; border: 1px solid #ccc; border-radius: 4px; }
        button { background-color: #2B5DA6; color: white; border: none; padding: 8px 12px; border-radius: 4px; cursor: pointer; font-weight: bold; }
        button:hover { background-color: #1F3B6E; }
        .btn-danger { background-color: #d9534f; }
        .btn-danger:hover { background-color: #c9302c; }
        table { width: 100%; border-collapse: collapse; background: white; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        th { background: #1F3B6E; color: white; padding: 12px; text-align: left; }
        td { padding: 10px 12px; border-bottom: 1px solid #EEF3FB; }
        tr:hover td { background: #EEF3FB; }
    </style>
</head>
<body>
    <div class="container">
        <h1>📚 Sistema de Biblioteca (Patrón MVC)</h1>

        <h3>Agregar Nuevo Libro</h3>
        <form method="POST" action="index.php">
            <input type="hidden" name="action" value="crear">
            <input type="text" name="titulo" placeholder="Título" required>
            <input type="text" name="autor" placeholder="Autor" required>
            <input type="number" name="anio" placeholder="Año" required min="1000" max="2099">
            <button type="submit">Guardar</button>
        </form>

        <h3>Lista de Libros</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Año</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($libros && $libros->num_rows > 0): ?>
                    <?php while ($row = $libros->fetch_assoc()): ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= htmlspecialchars($row['titulo']) ?></td>
                            <td><?= htmlspecialchars($row['autor']) ?></td>
                            <td><?= $row['anio'] ?></td>
                            <td>
                                <form method="POST" action="index.php" style="display:inline; background:none; padding:0; margin:0; grid-template-columns:1fr;">
                                    <input type="hidden" name="action" value="eliminar">
                                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                    <button type="submit" class="btn-danger" onclick="return confirm('¿Eliminar libro?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="5" style="text-align:center;">No hay libros registrados.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
