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

    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap\" rel=\"stylesheet\">

    <title>Liberty Template - NFT Item Detail Page</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
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
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                        <li><a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_show", ["idpanier" => "1"]);
        echo "\">Panier</a></li>
                        <li><a href=\"";
        // line 59
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
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <h6>Liberty NFT Market</h6>
            <h2>View Item Details</h2>
            <span>Home &gt; <a href=\"#\">Item Details</a></span>
            <div class=\"buttons\">
              <div class=\"main-button\">
                <a href=\"explore.html\">Explore Our Items</a>
              </div>
              <div class=\"border-button\">
                <a href=\"create.html\">Create Your NFT</a>
              </div>
            </div>
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
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 104, $this->source); })()), "image", [], "any", false, false, false, 104))), "html", null, true);
        echo "\" alt=\"\" style=\"border-radius: 20px;\">
            </div>
          </div>
          <div class=\"col-lg-5 align-self-center\">
            <h4>";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 108, $this->source); })()), "nom", [], "any", false, false, false, 108), "html", null, true);
        echo "</h4>
            <span class=\"author\">
              <img src=\"assets/images/author-02.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
              <h6>Nom user<br><a href=\"#\">@libertyart</a></h6>
            </span>
            <p>";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 113, $this->source); })()), "description", [], "any", false, false, false, 113), "html", null, true);
        echo "</p>
            <div class=\"row\">
              <div class=\"col-3\">
                <span class=\"bid\">
                  Prix<br><strong>";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 117, $this->source); })()), "prix", [], "any", false, false, false, 117), "html", null, true);
        echo "</strong><br><em>(DT)</em>
                </span>
              </div>
              <div class=\"col-4\">
                <span class=\"owner\">
                  Catégorie<br><strong>";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 122, $this->source); })()), "idcategorie", [], "any", false, false, false, 122), "html", null, true);
        echo "</strong><br>
                </span>
              </div>
              <div class=\"col-5\">
                <span class=\"ends\">
                  Date d'ajout<br><strong>";
        // line 127
        ((twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 127, $this->source); })()), "dateajout", [], "any", false, false, false, 127)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 127, $this->source); })()), "dateajout", [], "any", false, false, false, 127), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</strong><br>
                </span>
              </div>
            </div>
            <br></br>
            <div class=\"main-button\">
              
              <a href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_product", ["idproduit" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 134, $this->source); })()), "idproduit", [], "any", false, false, false, 134)]), "html", null, true);
        echo "\" onclick=\"successAdd()\"><h6>Ajouter au panier</h6></a><br></br>

               ";
        // line 136
        echo twig_include($this->env, $context, "produits/_delete_form.html.twig");
        echo "
               <a href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_edit", ["idproduit" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 137, $this->source); })()), "idproduit", [], "any", false, false, false, 137)]), "html", null, true);
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
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 151, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 152
            echo "                <div class=\"col-lg-4 col-md-6\">
                  <div class=\"item\">
                    <div class=\"left-img\">
                      <img src=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 155))), "html", null, true);
            echo "\" alt=\"\">
                    </div>
                    <div class=\"right-content\">
                      <h4>";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 158), "html", null, true);
            echo "</h4>
                      <span class=\"date\">";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "idcategorie", [], "any", false, false, false, 159), "html", null, true);
            echo "</span>
                      <div class=\"line-dec\"></div>
                      <h6>Prix <em>";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 161), "html", null, true);
            echo "</em></h6>
                      <span class=\"date\">";
            // line 162
            ((twig_get_attribute($this->env, $this->source, $context["produit"], "dateajout", [], "any", false, false, false, 162)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "dateajout", [], "any", false, false, false, 162), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</span>
                    </div>
                  </div>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
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
  
    <script>\t\t\t\t\t\t\t\t\t
      function successAdd() {
     result = confirm(\"Voulez-vous vraiment ajouter ce produit ?\");
     if (result) {
        \$('#form').submit();
        alert(\"Le produit a été ajouté avec succès !\");
    }
   }
// Controle d'ajout d'un produit existant dans le panier 
\$.ajax({
    method: 'POST',
    url: \"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_product", ["idproduit" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 238, $this->source); })()), "idproduit", [], "any", false, false, false, 238)]), "html", null, true);
        echo "\",
    data: {'_token': '";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add_product"), "html", null, true);
        echo "'},
}).done(function(response) {
    if (response.error) {
        // Afficher un message d'erreur
        alert(response.error);
    } else {
        // Le produit a été ajouté avec succès, mettre à jour la page
        location.reload();
    }
}).fail(function(xhr, status, error) {
    // Afficher un message d'erreur
    var response = xhr.responseJSON;
    alert(response.error);
});



    </script>




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
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>
    
    
    <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
    
    
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
        return array (  462 => 24,  458 => 23,  454 => 22,  450 => 21,  446 => 20,  441 => 17,  431 => 16,  410 => 284,  406 => 283,  402 => 282,  396 => 279,  392 => 278,  387 => 276,  383 => 275,  344 => 239,  340 => 238,  267 => 167,  256 => 162,  252 => 161,  247 => 159,  243 => 158,  237 => 155,  232 => 152,  228 => 151,  211 => 137,  207 => 136,  202 => 134,  192 => 127,  184 => 122,  176 => 117,  169 => 113,  161 => 108,  154 => 104,  106 => 59,  102 => 58,  98 => 57,  66 => 27,  64 => 16,  59 => 14,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\"><head>

  <head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap\" rel=\"stylesheet\">

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
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <h6>Liberty NFT Market</h6>
            <h2>View Item Details</h2>
            <span>Home &gt; <a href=\"#\">Item Details</a></span>
            <div class=\"buttons\">
              <div class=\"main-button\">
                <a href=\"explore.html\">Explore Our Items</a>
              </div>
              <div class=\"border-button\">
                <a href=\"create.html\">Create Your NFT</a>
              </div>
            </div>
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
              <img src=\"{{ asset('http://localhost/img/' ~ produit.image) }}\" alt=\"\" style=\"border-radius: 20px;\">
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
              
              <a href=\"{{ path('add_product', {'idproduit': produit.idproduit}) }}\" onclick=\"successAdd()\"><h6>Ajouter au panier</h6></a><br></br>

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
                      <img src=\"{{ asset('http://localhost/img/' ~ produit.image) }}\" alt=\"\">
                    </div>
                    <div class=\"right-content\">
                      <h4>{{ produit.nom }}</h4>
                      <span class=\"date\">{{ produit.idcategorie }}</span>
                      <div class=\"line-dec\"></div>
                      <h6>Prix <em>{{ produit.prix }}</em></h6>
                      <span class=\"date\">{{ produit.dateajout ? produit.dateajout|date('Y-m-d H:i:s') : '' }}</span>
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
  
    <script>\t\t\t\t\t\t\t\t\t
      function successAdd() {
     result = confirm(\"Voulez-vous vraiment ajouter ce produit ?\");
     if (result) {
        \$('#form').submit();
        alert(\"Le produit a été ajouté avec succès !\");
    }
   }
// Controle d'ajout d'un produit existant dans le panier 
\$.ajax({
    method: 'POST',
    url: \"{{ path('add_product', {'idproduit': produit.idproduit}) }}\",
    data: {'_token': '{{ csrf_token('add_product') }}'},
}).done(function(response) {
    if (response.error) {
        // Afficher un message d'erreur
        alert(response.error);
    } else {
        // Le produit a été ajouté avec succès, mettre à jour la page
        location.reload();
    }
}).fail(function(xhr, status, error) {
    // Afficher un message d'erreur
    var response = xhr.responseJSON;
    alert(response.error);
});



    </script>




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
    
    
  </body>






</html>", "produits/show.html.twig", "C:\\Users\\aouad\\Desktop\\Pidev web\\ArtounsiSymfony-master\\templates\\produits\\show.html.twig");
    }
}
