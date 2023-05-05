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
class __TwigTemplate_21d9aaed6f4bfa25d8b0add919a677b6 extends Template
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
        echo "<head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\"
          rel=\"stylesheet\">

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
        echo "    <!--


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
                        <div class=\"dropdown\">
                            <li><a>Art</a></li>
                            <div class=\"dropdown-content\">
                                <li><a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_explore");
        echo "\">Explore</a></li>
                                <li><a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\">Blog</a></li>
                                <li><a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        echo "\">Studios</a></li>
                                <li><a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\">Create Yours</a></li>

                            </div>
                        </div>
                        <li><a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">Offres</a></li>
                        <li><a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
        echo "\">Demandes</a></li>
                        <li><a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                        <li><a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_show", ["idpanier" => "1"]);
        echo "\">Panier</a></li>
                        <li><a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\">Challenges</a></li>
                        <li><a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\">Tutoriels</a></li>
                        ";
        // line 85
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 85, $this->source); })()), "type", [], "any", false, false, false, 85) == "Admin")) {
            // line 86
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_studiodashboard");
            echo "\">dashboard </a></li>
                        ";
        }
        // line 88
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 88, $this->source); })()), "idUser", [], "any", false, false, false, 88) == null)) {
            // line 89
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_login");
            echo "\">Log In</a></li>
                        ";
        } else {
            // line 91
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_logout");
            echo "\">Logout</a></li>
                        ";
        }
        // line 93
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
        // line 115
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
            <div class=\"col-lg-12\">
                <div class=\"filters\">

                    <ul>
                        <li data-filter=\"*\" class=\"active\">Tous</li>
                        <li data-filter=\".msc\">2D</li>
                        <li data-filter=\".dig\">3D</li>
                    </ul>
                </div>

                <br></br>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"row grid\">
                    ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 149, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 150
            echo "                        <div class=\"col-lg-6 currently-market-item all filters.";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "idcategorie", [], "any", false, false, false, 150), "getNameCategory", [], "method", false, false, false, 150), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "idcategorie", [], "any", false, false, false, 150), "getNameCategory", [], "method", false, false, false, 150) == "2D")) {
                echo " msc";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "idcategorie", [], "any", false, false, false, 150), "getNameCategory", [], "method", false, false, false, 150) == "3D")) {
                echo " ";
            } else {
                echo "dig";
            }
            echo "\">
                            <div class=\"item\">
                                <div class=\"left-image\">
                                    <img src=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 153))), "html", null, true);
            echo "\" alt=\"\"
                                         style=\"border-radius: 20px; min-width: 195px;\">
                                </div>
                                <div class=\"right-content\">
                                    <h4>";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 157), "html", null, true);
            echo "</h4>
                                    <span class=\"author\">
                                    <img src=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 159, $this->source); })()), "avatar", [], "any", false, false, false, 159))), "html", null, true);
            echo "\" alt=\"\"
                                         style=\"max-width: 50px; border-radius: 50%;\" width=\"50\" height=\"50\">
                                    <h6>";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 161, $this->source); })()), "name", [], "any", false, false, false, 161), "html", null, true);
            echo "<br><a>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 161, $this->source); })()), "nickname", [], "any", false, false, false, 161), "html", null, true);
            echo "</a></h6>
                                </span>
                                    <div class=\"line-dec\"></div>
                                    <span class=\"bid\">
                                    <br><strong> ";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 165), "html", null, true);
            echo "</strong><br>
                                    <em> ";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "idcategorie", [], "any", false, false, false, 166), "html", null, true);
            echo " </em>
                                </span>
                                    <span class=\"ends\">
                                    <em>";
            // line 169
            ((twig_get_attribute($this->env, $this->source, $context["produit"], "dateajout", [], "any", false, false, false, 169)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "dateajout", [], "any", false, false, false, 169), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</em>
                                </span>
                                    <div class=\"main-button\">
                                        <a href=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_show", ["idproduit" => twig_get_attribute($this->env, $this->source, $context["produit"], "idproduit", [], "any", false, false, false, 172)]), "html", null, true);
            echo "\"
                                           classe=\"active\">View Item Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                </div>
            </div>


        </div>


    </div>
    ";
        // line 187
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env,         // line 188
(isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 188, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", ["queryParam1" => "param1 value", "queryParam2" => "param2 value"], ["align" => "center"]);
        // line 199
        echo "
</div>


<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>Copyright © 2022 <a href=\"#\">Liberty</a> NFT Marketplace Co., Ltd. All rights reserved.
                    &nbsp;&nbsp;
                    Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"https://templatemo.com\"
                                   target=\"_blank\">TemplateMo</a></p>
            </div>
        </div>
    </div>
</footer>


<!-- Scripts -->
<!-- Bootstrap core JavaScript -->

<script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>


<script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 229
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
        <link rel=\"stylesheet\" href='https://unpkg.com/swiper@7/swiper-bundle.min.css'>

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
        return array (  421 => 22,  417 => 21,  413 => 20,  409 => 19,  404 => 16,  394 => 15,  376 => 229,  372 => 228,  368 => 227,  362 => 224,  358 => 223,  353 => 221,  349 => 220,  326 => 199,  324 => 188,  323 => 187,  313 => 179,  300 => 172,  294 => 169,  288 => 166,  284 => 165,  275 => 161,  270 => 159,  265 => 157,  258 => 153,  244 => 150,  240 => 149,  203 => 115,  179 => 93,  173 => 91,  167 => 89,  164 => 88,  158 => 86,  156 => 85,  152 => 84,  148 => 83,  144 => 82,  140 => 81,  136 => 80,  132 => 79,  125 => 75,  121 => 74,  117 => 73,  113 => 72,  65 => 26,  63 => 15,  58 => 13,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\"
          rel=\"stylesheet\">

    <title>Liberty Template - Create NFT Page</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\">

    {% block stylesheets %}

        <!-- Additional CSS Files -->

        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-liberty-market.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
        <link rel=\"stylesheet\" href='https://unpkg.com/swiper@7/swiper-bundle.min.css'>

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
                        {% if(user.type=='Admin') %}
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
            <div class=\"col-lg-12\">
                <div class=\"filters\">

                    <ul>
                        <li data-filter=\"*\" class=\"active\">Tous</li>
                        <li data-filter=\".msc\">2D</li>
                        <li data-filter=\".dig\">3D</li>
                    </ul>
                </div>

                <br></br>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"row grid\">
                    {% for produit in produits %}
                        <div class=\"col-lg-6 currently-market-item all filters.{{ produit.idcategorie.getNameCategory() }}{% if produit.idcategorie.getNameCategory() == '2D' %} msc{% elseif produit.idcategorie.getNameCategory() == '3D' %} {% else %}dig{% endif %}\">
                            <div class=\"item\">
                                <div class=\"left-image\">
                                    <img src=\"{{ asset('uploads/images/' ~ produit.image) }}\" alt=\"\"
                                         style=\"border-radius: 20px; min-width: 195px;\">
                                </div>
                                <div class=\"right-content\">
                                    <h4>{{ produit.nom }}</h4>
                                    <span class=\"author\">
                                    <img src=\"{{ asset('uploads/Avatars/' ~ user.avatar) }}\" alt=\"\"
                                         style=\"max-width: 50px; border-radius: 50%;\" width=\"50\" height=\"50\">
                                    <h6>{{ user.name }}<br><a>{{ user.nickname }}</a></h6>
                                </span>
                                    <div class=\"line-dec\"></div>
                                    <span class=\"bid\">
                                    <br><strong> {{ produit.prix }}</strong><br>
                                    <em> {{ produit.idcategorie }} </em>
                                </span>
                                    <span class=\"ends\">
                                    <em>{{ produit.dateajout ? produit.dateajout|date('Y-m-d H:i:s') : '' }}</em>
                                </span>
                                    <div class=\"main-button\">
                                        <a href=\"{{ path('app_produits_show', {'idproduit': produit.idproduit}) }}\"
                                           classe=\"active\">View Item Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>


        </div>


    </div>
    {{ knp_pagination_render(
        produits,
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


<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>Copyright © 2022 <a href=\"#\">Liberty</a> NFT Marketplace Co., Ltd. All rights reserved.
                    &nbsp;&nbsp;
                    Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"https://templatemo.com\"
                                   target=\"_blank\">TemplateMo</a></p>
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



", "produits/index.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\produits\\index.html.twig");
    }
}
