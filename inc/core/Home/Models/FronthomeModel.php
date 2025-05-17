<?php
namespace Core\Home\Models;
use CodeIgniter\Model;

class FronthomeModel extends Model
{
    public $settinginfo;
    protected $table = 'ramaeri_products';
    protected $primaryKey = 'id';
    protected $allowedFields = ['firstname', 'lastname', 'email', 'image', 'last_login', 'last_logout', 'ip_address', 'status', 'is_admin', 'usertype', 'password'];

public function getProductsWithCategory() {
    return $this->db->table('ramaeri_products')
        ->select('ramaeri_products.*, ramaeri_categories.name as category_name')
        ->join('ramaeri_categories', 'ramaeri_categories.id = ramaeri_products.category_id')
        ->get()
        ->getResult();
}

    public function getproducts()
    {
        $query = $this->db->table('ramaeri_products')->get();
        return $query->getResult();
    }
    public function gethomeBanner(){
            $query = $this->db->table('ramaeri_banners')
                      ->where('home_image IS NOT NULL')
                      ->where('home_image !=', '')
                      ->get();
            return $query->getResult();
    }
    public function getproductBanner(){
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
        $query = $this->db->table('ramaeri_categories')->get();
        return $query->getResult();
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


    public function getCategory()
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
    public function getlastblog_1(){
    return $this->db->table('ramaeri_blogs')
        ->orderBy('id', 'DESC')
        ->limit(1)
        ->get()
        ->getRow(); 
    }
    public function getSecondAndThirdRecentBlogs(){
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
    // public function getSearchAll($searchMain = null)
//     {
//         $builder = $this->db->table('hotel_booking_clients')->where('admin_uid', $this->session->get('uid'));

    //         if (is_array($searchMain)) {
//             $builder->groupStart(); 

    //             foreach ($searchMain as $field => $value) {
//                 if (!empty($value)) {
//                     $builder->orLike($field, $value); 
//                 }
//             }
//             $builder->groupEnd();
//             $log = json_encode($builder);
//             return $builder;
//         }

    //         if (!empty($searchMain)) {
//             $builder->groupStart()
//                 ->like('id', $searchMain)
//                 ->orlike('c_name', $searchMain)
//                 ->orlike('c_email', $searchMain)
//                 ->orlike('c_phone', $searchMain)
//                 ->orLike('c_email', $searchMain)
//                 ->orLike('c_address', $searchMain)
//                 ->orLike('c_country', $searchMain)
//                 ->orLike('c_state', $searchMain)
//                 ->orLike('c_city', $searchMain)
//                 ->groupEnd();
//         }
//         return $builder;
//     }

    //     public function getById($id){
//         $query = $this->db->table('hotel_booking_clients')->where('id', $id)->get();
//         return $query->getRow(); 
//     }

    //     public function updateit($id, $data)
//     {
//         if (!is_numeric($id)) {
//             return $id; 
//         }
//         return $this->db->table('hotel_booking_clients')->where('id', $id)->update($data);
//     }

    //     public function insertit($data)
//     {
//         return $this->db->table('hotel_booking_clients')->insert($data);
//     }

    //     public function deleteit($id)
//     {
//         return $this->db->table('hotel_booking_clients')->where('id', $id)->delete();
//     }
}
