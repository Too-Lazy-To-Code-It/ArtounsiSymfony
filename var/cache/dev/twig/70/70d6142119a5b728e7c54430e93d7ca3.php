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

/* produits/edit.html.twig */
class __TwigTemplate_2f45e3ff62ec9638490e3bdde64fea02 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/edit.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\" rel=\"stylesheet\">

    <title>Liberty Template - Create NFT Page</title>

    <!-- Bootstrap core CSS -->
     <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">


    ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
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
                        <img src=\"assets/images/logo.png\" alt=\"\">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                      <li><a href=\"index.html\">Home</a></li>
                      <li><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                      <li><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_index");
        echo "\">Panier</a></li>
                      <li><a href=\"create.html\" class=\"active\">Create Yours</a></li>
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
          <h6>Bienvenue à ce formulaire</h6>
          <h2>Votre espace pour modifier votre produit</h2>
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
            <h2>Modifier <em>Votre Produit</em> Ici.</h2>
          </div>
        </div>

        ";
        // line 103
        $context["nomField"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "nom", [], "any", false, false, false, 103);
        // line 104
        echo "        ";
        $context["descriptionField"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "description", [], "any", false, false, false, 104);
        // line 105
        echo "        ";
        $context["prixField"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "prix", [], "any", false, false, false, 105);
        // line 106
        echo "        ";
        $context["idcategorieField"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "idcategorie", [], "any", false, false, false, 106);
        // line 107
        echo "        ";
        $context["imageField"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "image", [], "any", false, false, false, 107);
        // line 108
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "contact"]]);
        echo "
        <div class=\"col-lg-12\">
          
            <div class=\"row\">
              <div class=\"col-lg-4\">
                <fieldset>
                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["nomField"]) || array_key_exists("nomField", $context) ? $context["nomField"] : (function () { throw new RuntimeError('Variable "nomField" does not exist.', 114, $this->source); })()), 'label', ["label" => "Nom du produit"]);
        echo "
                    ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["nomField"]) || array_key_exists("nomField", $context) ? $context["nomField"] : (function () { throw new RuntimeError('Variable "nomField" does not exist.', 115, $this->source); })()), 'widget', ["attr" => ["placeholder" => "Entrer le nom du produit ici", "autocomplete" => "on"]]);
        echo "
                    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["nomField"]) || array_key_exists("nomField", $context) ? $context["nomField"] : (function () { throw new RuntimeError('Variable "nomField" does not exist.', 116, $this->source); })()), 'errors');
        echo "
                </fieldset>
              </div>
              <div class=\"col-lg-4\">
                <fieldset>
                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["descriptionField"]) || array_key_exists("descriptionField", $context) ? $context["descriptionField"] : (function () { throw new RuntimeError('Variable "descriptionField" does not exist.', 121, $this->source); })()), 'label', ["label" => "Description du produit"]);
        echo "
                    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["descriptionField"]) || array_key_exists("descriptionField", $context) ? $context["descriptionField"] : (function () { throw new RuntimeError('Variable "descriptionField" does not exist.', 122, $this->source); })()), 'widget', ["attr" => ["placeholder" => "décrir le produit ici", "autocomplete" => "on"]]);
        echo "
                    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["descriptionField"]) || array_key_exists("descriptionField", $context) ? $context["descriptionField"] : (function () { throw new RuntimeError('Variable "descriptionField" does not exist.', 123, $this->source); })()), 'errors');
        echo "
                </fieldset>
              </div>
              <div class=\"col-lg-4\">
                <fieldset>
                  ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prixField"]) || array_key_exists("prixField", $context) ? $context["prixField"] : (function () { throw new RuntimeError('Variable "prixField" does not exist.', 128, $this->source); })()), 'label', ["label" => "Prix du produit"]);
        echo "
                  ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prixField"]) || array_key_exists("prixField", $context) ? $context["prixField"] : (function () { throw new RuntimeError('Variable "prixField" does not exist.', 129, $this->source); })()), 'widget', ["attr" => ["placeholder" => "Entrer le prix du produit ici", "autocomplete" => "on"]]);
        echo "
                  ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prixField"]) || array_key_exists("prixField", $context) ? $context["prixField"] : (function () { throw new RuntimeError('Variable "prixField" does not exist.', 130, $this->source); })()), 'errors');
        echo "
                </fieldset>
              </div>
              <div class=\"col-lg-6\">
                <fieldset>
                
                    ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["idcategorieField"]) || array_key_exists("idcategorieField", $context) ? $context["idcategorieField"] : (function () { throw new RuntimeError('Variable "idcategorieField" does not exist.', 136, $this->source); })()), 'label', ["label" => "Catégorie du produit"]);
        echo "
                    ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["idcategorieField"]) || array_key_exists("idcategorieField", $context) ? $context["idcategorieField"] : (function () { throw new RuntimeError('Variable "idcategorieField" does not exist.', 137, $this->source); })()), 'widget', ["attr" => ["class" => "main-button", "autocomplete" => "on"]]);
        echo "
                    ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["idcategorieField"]) || array_key_exists("idcategorieField", $context) ? $context["idcategorieField"] : (function () { throw new RuntimeError('Variable "idcategorieField" does not exist.', 138, $this->source); })()), 'errors');
        echo "
                  
                    
                </fieldset>
              </div>
              <div class=\"col-lg-6\">
                <fieldset>
                    



                </fieldset>
              </div>
              <div class=\"col-lg-6\">
                <fieldset>
                  <label class=\"form-label\" >Image</label>
              
               ";
        // line 155
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 155, $this->source); })()), "image", [], "any", false, false, false, 155))) {
            // line 156
            echo "                  <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 156, $this->source); })()), "image", [], "any", false, false, false, 156))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 156, $this->source); })()), "nom", [], "any", false, false, false, 156), "html", null, true);
            echo "\" style=\"border-radius: 20px; min-width: 195px;\">
                  <br><br>
                  <input type=\"hidden\" id=\"imageField\" name=\"imageField\" value=\"";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 158, $this->source); })()), "image", [], "any", false, false, false, 158), "html", null, true);
            echo "\">
               ";
        }
        // line 160
        echo "                  
