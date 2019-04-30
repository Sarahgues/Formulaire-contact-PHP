<!DOCTYPE html>
<<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<link rel="stylesheet" href="style.css">
			<script rel="stylsheet" src="script.js"></script>
			<script rel="stylsheet" src="jquery-3.4.0.min"></script>
			<link rel="stylesheet" href="css/normalize.css">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid-Serif:400,400i">
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab">


		    <title>Formulaire de contact PHP</title>
	    </head>
<body>
	<section id="contact">
			<div class="row bg-dark" id="form">
				<div class="container  mt-5" >
				    <div class="row" style="height:550px;">
					      <div class="col-md-6 maps" >
					         <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d168252.83284576115!2d2.199578827728976!3d48.78283500650592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x47e66fca34092655%3A0x578cacdaedf22f88!2s91+Boulevard+Haussmann%2C+75008+Paris!3m2!1d48.8746916!2d2.3188899!5e0!3m2!1sfr!2sfr!4v1550575792110" width="550" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					      </div>
					      <div class="col-md-6">
					        <h2 class="text-uppercase mt-3 font-weight-bold text-white">Nous contacter </h2>
						    <form action="" method="post">
						        <div class="row">
						            <div class="col-lg-6">
						              <div class="form-group">
						                <input type="text" name="nom" class="form-control mt-2"  placeholder="Nom / Société" required>
						              </div>
						            </div>
						            <div class="col-lg-6">
						              <div class="form-group">
						                <input type="text" name="objet" class="form-control mt-2"  placeholder="Objet" required>
						              </div>
						            </div>
						            <div class="col-lg-6">
						              <div class="form-group">
						                
						                <input type="email" name="email" class="form-control mt-2"  placeholder="Email" required>
						              </div>
						            </div>
						            <div class="col-lg-6">
						              <div class="form-group">
						                <input type="text" name="telephone" class="form-control mt-2" placeholder="Téléphone" required>
						              </div>
						            </div>
						            <div class="col-12">
						              <div class="form-group">
						                <textarea type="text" name="message" class="form-control"  id="exampleFormControlTextarea1" placeholder="Votre demande" rows="3" required></textarea>
						              </div>
						            </div>
						            <div class="col-12">
						              <button type="submit" name="envoyer" class="btn btn-light" value="envoyer votre demande">Envoyer votre demande</button>
						            </div>
						    	</div>
						        <div class="text-white">
							        <h2 class="text-uppercase mt-4 font-weight-bold">Golden WEB</h2>
								        <i class="fas fa-phone mt-3"></i> <a href="tel:+">(+33) 01 60 48 75 00</a><br>
								        <i class="fas fa-phone mt-3"></i> <a href="tel:+">(+39) 06 90 43 15 00</a><br>
								        <i class="fa fa-envelope mt-3"></i> <a href="">info@golden.fr</a><br>
								        <i class="fas fa-globe mt-3"></i> 91 Boulevard Haussmann, 75008 Paris<br>
								        <div class="my-4">
								        <a href=""><i class="fab fa-facebook fa-3x pr-4"></i></a>
								        <a href=""><i class="fab fa-linkedin fa-3x"></i></a>
						        </div>
					        </form>
					    <?php
				        try{
					        $bdd = new PDO('mysql:host=127.0.0.1;port=3306;dbname=formulaire', 'root', '');
					        }
					    catch (Exception $e)
							{
							        die('Erreur : ' . $e->getMessage());
							}
							if (isset($_POST['envoyer'])) {
						    					   
						    $nom = htmlspecialchars ($_POST['nom']);
						    $objet =htmlspecialchars( $_POST['objet']);
						    $email = htmlspecialchars($_POST['email']);
						    $telephone = htmlspecialchars ($_POST['telephone']);
						    $message = htmlspecialchars ($_POST['message']);

						    $insertcontact = $bdd->prepare("INSERT INTO contact('nom', 'objet', 'email', 'telephone', 'message') VALUES (?,?,?,?,?)");
                            $insertcontact->execute(array($nom, $objet, $email, $telephone, $message));
                            	
							}
						    ?>
				    </div>
		        </div>
		    </div>    
	 	</section>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
</body>
</html>