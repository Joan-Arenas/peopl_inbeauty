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

/* partials/_recherche.html.twig */
class __TwigTemplate_8a754870bd26fa7ad82d2118662f17308856fbbb6190562fa3ccadca95a53db9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_recherche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_recherche.html.twig"));

        // line 1
        echo "<fieldset class=\"border-success card-footer\">
    <h4 class=\"text-center text-success font-italic\">Recherche</h4>
</fieldset>
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRecherche"]) || array_key_exists("formRecherche", $context) ? $context["formRecherche"] : (function () { throw new RuntimeError('Variable "formRecherche" does not exist.', 4, $this->source); })()), 'form_start');
        echo "
                ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRecherche"]) || array_key_exists("formRecherche", $context) ? $context["formRecherche"] : (function () { throw new RuntimeError('Variable "formRecherche" does not exist.', 5, $this->source); })()), "chaine", [], "any", false, false, false, 5), 'row');
        echo "
<h5>Catégories</h5>
<hr class=\"bg-success\">
";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRecherche"]) || array_key_exists("formRecherche", $context) ? $context["formRecherche"] : (function () { throw new RuntimeError('Variable "formRecherche" does not exist.', 8, $this->source); })()), "categories", [], "any", false, false, false, 8), 'row');
        echo "
<hr class=\"bg-success\">
<h5>Marques</h5>
";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRecherche"]) || array_key_exists("formRecherche", $context) ? $context["formRecherche"] : (function () { throw new RuntimeError('Variable "formRecherche" does not exist.', 11, $this->source); })()), "marques", [], "any", false, false, false, 11), 'row');
        echo "
<hr class=\"bg-success\">

<button class=\"btn btn-primary\" type=\"submit\">Recherche</button>
";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRecherche"]) || array_key_exists("formRecherche", $context) ? $context["formRecherche"] : (function () { throw new RuntimeError('Variable "formRecherche" does not exist.', 15, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  64 => 11,  58 => 8,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<fieldset class=\"border-success card-footer\">
    <h4 class=\"text-center text-success font-italic\">Recherche</h4>
</fieldset>
{{ form_start(formRecherche) }}
                {{ form_row (formRecherche.chaine) }}
<h5>Catégories</h5>
<hr class=\"bg-success\">
{{ form_row (formRecherche.categories) }}
<hr class=\"bg-success\">
<h5>Marques</h5>
{{ form_row (formRecherche.marques) }}
<hr class=\"bg-success\">

<button class=\"btn btn-primary\" type=\"submit\">Recherche</button>
{{ form_end(formRecherche) }}", "partials/_recherche.html.twig", "C:\\Users\\arena\\Desktop\\dev\\people_inbeauty\\templates\\partials\\_recherche.html.twig");
    }
}
