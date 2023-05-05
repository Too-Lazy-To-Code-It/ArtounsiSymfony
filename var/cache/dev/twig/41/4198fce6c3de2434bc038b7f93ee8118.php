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

/* comment/edit.html.twig */
class __TwigTemplate_ad254bfc730434d1c18eac8711cb93ae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comment/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comment/edit.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"), "html", null, true);
        echo "\"
          rel=\"stylesheet\">
    ";
        // line 4
        $this->displayBlock('stylesheet', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 5
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


        <!-- Additional CSS Files -->
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.css"), "html", null, true);
        echo "\"/>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 70
        echo "
    <div class=\"item-details-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-heading\">
                        <div class=\"line-dec\"></div>
                        <h2>Edit <em>The</em> categories</h2>
                    </div>
                </div>
                <div class=\"col-lg-12\">
                    <form id=\"contact\" action=\"\" method=\"post\">
                        <div class=\"row\">
                            <h1>Edit Comment</h1>

                            ";
        // line 85
        echo twig_include($this->env, $context, "comment/_form.html.twig", ["button_label" => "Update"]);
        echo "
                            ";
        // line 86
        echo twig_include($this->env, $context, "comment/_delete_form.html.twig");
        echo "

                            <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_index");
        echo "\">back to list</a>


                        </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 96
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 19
        echo "

        <header class=\"header-area header-sticky\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <nav class=\"main-nav\">
                            <!-- ***** Logo Start ***** -->
                            <a href=\"index.html\" class=\"logo\">
                                <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <ul class=\"nav\">
                                <div class=\"dropdown\">
                                    <li><a>Art</a></li>
                                    <div class=\"dropdown-content\">
                                        <li><a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_explore");
        echo "\">Explore</a></li>
                                        <li><a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\">Blog</a></li>
                                        <li><a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        echo "\">Studios</a></li>
                                        <li><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\">Create Yours</a></li>

                                    </div>
                                </div>
                                <li><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">Offres</a></li>
                                <li><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
        echo "\">Demandes</a></li>
                                <li><a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                                <li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_show", ["idpanier" => "1"]);
        echo "\">Panier</a></li>
                                <li><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\">Challenges</a></li>
                                <li><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\">Tutoriels</a></li>
                                ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "type", [], "any", false, false, false, 49) == "Admin")) {
            // line 50
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_studiodashboard");
            echo "\">dashboard </a></li>
                                ";
        }
        // line 52
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "idUser", [], "any", false, false, false, 52) == null)) {
            // line 53
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_login");
            echo "\">Log In</a></li>
                                ";
        } else {
            // line 55
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_logout");
            echo "\">Logout</a></li>
                                ";
        }
        // line 57
        echo "                            </ul>
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

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 96
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 97
        echo "        <footer>
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
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "comment/edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  324 => 97,  314 => 96,  292 => 57,  286 => 55,  280 => 53,  277 => 52,  271 => 50,  269 => 49,  265 => 48,  261 => 47,  257 => 46,  253 => 45,  249 => 44,  245 => 43,  238 => 39,  234 => 38,  230 => 37,  226 => 36,  215 => 28,  204 => 19,  194 => 18,  184 => 96,  173 => 88,  168 => 86,  164 => 85,  147 => 70,  144 => 18,  134 => 17,  122 => 13,  118 => 12,  114 => 11,  110 => 10,  106 => 9,  98 => 5,  79 => 4,  73 => 2,  63 => 1,  53 => 17,  50 => 16,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
    <link href=\"{{ asset('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap') }}\"
          rel=\"stylesheet\">
    {% block stylesheet %}
        <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">


        <!-- Additional CSS Files -->
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-liberty-market.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('https://unpkg.com/swiper@7/swiper-bundle.min.css') }}\"/>
    {% endblock %}
{% endblock %}

{% block body %}
    {% block header %}


        <header class=\"header-area header-sticky\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <nav class=\"main-nav\">
                            <!-- ***** Logo Start ***** -->
                            <a href=\"index.html\" class=\"logo\">
                                <img src=\"{{ asset('assets/images/logo.png') }}\" alt=\"\">
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
                                {% if(user.type=='Admin') %}
                                    <li><a href=\"{{ path('app_dashboard_studiodashboard') }}\">dashboard </a></li>
                                {% endif %}
                                {% if(user.idUser==null) %}
                                    <li><a href=\"{{ path('app_allusers_login') }}\">Log In</a></li>
                                {% else %}
                                    <li><a href=\"{{ path('app_allusers_logout') }}\">Logout</a></li>
                                {% endif %}
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

    {% endblock %}

    <div class=\"item-details-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-heading\">
                        <div class=\"line-dec\"></div>
                        <h2>Edit <em>The</em> categories</h2>
                    </div>
                </div>
                <div class=\"col-lg-12\">
                    <form id=\"contact\" action=\"\" method=\"post\">
                        <div class=\"row\">
                            <h1>Edit Comment</h1>

                            {{ include('comment/_form.html.twig', {'button_label': 'Update'}) }}
                            {{ include('comment/_delete_form.html.twig') }}

                            <a href=\"{{ path('app_comment_index') }}\">back to list</a>


                        </div>
                </div>
            </div>
        </div>
    </div>
    {% block footer %}
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
    {% endblock %}
{% endblock %}
", "comment/edit.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\comment\\edit.html.twig");
    }
}
