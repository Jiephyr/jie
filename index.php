<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=1">
    <title>Scribblr</title>
</head>
<body>
    <h1 class="title">Scribblr.</h1>
    
    <div class="page">
        <!-- login -->
        <h1 class="page_title">Login</h1>

        <form action="includes/enteracc.php" method="post">

            <label for="name" class="name">Name</label><br>
            <input type="text" name="name" id="name" placeholder="Name"><br>
            <label for="password" class="pwd">Password</label><br>
            <input type="pwd" name="pwd" id="pwd" placeholder="Password"><br>
            <div class="btn">
                <button type="submit">Enter</button>
            </div>
        </form>

            <div class="btn">
                <a href="signup.php"><button type="submit">Create an Account</button></a>
            </div>
        
    </div>
</body>
</html>
