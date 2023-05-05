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

/* produits/edit.html.twig */
class __TwigTemplate_a136d4b5f1c6503329393e3f8e520bf8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/edit.html.twig"));

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
        echo "\"
          rel=\"stylesheet\">

    <title>Liberty Template - Create NFT Page</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">


    ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
    TemplateMo 577 Liberty Market

    https://templatemo.com/tm-577-liberty-market

    -->
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
                        <img src=\"assets/images/logo.png\" alt=\"\">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                        <div class=\"dropdown\">
                            <li><a>Art</a></li>
                            <div class=\"dropdown-content\">
                                <li><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_explore");
        echo "\">Explore</a></li>
                                <li><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\">Blog</a></li>
                                <li><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        echo "\">Studios</a></li>
                                <li><a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\">Create Yours</a></li>

                            </div>
                        </div>
                        <li><a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">Offres</a></li>
                        <li><a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
        echo "\">Demandes</a></li>
                        <li><a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                        <li><a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_show", ["idpanier" => "1"]);
        echo "\">Panier</a></li>
                        <li><a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\">Challenges</a></li>
                        <li><a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\">Tutoriels</a></li>
                        ";
        // line 82
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 82, $this->source); })()), "type", [], "any", false, false, false, 82) == "Admin")) {
            // line 83
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_studiodashboard");
            echo "\">dashboard </a></li>
                        ";
        }
        // line 85
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 85, $this->source); })()), "idUser", [], "any", false, false, false, 85) == null)) {
            // line 86
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_login");
            echo "\">Log In</a></li>
                        ";
        } else {
            // line 88
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_logout");
            echo "\">Logout</a></li>
                        ";
        }
        // line 90
        echo "                    </ul>
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

