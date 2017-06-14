<?php
/*Funcions to sections in especific*/
//Head
function Home_()
{
$DivClassSlider="<div class=\"slider\">";
$Slider1="<ul>";
$img[4]= array("<li><img src=\"slider/1.jpg\" alt=\"slider1\"></li>",
"<li><img src=\"slider/2.jpg\" alt=\"slider1\"></li>",
"<li><img src=\"slider/3.jpg\" alt=\"slider1\"></li>",
"<li><img src=\"slider/4.jpg\" alt=\"slider1\"></li>"
);
$Slider2="</ul>";

echo "".$DivClassSlider.$Slider1.$img[1].$img[2].$img[3].$img[4].$Slider2;
}
function Aboutus_()
{
    
}
function Galery_()
{
    
}
function Contact_()
{
    
}
function Singin_()
{
    
}
function Singup_()
{
    
}


function DHTML_header($_string,$_bool)
{
switch ($_string)
   {
// home
       case"Home":
       case"home":
       {
         break;
       }
// Aboutus
       case"Aboutus":
       case"aboutus":
       {
         break;
       }
// galery
       case"Galery":
       case"galery":
       {
         break;
       }
// contac
       case"Contact":
       case"contact":
       {
         break;
       }
// singin
       case"Singin":
       case"singin":
       {
         break;
       }
// singup
       case"Singup":
       case"singup":
       {
         break;
       }
       
       /*Default case*/
       default:
       {

         break;
       }
   }   
}
//MainC
function DHTML_MainC($_string,$_bool)
{
switch ($_string)
   {
// home
       case"Home":
       case"home":
       {
         break;
       }
// Aboutus
       case"Aboutus":
       case"aboutus":
       {
         break;
       }
// galery
       case"Galery":
       case"galery":
       {
         break;
       }
// contac
       case"Contact":
       case"contact":
       {
         break;
       }
// singin
       case"Singin":
       case"singin":
       {
         break;
       }
// singup
       case"Singup":
       case"singup":
       {
         break;
       }
       
       /*Default case*/
       default:
       {

         break;
       }
   }
}
//Head
function DHTML_Footer($_string,$_bool)
{
switch ($_string)
   {
// home
       case"Home":
       case"home":
       {
         break;
       }
// Aboutus
       case"Aboutus":
       case"aboutus":
       {
         break;
       }
// galery
       case"Galery":
       case"galery":
       {
         break;
       }
// contact
       case"Contact":
       case"contact":
       {
         break;
       }
// singin
       case"Singin":
       case"singin":
       {
         break;
       }
// singup
       case"Singup":
       case"singup":
       {
         break;
       }
       
       /*Default case*/
       default:
       {

         break;
       }
   }
}

$Goto=1;
if(isset($_GET['page']))
{
$Goto=$_GET['page'];
}else
{
$Goto="Home";    
}

switch ($Goto)
{
    //Individual case of EverySingle page home
    case "Home" :
    case "home" :
    {
        
     break;
    }
    //Individual case of EverySingle page about us
    case "Aboutus" :
    case "aboutus" :
    {
        
     break;
    }
    //Individual case of EverySingle page galery
    case "Galery" :
    case "galery" :
    {
        
     break;
    }
    //Individual case of EverySingle page contac
    case "Contact" :
    case "contact" :
    {
        
     break;
    }
    //Individual case of EverySingle page singin
    case "Singin" :
    case "singin" :
    {
        
     break;
    }
    //Individual case of EverySingle page singup
    case "Singup" :
    case "singup" :
    {
        
     break;
    }
    //Default case is home
    default:
    {
        
        //header("Local:index.php?goto=home");
     break;
    }
}

?>
<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
    <body>
        <div id="warper">
            
            <div id="pc">
<!--header-->            
              <div id="header">
              <div class="clearfix" id="hfix">
                  <ul id="navbar">
                      <li><br><a href="#">Home</a></li>
                      <li><br><a href="#">Aboutus</a></li>
                      <li><br><a href="#">Galery</a></li>
                      <li><br><a href="#">Contact</a></li>
                      <li><br><a href="#">Membership</a></li>
                      
                  </ul>
                  </div>
               
              </div>
<!--header-->
<!--mainc-->
              <div id="mainc">
              <div class="clearfix" id="mfix">
                    
                 <?php
                     $DivClassSlider="<div class=\"slider\">";
$Slider1="<ul>";
$img[4]= array("<li><img src=\"slider/1.jpg\" alt=\"slider1\"></li>",
"<li><img src=\"slider/2.jpg\" alt=\"slider1\"></li>",
"<li><img src=\"slider/3.jpg\" alt=\"slider1\"></li>",
"<li><img src=\"slider/4.jpg\" alt=\"slider1\"></li>"
);
$Slider2="</ul>";

echo "".$DivClassSlider.$Slider1.$img[0].$img[1].$img[2].$img[3].$Slider2."</div>";
                 ?>


                  </div>
               
              </div>
<!--mainc-->
<!--footer-->
              <div id="footer">
              <div class="clearfix" id="ffix">
                       <div class="categories" >
                         
                         <div id="top">
                            <h2 class="labels">Sitemap</h2>
                            <h2 class="labels">FQ&A</h2>
                            <h2 class="labels">Cities</h2>
                         </div>

                        <div id="low">

                          <div class="sitemap">
                             <ul>
                                 <li><a href="#">Home</a></li>
                                 <li><a href="#">Aboutus</a></li>
                                 <li><a href="#">Galery</a></li>
                                 <li><a href="#">Contact</a></li>
                                 
                            </ul> 
                          </div>
                          <div class="sitemap">
                            <ul>
                                 <li><a href="#">Dress Code</a></li>
                                 <li><a href="#">Reservation</a></li>
                                 
                                 
                            </ul>
                          </div>
                          <div class="sitemap">
                            <ul>
                                 <li><a href="#">Guadalajara</a></li>
                                 <li><a href="#">Tepic</a></li>
                                 <li><a href="#">Aguascalientes</a></li>
                                 <li><a href="#">Navojoa</a></li>
                                 
                            </ul>
                          </div>
                        
                        </div>

                        </div>
                        <div class="categories">
                        
                         <div id="fix">
                             <div id="slogan"><h3>Trattoria dal Padrino</h3></div>
                             <div id="socialmedia">
                                 <ul>
                                     <li><a href="#"><img src="footer/1.png" class="SocialSize"></a></li>
                                     <li><a href="#"><img src="footer/2.png" class="SocialSize"></a></li>
                                     <li><a href="#"><img src="footer/3.png" class="SocialSize"></a></li>
                                     <li><a href="#"><img src="footer/4.png" class="SocialSize"></a></li>
                                 </ul>
                             </div>
                             
                         </div>

                        </div>
                        <div class="categories" id="info">
                             <div class="Subbners">
                                 <h3>Reservation</h3>
                                 <dd>01<span style="display:inline-block; width:2px;"></span>800<span style="display:inline-block; width:2px;"></span>TRATOPA</dd>
                                 
                             </div>
                             <div class="Subbners">
                                 <h3>Monday to Friday</h3>
                                 <dd>13:00-22:00</dd>
                             </div>

                             <div id="lenguajes"></div>
                             
                        </div> 
                  </div>
               
              </div>
<!--footer-->
            </div>
            <div id="Movil" style="display:none">
                 
            </div>

        </div>
    </body>
</html>