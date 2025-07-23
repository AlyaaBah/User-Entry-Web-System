<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['name']) && isset($_POST['age'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];

    $stmt = $conn->prepare("INSERT INTO users (Name, Age) VALUES (?, ?)");
    $stmt->bind_param("si", $name, $age);

    if ($stmt->execute()) {
        // واجهة تأكيد بعد الإدخال
        echo '
        <!DOCTYPE html>
        <html>
        <head>
          <title>Confirmation</title>
          <style>
            body {
              background-color: white;
              color: black;
              font-family: Arial, sans-serif;
              display: flex;
              flex-direction: column;
              justify-content: center;
              align-items: center;
              height: 100vh;
              margin: 0;
            }
            .message {
              font-size: 24px;
              margin-bottom: 30px;
            }
            .btn {
              padding: 10px 20px;
              background-color: black;
              color: white;
              border: none;
              border-radius: 5px;
              text-decoration: none;
              font-size: 16px;
              cursor: pointer;
            }
            .btn:hover {
              background-color: #444;
            }
          </style>
        </head>
        <body>
          <div class="message">✅ Your data has been submitted successfully.</div>
          <a href="form.html" class="btn">Back to Home</a>
        </body>
        </html>
        ';
    } else {
        echo "❌ Error inserting data.";
    }

    $stmt->close();
} else {
    echo "❗ Missing name or age.";
}

$conn->close();
?>
