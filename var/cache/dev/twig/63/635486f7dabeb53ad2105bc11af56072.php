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

/* post/index.html.twig */
class __TwigTemplate_89ec29e4e5a8c7600b67d2962892cb00 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Post index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 6
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

        // line 7
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\"href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.css"), "html", null, true);
        echo "\"/>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 73
        echo "
<div class=\"item-details-page\">
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
            <div class=\"section-heading\">
                <div class=\"line-dec\"></div>
                <h2>View <em>The</em> Post</h2>
            </div>
            </div>
            <div class=\"col-lg-12\">
    <form id=\"contact\" action=\"\" method=\"post\">
                            <div class=\"row\">

                <h1>Post index</h1>

                <table class=\"table\">
                    <thead>
                        <tr style=\"color: white;\">
                            <th>Id_post</th>
                            <th>Post Description</th>
                            <th>Media</th>
                            <th>Post Title</th>
                            <th>Post CreationDate</th>
                            <th>Post Type</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 102, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 103
            echo "                    ";
            // line 104
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["post"], "postType", [], "any", false, false, false, 104) == "portfolio")) {
                // line 105
                echo "                        <tr>
                            <td style=\"color: white;\">";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "any", false, false, false, 106), "html", null, true);
                echo "</td>
                            <td style=\"color: white;\">";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "descriptionP", [], "any", false, false, false, 107), "html", null, true);
                echo "</td>
                            
                            <td><img src=\"";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getMedia", [], "method", false, false, false, 109), "html", null, true);
                echo "\" alt=\"\" width=\"10%\" height=\"10%\"></td>
                            ";
                // line 111
                echo "                            ";
                // line 112
                echo "


                            <td style=\"color: white;\">";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titleP", [], "any", false, false, false, 115), "html", null, true);
                echo "</td>
                            <td style=\"color: white;\">";
                // line 116
                ((twig_get_attribute($this->env, $this->source, $context["post"], "dateP", [], "any", false, false, false, 116)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "dateP", [], "any", false, false, false, 116), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                echo "</td>
                            
                            <td style=\"color: white;\"> ";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "postType", [], "any", false, false, false, 118), "html", null, true);
                echo "</td>
                            
                            <td>
                                ";
                // line 122
                echo "
                                ";
                // line 123
                echo twig_include($this->env, $context, "post/_delete_form.html.twig");
                echo "
                                <a href=\"";
                // line 124
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_edit", ["id_post" => twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "any", false, false, false, 124)]), "html", null, true);
                echo "\">edit</a>
                            </td>
                        </tr>
                        ";
            }
            // line 128
            echo "                    ";
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
            // line 129
            echo "                        <tr>
                            <td colspan=\"7\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "                    </tbody>
                </table>

    <a href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\">Create new</a>

            </div>
            </div>
        </div>
    </div>
    </div>
