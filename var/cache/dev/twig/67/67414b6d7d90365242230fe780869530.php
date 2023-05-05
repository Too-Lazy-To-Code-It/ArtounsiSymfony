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

/* demandetravail/index.html.twig */
class __TwigTemplate_2287784a55b4f31001559633c0ae45a1 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demandetravail/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demandetravail/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/swiper-bundle.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"), "html", null, true);
        echo "\"
          rel=\"stylesheet\">
    <link rel=\"stylesheet\"
          href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"), "html", null, true);
        echo "\"
          rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/cardscss.css"), "html", null, true);
        echo "\">
    <title>Liberty Template - NFT Item Detail Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 22
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 29
        echo "    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/templatemo-cyborg-gaming.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.css"), "html", null, true);
        echo "\"/>
    <!--

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
                        <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/logoart.png"), "html", null, true);
        echo "\" height=\"50\" width=\"30\" alt=\"\">

                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                        <div class=\"dropdown\">
                            <li><a>Art</a></li>
                            <div class=\"dropdown-content\">
                                <li><a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_explore");
        echo "\">Explore</a></li>
                                <li><a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\">Blog</a></li>
                                <li><a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        echo "\">Studios</a></li>
                                <li><a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\">Create Yours</a></li>

                            </div>
                        </div>
                        <li><a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">Offres</a></li>
                        <li><a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
        echo "\">Demandes</a></li>
                        <li><a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                        <li><a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_show", ["idpanier" => "1"]);
        echo "\">Panier</a></li>
                        <li><a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\">Challenges</a></li>
                        <li><a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\">Tutoriels</a></li>
                        ";
        // line 91
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 91, $this->source); })()), "type", [], "any", false, false, false, 91) == "Admin")) {
            // line 92
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_studiodashboard");
            echo "\">dashboard </a></li>
                        ";
        }
        // line 94
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 94, $this->source); })()), "idUser", [], "any", false, false, false, 94) == null)) {
            // line 95
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_login");
            echo "\">Log In</a></li>
                        ";
        } else {
            // line 97
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_logout");
            echo "\">Logout</a></li>
                        ";
        }
        // line 99
        echo "                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
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
    <!-- The Modal -->
    <div class=\"modal\" id=\"myModal\">
        <div class=\"modal-dialog modal-fullscreen\">
            <div class=\"modal-content\">

                <!-- Modal Header -->
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\">Modal Heading</h4>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>

                <!-- Modal body -->
                <div class=\"modal-body\">
                    Modal body..
                </div>

                <!-- Modal footer -->
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Close</button>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<div class=\"page-heading normal-space\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h6>Les demandes d'emplois</h6>
                <h2>Consulter tous les demandes</h2>
                <span>Acceuil> <a href=\"#\">Demandes d'emplois</a></span>
                <div class=\"buttons\">
                    <div class=\"main-button\">
                        <a href=\"";
        // line 199
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_travail_chercheroffre");
        echo "\">Cherchers offres</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<style>.section-title {
        border: 1px solid #7453fc; /* add border to the section */
        border-radius: 20px; /* set the same radius for all corners */
        padding: 10px; /* add padding to the section */
        background-color: #7453fc;
        display: inline-block; /* make the section inline-block so it wraps around its content */
    }

    .section-title {
        margin: 0; /* remove margin from the title */
    }

    .link-style {
        text-decoration: none; /* remove underline from the link */
        color: white; /* set link color */
        font-weight: bold; /* make the link bold */
        margin-left: 10px; /* add margin to the left of the link */
    }</style>