<div class=\"page-heading normal-space\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h6>Bienvenue à ce formulaire</h6>
                <h2>Votre espace pour modifier votre produit</h2>
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
                    <h2>Modifier <em>Votre Produit</em> Ici.</h2>
                </div>
            </div>

            ";
        // line 123
        $context["nomField"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "nom", [], "any", false, false, false, 123);
        // line 124
        echo "            ";
        $context["descriptionField"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "description", [], "any", false, false, false, 124);
        // line 125
        echo "            ";
        $context["prixField"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "prix", [], "any", false, false, false, 125);
        // line 126
        echo "            ";
        $context["idcategorieField"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "idcategorie", [], "any", false, false, false, 126);
        // line 127
        echo "            ";
        $context["imageField"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "image", [], "any", false, false, false, 127);
        // line 128
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "contact"]]);
        echo "
            <div class=\"col-lg-12\">

                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <fieldset>
                            ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["nomField"]) || array_key_exists("nomField", $context) ? $context["nomField"] : (function () { throw new RuntimeError('Variable "nomField" does not exist.', 134, $this->source); })()), 'label', ["label" => "Nom du produit"]);
        echo "
                            ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["nomField"]) || array_key_exists("nomField", $context) ? $context["nomField"] : (function () { throw new RuntimeError('Variable "nomField" does not exist.', 135, $this->source); })()), 'widget', ["attr" => ["placeholder" => "Entrer le nom du produit ici", "autocomplete" => "on"]]);
        echo "
                            ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["nomField"]) || array_key_exists("nomField", $context) ? $context["nomField"] : (function () { throw new RuntimeError('Variable "nomField" does not exist.', 136, $this->source); })()), 'errors');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-lg-4\">
                        <fieldset>
                            ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["descriptionField"]) || array_key_exists("descriptionField", $context) ? $context["descriptionField"] : (function () { throw new RuntimeError('Variable "descriptionField" does not exist.', 141, $this->source); })()), 'label', ["label" => "Description du produit"]);
        echo "
                            ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["descriptionField"]) || array_key_exists("descriptionField", $context) ? $context["descriptionField"] : (function () { throw new RuntimeError('Variable "descriptionField" does not exist.', 142, $this->source); })()), 'widget', ["attr" => ["placeholder" => "décrir le produit ici", "autocomplete" => "on"]]);
        echo "
                            ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["descriptionField"]) || array_key_exists("descriptionField", $context) ? $context["descriptionField"] : (function () { throw new RuntimeError('Variable "descriptionField" does not exist.', 143, $this->source); })()), 'errors');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-lg-4\">
                        <fieldset>
                            ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prixField"]) || array_key_exists("prixField", $context) ? $context["prixField"] : (function () { throw new RuntimeError('Variable "prixField" does not exist.', 148, $this->source); })()), 'label', ["label" => "Prix du produit"]);
        echo "
                            ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prixField"]) || array_key_exists("prixField", $context) ? $context["prixField"] : (function () { throw new RuntimeError('Variable "prixField" does not exist.', 149, $this->source); })()), 'widget', ["attr" => ["placeholder" => "Entrer le prix du produit ici", "autocomplete" => "on"]]);
        echo "
                            ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prixField"]) || array_key_exists("prixField", $context) ? $context["prixField"] : (function () { throw new RuntimeError('Variable "prixField" does not exist.', 150, $this->source); })()), 'errors');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-lg-6\">
                        <fieldset>

                            ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["idcategorieField"]) || array_key_exists("idcategorieField", $context) ? $context["idcategorieField"] : (function () { throw new RuntimeError('Variable "idcategorieField" does not exist.', 156, $this->source); })()), 'label', ["label" => "Catégorie du produit"]);
        echo "
                            ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["idcategorieField"]) || array_key_exists("idcategorieField", $context) ? $context["idcategorieField"] : (function () { throw new RuntimeError('Variable "idcategorieField" does not exist.', 157, $this->source); })()), 'widget', ["attr" => ["class" => "main-button", "autocomplete" => "on"]]);
        echo "
                            ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["idcategorieField"]) || array_key_exists("idcategorieField", $context) ? $context["idcategorieField"] : (function () { throw new RuntimeError('Variable "idcategorieField" does not exist.', 158, $this->source); })()), 'errors');
        echo "


                        </fieldset>
                    </div>
                    <div class=\"col-lg-6\">
                        <fieldset>


                        </fieldset>
                    </div>
                    <div class=\"col-lg-6\">
                        <fieldset>
                            <label class=\"form-label\">Image</label>

                            ";
        // line 173
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 173, $this->source); })()), "image", [], "any", false, false, false, 173))) {
            // line 174
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 174, $this->source); })()), "image", [], "any", false, false, false, 174))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 174, $this->source); })()), "nom", [], "any", false, false, false, 174), "html", null, true);
            echo "\"
                                     style=\"border-radius: 20px; min-width: 195px;\">
                                <br><br>
                                <input type=\"hidden\" id=\"imageField\" name=\"imageField\" value=\"";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 177, $this->source); })()), "image", [], "any", false, false, false, 177), "html", null, true);
            echo "\">
                            ";
        }
        // line 179
        echo "
                            ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["imageField"]) || array_key_exists("imageField", $context) ? $context["imageField"] : (function () { throw new RuntimeError('Variable "imageField" does not exist.', 180, $this->source); })()), 'widget', ["attr" => ["type" => "file"]]);
        echo "
                            ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["imageField"]) || array_key_exists("imageField", $context) ? $context["imageField"] : (function () { throw new RuntimeError('Variable "imageField" does not exist.', 181, $this->source); })()), 'errors');
        echo "

                        </fieldset>
                    </div>
                    <div class=\"col-lg-12\">
                        <fieldset>
                            <button class=\"main-button\" type=\"submit\" class=\"orange-button\" onClick=\"validateSubmit()\">
                                Modifier le produit
                            </button>
                            ";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), 'rest');
        echo "
                        </fieldset>
                    </div>
                </div>

            </div>
            ";
        // line 196
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), 'form_end');
        echo "


        </div>
    </div>
</div>

