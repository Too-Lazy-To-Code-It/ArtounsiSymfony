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
class __TwigTemplate_136577a133f874f6fa2e6d46e73538f6 extends Template
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
        echo "


";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <title>Liberty NFT Marketplace - Explore Listing Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Additional CSS Files -->
    ";
        // line 17
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 24
        echo "


    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 18
        echo "        <link rel=\"stylesheet\" href=\"";
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
        echo "\"/>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "        <!-- ***** Preloader Start ***** -->
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
                        <li><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a></li>
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
        echo "\">Famous Studios</a></li>
                        <li><a href=\"details.html.twig\">Item Details</a></li>
                        <li><a href=\"author.html\">Author</a></li>
                        <li><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\">Create Yours</a></li>
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
                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 88, $this->source); })()), 0, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 89
            echo "                    <div class=\"item\">
                        <div class=\"thumb\">
                            <img src=\"";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "media", [], "any", false, false, false, 91), "html", null, true);
            echo "\" alt=\"\" width=\"100%\" height=\"400px\" style=\"border-radius: 20px;\">
                            <div class=\"hover-effect\">
                                <div class=\"content\">
                                    <h4>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titleP", [], "any", false, false, false, 94), "html", null, true);
            echo "</h4>
                                    <span class=\"author\">
                                        <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                        <h6>Artist<br><a href=\"#\">";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getUserName", [], "any", false, false, false, 97), "html", null, true);
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
        // line 104
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
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_search_post");
        echo "\" id=\"search-form\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <fieldset>
                        <input type=\"text\" name=\"title\" class=\"searchText\" placeholder=\"Type Something...\" autocomplete=\"on\" required>
                    </fieldset>
                </div>
                <div class=\"col-lg-2\">
                    <fieldset>
                        <button class=\"main-button\">Search</button>
                    </fieldset>
                </div>
                <div class=\"col-lg-3\">
    <fieldset>
    <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\" id=\"chooseCategory\">
      <option selected>All Categories</option>
      ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 138, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 139
            echo "      <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getId_category", [], "any", false, false, false, 139), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "nameCategory", [], "any", false, false, false, 139), "html", null, true);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "    </select>
  </fieldset>
</div>
                <div class=\"col-lg-3\">
                    <fieldset>
                        <select name=\"filter\" class=\"form-select\" aria-label=\"Default select example\" id=\"choosefilter\">
                            <option selected>Filter</option>
                            <option  data-value=\"today\">Today</option>
                            <option  data-value=\"this-month\">This Month</option>
                            <option  data-value=\"this-year\">This Year</option>
                        </select>
                    </fieldset>
                    
                </div>
                
            
            
            </div>
        </form>

    <div class=\"row\">
                
                ";
        // line 168
        echo "                </div>
            </form>
            </div>
        </div>
            
        
            <div class=\"row\" id=\"post-row\">
";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 175, $this->source); })()));
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
            // line 176
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["post"], "postType", [], "any", false, false, false, 176) == "portfolio")) {
                // line 177
                echo "            <div class=\"col-lg-3 post-item\" >
                        <div class=\"item\">
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <span class=\"author\">
                                        <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                    </span>
                                    <img src=\"";
                // line 184
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "media", [], "any", false, false, false, 184), "html", null, true);
                echo "\" width=\"244px\" height=\"199px\" alt=\"\" style=\"border-radius: 20px;\" >
                                    <h4>";
                // line 185
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titleP", [], "any", false, false, false, 185), "html", null, true);
                echo "</h4>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"line-dec\"></div>
                                    <div class=\"row\">
                                        <div class=\"col-6\">
                                            <span>Artist: <br> <strong>";
                // line 191
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getUserName", [], "any", false, false, false, 191), "html", null, true);
                echo "</strong></span>
                                        </div>
                                        <div class=\"col-6\">
                                            <span>Likes: <br> <strong>";
                // line 194
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "postLikes", [], "any", false, false, false, 194), "count", [], "any", false, false, false, 194), "html", null, true);
                echo "</strong></span>
                                        </div>
                                        <div class=\"col-6\">
                                            <span>Category: <br><strong>";
                // line 197
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getIdCategoryName", [], "any", false, false, false, 197), "html", null, true);
                echo "</strong></span>
                                            <span>Created At: <br> <strong>";
                // line 198
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getDateP", [], "any", false, false, false, 198), "Y-m-d H:i:s"), "html", null, true);
                echo "</strong></span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"main-button\">
                                        ";
                // line 205
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_details", ["id_post" => twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "any", false, false, false, 205)]), "html", null, true);
                echo "\">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            ";
                // line 211
                if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 211) % 4)) {
                    // line 212
                    echo "                </div><div class=\"row\">
            ";
                }
                // line 214
                echo "            ";
            }
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
        // line 216
        echo "   
