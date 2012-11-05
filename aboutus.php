<?php

	$page = "aboutus";

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
					<b> What will you be doing?</b>
					<p>
					<br>
			The Kenya Team will participate in a crash course for social entrepreneurship organized by MPowered along with cultural exposure to Swahili and what life is like in Kenya throughout the winter semester.
			During 3 weeks of actual experience in Kenya in June, you will go through idea generation, market research, pivoting, prototyping, and business model/pitch generation in partnership with young adults from the Kithoka and surrounding community.
			The trip will conclude with a presentation/pitch to influential local leaders in the community to receive feedback on the business model you developed with Kenyans and determine future viability and funding.
			After your return to campus in the fall, you will re-pitch the idea to a panel of UM professors, entrepreneurs, and venture capitalists to receive feedback.  
			From there, you can decide to take the initiative to continue working on the project with Kenyans and apply to Techarb or enroll in a social entrepreneurship practicum course.  Or, you can pass off the idea to the MichiKen incubator where a local Kenyan will take over operations and build the idea into a business that can improve the economy in Kithoka, Kenya.
					</p>

						<b> What is it like in Kithoka, Kenya?</b>

						<?php

							include('pic_slider.php');
						?>

						<b>Lodging</b>
						<p>
							<br>You will be staying at the Thiiri Center, a community-cultural center with modern amenities.  This center provides lodging at a much higher standard of living than most Kenyan homes, but it will be different from America.  
						</p>
						<b>Immunizations</b>
						<p>
							<br>The Center for Disease Control website contains important information for traveling to Kenya.  The CDC recommends visiting a travel clinic four to six weeks in advance of your trip.  The University Health Service (UHS) travel clinic is a very simple and convenient option.  Malaria risk is present in Kithoka, Kenya
							Clinics and full service hospitals are located within a one hour drive of our project locations and our hosts at the Thiiri Center are familiar with the local medical resources.
						</p>
						<b>Costs</b>
						<p>
						<br>Costs will depend on the amount we fundraise.  You will be participating in fundraising with MPowered as well.  Last year, MPowered covered all costs of living and staying in Kenya, while trip participants paid for their plane ticket, personal immunizations, and visas. 
						If you have financial concerns about your ability to participate, don't hesitate to reach out to us at mpowered-kenya@umich.edu, and we will do our best.
						</p>
						<br>	
					</td>
			</tr>
		</table>
</div>
</body>

<?php

	include("footer.php");
?>