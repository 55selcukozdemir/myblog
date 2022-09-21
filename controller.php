<?php 

class Controller{
    public function view($name, $data = []){
        extract($data);
        require __DIR__ . '/view/'. strtolower($name) . '.php';
    }

    public function model($name){
        require __DIR__ . '/model/'. strtolower($name) . '.php';
        return new $name;
    }
    // css yolu karışıyordu düzeltildi
    public function urlParser(){
        $baseLink = 'view/css/style.css';
        $link = '';
        if(isset($_SERVER['REDIRECT_URL']) ){
            $url = explode('/', strtoupper($_SERVER['REDIRECT_URL']));
            for ($i = 1; $i <= count($url)-3; $i++){
                $link .= "../";
            }
        }
        return $link . $baseLink;
    }
}

?>