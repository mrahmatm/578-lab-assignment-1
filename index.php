<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- include separate js file -->
    <script src="script.js"></script>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
        crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" 
        crossorigin="anonymous"></script>

    <title>Document</title>
    
</head>
<body>
    <center>
    <p style="margin-top: 30px;">Start seaching below!</p>
    <form action="">
        <label for="userInput">Search for States In Malaysia:</label>
        <input type="text" id="userInput" name="userInput" onkeyup="populateHint(this.value)" class="form-control"
        style="text-align: center; margin-top: 20px; width: 40%;">
    </form>
    <br>
    <p>Results: <br><span id="txtResults"></span></p>
</center>
</body>
</html>