<?php
namespace Core\Home\Controllers;

class Fronthome extends \CodeIgniter\Controller
{
    public function __construct()
    {
        $this->config = include realpath(__DIR__ . "/../Config.php");
        $this->model = new \Core\Home\Models\FronthomeModel();
        $this->db = \Config\Database::connect();
        $this->email = \Config\Services::email();
        $this->session = session();
    }

    public function index()
    {    $session = session();
        $sessionuid = $session->get('uid');
        $products = $this->model->getproducts();
        $category = $this->model->ExitnotfirstCategoryId();
        $reviews = $this->model->getReview();
        $blogs = $this->model->getlastBlogsecond();
        $video = $this->model->getVideo();
        $banners = $this->model->gethomeBanner();
        $getfirstcategory = $this->model->getCategoryfirstrow();
        $categorylast_4 = $this->model->getAllCategory();
        $cartdata = $this->model->getcarts($sessionuid);
        $userdata = $this->model->userdata($sessionuid);
        $productdata = [
            'product_details' => $products,
            'categorydata' => $category,
            'category_details' => $categorylast_4,
            'review_details' => $reviews,
            'category_first_details' => $getfirstcategory,
            'blog' => $blogs,
            'video' => $video,
            'banner' => $banners,
            'cart' => $cartdata,
            'user' =>  $userdata,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\home\\index", ['productdata' => $productdata])
        ];

        echo view("Frontend\\Views\\index", $data);
    }

    public function aboutus()
    {
        $category = $this->model->getAllCategory();
        $productdata = [
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\aboutus\\index", ['productdata' => $productdata])
        ];

        echo view("Frontend\\Views\\index", $data);
    }

    public function productView()
    {
        $banners = $this->model->getproductBanner();
        $video = $this->model->getVideo();
        $products = $this->model->getproducts();
        $category = $this->model->getAllCategory();
        $productdata = [
            'video' => $video,
            'product_details' => $products,
            'banner' => $banners,
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\products\\index", ['productdata' => $productdata])
        ];

        echo view("Frontend\\Views\\index", $data);
    }

    public function categoryView($id)
    {
        $categoryId = $this->model->Exitscategoryproduct($id);
        $banners = $this->model->getproductBanner();
        $category = $this->model->getAllCategory();
        $productdata = [
            'categoryId' => $categoryId,
            'banner' => $banners,
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\products\\index", ['productdata' => $productdata])
        ];

        echo view("Frontend\\Views\\index", $data);
    }

    public function productCartView()
    {
        $category = $this->model->getAllCategory();
        $productdetails = [
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\productCart\\index", ['productdata' => $productdetails])
        ];

        echo view("Frontend\\Views\\index", $data);
    }

    public function recentView($slug)
    {
        $blog = $this->model->getBlogById($slug);
        $lastblog_1 = $this->model->getlastblog_1();
        $secondlast_2 = $this->model->getSecondAndThirdRecentBlogs();
        $category = $this->model->getAllCategory();
        if (!$blog) {
            echo "No blog found for slug: $slug";
            return;
        }
        $productdetails = [
            'blog' => $blog,
            'bloglast_1' => $lastblog_1,
            'secondlast_2' => $secondlast_2,
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\recents\\index", ['productdata' => $productdetails])
        ];

        echo view("Frontend\\Views\\index", $data);
    }

    public function blogView()
    {
        $blogs = $this->model->getBlog();
        $category = $this->model->getAllCategory();
        $productdata = [
            'blog' => $blogs,
            'category_details' => $category,
        ];

        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\blogs\\index", ['productdata' => $productdata])
        ];

