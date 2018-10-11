<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cryptomarkets</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <h2> Post a Comment </h2>
    <br/>
    <form method="POST" action="comments.php">
        Name*:<br/>
        <input type="text" name="name">
        <br/>
        <br/>
        Email*:<br/>
        <input type="e-mail" name="email">
        <br/>
        <br/>
        Website*:<br/>
        <input type="website" name="website">
        <br/>
        <br/>
        Comments*:<br/>
        <textarea name="comments"></textarea>
        <br/>
        <input type="submit">
    </form>

</body>
</html>