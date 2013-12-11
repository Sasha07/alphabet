<?php

/* main.twig */
class __TwigTemplate_12b7f1bf9ff8e9b78d9e708911ce4ad3770dd382bb9c333591b4b33459bb54b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.twig");

        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        echo "Главная страница";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <!-- Начало - Карусель -->
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Индикаторы -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <img src=\"img/1.jpg\">
                <div class=\"container\">
                    <div class=\"carousel-caption\">
                        <h1>Текст будет здесь</h1>
                        <p>Текст текст текст...</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">А вот и кнопка</a></p>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <img src=\"img/2.jpg\">
                <div class=\"container\">
                    <div class=\"carousel-caption\">
                        <h1>Текст будет здесь</h1>
                        <p>Текст текст текст...</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">А вот и кнопка</a></p>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <img src=\"img/3.jpg\">
                <div class=\"container\">
                    <div class=\"carousel-caption\">
                        <h1>Текст будет здесь</h1>
                        <p>Текст текст текст...</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">А вот и кнопка</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div align=\"center\"> <ol class=\"carousel-indicators\" align=\"center\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
        </ol></div>
        <!--<a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>-->
    </div>
    <!-- Конец - Карусель -->

    <div class=\"container marketing\">

    </div>

";
    }

    public function getTemplateName()
    {
        return "main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
