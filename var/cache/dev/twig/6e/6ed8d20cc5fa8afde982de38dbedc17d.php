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

/* explore/not_found.html.twig */
class __TwigTemplate_4325cdf9f843b3bb9a7355bd8f6a252e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "explore/not_found.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "explore/not_found.html.twig"));

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
        echo "

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
                                    <li><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_explore");
        echo "\">Explore</a></li>
                                    <li><a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\">Blog</a></li>
                                    <li><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        echo "\">Studios</a></li>
                                    <li><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\">Create Yours</a></li>

                                </div>
                            </div>
                            <li><a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">Offres</a></li>
                            <li><a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
        echo "\">Demandes</a></li>
                            <li><a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                            <li><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_show", ["idpanier" => "1"]);
        echo "\">Panier</a></li>
                            <li><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\">Challenges</a></li>
                            <li><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\">Tutoriels</a></li>
                            ";
        // line 70
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 70, $this->source); })()), "type", [], "any", false, false, false, 70) == "Admin")) {
            // line 71
            echo "                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_studiodashboard");
            echo "\">dashboard </a></li>
                            ";
        }
        // line 73
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "idUser", [], "any", false, false, false, 73) == null)) {
            // line 74
            echo "                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_login");
            echo "\">Log In</a></li>
                            ";
        } else {
            // line 76
            echo "                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_logout");
            echo "\">Logout</a></li>
                            ";
        }
        // line 78
        echo "                        </ul>
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
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 158, $this->source); })()), 0, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 159
            echo "                                <div class=\"item\">
                                    <div class=\"thumb\">
                                        <img src=\"";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "media", [], "any", false, false, false, 161), "html", null, true);
            echo "\" alt=\"\" width=\"100%\" height=\"400px\"
                                             style=\"border-radius: 20px;\">
                                        <div class=\"hover-effect\">
                                            <div class=\"content\">
                                                <h4>";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titleP", [], "any", false, false, false, 165), "html", null, true);
            echo "</h4>
                                                <span class=\"author\">
                                        <img src=\"assets/images/author.jpg\" alt=\"\"
                                             style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                        <h6>Artist<br><a href=\"#\">";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getUserName", [], "any", false, false, false, 169), "html", null, true);
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
        // line 176
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
        // line 195
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_search_post");
        echo "\" id=\"search-form\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <fieldset>
                                    <input type=\"text\" name=\"keyword\" class=\"searchText\" placeholder=\"Type Something...\"
                                           autocomplete=\"on\" required>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-3\">
                                <fieldset>
                                    <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\"
                                            id=\"chooseCategory\" onchange=\"this.form.click()\">
                                        <option selected>All Categories</option>
                                        ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 208, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 209
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getId_category", [], "any", false, false, false, 209), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "nameCategory", [], "any", false, false, false, 209), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "                                    </select>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-3\">
                                <fieldset>
                                    <select name=\"Price\" class=\"form-select\" aria-label=\"Default select example\"
                                            id=\"chooseCategory\" onchange=\"this.form.click()\">
                                        <option selected>Available</option>
                                        <option value=\"Ending-Soon\">Ending Soon</option>
                                        <option value=\"Coming-Soon\">Coming Soon</option>
                                        <option value=\"Closed\">Closed</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-2\">
                                <fieldset>
                                    <button class=\"main-button\">Search</button>
                                </fieldset>
                            </div>
                        </div>


                </div>
            </div>


        </div>

        <!-- post/view.html.twig -->

        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"item\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                    <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\"
                         style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>

                            <h5>Post/Blog not found </h5>
                        </div>


                    </div>
                </div>
            </div>
        </div>
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
        // line 408
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
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "explore/not_found.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  661 => 406,  657 => 405,  653 => 404,  649 => 403,  645 => 402,  641 => 401,  636 => 400,  626 => 399,  615 => 408,  613 => 399,  423 => 211,  412 => 209,  408 => 208,  392 => 195,  371 => 176,  358 => 169,  351 => 165,  344 => 161,  340 => 159,  336 => 158,  254 => 78,  248 => 76,  242 => 74,  239 => 73,  233 => 71,  231 => 70,  227 => 69,  223 => 68,  219 => 67,  215 => 66,  211 => 65,  207 => 64,  200 => 60,  196 => 59,  192 => 58,  188 => 57,  158 => 29,  148 => 28,  136 => 20,  132 => 19,  128 => 18,  124 => 17,  119 => 16,  109 => 15,  95 => 22,  93 => 15,  87 => 12,  78 => 6,  72 => 2,  62 => 1,  52 => 28,  49 => 27,  47 => 1,);
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
                                    <input type=\"text\" name=\"keyword\" class=\"searchText\" placeholder=\"Type Something...\"
                                           autocomplete=\"on\" required>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-3\">
                                <fieldset>
                                    <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\"
                                            id=\"chooseCategory\" onchange=\"this.form.click()\">
                                        <option selected>All Categories</option>
                                        {% for category in categories %}
                                            <option value=\"{{ category.getId_category }}\">{{ category.nameCategory }}</option>
                                        {% endfor %}
                                    </select>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-3\">
                                <fieldset>
                                    <select name=\"Price\" class=\"form-select\" aria-label=\"Default select example\"
                                            id=\"chooseCategory\" onchange=\"this.form.click()\">
                                        <option selected>Available</option>
                                        <option value=\"Ending-Soon\">Ending Soon</option>
                                        <option value=\"Coming-Soon\">Coming Soon</option>
                                        <option value=\"Closed\">Closed</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-2\">
                                <fieldset>
                                    <button class=\"main-button\">Search</button>
                                </fieldset>
                            </div>
                        </div>


                </div>
            </div>


        </div>

        <!-- post/view.html.twig -->

        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"item\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                    <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\"
                         style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>

                            <h5>Post/Blog not found </h5>
                        </div>


                    </div>
                </div>
            </div>
        </div>
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
    {% endblock %}

{% endblock %}
", "explore/not_found.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\explore\\not_found.html.twig");
    }
}
