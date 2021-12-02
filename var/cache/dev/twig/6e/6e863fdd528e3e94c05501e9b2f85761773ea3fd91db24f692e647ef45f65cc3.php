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

/* patient/index.html.twig */
class __TwigTemplate_27527c553a1627831cff21911f6ae3c02f0161653b62d7ec3f9c8e021e14d815 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "patient/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello PatientController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">Id du Patient</th>
\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t<th scope=\"col\">Prénom</th>
\t\t\t\t<th scope=\"col\">Date de Naissance</th>
\t\t\t\t<th scope=\"col\">Id Séjour</th>
\t\t\t\t<th scope=\"col\">Numéro de chambre</th>
\t\t\t\t<th scope=\"col\">Numéro de lit</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 20
        echo "\t\t\t<tr>
\t\t\t\t<th scope=\"row\">Salut</th>
\t\t\t\t<td>Coucou</td>
\t\t\t\t<td>Yo</td>
\t\t\t\t<td>Bonjour</td>
\t\t\t\t<td>Bonjour</td>
\t\t\t\t<td>Bonjour</td>
\t\t\t\t<td>Bonjour</td>
\t\t\t</tr>
\t\t\t";
        // line 30
        echo "\t\t</tbody>
\t</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "patient/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 30,  88 => 20,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PatientController!{% endblock %}

{% block body %}
<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">Id du Patient</th>
\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t<th scope=\"col\">Prénom</th>
\t\t\t\t<th scope=\"col\">Date de Naissance</th>
\t\t\t\t<th scope=\"col\">Id Séjour</th>
\t\t\t\t<th scope=\"col\">Numéro de chambre</th>
\t\t\t\t<th scope=\"col\">Numéro de lit</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{#% for %#}
\t\t\t<tr>
\t\t\t\t<th scope=\"row\">Salut</th>
\t\t\t\t<td>Coucou</td>
\t\t\t\t<td>Yo</td>
\t\t\t\t<td>Bonjour</td>
\t\t\t\t<td>Bonjour</td>
\t\t\t\t<td>Bonjour</td>
\t\t\t\t<td>Bonjour</td>
\t\t\t</tr>
\t\t\t{#% endfor %#}
\t\t</tbody>
\t</table>
{% endblock %}
", "patient/index.html.twig", "C:\\Users\\bamme\\OneDrive\\Bureau\\Cours EPSI B2\\Projet Transversal\\Conception\\GestionPatients\\templates\\patient\\index.html.twig");
    }
}
