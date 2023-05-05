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

/* produits_back/index.html.twig */
class __TwigTemplate_a24c82c12eaed08bb6044d67cc493ea9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits_back/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits_back/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Tables / Data - NiceAdmin Bootstrap Template</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.gstatic.com"), "html", null, true);
        echo "\" rel=\"preconnect\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"), "html", null, true);
        echo "\"
          rel=\"stylesheet\">

    <!-- Vendor CSS Files -->

    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->

    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Mar 09 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
        <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <img src=\"";
        // line 51
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
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 218, $this->source); })()), "avatar", [], "any", false, false, false, 218))), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">

                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">";
        // line 220
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 220, $this->source); })()), "name", [], "any", false, false, false, 220), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 220, $this->source); })()), "lastName", [], "any", false, false, false, 220), "html", null, true);
        echo "</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                    <li class=\"dropdown-header\">
                        <h6>";
        // line 225
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 225, $this->source); })()), "name", [], "any", false, false, false, 225), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 225, $this->source); })()), "lastName", [], "any", false, false, false, 225), "html", null, true);
        echo "</h6>
                        <span>";
        // line 226
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 226, $this->source); })()), "type", [], "any", false, false, false, 226), "html", null, true);
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
        // line 263
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
        // line 280
        if (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 280, $this->source); })()), "type", [], "any", false, false, false, 280) == "Admin") || (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 280, $this->source); })()), "type", [], "any", false, false, false, 280) == "Studio"))) {
            // line 281
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
            // line 282
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_offres");
            echo "\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>mes offres</span>
                </a>
            </li>
        ";
        }
        // line 288
        echo "        <!-- End Profile Page Nav -->
        ";
        // line 289
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 289, $this->source); })()), "type", [], "any", false, false, false, 289) == "Admin")) {
            // line 290
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
            // line 291
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_grosmots_index");
            echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>gros mots</span>
                </a>
            </li>
        ";
        }
        // line 297
        echo "        <!-- End F.A.Q Page Nav -->
        ";
        // line 298
        if (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 298, $this->source); })()), "type", [], "any", false, false, false, 298) == "Admin") || (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 298, $this->source); })()), "type", [], "any", false, false, false, 298) == "Artist"))) {
            // line 299
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
            // line 300
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_demandes");
            echo "\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>Mes demandes</span>
                </a>
            </li>
        ";
        }
        // line 306
        echo "
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 308
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back_new");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Nouveau Produit</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 314
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index_back");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Challenge</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 320
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index_back");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Tutoriel</span>
            </a>
        </li>

        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 327
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_home_page");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Explore</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 333
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Shop</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 339
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_index");
        echo "\">
                <i class=\"bi bi-person\"></i>
                <span>Users</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 345
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ban_index");
        echo "\">
                <i class=\"bi bi-briefcase\"></i>
                <span>Bans</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_edit", ["id_user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 351, $this->source); })()), "id_user", [], "any", false, false, false, 351)]), "html", null, true);
        echo "\">
                <i class=\"bi bi-person-badge\"></i>
                <span>Profile</span>
            </a>
        </li>
    </ul>


