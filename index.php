<?php
/*Funcions to sections in especific*/
//Head
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
    case "Login" :
    case "login" :
    {
        
     break;
    }
    //Individual case of EverySingle page singup
    case "Register" :
    case "register" :
    {
        
     break;
    }
    case "Error" :
    case "error" :
    {
      
     break;
    }
    //Default case where not is home
    default:
    {
        header("Location: 404Error.php");
          
     break;
    }
}



function Home_()
{

  $DivClassSlider="<div class=\"slider\">";
  $Slider1="<ul>";
  $img= array();
  array_push($img,"<li><img src=\"slider/1.jpg\" alt=\"slider1\"></li>",
  "<li><img src=\"slider/2.jpg\" alt=\"slider1\"></li>",
  "<li><img src=\"slider/3.jpg\" alt=\"slider1\"></li>",
  "<li><img src=\"slider/4.jpg\" alt=\"slider1\"></li>");
  $Slider2="</ul>";
  $DivClassSlider2="</div>";
  echo $DivClassSlider.$Slider1.$img[0].$img[1].$img[2].$img[3].$Slider2.$DivClassSlider2;

}
function Aboutus_()
{

  $divausnav=array("<div id=\"infol\">",
  "<ul id=\"ausnav\">",
  "<li>",
  "<h3>History</h3>",
  "<ul>",
  "<li><a href=\"#identificador1\">Identificador1</a></li>",
  "</ul>",
  "</li>",
  "<li>",
"<h3>Mission</h3>",
"<ul>",
"<li><a href=\"#identificador2\">Identificador2</a></li>",
"</ul>",
"</li>",
"<li>",
"<h3>Vision</h3>",
"<ul>",
"<li><a href=\"#identificador3\">Identificador3</a></li>",
 "</ul>",
 "</li>",
 "</ul>",
 "</div>");
 $bigarray=array("<div id=\"infor\">","<dd id=\"identificador1\">","<h1>Lorem ipsum</h1>",
 "<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>","</dd>",
   "<dd id=\"identificador2\">","<h1>ipsa doloremque</h1>",
 "Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son señales de que presto ha de serenar el tiempo y han de sucedernos bien las cosas; porque no es posible que el mal ni el bien sean durables, y de aquí se sigue que, habiendo durado mucho el mal, el bien está ya cerca. Así que, no debes congojarte por las desgracias que a mí me suceden, pues a ti no te cabe parte dellas. Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son señales de que presto ha de serenar el tiempo y han de sucedernos bien las cosas; porque no es posible que el mal ni el bien sean durables, y de aquí se sigue que, habiendo durado mucho el mal, el bien está ya cerca. Así que, no debes congojarte por las desgracias que a mí me suceden, pues a ti no te cabe parte dellas. Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son señales de que presto ha de serenar el tiempo y han de sucedernos bien las cosas; porque no es posible que el mal ni el bien sean durables, y de aquí se sigue que, habiendo durado mucho el mal, el bien está ya cerca. Así que, no debes congojarte por las desgracias que a mí me suceden, pues a ti no te cabe parte dellas. Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son señales de que presto ha de serenar el tiempo y han de sucedernos bien las cosas; porque no es posible que el mal ni el bien sean durables, y de aquí se sigue que, habiendo durado mucho el mal, el bien está ya cerca. Así que, no debes congojarte por las desgracias que a mí me suceden, pues a ti no te cabe parte dellas. Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son señales de que presto ha de serenar el tiempo y han de sucedernos bien las cosas; porque no es posible que el mal ni el bien sean durables, y de aquí se sigue que, habiendo durado mucho el mal, el bien está ya cerca. Así que, no debes congojarte por las desgracias que a mí me suceden, pues a ti no te cabe parte dellas. Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son señales de que presto ha de serenar el tiempo y han de sucedernos bien las cosas; porque no es posible que el mal ni el bien sean durables, y de aquí se sigue que, habiendo durado mucho el mal, el bien</p>","</dd>",
   "<dd id=\"identificador3\">","<h1>voluptatem natus</h1>",
 "<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda</p>","</dd>");

foreach ($divausnav as &$valor) {
    echo $valor;
}
foreach ($bigarray as &$valor) {
    echo $valor;
}
echo"</div>";

}
function Galery_()
{
    $divResponsive="<div id=\"responsive\">";
    $divResponsive2="</div>";

    $imagenescontainers=array();
    array_push($imagenescontainers,"<div class=\"container\"><img src=\"Error/1.jpg\"></div>",
                                   "<div class=\"container\"><img src=\"Error/1.jpg\"></div>",
                                   "<div class=\"container\"><img src=\"Error/1.jpg\"></div>",
                                   "<div class=\"container\"><img src=\"Error/1.jpg\"></div>",
                                   "<div class=\"container\"><img src=\"Error/1.jpg\"></div>",
                                   "<div class=\"container\"><img src=\"Error/1.jpg\"></div>",
                                   "<div class=\"container\"><img src=\"Error/1.jpg\"></div>",
                                   "<div class=\"container\"><img src=\"Error/1.jpg\"></div>",
                                   "<div class=\"container\"><img src=\"Error/1.jpg\"></div>",
                                   "<div class=\"container\"><img src=\"Error/1.jpg\"></div>",
                                   "<div class=\"container\"><img src=\"Error/1.jpg\"></div>",
                                   "<div class=\"container\"><img src=\"Error/1.jpg\"></div>",
                                   "<div class=\"container\"><img src=\"Error/1.jpg\"></div>",
                                   "<div class=\"container\"><img src=\"Error/1.jpg\"></div>",
                                   "<div class=\"container\"><img src=\"Error/1.jpg\"></div>",
                                   "<div class=\"container\"><img src=\"Error/1.jpg\"></div>",
                                   "<div class=\"container\"><img src=\"Error/1.jpg\"></div>",
                                   "<div class=\"container\"><img src=\"Error/1.jpg\"></div>",
                                   "<div class=\"container\"><img src=\"Error/1.jpg\"></div>",
                                   "<div class=\"container\"><img src=\"Error/1.jpg\"></div>");

                                   echo($divResponsive);
                                   foreach($imagenescontainers as &$valor)
                                   {
                                     echo($valor);
                                   }
                                   echo($divResponsive2);

}
function Contact_()
{
   $Form="<form id=\"Login\" action=\"mail.php\" method=\"POST\">";
   $titleForm="<h2>Contact</h2>";
     $input=array();
     array_push($input,"<input type=\"email\"placeholder=\"Email\" name=\"para\">",
                     "<input type=\"txt\"placeholder=\"Titulo\" name=\"titulo\">",
                     "<input type=\"txt\"placeholder=\"Mensaje\" name=\"mensaje\">",
                     "<input type=\"submit\" value=\"Submit\">");                    
                $Form2="</form>";

                echo "".$Form.$titleForm.$input[0].$input[1].$input[2].$input[3].$Form2;
}
function Singin_()
{
    $Form="<form id=\"Login\" action=\"login.php\" method=\"POST\">";
     $titleForm="<h2>Login</h2>";
     $input=array();
     array_push($input,"<input type=\"txt\" placeholder=\"&#9919; Usuario\" name=\"user\">",
                     "<input type=\"txt\"placeholder=\"&#9919; Clave\" name=\"pass\">",
                     "<dd><a href=\"index.php?page=Login\">Login</a><span class=\"spacebar\"></span> or<span class=\"spacebar\"></span> <a href=\"index.php?page=register\">Register</a><span class=\"spacebar\"></span><a href=\"index.php?page=Fogot\">Forgot<span class=\"spacebar\"></span>Password</a>?</dd>",
                     "<input type=\"submit\" value=\"Submit\">");
                     
                $Form2="</form>";

                echo "".$Form.$titleForm.$input[0].$input[1].$input[2].$input[3].$Form2;
}
function Singup_()
{
   $Form="<form id=\"Login\" action=\"register.php\" method=\"POST\">";
     $titleForm="<h2>Register</h2>";
     $input=array();
     array_push($input,"<input type=\"txt\"placeholder=\"Usuario\" name=\"user\">",
                     "<input type=\"txt\"placeholder=\"Clave\" name=\"pass\">",
                     "<input type=\"txt\"placeholder=\"PrimerNombre\" name=\"fname\">",
                     "<input type=\"txt\"placeholder=\"SegundoNombre\" name=\"sname\">",
                     "<input type=\"txt\"placeholder=\"ApellidoPaterno\" name=\"ap\">",
                     "<input type=\"txt\"placeholder=\"ApellidoMaterno\" name=\"am\">",
                     "<input type=\"email\"placeholder=\"CorreoElectronico\" name=\"email\">",
                     "<input type=\"number\"placeholder=\"NumerodeTelefono\" name=\"phone\">",
                     "<input type=\"submit\" value=\"Submit\">");
                     
                $Form2="</form>";

                echo "".$Form.$titleForm.$input[0].$input[1].$input[2].$input[3].$input[4].$input[5].$input[6].$input[7].$input[8].$Form2;  
}



