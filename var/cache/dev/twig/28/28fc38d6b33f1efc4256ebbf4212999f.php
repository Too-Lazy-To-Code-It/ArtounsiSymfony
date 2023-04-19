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

/* category/edit.html.twig */
class __TwigTemplate_b661a8b6bd9f6e205c432c0f1f9276dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/edit.html.twig"));

        // line 1
        echo "



";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 32
        echo "



";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 409
        $this->displayBlock('javascripts', $context, $blocks);
        // line 427
        echo "

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"keywords\" content=\"\">

    <!-- Favicons -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\" rel=\"stylesheet\">

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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "
    ";
        // line 38
        $this->displayBlock('header', $context, $blocks);
        // line 272
        echo "
    <!-- ======= Sidebar ======= -->
    <aside id=\"sidebar\" class=\"sidebar\">

        <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

        <li class=\"nav-item\">
            <a class=\"nav-link \"  href=\"";
        // line 279
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_home_page");
        echo "\">
            <i class=\"bi bi-grid\"></i>
            <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

    


    

        

        

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
        <section class=\"section\"style=\"width: 2400px;\">
        <div class=\"row\">
            <div class=\"col-lg-6\">

            <div class=\"card\">
                <div class=\"card-body\">
                <h5 class=\"card-title\">Edit Category</h5>
                    
                        ";
        // line 370
        echo "                        ";
        // line 371
        echo "                        
                            ";
        // line 372
        echo twig_include($this->env, $context, "category/_form.html.twig", ["button_label" => "Update"]);
        echo "
                        ";
        // line 374
        echo "                        ";
        // line 375
        echo "                            ";
        echo twig_include($this->env, $context, "category/_delete_form.html.twig");
        echo "
                            
                        ";
        // line 378
        echo "                        
                        
                    ";
        // line 381
        echo "                    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_home_page");
        echo "\">back to list</a>


                    


                </div>
            </div>
            <div class=\"card\">
            
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

    // line 38
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 39
        echo "

        <!-- ======= Header ======= -->
    <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

        <div class=\"d-flex align-items-center justify-content-between\">
        <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_home_page");
        echo "\" class=\"logo d-flex align-items-center\">
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

            <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
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

    // line 409
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 410
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Main JS File -->
    <script src=\"";
        // line 420
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
        return "category/edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  629 => 420,  623 => 417,  619 => 416,  615 => 415,  611 => 414,  607 => 413,  603 => 412,  599 => 411,  594 => 410,  584 => 409,  347 => 45,  339 => 39,  329 => 38,  290 => 381,  286 => 378,  280 => 375,  278 => 374,  274 => 372,  271 => 371,  269 => 370,  176 => 279,  167 => 272,  165 => 38,  162 => 37,  152 => 36,  140 => 30,  134 => 27,  130 => 26,  126 => 25,  122 => 24,  118 => 23,  114 => 22,  110 => 21,  101 => 15,  97 => 14,  87 => 6,  77 => 5,  65 => 427,  63 => 409,  61 => 36,  55 => 32,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("



{% block head %}
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"keywords\" content=\"\">

    <!-- Favicons -->
    <link href=\"{{ asset('assets/img/favicon.png') }}\" rel=\"icon\">
    <link href=\"{{ asset('assets/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\" rel=\"stylesheet\">

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
        <a href=\"{{ path('app_dashboard_home_page') }}\" class=\"logo d-flex align-items-center\">
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

            <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
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
            <a class=\"nav-link \"  href=\"{{ path('app_dashboard_home_page') }}\">
            <i class=\"bi bi-grid\"></i>
            <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

    


    

        

        

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
        <section class=\"section\"style=\"width: 2400px;\">
        <div class=\"row\">
            <div class=\"col-lg-6\">

            <div class=\"card\">
                <div class=\"card-body\">
                <h5 class=\"card-title\">Edit Category</h5>
                    
                        {# <div class=\"text-center\"> #}
                        {# <div style=\"display: inline-block;\"> #}
                        
                            {{ include('category/_form.html.twig', {'button_label': 'Update'}) }}
                        {# </div> #}
                        {# <div style=\"display: inline-block;\"> #}
                            {{ include('category/_delete_form.html.twig') }}
                            
                        {# </div> #}
                        
                        
                    {# </div> #}
                    <a href=\"{{ path('app_dashboard_home_page') }}\">back to list</a>


                    


                </div>
            </div>
            <div class=\"card\">
            
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


", "category/edit.html.twig", "C:\\Users\\amine\\ArtounsiSymfonyy\\templates\\category\\edit.html.twig");
    }
}
