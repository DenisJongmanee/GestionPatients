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

/* infirmier/index.html.twig */
class __TwigTemplate_7a7780fd1a8a1102ce9a9698cb13612b3c9c758adbe311f70827ea017997ea20 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "infirmier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "infirmier/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello InfirmierController!";
        
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
\t\t\t\t<th scope=\"col\">Id de l'infirmier</th>
\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t<th scope=\"col\">Prénom</th>
\t\t\t\t<th scope=\"col\">Date de Naissance</th>
\t\t\t\t<th scope=\"col\">Service</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 18
        echo "\t\t\t<tr>
\t\t\t\t<th scope=\"row\">Salut</th>
\t\t\t\t<td>Coucou</td>
\t\t\t\t<td>Yo</td>
\t\t\t\t<td>Bonjour</td>
\t\t\t\t<td>Bonjour</td>
\t\t\t</tr>
\t\t\t";
        // line 26
        echo "\t\t</tbody>
\t</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "infirmier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 26,  86 => 18,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello InfirmierController!{% endblock %}

{% block body %}
<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th scope=\"col\">Id de l'infirmier</th>
\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t<th scope=\"col\">Prénom</th>
\t\t\t\t<th scope=\"col\">Date de Naissance</th>
\t\t\t\t<th scope=\"col\">Service</th>
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
\t\t\t</tr>
\t\t\t{#% endfor %#}
\t\t</tbody>
\t</table>
{% endblock %}
", "infirmier/index.html.twig", "C:\\Users\\bamme\\OneDrive\\Bureau\\Cours EPSI B2\\Projet Transversal\\Conception\\GestionPatients\\templates\\infirmier\\index.html.twig");
    }
}