<script>
    function validateSubmit() {
        result = confirm(\"Voulez-vous vraiment modifier ce produit ?\");
        if (result) {
            \$('#form').submit();
        }
    }
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
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>


<script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "
        <!-- Additional CSS Files -->

        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.css"), "html", null, true);
        echo "\">

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "produits/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 27,  460 => 26,  456 => 25,  452 => 24,  448 => 23,  443 => 20,  433 => 19,  419 => 237,  415 => 236,  411 => 235,  405 => 232,  401 => 231,  396 => 229,  392 => 228,  357 => 196,  348 => 190,  336 => 181,  332 => 180,  329 => 179,  324 => 177,  315 => 174,  313 => 173,  295 => 158,  291 => 157,  287 => 156,  278 => 150,  274 => 149,  270 => 148,  262 => 143,  258 => 142,  254 => 141,  246 => 136,  242 => 135,  238 => 134,  228 => 128,  225 => 127,  222 => 126,  219 => 125,  216 => 124,  214 => 123,  179 => 90,  173 => 88,  167 => 86,  164 => 85,  158 => 83,  156 => 82,  152 => 81,  148 => 80,  144 => 79,  140 => 78,  136 => 77,  132 => 76,  125 => 72,  121 => 71,  117 => 70,  113 => 69,  72 => 30,  70 => 19,  64 => 16,  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

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

    TemplateMo 577 Liberty Market

    https://templatemo.com/tm-577-liberty-market

    -->
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
                        <img src=\"assets/images/logo.png\" alt=\"\">
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
                        {% if(user.type=='Admin') %}
                            <li><a href=\"{{ path('app_dashboard_studiodashboard') }}\">dashboard </a></li>
                        {% endif %}
                        {% if(user.idUser==null) %}
                            <li><a href=\"{{ path('app_allusers_login') }}\">Log In</a></li>
                        {% else %}
                            <li><a href=\"{{ path('app_allusers_logout') }}\">Logout</a></li>
                        {% endif %}
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

<div class=\"page-heading normal-space\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h6>Bienvenue à ce formulaire</h6>
                <h2>Votre espace pour modifier votre produit</h2>
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
                    <h2>Modifier <em>Votre Produit</em> Ici.</h2>
                </div>
            </div>

            {% set nomField = form.nom %}
            {% set descriptionField = form.description %}
            {% set prixField =form.prix %}
            {% set idcategorieField = form.idcategorie %}
            {% set imageField = form.image %}
            {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'id':'contact',} }) }}
            <div class=\"col-lg-12\">

                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <fieldset>
                            {{ form_label(nomField, 'Nom du produit') }}
                            {{ form_widget(nomField, {'attr': {'placeholder': 'Entrer le nom du produit ici', 'autocomplete': 'on'}}) }}
                            {{ form_errors(nomField) }}
                        </fieldset>
                    </div>
                    <div class=\"col-lg-4\">
                        <fieldset>
                            {{ form_label(descriptionField, 'Description du produit') }}
                            {{ form_widget(descriptionField, {'attr': {'placeholder': 'décrir le produit ici', 'autocomplete': 'on'}}) }}
                            {{ form_errors(descriptionField) }}
                        </fieldset>
                    </div>
                    <div class=\"col-lg-4\">
                        <fieldset>
                            {{ form_label(prixField, 'Prix du produit') }}
                            {{ form_widget(prixField, {'attr': {'placeholder': 'Entrer le prix du produit ici', 'autocomplete': 'on'}}) }}
                            {{ form_errors(prixField) }}
                        </fieldset>
                    </div>
                    <div class=\"col-lg-6\">
                        <fieldset>

                            {{ form_label(idcategorieField, 'Catégorie du produit') }}
                            {{ form_widget(idcategorieField, {'attr': {'class': 'main-button', 'autocomplete': 'on'}}) }}
                            {{ form_errors(idcategorieField) }}


                        </fieldset>
                    </div>
                    <div class=\"col-lg-6\">
                        <fieldset>


                        </fieldset>
                    </div>
                    <div class=\"col-lg-6\">
                        <fieldset>
                            <label class=\"form-label\">Image</label>

                            {% if produit.image is not null %}
                                <img src=\"{{ asset('uploads/images/' ~ produit.image) }}\" alt=\"{{ produit.nom }}\"
                                     style=\"border-radius: 20px; min-width: 195px;\">
                                <br><br>
                                <input type=\"hidden\" id=\"imageField\" name=\"imageField\" value=\"{{ produit.image }}\">
                            {% endif %}

                            {{ form_widget(imageField, {'attr': {'type': 'file'}}) }}
                            {{ form_errors(imageField) }}

                        </fieldset>
                    </div>
                    <div class=\"col-lg-12\">
                        <fieldset>
                            <button class=\"main-button\" type=\"submit\" class=\"orange-button\" onClick=\"validateSubmit()\">
                                Modifier le produit
                            </button>
                            {{ form_rest(form) }}
                        </fieldset>
                    </div>
                </div>

            </div>
            {{ form_end(form) }}


        </div>
    </div>
</div>

<script>
    function validateSubmit() {
        result = confirm(\"Voulez-vous vraiment modifier ce produit ?\");
        if (result) {
            \$('#form').submit();
        }
    }
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
<script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
<script src=\"{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}\"></script>

<script src=\"{{ asset('assets/js/isotope.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/owl-carousel.js') }}\"></script>


<script src=\"{{ asset('assets/js/tabs.js') }}\"></script>
<script src=\"{{ asset('assets/js/popup.js') }}\"></script>
<script src=\"{{ asset('assets/js/custom.js') }}\"></script>

</body>
</html>", "produits/edit.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\produits\\edit.html.twig");
    }
}
