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
class __TwigTemplate_93ab6f3ebc631977bc11518276d4cb96 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
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
    <!-- Vendor CSS Files -->
    <link href=\"assets2/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"assets2/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
    <link href=\"assets2/vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
    <link href=\"assets2/vendor/quill/quill.snow.css\" rel=\"stylesheet\">
    <link href=\"assets2/vendor/quill/quill.bubble.css\" rel=\"stylesheet\">
    <link href=\"assets2/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">
    <link href=\"assets2/vendor/simple-datatables/style.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\" rel=\"stylesheet\">

    <title>Liberty NFT Marketplace - HTML CSS Template</title>

    <!-- Bootstrap core CSS -->
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">


    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"assets/css/fontawesome.css\">
    <link rel=\"stylesheet\" href=\"assets/css/templatemo-liberty-market.css\">
    <link rel=\"stylesheet\" href=\"assets/css/owl.css\">
    <link rel=\"stylesheet\" href=\"assets/css/animate.css\">
    <link rel=\"stylesheet\"href=\"https://unpkg.com/swiper@7/swiper-bundle.min.css\"/>
    <!--

    TemplateMo 577 Liberty Market

    https://templatemo.com/tm-577-liberty-market

    -->
       <link href=\"https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap\"
        rel=\"stylesheet\">
      <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/font-awesome.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/elegant-icons.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/magnific-popup.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/slicknav.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/style.css\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"assets/cardsjdid.scss\" type=\"text/scss\">
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
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/logoart.png"), "html", null, true);
        echo "\"  height=\"50\" width=\"30\" alt=\"\">
              
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                        <li><a href=\"#\" class=\"active\">Acceuil</a></li>
                       
                        <li><a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">Offres d'emplois</a></li>
                        <li><a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
        echo "\">Demandes d'emplois</a></li>
                                 
                      <li><a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_studiodashboard");
        echo "\">dashboard </a></li>

                       
                         
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
                        <div class=\"col-lg-2 col-sm-6\">
                            <div class=\"item\">
                                <div class=\"icon\">
                                    <img src=\"assets/images/icon-01.png\" alt=\"\">
                                </div>
                                <h4>Blockchain</h4>
                                <div class=\"icon-button\">
                                    <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-2 col-sm-6\">
                            <div class=\"item\">
                                <div class=\"icon\">
                                    <img src=\"assets/images/icon-02.png\" alt=\"\">
                                </div>
                                <h4>Digital Art</h4>
                                <div class=\"icon-button\">
                                    <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-2 col-sm-6\">
                            <div class=\"item\">
                                <div class=\"icon\">
                                    <img src=\"assets/images/icon-03.png\" alt=\"\">
                                </div>
                                <h4>Music Art</h4>
                                <div class=\"icon-button\">
                                    <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-2 col-sm-6\">
                            <div class=\"item\">
                                <div class=\"icon\">
                                    <img src=\"assets/images/icon-04.png\" alt=\"\">
                                </div>
                                <h4>Virtual World</h4>
                                <div class=\"icon-button\">
                                    <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-2 col-sm-6\">
                            <div class=\"item\">
                                <div class=\"icon\">
                                    <img src=\"assets/images/icon-05.png\" alt=\"\">
                                </div>
                                <h4>Valuable</h4>
                                <div class=\"icon-button\">
                                    <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-2 col-sm-6\">
                            <div class=\"item\">
                                <div class=\"icon\">
                                    <img src=\"assets/images/icon-06.png\" alt=\"\">
                                </div>
                                <h4>Triple NFT</h4>
                                <div class=\"icon-button\">
                                    <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                                </div>
                            </div>
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
                                <h2>Explore Some Hot <em>Collections</em> In Market.</h2>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
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


<section class=\"dark\">
\t<div class=\"container py-4\">
\t\t<h1 class=\"h1 text-center\" id=\"pageHeaderTitle\">My Cards Dark</h1>

