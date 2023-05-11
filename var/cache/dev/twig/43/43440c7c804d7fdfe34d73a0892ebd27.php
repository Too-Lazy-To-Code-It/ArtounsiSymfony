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

/* panier/show.html.twig */
class __TwigTemplate_15d40b6f1842ca8a7cf202f55e34bf51 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/show.html.twig"));

        // line 1
        echo "<head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"), "html", null, true);
        echo "\"
          rel=\"stylesheet\">

    <title>Liberty Template - Create NFT Page</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "    <!--


TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->


</head>
<style>
    .line-dec {
        border: 1px solid #7453fc;
        border-collapse: collapse;
    }

    .line-dec th, .line-dec td {
        padding: 10px;
        text-align: center;
    }

    .carte-table td {
        padding: 50px;
        border: 0px solid #ccc;
    }

    .cart-table {
        border-collapse: collapse;
        border: 1px solid #d1d1d1;
        font-size: 1.2rem;
        margin-bottom: 30px;
        width: 100%;
    }

    .cart-table th,
    .cart-table td {
        border: 1px solid #d1d1d1;
        padding: 10px;
        text-align: center;
    }

    .cart-table th {
        background-color: #f2f2f2;
    }

    .cart-table tfoot td {
        font-weight: bold;
    }


    .cart-table tr:first-child th {
        background-color: #282b2f;
        border: 1px solid #404245;
        color: #fff;
        border-radius: 20px;
        padding: 10px;
    }

    .cart-table tbody tr:last-child td,
    .cart-table tfoot td {
        border-top: 2px solid #d1d1d1;
        font-size: 1.3rem;
    }


</style>

<body>


<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->

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
                        <div class=\"dropdown\">
                            <li><a>Art</a></li>
                            <div class=\"dropdown-content\">
                                <li><a href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_explore");
        echo "\">Explore</a></li>
                                <li><a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\">Blog</a></li>
                                <li><a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        echo "\">Studios</a></li>
                                <li><a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\">Create Yours</a></li>

                            </div>
                        </div>
                        <li><a href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">Offres</a></li>
                        <li><a href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
        echo "\">Demandes</a></li>
                        <li><a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                        <li><a href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_show", ["idpanier" => "1"]);
        echo "\">Panier</a></li>
                        <li><a href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\">Challenges</a></li>
                        <li><a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\">Tutoriels</a></li>
                        ";
        // line 138
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 138, $this->source); })()), "type", [], "any", false, false, false, 138) == "Admin")) {
            // line 139
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_studiodashboard");
            echo "\">dashboard </a></li>
                        ";
        }
        // line 141
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 141, $this->source); })()), "idUser", [], "any", false, false, false, 141) == null)) {
            // line 142
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_login");
            echo "\">Log In</a></li>
                        ";
        } else {
            // line 144
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_logout");
            echo "\">Logout</a></li>
                        ";
        }
        // line 146
        echo "                    </ul>
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

<!-- ***** Main Banner Area Start ***** -->
<!-- ***** Main Banner Area Start ***** -->
<div class=\"page-heading normal-space\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">

                <h2>Votre Panier</h2>


            </div>
        </div>
    </div>
</div>

</div>
<!-- ***** Main Banner Area End ***** -->