\t\t\t\t          ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["imageField"]) || array_key_exists("imageField", $context) ? $context["imageField"] : (function () { throw new RuntimeError('Variable "imageField" does not exist.', 161, $this->source); })()), 'widget', ["attr" => ["type" => "file"]]);
        echo "
                  ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["imageField"]) || array_key_exists("imageField", $context) ? $context["imageField"] : (function () { throw new RuntimeError('Variable "imageField" does not exist.', 162, $this->source); })()), 'errors');
        echo "
          
                </fieldset>
              </div>
              <div class=\"col-lg-12\">
                <fieldset>
                  <button class=\"main-button\" type=\"submit\" class=\"orange-button\" onClick=\"validateSubmit()\">Modifier le produit</button>
                  ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), 'rest');
        echo "
              </fieldset>
              </div>
            </div>
      
        </div>
        ";
        // line 175
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), 'form_end');
        echo "


    
      </div>
    </div>
  </div>

  <script>\t\t\t\t\t\t\t\t\t
    function validateSubmit() {
      result = confirm(\"Voulez-vous vraiment modifier ce produit ?\");
        if (result) {
          \$('#form').submit();
        }
    }
</script>


  <footer>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <p>Copyright © 2022 <a href=\"#\">Liberty</a> NFT Marketplace Co., Ltd. All rights reserved.
          &nbsp;&nbsp;
          Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"https://templatemo.com\" target=\"_blank\">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>


<script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>

  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo " 
    <!-- Additional CSS Files -->
  
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.css"), "html", null, true);
        echo "\">
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "produits/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 27,  395 => 26,  391 => 25,  387 => 24,  383 => 23,  378 => 20,  368 => 19,  354 => 216,  350 => 215,  346 => 214,  340 => 211,  336 => 210,  331 => 208,  327 => 207,  292 => 175,  283 => 169,  273 => 162,  269 => 161,  266 => 160,  261 => 158,  253 => 156,  251 => 155,  231 => 138,  227 => 137,  223 => 136,  214 => 130,  210 => 129,  206 => 128,  198 => 123,  194 => 122,  190 => 121,  182 => 116,  178 => 115,  174 => 114,  164 => 108,  161 => 107,  158 => 106,  155 => 105,  152 => 104,  150 => 103,  112 => 68,  108 => 67,  69 => 30,  67 => 19,  61 => 16,  44 => 1,);
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

    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\" rel=\"stylesheet\">

    <title>Liberty Template - Create NFT Page</title>

    <!-- Bootstrap core CSS -->
     <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\">


    {% block stylesheets %}
 
    <!-- Additional CSS Files -->
  
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-liberty-market.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('https://unpkg.com/swiper@7/swiper-bundle.min.css') }}\">
    
