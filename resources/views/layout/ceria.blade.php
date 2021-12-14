<!doctype html>
<html lang="en">
  <head>
  	<title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Datetime -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
    @yield('css')
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>

    <style>
    body {
        font-family: 'Poppins', sans-serif;
        background: #fafafa;
        overflow-x: hidden;
    }
    </style>

    </head>
    <body>

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
                <img class="img logo rounded-circle mb-5" src="{{ asset('images/jihaan.jpg') }}" alt="">

	        <ul class="list-unstyled components mb-5">
                <li class="text-center">
                    <h5>Jihaan Harvi Habibah</h5>
                    <p>5026201104</p>
                </li>
	          <li>
	              <a href="/pegawai">Pegawai</a>
	          </li>
	          <li>
                  <a href="/absen">Absen</a>
	          </li>
	          <li>
                  <a href="/mutasi">Mutasi</a>
	          </li>
              <li>
                <a href="/masker">Masker</a>
              </li>
	        </ul>
	      </div>
    	</nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div>
          </div>
        </nav>

        <div class="container">
        <h2>@yield('judulhalaman')</h2>
        @yield('konten')
         <!-- ======= Footer ======= -->
         <footer id="footer" class="footer my-5">
            <div class="copyright">
                <h6>
                    &copy; Hak Cipta oleh 5026201104 - <strong>Jihaan Harvi Habibah</strong>
                </h6>
            </div>
        </footer>
        <!-- End Footer -->
        </div>

        </div>
		</div>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
