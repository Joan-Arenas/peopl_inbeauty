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

/* cart/index.html.twig */
class __TwigTemplate_837f6e547c2a5dfa8277ee693f0c6c64f4a488e59f382d98e20327541cc0f6da extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Votre panier";
        
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
        echo "    <section class=\"bg-light p-3\">
        <h1>Votre panier</h1>
    </section>

    <table class=\"table\">
        <thead>
        <tr>
            <th>Produit</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Total</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataPanier"]) || array_key_exists("dataPanier", $context) ? $context["dataPanier"] : (function () { throw new RuntimeError('Variable "dataPanier" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "produit", [], "any", false, false, false, 23), "nom", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td class=\"text-end\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "produit", [], "any", false, false, false, 24), "prix", [], "any", false, false, false, 24), "html", null, true);
            echo " €</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td class=\"text-end\">";
            // line 26
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 26) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "produit", [], "any", false, false, false, 26), "prix", [], "any", false, false, false, 26)), "html", null, true);
            echo " €</td>
                <td>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "produit", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">
                        <i class=\"fas fa-minus\"></i>
                    </a>
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "produit", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"btn btn-success\">
                        <i class=\"fas fa-plus\"></i>
                    </a>

                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "produit", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                        <i class=\"fa fa-trash\"></i>
                    </a>

                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "            <tr>
                <td colspan=\"5\" class=\"text-center\">Votre panier est vide</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
        <tfoot>
        <tr>
            <td colspan=\"3\">Total</td>
            <td class=\"text-end\">";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 50, $this->source); })()), "html", null, true);
        echo " €</td>
            <td>
                <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete_all");
        echo "\" class=\"btn btn-danger\">
                    <i class=\"fa fa-trash\"></i>
                </a>
            </td>
        </tr>
        </tfoot>
    </table>

    <a class=\"text-success text-wrap font-italic float-left\"
       href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("store_accueil");
        echo "\">
        <i class=\"fas fa-hand-point-left\"> Accueil</i>
    </a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 61,  175 => 52,  170 => 50,  164 => 46,  155 => 42,  143 => 35,  136 => 31,  130 => 28,  125 => 26,  121 => 25,  117 => 24,  113 => 23,  110 => 22,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Votre panier{% endblock %}

{% block body %}
    <section class=\"bg-light p-3\">
        <h1>Votre panier</h1>
    </section>

    <table class=\"table\">
        <thead>
        <tr>
            <th>Produit</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Total</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for produit in dataPanier %}
            <tr>
                <td>{{ produit.produit.nom }}</td>
                <td class=\"text-end\">{{ produit.produit.prix }} €</td>
                <td>{{ produit.quantite }}</td>
                <td class=\"text-end\">{{ produit.quantite * produit.produit.prix }} €</td>
                <td>
                    <a href=\"{{path(\"cart_remove\", {id: produit.produit.id})}}\" class=\"btn btn-warning\">
                        <i class=\"fas fa-minus\"></i>
                    </a>
                    <a href=\"{{path(\"cart_add\", {id: produit.produit.id})}}\" class=\"btn btn-success\">
                        <i class=\"fas fa-plus\"></i>
                    </a>

                    <a href=\"{{path(\"cart_delete\", {id: produit.produit.id})}}\" class=\"btn btn-danger\">
                        <i class=\"fa fa-trash\"></i>
                    </a>

                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\" class=\"text-center\">Votre panier est vide</td>
            </tr>
        {% endfor %}
        </tbody>
        <tfoot>
        <tr>
            <td colspan=\"3\">Total</td>
            <td class=\"text-end\">{{ total }} €</td>
            <td>
                <a href=\"{{path(\"cart_delete_all\")}}\" class=\"btn btn-danger\">
                    <i class=\"fa fa-trash\"></i>
                </a>
            </td>
        </tr>
        </tfoot>
    </table>

    <a class=\"text-success text-wrap font-italic float-left\"
       href=\"{{ path('store_accueil') }}\">
        <i class=\"fas fa-hand-point-left\"> Accueil</i>
    </a>

{% endblock %}", "cart/index.html.twig", "C:\\Users\\arena\\Desktop\\dev\\people_inbeauty\\templates\\cart\\index.html.twig");
    }
}
