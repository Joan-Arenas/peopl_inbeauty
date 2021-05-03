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

/* panier/panier.html.twig */
class __TwigTemplate_9706979dc0c6aae3f501cbdcce7d133b5a93939824fae5c2946c0b52482428d8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/panier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/panier.html.twig", 1);
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

        echo "Hello PanierController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
      <!-- CSS -->
      <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/panier.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    ";
        // line 14
        echo "    ";
        echo twig_include($this->env, $context, "partials/_navbar.html.twig");
        echo "
    ";
        // line 16
        echo "
    <div class=\"px-4 px-lg-0\">
        <div class=\"pb-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 p-5 bg-white rounded shadow-sm mb-5\">

                        <!-- Shopping cart table -->
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th scope=\"col\" class=\"border-0 bg-light\">
                                        <div class=\"p-2 px-3 text-uppercase\">Produit</div>
                                    </th>
                                    <th scope=\"col\" class=\"border-0 bg-light\">
                                        <div class=\"py-2 text-uppercase\">Prix</div>
                                    </th>
                                    <th scope=\"col\" class=\"border-0 bg-light\">
                                        <div class=\"py-2 text-uppercase\">Quantité</div>
                                    </th>
                                    <th scope=\"col\" class=\"border-0 bg-light\">
                                        <div class=\"py-2 text-uppercase\">Supprimer</div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                ";
        // line 45
        echo "
                                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contenuDuPanier"]) || array_key_exists("contenuDuPanier", $context) ? $context["contenuDuPanier"] : (function () { throw new RuntimeError('Variable "contenuDuPanier" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produitQte"]) {
            // line 47
            echo "                                    ";
            $context["produit"] = twig_get_attribute($this->env, $this->source, $context["produitQte"], "produit", [], "any", false, false, false, 47);
            // line 48
            echo "                                    ";
            $context["quantite"] = twig_get_attribute($this->env, $this->source, $context["produitQte"], "quantite", [], "any", false, false, false, 48);
            // line 49
            echo "                                    <tr id=\"tr-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\"> ";
            // line 50
            echo "                                        <th scope=\"row\" class=\"border-0\">
                                            <div class=\"p-2\">
                                                <img src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 52, $this->source); })()), "fichierPhoto"), "html", null, true);
            echo "\"
                                                     alt=\"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 53, $this->source); })()), "nom", [], "any", false, false, false, 53), "html", null, true);
            echo "\" width=\"70\"
                                                     class=\"img-fluid rounded shadow-sm\">
                                                <div class=\"ml-3 d-inline-block align-middle\">
                                                    <h5 class=\"mb-0\">
                                                        <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("store_details", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 57, $this->source); })()), "slug", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\"
                                                           class=\"text-dark d-inline-block align-middle\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 58, $this->source); })()), "nom", [], "any", false, false, false, 58), "html", null, true);
            echo "</a>
                                                    </h5>
                                                    <span class=\"text-muted font-weight-normal font-italic d-block\">Categorie: ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 60, $this->source); })()), "categorie", [], "any", false, false, false, 60), "html", null, true);
            echo "</span>
                                                </div>
                                            </div>
                                        </th>

                                        <td class=\"border-0 align-middle\"><strong> ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 65, $this->source); })()), "prix", [], "any", false, false, false, 65), "html", null, true);
            echo " €</strong></td>
                                        <td class=\"border-0 align-middle\">
                                            <strong><span id=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["quantite"]) || array_key_exists("quantite", $context) ? $context["quantite"] : (function () { throw new RuntimeError('Variable "quantite" does not exist.', 67, $this->source); })()), "html", null, true);
            echo "</span></strong>


                                            ";
            // line 71
            echo "                                            <button class=\"btn btn-primary diminuerPanier\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71), "html", null, true);
            echo "\">
                                                <i class=\"fas fa-minus\"></i>
                                            </button>

                                            ";
            // line 76
            echo "                                            <button class=\"btn btn-primary ajoutPanier\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76), "html", null, true);
            echo "\">
                                                <i class=\"fas fa-plus\"></i>
                                            </button>

                                        </td>
                                        <td class=\"border-0 align-middle\">
                                            <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_supprimer", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\" class=\"text-dark\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                            ";
            // line 86
            echo "                                        </td>
                                    </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produitQte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "
                                </tbody>
                            </table>
                        </div>
                        <!-- End -->
                    </div>
                </div>

                <div class=\"row py-5 p-4 bg-white rounded shadow-sm\">
                    <div class=\"col-lg-6\">
                        <div class=\"bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold\">Coupon code</div>
                        <div class=\"p-4\">
                            <p class=\"font-italic mb-4\">If you have a coupon code, please enter it in the box below</p>
                            <div class=\"input-group mb-4 border rounded-pill p-2\">
                                <input type=\"text\" placeholder=\"Apply coupon\" aria-describedby=\"button-addon3\"
                                       class=\"form-control border-0\">
                                <div class=\"input-group-append border-0\">
                                    <button id=\"button-addon3\" type=\"button\" class=\"btn btn-dark px-4 rounded-pill\"><i
                                                class=\"fa fa-gift mr-2\"></i>Apply coupon
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class=\"bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold\">Instructions for
                            seller
                        </div>
                        <div class=\"p-4\">
                            <p class=\"font-italic mb-4\">If you have some information for the seller you can leave them
                                in the box below</p>
                            <textarea name=\"\" cols=\"30\" rows=\"2\" class=\"form-control\"></textarea>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold\">Order summary</div>
                        <div class=\"p-4\">
                            <p class=\"font-italic mb-4\">Shipping and additional costs are calculated based on values you
                                have entered.</p>
                            <ul class=\"list-unstyled mb-4\">
                                <li class=\"d-flex justify-content-between py-3 border-bottom\"><strong
                                            class=\"text-muted\">Order Subtotal </strong><strong>\$390.00</strong></li>
                                <li class=\"d-flex justify-content-between py-3 border-bottom\"><strong
                                            class=\"text-muted\">Shipping and handling</strong><strong>\$10.00</strong>
                                </li>
                                <li class=\"d-flex justify-content-between py-3 border-bottom\"><strong
                                            class=\"text-muted\">Tax</strong><strong>\$0.00</strong></li>
                                <li class=\"d-flex justify-content-between py-3 border-bottom\"><strong
                                            class=\"text-muted\">Total</strong>
                                    <h5 class=\"font-weight-bold\">\$400.00</h5>
                                </li>
                            </ul>
                            <a href=\"#\" class=\"btn btn-dark rounded-pill py-2 btn-block\">Procceed to checkout</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 151
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 152
        echo "
    ";
        // line 153
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/panier.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panier/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 154,  332 => 153,  329 => 152,  319 => 151,  250 => 90,  241 => 86,  235 => 82,  225 => 76,  217 => 71,  209 => 67,  204 => 65,  196 => 60,  191 => 58,  187 => 57,  180 => 53,  176 => 52,  172 => 50,  168 => 49,  165 => 48,  162 => 47,  158 => 46,  155 => 45,  125 => 16,  120 => 14,  117 => 12,  107 => 11,  94 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello PanierController!{% endblock %}

  {% block stylesheets %}

      <!-- CSS -->
      <link href=\"{{ asset('css/panier.css') }}\" rel=\"stylesheet\"/>

  {% endblock %}
{% block body %}

    {# DEBUT NAVBAR #}
    {{ include('partials/_navbar.html.twig') }}
    {# FIN NAVBAR #}

    <div class=\"px-4 px-lg-0\">
        <div class=\"pb-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 p-5 bg-white rounded shadow-sm mb-5\">

                        <!-- Shopping cart table -->
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th scope=\"col\" class=\"border-0 bg-light\">
                                        <div class=\"p-2 px-3 text-uppercase\">Produit</div>
                                    </th>
                                    <th scope=\"col\" class=\"border-0 bg-light\">
                                        <div class=\"py-2 text-uppercase\">Prix</div>
                                    </th>
                                    <th scope=\"col\" class=\"border-0 bg-light\">
                                        <div class=\"py-2 text-uppercase\">Quantité</div>
                                    </th>
                                    <th scope=\"col\" class=\"border-0 bg-light\">
                                        <div class=\"py-2 text-uppercase\">Supprimer</div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                {# ***** AFFICHAGE DES PRODUITS DU PANIER DANS LE TABLEAU ***** #}

                                {% for produitQte in contenuDuPanier %}
                                    {% set produit = produitQte.produit %}
                                    {% set quantite = produitQte.quantite %}
                                    <tr id=\"tr-{{ produit.id }}\"> {# *** ICI ON DONNE UN NOM A L'ID DU TR ***#}
                                        <th scope=\"row\" class=\"border-0\">
                                            <div class=\"p-2\">
                                                <img src=\"{{ vich_uploader_asset(produit, 'fichierPhoto') }}\"
                                                     alt=\"{{ produit.nom }}\" width=\"70\"
                                                     class=\"img-fluid rounded shadow-sm\">
                                                <div class=\"ml-3 d-inline-block align-middle\">
                                                    <h5 class=\"mb-0\">
                                                        <a href=\"{{ path('store_details',{slug:produit.slug}) }}\"
                                                           class=\"text-dark d-inline-block align-middle\">{{ produit.nom }}</a>
                                                    </h5>
                                                    <span class=\"text-muted font-weight-normal font-italic d-block\">Categorie: {{ produit.categorie }}</span>
                                                </div>
                                            </div>
                                        </th>

                                        <td class=\"border-0 align-middle\"><strong> {{ produit.prix }} €</strong></td>
                                        <td class=\"border-0 align-middle\">
                                            <strong><span id=\"{{ produit.id }}\">{{ quantite }}</span></strong>


                                            {# ***** BOUTON MOINS ***** #}
                                            <button class=\"btn btn-primary diminuerPanier\" data-id=\"{{ produit.id }}\">
                                                <i class=\"fas fa-minus\"></i>
                                            </button>

                                            {# ***** BOUTON PLUS ***** #}
                                            <button class=\"btn btn-primary ajoutPanier\" data-id=\"{{ produit.id }}\">
                                                <i class=\"fas fa-plus\"></i>
                                            </button>

                                        </td>
                                        <td class=\"border-0 align-middle\">
                                            <a href=\"{{ path('panier_supprimer', {id:produit.id}) }}\" class=\"text-dark\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                            {# ***** FIN BOUTON PLUS OU MOINS ***** #}
                                        </td>
                                    </tr>

                                {% endfor %}

                                </tbody>
                            </table>
                        </div>
                        <!-- End -->
                    </div>
                </div>

                <div class=\"row py-5 p-4 bg-white rounded shadow-sm\">
                    <div class=\"col-lg-6\">
                        <div class=\"bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold\">Coupon code</div>
                        <div class=\"p-4\">
                            <p class=\"font-italic mb-4\">If you have a coupon code, please enter it in the box below</p>
                            <div class=\"input-group mb-4 border rounded-pill p-2\">
                                <input type=\"text\" placeholder=\"Apply coupon\" aria-describedby=\"button-addon3\"
                                       class=\"form-control border-0\">
                                <div class=\"input-group-append border-0\">
                                    <button id=\"button-addon3\" type=\"button\" class=\"btn btn-dark px-4 rounded-pill\"><i
                                                class=\"fa fa-gift mr-2\"></i>Apply coupon
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class=\"bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold\">Instructions for
                            seller
                        </div>
                        <div class=\"p-4\">
                            <p class=\"font-italic mb-4\">If you have some information for the seller you can leave them
                                in the box below</p>
                            <textarea name=\"\" cols=\"30\" rows=\"2\" class=\"form-control\"></textarea>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold\">Order summary</div>
                        <div class=\"p-4\">
                            <p class=\"font-italic mb-4\">Shipping and additional costs are calculated based on values you
                                have entered.</p>
                            <ul class=\"list-unstyled mb-4\">
                                <li class=\"d-flex justify-content-between py-3 border-bottom\"><strong
                                            class=\"text-muted\">Order Subtotal </strong><strong>\$390.00</strong></li>
                                <li class=\"d-flex justify-content-between py-3 border-bottom\"><strong
                                            class=\"text-muted\">Shipping and handling</strong><strong>\$10.00</strong>
                                </li>
                                <li class=\"d-flex justify-content-between py-3 border-bottom\"><strong
                                            class=\"text-muted\">Tax</strong><strong>\$0.00</strong></li>
                                <li class=\"d-flex justify-content-between py-3 border-bottom\"><strong
                                            class=\"text-muted\">Total</strong>
                                    <h5 class=\"font-weight-bold\">\$400.00</h5>
                                </li>
                            </ul>
                            <a href=\"#\" class=\"btn btn-dark rounded-pill py-2 btn-block\">Procceed to checkout</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

{% endblock %}

{% block javascripts %}

    {{ parent() }}
    <script src=\"{{ asset('js/panier.js') }}\"></script>


{% endblock %}
", "panier/panier.html.twig", "C:\\Users\\arena\\Desktop\\dev\\people_inbeauty\\templates\\panier\\panier.html.twig");
    }
}
