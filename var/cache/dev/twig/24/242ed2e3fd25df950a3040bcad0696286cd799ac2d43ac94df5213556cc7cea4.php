<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5fbf9c54e56c37504b5e430e600055c25bb154edfb5e832c6664ae08ed2fad3e extends Twig_Template
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
        $__internal_b016371afb94c0e19490200c9dde0176654e534c9c53ca8164a3e2a0fe5b6c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b016371afb94c0e19490200c9dde0176654e534c9c53ca8164a3e2a0fe5b6c93->enter($__internal_b016371afb94c0e19490200c9dde0176654e534c9c53ca8164a3e2a0fe5b6c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b016371afb94c0e19490200c9dde0176654e534c9c53ca8164a3e2a0fe5b6c93->leave($__internal_b016371afb94c0e19490200c9dde0176654e534c9c53ca8164a3e2a0fe5b6c93_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/sfallou/Projects/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
