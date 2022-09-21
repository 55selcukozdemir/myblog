<?php 
class PostWriteController extends Controller{
    public function index(){
        $postModel = $this->model('postsModel');
        // $posts = $postModel->get

        $posts = [
            'id' => '',
            'title' => '',
            'text' => '',
            'athor' => ''
        ];

        $this->view('postwriteview', [
            'post' => $posts,
            'css' => self::urlParser(),
            'link' => '/s/text'
        ]);
        
    }

    public function text($parameters = null){
        $postModel = $this->model('postsModel');
        $postModel->setText($_POST['ftitle'], $_POST['ftext'], $_POST['fathor']);
        header('Location: /s');
       
    }


    public function get($parameters){
        $postModel = $this->model('postsModel');
        $post = $postModel->getTextById($parameters);
        $this->view('postwriteview', [
            'post' => $post[0],
            'css' => self::urlParser(),
            'link' => '/s/update/' . $parameters
        ]);
    }

    public function delete($parameters){
        $postModel = $this->model('postsModel');
        $post = $postModel->deleteTextById($parameters);
        header('Location: /s');
    }

    public function update($parameters){
        $postModel = $this->model('postsModel');
        $post = $postModel->updateText($parameters,$_POST['ftitle'], $_POST['ftext'], $_POST['fathor']);
        header('Location: /s');
    }


    
}

?>