\t\t<article class=\"postcard dark blue\">
\t\t\t<a class=\"postcard__img_link\" href=\"#\">
\t\t\t\t<img class=\"postcard__img\" src=\"https://picsum.photos/1000/1000\" alt=\"Image Title\" />
\t\t\t</a>
\t\t\t<div class=\"postcard__text\">
\t\t\t\t<h1 class=\"postcard__title blue\"><a href=\"#\">Podcast Title</a></h1>
\t\t\t\t<div class=\"postcard__subtitle small\">
\t\t\t\t\t<time datetime=\"2020-05-25 12:00:00\">
\t\t\t\t\t\t<i class=\"fas fa-calendar-alt mr-2\"></i>Mon, May 25th 2020
\t\t\t\t\t</time>
\t\t\t\t</div>
\t\t\t\t<div class=\"postcard__bar\"></div>
\t\t\t\t<div class=\"postcard__preview-txt\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
\t\t\t\t<ul class=\"postcard__tagbox\">
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-tag mr-2\"></i>Podcast</li>
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-clock mr-2\"></i>55 mins.</li>
\t\t\t\t\t<li class=\"tag__item play blue\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"fas fa-play mr-2\"></i>Play Episode</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</article>
\t\t<article class=\"postcard dark red\">
\t\t\t<a class=\"postcard__img_link\" href=\"#\">
\t\t\t\t<img class=\"postcard__img\" src=\"https://picsum.photos/501/500\" alt=\"Image Title\" />
\t\t\t</a>
\t\t\t<div class=\"postcard__text\">
\t\t\t\t<h1 class=\"postcard__title red\"><a href=\"#\">Podcast Title</a></h1>
\t\t\t\t<div class=\"postcard__subtitle small\">
\t\t\t\t\t<time datetime=\"2020-05-25 12:00:00\">
\t\t\t\t\t\t<i class=\"fas fa-calendar-alt mr-2\"></i>Mon, May 25th 2020
\t\t\t\t\t</time>
\t\t\t\t</div>
\t\t\t\t<div class=\"postcard__bar\"></div>
\t\t\t\t<div class=\"postcard__preview-txt\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
\t\t\t\t<ul class=\"postcard__tagbox\">
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-tag mr-2\"></i>Podcast</li>
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-clock mr-2\"></i>55 mins.</li>
\t\t\t\t\t<li class=\"tag__item play red\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"fas fa-play mr-2\"></i>Play Episode</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</article>
\t\t<article class=\"postcard dark green\">
\t\t\t<a class=\"postcard__img_link\" href=\"#\">
\t\t\t\t<img class=\"postcard__img\" src=\"https://picsum.photos/500/501\" alt=\"Image Title\" />
\t\t\t</a>
\t\t\t<div class=\"postcard__text\">
\t\t\t\t<h1 class=\"postcard__title green\"><a href=\"#\">Podcast Title</a></h1>
\t\t\t\t<div class=\"postcard__subtitle small\">
\t\t\t\t\t<time datetime=\"2020-05-25 12:00:00\">
\t\t\t\t\t\t<i class=\"fas fa-calendar-alt mr-2\"></i>Mon, May 25th 2020
\t\t\t\t\t</time>
\t\t\t\t</div>
\t\t\t\t<div class=\"postcard__bar\"></div>
\t\t\t\t<div class=\"postcard__preview-txt\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
\t\t\t\t<ul class=\"postcard__tagbox\">
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-tag mr-2\"></i>Podcast</li>
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-clock mr-2\"></i>55 mins.</li>
\t\t\t\t\t<li class=\"tag__item play green\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"fas fa-play mr-2\"></i>Play Episode</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</article>
\t\t<article class=\"postcard dark yellow\">
\t\t\t<a class=\"postcard__img_link\" href=\"#\">
\t\t\t\t<img class=\"postcard__img\" src=\"https://picsum.photos/501/501\" alt=\"Image Title\" />
\t\t\t</a>
\t\t\t<div class=\"postcard__text\">
\t\t\t\t<h1 class=\"postcard__title yellow\"><a href=\"#\">Podcast Title</a></h1>
\t\t\t\t<div class=\"postcard__subtitle small\">
\t\t\t\t\t<time datetime=\"2020-05-25 12:00:00\">
\t\t\t\t\t\t<i class=\"fas fa-calendar-alt mr-2\"></i>Mon, May 25th 2020
\t\t\t\t\t</time>
\t\t\t\t</div>
\t\t\t\t<div class=\"postcard__bar\"></div>
\t\t\t\t<div class=\"postcard__preview-txt\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
\t\t\t\t<ul class=\"postcard__tagbox\">
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-tag mr-2\"></i>Podcast</li>
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-clock mr-2\"></i>55 mins.</li>
\t\t\t\t\t<li class=\"tag__item play yellow\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"fas fa-play mr-2\"></i>Play Episode</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</article>
\t</div>
</section>



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


