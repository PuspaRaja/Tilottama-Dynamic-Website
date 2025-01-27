<?php
include "config.php";

$id = 1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tit = $_POST["title"];
    $des = $_POST["description"];
    $but = $_POST["button"];

    $sql = "UPDATE hero SET title='$tit', description='$des', button='$but' WHERE id=$id";

    if (mysqli_query($link, $sql)) {
        header("location: index.php");
        exit();
    } else {
        echo "Something went wrong. Please try again later.";
    }
} else {
    $sql = "SELECT * FROM hero WHERE id = $id";
    $result = mysqli_query($link, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $tit = $row["title"];
        $des = $row["description"];
        $but = $row["button"];
    } else {
        echo "Record not found.";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2 class="mt-5">Update Record</h2>
        <p>Edit the values and submit to update the Hero Section.</p>
        <form action="#" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" id="title" name="title" class="form-control" value="<?= $tit; ?>">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea id="description" name="description" class="form-control"><?= $des; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="button" class="form-label">Salary</label>
                <input type="text" id="button" name="button" class="form-control" value="<?= $but; ?>">
            </div>
            <input type="hidden" name="id" value="<?= $id; ?>"/>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="#" class="btn btn-secondary ms-2">Cancel</a>
        </form>
    </div>
</body>
</html>
