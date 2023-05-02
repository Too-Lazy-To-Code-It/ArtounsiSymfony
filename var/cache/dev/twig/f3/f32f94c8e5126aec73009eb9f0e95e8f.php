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

/* allusers/index.html.twig */
class __TwigTemplate_781549b562929bbad3b191884fc44745 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "allusers/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "allusers/index.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
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

        echo "Allusers index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Allusers index</h1>
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "        <h1>Welcome, ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "email", [], "any", false, false, false, 8), "html", null, true);
            echo "</h1>
        ";
        } else {
            // line 9
            echo "<h1>XDDDDDDDD</h1>

    ";
        }
        // line 12
        echo "
    <table class=\"table\">
        <thead>
            <tr>


                <th>Id_user</th>
                <th>Name</th>
                <th>Last_Name</th>
                <th>Email</th>
                <th>Birthday</th>
                <th>Password</th>
                <th>Salt</th>
                <th>Nationality</th>
                <th>Type</th>
                <th>Nickname</th>
                <th>Avatar</th>
                <th>Background</th>
                <th>Description</th>
                <th>Bio</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allusers"]) || array_key_exists("allusers", $context) ? $context["allusers"] : (function () { throw new RuntimeError('Variable "allusers" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["alluser"]) {
            // line 37
            echo "            <tr>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alluser"], "id_user", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alluser"], "name", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alluser"], "LastName", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alluser"], "Email", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            ((twig_get_attribute($this->env, $this->source, $context["alluser"], "Birthday", [], "any", false, false, false, 42)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alluser"], "Birthday", [], "any", false, false, false, 42), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alluser"], "password", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alluser"], "salt", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alluser"], "nationality", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alluser"], "type", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alluser"], "nickname", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alluser"], "avatar", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alluser"], "background", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alluser"], "description", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alluser"], "bio", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_show", ["id_user" => twig_get_attribute($this->env, $this->source, $context["alluser"], "id_user", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_edit", ["id_user" => twig_get_attribute($this->env, $this->source, $context["alluser"], "id_user", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\">edit</a>
                    <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_edit", ["id_user" => twig_get_attribute($this->env, $this->source, $context["alluser"], "id_user", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">edit</a>

                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "            <tr>
                <td colspan=\"15\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alluser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "allusers/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  232 => 67,  227 => 64,  218 => 60,  208 => 55,  204 => 54,  200 => 53,  195 => 51,  191 => 50,  187 => 49,  183 => 48,  179 => 47,  175 => 46,  171 => 45,  167 => 44,  163 => 43,  159 => 42,  155 => 41,  151 => 40,  147 => 39,  143 => 38,  140 => 37,  135 => 36,  109 => 12,  104 => 9,  98 => 8,  96 => 7,  93 => 6,  83 => 5,  64 => 3,  54 => 5,  51 => 4,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block title %}Allusers index{% endblock %}

{% block body %}
    <h1>Allusers index</h1>
    {% if app.user %}
        <h1>Welcome, {{ app.user.email }}</h1>
        {% else %}<h1>XDDDDDDDD</h1>

    {% endif %}

    <table class=\"table\">
        <thead>
            <tr>


                <th>Id_user</th>
                <th>Name</th>
                <th>Last_Name</th>
                <th>Email</th>
                <th>Birthday</th>
                <th>Password</th>
                <th>Salt</th>
                <th>Nationality</th>
                <th>Type</th>
                <th>Nickname</th>
                <th>Avatar</th>
                <th>Background</th>
                <th>Description</th>
                <th>Bio</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for alluser in allusers %}
            <tr>
                <td>{{ alluser.id_user }}</td>
                <td>{{ alluser.name }}</td>
                <td>{{ alluser.LastName }}</td>
                <td>{{ alluser.Email }}</td>
                <td>{{ alluser.Birthday ? alluser.Birthday|date('Y-m-d') : '' }}</td>
                <td>{{ alluser.password }}</td>
                <td>{{ alluser.salt }}</td>
                <td>{{ alluser.nationality }}</td>
                <td>{{ alluser.type }}</td>
                <td>{{ alluser.nickname }}</td>
                <td>{{ alluser.avatar }}</td>
                <td>{{ alluser.background }}</td>
                <td>{{ alluser.description }}</td>
                <td>{{ alluser.bio }}</td>
                <td>
                    <a href=\"{{ path('app_allusers_show', {'id_user': alluser.id_user}) }}\">show</a>
                    <a href=\"{{ path('app_allusers_edit', {'id_user': alluser.id_user}) }}\">edit</a>
                    <a href=\"{{ path('app_allusers_edit', {'id_user': alluser.id_user}) }}\">edit</a>

                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"15\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_allusers_new') }}\">Create new</a>
{% endblock %}
", "allusers/index.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\allusers\\index.html.twig");
    }
}
