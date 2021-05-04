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

/* partials/_catalogue.html.twig */
class __TwigTemplate_c7826e174ef3bd8e9f3847a507eb8638f73683e80bae76e907c7034736097e71 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_catalogue.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_catalogue.html.twig"));

        // line 3
        echo "<main role=\"main\" id=\"catalogue\">
    <div class=\"album py-5 bg-light\">
        <div class=\"container\">

            <div class=\"row\">

                ";
        // line 10
        echo "                ";
        if (twig_test_empty((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 10, $this->source); })()))) {
            // line 11
            echo "                    <div class=\"alert alert-info\" role=\"alert\">
                        Produits non disponibles
                    </div>
                ";
        } else {
            // line 15
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 16
                echo "                        ";
                // line 17
                echo "                        <div id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "slug", [], "any", false, false, false, 17), "html", null, true);
                echo "\" class=\"col-md-4\">
                            <div class=\"card mb-4 shadow-lg\">
                                <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("store_produit", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 19), "slug" => twig_get_attribute($this->env, $this->source, $context["produit"], "slug", [], "any", false, false, false, 19)]), "html", null, true);
                echo "\">
                                    <img class=\"bd-placeholder-img  card-img-top\" width=\"100%\" height=\"225\"
                                         src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["produit"], "fichierPhoto"), "html", null, true);
                echo "\"
                                         alt=\"";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 22), "html", null, true);
                echo "\">
                                </a>
                                <div class=\"card-body\">
                                    <h6 class=\"text-muted text-right\">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "marque", [], "any", false, false, false, 25), "nom", [], "any", false, false, false, 25), "html", null, true);
                echo "</h6>
                                    <h4 class=\"text-right\">";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 26), "html", null, true);
                echo "</h4>

                                    <span class=\"float-right\"> ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 28), "html", null, true);
                echo " €</span>
                                    <br>

                                    <div class=\"d-flex justify-content-between float-right\">
                                        <div class=\"btn-group\">

                                            <a class=\"btn btn-sm btn-light\"
                                               href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("store_produit", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 35), "slug" => twig_get_attribute($this->env, $this->source, $context["produit"], "slug", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\">
                                                En savoir plus
                                            </a>
                                            <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-success \">
                                                <i class=\"fas fa-shopping-cart \"></i>
                                                Ajouter
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                ";
        }
        // line 49
        echo "            </div>
        </div>
    </div>

</main>


<footer>
    <div class=\"container\">
        <p class=\"float-right\">
            <a class=\"nav-link text-white\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("store_accueil");
        echo "\">
                <span class=\"text-success\">Accueil</span></a>
            <a class=\"nav-link text-white\" href=\"#catalogue\">Notre Catalogue</a>
            <a class=\"nav-link text-white\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>

        </p>
        <p><h4>People <span class=\"text-success\">In</span>BEAUTY</h4>Droits d'auteur © 2021 Tous droits réservés</p>

        <p>Propulsé par DIEZ ARENAS Joan</p>
    </div>
</footer>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_catalogue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 62,  144 => 59,  132 => 49,  129 => 48,  113 => 38,  107 => 35,  97 => 28,  92 => 26,  88 => 25,  82 => 22,  78 => 21,  73 => 19,  67 => 17,  65 => 16,  60 => 15,  54 => 11,  51 => 10,  43 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# DEBUT CATALOGUE--------------------------------------------------------------------------------------------------         -#}

<main role=\"main\" id=\"catalogue\">
    <div class=\"album py-5 bg-light\">
        <div class=\"container\">

            <div class=\"row\">

                {# ***** ON FAIT LES CONDITIONS QUI NOUS PERMETENT D'AFFICHER LES PRODUITS DE LA BDD SUR NOTRE PAGE CATALOGUE ***** #}
                {% if produits is empty %}
                    <div class=\"alert alert-info\" role=\"alert\">
                        Produits non disponibles
                    </div>
                {% else %}
                    {% for produit in produits %}
                        {# ***** INJECTE LES PRODUITS ***** #}
                        <div id=\"{{ produit.slug }}\" class=\"col-md-4\">
                            <div class=\"card mb-4 shadow-lg\">
                                <a href=\"{{ path('store_produit',{id:produit.id, slug:produit.slug}) }}\">
                                    <img class=\"bd-placeholder-img  card-img-top\" width=\"100%\" height=\"225\"
                                         src=\"{{ vich_uploader_asset(produit, 'fichierPhoto') }}\"
                                         alt=\"{{ produit.nom }}\">
                                </a>
                                <div class=\"card-body\">
                                    <h6 class=\"text-muted text-right\">{{ produit.marque.nom }}</h6>
                                    <h4 class=\"text-right\">{{ produit.nom }}</h4>

                                    <span class=\"float-right\"> {{ produit.prix }} €</span>
                                    <br>

                                    <div class=\"d-flex justify-content-between float-right\">
                                        <div class=\"btn-group\">

                                            <a class=\"btn btn-sm btn-light\"
                                               href=\"{{ path('store_produit',{id:produit.id, slug:produit.slug}) }}\">
                                                En savoir plus
                                            </a>
                                            <a href=\"{{ path(\"cart_add\", {id:produit.id}) }}\" class=\"btn btn-sm btn-success \">
                                                <i class=\"fas fa-shopping-cart \"></i>
                                                Ajouter
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                {% endif %}
            </div>
        </div>
    </div>

</main>


<footer>
    <div class=\"container\">
        <p class=\"float-right\">
            <a class=\"nav-link text-white\" href=\"{{ path('store_accueil') }}\">
                <span class=\"text-success\">Accueil</span></a>
            <a class=\"nav-link text-white\" href=\"#catalogue\">Notre Catalogue</a>
            <a class=\"nav-link text-white\" href=\"{{ path('contact') }}\">Contact</a>

        </p>
        <p><h4>People <span class=\"text-success\">In</span>BEAUTY</h4>Droits d'auteur © 2021 Tous droits réservés</p>

        <p>Propulsé par DIEZ ARENAS Joan</p>
    </div>
</footer>

{# FIN CATALOGUE ---------------------------------------------------------------------------------------------------         -#}

", "partials/_catalogue.html.twig", "C:\\Users\\arena\\Desktop\\dev\\people_inbeauty\\templates\\partials\\_catalogue.html.twig");
    }
}
