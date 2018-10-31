<?php

/* ::base.html.twig */
class __TwigTemplate_a98a9f4f95160bcc7ca757bb64bf438aca92b2097cb6a04ab98b46ffb079ad92 extends Twig_Template
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
        $__internal_a76a57ae26e8207766fe466bef1a6b603888594c9b20a70513e7961d00e643a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76a57ae26e8207766fe466bef1a6b603888594c9b20a70513e7961d00e643a2->enter($__internal_a76a57ae26e8207766fe466bef1a6b603888594c9b20a70513e7961d00e643a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a76a57ae26e8207766fe466bef1a6b603888594c9b20a70513e7961d00e643a2->leave($__internal_a76a57ae26e8207766fe466bef1a6b603888594c9b20a70513e7961d00e643a2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6989cd076bc8304c24722180db8959e62028c55d3621c85e9ed3d0365eeffc04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6989cd076bc8304c24722180db8959e62028c55d3621c85e9ed3d0365eeffc04->enter($__internal_6989cd076bc8304c24722180db8959e62028c55d3621c85e9ed3d0365eeffc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6989cd076bc8304c24722180db8959e62028c55d3621c85e9ed3d0365eeffc04->leave($__internal_6989cd076bc8304c24722180db8959e62028c55d3621c85e9ed3d0365eeffc04_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_72b3a217d424a05c77d4935b8bc85bb7c4b294c9a5b31a246275d13641bd34f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b3a217d424a05c77d4935b8bc85bb7c4b294c9a5b31a246275d13641bd34f6->enter($__internal_72b3a217d424a05c77d4935b8bc85bb7c4b294c9a5b31a246275d13641bd34f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_72b3a217d424a05c77d4935b8bc85bb7c4b294c9a5b31a246275d13641bd34f6->leave($__internal_72b3a217d424a05c77d4935b8bc85bb7c4b294c9a5b31a246275d13641bd34f6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8043e12be3de2da94e0c2d1862bc0ca5387c0d4b017160e03c8761d093fc3b16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8043e12be3de2da94e0c2d1862bc0ca5387c0d4b017160e03c8761d093fc3b16->enter($__internal_8043e12be3de2da94e0c2d1862bc0ca5387c0d4b017160e03c8761d093fc3b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8043e12be3de2da94e0c2d1862bc0ca5387c0d4b017160e03c8761d093fc3b16->leave($__internal_8043e12be3de2da94e0c2d1862bc0ca5387c0d4b017160e03c8761d093fc3b16_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_73b4729650151122bb5d9d4d96e63ce7309df3453f5f66c7d66a413b92df14c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b4729650151122bb5d9d4d96e63ce7309df3453f5f66c7d66a413b92df14c7->enter($__internal_73b4729650151122bb5d9d4d96e63ce7309df3453f5f66c7d66a413b92df14c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_73b4729650151122bb5d9d4d96e63ce7309df3453f5f66c7d66a413b92df14c7->leave($__internal_73b4729650151122bb5d9d4d96e63ce7309df3453f5f66c7d66a413b92df14c7_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "/Users/sfallou/Projects/rest_api/app/Resources/views/base.html.twig");
    }
}
