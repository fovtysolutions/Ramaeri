<?php
namespace Core\Customer\Models;
use CodeIgniter\Model;

class CustomerModel extends Model
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

    public function getSearchAll($searchMain = null)
    {
        $builder = $this->db->table('hotel_booking_clients')->where('admin_uid', $this->session->get('uid'));

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
                ->orlike('c_name', $searchMain)
                ->orlike('c_email', $searchMain)
                ->orlike('c_phone', $searchMain)
                ->orLike('c_email', $searchMain)
                ->orLike('c_address', $searchMain)
                ->orLike('c_country', $searchMain)
                ->orLike('c_state', $searchMain)
                ->orLike('c_city', $searchMain)
                ->groupEnd();
        }
        return $builder;
    }

    public function getById($id){
        $query = $this->db->table('hotel_booking_clients')->where('id', $id)->get();
        return $query->getRow(); 
    }

    public function updateit($id, $data)
    {
        if (!is_numeric($id)) {
            return $id; 
        }
        return $this->db->table('hotel_booking_clients')->where('id', $id)->update($data);
    }

    public function insertit($data)
    {
        return $this->db->table('hotel_booking_clients')->insert($data);
    }

    public function deleteit($id)
    {
        return $this->db->table('hotel_booking_clients')->where('id', $id)->delete();
    }
}
