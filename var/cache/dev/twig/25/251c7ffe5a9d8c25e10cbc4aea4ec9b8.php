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

/* @SonataUser/Admin/Field/impersonating.html.twig */
class __TwigTemplate_6a565516e1aca217a8859fe7c82330aa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "@SonataAdmin/CRUD/base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Field/impersonating.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Field/impersonating.html.twig"));

        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_list_field.html.twig", "@SonataUser/Admin/Field/impersonating.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15) && (twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 15, $this->source); })()), "username", [], "any", false, false, false, 15) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "username", [], "any", false, false, false, 15))) && twig_get_attribute($this->env, $this->source, (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new RuntimeError('Variable "sonata_user" does not exist.', 15, $this->source); })()), "isImpersonatingEnabled", [], "any", false, false, false, 15))) {
            // line 16
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new RuntimeError('Variable "sonata_user" does not exist.', 16, $this->source); })()), "impersonatingRoute", [], "any", false, false, false, 16), twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["sonata_user"]) || array_key_exists("sonata_user", $context) ? $context["sonata_user"] : (function () { throw new RuntimeError('Variable "sonata_user" does not exist.', 16, $this->source); })()), "impersonatingRouteParameters", [], "any", false, false, false, 16), ["_switch_user" => twig_get_attribute($this->env, $this->source, (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 16, $this->source); })()), "username", [], "any", false, false, false, 16)])), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("switch_user", [], "SonataUserBundle"), "html", null, true);
            echo "\">
            <i class=\"fas fa-user\"></i>
            <i class=\"fas fa-sign-in-alt\"></i>
        </a>
    ";
        } else {
            // line 21
            echo "        -
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Field/impersonating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 21,  71 => 16,  68 => 15,  58 => 14,  35 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends '@SonataAdmin/CRUD/base_list_field.html.twig' %}

{% block field %}
    {% if app.user and object.username != app.user.username and sonata_user.isImpersonatingEnabled %}
        <a href=\"{{ url(sonata_user.impersonatingRoute, sonata_user.impersonatingRouteParameters|merge({'_switch_user': object.username})) }}\" title=\"{{ 'switch_user'|trans({}, 'SonataUserBundle')}}\">
            <i class=\"fas fa-user\"></i>
            <i class=\"fas fa-sign-in-alt\"></i>
        </a>
    {% else %}
        -
    {% endif %}
{% endblock %}
", "@SonataUser/Admin/Field/impersonating.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\vendor\\sonata-project\\user-bundle\\src\\Resources\\views\\Admin\\Field\\impersonating.html.twig");
    }
}
