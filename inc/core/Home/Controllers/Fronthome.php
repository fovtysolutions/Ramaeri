<?php
namespace Core\Home\Controllers;

class Fronthome extends \CodeIgniter\Controller
{
    public function __construct(){
        $this->config = include realpath( __DIR__."/../Config.php" );
        $this->model = new \Core\Home\Models\FronthomeModel();
        $this->db = \Config\Database::connect();
        $this->email = \Config\Services::email();
        $this->session = session();
    }

    public function index() {
        $products = $this->model->getproducts();
        $category = $this->model->ExitnotfirstCategoryId();
        $reviews = $this->model->getReview();
        $blogs = $this->model->getlastBlogsecond();
        $video = $this->model->getVideo();
        $banners = $this->model->gethomeBanner();
        $getfirstcategory = $this->model->getCategoryfirstrow();
         $categorylast_4 = $this->model->getAllCategory();
        // print_r();
        $productdata = [
            'product_details' => $products,
            'categorydata' => $category,
            'category_details' => $categorylast_4,
            'review_details' => $reviews,
           'category_first_details' => $getfirstcategory,
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
            $category = $this->model->getAllCategory();
          $productdata = [
           'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\aboutus\\index",['productdata' => $productdata])
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function productView() {
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
            "content" => view("Frontend\\Views\\products\\index",['productdata' => $productdata])
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }

    
        public function categoryView($id) { 
            $categoryId = $this->model->Exitscategoryproduct($id);
             $banners = $this->model->getproductBanner();
             $category = $this->model->getAllCategory();
          $productdata = [
            'categoryId' => $categoryId ,
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
           $category = $this->model->getAllCategory();
             $productdetails = [
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\productCart\\index",['productdata' => $productdetails])
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function recentView($slug) {
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
            "content" => view("Frontend\\Views\\recents\\index",['productdata' => $productdetails])
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function blogView() {
          $blogs = $this->model->getBlog();
           $category = $this->model->getAllCategory();
           $productdata = [
           'blog' => $blogs,
           'category_details' => $category,
        ];

        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\blogs\\index",['productdata' => $productdata])
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function contactView() {
           $category = $this->model->getAllCategory();
             $productdetails = [
            'category_details' => $category,
            ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\contactus\\index",['productdata' => $productdetails])
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function productDetailsView($id) {
        $product = $this->model->getProductById($id); 
        $reviews = $this->model->getReview();
        $category = $this->model->getAllCategory();
        $productdetails = [
            'productId' => $product,
            'review' => $reviews,
             'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\productDetails\\index",['productdata' => $productdetails])
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function informationView() {
           $category = $this->model->getAllCategory();
             $productdetails = [
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\informations\\index",['productdata' => $productdetails])
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function deshboardView() {
           $category = $this->model->getAllCategory();
             $productdetails = [
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\deshboards\\index",['productdata' => $productdetails])
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function orderView() {
           $category = $this->model->getAllCategory();
             $productdetails = [
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\orders\\index",['productdata' => $productdetails])
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function offerView() {
         $category = $this->model->getAllCategory();
             $productdetails = [
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\offers\\index",['productdata' => $productdetails])
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function privacyView() {
         $category = $this->model->getAllCategory();
             $productdetails = [
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\privacy\\index",['productdata' => $productdetails])
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function refundView() {
         $category = $this->model->getAllCategory();
             $productdetails = [
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\refunds\\index",['productdata' => $productdetails])
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function termView() {
         $category = $this->model->getAllCategory();
             $productdetails = [
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\terms\\index",['productdata' => $productdetails])
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function thankView() {
         $category = $this->model->getAllCategory();
             $productdetails = [
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\thanks\\index",['productdata' => $productdetails])
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
    public function nofoundpageView() {
         $category = $this->model->getAllCategory();
             $productdetails = [
            'category_details' => $category,
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\nofoundpage\\index",['productdata' => $productdetails])
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }
public function add_to_cart() {
		$uid = $this->session->get('uid');
        print_r($uid); die;
		$pro_id = $this->request->getPost('pro_id');
		$pro_qty = $this->request->getPost('pro_qty');
		if($pro_id > 0 && $pro_qty > 0) {
			$data = [
				'pro_id' => $pro_id,
				'pro_qty' => $pro_qty,
				'uid' => $uid,
				'created_at' => date('Y-m-d H:i:s'),
			];
			$product = $this->model->check_product($pro_id, $uid);
			if($product) {
				$updated_data['pro_qty'] = $pro_qty + $product->pro_qty;
				$updated_data['updated_at'] = date('Y-m-d H:i:s');
				$add = $this->model->update_cart($pro_id, $uid, $updated_data);
			} else {
				$add = $this->model->add_to_cart($data);
			}
			if ($add) {
				$this->session->set_flashdata('succMsg','cart data add successfuly');
				redirect('carts', 'refresh');
			} else {
				$this->session->set_flashdata('errMsg','cart data not added');
			}
			redirect('products/'.$pro_id, 'refresh');
		} else {
			$this->session->set_flashdata('errMsg','Please add quantity');
			redirect('products/'.$pro_id, 'refresh');
		} 
	}
    public function increase_qty() {
		$uid = $this->session->userdata('uid');
		$sub_total = 0;
		$pro_id = $this->input->post('pro_id');  //ye pro_id ajax se post ke through aa rahi hn
		if($pro_id > 0) {
			$cart_product = $this->model->get_cart_product($pro_id, $uid);
			if($cart_product) {
				$quantity = $cart_product->pro_qty + 1;
				$data['pro_qty'] = $quantity;
				$update = $this->model->update_cart($pro_id, $uid, $data);
				// $total = $this->model->sub_total($pro_id);
				if($update) {
					$updated_cart_product = $this->model->get_cart_product($pro_id, $uid);
					$cart_data = $this->model->get_cart_data($uid);
					foreach ($cart_data as $key => $data) {
						$sub_total += $data->pro_qty * $data->pro_price;
					}
					$response = [
						'status' => 1,
						'pro_qty' => $updated_cart_product->pro_qty,
						'total_price' => $updated_cart_product->pro_qty * $updated_cart_product->pro_price,
						'sub_total' => $sub_total
					];
				} else {
					$response = [
						'status' => 0
					];
				}
			} else {
				$response = [
					'status' => 0
				];
			}
		} else {
			$response = [
				'status' => 0
			];
		}
		echo json_encode($response);
	}

	public function decrease_qty() {
		$cart_empty = false;
		$uid = $this->session->userdata('uid');
		$sub_total = 0;
		$pro_id = $this->input->post('pro_id');
		if($pro_id > 0) {
			$cart_product = $this->model->get_cart_product($pro_id, $uid);
			if($cart_product) {
				$quantity = $cart_product->pro_qty - 1;
				$data['pro_qty'] = $quantity;
				$update = $this->model->update_cart($pro_id, $uid, $data);
				if($update) {
					$updated_cart_product = $this->model->get_cart_product($pro_id, $uid);
					$cart_data = $this->model->get_cart_data($uid);
					
						foreach ($cart_data as $key => $data) {
							$sub_total += $data->pro_qty * $data->pro_price;
						}
					
					if($updated_cart_product->pro_qty == 0) {
						$delete = $this->model->cart_deleted($pro_id,$uid);
						$response = [
							'status' => 2,
						];
						$cart_data = $this->model->get_cart_data($uid);
						if (empty($cart_data)) {
							$response = [
								'status' => 3,
							];
							echo json_encode($response);exit;
						}
						echo json_encode($response);exit;
					}
					$response = [
						'status' => 1,
						'pro_qty' => $updated_cart_product->pro_qty,
						'total_price' => $updated_cart_product->pro_qty * $updated_cart_product->pro_price ,
						'sub_total' => $sub_total,
					];
				} else {
					$response = [
						'status' => 0
					];
				}
			} else {
				$response = [
					'status' => 0
				];
			}
		} else {
			$response = [
				'status' => 0
			];
			redirect();
		}
		echo json_encode($response);
	}
}