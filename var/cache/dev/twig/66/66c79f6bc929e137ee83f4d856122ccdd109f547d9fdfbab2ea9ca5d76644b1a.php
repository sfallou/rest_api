<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_d270871b4ac0face649158a0dce203a0208d48b6282731aa3d8ee94d505e6708 extends Twig_Template
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
        $__internal_653e07e1713810b87a8e5c5dc549d92367345d3d7cfc666f68d0f8f28cf67d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653e07e1713810b87a8e5c5dc549d92367345d3d7cfc666f68d0f8f28cf67d52->enter($__internal_653e07e1713810b87a8e5c5dc549d92367345d3d7cfc666f68d0f8f28cf67d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_653e07e1713810b87a8e5c5dc549d92367345d3d7cfc666f68d0f8f28cf67d52->leave($__internal_653e07e1713810b87a8e5c5dc549d92367345d3d7cfc666f68d0f8f28cf67d52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/sfallou/Projects/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
