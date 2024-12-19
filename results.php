<?php
session_start();
$score1 = $_SESSION['page1Score'] ?? 0;
$score2 = $_SESSION['page2Score'] ?? 0;
$score3 = $_SESSION['page3Score'] ?? 0;

$totalScore = ($score1) + ($score2 ) + ($score3);

echo "Congratulations! Your score: {$totalScore}";
?>
