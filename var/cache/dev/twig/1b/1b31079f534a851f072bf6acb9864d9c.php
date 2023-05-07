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
        // line 390
        echo "

";
        // line 392
        $this->displayBlock('javascripts', $context, $blocks);
        // line 410
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

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

        <aside id=\"sidebar\" class=\"sidebar\">

            <ul class=\"sidebar-nav\" id=\"sidebar-nav\">
                ";
        // line 272
        if (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 272, $this->source); })()), "type", [], "any", false, false, false, 272) == "Admin") || (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 272, $this->source); })()), "type", [], "any", false, false, false, 272) == "Studio"))) {
            // line 273
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"";
            // line 274
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_offres");
            echo "\">
                            <i class=\"bi bi-briefcase\"></i>
                            <span>mes offres</span>
                        </a>
                    </li>
                ";
        }
        // line 280
        echo "                <!-- End Profile Page Nav -->
                ";
        // line 281
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 281, $this->source); })()), "type", [], "any", false, false, false, 281) == "Admin")) {
            // line 282
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"";
            // line 283
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_grosmots_index");
            echo "\">
                            <i class=\"bi bi-person\"></i>
                            <span>gros mots</span>
                        </a>
                    </li>
                ";
        }
        // line 289
        echo "                <!-- End F.A.Q Page Nav -->
                ";
        // line 290
        if (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 290, $this->source); })()), "type", [], "any", false, false, false, 290) == "Admin") || (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 290, $this->source); })()), "type", [], "any", false, false, false, 290) == "Artist"))) {
            // line 291
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link collapsed\" href=\"";
            // line 292
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_demandes");
            echo "\">
                            <i class=\"bi bi-briefcase\"></i>
                            <span>Mes demandes</span>
                        </a>
                    </li>
                ";
        }
        // line 298
        echo "
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"";
        // line 300
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back_new");
        echo "\">
                        <i class=\"bi bi-person\"></i>
                        <span>Nouveau Produit</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"";
        // line 306
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index_back");
        echo "\">
                        <i class=\"bi bi-person\"></i>
                        <span>Challenge</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"";
        // line 312
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index_back");
        echo "\">
                        <i class=\"bi bi-person\"></i>
                        <span>Tutoriel</span>
                    </a>
                </li>

                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"";
        // line 319
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_home_page");
        echo "\">
                        <i class=\"bi bi-person\"></i>
                        <span>Explore</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"";
        // line 325
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back");
        echo "\">
                        <i class=\"bi bi-person\"></i>
                        <span>Shop</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link collapsed\" href=\"";
        // line 331
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_index");
        echo "\">
                        <i class=\"bi bi-person\"></i>
                        <span>Users</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link collapsed\" href=\"";
        // line 337
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ban_index");
        echo "\">
                        <i class=\"bi bi-briefcase\"></i>
                        <span>Bans</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link collapsed\" href=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_edit", ["id_user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 343, $this->source); })()), "id_user", [], "any", false, false, false, 343)]), "html", null, true);
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
        <section class=\"section\" style=\"width: 2400px;\">
            <div class=\"row\">
                <div class=\"col-lg-6\">


                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Add New Category</h5>

                            ";
        // line 374
        echo twig_include($this->env, $context, "category/_form.html.twig");
        echo "
                            <a href=\"";
        // line 375
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

    // line 392
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 393
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Main JS File -->
    <script src=\"";
        // line 403
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
        return array (  666 => 403,  660 => 400,  656 => 399,  652 => 398,  648 => 397,  644 => 396,  640 => 395,  636 => 394,  631 => 393,  621 => 392,  597 => 375,  593 => 374,  559 => 343,  550 => 337,  541 => 331,  532 => 325,  523 => 319,  513 => 312,  504 => 306,  495 => 300,  491 => 298,  482 => 292,  479 => 291,  477 => 290,  474 => 289,  465 => 283,  462 => 282,  460 => 281,  457 => 280,  448 => 274,  445 => 273,  443 => 272,  423 => 255,  383 => 218,  377 => 217,  367 => 212,  362 => 210,  192 => 43,  183 => 36,  164 => 35,  161 => 34,  151 => 33,  139 => 27,  133 => 24,  129 => 23,  125 => 22,  121 => 21,  117 => 20,  113 => 19,  109 => 18,  99 => 11,  95 => 10,  85 => 2,  75 => 1,  63 => 410,  61 => 392,  57 => 390,  55 => 33,  49 => 29,  47 => 1,);
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
