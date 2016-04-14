<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Overzicht bestellingen</title>
 	<link rel="stylesheet" href="style.css">
 </head>
 <body>
 	<div class="wrapper">
 		<div class="content">
		 	<h1>Overzicht bestellingen</h1>
		 	<br>
		 	<label>Klantnaam</label>:<span>J. van Rees</span><br>
		 	<label>Postcode</label>:<span>2987 CX</span><br>
		 	<br>
		 	<br>
		 	<table cellpadding="20" cellspacing="0" border="2" style="border:2px solid #000;">
		 		<tbody>
		 			<tr>
		 				<td colspan="2" style="color:#FFF;font-weight:bold;" bgcolor="#1919ae">Ordergegevens</td>
		 				<td colspan="2" style="color:#FFF;font-weight:bold;" bgcolor="#ffae19">Verzendgegevens</td>
		 			</tr>
		 			<tr>
 						<td style="background: #6A6AFF;">Order#</td>
 						<td style="background: #6A6AFF;">Besteldatum</td>
 						<td style="background: #FFDD60;">Land van herkomst</td>
 						<td style="background: #FFDD60;text-align: left;">Traceercode</td>
 					</tr>
 					<tr style="text-align: center;">
 						<td>#123456</td>
 						<td>3-jan</td>
 						<td>USA</td>
 						<td style="text-align: left;">
 							<input type="radio" class="trace" name="trace" value="http://wwwapps.ups.com/WebTracking/track?loc=nl_NL&amp;track=yes&amp;trackNums=801358200591920428">
 							801358200591920428
 						</td>
 					</tr>
 					<tr style="text-align: center;">
 						<td>#123500</td>
 						<td>7-jan</td>
 						<td>USA</td>
 						<td style="text-align: left;">
 							<input type="radio" class="trace" name="trace" value="http://www.stamps.com/shipstatus/submit/?confirmation=LZ665104964US">
 							LZ665104964US
 						</td>
 					</tr>
 					<tr style="text-align: center;">
 						<td>#124301</td>
 						<td>25-jan</td>
 						<td>NL</td>
 						<td style="text-align: left;">
 							<input type="radio" class="trace" name="trace" value="https://jouw.postnl.nl/?lang=nl#!/track-en-trace/3SEBEL226918/NL/2987CX">
 							3SEBEL226918
 						</td>
		 			</tr>
		 		</tbody>
		 	</table>
		 	<br>
		 	<br>
		 	<input type="button" id="traceerPakket" value="Traceer pakket">
		 </div>
	</div>
	<script>

		window.onload = function(){
			
			var traceerPakket = document.getElementById("traceerPakket");

			traceerPakket.onclick = function(){
				var radios = document.getElementsByName('trace');

				for (var i = 0, length = radios.length; i < length; i++) {
				    if (radios[i].checked) {
				        // do whatever you want with the checked radio
				        var myTrace = radios[i].value;

				        window.open(myTrace, '_blank');

				        // only one radio can be logically checked, don't check the rest
				        break;
				    }
				}
			}
		};

	</script>
 </body>
 </html>