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

/* produits_back/new.html.twig */
class __TwigTemplate_7d5ed13d74aa47503d166e8f78db7366 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits_back/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits_back/new.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.gstatic.com"), "html", null, true);
        echo "\" rel=\"preconnect\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"), "html", null, true);
        echo "\"
          rel=\"stylesheet\">

    <!-- Vendor CSS Files -->

    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->

    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Mar 09 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->


    <style>
        .error-message {
            color: red;

        }

    </style>

</head>


<body>

<!-- ======= Header ======= -->
<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/ARTounsi.png"), "html", null, true);
        echo "\" width=\"50\" height=\"300\" alt=\"\">
            <span class=\"d-none d-lg-block\">ArTounsi</span>

        </a>
        <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <div class=\"search-bar\">
        <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
            <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
            <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class=\"header-nav ms-auto\">
        <ul class=\"d-flex align-items-center\">

            <li class=\"nav-item d-block d-lg-none\">
                <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                    <i class=\"bi bi-search\"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class=\"nav-item dropdown\">

                <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <i class=\"bi bi-bell\"></i>
                    <span class=\"badge bg-primary badge-number\">4</span>
                </a><!-- End Notification Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
                    <li class=\"dropdown-header\">
                        You have 4 new notifications
                        <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-exclamation-circle text-warning\"></i>
                        <div>
                            <h4>Lorem Ipsum</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>30 min. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-x-circle text-danger\"></i>
                        <div>
                            <h4>Atque rerum nesciunt</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>1 hr. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-check-circle text-success\"></i>
                        <div>
                            <h4>Sit rerum fuga</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>2 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-info-circle text-primary\"></i>
                        <div>
                            <h4>Dicta reprehenderit</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>4 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>
                    <li class=\"dropdown-footer\">
                        <a href=\"#\">Show all notifications</a>
                    </li>

                </ul><!-- End Notification Dropdown Items -->

            </li><!-- End Notification Nav -->

            <li class=\"nav-item dropdown\">

                <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <i class=\"bi bi-chat-left-text\"></i>
                    <span class=\"badge bg-success badge-number\">3</span>
                </a><!-- End Messages Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
                    <li class=\"dropdown-header\">
                        You have 3 new messages
                        <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>Maria Hudson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>Anna Nelson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>6 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>David Muldon</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>8 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"dropdown-footer\">
                        <a href=\"#\">Show all messages</a>
                    </li>

                </ul><!-- End Messages Dropdown Items -->

            </li><!-- End Messages Nav -->

            <li class=\"nav-item dropdown pe-3\">

                <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 228, $this->source); })()), "avatar", [], "any", false, false, false, 228))), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">

                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">";
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 230, $this->source); })()), "name", [], "any", false, false, false, 230), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 230, $this->source); })()), "lastName", [], "any", false, false, false, 230), "html", null, true);
        echo "</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                    <li class=\"dropdown-header\">
                        <h6>";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 235, $this->source); })()), "name", [], "any", false, false, false, 235), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 235, $this->source); })()), "lastName", [], "any", false, false, false, 235), "html", null, true);
        echo "</h6>
                        <span>";
        // line 236
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 236, $this->source); })()), "type", [], "any", false, false, false, 236), "html", null, true);
        echo "</span>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                            <i class=\"bi bi-person\"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                            <i class=\"bi bi-gear\"></i>
                            <span>Account Settings</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                            <i class=\"bi bi-question-circle\"></i>
                            <span>Need Help?</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"";
        // line 273
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_logout");
        echo "\">
                            <i class=\"bi bi-box-arrow-right\"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header>

<aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">
        ";
        // line 290
        if (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 290, $this->source); })()), "type", [], "any", false, false, false, 290) == "Admin") || (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 290, $this->source); })()), "type", [], "any", false, false, false, 290) == "Studio"))) {
            // line 291
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
            // line 292
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_offres");
            echo "\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>mes offres</span>
                </a>
            </li>
        ";
        }
        // line 298
        echo "        <!-- End Profile Page Nav -->
        ";
        // line 299
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 299, $this->source); })()), "type", [], "any", false, false, false, 299) == "Admin")) {
            // line 300
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
            // line 301
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_grosmots_index");
            echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>gros mots</span>
                </a>
            </li>
        ";
        }
        // line 307
        echo "        <!-- End F.A.Q Page Nav -->
        ";
        // line 308
        if (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 308, $this->source); })()), "type", [], "any", false, false, false, 308) == "Admin") || (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 308, $this->source); })()), "type", [], "any", false, false, false, 308) == "Artist"))) {
            // line 309
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
            // line 310
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_demandes");
            echo "\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>Mes demandes</span>
                </a>
            </li>
        ";
        }
        // line 316
        echo "
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 318
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back_new");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Nouveau Produit</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 324
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index_back");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Challenge</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 330
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index_back");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Tutoriel</span>
            </a>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 337
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_home_page");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Explore</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 343
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Shop</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 349
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_index");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Users</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 355
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ban_index");
        echo "\">
                <i class=\"bi bi-briefcase\"></i>
                <span>Bans</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_edit", ["id_user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 361, $this->source); })()), "id_user", [], "any", false, false, false, 361)]), "html", null, true);
        echo "\">
                <i class=\"bi bi-person-badge\"></i>
                <span>Profile</span>
            </a>
        </li>
    </ul>


</aside>

<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
        <h1>Form Layouts</h1>
        <nav>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                <li class=\"breadcrumb-item\">Forms</li>
                <li class=\"breadcrumb-item active\">Layouts</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class=\"section\">
        <div class=\"row\">
            <div class=\"col-lg-6\">

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Horizontal Form</h5>

                        <!-- Horizontal Form -->
                        ";
        // line 392
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 392, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                        <div class=\"row mb-3\">

                            <div class=\"col-sm-10\">
                                ";
        // line 396
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 396, $this->source); })()), "nom", [], "any", false, false, false, 396), 'label', ["label" => "Nom du produit"]);
        echo "
                                ";
        // line 397
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 397, $this->source); })()), "nom", [], "any", false, false, false, 397), 'widget', ["attr" => ["placeholder" => "Entrer le nom du produit ici", "autocomplete" => "on"]]);
        echo "</div>
                            <div class=\"error-message\">   ";
        // line 398
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 398, $this->source); })()), "nom", [], "any", false, false, false, 398), 'errors');
        echo "</div>
                        </div>
                    </div>
                    <div class=\"row mb-3\">

                        <div class=\"col-sm-10\">
                            ";
        // line 404
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 404, $this->source); })()), "description", [], "any", false, false, false, 404), 'label', ["label" => "Description du produit"]);
        echo "
                            ";
        // line 405
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 405, $this->source); })()), "description", [], "any", false, false, false, 405), 'widget', ["attr" => ["placeholder" => "décrir le produit ici", "autocomplete" => "on"]]);
        echo "
                            <div class=\"error-message\">";
        // line 406
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 406, $this->source); })()), "description", [], "any", false, false, false, 406), 'errors');
        echo "</div>
                        </div>
                    </div>
                    <div class=\"row mb-3\">

                        <div class=\"col-sm-10\">
                            ";
        // line 412
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 412, $this->source); })()), "prix", [], "any", false, false, false, 412), 'label', ["label" => "Prix du produit"]);
        echo "
                            ";
        // line 413
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 413, $this->source); })()), "prix", [], "any", false, false, false, 413), 'widget', ["attr" => ["placeholder" => "Entrer le prix du produit ici", "autocomplete" => "on"]]);
        echo "</div>
                        <div class=\"error-message\"> ";
        // line 414
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 414, $this->source); })()), "prix", [], "any", false, false, false, 414), 'errors');
        echo "</div>
                    </div>

                    <div class=\"row mb-3\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">Image</label>
                        <div class=\"col-sm-10\">
                            ";
        // line 420
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 420, $this->source); })()), "image", [], "any", false, false, false, 420), 'widget');
        echo "
                            ";
        // line 421
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 421, $this->source); })()), "image", [], "any", false, false, false, 421), 'errors');
        echo "
                        </div>
                    </div>
                    <fieldset class=\"row mb-3\">
                        <div class=\"col-md-4\">
                            ";
        // line 426
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 426, $this->source); })()), "idcategorie", [], "any", false, false, false, 426), 'label', ["label" => "Catégorie du produit"]);
        echo "
                            ";
        // line 427
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 427, $this->source); })()), "idcategorie", [], "any", false, false, false, 427), 'widget', ["attr" => ["placeholder" => "Entrer la catégorie du produit ici", "autocomplete" => "on"]]);
        echo "
                            ";
        // line 428
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 428, $this->source); })()), "idcategorie", [], "any", false, false, false, 428), 'errors');
        echo "
                        </div>
                    </fieldset>
                    <div class=\"row mb-3\">
                        <div class=\"col-sm-10 offset-sm-2\">
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheck1\">
                                <label class=\"form-check-label\" for=\"gridCheck1\">
                                    Example checkbox
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                        <button type=\"reset\" class=\"btn btn-secondary\">Reset</button>
                    </div>
                    ";
        // line 445
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 445, $this->source); })()), 'form_end');
        echo "


                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id=\"footer\" class=\"footer\">
    <div class=\"copyright\">
        © Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i
            class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->
