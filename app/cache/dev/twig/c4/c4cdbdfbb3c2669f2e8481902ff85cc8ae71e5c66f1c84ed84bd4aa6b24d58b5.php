<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e2b626ef139cb23eb18eceef353165bff309287da2fa201e9dcb4a9f8b048f46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c266136547bb57ba8b68a23390577885742641faf2692e66f62a98623469553e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c266136547bb57ba8b68a23390577885742641faf2692e66f62a98623469553e->enter($__internal_c266136547bb57ba8b68a23390577885742641faf2692e66f62a98623469553e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c266136547bb57ba8b68a23390577885742641faf2692e66f62a98623469553e->leave($__internal_c266136547bb57ba8b68a23390577885742641faf2692e66f62a98623469553e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_38d512e6c61641fabc8e5b7a08a5109906ef8ac211c1a0774ca19d41782c3f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d512e6c61641fabc8e5b7a08a5109906ef8ac211c1a0774ca19d41782c3f63->enter($__internal_38d512e6c61641fabc8e5b7a08a5109906ef8ac211c1a0774ca19d41782c3f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_38d512e6c61641fabc8e5b7a08a5109906ef8ac211c1a0774ca19d41782c3f63->leave($__internal_38d512e6c61641fabc8e5b7a08a5109906ef8ac211c1a0774ca19d41782c3f63_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d94cfde0e2f35cdd8c3f6fbf2af382ec8cf96c4d8843bd1ce7d79353283b0721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d94cfde0e2f35cdd8c3f6fbf2af382ec8cf96c4d8843bd1ce7d79353283b0721->enter($__internal_d94cfde0e2f35cdd8c3f6fbf2af382ec8cf96c4d8843bd1ce7d79353283b0721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d94cfde0e2f35cdd8c3f6fbf2af382ec8cf96c4d8843bd1ce7d79353283b0721->leave($__internal_d94cfde0e2f35cdd8c3f6fbf2af382ec8cf96c4d8843bd1ce7d79353283b0721_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_82eae0f960067285863a077d040fce6a847d53e99f18a6a1231e1d160f7b5fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82eae0f960067285863a077d040fce6a847d53e99f18a6a1231e1d160f7b5fa8->enter($__internal_82eae0f960067285863a077d040fce6a847d53e99f18a6a1231e1d160f7b5fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_82eae0f960067285863a077d040fce6a847d53e99f18a6a1231e1d160f7b5fa8->leave($__internal_82eae0f960067285863a077d040fce6a847d53e99f18a6a1231e1d160f7b5fa8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "D:\\xampp\\htdocs\\R_n_D\\symfony2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
