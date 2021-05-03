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

/* bundles/EasyAdminBundle/welcome.html.twig */
class __TwigTemplate_4ca1e0e0cab96688152f6449d50fac77d6b1e7aa6efdedfcea0d6dd1fac1fa5f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'header_logo' => [$this, 'block_header_logo'],
            'page_content' => [$this, 'block_page_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@EasyAdmin/page/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bundles/EasyAdminBundle/welcome.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bundles/EasyAdminBundle/welcome.html.twig"));

        $this->parent = $this->loadTemplate("@EasyAdmin/page/content.html.twig", "bundles/EasyAdminBundle/welcome.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["titre_page"]) || array_key_exists("titre_page", $context) ? $context["titre_page"] : (function () { throw new RuntimeError('Variable "titre_page" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_logo"));

        // line 10
        echo "    <a class=\"logo ";
        echo (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 10, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 10)), 14))) ? ("logo-long") : (""));
        echo "\"
       title=\"";
        // line 11
        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 11, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 11)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("store_accueil");
        echo "\">
        ";
        // line 12
        echo twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 12, $this->source); })()), "dashboardTitle", [], "any", false, false, false, 12);
        echo "
    </a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 17
        echo "
    ";
        // line 19
        echo "    <div class=\"row\">
        <div class=\"col-sm-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <span style=\"font-size: 2rem; color: orange\"><i class=\"fas fa-shopping-cart\"></i></span>
                    <p class=\"card-text\">Total de commandes</p>
                    <a href=\" ";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("BackOffice_accueil");
        echo "\" class=\"btn btn-primary\">Voir les commandes</a>
                </div>
            </div>
        </div>

        ";
        // line 31
        echo "        <div class=\"col-sm-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <span style=\"font-size: 2rem; color: coral\"><i class=\"fas fa-thermometer-three-quarters\"></i></span>
                    <p class=\"card-text\"> Produit en stock</p>
                    <a href=\"#\" class=\"btn btn-primary\">Voir les produits</a>
                </div>
            </div>
        </div>

        ";
        // line 42
        echo "        <div class=\"col-sm-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <span style=\"font-size: 2rem; color: green\"><i class=\"far fa-money-bill-alt\"></i></span>
                    <p class=\"card-text\">Revenus total</p>
                    <a href=\"#\" class=\"btn btn-primary\">Voir les payements</a>
                </div>
            </div>
        </div>


        ";
        // line 54
        echo "        <div class=\"col-sm-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <span style=\"font-size: 2rem; color: lightslategrey\"><i class=\"fas fa-users\"></i></span>
                    <p class=\"card-text\">Total de commandes</p>
                    <a href=\"#\" class=\"btn btn-primary\">Voir les users</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bundles/EasyAdminBundle/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 54,  158 => 42,  146 => 31,  138 => 25,  130 => 19,  127 => 17,  117 => 16,  104 => 12,  98 => 11,  93 => 10,  83 => 9,  70 => 5,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% extends '@EasyAdmin/page/content.html.twig' %}

{% block page_title %}
    {{ titre_page }}
{% endblock %}

{#// ***** POUR REVENIR A LA PAGE D'ACCEUIL DEPUIS LE DASHBOARD *****#}
{% block header_logo %}
    <a class=\"logo {{ ea.dashboardTitle|length > 14 ? 'logo-long' }}\"
       title=\"{{ ea.dashboardTitle|striptags }}\" href=\"{{ path('store_accueil') }}\">
        {{ ea.dashboardTitle|raw }}
    </a>
{% endblock header_logo %}

{% block page_content %}

    {# ****** DETAILS COMMANDES ***** #}
    <div class=\"row\">
        <div class=\"col-sm-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <span style=\"font-size: 2rem; color: orange\"><i class=\"fas fa-shopping-cart\"></i></span>
                    <p class=\"card-text\">Total de commandes</p>
                    <a href=\" {{ path('BackOffice_accueil') }}\" class=\"btn btn-primary\">Voir les commandes</a>
                </div>
            </div>
        </div>

        {# ****** PRODUITS EN STOCK ***** #}
        <div class=\"col-sm-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <span style=\"font-size: 2rem; color: coral\"><i class=\"fas fa-thermometer-three-quarters\"></i></span>
                    <p class=\"card-text\"> Produit en stock</p>
                    <a href=\"#\" class=\"btn btn-primary\">Voir les produits</a>
                </div>
            </div>
        </div>

        {# ****** REVENUS TOTAL ***** #}
        <div class=\"col-sm-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <span style=\"font-size: 2rem; color: green\"><i class=\"far fa-money-bill-alt\"></i></span>
                    <p class=\"card-text\">Revenus total</p>
                    <a href=\"#\" class=\"btn btn-primary\">Voir les payements</a>
                </div>
            </div>
        </div>


        {# ****** COMPTES USERS ***** #}
        <div class=\"col-sm-3\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <span style=\"font-size: 2rem; color: lightslategrey\"><i class=\"fas fa-users\"></i></span>
                    <p class=\"card-text\">Total de commandes</p>
                    <a href=\"#\" class=\"btn btn-primary\">Voir les users</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}


", "bundles/EasyAdminBundle/welcome.html.twig", "C:\\Users\\arena\\Desktop\\dev\\people_inbeauty\\templates\\bundles\\EasyAdminBundle\\welcome.html.twig");
    }
}
