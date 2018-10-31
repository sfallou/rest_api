<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_fa3da2ac6ddc0b103b1317bd6ce393bbef536390c4131503339cfd40dea08b9f extends Twig_Template
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
        $__internal_aacbed4d9f109e3eb09dd01d01b861ee03b8b2a4a390a2cfbcd19e8ae4f1fd03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aacbed4d9f109e3eb09dd01d01b861ee03b8b2a4a390a2cfbcd19e8ae4f1fd03->enter($__internal_aacbed4d9f109e3eb09dd01d01b861ee03b8b2a4a390a2cfbcd19e8ae4f1fd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_aacbed4d9f109e3eb09dd01d01b861ee03b8b2a4a390a2cfbcd19e8ae4f1fd03->leave($__internal_aacbed4d9f109e3eb09dd01d01b861ee03b8b2a4a390a2cfbcd19e8ae4f1fd03_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Users/sfallou/Projects/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
