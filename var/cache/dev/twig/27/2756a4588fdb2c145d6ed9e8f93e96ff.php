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

/* payment/success.html.twig */
class __TwigTemplate_6ff5480d46a0a98e88f01775a298f165 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/success.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/success.html.twig"));

        // line 1
        echo "
<html lang=\"en\"><head>

  <meta charset=\"utf-8\">
  <meta name=\"author\" content=\"templatemo\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

  <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <title>Liberty NFT Marketplace - Explore Listing Page</title>

   <!-- Bootstrap core CSS -->
   <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

   ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "   
<!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
</head>

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
                    <!-- ***** Logo Start ***** -->
                    <a href=\"index.html\" class=\"logo\">
                      <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/LOGO2.png"), "html", null, true);
        echo "\" alt=\"\" style=\" width: 110px;\">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                        <div class=\"dropdown\">
                            <li><a>Art</a></li>
                            <div class=\"dropdown-content\">
                                <li><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_explore");
        echo "\">Explore</a></li>
                                <li><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\">Blog</a></li>
                                <li><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        echo "\">Studios</a></li>
                                <li><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\">Create Yours</a></li>

                            </div>
                        </div>
                        <li><a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">Offres</a></li>
                        <li><a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
        echo "\">Demandes</a></li>
                        <li><a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                        <li><a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_show", ["idpanier" => "1"]);
        echo "\">Panier</a></li>
                        <li><a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\">Challenges</a></li>
                        <li><a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\">Tutoriels</a></li>
                        ";
        // line 81
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 81, $this->source); })()), "type", [], "any", false, false, false, 81) == "Admin")) {
            // line 82
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_studiodashboard");
            echo "\">dashboard </a></li>
                        ";
        }
        // line 84
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 84, $this->source); })()), "idUser", [], "any", false, false, false, 84) == null)) {
            // line 85
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_login");
            echo "\">Log In</a></li>
                        ";
        } else {
            // line 87
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_logout");
            echo "\">Logout</a></li>
                        ";
        }
        // line 89
        echo "                    </ul>
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
                      <!-- ***** Logo Start ***** -->
                      <a href=\"index.html\" class=\"logo\">
                        <img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/LOGO2.png"), "html", null, true);
        echo "\" alt=\"\" style=\" width: 110px;\">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class=\"nav\">
                          <li><a href=\"index.html\">Home</a></li>
                          <li><a href=\"explore.html\" class=\"active\">Explore</a></li>
                          <li><a href=\"details.html\">Item Details</a></li>
                          <li><a href=\"Ajouter Produit .html\" class=\"active\">Add product</a></li>
                          <li><a href=\"author.html\">Author</a></li>
                          <li><a href=\"create.html\">Create Yours</a></li>
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
  
    <div class=\"page-heading\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
          
            <img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/succes.png"), "html", null, true);
        echo "\" alt=\"\" style=\"border-radius: 50px; width: 50px;\">
    
            <h6>Votre paiement a été effectuer avec succès</h6>
            <h2>Merci pour votre ordre!</h2>
          <p>
            Nous apprécions votre confiance!
            Si vous avez des questions, veuillez envoyer un e-mail
            <a href=\"mailto:orders@example.com\">orders@example.com</a>.
          </p>
          <div class=\"main-button\">
            <a href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdf", ["idpanier" => (isset($context["idpanier"]) || array_key_exists("idpanier", $context) ? $context["idpanier"] : (function () { throw new RuntimeError('Variable "idpanier" does not exist.', 161, $this->source); })())]), "html", null, true);
        echo "\">Télécharger Facture</a>
          </div>
          </div>
        </div>
      </div>
      <div class=\"featured-explore\">
        <div class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <div class=\"owl-features owl-carousel owl-loaded owl-drag\">
                
                
                
                
              <div class=\"owl-stage-outer\"><div class=\"owl-stage\" style=\"transform: translate3d(-3370px, 0px, 0px); transition: all 0.25s ease 0s; width: 5392px;\">
                
                ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 177, $this->source); })()), "getLignepaniers", [], "method", false, false, false, 177));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 178
            echo "                    <div class=\"owl-item\">
                      <div class=\"item\">
                        <div class=\"thumb\">
                          <img src=\"";
            // line 181
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "idproduit", [], "any", false, false, false, 181), "image", [], "any", false, false, false, 181))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "idproduit", [], "any", false, false, false, 181), "nom", [], "any", false, false, false, 181), "html", null, true);
            echo "\" style=\"border-radius: 20px;\">
                          <div class=\"hover-effect\">
                            <div class=\"content\">
                              <h4>";
            // line 184
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "idproduit", [], "any", false, false, false, 184), "nom", [], "any", false, false, false, 184), "html", null, true);
            echo "</h4>
                              <div class=\"main-button\">
                                 <a href=\"";
            // line 186
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "idproduit", [], "any", false, false, false, 186), "image", [], "any", false, false, false, 186))), "html", null, true);
            echo "\" download=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "idproduit", [], "any", false, false, false, 186), "nom", [], "any", false, false, false, 186), "html", null, true);
            echo ".png\">Download</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "                
                
                <div class=\"owl-item cloned\" style=\"width: 644px; margin-right: 30px;\"><div class=\"item\">
                
                  <div class=\"owl-nav\">
                    <button type=\"button\" role=\"presentation\" class=\"owl-prev\"><span aria-label=\"Previous\">‹</span></button>
                    <button type=\"button\" role=\"presentation\" class=\"owl-next\"><span aria-label=\"Next\">›</span></button>
                  </div>
                  <div class=\"owl-dots disabled\"></div>
                
                </div><div class=\"owl-nav\"><button type=\"button\" role=\"presentation\" class=\"owl-prev\"><span aria-label=\"Previous\">‹</span></button><button type=\"button\" role=\"presentation\" class=\"owl-next\"><span aria-label=\"Next\">›</span></button></div><div class=\"owl-dots disabled\"></div></div>
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
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>
    
    
    <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"//code.jquery.com/jquery.js\"></script>
    <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>

  
    
  </body>

