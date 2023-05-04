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

    <link href='https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap'
          rel=\"stylesheet\">
    <title>ArTounsi</title>

    <!--Twig CSS-->
    ";
        // line 15
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 26
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
";
        // line 44
        $this->displayBlock('header', $context, $blocks);
        // line 147
        echo "<!-- ***** Main Banner Area Start ***** -->
<div class=\"main-banner\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 align-self-center\">
                <div class=\"header-text\">
                    <h6>Liberty NFT Market</h6>
                    <h2>Create, Sell &amp; Collect Top NFT’s.</h2>
                    <p>Liberty NFT Market is a really cool and professional design for your NFT websites. This HTML CSS
                        template is based on Bootstrap v5 and it is designed for NFT related web portals. Liberty can be
                        freely downloaded from TemplateMo's free css templates.</p>
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
                    ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 170, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 171
            echo "                        ";
            if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getDateP", [], "any", false, false, false, 171), "Y-m-d") == twig_date_format_filter($this->env, "now", "Y-m-d"))) {
                // line 172
                echo "                            <div class=\"item\">
                                <img src=\"";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "media", [], "any", false, false, false, 173), "html", null, true);
                echo "\" alt=\"\" width=\"376\" height=\"314.4\">
                            </div>
                        ";
            }
            // line 176
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "                </div>
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

                            <div class=\"row\">
                                ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 197, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 198
            echo "                                    <div class=\"col-lg-2 col-sm-6\">
                                        <div class=\"item\" style=\"margin-bottom: 50px;\">
                                            <div class=\"icon\">
                                                ";
            // line 202
            echo "                                                <img src=\"assets/images/icon-02.png\" alt=\"\">
                                            </div>
                                            <h4>";
            // line 204
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
        // line 211
        echo "                            </div>
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
                            <div class=\"col-lg-12\">
                                <div class=\"owl-collection owl-carousel\">
                                    ";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 226, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 227
            echo "                                        ";
            // line 228
            echo "                                        <div class=\"item\">
                                            <img src=\"";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "media", [], "any", false, false, false, 229), "html", null, true);
            echo "\" alt=\"\" width=\"100%\" height=\"400px\">
                                            <div class=\"down-content\">
                                                <h4>";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titleP", [], "any", false, false, false, 231), "html", null, true);
            echo "</h4>
                                                ";
            // line 233
            echo "                                                <span class=\"category\">Category: <br><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getIdCategoryName", [], "any", false, false, false, 233), "html", null, true);
            echo "</strong></span>
                                                <div class=\"main-button\">
                                                    <a href=\"";
            // line 235
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_details", ["id_post" => twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "any", false, false, false, 235)]), "html", null, true);
            echo "\">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                        ";
            // line 241
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "                                </div>
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
                        <h2>Postuler Votre Demande et chercher de travail</h2>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"main-button\">
                        <a href=\"";
        // line 262
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_new");
        echo "\">Ajouter Une Offre</a>
                    </div>
                </div>
                ";
        // line 265
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offretravails"]) || array_key_exists("offretravails", $context) ? $context["offretravails"] : (function () { throw new RuntimeError('Variable "offretravails" does not exist.', 265, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["offretravail"]) {
            // line 266
            echo "                    <div class=\"col-lg-4\">
                        <div class=\"item first-item\">
                            <div class=\"number\">
                                <h6>1</h6>
                            </div>
                            <div class=\"icon\">
                                <img src=\"assets/images/icon-02.png\" alt=\"\">
                            </div>
                            <h4>";
            // line 274
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "titreoffre", [], "any", false, false, false, 274), "html", null, true);
            echo "</h4>
                            <p>";
            // line 275
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "descriptionoffre", [], "any", false, false, false, 275), "html", null, true);
            echo "</p>
                        </div>
                    </div> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offretravail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        echo "            </div>
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
                            <li data-filter=\"*\" class=\"active\">All Items</li>
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
                                    <img src=\"assets/images/market-01.jpg\" alt=\"\"
                                         style=\"border-radius: 20px; min-width: 195px;\">
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
                                    <img src=\"assets/images/market-01.jpg\" alt=\"\"
                                         style=\"border-radius: 20px; min-width: 195px;\">
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
                                    <img src=\"assets/images/market-01.jpg\" alt=\"\"
                                         style=\"border-radius: 20px; min-width: 195px;\">
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
                                    <img src=\"assets/images/market-01.jpg\" alt=\"\"
                                         style=\"border-radius: 20px; min-width: 195px;\">
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
                                    <img src=\"assets/images/market-01.jpg\" alt=\"\"
                                         style=\"border-radius: 20px; min-width: 195px;\">
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
                                    <img src=\"assets/images/market-01.jpg\" alt=\"\"
                                         style=\"border-radius: 20px; min-width: 195px;\">
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
        // line 460
        $this->displayBlock('footer', $context, $blocks);
        // line 474
        echo "
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    ";
        // line 477
        $this->displayBlock('javascripts', $context, $blocks);
        // line 499
        echo "</div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "        <link href=\"";
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
        <link rel=\"stylesheet\" href='https://unpkg.com/swiper@7/swiper-bundle.min.css'/>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 45
        echo "
    <header class=\"header-area header-sticky\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <nav class=\"main-nav\">
                        <!-- ***** Logo Start ***** -->
                        <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"logo\">
                            <img src=";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo " alt=\"\">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class=\"nav\">
                            <div class=\"dropdown\">
                                <li><a>Art</a></li>
                                <div class=\"dropdown-content\">
                                    <li><a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_explore");
        echo "\">Explore</a></li>
                                    <li><a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\">Blog</a></li>
                                    <li><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        echo "\">Studios</a></li>
                                    <li><a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\">Create Yours</a></li>

                                </div>
                            </div>
                            <li><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">Offres</a></li>
                            <li><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
        echo "\">Demandes</a></li>
                            <li><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                            <li><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_show", ["idpanier" => "1"]);
        echo "\">Panier</a></li>
                            <li><a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\">Challenges</a></li>
                            <li><a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\">Tutoriels</a></li>
                            ";
        // line 74
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "type", [], "any", false, false, false, 74) == "Admin")) {
            // line 75
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_studiodashboard");
            echo "\">dashboard </a></li>
                            ";
        }
        // line 77
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "idUser", [], "any", false, false, false, 77) == null)) {
            // line 78
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_login");
            echo "\">Log In</a></li>
                            ";
        } else {
            // line 80
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_logout");
            echo "\">Logout</a></li>
                            ";
        }
        // line 82
        echo "                        </ul>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
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
    <!-- ***** Header Area End ***** -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 460
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 461
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

    // line 477
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 478
        echo "        ";
        // line 479
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 482
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 485
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 488
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 491
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 494
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 497
        echo "        <script src=\"";
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
        return array (  794 => 497,  788 => 494,  782 => 491,  776 => 488,  770 => 485,  764 => 482,  758 => 479,  756 => 478,  746 => 477,  724 => 461,  714 => 460,  640 => 82,  634 => 80,  628 => 78,  625 => 77,  619 => 75,  617 => 74,  613 => 73,  609 => 72,  605 => 71,  601 => 70,  597 => 69,  593 => 68,  586 => 64,  582 => 63,  578 => 62,  574 => 61,  563 => 53,  559 => 52,  550 => 45,  540 => 44,  527 => 23,  523 => 22,  519 => 21,  515 => 20,  507 => 16,  497 => 15,  485 => 499,  483 => 477,  478 => 474,  476 => 460,  292 => 278,  283 => 275,  279 => 274,  269 => 266,  265 => 265,  259 => 262,  237 => 242,  231 => 241,  223 => 235,  217 => 233,  213 => 231,  208 => 229,  205 => 228,  203 => 227,  199 => 226,  182 => 211,  169 => 204,  165 => 202,  160 => 198,  156 => 197,  134 => 177,  128 => 176,  122 => 173,  119 => 172,  116 => 171,  112 => 170,  87 => 147,  85 => 44,  65 => 26,  63 => 15,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href='https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap'
          rel=\"stylesheet\">
    <title>ArTounsi</title>

    <!--Twig CSS-->
    {% block stylesheet %}
        <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">


        <!-- Additional CSS Files -->
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-liberty-market.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
        <link rel=\"stylesheet\" href='https://unpkg.com/swiper@7/swiper-bundle.min.css'/>
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
{% block header %}

    <header class=\"header-area header-sticky\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <nav class=\"main-nav\">
                        <!-- ***** Logo Start ***** -->
                        <a href=\"{{ path('app_home') }}\" class=\"logo\">
                            <img src={{ asset(\"assets/images/logo.png\") }} alt=\"\">
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
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
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
                    <p>Liberty NFT Market is a really cool and professional design for your NFT websites. This HTML CSS
                        template is based on Bootstrap v5 and it is designed for NFT related web portals. Liberty can be
                        freely downloaded from TemplateMo's free css templates.</p>
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
                    {% for post in posts %}
                        {% if post.getDateP|date('Y-m-d') == \"now\"|date('Y-m-d') %}
                            <div class=\"item\">
                                <img src=\"{{ post.media }}\" alt=\"\" width=\"376\" height=\"314.4\">
                            </div>
                        {% endif %}
                    {% endfor %}
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

                            <div class=\"row\">
                                {% for category in categories %}
                                    <div class=\"col-lg-2 col-sm-6\">
                                        <div class=\"item\" style=\"margin-bottom: 50px;\">
                                            <div class=\"icon\">
                                                {# <img src=\"{{ category.icon }}\" alt=\"\"> #}
                                                <img src=\"assets/images/icon-02.png\" alt=\"\">
                                            </div>
                                            <h4>{{ category }}</h4>
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
                                                    <a href=\"{{ path('app_post_details', {'id_post': post.getId}) }}\">View
                                                        Details</a>
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
                        <h2>Postuler Votre Demande et chercher de travail</h2>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"main-button\">
                        <a href=\"{{ path('app_offretravail_new') }}\">Ajouter Une Offre</a>
                    </div>
                </div>
                {% for offretravail in offretravails %}
                    <div class=\"col-lg-4\">
                        <div class=\"item first-item\">
                            <div class=\"number\">
                                <h6>1</h6>
                            </div>
                            <div class=\"icon\">
                                <img src=\"assets/images/icon-02.png\" alt=\"\">
                            </div>
                            <h4>{{offretravail.titreoffre}}</h4>
                            <p>{{offretravail.descriptionoffre}}</p>
                        </div>
                    </div> {% endfor %}
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
                            <li data-filter=\"*\" class=\"active\">All Items</li>
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
                                    <img src=\"assets/images/market-01.jpg\" alt=\"\"
                                         style=\"border-radius: 20px; min-width: 195px;\">
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
                                    <img src=\"assets/images/market-01.jpg\" alt=\"\"
                                         style=\"border-radius: 20px; min-width: 195px;\">
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
                                    <img src=\"assets/images/market-01.jpg\" alt=\"\"
                                         style=\"border-radius: 20px; min-width: 195px;\">
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
                                    <img src=\"assets/images/market-01.jpg\" alt=\"\"
                                         style=\"border-radius: 20px; min-width: 195px;\">
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
                                    <img src=\"assets/images/market-01.jpg\" alt=\"\"
                                         style=\"border-radius: 20px; min-width: 195px;\">
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
                                    <img src=\"assets/images/market-01.jpg\" alt=\"\"
                                         style=\"border-radius: 20px; min-width: 195px;\">
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
                            Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"https://templatemo.com\"
                                           target=\"_blank\">TemplateMo</a></p>
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
</div>
</body>
</html>", "base.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\base.html.twig");
    }
}
