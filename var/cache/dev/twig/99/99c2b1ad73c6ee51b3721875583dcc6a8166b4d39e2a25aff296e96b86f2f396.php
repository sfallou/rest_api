<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_7d342b1c364f290cc887867a604e5123c82cf940fbead558ca7071466bf9ce29 extends Twig_Template
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
        $__internal_26f563438f5cedcdae4b84ff1225cfd9b1cad300d1b1b12f6a2f94f20e414ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f563438f5cedcdae4b84ff1225cfd9b1cad300d1b1b12f6a2f94f20e414ff9->enter($__internal_26f563438f5cedcdae4b84ff1225cfd9b1cad300d1b1b12f6a2f94f20e414ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_26f563438f5cedcdae4b84ff1225cfd9b1cad300d1b1b12f6a2f94f20e414ff9->leave($__internal_26f563438f5cedcdae4b84ff1225cfd9b1cad300d1b1b12f6a2f94f20e414ff9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/Users/sfallou/Projects/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