<div class=\"currently-market\">
    <div class=\"container\">
        <div class=\"row\">


            <div class=\"col-lg-12\">
                <div class=\"row grid\">
                    <div>

                        <div>
                            <div class=\"line-dec\"></div>
                            ";
        // line 243
        if ( !twig_test_empty((isset($context["lignesPanier"]) || array_key_exists("lignesPanier", $context) ? $context["lignesPanier"] : (function () { throw new RuntimeError('Variable "lignesPanier" does not exist.', 243, $this->source); })()))) {
            // line 244
            echo "                                <table class=\"carte-table\" border=\"0,5\" class=\"currently-market\" class=\"item\">
                                    <thead class=\"carte-table\">
                                    <tr>
                                        <th class=\"text-center\"><h6>Photo</h6></th>
                                        <th class=\"text-center\"><h6>Nom de la photo</h6></th>
                                        <th class=\"text-center\"><h6>Prix hors TVA</h6></th>
                                        <th class=\"text-center\"><h6>Taux TVA (%)</h6></th>

                                        <th class=\"text-center\"><h6>Date d'ajout</h6></th>
                                        <th class=\"text-center\"><h6>Action</h6></th>
                                    </tr>
                                    </thead>

                                    <tbody class=\"carte-table\">
                                    ";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lignesPanier"]) || array_key_exists("lignesPanier", $context) ? $context["lignesPanier"] : (function () { throw new RuntimeError('Variable "lignesPanier" does not exist.', 258, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
                // line 259
                echo "                                        <tr>
                                            <td>
                                                <div class=\"left-image\">
                                                    <img src=\"";
                // line 262
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("C:
mpphtdocsimg" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "idproduit", [], "any", false, false, false, 262), "image", [], "any", false, false, false, 262))), "html", null, true);
                echo "\"
                                                         alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                                                </div>
                                            </td>

                                            <td>
                                                <div class=\"right-content\">
                                                    <h6>";
                // line 269
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "idproduit", [], "any", false, false, false, 269), "nom", [], "any", false, false, false, 269), "html", null, true);
                echo "</h6>
                                                </div>
                                            </td>

                                            <td>
                                    <span class=\"bid\">
                                      <h6><strong> ";
                // line 275
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "idproduit", [], "any", false, false, false, 275), "prix", [], "any", false, false, false, 275), "html", null, true);
                echo "</strong></h6>
                                    </span>
                                            </td>


                                            <td>
                                                <div class=\"right-content\">
                                                    <h6>";
                // line 282
                echo twig_escape_filter($this->env, (isset($context["tauxTVA"]) || array_key_exists("tauxTVA", $context) ? $context["tauxTVA"] : (function () { throw new RuntimeError('Variable "tauxTVA" does not exist.', 282, $this->source); })()), "html", null, true);
                echo "</h6>
                                                </div>
                                            </td>


                                            <td>
                                                <h6>";
                // line 288
                ((twig_get_attribute($this->env, $this->source, $context["ligne"], "dateajout", [], "any", false, false, false, 288)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "dateajout", [], "any", false, false, false, 288), "F jS, Y H:i"), "html", null, true))) : (print ("")));
                echo "</h6>
                                            </td>
                                            ";
                // line 290
                if (( !twig_test_empty((isset($context["lignesPanier"]) || array_key_exists("lignesPanier", $context) ? $context["lignesPanier"] : (function () { throw new RuntimeError('Variable "lignesPanier" does not exist.', 290, $this->source); })())) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["ligne"], "idlignepanier", [], "any", false, false, false, 290)))) {
                    // line 291
                    echo "                                                <td>
                                                    <div class=\"main-button delete-product-button\"
                                                         data-idlignepanier=\"";
                    // line 293
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "idlignepanier", [], "any", false, false, false, 293), "html", null, true);
                    echo "\">
                                                        <a href=\"";
                    // line 294
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lignepanier_delete_with_ajax", ["idlignepanier" => twig_get_attribute($this->env, $this->source, $context["ligne"], "idlignepanier", [], "any", false, false, false, 294)]), "html", null, true);
                    echo "\"><i
                                                                    class=\"fas fa-trash-alt\"></i></a>
                                                    </div>
                                                </td>
                                            ";
                }
                // line 299
                echo "

                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 303
            echo "                                    </tbody>
                                </table>
                            ";
        } else {
            // line 306
            echo "                                <div class=\"section-heading\">

                                    <h2 class=\"text-center\"> Votre panier est <em>vide</em></h2>
                                </div>
                            ";
        }
        // line 311
        echo "
                            <div class=\"line-dec\"></div>
                        </div>
                    </div>
                </div>
            </div>


            <table class=\"carte-table\">
                <thead>
                <tr>
                    <th class=\"count\"><h5>Nombre de produits: ";
        // line 322
        echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 322, $this->source); })()), "html", null, true);
        echo "</h5></th>
                    <th class=\"count\"><h5>Montant total: ";
        // line 323
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 323, $this->source); })()), "html", null, true);
        echo "</h5></th>
                    <th>
                        <div class=\"main-button\">
                            <a href=\"";
        // line 326
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout", ["idpanier" => "idpanier"]);
        echo "\">Payer</a>
                        </div>
                    </th>
                    <th>
                        <div class=\"main-button\">
                            <a href=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viderpanier", ["idpanier" => (isset($context["idpanier"]) || array_key_exists("idpanier", $context) ? $context["idpanier"] : (function () { throw new RuntimeError('Variable "idpanier" does not exist.', 331, $this->source); })())]), "html", null, true);
        echo "\">Vider Panier</a>
                        </div>
                    </th>
                </tr>
                </thead>
            </table>


            <div class=\"line-dec\"></div>


        </div>


    </div>


</div>


<script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.jquery.com/jquery-3.6.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>

