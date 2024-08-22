<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $comment = htmlspecialchars($_POST['comment']);
    $timestamp = date('F j, Y, h:i A');

    // Save the comment
    $entry = "<p><strong>{$name}</strong> ({$timestamp}):<br>{$comment}</p>\n";
    file_put_contents('comments.txt', $entry, FILE_APPEND | LOCK_EX);

    // Redirect back to the main page
    header('Location: index.php');
    exit;
}
?>
