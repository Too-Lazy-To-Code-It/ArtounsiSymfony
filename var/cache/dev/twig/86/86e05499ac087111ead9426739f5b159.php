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

/* base.html.twig */
class __TwigTemplate_2c77ba804068e88a1a3256216b5ec575 extends Template
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
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\"
          rel=\"stylesheet\">

    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 15
        $this->displayBlock('css', $context, $blocks);
        // line 29
        echo "
</head>

<body>

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
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <a href=\"index.html\" class=\"logo\">
                        <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/icon.png"), "html", null, true);
        echo "\" width=\"40\" height=\"60\" alt=\"\">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                        <li><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\">Challenges</a></li>
                    </ul>
                    <ul class=\"nav\">
                        <li><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\">Tutoriels</a></li>
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

";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 564
        echo "
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
        // line 578
        $this->displayBlock('js', $context, $blocks);
        // line 592
        echo "
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liberty NFT Marketplace - Explore Listing Page ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 16
        echo "        <!-- Bootstrap core CSS -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Additional CSS Files -->
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css\">

        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 76
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 77
        echo "    <div class=\"page-heading\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h6>Liberty NFT Market</h6>
                    <h2>Discover Some Top Items</h2>
                    <span>Home > <a href=\"#\">Explore</a></span>
                </div>
            </div>
        </div>
        <div class=\"featured-explore\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"owl-features owl-carousel\">
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <img src=\"assets/images/featured-01.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                    <div class=\"hover-effect\">
                                        <div class=\"content\">
                                            <h4>Triple Mutant Ape Bored</h4>
                                            <span class=\"author\">
                        <img src=\"assets/images/author.jpg\" alt=\"\"
                             style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                        <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <img src=\"assets/images/featured-02.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                    <div class=\"hover-effect\">
                                        <div class=\"content\">
                                            <h4>Bored Ape Kennel Club</h4>
                                            <span class=\"author\">
                        <img src=\"assets/images/author.jpg\" alt=\"\"
                             style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                        <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <img src=\"assets/images/featured-03.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                    <div class=\"hover-effect\">
                                        <div class=\"content\">
                                            <h4>Genesis Club by KMT</h4>
                                            <span class=\"author\">
                        <img src=\"assets/images/author.jpg\" alt=\"\"
                             style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                        <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <img src=\"assets/images/featured-04.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                    <div class=\"hover-effect\">
                                        <div class=\"content\">
                                            <h4>Crypto Aurora Guy</h4>
                                            <span class=\"author\">
                        <img src=\"assets/images/author.jpg\" alt=\"\"
                             style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                        <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        <h2>Discover Some Of Our <em>Items</em>.</h2>
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <form id=\"search-form\" name=\"gs\" method=\"submit\" role=\"search\" action=\"#\">
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
                                        <option type=\"checkbox\" name=\"option1\" value=\"Music\">Music</option>
                                        <option value=\"Digital\">Digital</option>
                                        <option value=\"Blockchain\">Blockchain</option>
                                        <option value=\"Virtual\">Virtual</option>
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
                    </form>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <span class=\"banner\">Double Item</span>
                            </div>
                            <div class=\"col-lg-6 col-sm-6\">
                <span class=\"author\">
                  <img src=\"assets/images/author.jpg\" alt=\"\"
                       style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>
                                <img src=\"assets/images/discover-01.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                <h4>Mutant Ape Bored</h4>
                            </div>
                            <div class=\"col-lg-6 col-sm-6\">
                <span class=\"author\">
                  <img src=\"assets/images/author.jpg\" alt=\"\"
                       style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>
                                <img src=\"assets/images/discover-02.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                <h4>His Other Half</h4>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"line-dec\"></div>
                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-sm-6\">
                                        <span>Current Bid: <br> <strong>8.16 ETH</strong></span>
                                    </div>
                                    <div class=\"col-lg-3 col-sm-6\">
                                        <span>Category: <br> <strong>Digital Art</strong></span>
                                    </div>
                                    <div class=\"col-lg-3 col-sm-6\">
                                        <span>Collection:: <br> <strong>2/2</strong></span>
                                    </div>
                                    <div class=\"col-lg-3 col-sm-6\">
                                        <span>Ends In: <br> <strong>25th Nov</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"main-button\">
                                    <a href=\"details.html\">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                <span class=\"author\">
                  <img src=\"assets/images/author.jpg\" alt=\"\"
                       style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>
                                <img src=\"assets/images/discover-03.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                <h4>Genesis Meta Boom</h4>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"line-dec\"></div>
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <span>Current Bid: <br> <strong>5.15 ETH</strong></span>
                                    </div>
                                    <div class=\"col-6\">
                                        <span>Ends In: <br> <strong>26th Nov</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"main-button\">
                                    <a href=\"details.html\">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                <span class=\"author\">
                  <img src=\"assets/images/author.jpg\" alt=\"\"
                       style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>
                                <img src=\"assets/images/discover-04.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                <h4>Another Half Ape</h4>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"line-dec\"></div>
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <span>Current Bid: <br> <strong>3.63 ETH</strong></span>
                                    </div>
                                    <div class=\"col-6\">
                                        <span>Ends In: <br> <strong>24th Nov</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"main-button\">
                                    <a href=\"details.html\">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                <span class=\"author\">
                  <img src=\"assets/images/author.jpg\" alt=\"\"
                       style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>
                                <img src=\"assets/images/discover-03.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                <h4>Pixel Sand Box</h4>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"line-dec\"></div>
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <span>Current Bid: <br> <strong>4.68 ETH</strong></span>
                                    </div>
                                    <div class=\"col-6\">
                                        <span>Ends In: <br> <strong>28th Nov</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"main-button\">
                                    <a href=\"details.html\">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                <span class=\"author\">
                  <img src=\"assets/images/author.jpg\" alt=\"\"
                       style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>
                                <img src=\"assets/images/discover-04.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                <h4>Another Half Ape</h4>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"line-dec\"></div>
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                                    </div>
                                    <div class=\"col-6\">
                                        <span>Ends In: <br> <strong>25th Nov</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"main-button\">
                                    <a href=\"details.html\">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                <span class=\"author\">
                  <img src=\"assets/images/author.jpg\" alt=\"\"
                       style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>
                                <img src=\"assets/images/discover-06.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                <h4>Invisible NFT Land</h4>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"line-dec\"></div>
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                                    </div>
                                    <div class=\"col-6\">
                                        <span>Ends In: <br> <strong>25th Nov</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"main-button\">
                                    <a href=\"details.html\">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                <span class=\"author\">
                  <img src=\"assets/images/author.jpg\" alt=\"\"
                       style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>
                                <img src=\"assets/images/discover-05.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                <h4>Another Half Ape</h4>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"line-dec\"></div>
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <span>Current Bid: <br> <strong>2.64 ETH</strong></span>
                                    </div>
                                    <div class=\"col-6\">
                                        <span>Ends In: <br> <strong>25th Nov</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"main-button\">
                                    <a href=\"details.html\">View Details</a>
                                </div>
                            </div>
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 578
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 579
        echo "    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    ";
        // line 581
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
    <script src=\"";
        // line 582
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 583
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 585
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 586
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 588
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 589
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 590
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  780 => 590,  776 => 589,  772 => 588,  767 => 586,  763 => 585,  758 => 583,  754 => 582,  750 => 581,  746 => 579,  736 => 578,  240 => 77,  230 => 76,  218 => 27,  212 => 24,  208 => 23,  204 => 22,  200 => 21,  196 => 20,  190 => 17,  187 => 16,  177 => 15,  158 => 13,  146 => 592,  144 => 578,  128 => 564,  126 => 76,  110 => 63,  104 => 60,  96 => 55,  68 => 29,  66 => 15,  61 => 13,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\"
          rel=\"stylesheet\">

    <title>{% block title %}Liberty NFT Marketplace - Explore Listing Page {% endblock %}</title>

    {% block css %}
        <!-- Bootstrap core CSS -->
        <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

        <!-- Additional CSS Files -->
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-liberty-market.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('https://unpkg.com/swiper@7/swiper-bundle.min.css') }}\"/>
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css\">

        {{ encore_entry_link_tags('app') }}
    {% endblock %}

