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

/* produits/show.html.twig */
class __TwigTemplate_5c5ec6dc672d122550de96e52d10097c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/show.html.twig"));

        // line 1
        echo "<html lang=\"en\"><head>

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <title>Liberty Template - NFT Item Detail Page</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "


  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id=\"js-preloader\" class=\"js-preloader loaded\">
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
    <header class=\"header-area header-sticky background-header\">
      <div class=\"container\">
          <div class=\"row\">
              <div class=\"col-12\">
                  <nav class=\"main-nav\">
                     
                      <!-- ***** Menu Start ***** -->
                      <ul class=\"nav\">
                        <li><a href=\"index.html\">Home</a></li>
                        <li><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                        <li><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_show", ["idpanier" => "1"]);
        echo "\">Panier</a></li>
                        <li><a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_Dashboard_index");
        echo "\">Dashboard</a></li>
                        <li><a href=\"create.html\" class=\"active\">Create Yours</a></li>
                      </ul>   
                      <a class=\"menu-trigger\">
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->
  
    <div class=\"page-heading normal-space\">
      <div class=\"container\">
        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 77));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 78
            echo "        <div class=\"alert alert-warning\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
      ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 82
            echo "        <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
        <div class=\"row\">
          <div class=\"col-lg-12\">
         
            <h2>Vue des détails sur un produit</h2>
          
          </div>
        </div>
      </div>
    </div>
  
    <div class=\"item-details-page\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <div class=\"section-heading\">
              <div class=\"line-dec\"></div>
              <h2>Le Produit <em>En Détails</em> Ici.</h2>
            </div>
          </div>
          <div class=\"col-lg-7\">
            <div class=\"left-image\">
              <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 106, $this->source); })()), "image", [], "any", false, false, false, 106))), "html", null, true);
        echo "\" alt=\"\" style=\"border-radius: 20px;\">
            </div>
          </div>
          <div class=\"col-lg-5 align-self-center\">
            <h4>";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 110, $this->source); })()), "nom", [], "any", false, false, false, 110), "html", null, true);
        echo "</h4>
            <span class=\"author\">
              <img src=\"assets/images/author-02.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
              <h6>Nom user<br><a href=\"#\">@libertyart</a></h6>
            </span>
            <p>";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 115, $this->source); })()), "description", [], "any", false, false, false, 115), "html", null, true);
        echo "</p>
            <div class=\"row\">
              <div class=\"col-3\">
                <span class=\"bid\">
                  Prix<br><strong>";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 119, $this->source); })()), "prix", [], "any", false, false, false, 119), "html", null, true);
        echo "</strong><br><em>(DT)</em>
                </span>
              </div>
              <div class=\"col-4\">
                <span class=\"owner\">
                  Catégorie<br><strong>";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 124, $this->source); })()), "idcategorie", [], "any", false, false, false, 124), "html", null, true);
        echo "</strong><br>
                </span>
              </div>
              <div class=\"col-5\">
                <span class=\"ends\">
                  Date d'ajout<br><strong>";
        // line 129
        ((twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 129, $this->source); })()), "dateajout", [], "any", false, false, false, 129)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 129, $this->source); })()), "dateajout", [], "any", false, false, false, 129), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</strong><br>
                </span>
              </div>
            </div>
            <br></br>
            <div class=\"main-button\">
              
              <a href=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_product", ["idproduit" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 136, $this->source); })()), "idproduit", [], "any", false, false, false, 136)]), "html", null, true);
        echo "\" ><h6>Ajouter au panier</h6></a><br></br>
         
               ";
        // line 138
        echo twig_include($this->env, $context, "produits/_delete_form.html.twig");
        echo "
               <a href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_edit", ["idproduit" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 139, $this->source); })()), "idproduit", [], "any", false, false, false, 139)]), "html", null, true);
        echo "\"  class=\"main-button\"><i class=\"fas fa-pencil-alt\"></i></a>
            </div>
           
      
           
           
          </div>
          <div class=\"col-lg-12\">
            <div class=\"current-bid\">
              <div class=\"col-lg-6\">
                <div class=\"mini-heading\"><h4>Autres produits</h4></div>
              </div>
              <div class=\"row\">
                
              ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 153, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 154
            echo "                <div class=\"col-lg-4 col-md-6\">
                  <div class=\"item\">
                    <div class=\"left-img\">
                      <img src=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 157))), "html", null, true);
            echo "\" alt=\"\">
                    </div>
                    <div class=\"right-content\">
                      <h4>";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 160), "html", null, true);
            echo "</h4>
                      <span class=\"date\">";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "idcategorie", [], "any", false, false, false, 161), "html", null, true);
            echo "</span>
                      <div class=\"line-dec\"></div>
                      <h6>Prix <em>";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 163), "html", null, true);
            echo "</em></h6>
                      <span class=\"date\">";
            // line 164
            ((twig_get_attribute($this->env, $this->source, $context["produit"], "dateajout", [], "any", false, false, false, 164)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "dateajout", [], "any", false, false, false, 164), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</span>
                   
                        <div class=\"main-button\"><a href=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_show", ["idproduit" => twig_get_attribute($this->env, $this->source, $context["produit"], "idproduit", [], "any", false, false, false, 166)]), "html", null, true);
            echo "\"   classe=\"active\" ><h6>View Item Details</h6></a></div>
                    
                    </div>
                  </div>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                
            
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
              <h2>Create Your NFT &amp; Put It On The Market.</h2>
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
              <p>There are 5 different HTML pages included in this NFT <a href=\"https://templatemo.com/page/1\" target=\"_blank\" rel=\"nofollow\">website template</a>. You can edit or modify any section on any page as you required.</p>
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
              <p>If you would like to support our TemplateMo website, please visit <a rel=\"nofollow\" href=\"https://templatemo.com/contact\" target=\"_parent\">our contact page</a> to make a PayPal contribution. Thank you.</p>
            </div>
          </div>
          <div class=\"col-lg-4\">
            <div class=\"item\">
              <div class=\"icon\">
                <img src=\"assets/images/icon-06.png\" alt=\"\">
              </div>
              <h4>Sell Your NFT &amp; Make Profit</h4>
              <p>NFT means Non-Fungible Token that are used in digital cryptocurrency markets. There are many different kinds of NFTs in the industry.</p>
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
    <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>
    
    
    <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"//code.jquery.com/jquery.js\"></script>
    <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>

