<?php

?>

<style type="text/css">

    #galleria{ width: 700px; height: 400px; background: #000; margin: 0 auto}
</style>

<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script src="galleria/galleria-1.2.8.min.js"></script>
</head>
<body>
    <div id="galleria" class="galleria">

<?php

	for($i=2; $i < 31; $i++)
	{
        echo "<img src='images/img (".$i.").jpg'>";
    }
?>
    </div>
    <script>
        Galleria.loadTheme('galleria/themes/classic/galleria.classic.min.js');
        Galleria.run('#galleria');
        $('#galleria').data('galleria').play();
        $('.galleria').click(function() {
			$('#galleria').data('galleria').play();
        });
    </script>
</body>
