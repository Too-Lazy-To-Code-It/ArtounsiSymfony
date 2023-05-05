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

/* demandetravail/chercheroffre.html.twig */
class __TwigTemplate_c252aa330a954551fdb33ed3b68a8ade extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demandetravail/chercheroffre.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demandetravail/chercheroffre.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <title>Liberty Template - Create NFT Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

     <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/card.css"), "html", null, true);
        echo "\">

    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.css"), "html", null, true);
        echo "\" />
       <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/cardscss.css"), "html", null, true);
        echo "\">
     <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js\"></script>
</head>

<body>
";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 373
        echo "</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "    <!-- ***** Preloader Start ***** -->
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
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/logoart.png"), "html", null, true);
        echo "\"  height=\"50\" width=\"30\"  alt=\"\">
       
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class=\"nav\">
                            <div class=\"dropdown\">
                                <li><a>Art</a></li>
                                <div class=\"dropdown-content\">
                                    <li><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_explore");
        echo "\">Explore</a></li>
                                    <li><a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\">Blog</a></li>
                                    <li><a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        echo "\">Studios</a></li>
                                    <li><a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\">Create Yours</a></li>

                                </div>
                            </div>
                            <li><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">Offres</a></li>
                            <li><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
        echo "\">Demandes</a></li>
                            <li><a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                            <li><a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_show", ["idpanier" => "1"]);
        echo "\">Panier</a></li>
                            <li><a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\">Challenges</a></li>
                            <li><a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\">Tutoriels</a></li>
                            ";
        // line 76
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "type", [], "any", false, false, false, 76) == "Admin")) {
            // line 77
            echo "                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_studiodashboard");
            echo "\">dashboard </a></li>
                            ";
        }
        // line 79
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 79, $this->source); })()), "idUser", [], "any", false, false, false, 79) == null)) {
            // line 80
            echo "                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_login");
            echo "\">Log In</a></li>
                            ";
        } else {
            // line 82
            echo "                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_logout");
            echo "\">Logout</a></li>
                            ";
        }
        // line 84
        echo "                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
<style>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropbtn {

        padding: 12px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        z-index: 1;
    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu:hover .dropdown-submenu-content {
        display: block;
    }

    .dropdown-submenu-content {
        display: none;
        position: absolute;
        left: 100%;
        top: 0;
        margin-top: -1px;
    }

    .dropdown-content a {

        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {

    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {

    }
</style>

    <div class=\"page-heading normal-space\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h6>Artounsi</h6>
                    <h2>Créer votre offre.</h2>
                    <span>Acceuil >Mes demandes > <a href=\"#\">chercher offre</a></span>
                    <div class=\"buttons\">
                        <div class=\"main-button\">
                            <a href=\"";
        // line 160
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">tous les demandes</a>
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
                    <div class=\"section-heading\">
                        <div class=\"line-dec\"></div>
                        <h2>resultat <em>de</em> recherche</h2>
                    </div>
                </div>
               <div class=\"item-details-page\">
        <div class=\"container\">
            <div class=\"row\">

             
                    <div class=\"col-lg-12\">
          <form id=\"contact\" action=\"\" method=\"post\">
            <div class=\"row\">
           
        <div class=\"crudbtns\">
              <div class=\"col-lg-6\">
                <fieldset>
                  <label for=\"price\">chercher les offres d'emplois </label>
                  <input type=\"text\"name=\"niveau\" id=\"price\" placeholder=\"chercher\" autocomplete=\"on\">
                </fieldset>
              </div>
             
            
             
                <fieldset>
                    <button type=\"submit\" id=\"form-submit\" class=\"dizebtn\">chercher</button>
                      <a href=\"";
        // line 200
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_offressimilaires");
        echo "\" class=\"dizebtn\">Demandes similaires</a>
                </fieldset>
             
            
            </div>
          </form>
        </div>

                  
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
                              
                           
                    ";
        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offretravailbyid"]) || array_key_exists("offretravailbyid", $context) ? $context["offretravailbyid"] : (function () { throw new RuntimeError('Variable "offretravailbyid" does not exist.', 229, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["offretravail"]) {
            // line 230
            echo "\t\t<article class=\"postcard dark blue\">
\t\t\t<a class=\"postcard__img_link\" href=\"#\">
\t\t\t\t<img class=\"postcard__img\" src=\"https://picsum.photos/1000/1000\" alt=\"Image Title\" />
\t\t\t</a>
\t\t\t<div class=\"postcard__text\">
\t\t\t\t<h1 class=\"postcard__title blue\"><a>";
            // line 235
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "titreoffre", [], "any", false, false, false, 235), "html", null, true);
            echo "</a></h1>
\t\t\t\t<div class=\"postcard__subtitle small\">
\t\t\t\t\t<time datetime=\"2020-05-25 12:00:00\">
\t\t\t\t\t\t<i class=\"fas fa-calendar-alt mr-2\"></i>";
            // line 238
            ((twig_get_attribute($this->env, $this->source, $context["offretravail"], "dateajoutoofre", [], "any", false, false, false, 238)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "dateajoutoofre", [], "any", false, false, false, 238), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "
\t\t\t\t\t</time>
\t\t\t\t</div>
\t\t\t\t<div class=\"postcard__bar\"></div>
\t\t\t\t<div class=\"postcard__preview-txt\">";
            // line 242
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "descriptionoffre", [], "any", false, false, false, 242), "html", null, true);
            echo "</div>
