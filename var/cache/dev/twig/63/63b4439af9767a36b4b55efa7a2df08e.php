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

/* challenge/index.html.twig */
class __TwigTemplate_748ca46afb92a3d4193f614eace46cc8 extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "challenge/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "challenge/index.html.twig"));

        // line 2
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 108
        echo "

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/templatemo-liberty-market.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href='https://unpkg.com/swiper@7/swiper-bundle.min.css'/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
    <div class=\"discover-items\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"buttons\">
                    <div class=\"border-button\">
                        <a href=";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_challenge_calendar");
        echo ">Show Calendar</a>
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"section-heading\">
                        <div class=\"line-dec\"></div>
                        <h2>Discover Some Of Our <em>Challenges</em>.</h2>
                    </div>
                </div>
                <div class=\"col-lg-7\">

                    <form id=\"search-form\" name=\"gs\" method=\"post\" role=\"search\" action=\"#\">
                        <div class=\"row\">
                            <div class=\"col-lg-5\">
                                <fieldset>
                                    ";
        // line 35
        if (((isset($context["keyword"]) || array_key_exists("keyword", $context) ? $context["keyword"] : (function () { throw new RuntimeError('Variable "keyword" does not exist.', 35, $this->source); })()) == "")) {
            // line 36
            echo "                                        <input id=\"searchTxt\" type=\"text\" name=\"keyword\" class=\"searchText\"
                                               placeholder=\"Type Something...\" autocomplete=\"on\">
                                    ";
        } else {
            // line 39
            echo "                                        <input value=";
            echo twig_escape_filter($this->env, (isset($context["keyword"]) || array_key_exists("keyword", $context) ? $context["keyword"] : (function () { throw new RuntimeError('Variable "keyword" does not exist.', 39, $this->source); })()), "html", null, true);
            echo " id=\"searchTxt\" type=\"text\" name=\"keyword\"
                                               class=\"searchText\" placeholder=\"Type Something...\" autocomplete=\"on\">
                                    ";
        }
        // line 42
        echo "                                </fieldset>
                            </div>
                            <div class=\"col-lg-5\">
                                <fieldset>
                                    <select default=\$category name=\"Category\" class=\"form-select\"
                                            aria-label=\"Default select example\" id=\"chooseCategory\"
                                            onchange=\"this.form.click()\">
                                        ";
        // line 49
        if (((isset($context["Categorie"]) || array_key_exists("Categorie", $context) ? $context["Categorie"] : (function () { throw new RuntimeError('Variable "Categorie" does not exist.', 49, $this->source); })()) == null)) {
            // line 50
            echo "                                            <option value=null selected>All Categories</option>
                                        ";
        } else {
            // line 52
            echo "                                            <option value=null>All Categories</option>
                                        ";
        }
        // line 54
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 55
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "getId_category", [], "method", false, false, false, 55) == (isset($context["Categorie"]) || array_key_exists("Categorie", $context) ? $context["Categorie"] : (function () { throw new RuntimeError('Variable "Categorie" does not exist.', 55, $this->source); })()))) {
                // line 56
                echo "                                                <option selected
                                                        value=\"";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getId_category", [], "method", false, false, false, 57), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getNameCategory", [], "method", false, false, false, 57), "html", null, true);
                echo "</option>
                                            ";
            } else {
                // line 59
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getId_category", [], "method", false, false, false, 59), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getNameCategory", [], "method", false, false, false, 59), "html", null, true);
                echo "</option>
                                            ";
            }
            // line 61
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                                    </select>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-2\">
                                <fieldset>
                                    <button class=\"main-button\">Search</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>

                </body>
                </html>

                ";
        // line 77
        $this->loadTemplate("challenge/_content.html.twig", "challenge/index.html.twig", 77)->display($context);
        // line 78
        echo "                ";
        $this->loadTemplate("chat/index.html.twig", "challenge/index.html.twig", 78)->display($context);
        // line 79
        echo "

            </div>
        </div>
    </div></div>
    ";
        // line 84
        $this->displayBlock('javascripts', $context, $blocks);
        // line 106
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/filters.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 85
        echo "        ";
        // line 86
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 89
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 92
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/isotope.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 95
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 98
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tabs.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 101
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popup.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 104
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "challenge/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  298 => 104,  292 => 101,  286 => 98,  280 => 95,  274 => 92,  268 => 89,  262 => 86,  260 => 85,  250 => 84,  237 => 106,  235 => 84,  228 => 79,  225 => 78,  223 => 77,  206 => 62,  200 => 61,  192 => 59,  185 => 57,  182 => 56,  179 => 55,  174 => 54,  170 => 52,  166 => 50,  164 => 49,  155 => 42,  148 => 39,  143 => 36,  141 => 35,  123 => 20,  115 => 14,  105 => 13,  92 => 10,  88 => 9,  84 => 8,  80 => 7,  72 => 3,  62 => 2,  50 => 108,  48 => 13,  46 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %} #}
{% block stylesheet %}
    <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">


    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/templatemo-liberty-market.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
    <link rel=\"stylesheet\" href='https://unpkg.com/swiper@7/swiper-bundle.min.css'/>
{% endblock %}
{% block body %}

    <div class=\"discover-items\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"buttons\">
                    <div class=\"border-button\">
                        <a href={{ path('app_challenge_calendar') }}>Show Calendar</a>
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"section-heading\">
                        <div class=\"line-dec\"></div>
                        <h2>Discover Some Of Our <em>Challenges</em>.</h2>
                    </div>
                </div>
                <div class=\"col-lg-7\">

                    <form id=\"search-form\" name=\"gs\" method=\"post\" role=\"search\" action=\"#\">
                        <div class=\"row\">
                            <div class=\"col-lg-5\">
                                <fieldset>
                                    {% if(keyword==\"\") %}
                                        <input id=\"searchTxt\" type=\"text\" name=\"keyword\" class=\"searchText\"
                                               placeholder=\"Type Something...\" autocomplete=\"on\">
                                    {% else %}
                                        <input value={{ keyword }} id=\"searchTxt\" type=\"text\" name=\"keyword\"
                                               class=\"searchText\" placeholder=\"Type Something...\" autocomplete=\"on\">
                                    {% endif %}
                                </fieldset>
                            </div>
                            <div class=\"col-lg-5\">
                                <fieldset>
                                    <select default=\$category name=\"Category\" class=\"form-select\"
                                            aria-label=\"Default select example\" id=\"chooseCategory\"
                                            onchange=\"this.form.click()\">
                                        {% if(Categorie==null) %}
                                            <option value=null selected>All Categories</option>
                                        {% else %}
                                            <option value=null>All Categories</option>
                                        {% endif %}
                                        {% for category in categories %}
                                            {% if(category.getId_category()==Categorie) %}
                                                <option selected
                                                        value=\"{{ category.getId_category() }}\">{{ category.getNameCategory() }}</option>
                                            {% else %}
                                                <option value=\"{{ category.getId_category() }}\">{{ category.getNameCategory() }}</option>
                                            {% endif %}
                                        {% endfor %}
                                    </select>
                                </fieldset>
                            </div>
                            <div class=\"col-lg-2\">
                                <fieldset>
                                    <button class=\"main-button\">Search</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>

                </body>
                </html>

                {% include \"challenge/_content.html.twig\" %}
                {% include \"chat/index.html.twig\" %}


            </div>
        </div>
    </div></div>
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
    <script src=\"{{ asset('assets/js/filters.js') }}\"></script>
{% endblock %}


", "challenge/index.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\challenge\\index.html.twig");
    }
}
