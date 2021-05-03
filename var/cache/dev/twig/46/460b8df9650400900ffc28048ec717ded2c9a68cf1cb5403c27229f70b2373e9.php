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

/* store/index.html.twig */
class __TwigTemplate_99ca108d839e33b13197cd3e3f958897040b96c1feb7daf4387ccf4644344edc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "store/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "store/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "store/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "People InBeauty";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 11
        echo "<header class=\"masthead\">
        <div class=\"container\">

            <div class=\"masthead-heading text-light\">People <span class=\"text-success\">In</span>BEAUTY</div>
            <div class=\"masthead-subheading text-white\">Soins, visage, corps et cheveux</div>


        </div>
    </header>
    ";
        // line 21
        echo "
    <section class=\"jumbotron text-center\">
        <div class=\"container\">
            <h1>NOTRE CATALOGUE</h1>
            <hr class=\"bg-success p-1\" size=\"50px\">

        </div>
    </section>

    <div class=\"container\">
";
        // line 32
        echo "        <div class=\"row \">
            <div class=\"col-md-2\">
                ";
        // line 35
        echo "                ";
        echo twig_include($this->env, $context, "partials/_recherche.html.twig");
        echo "
                ";
        // line 37
        echo "            </div>
            <div id=\"catalog\" class=\"col-md-10\">

                ";
        // line 41
        echo "                ";
        echo twig_include($this->env, $context, "partials/_catalogue.html.twig");
        echo "
                ";
        // line 43
        echo "            </div>

        </div>

    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "store/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 43,  133 => 41,  128 => 37,  123 => 35,  119 => 32,  107 => 21,  96 => 11,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}People InBeauty{% endblock %}

{% block body %}

    {{ parent() }}

    {# Masthead -----------------------------------------------------------------------------------------------------   -#}

    <header class=\"masthead\">
        <div class=\"container\">

            <div class=\"masthead-heading text-light\">People <span class=\"text-success\">In</span>BEAUTY</div>
            <div class=\"masthead-subheading text-white\">Soins, visage, corps et cheveux</div>


        </div>
    </header>
    {# FIN Masthead-------------------------------------------------------------------------------------------------- #}

    <section class=\"jumbotron text-center\">
        <div class=\"container\">
            <h1>NOTRE CATALOGUE</h1>
            <hr class=\"bg-success p-1\" size=\"50px\">

        </div>
    </section>

    <div class=\"container\">
{# ***** FORMULAIRE DE RECHERHCE ***** #}
        <div class=\"row \">
            <div class=\"col-md-2\">
                {# DEBUT RECHERHCE#}
                {{ include('partials/_recherche.html.twig') }}
                {# FIN RECHERCHE#}
            </div>
            <div id=\"catalog\" class=\"col-md-10\">

                {# DEBUT CATALOGUE #}
                {{ include('partials/_catalogue.html.twig') }}
                {# FIN CATALOGUE #}
            </div>

        </div>

    </div>


{% endblock %}
", "store/index.html.twig", "C:\\Users\\arena\\Desktop\\dev\\people_inbeauty\\templates\\store\\index.html.twig");
    }
}
