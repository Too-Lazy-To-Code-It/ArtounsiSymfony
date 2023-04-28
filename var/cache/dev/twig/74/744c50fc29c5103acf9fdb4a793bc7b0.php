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
        echo "<!DOCTYPE html>
<html>
<head>
    <style>
        /* Styling for the header band */
        .header-band {
            background-color: #7453fc;
            height: 50px;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 999;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            color: white;
            text-align: center;
        }
        
        /* Styling for the table */
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 60px;
        }
        
        table, th, td {
            border: 1px solid #3B566E;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: #3B566E;
            color: white;
        }
        
        /* Rounded corners for table */
        table {
            border-radius: 5px;
            overflow: hidden;
        }
        
        /* Styling for the total amount */
        .total-amount {
            background-color: #7453fc;
            color: white;
            padding: 10px;
            margin-top: 20px;
            text-align: right;
        }
        
        /* Styling for the product image */
        .product-image {
            width: 50px;
            height: auto;
        }
    </style>
</head>
<body>
   
 
    ";
        // line 68
        $context["date_facture"] = twig_date_format_filter($this->env, (isset($context["date_facture"]) || array_key_exists("date_facture", $context) ? $context["date_facture"] : (function () { throw new RuntimeError('Variable "date_facture" does not exist.', 68, $this->source); })()), "d/m/Y H:i");
        // line 69
        echo "
    <div class=\"header-band\">Facture</div><br></br>
  
    <div class=\"table-responsive\">
        <table class=\"table mb-0\">
            <thead>
                <tr>
                    <th>ID Facture</th>
                    <th>Nom de la photo</th>
                   
                    <th>Prix unitaire</th>
   
                </tr>
            </thead>
            <tbody>
                ";
        // line 84
        $context["id_facture"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lignesPanier"]) || array_key_exists("lignesPanier", $context) ? $context["lignesPanier"] : (function () { throw new RuntimeError('Variable "lignesPanier" does not exist.', 84, $this->source); })()), 0, [], "array", false, false, false, 84), "idpanier", [], "any", false, false, false, 84), "getIdUser", [], "method", false, false, false, 84) . twig_replace_filter(twig_replace_filter((isset($context["date_facture"]) || array_key_exists("date_facture", $context) ? $context["date_facture"] : (function () { throw new RuntimeError('Variable "date_facture" does not exist.', 84, $this->source); })()), ["-" => "", " " => "", ":" => ""]), ["/" => ""]));
        // line 85
        echo "
                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lignesPanier"]) || array_key_exists("lignesPanier", $context) ? $context["lignesPanier"] : (function () { throw new RuntimeError('Variable "lignesPanier" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 87
            echo "                    <tr>
                        <td>";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["id_facture"]) || array_key_exists("id_facture", $context) ? $context["id_facture"] : (function () { throw new RuntimeError('Variable "id_facture" does not exist.', 88, $this->source); })()), "html", null, true);
            echo "</td>   
                        <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "idproduit", [], "any", false, false, false, 89), "nom", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
                        <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "idproduit", [], "any", false, false, false, 90), "prix", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "            </tbody>
        </table>
    </div>
    <div class=\"total-amount\">
        Montant total à payer : ";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 97, $this->source); })()), "html", null, true);
        echo "
    </div>
    <div class=\"date-facture\">
        Date de génération de la facture : ";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["date_facture"]) || array_key_exists("date_facture", $context) ? $context["date_facture"] : (function () { throw new RuntimeError('Variable "date_facture" does not exist.', 100, $this->source); })()), "html", null, true);
        echo "
    </div>
</body>
</html>
";
        
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
        return array (  172 => 100,  166 => 97,  160 => 93,  151 => 90,  147 => 89,  143 => 88,  140 => 87,  136 => 86,  133 => 85,  131 => 84,  114 => 69,  112 => 68,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <style>
        /* Styling for the header band */
        .header-band {
            background-color: #7453fc;
            height: 50px;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 999;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            color: white;
            text-align: center;
        }
        
        /* Styling for the table */
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 60px;
        }
        
        table, th, td {
            border: 1px solid #3B566E;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: #3B566E;
            color: white;
        }
        
        /* Rounded corners for table */
        table {
            border-radius: 5px;
            overflow: hidden;
        }
        
        /* Styling for the total amount */
        .total-amount {
            background-color: #7453fc;
            color: white;
            padding: 10px;
            margin-top: 20px;
            text-align: right;
        }
        
        /* Styling for the product image */
        .product-image {
            width: 50px;
            height: auto;
        }
    </style>
</head>
<body>
   
 
    {% set date_facture = date_facture|date('d/m/Y H:i') %}

    <div class=\"header-band\">Facture</div><br></br>
  
    <div class=\"table-responsive\">
        <table class=\"table mb-0\">
            <thead>
                <tr>
                    <th>ID Facture</th>
                    <th>Nom de la photo</th>
                   
                    <th>Prix unitaire</th>
   
                </tr>
            </thead>
            <tbody>
                {% set id_facture = lignesPanier[0].idpanier.getIdUser() ~ date_facture|replace({'-': '', ' ': '', ':': ''})|replace({'/': ''}) %}

                {% for ligne in lignesPanier %}
                    <tr>
                        <td>{{ id_facture }}</td>   
                        <td>{{ ligne.idproduit.nom }}</td>
                        <td>{{ ligne.idproduit.prix }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
    <div class=\"total-amount\">
        Montant total à payer : {{ total}}
    </div>
    <div class=\"date-facture\">
        Date de génération de la facture : {{ date_facture }}
    </div>
</body>
</html>
", "payment/pdf.html.twig", "C:\\Users\\aouad\\Desktop\\Pidev web\\ArtounsiSymfony-master\\templates\\payment\\pdf.html.twig");
    }
}
