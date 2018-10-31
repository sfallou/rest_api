<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5c0c67b2c3ca5c864a666f379b4c0c1385f0015a6543fd938ee148f3a2cd6912 extends Twig_Template
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
        $__internal_0d11d0fa9de67ee21707fc6e1dd6f6bbe00caec410375730cadea93a7bfc8dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d11d0fa9de67ee21707fc6e1dd6f6bbe00caec410375730cadea93a7bfc8dfc->enter($__internal_0d11d0fa9de67ee21707fc6e1dd6f6bbe00caec410375730cadea93a7bfc8dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0d11d0fa9de67ee21707fc6e1dd6f6bbe00caec410375730cadea93a7bfc8dfc->leave($__internal_0d11d0fa9de67ee21707fc6e1dd6f6bbe00caec410375730cadea93a7bfc8dfc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/sfallou/Projects/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
