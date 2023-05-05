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

/* dashboard_home_page/index.html.twig */
class __TwigTemplate_381d29ea56f5c2053ce00f557d32dd80 extends Template
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
            'stylesheet' => [$this, 'block_stylesheet'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard_home_page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard_home_page/index.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 48
        echo "



";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        
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
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"), "html", null, true);
        echo "\"
          rel=\"stylesheet\">

    <title>Liberty NFT Marketplace - Explore Listing Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Additional CSS Files -->
    ";
        // line 15
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 22
        echo "
    <!-- Favicons -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Mar 09 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->

    <!-- Vendor CSS Files -->
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 16
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.css"), "html", null, true);
        echo "\"/>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <!-- ======= Header ======= -->
    <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

        <div class=\"d-flex align-items-center justify-content-between\">
            <a href=\"index.html\" class=\"logo d-flex align-items-center\">
                <img src=\"";
        // line 58
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
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/Avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 225, $this->source); })()), "avatar", [], "any", false, false, false, 225))), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">

                        <span class=\"d-none d-md-block dropdown-toggle ps-2\">";
        // line 227
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 227, $this->source); })()), "name", [], "any", false, false, false, 227), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 227, $this->source); })()), "lastName", [], "any", false, false, false, 227), "html", null, true);
        echo "</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
                        <li class=\"dropdown-header\">
                            <h6>";
        // line 232
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 232, $this->source); })()), "name", [], "any", false, false, false, 232), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 232, $this->source); })()), "lastName", [], "any", false, false, false, 232), "html", null, true);
        echo "</h6>
                            <span>";
        // line 233
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 233, $this->source); })()), "type", [], "any", false, false, false, 233), "html", null, true);
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
        // line 270
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

    <!-- ======= Sidebar ======= -->
    <aside id=\"sidebar\" class=\"sidebar\">

        <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
        // line 290
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_offres");
        echo "\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>mes offres</span>
                </a>
            </li>
            <!-- End Profile Page Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
        // line 298
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_grosmots_index");
        echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>gros mots</span>
                </a>
            </li>
            <!-- End F.A.Q Page Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
        // line 306
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_demandes");
        echo "\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>Mes demandes</span>
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"";
        // line 313
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back_new");
        echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>Nouveau Produit</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"";
        // line 319
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_index_back");
        echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>Challenge</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"";
        // line 325
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_index_back");
        echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>Tutoriel</span>
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"";
        // line 332
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_home_page");
        echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>Explore</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"";
        // line 338
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits_back");
        echo "\">
                    <i class=\"bi bi-person\"></i>
                    <span>Shop</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
        // line 344
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ban_index");
        echo "\">
                    <i class=\"bi bi-briefcase\"></i>
                    <span>Bans</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_edit", ["id_user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 350, $this->source); })()), "id_user", [], "any", false, false, false, 350)]), "html", null, true);
        echo "\">
                    <i class=\"bi bi-person-badge\"></i>
                    <span>Profile</span>
                </a>
            </li>

        </ul>

    </aside><!-- End Sidebar-->

    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Dashboard</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item active\">Dashboard</li>
                </ol>
            </nav>

        </div><!-- End Page Title -->

        <section class=\"section dashboard\">
            <div class=\"row\">

                <!-- Left side columns -->
                <div class=\"col-lg-8\">
                    <div class=\"row\">

                        <!-- Sales Card -->
                        <div class=\"col-xxl-4 col-md-6\">
                            <div class=\"card info-card sales-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Sales <span>| Today</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-cart\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>145</h6>
                                            <span class=\"text-success small pt-1 fw-bold\">12%</span> <span
                                                    class=\"text-muted small pt-2 ps-1\">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class=\"col-xxl-4 col-md-6\">
                            <div class=\"card info-card revenue-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Revenue <span>| This Month</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-currency-dollar\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>\$3,264</h6>
                                            <span class=\"text-success small pt-1 fw-bold\">8%</span> <span
                                                    class=\"text-muted small pt-2 ps-1\">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class=\"col-xxl-4 col-xl-12\">

                            <div class=\"card info-card customers-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Customers <span>| This Year</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-people\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>1244</h6>
                                            <span class=\"text-danger small pt-1 fw-bold\">12%</span> <span
                                                    class=\"text-muted small pt-2 ps-1\">decrease</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->
                        <!-- Reports -->
                        <div class=\"col-12\">
                            <div class=\"card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Reports <span>/Today</span></h5>

                                    <!-- Line Chart -->
                                    <div id=\"reportsChart\"></div>


                                    <!-- End Line Chart -->

                                </div>

                            </div>
                        </div><!-- End Reports -->


                        <!-- Recent Sales -->
                        <div class=\"col-12\">
                            <div class=\"card recent-sales overflow-auto\">


                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Category</h5>

                                    <table class=\"table table-borderless datatable\">
                                        <thead>
                                        <tr>
                                            <th scope=\"col\">Categories</th>
                                            <th scope=\"col\">Edit</th>
                                            <th scope=\"col\">Delete</th>
                                            <th scope=\"col\">Add</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 539
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 539, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 540
            echo "                                            <tr>
                                                <td>";
            // line 541
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</td>
                                                <td>
                                                    <a href=\"";
            // line 543
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_edit", ["id_category" => twig_get_attribute($this->env, $this->source, $context["category"], "getId_category", [], "any", false, false, false, 543)]), "html", null, true);
            echo "\">Edit</a>
                                                </td>
                                                <td>";
            // line 545
            echo twig_include($this->env, $context, "dashboard_home_page/_delete_Category_form.html.twig");
            echo "</td>
                                                <td>
                                                    <li><a href=\"";
            // line 547
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_new");
            echo "\">Add New Category</a>
                                                    </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 556
        echo "                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                        <!-- Top Selling -->
                        <div class=\"col-12\">
                            <div class=\"card top-selling overflow-auto\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" id=\"filter-menu\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\" data-value=\"today\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\" data-value=\"this-month\">This Month</a>
                                        </li>
                                        <li><a class=\"dropdown-item\" href=\"#\" data-value=\"this-year\">This Year</a></li>

                                    </ul>
                                </div>

                                <div class=\"card-body pb-0\">
                                    <h5 class=\"card-title\" id=\"card-title\">Publications | Today</h5>

                                    <table class=\"table table-borderless\">
                                        <thead>
                                        <tr>
                                            <th scope=\"col\">Preview</th>
                                            <th scope=\"col\">Title</th>
                                            <th scope=\"col\">Description</th>
                                            <th scope=\"col\">Artist</th>
                                            <th scope=\"col\">Date</th>
                                            <th scope=\"col\">Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 598
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 598, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 599
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["post"], "postType", [], "any", false, false, false, 599) == "portfolio")) {
                // line 600
                echo "                                                <tr>
                                                    <th scope=\"row\"><a href=\"#\"><img src=\"";
                // line 601
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "media", [], "any", false, false, false, 601), "html", null, true);
                echo "\" alt=\"\"></a>
                                                    </th>
                                                    <td>
                                                        <a href=\"";
                // line 604
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_details_Dashboard", ["id_post" => twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "any", false, false, false, 604)]), "html", null, true);
                echo "\"
                                                           class=\"text-primary fw-bold\">";
                // line 605
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titleP", [], "any", false, false, false, 605), "html", null, true);
                echo "</a></td>
                                                    ";
                // line 607
                echo "                                                    <td class=\"fw-bold\">
                                                        ";
                // line 608
                $context["description"] = twig_get_attribute($this->env, $this->source, $context["post"], "getDescriptionP", [], "any", false, false, false, 608);
                // line 609
                echo "                                                        ";
                if ((twig_length_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 609, $this->source); })())) > 30)) {
                    // line 610
                    echo "                                                            <span id=\"description-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 610), "html", null, true);
                    echo "\"
                                                                  class=\"short-description\">";
                    // line 611
                    echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 611, $this->source); })()), 0, 30), "html", null, true);
                    echo "...</span>
                                                            <a href=\"#\" class=\"show-more\" data-post-id=\"";
                    // line 612
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 612), "html", null, true);
                    echo "\">See
                                                                more</a>
                                                            <span id=\"full-description-";
                    // line 614
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 614), "html", null, true);
                    echo "\"
                                                                  class=\"full-description d-none\">";
                    // line 615
                    echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 615, $this->source); })()), "html", null, true);
                    echo "</span>
                                                            <a href=\"#\" class=\"show-less d-none\"
                                                               data-post-id=\"";
                    // line 617
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 617), "html", null, true);
                    echo "\">See less</a>
                                                        ";
                } else {
                    // line 619
                    echo "                                                            ";
                    echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 619, $this->source); })()), "html", null, true);
                    echo "
                                                        ";
                }
                // line 621
                echo "                                                    </td>


                                                    <td>";
                // line 624
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getUserName", [], "any", false, false, false, 624), "html", null, true);
                echo "</td>

                                                    <td class=\"fw-bold post-date\">";
                // line 626
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getDateP", [], "any", false, false, false, 626), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 627
                echo twig_include($this->env, $context, "dashboard_home_page/_delete_post_form.html.twig");
                echo "</td>
                                                </tr>
                                            ";
            }
            // line 630
            echo "                                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 631
        echo "                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Top Selling -->
                        <!-- Top Selling -->
                        <div class=\"col-12\">
                            <div class=\"card top-selling overflow-auto\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" id=\"filter-menu\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\" data-value=\"today\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\" data-value=\"this-month\">This Month</a>
                                        </li>
                                        <li><a class=\"dropdown-item\" href=\"#\" data-value=\"this-year\">This Year</a></li>

                                    </ul>
                                </div>

                                <div class=\"card-body pb-0\">
                                    <h5 class=\"card-title\" id=\"card-title\">Blog | Today</h5>

                                    <table class=\"table table-borderless\">
                                        <thead>
                                        <tr>
                                            <th scope=\"col\">Preview</th>
                                            <th scope=\"col\">Title</th>
                                            <th scope=\"col\">Description</th>
                                            <th scope=\"col\">Artist</th>
                                            <th scope=\"col\">Date</th>
                                            <th scope=\"col\">Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 672
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 672, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 673
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["post"], "postType", [], "any", false, false, false, 673) == "blog")) {
                // line 674
                echo "                                                <tr>
                                                    <th scope=\"row\"><a href=\"#\"><img src=\"";
                // line 675
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "media", [], "any", false, false, false, 675), "html", null, true);
                echo "\" alt=\"\"></a>
                                                    </th>
                                                    <td>
                                                        <a href=\"";
                // line 678
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_details_Dashboard", ["id_post" => twig_get_attribute($this->env, $this->source, $context["post"], "getId", [], "any", false, false, false, 678)]), "html", null, true);
                echo "\"
                                                           class=\"text-primary fw-bold\">";
                // line 679
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titleP", [], "any", false, false, false, 679), "html", null, true);
                echo "</a></td>
                                                    ";
                // line 681
                echo "                                                    <td class=\"fw-bold\">
                                                        ";
                // line 682
                $context["description"] = twig_get_attribute($this->env, $this->source, $context["post"], "getDescriptionP", [], "any", false, false, false, 682);
                // line 683
                echo "                                                        ";
                if ((twig_length_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 683, $this->source); })())) > 30)) {
                    // line 684
                    echo "                                                            <span id=\"description-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 684), "html", null, true);
                    echo "\"
                                                                  class=\"short-description\">";
                    // line 685
                    echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 685, $this->source); })()), 0, 30), "html", null, true);
                    echo "...</span>
                                                            <a href=\"#\" class=\"show-more\" data-post-id=\"";
                    // line 686
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 686), "html", null, true);
                    echo "\">See
                                                                more</a>
                                                            <span id=\"full-description-";
                    // line 688
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 688), "html", null, true);
                    echo "\"
                                                                  class=\"full-description d-none\">";
                    // line 689
                    echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 689, $this->source); })()), "html", null, true);
                    echo "</span>
                                                            <a href=\"#\" class=\"show-less d-none\"
                                                               data-post-id=\"";
                    // line 691
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 691), "html", null, true);
                    echo "\">See less</a>
                                                        ";
                } else {
                    // line 693
                    echo "                                                            ";
                    echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 693, $this->source); })()), "html", null, true);
                    echo "
                                                        ";
                }
                // line 695
                echo "                                                    </td>


                                                    <td>";
                // line 698
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getUserName", [], "any", false, false, false, 698), "html", null, true);
                echo "</td>

                                                    <td class=\"fw-bold post-date\">";
                // line 700
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getDateP", [], "any", false, false, false, 700), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 701
                echo twig_include($this->env, $context, "dashboard_home_page/_delete_post_form.html.twig");
                echo "</td>
                                                </tr>
                                            ";
            }
            // line 704
            echo "                                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 705
        echo "                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Top Selling -->

                    </div>
                </div><!-- End Left side columns -->


            </div><!-- End Right side columns -->

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
            ";
        // line 737
        echo "        </div>
    </footer><!-- End Footer -->

    <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i
                class=\"bi bi-arrow-up-short\"></i></a>

    ";
        // line 743
        $this->displayBlock('javascripts', $context, $blocks);
        // line 864
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 743
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 744
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 745
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 746
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 747
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 748
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 749
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 750
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 751
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://unpkg.com/swiper@7/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$(document).ready(function () {
                \$('.show-more').click(function (e) {
                    e.preventDefault();
                    var postId = \$(this).data('post-id');
                    \$('#description-' + postId).addClass('d-none');
                    \$('#full-description-' + postId).removeClass('d-none');
                    \$('.show-more[data-post-id=\"' + postId + '\"]').addClass('d-none');
                    \$('.show-less[data-post-id=\"' + postId + '\"]').removeClass('d-none');
                });

                \$('.show-less').click(function (e) {
                    e.preventDefault();
                    var postId = \$(this).data('post-id');
                    \$('#full-description-' + postId).addClass('d-none');
                    \$('#description-' + postId).removeClass('d-none');
                    \$('.show-less[data-post-id=\"' + postId + '\"]').addClass('d-none');
                    \$('.show-more[data-post-id=\"' + postId + '\"]').removeClass('d-none');
                });
            });
        </script>
        <script>
            // Get the dropdown menu and the card title
            const filterMenu = document.querySelector('#filter-menu');
            const cardTitle = document.querySelector('#card-title');

            // Add a click event listener to the dropdown menu
            filterMenu.addEventListener('click', function (event) {
                // Prevent the default link behavior
                event.preventDefault();

                // Get the selected filter value
                const filterValue = event.target.dataset.value;

                // Modify the card title with the selected filter value
                if (filterValue === 'today') {
                    cardTitle.textContent = 'Publications | Today';
                } else if (filterValue === 'this-month') {
                    cardTitle.textContent = 'Publications | This Month';
                } else if (filterValue === 'this-year') {
                    cardTitle.textContent = 'Publications | This Year';
                }

                // Filter the posts based on the selected filter value
                const posts = document.querySelectorAll('.top-selling tbody tr');
                posts.forEach(function (post) {
                    const postDate = post.querySelector('.post-date').textContent;
                    const filterDate = new Date();
                    if (filterValue === 'today') {
                        filterDate.setDate(filterDate.getDate() - 1);
                    } else if (filterValue === 'this-month') {
                        filterDate.setMonth(filterDate.getMonth() - 1);
                    } else if (filterValue === 'this-year') {
                        filterDate.setFullYear(filterDate.getFullYear() - 1);
                    }
                    const postDateObj = new Date(postDate);
                    if (postDateObj >= filterDate) {
                        post.style.display = 'table-row';
                    } else {
                        post.style.display = 'none';
                    }
                });
            });
        </script>

        <script>
            // Get the filter label and the blog post items
            const filterLabel = document.getElementById('filter-label');
            const blogItems = document.querySelectorAll('.news .post-item');

            // Add click event listener to each filter option
            document.querySelectorAll('.dropdown-item').forEach(filterOption => {
                filterOption.addEventListener('click', event => {
                    event.preventDefault();

                    // Get the time range corresponding to the clicked filter option
                    const range = filterOption.dataset.range;

                    // Update the filter label text
                    filterLabel.textContent = `| \${filterOption.textContent}`;

                    // Loop through each blog post item and show/hide based on the time range
                    blogItems.forEach(blogItem => {
                        const postDate = new Date(blogItem.querySelector('.post-date').textContent);
                        let showItem = false;

                        switch (range) {
                            case 'today':
                                const today = new Date();
                                showItem = postDate.getDate() === today.getDate() &&
                                    postDate.getMonth() === today.getMonth() &&
                                    postDate.getFullYear() === today.getFullYear();
                                break;
                            case 'month':
                                const thisMonth = new Date();
                                showItem = postDate.getMonth() === thisMonth.getMonth() &&
                                    postDate.getFullYear() === thisMonth.getFullYear();
                                break;
                            case 'year':
                                const thisYear = new Date();
                                showItem = postDate.getFullYear() === thisYear.getFullYear();
                                break;
                        }

                        blogItem.style.display = showItem ? 'block' : 'none';
                    });
                });
            });
        </script>
        <script src=\"";
        // line 861
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/reports.js"), "html", null, true);
        echo "\"></script>
        <script></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dashboard_home_page/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1329 => 861,  1216 => 751,  1212 => 750,  1208 => 749,  1204 => 748,  1200 => 747,  1196 => 746,  1192 => 745,  1187 => 744,  1177 => 743,  1166 => 864,  1164 => 743,  1156 => 737,  1123 => 705,  1109 => 704,  1103 => 701,  1099 => 700,  1094 => 698,  1089 => 695,  1083 => 693,  1078 => 691,  1073 => 689,  1069 => 688,  1064 => 686,  1060 => 685,  1055 => 684,  1052 => 683,  1050 => 682,  1047 => 681,  1043 => 679,  1039 => 678,  1033 => 675,  1030 => 674,  1027 => 673,  1010 => 672,  967 => 631,  953 => 630,  947 => 627,  943 => 626,  938 => 624,  933 => 621,  927 => 619,  922 => 617,  917 => 615,  913 => 614,  908 => 612,  904 => 611,  899 => 610,  896 => 609,  894 => 608,  891 => 607,  887 => 605,  883 => 604,  877 => 601,  874 => 600,  871 => 599,  854 => 598,  810 => 556,  787 => 547,  782 => 545,  777 => 543,  772 => 541,  769 => 540,  752 => 539,  560 => 350,  551 => 344,  542 => 338,  533 => 332,  523 => 325,  514 => 319,  505 => 313,  495 => 306,  484 => 298,  473 => 290,  450 => 270,  410 => 233,  404 => 232,  394 => 227,  389 => 225,  219 => 58,  212 => 53,  202 => 52,  190 => 20,  186 => 19,  182 => 18,  178 => 17,  173 => 16,  163 => 15,  150 => 45,  144 => 42,  140 => 41,  136 => 40,  132 => 39,  128 => 38,  124 => 37,  120 => 36,  106 => 25,  102 => 24,  98 => 22,  96 => 15,  90 => 12,  81 => 6,  75 => 2,  65 => 1,  55 => 52,  49 => 48,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"templatemo\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"{{ asset('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap') }}\"
          rel=\"stylesheet\">

    <title>Liberty NFT Marketplace - Explore Listing Page</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Additional CSS Files -->
    {% block stylesheet %}
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-liberty-market.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('https://unpkg.com/swiper@7/swiper-bundle.min.css') }}\"/>
    {% endblock %}

    <!-- Favicons -->
    <link href=\"{{ asset('assets/img/favicon.png') }}\" rel=\"icon\">
    <link href=\"{{ asset('assets/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Mar 09 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->

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
            <h1>Dashboard</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item active\">Dashboard</li>
                </ol>
            </nav>

        </div><!-- End Page Title -->

        <section class=\"section dashboard\">
            <div class=\"row\">

                <!-- Left side columns -->
                <div class=\"col-lg-8\">
                    <div class=\"row\">

                        <!-- Sales Card -->
                        <div class=\"col-xxl-4 col-md-6\">
                            <div class=\"card info-card sales-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Sales <span>| Today</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-cart\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>145</h6>
                                            <span class=\"text-success small pt-1 fw-bold\">12%</span> <span
                                                    class=\"text-muted small pt-2 ps-1\">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class=\"col-xxl-4 col-md-6\">
                            <div class=\"card info-card revenue-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Revenue <span>| This Month</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-currency-dollar\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>\$3,264</h6>
                                            <span class=\"text-success small pt-1 fw-bold\">8%</span> <span
                                                    class=\"text-muted small pt-2 ps-1\">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class=\"col-xxl-4 col-xl-12\">

                            <div class=\"card info-card customers-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Customers <span>| This Year</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-people\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>1244</h6>
                                            <span class=\"text-danger small pt-1 fw-bold\">12%</span> <span
                                                    class=\"text-muted small pt-2 ps-1\">decrease</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->
                        <!-- Reports -->
                        <div class=\"col-12\">
                            <div class=\"card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Reports <span>/Today</span></h5>

                                    <!-- Line Chart -->
                                    <div id=\"reportsChart\"></div>


                                    <!-- End Line Chart -->

                                </div>

                            </div>
                        </div><!-- End Reports -->


                        <!-- Recent Sales -->
                        <div class=\"col-12\">
                            <div class=\"card recent-sales overflow-auto\">


                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Category</h5>

                                    <table class=\"table table-borderless datatable\">
                                        <thead>
                                        <tr>
                                            <th scope=\"col\">Categories</th>
                                            <th scope=\"col\">Edit</th>
                                            <th scope=\"col\">Delete</th>
                                            <th scope=\"col\">Add</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for category in categories %}
                                            <tr>
                                                <td>{{ category }}</td>
                                                <td>
                                                    <a href=\"{{ path('app_category_edit', {'id_category': category.getId_category}) }}\">Edit</a>
                                                </td>
                                                <td>{{ include('dashboard_home_page/_delete_Category_form.html.twig') }}</td>
                                                <td>
                                                    <li><a href=\"{{ path('app_category_new') }}\">Add New Category</a>
                                                    </li>
                                                </td>


                                            </tr>


                                        {% endfor %}
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                        <!-- Top Selling -->
                        <div class=\"col-12\">
                            <div class=\"card top-selling overflow-auto\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" id=\"filter-menu\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\" data-value=\"today\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\" data-value=\"this-month\">This Month</a>
                                        </li>
                                        <li><a class=\"dropdown-item\" href=\"#\" data-value=\"this-year\">This Year</a></li>

                                    </ul>
                                </div>

                                <div class=\"card-body pb-0\">
                                    <h5 class=\"card-title\" id=\"card-title\">Publications | Today</h5>

                                    <table class=\"table table-borderless\">
                                        <thead>
                                        <tr>
                                            <th scope=\"col\">Preview</th>
                                            <th scope=\"col\">Title</th>
                                            <th scope=\"col\">Description</th>
                                            <th scope=\"col\">Artist</th>
                                            <th scope=\"col\">Date</th>
                                            <th scope=\"col\">Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for post in posts %}
                                            {% if post.postType == 'portfolio' %}
                                                <tr>
                                                    <th scope=\"row\"><a href=\"#\"><img src=\"{{ post.media }}\" alt=\"\"></a>
                                                    </th>
                                                    <td>
                                                        <a href=\"{{ path('app_post_details_Dashboard', {'id_post': post.getId}) }}\"
                                                           class=\"text-primary fw-bold\">{{ post.titleP }}</a></td>
                                                    {# <a >View Details</a> #}
                                                    <td class=\"fw-bold\">
                                                        {% set description = post.getDescriptionP %}
                                                        {% if description|length > 30 %}
                                                            <span id=\"description-{{ post.id }}\"
                                                                  class=\"short-description\">{{ description|slice(0, 30) }}...</span>
                                                            <a href=\"#\" class=\"show-more\" data-post-id=\"{{ post.id }}\">See
                                                                more</a>
                                                            <span id=\"full-description-{{ post.id }}\"
                                                                  class=\"full-description d-none\">{{ description }}</span>
                                                            <a href=\"#\" class=\"show-less d-none\"
                                                               data-post-id=\"{{ post.id }}\">See less</a>
                                                        {% else %}
                                                            {{ description }}
                                                        {% endif %}
                                                    </td>


                                                    <td>{{ post.getUserName }}</td>

                                                    <td class=\"fw-bold post-date\">{{ post.getDateP|date('Y-m-d H:i:s') }}</td>
                                                    <td>{{ include('dashboard_home_page/_delete_post_form.html.twig') }}</td>
                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Top Selling -->
                        <!-- Top Selling -->
                        <div class=\"col-12\">
                            <div class=\"card top-selling overflow-auto\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\" id=\"filter-menu\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\" data-value=\"today\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\" data-value=\"this-month\">This Month</a>
                                        </li>
                                        <li><a class=\"dropdown-item\" href=\"#\" data-value=\"this-year\">This Year</a></li>

                                    </ul>
                                </div>

                                <div class=\"card-body pb-0\">
                                    <h5 class=\"card-title\" id=\"card-title\">Blog | Today</h5>

                                    <table class=\"table table-borderless\">
                                        <thead>
                                        <tr>
                                            <th scope=\"col\">Preview</th>
                                            <th scope=\"col\">Title</th>
                                            <th scope=\"col\">Description</th>
                                            <th scope=\"col\">Artist</th>
                                            <th scope=\"col\">Date</th>
                                            <th scope=\"col\">Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for post in posts %}
                                            {% if post.postType == 'blog' %}
                                                <tr>
                                                    <th scope=\"row\"><a href=\"#\"><img src=\"{{ post.media }}\" alt=\"\"></a>
                                                    </th>
                                                    <td>
                                                        <a href=\"{{ path('app_post_details_Dashboard', {'id_post': post.getId}) }}\"
                                                           class=\"text-primary fw-bold\">{{ post.titleP }}</a></td>
                                                    {# <a >View Details</a> #}
                                                    <td class=\"fw-bold\">
                                                        {% set description = post.getDescriptionP %}
                                                        {% if description|length > 30 %}
                                                            <span id=\"description-{{ post.id }}\"
                                                                  class=\"short-description\">{{ description|slice(0, 30) }}...</span>
                                                            <a href=\"#\" class=\"show-more\" data-post-id=\"{{ post.id }}\">See
                                                                more</a>
                                                            <span id=\"full-description-{{ post.id }}\"
                                                                  class=\"full-description d-none\">{{ description }}</span>
                                                            <a href=\"#\" class=\"show-less d-none\"
                                                               data-post-id=\"{{ post.id }}\">See less</a>
                                                        {% else %}
                                                            {{ description }}
                                                        {% endif %}
                                                    </td>


                                                    <td>{{ post.getUserName }}</td>

                                                    <td class=\"fw-bold post-date\">{{ post.getDateP|date('Y-m-d H:i:s') }}</td>
                                                    <td>{{ include('dashboard_home_page/_delete_post_form.html.twig') }}</td>
                                                </tr>
                                            {% endif %}
                                        {% endfor %}
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Top Selling -->

                    </div>
                </div><!-- End Left side columns -->


            </div><!-- End Right side columns -->

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
            {# Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a> #}
        </div>
    </footer><!-- End Footer -->

    <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i
                class=\"bi bi-arrow-up-short\"></i></a>

    {% block javascripts %}
        <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('assets/js/isotope.min.js') }}\"></script>
        <script src=\"{{ asset('assets/js/owl-carousel.js') }}\"></script>
        <script src=\"{{ asset('assets/js/tabs.js') }}\"></script>
        <script src=\"{{ asset('assets/js/popup.js') }}\"></script>
        <script src=\"{{ asset('assets/js/custom.js') }}\"></script>
        <script src=\"{{ asset('https://unpkg.com/swiper@7/swiper-bundle.min.js') }}\"></script>
        <script>
            \$(document).ready(function () {
                \$('.show-more').click(function (e) {
                    e.preventDefault();
                    var postId = \$(this).data('post-id');
                    \$('#description-' + postId).addClass('d-none');
                    \$('#full-description-' + postId).removeClass('d-none');
                    \$('.show-more[data-post-id=\"' + postId + '\"]').addClass('d-none');
                    \$('.show-less[data-post-id=\"' + postId + '\"]').removeClass('d-none');
                });

                \$('.show-less').click(function (e) {
                    e.preventDefault();
                    var postId = \$(this).data('post-id');
                    \$('#full-description-' + postId).addClass('d-none');
                    \$('#description-' + postId).removeClass('d-none');
                    \$('.show-less[data-post-id=\"' + postId + '\"]').addClass('d-none');
                    \$('.show-more[data-post-id=\"' + postId + '\"]').removeClass('d-none');
                });
            });
        </script>
        <script>
            // Get the dropdown menu and the card title
            const filterMenu = document.querySelector('#filter-menu');
            const cardTitle = document.querySelector('#card-title');

            // Add a click event listener to the dropdown menu
            filterMenu.addEventListener('click', function (event) {
                // Prevent the default link behavior
                event.preventDefault();

                // Get the selected filter value
                const filterValue = event.target.dataset.value;

                // Modify the card title with the selected filter value
                if (filterValue === 'today') {
                    cardTitle.textContent = 'Publications | Today';
                } else if (filterValue === 'this-month') {
                    cardTitle.textContent = 'Publications | This Month';
                } else if (filterValue === 'this-year') {
                    cardTitle.textContent = 'Publications | This Year';
                }

                // Filter the posts based on the selected filter value
                const posts = document.querySelectorAll('.top-selling tbody tr');
                posts.forEach(function (post) {
                    const postDate = post.querySelector('.post-date').textContent;
                    const filterDate = new Date();
                    if (filterValue === 'today') {
                        filterDate.setDate(filterDate.getDate() - 1);
                    } else if (filterValue === 'this-month') {
                        filterDate.setMonth(filterDate.getMonth() - 1);
                    } else if (filterValue === 'this-year') {
                        filterDate.setFullYear(filterDate.getFullYear() - 1);
                    }
                    const postDateObj = new Date(postDate);
                    if (postDateObj >= filterDate) {
                        post.style.display = 'table-row';
                    } else {
                        post.style.display = 'none';
                    }
                });
            });
        </script>

        <script>
            // Get the filter label and the blog post items
            const filterLabel = document.getElementById('filter-label');
            const blogItems = document.querySelectorAll('.news .post-item');

            // Add click event listener to each filter option
            document.querySelectorAll('.dropdown-item').forEach(filterOption => {
                filterOption.addEventListener('click', event => {
                    event.preventDefault();

                    // Get the time range corresponding to the clicked filter option
                    const range = filterOption.dataset.range;

                    // Update the filter label text
                    filterLabel.textContent = `| \${filterOption.textContent}`;

                    // Loop through each blog post item and show/hide based on the time range
                    blogItems.forEach(blogItem => {
                        const postDate = new Date(blogItem.querySelector('.post-date').textContent);
                        let showItem = false;

                        switch (range) {
                            case 'today':
                                const today = new Date();
                                showItem = postDate.getDate() === today.getDate() &&
                                    postDate.getMonth() === today.getMonth() &&
                                    postDate.getFullYear() === today.getFullYear();
                                break;
                            case 'month':
                                const thisMonth = new Date();
                                showItem = postDate.getMonth() === thisMonth.getMonth() &&
                                    postDate.getFullYear() === thisMonth.getFullYear();
                                break;
                            case 'year':
                                const thisYear = new Date();
                                showItem = postDate.getFullYear() === thisYear.getFullYear();
                                break;
                        }

                        blogItem.style.display = showItem ? 'block' : 'none';
                    });
                });
            });
        </script>
        <script src=\"{{ asset('build/js/reports.js') }}\"></script>
        <script></script>
    {% endblock %}

{% endblock %}
", "dashboard_home_page/index.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\dashboard_home_page\\index.html.twig");
    }
}
