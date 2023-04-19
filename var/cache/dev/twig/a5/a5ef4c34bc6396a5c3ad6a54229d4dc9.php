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
class __TwigTemplate_7df1988b3e3b244a01f012bddf245285 extends Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
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
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "title", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Niveau</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "niveau", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => " form-control "]]);
        echo "
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Description</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "description", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => " form-control "]]);
        echo "
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52), 'errors');
        echo "
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Categorie</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "id_categorie", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => " form-control "]]);
        echo "
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "id_categorie", [], "any", false, false, false, 59), 'errors');
        echo "
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Date Challenge</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "date_c", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => " form-control "]]);
        echo "
                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "date_c", [], "any", false, false, false, 66), 'errors');
        echo "
                  </div>
                </div>

                <div class=\"row mb-3\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Image</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "Image", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => " form-control"]]);
        echo "
                  </div>
                </div>

                <div class=\"row mb-3\">
                  <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Artist</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "id_artist", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => " form-control"]]);
        echo "
                  </div>
                </div>

                <div class=\"text-center\">
                  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                  <button type=\"reset\" class=\"btn btn-secondary\">Reset</button>
                </div>
";
        // line 88
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'form_end');
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
        return array (  163 => 88,  152 => 80,  142 => 73,  132 => 66,  128 => 65,  119 => 59,  115 => 58,  106 => 52,  102 => 51,  93 => 45,  84 => 39,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form,{ 'attr' : {'novalidate': 'novalidate'}} ) }}
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
", "challenge/_form.html.twig", "C:\\Users\\achref\\Documents\\ArtounsiSymfony-Achref\\templates\\challenge\\_form.html.twig");
    }
}