<script src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>


<!-- Template Main JS File -->
<script src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/js/main2.js"), "html", null, true);
        echo "\"></script>


<svg id=\"SvgjsSvg1001\" width=\"2\" height=\"0\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\"
     xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev\"
     style=\"overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;\">
    <defs id=\"SvgjsDefs1002\"></defs>
    <polyline id=\"SvgjsPolyline1003\" points=\"0,0\"></polyline>
    <path id=\"SvgjsPath1004\" d=\"M0 0 \"></path>
</svg>
</body>


</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "produits_back/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  708 => 486,  701 => 482,  697 => 481,  693 => 480,  689 => 479,  685 => 478,  681 => 477,  677 => 476,  673 => 475,  640 => 445,  620 => 428,  616 => 427,  612 => 426,  604 => 421,  600 => 420,  591 => 414,  587 => 413,  583 => 412,  574 => 406,  570 => 405,  566 => 404,  557 => 398,  553 => 397,  549 => 396,  542 => 392,  508 => 361,  499 => 355,  490 => 349,  481 => 343,  472 => 337,  462 => 330,  453 => 324,  444 => 318,  440 => 316,  431 => 310,  428 => 309,  426 => 308,  423 => 307,  414 => 301,  411 => 300,  409 => 299,  406 => 298,  397 => 292,  394 => 291,  392 => 290,  372 => 273,  332 => 236,  326 => 235,  316 => 230,  311 => 228,  141 => 61,  109 => 32,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  70 => 17,  66 => 16,  60 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"{{ asset('assets2/img/favicon.png') }}\" rel=\"icon\">
    <link href=\"{{ asset('assets2/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"{{ asset('https://fonts.gstatic.com') }}\" rel=\"preconnect\">
    <link href=\"{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}\"
          rel=\"stylesheet\">

    <!-- Vendor CSS Files -->

    <link href=\"{{ asset('vendor2/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor2/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor2/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor2/quill/quill.snow.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor2/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor2/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor2/simple-datatables/style.css') }}\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->

    <link href=\"{{ asset('assets2/css/style.css') }}\" rel=\"stylesheet\">

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Mar 09 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->


    <style>
        .error-message {
            color: red;

        }

    </style>

</head>


<body>

