<html>
    <body>
        <?php
            // Establish Connection
            $server_name = "localhost";
            $username = "root";
            $password = "";
            $dbname = "student_db";

            $conn = mysqli_connect($server_name, $username, $password, $dbname);

            if(!$conn){
                die("Connection Failed " . mysqli_connect_error());
            }

            // Fetch and sanitize ID from GET
            $id = $_GET['id']; 

            // Prepared statement to prevent SQL injection
            $sql_delete = "DELETE FROM student1 WHERE id = ?";
            $stmt = $conn->prepare($sql_delete);
            $stmt->bind_param("i", $id);

            if($stmt->execute()){
                // Redirect after successful deletion
                header("Location: Student_form.php");
                exit(); // Ensure no further code is executed
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close statement and connection
            $stmt->close();
            mysqli_close($conn);
        ?>
    </body>
</html>
