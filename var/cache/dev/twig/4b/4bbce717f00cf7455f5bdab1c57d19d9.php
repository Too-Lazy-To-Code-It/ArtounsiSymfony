<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* offretravail/index.html.twig */
class __TwigTemplate_13c3ac3017e49dfa31f3ba6df591f76b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offretravail/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offretravail/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
 <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
 ";
        // line 9
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 26
        echo "
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js\"></script>

 <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"), "html", null, true);
        echo "\" integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+2QLdMotoRxT1Pi6+nNJWv+UomT6P5\" crossorigin=\"anonymous\">
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" />
   <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/swiper-bundle.min.css"), "html", null, true);
        echo "\">
     <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVpDMNlcbiIqYQUf5t8WvVZi0woX1uuK59j5M1Jw21t0\" crossorigin=\"anonymous\">

     <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css.css"), "html", null, true);
        echo "\">
     
    <title>Liberty Template - NFT Item Detail Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/templatemo-cyborg-gaming.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.css"), "html", null, true);
        echo "\" />
    <!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
  <!-- Google Font -->
    <link href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"), "html", null, true);
        echo "\"rel=\"stylesheet\">

   
    <link rel=\"stylesheet\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css\" type=\"text/css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css\" type=\"text/css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/elegant-icons.css\" type=\"text/css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css\" type=\"text/css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css\" type=\"text/css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slicknav.min.css\" type=\"text/css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css\" type=\"text/css"), "html", null, true);
        echo "\">
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id=\"js-preloader\" class=\"js-preloader\">
        <div class=\"preloader-inner\">
            <span class=\"dot\"></span>
            <div class=\"dots\">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class=\"header-area header-sticky\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <nav class=\"main-nav\">
                        <!-- ***** Logo Start ***** -->
                        <a href=\"index.html\" class=\"logo\">
                            <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/logoart.png"), "html", null, true);
        echo "\"  height=\"50\" width=\"30\" alt=\"\">
               
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                         <ul class=\"nav\">
                        <li><a href=\"#\" class=\"active\">Acceuil</a></li>
                       
                        <li><a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">Offres d'emplois</a></li>
                        <li><a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
        echo "\">Demandes d'emplois</a></li>
                       <li class=\"nav-item dropdown\">
 <a id=\"notification-dropdown\" class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
            <i class=\"bi bi-bell\"></i>
          ";
        // line 109
        if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 109, $this->source); })()) > 0)) {
            // line 110
            echo "  <span id=\"count\" class=\"badge bg-primary badge-number\">";
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 110, $this->source); })()), "html", null, true);
            echo "</span>
