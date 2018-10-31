<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_95e9beea6fea851dea1b5610c81cd0001fc06ea5098b875cd41f70e3cfcde408 extends Twig_Template
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
        $__internal_69a3d4ec97d0963a859f2f83aa4ee79a30ccb3c955daef9a2b8f48a1c6ae7aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a3d4ec97d0963a859f2f83aa4ee79a30ccb3c955daef9a2b8f48a1c6ae7aa2->enter($__internal_69a3d4ec97d0963a859f2f83aa4ee79a30ccb3c955daef9a2b8f48a1c6ae7aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_69a3d4ec97d0963a859f2f83aa4ee79a30ccb3c955daef9a2b8f48a1c6ae7aa2->leave($__internal_69a3d4ec97d0963a859f2f83aa4ee79a30ccb3c955daef9a2b8f48a1c6ae7aa2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/sfallou/Projects/rest_api/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
