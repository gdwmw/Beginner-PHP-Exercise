<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link rel="icon" href="public/favicon.svg">
</head>

<body>
    <form method="post">
        <label for="todo">Mau ngapain nich?</label><br>
        <input type="text" name="todo">
        <button type="submit">Submit</button>
    </form>

    <?php
    $todos = [];
    function saveData($parameter)
    {
        file_put_contents('todo.txt', serialize($parameter));
        header('Location:todo.php');
    }
    if (file_exists("todo.txt")) {
        $file = file_get_contents('todo.txt');
        $todos = unserialize($file);
    }
    if (isset($_POST['todo'])) {
        $data = $_POST['todo'];
        $todos[] = [
            'todo' => $data,
            'status' => 0
        ];
        saveData($todos);
    }
    if (isset($_GET['status'])) {
        $todos[$_GET['key']]['status'] = $_GET['status'];
        saveData($todos);
    }
    if (isset($_GET['hapus'])) {
        unset($todos[$_GET['key']]);
        saveData($todos);
    }
    print_r($todos);
    ?>

    <ul>
        <?php
        foreach ($todos as $key => $value) {
            ?>
            <li>
                <input type="checkbox" name="todo"
                    onclick="window.location.href = 'todo.php?status=<?php echo ($value['status'] == 1) ? '0' : '1'; ?>&key=<?php echo $key; ?>'"
                    <?php if ($value['status'] == 1) {
                        echo "checked";
                    } ?>>
                <label for="">
                    <?php
                    if ($value['status'] == 1) {
                        echo '<del>' . $value['todo'] . '</del>';
                    } else {
                        echo $value['todo'];
                    }
                    ?>
                </label>
                <a href="todo.php?hapus=1&key=<?php echo $key; ?>"
                    onclick="return confirm('Anda yakin untuk menghapus?');">Hapus</a>
            </li>
            <?php
        }
        ?>
    </ul>
</body>

</html>