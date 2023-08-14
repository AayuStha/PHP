<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- <style>
        body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;

      background-image: url(https://c4.wallpaperflare.com/wallpaper/200/143/743/thor-mjolnir-lightning-simple-wallpaper-preview.jpg);
            background-repeat: no-repeatrepeat;
            background-size: cover;
    }
    
    h1 {
      text-align: center;
    }

    form {
      max-width: 400px;
      margin;
      padding: 30px; 
      background-color: transparent;
      color: #ffffff;
    }
    
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"],
    input[type="email"],
    input[type="number"],
    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid grey;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    input[type="radio"] {
      margin-bottom: 10px;
      margin-top: 10px;
    }
    input[type="submit"] {
      background-color: brown;
      color: #fff;
      margin-left: 150px;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    input[type="submit"]:hover {
      background-color: #45a049;
    }
    </style> -->
</head>
<body>
    <div class="form">
    <form action="details.php" method="POST">
        <h1>Form</h1>
    Id: 
    <br>
    <input type="number" id = "id" name="id" required> <br>
    Name: <br>
    <input type="text" id = "name" name="name" required><br>

    E-mail: <br>
    <input type="text" id = "email" name="email" required><br>

    Gender: <br>
    <input type="radio" id="gender" name="gender" value="male"checked>Male<br>
    <input type="radio" id="gender" name="gender" value="female">Female<br>
    <input type="radio" id="gender"name="gender" value="others">Others<br>
    <br>
    Hobbies: <br>
    <input type="text" id = "hobbies" name="hobbies"><br>

    Country: <br>
    <select id="country" name="country" required>
            <option value="Nepal">Nepal</option>
            <option value="Canada">Canada</option>
            <option value="UK">UK</option>
            <option value="Australia">Australia</option>
            <option value="Australia">Japan</option>
            <option value="Australia">Austria</option>
            <option value="Australia">USA</option>
            <option value="Australia">UAE</option>
            <option value="Australia">China</option>
            <option value="Australia">Singapore</option>
    </select><br><br>

    <input type="submit" value="Submit" id="submit">
    </form>
    </div>
</body>
</html>