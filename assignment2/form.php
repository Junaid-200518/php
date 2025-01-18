<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>
    <form action="form1.php" method="post">
        <p>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </p>
        <p>
            <label for="mobile">Mobile Number:</label>
            <input type="text" name="mobile" id="mobile" required>
        </p>
        <p>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </p>
        <p>
            <label for="message">Message:</label>
            <textarea name="message" id="message" required></textarea>
        </p>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
