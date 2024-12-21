<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=1">
    <title>Sign Up</title>
</head>
<body>
    <h1 class="title">Scribblr.</h1>
    
    <div class="page">
        <!-- login -->
        <h1 class="page_title">Create your Account</h1>

        <form action="includes/insert.php" method="post">

            <label for="name" class="name">Name</label><br>
            <input type="text" name="name" id="name" placeholder="Name"><br>
            <label for="pwd" class="pwd">Password</label><br>
            <input type="password" name="pwd" id="pwd" placeholder="Password"><br>
            <label for="bday" class="bday">Date of Birth</label><br>
            <input type="date" name="bday" id="bday"><br>

            <div class="btn">
                <button type="submit">Sign Up</button>
            </div>
        </form>

            <div class="btn">
                <a href="index.php"><button type="submit">Back</button></a>
            </div>
        
    </div>
</body>
</html>
