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

/* demandetravail/index.html.twig */
class __TwigTemplate_b841a677fa6c757b0d1bc0c911ed667a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demandetravail/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demandetravail/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
   <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/swiper-bundle.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css.css"), "html", null, true);
        echo "\">
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">
     <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/cardscss.css"), "html", null, true);
        echo "\">
    <title>Liberty Template - NFT Item Detail Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
 ";
        // line 19
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 26
        echo "    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/templatemo-cyborg-gaming.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.css"), "html", null, true);
        echo "\" />
    <!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
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
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/logoart.png"), "html", null, true);
        echo "\" height=\"50\" width=\"30\"  alt=\"\">
   
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                         <ul class=\"nav\">
                        <li><a href=\"#\" class=\"active\">Acceuil</a></li>
                       
                        <li><a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">Offres d'emplois</a></li>
                        <li><a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
        echo "\">Demandes d'emplois</a></li>
                                 
                      <li><a href=\"";
        // line 77
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
                    <h6>Les demandes d'emplois</h6>
                    <h2>Consulter tous les demandes</h2>
                    <span>Acceuil> <a href=\"#\">Demandes d'emplois</a></span>
                    <div class=\"buttons\">
                        <div class=\"main-button\">
                            <a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_travail_chercheroffre");
        echo "\">Cherchers offres</a>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
 <style>.section-title {
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
}</style>

    <div class=\"item-details-page\">
        <div class=\"container\">
            <div class=\"row\">
               
            
                             <div class=\"col-lg-6\">
                               <div class=\"mini-heading\">
  <h4 class=\"section-title\">Mes demandes</h4></div>
  
  <a class=\"link-style\"href=\"";
        // line 163
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_demandes");
        echo "\"><u>Gérer mes demandes</u></a>
 
                            </div>
                          
    
    <div class=\"featured-explore\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <div class=\"owl-features owl-carousel\">
           
\t
        
                 ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandetravailbyid"]) || array_key_exists("demandetravailbyid", $context) ? $context["demandetravailbyid"] : (function () { throw new RuntimeError('Variable "demandetravailbyid" does not exist.', 176, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["demandetravail"]) {
            // line 177
            echo "                    
\t

\t\t<article class=\"postcardcar dark blue\">
\t\t\t<a class=\"postcardcar__img_link\" href=\"#\">
\t\t\t\t<img class=\"postcardcar__img\" src=\"https://picsum.photos/1000/1000\" alt=\"Image Title\" />
\t\t\t</a>
\t\t\t<div class=\"postcardcar__text\">
\t\t\t\t<h1 class=\"postcardcar__title blue\"><a>";
            // line 185
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demandetravail"], "titredemande", [], "any", false, false, false, 185), "html", null, true);
            echo "</a></h1>
\t\t\t\t<div class=\"postcardcar__subtitle small\">
\t\t\t\t\t<time datetime=\"2020-05-25 12:00:00\">
\t\t\t\t\t\t<i class=\"fas fa-calendar-alt mr-2\"></i>";
            // line 188
            ((twig_get_attribute($this->env, $this->source, $context["demandetravail"], "dateajoutdemande", [], "any", false, false, false, 188)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demandetravail"], "dateajoutdemande", [], "any", false, false, false, 188), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "
\t\t\t\t\t</time>
\t\t\t\t</div>
\t\t\t\t<div class=\"postcardcar__bar\"></div>
\t\t\t\t<div class=\"postcardcar__preview-txt\">";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demandetravail"], "descriptionDemande", [], "any", false, false, false, 192), "html", null, true);
            echo "</div>
\t\t\t\t<ul class=\"postcardcar__tagbox\">
\t\t\t\t\t
                      <li class=\"tag__item play blue\">
\t\t\t\t\t\t <a  href=\"";
            // line 196
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["demandetravail"], "pdf", [], "any", false, false, false, 196))), "html", null, true);
            echo "\" > <i class=\"bi bi-file-person\"> Mon cv</i></a>
                         

    
