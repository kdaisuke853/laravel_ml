<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ml_top extends Controller
{
    public function index() {

        return <<<EOF
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
    text-align:right;
    color: #333;
    margin: -20px 0px 30px 0px;
    letter-spacing:-4pt;
}
</style>
</head>
<body>
    <h1>Index</h1>
    <p>これはコントローラーです</p>
</body>
</html>  
EOF;

    }
}