        echo view("Frontend\\Views\\index", $data);
    }

    public function contactView()
    {
        $category = $this->model->getAllCategory();
        $productdetails = [
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\contactus\\index", ['productdata' => $productdetails])
        ];

        echo view("Frontend\\Views\\index", $data);
    }

    public function productDetailsView($id)
    { $session = session();
         $sessionuid = $session->get('uid');
        $product = $this->model->getProductById($id);
        $reviews = $this->model->getReview();
        $category = $this->model->getAllCategory();
        $cartdata = $this->model->getcarts($sessionuid);
        $productdetails = [
            'productId' => $product,
            'review' => $reviews,
            'category_details' => $category,
            'cart' => $cartdata,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\productDetails\\index", ['productdata' => $productdetails])
        ];

        echo view("Frontend\\Views\\index", $data);
    }

    public function informationView()
    {
        $category = $this->model->getAllCategory();
        $productdetails = [
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\informations\\index", ['productdata' => $productdetails])
        ];

        echo view("Frontend\\Views\\index", $data);
    }

    public function update_profile() {
        $uid = $this->session->get('uid');
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $number = $this->request->getPost('number');
        $data = [
         'username' => $username,
         'email' => $email,
         'number' => $number,
        ];
         $updated = $this->model->userupdate($uid,$data);
         if ($updated) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'update user profile',
                'locationChange' => false,
                'data' => $data
            ]);
         } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'update failed',
                'locationChange' => false,
            ]);
         }
         

    }

    public function deshboardView()
    {
         $sessionuid = $this->session->get('uid');
        $category = $this->model->getAllCategory();
        $userdata = $this->model->userdata($sessionuid);
        $productdetails = [
            'category_details' => $category,
            'user' =>  $userdata,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\deshboards\\index", ['productdata' => $productdetails])
        ];

        echo view("Frontend\\Views\\index", $data);
    }

    public function orderView()
    {
        $category = $this->model->getAllCategory();
        $productdetails = [
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\orders\\index", ['productdata' => $productdetails])
        ];

        echo view("Frontend\\Views\\index", $data);
    }

    public function offerView()
    {
        $category = $this->model->getAllCategory();
        $productdetails = [
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\offers\\index", ['productdata' => $productdetails])
        ];

        echo view("Frontend\\Views\\index", $data);
    }

    public function privacyView()
    {
        $category = $this->model->getAllCategory();
        $productdetails = [
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\privacy\\index", ['productdata' => $productdetails])
        ];

        echo view("Frontend\\Views\\index", $data);
    }

    public function refundView()
    {
        $category = $this->model->getAllCategory();
        $productdetails = [
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\refunds\\index", ['productdata' => $productdetails])
        ];

        echo view("Frontend\\Views\\index", $data);
    }

    public function termView()
    {
        $category = $this->model->getAllCategory();
        $productdetails = [
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\terms\\index", ['productdata' => $productdetails])
        ];

        echo view("Frontend\\Views\\index", $data);
    }

    public function thankView()
    {
        $category = $this->model->getAllCategory();
        $productdetails = [
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\thanks\\index", ['productdata' => $productdetails])
        ];

        echo view("Frontend\\Views\\index", $data);
    }

    public function nofoundpageView()
    {
        $category = $this->model->getAllCategory();
        $productdetails = [
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\nofoundpage\\index", ['productdata' => $productdetails])
        ];

        echo view("Frontend\\Views\\index", $data);
    }

    public function add_to_cart()
    {  
        $session = session();
        $uid = $session->get('uid');
        if (!$uid) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'You are not signin first!!',
                'locationChange' => base_url('login'),
            ]);
        }
        $pro_id = $this->request->getPost('pro_id');
        // $pro_qty = $this->request->getPost('pro_qty');
        if ($pro_id > 0) {
            $data = [
                'pro_id' => $pro_id,
                // 'pro_qty' => $pro_qty,
                'uid' => $uid,
                'created_at' => date('Y-m-d H:i:s'),
            ];
            $checkcart = $this->model->check_cart($pro_id, $uid);
            if ($checkcart) {
                // $updated_data['pro_qty'] = $checkcart->pro_qty;
                $updated_data['uid'] = $checkcart->uid;
                $updated_data['updated_at'] = date('Y-m-d H:i:s');
                $add = $this->model->update_cart($pro_id, $uid, $updated_data);
            } else {
                // print_r($pro_id);
                $add = $this->model->add_to_cart($data);
            }
            $details = $this->model->showalldata( $uid);
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Add to cart',
                'locationChange' => false,
                'data' =>  $details
            ]);
        }else{
                return $this->response->setJSON([
                'status' => 'error',
                'message' => 'id not found',
                'locationChange' => false,
            ]);
        }
    }

    public function submitregister()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => ['label' => lang('App.username'), 'rules' => 'required'],
            'number' => ['label' => lang('App.number'), 'rules' => 'required'],
            'email' => ['label' => lang('App.email'), 'rules' => 'required|valid_email|max_length[100]|trim|is_unique[user.email]'],
            'password' => ['label' => lang('App.password'), 'rules' => 'required|max_length[32]'],
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => $validation->getErrors()
            ]);
        }

        $email = $this->request->getPost('email');
        $number = $this->request->getPost('number');
        $username = $this->request->getPost('username');
        $password = password_hash($this->request->getPost('password'), PASSWORD_BCRYPT); 
        $uid = uniqid(); 
        $is_admin = 3;
        $usertype = 3;
        $status = 0;

        $data = [
            "email" => $email,
            "password" => $password, 
            "number" => $number,
            "username" => $username,
            "uid" => $uid,
            "is_admin" => $is_admin,
            "usertype" => $usertype,
            "status" => $status,
        ];

        if ($this->model->setregister($data)) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'You are registered successfully',
                'locationChange' => true
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Something went wrong!!'
            ]);
        }
    }

}