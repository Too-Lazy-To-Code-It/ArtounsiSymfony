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

/* produits/new.html.twig */
class __TwigTemplate_636a04499f26ce95c7fd106065a02fda extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/new.html.twig"));

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
     <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">


    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
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
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                      <li><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_show", ["idpanier" => "1"]);
        echo "\">Panier</a></li>
                      <li><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Dashboard_index");
        echo "\">Dashboard</a></li>
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
          <h2>Votre espace pour ajouter votre produit</h2>
        </div>
      </div>
    </div>
  </div>

<style>
.error-message {
    color: red;
    
}

</style>



  <div class=\"item-details-page\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"section-heading\">
            <div class=\"line-dec\"></div>
            <h2>Ajouter <em>Votre Produit</em> Ici.</h2>
          </div>
        </div>
        ";
        // line 112
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "contact"]]);
        echo "
        <div class=\"col-lg-12\">
            <div class=\"row\">
              <div class=\"col-lg-4\">
                <fieldset>
                  ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "nom", [], "any", false, false, false, 117), 'label', ["label" => "Nom du produit"]);
        echo "
                  ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "nom", [], "any", false, false, false, 118), 'widget', ["attr" => ["placeholder" => "Entrer le nom du produit ici", "autocomplete" => "on"]]);
        echo "</div>
                  <div  class=\"error-message\">   ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "nom", [], "any", false, false, false, 119), 'errors');
        echo "</div>
                </fieldset>
              </div>
              <div class=\"col-lg-4\">
                <fieldset>
                  ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "description", [], "any", false, false, false, 124), 'label', ["label" => "Description du produit"]);
        echo "
                  ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "description", [], "any", false, false, false, 125), 'widget', ["attr" => ["placeholder" => "décrir le produit ici", "autocomplete" => "on"]]);
        echo "
                  <div  class=\"error-message\">";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "description", [], "any", false, false, false, 126), 'errors');
        echo "</div> 
                </fieldset>
              </div>
              <div class=\"col-lg-4\">
                <fieldset>
                   ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "prix", [], "any", false, false, false, 131), 'label', ["label" => "Prix du produit"]);
        echo "
                  ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "prix", [], "any", false, false, false, 132), 'widget', ["attr" => ["placeholder" => "Entrer le prix du produit ici", "autocomplete" => "on"]]);
        echo "</div>
                 <div  class=\"error-message\"> ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "prix", [], "any", false, false, false, 133), 'errors');
        echo "</div>
                </fieldset>
              </div>
              <div class=\"col-lg-6\">
                <fieldset>
                  <div class=\"main-button\">
                    ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "idcategorie", [], "any", false, false, false, 139), 'label', ["label" => "Catégorie du produit"]);
        echo "
                    ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "idcategorie", [], "any", false, false, false, 140), 'widget', ["attr" => ["placeholder" => "Entrer la catégorie du produit ici", "autocomplete" => "on"]]);
        echo "
                    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "idcategorie", [], "any", false, false, false, 141), 'errors');
        echo "
                  </div>
                    
                </fieldset>
              </div>
              <div class=\"col-lg-6\">
                <fieldset>
                    



                </fieldset>
              </div>
              <div class=\"col-lg-4\">
              
                  <fieldset>
                    <label class=\"form-label\" >Image</label>
                    ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "image", [], "any", false, false, false, 158), 'widget');
        echo "
                    ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "image", [], "any", false, false, false, 159), 'errors');
        echo "
                  </fieldset>
          
              </div>
              <div class=\"col-lg-8\">
                <fieldset>
                  <button class=\"main-button\" type=\"submit\" class=\"orange-button\" onClick=\"validateSubmit()\">Ajouter article</button>
                  ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), 'widget');
        echo "
                </fieldset>
              </div>
            </div>
        </div>
        ";
        // line 171
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), 'form_end');
        echo "


    
      </div>
    </div>
  </div>

  <script>\t\t\t\t\t\t\t\t\t
    function validateSubmit() {
      result = confirm(\"Voulez-vous vraiment ajouter ce produit ?\");
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
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>


<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>

  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo " 
    <!-- Additional CSS Files -->
  
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.css"), "html", null, true);
        echo "\">
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "produits/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 26,  375 => 25,  371 => 24,  367 => 23,  363 => 22,  358 => 19,  348 => 18,  334 => 212,  330 => 211,  326 => 210,  320 => 207,  316 => 206,  311 => 204,  307 => 203,  272 => 171,  264 => 166,  254 => 159,  250 => 158,  230 => 141,  226 => 140,  222 => 139,  213 => 133,  209 => 132,  205 => 131,  197 => 126,  193 => 125,  189 => 124,  181 => 119,  177 => 118,  173 => 117,  165 => 112,  118 => 68,  114 => 67,  110 => 66,  71 => 29,  69 => 18,  63 => 15,  56 => 11,  44 => 1,);
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
                      <li><a href=\"{{ path('app_panier_show' , {'idpanier': '1'}) }}\">Panier</a></li>
                      <li><a href=\"{{ path('app_Dashboard_index') }}\">Dashboard</a></li>
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
          <h2>Votre espace pour ajouter votre produit</h2>
        </div>
      </div>
    </div>
  </div>

<style>
.error-message {
    color: red;
    
}

</style>



  <div class=\"item-details-page\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"section-heading\">
            <div class=\"line-dec\"></div>
            <h2>Ajouter <em>Votre Produit</em> Ici.</h2>
          </div>
        </div>
        {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'id':'contact'} }) }}
        <div class=\"col-lg-12\">
            <div class=\"row\">
              <div class=\"col-lg-4\">
                <fieldset>
                  {{ form_label(form.nom, 'Nom du produit') }}
                  {{ form_widget(form.nom, {'attr': {'placeholder': 'Entrer le nom du produit ici', 'autocomplete': 'on'}}) }}</div>
                  <div  class=\"error-message\">   {{ form_errors(form.nom) }}</div>
                </fieldset>
              </div>
              <div class=\"col-lg-4\">
                <fieldset>
                  {{ form_label(form.description, 'Description du produit') }}
                  {{ form_widget(form.description, {'attr': {'placeholder': 'décrir le produit ici', 'autocomplete': 'on'}}) }}
                  <div  class=\"error-message\">{{ form_errors(form.description) }}</div> 
                </fieldset>
              </div>
              <div class=\"col-lg-4\">
                <fieldset>
                   {{ form_label(form.prix, 'Prix du produit') }}
                  {{ form_widget(form.prix, {'attr': {'placeholder': 'Entrer le prix du produit ici', 'autocomplete': 'on'}}) }}</div>
                 <div  class=\"error-message\"> {{ form_errors(form.prix) }}</div>
                </fieldset>
              </div>
              <div class=\"col-lg-6\">
                <fieldset>
                  <div class=\"main-button\">
                    {{ form_label(form.idcategorie, 'Catégorie du produit') }}
                    {{ form_widget(form.idcategorie, {'attr': {'placeholder': 'Entrer la catégorie du produit ici', 'autocomplete': 'on'}}) }}
                    {{ form_errors(form.idcategorie) }}
                  </div>
                    
                </fieldset>
              </div>
              <div class=\"col-lg-6\">
                <fieldset>
                    



                </fieldset>
              </div>
              <div class=\"col-lg-4\">
              
                  <fieldset>
                    <label class=\"form-label\" >Image</label>
                    {{ form_widget(form.image ) }}
                    {{ form_errors(form.image) }}
                  </fieldset>
          
              </div>
              <div class=\"col-lg-8\">
                <fieldset>
                  <button class=\"main-button\" type=\"submit\" class=\"orange-button\" onClick=\"validateSubmit()\">Ajouter article</button>
                  {{ form_widget(form) }}
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
      result = confirm(\"Voulez-vous vraiment ajouter ce produit ?\");
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
</html>", "produits/new.html.twig", "C:\\Users\\aouad\\Desktop\\Pidev web\\ArtounsiSymfony-master\\templates\\produits\\new.html.twig");
    }
}
