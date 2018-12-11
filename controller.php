<?php
class controller
{
    private $model;
    private $view;


    public function __construct()
    {
        $this->runModel();
        $this->runView();
    }

    private function runModel()
    {
        $this->model = new model();
    }

    private function runView()
    {
        $this->view = new view();
    }

    public function viewTable($base) {
        $this->model->changeBase($base);
        $this->view->showTable($this->model);
    }


}