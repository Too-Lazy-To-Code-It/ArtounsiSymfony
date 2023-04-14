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

/* allusers/users.html.twig */
class __TwigTemplate_f93bdc3a90ea00b65df72a63ceac7450 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "allusers/users.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "allusers/users.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
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
            <img src=\"assets/img/logo.png\" alt=\"\">
            <span class=\"d-none d-lg-block\">NiceAdmin</span>
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
                                <h4>";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logged"]) || array_key_exists("logged", $context) ? $context["logged"] : (function () { throw new RuntimeError('Variable "logged" does not exist.', 165, $this->source); })()), "name", [], "any", false, false, false, 165), "html", null, true);
        echo "</h4>
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
                    <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">";
        // line 215
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logged"]) || array_key_exists("logged", $context) ? $context["logged"] : (function () { throw new RuntimeError('Variable "logged" does not exist.', 215, $this->source); })()), "name", [], "any", false, false, false, 215), "html", null, true);
        echo "</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                    <li class=\"dropdown-header\">
                        <h6>Kevin Anderson</h6>
                        <span>Web Designer</span>
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
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                            <i class=\"bi bi-box-arrow-right\"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"index.html\">
                <i class=\"bi bi-grid\"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-menu-button-wide\"></i><span>Components</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"components-alerts.html\">
                        <i class=\"bi bi-circle\"></i><span>Alerts</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-accordion.html\">
                        <i class=\"bi bi-circle\"></i><span>Accordion</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-badges.html\">
                        <i class=\"bi bi-circle\"></i><span>Badges</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-breadcrumbs.html\">
                        <i class=\"bi bi-circle\"></i><span>Breadcrumbs</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-buttons.html\">
                        <i class=\"bi bi-circle\"></i><span>Buttons</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-cards.html\">
                        <i class=\"bi bi-circle\"></i><span>Cards</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-carousel.html\">
                        <i class=\"bi bi-circle\"></i><span>Carousel</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-list-group.html\">
                        <i class=\"bi bi-circle\"></i><span>List group</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-modal.html\">
                        <i class=\"bi bi-circle\"></i><span>Modal</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-tabs.html\">
                        <i class=\"bi bi-circle\"></i><span>Tabs</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-pagination.html\">
                        <i class=\"bi bi-circle\"></i><span>Pagination</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-progress.html\">
                        <i class=\"bi bi-circle\"></i><span>Progress</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-spinners.html\">
                        <i class=\"bi bi-circle\"></i><span>Spinners</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-tooltips.html\">
                        <i class=\"bi bi-circle\"></i><span>Tooltips</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-journal-text\"></i><span>Forms</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"forms-elements.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Elements</span>
                    </a>
                </li>
                <li>
                    <a href=\"forms-layouts.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Layouts</span>
                    </a>
                </li>
                <li>
                    <a href=\"forms-editors.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Editors</span>
                    </a>
                </li>
                <li>
                    <a href=\"forms-validation.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Validation</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link \" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"tables-nav\" class=\"nav-content collapse show\" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"tables-general.html\">
                        <i class=\"bi bi-circle\"></i><span>General Tables</span>
                    </a>
                </li>
                <li>
                    <a href=\"tables-data.html\" class=\"active\">
                        <i class=\"bi bi-circle\"></i><span>Data Tables</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-bar-chart\"></i><span>Charts</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"charts-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"charts-chartjs.html\">
                        <i class=\"bi bi-circle\"></i><span>Chart.js</span>
                    </a>
                </li>
                <li>
                    <a href=\"charts-apexcharts.html\">
                        <i class=\"bi bi-circle\"></i><span>ApexCharts</span>
                    </a>
                </li>
                <li>
                    <a href=\"charts-echarts.html\">
                        <i class=\"bi bi-circle\"></i><span>ECharts</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Charts Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-gem\"></i><span>Icons</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"icons-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"icons-bootstrap.html\">
                        <i class=\"bi bi-circle\"></i><span>Bootstrap Icons</span>
                    </a>
                </li>
                <li>
                    <a href=\"icons-remix.html\">
                        <i class=\"bi bi-circle\"></i><span>Remix Icons</span>
                    </a>
                </li>
                <li>
                    <a href=\"icons-boxicons.html\">
                        <i class=\"bi bi-circle\"></i><span>Boxicons</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Icons Nav -->

        <li class=\"nav-heading\">Pages</li>

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"users-profile.html\">
                <i class=\"bi bi-person\"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-faq.html\">
                <i class=\"bi bi-question-circle\"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-contact.html\">
                <i class=\"bi bi-envelope\"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-register.html\">
                <i class=\"bi bi-card-list\"></i>
                <span>Register</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-login.html\">
                <i class=\"bi bi-box-arrow-in-right\"></i>
                <span>Login</span>
            </a>
        </li><!-- End Login Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
                <i class=\"bi bi-dash-circle\"></i>
                <span>Error 404</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-blank.html\">
                <i class=\"bi bi-file-earmark\"></i>
                <span>Blank</span>
            </a>
        </li><!-- End Blank Page Nav -->

    </ul>

