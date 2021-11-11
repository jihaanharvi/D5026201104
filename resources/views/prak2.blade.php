<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            display: flex;
        }

        .container {
            padding: 1% 25%;
            margin: 50px auto;
            border-radius: 15px;
        }

        .card-header {
            background-color: rgb(251, 240, 141);
            border-bottom: rgb(251, 240, 141);
            text-align: center;
            padding: 20px;
            margin-bottom: 10px;
        }

        .btn {
            text-align: center;
            color: white;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>JavaScript Form Validation</h2>
            </div>
            <div class="card-body">
                <p style="color:red">*All fields are mandatory</p>
                <form id="validation" action="https://www.bukalapak.com/">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" placeholder="ex: Sofia Latjuba" id="fullname" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label>Username:</label>
                            <input type="text" class="form-control" placeholder="ex: sofia05" id="username" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" placeholder="ex: sofia05@gmailcom" id="email" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label>State:</label>
                            <select name="state" class="custom-select mb-3" required>
                                <option value="0" disabled selected>Please Choose</option>
                                <option value="indonesia">Indonesia</option>
                                <option value="malaysia">Malaysia</option>
                                <option value="singapore">Singapore</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <label>Address:</label>
                            <input type="text" class="form-control" id="address" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label>Zip Code:</label>
                            <input type="text" class="form-control" placeholder="ex: 201128" id="code" required>
                        </div>
                        <div class="col-12 mb-3">
                            <button type="submit" id="submit" class="form-control btn btn-warning">Submit</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $("#submit").click(function () {
                var fullname = $("#fullname").val();
                var letters = /^[0-9a-zA-Z]+$/;
                if (!fullname.match(letters)) {
                    alert("Full name must be alphabets only")
                    return (false);
                }
                if ($("#username").val().length < 6 || $("#username").val().length > 8) {
                    alert("Username must be 6 to 8 characters")
                    return (false);
                }
                var email = $("#email").val();
                var mails = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
                if (!email.match(mails)) {
                    alert("Email is invalid!")
                    return (false);
                }
                var zipcode = $("#code").val()
                var numbers = /^[0-9]+$/;
                if (!zipcode.match(numbers) || zipcode.length < 6 || zipcode.length > 6) {
                    alert("Zip code must be numbers and consists of 6 digits")
                    return (false);
                }
            })
        });
    </script>
</body>

</html>
