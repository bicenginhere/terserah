<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.ansonika.com/panagea/login.html by HTTrack Website Copier/3.x ['XR&CO'2014], Tue, 28 Feb 2023 18:04:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>Panagea | Premium site template for travel agencies, hotels and restaurant listing.</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="../../fonts.gstatic.com/index.html">
    <link href="../../fonts.googleapis.com/css2a685.css?family=Poppins:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

    <!-- ALTERNATIVE COLORS CSS -->
    <link href="#" id="colors" rel="stylesheet">

</head>

<body id="login_bg">

	<nav id="menu" class="fake_menu"></nav>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->

	<div id="login">
		<aside>
			<figure>
				<a href="#"><img src="img/logo_sticky.svg" width="155" height="36" alt="" class="logo_sticky"></a>
			</figure>

            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif


            <form action="/login" method="post">
                @csrf
				<div class="form-group">
					<label  for="email">Email</label>
					<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" autofocus required value="{{ old('email') }}">
                    @error('email')
                    </div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
				</div>


				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" id="password"  required>
                    @error('password')
                    </div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
				</div>

				<div class="clearfix add_bottom_30">
					<div class="checkboxes float-start">
						<label class="container_check">Ingat saya
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
				</div>
				<button class="btn_1 rounded full-width add_top_30" type="submit"> Login </button>
				<div class="text-center add_top_10"> Belum punya akun? <strong><a href="/register">Register sekarang</a></strong></div>

			</form>
			<div class="copy">© Novel.id</div>
		</aside>
	</div>
	<!-- /login -->

	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="phpmailer/validate.js"></script>



</body>

<!-- Mirrored from www.ansonika.com/panagea/login.html by HTTrack Website Copier/3.x ['XR&CO'2014], Tue, 28 Feb 2023 18:04:16 GMT -->
</html>
