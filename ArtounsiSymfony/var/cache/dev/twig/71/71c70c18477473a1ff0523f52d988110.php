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
class __TwigTemplate_08c5b6fec059bad3ef19116b5e12f739 extends Template
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
        // line 301
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
                             <li><a href=\"#\" class=\"active\">Acceuil</a></li>
                       
                        <li><a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">Offres d'emplois</a></li>
                        <li><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
        echo "\">Demandes d'emplois</a></li>
                                 
                      <li><a href=\"";
        // line 65
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
    </header>
    <!-- ***** Header Area End ***** -->

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
        // line 88
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
        // line 128
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
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offretravailbyid"]) || array_key_exists("offretravailbyid", $context) ? $context["offretravailbyid"] : (function () { throw new RuntimeError('Variable "offretravailbyid" does not exist.', 157, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["offretravail"]) {
            // line 158
            echo "\t\t<article class=\"postcard dark blue\">
\t\t\t<a class=\"postcard__img_link\" href=\"#\">
\t\t\t\t<img class=\"postcard__img\" src=\"https://picsum.photos/1000/1000\" alt=\"Image Title\" />
\t\t\t</a>
\t\t\t<div class=\"postcard__text\">
\t\t\t\t<h1 class=\"postcard__title blue\"><a>";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "titreoffre", [], "any", false, false, false, 163), "html", null, true);
            echo "</a></h1>
\t\t\t\t<div class=\"postcard__subtitle small\">
\t\t\t\t\t<time datetime=\"2020-05-25 12:00:00\">
\t\t\t\t\t\t<i class=\"fas fa-calendar-alt mr-2\"></i>";
            // line 166
            ((twig_get_attribute($this->env, $this->source, $context["offretravail"], "dateajoutoofre", [], "any", false, false, false, 166)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "dateajoutoofre", [], "any", false, false, false, 166), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "
\t\t\t\t\t</time>
\t\t\t\t</div>
\t\t\t\t<div class=\"postcard__bar\"></div>
\t\t\t\t<div class=\"postcard__preview-txt\">";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "descriptionoffre", [], "any", false, false, false, 170), "html", null, true);
            echo "</div>
\t\t\t\t<ul class=\"postcard__tagbox\">
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-tag mr-2\"></i>";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "categorieoffre", [], "any", false, false, false, 172), "html", null, true);
            echo "</li>
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-clock mr-2\"></i>";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "typeoffre", [], "any", false, false, false, 173), "html", null, true);
            echo "</li>
                    \t<li class=\"tag__item\"><i class=\"fas fa-clock mr-2\"></i>";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "localisationoffre", [], "any", false, false, false, 174), "html", null, true);
            echo "</li>
\t\t";
            // line 175
            if (twig_get_attribute($this->env, $this->source, (isset($context["postulerStatusArray"]) || array_key_exists("postulerStatusArray", $context) ? $context["postulerStatusArray"] : (function () { throw new RuntimeError('Variable "postulerStatusArray" does not exist.', 175, $this->source); })()), $context["key"], [], "array", false, false, false, 175)) {
                echo "\t\t\t
    <li class=\"tag__item play blue\">
       
        <td> <button class=\"id\"data-id=\"";
                // line 178
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "idoffre", [], "any", false, false, false, 178), "html", null, true);
                echo " \">
                                       <i class=\"icon_close\">postuler</i>
                                   </button></td>
    </li>
";
            } else {
                // line 183
                echo "    <span class=\"text-muted\">Déjà postulé</span>
";
            }
            // line 185
            echo "
                   

\t\t\t\t</ul>
\t\t\t</div>
\t\t</article>
\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['offretravail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
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
        // line 208
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
        // line 257
        $this->displayBlock('javascripts', $context, $blocks);
        // line 279
        echo "    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright © 2022 <a href=\"#\">Liberty</a> NFT Marketplace Co., Ltd. All rights reserved. &nbsp;&nbsp; Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://templatemo.com"), "html", null, true);
        echo "\" target=\"_blank\">TemplateMo</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 257
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 258
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
        // line 273
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
        return array (  498 => 273,  481 => 258,  471 => 257,  459 => 299,  455 => 298,  451 => 297,  446 => 295,  442 => 294,  437 => 292,  433 => 291,  422 => 283,  416 => 279,  414 => 257,  362 => 208,  344 => 192,  332 => 185,  328 => 183,  320 => 178,  314 => 175,  310 => 174,  306 => 173,  302 => 172,  297 => 170,  290 => 166,  284 => 163,  277 => 158,  273 => 157,  241 => 128,  198 => 88,  172 => 65,  167 => 63,  163 => 62,  152 => 54,  129 => 33,  119 => 32,  107 => 301,  105 => 32,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  70 => 18,  65 => 16,  57 => 11,  45 => 1,);
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
                             <li><a href=\"#\" class=\"active\">Acceuil</a></li>
                       
                        <li><a href=\"{{ path('app_offretravail_index') }}\">Offres d'emplois</a></li>
                        <li><a href=\"{{ path('app_demandetravail_index') }}\">Demandes d'emplois</a></li>
                                 
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
    </header>
    <!-- ***** Header Area End ***** -->

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

</html>", "demandetravail/chercheroffre.html.twig", "C:\\Users\\nour2\\Documents\\GitHub\\ArtounsiSymfony\\templates\\demandetravail\\chercheroffre.html.twig");
    }
}
