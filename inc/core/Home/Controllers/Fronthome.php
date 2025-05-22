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
    {
        $session = session();
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
            'user' => $userdata,
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
        $session = session();
        $uid = $session->get('uid');
        $category = $this->model->getAllCategory();
        $cartdata = $this->model->getcarts($uid);
        $productdetails = [
            'category_details' => $category,
            'cart' => $cartdata,
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
    {
        $session = session();
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
        $session = session();
        $uid = $session->get('uid');
        $category = $this->model->getAllCategory();
        $address = $this->model->getLatestAddress($uid);
        $productdetails = [
            'category_details' => $category,
            'address' => $address,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\informations\\index", ['productdata' => $productdetails])
        ];

        echo view("Frontend\\Views\\index", $data);
    }

    public function update_profile()
    {
        $uid = $this->session->get('uid');
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $number = $this->request->getPost('number');
        $data = [
            'username' => $username,
            'email' => $email,
            'number' => $number,
        ];
        $updated = $this->model->userupdate($uid, $data);
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

    public function addressAdd()
    {
        $session = session();
        $uid = $session->get('uid');
        if (!$uid) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'user uid not found',
                'locationChange' => false,
            ]);
        }
        $first_name = $this->request->getPost('first_name');
        $last_name = $this->request->getPost('last_name');
        $number = $this->request->getPost('number');
        $email = $this->request->getPost('email');
        $city = $this->request->getPost('city');
        $state = $this->request->getPost('state');
        $pincode = $this->request->getPost('pincode');
        $building = $this->request->getPost('building');
        $street = $this->request->getPost('street');
        $landmark = $this->request->getPost('landmark');
        $address = $this->request->getPost('address');

        $data = [
            'uid' => $uid,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'number' => $number,
            'email' => $email,
            'city' => $city,
            'state' => $state,
            'pincode' => $pincode,
            'building' => $building,
            'street' => $street,
            'landmark' => $landmark,
            'address' => $address,
        ];
        $datails = $session->set('order_address', $data);

        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'store session data',
            'locationChange' => true,
        ]);

    }
    public function update_address()
    {
        $session = session();
        $uid = $session->get('uid');
        $address = $this->request->getPost('address');
        $state = $this->request->getPost('state');
        $city = $this->request->getPost('city');
        $pincode = $this->request->getPost('pincode');
        $landmark = $this->request->getPost('landmark');
        $firstname = $this->request->getPost('firstname');
        $lastname = $this->request->getPost('lastname');
        $number = $this->request->getPost('number');
        $email = $this->request->getPost('email');
        $id = $this->request->getPost('address_id');
        $data = [
            'landmark' => $landmark,
            'pincode' => $pincode,
            'city' => $city,
            'state' => $state,
            'address' => $address,
            'last_name' => $lastname,
            'first_name' => $firstname,
            'email' => $email,
            'number' => $number,
        ];

        $updatedaddress = $this->model->addressupdate($data, $uid, $id, );
        if ($updatedaddress) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'address update',
                'locationChange' => false,
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'update failed',
                'locationChange' => false,
            ]);
        }
    }
    public function update_order_address()
    {
        $session = session();
        $uid = $session->get('uid');
        $address = $this->request->getPost('address');
        $state = $this->request->getPost('state');
        $city = $this->request->getPost('city');
        $pincode = $this->request->getPost('pincode');
        $country = $this->request->getPost('country');
        $id = $this->request->getPost('address_id');
        $email = $this->request->getPost('email');
        $country = $this->request->getPost('country');
        $landmark = $this->request->getPost('landmark');
        $first_name = $this->request->getPost('first_name');
        $last_name = $this->request->getPost('last_name');
        $building = $this->request->getPost('building');
        $street = $this->request->getPost('street');
        $number = $this->request->getPost('number');
        $data = [
            'uid' => $uid,
            'pincode' => $pincode,
            'city' => $city,
            'state' => $state,
            'country' => $country,
            'address' => $address,
            'email' => $email,
            'landmark' => $landmark,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'street' => $street,
            'building' => $building,
            'number' => $number,
        ];
        $address = $this->model->addressinsert($data);
        if ($address) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'address insert',
                'locationChange' => true,
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'inserted failed',
                'locationChange' => false,
            ]);
        }
    }
    public function address_delete()
    {
        $session = session();
        $uid = $session->get('uid');
        $address_id = $this->request->getPost('address_id');
        if (!$address_id) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'id Not found',
                'locationChange' => false,
            ]);
        }
        $data = $this->model->addressdelete($uid, $address_id);
        if ($data) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Address data delete',
                'locationChange' => false,
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'deleted failed',
                'locationChange' => false,
            ]);
        }

    }

    public function final_order()
    {
        $session = session();
        $uid = $session->get('uid');
        $address = $session->get('order_address');
        $cart = $this->request->getPost('cart_id[]');
        if ($this->request->getPost('shipping_address')) {
            $shiping_address = $address;
            $addressID = $this->model->addressinsert($shiping_address);

            $data = [
                'uid' => $uid,
                'order_id' => mt_rand(1000000000, 9999999999),
                'payment_method' => $this->request->getPost('payment_method'),
                'address_id' => $addressID,
                'total_amount' => $this->request->getPost('total_amount'),
                'email' => $this->request->getPost('order_email'),
                'name' => $this->request->getPost('order_name'),
                'razorpay_payment_id' => $this->request->getPost('razorpay_payment_id'),
                'cart_id' => json_encode($cart),
            ];
        } else {
            $data = [
                'uid' => $uid,
                'order_id' => mt_rand(1000000000, 9999999999),
                'payment_method' => $this->request->getPost('payment_method'),
                'address_id' => $this->request->getPost('selected_address_id'),
                'total_amount' => $this->request->getPost('total_amount'),
                'razorpay_payment_id' => $this->request->getPost('razorpay_payment_id'),
                'email' => $this->request->getPost('order_email'),
                'name' => $this->request->getPost('order_name'),
                'cart_id' => json_encode($cart),
            ];
        }

        if ($this->request->getPost('payment_method') == 'Online') {
            $orderId = $this->model->orderInsert($data);
            $order = $this->model->getOderId($uid,$orderId);
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Oder Successfull inserted !!',
                'locationChange' => false,
                'payment_method' => 'Online',
                'data' => $order,
            ]);
        } else {
            $orderId = $this->model->orderInsert($data);
        if ($orderId) {
            $cartIDs = json_decode($data['cart_id']);
            foreach ($cartIDs as $cart_id) {
                $this->model->insertOrderId($cart_id, $uid, $orderId);
            }
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Oder Successfull inserted !!',
                'locationChange' => false,
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'failed',
                'message' => 'Order Failed!!',
                'locationChange' => false,
            ]);
        }
        }

    }

    public function payment_Success(){
        $orderID = $this->request->getPost('oderId');
        $data = $this->model->getOderId($orderID);
    }
    public function deshboardView()
    {
        $uid = $this->session->get('uid');
        $category = $this->model->getAllCategory();
        $userdata = $this->model->userdata($uid);
        $address = $this->model->getaddress($uid);
        $productdetails = [
            'category_details' => $category,
            'user' => $userdata,
            'address' => $address,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\deshboards\\index", ['productdata' => $productdetails])
        ];

        echo view("Frontend\\Views\\index", $data);
    }
    public function orderhistery()
    {
        $sessionuid = $this->session->get('uid');
        $category = $this->model->getAllCategory();
        $userdata = $this->model->userdata($sessionuid);
        $productdetails = [
            'category_details' => $category,
            'user' => $userdata,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\deshboards\\order-histery", ['productdata' => $productdetails])
        ];

        echo view("Frontend\\Views\\index", $data);
    }

    public function orderView()
    {
        $session = session();
        $uid = $session->get('uid');
        $session_data = $session->get('order_address');
        $category = $this->model->getAllCategory();
        $address = $this->model->getlatestAddress($uid);
        $alladdress = $this->model->getAddress($uid);
        $productdetails = [
            'category_details' => $category,
            'address' => $address,
            'session_data' => $session_data,
            'alladdress' => $alladdress,
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
        $pro_qty = $this->request->getPost('pro_qty');
        if ($pro_id > 0) {
            $data = [
                'pro_id' => $pro_id,
                'pro_qty' => $pro_qty,
                'uid' => $uid,
                'created_at' => date('Y-m-d H:i:s'),
            ];
            $checkcart = $this->model->check_cart($pro_id, $uid);
            if ($checkcart) {
                $data = [
                    'pro_qty' => $pro_qty,
                    'uid' => $uid,
                    'updated_at' => date('Y-m-d H:i:s'),
                ];
                $add = $this->model->update_cart($pro_id, $uid, $data);
                $details = $this->model->showalldata($uid);
                return $this->response->setJSON([
                    'status' => 'update',
                    'message' => 'Cart Updated!!',
                    'locationChange' => false,
                    'data' => $details
                ]);
            } else {
                $add = $this->model->add_to_cart($data);
            }
            $details = $this->model->showalldata($uid);
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Add to cart',
                'locationChange' => false,
                'data' => $details
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'id not found',
                'locationChange' => false,
            ]);
        }
    }

    public function deleteitemcart()
    {
        $session = session();
        $uid = $session->get('uid');
        if ($this->request->getPost("delete")) {
            $id = $this->request->getPost("delete");
            if ($this->model->deletecartitem($id)) {
                $details = $this->model->showalldata($uid);
                return $this->response->setJSON([
                    'status' => 'success',
                    'message' => 'Item deleted!!',
                    'data' => $details
                ]);
            } else {
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'Something went wrong!!'
                ]);
            }
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

    public function contactUsForm()
    {
        $session = session();
        $uid = $session->get('uid');
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $message = $this->request->getPost('message');
        $phone = $this->request->getPost('phone');

        $contactData = [
            'uid' => $uid,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
        ];
        $check = $this->model->contact_Insert($contactData);
        if ($check) {
            // Send Email to Admin
            // $adminEmail = 'priyankakoshta2001@gmail.com';
            // $emailSubject = 'New Contact Message Received';
            // $emailBody = "You have a new contact message:\n\nName: $name\nEmail: $email\nMessage: $message";

            // $emailService = \Config\Services::email();
            // $emailService->setTo($email);
            // $emailService->setFrom('testing@fovtysolutions.com', 'Your Website');
            // $emailService->setSubject($emailSubject);
            // $emailService->setMessage($emailBody);
            // if ($emailService->send()) {
            //     return $this->response->setJSON([
            //         'status' => 'success',
            //         'message' => 'Message sent successfully.',
            //     ]);
            // } else {
            //     return $this->response->setJSON([
            //         'status' => 'error',
            //         'message' => 'Failed to send email.',
            //         'debug' => $emailService->printDebugger(['headers']),
            //     ]);
            // }
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'add data',
                'locationChange' => false,
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'failed data',
                'locationChange' => false,
            ]);
        }
    }



}