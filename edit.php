include "config/db.php";
$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_title = $_POST['title'];
    mysqli_query($conn, "UPDATE tasks SET title='$new_title' WHERE id=$id");
    header("Location: index.php");
    exit;
}

$result = mysqli_query($conn, "SELECT * FROM tasks WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>

<form method="POST">
    <input type="text" name="title" value="<?= $data['title'] ?>">
    <button type="submit">Simpan</button>
</form>
