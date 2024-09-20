<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>YOOOOOOOOOO</h1>
    <a href="contact.php">fortnite</a>
    <!-- sis ir tas ling lieta/ a burts -->
    <img src="img\Screenshot 2024-09-20 081027.png" alt="Italian Trulli">;
    <!-- sis ir img -->
    <form action="/action_page.php">
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Last name:</label>
        <input type="text" id="lname" name="lname"><br><br>
        <input type="submit" value="Submit">
    </form>
    <!-- sis ir input -->
    <p>Sis ir paragraph</p>
    <!-- sis ir paragraph  -->
    <input type="radio" id="html" name="fav_language" value="HTML">
    <label for="html">HTML</label><br>
    <input type="radio" id="css" name="fav_language" value="CSS">
    <label for="css">CSS</label><br>
    <input type="radio" id="javascript" name="fav_language" value="JavaScript">
    <label for="javascript">JavaScript</label> 
    <!-- sis ir radio button -->
    <label for="cars">Choose a car:</label>

    <select name="cars" id="cars">
      <option value="volvo">Volvo</option>
      <option value="saab">Saab</option>
      <option value="mercedes">Mercedes</option>
      <option value="audi">Audi</option>
    </select> 
    <!-- sis ir select aka dropdown menu -->
    <input type="submit" value="Send Request" />
    <!-- sis ir submit -->

    <?php
    $names = [
        1 => ['name' => 'Janis', 'email' => 'janisgmail@gmail.com'],
        2 => ['name' => 'Janisd', 'email' => 'janifsgmail@gmail.com'],
        3 => ['name' => 'Janiss', 'email' => 'janishgmail@gmail.com'],
    ];
    // asocitivs massive

    echo "<ul>";
    foreach($names as $name){
        // echo"<li>($name['email']}</li>";
        echo "<li>Name: " . $name['name'] . ", Email: " . $name['email'] . "</li>";
    }
    echo "</ul>";
    ?>


</body>
</html>
