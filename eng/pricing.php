

<?php
	
	global $errors, $db_con;
	
	$errors= array();
	
	$db_con= mysqli_connect('localhost', 'saleyma_usr', ';LKmW7S5HRX0', 'saleyma_db');
	
	
	
	if($mysqli->connect_errno>0)
    {
        die("Connection to MySQL-server failed!"); 
	}
	isset($_POST['demand']);
	if (isset($_POST['demand'])) {
		
		$packs= $_POST['packs'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		
		
		$querry= "INSERT INTO pack ( pack, email, phone ) VALUES('$packs', '$email','$phone')";
		$sql = mysqli_query($db_con, $querry);
		
		
		if ($sql){
			
			array_push($errors, "We Have received Your Request And We will Contact You Soon ");
			} else {
			array_push($errors, "Something Went Wrong Please Try Again");
		}
	}
	
	
	
	function getPack(){
		global $db_con;
		
	}
	
?>


<form method="POST" name="pricing">
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content" id="modale">
                <div class="modal-header">
					<h3 class="modal-title" id="exampleModalLabel">Request Quotation</h3>
                    <button type="button" class="btn-close btn-close-black" data-dismiss="modal" aria-label="Close">
					</button>
				</div>
                <div class="modal-body" >
					
					<div class="input-group mb-3">
						<label class="input-group-text" for="SelectYourPack">Pack</label>
						<select id="SelectYourPack" class="form-select" aria-label=".form-select-lg example" name="packs" required="" oninvalid="this.setCustomValidity('Please select your pack')" oninput="setCustomValidity('')">
							<option value="">--Select Your Pack--</option>
							<option value="Pack-1">Online Existence</option>
							<option value="Pack-2">Premium Online</option>
							<option value="Pack-3">Gaphics Design</option>
							<option value="Pack-4">Computer Engineering </option>
						</select>
					</div>
					<div class="input-group flex-nowrap mb-3">
						<span class="input-group-text" id="addon-wrappin1">@</span>
						<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" aria-label="E-mail address" placeholder="example@saley.ma" required oninvalid="this.setCustomValidity('Please enter your email address')" oninput="setCustomValidity('')">
					</div>
					
					<div class="input-group flex-nowrap mb-3">
						<span class="input-group-text" id="addon-wrapping2"><i class="bi bi-phone"></i></span>
						<input type="tel" name="phone" class="form-control" id="exampleInputPassword1" placeholder="0600000000" aria-label="Phone number" required oninvalid="this.setCustomValidity('Please enter your phone number')" oninput="setCustomValidity('')" pattern="[0-9]{10}"
						title="Your phone number should be composed of 10 numbers">
					</div>
					<div class="container">
 						 <div class="row">
 							<div class="d-grid gap-2">
								<button type="submit" class="btn btn-primary btn-lg" name="demand"  id="demand">Request</button>
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
			<h2>Offers & Packs </h2>
			<p> You will find here a vast spectrum of services and offers based on your business needs. </p>
		</div>
		
        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-4">
			
			<div class="col">
			    <div class="card-transparent mb-3 text-center bg-transparent h-100" id="cate">
		      		<div class="card-body d-flex flex-column" >
				       	<h3 class="card-title">Pack Online Existence</h3>
				       	<div class="card-text">
							<ul>
								<li><i class="bx bx-check"></i> Configuration of Facebook Page</li>
								<li><i class="bx bx-check"></i> Configuration of Instagram Page</li>
								<li><i class="bx bx-check"></i> Configuration of WhatsApp Business</li>
								<li><i class="bx bx-check"></i> community manager </li>
								<li><i class="bx bx-check"></i> Photography</li>
								<li><i class="bx bx-check"></i> Online Advertising </li>
							</ul>
						</div>
						<div class="card-footer bg-transparent">
				 			<button type="button" id="buy-btn" class="btn btn-primary mt-auto" data-toggle="modal" data-target="#exampleModal" >Request Quote</button>
				 		</div>
		      		</div>
		  		</div>
			</div>

			<div class="col">
			    <div class="card-transparent  mb-3 text-center bg-transparent h-100 " id="cate1">
		      		<div class="card-body d-flex flex-column">
				       	<h3 class="card-title">Pack Premium Online </h3>
				       	<div class="card-text">
							<ul>
								<li><i class="bx bx-check"></i> <strong class="card-title">Pack Online Existence</strong></li>
								<li><i class="bx bx-check"></i> Showcase Website</li>
								<li><i class="bx bx-check"></i> Logo Design</li>
								<li><i class="bx bx-check"></i> Graphic Charter & Page-Headers</li>
								<li><i class="bx bx-check"></i> Setting of professional e-mail  </li>
								<li><i class="bx bx-check"></i> Signature of professional e-mail </li>
							</ul>
						</div>
						<div class="card-footer bg-transparent">
				 			<button type="button" id="buy-btn1" class="btn btn-primary mt-auto" data-toggle="modal" data-target="#exampleModal" >Request Quote</button>
				 		</div>
		      		</div>

			  	</div>
			</div>

			<div class="col">
			    <div class="card-transparent  mb-3 text-center bg-transparent h-100" id="cate2">
		      		<div class="card-body d-flex flex-column">
				       	<h3 class="card-title">Pack Graphic Conception</h3>
				       	<div class="card-text">
							<ul>
								<li><i class="bx bx-check"></i> Logo Design</li>
								<li><i class="bx bx-check"></i> Business Card Design</li>
								<li><i class="bx bx-check"></i> Creation of FLayers & Brochures</li>
								<li><i class="bx bx-check"></i> Rollup favicon</li>
								<li><i class="bx bx-check"></i> Page-Headers </li>
								<li><i class="bx bx-check"></i> Advertising Banners</li>
							</ul>
						</div>
						<div class="card-footer bg-transparent">
				 			<button type="button" id="buy-btn2" class="align-self-end btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" >Request Quote</button>
				 		</div>
		      		</div>
			  	</div>
			</div>

			<div class="col">
			    <div class="card-transparent mb-3 text-center bg-transparent h-100" id="cate3">
		      		<div class="card-body d-flex flex-column">
				       	<h3 class="card-title">Pack Computer Engineering </h3>
				       	<div class="card-text">
							<ul>
								<li><i class="bx bx-check"></i> Detection of Problems </li>
								<li><i class="bx bx-check"></i> Conception of Solutions</li>
								<li><i class="bx bx-check"></i> Implementation of Solutions</li>
								<li><i class="bx bx-check"></i> Security Systems</li>
								<li><i class="bx bx-check"></i> Advanced Techniqual Support 24/7</li>
								<li aria-hidden="true"></li>
							</ul>
						</div>
						<div class="card-footer bg-transparent">
				 			<button type="button" id="buy-btn3" class="align-self-end btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" >Request Quote</button>
				 		</div>
		      		</div>
			  	</div>
			</div>
			
		</div>
		
	</div>
</section>
  
