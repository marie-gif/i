<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		
		<link href="public/style.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
		
	</head>
	<body>
        <div id="site">
    <nav>
    <em><a href="index.php?action=regarder&amp;">M'inscrire</a></em>
    pensez a faire me connecter direct
    <?php include('model/gestionnaire_connection.php'); ?>	
				</nav>
			<header>
				
				<h1>
					BIENVENUE DANS MY CV
				</h1> 
			</header>			
			
			<section>
           
                <?= $content ?>
			
			</section>
			<footer>
                <p>
                bye
</p>
			</footer>
		</div>

	</body>
</html>

