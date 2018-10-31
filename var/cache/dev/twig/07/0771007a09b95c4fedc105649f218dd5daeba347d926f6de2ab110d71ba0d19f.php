<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8fc1e4352312bd850b230056cf35200c1db9749fefbc53d3d93ac51a4b0692eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1edfbff3d4a7493986711c0cec51d3de126909053f4b9427f365d7bc9bedd30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1edfbff3d4a7493986711c0cec51d3de126909053f4b9427f365d7bc9bedd30->enter($__internal_b1edfbff3d4a7493986711c0cec51d3de126909053f4b9427f365d7bc9bedd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b1edfbff3d4a7493986711c0cec51d3de126909053f4b9427f365d7bc9bedd30->leave($__internal_b1edfbff3d4a7493986711c0cec51d3de126909053f4b9427f365d7bc9bedd30_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_266d5ca114f990544d1ab40090e2efbadb24b28cf5115507a754a83d1c2236ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_266d5ca114f990544d1ab40090e2efbadb24b28cf5115507a754a83d1c2236ab->enter($__internal_266d5ca114f990544d1ab40090e2efbadb24b28cf5115507a754a83d1c2236ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_266d5ca114f990544d1ab40090e2efbadb24b28cf5115507a754a83d1c2236ab->leave($__internal_266d5ca114f990544d1ab40090e2efbadb24b28cf5115507a754a83d1c2236ab_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/sfallou/Projects/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
