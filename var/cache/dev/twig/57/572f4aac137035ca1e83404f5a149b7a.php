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

/* tutoriel/index.html.twig */
class __TwigTemplate_c1e0121857408f09968ff672f4ce255a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tutoriel/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Tutoriel index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 5
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <style>

        ul {
            list-style: none;
            color: #684CDB;

        }

        .list {
            width: 100%;
            background-color: #25252F;
            border-radius: 5px 5px 5px 5px;
            margin-top: 5px;
            padding-bottom: 5px;
            margin-left: 10px;
            position: absolute;
            z-index: 2;
            width: 200px;
        }

        .list-items {
            padding: 15px 5px;
        }

        .list-items:hover {
            background-color: #494242;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "    <div class=\"page-heading\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h6>Tutoriels</h6>
                    <h2>Discover Best Tutoriels</h2>
                    <span>Tutoriels > <a href=\"#\">Explore</a></span>
                </div>
            </div>
        </div>
        <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_favoris");
        echo "\"><span>show favoris</span></a>
        <div class=\"featured-explore\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"owl-features owl-carousel\">

                            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["toptutoriels"]) || array_key_exists("toptutoriels", $context) ? $context["toptutoriels"] : (function () { throw new RuntimeError('Variable "toptutoriels" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 54
            echo "                                <div class=\"item\">
                                    <div class=\"thumb\">
                                        <img src=";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["t"], "pathimg", [], "any", false, false, false, 56))), "html", null, true);
            echo " alt=\"\"
                                             style=\"border-radius: 20px;height: 500px;\">
                                        <div class=\"hover-effect\">
                                            <div class=\"content\">
                                                <h4>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "title", [], "any", false, false, false, 60), "html", null, true);
            echo "</h4>
                                                <span class=\"author\">
                        <img src=\"assets/images/author.jpg\" alt=\"\"
                             style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                        <h6>made by ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "getIdArtist", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), "html", null, true);
            echo "<br><a
                                    href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_show", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, $context["t"], "getId", [], "method", false, false, false, 65)]), "html", null, true);
            echo "\">show</a></h6>
                      </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"discover-items\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"section-heading\">
                        <div class=\"line-dec\"></div>
                        <h2>Discover Our <em>Tutoriels</em>.</h2>
                    </div>
                </div>
                <div class=\"col-lg-7\">

                    <form id=\"search-form\" autocomplete=\"off\" name=\"gs\" method=\"post\" role=\"search\" action=\"#\">
                        <div class=\"row\">
                            <div class=\"col-lg-5\">
                                <fieldset>
                                    ";
        // line 95
        if (((isset($context["keyword"]) || array_key_exists("keyword", $context) ? $context["keyword"] : (function () { throw new RuntimeError('Variable "keyword" does not exist.', 95, $this->source); })()) == "")) {
            // line 96
            echo "                                        <div>
                                            <input id=\"searchtxt\" autocomplete=\"off\" type=\"text\" name=\"keyword\"
                                                   class=\"searchText\" placeholder=\"Type Something...\">
                                        </div>
                                        <ul class=\"list\"></ul>

                                    ";
        } else {
            // line 103
            echo "                                        <div>
                                            <input value=";
            // line 104
            echo twig_escape_filter($this->env, (isset($context["keyword"]) || array_key_exists("keyword", $context) ? $context["keyword"] : (function () { throw new RuntimeError('Variable "keyword" does not exist.', 104, $this->source); })()), "html", null, true);
            echo " id=\"searchtxt\" autocomplete=\"off\" type=\"text\"
                                                   name=\"keyword\" class=\"searchText\" placeholder=\"Type Something...\">
                                        </div>
                                        <ul class=\"list\"></ul>
                                    ";
        }
        // line 109
        echo "                                </fieldset>
                            </div>
                            <div class=\"col-lg-5\">
                                <fieldset>
                                    <select default=\$category name=\"Category\" class=\"form-select\"
                                            aria-label=\"Default select example\" id=\"chooseCategory\"
                                            onchange=\"this.form.click()\">
                                        ";
        // line 116
        if (((isset($context["Categorie"]) || array_key_exists("Categorie", $context) ? $context["Categorie"] : (function () { throw new RuntimeError('Variable "Categorie" does not exist.', 116, $this->source); })()) == null)) {
            // line 117
            echo "                                            <option value=null selected>All Categories</option>
                                        ";
        } else {
            // line 119
            echo "                                            <option value=null>All Categories</option>
                                        ";
        }
        // line 121
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 121, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 122
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "getId_category", [], "method", false, false, false, 122) == (isset($context["Categorie"]) || array_key_exists("Categorie", $context) ? $context["Categorie"] : (function () { throw new RuntimeError('Variable "Categorie" does not exist.', 122, $this->source); })()))) {
                // line 123
                echo "                                                <option selected
                                                        value=\"";
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getId_category", [], "method", false, false, false, 124), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getNameCategory", [], "method", false, false, false, 124), "html", null, true);
                echo "</option>
                                            ";
            } else {
                // line 126
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getId_category", [], "method", false, false, false, 126), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getNameCategory", [], "method", false, false, false, 126), "html", null, true);
                echo "</option>
                                            ";
            }
            // line 128
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
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

                ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tutoriels"]) || array_key_exists("tutoriels", $context) ? $context["tutoriels"] : (function () { throw new RuntimeError('Variable "tutoriels" does not exist.', 141, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 142
            echo "                    <div class=\"col-lg-3\">
                        <div class=\"item\">
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                <span class=\"author\">
                ";
            // line 147
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "getIdCategorie", [], "method", false, false, false, 147), "getNameCategory", [], "method", false, false, false, 147) == "2d")) {
                // line 148
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/2d.png"), "html", null, true);
                echo "\" alt=\"\"
                         style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                ";
            }
            // line 151
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "getIdCategorie", [], "method", false, false, false, 151), "getNameCategory", [], "method", false, false, false, 151) == "3d")) {
                // line 152
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/3d.png"), "html", null, true);
                echo "\" alt=\"\"
                             style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                    ";
            }
            // line 155
            echo "                </span>
                                    <img src=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("http://localhost/img/" . twig_get_attribute($this->env, $this->source, $context["t"], "pathimg", [], "any", false, false, false, 156))), "html", null, true);
            echo "\" alt=\"\"
                                         style=\"border-radius: 20px; max-width: 500px; height: 250px; \">
                                    <h4>";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "title", [], "any", false, false, false, 158), "html", null, true);
            echo "</h4>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"line-dec\"></div>
                                    <div class=\"row\">
                                        <div class=\"col-6\">
                                            <span>Level: <br> <strong>";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "niveau", [], "any", false, false, false, 164), "html", null, true);
            echo "</strong></span>
                                        </div>
                                        <div class=\"col-6\">
                                            ";
            // line 167
            $context["lastupdate"] = twig_date_converter($this->env, "01-01-1999");
            // line 168
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["t"], "videos", [], "any", false, false, false, 168));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 169
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["v"], "getDateP", [], "method", false, false, false, 169) > (isset($context["lastupdate"]) || array_key_exists("lastupdate", $context) ? $context["lastupdate"] : (function () { throw new RuntimeError('Variable "lastupdate" does not exist.', 169, $this->source); })()))) {
                    // line 170
                    echo "                                                    ";
                    $context["lastupdate"] = twig_get_attribute($this->env, $this->source, $context["v"], "getDateP", [], "method", false, false, false, 170);
                    // line 171
                    echo "                                                ";
                }
                // line 172
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "                                            ";
            if (((isset($context["lastupdate"]) || array_key_exists("lastupdate", $context) ? $context["lastupdate"] : (function () { throw new RuntimeError('Variable "lastupdate" does not exist.', 173, $this->source); })()) == twig_date_converter($this->env, "01-01-1999"))) {
                // line 174
                echo "                                                ";
                $context["lastupdate"] = twig_date_converter($this->env, "01-01-2023");
                // line 175
                echo "                                            ";
            }
            // line 176
            echo "                                            <span>Last Update: <br> <strong>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["lastupdate"]) || array_key_exists("lastupdate", $context) ? $context["lastupdate"] : (function () { throw new RuntimeError('Variable "lastupdate" does not exist.', 176, $this->source); })()), "d M Y"), "html", null, true);
            echo " </strong></span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"main-button\">
                                        <a href=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tutoriel_show", ["id_tutoriel" => twig_get_attribute($this->env, $this->source, $context["t"], "getId", [], "method", false, false, false, 182)]), "html", null, true);
            echo "\">show</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "                ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env,         // line 190