{% endblock %}

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
                        <img src=\"assets/images/logo.png\" alt=\"\">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                      <li><a href=\"index.html\">Home</a></li>
                      <li><a href=\"{{ path('app_produits_index')}}\">Shop</a></li>
                      <li><a href=\"{{ path('app_panier_index') }}\">Panier</a></li>
                      <li><a href=\"create.html\" class=\"active\">Create Yours</a></li>
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
          <h6>Bienvenue à ce formulaire</h6>
          <h2>Votre espace pour modifier votre produit</h2>
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
            <h2>Modifier <em>Votre Produit</em> Ici.</h2>
          </div>
        </div>

        {% set nomField = form.nom %}
        {% set descriptionField = form.description %}
        {% set prixField =form.prix%}
        {% set idcategorieField = form.idcategorie %}
        {% set imageField = form.image %}
        {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'id':'contact',} }) }}
        <div class=\"col-lg-12\">
          
            <div class=\"row\">
              <div class=\"col-lg-4\">
                <fieldset>
                    {{ form_label(nomField, 'Nom du produit') }}
                    {{ form_widget(nomField, {'attr': {'placeholder': 'Entrer le nom du produit ici', 'autocomplete': 'on'}}) }}
                    {{ form_errors(nomField) }}
                </fieldset>
              </div>
              <div class=\"col-lg-4\">
                <fieldset>
                    {{ form_label(descriptionField, 'Description du produit') }}
                    {{ form_widget(descriptionField, {'attr': {'placeholder': 'décrir le produit ici', 'autocomplete': 'on'}}) }}
                    {{ form_errors(descriptionField) }}
                </fieldset>
              </div>
              <div class=\"col-lg-4\">
                <fieldset>
                  {{ form_label(prixField, 'Prix du produit') }}
                  {{ form_widget(prixField, {'attr': {'placeholder': 'Entrer le prix du produit ici', 'autocomplete': 'on'}}) }}
                  {{ form_errors(prixField) }}
                </fieldset>
              </div>
              <div class=\"col-lg-6\">
                <fieldset>
                
                    {{ form_label(idcategorieField, 'Catégorie du produit') }}
                    {{ form_widget(idcategorieField, {'attr': {'class': 'main-button', 'autocomplete': 'on'}}) }}
                    {{ form_errors(idcategorieField)}}
                  
                    
                </fieldset>
              </div>
              <div class=\"col-lg-6\">
                <fieldset>
                    



                </fieldset>
              </div>
              <div class=\"col-lg-6\">
                <fieldset>
                  <label class=\"form-label\" >Image</label>
              
               {% if produit.image is not null %}
                  <img src=\"{{ asset('http://localhost/img/' ~ produit.image) }}\" alt=\"{{ produit.nom }}\" style=\"border-radius: 20px; min-width: 195px;\">
                  <br><br>
                  <input type=\"hidden\" id=\"imageField\" name=\"imageField\" value=\"{{ produit.image }}\">
               {% endif %}
                  
\t\t\t\t          {{ form_widget(imageField, {'attr': {'type': 'file'}}) }}
                  {{ form_errors(imageField) }}
          
                </fieldset>
              </div>
              <div class=\"col-lg-12\">
                <fieldset>
                  <button class=\"main-button\" type=\"submit\" class=\"orange-button\" onClick=\"validateSubmit()\">Modifier le produit</button>
                  {{ form_rest(form) }}
              </fieldset>
              </div>
            </div>
      
        </div>
        {{ form_end(form) }}


    
      </div>
    </div>
  </div>

  <script>\t\t\t\t\t\t\t\t\t
    function validateSubmit() {
      result = confirm(\"Voulez-vous vraiment modifier ce produit ?\");
        if (result) {
          \$('#form').submit();
        }
    }
</script>


  <footer>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <p>Copyright © 2022 <a href=\"#\">Liberty</a> NFT Marketplace Co., Ltd. All rights reserved.
          &nbsp;&nbsp;
          Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"https://templatemo.com\" target=\"_blank\">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
<script src=\"{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}\"></script>

<script src=\"{{ asset('assets/js/isotope.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/owl-carousel.js') }}\"></script>


<script src=\"{{ asset('assets/js/tabs.js') }}\"></script>
<script src=\"{{ asset('assets/js/popup.js') }}\"></script>
<script src=\"{{ asset('assets/js/custom.js') }}\"></script>

  </body>
</html>", "produits/edit.html.twig", "C:\\Users\\aouad\\Desktop\\Pidev web\\ArtounsiSymfony-master\\templates\\produits\\edit.html.twig");
    }
}