</aside>
<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
        <h1>SHOP</h1>
        <nav>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                <li class=\"breadcrumb-item\">Tables</li>
                <li class=\"breadcrumb-item active\">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <style>
        .ligne {
            display: flex;
            justify-content: space-between;
            margin: 20px;

        }

        .bg-gradient-primary {
            background-color: #007bff;
            border-radius: 10px;
            color: #fff;
            padding: 20px;
        }

        .table td {
            font-size: 14px;
            font-family: 'Open Sans', sans-serif; /* Change to your desired font family */
        }

        .table th {
            font-size: 16px;
            font-family: 'Open Sans', sans-serif; /* Change to your desired font family */
            font-weight: bold;
            color: #555555;
        }

        button {
            color: white;
            border: none;
            background-color: white;
        }


    </style>
    <section class=\"section\">
        <div class=\"row\">
            <div class=\"col-lg-12\">

                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
                            <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                                <h4 class=\"text-white text-capitalize ps-31\">SHOP</h4>
                            </div>
                        </div>

                        <!-- Table with stripped rows -->
                        <table class=\"table datatable\">
                            <thead>
                            <tr>
                                <th scope=\"col\" style=\"width: 150px;\">idproduit</th>
                                <th scope=\"col\" style=\"width: 150px;\">iduser</th>
                                <th scope=\"col\" style=\"width: 150px;\">Categorie</th>
                                <th scope=\"col\" style=\"width: 150px;\">Nom du produit</th>
                                <th scope=\"col\" style=\"width: 150px;\">Description</th>
                                <th scope=\"col\" style=\"width: 150px;\">Image</th>
                                <th scope=\"col\" style=\"width: 150px;\">Prix</th>
                                <th scope=\"col\" style=\"width: 150px;\">Date d'ajout</th>
                                <th scope=\"col\" style=\"width: 150px;\">Spprimer</th>
                                <th scope=\"col\" style=\"width: 150px;\">Modifier</th>

                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 437
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 437, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 438
            echo "                                <tr>
                                    <th scope=\"row\">";
            // line 439
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "idproduit", [], "any", false, false, false, 439), "html", null, true);
            echo "</th>
                                    <th scope=\"row\">";
            // line 440
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "iduser", [], "any", false, false, false, 440), "html", null, true);
            echo "</th>
                                    <th scope=\"row\">";
            // line 441
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "idcategorie", [], "any", false, false, false, 441), "html", null, true);
            echo "</th>
                                    <td>";
            // line 442
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 442), "html", null, true);
            echo "</td>
                                    <td>";
            // line 443
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 443), "html", null, true);
            echo "</td>
                                    <td>";
            // line 444
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 444), "html", null, true);
            echo "</td>
                                    <td>";
            // line 445
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 445), "html", null, true);
            echo "</td>
                                    <td>";
            // line 446
            ((twig_get_attribute($this->env, $this->source, $context["produit"], "dateajout", [], "any", false, false, false, 446)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "dateajout", [], "any", false, false, false, 446), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>

                                    <td> ";
            // line 448
            echo twig_include($this->env, $context, "produits_back/_delete_form.html.twig");
            echo "</td>
                                    <td>
                                        <a href=\"";
            // line 450
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back_edit", ["idproduit" => twig_get_attribute($this->env, $this->source, $context["produit"], "idproduit", [], "any", false, false, false, 450)]), "html", null, true);
            echo "\">Modifier</a>
                                    </td>
                                </tr>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 454
        echo "                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id=\"footer\" class=\"footer\">
    <div class=\"copyright\">
        &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
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
        // line 485
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor2/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>


<!-- Template Main JS File -->
<script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/js/main2.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "produits_back/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  731 => 496,  724 => 492,  720 => 491,  716 => 490,  712 => 489,  708 => 488,  704 => 487,  700 => 486,  696 => 485,  663 => 454,  645 => 450,  640 => 448,  635 => 446,  631 => 445,  627 => 444,  623 => 443,  619 => 442,  615 => 441,  611 => 440,  607 => 439,  604 => 438,  587 => 437,  498 => 351,  489 => 345,  480 => 339,  471 => 333,  462 => 327,  452 => 320,  443 => 314,  434 => 308,  430 => 306,  421 => 300,  418 => 299,  416 => 298,  413 => 297,  404 => 291,  401 => 290,  399 => 289,  396 => 288,  387 => 282,  384 => 281,  382 => 280,  362 => 263,  322 => 226,  316 => 225,  306 => 220,  301 => 218,  131 => 51,  110 => 33,  103 => 29,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  83 => 24,  79 => 23,  71 => 18,  67 => 17,  61 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Tables / Data - NiceAdmin Bootstrap Template</title>
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
        <h1>SHOP</h1>
        <nav>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                <li class=\"breadcrumb-item\">Tables</li>
                <li class=\"breadcrumb-item active\">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <style>
        .ligne {
            display: flex;
            justify-content: space-between;
            margin: 20px;

        }

        .bg-gradient-primary {
            background-color: #007bff;
            border-radius: 10px;
            color: #fff;
            padding: 20px;
        }

        .table td {
            font-size: 14px;
            font-family: 'Open Sans', sans-serif; /* Change to your desired font family */
        }

        .table th {
            font-size: 16px;
            font-family: 'Open Sans', sans-serif; /* Change to your desired font family */
            font-weight: bold;
            color: #555555;
        }

        button {
            color: white;
            border: none;
            background-color: white;
        }


    </style>
    <section class=\"section\">
        <div class=\"row\">
            <div class=\"col-lg-12\">

                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
                            <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                                <h4 class=\"text-white text-capitalize ps-31\">SHOP</h4>
                            </div>
                        </div>

                        <!-- Table with stripped rows -->
                        <table class=\"table datatable\">
                            <thead>
                            <tr>
                                <th scope=\"col\" style=\"width: 150px;\">idproduit</th>
                                <th scope=\"col\" style=\"width: 150px;\">iduser</th>
                                <th scope=\"col\" style=\"width: 150px;\">Categorie</th>
                                <th scope=\"col\" style=\"width: 150px;\">Nom du produit</th>
                                <th scope=\"col\" style=\"width: 150px;\">Description</th>
                                <th scope=\"col\" style=\"width: 150px;\">Image</th>
                                <th scope=\"col\" style=\"width: 150px;\">Prix</th>
                                <th scope=\"col\" style=\"width: 150px;\">Date d'ajout</th>
                                <th scope=\"col\" style=\"width: 150px;\">Spprimer</th>
                                <th scope=\"col\" style=\"width: 150px;\">Modifier</th>

                            </tr>
                            </thead>
                            <tbody>
                            {% for produit in produits %}
                                <tr>
                                    <th scope=\"row\">{{ produit.idproduit }}</th>
                                    <th scope=\"row\">{{ produit.iduser }}</th>
                                    <th scope=\"row\">{{ produit.idcategorie }}</th>
                                    <td>{{ produit.nom }}</td>
                                    <td>{{ produit.description }}</td>
                                    <td>{{ produit.image }}</td>
                                    <td>{{ produit.prix }}</td>
                                    <td>{{ produit.dateajout ? produit.dateajout|date('Y-m-d H:i:s') : '' }}</td>

                                    <td> {{ include('produits_back/_delete_form.html.twig') }}</td>
                                    <td>
                                        <a href=\"{{ path('app_produits_back_edit', {'idproduit': produit.idproduit}) }}\">Modifier</a>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id=\"footer\" class=\"footer\">
    <div class=\"copyright\">
        &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
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

</body>

</html>", "produits_back/index.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\produits_back\\index.html.twig");
    }
}
