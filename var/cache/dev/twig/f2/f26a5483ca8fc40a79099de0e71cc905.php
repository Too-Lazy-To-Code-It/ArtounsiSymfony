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

/* @SonataUser/Admin/Security/login.html.twig */
class __TwigTemplate_4075fef339c2bde6144b27d4b50acd11 extends Template
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
            'sonata_user_login_form' => [$this, 'block_sonata_user_login_form'],
            'sonata_user_login_error' => [$this, 'block_sonata_user_login_error'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new RuntimeError('Variable "base_template" does not exist.', 12, $this->source); })()), "@SonataUser/Admin/Security/login.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataUser/Admin/Security/login.html.twig"));

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

        echo "class=\"sonata-bc login-page ";
        if ((isset($context["_use_icheck"]) || array_key_exists("_use_icheck", $context) ? $context["_use_icheck"] : (function () { throw new RuntimeError('Variable "_use_icheck" does not exist.', 23, $this->source); })())) {
            echo "sonata-icheck";
        }
        echo "\"";
        
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
            ";
        // line 42
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 93
        echo "        </div>
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

    // line 42
    public function block_sonata_user_login_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_user_login_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_user_login_form"));

        // line 43
        echo "                ";
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 50
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_user_authentication", [], "SonataUserBundle"), "html", null, true);
        echo "</p>

                <form action=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_user_admin_security_check");
        echo "\" method=\"post\" role=\"form\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "\"/>

                    <div class=\"form-group has-feedback\">
                        <input class=\"form-control\"
                            id=\"username\"
                            name=\"_username\"
                            placeholder=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", [], "SonataUserBundle"), "html", null, true);
        echo "\"
                            required=\"required\"
                            type=\"text\"
                            value=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "\"/>
                        <span class=\"fas fa-user form-control-feedback\"></span>
                    </div>

                    <div class=\"form-group has-feedback\">
                        <input class=\"form-control\"
                            id=\"password\"
                            name=\"_password\"
                            placeholder=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", [], "SonataUserBundle"), "html", null, true);
        echo "\"
                            required=\"required\"
                            type=\"password\"/>
                        <span class=\"fas fa-lock form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-8\">
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                    ";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", [], "SonataUserBundle"), "html", null, true);
        echo "
                                </label>
                            </div>
                        </div>
                        <div class=\"col-xs-4\">
                            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", [], "SonataUserBundle"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>

                <a href=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["reset_route"]) || array_key_exists("reset_route", $context) ? $context["reset_route"] : (function () { throw new RuntimeError('Variable "reset_route" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("forgotten_password", [], "SonataUserBundle"), "html", null, true);
        echo "</a>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 43
    public function block_sonata_user_login_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_user_login_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_user_login_error"));

        // line 44
        echo "                    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 44, $this->source); })())) {
            // line 45
            echo "                        <div class=\"alert alert-danger alert-error\">
                            ";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 46, $this->source); })()), "messageKey", [], "any", false, false, false, 46), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 46, $this->source); })()), "messageData", [], "any", false, false, false, 46), "security"), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 49
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Admin/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 49,  333 => 46,  330 => 45,  327 => 44,  317 => 43,  303 => 91,  295 => 86,  287 => 81,  273 => 70,  262 => 62,  256 => 59,  247 => 53,  243 => 52,  237 => 50,  234 => 43,  224 => 42,  212 => 38,  206 => 36,  203 => 35,  195 => 32,  192 => 31,  190 => 30,  186 => 29,  183 => 28,  173 => 27,  161 => 93,  159 => 42,  156 => 41,  154 => 27,  151 => 26,  141 => 25,  118 => 23,  100 => 20,  82 => 17,  64 => 14,  42 => 12,);
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

{% block body_attributes %}class=\"sonata-bc login-page {% if _use_icheck %}sonata-icheck{% endif %}\"{% endblock %}

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
            {% block sonata_user_login_form %}
                {% block sonata_user_login_error %}
                    {% if error %}
                        <div class=\"alert alert-danger alert-error\">
                            {{ error.messageKey|trans(error.messageData, 'security') }}
                        </div>
                    {% endif %}
                {% endblock %}
                <p class=\"login-box-msg\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</p>

                <form action=\"{{ path(\"sonata_user_admin_security_check\") }}\" method=\"post\" role=\"form\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>

                    <div class=\"form-group has-feedback\">
                        <input class=\"form-control\"
                            id=\"username\"
                            name=\"_username\"
                            placeholder=\"{{ 'security.login.username'|trans({}, 'SonataUserBundle') }}\"
                            required=\"required\"
                            type=\"text\"
                            value=\"{{ last_username }}\"/>
                        <span class=\"fas fa-user form-control-feedback\"></span>
                    </div>

                    <div class=\"form-group has-feedback\">
                        <input class=\"form-control\"
                            id=\"password\"
                            name=\"_password\"
                            placeholder=\"{{ 'security.login.password'|trans({}, 'SonataUserBundle') }}\"
                            required=\"required\"
                            type=\"password\"/>
                        <span class=\"fas fa-lock form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-8\">
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                    {{ 'security.login.remember_me'|trans({}, 'SonataUserBundle') }}
                                </label>
                            </div>
                        </div>
                        <div class=\"col-xs-4\">
                            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-block btn-flat\">{{ 'security.login.submit'|trans({}, 'SonataUserBundle') }}</button>
                        </div>
                    </div>
                </form>

                <a href=\"{{ reset_route }}\">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a>
            {% endblock %}
        </div>
    </div>
{% endblock sonata_wrapper %}
", "@SonataUser/Admin/Security/login.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\vendor\\sonata-project\\user-bundle\\src\\Resources\\views\\Admin\\Security\\login.html.twig");
    }
}
