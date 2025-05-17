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
        $products = $this->model->getproducts();
        $productcategory = $this->model->getProductsWithCategory();
        $category = $this->model->getCategory();
        $reviews = $this->model->getReview();
        $blogs = $this->model->getlastBlogsecond();
        $video = $this->model->getVideo();
        $banners = $this->model->gethomeBanner();
        $getfirstcategory = $this->model->getCategoryfirstrow();
        $productdata = [
            'product_details' => $products,
            'category_details' => $category,
            'review_details' => $reviews,
           'category_first_details' => $getfirstcategory,
           'productCate' => $productcategory,
           'blog' => $blogs,
           'video' => $video,
           'banner' => $banners,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\home\\index", ['productdata' => $productdata])
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
        $banners = $this->model->getproductBanner();
         $video = $this->model->getVideo();
          $products = $this->model->getproducts();  
          $productdata = [
           'video' => $video,
           'product_details' => $products,
           'banner' => $banners,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\products\\index",['productdata' => $productdata])
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }

    
        public function categoryView($id) { 
             $reviews = $this->model->getReview();
            $video = $this->model->getVideo();
             $productcategory = $this->model->getProductsWithCategory();
            $categoryId = $this->model->Exitscategoryproduct($id);
             $banners = $this->model->getproductBanner();
             $category = $this->model->getAllCategory();
          $productdata = [
            'categoryId' => $categoryId ,
            'video' => $video,
             'review_details' => $reviews,
             'productCate' => $productcategory,
             'banner' => $banners,
               'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\products\\index",['productdata' => $productdata])
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
    public function recentView($slug) {
         $blog = $this->model->getBlogById($slug); 
         $lastblog_1 = $this->model->getlastblog_1();
         $secondlast_2 = $this->model->getSecondAndThirdRecentBlogs();
         if (!$blog) {
           echo "No blog found for slug: $slug";
           return;
          }
          $productdetails = [
            'blog' => $blog,
            'bloglast_1' => $lastblog_1,
            'secondlast_2' => $secondlast_2,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\recents\\index",['productdetails' => $productdetails])
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function blogView() {
          $blogs = $this->model->getBlog();
           $productdata = [
           'blog' => $blogs,
        ];

        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\blogs\\index",['productdata' => $productdata])
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
    public function productDetailsView($id) {
        $product = $this->model->getProductById($id); 
        $reviews = $this->model->getReview();
        $productdetails = [
            'productId' => $product,
            'review' => $reviews,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\productDetails\\index",['productdetails' => $productdetails])
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
    public function orderView() {
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\orders\\index")
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function offerView() {
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\offers\\index")
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function privacyView() {
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\privacy\\index")
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function refundView() {
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\refunds\\index")
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function termView() {
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\terms\\index")
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function thankView() {
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\thanks\\index")
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function nofoundpageView() {
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\nofoundpage\\index")
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
}