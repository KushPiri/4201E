	<!-- Main -->
		<div id="main">
		  <!-- Container -->
			<div class="container">
				<header>
					<h2>Nieuwe speler</h2>
				</header>
				<div class="row">
					<form action='http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>' method='post'>
						<br>
						<br>
						<input type='text' name='nieuwespeler' value='' placeholder='Naam...' />
						<br>
						<input type='submit' class='button button-primary' value='Verzenden' />
					</form>
				</div>
			</div>
		  <!-- /Container -->
		</div>
	<!-- /Main -->