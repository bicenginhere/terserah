<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.ansonika.com/panagea/cart-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2023 18:09:32 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>Panagea | Premium site template for travel agencies, hotels and restaurant listing.</title>

	<!-- Script Summernote -->
	<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>  

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
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

    <!-- ALTERNATIVE COLORS CSS -->
    <link href="#" id="colors" rel="stylesheet">
<style> 
    #pdfviewer {
border: 1px rgb(250, 242, 242) solid;
width: 80%;
background: rgb(255, 212, 212);

}
a {
text-decoration: none;
display: inline-block;
padding: 8px 16px;
}

a:hover {
background-color: #ddd;
color: black;
}

.previous {
background-color: #acccc9;
color: black;
}

.next {

background-color: #839790;
color: white;
}

.round {
border-radius: 50%;
}
</style>
</head>

<body>
	
	<div id="page" class="theia-exception">
		
	<header class="header menu_fixed">
		<div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->

		<!-- Control Logo -->

		<div id="logo">
			<a href="index.html">
				<img src="img/logo.svg" width="150" height="36" alt="" class="logo_normal">
				<img src="img/logo_sticky.svg" width="150" height="36" alt="" class="logo_sticky">w2[\]
			</a>
		</div>

		<!-- Control NAV -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a> 
		<nav id="menu" class="main-menu">
			<ul>
				<li><span><a href="index.html">Home</a></span>
					
				<li><span><a href="#0">Kategori</a></span>
					<ul>
						
						<li>
							<li><a href="horor.html">Horor</a></li>
							<li><a href="action.html">Action</a></li>
							<li><a href="kriminal.html">Kriminal</a></li>
							<li><a href="komedi.html">Komedi</a></li>
							<li><a href="historical.html">Historical</a></li>
							<li><a href="fantasi.html">Fantasi</a></li>
							<li><a href="romance.html">Romance</a></li>
							<li><a href="petualangan.html">Petualangan</a></li>
						<li>
							
						</li>
					</ul>
				</li>
				<li><span><a href="tambah.html">Tambah</a></span>
				
				
				<li><span><a href="profil.html">Profil

				</a></span></li>
			</ul>
		</nav>

	</header>
	
    <div class="container mx-auto flex flex-col h-screen mt-4">
		<div style="display:flex ; justify-content:end; margin-top: 0%;">
        <div class="flex justify-content- my-4" style=" position: fixed;">
            <h1 class="font-bold"></h1>
            <nav style="margin-top: 100px;" class="nav justify-content-">
                <a class="previous round" id="prev" href="#">&#8249;</a>
                <a class="next round" id="next" href="#">&#8250;</a>
               </nav>
        </div>
	</div>
        <div class="flex-grow" >
			<canvas id="pdfviewer" style=" margin-top:130px;">
                <p>Loading... </p>
            </canvas>
		</div>
        <div class="pages text-center my-4"><span class="mr-2">Page</span><span id="currentPage">0</span><span class="mx-1">/</span><span id="totalPages">0</span></div>
    </div>

	<footer>
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-5 col-md-12 pe-5">
					<p><img src="img/logo.svg" width="150" height="36" alt=""></p>
					<p>Ini adalah sebuah web yang digunakan untuk membaca dan menuliskan cerita. Web 
						ini bisa diakses oleh semua orang. Tanpa login setiap orang yang masuk dalam web ini 
						bisa membaca setiap postingan cerita yang ada didalamnya. Namun untuk memberi 
						komentar, membuat / menambah cerita harus melakukan login.</p>
					<div class="follow_us">
						<ul>
							<li>Follow us</li>
							<li><a href="#0"><i class="ti-facebook"></i></a></li>
							<li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
							<li><a href="#0"><i class="ti-google"></i></a></li>
							<li><a href="#0"><i class="ti-pinterest"></i></a></li>
							<li><a href="#0"><i class="ti-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 ms-lg-auto">
					<h5>Kunjungi Tautan</h5>
					<ul class="links">
						<li><a href="home.html">Home</a></li>
						<li><a href="kategori.html">Kategori</a></li>
						<li><a href="login.html">Login</a></li>
						<li><a href="registrasi.html">Register</a></li>
						<li><a href="profil.html">Profil</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h5>Hubungi Kami</h5>
					<ul class="contacts">
						<li><a href="tel://61280932400"><i class="ti-mobile"></i> + 61 23 8093 3400</a></li>
						<li><a href="mailto:info@Panagea.com"><i class="ti-email"></i> novelid@gmail.com</a></li>
					</ul>
					<div id="newsletter" style="margin-top: 100px; margin-left:150px;">
					<h6>Novel.Id</h6>
				
					</div>
				</div>
			</div>
			<!--/row-->
			
				<div class="col-lg-6">
					<ul id="additional_links">
						<li><a href="#0">Baca Tulis Novel</a></li>
						<li><a href="#0">Profil</a></li>
						<li><span>© Novel.Id</span></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-start">
						<label class="container_check">Remember me
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-end mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
				<div class="text-center">
					Don’t have an account? <a href="register.html">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Popup -->
	
	<div id="toTop"></div><!-- Back to top button -->
	

      
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <script>
		// toastr.options.progressBar = true;

