<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e9a76348d9988e0bd685e7b3156870a4cecbbc51e203e0311c57c613742a9234 extends Twig_Template
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
        $__internal_87d9018f536d67d897a7137e2ba1d7751d333ca6f66c70da0cf6ccfcce024bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d9018f536d67d897a7137e2ba1d7751d333ca6f66c70da0cf6ccfcce024bd8->enter($__internal_87d9018f536d67d897a7137e2ba1d7751d333ca6f66c70da0cf6ccfcce024bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_87d9018f536d67d897a7137e2ba1d7751d333ca6f66c70da0cf6ccfcce024bd8->leave($__internal_87d9018f536d67d897a7137e2ba1d7751d333ca6f66c70da0cf6ccfcce024bd8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/sfallou/Projects/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
