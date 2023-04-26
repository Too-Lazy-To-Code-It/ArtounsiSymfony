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

/* allusers/show.html.twig */
class __TwigTemplate_414edaf33fab54885991adf670a98c0e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "allusers/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "allusers/show.html.twig"));

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

        echo "Allusers";
        
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
        echo "    <h1>Allusers</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id_user</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 12, $this->source); })()), "idUser", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Last_Name</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 20, $this->source); })()), "LastName", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 24, $this->source); })()), "Email", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Birthday</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 28, $this->source); })()), "Birthday", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 28, $this->source); })()), "Birthday", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 32, $this->source); })()), "password", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Salt</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 36, $this->source); })()), "salt", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nationality</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 40, $this->source); })()), "nationality", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 44, $this->source); })()), "type", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nickname</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 48, $this->source); })()), "nickname", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Avatar</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 52, $this->source); })()), "avatar", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Background</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 56, $this->source); })()), "background", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 60, $this->source); })()), "description", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Bio</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 64, $this->source); })()), "bio", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_allusers_edit", ["id_user" => twig_get_attribute($this->env, $this->source, (isset($context["alluser"]) || array_key_exists("alluser", $context) ? $context["alluser"] : (function () { throw new RuntimeError('Variable "alluser" does not exist.', 71, $this->source); })()), "id_user", [], "any", false, false, false, 71)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 73
        echo twig_include($this->env, $context, "allusers/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "allusers/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  210 => 73,  205 => 71,  200 => 69,  192 => 64,  185 => 60,  178 => 56,  171 => 52,  164 => 48,  157 => 44,  150 => 40,  143 => 36,  136 => 32,  129 => 28,  122 => 24,  115 => 20,  108 => 16,  101 => 12,  93 => 6,  83 => 5,  64 => 3,  54 => 5,  51 => 4,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block title %}Allusers{% endblock %}

{% block body %}
    <h1>Allusers</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id_user</th>
                <td>{{ alluser.idUser }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ alluser.name }}</td>
            </tr>
            <tr>
                <th>Last_Name</th>
                <td>{{ alluser.LastName }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ alluser.Email }}</td>
            </tr>
            <tr>
                <th>Birthday</th>
                <td>{{ alluser.Birthday ? alluser.Birthday|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ alluser.password }}</td>
            </tr>
            <tr>
                <th>Salt</th>
                <td>{{ alluser.salt }}</td>
            </tr>
            <tr>
                <th>Nationality</th>
                <td>{{ alluser.nationality }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ alluser.type }}</td>
            </tr>
            <tr>
                <th>Nickname</th>
                <td>{{ alluser.nickname }}</td>
            </tr>
            <tr>
                <th>Avatar</th>
                <td>{{ alluser.avatar }}</td>
            </tr>
            <tr>
                <th>Background</th>
                <td>{{ alluser.background }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ alluser.description }}</td>
            </tr>
            <tr>
                <th>Bio</th>
                <td>{{ alluser.bio }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_allusers_index') }}\">back to list</a>

    <a href=\"{{ path('app_allusers_edit', {'id_user': alluser.id_user}) }}\">edit</a>

    {{ include('allusers/_delete_form.html.twig') }}
{% endblock %}
", "allusers/show.html.twig", "C:\\Users\\nour2\\Documents\\GitHub\\ArtounsiSymfony\\templates\\allusers\\show.html.twig");
    }
}
