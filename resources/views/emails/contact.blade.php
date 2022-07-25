<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Send</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            padding: 0;
            font-family: 'Quicksand', sans-serif;
            background: rgba(4, 4, 75, 0.651);
        }
        .container {
            background: rgb(205, 205, 207);
            min-width: 300px;
            max-width: 400px;
            padding: 20px;
            font-weight: 600;
            margin: auto;
        }
    </style>

    <div class="container">
        <h3 class="">CONTACT EMAIL SENT</h3>
        <p>{{$content}}</p>
        <p>I received the email</p>
    </div>
    
</body>
</html>