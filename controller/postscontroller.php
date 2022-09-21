<?php 

class PostsController extends Controller{
    public function index(){
        $postsModel = $this->model('postsModel');
        $posts = $postsModel->getAll();

        $this->view('postsView', [
            'posts' => $posts,
            'css' => self::urlParser()
        ]);
    }

    public function post(){
        print_r($_POST);
    }
}

?>