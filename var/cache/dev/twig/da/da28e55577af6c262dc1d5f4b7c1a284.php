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

/* tutoriel/edit.html.twig */
class __TwigTemplate_2f4778cf0cc95bbb9786dcb1481d3b44 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/edit.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "tutoriel/edit.html.twig", 1);
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

        echo "Edit Tutoriel";
        
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
        echo "    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Modifier un tutoriel</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Dashboard</a></li>
                    <li class=\"breadcrumb-item\">Tutoriels</li>
                    <li class=\"breadcrumb-item active\">Modifier un tutoriel</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <style>
            .color {
                border: 1px solid #ccc;
                box-shadow: 2px 2px 5px #369;
                padding: 10px;

            }

            .error-message {
                color: red;
            }
        </style>
        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-6\">

                    <div class=\"card color\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\"> tutoriel </h5>

                            <!-- General Form Elements -->
                            ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "contact", "class" => "my-class"]]);
        echo "
                            <div class=\"row mb-3\">
                                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "title", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "col-sm-2 col-form-label"], "label" => "Titre"]);
        echo "

                                <div class=\"col-sm-10\">
                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "title", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    <div class=\"error-message\"> ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "title", [], "any", false, false, false, 46), 'errors');
        echo "</div>
                                    </li>

                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "description", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "col-sm-2 col-form-label"], "label" => "Description"]);
        echo "
                                <div class=\"col-sm-10\">
                                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "description", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    <div class=\"error-message\">  ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "description", [], "any", false, false, false, 56), 'errors', ["attr" => ["class" => "error"]]);
        echo "
                                    </div>
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "niveau", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "col-sm-2 col-form-label"], "label" => "Niveau"]);
        echo "

                                <div class=\"col-sm-10\">
                                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "niveau", [], "any", false, false, false, 65), 'widget');
        echo "
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "id_categorie", [], "any", false, false, false, 70), 'label', ["label_attr" => ["class" => "col-sm-2 col-form-label"], "label" => "Categorie"]);
        echo "

                                <div class=\"col-sm-10\">
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "id_categorie", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-select"]]);
        echo "
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "id_artist", [], "any", false, false, false, 77), 'label', ["label_attr" => ["class" => "col-sm-2 col-form-label"], "label" => "Artist"]);
        echo "

                                <div class=\"col-sm-10\">
                                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "id_artist", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-select"]]);
        echo "
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "Image", [], "any", false, false, false, 85), 'label', ["label_attr" => ["class" => "col-sm-2 col-form-label"], "label" => "Image"]);
        echo "

                                <div class=\"col-sm-10\">
                                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "Image", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                </div>
                            </div>


                            <div class=\"row mb-3\">

                                <div class=\"col-sm-10\">
                                    <button type=\"submit\" id=\"form-submit\"
                                            class=\"btn btn-primary\">";
        // line 97
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 97, $this->source); })()), "Modifier")) : ("Modifier")), "html", null, true);
        echo "</button>
                                    <button type=\"reset\" class=\"btn btn-secondary\">Reset</button>
                                </div>
                            </div>

                            ";
        // line 102
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), 'form_end', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                            <!-- End General Form Elements -->

                        </div>
                    </div>

                </div>

                <div class=\"col-lg-6\">

                    <div class=\"card\">
                        <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/tutoriel.jpg"), "html", null, true);
        echo "\" alt=\"\" width=\"95%\">
                    </div>

                </div>
            </div>
        </section>

    </main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tutoriel/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 113,  234 => 102,  226 => 97,  214 => 88,  208 => 85,  200 => 80,  194 => 77,  187 => 73,  181 => 70,  173 => 65,  167 => 62,  158 => 56,  154 => 55,  149 => 53,  139 => 46,  135 => 45,  129 => 42,  124 => 40,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseback.html.twig' %}

{% block title %}Edit Tutoriel{% endblock %}

{% block body %}
    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Modifier un tutoriel</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Dashboard</a></li>
                    <li class=\"breadcrumb-item\">Tutoriels</li>
                    <li class=\"breadcrumb-item active\">Modifier un tutoriel</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <style>
            .color {
                border: 1px solid #ccc;
                box-shadow: 2px 2px 5px #369;
                padding: 10px;

            }

            .error-message {
                color: red;
            }
        </style>
        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-6\">

                    <div class=\"card color\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\"> tutoriel </h5>

                            <!-- General Form Elements -->
                            {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'id': 'contact', 'class': 'my-class'}}) }}
                            <div class=\"row mb-3\">
                                {{ form_label(form.title, 'Titre', {'label_attr': {'class': 'col-sm-2 col-form-label'}}) }}

                                <div class=\"col-sm-10\">
                                    {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
                                    <div class=\"error-message\"> {{ form_errors(form.title) }}</div>
                                    </li>

                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                {{ form_label(form.description, 'Description', {'label_attr': {'class': 'col-sm-2 col-form-label'}}) }}
                                <div class=\"col-sm-10\">
                                    {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
                                    <div class=\"error-message\">  {{ form_errors(form.description, {'attr': {'class': 'error'}}) }}
                                    </div>
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                {{ form_label(form.niveau, 'Niveau', {'label_attr': {'class': 'col-sm-2 col-form-label'}}) }}

                                <div class=\"col-sm-10\">
                                    {{ form_widget(form.niveau) }}
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                {{ form_label(form.id_categorie, 'Categorie', {'label_attr': {'class': 'col-sm-2 col-form-label'}}) }}

                                <div class=\"col-sm-10\">
                                    {{ form_widget(form.id_categorie, {'attr': {'class': 'form-select'}}) }}
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                {{ form_label(form.id_artist, 'Artist', {'label_attr': {'class': 'col-sm-2 col-form-label'}}) }}

                                <div class=\"col-sm-10\">
                                    {{ form_widget(form.id_artist, {'attr': {'class': 'form-select'}}) }}
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                {{ form_label(form.Image, 'Image', {'label_attr': {'class': 'col-sm-2 col-form-label'}}) }}

                                <div class=\"col-sm-10\">
                                    {{ form_widget(form.Image, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            </div>


                            <div class=\"row mb-3\">

                                <div class=\"col-sm-10\">
                                    <button type=\"submit\" id=\"form-submit\"
                                            class=\"btn btn-primary\">{{ button_label|default('Modifier') }}</button>
                                    <button type=\"reset\" class=\"btn btn-secondary\">Reset</button>
                                </div>
                            </div>

                            {{ form_end(form, {'attr': {'novalidate': 'novalidate'}}) }}
                            <!-- End General Form Elements -->

                        </div>
                    </div>

                </div>

                <div class=\"col-lg-6\">

                    <div class=\"card\">
                        <img src=\"{{ asset('assets/tutoriel.jpg') }}\" alt=\"\" width=\"95%\">
                    </div>

                </div>
            </div>
        </section>

    </main>

{% endblock %}
", "tutoriel/edit.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\tutoriel\\edit.html.twig");
    }
}
