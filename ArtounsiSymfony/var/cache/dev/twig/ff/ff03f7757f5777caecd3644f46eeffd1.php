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

/* offretravail/test.html.twig */
class __TwigTemplate_34840b0254a1f476e9c5906fc8ff4e5b extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offretravail/test.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offretravail/test.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

 ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 29
        echo "<body>

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

  <!-- ***** Header Area End ***** -->

  <div class=\"page-heading\">
  
    <div class=\"featured-explore\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <div class=\"owl-features owl-carousel\">
             
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
                    <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/discover-01.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"border-radius: 20px;\">
                  <div class=\"hover-effect\">
                    <div class=\"content\">
                      <h4>Genesis Club by KMT</h4>
                      <span class=\"author\">
                         <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/discover-01.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"border-radius: 20px;\">
                        <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"item\">
                <div class=\"thumb\">
                     <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/discover-01.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"border-radius: 20px;\">
                  <div class=\"hover-effect\">
                    <div class=\"content\">
                      <h4>Crypto Aurora Guy</h4>
                      <span class=\"author\">
                           <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/discover-01.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"border-radius: 20px;\">
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
                  <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/author.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>
                <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/discover-01.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"border-radius: 20px;\">
                <h4>Mutant Ape Bored</h4>
              </div>
              <div class=\"col-lg-6 col-sm-6\">
                <span class=\"author\">
                  <img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/author.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>
                <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/discover-02.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"border-radius: 20px;\">
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
";
        // line 390
        $this->displayBlock('javascripts', $context, $blocks);
        // line 412
        echo "
  </body>
</html>";
        
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

    <title>Detail Page</title>

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

    // line 390
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 392
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
 
";
        // line 395
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

";
        // line 398
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>

";
        // line 401
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>

";
        // line 404
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>

";
        // line 407
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>

";
        // line 410
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "offretravail/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  585 => 410,  579 => 407,  573 => 404,  567 => 401,  561 => 398,  555 => 395,  549 => 392,  539 => 390,  527 => 22,  523 => 21,  519 => 20,  515 => 19,  510 => 18,  500 => 17,  486 => 24,  484 => 17,  478 => 14,  470 => 9,  464 => 5,  454 => 4,  442 => 412,  440 => 390,  215 => 168,  210 => 166,  202 => 161,  197 => 159,  126 => 91,  118 => 86,  106 => 77,  98 => 72,  53 => 29,  51 => 4,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

 {% block head %}
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"{{ asset('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap') }}\" rel=\"stylesheet\">

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

  <!-- ***** Header Area End ***** -->

  <div class=\"page-heading\">
  
    <div class=\"featured-explore\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <div class=\"owl-features owl-carousel\">
             
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
                    <img src=\"{{ asset('assets/images/discover-01.jpg') }}\" alt=\"\" style=\"border-radius: 20px;\">
                  <div class=\"hover-effect\">
                    <div class=\"content\">
                      <h4>Genesis Club by KMT</h4>
                      <span class=\"author\">
                         <img src=\"{{ asset('assets/images/discover-01.jpg') }}\" alt=\"\" style=\"border-radius: 20px;\">
                        <h6>Liberty Artist<br><a href=\"#\">@libertyart</a></h6>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"item\">
                <div class=\"thumb\">
                     <img src=\"{{ asset('assets/images/discover-01.jpg') }}\" alt=\"\" style=\"border-radius: 20px;\">
                  <div class=\"hover-effect\">
                    <div class=\"content\">
                      <h4>Crypto Aurora Guy</h4>
                      <span class=\"author\">
                           <img src=\"{{ asset('assets/images/discover-01.jpg') }}\" alt=\"\" style=\"border-radius: 20px;\">
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
                  <img src=\"{{ asset('assets/images/author.jpg') }}\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>
                <img src=\"{{ asset('assets/images/discover-01.jpg') }}\" alt=\"\" style=\"border-radius: 20px;\">
                <h4>Mutant Ape Bored</h4>
              </div>
              <div class=\"col-lg-6 col-sm-6\">
                <span class=\"author\">
                  <img src=\"{{ asset('assets/images/author.jpg') }}\" alt=\"\" style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                </span>
                <img src=\"{{ asset('assets/images/discover-02.jpg') }}\" alt=\"\" style=\"border-radius: 20px;\">
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
</html>", "offretravail/test.html.twig", "C:\\Users\\nour2\\Documents\\GitHub\\ArtounsiSymfony\\templates\\offretravail\\test.html.twig");
    }
}
