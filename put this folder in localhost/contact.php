
<div id="main">
	<div class="container">
		<header>
			<h2>Contact</h2>
		</header>
		<div class='row'>

		<?php 
			if(isset($_POST['contact']))
			{
				echo "Uw bericht is naar ons verzonden.";
			}
		 ?>

		<br>

			<form action='http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>' method='post'>
				<label>Naam</label>
				<br>
				<input type='text' name='contact[name]' value='' autofocus />
				
				<div style='clear:both;'></div>
				
				<label>Emailadres</label>
				<div style='clear:both;'></div>
				<input type='text' name='contact[email]' value='' />
				
				<br>
				
				<label>Bericht</label>
				
				<div style='clear:both;'></div>
				<textarea name='contact[message]' style='min-width:350px;min-height:200px;'></textarea>
				<div style='clear:both;'></div>
				
				<br>
				
				<input type='submit' class='button button-primary' value='Verzenden' />
				
			</form>
		 </div>
	</div>
</div>