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

/* category/new.html.twig */
class __TwigTemplate_107ff8ca4282ad4f50ba3304d7acdb49 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/new.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 29
        echo "



";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 546
        $this->displayBlock('javascripts', $context, $blocks);
        // line 564
        echo "

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"keywords\" content=\"\">

    <!-- Favicons -->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\"
          rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "
    ";
        // line 35
        $this->displayBlock('header', $context, $blocks);
        // line 270
        echo "
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
                    <i class=\"bi bi-menu-button-wide\"></i><span>Components</span><i
                            class=\"bi bi-chevron-down ms-auto\"></i>
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
                <a class=\"nav-link \" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                    <i class=\"bi bi-journal-text\"></i><span>Forms</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                </a>
                <ul id=\"forms-nav\" class=\"nav-content collapse show\" data-bs-parent=\"#sidebar-nav\">
                    <li>
                        <a href=\"forms-elements.html\">
                            <i class=\"bi bi-circle\"></i><span>Form Elements</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"forms-layouts.html\" class=\"active\">
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
                <a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                    <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span><i
                            class=\"bi bi-chevron-down ms-auto\"></i>
                </a>
                <ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                    <li>
                        <a href=\"tables-general.html\">
                            <i class=\"bi bi-circle\"></i><span>General Tables</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"tables-data.html\">
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
            <h1>Form Layouts</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item\">Forms</li>
                    <li class=\"breadcrumb-item active\">Layouts</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class=\"section\" style=\"width: 2400px;\">
            <div class=\"row\">
                <div class=\"col-lg-6\">


                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Add New Category</h5>

                            ";
        // line 531
        echo twig_include($this->env, $context, "category/_form.html.twig");
        echo "
                            <a href=\"";
        // line 532
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_home_page");
        echo "\">back to list</a>
                        </div>
                    </div>


                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 36
        echo "

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

                        <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\"
                           data-bs-toggle=\"dropdown\">
                            <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">K. Anderson</span>
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


    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 546
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 547
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 548
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 549
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 550
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 551
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 552
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 553
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 554
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Main JS File -->
    <script src=\"";
        // line 557
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
    <style>
        .text-center > * + * {
            margin-left: -5px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "category/new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  751 => 557,  745 => 554,  741 => 553,  737 => 552,  733 => 551,  729 => 550,  725 => 549,  721 => 548,  716 => 547,  706 => 546,  463 => 36,  453 => 35,  429 => 532,  425 => 531,  162 => 270,  160 => 35,  157 => 34,  147 => 33,  135 => 27,  129 => 24,  125 => 23,  121 => 22,  117 => 21,  113 => 20,  109 => 19,  105 => 18,  95 => 11,  91 => 10,  81 => 2,  71 => 1,  59 => 564,  57 => 546,  55 => 33,  49 => 29,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"keywords\" content=\"\">

    <!-- Favicons -->
    <link href=\"{{ asset('assets/img/favicon.png') }}\" rel=\"icon\">
    <link href=\"{{ asset('assets/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\"
          rel=\"stylesheet\">

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
{% endblock %}




{% block body %}

    {% block header %}


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

                        <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\"
                           data-bs-toggle=\"dropdown\">
                            <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">K. Anderson</span>
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


    {% endblock %}

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
                    <i class=\"bi bi-menu-button-wide\"></i><span>Components</span><i
                            class=\"bi bi-chevron-down ms-auto\"></i>
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
                <a class=\"nav-link \" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                    <i class=\"bi bi-journal-text\"></i><span>Forms</span><i class=\"bi bi-chevron-down ms-auto\"></i>
                </a>
                <ul id=\"forms-nav\" class=\"nav-content collapse show\" data-bs-parent=\"#sidebar-nav\">
                    <li>
                        <a href=\"forms-elements.html\">
                            <i class=\"bi bi-circle\"></i><span>Form Elements</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"forms-layouts.html\" class=\"active\">
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
                <a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
                    <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span><i
                            class=\"bi bi-chevron-down ms-auto\"></i>
                </a>
                <ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
                    <li>
                        <a href=\"tables-general.html\">
                            <i class=\"bi bi-circle\"></i><span>General Tables</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"tables-data.html\">
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
            <h1>Form Layouts</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item\">Forms</li>
                    <li class=\"breadcrumb-item active\">Layouts</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class=\"section\" style=\"width: 2400px;\">
            <div class=\"row\">
                <div class=\"col-lg-6\">


                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Add New Category</h5>

                            {{ include('category/_form.html.twig') }}
                            <a href=\"{{ path('app_dashboard_home_page') }}\">back to list</a>
                        </div>
                    </div>


                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->

{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/chart.js/chart.umd.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/echarts/echarts.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/quill/quill.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/tinymce/tinymce.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/php-email-form/validate.js') }}\"></script>

    <!-- Template Main JS File -->
    <script src=\"{{ asset('assets/js/main.js') }}\"></script>
    <style>
        .text-center > * + * {
            margin-left: -5px;
        }
    </style>
{% endblock %}


", "category/new.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\category\\new.html.twig");
    }
}
