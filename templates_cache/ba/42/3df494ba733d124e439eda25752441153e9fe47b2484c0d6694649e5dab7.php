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
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\"
        \"http://www.w3.org/TR/html4/loose.dtd\">
<html>
<head>

    <title>";
        // line 6
        $this->displayBlock('pageTitle', $context, $blocks);
        echo " | Азбука грамотности</title>

    <meta charset=\"utf-8\">

    <link href=\"../bootstrap/css/bootstrap.css\" rel=\"stylesheet\">
    <link href=\"../bootstrap/css/bootstrap-responsive.css\" rel=\"stylesheet\">
    <link href=\"../css/main.css\" rel=\"stylesheet\">

    <script src=\"../js/html5shiv.js\"></script>

</head>
<body>

<header>
    <nav class=\"navbar navbar-default\" role=\"navigation\" id=\"mainmenu\">

        <!-- Главная кнопка-название -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\"></button>
            <a class=\"navbar-brand\" href=\"#\">Азбука грамотности</a>
        </div>

        <!-- Меню -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li ";
        // line 31
        if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "main")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/\">Главная</a></li>
                <li><a href=\"#\">Страница №2</a></li>
                <li><a href=\"#\">Страница №3</a></li>
                <li><a href=\"#\">Страница №4</a></li>
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
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "
<footer>
    <hr>
    &copy; Андреев Александр 2013
    <a href=\"/\" id=\"footerlink\">На главную</a>
</footer>

</body>
</html>";
    }

    // line 6
    public function block_pageTitle($context, array $blocks = array())
    {
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 49,  93 => 6,  81 => 50,  79 => 49,  56 => 31,  28 => 6,  21 => 1,);
    }
}
