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

/* explore/index.html.twig */
class __TwigTemplate_adad172a01478da3e2fcb030238f0db9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "explore/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "explore/index.html.twig"));

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
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.css"), "html", null, true);
        echo "\"/>
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
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 103, $this->source); })()), 0, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 104
            echo "                                <div class=\"item\">
                                    <div class=\"thumb\">
                                        <img src=\"";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "media", [], "any", false, false, false, 106), "html", null, true);
            echo "\" alt=\"\" width=\"100%\" height=\"400px\"
                                             style=\"border-radius: 20px;\">
                                        <div class=\"hover-effect\">
                                            <div class=\"content\">
                                                <h4>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titleP", [], "any", false, false, false, 110), "html", null, true);
            echo "</h4>
                                                <span class=\"author\">
                                        <img src=\"assets/images/author.jpg\" alt=\"\"
                                             style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                        <h6>Artist<br><a href=\"#\">";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getUserName", [], "any", false, false, false, 114), "html", null, true);
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
        // line 121
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
                        <h2>Discover Some Of Our <em>Posts</em>.</h2>
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <form method=\"GET\" action=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_search_post");
        echo "\" id=\"search-form\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <fieldset>
                                    <input type=\"text\" name=\"title\" class=\"searchText\" placeholder=\"Type Something...\"
                                           autocomplete=\"on\" required>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-2\">
                                <fieldset>
                                    <button class=\"main-button\">Search</button>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-3\">
                                <fieldset>
                                    <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\"
                                            id=\"chooseCategory\">
                                        <option selected>All Categories</option>
                                        ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 157, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 158
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getId_category", [], "any", false, false, false, 158), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "nameCategory", [], "any", false, false, false, 158), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                                    </select>
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
        // line 187
        echo "                    </div>
                    </form>
                </div>
            </div>


            <div class=\"row\" id=\"post-row\">
                ";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 194, $this->source); })()));
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
            // line 195
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["post"], "postType", [], "any", false, false, false, 195) == "portfolio")) {
                // line 196
                echo "                <div class=\"col-lg-3 post-item\">
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                    <span class=\"author\">
                                        <img src=\"assets/images/author.jpg\" alt=\"\"
                                             style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                    </span>
                                <img src=\"";
                // line 204
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "media", [], "any", false, false, false, 204), "html", null, true);
                echo "\" width=\"244px\" height=\"199px\" alt=\"\"
                                     style=\"border-radius: 20px;\">
                                <h4>";
                // line 206
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titleP", [], "any", false, false, false, 206), "html", null, true);
                echo "</h4>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"line-dec\"></div>
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <span>Artist: <br> <strong>";
                // line 212
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getUserName", [], "any", false, false, false, 212), "html", null, true);
                echo "</strong></span>
                                    </div>
                                    <div class=\"col-6\">
                                        <span>Likes: <br> <strong>";
                // line 215
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "postLikes", [], "any", false, false, false, 215), "count", [], "any", false, false, false, 215), "html", null, true);
                echo "</strong></span>
                                    </div>
                                    <div class=\"col-6\">
                                        <span>Category: <br><strong>";
                // line 218
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getIdCategoryName", [], "any", false, false, false, 218), "html", null, true);
                echo "</strong></span>
                                        <span>Created At: <br> <strong>";
                // line 219
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getDateP", [], "any", false, false, false, 219), "Y-m-d H:i:s"), "html", null, true);
                echo "</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"main-button\">
                                    ";
                // line 226
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_details", ["id_post" => twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "any", false, false, false, 226)]), "html", null, true);
                echo "\">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
                // line 232
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 232) % 4)) {
                    // line 233
                    echo "            </div>
            <div class=\"row\">
                ";
                }
                // line 236
                echo "                ";
            }
            // line 237
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
        // line 238
        echo "
            </div>


        </div>

    </div>
    <div style=\"display: flex; justify-content: center;\">
        ";
        // line 246
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env,         // line 247
(isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 247, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", ["queryParam1" => "param1 value", "queryParam2" => "param2 value"], ["align" => "center"]);
        // line 258
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
        // line 399
        $this->displayBlock('javascripts', $context, $blocks);
        // line 446
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 399
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 400
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 406
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
        return "explore/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  713 => 406,  709 => 405,  705 => 404,  701 => 403,  697 => 402,  693 => 401,  688 => 400,  678 => 399,  666 => 446,  664 => 399,  521 => 258,  519 => 247,  518 => 246,  508 => 238,  494 => 237,  491 => 236,  486 => 233,  484 => 232,  474 => 226,  465 => 219,  461 => 218,  455 => 215,  449 => 212,  440 => 206,  435 => 204,  425 => 196,  422 => 195,  405 => 194,  396 => 187,  372 => 160,  361 => 158,  357 => 157,  336 => 139,  316 => 121,  303 => 114,  296 => 110,  289 => 106,  285 => 104,  281 => 103,  252 => 76,  246 => 74,  240 => 72,  237 => 71,  231 => 69,  229 => 68,  225 => 67,  221 => 66,  217 => 65,  213 => 64,  209 => 63,  205 => 62,  198 => 58,  194 => 57,  190 => 56,  186 => 55,  158 => 29,  148 => 28,  136 => 20,  132 => 19,  128 => 18,  124 => 17,  119 => 16,  109 => 15,  95 => 22,  93 => 15,  87 => 12,  78 => 6,  72 => 2,  62 => 1,  52 => 28,  49 => 27,  47 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{ asset('https://unpkg.com/swiper@7/swiper-bundle.min.css') }}\"/>
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
                        <h2>Discover Some Of Our <em>Posts</em>.</h2>
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <form method=\"GET\" action=\"{{ path('app_search_post') }}\" id=\"search-form\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <fieldset>
                                    <input type=\"text\" name=\"title\" class=\"searchText\" placeholder=\"Type Something...\"
                                           autocomplete=\"on\" required>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-2\">
                                <fieldset>
                                    <button class=\"main-button\">Search</button>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-3\">
                                <fieldset>
                                    <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\"
                                            id=\"chooseCategory\">
                                        <option selected>All Categories</option>
                                        {% for category in categories %}
                                            <option value=\"{{ category.getId_category }}\">{{ category.nameCategory }}</option>
                                        {% endfor %}
                                    </select>
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
                {% if post.postType == 'portfolio' %}
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


{% endblock %}", "explore/index.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\explore\\index.html.twig");
    }
}
