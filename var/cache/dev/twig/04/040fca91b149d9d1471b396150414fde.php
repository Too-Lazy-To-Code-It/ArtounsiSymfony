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

/* map/index.html.twig */
class __TwigTemplate_061cf4929c6ad4ec06780618ef667c5a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "map/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "map/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>events from google map</title>
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.css\" integrity=\"sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==\" crossorigin=\"\"/>
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css\">
    <!-- CSS -->
    <style>
        #maCarte{
            height: 600px;
        }
    </style>
</head>
<body>
<div id=\"maCarte\"></div>

<!-- Fichiers Javascript -->
<script src=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.js\" integrity=\"sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==\" crossorigin=\"\"></script>
<script src=\"https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js\"></script>
<script>
    var villes = {
        \"Marsa\": { \"lat\": 36.8764, \"lon\":10.3253 },
        \"Esprit\": { \"lat\": 36.89771, \"lon\": 10.18962 },
        \"Quimper\": { \"lat\": 36.8771072, \"lon\": 10.3120896 },
        \"Bayonne\": { \"lat\": 43.500, \"lon\": -1.467 },
        \"Studio Ghibli\": { \"lat\": 35.70483, \"lon\": 139.54088 },
        \"studio pixar\": { \"lat\": 37.8326 , \"lon\": -122.2838 },
        \"Walt Disney Animation Studios\": { \"lat\": 28.385233 , \"lon\": -81.563873 },
        \"Warner Bros studio\": { \"lat\": 24.493000 , \"lon\": \t54.601276 },
        \"kyoto animation studio\": { \"lat\":  34.924927330567726 , \"lon\": \t135.79897600922615},
    };
    var tableauMarqueurs = [];

    // On initialise la carte
    var carte = L.map('maCarte').setView([ 36.8764, 10.3253], 13);

    // On charge les \"tuiles\"
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        // Il est toujours bien de laisser le lien vers la source des données
        attribution: 'données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
        minZoom: 1,
        maxZoom: 20
    }).addTo(carte);

    var marqueurs = L.markerClusterGroup();

    // On personnalise le marqueur

    // On parcourt les différentes villes
    for(ville in villes){
        // On crée le marqueur et on lui attribue une popup
        var marqueur = L.marker([villes[ville].lat, villes[ville].lon]); //.addTo(carte); Inutile lors de l'utilisation des clusters
        marqueur.bindPopup(\"<p>\"+ville+\"</p>\");
        marqueurs.addLayer(marqueur); // On ajoute le marqueur au groupe

        // On ajoute le marqueur au tableau
        tableauMarqueurs.push(marqueur);
    }
    // On regroupe les marqueurs dans un groupe Leaflet
    var groupe = new L.featureGroup(tableauMarqueurs);

    // On adapte le zoom au groupe
    carte.fitBounds(groupe.getBounds().pad(0.5));

    carte.addLayer(marqueurs);
</script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "map/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>events from google map</title>
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.css\" integrity=\"sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==\" crossorigin=\"\"/>
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css\">
    <!-- CSS -->
    <style>
        #maCarte{
            height: 600px;
        }
    </style>
</head>
<body>
<div id=\"maCarte\"></div>

<!-- Fichiers Javascript -->
<script src=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.js\" integrity=\"sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==\" crossorigin=\"\"></script>
<script src=\"https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js\"></script>
<script>
    var villes = {
        \"Marsa\": { \"lat\": 36.8764, \"lon\":10.3253 },
        \"Esprit\": { \"lat\": 36.89771, \"lon\": 10.18962 },
        \"Quimper\": { \"lat\": 36.8771072, \"lon\": 10.3120896 },
        \"Bayonne\": { \"lat\": 43.500, \"lon\": -1.467 },
        \"Studio Ghibli\": { \"lat\": 35.70483, \"lon\": 139.54088 },
        \"studio pixar\": { \"lat\": 37.8326 , \"lon\": -122.2838 },
        \"Walt Disney Animation Studios\": { \"lat\": 28.385233 , \"lon\": -81.563873 },
        \"Warner Bros studio\": { \"lat\": 24.493000 , \"lon\": \t54.601276 },
        \"kyoto animation studio\": { \"lat\":  34.924927330567726 , \"lon\": \t135.79897600922615},
    };
    var tableauMarqueurs = [];

    // On initialise la carte
    var carte = L.map('maCarte').setView([ 36.8764, 10.3253], 13);

    // On charge les \"tuiles\"
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        // Il est toujours bien de laisser le lien vers la source des données
        attribution: 'données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
        minZoom: 1,
        maxZoom: 20
    }).addTo(carte);

    var marqueurs = L.markerClusterGroup();

    // On personnalise le marqueur

    // On parcourt les différentes villes
    for(ville in villes){
        // On crée le marqueur et on lui attribue une popup
        var marqueur = L.marker([villes[ville].lat, villes[ville].lon]); //.addTo(carte); Inutile lors de l'utilisation des clusters
        marqueur.bindPopup(\"<p>\"+ville+\"</p>\");
        marqueurs.addLayer(marqueur); // On ajoute le marqueur au groupe

        // On ajoute le marqueur au tableau
        tableauMarqueurs.push(marqueur);
    }
    // On regroupe les marqueurs dans un groupe Leaflet
    var groupe = new L.featureGroup(tableauMarqueurs);

    // On adapte le zoom au groupe
    carte.fitBounds(groupe.getBounds().pad(0.5));

    carte.addLayer(marqueurs);
</script>
</body>
</html>", "map/index.html.twig", "C:\\Users\\amine\\ArtounsiSymfonyy\\templates\\map\\index.html.twig");
    }
}