</html>";
        
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
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
       <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
       <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
       <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
       <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.css"), "html", null, true);
        echo "\">
   
       <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/css/flashy.css"), "html", null, true);
        echo "\">
     
   ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "payment/success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 24,  434 => 22,  430 => 21,  426 => 20,  422 => 19,  418 => 18,  413 => 15,  403 => 14,  386 => 241,  380 => 238,  376 => 237,  372 => 236,  366 => 233,  362 => 232,  357 => 230,  353 => 229,  316 => 194,  300 => 186,  295 => 184,  287 => 181,  282 => 178,  278 => 177,  259 => 161,  246 => 151,  215 => 123,  179 => 89,  173 => 87,  167 => 85,  164 => 84,  158 => 82,  156 => 81,  152 => 80,  148 => 79,  144 => 78,  140 => 77,  136 => 76,  132 => 75,  125 => 71,  121 => 70,  117 => 69,  113 => 68,  102 => 60,  67 => 27,  65 => 14,  60 => 12,  53 => 8,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<html lang=\"en\"><head>

  <meta charset=\"utf-8\">
  <meta name=\"author\" content=\"templatemo\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

  <link href=\"{{asset('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap')}}\" rel=\"stylesheet\">
  <title>Liberty NFT Marketplace - Explore Listing Page</title>

   <!-- Bootstrap core CSS -->
   <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\">

   {% block stylesheets %}
    
       <!-- Additional CSS Files -->
     
       <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
       <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-liberty-market.css') }}\">
       <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
       <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
       <link rel=\"stylesheet\" href=\"{{ asset('https://unpkg.com/swiper@7/swiper-bundle.min.css') }}\">
   
       <link rel=\"stylesheet\" href=\"{{ asset('bundles/mercuryseriesflashy/css/flashy.css') }}\">
     
   {% endblock %}
   
