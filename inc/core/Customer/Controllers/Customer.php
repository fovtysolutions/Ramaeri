<?php
namespace Core\Customer\Controllers;
use App\Controllers\PeginationController;

class Customer extends \CodeIgniter\Controller
{
    public function __construct(){
        $this->config = include realpath( __DIR__."/../Config.php" );
        $this->model = new \Core\Customer\Models\CustomerModel();
        $this->db = \Config\Database::connect();
        $this->master = "customer";
    }
    
    public function index()
    {
        $master = $this->master;
        $mainDetails = [   
            'dashboard' => $master,
            'title' => $master, 
            'heading' => "Customer List", 
            'print' => '', 
            'searchname' => "Search $master", 
            'searching'=> '',
            'filterinput'=> '',
            'filterids'=>json_encode([]),
            'th'=>["Name", "Email"],
            'mainid'=> "get$master",
            'addbtnroute'=> "$master/add",
            'routeURL'=> "$master/get",
            'editroute'=> "/$master/edit/",
            'deleteURL'=> "$master/deleteit",
            'td'=>json_encode(["customer_name","email"]),
        ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view('Core\Customer\Views\customerlist', $mainDetails)
        ];
        return view('Core\Customer\Views\index', $data);
    }

    public function get()
    {
        $pagelimit = $this->request->getVar('pagelimit');

        $limit = $pagelimit;
        $searchMain = $this->request->getVar('allData');
        $offset = $this->request->getVar('page'); 

        
      $builder = $this->model->getSearchAll($searchMain);

        $totalRows = $builder->countAllResults(false);
        $builder->orderBy('id', 'ASC')->offset($offset)->limit($limit);

        $data = $builder->get()->getResultArray();
        $pagination = new PeginationController([
           'baseURL' => base_url('assets/include/getPeginationData.php'),
        //    'totalRows' => $totalRows,
           'perPage' => $limit,
           'currentPage' => $offset,
           'contentDiv' => 'normal',
           'getpagechange' => 'leadbrowse'
        ]);

        return $this->response->setJSON([
           'status' => 'success',
           'data' => $data,
           'pagination' => $pagination->createLinks()
        ]);
    }

    public function customersearch()
    {
        $searchMain = $this->request->getVar('allData');
        if (str_contains($searchMain, 'CUS001')) {
            $searchMain = preg_replace('/^[A-Z]+0*/', '', $searchMain);
        }
        $data = $this->model->getSearchAll($searchMain)->get()->getResultArray();
        return $this->response->setJSON([
            'status' => 'success',
            'data'   => $data
        ]);
    }

    public function edit($id)
    {
        $master = $this->master;
        $detailsModel = $this->model->getById($id);
        $id = $detailsModel->id;
        $addDatas = [   
                        'dashboard' => $master,
                        'title' => $master, 
                        'heading'=> "Edit $master",  
                        'detailsdata'=> $detailsModel,
                        'editit' => $id,
                        'formid' => "form$master",
                        'formroute' => "$master/datasetup",
                        'successroute' => $master,
                    ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view('Core\Customer\Views\content', $addDatas)
        ];
        return view('Core\Customer\Views\index', $data);
    }

    public function add()
    {
        $master = $this->master;
        $addDatas = [   
                        'dashboard' => $master,
                        'title' => $master, 
                        'heading'=> "Add $master",  
                        'detailsdata'=> [],
                        'editit' => false,
                        'formid' => "form$master",
                        'formroute' => "$master/datasetup",
                        'successroute' => $master,
                    ];
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view('Core\Customer\Views\content', $addDatas)
        ];
        return view('Core\Customer\Views\index', $data);
    }

    public function datasetup()
    {
        $isEdit = $this->request->getPost('edit');
        $postData = $this->request->getPost();
        if ($isEdit) {
            $id = $this->request->getPost('edit');
            $selectedValue = $this->model->getById($id);
            if (!$selectedValue) {
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'Invalid data or record not found.'
                ]);
            }
        } else {
            $postData['uid'] = uniqid();
            $postData['password'] = password_hash(123456, PASSWORD_BCRYPT);
            $postData['is_admin'] = 1;
            $postData['usertype'] = 1;
            $postData['status'] = 1;  
        }
        try {
            if ($isEdit) {
                unset($postData['edit']);
                if(!$this->model->updateit($isEdit, $postData)){
                    return $this->response->setJSON([
                        'status' => 'error',
                        'message' => "something went wrong!!",
                    ]);
                }
                $message = 'Data updated successfully!!';
            } else {
                if(!$this->model->insertit($postData)){
                    return $this->response->setJSON([
                        'status' => 'error',
                        'message' => "something went wrong!!",
                    ]);
                }
                $message = 'Data saved successfully!!';
            }
        } catch (\Exception $e) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'An error occurred while saving the data.',
                'details' => $e->getMessage()
            ]);
        }

        return $this->response->setJSON([
            'status' => 'success',
            'locationChange' => true,
            'message' => $message,
            'csrf_token' => csrf_hash(),
        ]);
    }

    public function deleteit()
    {
        if($this->request->getPost(index: "delete")){
            $id = $this->request->getPost(index: "delete");
            if($this->model->deleteit($id)){
                return $this->response->setJSON([
                    'status' => 'success',
                    'massage' => 'deleted row!!'
                ]);
            }else{
                return $this->response->setJSON([
                    'status' => 'error',
                    'massage' => 'Something went wrong!!'
                ]);
            }
        }
    }
}