<html>
<head>
    <title>ML Template</title>
    <style>
        body {
            font-size: 16px;
            color: #333;
            background-color: #fff;
        }
        h1 {
            font-size: 50px;
            text-align:center;
            color: #333;
            margin: -20px 0px 30px 0px;
            letter-spacing:-4pt;
        }
    </style>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $content }}</p>
    <form method="POST" action="localhost:8001">
        @csrf
        <input type="text" name="msg">
        <input type="submit" value="送信">
</body>
</html>