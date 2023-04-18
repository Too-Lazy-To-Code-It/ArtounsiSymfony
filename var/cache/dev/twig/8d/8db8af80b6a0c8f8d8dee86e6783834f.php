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
<!-- ***** Main Banner Area Start ***** -->
<div class=\"page-heading normal-space\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
     
        <h2>Votre Panier</h2>
        
        <div class=\"buttons\">
          <div class=\"main-button\">
            <a href=\"#\">Historique de vos paiements</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
</div>
<!-- ***** Main Banner Area End ***** -->


<div class=\"currently-market\">
  <div class=\"container\">
  <div class=\"row\">
          
        

            <div class=\"col-lg-12\">
                <div class=\"row grid\">
                    <div>
                   
                        <div>
                          <div class=\"line-dec\"></div>
                          ";
        // line 172
        if ( !twig_test_empty((isset($context["lignesPanier"]) || array_key_exists("lignesPanier", $context) ? $context["lignesPanier"] : (function () { throw new RuntimeError('Variable "lignesPanier" does not exist.', 172, $this->source); })()))) {
            // line 173
            echo "                          <table class=\"carte-table\" border=\"0,5\"  class=\"currently-market\"  class=\"item\">
                            <thead  class=\"carte-table\">
                              <tr>
                                <th class=\"text-center\"><h6>Photo</h6></th>
                                <th class=\"text-center\"><h6>Nom de la photo</h6></th>
                                <th class=\"text-center\"><h6>Prix hors TVA</h6></th>
                                <th class=\"text-center\"><h6>Taux TVA (%)</h6></th>
                                <th class=\"text-center\"><h6>Prix avec TVA</h6></th>
                                <th class=\"text-center\"><h6>Date d'ajout</h6></th>
                                <th class=\"text-center\"><h6>Action</h6></th>
                              </tr>
                            </thead>
                        
                            <tbody   class=\"carte-table\">
                              ";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lignesPanier"]) || array_key_exists("lignesPanier", $context) ? $context["lignesPanier"] : (function () { throw new RuntimeError('Variable "lignesPanier" does not exist.', 187, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
                // line 188
                echo "                                <tr>
                                  <td>
                                    <div class=\"left-image\">
                                      <img src=\"";
                // line 191
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "idproduit", [], "any", false, false, false, 191), "image", [], "any", false, false, false, 191))), "html", null, true);
                echo "\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                                    </div>
                                  </td>
                                  
                                  <td>
                                    <div class=\"right-content\">
                                      <h6>";
                // line 197
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "idproduit", [], "any", false, false, false, 197), "nom", [], "any", false, false, false, 197), "html", null, true);
                echo "</h6>
                                    </div> 
                                  </td>
                                
                                  <td>
                                    <span class=\"bid\">
                                      <h6><strong> ";
                // line 203
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "idproduit", [], "any", false, false, false, 203), "prix", [], "any", false, false, false, 203), "html", null, true);
                echo "</strong></h6>
                                    </span>
                                  </td>


                                  <td>
                                    <div class=\"right-content\">
                                      <h6>";
                // line 210
                echo twig_escape_filter($this->env, (isset($context["tauxTVA"]) || array_key_exists("tauxTVA", $context) ? $context["tauxTVA"] : (function () { throw new RuntimeError('Variable "tauxTVA" does not exist.', 210, $this->source); })()), "html", null, true);
                echo "</h6>
                                    </div> 
                                  </td>

                                  <td>
                                    <div class=\"right-content\">
                                      <h6>";
                // line 216
                echo twig_escape_filter($this->env, (isset($context["montantTotal"]) || array_key_exists("montantTotal", $context) ? $context["montantTotal"] : (function () { throw new RuntimeError('Variable "montantTotal" does not exist.', 216, $this->source); })()), "html", null, true);
                echo "</h6>
                                    </div> 
                                  </td>


                                  <td>
                                    <h6>";
                // line 222
                ((twig_get_attribute($this->env, $this->source, $context["ligne"], "dateajout", [], "any", false, false, false, 222)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "dateajout", [], "any", false, false, false, 222), "F jS, Y H:i"), "html", null, true))) : (print ("")));
                echo "</h6>
                                  </td>
                                  <td>                                    
                                    <div class=\"main-button delete-product-button\" data-idlignepanier=\"";
                // line 225
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "idlignepanier", [], "any", false, false, false, 225), "html", null, true);
                echo "\">
                                      <a href=\"";
                // line 226
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lignepanier_delete_with_ajax", ["idlignepanier" => twig_get_attribute($this->env, $this->source, $context["ligne"], "idlignepanier", [], "any", false, false, false, 226)]), "html", null, true);
                echo "\">Supprimer</a>                                     
                                    </div> 
                                  </td>
                                  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
                                  <script>
                                   \$(document).ready(function() {
                                     \$('.delete-product-button').click(function(e) {
                                     e.preventDefault(); 
                                     var idlignepanier = \$(this).data('idlignepanier');
                                     \$.ajax({
                                    method: 'POST',
                                    url: \"";
                // line 237
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lignepanier_delete_with_ajax", ["idlignepanier" => "idlignepanier"]);
                echo "\".replace('idlignepanier', idlignepanier),
                                    data: {'_token': '";
                // line 238
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("deleteproduit"), "html", null, true);
                echo "'},
                                    success: function(response) {
                              if (response.success) {
                                    \$('tr[data-idlignepanier=' + idlignepanier + ']').remove();
                                 
                                      \$(this).remove();
                                      var total = 0;
                                      \$('.total').each(function() { 
                                      total += parseFloat(\$(this).text()); 
                                      });
                                      \$('#total').text(total.toFixed(2) + ' Tnd'); 
                                      var count = \$('.count').length;
                                      \$('#count').text(count);

                                    alert('Le produit a été supprimé avec succès');
                                    location.reload()
                                   } else {
                                  alert('Erreur lors de la suppression du produit');
                                 }
                               },
                              error: function() {
                                alert('Erreur lors de la communication avec le serveur');
                             }
                          });
                       });
                     });
