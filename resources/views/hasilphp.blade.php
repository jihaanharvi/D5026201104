<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Decision and Looping</title>
    <style>
        body{
            background: rgb(14, 255, 54);
        }
        .container{
            padding: 3% 5%;
        }
        @media (min-width: 900px) {
            .container{
                 padding: 5% 15%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h1>DECISION & LOOPING</h1>
            </div>
            <div class="card-body">
                <h6>Problem 1</h6>
                <div class="row">
                    <div class="col-sm-5">You enter numbers</div>
                    <div class="col-sm-1">:</div>
                    <div class="col-sm-6">
                        <?php

                        $num1 = $_POST["first"];
                        $num2 = $_POST["second"];
                        $num3 = $_POST["third"];
                        echo $num1. " , " . $num2 . " , " . $num3;

                        if ($num1 < $num2){
                            $smallest=$num1;
                        }else{
                            $smallest=$num2;
                        }
                        if ($num3 < $smallest){
                            $smallest=$num3;
                        }
                        ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-5">The smallest number</div>
                    <div class="col-sm-1">:</div>
                    <div class="col-sm-6">
                        <?php
                        echo $smallest;
                        ?>
                    </div>
                </div>
                <br>
                <h6>Problem 2</h6>
                <div class="row">
                    <div class="col-sm-5">You enter number</div>
                    <div class="col-sm-1">:</div>
                    <div class="col-sm-6">
                    <?php
                        $f = 1;
                        $n = $_POST["factorial"];
                        echo $n;

                        for($i= $n; $i > 0; $i--){
                            $f *= $i;
                        }
                    ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">Factorial of <?php echo $n;?> is</div>
                    <div class="col-sm-1">:</div>
                    <div class="col-sm-6">
                    <?php
                    echo $f;
                    ?>
                    </div>
                </div>
                <br>
                <h6>Problem 3</h6>
                <div class="row">
                    <div class="col-sm-5">You enter number</div>
                    <div class="col-sm-1">:</div>
                    <div class="col-sm-6">
                    <?php
                        $max = $_POST["loop"];
                        echo $max;
                    ?>
                    </div>
                    <div class="col-sm-5">The output is</div>
                    <div class="col-sm-1">:</div>
                    <div class="col-sm-6">
                    <?php

                        for($i = 0; $i < $max; $i++){
                            for ($j = 0; $j<= $i; $j++){
                              echo "(". $i. " , ". $j. ")";
                            }
                            echo "<br>";
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