\t\t\t\t<ul class=\"postcard__tagbox\">
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-tag mr-2\"></i>";
            // line 244
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "categorieoffre", [], "any", false, false, false, 244), "html", null, true);
            echo "</li>
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-clock mr-2\"></i>";
            // line 245
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "typeoffre", [], "any", false, false, false, 245), "html", null, true);
            echo "</li>
                    \t<li class=\"tag__item\"><i class=\"fas fa-clock mr-2\"></i>";
            // line 246
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "localisationoffre", [], "any", false, false, false, 246), "html", null, true);
            echo "</li>
\t\t";
            // line 247
            if (twig_get_attribute($this->env, $this->source, (isset($context["postulerStatusArray"]) || array_key_exists("postulerStatusArray", $context) ? $context["postulerStatusArray"] : (function () { throw new RuntimeError('Variable "postulerStatusArray" does not exist.', 247, $this->source); })()), $context["key"], [], "array", false, false, false, 247)) {
                echo "\t\t\t
    <li class=\"tag__item play blue\">
       
        <td> <button class=\"id\"data-id=\"";
                // line 250
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "idoffre", [], "any", false, false, false, 250), "html", null, true);
                echo " \">
                                       <i class=\"icon_close\">postuler</i>
                                   </button></td>
    </li>
";
            } else {
                // line 255
                echo "    <span class=\"text-muted\">Déjà postulé</span>
";
            }
            // line 257
            echo "
                   