</aside><!-- End Sidebar-->

<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
        <h1>Data Tables</h1>
        <nav>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                <li class=\"breadcrumb-item\">Tables</li>
                <li class=\"breadcrumb-item active\">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
        <div class=\"row\">
            <div class=\"col-lg-12\">

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Datatables</h5>
                        <p>Add lightweight datatables to your project with using the <a href=\"https://github.com/fiduswriter/Simple-DataTables\" target=\"_blank\">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

                        <!-- Table with stripped rows -->
                        <table class=\"table datatable\">
                            <thead>
                            <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Name</th>
                                <th scope=\"col\">Last Name</th>
                                <th scope=\"col\">Nickname</th>
                                <th scope=\"col\">Type</th>
                                <th scope=\"col\">Email</th>
                                <th scope=\"col\">Nationality</th>
                                <th scope=\"col\">Description</th>
                                <th scope=\"col\">Bio</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 547
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allusers"]) || array_key_exists("allusers", $context) ? $context["allusers"] : (function () { throw new RuntimeError('Variable "allusers" does not exist.', 547, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["alluser"]) {
            // line 548
            echo "                            <tr>
                                <th scope=\"row\">1</th>
                                <td>";
            // line 550
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alluser"], "name", [], "any", false, false, false, 550), "html", null, true);
            echo "</td>
                                <td>";
            // line 551
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alluser"], "LastName", [], "any", false, false, false, 551), "html", null, true);
            echo "</td>
                                <td>";
            // line 552
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alluser"], "nickname", [], "any", false, false, false, 552), "html", null, true);
            echo "</td>
                                <td>";
            // line 553
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alluser"], "type", [], "any", false, false, false, 553), "html", null, true);
            echo "</td>
                                <td>";
            // line 554
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alluser"], "Email", [], "any", false, false, false, 554), "html", null, true);
            echo "</td>
                                <td>";
            // line 555
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alluser"], "nationality", [], "any", false, false, false, 555), "html", null, true);
            echo "</td>
                                <td>";
            // line 556
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alluser"], "description", [], "any", false, false, false, 556), "html", null, true);
            echo "</td>
                                <td>";
            // line 557
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alluser"], "bio", [], "any", false, false, false, 557), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 559
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_show", ["id_user" => twig_get_attribute($this->env, $this->source, $context["alluser"], "id_user", [], "any", false, false, false, 559)]), "html", null, true);
            echo "\">show</a>
                                    <a href=\"";
            // line 560
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_edit", ["id_user" => twig_get_attribute($this->env, $this->source, $context["alluser"], "id_user", [], "any", false, false, false, 560)]), "html", null, true);
            echo "\">edit</a>
                                    <a href=\"";
            // line 561
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_delete", ["id_user" => twig_get_attribute($this->env, $this->source, $context["alluser"], "id_user", [], "any", false, false, false, 561)]), "html", null, true);
            echo "\">delete</a>
                                </td>
                            </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 565
            echo "                                <tr>
                                    <td colspan=\"15\">no records found</td>
                                </tr>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alluser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 570
        echo "
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
        Designed by <a href=\"";
        // line 594
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://bootstrapmade.com/"), "html", null, true);
        echo "\">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->