";
        }
        // line 112
        echo "
          </a>
                         
                    <!-- End Notification Icon -->

                       <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
                       

                       ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 120, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["notif"]) {
            // line 121
            echo "             

                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"notification-item\">
                        
                            <i class=\"bi bi-info-circle text-primary\"></i>
                            <div>
                                <h4 class=\"name\"> ";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notif"], "nomartiste", [], "any", false, false, false, 131), "html", null, true);
            echo "</h4>
                                <p class=\"post\"> postuler a l'offre ";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notif"], "titreoffre", [], "any", false, false, false, 132), "html", null, true);
            echo "</p>
                                <p class=\"post\">";
            // line 133
            ((twig_get_attribute($this->env, $this->source, $context["notif"], "datepostuler", [], "any", false, false, false, 133)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notif"], "datepostuler", [], "any", false, false, false, 133), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</p>
                               
                            </div>
                        </li>

                       
             \t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "
                    </ul>
                    <!-- End Notification Dropdown Items -->

                </li>
                      <li><a href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_studiodashboard");
        echo "\">dashboard </a></li>

                       
                         
                    </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
   
     <script>
    
    \$(document).ready(function() {
        // Select the notification dropdown
        var dropdown = \$('#notification-dropdown');
        
        // Add a click event listener to the notification dropdown
        dropdown.on('click', function() {
            // Send an AJAX request to the Symfony controller to update the entities
            \$.ajax({
          url: \"";
        // line 169
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_notiftrue");
        echo "\",
                type: \"POST\",
                success: function(response) {
                    // Update the notification count badge
                    var badge = \$('#count');
                    badge.text(\"0\");
                    consol.log('tmchi');
                   
                },
                error: function() {
                    // Handle errors
                }
            });
        });
    });
</script>

  <script>
  function addHoverEffect() {
    \$.ajax({
        url: 'your-server-url-here',
        success: function(data) {
            // Loop through the notification items and add the hover effect
            \$('.notification-item').each(function() {
                \$(this).hover(
                    function() {
                        \$(this).addClass('hovered');
                    },
                    function() {
                        \$(this).removeClass('hovered');
                    }
                );
            });
        }
    });
}
\$(document).ready(function() {
    addHoverEffect();
});

  </script>

<script>
function updateNotifications() {
  \$.ajax({
    url: '";
        // line 214
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "',
    type: 'GET',
    success: function(html) {
      const parser = new DOMParser();
      const doc = parser.parseFromString(html, 'text/html');
      const count = doc.querySelector('#count').textContent;
      document.querySelector('#count').textContent = count;

      const notifications = doc.querySelectorAll('.notification-item');
      const notificationsContainer = document.querySelector('.notifications');
      notificationsContainer.innerHTML = '';

      notifications.forEach((notification) => {
        notificationsContainer.appendChild(notification);
      });
    },
    error: function(error) {
      console.error(error);
    }
  });
}

setInterval(updateNotifications, 2000); // Call every 2 seconds
</script>


<!-- The Modal -->
<div class=\"modal\" id=\"myModal\">
  <div class=\"modal-dialog modal-fullscreen\">
    <div class=\"modal-content\">

      <!-- Modal Header -->
      <div class=\"modal-header\">
        <h4 class=\"modal-title\">Modal Heading</h4>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>

      <!-- Modal body -->
      <div class=\"modal-body\">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Close</button>
      </div>

    </div>
  </div>
</div>
    </header>
    <!-- ***** Header Area End ***** -->

     <div class=\"page-heading normal-space\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h6>Les offres d'emplois</h6>
                    <h2>Consulter tous les offres</h2>
                    <span>Acceuil > <a href=\"#\">Offre d'emplois</a></span>
                    <div class=\"buttons\">
                        <div class=\"main-button\">
                            <a href=\"";
        // line 276
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_chercherdemande");
        echo "\">Cherchers demandes</a>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
 <style>
 .notification-item:hover {
    background-color: #B0E0E6;
    color: #000000;
}

 .notification-item {
  background-color: white; /* grey color */
}
 
 
 .section-title {
  border: 1px solid #7453fc; /* add border to the section */
   border-radius: 20px; /* set the same radius for all corners */
  padding: 10px; /* add padding to the section */
  background-color:#7453fc;
  display: inline-block; /* make the section inline-block so it wraps around its content */
}

.section-title {
  margin: 0; /* remove margin from the title */
}

.link-style {
  text-decoration: none; /* remove underline from the link */
  color: white; /* set link color */
  font-weight: bold; /* make the link bold */
  margin-left: 10px; /* add margin to the left of the link */
}
.notifications {
    max-height: 300px;
    overflow-y: auto;
}
.name{color:black;
*  font-size: 20px;}
.post{color:grey;
  font-size: 15px;}
.dropdown-divider {
  height: 1px;
  margin: 0.5rem 0;
  overflow: hidden;
  background-color: #e9ecef;
}

</style>

 <div class=\"item-details-page\">
        <div class=\"container\">
            <div class=\"row\">
               
              <div class=\"col-lg-6\">
                               <div class=\"mini-heading\">
  <h4 class=\"section-title\">Mes offres</h4></div>
  
  <a class=\"link-style\" href=\"";
        // line 338
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_offres");
        echo "\"><u>Gérer mes offres</u></a>
 
                            </div>
                          
    
    <div class=\"featured-explore\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <div class=\"owl-features owl-carousel\">
           
\t
        
                  ";
        // line 351
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offretravailbyid"]) || array_key_exists("offretravailbyid", $context) ? $context["offretravailbyid"] : (function () { throw new RuntimeError('Variable "offretravailbyid" does not exist.', 351, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["offretravail"]) {
            // line 352
            echo "             
                    
\t

\t\t<article class=\"postcardcar dark blue\">
\t\t\t<a class=\"postcardcar__img_link\" href=\"#\">
\t\t\t\t<img class=\"postcardcar__img\" src=\"https://picsum.photos/1000/1000\"  alt=\"Image Title\" />
\t\t\t</a>
\t\t\t<div class=\"postcardcar__text\">
\t\t\t\t<h1 class=\"postcardcar__title blue\"><a>";
            // line 361
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "titreoffre", [], "any", false, false, false, 361), "html", null, true);
            echo "</a></h1>
\t\t\t\t<div class=\"postcardcar__subtitle small\">
\t\t\t\t\t<time datetime=\"2020-05-25 12:00:00\">
\t\t\t\t\t\t<i class=\"fas fa-calendar-alt mr-2\"></i>";
            // line 364
            ((twig_get_attribute($this->env, $this->source, $context["offretravail"], "dateajoutoofre", [], "any", false, false, false, 364)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "dateajoutoofre", [], "any", false, false, false, 364), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "
\t\t\t\t\t</time>
\t\t\t\t</div>
\t\t\t\t<div class=\"postcardcar__bar\"></div>
\t\t\t\t<div class=\"postcardcar__preview-txt\">";
            // line 368
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "descriptionoffre", [], "any", false, false, false, 368), "html", null, true);
            echo "</div>
\t\t\t\t<ul class=\"postcardcar__tagbox\">
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-tag mr-2\"></i>";
            // line 370
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "categorieoffre", [], "any", false, false, false, 370), "html", null, true);
            echo "</li>
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-clock mr-2\"></i>";
            // line 371
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "typeoffre", [], "any", false, false, false, 371), "html", null, true);
            echo "</li>
                    \t

                                
                        
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</article>


                
             \t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offretravail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 384
        echo "            </div>
         
        </div>
      </div>
    </div>
  </div>

  </div>
          
    </div>
 </div>

  <div class=\"item-details-page\">
        <div class=\"container\">
            <div class=\"row\">


                  
                <div class=\"col-lg-12\">
                    <div class=\"current-bid\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"mini-heading\">
                                    <h4>Tous les offres</h4>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <fieldset>
                                    <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\" id=\"chooseCategory\" onchange=\"this.form.click()\">
                      <option selected>Sort By: Latest</option>
                      <option type=\"checkbox\" name=\"option1\" value=\"old\">Sort By: Oldest</option>
                      <option value=\"low\">Sort By: Lowest</option>
                      <option value=\"high\">Sort By: Highest</option>
                  </select>
                                </fieldset>
                            </div>
                              
                               
