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

    public function changeBase($base) {
        $this->model->base = $base;
        $this->model->loadJson();
        $this->model->loadDate();
        $this->model->loadRates();
        $this->view->showTable($this->model);
    }


}