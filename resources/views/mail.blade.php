<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2{
            color:yellow;
            background-color:black;
        }
    </style>
</head>
<body>
    <h2>Hello Mail</h2>
    @foreach($users as $user)
    {{ $user }}
    @endforeach
</body>
</html>