";
        // line 143
        $this->displayBlock('footer', $context, $blocks);
        // line 156
        echo "    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "

        <header class=\"header-area header-sticky\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <nav class=\"main-nav\">
                            <!-- ***** Logo Start ***** -->
                            <a href=\"index.html\" class=\"logo\">
                                <img src=\"";
        // line 31
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
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_explore");
        echo "\">Explore</a></li>
                                        <li><a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\">Blog</a></li>
                                        <li><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        echo "\">Studios</a></li>
                                        <li><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\">Create Yours</a></li>

                                    </div>
                                </div>
                                <li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">Offres</a></li>
                                <li><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
        echo "\">Demandes</a></li>
                                <li><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                                <li><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_show", ["idpanier" => "1"]);
        echo "\">Panier</a></li>
                                <li><a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\">Challenges</a></li>
                                <li><a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\">Tutoriels</a></li>
                                ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "type", [], "any", false, false, false, 52) == "Admin")) {
            // line 53
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_studiodashboard");
            echo "\">dashboard </a></li>
                                ";
        }
        // line 55
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "idUser", [], "any", false, false, false, 55) == null)) {
            // line 56
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_login");
            echo "\">Log In</a></li>
                                ";
        } else {
            // line 58
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_logout");
            echo "\">Logout</a></li>
                                ";
        }
        // line 60
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

    // line 143
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 144
        echo "<footer>
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  460 => 144,  450 => 143,  428 => 60,  422 => 58,  416 => 56,  413 => 55,  407 => 53,  405 => 52,  401 => 51,  397 => 50,  393 => 49,  389 => 48,  385 => 47,  381 => 46,  374 => 42,  370 => 41,  366 => 40,  362 => 39,  351 => 31,  340 => 22,  330 => 21,  319 => 156,  317 => 143,  307 => 136,  302 => 133,  293 => 129,  280 => 128,  273 => 124,  269 => 123,  266 => 122,  260 => 118,  255 => 116,  251 => 115,  246 => 112,  244 => 111,  240 => 109,  235 => 107,  231 => 106,  228 => 105,  225 => 104,  223 => 103,  205 => 102,  174 => 73,  172 => 21,  169 => 20,  159 => 19,  147 => 15,  143 => 14,  139 => 13,  135 => 12,  131 => 11,  123 => 7,  104 => 6,  99 => 5,  89 => 4,  70 => 3,  60 => 19,  57 => 18,  55 => 4,  53 => 3,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block title %}Post index{% endblock %}
{% block head %}
    <link href=\"{{asset('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap')}}\" rel=\"stylesheet\">
    {% block stylesheet %}
    <link href=\"{{asset('vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">


    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/fontawesome.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/templatemo-liberty-market.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/owl.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/animate.css')}}\">
    <link rel=\"stylesheet\"href=\"{{asset('https://unpkg.com/swiper@7/swiper-bundle.min.css')}}\"/>
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
                                <img src=\"{{asset('assets/images/logo.png')}}\" alt=\"\">
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
                <h2>View <em>The</em> Post</h2>
            </div>
            </div>
            <div class=\"col-lg-12\">
    <form id=\"contact\" action=\"\" method=\"post\">
                            <div class=\"row\">

                <h1>Post index</h1>

                <table class=\"table\">
                    <thead>
                        <tr style=\"color: white;\">
                            <th>Id_post</th>
                            <th>Post Description</th>
                            <th>Media</th>
                            <th>Post Title</th>
                            <th>Post CreationDate</th>
                            <th>Post Type</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for post in posts %}
                    {# Conditon to show only if the post is of type portfolio #}
                    {% if post.postType == 'portfolio' %}
                        <tr>
                            <td style=\"color: white;\">{{ post.getId }}</td>
                            <td style=\"color: white;\">{{ post.descriptionP }}</td>
                            
                            <td><img src=\"{{ post.getMedia() }}\" alt=\"\" width=\"10%\" height=\"10%\"></td>
                            {# <td><img src=\"{{ asset('img/'~post.media) }}\" alt=\"{{ post.titleP }}\"></td> #}
                            {# <td><img src=\"{{ asset('img/'~post.media) }}\" alt=\"{{ post.titleP }}\" width=\"50\" height=\"50\"></td> #}



                            <td style=\"color: white;\">{{ post.titleP }}</td>
                            <td style=\"color: white;\">{{ post.dateP ? post.dateP|date('Y-m-d H:i:s') : '' }}</td>
                            
                            <td style=\"color: white;\"> {{ post.postType }}</td>
                            
                            <td>
                                {# <a href=\"{{ path('app_post_show', {'id_post': post.getId}) }}\">show</a> #}

                                {{ include('post/_delete_form.html.twig') }}
                                <a href=\"{{ path('app_post_edit', {'id_post': post.getId}) }}\">edit</a>
                            </td>
                        </tr>
                        {% endif %}
                    {% else %}
                        <tr>
                            <td colspan=\"7\">no records found</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>

    <a href=\"{{ path('app_post_new') }}\">Create new</a>

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
                    Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"https://templatemo.com\" target=\"_blank\">TemplateMo</a></p>
            </div>
        </div>
    </div>
</footer>
{% endblock %}
    
{% endblock %}
", "post/index.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\post\\index.html.twig");
    }
}
