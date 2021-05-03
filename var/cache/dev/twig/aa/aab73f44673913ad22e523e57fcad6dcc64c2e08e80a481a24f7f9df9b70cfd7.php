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

/* partials/_navbar.html.twig */
class __TwigTemplate_2c54e851b9ec8f5da776c631e354b0ecf4b36cf1b20b868ce53689bbebac6d8c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_navbar.html.twig"));

        // line 3
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light sticky-top \">
    <a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("store_accueil");
        echo "\">
        <img class=\"showing\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo " \" width=\"155px\" height=\"70px\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav text-uppercase\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("store_accueil");
        echo "\"><span class=\"text-success\">Accueil</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("store_accueil");
        echo "\"><i class=\"fas fa-list-ul\"></i> Catalogue</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
            </li>
        </ul>
    </div>


    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav text-uppercase ml-auto\">
            ";
        // line 28
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 30
            echo "<li class=\"nav-item \">
                    <a class=\"nav-link\" href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("BackOffice_accueil");
            echo "\">
                        <i class=\"fas fa-tachometer-alt\"></i>Dashboard
                    </a>
                </li>
            ";
        }
        // line 36
        echo "

            ";
        // line 38
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_ANONYMOUS")) {
            // line 40
            echo "<li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"fas fa-user\"></i> LOGIN</a>
                </li>";
            // line 45
            echo "<li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">REGISTER</a>
                </li>
            ";
        }
        // line 49
        echo "


            ";
        // line 52
        if ((0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_ANONYMOUS"), false))) {
            // line 54
            echo "<li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Mon Compte
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\" ";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo " \"><i class=\"fas fa-power-off\"></i>
                            Déconnexion</a>
                    </div>
                </li>
            ";
        }
        // line 67
        echo "<li class=\"nav-item dropdown\">
                <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_contenu");
        echo "\" class=\"nav-link dropdown-toggle\" id=\"panierDropdown\" role=\"button\"
                   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-shopping-cart\"></i> Panier
                </a>

                <div class=\"dropdown-menu navPanier\" aria-labelledby=\"navbarDropdown\">
                    <table class=\"table table-sm border-0 panier\">
                        <tbody class=\"contenu-panier\"> </tbody>
                    </table>
                </div>


            </li>


            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_contenu");
        echo "\" role=\"button\"
                   aria-haspopup=\"true\" aria-expanded=\"false\">

                </a>

            </li>";
        // line 92
        echo "<form class=\"form-inline my-2 my-lg-0 ml-auto\">
                <input class=\"form-control mr-sm-1\" type=\"search\" placeholder=\"Recherche\" aria-label=\"Search\">
                <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\"><i class=\"fas fa-search\"></i>
                </button>
            </form>
        </ul>

    </div>

</nav>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 92,  165 => 84,  146 => 68,  143 => 67,  135 => 60,  127 => 54,  125 => 52,  120 => 49,  114 => 46,  111 => 45,  107 => 41,  104 => 40,  102 => 38,  98 => 36,  90 => 31,  87 => 30,  85 => 28,  74 => 20,  68 => 17,  62 => 14,  50 => 5,  46 => 4,  43 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# DEBUT NAVBAR--------------------------------------------------------------------------------------------------           -#}

<nav class=\"navbar navbar-expand-lg navbar-light bg-light sticky-top \">
    <a class=\"navbar-brand\" href=\"{{ path('store_accueil') }}\">
        <img class=\"showing\" src=\"{{ asset('assets/img/logo.png') }} \" width=\"155px\" height=\"70px\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav text-uppercase\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{ path('store_accueil') }}\"><span class=\"text-success\">Accueil</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('store_accueil') }}\"><i class=\"fas fa-list-ul\"></i> Catalogue</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('contact') }}\">Contact</a>
            </li>
        </ul>
    </div>


    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav text-uppercase ml-auto\">
            {% if is_granted('ROLE_ADMIN') %}
                {#- ---Dashboard-----           -#}
                <li class=\"nav-item \">
                    <a class=\"nav-link\" href=\"{{ path('BackOffice_accueil') }}\">
                        <i class=\"fas fa-tachometer-alt\"></i>Dashboard
                    </a>
                </li>
            {% endif %}


            {% if is_granted('IS_ANONYMOUS') %}
                {#- ---LOGIN-----           -#}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_login') }}\"><i class=\"fas fa-user\"></i> LOGIN</a>
                </li>

                {#- ---REGISTER-----           -#}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_register') }}\">REGISTER</a>
                </li>
            {% endif %}



            {% if is_granted('IS_ANONYMOUS') == false %}
                {#- ---COMPTE-----           -#}
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Mon Compte
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\" {{ path('app_logout') }} \"><i class=\"fas fa-power-off\"></i>
                            Déconnexion</a>
                    </div>
                </li>
            {% endif %}

            {#- ---Panier-----           -#}
            <li class=\"nav-item dropdown\">
                <a href=\"{{ path('panier_contenu') }}\" class=\"nav-link dropdown-toggle\" id=\"panierDropdown\" role=\"button\"
                   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-shopping-cart\"></i> Panier
                </a>

                <div class=\"dropdown-menu navPanier\" aria-labelledby=\"navbarDropdown\">
                    <table class=\"table table-sm border-0 panier\">
                        <tbody class=\"contenu-panier\"> </tbody>
                    </table>
                </div>


            </li>


            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" href=\"{{ path('panier_contenu') }}\" role=\"button\"
                   aria-haspopup=\"true\" aria-expanded=\"false\">

                </a>

            </li>

            {#- ---BARRE RECHERCHE-----           -#}
            <form class=\"form-inline my-2 my-lg-0 ml-auto\">
                <input class=\"form-control mr-sm-1\" type=\"search\" placeholder=\"Recherche\" aria-label=\"Search\">
                <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\"><i class=\"fas fa-search\"></i>
                </button>
            </form>
        </ul>

    </div>

</nav>


{# FIN NAVBAR ---------------------------------------------------------------------------------------------------           -#}

", "partials/_navbar.html.twig", "C:\\Users\\arena\\Desktop\\dev\\people_inbeauty\\templates\\partials\\_navbar.html.twig");
    }
}
