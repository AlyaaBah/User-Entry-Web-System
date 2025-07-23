<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>
  <style>
    body {
      background-color: white;
      color: black;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: "Segoe UI", Arial, sans-serif;
      margin: 0;
    }

    .container {
      text-align: center;
      background-color: #f5f5f5;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }

    h1 {
      margin-bottom: 30px;
      font-size: 28px;
    }

    input, button {
      padding: 10px;
      margin: 10px 0;
      width: 220px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      background-color: black;
      color: white;
      cursor: pointer;
    }

    button:hover {
      background-color: #444;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>User Information Form</h1>
    <form action="y.php" method="POST">
      <input type="text" name="name" placeholder="Enter Name" required><br>
      <input type="number" name="age" placeholder="Enter Age" required><br>
      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>