<!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
</head>

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
                    <!-- ***** Logo Start ***** -->
                    <a href=\"index.html\" class=\"logo\">
                      <img src=\"{{ asset('assets/images/LOGO2.png') }}\" alt=\"\" style=\" width: 110px;\">
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
                      <!-- ***** Logo Start ***** -->
                      <a href=\"index.html\" class=\"logo\">
                        <img src=\"{{ asset('assets/images/LOGO2.png') }}\" alt=\"\" style=\" width: 110px;\">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class=\"nav\">
                          <li><a href=\"index.html\">Home</a></li>
                          <li><a href=\"explore.html\" class=\"active\">Explore</a></li>
                          <li><a href=\"details.html\">Item Details</a></li>
                          <li><a href=\"Ajouter Produit .html\" class=\"active\">Add product</a></li>
                          <li><a href=\"author.html\">Author</a></li>
                          <li><a href=\"create.html\">Create Yours</a></li>
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
  
    <div class=\"page-heading\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
          
            <img src=\"{{ asset('uploads/images/succes.png') }}\" alt=\"\" style=\"border-radius: 50px; width: 50px;\">
    
            <h6>Votre paiement a été effectuer avec succès</h6>
            <h2>Merci pour votre ordre!</h2>
          <p>
            Nous apprécions votre confiance!
            Si vous avez des questions, veuillez envoyer un e-mail
            <a href=\"mailto:orders@example.com\">orders@example.com</a>.
          </p>
          <div class=\"main-button\">
            <a href=\"{{ path('pdf',{'idpanier': idpanier}) }}\">Télécharger Facture</a>
          </div>
          </div>
        </div>
      </div>
      <div class=\"featured-explore\">
        <div class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <div class=\"owl-features owl-carousel owl-loaded owl-drag\">
                
                
                
                
              <div class=\"owl-stage-outer\"><div class=\"owl-stage\" style=\"transform: translate3d(-3370px, 0px, 0px); transition: all 0.25s ease 0s; width: 5392px;\">
                
                {% for ligne in panier.getLignepaniers() %}
                    <div class=\"owl-item\">
                      <div class=\"item\">
                        <div class=\"thumb\">
                          <img src=\"{{ asset('uploads/images/' ~ ligne.idproduit.image) }}\" alt=\"{{ ligne.idproduit.nom }}\" style=\"border-radius: 20px;\">
                          <div class=\"hover-effect\">
                            <div class=\"content\">
                              <h4>{{ ligne.idproduit.nom }}</h4>
                              <div class=\"main-button\">
                                 <a href=\"{{ asset('uploads/images/' ~ ligne.idproduit.image) }}\" download=\"{{ ligne.idproduit.nom }}.png\">Download</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    {% endfor %}
                
                
                <div class=\"owl-item cloned\" style=\"width: 644px; margin-right: 30px;\"><div class=\"item\">
                
                  <div class=\"owl-nav\">
                    <button type=\"button\" role=\"presentation\" class=\"owl-prev\"><span aria-label=\"Previous\">‹</span></button>
                    <button type=\"button\" role=\"presentation\" class=\"owl-next\"><span aria-label=\"Next\">›</span></button>
                  </div>
                  <div class=\"owl-dots disabled\"></div>
                
                </div><div class=\"owl-nav\"><button type=\"button\" role=\"presentation\" class=\"owl-prev\"><span aria-label=\"Previous\">‹</span></button><button type=\"button\" role=\"presentation\" class=\"owl-next\"><span aria-label=\"Next\">›</span></button></div><div class=\"owl-dots disabled\"></div></div>
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
    
    <script src=\"//code.jquery.com/jquery.js\"></script>
    <script src=\"{{ asset('bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>

  
    
  </body>

</html>", "payment/success.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\payment\\success.html.twig");
    }
}