</div>

                
        </div>
        
    </div>
        <div style=\"display: flex; justify-content: center;\">
                ";
        // line 224
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 224, $this->source); })()));
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
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                    <h6>NFT Top Artist<br><a href=\"#\">8.6 ETH or \$12,000</a></h6>
                </div>
                </div>
                <div class=\"col-lg-12\">
                <div class=\"item\">
                    <h4>2.</h4>
                    <img src=\"assets/images/author-02.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                    <h6>George Brandon<br><a href=\"#\">4.8 ETH or \$14,000</a></h6>
                </div>
                </div>
                <div class=\"col-lg-12\">
                <div class=\"item\">
                    <h4>3.</h4>
                    <img src=\"assets/images/author-03.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">4.5 ETH or \$11,600</a></h6>
                </div>
                </div>
                <div class=\"col-lg-12\">
                <div class=\"item\">
                    <h4>5.</h4>
                    <img src=\"assets/images/author-02.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                    <h6>Ronald Martino<br><a href=\"#\">7.2 ETH or \$14,500</a></h6>
                </div>
                </div>
                <div class=\"col-lg-12\">
                <div class=\"item\">
                    <h4>6.</h4>
                    <img src=\"assets/images/author-03.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">9.8 ETH or \$14,200</a></h6>
                </div>
                </div>
                <div class=\"col-lg-12\">
                <div class=\"item\">
                    <h4>8.</h4>
                    <img src=\"assets/images/author-02.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                    <h6>Ronald Martino<br><a href=\"#\">6.5 ETH or \$15,000</a></h6>
                </div>
                </div>
                <div class=\"col-lg-12\">
                <div class=\"item\">
                    <h4>9.</h4>
                    <img src=\"assets/images/author-03.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">8.8 ETH or \$16,800</a></h6>
                </div>
                </div>
                <div class=\"col-lg-12\">
                <div class=\"item\">
                    <h4>11.</h4>
                    <img src=\"assets/images/author-02.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                    <h6>Anthony Brown<br><a href=\"#\">7.5 ETH or \$15,400</a></h6>
                </div>
                </div>
                <div class=\"col-lg-12\">
                <div class=\"item\">
                    <h4>12.</h4>
                    <img src=\"assets/images/author-03.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
            Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"https://templatemo.com\" target=\"_blank\">TemplateMo</a></p>
            </div>
        </div>
        </div>
    </footer>

    ";
        // line 352
        $this->displayBlock('javascripts', $context, $blocks);
        // line 399
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 352
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 353
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>

   <script>
  \$(document).ready(function() {
    // Get the filter select element
    const filterSelect = \$('#choosefilter');

    // Add a change event listener to the filter select
    filterSelect.on('change', function() {
      // Get the selected filter value
      const filterValue = \$(this).find(':selected').data('value');

      // Filter the posts based on the selected filter value
      \$('#post-row .post-item').each(function() {
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
        return array (  644 => 359,  640 => 358,  636 => 357,  632 => 356,  628 => 355,  624 => 354,  619 => 353,  609 => 352,  597 => 399,  595 => 352,  464 => 224,  454 => 216,  439 => 214,  435 => 212,  433 => 211,  423 => 205,  414 => 198,  410 => 197,  404 => 194,  398 => 191,  389 => 185,  385 => 184,  376 => 177,  373 => 176,  356 => 175,  347 => 168,  323 => 141,  312 => 139,  308 => 138,  289 => 122,  269 => 104,  256 => 97,  250 => 94,  244 => 91,  240 => 89,  236 => 88,  205 => 60,  199 => 57,  195 => 56,  191 => 55,  187 => 54,  162 => 31,  152 => 30,  140 => 22,  136 => 21,  132 => 20,  128 => 19,  123 => 18,  113 => 17,  99 => 24,  97 => 17,  91 => 14,  83 => 9,  77 => 5,  67 => 4,  57 => 30,  54 => 29,  52 => 4,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


{% block head %}
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"{{ asset('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap') }}\" rel=\"stylesheet\">

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
                        <li><a href=\"{{ path('app_home') }}\">Home</a></li>
                        <li><a href=\"{{ path('app_explore') }}\">Explore</a></li>
                        <li><a href=\"{{ path('app_blog') }}\">Blog</a></li>
                        <li><a href=\"{{ path('app_map') }}\">Famous Studios</a></li>
                        <li><a href=\"details.html.twig\">Item Details</a></li>
                        <li><a href=\"author.html\">Author</a></li>
                        <li><a href=\"{{ path('app_post_new') }}\">Create Yours</a></li>
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
                            <img src=\"{{ post.media }}\" alt=\"\" width=\"100%\" height=\"400px\" style=\"border-radius: 20px;\">
                            <div class=\"hover-effect\">
                                <div class=\"content\">
                                    <h4>{{ post.titleP }}</h4>
                                    <span class=\"author\">
                                        <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                        <input type=\"text\" name=\"title\" class=\"searchText\" placeholder=\"Type Something...\" autocomplete=\"on\" required>
                    </fieldset>
                </div>
                <div class=\"col-lg-2\">
                    <fieldset>
                        <button class=\"main-button\">Search</button>
                    </fieldset>
                </div>
                <div class=\"col-lg-3\">
    <fieldset>
    <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\" id=\"chooseCategory\">
      <option selected>All Categories</option>
      {% for category in categories %}
      <option value=\"{{ category.getId_category }}\">{{ category.nameCategory }}</option>
      {% endfor %}
    </select>
  </fieldset>
</div>
                <div class=\"col-lg-3\">
                    <fieldset>
                        <select name=\"filter\" class=\"form-select\" aria-label=\"Default select example\" id=\"choosefilter\">
                            <option selected>Filter</option>
                            <option  data-value=\"today\">Today</option>
                            <option  data-value=\"this-month\">This Month</option>
                            <option  data-value=\"this-year\">This Year</option>
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
            <div class=\"col-lg-3 post-item\" >
                        <div class=\"item\">
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <span class=\"author\">
                                        <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                                    </span>
                                    <img src=\"{{ post.media }}\" width=\"244px\" height=\"199px\" alt=\"\" style=\"border-radius: 20px;\" >
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
                </div><div class=\"row\">
            {% endif %}
            {% endif %}
{% endfor %}
   
</div>

                
        </div>
        
    </div>
        <div style=\"display: flex; justify-content: center;\">
                {{ knp_pagination_render(posts) }}
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
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                    <h6>NFT Top Artist<br><a href=\"#\">8.6 ETH or \$12,000</a></h6>
                </div>
                </div>
                <div class=\"col-lg-12\">
                <div class=\"item\">
                    <h4>2.</h4>
                    <img src=\"assets/images/author-02.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                    <h6>George Brandon<br><a href=\"#\">4.8 ETH or \$14,000</a></h6>
                </div>
                </div>
                <div class=\"col-lg-12\">
                <div class=\"item\">
                    <h4>3.</h4>
                    <img src=\"assets/images/author-03.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">4.5 ETH or \$11,600</a></h6>
                </div>
                </div>
                <div class=\"col-lg-12\">
                <div class=\"item\">
                    <h4>5.</h4>
                    <img src=\"assets/images/author-02.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                    <h6>Ronald Martino<br><a href=\"#\">7.2 ETH or \$14,500</a></h6>
                </div>
                </div>
                <div class=\"col-lg-12\">
                <div class=\"item\">
                    <h4>6.</h4>
                    <img src=\"assets/images/author-03.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">9.8 ETH or \$14,200</a></h6>
                </div>
                </div>
                <div class=\"col-lg-12\">
                <div class=\"item\">
                    <h4>8.</h4>
                    <img src=\"assets/images/author-02.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                    <h6>Ronald Martino<br><a href=\"#\">6.5 ETH or \$15,000</a></h6>
                </div>
                </div>
                <div class=\"col-lg-12\">
                <div class=\"item\">
                    <h4>9.</h4>
                    <img src=\"assets/images/author-03.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">8.8 ETH or \$16,800</a></h6>
                </div>
                </div>
                <div class=\"col-lg-12\">
                <div class=\"item\">
                    <h4>11.</h4>
                    <img src=\"assets/images/author-02.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                    <h6>Anthony Brown<br><a href=\"#\">7.5 ETH or \$15,400</a></h6>
                </div>
                </div>
                <div class=\"col-lg-12\">
                <div class=\"item\">
                    <h4>12.</h4>
                    <img src=\"assets/images/author-03.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
            Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"https://templatemo.com\" target=\"_blank\">TemplateMo</a></p>
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
  \$(document).ready(function() {
    // Get the filter select element
    const filterSelect = \$('#choosefilter');

    // Add a change event listener to the filter select
    filterSelect.on('change', function() {
      // Get the selected filter value
      const filterValue = \$(this).find(':selected').data('value');

      // Filter the posts based on the selected filter value
      \$('#post-row .post-item').each(function() {
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