<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src=\"vendor/jquery/jquery.min.js\"></script>
<script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script>

<script src=\"assets/js/isotope.min.js\"></script>
<script src=\"assets/js/owl-carousel.js\"></script>

<script src=\"assets/js/tabs.js\"></script>
<script src=\"assets/js/popup.js\"></script>
<script src=\"assets/js/custom.js\"></script>
<script src=\"js/jquery-3.3.1.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/jquery.magnific-popup.min.js\"></script>
    <script src=\"js/mixitup.min.js\"></script>
    <script src=\"js/masonry.pkgd.min.js\"></script>
    <script src=\"js/jquery.slicknav.js\"></script>
    <script src=\"js/owl.carousel.min.js\"></script>
    <script src=\"js/main.js\"></script>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  138 => 85,  133 => 83,  129 => 82,  118 => 74,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- Vendor CSS Files -->
    <link href=\"assets2/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"assets2/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
    <link href=\"assets2/vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
    <link href=\"assets2/vendor/quill/quill.snow.css\" rel=\"stylesheet\">
    <link href=\"assets2/vendor/quill/quill.bubble.css\" rel=\"stylesheet\">
    <link href=\"assets2/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">
    <link href=\"assets2/vendor/simple-datatables/style.css\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\" rel=\"stylesheet\">

    <title>Liberty NFT Marketplace - HTML CSS Template</title>

    <!-- Bootstrap core CSS -->
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">


    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"assets/css/fontawesome.css\">
    <link rel=\"stylesheet\" href=\"assets/css/templatemo-liberty-market.css\">
    <link rel=\"stylesheet\" href=\"assets/css/owl.css\">
    <link rel=\"stylesheet\" href=\"assets/css/animate.css\">
    <link rel=\"stylesheet\"href=\"https://unpkg.com/swiper@7/swiper-bundle.min.css\"/>
    <!--

    TemplateMo 577 Liberty Market

    https://templatemo.com/tm-577-liberty-market

    -->
       <link href=\"https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap\"
        rel=\"stylesheet\">
      <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/font-awesome.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/elegant-icons.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/magnific-popup.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/slicknav.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/style.css\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"assets/cardsjdid.scss\" type=\"text/scss\">
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
                       <img src=\"{{asset('assets2/img/logoart.png') }}\"  height=\"50\" width=\"30\" alt=\"\">
              
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                        <li><a href=\"#\" class=\"active\">Acceuil</a></li>
                       
                        <li><a href=\"{{ path('app_offretravail_index') }}\">Offres d'emplois</a></li>
                        <li><a href=\"{{ path('app_demandetravail_index') }}\">Demandes d'emplois</a></li>
                                 
                      <li><a href=\"{{ path('app_dashboard_studiodashboard') }}\">dashboard </a></li>

                       
                         
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
                        <div class=\"col-lg-2 col-sm-6\">
                            <div class=\"item\">
                                <div class=\"icon\">
                                    <img src=\"assets/images/icon-01.png\" alt=\"\">
                                </div>
                                <h4>Blockchain</h4>
                                <div class=\"icon-button\">
                                    <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-2 col-sm-6\">
                            <div class=\"item\">
                                <div class=\"icon\">
                                    <img src=\"assets/images/icon-02.png\" alt=\"\">
                                </div>
                                <h4>Digital Art</h4>
                                <div class=\"icon-button\">
                                    <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-2 col-sm-6\">
                            <div class=\"item\">
                                <div class=\"icon\">
                                    <img src=\"assets/images/icon-03.png\" alt=\"\">
                                </div>
                                <h4>Music Art</h4>
                                <div class=\"icon-button\">
                                    <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-2 col-sm-6\">
                            <div class=\"item\">
                                <div class=\"icon\">
                                    <img src=\"assets/images/icon-04.png\" alt=\"\">
                                </div>
                                <h4>Virtual World</h4>
                                <div class=\"icon-button\">
                                    <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-2 col-sm-6\">
                            <div class=\"item\">
                                <div class=\"icon\">
                                    <img src=\"assets/images/icon-05.png\" alt=\"\">
                                </div>
                                <h4>Valuable</h4>
                                <div class=\"icon-button\">
                                    <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-2 col-sm-6\">
                            <div class=\"item\">
                                <div class=\"icon\">
                                    <img src=\"assets/images/icon-06.png\" alt=\"\">
                                </div>
                                <h4>Triple NFT</h4>
                                <div class=\"icon-button\">
                                    <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                                </div>
                            </div>
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
                                <h2>Explore Some Hot <em>Collections</em> In Market.</h2>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
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


