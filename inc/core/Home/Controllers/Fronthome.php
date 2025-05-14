<?php
namespace Core\Home\Controllers;

class Fronthome extends \CodeIgniter\Controller
{
    public function __construct(){
        $this->config = include realpath( __DIR__."/../Config.php" );
        $this->model = new \Core\Home\Models\FronthomeModel();
        $this->db = \Config\Database::connect();
        $this->email = \Config\Services::email();
    }

    public function index() {
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\home\\index")
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }

    public function aboutus() {
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\aboutus\\index")
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function productView() {
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\products\\index")
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function productCartView() {
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\productCart\\index")
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function blogView() {
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\blogs\\index")
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function contactView() {
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\contactus\\index")
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function productDetailsView() {
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\productDetails\\index")
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function informationView() {
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\informations\\index")
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function deshboardView() {
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\deshboards\\index")
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
}