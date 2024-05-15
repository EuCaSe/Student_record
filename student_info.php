<html>
    <body>
    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $age = $_POST["age"];
        $grade = $_POST["grade"];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "student_records";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO students (name, age, grade) VALUES (?, ?, ?)");
        $stmt->bind_param("sis", $name, $age, $grade);

        if ($stmt->execute() === TRUE) {
            echo "New record created successfully";
        } else {
            if ($conn->errno == 1062) { // Error number for duplicate entry
                echo "Error: Duplicate entry. Please check your input.";
            } else {
                echo "Error: " . $stmt->error;
            }
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Form not submitted!";
    }
    ?>
    <p><a href="home.php">Back to Home</a></p>
    </body>
</html>
