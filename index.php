<?php

	$page = "home";

	include("header.php");
?>

<body style="background-color:white">
 
<div id="container" style="width:1000px; margin: 0 auto">

	<table>
		<tr>
			<td width='30%' style='vertical-align:top;'>
				<?php
					include('side.php');
				?>
			</td>
			<td>
				<div>
					<strong> OUR MISSION: </strong>
					<p> We bring UM undergraduates to Kenya to give them a chance to translate their passions into positive social impact through startup experience and intercultural awareness.</p>
				</div>	

				<iframe width="700" height="394" src="http://www.youtube.com/embed/U3d0gQ-9p9s?autoplay=1" frameborder="0" allowfullscreen></iframe>
			</td>
		</tr>
	</table>
</div>
</body>

<?php

	include("footer.php");
?>