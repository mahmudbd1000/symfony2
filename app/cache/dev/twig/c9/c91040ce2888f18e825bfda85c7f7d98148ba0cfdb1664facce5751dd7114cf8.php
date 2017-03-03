<?php

/* base.html.twig */
class __TwigTemplate_6ba74072bce71f896d70a299a374db0217eb7d2f025785868651f81a2b65d51f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea736a8283bf7b3480f417978560100af5e3b0f944258da6ca52bed01ab76c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea736a8283bf7b3480f417978560100af5e3b0f944258da6ca52bed01ab76c57->enter($__internal_ea736a8283bf7b3480f417978560100af5e3b0f944258da6ca52bed01ab76c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ea736a8283bf7b3480f417978560100af5e3b0f944258da6ca52bed01ab76c57->leave($__internal_ea736a8283bf7b3480f417978560100af5e3b0f944258da6ca52bed01ab76c57_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ca680a152cf8d0eb8049cef5d3f798e473d7fe276875c7135edbd48d9907a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca680a152cf8d0eb8049cef5d3f798e473d7fe276875c7135edbd48d9907a47->enter($__internal_9ca680a152cf8d0eb8049cef5d3f798e473d7fe276875c7135edbd48d9907a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9ca680a152cf8d0eb8049cef5d3f798e473d7fe276875c7135edbd48d9907a47->leave($__internal_9ca680a152cf8d0eb8049cef5d3f798e473d7fe276875c7135edbd48d9907a47_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_83defcf05d2672e35e741b46b87bf638ba2854202a6f04ece917b525297f5eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83defcf05d2672e35e741b46b87bf638ba2854202a6f04ece917b525297f5eb8->enter($__internal_83defcf05d2672e35e741b46b87bf638ba2854202a6f04ece917b525297f5eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_83defcf05d2672e35e741b46b87bf638ba2854202a6f04ece917b525297f5eb8->leave($__internal_83defcf05d2672e35e741b46b87bf638ba2854202a6f04ece917b525297f5eb8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1a417a7a4855797c31e2dd003a8c227f59bd5895572161324f1ee520009b3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a417a7a4855797c31e2dd003a8c227f59bd5895572161324f1ee520009b3b7->enter($__internal_c1a417a7a4855797c31e2dd003a8c227f59bd5895572161324f1ee520009b3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c1a417a7a4855797c31e2dd003a8c227f59bd5895572161324f1ee520009b3b7->leave($__internal_c1a417a7a4855797c31e2dd003a8c227f59bd5895572161324f1ee520009b3b7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2dd4ac7b738b112a059c6fb19cb0a3d23eba6decb67ebfac3f1490f38fe4a283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd4ac7b738b112a059c6fb19cb0a3d23eba6decb67ebfac3f1490f38fe4a283->enter($__internal_2dd4ac7b738b112a059c6fb19cb0a3d23eba6decb67ebfac3f1490f38fe4a283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2dd4ac7b738b112a059c6fb19cb0a3d23eba6decb67ebfac3f1490f38fe4a283->leave($__internal_2dd4ac7b738b112a059c6fb19cb0a3d23eba6decb67ebfac3f1490f38fe4a283_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "D:\\xampp\\htdocs\\R_n_D\\symfony2\\app\\Resources\\views\\base.html.twig");
    }
}
