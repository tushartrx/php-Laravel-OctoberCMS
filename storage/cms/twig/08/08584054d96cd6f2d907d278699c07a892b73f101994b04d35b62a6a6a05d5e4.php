<?php

/* C:\xampp\htdocs\octobr/themes/responsiv-clean/pages/home.htm */
class __TwigTemplate_c5f0cf545f7869cecdd8ce247fb40c19045ceca2fa6bc092c6c05a98e0010d2d extends Twig_Template
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
        echo "<div
    id=\"homePosts\"
    class=\"post-list home-posts\">
    ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/posts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "</div>
<div
    class=\"text-center\"
    data-control=\"auto-pager\"
    data-request=\"onPagePosts\"
    data-request-update=\"'home/posts': '@#homePosts'\"
    data-current-page=\"1\"
    data-last-page=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["posts"] ?? null), "lastPage", array()), "html", null, true);
        echo "\">
    <a class=\"text-muted oc-loading\">Fetching posts..</a>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobr/themes/responsiv-clean/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 12,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div
    id=\"homePosts\"
    class=\"post-list home-posts\">
    {% partial 'home/posts' %}
</div>
<div
    class=\"text-center\"
    data-control=\"auto-pager\"
    data-request=\"onPagePosts\"
    data-request-update=\"'home/posts': '@#homePosts'\"
    data-current-page=\"1\"
    data-last-page=\"{{ posts.lastPage }}\">
    <a class=\"text-muted oc-loading\">Fetching posts..</a>
</div>", "C:\\xampp\\htdocs\\octobr/themes/responsiv-clean/pages/home.htm", "");
    }
}
