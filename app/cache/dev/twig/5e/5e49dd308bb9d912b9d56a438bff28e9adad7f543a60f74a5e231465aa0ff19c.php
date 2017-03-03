<?php

/* home/home.html.twig */
class __TwigTemplate_0331d31b3572df14c2a9232d345f99ee748dd97bb59f91c2afcff72af7500f6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c9b71b8acf36bf0be28c1572c47f3e7615834604bb497121f6553ed92c1e478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9b71b8acf36bf0be28c1572c47f3e7615834604bb497121f6553ed92c1e478->enter($__internal_4c9b71b8acf36bf0be28c1572c47f3e7615834604bb497121f6553ed92c1e478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c9b71b8acf36bf0be28c1572c47f3e7615834604bb497121f6553ed92c1e478->leave($__internal_4c9b71b8acf36bf0be28c1572c47f3e7615834604bb497121f6553ed92c1e478_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cb8ef3ce1cd961d5fa012efec89b97756fdffb5bd4c90ca330da4a90d4522cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb8ef3ce1cd961d5fa012efec89b97756fdffb5bd4c90ca330da4a90d4522cb->enter($__internal_4cb8ef3ce1cd961d5fa012efec89b97756fdffb5bd4c90ca330da4a90d4522cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
            </div>

            <div id=\"status\">
                <p>
                    ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_4cb8ef3ce1cd961d5fa012efec89b97756fdffb5bd4c90ca330da4a90d4522cb->leave($__internal_4cb8ef3ce1cd961d5fa012efec89b97756fdffb5bd4c90ca330da4a90d4522cb_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
            </div>

            <div id=\"status\">
                <p>
                    {{ title }}
                </p>
            </div>
        </div>
    </div>
{% endblock %}

", "home/home.html.twig", "D:\\xampp\\htdocs\\R_n_D\\symfony2\\app\\Resources\\views\\home\\home.html.twig");
    }
}
