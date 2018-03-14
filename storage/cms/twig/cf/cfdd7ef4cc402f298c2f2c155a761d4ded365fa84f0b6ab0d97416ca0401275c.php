<?php

/* C:\xampp\htdocs\octobr/themes/octbr/pages/home.htm */
class __TwigTemplate_0cfa9e6ba7606f3150aaae3d692b54c6aa51751fce4204d1801776633cc670bc extends Twig_Template
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
        echo "<div class=\"container\">
  <div class=\"jumbotron text-center\">
    <h1>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</h1> 
    <p>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_description", array()), "html", null, true);
        echo "</p>
    <a href=\"{'about'|page}\" class=\"btn btn-primary\">Read more</a>
  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobr/themes/octbr/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
  <div class=\"jumbotron text-center\">
    <h1>{{this.theme.site_name}}</h1> 
    <p>{{this.theme.site_description}}</p>
    <a href=\"{'about'|page}\" class=\"btn btn-primary\">Read more</a>
  </div>

</div>", "C:\\xampp\\htdocs\\octobr/themes/octbr/pages/home.htm", "");
    }
}
