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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>

    <base href=\"/\" />

    <title>";
        // line 7
        $this->displayBlock('pageTitle', $context, $blocks);
        echo " | Азбука грамотности</title>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta charset=\"utf-8\" />

    <link href=\"../vendor/twitter/bootstrap/dist/css/bootstrap.css\" rel=\"stylesheet\" />
    <link href=\"../vendor/twitter/bootstrap/dist/css/bootstrap-theme.css\" rel=\"stylesheet\" />
    <link href=\"../css/bootstrap-theme.css\" rel=\"stylesheet\" />
    <link href=\"../css/main.css\" rel=\"stylesheet\" />
    <link href=\"../css/carousel.css\" rel=\"stylesheet\" />
    <link href=\"../css/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" />


    <script src=\"../js/jquery.js\"></script>
    <script src=\"../js/html5shiv.js\"></script>
    <script src=\"../vendor/twitter/bootstrap/dist/js/bootstrap.js\"></script>
    <script src=\"../js/bootbox.min.js\"></script>

    ";
        // line 25
        if ($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "isAuth")) {
            // line 26
            echo "
        <script>

            var adminData = {
                currentPage : '";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["currentPage"]) ? $context["currentPage"] : null), "html", null, true);
            echo "'
            }

        </script>

        <script src=\"../vendor/ckeditor/ckeditor.js\"></script>
        <script src=\"../js/admin.js\"></script>

    ";
        }
        // line 39
        echo "

</head>
<body>



<div class=\"container-narrow\">

    ";
        // line 48
        if (((isset($context["currentPage"]) ? $context["currentPage"] : null) != "main")) {
            echo "<link href=\"../css/menu-top.css\" rel=\"stylesheet\" />";
        }
        // line 49
        echo "
    <div class=\"navbar-wrapper\">

        ";
        // line 52
        if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "main")) {
            echo "<div class=\"container\">";
        }
        // line 53
        echo "
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
        // line 68
        if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "main")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/\">Главная</a></li>
                            <li><a href=\"second\">Страница №2</a></li>
                            <li><a href=\"#\">Страница №3</a></li>
                            <li><a href=\"#\">Страница №4</a></li>
                        </ul>

                        <ul class=\"nav navbar-nav pull-right\" style=\"margin-right:20px\">
                            ";
        // line 75
        if ((!$this->getAttribute((isset($context["session"]) ? $context["session"] : null), "isAuth"))) {
            // line 76
            echo "                                <li><a href=\"login\"><i class=\"fa fa-users\"></i>&nbsp;&nbsp;Администрирование</a></li>
                            ";
        }
        // line 78
        echo "                        </ul>
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

        ";
        // line 92
        if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "main")) {
            echo "</div>";
        }
        // line 93
        echo "    </div>

    ";
        // line 95
        if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "main")) {
            // line 96
            echo "        ";
            $this->env->loadTemplate("common/carousel.twig")->display($context);
            // line 97
            echo "    ";
        }
        // line 98
        echo "
    <div class=\"container marketing\" ";
        // line 99
        if ($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "isAuth")) {
            echo "id=\"editable\" contenteditable=\"true\"";
        }
        echo ">
        ";
        // line 100
        $templates = $this->env->resolveTemplate((("editable/" . (isset($context["currentPage"]) ? $context["currentPage"] : null)) . ".html"));
        $templates->display($context);
        // line 101
        echo "    </div>

    <footer>
        <hr>
        &copy; Андреев Александр 2013
        <a href=\"/\" id=\"footerlink\">На главную</a>
    </footer>

</div>

</body>
</html>";
    }

    // line 7
    public function block_pageTitle($context, array $blocks = array())
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
        return array (  187 => 7,  172 => 101,  169 => 100,  163 => 99,  160 => 98,  157 => 97,  154 => 96,  152 => 95,  148 => 93,  144 => 92,  128 => 78,  124 => 76,  122 => 75,  110 => 68,  93 => 53,  89 => 52,  84 => 49,  80 => 48,  69 => 39,  57 => 30,  51 => 26,  49 => 25,  28 => 7,  20 => 1,);
    }
}