<script>


    \$(document).ready(function () {
        \$('.delete-product-button').click(function (e) {
            e.preventDefault();
            var idlignepanier = \$(this).data('idlignepanier');
            \$.ajax({
                method: 'POST',
                url: \"";
        // line 363
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lignepanier_delete_with_ajax", ["idlignepanier" => "__idlignepanier__"]);
        echo "\".replace('__idlignepanier__', idlignepanier),
                data: {'_token': '";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("deleteproduit"), "html", null, true);
        echo "'},
                success: function (response) {
                    if (response.success) {
                        \$('tr[data-idlignepanier=' + idlignepanier + ']').remove();

                        \$(this).remove();
                        var total = 0;
                        \$('.total').each(function () {
                            total += parseFloat(\$(this).text());
                        });
                        \$('#total').text(total.toFixed(2) + ' Tnd');
                        var count = \$('.count').length;
                        \$('#count').text(count);

                        alert('Le produit a été supprimé avec succès');
                        location.reload()
                    } else {
                        alert('Erreur lors de la suppression du produit');
                    }
                },
                error: function () {
                    alert('Erreur lors de la communication avec le serveur');
                }
            });
        });
    });


</script>


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


<!-- Scripts -->
<!-- Bootstrap core JavaScript -->

<script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("//code.jquery.com/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>


<!-- Include Flashy default partial -->


</body>




















";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "
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
        echo "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "panier/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  672 => 23,  668 => 22,  664 => 21,  660 => 20,  656 => 19,  651 => 16,  641 => 15,  603 => 422,  598 => 420,  593 => 418,  589 => 417,  585 => 416,  580 => 414,  576 => 413,  572 => 412,  521 => 364,  517 => 363,  503 => 352,  499 => 351,  476 => 331,  468 => 326,  462 => 323,  458 => 322,  445 => 311,  438 => 306,  433 => 303,  424 => 299,  416 => 294,  412 => 293,  408 => 291,  406 => 290,  401 => 288,  392 => 282,  382 => 275,  373 => 269,  362 => 262,  357 => 259,  353 => 258,  337 => 244,  335 => 243,  236 => 146,  230 => 144,  224 => 142,  221 => 141,  215 => 139,  213 => 138,  209 => 137,  205 => 136,  201 => 135,  197 => 134,  193 => 133,  189 => 132,  182 => 128,  178 => 127,  174 => 126,  170 => 125,  68 => 25,  66 => 15,  61 => 13,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"{{ asset('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap') }}\"
          rel=\"stylesheet\">

    <title>Liberty Template - Create NFT Page</title>

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
    <!--


TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->


</head>
<style>
    .line-dec {
        border: 1px solid #7453fc;
        border-collapse: collapse;
    }

    .line-dec th, .line-dec td {
        padding: 10px;
        text-align: center;
    }

    .carte-table td {
        padding: 50px;
        border: 0px solid #ccc;
    }

    .cart-table {
        border-collapse: collapse;
        border: 1px solid #d1d1d1;
        font-size: 1.2rem;
        margin-bottom: 30px;
        width: 100%;
    }

    .cart-table th,
    .cart-table td {
        border: 1px solid #d1d1d1;
        padding: 10px;
        text-align: center;
    }

    .cart-table th {
        background-color: #f2f2f2;
    }

    .cart-table tfoot td {
        font-weight: bold;
    }


    .cart-table tr:first-child th {
        background-color: #282b2f;
        border: 1px solid #404245;
        color: #fff;
        border-radius: 20px;
        padding: 10px;
    }

    .cart-table tbody tr:last-child td,
    .cart-table tfoot td {
        border-top: 2px solid #d1d1d1;
        font-size: 1.3rem;
    }


</style>

<body>


<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->

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

<!-- ***** Main Banner Area Start ***** -->
<!-- ***** Main Banner Area Start ***** -->
<div class=\"page-heading normal-space\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">

                <h2>Votre Panier</h2>


            </div>
        </div>
    </div>
</div>

</div>
<!-- ***** Main Banner Area End ***** -->


<div class=\"currently-market\">
    <div class=\"container\">
        <div class=\"row\">


            <div class=\"col-lg-12\">
                <div class=\"row grid\">
                    <div>

                        <div>
                            <div class=\"line-dec\"></div>
                            {% if lignesPanier is not empty %}
                                <table class=\"carte-table\" border=\"0,5\" class=\"currently-market\" class=\"item\">
                                    <thead class=\"carte-table\">
                                    <tr>
                                        <th class=\"text-center\"><h6>Photo</h6></th>
                                        <th class=\"text-center\"><h6>Nom de la photo</h6></th>
                                        <th class=\"text-center\"><h6>Prix hors TVA</h6></th>
                                        <th class=\"text-center\"><h6>Taux TVA (%)</h6></th>

                                        <th class=\"text-center\"><h6>Date d'ajout</h6></th>
                                        <th class=\"text-center\"><h6>Action</h6></th>
                                    </tr>
                                    </thead>

                                    <tbody class=\"carte-table\">
                                    {% for ligne in lignesPanier %}
                                        <tr>
                                            <td>
                                                <div class=\"left-image\">
                                                    <img src=\"{{ asset('C:\\xampp\\htdocs\\img' ~ ligne.idproduit.image) }}\"
                                                         alt=\"\" style=\"border-radius: 20px; min-width: 195px;\">
                                                </div>
                                            </td>

                                            <td>
                                                <div class=\"right-content\">
                                                    <h6>{{ ligne.idproduit.nom }}</h6>
                                                </div>
                                            </td>

                                            <td>
                                    <span class=\"bid\">
                                      <h6><strong> {{ ligne.idproduit.prix }}</strong></h6>
                                    </span>
                                            </td>


                                            <td>
                                                <div class=\"right-content\">
                                                    <h6>{{ tauxTVA }}</h6>
                                                </div>
                                            </td>


                                            <td>
                                                <h6>{{ ligne.dateajout ? ligne.dateajout|date('F jS, Y H:i') : '' }}</h6>
                                            </td>
                                            {% if lignesPanier is not empty and ligne.idlignepanier is not empty %}
                                                <td>
                                                    <div class=\"main-button delete-product-button\"
                                                         data-idlignepanier=\"{{ ligne.idlignepanier }}\">
                                                        <a href=\"{{ path('app_lignepanier_delete_with_ajax', {'idlignepanier': ligne.idlignepanier}) }}\"><i
                                                                    class=\"fas fa-trash-alt\"></i></a>
                                                    </div>
                                                </td>
                                            {% endif %}


                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            {% else %}
                                <div class=\"section-heading\">

                                    <h2 class=\"text-center\"> Votre panier est <em>vide</em></h2>
                                </div>
                            {% endif %}

                            <div class=\"line-dec\"></div>
                        </div>
                    </div>
                </div>
            </div>


            <table class=\"carte-table\">
                <thead>
                <tr>
                    <th class=\"count\"><h5>Nombre de produits: {{ count }}</h5></th>
                    <th class=\"count\"><h5>Montant total: {{ total }}</h5></th>
                    <th>
                        <div class=\"main-button\">
                            <a href=\"{{ path('checkout',{'idpanier': 'idpanier'}) }}\">Payer</a>
                        </div>
                    </th>
                    <th>
                        <div class=\"main-button\">
                            <a href=\"{{ path('viderpanier',{'idpanier': idpanier}) }}\">Vider Panier</a>
                        </div>
                    </th>
                </tr>
                </thead>
            </table>


            <div class=\"line-dec\"></div>


        </div>


    </div>


</div>


<script src=\"{{ asset('https://code.jquery.com/jquery-3.6.0.min.js') }}\"></script>
<script src=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js') }}\"></script>

<script>


    \$(document).ready(function () {
        \$('.delete-product-button').click(function (e) {
            e.preventDefault();
            var idlignepanier = \$(this).data('idlignepanier');
            \$.ajax({
                method: 'POST',
                url: \"{{ path('app_lignepanier_delete_with_ajax', {'idlignepanier': '__idlignepanier__'}) }}\".replace('__idlignepanier__', idlignepanier),
                data: {'_token': '{{ csrf_token('deleteproduit') }}'},
                success: function (response) {
                    if (response.success) {
                        \$('tr[data-idlignepanier=' + idlignepanier + ']').remove();

                        \$(this).remove();
                        var total = 0;
                        \$('.total').each(function () {
                            total += parseFloat(\$(this).text());
                        });
                        \$('#total').text(total.toFixed(2) + ' Tnd');
                        var count = \$('.count').length;
                        \$('#count').text(count);

                        alert('Le produit a été supprimé avec succès');
                        location.reload()
                    } else {
                        alert('Erreur lors de la suppression du produit');
                    }
                },
                error: function () {
                    alert('Erreur lors de la communication avec le serveur');
                }
            });
        });
    });


</script>


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


<!-- Scripts -->
<!-- Bootstrap core JavaScript -->

<script src=\"{{ asset('//code.jquery.com/jquery.js') }}\"></script>
<script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
<script src=\"{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}\"></script>

<script src=\"{{ asset('assets/js/tabs.js') }}\"></script>
<script src=\"{{ asset('assets/js/popup.js') }}\"></script>
<script src=\"{{ asset('assets/js/custom.js') }}\"></script>

<script src=\"{{ asset('assets/js/isotope.min.js') }}\"></script>

<script src=\"{{ asset('assets/js/owl-carousel.js') }}\"></script>


<!-- Include Flashy default partial -->


</body>




















", "panier/show.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\panier\\show.html.twig");
    }
}
