<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_e0b84e6e7702a3a48285de66f6d2a7cdc0823de030edc7c318aa29ac6ec651da extends Twig_Template
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
        $__internal_9ad02ef8c690c80a0fa351a7a25ba23d0a066e42ffe018cd03d19ca1a2533bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad02ef8c690c80a0fa351a7a25ba23d0a066e42ffe018cd03d19ca1a2533bcd->enter($__internal_9ad02ef8c690c80a0fa351a7a25ba23d0a066e42ffe018cd03d19ca1a2533bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_9ad02ef8c690c80a0fa351a7a25ba23d0a066e42ffe018cd03d19ca1a2533bcd->leave($__internal_9ad02ef8c690c80a0fa351a7a25ba23d0a066e42ffe018cd03d19ca1a2533bcd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/sfallou/Projects/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