//MainC

//Head



/**/
function DHTML_MainC($_Goto)
{
switch ($_Goto)
{
    //Individual case of EverySingle page home
    case "Home" :
    case "home" :
    {
      Home_();
     break;
    }
    //Individual case of EverySingle page about us
    case "Aboutus" :
    case "aboutus" :
    {
        Aboutus_();
     break;
    }
    //Individual case of EverySingle page galery
    case "Galery" :
    case "galery" :
    {
       
        Galery_();
     break;
    }
    //Individual case of EverySingle page contac
    case "Contact" :
    case "contact" :
    {
        Contact_();
     break;
    }
    //Individual case of EverySingle page singin
    case "Login" :
    case "login" :
    {
        Singin_();
     break;
    }
    //Individual case of EverySingle page singup
    case "Register" :
    case "register" :
    {
        Singup_();
     break;
    }
    case "Fogot" :
    case "fogot" :
    {
      
     break;
    }
    //Default case where not is home
    default:
    {
      
        header("Location: Error404.php");
        exit();
     break;
    }
}

}
?>
<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <?php
        if($Goto=="Galery"||$Goto=="galery")
        {
          echo("<link rel=\"stylesheet\" type=\"text/css\" href=\"GaleryResponsive.css\">");
        }
        ?>
    </head>
    <body>
        <div id="warper">
            
            <div id="pc">
