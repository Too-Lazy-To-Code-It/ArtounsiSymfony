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

/* @SonataUser/Admin/Core/user_block.html.twig */
class __TwigTemplate_4f6a48f12fd852aaac424f8e3a9f2c29 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'user_block' => [$this, 'block_user_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Core/user_block.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Core/user_block.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_user_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user_block"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user_block"));

        // line 13
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)) {
            // line 14
            echo "        ";
            $context["_bg_class"] = "bg-light-blue";
            // line 15
            echo "        ";
            $context["_logout_uri"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sonata_user_admin_security_logout");
            // line 16
            echo "        ";
            $context["_logout_text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_block_logout", [], "SonataUserBundle");
            // line 17
            echo "
        ";
            // line 18
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PREVIOUS_ADMIN") && twig_get_attribute($this->env, $this->source, (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new RuntimeError('Variable "sonata_user" does not exist.', 18, $this->source); })()), "isImpersonatingEnabled", [], "any", false, false, false, 18))) {
                // line 19
                echo "            ";
                $context["_bg_class"] = "bg-light-green";
                // line 20
                echo "            ";
                $context["_logout_uri"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new RuntimeError('Variable "sonata_user" does not exist.', 20, $this->source); })()), "impersonatingRoute", [], "any", false, false, false, 20), twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new RuntimeError('Variable "sonata_user" does not exist.', 20, $this->source); })()), "impersonatingRouteParameters", [], "any", false, false, false, 20), ["_switch_user" => "_exit"]));
                // line 21
                echo "            ";
                $context["_logout_text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("switch_user_exit", [], "SonataUserBundle");
                // line 22
                echo "        ";
            }
            // line 23
            echo "
        <li class=\"user-header ";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["_bg_class"]) || array_key_exists("_bg_class", $context) ? $context["_bg_class"] : (function () { throw new RuntimeError('Variable "_bg_class" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\">
            <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new RuntimeError('Variable "sonata_user" does not exist.', 25, $this->source); })()), "defaultAvatar", [], "any", false, false, false, 25)), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"Avatar\"/>
            <p>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>
        </li>

        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 32
(isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new RuntimeError('Variable "sonata_user" does not exist.', 32, $this->source); })()), "userAdmin", [], "any", false, false, false, 32), "isGranted", [0 => "EDIT", 1 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32)], "method", false, false, false, 32)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 33
(isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new RuntimeError('Variable "sonata_user" does not exist.', 33, $this->source); })()), "userAdmin", [], "any", false, false, false, 33), "generateUrl", [0 => "edit", 1 => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)]], "method", false, false, false, 33)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 34
(isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new RuntimeError('Variable "sonata_user" does not exist.', 34, $this->source); })()), "userAdmin", [], "any", false, false, false, 34), "generateUrl", [0 => "show", 1 => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34)]], "method", false, false, false, 34))), "html", null, true);
            // line 35
            echo "\" class=\"btn btn-default btn-flat\">
                    <i class=\"fas fa-user\"></i>
                    ";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_block_profile", [], "SonataUserBundle"), "html", null, true);
            echo "
                </a>
            </div>

            <div class=\"pull-right\">
                <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["_logout_uri"]) || array_key_exists("_logout_uri", $context) ? $context["_logout_uri"] : (function () { throw new RuntimeError('Variable "_logout_uri" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\">
                    <i class=\"fas fa-sign-out-alt fa-fw\"></i>
                    ";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["_logout_text"]) || array_key_exists("_logout_text", $context) ? $context["_logout_text"] : (function () { throw new RuntimeError('Variable "_logout_text" does not exist.', 44, $this->source); })()), "html", null, true);
            echo "
                </a>
            </div>
        </li>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Core/user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  136 => 44,  131 => 42,  123 => 37,  119 => 35,  117 => 34,  116 => 33,  115 => 32,  114 => 31,  106 => 26,  102 => 25,  98 => 24,  95 => 23,  92 => 22,  89 => 21,  86 => 20,  83 => 19,  81 => 18,  78 => 17,  75 => 16,  72 => 15,  69 => 14,  66 => 13,  47 => 12,  44 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% block user_block %}
    {% if app.user %}
        {% set _bg_class = 'bg-light-blue' %}
        {% set _logout_uri = url('sonata_user_admin_security_logout') %}
        {% set _logout_text = 'user_block_logout'|trans({}, 'SonataUserBundle') %}

        {% if is_granted('ROLE_PREVIOUS_ADMIN') and sonata_user.isImpersonatingEnabled %}
            {% set _bg_class = 'bg-light-green' %}
            {% set _logout_uri = url(sonata_user.impersonatingRoute, sonata_user.impersonatingRouteParameters|merge({'_switch_user': '_exit'})) %}
            {% set _logout_text = 'switch_user_exit'|trans({}, 'SonataUserBundle') %}
        {% endif %}

        <li class=\"user-header {{ _bg_class }}\">
            <img src=\"{{ asset(sonata_user.defaultAvatar) }}\" class=\"img-circle\" alt=\"Avatar\"/>
            <p>{{ app.user }}</p>
        </li>

        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"{{
                    sonata_user.userAdmin.isGranted('EDIT', app.user) ?
                        sonata_user.userAdmin.generateUrl('edit', {id: app.user.id}) :
                        sonata_user.userAdmin.generateUrl('show', {id: app.user.id})
                }}\" class=\"btn btn-default btn-flat\">
                    <i class=\"fas fa-user\"></i>
                    {{ 'user_block_profile'|trans({}, 'SonataUserBundle') }}
                </a>
            </div>

            <div class=\"pull-right\">
                <a href=\"{{ _logout_uri }}\" class=\"btn btn-default btn-flat\">
                    <i class=\"fas fa-sign-out-alt fa-fw\"></i>
                    {{ _logout_text }}
                </a>
            </div>
        </li>
    {% endif %}
{% endblock %}
", "@SonataUser/Admin/Core/user_block.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\vendor\\sonata-project\\user-bundle\\src\\Resources\\views\\Admin\\Core\\user_block.html.twig");
    }
}
