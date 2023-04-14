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

/* panier/index.html.twig */
class __TwigTemplate_2c6dd92aa6fd79e3c766c728ff5130b6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        // line 1
        echo "<head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\" rel=\"stylesheet\">

    <title>Liberty Template - Create NFT Page</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "
TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
  </head>
  <style>
    .line-dec {
      border: 1px solid #7453fc;
      border-collapse: collapse;
    }

    .line-dec th, .line-dec td {
      padding: 10px;
      text-align: center;
    }
    .carte-table td {
    padding: 50px;
    border: 0 px solid #ccc;
  }

  .cart-table {
  border-collapse: collapse;
  border: 1px solid #d1d1d1;
  font-size: 1.2rem;
  margin-bottom: 30px;
  width: 100%;
}

.cart-table th,
.cart-table td {
  border: 1px solid #d1d1d1;
  padding: 10px;
  text-align: center;
}

.cart-table th {
  background-color: #f2f2f2;
}

.cart-table tfoot td {
  font-weight: bold;
}



.cart-table tr:first-child th {
  background-color: #282b2f;
  border: 1px solid #404245;
  color: #fff;
  border-radius: 20px;
  padding: 10px;
}

.cart-table tbody tr:last-child td,
.cart-table tfoot td {
  border-top: 2px solid #d1d1d1;
  font-size: 1.3rem;
}



  </style>
  
<body>


  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
 
 <body>
<!-- ***** Preloader Start ***** -->
<div id=\"js-preloader\" class=\"js-preloader loaded\">
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
<header class=\"header-area header-sticky background-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                      <li><a href=\"index.html\">Home</a></li>
                      <li><a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                      <li><a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_index");
        echo "\">Panier</a></li>
                      <li><a href=\"create.html\" class=\"active\">Create Yours</a></li>
                    </ul>
                    <a class=\"menu-trigger\">
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<div class=\"main-banner\">
   
</div>
<!-- ***** Main Banner Area End ***** -->


