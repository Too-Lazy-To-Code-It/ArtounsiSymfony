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

/* tutoriel/_form.html.twig */
class __TwigTemplate_1204bacc16f2370155249db513e42c6c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tutoriel/_form.html.twig"));

        // line 1
        echo "<main id=\"main\" class=\"main\">

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
                            <h5 class=\"card-title\"> tutoriel</h5>

                            <!-- General Form Elements -->
                           ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "contact", "class" => "my-class"]]);
        echo "
                                <div class=\"row mb-3\">
                                 ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "title", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "col-sm-2 col-form-label"], "label" => "Titre"]);
        echo "
                                   
                                    <div class=\"col-sm-10\">
                                       ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "title", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                          <div class=\"error-message\"> ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "title", [], "any", false, false, false, 42), 'errors');
        echo "</div>
</li>
                               
                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                  ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "col-sm-2 col-form-label"], "label" => "Description"]);
        echo "
                                    <div class=\"col-sm-10\">
                                      ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "description", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    <div class=\"error-message\">  ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52), 'errors', ["attr" => ["class" => "error"]]);
        echo "
                                    </div></div>
                                </div>
                           
                                <div class=\"row mb-3\">
                                 ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "niveau", [], "any", false, false, false, 57), 'label', ["label_attr" => ["class" => "col-sm-2 col-form-label"], "label" => "Niveau"]);
        echo "
                                    
                                    <div class=\"col-sm-10\">
                                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "niveau", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                 ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "id_categorie", [], "any", false, false, false, 65), 'label', ["label_attr" => ["class" => "col-sm-2 col-form-label"], "label" => "Categorie"]);
        echo "
                                    
                                    <div class=\"col-sm-10\">
                                        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "id_categorie", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-select"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-3\">
                                 ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "id_artist", [], "any", false, false, false, 72), 'label', ["label_attr" => ["class" => "col-sm-2 col-form-label"], "label" => "Artist"]);
        echo "
                                    
                                    <div class=\"col-sm-10\">
                                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "id_artist", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-select"]]);
        echo "
                                    </div>
                                </div>

                                  <div class=\"row mb-3\">
                                 ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "Image", [], "any", false, false, false, 80), 'label', ["label_attr" => ["class" => "col-sm-2 col-form-label"], "label" => "Image"]);
        echo "
                                    
                                    <div class=\"col-sm-10\">
                                      ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "Image", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div>


                                <div class=\"row mb-3\">
                                   
                                    <div class=\"col-sm-10\">
                                    <button type=\"submit\" id=\"form-submit\" class=\"btn btn-primary\">";
        // line 91
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 91, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
                                    <button type=\"reset\" class=\"btn btn-secondary\">Reset</button>
                                    </div>
                                </div>

                            ";
        // line 96
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), 'form_end', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                            <!-- End General Form Elements -->

                        </div>
                    </div>

                </div>

                <div class=\"col-lg-6\">

                    <div class=\"card\">
                        <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/tutoriel.jpg"), "html", null, true);
        echo "\" alt=\"\"  width=\"95%\" >
                    </div>

                </div>
            </div>
        </section>

    </main>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "tutoriel/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 107,  188 => 96,  180 => 91,  169 => 83,  163 => 80,  155 => 75,  149 => 72,  142 => 68,  136 => 65,  128 => 60,  122 => 57,  114 => 52,  110 => 51,  105 => 49,  95 => 42,  91 => 41,  85 => 38,  80 => 36,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<main id=\"main\" class=\"main\">

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
                            <h5 class=\"card-title\"> tutoriel</h5>

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
                                    </div></div>
                                </div>
                           
                                <div class=\"row mb-3\">
                                 {{ form_label(form.niveau, 'Niveau', {'label_attr': {'class': 'col-sm-2 col-form-label'}}) }}
                                    
                                    <div class=\"col-sm-10\">
                                        {{ form_widget(form.niveau, {'attr': {'class': 'form-control'}}) }}
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
                                    <button type=\"submit\" id=\"form-submit\" class=\"btn btn-primary\">{{ button_label|default('Ajouter') }}</button>
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
                        <img src=\"{{asset('assets/tutoriel.jpg') }}\" alt=\"\"  width=\"95%\" >
                    </div>

                </div>
            </div>
        </section>

    </main>", "tutoriel/_form.html.twig", "C:\\Users\\achref\\Documents\\ArtounsiSymfony-Achref\\templates\\tutoriel\\_form.html.twig");
    }
}
