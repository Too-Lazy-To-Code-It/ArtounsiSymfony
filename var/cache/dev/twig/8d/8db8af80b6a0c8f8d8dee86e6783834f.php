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

/* panier/show.html.twig */
class __TwigTemplate_d26dc7b28222c8813176a3849c7022c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/show.html.twig"));

        // line 1
        echo "
<head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\" rel=\"stylesheet\">

    <title>Liberty Template - Create NFT Page</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "    <!--


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
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                      <li><a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_index");
        echo "\">Panier</a></li>
                      <li><a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Dashboard_index");
        echo "\">Dashboard</a></li>
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
                                  <th class=\"text-center\"><h6>Photo</h6></th>
                                  <th class=\"text-center\"><h6>Nom de la photo</h6></th>
                                  <th class=\"text-center\"><h6>Prix</h6></th>
                                  <th class=\"text-center\"><h6>Date d'ajout</h6></th>
                                  <th class=\"text-center\"><h6>Action</h6></th>
                                </tr>
                                
                              </thead>
                        
                              <tbody   class=\"carte-table\">
                                ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lignesPanier"]) || array_key_exists("lignesPanier", $context) ? $context["lignesPanier"] : (function () { throw new RuntimeError('Variable "lignesPanier" does not exist.', 178, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 179
            echo "                                
                                <tr>
                                  <td>
                                    <div class=\"left-image\">
                                      <img src=\"";
            // line 183
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "idproduit", [], "any", false, false, false, 183), "image", [], "any", false, false, false, 183))), "html", null, true);
            echo "\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                                    </div>
                                  </td>
                                  <td>
                                    <div class=\"right-content\">
                                      <h6>";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "idproduit", [], "any", false, false, false, 188), "nom", [], "any", false, false, false, 188), "html", null, true);
            echo "</h6>
                                     
                                    </div> 
                                  </td>
                                  <td>
                                    <span class=\"bid\">
                                      <h6><strong> ";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "idproduit", [], "any", false, false, false, 194), "prix", [], "any", false, false, false, 194), "html", null, true);
            echo "</strong></h6>
                                    </span>
                                  </td>
                                  <td>
                                    
                                      <h6>";
            // line 199
            ((twig_get_attribute($this->env, $this->source, $context["ligne"], "dateajout", [], "any", false, false, false, 199)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "dateajout", [], "any", false, false, false, 199), "F jS, Y H:i"), "html", null, true))) : (print ("")));
            echo "</h6>
                                   
                                  </td>
                                  <td>
                                    
                                    <div class=\"main-button\">
                                      <a href=\"";
            // line 205
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lignepanier_delete", ["idlignepanier" => twig_get_attribute($this->env, $this->source, $context["ligne"], "idlignepanier", [], "any", false, false, false, 205)]), "html", null, true);
            echo "\"   classe=\"active\" >Supprimer</a>
                                     </div>
                                  </td>
                                </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 209
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
        // line 219
        echo "                              </tbody>
                            </table>
                            <div class=\"line-dec\"></div>
                        </div>
                   </div>
               </div>
            </div>
           
            
            <table class=\"carte-table\">
              <thead>
                <tr>
                  <th><h5>Nombre de produits: ";
        // line 231
        echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 231, $this->source); })()), "html", null, true);
        echo "</h5></th>
                  <th><h5>Montant total: ";
        // line 232
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 232, $this->source); })()), "html", null, true);
        echo "</h5></th>
                  <th>
                    <div class=\"main-button\">
                      <a href=\"#\" class=\"active\">Payer</a>
                    </div>
                  </th>
                </tr>
              </thead>
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
<script src=\"vendor/jquery/jquery.min.js\"></script>
<script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script>

<script src=\"assets/js/isotope.min.js\"></script>
<script src=\"assets/js/owl-carousel.js\"></script>

<script src=\"assets/js/tabs.js\"></script>
<script src=\"assets/js/popup.js\"></script>
<script src=\"assets/js/custom.js\"></script>


</body>




















";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo " 
    <!-- Additional CSS Files -->
  
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "panier/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 23,  435 => 22,  431 => 21,  427 => 20,  423 => 19,  418 => 16,  408 => 15,  317 => 232,  313 => 231,  299 => 219,  284 => 209,  274 => 205,  265 => 199,  257 => 194,  248 => 188,  240 => 183,  234 => 179,  229 => 178,  172 => 124,  168 => 123,  164 => 122,  65 => 25,  63 => 15,  58 => 13,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
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
    <!--


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
                      <li><a href=\"{{ path('app_Dashboard_index') }}\">Dashboard</a></li>
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
                                  <th class=\"text-center\"><h6>Photo</h6></th>
                                  <th class=\"text-center\"><h6>Nom de la photo</h6></th>
                                  <th class=\"text-center\"><h6>Prix</h6></th>
                                  <th class=\"text-center\"><h6>Date d'ajout</h6></th>
                                  <th class=\"text-center\"><h6>Action</h6></th>
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
                                      <h6>{{ ligne.idproduit.nom }}</h6>
                                     
                                    </div> 
                                  </td>
                                  <td>
                                    <span class=\"bid\">
                                      <h6><strong> {{ ligne.idproduit.prix }}</strong></h6>
                                    </span>
                                  </td>
                                  <td>
                                    
                                      <h6>{{ ligne.dateajout ? ligne.dateajout|date('F jS, Y H:i') : '' }}</h6>
                                   
                                  </td>
                                  <td>
                                    
                                    <div class=\"main-button\">
                                      <a href=\"{{ path('app_lignepanier_delete', {'idlignepanier': ligne.idlignepanier}) }}\"   classe=\"active\" >Supprimer</a>
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
           
            
            <table class=\"carte-table\">
              <thead>
                <tr>
                  <th><h5>Nombre de produits: {{ count }}</h5></th>
                  <th><h5>Montant total: {{ total }}</h5></th>
                  <th>
                    <div class=\"main-button\">
                      <a href=\"#\" class=\"active\">Payer</a>
                    </div>
                  </th>
                </tr>
              </thead>
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
<script src=\"vendor/jquery/jquery.min.js\"></script>
<script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script>

<script src=\"assets/js/isotope.min.js\"></script>
<script src=\"assets/js/owl-carousel.js\"></script>

<script src=\"assets/js/tabs.js\"></script>
<script src=\"assets/js/popup.js\"></script>
<script src=\"assets/js/custom.js\"></script>


</body>




















", "panier/show.html.twig", "C:\\Users\\aouad\\Desktop\\Pidev web\\ArtounsiSymfony-master\\templates\\panier\\show.html.twig");
    }
}