\t\t\t\t</ul>
\t\t\t</div>
\t\t</article>
\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['offretravail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        echo "   
         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <script>
\$(document).ready(function() {
  \$('.id').click(function(e) {
    e.preventDefault(); // prevent default button behavior
    var id = \$(this).data('id'); // get the ID from the data-id attribute
   
    var btn = \$(this); // store the button element for later use
    \$.ajax({
      url: \"";
        // line 280
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_mail", ["idOffre" => "PLACEHOLDER"]);
        echo "\".replace(\"PLACEHOLDER\", id),
      method: 'GET',
      success: function(response) {
        btn.text(\"Email envoyé avec succès\").attr('data-id', 'Email envoyé avec succès').prop('disabled', true); // update the button text, data-id attribute, and disable the button
        btn.replaceWith('<span class=\"success-message\">Email envoyé avec succès</span>'); // replace the button with a span element containing the success message
        \$('.success-message').css('color', 'green').css('text-align', 'center'); // change the color of the success message and center it
        Notification.requestPermission(function() { // request permission to show notifications
          var notification = new Notification('Succès', { // create a new notification
            body: 'Votre email a été envoyé avec succès!', // set the notification body
         sound: 'https://www.soundjay.com/button/sounds/beep-01a.mp3'
 // specify the notification sound
          });
        });
      },
      error: function() {
        alert('Vous avez déjà postulé à cette offre!!');
      }
    });
  });
});
</script>



<style>.popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
}

.popup-message {
    background-color: #77dd77;
    padding: 20px;
    border-radius: 5px;
    text-align: center;
}

.popup-message.success {
    background-color: #77dd77;
    color: white;
}
</style>
";
        // line 329
        $this->displayBlock('javascripts', $context, $blocks);
        // line 351
        echo "    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright © 2022 <a href=\"#\">Liberty</a> NFT Marketplace Co., Ltd. All rights reserved. &nbsp;&nbsp; Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://templatemo.com"), "html", null, true);
        echo "\" target=\"_blank\">TemplateMo</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 329
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 330
        echo "    <script>
        \$(document).ready(function() {
            \$('#submitBtn').click(function() {
                // show the success popup
                var popup = \$('<div/>').attr({
                    'class': 'popup',
                    'id': 'popup'
                }).appendTo('body');
                \$('<div/>').attr({
                    'class': 'popup-message success',
                    'id': 'popup-message'
                }).text('Success! Your email has been sent.').appendTo(popup);
                
                // redirect after 2 seconds
                setTimeout(function() {
                    window.location.href = \"";
        // line 345
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_travail_chercheroffre");
        echo "\";
                }, 2000);
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "demandetravail/chercheroffre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  608 => 345,  591 => 330,  581 => 329,  569 => 371,  565 => 370,  561 => 369,  556 => 367,  552 => 366,  547 => 364,  543 => 363,  532 => 355,  526 => 351,  524 => 329,  472 => 280,  454 => 264,  442 => 257,  438 => 255,  430 => 250,  424 => 247,  420 => 246,  416 => 245,  412 => 244,  407 => 242,  400 => 238,  394 => 235,  387 => 230,  383 => 229,  351 => 200,  308 => 160,  230 => 84,  224 => 82,  218 => 80,  215 => 79,  209 => 77,  207 => 76,  203 => 75,  199 => 74,  195 => 73,  191 => 72,  187 => 71,  183 => 70,  176 => 66,  172 => 65,  168 => 64,  164 => 63,  152 => 54,  129 => 33,  119 => 32,  107 => 373,  105 => 32,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  70 => 18,  65 => 16,  57 => 11,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"{{asset('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap')}}\" rel=\"stylesheet\">

    <title>Liberty Template - Create NFT Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{asset('vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">

     <link rel=\"stylesheet\" href=\"{{asset('assets/card.css')}}\">

    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/fontawesome.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/templatemo-liberty-market.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/owl.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/animate.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('https://unpkg.com/swiper@7/swiper-bundle.min.css')}}\" />
       <link rel=\"stylesheet\" href=\"{{asset('assets/cardscss.css')}}\">
     <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js\"></script>
</head>

<body>
{% block body %}
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
                            <img src=\"{{asset('assets2/img/logoart.png') }}\"  height=\"50\" width=\"30\"  alt=\"\">
       
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class=\"nav\">
                            <div class=\"dropdown\">
                                <li><a>Art</a></li>
                                <div class=\"dropdown-content\">
                                    <li><a href=\"{{ path('app_explore') }}\">Explore</a></li>
                                    <li><a href=\"{{ path('app_blog') }}\">Blog</a></li>
                                    <li><a href=\"{{ path('app_map') }}\">Studios</a></li>
                                    <li><a href=\"{{ path('app_post_new') }}\">Create Yours</a></li>

                                </div>
                            </div>
                            <li><a href=\"{{ path('app_offretravail_index') }}\">Offres</a></li>
                            <li><a href=\"{{ path('app_demandetravail_index') }}\">Demandes</a></li>
                            <li><a href=\"{{ path('app_produits_index') }}\">Shop</a></li>
                            <li><a href=\"{{ path('app_panier_show' , {'idpanier': '1'}) }}\">Panier</a></li>
                            <li><a href=\"{{ path('app_challenge_index') }}\">Challenges</a></li>
                            <li><a href=\"{{ path('app_tutoriel_index') }}\">Tutoriels</a></li>
                            {%if(user.type=='Admin') %}
                                <li><a href=\"{{ path('app_dashboard_studiodashboard') }}\">dashboard </a></li>
                            {% endif %}
                            {% if(user.idUser==null) %}
                                <li><a href=\"{{ path('app_allusers_login') }}\">Log In</a></li>
                            {% else %}
                                <li><a href=\"{{ path('app_allusers_logout') }}\">Logout</a></li>
                            {% endif %}
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
<style>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropbtn {

        padding: 12px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        z-index: 1;
    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu:hover .dropdown-submenu-content {
        display: block;
    }

    .dropdown-submenu-content {
        display: none;
        position: absolute;
        left: 100%;
        top: 0;
        margin-top: -1px;
    }

    .dropdown-content a {

        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {

    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {

    }
</style>

    <div class=\"page-heading normal-space\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h6>Artounsi</h6>
                    <h2>Créer votre offre.</h2>
                    <span>Acceuil >Mes demandes > <a href=\"#\">chercher offre</a></span>
                    <div class=\"buttons\">
                        <div class=\"main-button\">
                            <a href=\"{{ path('app_offretravail_index') }}\">tous les demandes</a>
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
                    <div class=\"section-heading\">
                        <div class=\"line-dec\"></div>
                        <h2>resultat <em>de</em> recherche</h2>
                    </div>
                </div>
               <div class=\"item-details-page\">
        <div class=\"container\">
            <div class=\"row\">

             
                    <div class=\"col-lg-12\">
          <form id=\"contact\" action=\"\" method=\"post\">
            <div class=\"row\">
           
        <div class=\"crudbtns\">
              <div class=\"col-lg-6\">
                <fieldset>
                  <label for=\"price\">chercher les offres d'emplois </label>
                  <input type=\"text\"name=\"niveau\" id=\"price\" placeholder=\"chercher\" autocomplete=\"on\">
                </fieldset>
              </div>
             
            
             
                <fieldset>
                    <button type=\"submit\" id=\"form-submit\" class=\"dizebtn\">chercher</button>
                      <a href=\"{{ path('app_demandetravail_offressimilaires') }}\" class=\"dizebtn\">Demandes similaires</a>
                </fieldset>
             
            
            </div>
          </form>
        </div>

                  
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
                              
                           
                    {% for key, offretravail in  offretravailbyid %}
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
\t\t{% if postulerStatusArray[key] %}\t\t\t
    <li class=\"tag__item play blue\">
       
        <td> <button class=\"id\"data-id=\"{{offretravail.idoffre }} \">
                                       <i class=\"icon_close\">postuler</i>
                                   </button></td>
    </li>
{% else %}
    <span class=\"text-muted\">Déjà postulé</span>
{% endif %}

                   

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

 <script>
\$(document).ready(function() {
  \$('.id').click(function(e) {
    e.preventDefault(); // prevent default button behavior
    var id = \$(this).data('id'); // get the ID from the data-id attribute
   
    var btn = \$(this); // store the button element for later use
    \$.ajax({
      url: \"{{ path('app_demandetravail_mail', {'idOffre': 'PLACEHOLDER'}) }}\".replace(\"PLACEHOLDER\", id),
      method: 'GET',
      success: function(response) {
        btn.text(\"Email envoyé avec succès\").attr('data-id', 'Email envoyé avec succès').prop('disabled', true); // update the button text, data-id attribute, and disable the button
        btn.replaceWith('<span class=\"success-message\">Email envoyé avec succès</span>'); // replace the button with a span element containing the success message
        \$('.success-message').css('color', 'green').css('text-align', 'center'); // change the color of the success message and center it
        Notification.requestPermission(function() { // request permission to show notifications
          var notification = new Notification('Succès', { // create a new notification
            body: 'Votre email a été envoyé avec succès!', // set the notification body
         sound: 'https://www.soundjay.com/button/sounds/beep-01a.mp3'
 // specify the notification sound
          });
        });
      },
      error: function() {
        alert('Vous avez déjà postulé à cette offre!!');
      }
    });
  });
});
</script>



<style>.popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
}

.popup-message {
    background-color: #77dd77;
    padding: 20px;
    border-radius: 5px;
    text-align: center;
}

.popup-message.success {
    background-color: #77dd77;
    color: white;
}
</style>
{% block javascripts %}
    <script>
        \$(document).ready(function() {
            \$('#submitBtn').click(function() {
                // show the success popup
                var popup = \$('<div/>').attr({
                    'class': 'popup',
                    'id': 'popup'
                }).appendTo('body');
                \$('<div/>').attr({
                    'class': 'popup-message success',
                    'id': 'popup-message'
                }).text('Success! Your email has been sent.').appendTo(popup);
                
                // redirect after 2 seconds
                setTimeout(function() {
                    window.location.href = \"{{ path('app_demande_travail_chercheroffre') }}\";
                }, 2000);
            });
        });
    </script>
{% endblock %}
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright © 2022 <a href=\"#\">Liberty</a> NFT Marketplace Co., Ltd. All rights reserved. &nbsp;&nbsp; Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"{{asset('https://templatemo.com')}}\" target=\"_blank\">TemplateMo</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src=\"{{asset('vendor/jquery/jquery.min.js')}}\"></script>
    <script src=\"{{asset('vendor/bootstrap/js/bootstrap.min.js')}}\"></script>

    <script src=\"{{asset('assets/js/isotope.min.js')}}\"></script>
    <script src=\"{{asset('assets/js/owl-carousel.js')}}\"></script>

    <script src=\"{{asset('assets/js/tabs.js')}}\"></script>
    <script src=\"{{asset('assets/js/popup.js')}}\"></script>
    <script src=\"{{asset('assets/js/custom.js')}}\"></script>
    {% endblock %}
</body>

</html>", "demandetravail/chercheroffre.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\demandetravail\\chercheroffre.html.twig");
    }
}
