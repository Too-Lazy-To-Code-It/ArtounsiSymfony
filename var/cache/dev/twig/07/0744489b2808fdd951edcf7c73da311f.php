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

/* dashboard_home_page/edit_Comment_Dash.html.twig */
class __TwigTemplate_58b11c45b3d03d18cb90bddd9317d698 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard_home_page/edit_Comment_Dash.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard_home_page/edit_Comment_Dash.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 29
        echo "



";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 403
        $this->displayBlock('javascripts', $context, $blocks);
        // line 421
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
        // line 271
        echo "
    <!-- ======= Sidebar ======= -->
    <aside id=\"sidebar\" class=\"sidebar\">

        <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
        // line 278
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_offres");
        echo "\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>mes offres</span>
                </a>
            </li>
            <!-- End Profile Page Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
        // line 286
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_grosmots_index");
        echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>gros mots</span>
                </a>
            </li>
            <!-- End F.A.Q Page Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
        // line 294
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_demandes");
        echo "\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>Mes demandes</span>
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"";
        // line 301
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back_new");
        echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>Nouveau Produit</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"";
        // line 307
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index_back");
        echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>Challenge</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"";
        // line 313
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index_back");
        echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>Tutoriel</span>
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"";
        // line 320
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_home_page");
        echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>Explore</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"";
        // line 326
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back");
        echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>Shop</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
        // line 332
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ban_index");
        echo "\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>Bans</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_edit", ["id_user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 338, $this->source); })()), "id_user", [], "any", false, false, false, 338)]), "html", null, true);
        echo "\">
                    <i class=\"bi bi-person-badge\"></i>
                    <span>Profile</span>
                </a>
            </li>

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

                    <div class=\"card w-100\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Horizontal Form</h5>

                            <!-- Horizontal Form -->


                            <div class=\"text-center\">
                                <div style=\"display: inline-block;\">
                                    ";
        // line 373
        echo twig_include($this->env, $context, "category/_form.html.twig", ["button_label" => "Update"]);
        echo "
                                </div>
                                <div style=\"display: inline-block;\">
                                    ";
        // line 376
        echo twig_include($this->env, $context, "category/_delete_form.html.twig");
        echo "

                                </div>
                                <a href=\"";
        // line 379
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_home_page");
        echo "\">back to list</a>
                            </div>


                        </div>
                    </div>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Add New Category</h5>


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
                    <img src=\"";
        // line 43
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
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 210, $this->source); })()), "avatar", [], "any", false, false, false, 210))), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">

                            <span class=\"d-none d-md-block dropdown-toggle ps-2\">";
        // line 212
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 212, $this->source); })()), "name", [], "any", false, false, false, 212), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 212, $this->source); })()), "lastName", [], "any", false, false, false, 212), "html", null, true);
        echo "</span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                            <li class=\"dropdown-header\">
                                <h6>";
        // line 217
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 217, $this->source); })()), "name", [], "any", false, false, false, 217), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 217, $this->source); })()), "lastName", [], "any", false, false, false, 217), "html", null, true);
        echo "</h6>
                                <span>";
        // line 218
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 218, $this->source); })()), "type", [], "any", false, false, false, 218), "html", null, true);
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
        // line 255
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


    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 403
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 404
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Main JS File -->
    <script src=\"";
        // line 414
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
        return "dashboard_home_page/edit_Comment_Dash.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  663 => 414,  657 => 411,  653 => 410,  649 => 409,  645 => 408,  641 => 407,  637 => 406,  633 => 405,  628 => 404,  618 => 403,  592 => 255,  552 => 218,  546 => 217,  536 => 212,  531 => 210,  361 => 43,  352 => 36,  342 => 35,  308 => 379,  302 => 376,  296 => 373,  258 => 338,  249 => 332,  240 => 326,  231 => 320,  221 => 313,  212 => 307,  203 => 301,  193 => 294,  182 => 286,  171 => 278,  162 => 271,  160 => 35,  157 => 34,  147 => 33,  135 => 27,  129 => 24,  125 => 23,  121 => 22,  117 => 21,  113 => 20,  109 => 19,  105 => 18,  95 => 11,  91 => 10,  81 => 2,  71 => 1,  59 => 421,  57 => 403,  55 => 33,  49 => 29,  47 => 1,);
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


    {% endblock %}

    <!-- ======= Sidebar ======= -->
    <aside id=\"sidebar\" class=\"sidebar\">

        <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"{{ path('app_dashboard_offres') }}\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>mes offres</span>
                </a>
            </li>
            <!-- End Profile Page Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"{{ path('app_grosmots_index') }}\">
                    <i class=\"bi bi-person\"></i>
                    <span>gros mots</span>
                </a>
            </li>
            <!-- End F.A.Q Page Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"{{ path('app_dashboard_demandes') }}\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>Mes demandes</span>
                </a>
            </li>

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

                    <div class=\"card w-100\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Horizontal Form</h5>

                            <!-- Horizontal Form -->


                            <div class=\"text-center\">
                                <div style=\"display: inline-block;\">
                                    {{ include('category/_form.html.twig', {'button_label': 'Update'}) }}
                                </div>
                                <div style=\"display: inline-block;\">
                                    {{ include('category/_delete_form.html.twig') }}

                                </div>
                                <a href=\"{{ path('app_dashboard_home_page') }}\">back to list</a>
                            </div>


                        </div>
                    </div>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Add New Category</h5>


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


", "dashboard_home_page/edit_Comment_Dash.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\dashboard_home_page\\edit_Comment_Dash.html.twig");
    }
}
