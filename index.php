<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['page1Score']=0;
    $answers = ['A','A','B','B','C','C','B','A','B','C'];
    for ($i = 1; $i <= count($answers); $i++) {
        if (isset($_POST['q'.$i]) && $_POST['q'.$i] === $answers[$i-1]) {
            $_SESSION['page1Score']++;
        }
    }
    echo $_SESSION['page1Score'];
    header('Location: page2.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
</head>
<body>
<form method="POST">
    <?php
    for($i = 1; $i < 11; $i++) {
        echo "<p>Question $i</p>";
        echo "<input type=\"radio\" name=\"q$i\" value=\"A\"> A";
        echo "<input type=\"radio\" name=\"q$i\" value=\"B\"> B";
        echo "<input type=\"radio\" name=\"q$i\" value=\"C\"> C";
    }
    ?>
    <p><input type="submit" value="Next"></p>
</form>
</body>
</html>