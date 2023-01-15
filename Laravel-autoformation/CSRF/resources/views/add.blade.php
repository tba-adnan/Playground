<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSRF</title>
</head>
<body>
<form action="Add" method="POST">
<!-- @csrf -->
    Promotions :
    <br> 
    <input name="Name" type="text">
    <button>Ajouté</button>
</form>
</body>
</html>