<div class=\"currently-market\">
  <div class=\"container\">
  <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"section-heading\">
                    <h2><em> Mon </em> Panier </h2>
                </div>
            </div>
          




            <div class=\"col-lg-12\">
                <div class=\"row grid\">
                    <div>
                   
                        <div>
                          <div class=\"line-dec\"></div>
                            <table class=\"carte-table\" border=\"0,5\"  class=\"currently-market\"  class=\"item\">
                              <thead  class=\"carte-table\">
                                
                                <tr>
                                  <th><h4>Photo</h4></th>
                                  <th><h4>Nom de la photo</h4></th>
                                  <th><h4>Prix</h4></th>
                                  <th><h4>Date d'ajout</h4></th>
                                  <th><h4>Action</h4></th>
                                </tr>
                                
                              </thead>
                        
                              <tbody   class=\"carte-table\">
                                ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lignesPanier"]) || array_key_exists("lignesPanier", $context) ? $context["lignesPanier"] : (function () { throw new RuntimeError('Variable "lignesPanier" does not exist.', 174, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 175
            echo "                                
                                <tr>
                                  <td>
                                    <div class=\"left-image\">
                                      <img src=\"";
            // line 179
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "idproduit", [], "any", false, false, false, 179), "image", [], "any", false, false, false, 179))), "html", null, true);
            echo "\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                                    </div>
                                  </td>
                                  <td>
                                    <div class=\"right-content\">
                                      <h4>";
            // line 184
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "idproduit", [], "any", false, false, false, 184), "nom", [], "any", false, false, false, 184), "html", null, true);
            echo "</h4>
                                     
                                    </div> 
                                  </td>
                                  <td>
                                    <span class=\"bid\">
                                      <h4><strong> ";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "idproduit", [], "any", false, false, false, 190), "prix", [], "any", false, false, false, 190), "html", null, true);
            echo "</strong></h4>
                                    </span>
                                  </td>
                                  <td>
                                    <span class=\"ends\">
                                      <h4><em>";
            // line 195
            ((twig_get_attribute($this->env, $this->source, $context["ligne"], "dateajout", [], "any", false, false, false, 195)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "dateajout", [], "any", false, false, false, 195), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</em></h4>
                                    </span>
                                  </td>
                                  <td>
                                    <div class=\"main-button\">
                                      <a href=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lignepanier_delete", ["idlignepanier" => twig_get_attribute($this->env, $this->source, $context["ligne"], "idlignepanier", [], "any", false, false, false, 200)]), "html", null, true);
            echo "\" class=\"active\"><i class=\"fas fa-trash-alt\"></i></a>
                                    </div>
                                  </td>
                                </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 204
            echo " 
                                <tr>
                                  <td colspan=\"4\">
                                    <div class=\"section-heading\">
                                      <div class=\"line-dec\"></div>
                                      <h2><em>Votre panier est</em> vide</h2>
                                    </div>
                                  </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "                              </tbody>
                            </table>
                            <div class=\"line-dec\"></div>
                        </div>
                   </div>
               </div>
            </div>
           
            
            <table class=\"carte-table\" border=\"0,5\"  class=\"currently-market\"  class=\"item\">
              <tr >
                 <th style=\"padding-right: 250px;\" ><div><h2> Nombre de produits:    ";
        // line 225
        echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 225, $this->source); })()), "html", null, true);
        echo " </h2></div></th>
                 <th style=\"padding-right: 250px;\" ><div><h2>Montant total:    ";
        // line 226
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 226, $this->source); })()), "html", null, true);
        echo "</h2></div></th>
                 <th style=\"padding-right: 250px;\" > <div class=\"main-button\" class=\"section-heading\">
                  <a href=\" class=active\">      Payer      </a>
                </div> </th>
              </tr>
            </table>
          
           <div class=\"line-dec\"></div>
          


   </div>


  </div>


</div>












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
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>
    
    
    <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>

</body>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo " 
    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.css"), "html", null, true);
        echo "\">
<!--
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "panier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 21,  423 => 20,  419 => 19,  415 => 18,  411 => 17,  407 => 15,  397 => 14,  383 => 280,  379 => 279,  375 => 278,  369 => 275,  365 => 274,  360 => 272,  356 => 271,  308 => 226,  304 => 225,  291 => 214,  276 => 204,  266 => 200,  258 => 195,  250 => 190,  241 => 184,  233 => 179,  227 => 175,  222 => 174,  165 => 120,  161 => 119,  64 => 24,  62 => 14,  57 => 12,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>

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
<!--
{% endblock %}

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
  </head>
  <style>
    .line-dec {
      border: 1px solid #7453fc;
      border-collapse: collapse;
    }

    .line-dec th, .line-dec td {
      padding: 10px;
      text-align: center;
    }
    .carte-table td {
    padding: 50px;
    border: 0 px solid #ccc;
  }

  .cart-table {
  border-collapse: collapse;
  border: 1px solid #d1d1d1;
  font-size: 1.2rem;
  margin-bottom: 30px;
  width: 100%;
}

.cart-table th,
.cart-table td {
  border: 1px solid #d1d1d1;
  padding: 10px;
  text-align: center;
}

.cart-table th {
  background-color: #f2f2f2;
}

.cart-table tfoot td {
  font-weight: bold;
}



.cart-table tr:first-child th {
  background-color: #282b2f;
  border: 1px solid #404245;
  color: #fff;
  border-radius: 20px;
  padding: 10px;
}

.cart-table tbody tr:last-child td,
.cart-table tfoot td {
  border-top: 2px solid #d1d1d1;
  font-size: 1.3rem;
}



  </style>
  
<body>


  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
 
 <body>
