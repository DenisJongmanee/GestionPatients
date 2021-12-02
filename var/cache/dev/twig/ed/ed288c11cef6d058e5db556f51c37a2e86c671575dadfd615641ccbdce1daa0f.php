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

/* sejour/index.html.twig */
class __TwigTemplate_f3398ee9c34ebe62dc3b6808e63a7cebdac0ee5e328fcc1bd4025cd6ddc101a3 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sejour/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sejour/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Séjour
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">Id Séjour</th>
\t\t\t\t<th scope=\"col\">Nom du patient</th>
\t\t\t\t<th scope=\"col\">Prenom du patient</th>
\t\t\t\t<th scope=\"col\">Date d'entée</th>
\t\t\t\t<th scope=\"col\">Date de sortie</th>
\t\t\t\t<th scope=\"col\">Nom du service</th>
\t\t\t\t<th scope=\"col\">Numéro de chambre</th>
\t\t\t\t<th scope=\"col\">Numéro de lit</th>
\t\t\t\t<th scope=\"col\">Problème</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 24
        echo "\t\t\t<tr>
\t\t\t\t<th scope=\"row\">";
        // line 25
        echo "Salut</th>
\t\t\t\t<td>";
        // line 26
        echo "Coucou</td>
\t\t\t\t<td>";
        // line 27
        echo "Yo</td>
\t\t\t\t<td>";
        // line 28
        echo "Bonjour</td>
\t\t\t\t<td>Bonjour</td>
\t\t\t\t<td>Bonjour</td>
\t\t\t\t<td>Bonjour</td>
\t\t\t\t<td>Bonjour</td>
\t\t\t\t<td>Bonjour</td>
\t\t\t</tr>
\t\t\t";
        // line 36
        echo "\t\t</tbody>
\t</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "sejour/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 36,  104 => 28,  101 => 27,  98 => 26,  95 => 25,  92 => 24,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Séjour
{% endblock %}

{% block body %}

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">Id Séjour</th>
\t\t\t\t<th scope=\"col\">Nom du patient</th>
\t\t\t\t<th scope=\"col\">Prenom du patient</th>
\t\t\t\t<th scope=\"col\">Date d'entée</th>
\t\t\t\t<th scope=\"col\">Date de sortie</th>
\t\t\t\t<th scope=\"col\">Nom du service</th>
\t\t\t\t<th scope=\"col\">Numéro de chambre</th>
\t\t\t\t<th scope=\"col\">Numéro de lit</th>
\t\t\t\t<th scope=\"col\">Problème</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{#% for patient in patients %#}
\t\t\t<tr>
\t\t\t\t<th scope=\"row\">{#{ patient.id_patient }#}Salut</th>
\t\t\t\t<td>{#{ patient.nom }#}Coucou</td>
\t\t\t\t<td>{#{ patient.prenom }#}Yo</td>
\t\t\t\t<td>{#{ patient.date_naissance }#}Bonjour</td>
\t\t\t\t<td>Bonjour</td>
\t\t\t\t<td>Bonjour</td>
\t\t\t\t<td>Bonjour</td>
\t\t\t\t<td>Bonjour</td>
\t\t\t\t<td>Bonjour</td>
\t\t\t</tr>
\t\t\t{#% endfor %#}
\t\t</tbody>
\t</table>

{% endblock %}
", "sejour/index.html.twig", "C:\\Users\\bamme\\OneDrive\\Bureau\\Cours EPSI B2\\Projet Transversal\\Conception\\GestionPatients\\templates\\sejour\\index.html.twig");
    }
}
