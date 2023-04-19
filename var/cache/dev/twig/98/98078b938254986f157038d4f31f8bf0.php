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
class __TwigTemplate_31b900c1bb15917a86650e9413fb2769 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'header' => [$this, 'block_header'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
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

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <title>Liberty NFT Marketplace - HTML CSS Template</title>

    ";
        // line 24
        echo "    <!--Twig CSS-->
    ";
        // line 25
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 36
        echo "
    ";
        // line 38
        echo "    ";
        // line 39
        echo "
        <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    ";
        // line 53
        echo "</head>

<body>
";
        // line 57
        echo "<!-- ***** Preloader Start ***** -->
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
";
        // line 71
        $this->displayBlock('header', $context, $blocks);
        // line 104
        echo "<!-- ***** Main Banner Area Start ***** -->
<div class=\"main-banner\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 align-self-center\">
                <div class=\"header-text\">
                    <h6>Liberty NFT Market</h6>
                    <h2>Create, Sell &amp; Collect Top NFT’s.</h2>
                    <p>Liberty NFT Market is a really cool and professional design for your NFT websites. This HTML CSS template is based on Bootstrap v5 and it is designed for NFT related web portals. Liberty can be freely downloaded from TemplateMo's free css templates.</p>
                    <div class=\"buttons\">
                        <div class=\"border-button\">
                            <a href=\"explore.html\">Explore Top NFTs</a>
                        </div>
                        <div class=\"main-button\">
                            <a href=\"https://youtube.com/templatemo\" target=\"_blank\">Watch Our Videos</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-5 offset-lg-1\">
                <div class=\"owl-banner owl-carousel\">
                    <div class=\"item\">
                        <img src=\"assets/images/banner-01.png\" alt=\"\">
                    </div>
                    <div class=\"item\">
                        <img src=\"assets/images/banner-02.png\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<div class=\"categories-collections\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"categories\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"section-heading\">
                                <div class=\"line-dec\"></div>
                                <h2>Browse Through Our <em>Categories</em> Here.</h2>
                            </div>
                        </div>
                        
                        <div class=\"row\"  >
                            ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 152, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 153
            echo "                                <div class=\"col-lg-2 col-sm-6\">
                                    <div class=\"item\" style=\"margin-bottom: 50px;\">
                                        <div class=\"icon\">
                                            ";
            // line 157
            echo "                                            <img src=\"assets/images/icon-02.png\" alt=\"\">
                                        </div>
                                        <h4 >";
            // line 159
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</h4>
                                        <div class=\"icon-button\">
                                            <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"collections\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"section-heading\">
                                <div class=\"line-dec\"></div>
                                <h2>Explore Some Hot <em>Post</em> In Website.</h2>
                            </div>
                        </div>
                        ";
        // line 227
        echo "                        <div class=\"col-lg-12\">
                        <div class=\"owl-collection owl-carousel\">
                            ";
        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 229, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 230
            echo "                                ";
            // line 231
            echo "                                    <div class=\"item\">
                                        <img src=\"";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "media", [], "any", false, false, false, 232), "html", null, true);
            echo "\" alt=\"\" width=\"100%\" height=\"400px\">
                                        <div class=\"down-content\">
                                            <h4>";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titleP", [], "any", false, false, false, 234), "html", null, true);
            echo "</h4>
                                            ";
            // line 236
            echo "                                            <span class=\"category\">Category: <br><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getIdCategoryName", [], "any", false, false, false, 236), "html", null, true);
            echo "</strong></span>
                                            <div class=\"main-button\">
                                                <a href=\"";
            // line 238
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_details", ["id_post" => twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "any", false, false, false, 238)]), "html", null, true);
            echo "\">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                ";
            // line 243
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo "                        </div>
                    </div>
                    </div>
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
                        <img src=\"assets/images/icon-02.png\" alt=\"\">
                    </div>
                    <h4>Set Up Your Wallet</h4>
                    <p>NFT means Non-Fungible Token that are used in digital cryptocurrency markets. There are many different kinds of NFTs in the industry.</p>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"item second-item\">
                    <div class=\"number\">
                        <h6>2</h6>
                    </div>
                    <div class=\"icon\">
                        <img src=\"assets/images/icon-04.png\" alt=\"\">
                    </div>
                    <h4>Add Your Digital NFT</h4>
                    <p>There are 5 different HTML pages included in this NFT <a href=\"https://templatemo.com/page/1\" target=\"_blank\" rel=\"nofollow\">website template</a>. You can edit or modify any section on any page as you required.</p>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"item\">
                    <div class=\"icon\">
                        <img src=\"assets/images/icon-06.png\" alt=\"\">
                    </div>
                    <h4>Sell Your NFT &amp; Make Profit</h4>
                    <p>If you would like to support our TemplateMo website, please visit <a rel=\"nofollow\" href=\"https://templatemo.com/contact\" target=\"_parent\">our contact page</a> to make a PayPal contribution. Thank you.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"currently-market\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"section-heading\">
                    <div class=\"line-dec\"></div>
                    <h2><em>Items</em> Currently In The Market.</h2>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"filters\">
                    <ul>
                        <li data-filter=\"*\"  class=\"active\">All Items</li>
                        <li data-filter=\".msc\">Music Art</li>
                        <li data-filter=\".dig\">Digital Art</li>
                        <li data-filter=\".blc\">Blockchain</li>
                        <li data-filter=\".vtr\">Virtual</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"row grid\">
                    <div class=\"col-lg-6 currently-market-item all msc\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Music Art Super Item</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>2.03 ETH</strong><br><em>(\$8,240.50)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>4D 08H 15M 42S</strong><br><em>(July 24th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 currently-market-item all dig\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Digital Crypto Artwork</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>2.03 ETH</strong><br><em>(\$7,200.50)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>2D 06H 30M 25S</strong><br><em>(July 26th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 currently-market-item all blc\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Blockchain Item One</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>3.64 ETH</strong><br><em>(\$6,600.00)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>6D 05H 40M 50S</strong><br><em>(July 28th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 currently-market-item all vtr\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Virtual Currency Art</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>2.44 ETH</strong><br><em>(\$8,800.50)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>3D 05H 20M 58S</strong><br><em>(July 14th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 currently-market-item all vrt dig\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Digital Art Item</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>2.50 ETH</strong><br><em>(\$8,400.50)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>4D 08H 32M 18S</strong><br><em>(July 16th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 currently-market-item all msc blc\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Blockchain Music Design</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>2.44 ETH</strong><br><em>(\$8,200.50)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>5D 10H 22M 24S</strong><br><em>(July 18th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 476
        $this->displayBlock('footer', $context, $blocks);
        // line 489
        echo "
 <!-- Scripts -->
