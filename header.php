<html>
  <head>
      <link link rel="stylesheet" type="text/css" href="headerstyle.css" />

  <?php 

    $page = "home";
  ?>

 
  </head>
  <body>
    <div class="Headerstuff">
        <span>
            <table>
              <tr id ="MpoweredLogoTable">
                <td colspan="3">
                  <img id="MpoweredLogo" src="images/MPoweredLogo3.png"/>
                </td>
              </tr>


              <tr class="Navbar">
                
                <td onclick="window.location='index.php'"
                  <?php 
                  if($page == "home") 
                      {echo "class='activepage'";}
                  else 
                      {echo "class='inactivepage'";}
                  ?> 
                >
                  <h2>Home</h2>
                </td>


                <td onclick="window.location='aboutus.php'"
                <?php 
                  if($page == "aboutus") 
                      {echo "class='activepage'";}
                  else 
                      {echo "class='inactivepage'";}
                  ?> 
                >
                  <h2>About Us</h2>
                </td>
                

                <td onclick="window.location='apply.php'"
                <?php 
                  if($page == "apply") 
                      {echo "class='activepage'";}
                  else 
                      {echo "class='inactivepage'";}
                  ?> 
                >

                 <h2>Apply</h2>
                </td>
              </tr>




            </table>
        </span> 
        <span>
          <img id="KenyaLogo" src="images/sun-logo.png"/>
        </span>
    </div>
</html>