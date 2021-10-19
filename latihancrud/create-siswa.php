<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Siswa</title>
    <style>
        body{
            font-family: calibri;
        }
        
        .create{
            width: 90px;
            height: 30px;
            border-radius: 20px;
            font-family: calibri;
            font-size: 14px;
            font-weight: bold;
            outline: none;
            align-items: center;
            background: #4a4e69;
            border-color: transparent;
            color: #ffff;
            box-shadow: 3px 3px 10px #6c757d;
            font-family: calibri;
        }
    </style>

</head>
<body>
    <form action="create-siswa.post.php" method="post">
        <div>
            <span>Name :</span>
            <input type="text" name="name">
        </div>
        <div>
            <span>Address :</span>
            <input type="text" name="address">
        </div>
        <div>
            <span>School :</span>
            <input type="text" name="school">
        </div>
        <div>
            <span>Major :</span>
            <input type="text" name="major">
        </div>
        <div>
            <span>Age :</span>
            <input type="text" name="age">
        </div>
        <br>
        <button type="submit" class="create" onclick="alert('Are you sure to create the data?')">Create</button>
    </form>

</body>
</html>