</head>

<body>

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
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <a href=\"index.html\" class=\"logo\">
                        <img src=\"{{ asset('/assets/icon.png') }}\" width=\"40\" height=\"60\" alt=\"\">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                        <li><a href=\"{{ path('app_challenge_index') }}\">Challenges</a></li>
                    </ul>
                    <ul class=\"nav\">
                        <li><a href=\"{{ path('app_tutoriel_index') }}\">Tutoriels</a></li>
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

{% block body %}
    <div class=\"page-heading\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h6>Liberty NFT Market</h6>
                    <h2>Discover Some Top Items</h2>
                    <span>Home > <a href=\"#\">Explore</a></span>
                </div>
            </div>
        </div>
        <div class=\"featured-explore\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"owl-features owl-carousel\">
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <img src=\"assets/images/featured-01.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                    <div class=\"hover-effect\">
                                        <div class=\"content\">
                                            <h4>Triple Mutant Ape Bored</h4>
                                            <span class=\"author\">
                        <img src=\"assets/images/author.jpg\" alt=\"\"
                             style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                        <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <img src=\"assets/images/featured-02.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                    <div class=\"hover-effect\">
                                        <div class=\"content\">
                                            <h4>Bored Ape Kennel Club</h4>
                                            <span class=\"author\">
                        <img src=\"assets/images/author.jpg\" alt=\"\"
                             style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                        <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <img src=\"assets/images/featured-03.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                    <div class=\"hover-effect\">
                                        <div class=\"content\">
                                            <h4>Genesis Club by KMT</h4>
                                            <span class=\"author\">
                        <img src=\"assets/images/author.jpg\" alt=\"\"
                             style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                        <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"thumb\">
                                    <img src=\"assets/images/featured-04.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                    <div class=\"hover-effect\">
                                        <div class=\"content\">
                                            <h4>Crypto Aurora Guy</h4>
                                            <span class=\"author\">
                        <img src=\"assets/images/author.jpg\" alt=\"\"
                             style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                        <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        <h2>Discover Some Of Our <em>Items</em>.</h2>
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <form id=\"search-form\" name=\"gs\" method=\"submit\" role=\"search\" action=\"#\">
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
                                        <option type=\"checkbox\" name=\"option1\" value=\"Music\">Music</option>
                                        <option value=\"Digital\">Digital</option>
                                        <option value=\"Blockchain\">Blockchain</option>
                                        <option value=\"Virtual\">Virtual</option>
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
                    </form>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <span class=\"banner\">Double Item</span>
                            </div>
                            <div class=\"col-lg-6 col-sm-6\">
                <span class=\"author\">
                  <img src=\"assets/images/author.jpg\" alt=\"\"
                       style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>
                                <img src=\"assets/images/discover-01.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                <h4>Mutant Ape Bored</h4>
                            </div>
                            <div class=\"col-lg-6 col-sm-6\">
                <span class=\"author\">
                  <img src=\"assets/images/author.jpg\" alt=\"\"
                       style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>
                                <img src=\"assets/images/discover-02.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                <h4>His Other Half</h4>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"line-dec\"></div>
                                <div class=\"row\">
                                    <div class=\"col-lg-3 col-sm-6\">
                                        <span>Current Bid: <br> <strong>8.16 ETH</strong></span>
                                    </div>
                                    <div class=\"col-lg-3 col-sm-6\">
                                        <span>Category: <br> <strong>Digital Art</strong></span>
                                    </div>
                                    <div class=\"col-lg-3 col-sm-6\">
                                        <span>Collection:: <br> <strong>2/2</strong></span>
                                    </div>
                                    <div class=\"col-lg-3 col-sm-6\">
                                        <span>Ends In: <br> <strong>25th Nov</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"main-button\">
                                    <a href=\"details.html\">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                <span class=\"author\">
                  <img src=\"assets/images/author.jpg\" alt=\"\"
                       style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>
                                <img src=\"assets/images/discover-03.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                <h4>Genesis Meta Boom</h4>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"line-dec\"></div>
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <span>Current Bid: <br> <strong>5.15 ETH</strong></span>
                                    </div>
                                    <div class=\"col-6\">
                                        <span>Ends In: <br> <strong>26th Nov</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"main-button\">
                                    <a href=\"details.html\">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                <span class=\"author\">
                  <img src=\"assets/images/author.jpg\" alt=\"\"
                       style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>
                                <img src=\"assets/images/discover-04.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                <h4>Another Half Ape</h4>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"line-dec\"></div>
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <span>Current Bid: <br> <strong>3.63 ETH</strong></span>
                                    </div>
                                    <div class=\"col-6\">
                                        <span>Ends In: <br> <strong>24th Nov</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"main-button\">
                                    <a href=\"details.html\">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                <span class=\"author\">
                  <img src=\"assets/images/author.jpg\" alt=\"\"
                       style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>
                                <img src=\"assets/images/discover-03.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                <h4>Pixel Sand Box</h4>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"line-dec\"></div>
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <span>Current Bid: <br> <strong>4.68 ETH</strong></span>
                                    </div>
                                    <div class=\"col-6\">
                                        <span>Ends In: <br> <strong>28th Nov</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"main-button\">
                                    <a href=\"details.html\">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                <span class=\"author\">
                  <img src=\"assets/images/author.jpg\" alt=\"\"
                       style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>
                                <img src=\"assets/images/discover-04.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                <h4>Another Half Ape</h4>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"line-dec\"></div>
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                                    </div>
                                    <div class=\"col-6\">
                                        <span>Ends In: <br> <strong>25th Nov</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"main-button\">
                                    <a href=\"details.html\">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                <span class=\"author\">
                  <img src=\"assets/images/author.jpg\" alt=\"\"
                       style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>
                                <img src=\"assets/images/discover-06.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                <h4>Invisible NFT Land</h4>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"line-dec\"></div>
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                                    </div>
                                    <div class=\"col-6\">
                                        <span>Ends In: <br> <strong>25th Nov</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"main-button\">
                                    <a href=\"details.html\">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                <span class=\"author\">
                  <img src=\"assets/images/author.jpg\" alt=\"\"
                       style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>
                                <img src=\"assets/images/discover-05.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                                <h4>Another Half Ape</h4>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"line-dec\"></div>
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <span>Current Bid: <br> <strong>2.64 ETH</strong></span>
                                    </div>
                                    <div class=\"col-6\">
                                        <span>Ends In: <br> <strong>25th Nov</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <div class=\"main-button\">
                                    <a href=\"details.html\">View Details</a>
                                </div>
                            </div>
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
{% endblock %}

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

{% block js %}
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    {{ encore_entry_script_tags('app') }}
    <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}\"></script>

    <script src=\"{{ asset('assets/js/isotope.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/owl-carousel.js') }}\"></script>

    <script src=\"{{ asset('assets/js/tabs.js') }}\"></script>
    <script src=\"{{ asset('assets/js/popup.js') }}\"></script>
    <script src=\"{{ asset('assets/js/custom.js') }}\"></script>
{% endblock %}

</body>
</html>", "base.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\base.html.twig");
    }
}
