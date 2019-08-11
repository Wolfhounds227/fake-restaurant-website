   <?php
include 'common.inc.php';
?>
        <style>
          	@font-face {
				font-family: 'Fascinate', cursive;
				src: url(https://fonts.googleapis.com/css?family=Fascinate&display=swap);
			}
            body { margin: 0; background-color: silver; font-family: sans-serif; }
			header { text-align:center;}
            header h1 { font-family: 'Fascinate', cursive;}
            header nav { background-color: white; border-top: 1px solid black; border-bottom: 1px solid black; }
            header nav a { color: black; text-decoration: none; display: inline-block; margin: 0 10px; text-transform: uppercase; }
            header nav a:hover { background-color: dimgrey; color: white;}
			header nav a:visited {color:yellow;}
            #home main { text-align: center;  width: 100%; max-width: 500px; margin: 0 auto; }
            #menu main {}
            #menu main section:nth-of-type(1) { text-align: center; width: 100%; max-width: 975px; margin: 0 auto; }
            #menu main section:nth-of-type(1) article { display: inline-block; vertical-align: top; width: 300px; margin: 10px; }
          	#menu main section:nth-of-type(2) { text-align: center; width: 100%; max-width: 640px; margin: 0 auto; }
            #menu main section:nth-of-type(2) article { display: inline-block; vertical-align: top; width: 300px; margin: 10px; }
            #menu main section article span { font-style: italic; }
            #contactus main {}
            footer { border-top: 1px solid black; text-align: center; }
            footer h3 { font-size: 1em; }
			article h4 {font-size: 2em;}
		</style>
  	</head>
    <body id="menu">
        <header>
<ul class="nav nav-tabs">
  <li class="active"><a href="index.php">Home</a></li>
  <li><a href="menu.php">Menu</a></li>
  <li><a href="contactus.php">Contact Us</a></li>
</ul>
      	</header>
        <main>
            <section>
                <h2>Entrees</h2>
                <article>
                    <h4>Filet Mignon</h4>
                    <p>This steak... <span>$20.00</span></p>
              	</article>
              	<article>
                    <h4>Tri-tip</h4>
                    <p>This steak... <span>$20.00</span></p>
              	</article>
              	<article>
                    <h4>Sirloin</h4>
                    <p>This steak...</p>
              	</article>
              	<article>
                    <h4>Classic with Fries</h4>
                    <p>This steak...</p>
              	</article>
              	<article>
                    <h4>Big Boi Burger</h4>
                    <p>This steak...</p>
              	</article>
              	<article>
                    <h4>Smokehouse Burger</h4>
                    <p>This steak...</p>
              	</article>
          	</section>
          	<section>
                <h2>Beverages</h2>
                <article>
                    <h4>Root Beer</h4><span>$1.00</span>
              	</article>
              	<article>
                    <h4>Bottled Water</h4><span>$1.00</span>
              	</article>
              	<article>
                    <h4>Lemonade</h4><span>$1.00</span>
              	</article>
              	<article>
                    <h4>Iced Tea</h4><span>$1.00</span>
              	</article>
          	</section>
      	</main>
        <footer>
            <h3>12345 dream lane, Eagan, Wisconsin, 99999</h3>
            <h3>123-456-7890</h3>
      	</footer>
  	</body>
</html>