<section class=\"dark\">
\t<div class=\"container py-4\">
\t\t<h1 class=\"h1 text-center\" id=\"pageHeaderTitle\">My Cards Dark</h1>

\t\t<article class=\"postcard dark blue\">
\t\t\t<a class=\"postcard__img_link\" href=\"#\">
\t\t\t\t<img class=\"postcard__img\" src=\"https://picsum.photos/1000/1000\" alt=\"Image Title\" />
\t\t\t</a>
\t\t\t<div class=\"postcard__text\">
\t\t\t\t<h1 class=\"postcard__title blue\"><a href=\"#\">Podcast Title</a></h1>
\t\t\t\t<div class=\"postcard__subtitle small\">
\t\t\t\t\t<time datetime=\"2020-05-25 12:00:00\">
\t\t\t\t\t\t<i class=\"fas fa-calendar-alt mr-2\"></i>Mon, May 25th 2020
\t\t\t\t\t</time>
\t\t\t\t</div>
\t\t\t\t<div class=\"postcard__bar\"></div>
\t\t\t\t<div class=\"postcard__preview-txt\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
\t\t\t\t<ul class=\"postcard__tagbox\">
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-tag mr-2\"></i>Podcast</li>
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-clock mr-2\"></i>55 mins.</li>
\t\t\t\t\t<li class=\"tag__item play blue\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"fas fa-play mr-2\"></i>Play Episode</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</article>
\t\t<article class=\"postcard dark red\">
\t\t\t<a class=\"postcard__img_link\" href=\"#\">
\t\t\t\t<img class=\"postcard__img\" src=\"https://picsum.photos/501/500\" alt=\"Image Title\" />
\t\t\t</a>
\t\t\t<div class=\"postcard__text\">
\t\t\t\t<h1 class=\"postcard__title red\"><a href=\"#\">Podcast Title</a></h1>
\t\t\t\t<div class=\"postcard__subtitle small\">
\t\t\t\t\t<time datetime=\"2020-05-25 12:00:00\">
\t\t\t\t\t\t<i class=\"fas fa-calendar-alt mr-2\"></i>Mon, May 25th 2020
\t\t\t\t\t</time>
\t\t\t\t</div>
\t\t\t\t<div class=\"postcard__bar\"></div>
\t\t\t\t<div class=\"postcard__preview-txt\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
\t\t\t\t<ul class=\"postcard__tagbox\">
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-tag mr-2\"></i>Podcast</li>
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-clock mr-2\"></i>55 mins.</li>
\t\t\t\t\t<li class=\"tag__item play red\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"fas fa-play mr-2\"></i>Play Episode</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</article>
\t\t<article class=\"postcard dark green\">
\t\t\t<a class=\"postcard__img_link\" href=\"#\">
\t\t\t\t<img class=\"postcard__img\" src=\"https://picsum.photos/500/501\" alt=\"Image Title\" />
\t\t\t</a>
\t\t\t<div class=\"postcard__text\">
\t\t\t\t<h1 class=\"postcard__title green\"><a href=\"#\">Podcast Title</a></h1>
\t\t\t\t<div class=\"postcard__subtitle small\">
\t\t\t\t\t<time datetime=\"2020-05-25 12:00:00\">
\t\t\t\t\t\t<i class=\"fas fa-calendar-alt mr-2\"></i>Mon, May 25th 2020
\t\t\t\t\t</time>
\t\t\t\t</div>
\t\t\t\t<div class=\"postcard__bar\"></div>
\t\t\t\t<div class=\"postcard__preview-txt\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
\t\t\t\t<ul class=\"postcard__tagbox\">
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-tag mr-2\"></i>Podcast</li>
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-clock mr-2\"></i>55 mins.</li>
\t\t\t\t\t<li class=\"tag__item play green\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"fas fa-play mr-2\"></i>Play Episode</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</article>
\t\t<article class=\"postcard dark yellow\">
\t\t\t<a class=\"postcard__img_link\" href=\"#\">
\t\t\t\t<img class=\"postcard__img\" src=\"https://picsum.photos/501/501\" alt=\"Image Title\" />
\t\t\t</a>
\t\t\t<div class=\"postcard__text\">
\t\t\t\t<h1 class=\"postcard__title yellow\"><a href=\"#\">Podcast Title</a></h1>
\t\t\t\t<div class=\"postcard__subtitle small\">
\t\t\t\t\t<time datetime=\"2020-05-25 12:00:00\">
\t\t\t\t\t\t<i class=\"fas fa-calendar-alt mr-2\"></i>Mon, May 25th 2020
\t\t\t\t\t</time>
\t\t\t\t</div>
\t\t\t\t<div class=\"postcard__bar\"></div>
\t\t\t\t<div class=\"postcard__preview-txt\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, fugiat asperiores inventore beatae accusamus odit minima enim, commodi quia, doloribus eius! Ducimus nemo accusantium maiores velit corrupti tempora reiciendis molestiae repellat vero. Eveniet ipsam adipisci illo iusto quibusdam, sunt neque nulla unde ipsum dolores nobis enim quidem excepturi, illum quos!</div>
\t\t\t\t<ul class=\"postcard__tagbox\">
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-tag mr-2\"></i>Podcast</li>
\t\t\t\t\t<li class=\"tag__item\"><i class=\"fas fa-clock mr-2\"></i>55 mins.</li>
\t\t\t\t\t<li class=\"tag__item play yellow\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"fas fa-play mr-2\"></i>Play Episode</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</article>
\t</div>
</section>



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


<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src=\"vendor/jquery/jquery.min.js\"></script>
<script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script>

<script src=\"assets/js/isotope.min.js\"></script>
<script src=\"assets/js/owl-carousel.js\"></script>

<script src=\"assets/js/tabs.js\"></script>
<script src=\"assets/js/popup.js\"></script>
<script src=\"assets/js/custom.js\"></script>
<script src=\"js/jquery-3.3.1.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/jquery.magnific-popup.min.js\"></script>
    <script src=\"js/mixitup.min.js\"></script>
    <script src=\"js/masonry.pkgd.min.js\"></script>
    <script src=\"js/jquery.slicknav.js\"></script>
    <script src=\"js/owl.carousel.min.js\"></script>
    <script src=\"js/main.js\"></script>

</body>
</html>", "base.html.twig", "C:\\Users\\nour2\\Documents\\GitHub\\ArtounsiSymfony\\templates\\base.html.twig");
    }
}
