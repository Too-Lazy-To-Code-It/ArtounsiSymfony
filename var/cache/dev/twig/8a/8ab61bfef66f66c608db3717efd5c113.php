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
class __TwigTemplate_5af1888a2bc19928a9c363324298429e extends Template
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
        echo "<html lang=\"en\">
<head>

    <head>

        <meta charset=\"utf-8\">
        <meta name=\"author\" content=\"templatemo\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"), "html", null, true);
        echo "\"
              rel=\"stylesheet\">

        <title>Liberty Template - NFT Item Detail Page</title>

        <!-- Bootstrap core CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

        ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
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
                        <div class=\"dropdown\">
                            <li><a>Art</a></li>
                            <div class=\"dropdown-content\">
                                <li><a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_explore");
        echo "\">Explore</a></li>
                                <li><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\">Blog</a></li>
                                <li><a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        echo "\">Studios</a></li>
                                <li><a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\">Create Yours</a></li>

                            </div>
                        </div>
                        <li><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">Offres</a></li>
                        <li><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
        echo "\">Demandes</a></li>
                        <li><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                        <li><a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_show", ["idpanier" => "1"]);
        echo "\">Panier</a></li>
                        <li><a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\">Challenges</a></li>
                        <li><a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\">Tutoriels</a></li>
                        ";
        // line 75
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 75, $this->source); })()), "type", [], "any", false, false, false, 75) == "Admin")) {
            // line 76
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_studiodashboard");
            echo "\">dashboard </a></li>
                        ";
        }
        // line 78
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 78, $this->source); })()), "idUser", [], "any", false, false, false, 78) == null)) {
            // line 79
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_login");
            echo "\">Log In</a></li>
                        ";
        } else {
            // line 81
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_logout");
            echo "\">Logout</a></li>
                        ";
        }
        // line 83
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

