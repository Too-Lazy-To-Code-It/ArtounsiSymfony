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

/* produits/index.html.twig */
class __TwigTemplate_fc4cb44fbacc2fc9eee1ae6a08caaabe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/index.html.twig"));

        // line 1
        echo "
  <head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <title>Liberty Template - Create NFT Page</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "<!--


TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
  </head>


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
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                        <li><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_show", ["idpanier" => "1"]);
        echo "\">Panier</a></li>
                        <li><a href=\"";
        // line 70
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
<div class=\"page-heading normal-space\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6>Vous etes les bienvenues</h6>
          <h2>Vue des produits</h2>
          
          <div class=\"buttons\">
            <div class=\"main-button\">
              <a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_new");
        echo "\">Ajouter un produit</a>
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
                <div class=\"section-heading\">
                    <div class=\"line-dec\"></div>
                    <h2><em>Les produits</em> dans le Shop</h2>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"filters\">
                    
                    <ul>
                        <li data-filter=\"*\"  class=\"active\">All Items</li>
                        <li data-filter=\".msc\">Music Art</li>
                        <li data-filter=\".dig\">Digital Art</li>
                        <li data-filter=\".blc\">Blockchain</li>
                        <li data-filter=\".vtr\">Virtual</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"row grid\">
                    <div class=\"col-lg-6 currently-market-item all msc\">
                        ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 129, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 130
            echo "                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 132))), "html", null, true);
            echo "\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 135), "html", null, true);
            echo "</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>nom user<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                                
                    <br><strong> ";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 143), "html", null, true);
            echo "</strong><br>
                    <em> ";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "idcategorie", [], "any", false, false, false, 144), "html", null, true);
            echo " </em>
                  </span>
                                <span class=\"ends\">
                    <em>";
            // line 147
            ((twig_get_attribute($this->env, $this->source, $context["produit"], "dateajout", [], "any", false, false, false, 147)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "dateajout", [], "any", false, false, false, 147), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</em>
                  </span>
                                <div class=\"main-button\">
                                    <a href=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_show", ["idproduit" => twig_get_attribute($this->env, $this->source, $context["produit"], "idproduit", [], "any", false, false, false, 150)]), "html", null, true);
            echo "\"   classe=\"active\" >View Item Details</a>
                                    
                                </div>
                            </div>
                        </div>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "
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
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>


<script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
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
        return "produits/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 23,  345 => 22,  341 => 21,  337 => 20,  333 => 19,  328 => 16,  318 => 15,  299 => 197,  295 => 196,  291 => 195,  285 => 192,  281 => 191,  276 => 189,  272 => 188,  238 => 156,  226 => 150,  220 => 147,  214 => 144,  210 => 143,  199 => 135,  193 => 132,  189 => 130,  185 => 129,  147 => 94,  120 => 70,  116 => 69,  112 => 68,  68 => 26,  66 => 15,  61 => 13,  53 => 8,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
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
<!--


TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
  </head>


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
                        <li><a href=\"{{ path('app_panier_show' , {'idpanier': '1'}) }}\">Panier</a></li>
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
<div class=\"page-heading normal-space\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6>Vous etes les bienvenues</h6>
          <h2>Vue des produits</h2>
          
          <div class=\"buttons\">
            <div class=\"main-button\">
              <a href=\"{{ path('app_produits_new') }}\">Ajouter un produit</a>
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
                <div class=\"section-heading\">
                    <div class=\"line-dec\"></div>
                    <h2><em>Les produits</em> dans le Shop</h2>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"filters\">
                    
                    <ul>
                        <li data-filter=\"*\"  class=\"active\">All Items</li>
                        <li data-filter=\".msc\">Music Art</li>
                        <li data-filter=\".dig\">Digital Art</li>
                        <li data-filter=\".blc\">Blockchain</li>
                        <li data-filter=\".vtr\">Virtual</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"row grid\">
                    <div class=\"col-lg-6 currently-market-item all msc\">
                        {% for produit in produits %}
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"{{ asset('uploads/images/' ~ produit.image) }}\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>{{ produit.nom }}</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>nom user<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                                
                    <br><strong> {{ produit.prix }}</strong><br>
                    <em> {{ produit.idcategorie}} </em>
                  </span>
                                <span class=\"ends\">
                    <em>{{ produit.dateajout ? produit.dateajout|date('Y-m-d H:i:s') : '' }}</em>
                  </span>
                                <div class=\"main-button\">
                                    <a href=\"{{ path('app_produits_show', {'idproduit': produit.idproduit}) }}\"   classe=\"active\" >View Item Details</a>
                                    
                                </div>
                            </div>
                        </div>
                 {% endfor %}

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



", "produits/index.html.twig", "C:\\Users\\aouad\\Desktop\\Pidev web\\ArtounsiSymfony-master\\templates\\produits\\index.html.twig");
    }
}
