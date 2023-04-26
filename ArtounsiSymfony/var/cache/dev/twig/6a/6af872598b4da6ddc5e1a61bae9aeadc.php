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

/* offretravail/chercherdemande.html.twig */
class __TwigTemplate_2a5763ac67f8ebaefea31ba5a4023039 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offretravail/chercherdemande.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offretravail/chercherdemande.html.twig"));

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
    <!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
</head>

<body>
";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 216
        echo "</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 38
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
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/logoart.png"), "html", null, true);
        echo "\" height=\"50\" width=\"30\"  alt=\"\">
     
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class=\"nav\">
                             <li><a href=\"#\" class=\"active\">Acceuil</a></li>
                       
                        <li><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">Offres d'emplois</a></li>
                        <li><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
        echo "\">Demandes d'emplois</a></li>
                                 
                      <li><a href=\"";
        // line 70
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
                    <span>Acceuil >Mes offres > <a href=\"#\">chercher demandes</a></span>
                    <div class=\"buttons\">
                        <div class=\"main-button\">
                            <a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">tous les offres</a>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"item-details-page\">
        <div class=\"container\">
            <div class=\"row\">
          
               <div class=\"item-details-page\">
        <div class=\"container\">
            <div class=\"row\">
  <div class=\"col-lg-12\">
          <form id=\"contact\" action=\"\" method=\"post\">
            <div class=\"row\">
           
        <div class=\"crudbtns\">
              <div class=\"col-lg-6\">
                <fieldset>
                  <label for=\"price\">chercher les demandes d'emplois </label>
                  <input type=\"text\"name=\"niveau\" id=\"price\" placeholder=\"chercher\" autocomplete=\"on\">
                </fieldset>
              </div>
             
            
             
                <fieldset>
                    <button type=\"submit\" id=\"form-submit\" class=\"dizebtn\">Chercher</button>
                  
                    <a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_demandessimilaires");
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
        foreach ($context['_seq'] as $context["_key"] => $context["offretravail"]) {
            // line 158
            echo "\t\t<article class=\"postcard dark blue\">
\t\t\t<a class=\"postcard__img_link\" href=\"#\">
\t\t\t\t<img class=\"postcard__img\" src=\"https://picsum.photos/1000/1000\" alt=\"Image Title\" />
\t\t\t</a>
\t\t\t<div class=\"postcard__text\">
\t\t\t\t<h1 class=\"postcard__title blue\"><a>";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "titredemande", [], "any", false, false, false, 163), "html", null, true);
            echo "</a></h1>
\t\t\t\t<div class=\"postcard__subtitle small\">
\t\t\t\t\t<time datetime=\"2020-05-25 12:00:00\">
\t\t\t\t\t\t<i class=\"fas fa-calendar-alt mr-2\"></i>";
            // line 166
            ((twig_get_attribute($this->env, $this->source, $context["offretravail"], "dateajoutdemande", [], "any", false, false, false, 166)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "dateajoutdemande", [], "any", false, false, false, 166), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "
\t\t\t\t\t</time>
\t\t\t\t</div>
\t\t\t\t<div class=\"postcard__bar\"></div>
\t\t\t\t<div class=\"postcard__preview-txt\">";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "descriptiondemande", [], "any", false, false, false, 170), "html", null, true);
            echo "</div>
\t\t\t\t<ul class=\"postcard__tagbox\">
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-tag mr-2\"></i>";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "categoriedemande", [], "any", false, false, false, 172), "html", null, true);
            echo "</li>
\t\t\t\t\t
                     <li class=\"tag__item play blue\">
\t\t\t\t\t\t <a  href=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["offretravail"], "pdf", [], "any", false, false, false, 175))), "html", null, true);
            echo "\" > Mon cv(click me)</a>
                        
\t\t\t\t\t</li>
                    <li class=\"tag__item play blue\"> <td><a href=\"";
            // line 178
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_mail", ["idDemande" => twig_get_attribute($this->env, $this->source, $context["offretravail"], "idDemande", [], "any", false, false, false, 178)]), "html", null, true);
            echo "\">
<i class=\"bi bi-pencil\"></i> contacter</a></td>