</script>
                                    
                                </tr>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 268
            echo "                            </tbody>
                          </table>
                        ";
        } else {
            // line 271
            echo "                          <div class=\"section-heading\">
                           
                            <h2   class=\"text-center\"> Votre panier est <em>vide</em> </h2>
                          </div>
                        ";
        }
        // line 276
        echo "                        
                            <div class=\"line-dec\"></div>
                        </div>
                   </div>
               </div>
            </div>
           
            
            <table class=\"carte-table\">
              <thead>
                <tr>
                  <th  class=\"total\"><h5>Nombre de produits: ";
        // line 287
        echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 287, $this->source); })()), "html", null, true);
        echo "</h5></th>
                  <th  class=\"count\"><h5>Montant total: ";
        // line 288
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 288, $this->source); })()), "html", null, true);
        echo "</h5></th>
                  <th>
                    <div class=\"main-button\">
                      <a href=\"";
        // line 291
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout", ["idpanier" => "idpanier"]);
        echo "\">Payer</a>
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

<script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

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
        return array (  511 => 23,  507 => 22,  503 => 21,  499 => 20,  495 => 19,  490 => 16,  480 => 15,  446 => 342,  392 => 291,  386 => 288,  382 => 287,  369 => 276,  362 => 271,  357 => 268,  321 => 238,  317 => 237,  303 => 226,  299 => 225,  293 => 222,  284 => 216,  275 => 210,  265 => 203,  256 => 197,  247 => 191,  242 => 188,  238 => 187,  222 => 173,  220 => 172,  168 => 123,  164 => 122,  65 => 25,  63 => 15,  58 => 13,  44 => 1,);
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
<!-- ***** Main Banner Area Start ***** -->
<div class=\"page-heading normal-space\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
     
        <h2>Votre Panier</h2>
        
        <div class=\"buttons\">
          <div class=\"main-button\">
            <a href=\"#\">Historique de vos paiements</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
</div>
<!-- ***** Main Banner Area End ***** -->


