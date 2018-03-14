<?php

/* C:\xampp\htdocs\octobr/themes/octbr/partials/site/header.htm */
class __TwigTemplate_230b3200daebb6881bcff197c2a691fc1e02d9f9434d3ffccc058942df047d2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-dark bg-dark \">
    <a class=\"navbar-brand\" href=\"#\">";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"";
        // line 9
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\"  href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
            </li>

            <li class=\"";
        // line 13
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "about")) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\"  href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\">About <span class=\"sr-only\">(current)</span></a>
            </li>

            <li class=\"";
        // line 17
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "blog")) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\"  href=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
        echo "\">Blog <span class=\"sr-only\">(current)</span></a>
            </li>

            <li class=\"";
        // line 21
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "contact")) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\"  href=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
        echo "\">Conatct <span class=\"sr-only\">(current)</span></a>
            </li>


        </ul>

    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobr/themes/octbr/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  68 => 21,  62 => 18,  56 => 17,  50 => 14,  44 => 13,  38 => 10,  32 => 9,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-md navbar-dark bg-dark \">
    <a class=\"navbar-brand\" href=\"#\">{{this.theme.site_name}}</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"{% if this.page.id == 'home' %}active{% endif %}\">
                <a class=\"nav-link\"  href=\"{{'home'|page}}\">Home <span class=\"sr-only\">(current)</span></a>
            </li>

            <li class=\"{% if this.page.id == 'about' %}active{% endif %}\">
                <a class=\"nav-link\"  href=\"{{'about'|page}}\">About <span class=\"sr-only\">(current)</span></a>
            </li>

            <li class=\"{% if this.page.id == 'blog' %}active{% endif %}\">
                <a class=\"nav-link\"  href=\"{{'blog'|page}}\">Blog <span class=\"sr-only\">(current)</span></a>
            </li>

            <li class=\"{% if this.page.id == 'contact' %}active{% endif %}\">
                <a class=\"nav-link\"  href=\"{{'contact'|page}}\">Conatct <span class=\"sr-only\">(current)</span></a>
            </li>


        </ul>

    </div>
</nav>", "C:\\xampp\\htdocs\\octobr/themes/octbr/partials/site/header.htm", "");
    }
}