<!-- Bootstrap core JavaScript -->
";
        // line 492
        $this->displayBlock('javascripts', $context, $blocks);
        // line 514
        echo "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 25
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 26
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\"href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.css"), "html", null, true);
        echo "\"/>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 71
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 72
        echo "
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
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_explore");
        echo "\">Explore</a></li>
                        <li><a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\">Blog</a></li>
                        <li><a href=\"details.html\">Item Details</a></li>
                        <li><a href=\"author.html\">Author</a></li>
                        <li><a href=\"";
        // line 90
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

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 476
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 477
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

    // line 492
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 494
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
 
";
        // line 497
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

";
        // line 500
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>

";
        // line 503
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>

";
        // line 506
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>

";
        // line 509
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>

";
        // line 512
        echo "<script src=\"";
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
        return array (  675 => 512,  669 => 509,  663 => 506,  657 => 503,  651 => 500,  645 => 497,  639 => 494,  629 => 492,  608 => 477,  598 => 476,  574 => 90,  568 => 87,  564 => 86,  560 => 85,  545 => 72,  535 => 71,  523 => 34,  519 => 33,  515 => 32,  511 => 31,  507 => 30,  499 => 26,  489 => 25,  478 => 514,  476 => 492,  471 => 489,  469 => 476,  235 => 244,  229 => 243,  222 => 238,  216 => 236,  212 => 234,  207 => 232,  204 => 231,  202 => 230,  198 => 229,  194 => 227,  179 => 166,  166 => 159,  162 => 157,  157 => 153,  153 => 152,  103 => 104,  101 => 71,  85 => 57,  80 => 53,  75 => 39,  73 => 38,  70 => 36,  68 => 25,  65 => 24,  58 => 10,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"{{asset('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap')}}\" rel=\"stylesheet\">

    <title>Liberty NFT Marketplace - HTML CSS Template</title>

    {# <!-- Bootstrap core CSS -->
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">


    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"assets/css/fontawesome.css\">
    <link rel=\"stylesheet\" href=\"assets/css/templatemo-liberty-market.css\">
    <link rel=\"stylesheet\" href=\"assets/css/owl.css\">
    <link rel=\"stylesheet\" href=\"assets/css/animate.css\">
    <link rel=\"stylesheet\"href=\"https://unpkg.com/swiper@7/swiper-bundle.min.css\"/> #}
    <!--Twig CSS-->
    {% block stylesheet %}
    <link href=\"{{asset('vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">


    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/fontawesome.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/templatemo-liberty-market.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/owl.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/animate.css')}}\">
    <link rel=\"stylesheet\"href=\"{{asset('https://unpkg.com/swiper@7/swiper-bundle.min.css')}}\"/>
    {% endblock %}

    {# JavaScript files#}
    {# {% block javascripts %} #}

        <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    {# <script src=\"vendor/jquery/jquery.min.js\"></script>
    <script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script>

    <script src=\"assets/js/isotope.min.js\"></script>
    <script src=\"assets/js/owl-carousel.js\"></script>

    <script src=\"assets/js/tabs.js\"></script>
    <script src=\"assets/js/popup.js\"></script>
    <script src=\"assets/js/custom.js\"></script>

    {% endblock %} #}
</head>

<body>
{# {% block content %}Default content{% endblock %} #}
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
{% block header %}

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
                        <li><a href=\"details.html\">Item Details</a></li>
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

{% endblock %}
<!-- ***** Main Banner Area Start ***** -->
<div class=\"main-banner\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 align-self-center\">
                <div class=\"header-text\">
                    <h6>Liberty NFT Market</h6>
                    <h2>Create, Sell &amp; Collect Top NFT’s.</h2>
                    <p>Liberty NFT Market is a really cool and professional design for your NFT websites. This HTML CSS template is based on Bootstrap v5 and it is designed for NFT related web portals. Liberty can be freely downloaded from TemplateMo's free css templates.</p>
                    <div class=\"buttons\">
                        <div class=\"border-button\">
                            <a href=\"explore.html\">Explore Top NFTs</a>
                        </div>
                        <div class=\"main-button\">
                            <a href=\"https://youtube.com/templatemo\" target=\"_blank\">Watch Our Videos</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-5 offset-lg-1\">
                <div class=\"owl-banner owl-carousel\">
                    <div class=\"item\">
                        <img src=\"assets/images/banner-01.png\" alt=\"\">
                    </div>
                    <div class=\"item\">
                        <img src=\"assets/images/banner-02.png\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<div class=\"categories-collections\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"categories\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"section-heading\">
                                <div class=\"line-dec\"></div>
                                <h2>Browse Through Our <em>Categories</em> Here.</h2>
                            </div>
                        </div>
                        
                        <div class=\"row\"  >
                            {% for category in categories %}
                                <div class=\"col-lg-2 col-sm-6\">
                                    <div class=\"item\" style=\"margin-bottom: 50px;\">
                                        <div class=\"icon\">
                                            {# <img src=\"{{ category.icon }}\" alt=\"\"> #}
                                            <img src=\"assets/images/icon-02.png\" alt=\"\">
                                        </div>
                                        <h4 >{{ category }}</h4>
                                        <div class=\"icon-button\">
                                            <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"collections\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"section-heading\">
                                <div class=\"line-dec\"></div>
                                <h2>Explore Some Hot <em>Post</em> In Website.</h2>
                            </div>
                        </div>
                        {# <div class=\"col-lg-12\">
                            <div class=\"owl-collection owl-carousel\">
                                <div class=\"item\">
                                    <img src=\"assets/images/collection-01.jpg\" alt=\"\">
                                    <div class=\"down-content\">
                                        <h4>Mutant Bored Ape Yacht Club</h4>
                                        <span class=\"collection\">Items In Collection:<br><strong>310/340</strong></span>
                                        <span class=\"category\">Category:<br><strong>Digital Crypto</strong></span>
                                        <div class=\"main-button\">
                                            <a href=\"explore.html\">Explore Mutant</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <img src=\"assets/images/collection-01.jpg\" alt=\"\">
                                    <div class=\"down-content\">
                                        <h4>Bored Ape Kennel Club</h4>
                                        <span class=\"collection\">Items In Collection:<br><strong>324/324</strong></span>
                                        <span class=\"category\">Category:<br><strong>Visual Art</strong></span>
                                        <div class=\"main-button\">
                                            <a href=\"explore.html\">Explore Bored Ape</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <img src=\"assets/images/collection-01.jpg\" alt=\"\">
                                    <div class=\"down-content\">
                                        <h4>Genesis Collective Statue</h4>
                                        <span class=\"collection\">Items In Collection:<br><strong>380/394</strong></span>
                                        <span class=\"category\">Category:<br><strong>Music Art</strong></span>
                                        <div class=\"main-button\">
                                            <a href=\"explore.html\">Explore Genesis</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <img src=\"assets/images/collection-01.jpg\" alt=\"\">
                                    <div class=\"down-content\">
                                        <h4>Worldwide Artwork Ground</h4>
                                        <span class=\"collection\">Items In Collection:<br><strong>426/468</strong></span>
                                        <span class=\"category\">Category:<br><strong>Blockchain</strong></span>
                                        <div class=\"main-button\">
                                            <a href=\"explore.html\">Explore Worldwide</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> #}
                        <div class=\"col-lg-12\">
                        <div class=\"owl-collection owl-carousel\">
                            {% for post in posts %}
                                {# {% if post.postType == 'portfolio' %} #}
                                    <div class=\"item\">
                                        <img src=\"{{ post.media }}\" alt=\"\" width=\"100%\" height=\"400px\">
                                        <div class=\"down-content\">
                                            <h4>{{ post.titleP }}</h4>
                                            {# <span class=\"collection\">Id post<br><strong>{{ post.getId }}</strong></span> #}
                                            <span class=\"category\">Category: <br><strong>{{ post.getIdCategoryName }}</strong></span>
                                            <div class=\"main-button\">
                                                <a href=\"{{ path('app_post_details', {'id_post': post.getId}) }}\">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                {# {% endif %} #}
                            {% endfor %}
                        </div>
                    </div>
                    </div>
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
                        <img src=\"assets/images/icon-02.png\" alt=\"\">
                    </div>
                    <h4>Set Up Your Wallet</h4>
                    <p>NFT means Non-Fungible Token that are used in digital cryptocurrency markets. There are many different kinds of NFTs in the industry.</p>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"item second-item\">
                    <div class=\"number\">
                        <h6>2</h6>
                    </div>
                    <div class=\"icon\">
                        <img src=\"assets/images/icon-04.png\" alt=\"\">
                    </div>
                    <h4>Add Your Digital NFT</h4>
                    <p>There are 5 different HTML pages included in this NFT <a href=\"https://templatemo.com/page/1\" target=\"_blank\" rel=\"nofollow\">website template</a>. You can edit or modify any section on any page as you required.</p>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"item\">
                    <div class=\"icon\">
                        <img src=\"assets/images/icon-06.png\" alt=\"\">
                    </div>
                    <h4>Sell Your NFT &amp; Make Profit</h4>
                    <p>If you would like to support our TemplateMo website, please visit <a rel=\"nofollow\" href=\"https://templatemo.com/contact\" target=\"_parent\">our contact page</a> to make a PayPal contribution. Thank you.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"currently-market\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"section-heading\">
                    <div class=\"line-dec\"></div>
                    <h2><em>Items</em> Currently In The Market.</h2>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"filters\">
                    <ul>
                        <li data-filter=\"*\"  class=\"active\">All Items</li>
                        <li data-filter=\".msc\">Music Art</li>
                        <li data-filter=\".dig\">Digital Art</li>
                        <li data-filter=\".blc\">Blockchain</li>
                        <li data-filter=\".vtr\">Virtual</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-12\">
                <div class=\"row grid\">
                    <div class=\"col-lg-6 currently-market-item all msc\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Music Art Super Item</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>2.03 ETH</strong><br><em>(\$8,240.50)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>4D 08H 15M 42S</strong><br><em>(July 24th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 currently-market-item all dig\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Digital Crypto Artwork</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>2.03 ETH</strong><br><em>(\$7,200.50)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>2D 06H 30M 25S</strong><br><em>(July 26th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 currently-market-item all blc\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Blockchain Item One</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>3.64 ETH</strong><br><em>(\$6,600.00)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>6D 05H 40M 50S</strong><br><em>(July 28th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 currently-market-item all vtr\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Virtual Currency Art</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>2.44 ETH</strong><br><em>(\$8,800.50)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>3D 05H 20M 58S</strong><br><em>(July 14th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 currently-market-item all vrt dig\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Digital Art Item</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>2.50 ETH</strong><br><em>(\$8,400.50)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>4D 08H 32M 18S</strong><br><em>(July 16th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 currently-market-item all msc blc\">
                        <div class=\"item\">
                            <div class=\"left-image\">
                                <img src=\"assets/images/market-01.jpg\" alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                            </div>
                            <div class=\"right-content\">
                                <h4>Blockchain Music Design</h4>
                                <span class=\"author\">
                    <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
                    <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                  </span>
                                <div class=\"line-dec\"></div>
                                <span class=\"bid\">
                    Current Bid<br><strong>2.44 ETH</strong><br><em>(\$8,200.50)</em>
                  </span>
                                <span class=\"ends\">
                    Ends In<br><strong>5D 10H 22M 24S</strong><br><em>(July 18th, 2022)</em>
                  </span>
                                <div class=\"text-button\">
                                    <a href=\"details.html\">View Item Details</a>
                                </div>
                            </div>
                        </div>
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
                    Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"https://templatemo.com\" target=\"_blank\">TemplateMo</a></p>
            </div>
        </div>
    </div>
</footer>
{% endblock %}

 <!-- Scripts -->
<!-- Bootstrap core JavaScript -->
{% block javascripts %}
{# <script src=\"vendor/jquery/jquery.min.js\"></script> #}
 <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
 
{# <script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script> #}
<script src=\"{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}\"></script>

{# <script src=\"assets/js/isotope.min.js\"></script> #}
<script src=\"{{ asset('assets/js/isotope.min.js') }}\"></script>

{# <script src=\"assets/js/owl-carousel.js\"></script> #}
<script src=\"{{ asset('assets/js/owl-carousel.js') }}\"></script>

{# <script src=\"assets/js/tabs.js\"></script> #}
<script src=\"{{ asset('assets/js/tabs.js') }}\"></script>

{# <script src=\"assets/js/popup.js\"></script> #}
<script src=\"{{ asset('assets/js/popup.js') }}\"></script>

{# <script src=\"assets/js/custom.js\"></script>  #}
<script src=\"{{ asset('assets/js/custom.js') }}\"></script>
{% endblock %}
</body>
</html>", "base.html.twig", "C:\\Users\\amine\\ArtounsiSymfonyy\\templates\\base.html.twig");
    }
}