const url = "https://raw.githubusercontent.com/mozilla/pdf.js/ba2edeae/web/compressed.tracemonkey-pldi-09.pdf";

const pdfjsLib = window["pdfjs-dist/build/pdf"];
pdfjsLib.GlobalWorkerOptions.workerSrc =
    "https://mozilla.github.io/pdf.js/build/pdf.worker.js";

let loggedIn = false,
    pdfDoc = null,
    pageNum = 1,
    pageRendering = false,
    pageNumPending = null,
    scale = 1,
    canvas = document.getElementById("pdfviewer"),
    ctx = canvas.getContext("2d");

/**
 * Get page info from document, resize canvas accordingly, and render page.
 * @param num Page number.
 */
function renderPage(num) {
    pageRendering = true;
    // Using promise to fetch the page
    pdfDoc.getPage(num).then(function(page) {
        const viewport = page.getViewport({scale});
        canvas.height = viewport.height;
        canvas.width = viewport.width;

        // Render PDF page into canvas context
        var renderContext = {
            canvasContext: ctx,
            viewport: viewport
        };
        var renderTask = page.render(renderContext);

        // Wait for rendering to finish
        renderTask.promise.then(function() {
            pageRendering = false;
            if (pageNumPending !== null) {
                // New page rendering is pending
                renderPage(pageNumPending);
                pageNumPending = null;
            }
        });
    });

    // Update page counters
    document.getElementById("currentPage").textContent = num;
}

/**
 * If another page rendering in progress, waits until the rendering is
 * finised. Otherwise, executes rendering immediately.
 */
function queueRenderPage(num) {
    if (pageRendering) {
        pageNumPending = num;
    } else {
        renderPage(num);
    }
}

/**
 * Asynchronously downloads PDF.
 */
pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
    pdfDoc = pdfDoc_;
    document.getElementById("totalPages").textContent = pdfDoc.numPages;

    // Initial/first page rendering
    renderPage(pageNum || 1);
});

function onPrevPage() {
    if (pageNum <= 1) {
        return;
    }
    pageNum--;
    queueRenderPage(pageNum);
}
document.getElementById("prev").addEventListener("click", onPrevPage);

function onNextPage() {
    if (
        (pageNum < 5) ||
        loggedIn
    ) {
        if (pageNum >= pdfDoc.numPages) {
            return;
        }
        pageNum++;
        queueRenderPage(pageNum);
    } else {
        toastr.error("You Must be Logged in to view more pages", "Sorry");
    }
}
document.getElementById("next").addEventListener("click", onNextPage);


document.getElementById("download").addEventListener("click", (e) => {
    if (loggedIn) {
        toastr.success('You can download the Document', 'Ok!');
    } else {
        toastr.error("You Must be Logged in to Download this Document", "Sorry");
    }
});


const loggedInClass = "bg-green-500";
const loggedOutClass = "bg-red-500";
$(".nav").prepend($("<a>", {href: "#"})
    .text("Logged In")
    .addClass("border py-2 px-4 rounded " + ((loggedIn)?loggedInClass:loggedOutClass))
    .on("click", function(e) {
        e.preventDefault();
        if (loggedIn) {
            $(this).removeClass(loggedInClass).addClass(loggedOutClass);
            loggedIn = false;
        } else {
            $(this).removeClass(loggedOutClass).addClass(loggedInClass);
            loggedIn = true;
        }
    }));
	</script>
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="phpmailer/validate.js"></script>
	
	<!-- Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6Vck_vRXDPR8ILH8ZLOeGSEz_n4YR0mU&amp;callback=Function.prototype"></script>
	<script src="js/markerclusterer.js"></script>
	<script src="js/map_hotels.js"></script>
	<script src="js/infobox.js"></script>
	
	<!-- Masonry Filtering -->
	<script src="js/isotope.min.js"></script>
	<script>
	$(window).on('load', function(){
	  var $container = $('.isotope-wrapper');
	  $container.isotope({ itemSelector: '.isotope-item', layoutMode: 'masonry' });
	});

	$('.filters_listing').on( 'click', 'input', 'change', function(){
	  var selector = $(this).attr('data-filter');
	  $('.isotope-wrapper').isotope({ filter: selector });
	});
	</script>
  
  
</body>

<!-- Mirrored from www.ansonika.com/panagea/hotels-grid-isotope.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2023 17:54:36 GMT -->
</html>