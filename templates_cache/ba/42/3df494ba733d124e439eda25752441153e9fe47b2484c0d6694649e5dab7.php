<?php

/* base.twig */
class __TwigTemplate_ba423df494ba733d124e439eda25752441153e9fe47b2484c0d6694649e5dab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('pageTitle', $context, $blocks);
        echo " | Азбука грамотности</title>

    <link href=\"../bootstrap/css/bootstrap.css\" rel=\"stylesheet\">
    <link href=\"../css/main.css\" rel=\"stylesheet\">

</head>
<body>
<header>
    <nav class=\"navbar navbar-inverse\" role=\"navigation\" id=\"mainmenu\">

        <!-- Главная кнопка-название -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Brand</a>
        </div>

        <!-- Меню -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#\">Link</a></li>
                <li><a href=\"#\">Link</a></li>
            </ul>

            <!-- Пример формы в заголовке
            <form class=\"navbar-form navbar-left\" role=\"search\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                </div>
                <button type=\"submit\" class=\"btn btn-default\">Submit</button>
            </form>
            -->
        </div>
    </nav>
</header>


";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 46
        echo "</body>
</html>";
    }

    // line 4
    public function block_pageTitle($context, array $blocks = array())
    {
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 45,  77 => 4,  72 => 46,  70 => 45,  26 => 4,  21 => 1,);
    }
}
