<!DOCTYPE html>
<html>
    <head>
	<!-- En-tête de la page -->
        <meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" /> 
        <title>Titre</title>
    </head>

    <body>
	<!-- Corps de la page -->
	
	
<!--<h4>This is a Flex-Grow</h4>-->
<!--<h5>A,B and F are flex-shrink:1 . D and E are flex-grow:1 .</h5>-->
<div id="content">
	
	<div class="box" >
		
		<!--<img class="imageflottante" src="images/eaht.gif" alt="terre qui tourne" title="La Terre de gauche" />
		-->
	</div>
	<?php echo "allo la Terre"
	?>
	<div class="box1" >
		<h1 id="bienvenue" class="introduction"> 
			<span class="imageflottante2">
			<img src="images/eaht.gif" alt="terre qui tourne" title="La Terre UMP" />
			</span>
			<span class="text">
		<?php 
		// Enregistrons les informations de date dans des variables, et d'autres infos...
			$jour = date('d');
			$mois = date('m');
			$annee = date('Y');

			$heure = date('H');
			$minute = date('i');
			$bjr= ''; 
			$nom="cher Anonymous";
		//On utilise une condition pour déterminer Bonjour/bonsoir dans la variable	$bjr	
				if ($heure <= 18)
				{
			$bjr='Bonjour';
				}

				elseif ($heure > 18)
				{
			$bjr='Bonsoir' ;
				}
		//on regroupe les variables dans une autre pour constituer un message d'en tête'
			$mess= 'Nous sommes le '. $jour .'.'. $mois .'.'. $annee . ' à ' . $heure .' h '. $minute .', bienvenue sur <strong> Ngb </strong> ! <br ></code>' ;
			$mess2= $bjr .' '. $nom .'. '. 'Nous sommes le '. $jour .'.'. $mois .'.'. $annee . ' et il est ' . $heure .' h '. $minute .', bienvenue sur <strong> Ngb </strong>!<br ></code>' ;
		//Une fonction pour personnaliser le message avec un nom de connection par ex
		
		function MessPerso($nom, $bjr, $mess)
		{
		echo $bjr .' '. $nom .'. '. $mess;
		}
		//Maintenant on peut afficher ce qu'on a recueilli
		
			MessPerso('Moktar',$bjr, $mess);
			//echo $mess2;
		?>
		<span/>
		</h1>
	</div>
	
	<div class="box1" >E</div>
	<div class="box" >F</div>
</div>

<div id="content2">
	<div class="box" title="navigateur" >
		<h3><?php
		$nombre_de_lignes = 1;

			while ($nombre_de_lignes <= 4)
			{
		echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
				$nombre_de_lignes++;
			}
			for ($nombre_de_lignes = 1; $nombre_de_lignes <= 6; $nombre_de_lignes++)
			{
		echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
			}
			?>
		</h3>
		
	
		<header> bandeau du site contenant le liens vers pages fixes + 
		 <nav> onglet de navigation, inscription, connexion...</nav>
		</header>
		
		<nav> </nav> liens principaux de navigation ;
		<section> section de page ;</section> 
		<footer> pied de page ;</footer> 
		<article> article indépendant </article>
		<aside> : informations complémentaires ;</aside>
		
		
		
		<!-- Insertion images/logos de différents formats dans une figure légendée -->	
		<!--<figure class="introduction">
			<img src="images/internetexplorer.jpg" alt="Logo Internet Explorer" />
			<img src="images/firefox.png" alt="Logo Mozilla Firefox" />
			<img src="images/chrome.png" alt="Logo Google Chrome" />
		<figcaption>Logos des différents navigateurs</figcaption>
		</figure>
		-->
		
		<p class="introduction2"> En route vers les cocotiers !!
			A propos de NeoGreenBiz consultez les rubriques de la plateforme <br />
		</p>
		
	</div>
	
	<div class="box1" >
		
	</div>
</div>

	<div id="conteneur">
    	

