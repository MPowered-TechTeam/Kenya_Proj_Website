<?php

	$page = "apply";

	include("header.php");
?>
<script src="bootstrap/js/bootstrap.min.js"></script>
<style type="text/css">
.btn {
  display: inline-block;
  *display: inline;
  padding: 4px 14px;
  margin-bottom: 0;
  *margin-left: .3em;
  font-size: 14px;
  line-height: 20px;
  *line-height: 20px;
  color: #333333;
  text-align: center;
  text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
  vertical-align: middle;
  cursor: pointer;
  background-color: #f5f5f5;
  *background-color: #e6e6e6;
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
  background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
  background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
  background-repeat: repeat-x;
  border: 1px solid #bbbbbb;
  *border: 0;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  border-color: #e6e6e6 #e6e6e6 #bfbfbf;
  border-bottom-color: #a2a2a2;
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
  filter: progid:dximagetransform.microsoft.gradient(enabled=false);
  *zoom: 1;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
     -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
          box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
}

.btn:hover,
.btn:active,
.btn.active,
.btn.disabled,
.btn[disabled] {
  color: #333333;
  background-color: #e6e6e6;
  *background-color: #d9d9d9;
}

.btn:active,
.btn.active {
  background-color: #cccccc \9;
}

.btn:first-child {
  *margin-left: 0;
}

.btn:hover {
  color: #333333;
  text-decoration: none;
  background-color: #e6e6e6;
  *background-color: #d9d9d9;
  /* Buttons in IE7 don't get borders, so darken on hover */

  background-position: 0 -15px;
  -webkit-transition: background-position 0.1s linear;
     -moz-transition: background-position 0.1s linear;
       -o-transition: background-position 0.1s linear;
          transition: background-position 0.1s linear;
}

.btn:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}

.btn.active,
.btn:active {
  background-color: #e6e6e6;
  background-color: #d9d9d9 \9;
  background-image: none;
  outline: 0;
  -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
     -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
          box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
}

.btn.disabled,
.btn[disabled] {
  cursor: default;
  background-color: #e6e6e6;
  background-image: none;
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
     -moz-box-shadow: none;
          box-shadow: none;
}

.btn-large {
  padding: 9px 14px;
  font-size: 16px;
  line-height: normal;
  -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
          border-radius: 5px;
}


.btn-warning {
  color: #000000;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #faa732;
  *background-color: #ffe810;
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffc800), to(#ffe810));
  background-image: -webkit-linear-gradient(top, #ffc800, #ffe810);
  background-image: -o-linear-gradient(top, #ffc800, #ffe810);
  background-image: linear-gradient(to bottom, #ffc800, #ffe810);
  background-image: -moz-linear-gradient(top, #ffc800, #ffe810);
  background-repeat: repeat-x;
  border-color: #ffe810 #ffe810 #ad6704;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ffffc800', endColorstr='#ffffe810', GradientType=0);
  filter: progid:dximagetransform.microsoft.gradient(enabled=false);
}

.btn-warning:hover,
.btn-warning:active,
.btn-warning.active,
.btn-warning.disabled,
.btn-warning[disabled] {
  color: #000000;
  background-color: #ffe810;
  *background-color: #df8505;
}

.btn-warning:active,
.btn-warning.active {
  background-color: #c67605 \9;
}

</style>
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
					<div id="text">
						<b> Apply to The Kenya Project!</b></br>
						<p>
							MPowered Entrepreneurship is partnering with MichiKen, a non-profit aimed at developing entrepreneur incubator space in Kithoka, Kenya, in its second year to bring 7 students to Kithoka, Kenya this summer in the month of June for three weeks.
					<br><br>We are inviting you to take the knowledge you've learned in class, the ideas you are capable of generating, your passion and internal motivation, with the entrepreneurial resources MPowered will provide you throughout the year and actually apply your knowledge to create real solutions in Kenya.  You will be a true entrepreneur, discovering and learning to adapt in ambiguous and unfamiliar situations, finding a need to address and a way to solve it.
						</p>
            <div style='text-align: center'>
						  <iframe width="560" height="315" src="http://www.youtube.com/embed/L_UR8WjcEVs" frameborder="0" allowfullscreen></iframe>
						</div>
            <br />
						<b> Apply</b></br>
						<p style='text-align: center'>
							<!--The Application will open on November 8, 2012.-->
							<br /> There is a two-step interview process: one individual interview, one group interview. 
              <br /> The application will close Monday, November 26th at 11:59pm.
						</p>
						<div style='text-align: center'>
							<button class="btn btn-warning btn-large" onclick="window.location = 'https://wufoo03.wufoo.com/forms/the-kenya-project-application-2013/';" >
									Apply Here
							</button>
						</div>
					</div>
				</td>
			</tr>
		</table>
	</div>
</body>

<?php

	include("footer.php");
?>