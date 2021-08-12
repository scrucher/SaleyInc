<?php
//includes
include_once("Dashboard/src/user.class.php");

$offr = new Offers();
$cntct = new Contact();
$nws = new Newsletter();


//send data to Pack class
if (isset($_POST['demand']))
{
	$offr->pack();
}
//send  data to contact class
if (isset($_POST['send']))
{
	$cntct->ContactUs();
}
//send data to newsletter class
if (isset($_POST['submit']))
{
	$nws->newsLetter();
}



?>


<!DOCTYPE html>
<html lang="fr-MA">

	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">


		<title>Saley Inc | Agence web pour les Solutions Digitales</title>
		<meta content="Créer un Site web, un logo, une image de marque ou une stratégie marketing pour votre entreprise à Tanger. Chez l'agence web saley nous créons de la valeur" name="description">
		<meta property="og:description" content="Créer un Site web, un logo, une image de marque ou une stratégie marketing pour votre entreprise à Tanger. Chez l'agence web saley nous créons de la valeur">
		<meta property="og:locale" content="fr_FR" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Agence web Saley" />
		<meta property="og:url" content="https://saley.ma/" />
		<meta property="og:site_name" content="Saley Inc | Solutions Digitales" />
		<meta content="Seo, page, web, site, tanger , maroc, agence, saley, référencement, marketing, digitales, logo , design ,publicité" name="keywords">
		<meta property="og:image" content="https://saley.ma/assets/img/hero-img1.png" />
		<meta property="fb:app_id" content="920531168801101" />
		<meta property="fb:pages" content="430316196997861">

		<meta content="Créer un Site web, un logo, une image de marque ou une stratégie marketing pour votre entreprise à Tanger. Chez l'agence web saley nous créons de la valeur" name='twitter:card'/>
		<meta content='@saley_inc' name='twitter:site'/>
		<meta content='@saley_inc' name='twitter:creator'/>
		<meta content='www.saley.ma' name='twitter:domain'/>



		<link href="assets/img/favicon.png" rel="icon">
		<link href="assets/img/favicon.png" rel="apple-touch-icon">


		<link rel="preload" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" as="style">
		<link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:300,300i,400,400i,500,500i,600,600i,700,700i" as="style">
		<link rel="preload" href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" as="style">



		<link rel="preload" href="assets/vendor/aos/aos.css" rel="stylesheet">
		<link  href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link  href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
		<link  href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
		<link  href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
		<link  href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
		<link  href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">



		<link href="https://saley.ma" rel="canonical">

		<link href="assets/css/style.css" rel="stylesheet">

		<script async src="https://www.googletagmanager.com/gtag/js?id=G-FM31DDEXLE"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-FM31DDEXLE');
		</script>

	</head>

	<body>

		<?php
			require_once("header.php");
		?>

		<?php
			require_once("hero.php");
		?>

		<main id="main">

			<?php require_once("clients.php");?>

			<?php require_once("about.php");?>

			<?php require_once("why.php"); ?>

			<?php
				require_once("services.php");
			?>

			<section id="cta" class="cta">
				<div class="container" data-aos="zoom-in">

					<div class="row">
						<div class="col-lg-9 text-center text-lg-start">
							<h3>Vous souhaitez obtenir plus d'informations ou demander un devis ?
							</h3>
							<p>
								Si vous avez des questions sur nos services ou notre assistance, n'hésitez pas à nous contacter!
							</p>
						</div>
						<div class="col-lg-3 cta-btn-container text-center">
							<a class="cta-btn align-middle" href="#contact">Contactez-nous</a>
						</div>
					</div>

				</div>
			</section>
		   	<?php require_once("pricing.php");?>
			<?php require_once("contact.php");?>


		</main>
		<?php
			require_once("footer.php");
		?>
		<div id="preloader"></div>
		<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

		<script async src="assets/vendor/aos/aos.js"></script>
		<script async src="assets/vendor/glightbox/js/glightbox.min.js"></script>
		<script async src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
te		<script async src="assets/vendor/php-email-form/validate.js"></script>
		<script async src="assets/vendor/swiper/swiper-bundle.min.js"></script>
		<script async src="assets/vendor/waypoints/noframework.waypoints.js"></script>
		<script
			  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
			  crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

		<script async src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/main.js"></script>
		<meta name="googlebot" content="all">

	</body>

</html>
