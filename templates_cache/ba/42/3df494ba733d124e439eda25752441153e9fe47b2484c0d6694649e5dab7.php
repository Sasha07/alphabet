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
        // line 5
        $this->displayBlock('pageTitle', $context, $blocks);
        echo " | Азбука грамотности</title>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta charset=\"utf-8\" />

    <link href=\"vendor/twitter/bootstrap/dist/css/bootstrap.css\" rel=\"stylesheet\" />
    <link href=\"vendor/twitter/bootstrap/dist/css/bootstrap-theme.css\" rel=\"stylesheet\" />
    <link href=\"css/main.css\" rel=\"stylesheet\" />
    <link href=\"css/carousel.css\" rel=\"stylesheet\" />

    <script src=\"js/jquery.js\"></script>
    <script src=\"js/html5shiv.js\"></script>
    <script src=\"vendor/twitter/bootstrap/dist/js/bootstrap.js\"></script>

    <!-- Bootstrap JQuery Scripts -->
    <script src=\"vendor/twitter/bootstrap/js/affix.js\"></script>
    <script src=\"vendor/twitter/bootstrap/js/alert.js\"></script>
    <script src=\"vendor/twitter/bootstrap/js/button.js\"></script>
    <script src=\"vendor/twitter/bootstrap/js/carousel.js\"></script>
    <script src=\"vendor/twitter/bootstrap/js/collapse.js\"></script>
    <script src=\"vendor/twitter/bootstrap/js/dropdown.js\"></script>
    <script src=\"vendor/twitter/bootstrap/js/modal.js\"></script>
    <script src=\"vendor/twitter/bootstrap/js/popover.js\"></script>
    <script src=\"vendor/twitter/bootstrap/js/scrollspy.js\"></script>
    <script src=\"vendor/twitter/bootstrap/js/tab.js\"></script>
    <script src=\"vendor/twitter/bootstrap/js/tooltip.js\"></script>
    <script src=\"vendor/twitter/bootstrap/js/transition.js\"></script>

</head>
<body>



<div class=\"container-narrow\">

    <div class=\"navbar-wrapper\">
        <div class=\"container\">

            <div class=\"navbar navbar-inverse navbar-static-top\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"/\">Азбука грамотности</a>
                    </div>

                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li ";
        // line 57
        if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "main")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/\">Главная</a></li>
                            <li><a href=\"second\">Страница №2</a></li>
                            <li><a href=\"#\">Страница №3</a></li>
                            <li><a href=\"#\">Страница №4</a></li>
                        </ul>
                    </div>

                    <!-- Пример формы в заголовке
                    <form class=\"navbar-form navbar-left\" role=\"search\">
                    <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                    </form>-->

                </div>
            </div>

        </div>
    </div>


";
        // line 79
        $this->displayBlock('content', $context, $blocks);
        // line 80
        echo "
<footer>
    <hr>
    &copy; Андреев Александр 2013
    <a href=\"/\" id=\"footerlink\">На главную</a>
</footer>

</div>

</body>
</html>";
    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
    }

    // line 79
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
        return array (  130 => 79,  125 => 5,  111 => 80,  109 => 79,  82 => 57,  27 => 5,  21 => 1,);
    }
}
