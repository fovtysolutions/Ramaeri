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
 public function getcarts($uid){
    $query = $this->db->table('ramaeri_cart')
        ->select('ramaeri_cart.*, ramaeri_products.name, ramaeri_products.price, ramaeri_products.image') 
        ->join('ramaeri_products', 'ramaeri_products.id = ramaeri_cart.pro_id') 
        ->where('ramaeri_cart.uid', $uid)
        ->get();

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
    public function userupdate($uid,$data)
    {
        return $this->db->table('user')
            ->where('uid', $uid)
            ->update($data);
    }
    public function userdata($uid)
    {
        return $this->db->table('user')
            ->where('uid', $uid)
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
 public function showalldata($pro_id){
    $query = $this->db->table('ramaeri_cart')
        ->select('ramaeri_cart.*, ramaeri_products.name, ramaeri_products.price, ramaeri_products.image') 
        ->join('ramaeri_products', 'ramaeri_products.id = ramaeri_cart.pro_id') 
        ->where('ramaeri_cart.uid', $pro_id)
        ->get();

    return $query->getResult();
}
    public function getBlogById($slug)
    {
        return $this->db->table('ramaeri_blogs')
            ->where('slug', $slug)
            ->get()
            ->getRow();
    }

    public function add_to_cart($data)
    {
        return $this->db->table('ramaeri_cart')->insert($data); 
    }
    public function updateit($pro_id, $uid, $updated_data)
    {
        return $this->db->table('ramaeri_Banners')->where('pro_id', $pro_id)->where('uid', $uid)->update($updated_data);
    }
    public function update_cart($pro_id, $uid, $updated_data)
    {
        return $this->db->table('ramaeri_cart')->where('pro_id', $pro_id)->where('uid', $uid)->where('pro_id', $pro_id)->update($updated_data);
    }
    public function check_cart($pro_id, $uid)
    {
        $query = $this->db->table('ramaeri_cart')->where('pro_id', $pro_id)->where('uid', $uid)->get();
        if ($query->getRow()) {
            return $query->getRow();
        }
        return false;
    }

     public function last_login($id)
    {
        return $this->db->table('user')
            ->set('last_login', date('Y-m-d H:i:s'))
            ->set('ip_address', $_SERVER['REMOTE_ADDR'])
            ->where('id', $id)
            ->update();
    }

     public function checkUser($email, $password)
    {
        $user = $this->db->table('user')
            ->where('email', $email)
            ->get()
            ->getRow();

            if ($user && password_verify($password, $user->password)) {
                return $user;
            }
        return null;
    }

     public function setRegister(array $data)
    {
        $builder = $this->db->table('user');
        return $builder->insert($data);
    }

    public function deletecartitem($id)
    {
        return $this->db->table('ramaeri_cart')->where('id', $id)->delete();
    }

}
