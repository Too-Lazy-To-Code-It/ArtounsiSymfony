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

/* @SonataUser/Admin/Security/Resetting/checkEmail.html.twig */
class __TwigTemplate_860d1bfd142bf07e30ab6931afced76b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'sonata_nav' => [$this, 'block_sonata_nav'],
            'logo' => [$this, 'block_logo'],
            'sonata_left_side' => [$this, 'block_sonata_left_side'],
            'body_attributes' => [$this, 'block_body_attributes'],
            'sonata_wrapper' => [$this, 'block_sonata_wrapper'],
            'login_box_header' => [$this, 'block_login_box_header'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new RuntimeError('Variable "base_template" does not exist.', 12, $this->source); })()), "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_sonata_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_sonata_left_side($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_body_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_sonata_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 26
        echo "    <div class=\"login-box\">
        ";
        // line 27
        $this->displayBlock('login_box_header', $context, $blocks);
        // line 41
        echo "        <div class=\"login-box-body\">
            <p>";
        // line 42
        echo twig_nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.check_email", ["%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new RuntimeError('Variable "tokenLifetime" does not exist.', 42, $this->source); })())], "SonataUserBundle"), "html", null, true));
        echo "</p>
            <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_user_admin_security_login");
        echo "\">
                ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_user_authentication", [], "SonataUserBundle"), "html", null, true);
        echo "
            </a>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_login_box_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login_box_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "login_box_header"));

        // line 28
        echo "            <div class=\"login-logo\">
                <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_dashboard");
        echo "\">
                    ";
        // line 30
        if ((("icon" == twig_get_attribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 30, $this->source); })()), "getOption", [0 => "logo_content"], "method", false, false, false, 30)) || ("all" == twig_get_attribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 30, $this->source); })()), "getOption", [0 => "logo_content"], "method", false, false, false, 30)))) {
            // line 31
            echo "                        <div>
                            <img style=\"width:64px;\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 32, $this->source); })()), "logo", [], "any", false, false, false, 32)), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 32, $this->source); })()), "title", [], "any", false, false, false, 32), "html", null, true);
            echo "\">
                        </div>
                    ";
        }
        // line 35
        echo "                    ";
        if ((("text" == twig_get_attribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 35, $this->source); })()), "getOption", [0 => "logo_content"], "method", false, false, false, 35)) || ("all" == twig_get_attribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 35, $this->source); })()), "getOption", [0 => "logo_content"], "method", false, false, false, 35)))) {
            // line 36
            echo "                        <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sonata_config"]) || array_key_exists("sonata_config", $context) ? $context["sonata_config"] : (function () { throw new RuntimeError('Variable "sonata_config" does not exist.', 36, $this->source); })()), "title", [], "any", false, false, false, 36), "html", null, true);
            echo "</span>
                    ";
        }
        // line 38
        echo "                </a>
            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 38,  209 => 36,  206 => 35,  198 => 32,  195 => 31,  193 => 30,  189 => 29,  186 => 28,  176 => 27,  161 => 44,  157 => 43,  153 => 42,  150 => 41,  148 => 27,  145 => 26,  135 => 25,  116 => 23,  98 => 20,  80 => 17,  62 => 14,  40 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block sonata_nav %}
{% endblock sonata_nav %}

{% block logo %}
{% endblock logo %}

{% block sonata_left_side %}
{% endblock sonata_left_side %}

{% block body_attributes %}class=\"sonata-bc login-page\"{% endblock %}

{% block sonata_wrapper %}
    <div class=\"login-box\">
        {% block login_box_header %}
            <div class=\"login-logo\">
                <a href=\"{{ path('sonata_admin_dashboard') }}\">
                    {% if 'icon' == sonata_config.getOption('logo_content') or 'all' == sonata_config.getOption('logo_content') %}
                        <div>
                            <img style=\"width:64px;\" src=\"{{ asset(sonata_config.logo) }}\" alt=\"{{ sonata_config.title }}\">
                        </div>
                    {% endif %}
                    {% if 'text' == sonata_config.getOption('logo_content') or 'all' == sonata_config.getOption('logo_content') %}
                        <span>{{ sonata_config.title }}</span>
                    {% endif %}
                </a>
            </div>
        {% endblock %}
        <div class=\"login-box-body\">
            <p>{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime}, 'SonataUserBundle')|nl2br }}</p>
            <a href=\"{{ path('sonata_user_admin_security_login') }}\">
                {{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}
            </a>
        </div>
    </div>
{% endblock sonata_wrapper %}
", "@SonataUser/Admin/Security/Resetting/checkEmail.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\vendor\\sonata-project\\user-bundle\\src\\Resources\\views\\Admin\\Security\\Resetting\\checkEmail.html.twig");
    }
}
