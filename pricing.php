


<form method="POST" name="pricing" action="#pricing">
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content" id="modale">
                <div class="modal-header">
					<h3 class="modal-title" id="exampleModalLabel">Demandez un devis</h3>
                    <button type="button" class="btn-close btn-close-black" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
                <div class="modal-body" >

					<div class="input-group mb-3">
						<label class="input-group-text" for="SelectYourPack">Pack</label>
						<select id="SelectYourPack" class="form-select" aria-label="offres saley" name="packs" required="" oninvalid="this.setCustomValidity('Veuillez séléctionnez votre Pack')" oninput="setCustomValidity('')">
							<option value="">--Sélectionnez votre Pack--</option>
							<option value="Pack-1">Existence en ligne</option>
							<option value="Pack-2">Premium en ligne</option>
							<option value="Pack-3">Création graphique </option>
							<option value="Pack-4">Ingénieurie informatiques </option>
						</select>
					</div>
					<div class="input-group flex-nowrap mb-3">
						<span class="input-group-text" id="addon-wrapping2"><i class="fas fa-bookmark"></i>sss</span>
						<input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" aria-label="nom" placeholder="Ex:Adam" required oninvalid="this.setCustomValidity('Veuillez saisir votre nom')" oninput="setCustomValidity('')">
					</div>
					<div class="input-group flex-nowrap mb-3">
						<span class="input-group-text" id="addon-wrapping">@</span>
						<input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" aria-label="Adress email" placeholder="Ex:adress@saley.ma" required oninvalid="this.setCustomValidity('Veuillez saisir votre email')" oninput="setCustomValidity('')">
					</div>

					<div class="input-group flex-nowrap mb-3">
						<span class="input-group-text" id="addon-wrapping2"><i class="bi bi-phone"></i></span>
						<input type="tel" name="phone" class="form-control" id="exampleInputPassword1" placeholder="0600000000" aria-label="numéro de Téléphone" required oninvalid="this.setCustomValidity('Veuillez saisir votre Téléphone')" oninput="setCustomValidity('')" pattern="[0-9]{10}"
						title="Votre numéro de Téléphone doit être composer de 10 nombres">
					</div>
					<div class="container">
 						 <div class="row">
 						 	<div class="d-grid gap-2">
								<button type="submit" class="btn btn-primary btn-lg" name="demand"  id="demand">Demandez</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>







<section id="pricing" class="pricing">
	<div class="container" data-aos="fade-up">
		<div class="section-title" >
	<h2>Offres & Packs </h2>
	<p>Vous trouverez ici une vaste gamme inédite de packs par des offres spéciales selon vos choix. </p>
</div>
<div style="color:red;">
		<strong>
			<?php
			include_once("Dashboard/src/user.class.php");
			$offr = new Offers();
			$offr->display_error();

			?>
		</strong>

</div>
<div style="color: green;">
		<strong>
			<?php

			$offr->displaySucess();

			?>
		</strong>

</div>

		        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-4">


			<div class="col">
			    <div class="card-transparent mb-3 text-center bg-transparent h-100" id="cate">
		      		<div class="card-body d-flex flex-column" >
				       	<h3 class="card-title">Pack existence en ligne </h3>
				       	<div class="card-text">
							<ul>
								<li><i class="bx bx-check"></i> Configuration de page Facebook</li>
								<li><i class="bx bx-check"></i> Configuration de page Instagram</li>
								<li><i class="bx bx-check"></i> Configuration Whatsapp business</li>
								<li><i class="bx bx-check"></i> Communauté management </li>
								<li><i class="bx bx-check"></i> Prise de photos </li>
								<li><i class="bx bx-check"></i> Publicité en ligne </li>
							</ul>
						</div>
						<div class="card-footer bg-transparent">
				 			<button type="button" id="buy-btn" class="btn btn-primary mt-auto" data-toggle="modal" data-target="#exampleModal" >Demandez un devis</button>
				 		</div>
		      		</div>
		  		</div>
			</div>

			<div class="col">
			    <div class="card-transparent  mb-3 text-center bg-transparent h-100 " id="cate1">
		      		<div class="card-body d-flex flex-column">
				       	<h3 class="card-title">Pack premium en Ligne</h3>
				       	<div class="card-text">
							<ul>
								<li><i class="bx bx-check"></i> <strong>Pack existence en ligne</strong> </li>
								<li><i class="bx bx-check"></i> Création d'un site vitrine</li>
								<li><i class="bx bx-check"></i> Conception de logo</li>
								<li><i class="bx bx-check"></i> Charte graphique + Papier en-tete</li>
								<li><i class="bx bx-check"></i> configuration e-mail pro </li>
								<li><i class="bx bx-check"></i> Signature e-mail pro </li>
							</ul>
						</div>
						<div class="card-footer bg-transparent">
				 			<button type="button" id="buy-btn1" class="btn btn-primary mt-auto" data-toggle="modal" data-target="#exampleModal" >Demandez un devis</button>
				 		</div>
		      		</div>

			  	</div>
			</div>

			<div class="col">
			    <div class="card-transparent  mb-3 text-center bg-transparent h-100" id="cate2">
		      		<div class="card-body d-flex flex-column">
				       	<h3 class="card-title">Pack création graphique</h3>
				       	<div class="card-text">
							<ul>
								<li><i class="bx bx-check"></i> Conception des logos</li>
								<li><i class="bx bx-check"></i> Conception de Carte visite</li>
								<li><i class="bx bx-check"></i> Création de flayer et brochure</li>
								<li><i class="bx bx-check"></i> Conception de Rollup et FAV icon</li>
								<li><i class="bx bx-check"></i> Conception de papier en-tête </li>
								<li><i class="bx bx-check"></i>  Bannière publicitaire </li>
							</ul>
						</div>
						<div class="card-footer bg-transparent">
				 			<button type="button" id="buy-btn2" class="align-self-end btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" >Demandez un devis</button>
				 		</div>
		      		</div>
			  	</div>
			</div>

			<div class="col">
			    <div class="card-transparent mb-3 text-center bg-transparent h-100" id="cate3">
		      		<div class="card-body d-flex flex-column">
				       	<h3 class="card-title">Pack ingénierie informatiques </h3>
				       	<div class="card-text">
							<ul>
								<li><i class="bx bx-check"></i> Détection des problèmes </li>
								<li><i class="bx bx-check"></i> Conception de solution</li>
								<li><i class="bx bx-check"></i> Mise en place de la solution</li>
								<li><i class="bx bx-check"></i> System de sécurité</li>
								<li><i class="bx bx-check"></i> Support technique avancé 24/7</li>
								<li aria-hidden="true"></li>
							</ul>
						</div>
						<div class="card-footer bg-transparent">
				 			<button type="button" id="buy-btn3" class="align-self-end btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" >Demandez un devis</button>
				 		</div>
		      		</div>
			  	</div>
			</div>




		</div>
	</div>
</section>
