<?php 
      
class PostMainController extends Controller{
    public function index($parameters){
        $postModel = $this->model('postsModel');
        $post = $postModel->getTextById($parameters);
        $this->view('postmainview', [
            'post' => $post,
            'css' => self::urlParser()
        ]);
    }

    public function delete($id){
        $postModel = $this->model('postsModel');
        $postModel->deleteTextById($id);
        header('Location: /s');
    }
}

?>