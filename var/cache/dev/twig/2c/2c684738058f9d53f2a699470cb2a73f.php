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

/* blog/index.html.twig */
class __TwigTemplate_a5eedc5e9372b2e26ec8ea668b260f50 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 27
        echo "
";
        // line 28
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

    <title>Liberty NFT Marketplace - Explore Listing Page</title>

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
        <link rel=\"stylesheet\" href='https://unpkg.com/swiper@7/swiper-bundle.min.css'/>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "    <!-- ***** Preloader Start ***** -->
    <div id=\"js-preloader\" class=\"js-preloader\">
        <div class=\"preloader-inner\">
            <span class=\"dot\"></span>
            <div class=\"dots\">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <header class=\"header-area header-sticky\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <nav class=\"main-nav\">
                        <!-- ***** Logo Start ***** -->
                        <a href=\"index.html\" class=\"logo\">
                            <img src=\"assets/images/logo.png\" alt=\"\">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class=\"nav\">
                            <div class=\"dropdown\">
                                <li><a>Art</a></li>
                                <div class=\"dropdown-content\">
                                    <li><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_explore");
        echo "\">Explore</a></li>
                                    <li><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\">Blog</a></li>
                                    <li><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        echo "\">Studios</a></li>
                                    <li><a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\">Create Yours</a></li>

                                </div>
                            </div>
                            <li><a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">Offres</a></li>
                            <li><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
        echo "\">Demandes</a></li>
                            <li><a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                            <li><a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_show", ["idpanier" => "1"]);
        echo "\">Panier</a></li>
                            <li><a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\">Challenges</a></li>
                            <li><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\">Tutoriels</a></li>
                            ";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 68, $this->source); })()), "type", [], "any", false, false, false, 68) == "Admin")) {
            // line 69
            echo "                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_studiodashboard");
            echo "\">dashboard </a></li>
                            ";
        }
        // line 71
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 71, $this->source); })()), "idUser", [], "any", false, false, false, 71) == null)) {
            // line 72
            echo "                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_login");
            echo "\">Log In</a></li>
                            ";
        } else {
            // line 74
            echo "                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_logout");
            echo "\">Logout</a></li>
                            ";
        }
        // line 76
        echo "                        </ul>
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
    <div class=\"page-heading\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <h2>Discover Some Posts</h2>
                    <span>Home > <a href=\"#\">Explore</a></span>
                </div>
            </div>
        </div>
        <div class=\"featured-explore\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"owl-features owl-carousel\">
                            ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 157, $this->source); })()), 0, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 158
            echo "                                <div class=\"item\">
                                    <div class=\"thumb\">
                                        <img src=\"";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "media", [], "any", false, false, false, 160), "html", null, true);
            echo "\" alt=\"\" width=\"100%\" height=\"400px\"
                                             style=\"border-radius: 20px;\">
                                        <div class=\"hover-effect\">
                                            <div class=\"content\">
                                                <h4>";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titleP", [], "any", false, false, false, 164), "html", null, true);
            echo "</h4>
                                                <span class=\"author\">
                                        <img src=\"assets/images/author.jpg\" alt=\"\"
                                             style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                        <h6>Artist<br><a href=\"#\">";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getUserName", [], "any", false, false, false, 168), "html", null, true);
            echo "</a></h6>
                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"discover-items\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"section-heading\">
                        <div class=\"line-dec\"></div>
                        <h2>Discover Some Of Our <em>Blogs</em>.</h2>
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <form method=\"GET\" action=\"";
        // line 193
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_search_post");
        echo "\" id=\"search-form\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <fieldset>
                                    <input type=\"text\" name=\"title\" id=\"search-input\" class=\"searchText\"
                                           placeholder=\"Type Something...\" autocomplete=\"on\" required>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-2\">
                                <fieldset>
                                    <button class=\"main-button\">Search</button>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-3\">
                                <fieldset>
                                    <select name=\"filter\" class=\"form-select\" aria-label=\"Default select example\"
                                            id=\"choosefilter\">
                                        <option selected>Filter</option>
                                        <option data-value=\"today\">Today</option>
                                        <option data-value=\"this-month\">This Month</option>
                                        <option data-value=\"this-year\">This Year</option>
                                    </select>

                                </fieldset>

                            </div>
                        </div>
                    </form>

                    <div class=\"row\">

                        ";
        // line 229
        echo "                    </div>
                    </form>
                </div>
            </div>


            <div class=\"row\" id=\"post-row\">
                ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 236, $this->source); })()));
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
            // line 237
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["post"], "postType", [], "any", false, false, false, 237) == "blog")) {
                // line 238
                echo "                <div class=\"col-lg-3 post-item\">
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                                    <span class=\"author\">
                                                        <img src=\"assets/images/author.jpg\" alt=\"\"
                                                             style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                                    </span>
                                <img src=\"";
                // line 246
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "media", [], "any", false, false, false, 246), "html", null, true);
                echo "\" width=\"244px\" height=\"199px\" alt=\"\"
                                     style=\"border-radius: 20px;\">
                                <h4>";
                // line 248
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titleP", [], "any", false, false, false, 248), "html", null, true);
                echo "</h4>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"line-dec\"></div>
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <span>Artist: <br> <strong>";
                // line 254
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getUserName", [], "any", false, false, false, 254), "html", null, true);
                echo "</strong></span>
                                    </div>
                                    <div class=\"col-6\">
                                        <span>Likes: <br> <strong>";
                // line 257
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "postLikes", [], "any", false, false, false, 257), "count", [], "any", false, false, false, 257), "html", null, true);
                echo "</strong></span>
                                    </div>
                                    <div class=\"col-6\">
                                        <span>Category: <br><strong>";
                // line 260
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getIdCategoryName", [], "any", false, false, false, 260), "html", null, true);
                echo "</strong></span>
                                        <span>Created At: <br> <strong>";
                // line 261
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getDateP", [], "any", false, false, false, 261), "Y-m-d H:i:s"), "html", null, true);
                echo "</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"main-button\">
                                    ";
                // line 268
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_details", ["id_post" => twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "any", false, false, false, 268)]), "html", null, true);
                echo "\">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
                // line 274
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 274) % 4)) {
                    // line 275
                    echo "            </div>
            <div class=\"row\">
                ";
                }
                // line 278
                echo "                ";
            }
            // line 279
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        echo "
            </div>


        </div>

    </div>
    </div>
    <div style=\"display: flex; justify-content: center;\">
        ";
        // line 289
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env,         // line 290
(isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 290, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", ["queryParam1" => "param1 value", "queryParam2" => "param2 value"], ["align" => "center"]);
        // line 301
        echo "
    </div>

    <div class=\"top-seller\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-heading\">
                        <div class=\"line-dec\"></div>
                        <h2>Our Top Sellers This Week.</h2>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>1.</h4>
                                <img src=\"assets/images/author.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>NFT Top Artist<br><a href=\"#\">8.6 ETH or \$12,000</a></h6>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>2.</h4>
                                <img src=\"assets/images/author-02.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>George Brandon<br><a href=\"#\">4.8 ETH or \$14,000</a></h6>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>3.</h4>
                                <img src=\"assets/images/author-03.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>Johnny Mayson<br><a href=\"#\">6.2 ETH or \$26,000</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>4.</h4>
                                <img src=\"assets/images/author.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>Liberty Artist<br><a href=\"#\">4.5 ETH or \$11,600</a></h6>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>5.</h4>
                                <img src=\"assets/images/author-02.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>Ronald Martino<br><a href=\"#\">7.2 ETH or \$14,500</a></h6>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>6.</h4>
                                <img src=\"assets/images/author-03.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>Anthony Brown<br><a href=\"#\">8.6 ETH or \$7,400</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>7.</h4>
                                <img src=\"assets/images/author.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>Liberty Artist<br><a href=\"#\">9.8 ETH or \$14,200</a></h6>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>8.</h4>
                                <img src=\"assets/images/author-02.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>Ronald Martino<br><a href=\"#\">6.5 ETH or \$15,000</a></h6>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>9.</h4>
                                <img src=\"assets/images/author-03.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>David Walker<br><a href=\"#\">2.5 ETH or \$12,000</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>10.</h4>
                                <img src=\"assets/images/author.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>Liberty Artist<br><a href=\"#\">8.8 ETH or \$16,800</a></h6>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>11.</h4>
                                <img src=\"assets/images/author-02.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>Anthony Brown<br><a href=\"#\">7.5 ETH or \$15,400</a></h6>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>12.</h4>
                                <img src=\"assets/images/author-03.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>David Walker<br><a href=\"#\">5.2 ETH or \$12,300</a></h6>
                            </div>
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
                        Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"https://templatemo.com\"
                                       target=\"_blank\">TemplateMo</a></p>
                </div>
            </div>
        </div>
    </footer>

    ";
        // line 442
        $this->displayBlock('javascripts', $context, $blocks);
        // line 486
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 442
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 443
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$(document).ready(function () {
                // Get the filter select element
                const filterSelect = \$('#choosefilter');

                // Add a change event listener to the filter select
                filterSelect.on('change', function () {
                    // Get the selected filter value
                    const filterValue = \$(this).find(':selected').data('value');

                    // Filter the posts based on the selected filter value
                    \$('#post-row .post-item').each(function () {
                        const postDate = \$(this).find('.col-lg-12 span:contains(\"Created At\") strong').text();
                        const filterDate = new Date();
                        if (filterValue === 'today') {
                            filterDate.setDate(filterDate.getDate() - 1);
                        } else if (filterValue === 'this-month') {
                            filterDate.setMonth(filterDate.getMonth() - 1);
                        } else if (filterValue === 'this-year') {
                            filterDate.setFullYear(filterDate.getFullYear() - 1);
                        }
                        const postDateObj = new Date(postDate);
                        if (postDateObj >= filterDate) {
                            \$(this).show();
                        } else {
                            \$(this).hide();
                        }
                    });
                });
            });
        </script>
        <script>


        </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  739 => 449,  735 => 448,  731 => 447,  727 => 446,  723 => 445,  719 => 444,  714 => 443,  704 => 442,  692 => 486,  690 => 442,  547 => 301,  545 => 290,  544 => 289,  533 => 280,  519 => 279,  516 => 278,  511 => 275,  509 => 274,  499 => 268,  490 => 261,  486 => 260,  480 => 257,  474 => 254,  465 => 248,  460 => 246,  450 => 238,  447 => 237,  430 => 236,  421 => 229,  387 => 193,  367 => 175,  354 => 168,  347 => 164,  340 => 160,  336 => 158,  332 => 157,  249 => 76,  243 => 74,  237 => 72,  234 => 71,  228 => 69,  226 => 68,  222 => 67,  218 => 66,  214 => 65,  210 => 64,  206 => 63,  202 => 62,  195 => 58,  191 => 57,  187 => 56,  183 => 55,  155 => 29,  145 => 28,  132 => 19,  128 => 18,  124 => 17,  119 => 16,  109 => 15,  95 => 22,  93 => 15,  87 => 12,  78 => 6,  72 => 2,  62 => 1,  52 => 28,  49 => 27,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"{{ asset('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap') }}\"
          rel=\"stylesheet\">

    <title>Liberty NFT Marketplace - Explore Listing Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Additional CSS Files -->
    {% block stylesheet %}
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-liberty-market.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
        <link rel=\"stylesheet\" href='https://unpkg.com/swiper@7/swiper-bundle.min.css'/>
    {% endblock %}




{% endblock %}

{% block body %}
    <!-- ***** Preloader Start ***** -->
    <div id=\"js-preloader\" class=\"js-preloader\">
        <div class=\"preloader-inner\">
            <span class=\"dot\"></span>
            <div class=\"dots\">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <header class=\"header-area header-sticky\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <nav class=\"main-nav\">
                        <!-- ***** Logo Start ***** -->
                        <a href=\"index.html\" class=\"logo\">
                            <img src=\"assets/images/logo.png\" alt=\"\">
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
    <div class=\"page-heading\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <h2>Discover Some Posts</h2>
                    <span>Home > <a href=\"#\">Explore</a></span>
                </div>
            </div>
        </div>
        <div class=\"featured-explore\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"owl-features owl-carousel\">
                            {% for post in posts|slice(0, 7) %}
                                <div class=\"item\">
                                    <div class=\"thumb\">
                                        <img src=\"{{ post.media }}\" alt=\"\" width=\"100%\" height=\"400px\"
                                             style=\"border-radius: 20px;\">
                                        <div class=\"hover-effect\">
                                            <div class=\"content\">
                                                <h4>{{ post.titleP }}</h4>
                                                <span class=\"author\">
                                        <img src=\"assets/images/author.jpg\" alt=\"\"
                                             style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                        <h6>Artist<br><a href=\"#\">{{ post.getUserName }}</a></h6>
                                    </span>
                                            </div>
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

    <div class=\"discover-items\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"section-heading\">
                        <div class=\"line-dec\"></div>
                        <h2>Discover Some Of Our <em>Blogs</em>.</h2>
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <form method=\"GET\" action=\"{{ path('app_search_post') }}\" id=\"search-form\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <fieldset>
                                    <input type=\"text\" name=\"title\" id=\"search-input\" class=\"searchText\"
                                           placeholder=\"Type Something...\" autocomplete=\"on\" required>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-2\">
                                <fieldset>
                                    <button class=\"main-button\">Search</button>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-3\">
                                <fieldset>
                                    <select name=\"filter\" class=\"form-select\" aria-label=\"Default select example\"
                                            id=\"choosefilter\">
                                        <option selected>Filter</option>
                                        <option data-value=\"today\">Today</option>
                                        <option data-value=\"this-month\">This Month</option>
                                        <option data-value=\"this-year\">This Year</option>
                                    </select>

                                </fieldset>

                            </div>
                        </div>
                    </form>

                    <div class=\"row\">

                        {# <div class=\"col-lg-2\">
                    <fieldset>
                        <button class=\"main-button\">Search</button>
                    </fieldset>
                </div> #}
                    </div>
                    </form>
                </div>
            </div>


            <div class=\"row\" id=\"post-row\">
                {% for post in posts %}
                {% if post.postType == 'blog' %}
                <div class=\"col-lg-3 post-item\">
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                                    <span class=\"author\">
                                                        <img src=\"assets/images/author.jpg\" alt=\"\"
                                                             style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                                    </span>
                                <img src=\"{{ post.media }}\" width=\"244px\" height=\"199px\" alt=\"\"
                                     style=\"border-radius: 20px;\">
                                <h4>{{ post.titleP }}</h4>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"line-dec\"></div>
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <span>Artist: <br> <strong>{{ post.getUserName }}</strong></span>
                                    </div>
                                    <div class=\"col-6\">
                                        <span>Likes: <br> <strong>{{ post.postLikes.count }}</strong></span>
                                    </div>
                                    <div class=\"col-6\">
                                        <span>Category: <br><strong>{{ post.getIdCategoryName }}</strong></span>
                                        <span>Created At: <br> <strong>{{ post.getDateP|date('Y-m-d H:i:s') }}</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"main-button\">
                                    {# <a href=\"details.html.twig\">View Details</a> #}
                                    <a href=\"{{ path('app_post_details', {'id_post': post.getId}) }}\">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% if loop.index is divisible by 4 %}
            </div>
            <div class=\"row\">
                {% endif %}
                {% endif %}
                {% endfor %}

            </div>


        </div>

    </div>
    </div>
    <div style=\"display: flex; justify-content: center;\">
        {{ knp_pagination_render(
            posts,
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

    <div class=\"top-seller\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-heading\">
                        <div class=\"line-dec\"></div>
                        <h2>Our Top Sellers This Week.</h2>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>1.</h4>
                                <img src=\"assets/images/author.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>NFT Top Artist<br><a href=\"#\">8.6 ETH or \$12,000</a></h6>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>2.</h4>
                                <img src=\"assets/images/author-02.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>George Brandon<br><a href=\"#\">4.8 ETH or \$14,000</a></h6>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>3.</h4>
                                <img src=\"assets/images/author-03.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>Johnny Mayson<br><a href=\"#\">6.2 ETH or \$26,000</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>4.</h4>
                                <img src=\"assets/images/author.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>Liberty Artist<br><a href=\"#\">4.5 ETH or \$11,600</a></h6>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>5.</h4>
                                <img src=\"assets/images/author-02.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>Ronald Martino<br><a href=\"#\">7.2 ETH or \$14,500</a></h6>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>6.</h4>
                                <img src=\"assets/images/author-03.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>Anthony Brown<br><a href=\"#\">8.6 ETH or \$7,400</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>7.</h4>
                                <img src=\"assets/images/author.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>Liberty Artist<br><a href=\"#\">9.8 ETH or \$14,200</a></h6>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>8.</h4>
                                <img src=\"assets/images/author-02.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>Ronald Martino<br><a href=\"#\">6.5 ETH or \$15,000</a></h6>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>9.</h4>
                                <img src=\"assets/images/author-03.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>David Walker<br><a href=\"#\">2.5 ETH or \$12,000</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>10.</h4>
                                <img src=\"assets/images/author.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>Liberty Artist<br><a href=\"#\">8.8 ETH or \$16,800</a></h6>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>11.</h4>
                                <img src=\"assets/images/author-02.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>Anthony Brown<br><a href=\"#\">7.5 ETH or \$15,400</a></h6>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"item\">
                                <h4>12.</h4>
                                <img src=\"assets/images/author-03.jpg\" alt=\"\"
                                     style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                <h6>David Walker<br><a href=\"#\">5.2 ETH or \$12,300</a></h6>
                            </div>
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
                        Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"https://templatemo.com\"
                                       target=\"_blank\">TemplateMo</a></p>
                </div>
            </div>
        </div>
    </footer>

    {% block javascripts %}
        <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('assets/js/isotope.min.js') }}\"></script>
        <script src=\"{{ asset('assets/js/owl-carousel.js') }}\"></script>
        <script src=\"{{ asset('assets/js/tabs.js') }}\"></script>
        <script src=\"{{ asset('assets/js/popup.js') }}\"></script>
        <script src=\"{{ asset('assets/js/custom.js') }}\"></script>
        <script>
            \$(document).ready(function () {
                // Get the filter select element
                const filterSelect = \$('#choosefilter');

                // Add a change event listener to the filter select
                filterSelect.on('change', function () {
                    // Get the selected filter value
                    const filterValue = \$(this).find(':selected').data('value');

                    // Filter the posts based on the selected filter value
                    \$('#post-row .post-item').each(function () {
                        const postDate = \$(this).find('.col-lg-12 span:contains(\"Created At\") strong').text();
                        const filterDate = new Date();
                        if (filterValue === 'today') {
                            filterDate.setDate(filterDate.getDate() - 1);
                        } else if (filterValue === 'this-month') {
                            filterDate.setMonth(filterDate.getMonth() - 1);
                        } else if (filterValue === 'this-year') {
                            filterDate.setFullYear(filterDate.getFullYear() - 1);
                        }
                        const postDateObj = new Date(postDate);
                        if (postDateObj >= filterDate) {
                            \$(this).show();
                        } else {
                            \$(this).hide();
                        }
                    });
                });
            });
        </script>
        <script>


        </script>
    {% endblock %}


{% endblock %}
", "blog/index.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\blog\\index.html.twig");
    }
}
