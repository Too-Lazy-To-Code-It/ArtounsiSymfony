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

/* challenge/_form.html.twig */
class __TwigTemplate_ce13c5a1deb6f3ada5e48fe059f0c90d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "challenge/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "challenge/_form.html.twig"));

        // line 1
        echo "

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Ajouter un tutoriel</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Dashboard</a></li>
                    <li class=\"breadcrumb-item\">Tutoriels</li>
                    <li class=\"breadcrumb-item active\">Ajouter un tutoriel</li>
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
                            <h5 class=\"card-title\"> offre d'emplois</h5>

                            <!-- General Form Elements -->
                  <div class=\"row mb-3\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Title</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "title", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Niveau</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "niveau", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => " form-control "]]);
        echo "
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Description</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "description", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => " form-control "]]);
        echo "
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "description", [], "any", false, false, false, 54), 'errors');
        echo "
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Categorie</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "id_categorie", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => " form-control "]]);
        echo "
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "id_categorie", [], "any", false, false, false, 61), 'errors');
        echo "
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Date Challenge</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "date_c", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => " form-control "]]);
        echo "
                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "date_c", [], "any", false, false, false, 68), 'errors');
        echo "
                  </div>
                </div>

                <div class=\"row mb-3\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Image</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "Image", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => " form-control"]]);
        echo "
                  </div>
                </div>

                <div class=\"row mb-3\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Artist</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "id_artist", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => " form-control"]]);
        echo "
                  </div>
                </div>

                <div class=\"text-center\">
                  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                  <button type=\"reset\" class=\"btn btn-secondary\">Reset</button>
                </div>
";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "challenge/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 90,  156 => 82,  146 => 75,  136 => 68,  132 => 67,  123 => 61,  119 => 60,  110 => 54,  106 => 53,  97 => 47,  88 => 41,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{{ form_start(form,{ 'attr' : {'novalidate': 'novalidate'}} ) }}
<main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Ajouter un tutoriel</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Dashboard</a></li>
                    <li class=\"breadcrumb-item\">Tutoriels</li>
                    <li class=\"breadcrumb-item active\">Ajouter un tutoriel</li>
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
                            <h5 class=\"card-title\"> offre d'emplois</h5>

                            <!-- General Form Elements -->
                  <div class=\"row mb-3\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Title</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(form.title, { attr:{'class':'form-control'}}) }}
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Niveau</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(form.niveau, { attr:{'class':' form-control '}}) }}
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Description</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(form.description, { attr:{'class':' form-control '}}) }}
                    {{ form_errors(form.description) }}
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Categorie</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(form.id_categorie, { attr:{'class':' form-control '}}) }}
                    {{ form_errors(form.id_categorie) }}
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Date Challenge</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(form.date_c, { attr:{'class':' form-control '}}) }}
                    {{ form_errors(form.date_c) }}
                  </div>
                </div>

                <div class=\"row mb-3\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Image</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(form.Image, { attr:{'class':' form-control'}}) }}
                  </div>
                </div>

                <div class=\"row mb-3\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Artist</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(form.id_artist, { attr:{'class':' form-control'}}) }}
                  </div>
                </div>

                <div class=\"text-center\">
                  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                  <button type=\"reset\" class=\"btn btn-secondary\">Reset</button>
                </div>
{{ form_end(form) }}
", "challenge/_form.html.twig", "C:\\Esprit\\PIDEV\\Codewiljaw\\Symfony\\Artounsi\\templates\\challenge\\_form.html.twig");
    }
}
