<?php

namespace Alphabet;

class Router {

    private $authObject;
    private $page;
    private $defaultPage = 'main';

    function __construct($authObject) {
        $this->authObject = $authObject;
        $this->route();
    }

    private function setPage() {

        $this->page = $this->defaultPage;

        if(isset($_GET['url'])) {
            $this->page = substr($_GET['url'],1);

            if(substr($this->page, strlen($this->page) - 1) == '/') {
                $this->page = substr($this->page, 0, strlen($this->page) - 1);
            }

            $this->page = strtolower(str_replace('/', '-', $this->page));

            if($this->page == 'login') {

                $this->authObject->login();
            }
            else if($this->page == 'save') {

                if(!$_SESSION['isAuth']){
                    die('Вы не авторизованы.');
                }

                $page = str_replace('/', '-',str_replace('.','',isset($_POST['page']) ? $_POST['page'] : ''));
                $file = 'templates/editable/'.$page.'.html';

                if(!file_exists($file)) {
                    die('Страница не найдена.');
                }

                if(!isset($_POST['content'])) {
                    die('Контент не найден.');
                }

                file_put_contents($file, $_POST['content']);
                die('Страница сохранена.');
            }

            if($this->page == '' || !file_exists('templates/'.$this->page.'.twig') || !file_exists('templates/editable/'.$this->page.'.html')) {
                $this->page = $this->defaultPage;
            }
        }
    }

    public function route() {
        $this->setPage();
    }

    public function getPage() {
        return $this->page;
    }

}