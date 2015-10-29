<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    private $markdb;

    public function index()
    {
        $articles = $this->markdb()->libraries['articles']->articles;
        return $this->view_decorator(view("welcome", ['articles' => $articles]));
    }

    public function page($slug)
    {
        $page = $this->markdb()->get($slug);
        return $this->view_decorator(view("page",['page'=>$page]));
    }


    public function article($slug)
    {
        $article = $this->markdb()->get($slug);
        return $this->view_decorator(view("article", ['article' => $article]));
    }

    public function view_decorator(View $view){
        return $view->with('pages', $this->markdb()->libraries['pages']->articles());
    }

    public function markdb(){
        if (empty($this->markdb)){
            $this->markdb = new \MarkDb\MarkDb(env('MARKDB_PATH'), env('MARKDB_PATH'));
        }
        return $this->markdb;
    }

}
