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

/* video/_form.html.twig */
class __TwigTemplate_779c58ea18eb2c18241640f5bcd2ec52 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "video/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "video/_form.html.twig"));

        // line 1
        echo "<style>
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
                            <h5 class=\"card-title\"> Video</h5>

                            <!-- General Form Elements -->
                           ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "contact", "class" => "my-class"]]);
        echo "
                                <div class=\"row mb-3\">
                                 ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "title", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "col-sm-2 col-form-label"], "label" => "Titre"]);
        echo "
                                   
                                    <div class=\"col-sm-10\">
                                       ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "title", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                          <div class=\"error-message\"> ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "title", [], "any", false, false, false, 29), 'errors');
        echo "</div>
                                    </div>
                                </div>

                                <div class=\"row mb-3\">
                                  ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "col-sm-2 col-form-label"], "label" => "Description"]);
        echo "
                                    <div class=\"col-sm-10\">
                                      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    <div class=\"error-message\">  ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "description", [], "any", false, false, false, 37), 'errors', ["attr" => ["class" => "error"]]);
        echo "
                                    </div></div>
                                </div>
                          

                                <div class=\"row mb-3\">
                                 ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "Image", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "col-sm-2 col-form-label"], "label" => "Image"]);
        echo "
                                    
                                    <div class=\"col-sm-10\">
                                      ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "Image", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-3\">
                                 ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "Video", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "col-sm-2 col-form-label"], "label" => "Video"]);
        echo "
                                    
                                    <div class=\"col-sm-10\">
                                      ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "Video", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div>


                                <div class=\"row mb-3\">
                                   
                                    <div class=\"col-sm-10\">
                                    <button type=\"submit\" id=\"form-submit\" class=\"btn btn-primary\">";
        // line 61
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 61, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
                                    <button type=\"reset\" class=\"btn btn-secondary\">Reset</button>
                                    </div>
                                </div>

                            ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_end', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                            <!-- End General Form Elements -->

                        </div>
                    </div>

                </div>

                <div class=\"col-lg-6\">

                    <div class=\"card\">
                        <img src=\"";
        // line 77
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
        return "video/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 77,  146 => 66,  138 => 61,  127 => 53,  121 => 50,  114 => 46,  108 => 43,  99 => 37,  95 => 36,  90 => 34,  82 => 29,  78 => 28,  72 => 25,  67 => 23,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
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
                            <h5 class=\"card-title\"> Video</h5>

                            <!-- General Form Elements -->
                           {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'id': 'contact', 'class': 'my-class'}}) }}
                                <div class=\"row mb-3\">
                                 {{ form_label(form.title, 'Titre', {'label_attr': {'class': 'col-sm-2 col-form-label'}}) }}
                                   
                                    <div class=\"col-sm-10\">
                                       {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
                                          <div class=\"error-message\"> {{ form_errors(form.title) }}</div>
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
                                 {{ form_label(form.Image, 'Image', {'label_attr': {'class': 'col-sm-2 col-form-label'}}) }}
                                    
                                    <div class=\"col-sm-10\">
                                      {{ form_widget(form.Image, {'attr': {'class': 'form-control'}}) }}
                                    </div>
                                </div>
                                <div class=\"row mb-3\">
                                 {{ form_label(form.Video, 'Video', {'label_attr': {'class': 'col-sm-2 col-form-label'}}) }}
                                    
                                    <div class=\"col-sm-10\">
                                      {{ form_widget(form.Video, {'attr': {'class': 'form-control'}}) }}
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

    </main>", "video/_form.html.twig", "C:\\Users\\achref\\Documents\\ArtounsiSymfony-Achref\\templates\\video\\_form.html.twig");
    }
}
