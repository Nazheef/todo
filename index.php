<?php
include "config/db.php";
$result = mysqli_query($conn, "SELECT * FROM tasks ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>To-Do List</h1>
    <form action="tambah.php" method="POST">
        <input type="text" name="title" placeholder="Tambahkan tugas..." required>
        <button type="submit">Tambah</button>
    </form>
    <ul>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
            <li>
                <span class="<?= $row['status'] == 'done' ? 'done' : '' ?>"><?= $row['title'] ?></span>
                <a href="selesai.php?id=<?= $row['id'] ?>">✔️</a>
                <a href="edit.php?id=<?= $row['id'] ?>">✏️</a>
                <a href="hapus.php?id=<?= $row['id'] ?>">🗑️</a>
            </li>
        <?php endwhile; ?>
    </ul>
</body>
</html>
