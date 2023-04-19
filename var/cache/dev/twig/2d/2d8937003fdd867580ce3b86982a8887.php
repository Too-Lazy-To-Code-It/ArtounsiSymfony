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
class __TwigTemplate_937ae17118193e7165942e38d50b6bfe extends Template
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

    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\" rel=\"stylesheet\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 14
        $this->displayBlock('css', $context, $blocks);
        // line 28
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
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/icon.png"), "html", null, true);
        echo "\" width=\"40\" height=\"60\" alt=\"\">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                        <li><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\" >Challenges</a></li>
                    </ul>   
                    <ul class=\"nav\">
                        <li><a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\" >Tutoriels</a></li>
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
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 536
        echo "
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
        // line 549
        $this->displayBlock('js', $context, $blocks);
        // line 562
        echo "
  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
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

    // line 14
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 15
        echo "    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css\">
    

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 75
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 76
        echo "  <div class=\"page-heading\">
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
                        <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                        <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                        <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                        <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                    <input type=\"text\" name=\"keyword\" class=\"searchText\" placeholder=\"Type Something...\" autocomplete=\"on\" required>
                </fieldset>
              </div>
              <div class=\"col-lg-3\">
                <fieldset>
                    <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\" id=\"chooseCategory\" onchange=\"this.form.click()\">
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
                    <select name=\"Price\" class=\"form-select\" aria-label=\"Default select example\" id=\"chooseCategory\" onchange=\"this.form.click()\">
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
                  <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>
                <img src=\"assets/images/discover-01.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                <h4>Mutant Ape Bored</h4>
              </div>
              <div class=\"col-lg-6 col-sm-6\">
                <span class=\"author\">
                  <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                  <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                  <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                  <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                  <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                  <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                  <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 549
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 550
        echo "  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src=\"";
        // line 552
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 553
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 555
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 558
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 559
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 560
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
        return array (  744 => 560,  740 => 559,  736 => 558,  731 => 556,  727 => 555,  722 => 553,  718 => 552,  714 => 550,  704 => 549,  235 => 76,  225 => 75,  210 => 23,  206 => 22,  202 => 21,  198 => 20,  194 => 19,  188 => 16,  185 => 15,  175 => 14,  156 => 12,  144 => 562,  142 => 549,  127 => 536,  125 => 75,  109 => 62,  103 => 59,  95 => 54,  67 => 28,  65 => 14,  60 => 12,  47 => 1,);
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

    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\" rel=\"stylesheet\">

    <title>{% block title %}Liberty NFT Marketplace - Explore Listing Page {% endblock %}</title>

    {% block css %}
    <!-- Bootstrap core CSS -->
    <link href=\"{{asset('vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">

    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/fontawesome.css') }}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/templatemo-liberty-market.css') }}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/owl.css') }}\">
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{asset('https://unpkg.com/swiper@7/swiper-bundle.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css\">
    

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
                        <img src=\"{{asset('/assets/icon.png')}}\" width=\"40\" height=\"60\" alt=\"\">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                        <li><a href=\"{{ path('app_challenge_index') }}\" >Challenges</a></li>
                    </ul>   
                    <ul class=\"nav\">
                        <li><a href=\"{{ path('app_tutoriel_index') }}\" >Tutoriels</a></li>
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
                        <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                        <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                        <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                        <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                    <input type=\"text\" name=\"keyword\" class=\"searchText\" placeholder=\"Type Something...\" autocomplete=\"on\" required>
                </fieldset>
              </div>
              <div class=\"col-lg-3\">
                <fieldset>
                    <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\" id=\"chooseCategory\" onchange=\"this.form.click()\">
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
                    <select name=\"Price\" class=\"form-select\" aria-label=\"Default select example\" id=\"chooseCategory\" onchange=\"this.form.click()\">
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
                  <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>
                <img src=\"assets/images/discover-01.jpg\" alt=\"\" style=\"border-radius: 20px;\">
                <h4>Mutant Ape Bored</h4>
              </div>
              <div class=\"col-lg-6 col-sm-6\">
                <span class=\"author\">
                  <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                  <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                  <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                  <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                  <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                  <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
                  <img src=\"assets/images/author.jpg\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
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
  {% endblock %}

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

{% block js %}
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src=\"{{asset('vendor/jquery/jquery.min.js')}}\"></script>
  <script src=\"{{asset('vendor/bootstrap/js/bootstrap.min.js')}}\"></script>

  <script src=\"{{asset('assets/js/isotope.min.js')}}\"></script>
  <script src=\"{{asset('assets/js/owl-carousel.js')}}\"></script>

  <script src=\"{{asset('assets/js/tabs.js')}}\"></script>
  <script src=\"{{asset('assets/js/popup.js')}}\"></script>
  <script src=\"{{asset('assets/js/custom.js')}}\"></script>
{% endblock %}

  </body>
</html>", "base.html.twig", "C:\\Users\\achref\\Documents\\ArtounsiSymfony-Achref\\templates\\base.html.twig");
    }
}
