<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Poppins:wght@500;600&family=Volkhov:wght@700&display=swap"
        rel="stylesheet">

    <link rel="icon" href="logo.png">
    <style>
        body {
            background-image: url(background.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            color: rgb(14, 255, 54);
        }

        h1 {
            font-family: 'Inter', sans-serif;
            font-family: 'Poppins', sans-serif;
            font-family: 'Volkhov', serif;
            font-size: 300%;
        }

        .container {
            margin-top: 15%;
            padding: 30px 0px 30px 0px;
            align-content: center;
            width: 50%;
            border: 3px solid green;
        }
    </style>

    <title>Decision and Looping</title>
</head>

<body>
    <div class="container bg-dark justify-content-center text-center">
        <h1>DECISION & LOOPING</h1>
        <h6>Click "start" to see the example</h6><br>
        <button id="start" type="button" class="btn btn-success btn-lg">Start</button>
    </div>


    <script>
         $(document).ready(function(){
           $("#start").click(function(){

            const problem1 = () => {
            let num1 = parseInt(prompt("Input the 1st number: "));
            let num2 = parseInt(prompt("Input the 2nd number: "));
            let num3 = parseInt(prompt("Input the 3rd number: "));

            let smallest;

            if (num1 < num2) {
                smallest = num1;
            } else smallest = inputnum2;
            if (num3 < smallest) {
                smallest = num3;
            }

            let print1 = alert("The smallest: " + smallest);
        }

        problem1();

        const problem2 = () => {
            let i, n;
            let f = 1;

            n = parseInt(prompt("Input number of terms: "));

            for (i = n; i > 0; i--) {
                f *= i;
            }

            let print2 = alert("Factorial of " + n + " is: " + f);
        }

        problem2();

        const problem3 = () => {
            let max = parseInt(prompt("Enter number: "));

            for (let i = 0; i < max; i++) {
                for (let j = 0; j <= i; j++) {
                    let print3 = console.log("(" + i + "," + j + ")");
                }
                console.log();
            }
        }
        problem3();
           });
       });
    </script>
</body>

</html>