\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</article>
\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offretravail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "                        </div>
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
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://templatemo.com"), "html", null, true);
        echo "\" target=\"_blank\">TemplateMo</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "offretravail/chercherdemande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 214,  374 => 213,  370 => 212,  365 => 210,  361 => 209,  356 => 207,  352 => 206,  341 => 198,  328 => 187,  313 => 178,  307 => 175,  301 => 172,  296 => 170,  289 => 166,  283 => 163,  276 => 158,  272 => 157,  238 => 126,  202 => 93,  176 => 70,  171 => 68,  167 => 67,  156 => 59,  133 => 38,  123 => 37,  111 => 216,  109 => 37,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  69 => 18,  64 => 16,  56 => 11,  44 => 1,);
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
    <!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
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
                          <img src=\"{{asset('assets2/img/logoart.png') }}\" height=\"50\" width=\"30\"  alt=\"\">
     
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
                    <span>Acceuil >Mes offres > <a href=\"#\">chercher demandes</a></span>
                    <div class=\"buttons\">
                        <div class=\"main-button\">
                            <a href=\"{{ path('app_offretravail_index') }}\">tous les offres</a>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"item-details-page\">
        <div class=\"container\">
            <div class=\"row\">
          
               <div class=\"item-details-page\">
        <div class=\"container\">
            <div class=\"row\">
  <div class=\"col-lg-12\">
          <form id=\"contact\" action=\"\" method=\"post\">
            <div class=\"row\">
           
        <div class=\"crudbtns\">
              <div class=\"col-lg-6\">
                <fieldset>
                  <label for=\"price\">chercher les demandes d'emplois </label>
                  <input type=\"text\"name=\"niveau\" id=\"price\" placeholder=\"chercher\" autocomplete=\"on\">
                </fieldset>
              </div>
             
            
             
                <fieldset>
                    <button type=\"submit\" id=\"form-submit\" class=\"dizebtn\">Chercher</button>
                  
                    <a href=\"{{ path('app_offretravail_demandessimilaires') }}\" class=\"dizebtn\">Demandes similaires</a>

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
                              
                           
                    {% for offretravail in  offretravailbyid %}
\t\t<article class=\"postcard dark blue\">
\t\t\t<a class=\"postcard__img_link\" href=\"#\">
\t\t\t\t<img class=\"postcard__img\" src=\"https://picsum.photos/1000/1000\" alt=\"Image Title\" />
\t\t\t</a>
\t\t\t<div class=\"postcard__text\">
\t\t\t\t<h1 class=\"postcard__title blue\"><a>{{offretravail.titredemande}}</a></h1>
\t\t\t\t<div class=\"postcard__subtitle small\">
\t\t\t\t\t<time datetime=\"2020-05-25 12:00:00\">
\t\t\t\t\t\t<i class=\"fas fa-calendar-alt mr-2\"></i>{{ offretravail.dateajoutdemande ? offretravail.dateajoutdemande|date('Y-m-d H:i:s') : '' }}
\t\t\t\t\t</time>
\t\t\t\t</div>
\t\t\t\t<div class=\"postcard__bar\"></div>
\t\t\t\t<div class=\"postcard__preview-txt\">{{offretravail.descriptiondemande}}</div>
\t\t\t\t<ul class=\"postcard__tagbox\">
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-tag mr-2\"></i>{{ offretravail.categoriedemande }}</li>
\t\t\t\t\t
                     <li class=\"tag__item play blue\">
\t\t\t\t\t\t <a  href=\"{{ asset('/uploads/'~offretravail.pdf) }}\" > Mon cv(click me)</a>
                        
\t\t\t\t\t</li>
                    <li class=\"tag__item play blue\"> <td><a href=\"{{ path('app_offretravail_mail', {'idDemande': offretravail.idDemande}) }}\">
<i class=\"bi bi-pencil\"></i> contacter</a></td>


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

</html>", "offretravail/chercherdemande.html.twig", "C:\\Users\\nour2\\Documents\\GitHub\\ArtounsiSymfony\\templates\\offretravail\\chercherdemande.html.twig");
    }
}
