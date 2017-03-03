<?php

/* base.html.twig */
class __TwigTemplate_008b88d846c1b887d8eb52e4b4d281b85eb28e18c4b3906e75d70c6a3624822a extends Twig_Template
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
        $__internal_3c42480ae6ea6a0f7c16a43a3ac78350a18dda99d6fd22637bb09c2a84801d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c42480ae6ea6a0f7c16a43a3ac78350a18dda99d6fd22637bb09c2a84801d70->enter($__internal_3c42480ae6ea6a0f7c16a43a3ac78350a18dda99d6fd22637bb09c2a84801d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3c42480ae6ea6a0f7c16a43a3ac78350a18dda99d6fd22637bb09c2a84801d70->leave($__internal_3c42480ae6ea6a0f7c16a43a3ac78350a18dda99d6fd22637bb09c2a84801d70_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_747d7e4846f99745ce223ed7ac26847494f460f67fe43fca3c0d05a2884b8c7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747d7e4846f99745ce223ed7ac26847494f460f67fe43fca3c0d05a2884b8c7b->enter($__internal_747d7e4846f99745ce223ed7ac26847494f460f67fe43fca3c0d05a2884b8c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_747d7e4846f99745ce223ed7ac26847494f460f67fe43fca3c0d05a2884b8c7b->leave($__internal_747d7e4846f99745ce223ed7ac26847494f460f67fe43fca3c0d05a2884b8c7b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_54d3fd0ab422fd4316589712018d673cfe3ab367dc81a8e1ba16e6766f615d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d3fd0ab422fd4316589712018d673cfe3ab367dc81a8e1ba16e6766f615d2a->enter($__internal_54d3fd0ab422fd4316589712018d673cfe3ab367dc81a8e1ba16e6766f615d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_54d3fd0ab422fd4316589712018d673cfe3ab367dc81a8e1ba16e6766f615d2a->leave($__internal_54d3fd0ab422fd4316589712018d673cfe3ab367dc81a8e1ba16e6766f615d2a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bb52c7b8d295fa183cdafebf74db91d7060d0bcade6572908a291e7f05bd72a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb52c7b8d295fa183cdafebf74db91d7060d0bcade6572908a291e7f05bd72a->enter($__internal_3bb52c7b8d295fa183cdafebf74db91d7060d0bcade6572908a291e7f05bd72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3bb52c7b8d295fa183cdafebf74db91d7060d0bcade6572908a291e7f05bd72a->leave($__internal_3bb52c7b8d295fa183cdafebf74db91d7060d0bcade6572908a291e7f05bd72a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b122092be913f897772b18f377030662408c335b60f3fdaa1ad4178158ce5312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b122092be913f897772b18f377030662408c335b60f3fdaa1ad4178158ce5312->enter($__internal_b122092be913f897772b18f377030662408c335b60f3fdaa1ad4178158ce5312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b122092be913f897772b18f377030662408c335b60f3fdaa1ad4178158ce5312->leave($__internal_b122092be913f897772b18f377030662408c335b60f3fdaa1ad4178158ce5312_prof);

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
", "base.html.twig", "D:\\xampp\\htdocs\\R_&_D\\symfony2\\app\\Resources\\views\\base.html.twig");
    }
}
