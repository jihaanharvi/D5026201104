<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

     <title>Decision and Looping</title>
    <style>
        body{
            background: #000;
        }
        .container{
            padding: 3% 5%;
        }
        @media (min-width: 900px) {
            .container{
                 padding: 5% 15%;
            }
        }
        .error{
            color: red;
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
                <form id="form" action="hasil" method="post">
                    @csrf
                    <h6>Problem 1</h6>
                    <div class="row mb-3">
                        <label for="First" class="col-md-4 col-sm-5">Input the 1<sup>st</sup> number</label>
                        <div class="col-sm-1">:</div>
                        <div class="col-md-7 col-sm-6">
                            <input type="number" class="form-control" id="first" name="first">

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Second" class="col-md-4 col-sm-5">Input the 2<sup>nd</sup> number</label>
                        <div class="col-sm-1">:</div>
                        <div class="col-md-7 col-sm-6">
                            <input type="number" class="form-control" id="second" name="second">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Third" class="col-md-4 col-sm-5">Input the 3<sup>rd</sup> number</label>
                        <div class="col-sm-1">:</div>
                        <div class="col-md-7 col-sm-6">
                            <input type="number" class="form-control" id="third" name="third">
                        </div>
                    </div>
                    <h6>Problem 2</h6>
                    <div class="row">
                        <label for="Factorial" class="col-md-4 col-sm-5">Input number of terms</label>
                        <div class="col-sm-1">:</div>
                        <div class="col-md-7 col-sm-6">
                            <input type="number" class="form-control" id="factorial" name="factorial">
                        </div>
                    </div>
                    <h6>Problem 3</h6>
                    <div class="row">
                        <label for="Loop" class="col-md-4 col-sm-5">Enter number</label>
                        <div class="col-sm-1">:</div>
                        <div class="col-md-7 col-sm-6">
                            <input type="number" class="form-control" id="loop" name="loop">
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary my-4 form-control" id="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
     <!-- JQuery -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#form").validate({
                    errorClass: 'errors',
                    rules: {
                        first: {
                            required: true
                        },
                        second: {
                            required: true
                        },
                        third: {
                            required: true
                        },
                        factorial: {
                            required: true
                        },
                        loop: {
                            required: true
                         }
                    },
                    highlight: function (element) {
                        $(element).parent().addClass('error')
                    },
                    unhighlight: function (element) {
                        $(element).parent().removeClass('error')
                    }
                });
            });
        </script>

</body>
</html>