<section class=\"dark\">

\t<div class=\"containercard py-4\">
\t
";
        // line 426
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offretravails"]) || array_key_exists("offretravails", $context) ? $context["offretravails"] : (function () { throw new RuntimeError('Variable "offretravails" does not exist.', 426, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["offretravail"]) {
            // line 427
            echo "\t\t<article class=\"postcard dark blue\">
\t\t\t<a class=\"postcard__img_link\" href=\"#\">
\t\t\t\t<img class=\"postcard__img\" src=\"https://picsum.photos/1000/1000\" alt=\"Image Title\" />
\t\t\t</a>
\t\t\t<div class=\"postcard__text\">
\t\t\t\t<h1 class=\"postcard__title blue\"><a>";
            // line 432
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "titreoffre", [], "any", false, false, false, 432), "html", null, true);
            echo "</a></h1>
\t\t\t\t<div class=\"postcard__subtitle small\">
\t\t\t\t\t<time datetime=\"2020-05-25 12:00:00\">
\t\t\t\t\t\t<i class=\"fas fa-calendar-alt mr-2\"></i>";
            // line 435
            ((twig_get_attribute($this->env, $this->source, $context["offretravail"], "dateajoutoofre", [], "any", false, false, false, 435)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "dateajoutoofre", [], "any", false, false, false, 435), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "
\t\t\t\t\t</time>
\t\t\t\t</div>
\t\t\t\t<div class=\"postcard__bar\"></div>
\t\t\t\t<div class=\"postcard__preview-txt\">";
            // line 439
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "descriptionoffre", [], "any", false, false, false, 439), "html", null, true);
            echo "</div>