<!-- ======= Header ======= -->
<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <img src=\"{{ asset('assets/img/ARTounsi.png') }}\" width=\"50\" height=\"300\" alt=\"\">
            <span class=\"d-none d-lg-block\">ArTounsi</span>

        </a>
        <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <div class=\"search-bar\">
        <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
            <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
            <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class=\"header-nav ms-auto\">
        <ul class=\"d-flex align-items-center\">

            <li class=\"nav-item d-block d-lg-none\">
                <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                    <i class=\"bi bi-search\"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class=\"nav-item dropdown\">

                <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <i class=\"bi bi-bell\"></i>
                    <span class=\"badge bg-primary badge-number\">4</span>
                </a><!-- End Notification Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
                    <li class=\"dropdown-header\">
                        You have 4 new notifications
                        <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-exclamation-circle text-warning\"></i>
                        <div>
                            <h4>Lorem Ipsum</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>30 min. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-x-circle text-danger\"></i>
                        <div>
                            <h4>Atque rerum nesciunt</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>1 hr. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-check-circle text-success\"></i>
                        <div>
                            <h4>Sit rerum fuga</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>2 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"notification-item\">
                        <i class=\"bi bi-info-circle text-primary\"></i>
                        <div>
                            <h4>Dicta reprehenderit</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>4 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>
                    <li class=\"dropdown-footer\">
                        <a href=\"#\">Show all notifications</a>
                    </li>

                </ul><!-- End Notification Dropdown Items -->

            </li><!-- End Notification Nav -->

            <li class=\"nav-item dropdown\">

                <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <i class=\"bi bi-chat-left-text\"></i>
                    <span class=\"badge bg-success badge-number\">3</span>
                </a><!-- End Messages Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
                    <li class=\"dropdown-header\">
                        You have 3 new messages
                        <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>Maria Hudson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>Anna Nelson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>6 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"message-item\">
                        <a href=\"#\">
                            <img src=\"assets/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle\">
                            <div>
                                <h4>David Muldon</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>8 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li class=\"dropdown-footer\">
                        <a href=\"#\">Show all messages</a>
                    </li>

                </ul><!-- End Messages Dropdown Items -->

            </li><!-- End Messages Nav -->

            <li class=\"nav-item dropdown pe-3\">

                <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
                    <img src=\"{{ asset('uploads/Avatars/' ~ user.avatar) }}\" alt=\"Profile\" class=\"rounded-circle\">

                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">{{ user.name }} {{ user.lastName }}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                    <li class=\"dropdown-header\">
                        <h6>{{ user.name }}.{{ user.lastName }}</h6>
                        <span>{{ user.type }}</span>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                            <i class=\"bi bi-person\"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                            <i class=\"bi bi-gear\"></i>
                            <span>Account Settings</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                            <i class=\"bi bi-question-circle\"></i>
                            <span>Need Help?</span>
                        </a>
                    </li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>

                    <li>
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"{{ path('app_allusers_logout') }}\">
                            <i class=\"bi bi-box-arrow-right\"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header>

<aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">
        {% if(user.type=='Admin' or user.type=='Studio') %}
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"{{ path('app_dashboard_offres') }}\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>mes offres</span>
                </a>
            </li>
        {% endif %}
        <!-- End Profile Page Nav -->
        {% if(user.type=='Admin') %}
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"{{ path('app_grosmots_index') }}\">
                    <i class=\"bi bi-person\"></i>
                    <span>gros mots</span>
                </a>
            </li>
        {% endif %}
        <!-- End F.A.Q Page Nav -->
        {% if(user.type=='Admin' or user.type=='Artist') %}
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"{{ path('app_dashboard_demandes') }}\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>Mes demandes</span>
                </a>
            </li>
        {% endif %}

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_produits_back_new') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Nouveau Produit</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_challenge_index_back') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Challenge</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_tutoriel_index_back') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Tutoriel</span>
            </a>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_dashboard_home_page') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Explore</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_produits_back') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Shop</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"{{ path('app_allusers_index') }}\">
                <i class=\"bi bi-person\"></i>
                <span>Users</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"{{ path('app_ban_index') }}\">
                <i class=\"bi bi-briefcase\"></i>
                <span>Bans</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"{{ path('app_allusers_edit',{'id_user': user.id_user}) }}\">
                <i class=\"bi bi-person-badge\"></i>
                <span>Profile</span>
            </a>
        </li>
    </ul>


</aside>

