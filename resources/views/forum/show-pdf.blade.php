<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: arial;
        }
    </style>
</head>
<body>
    <h4>
        {{ $forumPost->title }}
    </h4>
    <hr>
    <p>
        {!! $forumPost->body !!}
    </p>
    <p>
        <strong>Author: </strong> {{ $forumPost->forumHasUser->name }}
    </p>
    
</body>
</html>