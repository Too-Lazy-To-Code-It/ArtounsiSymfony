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

/* comment/index.html.twig */
class __TwigTemplate_26f52ac4a5bae777a1bc28adb12a2a45 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comment/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comment/index.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 16
        echo "

";
        // line 18
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

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('header', $context, $blocks);
        // line 72
        echo "
    <div class=\"item-details-page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-heading\">
                        <div class=\"line-dec\"></div>
                        <h2>View <em>Your</em> Comments</h2>
                    </div>
                </div>
                <div class=\"col-lg-12\">
                    <form id=\"contact\" action=\"\" method=\"post\">
                        <div class=\"row\">

                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th style=\"color: white;\">Id_comment</th>
                                    <th style=\"color: white;\">Date_comment</th>
                                    <th style=\"color: white;\">Comment</th>
                                    <th style=\"color: white;\">actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 96, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 97
            echo "                                    <tr>
                                        <td style=\"color: white;\">";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getId", [], "any", false, false, false, 98), "html", null, true);
            echo "</td>
                                        <td style=\"color: white;\">";
            // line 99
            ((twig_get_attribute($this->env, $this->source, $context["comment"], "dateComment", [], "any", false, false, false, 99)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "dateComment", [], "any", false, false, false, 99), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                                        <td style=\"color: white;\">";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>
                                        <td>
                                            <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_edit", ["id_comment" => twig_get_attribute($this->env, $this->source, $context["comment"], "getId", [], "any", false, false, false, 102)]), "html", null, true);
            echo "\">edit</a>
                                            ";
            // line 103
            echo twig_include($this->env, $context, "comment/_delete_form.html.twig");
            echo "
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 107
            echo "                                    <tr>
                                        <td colspan=\"4\">no records found</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                                </tbody>
                            </table>

                            ";
        // line 117
        echo "
                            ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 118, $this->source); })()), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 119
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_explore", ["id_post" => twig_get_attribute($this->env, $this->source, $context["post"], "getIdPost", [], "any", false, false, false, 119)]), "html", null, true);
            echo "\">Return to explore
                                    page</a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                        </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 127
        $this->displayBlock('footer', $context, $blocks);
        // line 141
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "

        <header class=\"header-area header-sticky\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <nav class=\"main-nav\">
                            <!-- ***** Logo Start ***** -->
                            <a href=\"index.html\" class=\"logo\">
                                <img src=\"";
        // line 30
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
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_explore");
        echo "\">Explore</a></li>
                                        <li><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\">Blog</a></li>
                                        <li><a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        echo "\">Studios</a></li>
                                        <li><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\">Create Yours</a></li>

                                    </div>
                                </div>
                                <li><a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">Offres</a></li>
                                <li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
        echo "\">Demandes</a></li>
                                <li><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                                <li><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_show", ["idpanier" => "1"]);
        echo "\">Panier</a></li>
                                <li><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\">Challenges</a></li>
                                <li><a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\">Tutoriels</a></li>
                                ";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "type", [], "any", false, false, false, 51) == "Admin")) {
            // line 52
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_studiodashboard");
            echo "\">dashboard </a></li>
                                ";
        }
        // line 54
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "idUser", [], "any", false, false, false, 54) == null)) {
            // line 55
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_login");
            echo "\">Log In</a></li>
                                ";
        } else {
            // line 57
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_logout");
            echo "\">Logout</a></li>
                                ";
        }
        // line 59
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

    // line 127
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 128
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
        return "comment/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  412 => 128,  402 => 127,  380 => 59,  374 => 57,  368 => 55,  365 => 54,  359 => 52,  357 => 51,  353 => 50,  349 => 49,  345 => 48,  341 => 47,  337 => 46,  333 => 45,  326 => 41,  322 => 40,  318 => 39,  314 => 38,  303 => 30,  292 => 21,  282 => 20,  271 => 141,  269 => 127,  262 => 122,  252 => 119,  248 => 118,  245 => 117,  240 => 111,  231 => 107,  214 => 103,  210 => 102,  205 => 100,  201 => 99,  197 => 98,  194 => 97,  176 => 96,  150 => 72,  148 => 20,  145 => 19,  135 => 18,  123 => 13,  119 => 12,  115 => 11,  111 => 10,  107 => 9,  99 => 5,  80 => 4,  74 => 2,  64 => 1,  54 => 18,  50 => 16,  48 => 1,);
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
                        <h2>View <em>Your</em> Comments</h2>
                    </div>
                </div>
                <div class=\"col-lg-12\">
                    <form id=\"contact\" action=\"\" method=\"post\">
                        <div class=\"row\">

                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th style=\"color: white;\">Id_comment</th>
                                    <th style=\"color: white;\">Date_comment</th>
                                    <th style=\"color: white;\">Comment</th>
                                    <th style=\"color: white;\">actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for comment in comments %}
                                    <tr>
                                        <td style=\"color: white;\">{{ comment.getId }}</td>
                                        <td style=\"color: white;\">{{ comment.dateComment ? comment.dateComment|date('Y-m-d H:i:s') : '' }}</td>
                                        <td style=\"color: white;\">{{ comment.comment }}</td>
                                        <td>
                                            <a href=\"{{ path('app_comment_edit', {'id_comment': comment.getId}) }}\">edit</a>
                                            {{ include('comment/_delete_form.html.twig') }}
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"4\">no records found</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>

                            {# {% for post in posts %}
    <a href=\"{{ path('app_comment_new', { 'id_post': post.getIdPost }) }}\">Create new comment for post {{ post.getIdPost }}</a>
{% endfor %} #}

                            {% for post in posts|slice(0, 1) %}
                                <a href=\"{{ path('app_explore', { 'id_post': post.getIdPost }) }}\">Return to explore
                                    page</a>
                            {% endfor %}
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
", "comment/index.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\comment\\index.html.twig");
    }
}
