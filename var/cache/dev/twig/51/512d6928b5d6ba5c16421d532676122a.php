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

/* explore/details.html.twig */
class __TwigTemplate_6756a031b3603c817203eb7bca39af67 extends Template
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
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "explore/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "explore/details.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 27
        echo "

    ";
        // line 29
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
        echo "    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"), "html", null, true);
        echo "\"
          rel=\"stylesheet\">

    <title>Detail Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Additional CSS Files -->
    ";
        // line 15
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 22
        echo "



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 16
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.css"), "html", null, true);
        echo "\"/>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "
        <!-- ***** Preloader Start ***** -->
        ";
        // line 42
        echo "
        <header class=\"header-area header-sticky\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <nav class=\"main-nav\">
                            <!-- ***** Logo Start ***** -->
                            <a href=\"index.html\" class=\"logo\">
                                <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                                ";
        // line 52
        echo "                                ";
        // line 53
        echo "                            </a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <ul class=\"nav\">
                                <div class=\"dropdown\">
                                    <li><a>Art</a></li>
                                    <div class=\"dropdown-content\">
                                        <li><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_explore");
        echo "\">Explore</a></li>
                                        <li><a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\">Blog</a></li>
                                        <li><a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        echo "\">Studios</a></li>
                                        <li><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\">Create Yours</a></li>

                                    </div>
                                </div>
                                <li><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">Offres</a></li>
                                <li><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
        echo "\">Demandes</a></li>
                                <li><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                                <li><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_show", ["idpanier" => "1"]);
        echo "\">Panier</a></li>
                                <li><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\">Challenges</a></li>
                                <li><a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\">Tutoriels</a></li>
                                ";
        // line 73
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "type", [], "any", false, false, false, 73) == "Admin")) {
            // line 74
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_studiodashboard");
            echo "\">dashboard </a></li>
                                ";
        }
        // line 76
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "idUser", [], "any", false, false, false, 76) == null)) {
            // line 77
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_login");
            echo "\">Log In</a></li>
                                ";
        } else {
            // line 79
            echo "                                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_logout");
            echo "\">Logout</a></li>
                                ";
        }
        // line 81
        echo "                            </ul>
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                            <style>
                                .dropdown {
                                    position: relative;
                                    display: inline-block;
                                }

                                .dropbtn {

                                    padding: 12px;
                                    font-size: 16px;
                                    border: none;
                                    cursor: pointer;
                                }

                                .dropdown-content {
                                    display: none;
                                    position: absolute;
                                    z-index: 1;
                                }

                                .dropdown-submenu {
                                    position: relative;
                                }

                                .dropdown-submenu:hover .dropdown-submenu-content {
                                    display: block;
                                }

                                .dropdown-submenu-content {
                                    display: none;
                                    position: absolute;
                                    left: 100%;
                                    top: 0;
                                    margin-top: -1px;
                                }

                                .dropdown-content a {

                                    padding: 12px 16px;
                                    text-decoration: none;
                                    display: block;
                                }

                                .dropdown-content a:hover {

                                }

                                .dropdown:hover .dropdown-content {
                                    display: block;
                                }

                                .dropdown:hover .dropbtn {

                                }
                            </style>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div class=\"page-heading normal-space\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h6>Liberty NFT Market</h6>
                        <h2>View Item Details</h2>
                        <span>Home > <a href=\"#\">Item Details</a></span>
                        <div class=\"buttons\">
                            <div class=\"main-button\">
                                <a href=\"explore.html\">Explore Our Items</a>
                            </div>
                            <div class=\"border-button\">
                                <a href=\"create.html\">Create Your NFT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"item-details-page\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"section-heading\">
                            <div class=\"line-dec\"></div>
                            <h2>View Details <em>For Item</em> Here.</h2>
                        </div>
                    </div>
                    <div class=\"col-lg-7\">
                        <div class=\"left-image\">
                            <img src=\"";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 177, $this->source); })()), "media", [], "any", false, false, false, 177), "html", null, true);
        echo "\" alt=\"\" style=\"border-radius: 20px;\">
                        </div>
                    </div>
                    <div class=\"col-lg-5 align-self-center\">
                        <h4>";
        // line 181
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 181, $this->source); })()), "titleP", [], "any", false, false, false, 181), "html", null, true);
        echo "</h4>
                        ";
        // line 183
        echo "                        <span class=\"author\">
                        <img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/author-02.jpg"), "html", null, true);
        echo "\" alt=\"\"
                             style=\"max-width: 50px; border-radius: 50%;\">
                        <h6>Artist<br><a href=\"#\">";
        // line 186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 186, $this->source); })()), "getUserName", [], "any", false, false, false, 186), "html", null, true);
        echo "</a></h6>
                    </span>
                        <p>";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 188, $this->source); })()), "getDescriptionP", [], "any", false, false, false, 188), "html", null, true);
        echo "</p>
                        <div class=\"row\">
                            <div class=\"col-3\">
                        <span class=\"bid\">
                            Current Likes<br><strong>";
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 192, $this->source); })()), "postLikes", [], "any", false, false, false, 192), "count", [], "any", false, false, false, 192), "html", null, true);
        echo "</strong><br>
                        </span>
                                <span class=\"bid\">
                            <br><strong><a href=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_edit", ["id_post" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 195, $this->source); })()), "getId", [], "any", false, false, false, 195)]), "html", null, true);
        echo "\">Edit Post</a></strong><br>
                            ";
        // line 196
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 196, $this->source); })()), "id_user", [], "any", false, false, false, 196) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 196, $this->source); })()), "idUser", [], "any", false, false, false, 196), "getid_user", [], "method", false, false, false, 196))) {
            // line 197
            echo "                                    ";
            echo twig_include($this->env, $context, "post/_delete_form.html.twig");
            echo "
                            
                        </span>
                                ";
        }
        // line 201
        echo "                            </div>
                            <div class=\"fb-like\" id=\"like-btn\">
                                ";
        // line 203
        echo twig_include($this->env, $context, "post_like/_form.html.twig");
        echo "
                                <h1></h1>
                            </div>

                        </div>

                    </div>
                    <div class=\"col-lg-12\">
                        <div class=\"current-bid\">
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <div class=\"mini-heading\"><h4>Current Comments</h4></div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <fieldset>
                                        <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\"
                                                id=\"chooseCategory\" onchange=\"this.form.click()\">
                                            <option selected>Sort By: Latest</option>
                                            <option type=\"checkbox\" name=\"option1\" value=\"old\">Sort By: Oldest</option>
                                            <option value=\"low\">Sort By: Lowest</option>
                                            <option value=\"high\">Sort By: Highest</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class=\"row\">

                                    ";
        // line 229
        $context["commentGroups"] = twig_array_batch((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 229, $this->source); })()), 3);
        // line 230
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentGroups"]) || array_key_exists("commentGroups", $context) ? $context["commentGroups"] : (function () { throw new RuntimeError('Variable "commentGroups" does not exist.', 230, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 231
            echo "                                        <div class=\"row\">
                                            ";
            // line 232
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["group"]);
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
                // line 233
                echo "                                                ";
                $context["postId"] = twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 233, $this->source); })()), "getIdPost", [], "any", false, false, false, 233);
                // line 234
                echo "                                                ";
                $context["commentId"] = twig_get_attribute($this->env, $this->source, $context["comment"], "getIdPost", [], "any", false, false, false, 234);
                // line 235
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "getIdPost", [], "method", false, false, false, 235), "getIdPost", [], "method", false, false, false, 235) == twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 235, $this->source); })()), "getIdPost", [], "method", false, false, false, 235))) {
                    // line 236
                    echo "                                                    <div class=\"col-lg-4 col-md-6\">
                                                        <div class=\"item\">
                                                            <div class=\"right-content\">
                                                                <h4>Name : </h4>
                                                                <a href=\"#\">";
                    // line 240
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "getIdUser", [], "method", false, false, false, 240), "getName", [], "method", false, false, false, 240), "html", null, true);
                    echo "</a>
                                                                <div class=\"line-dec\"></div>
                                                                <h6>Comment: <em>";
                    // line 242
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getComment", [], "any", false, false, false, 242), "html", null, true);
                    echo "</em></h6>
                                                                <span class=\"date\">";
                    // line 243
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "getDateComment", [], "method", false, false, false, 243), "Y-m-d H:i:s"), "html", null, true);
                    echo "</span>
                                                                <h6>
                                                                    <a href=\"";
                    // line 245
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_edit", ["id_comment" => twig_get_attribute($this->env, $this->source, $context["comment"], "getId", [], "any", false, false, false, 245)]), "html", null, true);
                    echo "\">edit</a>
                                                                </h6>
                                                                ";
                    // line 247
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 247, $this->source); })()), "idUser", [], "any", false, false, false, 247) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "getIdUser", [], "method", false, false, false, 247), "getid_user", [], "method", false, false, false, 247))) {
                        // line 248
                        echo "                                                                    <h6>";
                        echo twig_include($this->env, $context, "comment/_delete_form.html.twig");
                        echo "</h6>
                                                                ";
                    }
                    // line 250
                    echo "                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
                }
                // line 254
                echo "                                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            echo "                                        </div>
                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "

                                </div>
                            </div>
                        </div
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <form action=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_new", ["id_post" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 264, $this->source); })()), "getIdPost", [], "any", false, false, false, 264)]), "html", null, true);
        echo "\"
                                      method=\"post\">
                                    <input type=\"submit\" value=\"Add Comment\"
                                           style=\"font-size: 20px; padding: 10px;width: 100%;\">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"create-nft\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-8\">
                            <div class=\"section-heading\">
                                <div class=\"line-dec\"></div>
                                <h2>Create Your NFT & Put It On The Market.</h2>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"main-button\">
                                <a href=\"create.html\">Create Your NFT Now</a>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"item first-item\">
                                <div class=\"number\">
                                    <h6>1</h6>
                                </div>
                                <div class=\"icon\">
                                    <img src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icon-02.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <h4>Set Up Your Wallet</h4>
                                <p>There are 5 different HTML pages included in this NFT <a
                                            href=\"https://templatemo.com/page/1\" target=\"_blank\" rel=\"nofollow\">website
                                        template</a>. You can edit or modify any section on any page as you required.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"item second-item\">
                                <div class=\"number\">
                                    <h6>2</h6>
                                </div>
                                <div class=\"icon\">
                                    <img src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icon-04.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <h4>Add Your Digital NFT</h4>
                                <p>If you would like to support our TemplateMo website, please visit <a rel=\"nofollow\"
                                                                                                        href=\"https://templatemo.com/contact\"
                                                                                                        target=\"_parent\">our
                                        contact page</a> to make a PayPal contribution. Thank you.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"item\">
                                <div class=\"icon\">
                                    <img src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icon-06.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <h4>Sell Your NFT &amp; Make Profit</h4>
                                <p>NFT means Non-Fungible Token that are used in digital cryptocurrency markets. There
                                    are many different kinds of NFTs in the industry.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 333
        $this->displayBlock('footer', $context, $blocks);
        // line 347
        echo "
        ";
        // line 348
        $this->displayBlock('javascripts', $context, $blocks);
        // line 357
        echo "

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 333
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 334
        echo "            <footer>
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

    // line 348
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 349
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "explore/details.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  730 => 355,  726 => 354,  722 => 353,  718 => 352,  714 => 351,  710 => 350,  705 => 349,  695 => 348,  673 => 334,  663 => 333,  651 => 357,  649 => 348,  646 => 347,  644 => 333,  630 => 322,  615 => 310,  597 => 295,  563 => 264,  554 => 257,  539 => 255,  525 => 254,  519 => 250,  513 => 248,  511 => 247,  506 => 245,  501 => 243,  497 => 242,  492 => 240,  486 => 236,  483 => 235,  480 => 234,  477 => 233,  460 => 232,  457 => 231,  439 => 230,  437 => 229,  408 => 203,  404 => 201,  396 => 197,  394 => 196,  390 => 195,  384 => 192,  377 => 188,  372 => 186,  367 => 184,  364 => 183,  360 => 181,  353 => 177,  255 => 81,  249 => 79,  243 => 77,  240 => 76,  234 => 74,  232 => 73,  228 => 72,  224 => 71,  220 => 70,  216 => 69,  212 => 68,  208 => 67,  201 => 63,  197 => 62,  193 => 61,  189 => 60,  180 => 53,  178 => 52,  174 => 50,  164 => 42,  160 => 30,  150 => 29,  138 => 20,  134 => 19,  130 => 18,  126 => 17,  121 => 16,  111 => 15,  97 => 22,  95 => 15,  89 => 12,  80 => 6,  74 => 2,  64 => 1,  54 => 29,  50 => 27,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"{{ asset('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap') }}\"
          rel=\"stylesheet\">

    <title>Detail Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Additional CSS Files -->
    {% block stylesheet %}
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-liberty-market.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('https://unpkg.com/swiper@7/swiper-bundle.min.css') }}\"/>
    {% endblock %}