<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
        <h1>Form Layouts</h1>
        <nav>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                <li class=\"breadcrumb-item\">Forms</li>
                <li class=\"breadcrumb-item active\">Layouts</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class=\"section\">
        <div class=\"row\">
            <div class=\"col-lg-6\">

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Horizontal Form</h5>

                        <!-- Horizontal Form -->
                        {{ form_start(form, {'attr': {'novalidate': 'novalidate'} }) }}
                        <div class=\"row mb-3\">

                            <div class=\"col-sm-10\">
                                {{ form_label(form.nom, 'Nom du produit') }}
                                {{ form_widget(form.nom, {'attr': {'placeholder': 'Entrer le nom du produit ici', 'autocomplete': 'on'}}) }}</div>
                            <div class=\"error-message\">   {{ form_errors(form.nom) }}</div>
                        </div>
                    </div>
                    <div class=\"row mb-3\">

                        <div class=\"col-sm-10\">
                            {{ form_label(form.description, 'Description du produit') }}
                            {{ form_widget(form.description, {'attr': {'placeholder': 'décrir le produit ici', 'autocomplete': 'on'}}) }}
                            <div class=\"error-message\">{{ form_errors(form.description) }}</div>
                        </div>
                    </div>
                    <div class=\"row mb-3\">

                        <div class=\"col-sm-10\">
                            {{ form_label(form.prix, 'Prix du produit') }}
                            {{ form_widget(form.prix, {'attr': {'placeholder': 'Entrer le prix du produit ici', 'autocomplete': 'on'}}) }}</div>
                        <div class=\"error-message\"> {{ form_errors(form.prix) }}</div>
                    </div>

                    <div class=\"row mb-3\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">Image</label>
                        <div class=\"col-sm-10\">
                            {{ form_widget(form.image ) }}
                            {{ form_errors(form.image) }}
                        </div>
                    </div>
                    <fieldset class=\"row mb-3\">
                        <div class=\"col-md-4\">
                            {{ form_label(form.idcategorie, 'Catégorie du produit') }}
                            {{ form_widget(form.idcategorie, {'attr': {'placeholder': 'Entrer la catégorie du produit ici', 'autocomplete': 'on'}}) }}
                            {{ form_errors(form.idcategorie) }}
                        </div>
                    </fieldset>
                    <div class=\"row mb-3\">
                        <div class=\"col-sm-10 offset-sm-2\">
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheck1\">
                                <label class=\"form-check-label\" for=\"gridCheck1\">
                                    Example checkbox
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                        <button type=\"reset\" class=\"btn btn-secondary\">Reset</button>
                    </div>
                    {{ form_end(form) }}


                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id=\"footer\" class=\"footer\">
    <div class=\"copyright\">
        © Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i
            class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->
<script src=\"{{ asset('vendor2/apexcharts/apexcharts.min.js') }}\"></script>
<script src=\"{{ asset('vendor2/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('vendor2/chart.js/chart.umd.js') }}\"></script>
<script src=\"{{ asset('vendor2/echarts/echarts.min.js') }}\"></script>
<script src=\"{{ asset('vendor2/quill/quill.min.js') }}\"></script>
<script src=\"{{ asset('vendor2/simple-datatables/simple-datatables.js') }}\"></script>
<script src=\"{{ asset('vendor2/tinymce/tinymce.min.js') }}\"></script>
<script src=\"{{ asset('vendor2/php-email-form/validate.js') }}\"></script>


<!-- Template Main JS File -->
<script src=\"{{ asset('assets2/js/main2.js') }}\"></script>


<svg id=\"SvgjsSvg1001\" width=\"2\" height=\"0\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\"
     xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev\"
     style=\"overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;\">
    <defs id=\"SvgjsDefs1002\"></defs>
    <polyline id=\"SvgjsPolyline1003\" points=\"0,0\"></polyline>
    <path id=\"SvgjsPath1004\" d=\"M0 0 \"></path>
</svg>
</body>


</html>", "produits_back/new.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\produits_back\\new.html.twig");
    }
}