<div class=\"page-heading normal-space\">
    <div class=\"container\">
        ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 152, $this->source); })()), "flashes", [0 => "warning"], "method", false, false, false, 152));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 153
            echo "            <div class=\"alert alert-warning\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "
        ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 156));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 157
            echo "            <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
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
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("C:
mpphtdocsimg" . twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 181, $this->source); })()), "image", [], "any", false, false, false, 181))), "html", null, true);
        echo "\" alt=\"\" style=\"border-radius: 20px;\">
                </div>
            </div>
            <div class=\"col-lg-5 align-self-center\">
                <h4>";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 185, $this->source); })()), "nom", [], "any", false, false, false, 185), "html", null, true);
        echo "</h4>
                <span class=\"author\">
              <img src=\"assets/images/author-02.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
              <h6>";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 188, $this->source); })()), "name", [], "any", false, false, false, 188), "html", null, true);
        echo "<br><a>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 188, $this->source); })()), "nickname", [], "any", false, false, false, 188), "html", null, true);
        echo "</a></h6>
            </span>
                <p>";
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 190, $this->source); })()), "description", [], "any", false, false, false, 190), "html", null, true);
        echo "</p>
                <div class=\"row\">
                    <div class=\"col-3\">
                <span class=\"bid\">
                  Prix<br><strong>";
        // line 194
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 194, $this->source); })()), "prix", [], "any", false, false, false, 194), "html", null, true);
        echo "</strong><br><em>(DT)</em>
                </span>
                    </div>
                    <div class=\"col-4\">
                <span class=\"owner\">
                  Catégorie<br><strong>";
        // line 199
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 199, $this->source); })()), "idcategorie", [], "any", false, false, false, 199), "html", null, true);
        echo "</strong><br>
                </span>
                    </div>
                    <div class=\"col-5\">
                <span class=\"ends\">
                  Date d'ajout<br><strong>";
        // line 204
        ((twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 204, $this->source); })()), "dateajout", [], "any", false, false, false, 204)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 204, $this->source); })()), "dateajout", [], "any", false, false, false, 204), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</strong><br>
                </span>
                    </div>
                </div>
                <br></br>
                <div class=\"main-button\">
                    ";
        // line 210
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 210, $this->source); })()), "id_user", [], "any", false, false, false, 210) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 210, $this->source); })()), "getIdUser", [], "method", false, false, false, 210), "getIduser", [], "method", false, false, false, 210))) {
            // line 211
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_product", ["idproduit" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 211, $this->source); })()), "idproduit", [], "any", false, false, false, 211)]), "html", null, true);
            echo "\"><h6>Ajouter au panier</h6>
                        </a><br></br>
                    ";
        }
        // line 214
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 214, $this->source); })()), "id_user", [], "any", false, false, false, 214) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 214, $this->source); })()), "getIdUser", [], "method", false, false, false, 214), "getIduser", [], "method", false, false, false, 214))) {
            // line 215
            echo "                        ";
            echo twig_include($this->env, $context, "produits/_delete_form.html.twig");
            echo "

                        <a href=\"";
            // line 217
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_edit", ["idproduit" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 217, $this->source); })()), "idproduit", [], "any", false, false, false, 217)]), "html", null, true);
            echo "\" class=\"main-button\"><i
                                    class=\"fas fa-pencil-alt\"></i></a>
                    ";
        }
        // line 220
        echo "                </div>


            </div>
            <div class=\"col-lg-12\">
                <div class=\"current-bid\">
                    <div class=\"col-lg-6\">
                        <div class=\"mini-heading\"><h4>Autres produits</h4></div>
                    </div>
                    <div class=\"row\">

                        ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 231, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 232
            echo "                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"item\">
                                    <div class=\"left-img\">
                                        <img src=\"";
            // line 235
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("C:
mpphtdocsimg" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 235))), "html", null, true);
            echo "\" alt=\"\">
                                    </div>
                                    <div class=\"right-content\">
                                        <h4>";
            // line 238
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 238), "html", null, true);
            echo "</h4>
                                        <span class=\"date\">";
            // line 239
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "idcategorie", [], "any", false, false, false, 239), "html", null, true);
            echo "</span>
                                        <div class=\"line-dec\"></div>
                                        <h6>Prix <em>";
            // line 241
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 241), "html", null, true);
            echo "</em></h6>
                                        <span class=\"date\">";
            // line 242
            ((twig_get_attribute($this->env, $this->source, $context["produit"], "dateajout", [], "any", false, false, false, 242)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "dateajout", [], "any", false, false, false, 242), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</span>

                                        <div class=\"main-button\"><a
                                                    href=\"";
            // line 245
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_show", ["idproduit" => twig_get_attribute($this->env, $this->source, $context["produit"], "idproduit", [], "any", false, false, false, 245)]), "html", null, true);
            echo "\"
                                                    classe=\"active\"><h6>View Item Details</h6></a></div>

                                    </div>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
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
                    <p>There are 5 different HTML pages included in this NFT <a href=\"https://templatemo.com/page/1\"
                                                                                target=\"_blank\" rel=\"nofollow\">website
                            template</a>. You can edit or modify any section on any page as you required.</p>
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
                    <p>If you would like to support our TemplateMo website, please visit <a rel=\"nofollow\"
                                                                                            href=\"https://templatemo.com/contact\"
                                                                                            target=\"_parent\">our contact
                            page</a> to make a PayPal contribution. Thank you.</p>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"item\">
                    <div class=\"icon\">
                        <img src=\"assets/images/icon-06.png\" alt=\"\">
                    </div>
                    <h4>Sell Your NFT &amp; Make Profit</h4>
                    <p>NFT means Non-Fungible Token that are used in digital cryptocurrency markets. There are many
                        different kinds of NFTs in the industry.</p>
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
                    Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"https://templatemo.com\"
                                   target=\"_blank\">TemplateMo</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>


<script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>

<script src=\"//code.jquery.com/jquery.js\"></script>
<script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        echo "\"></script>

<!-- Include Flashy default partial -->
";
        // line 350
        echo "

</body>


</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "
            <!-- Additional CSS Files -->

            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 28
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
        return array (  606 => 28,  601 => 26,  597 => 25,  593 => 24,  589 => 23,  585 => 22,  580 => 19,  570 => 18,  555 => 350,  549 => 346,  543 => 343,  539 => 342,  535 => 341,  529 => 338,  525 => 337,  520 => 335,  516 => 334,  432 => 252,  419 => 245,  413 => 242,  409 => 241,  404 => 239,  400 => 238,  393 => 235,  388 => 232,  384 => 231,  371 => 220,  365 => 217,  359 => 215,  356 => 214,  349 => 211,  347 => 210,  338 => 204,  330 => 199,  322 => 194,  315 => 190,  308 => 188,  302 => 185,  294 => 181,  270 => 159,  261 => 157,  257 => 156,  254 => 155,  245 => 153,  241 => 152,  170 => 83,  164 => 81,  158 => 79,  155 => 78,  149 => 76,  147 => 75,  143 => 74,  139 => 73,  135 => 72,  131 => 71,  127 => 70,  123 => 69,  116 => 65,  112 => 64,  108 => 63,  104 => 62,  71 => 31,  69 => 18,  64 => 16,  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\">
<head>

    <head>

        <meta charset=\"utf-8\">
        <meta name=\"author\" content=\"templatemo\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <link href=\"{{ asset('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap') }}\"
              rel=\"stylesheet\">

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
                        {% if(user.type=='Admin') %}
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
                    <img src=\"{{ asset('C:\\xampp\\htdocs\\img' ~ produit.image) }}\" alt=\"\" style=\"border-radius: 20px;\">
                </div>
            </div>
            <div class=\"col-lg-5 align-self-center\">
                <h4>{{ produit.nom }}</h4>
                <span class=\"author\">
              <img src=\"assets/images/author-02.jpg\" alt=\"\" style=\"max-width: 50px; border-radius: 50%;\">
              <h6>{{ user.name }}<br><a>{{ user.nickname }}</a></h6>
            </span>
                <p>{{ produit.description }}</p>
                <div class=\"row\">
                    <div class=\"col-3\">
                <span class=\"bid\">
                  Prix<br><strong>{{ produit.prix }}</strong><br><em>(DT)</em>
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
                    {% if(user.id_user!=produit.getIdUser().getIduser()) %}
                        <a href=\"{{ path('add_product', {'idproduit': produit.idproduit}) }}\"><h6>Ajouter au panier</h6>
                        </a><br></br>
                    {% endif %}
                    {% if(user.id_user==produit.getIdUser().getIduser()) %}
                        {{ include('produits/_delete_form.html.twig') }}

                        <a href=\"{{ path('app_produits_edit', {'idproduit': produit.idproduit}) }}\" class=\"main-button\"><i
                                    class=\"fas fa-pencil-alt\"></i></a>
                    {% endif %}
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
                                        <img src=\"{{ asset('C:\\xampp\\htdocs\\img' ~ produit.image) }}\" alt=\"\">
                                    </div>
                                    <div class=\"right-content\">
                                        <h4>{{ produit.nom }}</h4>
                                        <span class=\"date\">{{ produit.idcategorie }}</span>
                                        <div class=\"line-dec\"></div>
                                        <h6>Prix <em>{{ produit.prix }}</em></h6>
                                        <span class=\"date\">{{ produit.dateajout ? produit.dateajout|date('Y-m-d H:i:s') : '' }}</span>

                                        <div class=\"main-button\"><a
                                                    href=\"{{ path('app_produits_show', {'idproduit': produit.idproduit}) }}\"
                                                    classe=\"active\"><h6>View Item Details</h6></a></div>

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
                    <p>There are 5 different HTML pages included in this NFT <a href=\"https://templatemo.com/page/1\"
                                                                                target=\"_blank\" rel=\"nofollow\">website
                            template</a>. You can edit or modify any section on any page as you required.</p>
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
                    <p>If you would like to support our TemplateMo website, please visit <a rel=\"nofollow\"
                                                                                            href=\"https://templatemo.com/contact\"
                                                                                            target=\"_parent\">our contact
                            page</a> to make a PayPal contribution. Thank you.</p>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"item\">
                    <div class=\"icon\">
                        <img src=\"assets/images/icon-06.png\" alt=\"\">
                    </div>
                    <h4>Sell Your NFT &amp; Make Profit</h4>
                    <p>NFT means Non-Fungible Token that are used in digital cryptocurrency markets. There are many
                        different kinds of NFTs in the industry.</p>
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
                    Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\" href=\"https://templatemo.com\"
                                   target=\"_blank\">TemplateMo</a></p>
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
{# {{ include('@MercurySeriesFlashy/flashy.html.twig') }} #}


</body>


</html>", "produits/show.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\produits\\show.html.twig");
    }
}