<!-- Include Flashy default partial -->
";
        // line 266
        echo twig_include($this->env, $context, "@MercurySeriesFlashy/flashy.html.twig");
        echo "


  </body>






</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo " 
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
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/css/flashy.css"), "html", null, true);
        echo "\">
  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "produits/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 26,  472 => 24,  468 => 23,  464 => 22,  460 => 21,  456 => 20,  451 => 17,  441 => 16,  420 => 266,  414 => 263,  408 => 260,  404 => 259,  400 => 258,  394 => 255,  390 => 254,  385 => 252,  381 => 251,  300 => 172,  288 => 166,  283 => 164,  279 => 163,  274 => 161,  270 => 160,  264 => 157,  259 => 154,  255 => 153,  238 => 139,  234 => 138,  229 => 136,  219 => 129,  211 => 124,  203 => 119,  196 => 115,  188 => 110,  181 => 106,  157 => 84,  148 => 82,  144 => 81,  141 => 80,  132 => 78,  128 => 77,  109 => 61,  105 => 60,  101 => 59,  69 => 29,  67 => 16,  62 => 14,  54 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\"><head>

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"{{asset('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap')}}\" rel=\"stylesheet\">

    <title>Liberty Template - NFT Item Detail Page</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\">

{% block stylesheets %}
 
    <!-- Additional CSS Files -->
  
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-liberty-market.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('https://unpkg.com/swiper@7/swiper-bundle.min.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/mercuryseriesflashy/css/flashy.css') }}\">
  
