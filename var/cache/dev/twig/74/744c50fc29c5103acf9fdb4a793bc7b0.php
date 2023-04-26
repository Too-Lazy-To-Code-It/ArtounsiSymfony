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

/* payment/pdf.html.twig */
class __TwigTemplate_f4ebe012c33c72f2a2e578f9dc2febbc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/pdf.html.twig"));

        // line 1
        echo "<div class=\"table-responsive\">
    <table class=\"table mb-0\">
        <thead>
        <tr>
            <th>ID Facture</th>
        
         
            <th>Nom de la photo</th>
            <th>Photo</th>
            <th>Montant à payer</th>
           
           
        </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lignesPanier"]) || array_key_exists("lignesPanier", $context) ? $context["lignesPanier"] : (function () { throw new RuntimeError('Variable "lignesPanier" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 17
            echo "        <tr>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "idlignepanier", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>   
            <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "idproduit", [], "any", false, false, false, 19), "nom", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "idproduit", [], "any", false, false, false, 20), "image", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "</td>
           
        </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>

</table>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "payment/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  79 => 21,  75 => 20,  71 => 19,  67 => 18,  64 => 17,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"table-responsive\">
    <table class=\"table mb-0\">
        <thead>
        <tr>
            <th>ID Facture</th>
        
         
            <th>Nom de la photo</th>
            <th>Photo</th>
            <th>Montant à payer</th>
           
           
        </tr>
        </thead>
        <tbody>
        {% for ligne in lignesPanier %}
        <tr>
            <td>{{ ligne.idlignepanier }}</td>   
            <td>{{ ligne.idproduit.nom }}</td>
            <td>{{ ligne.idproduit.image }}</td>
            <td>{{ total }}</td>
           
        </tr>

        {% endfor %}
        </tbody>

</table>
</div>", "payment/pdf.html.twig", "C:\\Users\\aouad\\Desktop\\Pidev web\\ArtounsiSymfony-master\\templates\\payment\\pdf.html.twig");
    }
}
