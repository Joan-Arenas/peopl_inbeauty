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

/* contact/contact.html.twig */
class __TwigTemplate_1ffe8cefb7f1d84527594b94363d3cd1835871710ddb000280932aea6e8bc523 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        echo twig_include($this->env, $context, "partials/_navbar.html.twig");
        echo "
    ";
        // line 14
        echo "
    <!--Section: Contact v.2-->
    <section class=\"mb-4 card-body container-fluid\">

        <!--Section heading-->
        <h2 class=\"h1-responsive font-weight-bold text-center my-4 text-success\">CONTACT</h2>
        <!--Section description-->
        <p class=\"text-center w-responsive mx-auto mb-5\">Bussy-Saint-Georges, France
            People InBEAUTY - Siret : 83320569300017 - RCS Meaux : FR35833205693</p>

        <div class=\"row\">

            <!--Grid column-->
            <div class=\"col-md-9 mb-md-0 mb-5\">
                <form id=\"contact-form\" name=\"contact-form\" action=\"mail.php\" method=\"POST\">

                    <!--Grid row-->
                    <div class=\"row\">

                        <!--Grid column-->
                        <div class=\"col-md-6\">
                            <div class=\"md-form mb-0\">
                                <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
                                <label for=\"name\" class=\"\">Nom</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class=\"col-md-6\">
                            <div class=\"md-form mb-0\">
                                <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
                                <label for=\"email\" class=\"\">email</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"md-form mb-0\">
                                <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\">
                                <label for=\"subject\" class=\"\">Sujet</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class=\"row\">

                        <!--Grid column-->
                        <div class=\"col-md-12\">

                            <div class=\"md-form\">
                                <textarea type=\"text\" id=\"message\" name=\"message\" rows=\"2\"
                                          class=\"form-control md-textarea\"></textarea>
                                <label for=\"message\">Ecrivez-nous</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

                <div class=\"text-center text-md-left\">
                    <a class=\"btn btn-primary\" onclick=\"document.getElementById('contact-form').submit();\">Envoyer</a>
                </div>
                <div class=\"status\"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-md-3 text-center\">
                <ul class=\"list-unstyled mb-0\">
                    <li><i class=\"fas fa-map-marker-alt fa-2x\"></i>
                        <p>7 rue de Paris, 75007 Paris</p>
                    </li>

                    <li><i class=\"fas fa-phone mt-4 fa-2x\"></i>
                        <p>+ 01 234 567 89</p>
                    </li>

                    <li><i class=\"fas fa-envelope mt-4 fa-2x\"></i>
                        <p>diana.inbeauty@hotmail.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>

    </section>
    <!--Section: Contact v.2-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 114
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 115
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 115,  212 => 114,  104 => 14,  99 => 12,  96 => 10,  86 => 9,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}

    <link href=\"{{ asset('css/styles.css') }}\" rel=\"stylesheet\"/>

{% endblock %}

{% block body %}

    {# DEBUT NAVBAR #}
    {{ include('partials/_navbar.html.twig') }}
    {# FIN NAVBAR #}

    <!--Section: Contact v.2-->
    <section class=\"mb-4 card-body container-fluid\">

        <!--Section heading-->
        <h2 class=\"h1-responsive font-weight-bold text-center my-4 text-success\">CONTACT</h2>
        <!--Section description-->
        <p class=\"text-center w-responsive mx-auto mb-5\">Bussy-Saint-Georges, France
            People InBEAUTY - Siret : 83320569300017 - RCS Meaux : FR35833205693</p>

        <div class=\"row\">

            <!--Grid column-->
            <div class=\"col-md-9 mb-md-0 mb-5\">
                <form id=\"contact-form\" name=\"contact-form\" action=\"mail.php\" method=\"POST\">

                    <!--Grid row-->
                    <div class=\"row\">

                        <!--Grid column-->
                        <div class=\"col-md-6\">
                            <div class=\"md-form mb-0\">
                                <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\">
                                <label for=\"name\" class=\"\">Nom</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class=\"col-md-6\">
                            <div class=\"md-form mb-0\">
                                <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\">
                                <label for=\"email\" class=\"\">email</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"md-form mb-0\">
                                <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\">
                                <label for=\"subject\" class=\"\">Sujet</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class=\"row\">

                        <!--Grid column-->
                        <div class=\"col-md-12\">

                            <div class=\"md-form\">
                                <textarea type=\"text\" id=\"message\" name=\"message\" rows=\"2\"
                                          class=\"form-control md-textarea\"></textarea>
                                <label for=\"message\">Ecrivez-nous</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

                <div class=\"text-center text-md-left\">
                    <a class=\"btn btn-primary\" onclick=\"document.getElementById('contact-form').submit();\">Envoyer</a>
                </div>
                <div class=\"status\"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-md-3 text-center\">
                <ul class=\"list-unstyled mb-0\">
                    <li><i class=\"fas fa-map-marker-alt fa-2x\"></i>
                        <p>7 rue de Paris, 75007 Paris</p>
                    </li>

                    <li><i class=\"fas fa-phone mt-4 fa-2x\"></i>
                        <p>+ 01 234 567 89</p>
                    </li>

                    <li><i class=\"fas fa-envelope mt-4 fa-2x\"></i>
                        <p>diana.inbeauty@hotmail.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>

    </section>
    <!--Section: Contact v.2-->
{% endblock %}

{% block title %}

{% endblock %}

", "contact/contact.html.twig", "C:\\Users\\arena\\Desktop\\dev\\people_inbeauty\\templates\\contact\\contact.html.twig");
    }
}
