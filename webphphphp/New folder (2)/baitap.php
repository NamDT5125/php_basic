<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Box</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2; 
            
        }

        .content-box {
      
            padding: 20px; 
            background-color: #fff; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
            border-radius: 8px;
            width: 500px;
            max-width: 400px; 
         
        }
        
        input[type="password"] {
            width: 100%; 
            padding: 10px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
            box-sizing: border-box; 
        }
        input[type="text"] {
            width: 100%;
            padding: 10px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
            box-sizing: border-box; 
        }
        label {
            text-align: center; 
        }
        button[type="submit"] {
            width: 100%;
            padding: 10px 20px; 
            border: none;
            border-radius: 5px; 
            background-color: #008000; 
            color: #fff; 
            font-size: 16px; 
            cursor: pointer; 
            transition: background-color 0.3s; 
        }
        button[type="submit"]:hover {
            background-color: #006400; 
        }
        input[type="date"] {
            width: 100%;
            padding: 10px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
            box-sizing: border-box; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content-box">
      
            <label><h2>Registration Form</h2></label>
            <form action = "back_end.php" method = "post">
                <label>Username:</label><br><br>
                <input type = "text" name = "username" required><br><br>
                <label>Password:</label><br><br>
                <input type = "password" name = "password" required><br><br>
                <label>First Name:</label><br><br>
                <input type = "text" name = "first_name" required><br><br>
                <label>Last Name:</label><br><br>
                <input type = "text" name = "last_name" required><br><br>
                <label>Gender:</label><br><br>
                <input type="radio" name="gender" value="Male" required><label>Male</label> 
                <input type="radio" name="gender" value="Female" required><label>Female</label><br><br>
                <label>DOB</label><br><br>
                <input type = "date" name = "dob" required><br><br>
                <input type = "checkbox" name = "agree" required><br>
                <label>Agree to Terms of Services</label><br><br>
                <button type="submit" required>Submit</button>
        </div>
    </div>
</body>
</html>
