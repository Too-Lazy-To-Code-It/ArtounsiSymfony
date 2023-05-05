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

/* offretravail/index.html.twig */
class __TwigTemplate_13c3ac3017e49dfa31f3ba6df591f76b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offretravail/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offretravail/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    ";
        // line 9
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 26
        echo "
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js\"></script>

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' integrity=\"
          sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+2QLdMotoRxT1Pi6+nNJWv+UomT6P5
    \" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\"
          rel=\"stylesheet\">

    <link rel=\"stylesheet\" href='https://unpkg.com/swiper/swiper-bundle.min.css'/>
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/swiper-bundle.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'
          integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVpDMNlcbiIqYQUf5t8WvVZi0woX1uuK59j5M1Jw21t0\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css.css"), "html", null, true);
        echo "\">

    <title>Liberty Template - NFT Item Detail Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/templatemo-cyborg-gaming.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/swiper@7/swiper-bundle.min.css\"/>
    <!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap \"
          rel=\"stylesheet\">


    <link rel=\"stylesheet\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css\" type=\"text/css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css\" type=\"text/css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/elegant-icons.css\" type=\"text/css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css\" type=\"text/css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css\" type=\"text/css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slicknav.min.css\" type=\"text/css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css\" type=\"text/css"), "html", null, true);
        echo "\">
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
        // line 101
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
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_explore");
        echo "\">Explore</a></li>
                                <li><a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        echo "\">Blog</a></li>
                                <li><a href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_map");
        echo "\">Studios</a></li>
                                <li><a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_new");
        echo "\">Create Yours</a></li>

                            </div>
                        </div>
                        <li><a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "\">Offres</a></li>
                        <li><a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demandetravail_index");
        echo "\">Demandes</a></li>
                        <li><a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_index");
        echo "\">Shop</a></li>
                        <li><a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_show", ["idpanier" => "1"]);
        echo "\">Panier</a></li>
                        <li><a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index");
        echo "\">Challenges</a></li>
                        <li><a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index");
        echo "\">Tutoriels</a></li>
                        ";
        // line 123
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 123, $this->source); })()), "type", [], "any", false, false, false, 123) == "Admin")) {
            // line 124
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_studiodashboard");
            echo "\">dashboard </a></li>
                        ";
        }
        // line 126
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 126, $this->source); })()), "idUser", [], "any", false, false, false, 126) == null)) {
            // line 127
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_login");
            echo "\">Log In</a></li>
                        ";
        } else {
            // line 129
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_logout");
            echo "\">Logout</a></li>
                        ";
        }
        // line 131
        echo "                        <li class=\"nav-item dropdown\">
                            <a id=\"notification-dropdown\" class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <i class=\"bi bi-bell\"></i>
                                ";
        // line 134
        if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 134, $this->source); })()) > 0)) {
            // line 135
            echo "                                    <span id=\"count\" class=\"badge bg-primary badge-number\">";
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 135, $this->source); })()), "html", null, true);
            echo "</span>
                                ";
        }
        // line 137
        echo "
                            </a>

                            <!-- End Notification Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">


                                ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 145, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["notif"]) {
            // line 146
            echo "

                                    <li>
                                        <hr class=\"dropdown-divider\">
                                    </li>

                                    <li class=\"notification-item\">

                                        <i class=\"bi bi-info-circle text-primary\"></i>
                                        <div>
                                            <h4 class=\"name\"> ";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notif"], "nomartiste", [], "any", false, false, false, 156), "html", null, true);
            echo "</h4>
                                            <p class=\"post\"> postuler a l'offre ";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notif"], "titreoffre", [], "any", false, false, false, 157), "html", null, true);
            echo "</p>
                                            <p class=\"post\">";
            // line 158
            ((twig_get_attribute($this->env, $this->source, $context["notif"], "datepostuler", [], "any", false, false, false, 158)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notif"], "datepostuler", [], "any", false, false, false, 158), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</p>

                                        </div>
                                    </li>


                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "
                            </ul>
                            <!-- End Notification Dropdown Items -->

                        </li>
                        <li><a href=\"";
        // line 170
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

    <script>

        \$(document).ready(function () {
            // Select the notification dropdown
            var dropdown = \$('#notification-dropdown');

            // Add a click event listener to the notification dropdown
            dropdown.on('click', function () {
                // Send an AJAX request to the Symfony controller to update the entities
                \$.ajax({
                    url: \"";
        // line 248
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_notiftrue");
        echo "\",
                    type: \"POST\",
                    success: function (response) {
                        // Update the notification count badge
                        var badge = \$('#count');
                        badge.text(\"0\");
                        consol.log('tmchi');

                    },
                    error: function () {
                        // Handle errors
                    }
                });
            });
        });
    </script>

    <script>
        function addHoverEffect() {
            \$.ajax({
                url: 'your-server-url-here',
                success: function (data) {
                    // Loop through the notification items and add the hover effect
                    \$('.notification-item').each(function () {
                        \$(this).hover(
                            function () {
                                \$(this).addClass('hovered');
                            },
                            function () {
                                \$(this).removeClass('hovered');
                            }
                        );
                    });
                }
            });
        }

        \$(document).ready(function () {
            addHoverEffect();
        });

    </script>

    <script>
        function updateNotifications() {
            \$.ajax({
                url: '";
        // line 294
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_index");
        echo "',
                type: 'GET',
                success: function (html) {
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(html, 'text/html');
                    const count = doc.querySelector('#count').textContent;
                    document.querySelector('#count').textContent = count;

                    const notifications = doc.querySelectorAll('.notification-item');
                    const notificationsContainer = document.querySelector('.notifications');
                    notificationsContainer.innerHTML = '';

                    notifications.forEach((notification) => {
                        notificationsContainer.appendChild(notification);
                    });
                },
                error: function (error) {
                    console.error(error);
                }
            });
        }

        setInterval(updateNotifications, 2000); // Call every 2 seconds
    </script>


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
                <h6>Les offres d'emplois</h6>
                <h2>Consulter tous les offres</h2>
                <span>Acceuil > <a href=\"#\">Offre d'emplois</a></span>
                <div class=\"buttons\">
                    <div class=\"main-button\">
                        <a href=\"";
        // line 356
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offretravail_chercherdemande");
        echo "\">Cherchers demandes</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .notification-item:hover {
        background-color: #B0E0E6;
        color: #000000;
    }

    .notification-item {
        background-color: white; /* grey color */
    }


    .section-title {
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
    }

    .notifications {
        max-height: 300px;
        overflow-y: auto;
    }

    .name {
        color: black;
        *font-size: 20px;
    }

    .post {
        color: grey;
        font-size: 15px;
    }

    .dropdown-divider {
        height: 1px;
        margin: 0.5rem 0;
        overflow: hidden;
        background-color: #e9ecef;
    }

</style>

<div class=\"item-details-page\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-lg-6\">
                <div class=\"mini-heading\">
                    <h4 class=\"section-title\">Mes offres</h4></div>

                <a class=\"link-style\" href=\"";
        // line 426
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_offres");
        echo "\"><u>Gérer mes offres</u></a>

            </div>


            <div class=\"featured-explore\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"owl-features owl-carousel\">


                                ";
        // line 438
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offretravailbyid"]) || array_key_exists("offretravailbyid", $context) ? $context["offretravailbyid"] : (function () { throw new RuntimeError('Variable "offretravailbyid" does not exist.', 438, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["offretravail"]) {
            // line 439
            echo "



                                    <article class=\"postcardcar dark blue\">
                                        <a class=\"postcardcar__img_link\" href=\"#\">
                                            <img class=\"postcardcar__img\" src=\"https://picsum.photos/1000/1000\"
                                                 alt=\"Image Title\"/>
                                        </a>
                                        <div class=\"postcardcar__text\">
                                            <h1 class=\"postcardcar__title blue\"><a>";
            // line 449
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "titreoffre", [], "any", false, false, false, 449), "html", null, true);
            echo "</a>
                                            </h1>
                                            <div class=\"postcardcar__subtitle small\">
                                                <time datetime=\"2020-05-25 12:00:00\">
                                                    <i class=\"fas fa-calendar-alt mr-2\"></i>";
            // line 453
            ((twig_get_attribute($this->env, $this->source, $context["offretravail"], "dateajoutoofre", [], "any", false, false, false, 453)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "dateajoutoofre", [], "any", false, false, false, 453), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "
                                                </time>
                                            </div>
                                            <div class=\"postcardcar__bar\"></div>
                                            <div class=\"postcardcar__preview-txt\">";
            // line 457
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "descriptionoffre", [], "any", false, false, false, 457), "html", null, true);
            echo "</div>
                                            <ul class=\"postcardcar__tagbox\">
                                                <li class=\"tag__item\"><i
                                                            class=\"fas fa-tag mr-2\"></i>";
            // line 460
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "categorieoffre", [], "any", false, false, false, 460), "html", null, true);
            echo "
                                                </li>
                                                <li class=\"tag__item\"><i
                                                            class=\"fas fa-clock mr-2\"></i>";
            // line 463
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "typeoffre", [], "any", false, false, false, 463), "html", null, true);
            echo "
                                                </li>


                                                </li>
                                            </ul>
                                        </div>
                                    </article>



                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offretravail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 475
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
        // line 517
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offretravails"]) || array_key_exists("offretravails", $context) ? $context["offretravails"] : (function () { throw new RuntimeError('Variable "offretravails" does not exist.', 517, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["offretravail"]) {
            // line 518
            echo "                                    <article class=\"postcard dark blue\">
                                        <a class=\"postcard__img_link\" href=\"#\">
                                            <img class=\"postcard__img\" src=\"https://picsum.photos/1000/1000\"
                                                 alt=\"Image Title\"/>
                                        </a>
                                        <div class=\"postcard__text\">
                                            <h1 class=\"postcard__title blue\"><a>";
            // line 524
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "titreoffre", [], "any", false, false, false, 524), "html", null, true);
            echo "</a></h1>
                                            <div class=\"postcard__subtitle small\">
                                                <time datetime=\"2020-05-25 12:00:00\">
                                                    <i class=\"fas fa-calendar-alt mr-2\"></i>";
            // line 527
            ((twig_get_attribute($this->env, $this->source, $context["offretravail"], "dateajoutoofre", [], "any", false, false, false, 527)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "dateajoutoofre", [], "any", false, false, false, 527), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "
                                                </time>
                                            </div>
                                            <div class=\"postcard__bar\"></div>
                                            <div class=\"postcard__preview-txt\">";
            // line 531
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "descriptionoffre", [], "any", false, false, false, 531), "html", null, true);
            echo "</div>
                                            <ul class=\"postcard__tagbox\">
                                                <li class=\"tag__item\"><i
                                                            class=\"fas fa-tag mr-2\"></i>";
            // line 534
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "categorieoffre", [], "any", false, false, false, 534), "html", null, true);
            echo "
                                                </li>
                                                <li class=\"tag__item\"><i
                                                            class=\"fas fa-clock mr-2\"></i>";
            // line 537
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "typeoffre", [], "any", false, false, false, 537), "html", null, true);
            echo "
                                                </li>
                                                <li class=\"tag__item\"><i
                                                            class=\"fas fa-clock mr-2\"></i>";
            // line 540
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offretravail"], "localisationoffre", [], "any", false, false, false, 540), "html", null, true);
            echo "
                                                </li>


                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offretravail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 549
        echo "                            </div>
                            <div>

                                ";
        // line 552
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env,         // line 553
(isset($context["offretravails"]) || array_key_exists("offretravails", $context) ? $context["offretravails"] : (function () { throw new RuntimeError('Variable "offretravails" does not exist.', 553, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", ["queryParam1" => "param1 value", "queryParam2" => "param2 value"], ["align" => "center"]);
        // line 563
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
        // line 582
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
        // line 592
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 593
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 595
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"assets/js/owl-carousel.js')}}\"></script>

<script src=\"";
        // line 598
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.1.1/swiper-bundle.min.js"), "html", null, true);
        echo "\"
        integrity=\"sha512-J0i98QZsJc12MkNEyDbinrKKoe7Jiw0rtryAXBesZrVwRkaqgP9QNCPyo5sMZ2jfiJQb+9RIE4I3xNl8fFqQIA==\"
        crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<!-- JavaScript -->
<!--Uncomment this line-->
<script src=\"";
        // line 607
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/index.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 608
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 610
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 611
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/mixitup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/test.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/masonry.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 614
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.slicknav.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 616
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 621
        $this->displayBlock('javascripts', $context, $blocks);
        // line 643
        echo "
<script src=\"";
        // line 644
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 10
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

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

    // line 621
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 622
        echo "    ";
        // line 623
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 626
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 629
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 632
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 635
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 638
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 641
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "offretravail/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1044 => 641,  1038 => 638,  1032 => 635,  1026 => 632,  1020 => 629,  1014 => 626,  1008 => 623,  1006 => 622,  996 => 621,  983 => 23,  979 => 22,  975 => 21,  971 => 20,  966 => 18,  962 => 17,  958 => 16,  954 => 15,  950 => 14,  946 => 13,  942 => 12,  938 => 11,  933 => 10,  923 => 9,  908 => 644,  905 => 643,  903 => 621,  899 => 620,  894 => 618,  890 => 617,  886 => 616,  882 => 615,  878 => 614,  874 => 613,  870 => 612,  866 => 611,  862 => 610,  858 => 609,  854 => 608,  850 => 607,  842 => 602,  837 => 600,  833 => 599,  829 => 598,  823 => 595,  818 => 593,  814 => 592,  801 => 582,  780 => 563,  778 => 553,  777 => 552,  772 => 549,  757 => 540,  751 => 537,  745 => 534,  739 => 531,  732 => 527,  726 => 524,  718 => 518,  714 => 517,  670 => 475,  652 => 463,  646 => 460,  640 => 457,  633 => 453,  626 => 449,  614 => 439,  610 => 438,  595 => 426,  522 => 356,  457 => 294,  408 => 248,  327 => 170,  320 => 165,  307 => 158,  303 => 157,  299 => 156,  287 => 146,  283 => 145,  273 => 137,  267 => 135,  265 => 134,  260 => 131,  254 => 129,  248 => 127,  245 => 126,  239 => 124,  237 => 123,  233 => 122,  229 => 121,  225 => 120,  221 => 119,  217 => 118,  213 => 117,  206 => 113,  202 => 112,  198 => 111,  194 => 110,  182 => 101,  153 => 75,  149 => 74,  145 => 73,  141 => 72,  137 => 71,  133 => 70,  129 => 69,  111 => 54,  107 => 53,  103 => 52,  99 => 51,  95 => 50,  91 => 49,  85 => 46,  77 => 41,  70 => 37,  57 => 26,  55 => 9,  45 => 1,);
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
    {% block stylesheet %}
        <link href=\"{{ asset('assets2/img/favicon.png') }}\" rel=\"icon\">
        <link href=\"{{ asset('assets2/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">
        <link href=\"{{ asset('assets2/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets2/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets2/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets2/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets2/vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets2/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets2/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-liberty-market.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
        <link rel=\"stylesheet\" href='https://unpkg.com/swiper@7/swiper-bundle.min.css'/>
    {% endblock %}

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js\"></script>

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' integrity=\"
          sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+2QLdMotoRxT1Pi6+nNJWv+UomT6P5
    \" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\"
          rel=\"stylesheet\">

    <link rel=\"stylesheet\" href='https://unpkg.com/swiper/swiper-bundle.min.css'/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/swiper-bundle.min.css') }}\">
    <link rel=\"stylesheet\" href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'
          integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVpDMNlcbiIqYQUf5t8WvVZi0woX1uuK59j5M1Jw21t0\" crossorigin=\"anonymous\">

    <link rel=\"stylesheet\" href=\"{{ asset('assets/css.css') }}\">

    <title>Liberty Template - NFT Item Detail Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-liberty-market.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('/css/templatemo-cyborg-gaming.css') }}\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/swiper@7/swiper-bundle.min.css\"/>
    <!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap \"
          rel=\"stylesheet\">


    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css\" type=\"text/css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css\" type=\"text/css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/elegant-icons.css\" type=\"text/css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.min.css\" type=\"text/css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/magnific-popup.css\" type=\"text/css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/slicknav.min.css\" type=\"text/css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css\" type=\"text/css') }}\">
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
                        {% if(user.type=='Admin') %}
                            <li><a href=\"{{ path('app_dashboard_studiodashboard') }}\">dashboard </a></li>
                        {% endif %}
                        {% if(user.idUser==null) %}
                            <li><a href=\"{{ path('app_allusers_login') }}\">Log In</a></li>
                        {% else %}
                            <li><a href=\"{{ path('app_allusers_logout') }}\">Logout</a></li>
                        {% endif %}
                        <li class=\"nav-item dropdown\">
                            <a id=\"notification-dropdown\" class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                                <i class=\"bi bi-bell\"></i>
                                {% if count > 0 %}
                                    <span id=\"count\" class=\"badge bg-primary badge-number\">{{ count }}</span>
                                {% endif %}

                            </a>

                            <!-- End Notification Icon -->

                            <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">


                                {% for notif in offre %}


                                    <li>
                                        <hr class=\"dropdown-divider\">
                                    </li>

                                    <li class=\"notification-item\">

                                        <i class=\"bi bi-info-circle text-primary\"></i>
                                        <div>
                                            <h4 class=\"name\"> {{ notif.nomartiste }}</h4>
                                            <p class=\"post\"> postuler a l'offre {{ notif.titreoffre }}</p>
                                            <p class=\"post\">{{ notif.datepostuler ? notif.datepostuler|date('Y-m-d H:i:s') : '' }}</p>

                                        </div>
                                    </li>


                                {% endfor %}

                            </ul>
                            <!-- End Notification Dropdown Items -->

                        </li>
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

    <script>

        \$(document).ready(function () {
            // Select the notification dropdown
            var dropdown = \$('#notification-dropdown');

            // Add a click event listener to the notification dropdown
            dropdown.on('click', function () {
                // Send an AJAX request to the Symfony controller to update the entities
                \$.ajax({
                    url: \"{{ path('app_offretravail_notiftrue' ) }}\",
                    type: \"POST\",
                    success: function (response) {
                        // Update the notification count badge
                        var badge = \$('#count');
                        badge.text(\"0\");
                        consol.log('tmchi');

                    },
                    error: function () {
                        // Handle errors
                    }
                });
            });
        });
    </script>

    <script>
        function addHoverEffect() {
            \$.ajax({
                url: 'your-server-url-here',
                success: function (data) {
                    // Loop through the notification items and add the hover effect
                    \$('.notification-item').each(function () {
                        \$(this).hover(
                            function () {
                                \$(this).addClass('hovered');
                            },
                            function () {
                                \$(this).removeClass('hovered');
                            }
                        );
                    });
                }
            });
        }

        \$(document).ready(function () {
            addHoverEffect();
        });

    </script>

    <script>
        function updateNotifications() {
            \$.ajax({
                url: '{{ path('app_offretravail_index') }}',
                type: 'GET',
                success: function (html) {
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(html, 'text/html');
                    const count = doc.querySelector('#count').textContent;
                    document.querySelector('#count').textContent = count;

                    const notifications = doc.querySelectorAll('.notification-item');
                    const notificationsContainer = document.querySelector('.notifications');
                    notificationsContainer.innerHTML = '';

                    notifications.forEach((notification) => {
                        notificationsContainer.appendChild(notification);
                    });
                },
                error: function (error) {
                    console.error(error);
                }
            });
        }

        setInterval(updateNotifications, 2000); // Call every 2 seconds
    </script>


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
                <h6>Les offres d'emplois</h6>
                <h2>Consulter tous les offres</h2>
                <span>Acceuil > <a href=\"#\">Offre d'emplois</a></span>
                <div class=\"buttons\">
                    <div class=\"main-button\">
                        <a href=\"{{ path('app_offretravail_chercherdemande') }}\">Cherchers demandes</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .notification-item:hover {
        background-color: #B0E0E6;
        color: #000000;
    }

    .notification-item {
        background-color: white; /* grey color */
    }


    .section-title {
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
    }

    .notifications {
        max-height: 300px;
        overflow-y: auto;
    }

    .name {
        color: black;
        *font-size: 20px;
    }

    .post {
        color: grey;
        font-size: 15px;
    }

    .dropdown-divider {
        height: 1px;
        margin: 0.5rem 0;
        overflow: hidden;
        background-color: #e9ecef;
    }

</style>

<div class=\"item-details-page\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-lg-6\">
                <div class=\"mini-heading\">
                    <h4 class=\"section-title\">Mes offres</h4></div>

                <a class=\"link-style\" href=\"{{ path('app_dashboard_offres') }}\"><u>Gérer mes offres</u></a>

            </div>


            <div class=\"featured-explore\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"owl-features owl-carousel\">


                                {% for offretravail in offretravailbyid %}




                                    <article class=\"postcardcar dark blue\">
                                        <a class=\"postcardcar__img_link\" href=\"#\">
                                            <img class=\"postcardcar__img\" src=\"https://picsum.photos/1000/1000\"
                                                 alt=\"Image Title\"/>
                                        </a>
                                        <div class=\"postcardcar__text\">
                                            <h1 class=\"postcardcar__title blue\"><a>{{ offretravail.titreoffre }}</a>
                                            </h1>
                                            <div class=\"postcardcar__subtitle small\">
                                                <time datetime=\"2020-05-25 12:00:00\">
                                                    <i class=\"fas fa-calendar-alt mr-2\"></i>{{ offretravail.dateajoutoofre ? offretravail.dateajoutoofre|date('Y-m-d H:i:s') : '' }}
                                                </time>
                                            </div>
                                            <div class=\"postcardcar__bar\"></div>
                                            <div class=\"postcardcar__preview-txt\">{{ offretravail.descriptionoffre }}</div>
                                            <ul class=\"postcardcar__tagbox\">
                                                <li class=\"tag__item\"><i
                                                            class=\"fas fa-tag mr-2\"></i>{{ offretravail.categorieoffre }}
                                                </li>
                                                <li class=\"tag__item\"><i
                                                            class=\"fas fa-clock mr-2\"></i>{{ offretravail.typeoffre }}
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

                                {% for offretravail in offretravails %}
                                    <article class=\"postcard dark blue\">
                                        <a class=\"postcard__img_link\" href=\"#\">
                                            <img class=\"postcard__img\" src=\"https://picsum.photos/1000/1000\"
                                                 alt=\"Image Title\"/>
                                        </a>
                                        <div class=\"postcard__text\">
                                            <h1 class=\"postcard__title blue\"><a>{{ offretravail.titreoffre }}</a></h1>
                                            <div class=\"postcard__subtitle small\">
                                                <time datetime=\"2020-05-25 12:00:00\">
                                                    <i class=\"fas fa-calendar-alt mr-2\"></i>{{ offretravail.dateajoutoofre ? offretravail.dateajoutoofre|date('Y-m-d H:i:s') : '' }}
                                                </time>
                                            </div>
                                            <div class=\"postcard__bar\"></div>
                                            <div class=\"postcard__preview-txt\">{{ offretravail.descriptionoffre }}</div>
                                            <ul class=\"postcard__tagbox\">
                                                <li class=\"tag__item\"><i
                                                            class=\"fas fa-tag mr-2\"></i>{{ offretravail.categorieoffre }}
                                                </li>
                                                <li class=\"tag__item\"><i
                                                            class=\"fas fa-clock mr-2\"></i>{{ offretravail.typeoffre }}
                                                </li>
                                                <li class=\"tag__item\"><i
                                                            class=\"fas fa-clock mr-2\"></i>{{ offretravail.localisationoffre }}
                                                </li>


                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                {% endfor %}
                            </div>
                            <div>

                                {{ knp_pagination_render(
                                    offretravails,
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
<script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
<script src=\"{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}\"></script>

<script src=\"{{ asset('assets/js/isotope.min.js') }}\"></script>
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

<script src=\"{{ asset('https://unpkg.com/swiper/swiper-bundle.min.js') }}\"></script>

</body>

</html>", "offretravail/index.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\offretravail\\index.html.twig");
    }
}
