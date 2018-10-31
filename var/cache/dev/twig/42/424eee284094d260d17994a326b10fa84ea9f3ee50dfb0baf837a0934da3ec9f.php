<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c9f6f1164edf2b3498dfc8556dbc03e83f0484779364cd4e64dd21d5df9847f9 extends Twig_Template
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
        $__internal_8f4cd6ceb7b403d191ecec53c0af17451161d88ae27b1a14d8726728b879ff3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4cd6ceb7b403d191ecec53c0af17451161d88ae27b1a14d8726728b879ff3b->enter($__internal_8f4cd6ceb7b403d191ecec53c0af17451161d88ae27b1a14d8726728b879ff3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_8f4cd6ceb7b403d191ecec53c0af17451161d88ae27b1a14d8726728b879ff3b->leave($__internal_8f4cd6ceb7b403d191ecec53c0af17451161d88ae27b1a14d8726728b879ff3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/sfallou/Projects/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