<script src=\"";
        // line 601
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 603
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 604
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 605
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 606
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 607
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 608
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

<!-- Template Main JS File -->
<script src=\"";
        // line 611
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "allusers/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  766 => 611,  760 => 608,  756 => 607,  752 => 606,  748 => 605,  744 => 604,  740 => 603,  736 => 602,  732 => 601,  722 => 594,  696 => 570,  686 => 565,  677 => 561,  673 => 560,  669 => 559,  664 => 557,  660 => 556,  656 => 555,  652 => 554,  648 => 553,  644 => 552,  640 => 551,  636 => 550,  632 => 548,  627 => 547,  292 => 215,  239 => 165,  101 => 30,  95 => 27,  91 => 26,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  61 => 14,  57 => 13,  43 => 1,);
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
    <link href=\"{{ asset('assets/img/favicon.png') }}\" rel=\"icon\">
    <link href=\"{{ asset('assets/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">

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
            <img src=\"assets/img/logo.png\" alt=\"\">
            <span class=\"d-none d-lg-block\">NiceAdmin</span>
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
                                <h4>{{ logged.name }}</h4>
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
                    <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
                    <span class=\"d-none d-md-block dropdown-toggle ps-2\">{{ logged.name }}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                    <li class=\"dropdown-header\">
                        <h6>Kevin Anderson</h6>
                        <span>Web Designer</span>
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
                        <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                            <i class=\"bi bi-box-arrow-right\"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"index.html\">
                <i class=\"bi bi-grid\"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-menu-button-wide\"></i><span>Components</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"components-alerts.html\">
                        <i class=\"bi bi-circle\"></i><span>Alerts</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-accordion.html\">
                        <i class=\"bi bi-circle\"></i><span>Accordion</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-badges.html\">
                        <i class=\"bi bi-circle\"></i><span>Badges</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-breadcrumbs.html\">
                        <i class=\"bi bi-circle\"></i><span>Breadcrumbs</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-buttons.html\">
                        <i class=\"bi bi-circle\"></i><span>Buttons</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-cards.html\">
                        <i class=\"bi bi-circle\"></i><span>Cards</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-carousel.html\">
                        <i class=\"bi bi-circle\"></i><span>Carousel</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-list-group.html\">
                        <i class=\"bi bi-circle\"></i><span>List group</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-modal.html\">
                        <i class=\"bi bi-circle\"></i><span>Modal</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-tabs.html\">
                        <i class=\"bi bi-circle\"></i><span>Tabs</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-pagination.html\">
                        <i class=\"bi bi-circle\"></i><span>Pagination</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-progress.html\">
                        <i class=\"bi bi-circle\"></i><span>Progress</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-spinners.html\">
                        <i class=\"bi bi-circle\"></i><span>Spinners</span>
                    </a>
                </li>
                <li>
                    <a href=\"components-tooltips.html\">
                        <i class=\"bi bi-circle\"></i><span>Tooltips</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-journal-text\"></i><span>Forms</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"forms-elements.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Elements</span>
                    </a>
                </li>
                <li>
                    <a href=\"forms-layouts.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Layouts</span>
                    </a>
                </li>
                <li>
                    <a href=\"forms-editors.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Editors</span>
                    </a>
                </li>
                <li>
                    <a href=\"forms-validation.html\">
                        <i class=\"bi bi-circle\"></i><span>Form Validation</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link \" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"tables-nav\" class=\"nav-content collapse show\" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"tables-general.html\">
                        <i class=\"bi bi-circle\"></i><span>General Tables</span>
                    </a>
                </li>
                <li>
                    <a href=\"tables-data.html\" class=\"active\">
                        <i class=\"bi bi-circle\"></i><span>Data Tables</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-bar-chart\"></i><span>Charts</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"charts-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"charts-chartjs.html\">
                        <i class=\"bi bi-circle\"></i><span>Chart.js</span>
                    </a>
                </li>
                <li>
                    <a href=\"charts-apexcharts.html\">
                        <i class=\"bi bi-circle\"></i><span>ApexCharts</span>
                    </a>
                </li>
                <li>
                    <a href=\"charts-echarts.html\">
                        <i class=\"bi bi-circle\"></i><span>ECharts</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Charts Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                <i class=\"bi bi-gem\"></i><span>Icons</span><i class=\"bi bi-chevron-down ms-auto\"></i>
            </a>
            <ul id=\"icons-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                <li>
                    <a href=\"icons-bootstrap.html\">
                        <i class=\"bi bi-circle\"></i><span>Bootstrap Icons</span>
                    </a>
                </li>
                <li>
                    <a href=\"icons-remix.html\">
                        <i class=\"bi bi-circle\"></i><span>Remix Icons</span>
                    </a>
                </li>
                <li>
                    <a href=\"icons-boxicons.html\">
                        <i class=\"bi bi-circle\"></i><span>Boxicons</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Icons Nav -->

        <li class=\"nav-heading\">Pages</li>

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"users-profile.html\">
                <i class=\"bi bi-person\"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-faq.html\">
                <i class=\"bi bi-question-circle\"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-contact.html\">
                <i class=\"bi bi-envelope\"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-register.html\">
                <i class=\"bi bi-card-list\"></i>
                <span>Register</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-login.html\">
                <i class=\"bi bi-box-arrow-in-right\"></i>
                <span>Login</span>
            </a>
        </li><!-- End Login Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
                <i class=\"bi bi-dash-circle\"></i>
                <span>Error 404</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

        <li class=\"nav-item\">
            <a class=\"nav-link collapsed\" href=\"pages-blank.html\">
                <i class=\"bi bi-file-earmark\"></i>
                <span>Blank</span>
            </a>
        </li><!-- End Blank Page Nav -->

    </ul>

