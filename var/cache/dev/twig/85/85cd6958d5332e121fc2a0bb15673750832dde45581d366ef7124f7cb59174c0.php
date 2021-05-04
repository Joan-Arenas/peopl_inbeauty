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

/* store/produit.html.twig */
class __TwigTemplate_3257ebd0dc2793eb98b77d07b6c458a74917ec9e76098bd57c0f668325867d51 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "store/produit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "store/produit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "store/produit.html.twig", 1);
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

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["titre_page"]) || array_key_exists("titre_page", $context) ? $context["titre_page"] : (function () { throw new RuntimeError('Variable "titre_page" does not exist.', 4, $this->source); })())), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <h2>
            ";
        // line 11
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["titre_section"]) || array_key_exists("titre_section", $context) ? $context["titre_section"] : (function () { throw new RuntimeError('Variable "titre_section" does not exist.', 11, $this->source); })())), "html", null, true);
        echo "
        </h2>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"bg-light text-center overflow-hidden\">
                    <div class=\"my-3 p-3\">
                        <h2 class=\"display-5\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "html", null, true);
        echo "</h2>
                        <img id=\"zoomer\" class=\"bd-placeholder-img card-img-top img-fluid focusable\" style=\"width:400px\"
                             src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 19, $this->source); })()), "fichierPhoto"), "html", null, true);
        echo "\"
                             alt=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), "html", null, true);
        echo "\">
                        ";
        // line 21
        echo twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21);
        echo "
                    </div>
                    <a class=\"text-success text-wrap font-italic float-left\"
                       href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("store_accueil");
        echo "#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 24, $this->source); })()), "slug", [], "any", false, false, false, 24), "html", null, true);
        echo "\">
                        <i class=\"fas fa-hand-point-left\"> Accueil</i>
                    </a>


                        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_ajouter", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29), "slug" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 29, $this->source); })()), "slug", [], "any", false, false, false, 29)]), "html", null, true);
        echo "\"
                           class=\"btn btn-success float-right \">
                            <i class=\"fas fa-shopping-cart \"></i>
                            Ajouter
                        </a>

                </div>

            </div>


        </div>
    </div>
    </div>


    ";
        // line 67
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "store/produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 67,  137 => 29,  127 => 24,  121 => 21,  117 => 20,  113 => 19,  108 => 17,  99 => 11,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ titre_page|capitalize }}
{% endblock %}

{% block body %}
    {{ parent() }}
    <div class=\"container\">
        <h2>
            {{ titre_section|capitalize }}
        </h2>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"bg-light text-center overflow-hidden\">
                    <div class=\"my-3 p-3\">
                        <h2 class=\"display-5\">{{ produit.nom }}</h2>
                        <img id=\"zoomer\" class=\"bd-placeholder-img card-img-top img-fluid focusable\" style=\"width:400px\"
                             src=\"{{ vich_uploader_asset(produit, 'fichierPhoto') }}\"
                             alt=\"{{ produit.nom }}\">
                        {{ produit.description | raw }}
                    </div>
                    <a class=\"text-success text-wrap font-italic float-left\"
                       href=\"{{ path('store_accueil') }}#{{ produit.slug }}\">
                        <i class=\"fas fa-hand-point-left\"> Accueil</i>
                    </a>


                        <a href=\"{{ path('panier_ajouter',{id:produit.id, slug:produit.slug}) }}\"
                           class=\"btn btn-success float-right \">
                            <i class=\"fas fa-shopping-cart \"></i>
                            Ajouter
                        </a>

                </div>

            </div>


        </div>
    </div>
    </div>


    {# <div class=\"card-body align-content-center\">
                <img class=\"bd-placeholder-img card-img-top\" width=\"%\" height=\"\"
                     src=\"{{ vich_uploader_asset(produit, 'fichierPhoto') }}\"
                     alt=\"{{ produit.nom }}\">
                <div class=\"card-body shadow-lg\">
                    <h3 class=\"text-center\">{{ produit.nom }}</h3>
                    <h6 class=\"text-center font-italic\">{{ produit.marque }}</h6>

                    <p class=\"text-center\">Prix : {{ produit.prix }}€</p>
                    <p class=\"text\">{{ produit.description | raw }}</p>
                </div>
                <a class=\"text-success text-wrap font-italic float-right\" href=\"{{ path('store_accueil') }}#{{ produit.slug }}\">
                    <i class=\"fas fa-hand-point-left\"> Acceuil</i>
                </a>
                <a href=\"{{ path('panier_ajouter',{id:produit.id, slug:produit.slug}) }}\" class=\"btn btn-success \">
                    <i class=\"fas fa-shopping-cart \"></i>
                    Ajouter
                </a>
            </div>

        </div>
    </div> #}


{% endblock %}

", "store/produit.html.twig", "C:\\Users\\arena\\Desktop\\dev\\people_inbeauty\\templates\\store\\produit.html.twig");
    }
}