<!--
	 Le code PHP se met ici
			Et ici
			Et encore ici 
		$id_connect=null;
		$age=17;
		$article="vous n'avez rien selectionné";
		$select_contenu="vous n'avez rien selectionné";
	echo 'bonjour '. id_connect .' '.	$article;
-->
	
	
	<h3><?php
		$nombre_de_lignes = 1;

		while ($nombre_de_lignes <= 4)
		{
	echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
			$nombre_de_lignes++;
		}
		for ($nombre_de_lignes = 1; $nombre_de_lignes <= 6; $nombre_de_lignes++)
		{
	echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
		}
		?>
	</h3>
		
	</div>
	
<!--Parties à introduire dans les flexbox une fois bien paramétrées-->

	<h2 class="introduction"> <mark> Services </mark> </h2>
	
		<h3 class="introduction">Des services pour créer vos supports de com</h3>
    
		<p class="introduction2">Vous avez des données, géoréférencées sous quelque forme, nous réalisons vos cartes et
		analyses spatiales pour vos supports de communication ou vos présentations</p>
    
		<p class="introduction2">Vous disposerez d'une image cartographique légendée de la dimension voulue, 
		et des fichiers contenant les données au format cartographique et les différents géotraitements et
		mises en forme pour arriver au rendu sous la forme d'un dossier projet SIG (fichiers dbf shp shx qpj prj utilisable avec Qgis) ou d'une base de données (Postgis)</p>

		<h3 class="introduction">Des services pour mettre en forme vos données, créer un stockage dans une base, réaliser un modèle d'organisation</h3>
    
		<p class="introduction2">Nous travaillons avec différents logiciels open source pour permettre de bénéficier
		de nouvelles fonctionnalités régulièrement développées par les différentes communautées.
		Mais qui permettent aussi la plus grande souplesse pour l'échange des données
		et l'utilisation d'outils gratuits chez vous ultuérieurement si vous avez besoin d'utiliser
		la cartographie et les base de donnée chez vous<br />
		</p>
	
	<h2 id="menus"> <mark> Menu site </mark> </h2>
	<!-- Test de liste numérotées = <ol> et non ordonnées <ul> -->
		<h3>Produits/Services</h3>
			
			<ol id="choix_produits">
			<li><ul>  <em>Fruits</em>
				<li>Fraises</li>
				<li>Framboises</li>
				<li>Cerises</li>
				</ul></li>
			<li><ul>  <em>Fruits<mark>Légumes<strong>Plats</strong></mark></em>
				<li>Patates</li>
				<li>Carottes</li>
				<li>Courges</li>
				</ul></li>
			<li><ul>  <strong>Plats</strong>
				<li>Pizzas</li>
				<li>Sandwichs</li>
				<li>Assortiments</li>
				</ul></li>
			<li><ul> <strong>Services</strong>
				<li>Web</li>
				<li>Base de données</li>
				<li>SIG</li>
				</ul></li>
			</ol>
			
		<h3>Contact</h3>
		
		<h3 href="inscription/join-us.php">Nous rejoindre</h3>
		
		<h3>DONS</h3>
		
		<p> Faites un don en BTC : 1GuTqL1xWsjzJFYHLwsBokPpBsa2BsaVU2 </p>
		<p> Faites un don en Euros: 18j3puVAY2Y5QxC8n71TDwvfsuvMVNxaTU </p>
		<a href="https://www.coinbase.com/checkouts/2b30a03995ec62f15bdc54e8428caa87" 
		target="_blank" title="faites un don!">Donate Bitcoins</a>
	
	<div > 
	<h2> <mark> Ressources </mark> </h2>
	
		<h4> Les liens intéressants :
		<a href="https://openclassrooms.com" title="Vous ne regretterez pas !"
		target="_blank">OpenClassrooms ;</a>
		<a href="https://openstreetmap.fr" title="Vous ne regretterez pas non plus !"
		target="_blank">OpenStreetMap ;</a>
		</h4>
	
		<h4> Les documents à télécharger :
		<a href="downld/install_serveur.pdf" title="Pour bien débuter !"> installer un serveur web Apache et mysql sous Windows ; </a>
		</h4>
	
	</div>

	
    </body>
</html>