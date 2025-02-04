<form action="save_feedback.php" method="post">
    Name: <input type="text" name="name" required><br>
    Feedback: <textarea name="feedback" required></textarea><br>
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $feedback = htmlspecialchars($_POST["feedback"]);
    
    $entry = "Name: $name\nFeedback: $feedback\n--------------------\n";
    
    file_put_contents("feedback.txt", $entry, FILE_APPEND);
    
    echo "Feedback saved successfully!";
}
?>