<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['page2Score']=0;
    $answers = [['A','C'],['A','B'],['B','A','C'],['B','C'],['B','C'],['A','B'],['B','A','C'],['B','C'],['B','A','C'],['B','C']];
    for ($i = 1; $i <= count($answers); $i++) {
        $userAnswer = $_POST['q' . $i] ?? [];

        sort($userAnswer);
        sort($answers[$i - 1]);

        if ($userAnswer === $answers[$i - 1]) {
            $_SESSION['page2Score']+=3;
        }
    }
    echo $_SESSION['page2Score'];
    header('Location: page3.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
<form method="POST">
    <?php
    for($i = 1; $i < 11; $i++) {
        echo "<p>Question $i</p>";
        echo "<input type=\"checkbox\" name=\"q{$i}[]\" value=\"A\"> A";
        echo "<input type=\"checkbox\" name=\"q{$i}[]\" value=\"B\"> B";
        echo "<input type=\"checkbox\" name=\"q{$i}[]\" value=\"C\"> C";
    }
    ?>
    <p><input type="submit" value="Next"></p>
</form>
</body>
</html>