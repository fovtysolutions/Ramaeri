<?php
namespace Core\Blogs\Models;
use CodeIgniter\Model;

class BlogsModel extends Model
{
	public function __construct(){
        $this->config = include realpath( __DIR__."/../Config.php" );
        $this->db = \Config\Database::connect();
        $this->session = session();
    }

    public $settinginfo;

    public function settings(){
        $query = $this->db->table('setting')->get();
        return $query->getRow(); 
    }

      public function getCategory(){
        $query = $this->db->table('ramaeri_blog_categories')->get();
        return $query->getResultArray(); 
    }
    public function getSearchAll($searchMain = null)
    {
        $builder = $this->db->table('ramaeri_Blogs');

        if (is_array($searchMain)) {
            $builder->groupStart(); 

            foreach ($searchMain as $field => $value) {
                if (!empty($value)) {
                    $builder->orLike($field, $value); 
                }
            }
            $builder->groupEnd();
            $log = json_encode($builder);
            return $builder;
        }

        if (!empty($searchMain)) {
            $builder->groupStart()
                ->like('id', $searchMain)
                ->orlike('name', $searchMain)
                ->orlike('price', $searchMain)
                ->orLike('short_description', $searchMain)
                ->orLike('description', $searchMain)
                ->orLike('weight', $searchMain)
                ->orLike('brand', $searchMain)
                ->orLike('discount', $searchMain)
                ->orLike('sub_price', $searchMain)
                ->orLike('image', $searchMain)
                ->groupEnd();
        }
        return $builder;
    }

    public function getById($id){
        $query = $this->db->table('ramaeri_Blogs')->where('id', $id)->get();
        return $query->getRow(); 
    }

    public function updateit($id, $data)
    {
        if (!is_numeric($id)) {
            return $id; 
        }
        return $this->db->table('ramaeri_Blogs')->where('id', $id)->update($data);
    }

    public function insertit($data)
    {
        return $this->db->table('ramaeri_Blogs')->insert($data);
    }

    public function deleteit($id)
    {
        return $this->db->table('ramaeri_Blogs')->where('id', $id)->delete();
    }
}