<!--header-->            
              <div id="header">
              <div class="clearfix" id="hfix">
                  <ul id="navbar">
                      <li><br><a href="index.php?page=Home">Home</a></li>
                      <li><br><a href="index.php?page=Aboutus">Aboutus</a></li>
                      <li><br><a href="index.php?page=Galery">Galery</a></li>
                      <li><br><a href="index.php?page=Contact">Contact</a></li>
                      <li><br><a href="index.php?page=Login">Membership</a></li>
                      
                  </ul>
                  </div>
               
              </div>
<!--header-->
<!--mainc-->
              <div id="mainc">
              <div class="clearfix" id="mfix">                    
                 <?php
                  DHTML_MainC($Goto);
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
                                 <li><a href="index.php?page=Home">Home</a></li>
                                 <li><a href="index.php?page=Aboutus">Aboutus</a></li>
                                 <li><a href="index.php?page=Galery">Galery</a></li>
                                 <li><a href="index.php?page=Contact">Contact</a></li>
                                 
                            </ul> 
                          </div>
                          <div class="sitemap">
                            <ul>
                                 <li><a href="index.php?page=Dresscode">Dress Code</a></li>
                                 <li><a href="index.php?page=Reservation">Reservation</a></li>
                                 
                                 
                            </ul>
                          </div>
                          <div class="sitemap">
                            <ul>
                                 <li><a href="index.php?page=GDL">Guadalajara</a></li>
                                 <li><a href="index.php?page=TPC">Tepic</a></li>
                                 <li><a href="index.php?page=AGC">Aguascalientes</a></li>
                                 <li><a href="index.php?page=Nvj">Navojoa</a></li>
                                 
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