</aside><!-- End Sidebar-->

<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
        <h1>Data Tables</h1>
        <nav>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                <li class=\"breadcrumb-item\">Tables</li>
                <li class=\"breadcrumb-item active\">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
        <div class=\"row\">
            <div class=\"col-lg-12\">

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Datatables</h5>
                        <p>Add lightweight datatables to your project with using the <a href=\"https://github.com/fiduswriter/Simple-DataTables\" target=\"_blank\">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

                        <!-- Table with stripped rows -->
                        <table class=\"table datatable\">
                            <thead>
                            <tr>
                                <th scope=\"col\">#</th>
                                <th scope=\"col\">Name</th>
                                <th scope=\"col\">Last Name</th>
                                <th scope=\"col\">Nickname</th>
                                <th scope=\"col\">Type</th>
                                <th scope=\"col\">Email</th>
                                <th scope=\"col\">Nationality</th>
                                <th scope=\"col\">Description</th>
                                <th scope=\"col\">Bio</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for alluser in allusers %}
                            <tr>
                                <th scope=\"row\">1</th>
                                <td>{{ alluser.name }}</td>
                                <td>{{ alluser.LastName }}</td>
                                <td>{{ alluser.nickname }}</td>
                                <td>{{ alluser.type }}</td>
                                <td>{{ alluser.Email }}</td>
                                <td>{{ alluser.nationality }}</td>
                                <td>{{ alluser.description }}</td>
                                <td>{{ alluser.bio }}</td>
                                <td>
                                    <a href=\"{{ path('app_allusers_show', {'id_user': alluser.id_user}) }}\">show</a>
                                    <a href=\"{{ path('app_allusers_edit', {'id_user': alluser.id_user}) }}\">edit</a>
                                    <a href=\"{{ path('app_allusers_delete', {'id_user': alluser.id_user}) }}\">delete</a>
                                </td>
                            </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"15\">no records found</td>
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
        Designed by <a href=\"{{ asset('https://bootstrapmade.com/') }}\">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Vendor JS Files -->
<script src=\"{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/chart.js/chart.umd.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/echarts/echarts.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/quill/quill.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/tinymce/tinymce.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/php-email-form/validate.js') }}\"></script>

<!-- Template Main JS File -->
<script src=\"{{ asset('assets/js/main.js') }}\"></script>

</body>

</html>", "allusers/users.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\allusers\\users.html.twig");
    }
}
