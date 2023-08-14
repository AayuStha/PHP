<!DOCTYPE html>
<html>
<head>
    <title>Simple Form</title>
</head>
<body>
    <h2>Enter your information:</h2>
    <form method="POST" action="display.php">
        <label>ID:</label>
        <input type="text" name="id" required><br><br>

        <label >Name:</label>
        <input type="text" name="name"  required><br><br>

        <label >Email:</label>
        <input type="email" name="email"  required><br><br>

        <label >Hobbies:</label>
        <input type="text" name="hobbies" ><br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" required>
        <label>Male</label>
        <input type="radio" name="gender" value="Female" required>
        <label>Female</label><br><br>

        <label>Country:</label>
        <select name="country" id="country" required>
            <option value="">Select Country</option>
            <option value="NEPAL">NEPAL</option>
            <option value="JAPAN">JAPAN</option>
            <option value="USA">USA</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
