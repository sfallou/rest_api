<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a80e33120e12cf206d939158a9143359b5d4985b55ab400d2822813c2dcb523e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3df263a4434ec7adcaedc5bf22e152f62817ce0789cd825dfb96fc3378a3e2d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df263a4434ec7adcaedc5bf22e152f62817ce0789cd825dfb96fc3378a3e2d5->enter($__internal_3df263a4434ec7adcaedc5bf22e152f62817ce0789cd825dfb96fc3378a3e2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3df263a4434ec7adcaedc5bf22e152f62817ce0789cd825dfb96fc3378a3e2d5->leave($__internal_3df263a4434ec7adcaedc5bf22e152f62817ce0789cd825dfb96fc3378a3e2d5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b18730ab781b89d7bbe4054525f0d4e2a8cb3edb4509090ac8546a5c12ae20b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18730ab781b89d7bbe4054525f0d4e2a8cb3edb4509090ac8546a5c12ae20b5->enter($__internal_b18730ab781b89d7bbe4054525f0d4e2a8cb3edb4509090ac8546a5c12ae20b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b18730ab781b89d7bbe4054525f0d4e2a8cb3edb4509090ac8546a5c12ae20b5->leave($__internal_b18730ab781b89d7bbe4054525f0d4e2a8cb3edb4509090ac8546a5c12ae20b5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9b3a18960e113129c3f88c68059320ebefc017adbb217a0756ce845d981f42f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b3a18960e113129c3f88c68059320ebefc017adbb217a0756ce845d981f42f5->enter($__internal_9b3a18960e113129c3f88c68059320ebefc017adbb217a0756ce845d981f42f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9b3a18960e113129c3f88c68059320ebefc017adbb217a0756ce845d981f42f5->leave($__internal_9b3a18960e113129c3f88c68059320ebefc017adbb217a0756ce845d981f42f5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_710cfab8c4e60e8b48b42a20371b8bdcc0b763cc881f99538a9cc269f4790db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710cfab8c4e60e8b48b42a20371b8bdcc0b763cc881f99538a9cc269f4790db8->enter($__internal_710cfab8c4e60e8b48b42a20371b8bdcc0b763cc881f99538a9cc269f4790db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_710cfab8c4e60e8b48b42a20371b8bdcc0b763cc881f99538a9cc269f4790db8->leave($__internal_710cfab8c4e60e8b48b42a20371b8bdcc0b763cc881f99538a9cc269f4790db8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Users/sfallou/Projects/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
