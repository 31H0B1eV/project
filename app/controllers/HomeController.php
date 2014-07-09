<?php

class HomeController extends BaseController {


    protected $layout = 'index';

    public function getIndex()
    {
        return View::make('index');
    }

}