{% endblock %}



  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id=\"js-preloader\" class=\"js-preloader loaded\">
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
    <header class=\"header-area header-sticky background-header\">
      <div class=\"container\">
          <div class=\"row\">
              <div class=\"col-12\">
                  <nav class=\"main-nav\">
                     
                      <!-- ***** Menu Start ***** -->
                      <ul class=\"nav\">
                        <li><a href=\"index.html\">Home</a></li>
                        <li><a href=\"{{ path('app_produits_index')}}\">Shop</a></li>
                        <li><a href=\"{{ path('app_panier_show' , {'idpanier': '1'}) }}\">Panier</a></li>
                        <li><a href=\"{{ path('app_Dashboard_index') }}\">Dashboard</a></li>
                        <li><a href=\"create.html\" class=\"active\">Create Yours</a></li>
                      </ul>   
                      <a class=\"menu-trigger\">
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->
  
    <div class=\"page-heading normal-space\">
      <div class=\"container\">
        {% for message in app.flashes('warning') %}
        <div class=\"alert alert-warning\">{{ message }}</div>
      {% endfor %}

      {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">{{ message }}</div>
      {% endfor %}

        <div class=\"row\">
          <div class=\"col-lg-12\">
         
            <h2>Vue des détails sur un produit</h2>
          
          </div>
        </div>
      </div>
    </div>
  
    <div class=\"item-details-page\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <div class=\"section-heading\">
              <div class=\"line-dec\"></div>
              <h2>Le Produit <em>En Détails</em> Ici.</h2>
            </div>
          </div>
          <div class=\"col-lg-7\">
            <div class=\"left-image\">
              <img src=\"{{ asset('uploads/images/' ~ produit.image) }}\" alt=\"\" style=\"border-radius: 20px;\">
            </div>
          </div>
          <div class=\"col-lg-5 align-self-center\">
            <h4>{{ produit.nom}}</h4>
            <span class=\"author\">
              <img src=\"assets/images/author-02.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
              <h6>Nom user<br><a href=\"#\">@libertyart</a></h6>
            </span>
            <p>{{ produit.description }}</p>
            <div class=\"row\">
              <div class=\"col-3\">
                <span class=\"bid\">
                  Prix<br><strong>{{ produit.prix}}</strong><br><em>(DT)</em>
                </span>
              </div>
              <div class=\"col-4\">
                <span class=\"owner\">
                  Catégorie<br><strong>{{ produit.idcategorie }}</strong><br>
                </span>
              </div>
              <div class=\"col-5\">
                <span class=\"ends\">
                  Date d'ajout<br><strong>{{ produit.dateajout ? produit.dateajout|date('Y-m-d H:i:s') : '' }}</strong><br>
                </span>
              </div>
            </div>
            <br></br>
            <div class=\"main-button\">
              
              <a href=\"{{ path('add_product', {'idproduit': produit.idproduit}) }}\" ><h6>Ajouter au panier</h6></a><br></br>
         
               {{ include('produits/_delete_form.html.twig') }}
               <a href=\"{{ path('app_produits_edit', {'idproduit': produit.idproduit}) }}\"  class=\"main-button\"><i class=\"fas fa-pencil-alt\"></i></a>
            </div>
           
      
           
           
          </div>
          <div class=\"col-lg-12\">
            <div class=\"current-bid\">
              <div class=\"col-lg-6\">
                <div class=\"mini-heading\"><h4>Autres produits</h4></div>
              </div>
              <div class=\"row\">
                
              {% for produit in produits %}
                <div class=\"col-lg-4 col-md-6\">
                  <div class=\"item\">
                    <div class=\"left-img\">
                      <img src=\"{{ asset('uploads/images/' ~ produit.image) }}\" alt=\"\">
                    </div>
                    <div class=\"right-content\">
                      <h4>{{ produit.nom }}</h4>
                      <span class=\"date\">{{ produit.idcategorie }}</span>
                      <div class=\"line-dec\"></div>
                      <h6>Prix <em>{{ produit.prix }}</em></h6>
                      <span class=\"date\">{{ produit.dateajout ? produit.dateajout|date('Y-m-d H:i:s') : '' }}</span>
                   
                        <div class=\"main-button\"><a href=\"{{ path('app_produits_show', {'idproduit': produit.idproduit}) }}\"   classe=\"active\" ><h6>View Item Details</h6></a></div>
                    
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
  
    <div class=\"create-nft\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8\">
            <div class=\"section-heading\">
              <div class=\"line-dec\"></div>
              <h2>Create Your NFT &amp; Put It On The Market.</h2>
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
              <p>There are 5 different HTML pages included in this NFT <a href=\"https://templatemo.com/page/1\" target=\"_blank\" rel=\"nofollow\">website template</a>. You can edit or modify any section on any page as you required.</p>
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
              <p>If you would like to support our TemplateMo website, please visit <a rel=\"nofollow\" href=\"https://templatemo.com/contact\" target=\"_parent\">our contact page</a> to make a PayPal contribution. Thank you.</p>
            </div>
          </div>
          <div class=\"col-lg-4\">
            <div class=\"item\">
              <div class=\"icon\">
                <img src=\"assets/images/icon-06.png\" alt=\"\">
              </div>
              <h4>Sell Your NFT &amp; Make Profit</h4>
              <p>NFT means Non-Fungible Token that are used in digital cryptocurrency markets. There are many different kinds of NFTs in the industry.</p>
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
    <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
    
    <script src=\"{{ asset('assets/js/isotope.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/owl-carousel.js') }}\"></script>
    
    
    <script src=\"{{ asset('assets/js/tabs.js') }}\"></script>
    <script src=\"{{ asset('assets/js/popup.js') }}\"></script>
    <script src=\"{{ asset('assets/js/custom.js') }}\"></script>
    
    <script src=\"//code.jquery.com/jquery.js\"></script>
    <script src=\"{{ asset('bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>

<!-- Include Flashy default partial -->
{{ include('@MercurySeriesFlashy/flashy.html.twig') }}


  </body>






</html>", "produits/show.html.twig", "C:\\Users\\aouad\\Desktop\\Pidev web\\ArtounsiSymfony-master\\templates\\produits\\show.html.twig");
    }
}
