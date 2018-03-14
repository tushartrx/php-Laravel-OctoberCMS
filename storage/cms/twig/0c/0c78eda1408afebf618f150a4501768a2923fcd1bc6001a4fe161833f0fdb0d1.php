<?php

/* C:\xampp\htdocs\octobr/themes/octbr/pages/contact.htm */
class __TwigTemplate_03f07ca9d0d5ec81d42a5c53c707117bb21d170d66036f3a66eed3e42b73e257 extends Twig_Template
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
        echo "<h1>contact us</h1>
<form>
    <div class=\"form-group\">
        <label>Name</label>
        <input type=\"text\" class=\"form-control\">
    </div>
    
    <div class=\"form-group\">
        <label>Email</label>
        <input type=\"email\" class=\"form-control\">
    </div>
    
    <div class=\"form-group\">
        <label>Message</label>
        <input type=\"text\" class=\"form-control\">
    </div>
    
    <button type=\"submit\"></button>

</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobr/themes/octbr/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>contact us</h1>
<form>
    <div class=\"form-group\">
        <label>Name</label>
        <input type=\"text\" class=\"form-control\">
    </div>
    
    <div class=\"form-group\">
        <label>Email</label>
        <input type=\"email\" class=\"form-control\">
    </div>
    
    <div class=\"form-group\">
        <label>Message</label>
        <input type=\"text\" class=\"form-control\">
    </div>
    
    <button type=\"submit\"></button>

</form>", "C:\\xampp\\htdocs\\octobr/themes/octbr/pages/contact.htm", "");
    }
}