\t\t\t\t<ul class=\"postcard__tagbox\">
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-tag mr-2\"></i>";
            // line 441
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "categorieoffre", [], "any", false, false, false, 441), "html", null, true);
            echo "</li>
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-clock mr-2\"></i>";
            // line 442
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "typeoffre", [], "any", false, false, false, 442), "html", null, true);
            echo "</li>
                    \t<li class=\"tag__item\"><i class=\"fas fa-clock mr-2\"></i>";
            // line 443
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "localisationoffre", [], "any", false, false, false, 443), "html", null, true);
            echo "</li>
\t\t\t\t
                        
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</article>
\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offretravail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 451
        echo "\t</div>
    <div>

";
        // line 454
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env,         // line 455
(isset($context["offretravails"]) || array_key_exists("offretravails", $context) ? $context["offretravails"] : (function () { throw new RuntimeError('Variable "offretravails" does not exist.', 455, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", ["queryParam1" => "param1 value", "queryParam2" => "param2 value"], ["align" => "center"]);
        // line 465
        echo "
</div>  
</section>
                           
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright © 2022 <a href=\"#\">Liberty</a> NFT Marketplace Co., Ltd. All rights reserved. &nbsp;&nbsp; Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://templatemo.com"), "html", null, true);
        echo "\" target=\"_blank\">TemplateMo</a></p>
                </div>
            </div>
        </div>
    </footer>

   

    text-alig
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
      <script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"assets/js/owl-carousel.js')}}\"></script>

    <script src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
    
<script src=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.1.1/swiper-bundle.min.js"), "html", null, true);
        echo "\" integrity=\"sha512-J0i98QZsJc12MkNEyDbinrKKoe7Jiw0rtryAXBesZrVwRkaqgP9QNCPyo5sMZ2jfiJQb+9RIE4I3xNl8fFqQIA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <!-- JavaScript -->
      <!--Uncomment this line-->
       <script src=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index.js"), "html", null, true);
        echo "\"></script> 
       <script src=\"";
        // line 508
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/mixitup.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 512
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/test.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 513
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/masonry.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.slicknav.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 515
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 520
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
  ";
        // line 521
        $this->displayBlock('javascripts', $context, $blocks);
        // line 543
        echo "
    <script src=\"";
        // line 544
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 10
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.css"), "html", null, true);
        echo "\"/>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 521
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 523
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
 
";
        // line 526
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

";
        // line 529
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>

";
        // line 532
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>

";
        // line 535
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>

";
        // line 538
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>

";
        // line 541
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "offretravail/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  925 => 541,  919 => 538,  913 => 535,  907 => 532,  901 => 529,  895 => 526,  889 => 523,  879 => 521,  867 => 24,  863 => 23,  859 => 22,  855 => 21,  851 => 20,  846 => 18,  842 => 17,  838 => 16,  834 => 15,  830 => 14,  826 => 13,  822 => 12,  818 => 11,  813 => 10,  803 => 9,  788 => 544,  785 => 543,  783 => 521,  779 => 520,  774 => 518,  770 => 517,  766 => 516,  762 => 515,  758 => 514,  754 => 513,  750 => 512,  746 => 511,  742 => 510,  738 => 509,  734 => 508,  730 => 507,  724 => 504,  719 => 502,  715 => 501,  711 => 500,  705 => 497,  700 => 495,  696 => 494,  682 => 483,  662 => 465,  660 => 455,  659 => 454,  654 => 451,  640 => 443,  636 => 442,  632 => 441,  627 => 439,  620 => 435,  614 => 432,  607 => 427,  603 => 426,  559 => 384,  540 => 371,  536 => 370,  531 => 368,  524 => 364,  518 => 361,  507 => 352,  503 => 351,  487 => 338,  422 => 276,  357 => 214,  309 => 169,  282 => 145,  275 => 140,  262 => 133,  258 => 132,  254 => 131,  242 => 121,  238 => 120,  228 => 112,  222 => 110,  220 => 109,  213 => 105,  209 => 104,  198 => 96,  169 => 70,  165 => 69,  161 => 68,  157 => 67,  153 => 66,  149 => 65,  145 => 64,  139 => 61,  135 => 60,  123 => 51,  119 => 50,  115 => 49,  111 => 48,  107 => 47,  103 => 46,  99 => 45,  93 => 42,  85 => 37,  80 => 35,  76 => 34,  72 => 33,  67 => 31,  63 => 30,  57 => 26,  55 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
 <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
 {% block stylesheet %}
 <link href=\"{{asset('assets2/img/favicon.png') }}\" rel=\"icon\">
    <link href=\"{{asset('assets2/img/apple-touch-icon.png')}}\" rel=\"apple-touch-icon\">
    <link href=\"{{asset('assets2/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets2/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets2/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets2/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets2/vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets2/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets2/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-liberty-market.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('https://unpkg.com/swiper@7/swiper-bundle.min.css') }}\"/>
    {% endblock %}

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js\"></script>

 <link rel=\"stylesheet\" href=\"{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css')}}\" integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+2QLdMotoRxT1Pi6+nNJWv+UomT6P5\" crossorigin=\"anonymous\">
    <link href=\"{{asset('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap')}}\" rel=\"stylesheet\">

<link rel=\"stylesheet\" href=\"{{asset('https://unpkg.com/swiper/swiper-bundle.min.css')}}\" />
   <link rel=\"stylesheet\" href=\"{{asset('assets/swiper-bundle.min.css')}}\">
     <link rel=\"stylesheet\" href=\"{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVpDMNlcbiIqYQUf5t8WvVZi0woX1uuK59j5M1Jw21t0\" crossorigin=\"anonymous\">

     <link rel=\"stylesheet\" href=\"{{asset('assets/css.css')}}\">
     
    <title>Liberty Template - NFT Item Detail Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{asset('vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">

    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/fontawesome.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/fontawesome.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/templatemo-liberty-market.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/owl.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/animate.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('/css/templatemo-cyborg-gaming.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('https://unpkg.com/swiper@7/swiper-bundle.min.css')}}\" />
    <!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
  <!-- Google Font -->
    <link href=\"{{asset('https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap')}}\"rel=\"stylesheet\">

   
    <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.min.css\" type=\"text/css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/font-awesome.min.css\" type=\"text/css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/elegant-icons.css\" type=\"text/css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/owl.carousel.min.css\" type=\"text/css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/magnific-popup.css\" type=\"text/css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/slicknav.min.css\" type=\"text/css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/style.css\" type=\"text/css')}}\">
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id=\"js-preloader\" class=\"js-preloader\">
        <div class=\"preloader-inner\">
            <span class=\"dot\"></span>
            <div class=\"dots\">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class=\"header-area header-sticky\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <nav class=\"main-nav\">
                        <!-- ***** Logo Start ***** -->
                        <a href=\"index.html\" class=\"logo\">
                            <img src=\"{{asset('assets2/img/logoart.png') }}\"  height=\"50\" width=\"30\" alt=\"\">
               
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                         <ul class=\"nav\">
                        <li><a href=\"#\" class=\"active\">Acceuil</a></li>
                       
                        <li><a href=\"{{ path('app_offretravail_index') }}\">Offres d'emplois</a></li>
                        <li><a href=\"{{ path('app_demandetravail_index') }}\">Demandes d'emplois</a></li>
                       <li class=\"nav-item dropdown\">
 <a id=\"notification-dropdown\" class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
            <i class=\"bi bi-bell\"></i>
          {% if count > 0 %}
  <span id=\"count\" class=\"badge bg-primary badge-number\">{{ count }}</span>
{% endif %}

          </a>
                         
                    <!-- End Notification Icon -->

                       <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
                       

                       {% for notif in offre %}
             

                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>

                        <li class=\"notification-item\">
                        
                            <i class=\"bi bi-info-circle text-primary\"></i>
                            <div>
                                <h4 class=\"name\"> {{notif.nomartiste}}</h4>
                                <p class=\"post\"> postuler a l'offre {{notif.titreoffre}}</p>
                                <p class=\"post\">{{ notif.datepostuler ? notif.datepostuler|date('Y-m-d H:i:s') : '' }}</p>
                               
                            </div>
                        </li>

                       
             \t {% endfor %}

                    </ul>
                    <!-- End Notification Dropdown Items -->

                </li>
                      <li><a href=\"{{ path('app_dashboard_studiodashboard') }}\">dashboard </a></li>

                       
                         
                    </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
   
     <script>
    
    \$(document).ready(function() {
        // Select the notification dropdown
        var dropdown = \$('#notification-dropdown');
        
        // Add a click event listener to the notification dropdown
        dropdown.on('click', function() {
            // Send an AJAX request to the Symfony controller to update the entities
            \$.ajax({
          url: \"{{ path('app_offretravail_notiftrue' )}}\",
                type: \"POST\",
                success: function(response) {
                    // Update the notification count badge
                    var badge = \$('#count');
                    badge.text(\"0\");
                    consol.log('tmchi');
                   
                },
                error: function() {
                    // Handle errors
                }
            });
        });
    });
</script>

  <script>
  function addHoverEffect() {
    \$.ajax({
        url: 'your-server-url-here',
        success: function(data) {
            // Loop through the notification items and add the hover effect
            \$('.notification-item').each(function() {
                \$(this).hover(
                    function() {
                        \$(this).addClass('hovered');
                    },
                    function() {
                        \$(this).removeClass('hovered');
                    }
                );
            });
        }
    });
}
\$(document).ready(function() {
    addHoverEffect();
});

  </script>

<script>
function updateNotifications() {
  \$.ajax({
    url: '{{ path('app_offretravail_index') }}',
    type: 'GET',
    success: function(html) {
      const parser = new DOMParser();
      const doc = parser.parseFromString(html, 'text/html');
      const count = doc.querySelector('#count').textContent;
      document.querySelector('#count').textContent = count;

      const notifications = doc.querySelectorAll('.notification-item');
      const notificationsContainer = document.querySelector('.notifications');
      notificationsContainer.innerHTML = '';

      notifications.forEach((notification) => {
        notificationsContainer.appendChild(notification);
      });
    },
    error: function(error) {
      console.error(error);
    }
  });
}

setInterval(updateNotifications, 2000); // Call every 2 seconds
</script>


<!-- The Modal -->
<div class=\"modal\" id=\"myModal\">
  <div class=\"modal-dialog modal-fullscreen\">
    <div class=\"modal-content\">

      <!-- Modal Header -->
      <div class=\"modal-header\">
        <h4 class=\"modal-title\">Modal Heading</h4>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>

      <!-- Modal body -->
      <div class=\"modal-body\">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Close</button>
      </div>

    </div>
  </div>
</div>
    </header>
    <!-- ***** Header Area End ***** -->

     <div class=\"page-heading normal-space\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h6>Les offres d'emplois</h6>
                    <h2>Consulter tous les offres</h2>
                    <span>Acceuil > <a href=\"#\">Offre d'emplois</a></span>
                    <div class=\"buttons\">
                        <div class=\"main-button\">
                            <a href=\"{{ path('app_offretravail_chercherdemande') }}\">Cherchers demandes</a>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
 <style>
 .notification-item:hover {
    background-color: #B0E0E6;
    color: #000000;
}

 .notification-item {
  background-color: white; /* grey color */
}
 
 
 .section-title {
  border: 1px solid #7453fc; /* add border to the section */
   border-radius: 20px; /* set the same radius for all corners */
  padding: 10px; /* add padding to the section */
  background-color:#7453fc;
  display: inline-block; /* make the section inline-block so it wraps around its content */
}

.section-title {
  margin: 0; /* remove margin from the title */
}

.link-style {
  text-decoration: none; /* remove underline from the link */
  color: white; /* set link color */
  font-weight: bold; /* make the link bold */
  margin-left: 10px; /* add margin to the left of the link */
}
.notifications {
    max-height: 300px;
    overflow-y: auto;
}
.name{color:black;
*  font-size: 20px;}
.post{color:grey;
  font-size: 15px;}
.dropdown-divider {
  height: 1px;
  margin: 0.5rem 0;
  overflow: hidden;
  background-color: #e9ecef;
}

</style>

 <div class=\"item-details-page\">
        <div class=\"container\">
            <div class=\"row\">
               
              <div class=\"col-lg-6\">
                               <div class=\"mini-heading\">
  <h4 class=\"section-title\">Mes offres</h4></div>
  
  <a class=\"link-style\" href=\"{{ path('app_dashboard_offres') }}\"><u>Gérer mes offres</u></a>
 
                            </div>
                          
    
    <div class=\"featured-explore\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <div class=\"owl-features owl-carousel\">
           
\t
        
                  {% for offretravail in offretravailbyid %}
             
                    
\t

\t\t<article class=\"postcardcar dark blue\">
\t\t\t<a class=\"postcardcar__img_link\" href=\"#\">
\t\t\t\t<img class=\"postcardcar__img\" src=\"https://picsum.photos/1000/1000\"  alt=\"Image Title\" />
\t\t\t</a>
\t\t\t<div class=\"postcardcar__text\">
\t\t\t\t<h1 class=\"postcardcar__title blue\"><a>{{offretravail.titreoffre}}</a></h1>
\t\t\t\t<div class=\"postcardcar__subtitle small\">
\t\t\t\t\t<time datetime=\"2020-05-25 12:00:00\">
\t\t\t\t\t\t<i class=\"fas fa-calendar-alt mr-2\"></i>{{ offretravail.dateajoutoofre ? offretravail.dateajoutoofre|date('Y-m-d H:i:s') : '' }}
\t\t\t\t\t</time>
\t\t\t\t</div>
\t\t\t\t<div class=\"postcardcar__bar\"></div>
\t\t\t\t<div class=\"postcardcar__preview-txt\">{{offretravail.descriptionoffre}}</div>
\t\t\t\t<ul class=\"postcardcar__tagbox\">
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-tag mr-2\"></i>{{ offretravail.categorieoffre }}</li>
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-clock mr-2\"></i>{{ offretravail.typeoffre }}</li>
                    \t

                                
                        
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</article>


                
             \t {% endfor %}
            </div>
         
        </div>
      </div>
    </div>
  </div>

  </div>
          
    </div>
 </div>

  <div class=\"item-details-page\">
        <div class=\"container\">
            <div class=\"row\">


                  
                <div class=\"col-lg-12\">
                    <div class=\"current-bid\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"mini-heading\">
                                    <h4>Tous les offres</h4>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <fieldset>
                                    <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\" id=\"chooseCategory\" onchange=\"this.form.click()\">
                      <option selected>Sort By: Latest</option>
                      <option type=\"checkbox\" name=\"option1\" value=\"old\">Sort By: Oldest</option>
                      <option value=\"low\">Sort By: Lowest</option>
                      <option value=\"high\">Sort By: Highest</option>
                  </select>
                                </fieldset>
                            </div>
                              
                               
<section class=\"dark\">

\t<div class=\"containercard py-4\">
\t
{% for offretravail in offretravails %}
\t\t<article class=\"postcard dark blue\">
\t\t\t<a class=\"postcard__img_link\" href=\"#\">
\t\t\t\t<img class=\"postcard__img\" src=\"https://picsum.photos/1000/1000\" alt=\"Image Title\" />
\t\t\t</a>
\t\t\t<div class=\"postcard__text\">
\t\t\t\t<h1 class=\"postcard__title blue\"><a>{{offretravail.titreoffre}}</a></h1>
\t\t\t\t<div class=\"postcard__subtitle small\">
\t\t\t\t\t<time datetime=\"2020-05-25 12:00:00\">
\t\t\t\t\t\t<i class=\"fas fa-calendar-alt mr-2\"></i>{{ offretravail.dateajoutoofre ? offretravail.dateajoutoofre|date('Y-m-d H:i:s') : '' }}
\t\t\t\t\t</time>
\t\t\t\t</div>
\t\t\t\t<div class=\"postcard__bar\"></div>
\t\t\t\t<div class=\"postcard__preview-txt\">{{offretravail.descriptionoffre}}</div>
\t\t\t\t<ul class=\"postcard__tagbox\">
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-tag mr-2\"></i>{{ offretravail.categorieoffre }}</li>
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-clock mr-2\"></i>{{ offretravail.typeoffre }}</li>
                    \t<li class=\"tag__item\"><i class=\"fas fa-clock mr-2\"></i>{{ offretravail.localisationoffre }}</li>
\t\t\t\t
                        
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</article>
\t {% endfor %}
\t</div>
    <div>

{{ knp_pagination_render(
           offretravails,
            '@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig',
            {
                'queryParam1': 'param1 value',
                'queryParam2': 'param2 value'
            },
            {
                'align': 'center',
                 
            },
        ) }}
</div>  
</section>
                           
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright © 2022 <a href=\"#\">Liberty</a> NFT Marketplace Co., Ltd. All rights reserved. &nbsp;&nbsp; Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"{{asset('https://templatemo.com')}}\" target=\"_blank\">TemplateMo</a></p>
                </div>
            </div>
        </div>
    </footer>

   

    text-alig
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
      <script src=\"{{asset('vendor/jquery/jquery.min.js')}}\"></script>
    <script src=\"{{asset('vendor/bootstrap/js/bootstrap.min.js')}}\"></script>

    <script src=\"{{asset('assets/js/isotope.min.js')}}\"></script>
    <script src=\"assets/js/owl-carousel.js')}}\"></script>

    <script src=\"{{asset('assets/js/tabs.js')}}\"></script>
    <script src=\"{{asset('assets/js/popup.js')}}\"></script>
    <script src=\"{{asset('assets/js/custom.js')}}\"></script>
    
<script src=\"{{asset('https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.1.1/swiper-bundle.min.js')}}\" integrity=\"sha512-J0i98QZsJc12MkNEyDbinrKKoe7Jiw0rtryAXBesZrVwRkaqgP9QNCPyo5sMZ2jfiJQb+9RIE4I3xNl8fFqQIA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <!-- JavaScript -->
      <!--Uncomment this line-->
       <script src=\"{{asset('assets/index.js')}}\"></script> 
       <script src=\"{{asset('js/jquery-3.3.1.min.js')}}\"></script>
    <script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('js/jquery.magnific-popup.min.js')}}\"></script>
    <script src=\"{{asset('js/mixitup.min.js')}}\"></script>
      <script src=\"{{asset('js/test.js')}}\"></script>
    <script src=\"{{asset('js/masonry.pkgd.min.js')}}\"></script>
    <script src=\"{{asset('js/jquery.slicknav.js')}}\"></script>
    <script src=\"{{asset('js/owl.carousel.min.js')}}\"></script>
    <script src=\"{{asset('js/main.js')}}\"></script>
     <script src=\"{{asset('vendor/jquery/jquery.min.js')}}\"></script>
  <script src=\"{{asset('vendor/bootstrap/js/bootstrap.min.js')}}\"></script>

  <script src=\"{{asset('assets/js/isotope.min.js')}}\"></script>
  {% block javascripts %}
{# <script src=\"vendor/jquery/jquery.min.js\"></script> #}
 <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
 
{# <script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script> #}
<script src=\"{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}\"></script>

{# <script src=\"assets/js/isotope.min.js\"></script> #}
<script src=\"{{ asset('assets/js/isotope.min.js') }}\"></script>

{# <script src=\"assets/js/owl-carousel.js\"></script> #}
<script src=\"{{ asset('assets/js/owl-carousel.js') }}\"></script>

{# <script src=\"assets/js/tabs.js\"></script> #}
<script src=\"{{ asset('assets/js/tabs.js') }}\"></script>

{# <script src=\"assets/js/popup.js\"></script> #}
<script src=\"{{ asset('assets/js/popup.js') }}\"></script>

{# <script src=\"assets/js/custom.js\"></script>  #}
<script src=\"{{ asset('assets/js/custom.js') }}\"></script>
{% endblock %}

    <script src=\"{{asset('https://unpkg.com/swiper/swiper-bundle.min.js')}}\"></script>

</body>

</html>", "offretravail/index.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\offretravail\\index.html.twig");
    }
}