<div class=\"item-details-page\">
    <div class=\"container\">
        <div class=\"row\">


            <div class=\"col-lg-6\">
                <div class=\"mini-heading\">
                    <h4 class=\"section-title\">Mes demandes</h4></div>

                <a class=\"link-style\" href=\"";
        // line 235
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_demandes");
        echo "\"><u>Gérer mes demandes</u></a>

            </div>


            <div class=\"featured-explore\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"owl-features owl-carousel\">


                                ";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandetravailbyid"]) || array_key_exists("demandetravailbyid", $context) ? $context["demandetravailbyid"] : (function () { throw new RuntimeError('Variable "demandetravailbyid" does not exist.', 247, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["demandetravail"]) {
            // line 248
            echo "


                                    <article class=\"postcardcar dark blue\">
                                        <a class=\"postcardcar__img_link\" href=\"#\">
                                            <img class=\"postcardcar__img\" src=\"https://picsum.photos/1000/1000\"
                                                 alt=\"Image Title\"/>
                                        </a>
                                        <div class=\"postcardcar__text\">
                                            <h1 class=\"postcardcar__title blue\"><a>";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demandetravail"], "titredemande", [], "any", false, false, false, 257), "html", null, true);
            echo "</a>
                                            </h1>
                                            <div class=\"postcardcar__subtitle small\">
                                                <time datetime=\"2020-05-25 12:00:00\">
                                                    <i class=\"fas fa-calendar-alt mr-2\"></i>";
            // line 261
            ((twig_get_attribute($this->env, $this->source, $context["demandetravail"], "dateajoutdemande", [], "any", false, false, false, 261)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demandetravail"], "dateajoutdemande", [], "any", false, false, false, 261), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "
                                                </time>
                                            </div>
                                            <div class=\"postcardcar__bar\"></div>
                                            <div class=\"postcardcar__preview-txt\">";
            // line 265
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demandetravail"], "descriptionDemande", [], "any", false, false, false, 265), "html", null, true);
            echo "</div>
                                            <ul class=\"postcardcar__tagbox\">

                                                <li class=\"tag__item play blue\">
                                                    <a href=\"";
            // line 269
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["demandetravail"], "pdf", [], "any", false, false, false, 269))), "html", null, true);
            echo "\"> <i
                                                                class=\"bi bi-file-person\"> Mon cv</i></a>


                                                </li>


                                                </li>
                                            </ul>
                                        </div>
                                    </article>



                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demandetravail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "                            </div>

                        </div>
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
                <div class=\"current-bid\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"mini-heading\">
                                <h4>Tous les offres</h4>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <fieldset>
                                <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\"
                                        id=\"chooseCategory\" onchange=\"this.form.click()\">
                                    <option selected>Sort By: Latest</option>
                                    <option type=\"checkbox\" name=\"option1\" value=\"old\">Sort By: Oldest</option>
                                    <option value=\"low\">Sort By: Lowest</option>
                                    <option value=\"high\">Sort By: Highest</option>
                                </select>
                            </fieldset>
                        </div>


                        <section class=\"dark\">

                            <div class=\"containercard py-4\">

                                ";
        // line 327
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandetravails"]) || array_key_exists("demandetravails", $context) ? $context["demandetravails"] : (function () { throw new RuntimeError('Variable "demandetravails" does not exist.', 327, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["demandetravail"]) {
            // line 328
            echo "                                    <article class=\"postcard dark blue\">
                                        <a class=\"postcard__img_link\" href=\"#\">
                                            <img class=\"postcard__img\" src=\"https://picsum.photos/1000/1000\"
                                                 alt=\"Image Title\"/>
                                        </a>
                                        <div class=\"postcard__text\">
                                            <h1 class=\"postcard__title blue\"><a>";
            // line 334
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demandetravail"], "titreDemande", [], "any", false, false, false, 334), "html", null, true);
            echo "</a>
                                            </h1>
                                            <div class=\"postcard__subtitle small\">
                                                <time datetime=\"2020-05-25 12:00:00\">
                                                    <i class=\"fas fa-calendar-alt mr-2\"></i>";
            // line 338
            ((twig_get_attribute($this->env, $this->source, $context["demandetravail"], "dateajoutdemande", [], "any", false, false, false, 338)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demandetravail"], "dateajoutdemande", [], "any", false, false, false, 338), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "
                                                </time>
                                            </div>
                                            <div class=\"postcard__bar\"></div>
                                            <div class=\"postcard__preview-txt\">";
            // line 342
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demandetravail"], "descriptionDemande", [], "any", false, false, false, 342), "html", null, true);
            echo "</div>
                                            <ul class=\"postcard__tagbox\">
                                                <li class=\"tag__item\"><i
                                                            class=\"fas fa-tag mr-2\"></i>";
            // line 345
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demandetravail"], "categoriedemande", [], "any", false, false, false, 345), "html", null, true);
            echo "
                                                </li>
                                                <li class=\"tag__item play blue\">
                                                    <a href=\"";
            // line 348
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["demandetravail"], "pdf", [], "any", false, false, false, 348))), "html", null, true);
            echo "\"><i
                                                                class=\"bi bi-file-person\">cv</i> </a>

                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demandetravail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 356
        echo "                            </div>
                            <div>

                                ";
        // line 359
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env,         // line 360
(isset($context["demandetravails"]) || array_key_exists("demandetravails", $context) ? $context["demandetravails"] : (function () { throw new RuntimeError('Variable "demandetravails" does not exist.', 360, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", ["queryParam1" => "param1 value", "queryParam2" => "param2 value"], ["align" => "center"]);
        // line 370
        echo "
                            </div>
                        </section>


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
                <p>Copyright © 2022 <a href=\"#\">Liberty</a> NFT Marketplace Co., Ltd. All rights reserved. &nbsp;&nbsp;
                    Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\"
                                   href=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://templatemo.com"), "html", null, true);
        echo "\" target=\"_blank\">TemplateMo</a></p>
            </div>
        </div>
    </div>
</footer>

text-alig
<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"assets/js/owl-carousel.js')}}\"></script>

<script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.1.1/swiper-bundle.min.js"), "html", null, true);
        echo "\"
        integrity=\"sha512-J0i98QZsJc12MkNEyDbinrKKoe7Jiw0rtryAXBesZrVwRkaqgP9QNCPyo5sMZ2jfiJQb+9RIE4I3xNl8fFqQIA==\"
        crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<!-- JavaScript -->
<!--Uncomment this line-->
<script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/mixitup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/test.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/masonry.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.slicknav.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 424
        $this->displayBlock('javascripts', $context, $blocks);
        // line 446
        echo "
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 22
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 23
        echo "        <link rel=\"stylesheet\" href=\"";
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
        echo "\"/>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 424
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 425
        echo "    ";
        // line 426
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 429
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 432
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 435
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 438
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 441
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 444
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "demandetravail/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  765 => 444,  759 => 441,  753 => 438,  747 => 435,  741 => 432,  735 => 429,  729 => 426,  727 => 425,  717 => 424,  705 => 27,  701 => 26,  697 => 25,  693 => 24,  688 => 23,  678 => 22,  665 => 446,  663 => 424,  659 => 423,  655 => 422,  651 => 421,  647 => 420,  643 => 419,  639 => 418,  635 => 417,  631 => 416,  627 => 415,  623 => 414,  619 => 413,  611 => 408,  606 => 406,  602 => 405,  598 => 404,  592 => 401,  587 => 399,  583 => 398,  571 => 389,  550 => 370,  548 => 360,  547 => 359,  542 => 356,  528 => 348,  522 => 345,  516 => 342,  509 => 338,  502 => 334,  494 => 328,  490 => 327,  445 => 284,  424 => 269,  417 => 265,  410 => 261,  403 => 257,  392 => 248,  388 => 247,  373 => 235,  334 => 199,  232 => 99,  226 => 97,  220 => 95,  217 => 94,  211 => 92,  209 => 91,  205 => 90,  201 => 89,  197 => 88,  193 => 87,  189 => 86,  185 => 85,  178 => 81,  174 => 80,  170 => 79,  166 => 78,  154 => 69,  118 => 36,  114 => 35,  110 => 34,  106 => 33,  102 => 32,  98 => 31,  94 => 30,  91 => 29,  89 => 22,  85 => 21,  78 => 17,  73 => 15,  69 => 14,  63 => 11,  59 => 10,  55 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/swiper-bundle.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css.css') }}\">
    <link href=\"{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css') }}\"
          rel=\"stylesheet\">
    <link rel=\"stylesheet\"
          href=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css') }}\">
    <link href=\"{{ asset('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap') }}\"
          rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/cardscss.css') }}\">
    <title>Liberty Template - NFT Item Detail Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    {% block stylesheet %}
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-liberty-market.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('https://unpkg.com/swiper@7/swiper-bundle.min.css') }}\"/>
    {% endblock %}
    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-liberty-market.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('/css/templatemo-cyborg-gaming.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('https://unpkg.com/swiper@7/swiper-bundle.min.css') }}\"/>
    <!--

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
                        <img src=\"{{ asset('assets2/img/logoart.png') }}\" height=\"50\" width=\"30\" alt=\"\">

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
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
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
    <!-- The Modal -->
    <div class=\"modal\" id=\"myModal\">
        <div class=\"modal-dialog modal-fullscreen\">
            <div class=\"modal-content\">

                <!-- Modal Header -->
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\">Modal Heading</h4>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>

                <!-- Modal body -->
                <div class=\"modal-body\">
                    Modal body..
                </div>

                <!-- Modal footer -->
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Close</button>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<div class=\"page-heading normal-space\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h6>Les demandes d'emplois</h6>
                <h2>Consulter tous les demandes</h2>
                <span>Acceuil> <a href=\"#\">Demandes d'emplois</a></span>
                <div class=\"buttons\">
                    <div class=\"main-button\">
                        <a href=\"{{ path('app_demande_travail_chercheroffre') }}\">Cherchers offres</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<style>.section-title {
        border: 1px solid #7453fc; /* add border to the section */
        border-radius: 20px; /* set the same radius for all corners */
        padding: 10px; /* add padding to the section */
        background-color: #7453fc;
        display: inline-block; /* make the section inline-block so it wraps around its content */
    }

    .section-title {
        margin: 0; /* remove margin from the title */
    }

    .link-style {
        text-decoration: none; /* remove underline from the link */
        color: white; /* set link color */
        font-weight: bold; /* make the link bold */
        margin-left: 10px; /* add margin to the left of the link */
    }</style>

<div class=\"item-details-page\">
    <div class=\"container\">
        <div class=\"row\">


            <div class=\"col-lg-6\">
                <div class=\"mini-heading\">
                    <h4 class=\"section-title\">Mes demandes</h4></div>

                <a class=\"link-style\" href=\"{{ path('app_dashboard_demandes') }}\"><u>Gérer mes demandes</u></a>

            </div>


            <div class=\"featured-explore\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"owl-features owl-carousel\">


                                {% for demandetravail in demandetravailbyid %}



                                    <article class=\"postcardcar dark blue\">
                                        <a class=\"postcardcar__img_link\" href=\"#\">
                                            <img class=\"postcardcar__img\" src=\"https://picsum.photos/1000/1000\"
                                                 alt=\"Image Title\"/>
                                        </a>
                                        <div class=\"postcardcar__text\">
                                            <h1 class=\"postcardcar__title blue\"><a>{{ demandetravail.titredemande }}</a>
                                            </h1>
                                            <div class=\"postcardcar__subtitle small\">
                                                <time datetime=\"2020-05-25 12:00:00\">
                                                    <i class=\"fas fa-calendar-alt mr-2\"></i>{{ demandetravail.dateajoutdemande ? demandetravail.dateajoutdemande|date('Y-m-d H:i:s') : '' }}
                                                </time>
                                            </div>
                                            <div class=\"postcardcar__bar\"></div>
                                            <div class=\"postcardcar__preview-txt\">{{ demandetravail.descriptionDemande }}</div>
                                            <ul class=\"postcardcar__tagbox\">

                                                <li class=\"tag__item play blue\">
                                                    <a href=\"{{ asset('/uploads/'~demandetravail.pdf) }}\"> <i
                                                                class=\"bi bi-file-person\"> Mon cv</i></a>


                                                </li>


                                                </li>
                                            </ul>
                                        </div>
                                    </article>



                                {% endfor %}
                            </div>

                        </div>
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
                <div class=\"current-bid\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"mini-heading\">
                                <h4>Tous les offres</h4>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <fieldset>
                                <select name=\"Category\" class=\"form-select\" aria-label=\"Default select example\"
                                        id=\"chooseCategory\" onchange=\"this.form.click()\">
                                    <option selected>Sort By: Latest</option>
                                    <option type=\"checkbox\" name=\"option1\" value=\"old\">Sort By: Oldest</option>
                                    <option value=\"low\">Sort By: Lowest</option>
                                    <option value=\"high\">Sort By: Highest</option>
                                </select>
                            </fieldset>
                        </div>


                        <section class=\"dark\">

                            <div class=\"containercard py-4\">

                                {% for demandetravail in demandetravails %}
                                    <article class=\"postcard dark blue\">
                                        <a class=\"postcard__img_link\" href=\"#\">
                                            <img class=\"postcard__img\" src=\"https://picsum.photos/1000/1000\"
                                                 alt=\"Image Title\"/>
                                        </a>
                                        <div class=\"postcard__text\">
                                            <h1 class=\"postcard__title blue\"><a>{{ demandetravail.titreDemande }}</a>
                                            </h1>
                                            <div class=\"postcard__subtitle small\">
                                                <time datetime=\"2020-05-25 12:00:00\">
                                                    <i class=\"fas fa-calendar-alt mr-2\"></i>{{ demandetravail.dateajoutdemande ? demandetravail.dateajoutdemande|date('Y-m-d H:i:s') : '' }}
                                                </time>
                                            </div>
                                            <div class=\"postcard__bar\"></div>
                                            <div class=\"postcard__preview-txt\">{{ demandetravail.descriptionDemande }}</div>
                                            <ul class=\"postcard__tagbox\">
                                                <li class=\"tag__item\"><i
                                                            class=\"fas fa-tag mr-2\"></i>{{ demandetravail.categoriedemande }}
                                                </li>
                                                <li class=\"tag__item play blue\">
                                                    <a href=\"{{ asset('/uploads/'~demandetravail.pdf) }}\"><i
                                                                class=\"bi bi-file-person\">cv</i> </a>

                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                {% endfor %}
                            </div>
                            <div>

                                {{ knp_pagination_render(
                                    demandetravails,
                                    '@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig',
                                    {
                                        'queryParam1': 'param1 value',
                                        'queryParam2': 'param2 value'
                                    },
                                    {
                                        'align': 'center',

                                    },
                                ) }}
                            </div>
                        </section>


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
                <p>Copyright © 2022 <a href=\"#\">Liberty</a> NFT Marketplace Co., Ltd. All rights reserved. &nbsp;&nbsp;
                    Designed by <a title=\"HTML CSS Templates\" rel=\"sponsored\"
                                   href=\"{{ asset('https://templatemo.com') }}\" target=\"_blank\">TemplateMo</a></p>
            </div>
        </div>
    </div>
</footer>

text-alig
<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
<script src=\"{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}\"></script>

<script src=\"{{ asset('assets/js/isotope.min.js') }}\"></script>
<script src=\"assets/js/owl-carousel.js')}}\"></script>

<script src=\"{{ asset('assets/js/tabs.js') }}\"></script>
<script src=\"{{ asset('assets/js/popup.js') }}\"></script>
<script src=\"{{ asset('assets/js/custom.js') }}\"></script>

<script src=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.1.1/swiper-bundle.min.js') }}\"
        integrity=\"sha512-J0i98QZsJc12MkNEyDbinrKKoe7Jiw0rtryAXBesZrVwRkaqgP9QNCPyo5sMZ2jfiJQb+9RIE4I3xNl8fFqQIA==\"
        crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<!-- JavaScript -->
<!--Uncomment this line-->
<script src=\"{{ asset('assets/index.js') }}\"></script>
<script src=\"{{ asset('js/jquery-3.3.1.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.magnific-popup.min.js') }}\"></script>
<script src=\"{{ asset('js/mixitup.min.js') }}\"></script>
<script src=\"{{ asset('js/test.js') }}\"></script>
<script src=\"{{ asset('js/masonry.pkgd.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.slicknav.js') }}\"></script>
<script src=\"{{ asset('js/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('js/main.js') }}\"></script>
<script src=\"{{ asset('https://unpkg.com/swiper/swiper-bundle.min.js') }}\"></script>
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

</html>", "demandetravail/index.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\demandetravail\\index.html.twig");
    }
}
