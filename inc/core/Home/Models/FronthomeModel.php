<?php
namespace Core\Home\Models;
use CodeIgniter\Model;

class FronthomeModel extends Model
{
    public $settinginfo;
    protected $table = 'ramaeri_products';
    protected $primaryKey = 'id';
    protected $allowedFields = ['firstname', 'lastname', 'email', 'image', 'last_login', 'last_logout', 'ip_address', 'status', 'is_admin', 'usertype', 'password'];


    public function getproducts()
    {
        $query = $this->db->table('ramaeri_products')->get();
        return $query->getResult();
    }
    public function gethomeBanner()
    {
        $query = $this->db->table('ramaeri_banners')
            ->where('home_image IS NOT NULL')
            ->where('home_image !=', '')
            ->get();
        return $query->getResult();
    }
    public function getproductBanner()
    {
        $query = $this->db->table('ramaeri_banners')
            ->where('product_image IS NOT NULL')
            ->where('product_image !=', '')
            ->get();
        return $query->getRow();
    }

    public function getVideo()
    {
        $query = $this->db->table('ramaeri_videos')->get();
        return $query->getResult();
    }
    public function getAllCategory()
    {
        return $this->db->table('ramaeri_categories')
            ->orderBy('id', 'DESC')
            ->limit(4)
            ->get()
            ->getResult();
    }
    public function getBlog()
    {
        $query = $this->db->table('ramaeri_blogs')
            ->select('ramaeri_blogs.*, ramaeri_blog_categories.name as categoryname')
            ->join('ramaeri_blog_categories', 'ramaeri_blog_categories.id = ramaeri_blogs.category_name')
            ->get();

        return $query->getResult();
    }
    public function Exitscategoryproduct($id)
    {
        $query = $this->db->table('ramaeri_products')
            ->select('ramaeri_products.*, ramaeri_categories.name as categoryname')
            ->join('ramaeri_categories', 'ramaeri_categories.id = ramaeri_products.category_id')
            ->where('ramaeri_products.category_id', $id)
            ->get();

        return $query->getResult();
    }

    public function getCategoryfirstrow()
    {
        return $this->db->table('ramaeri_categories')
            ->where('id', 1)
            ->limit(1)
            ->get()
            ->getRow();
    }


    public function ExitnotfirstCategoryId()
    {
        $query = $this->db->table('ramaeri_categories')
            ->where('id !=', 1) // ID 1 ko exclude kar raha hai
            ->get();
        return $query->getResult();
    }
    public function getReview()
    {
        $query = $this->db->table('ramaeri_reviews')
            ->select('ramaeri_reviews.*, ramaeri_products.name as product_name, ramaeri_products.image as product_image')
            ->join('ramaeri_products', 'ramaeri_products.id = ramaeri_reviews.product')
            ->get();

        return $query->getResult();
    }
    public function getProductById($id)
    {
        return $this->db->table('ramaeri_products')
            ->where('id', $id)
            ->get()
            ->getRow();
    }
    public function getlastblog_1()
    {
        return $this->db->table('ramaeri_blogs')
            ->orderBy('id', 'DESC')
            ->limit(1)
            ->get()
            ->getRow();
    }
    public function getSecondAndThirdRecentBlogs()
    {
        return $this->db->table('ramaeri_blogs')
            ->orderBy('id', 'DESC')
            ->limit(2, 1)
            ->get()
            ->getResult();
    }
    public function getlastBlogsecond()
    {
        return $this->db->table('ramaeri_blogs')
            ->select('ramaeri_blogs.*, ramaeri_categories.name as categoryname')
            ->join('ramaeri_categories', 'ramaeri_categories.id = ramaeri_blogs.category_name')
            ->orderBy('ramaeri_blogs.id', 'DESC')
            ->limit(2)
            ->get()
            ->getResult();
    }

    public function getBlogById($slug)
    {
        return $this->db->table('ramaeri_blogs')
            ->where('slug', $slug)
            ->get()
            ->getRow();
    }

      public function get_cart_product($pro_id, $uid) {
            $this->db->select('p.*, c.pro_qty, c.pro_id');
            $this->db->join('ramaeri_products'.' p', 'c.pro_id = p.id');
            $this->db->where('c.pro_id', $pro_id);
            $this->db->where('c.uid', $uid);
            $query = $this->db->get('ramaeri_cart'.' c');
            if($query->num_rows()) {
                return $query->row();
            }
            return false;
        }
         public function add_to_cart($data) {
            return $this->db->insert('ramaeri_cart', $data);
        } 

          public function update_cart($pro_id, $uid, $data) {
            return $this->db->update('ramaeri_cart', $data, ['pro_id' => $pro_id, 'uid' => $uid]);
        }   

          public function get_cart_data($uid) {
            $this->db->select('p.*, c.pro_qty, c.pro_id');
            $this->db->join('ramaeri_products'.' p', 'c.pro_id = p.id');
            $this->db->where('c.uid', $uid);
            $query = $this->db->get('ramaeri_cart'.' c');
            if($query->num_rows()) {
                return $query->result();
            }
            return false;
        }

         public function cart_deleted($pro_id, $uid) {
            $this->db->where('pro_id',$pro_id);
            $this->db->where('uid',$uid);
            $q = $this->db->delete('ramaeri_cart');
            if ($q) {
                return true;
            }
            return false;
        }

           public function check_product($pro_id, $uid) {
            $this->db->select('*');
            $this->db->where('pro_id', $pro_id);
            $this->db->where('uid', $uid);
            $query = $this->db->get('ramaeri_cart');
            if($query-> num_rows()) {
                return $query->row();
            }
            return false;
        }   
  }