<!-- ***** Preloader Start ***** -->
<div id=\"js-preloader\" class=\"js-preloader loaded\">
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
<header class=\"header-area header-sticky background-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                      <li><a href=\"index.html\">Home</a></li>
                      <li><a href=\"{{ path('app_produits_index')}}\">Shop</a></li>
                      <li><a href=\"{{ path('app_panier_index') }}\">Panier</a></li>
                      <li><a href=\"create.html\" class=\"active\">Create Yours</a></li>
                    </ul>
                    <a class=\"menu-trigger\">
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<div class=\"main-banner\">
   
</div>
<!-- ***** Main Banner Area End ***** -->


<div class=\"currently-market\">
  <div class=\"container\">
  <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"section-heading\">
                    <h2><em> Mon </em> Panier </h2>
                </div>
            </div>
          




            <div class=\"col-lg-12\">
                <div class=\"row grid\">
                    <div>
                   
                        <div>
                          <div class=\"line-dec\"></div>
                            <table class=\"carte-table\" border=\"0,5\"  class=\"currently-market\"  class=\"item\">
                              <thead  class=\"carte-table\">
                                
                                <tr>
                                  <th><h4>Photo</h4></th>
                                  <th><h4>Nom de la photo</h4></th>
                                  <th><h4>Prix</h4></th>
                                  <th><h4>Date d'ajout</h4></th>
                                  <th><h4>Action</h4></th>
                                </tr>
                                
                              </thead>
                        
                              <tbody   class=\"carte-table\">
                                {% for ligne in lignesPanier %}
                                
                                <tr>
                                  <td>
                                    <div class=\"left-image\">
                                      <img src=\"{{ asset('http://localhost/img/' ~ ligne.idproduit.image) }}\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                                    </div>
                                  </td>
                                  <td>
                                    <div class=\"right-content\">
                                      <h4>{{ ligne.idproduit.nom }}</h4>
                                     
                                    </div> 
                                  </td>
                                  <td>
                                    <span class=\"bid\">
                                      <h4><strong> {{ ligne.idproduit.prix }}</strong></h4>
                                    </span>
                                  </td>
                                  <td>
                                    <span class=\"ends\">
                                      <h4><em>{{ ligne.dateajout ? ligne.dateajout|date('Y-m-d H:i:s') : '' }}</em></h4>
                                    </span>
                                  </td>
                                  <td>
                                    <div class=\"main-button\">
                                      <a href=\"{{ path('app_lignepanier_delete', {'idlignepanier': ligne.idlignepanier}) }}\" class=\"active\"><i class=\"fas fa-trash-alt\"></i></a>
                                    </div>
                                  </td>
                                </tr>
                                {% else %} 
                                <tr>
                                  <td colspan=\"4\">
                                    <div class=\"section-heading\">
                                      <div class=\"line-dec\"></div>
                                      <h2><em>Votre panier est</em> vide</h2>
                                    </div>
                                  </td>
                                </tr>
                                {% endfor %}
                              </tbody>
                            </table>
                            <div class=\"line-dec\"></div>
                        </div>
                   </div>
               </div>
            </div>
           
            
            <table class=\"carte-table\" border=\"0,5\"  class=\"currently-market\"  class=\"item\">
              <tr >
                 <th style=\"padding-right: 250px;\" ><div><h2> Nombre de produits:    {{ count }} </h2></div></th>
                 <th style=\"padding-right: 250px;\" ><div><h2>Montant total:    {{ total }}</h2></div></th>
                 <th style=\"padding-right: 250px;\" > <div class=\"main-button\" class=\"section-heading\">
                  <a href=\" class=active\">      Payer      </a>
                </div> </th>
              </tr>
            </table>
          
           <div class=\"line-dec\"></div>
          


   </div>


  </div>


</div>












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
", "panier/index.html.twig", "C:\\Users\\aouad\\Desktop\\Pidev web\\ArtounsiSymfony-master\\templates\\panier\\index.html.twig");
    }
}