\t\t\t\t\t</li>
                   

                                
                        
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</article>


                
             \t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demandetravail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
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
\t
\t<div class=\"containercard py-4\">
\t
  ";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandetravails"]) || array_key_exists("demandetravails", $context) ? $context["demandetravails"] : (function () { throw new RuntimeError('Variable "demandetravails" does not exist.', 256, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["demandetravail"]) {
            // line 257
            echo "\t\t<article class=\"postcard dark blue\">
\t\t\t<a class=\"postcard__img_link\" href=\"#\">
\t\t\t\t<img class=\"postcard__img\" src=\"https://picsum.photos/1000/1000\" alt=\"Image Title\" />
\t\t\t</a>
\t\t\t<div class=\"postcard__text\">
\t\t\t\t<h1 class=\"postcard__title blue\"><a>";
            // line 262
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demandetravail"], "titreDemande", [], "any", false, false, false, 262), "html", null, true);
            echo "</a></h1>
\t\t\t\t<div class=\"postcard__subtitle small\">
\t\t\t\t\t<time datetime=\"2020-05-25 12:00:00\">
\t\t\t\t\t\t<i class=\"fas fa-calendar-alt mr-2\"></i>";
            // line 265
            ((twig_get_attribute($this->env, $this->source, $context["demandetravail"], "dateajoutdemande", [], "any", false, false, false, 265)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demandetravail"], "dateajoutdemande", [], "any", false, false, false, 265), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "
\t\t\t\t\t</time>
\t\t\t\t</div>
\t\t\t\t<div class=\"postcard__bar\"></div>
\t\t\t\t<div class=\"postcard__preview-txt\">";
            // line 269
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demandetravail"], "descriptionDemande", [], "any", false, false, false, 269), "html", null, true);
            echo "</div>
\t\t\t\t<ul class=\"postcard__tagbox\">
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-tag mr-2\"></i>";
            // line 271
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demandetravail"], "categoriedemande", [], "any", false, false, false, 271), "html", null, true);
            echo "</li>
\t\t\t\t\t <li class=\"tag__item play blue\">
\t\t\t\t\t\t <a  href=\"";
            // line 273
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["demandetravail"], "pdf", [], "any", false, false, false, 273))), "html", null, true);
            echo "\" ><i class=\"bi bi-file-person\">cv</i> </a>
                        
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</article>
\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demandetravail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        echo "\t</div>
     <div>

";
        // line 283
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env,         // line 284
(isset($context["demandetravails"]) || array_key_exists("demandetravails", $context) ? $context["demandetravails"] : (function () { throw new RuntimeError('Variable "demandetravails" does not exist.', 284, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", ["queryParam1" => "param1 value", "queryParam2" => "param2 value"], ["align" => "center"]);
        // line 294
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
        // line 327
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
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"assets/js/owl-carousel.js')}}\"></script>

    <script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
    
<script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.1.1/swiper-bundle.min.js"), "html", null, true);
        echo "\" integrity=\"sha512-J0i98QZsJc12MkNEyDbinrKKoe7Jiw0rtryAXBesZrVwRkaqgP9QNCPyo5sMZ2jfiJQb+9RIE4I3xNl8fFqQIA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <!-- JavaScript -->
      <!--Uncomment this line-->
       <script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index.js"), "html", null, true);
        echo "\"></script> 
       <script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/mixitup.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/test.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/masonry.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.slicknav.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
      ";
        // line 360
        $this->displayBlock('javascripts', $context, $blocks);
        // line 382
        echo "
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 20
        echo "        <link rel=\"stylesheet\" href=\"";
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

    // line 360
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 362
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
 
";
        // line 365
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

";
        // line 368
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>

";
        // line 371
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>

";
        // line 374
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>

";
        // line 377
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>

";
        // line 380
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "demandetravail/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  661 => 380,  655 => 377,  649 => 374,  643 => 371,  637 => 368,  631 => 365,  625 => 362,  615 => 360,  603 => 24,  599 => 23,  595 => 22,  591 => 21,  586 => 20,  576 => 19,  563 => 382,  561 => 360,  557 => 359,  553 => 358,  549 => 357,  545 => 356,  541 => 355,  537 => 354,  533 => 353,  529 => 352,  525 => 351,  521 => 350,  517 => 349,  511 => 346,  506 => 344,  502 => 343,  498 => 342,  492 => 339,  487 => 337,  483 => 336,  471 => 327,  436 => 294,  434 => 284,  433 => 283,  428 => 280,  415 => 273,  410 => 271,  405 => 269,  398 => 265,  392 => 262,  385 => 257,  381 => 256,  336 => 213,  313 => 196,  306 => 192,  299 => 188,  293 => 185,  283 => 177,  279 => 176,  263 => 163,  224 => 127,  171 => 77,  166 => 75,  162 => 74,  151 => 66,  115 => 33,  111 => 32,  107 => 31,  103 => 30,  99 => 29,  95 => 28,  91 => 27,  88 => 26,  86 => 19,  82 => 18,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  55 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
   <link rel=\"stylesheet\" href=\"{{asset('assets/swiper-bundle.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css.css')}}\">
<link href=\"{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css') }}\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css') }}\">
    <link href=\"{{asset('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap')}}\" rel=\"stylesheet\">
     <link rel=\"stylesheet\" href=\"{{asset('assets/cardscss.css')}}\">
    <title>Liberty Template - NFT Item Detail Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{asset('vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
 {% block stylesheet %}
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-liberty-market.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('https://unpkg.com/swiper@7/swiper-bundle.min.css') }}\"/>
    {% endblock %}
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
                    <h6>Les demandes d'emplois</h6>
                    <h2>Consulter tous les demandes</h2>
                    <span>Acceuil> <a href=\"#\">Demandes d'emplois</a></span>
                    <div class=\"buttons\">
                        <div class=\"main-button\">
                            <a href=\"{{ path('app_demande_travail_chercheroffre') }}\">Cherchers offres</a>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
 <style>.section-title {
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
}</style>

    <div class=\"item-details-page\">
        <div class=\"container\">
            <div class=\"row\">
               
            
                             <div class=\"col-lg-6\">
                               <div class=\"mini-heading\">
  <h4 class=\"section-title\">Mes demandes</h4></div>
  
  <a class=\"link-style\"href=\"{{ path('app_dashboard_demandes') }}\"><u>Gérer mes demandes</u></a>
 
                            </div>
                          
    
    <div class=\"featured-explore\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <div class=\"owl-features owl-carousel\">
           
\t
        
                 {% for demandetravail in demandetravailbyid %}
                    
\t

\t\t<article class=\"postcardcar dark blue\">
\t\t\t<a class=\"postcardcar__img_link\" href=\"#\">
\t\t\t\t<img class=\"postcardcar__img\" src=\"https://picsum.photos/1000/1000\" alt=\"Image Title\" />
\t\t\t</a>
\t\t\t<div class=\"postcardcar__text\">
\t\t\t\t<h1 class=\"postcardcar__title blue\"><a>{{ demandetravail.titredemande}}</a></h1>
\t\t\t\t<div class=\"postcardcar__subtitle small\">
\t\t\t\t\t<time datetime=\"2020-05-25 12:00:00\">
\t\t\t\t\t\t<i class=\"fas fa-calendar-alt mr-2\"></i>{{ demandetravail.dateajoutdemande ? demandetravail.dateajoutdemande|date('Y-m-d H:i:s') : '' }}
\t\t\t\t\t</time>
\t\t\t\t</div>
\t\t\t\t<div class=\"postcardcar__bar\"></div>
\t\t\t\t<div class=\"postcardcar__preview-txt\">{{ demandetravail.descriptionDemande }}</div>
\t\t\t\t<ul class=\"postcardcar__tagbox\">
\t\t\t\t\t
                      <li class=\"tag__item play blue\">
\t\t\t\t\t\t <a  href=\"{{ asset('/uploads/'~demandetravail.pdf) }}\" > <i class=\"bi bi-file-person\"> Mon cv</i></a>
                         

    
\t\t\t\t\t</li>
                   

                                
                        
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
\t
\t<div class=\"containercard py-4\">
\t
  {% for demandetravail in demandetravails %}
\t\t<article class=\"postcard dark blue\">
\t\t\t<a class=\"postcard__img_link\" href=\"#\">
\t\t\t\t<img class=\"postcard__img\" src=\"https://picsum.photos/1000/1000\" alt=\"Image Title\" />
\t\t\t</a>
\t\t\t<div class=\"postcard__text\">
\t\t\t\t<h1 class=\"postcard__title blue\"><a>{{demandetravail.titreDemande }}</a></h1>
\t\t\t\t<div class=\"postcard__subtitle small\">
\t\t\t\t\t<time datetime=\"2020-05-25 12:00:00\">
\t\t\t\t\t\t<i class=\"fas fa-calendar-alt mr-2\"></i>{{ demandetravail.dateajoutdemande ? demandetravail.dateajoutdemande|date('Y-m-d H:i:s') : '' }}
\t\t\t\t\t</time>
\t\t\t\t</div>
\t\t\t\t<div class=\"postcard__bar\"></div>
\t\t\t\t<div class=\"postcard__preview-txt\">{{ demandetravail.descriptionDemande }}</div>
\t\t\t\t<ul class=\"postcard__tagbox\">
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-tag mr-2\"></i>{{ demandetravail.categoriedemande }}</li>
\t\t\t\t\t <li class=\"tag__item play blue\">
\t\t\t\t\t\t <a  href=\"{{ asset('/uploads/'~demandetravail.pdf) }}\" ><i class=\"bi bi-file-person\">cv</i> </a>
                        
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</article>
\t {% endfor %}
\t</div>
     <div>

{{ knp_pagination_render(
           demandetravails,
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
    <script src=\"{{asset('https://unpkg.com/swiper/swiper-bundle.min.js')}}\"></script>
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

</body>

</html>", "demandetravail/index.html.twig", "C:\\Users\\nour2\\Documents\\GitHub\\ArtounsiSymfony\\templates\\demandetravail\\index.html.twig");
    }
}
