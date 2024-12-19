<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['page3Score']=0;
    $answers = ['answer1','answer2','answer3','answer4','answer5','answer6','answer7','answer8','answer9','answer10'];
    for ($i = 1; $i <= count($answers); $i++) {
        if (isset($_POST['q'.$i]) && strtolower($_POST['q'.$i]) === strtolower($answers[$i-1])) {
            $_SESSION['page3Score']+=5;
        }
    }
    echo $_SESSION['page3Score'];
    header('Location: results.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 3</title>
</head>
<body>
<form method="POST">
    <?php
    for($i = 1; $i < 11; $i++) {
        echo "<p>Question $i</p>";
        echo "<input type=\"text\" name=\"q$i\">";
    }
    ?>
    <p><input type="submit" value="Next"></p>
</form>
</body>
</html>