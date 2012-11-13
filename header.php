<!DOCTYPE html>
<html>
  <head>
      <link link rel="stylesheet" type="text/css" href="headerstyle.css" />

  </head>
  <body>
    <div class="headerstuff">
        <div>
          <img id="KenyaLogo" src="images/sun-logo.png"/>
        </div>
        <div class='headerstuffdiv'>
            <table>
              <tr id ="MpoweredLogoTable">
                <td colspan="4">
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

                <td onclick="window.location='faq.php'"
                <?php 
                  if($page == "FAQ") 
                      {echo "class='activepage'";}
                  else 
                      {echo "class='inactivepage'";}
                  ?> 
                >

                 <h2>FAQ</h2>
                </td>

                
              </tr>

            </table>
        </div> 
      </div>
</html>