{% endblock %}


    {% block body %}

        <!-- ***** Preloader Start ***** -->
        {# <div id=\"js-preloader\" class=\"js-preloader\">
        <div class=\"preloader-inner\">
        <span class=\"dot\"></span>
        <div class=\"dots\">
            <span></span>
            <span></span>
            <span></span>
        </div>
        </div>
    </div> #}

        <header class=\"header-area header-sticky\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <nav class=\"main-nav\">
                            <!-- ***** Logo Start ***** -->
                            <a href=\"index.html\" class=\"logo\">
                                <img src=\"{{ asset('assets/images/logo.png') }}\" alt=\"\">
                                {# <img src=\"assets/images/logo.png\" alt=\"\" href=\"{{ asset('assets/images/logo.png') }}\"> #}
                                {# href=\"{{ asset('assets/css/templatemo-liberty-market.css') }}\"> #}
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
                            <style>
                                .dropdown {
                                    position: relative;
                                    display: inline-block;
                                }

                                .dropbtn {

                                    padding: 12px;
                                    font-size: 16px;
                                    border: none;
                                    cursor: pointer;
                                }

                                .dropdown-content {
                                    display: none;
                                    position: absolute;
                                    z-index: 1;
                                }

                                .dropdown-submenu {
                                    position: relative;
                                }

                                .dropdown-submenu:hover .dropdown-submenu-content {
                                    display: block;
                                }

                                .dropdown-submenu-content {
                                    display: none;
                                    position: absolute;
                                    left: 100%;
                                    top: 0;
                                    margin-top: -1px;
                                }

                                .dropdown-content a {

                                    padding: 12px 16px;
                                    text-decoration: none;
                                    display: block;
                                }

                                .dropdown-content a:hover {

                                }

                                .dropdown:hover .dropdown-content {
                                    display: block;
                                }

                                .dropdown:hover .dropbtn {

                                }
                            </style>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div class=\"page-heading normal-space\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h6>Liberty NFT Market</h6>
                        <h2>View Item Details</h2>
                        <span>Home > <a href=\"#\">Item Details</a></span>
                        <div class=\"buttons\">
                            <div class=\"main-button\">
                                <a href=\"explore.html\">Explore Our Items</a>
                            </div>
                            <div class=\"border-button\">
                                <a href=\"create.html\">Create Your NFT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"item-details-page\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"section-heading\">
                            <div class=\"line-dec\"></div>
                            <h2>View Details <em>For Item</em> Here.</h2>
                        </div>
                    </div>
                    <div class=\"col-lg-7\">
                        <div class=\"left-image\">
                            <img src=\"{{ post.media }}\" alt=\"\" style=\"border-radius: 20px;\">
                        </div>
                    </div>
                    <div class=\"col-lg-5 align-self-center\">
                        <h4>{{ post.titleP }}</h4>
                        {# <h4>{{ post.getIdPost }} YESSSSSSSSSSSSSSSSSSS</h4> #}
                        <span class=\"author\">
                        <img src=\"{{ asset('assets/images/author-02.jpg') }}\" alt=\"\"
                             style=\"max-width: 50px; border-radius: 50%;\">
                        <h6>Artist<br><a href=\"#\">{{ post.getUserName }}</a></h6>
                    </span>
                        <p>{{ post.getDescriptionP }}</p>
                        <div class=\"row\">
                            <div class=\"col-3\">
                        <span class=\"bid\">
                            Current Likes<br><strong>{{ post.postLikes.count }}</strong><br>
                        </span>
                                <span class=\"bid\">
                            <br><strong><a href=\"{{ path('app_post_edit', {'id_post': post.getId}) }}\">Edit Post</a></strong><br>
                            {% if(user.id_user==post.idUser.getid_user()) %}
                                    {{ include('post/_delete_form.html.twig') }}
                            
                        </span>
                                {% endif %}
                            </div>
                            <div class=\"fb-like\" id=\"like-btn\">
                                {{ include('post_like/_form.html.twig') }}
                                <h1></h1>
                            </div>

                        </div>

                    </div>
                    <div class=\"col-lg-12\">
                        <div class=\"current-bid\">
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <div class=\"mini-heading\"><h4>Current Comments</h4></div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <fieldset>
                                        <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\"
                                                id=\"chooseCategory\" onchange=\"this.form.click()\">
                                            <option selected>Sort By: Latest</option>
                                            <option type=\"checkbox\" name=\"option1\" value=\"old\">Sort By: Oldest</option>
                                            <option value=\"low\">Sort By: Lowest</option>
                                            <option value=\"high\">Sort By: Highest</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class=\"row\">

                                    {% set commentGroups = comments|batch(3) %}
                                    {% for group in commentGroups %}
                                        <div class=\"row\">
                                            {% for comment in group %}
                                                {% set postId = post.getIdPost %}
                                                {% set commentId = comment.getIdPost %}
                                                {% if comment.getIdPost().getIdPost() == post.getIdPost() %}
                                                    <div class=\"col-lg-4 col-md-6\">
                                                        <div class=\"item\">
                                                            <div class=\"right-content\">
                                                                <h4>Name : </h4>
                                                                <a href=\"#\">{{ comment.getIdUser().getName() }}</a>
                                                                <div class=\"line-dec\"></div>
                                                                <h6>Comment: <em>{{ comment.getComment }}</em></h6>
                                                                <span class=\"date\">{{ comment.getDateComment()|date('Y-m-d H:i:s') }}</span>
                                                                <h6>
                                                                    <a href=\"{{ path('app_comment_edit', {'id_comment': comment.getId}) }}\">edit</a>
                                                                </h6>
                                                                {% if(user.idUser==comment.getIdUser().getid_user()) %}
                                                                    <h6>{{ include('comment/_delete_form.html.twig') }}</h6>
                                                                {% endif %}
                                                            </div>
                                                        </div>
                                                    </div>
                                                {% endif %}
                                            {% endfor %}
                                        </div>
                                    {% endfor %}


                                </div>
                            </div>
                        </div
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <form action=\"{{ path('app_comment_new', { 'id_post': post.getIdPost }) }}\"
                                      method=\"post\">
                                    <input type=\"submit\" value=\"Add Comment\"
                                           style=\"font-size: 20px; padding: 10px;width: 100%;\">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"create-nft\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-8\">
                            <div class=\"section-heading\">
                                <div class=\"line-dec\"></div>
                                <h2>Create Your NFT & Put It On The Market.</h2>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"main-button\">
                                <a href=\"create.html\">Create Your NFT Now</a>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"item first-item\">
                                <div class=\"number\">
                                    <h6>1</h6>
                                </div>
                                <div class=\"icon\">
                                    <img src=\"{{ asset('assets/images/icon-02.png') }}\" alt=\"\">
                                </div>
                                <h4>Set Up Your Wallet</h4>
                                <p>There are 5 different HTML pages included in this NFT <a
                                            href=\"https://templatemo.com/page/1\" target=\"_blank\" rel=\"nofollow\">website
                                        template</a>. You can edit or modify any section on any page as you required.
                                </p>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"item second-item\">
                                <div class=\"number\">
                                    <h6>2</h6>
                                </div>
                                <div class=\"icon\">
                                    <img src=\"{{ asset('assets/images/icon-04.png') }}\" alt=\"\">
                                </div>
                                <h4>Add Your Digital NFT</h4>
                                <p>If you would like to support our TemplateMo website, please visit <a rel=\"nofollow\"
                                                                                                        href=\"https://templatemo.com/contact\"
                                                                                                        target=\"_parent\">our
                                        contact page</a> to make a PayPal contribution. Thank you.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"item\">
                                <div class=\"icon\">
                                    <img src=\"{{ asset('assets/images/icon-06.png') }}\" alt=\"\">
                                </div>
                                <h4>Sell Your NFT &amp; Make Profit</h4>
                                <p>NFT means Non-Fungible Token that are used in digital cryptocurrency markets. There
                                    are many different kinds of NFTs in the industry.</p>
                            </div>
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

        {% block javascripts %}
            <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/isotope.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/owl-carousel.js') }}\"></script>
            <script src=\"{{ asset('assets/js/tabs.js') }}\"></script>
            <script src=\"{{ asset('assets/js/popup.js') }}\"></script>
            <script src=\"{{ asset('assets/js/custom.js') }}\"></script>
        {% endblock %}


    {% endblock %}
", "explore/details.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\explore\\details.html.twig");
    }
}