(isset($context["tutoriels"]) || array_key_exists("tutoriels", $context) ? $context["tutoriels"] : (function () { throw new RuntimeError('Variable "tutoriels" does not exist.', 190, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", ["queryParam1" => "param1 value", "queryParam2" => "param2 value"], ["align" => "center"]);
        // line 199
        echo "

            </div>
        </div>
    </div>
    </div>
    ";
        // line 205
        $context["tab"] = [];
        // line 206
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tutoriels"]) || array_key_exists("tutoriels", $context) ? $context["tutoriels"] : (function () { throw new RuntimeError('Variable "tutoriels" does not exist.', 206, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 207
            echo "        ";
            $context["tab"] = twig_array_merge((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 207, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["t"], "title", [], "any", false, false, false, 207)]);
            // line 208
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 211
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 212
        echo "      ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
      <script>
          \$.ajax({
              type: 'GET',
              url: 'http://127.0.0.1:8000/tutoriel/show/names',
              success: function (response) {
                  // Handle the response from the controller
                  let names = response.names;

                  let sortedNames = names.sort();
                  let input = document.getElementById(\"searchtxt\");
                  tab = [];
                  input.addEventListener(\"keyup\", (e) => {
                      //loop through above array
                      removeElements();
                      sortedNames.forEach(i => {
                          //initially remove all elements (so if user erases a letter or adds new letter then clean previous out)
                          if (
                              i.toLowerCase().startsWith(input.value.toLowerCase()) &&
                              input.value != \"\"
                          ) {
                              let listItem = document.createElement(\"li\");
                              // One common class name
                              listItem.classList.add(\"list-items\");
                              listItem.style.cursor = \"pointer\";
                              listItem.setAttribute(\"onclick\", \"displayNames('\" + i + \"')\");
                              //Display match part in bold
                              let word = \"<b>\" + i.substr(0, input.value.length) + \"</b>\";
                              word += i.substr(input.value.length);
                              console.log(word);
                              //display the value in array
                              listItem.innerHTML = word;
                              document.querySelector(\".list\").appendChild(listItem);
                          }
                      });
                  });

                  function displayNames(value) {
                      input.value = value;
                      removeElements();
                  }

                  function removeElements() {
                      //clear all the item
                      let items = document.querySelectorAll(\".list-items\");
                      items.forEach((item) => {
                          console.log(\"1\");
                          item.remove();
                      });
                  }

              }

          });

          let names = ['swipi', 'monalisa', 'bb', 'kkd'];

          let sortedNames = names.sort();
          let input = document.getElementById(\"searchtxt\");
          tab = [];
          input.addEventListener(\"keyup\", (e) => {
              //loop through above array
              removeElements();
              sortedNames.forEach(i => {
                  //initially remove all elements (so if user erases a letter or adds new letter then clean previous out)
                  if (
                      i.toLowerCase().startsWith(input.value.toLowerCase()) &&
                      input.value != \"\"
                  ) {
                      let listItem = document.createElement(\"li\");
                      // One common class name
                      listItem.classList.add(\"list-items\");
                      listItem.style.cursor = \"pointer\";
                      listItem.setAttribute(\"onclick\", \"displayNames('\" + i + \"')\");
                      //Display match part in bold
                      let word = \"<b>\" + i.substr(0, input.value.length) + \"</b>\";
                      word += i.substr(input.value.length);
                      console.log(word);
                      //display the value in array
                      listItem.innerHTML = word;
                      document.querySelector(\".list\").appendChild(listItem);
                  }
              });
          });

          function displayNames(value) {
              input.value = value;
              removeElements();
          }

          function removeElements() {
              //clear all the item
              let items = document.querySelectorAll(\".list-items\");
              items.forEach((item) => {
                  console.log(\"1\");
                  item.remove();
              });
          }
      </script>
      ";
        // line 311
        $this->loadTemplate("chat/index.html.twig", "tutoriel/index.html.twig", 311)->display($context);
        // line 312
        echo "
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tutoriel/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 312,  573 => 311,  470 => 212,  460 => 211,  449 => 209,  443 => 208,  440 => 207,  435 => 206,  433 => 205,  425 => 199,  423 => 190,  421 => 189,  408 => 182,  398 => 176,  395 => 175,  392 => 174,  389 => 173,  383 => 172,  380 => 171,  377 => 170,  374 => 169,  369 => 168,  367 => 167,  361 => 164,  352 => 158,  347 => 156,  344 => 155,  337 => 152,  334 => 151,  327 => 148,  325 => 147,  318 => 142,  314 => 141,  300 => 129,  294 => 128,  286 => 126,  279 => 124,  276 => 123,  273 => 122,  268 => 121,  264 => 119,  260 => 117,  258 => 116,  249 => 109,  241 => 104,  238 => 103,  229 => 96,  227 => 95,  202 => 72,  189 => 65,  185 => 64,  178 => 60,  171 => 56,  167 => 54,  163 => 53,  153 => 46,  141 => 36,  131 => 35,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tutoriel index{% endblock %}
{% block css %}
    {{ parent() }}
    <style>

        ul {
            list-style: none;
            color: #684CDB;

        }

        .list {
            width: 100%;
            background-color: #25252F;
            border-radius: 5px 5px 5px 5px;
            margin-top: 5px;
            padding-bottom: 5px;
            margin-left: 10px;
            position: absolute;
            z-index: 2;
            width: 200px;
        }

        .list-items {
            padding: 15px 5px;
        }

        .list-items:hover {
            background-color: #494242;
        }
    </style>
{% endblock %}
{% block body %}
    <div class=\"page-heading\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h6>Tutoriels</h6>
                    <h2>Discover Best Tutoriels</h2>
                    <span>Tutoriels > <a href=\"#\">Explore</a></span>
                </div>
            </div>
        </div>
        <a href=\"{{ path('app_tutoriel_favoris') }}\"><span>show favoris</span></a>
        <div class=\"featured-explore\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"owl-features owl-carousel\">

                            {% for t in toptutoriels %}
                                <div class=\"item\">
                                    <div class=\"thumb\">
                                        <img src={{ asset('http://localhost/img/'~t.pathimg) }} alt=\"\"
                                             style=\"border-radius: 20px;height: 500px;\">
                                        <div class=\"hover-effect\">
                                            <div class=\"content\">
                                                <h4>{{ t.title }}</h4>
                                                <span class=\"author\">
                        <img src=\"assets/images/author.jpg\" alt=\"\"
                             style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                        <h6>made by {{ t.getIdArtist.name }}<br><a
                                    href=\"{{ path('app_tutoriel_show', {'id_tutoriel': t.getId()}) }}\">show</a></h6>
                      </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"discover-items\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"section-heading\">
                        <div class=\"line-dec\"></div>
                        <h2>Discover Our <em>Tutoriels</em>.</h2>
                    </div>
                </div>
                <div class=\"col-lg-7\">

                    <form id=\"search-form\" autocomplete=\"off\" name=\"gs\" method=\"post\" role=\"search\" action=\"#\">
                        <div class=\"row\">
                            <div class=\"col-lg-5\">
                                <fieldset>
                                    {% if(keyword==\"\") %}
                                        <div>
                                            <input id=\"searchtxt\" autocomplete=\"off\" type=\"text\" name=\"keyword\"
                                                   class=\"searchText\" placeholder=\"Type Something...\">
                                        </div>
                                        <ul class=\"list\"></ul>

                                    {% else %}
                                        <div>
                                            <input value={{ keyword }} id=\"searchtxt\" autocomplete=\"off\" type=\"text\"
                                                   name=\"keyword\" class=\"searchText\" placeholder=\"Type Something...\">
                                        </div>
                                        <ul class=\"list\"></ul>
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

                {% for t in tutoriels %}
                    <div class=\"col-lg-3\">
                        <div class=\"item\">
                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                <span class=\"author\">
                {% if(t.getIdCategorie().getNameCategory()==\"2d\") %}
                    <img src=\"{{ asset('assets/images/2d.png') }}\" alt=\"\"
                         style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                {% endif %}
                    {% if(t.getIdCategorie().getNameCategory()==\"3d\") %}
                        <img src=\"{{ asset('assets/images/3d.png') }}\" alt=\"\"
                             style=\"max-width: 50px; max-height: 50px; border-radius: 50%;\">
                    {% endif %}
                </span>
                                    <img src=\"{{ asset('http://localhost/img/'~t.pathimg) }}\" alt=\"\"
                                         style=\"border-radius: 20px; max-width: 500px; height: 250px; \">
                                    <h4>{{ t.title }}</h4>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"line-dec\"></div>
                                    <div class=\"row\">
                                        <div class=\"col-6\">
                                            <span>Level: <br> <strong>{{ t.niveau }}</strong></span>
                                        </div>
                                        <div class=\"col-6\">
                                            {% set lastupdate = date('01-01-1999') %}
                                            {% for v in t.videos %}
                                                {% if(v.getDateP()>lastupdate) %}
                                                    {% set lastupdate = v.getDateP() %}
                                                {% endif %}
                                            {% endfor %}
                                            {% if(lastupdate==date('01-01-1999')) %}
                                                {% set lastupdate = date('01-01-2023') %}
                                            {% endif %}
                                            <span>Last Update: <br> <strong>{{ lastupdate|date('d M Y') }} </strong></span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"main-button\">
                                        <a href=\"{{ path('app_tutoriel_show', {'id_tutoriel': t.getId()}) }}\">show</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
                {{ knp_pagination_render(
                    tutoriels,
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
        </div>
    </div>
    </div>
    {% set tab = [] %}
    {% for t in tutoriels %}
        {% set tab = tab|merge([t.title]) %}
    {% endfor %}

{% endblock %}
  {% block js %}
      {{ parent() }}
      <script>
          \$.ajax({
              type: 'GET',
              url: 'http://127.0.0.1:8000/tutoriel/show/names',
              success: function (response) {
                  // Handle the response from the controller
                  let names = response.names;

                  let sortedNames = names.sort();
                  let input = document.getElementById(\"searchtxt\");
                  tab = [];
                  input.addEventListener(\"keyup\", (e) => {
                      //loop through above array
                      removeElements();
                      sortedNames.forEach(i => {
                          //initially remove all elements (so if user erases a letter or adds new letter then clean previous out)
                          if (
                              i.toLowerCase().startsWith(input.value.toLowerCase()) &&
                              input.value != \"\"
                          ) {
                              let listItem = document.createElement(\"li\");
                              // One common class name
                              listItem.classList.add(\"list-items\");
                              listItem.style.cursor = \"pointer\";
                              listItem.setAttribute(\"onclick\", \"displayNames('\" + i + \"')\");
                              //Display match part in bold
                              let word = \"<b>\" + i.substr(0, input.value.length) + \"</b>\";
                              word += i.substr(input.value.length);
                              console.log(word);
                              //display the value in array
                              listItem.innerHTML = word;
                              document.querySelector(\".list\").appendChild(listItem);
                          }
                      });
                  });

                  function displayNames(value) {
                      input.value = value;
                      removeElements();
                  }

                  function removeElements() {
                      //clear all the item
                      let items = document.querySelectorAll(\".list-items\");
                      items.forEach((item) => {
                          console.log(\"1\");
                          item.remove();
                      });
                  }

              }

          });

          let names = ['swipi', 'monalisa', 'bb', 'kkd'];

          let sortedNames = names.sort();
          let input = document.getElementById(\"searchtxt\");
          tab = [];
          input.addEventListener(\"keyup\", (e) => {
              //loop through above array
              removeElements();
              sortedNames.forEach(i => {
                  //initially remove all elements (so if user erases a letter or adds new letter then clean previous out)
                  if (
                      i.toLowerCase().startsWith(input.value.toLowerCase()) &&
                      input.value != \"\"
                  ) {
                      let listItem = document.createElement(\"li\");
                      // One common class name
                      listItem.classList.add(\"list-items\");
                      listItem.style.cursor = \"pointer\";
                      listItem.setAttribute(\"onclick\", \"displayNames('\" + i + \"')\");
                      //Display match part in bold
                      let word = \"<b>\" + i.substr(0, input.value.length) + \"</b>\";
                      word += i.substr(input.value.length);
                      console.log(word);
                      //display the value in array
                      listItem.innerHTML = word;
                      document.querySelector(\".list\").appendChild(listItem);
                  }
              });
          });

          function displayNames(value) {
              input.value = value;
              removeElements();
          }

          function removeElements() {
              //clear all the item
              let items = document.querySelectorAll(\".list-items\");
              items.forEach((item) => {
                  console.log(\"1\");
                  item.remove();
              });
          }
      </script>
      {% include \"chat/index.html.twig\" %}

  {% endblock %}
", "tutoriel/index.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\tutoriel\\index.html.twig");
    }
}