<div class=\"currently-market\">
  <div class=\"container\">
  <div class=\"row\">
          
        

            <div class=\"col-lg-12\">
                <div class=\"row grid\">
                    <div>
                   
                        <div>
                          <div class=\"line-dec\"></div>
                          {% if lignesPanier is not empty %}
                          <table class=\"carte-table\" border=\"0,5\"  class=\"currently-market\"  class=\"item\">
                            <thead  class=\"carte-table\">
                              <tr>
                                <th class=\"text-center\"><h6>Photo</h6></th>
                                <th class=\"text-center\"><h6>Nom de la photo</h6></th>
                                <th class=\"text-center\"><h6>Prix hors TVA</h6></th>
                                <th class=\"text-center\"><h6>Taux TVA (%)</h6></th>
                                <th class=\"text-center\"><h6>Prix avec TVA</h6></th>
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
                                    <div class=\"right-content\">
                                      <h6>{{ tauxTVA }}</h6>
                                    </div> 
                                  </td>

                                  <td>
                                    <div class=\"right-content\">
                                      <h6>{{ montantTotal }}</h6>
                                    </div> 
                                  </td>


                                  <td>
                                    <h6>{{ ligne.dateajout ? ligne.dateajout|date('F jS, Y H:i') : '' }}</h6>
                                  </td>
                                  <td>                                    
                                    <div class=\"main-button delete-product-button\" data-idlignepanier=\"{{ ligne.idlignepanier }}\">
                                      <a href=\"{{ path('app_lignepanier_delete_with_ajax', {'idlignepanier': ligne.idlignepanier}) }}\">Supprimer</a>                                     
                                    </div> 
                                  </td>
                                  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
                                  <script>
                                   \$(document).ready(function() {
                                     \$('.delete-product-button').click(function(e) {
                                     e.preventDefault(); 
                                     var idlignepanier = \$(this).data('idlignepanier');
                                     \$.ajax({
                                    method: 'POST',
                                    url: \"{{ path('app_lignepanier_delete_with_ajax', {'idlignepanier': 'idlignepanier'}) }}\".replace('idlignepanier', idlignepanier),
                                    data: {'_token': '{{ csrf_token('deleteproduit') }}'},
                                    success: function(response) {
                              if (response.success) {
                                    \$('tr[data-idlignepanier=' + idlignepanier + ']').remove();
                                 
                                      \$(this).remove();
                                      var total = 0;
                                      \$('.total').each(function() { 
                                      total += parseFloat(\$(this).text()); 
                                      });
                                      \$('#total').text(total.toFixed(2) + ' Tnd'); 
                                      var count = \$('.count').length;
                                      \$('#count').text(count);

                                    alert('Le produit a été supprimé avec succès');
                                    location.reload()
                                   } else {
                                  alert('Erreur lors de la suppression du produit');
                                 }
                               },
                              error: function() {
                                alert('Erreur lors de la communication avec le serveur');
                             }
                          });
                       });
                     });
</script>
                                    
                                </tr>
                              {% endfor %}
                            </tbody>
                          </table>
                        {% else %}
                          <div class=\"section-heading\">
                           
                            <h2   class=\"text-center\"> Votre panier est <em>vide</em> </h2>
                          </div>
                        {% endif %}
                        
                            <div class=\"line-dec\"></div>
                        </div>
                   </div>
               </div>
            </div>
           
            
            <table class=\"carte-table\">
              <thead>
                <tr>
                  <th  class=\"total\"><h5>Nombre de produits: {{ count }}</h5></th>
                  <th  class=\"count\"><h5>Montant total: {{ total }}</h5></th>
                  <th>
                    <div class=\"main-button\">
                      <a href=\"{{ path('checkout',{'idpanier': 'idpanier'})}}\">Payer</a>
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

<script src=\"{{ asset('bundles/jquery/jquery.min.js') }}\"></script>

</body>




















", "panier/show.html.twig", "C:\\Users\\aouad\\Desktop\\Pidev web\\ArtounsiSymfony-master\\templates\\panier\\show.html.twig");
    }
}
