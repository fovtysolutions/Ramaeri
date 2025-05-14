<?php
namespace Core\Home\Controllers;

class Home extends \CodeIgniter\Controller
{
    public function __construct(){
        $this->config = include realpath( __DIR__."/../Config.php" );

        // if( get_session("frontend_template") ){
        //     $this->template = get_session("frontend_template");
        // }else{
        //     $this->template = get_option("frontend_template", "Stackblue");
        // }
        $this->model = new \Core\Home\Models\HomeModel();
        $this->db = \Config\Database::connect();
        $this->email = \Config\Services::email();
    }

    public function index() {
        $session = session();
        $baseurl = base_url('login');
        $pagename = 'show404';
    
        if (!$session->get('isLogIn')) {
            $pagename = 'redirect';
        };
    
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\$pagename")
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }

    public function login() {
        $data = [
            "title" => "Login",
            "desc" => "Discription",
            "content" => view("Backend\Views\adminlogin"),
        ];
        return view("Backend\Views\auth", $data);
    }

    public function adminlogin() {
        $data = [
            "title" => "Login",
            "desc" => "Discription",
            "content" => view("Backend\Views\adminlogin"),
        ];
        return view("Backend\Views\auth", $data);
    }

    public function submitlogin()
    {
        $session = session();
        $validation = \Config\Services::validation();

        if ($session->get('isLogIn')) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'You are already logged in!!',
                'locationChange' => base_url('dashboard'),
            ]);
        }

        $validation->setRules([
            'email' => ['label' => lang('App.email'), 'rules' => 'required|valid_email|max_length[100]|trim'],
            'password' => ['label' => lang('App.password'), 'rules' => 'required|max_length[32]'],
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON([
                'status' => 'false',
                'message' => $validation->getErrors()
            ]);
        }

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $user = $this->model->checkUser($email, $password);
        if ($user) {
        
            if($user->is_admin == 2){
                $userisadmin = 2;
            } elseif($user->is_admin == 1){
                $userisadmin = 1;
            } else {
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => "No user found!!"
                ]);
            }

            $sessionData = [
                'isLogIn'    => true,
                'isAdmin'    => $userisadmin,
                'user_type'  => $user->is_admin,
                'id'         => $user->id,
                'fullname'   => $user->firstname,
                'email'      => $user->email,
                'image'      => $user->image,
                'last_login' => $user->last_login,
                'last_logout'=> $user->last_logout,
                'ip_address' => $user->ip_address,
                'uid' =>  $user->uid
            ];

            $session->set($sessionData);
            $this->model->last_login($user->id);

            if($user->is_admin == 2){
                return $this->response->setJSON([
                    'status' => 'success',
                    'message' => 'Login successfull!!',
                    'locationChange' => base_url('customer'),
                ]);
            }

            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Login successfull!!',
                'locationChange' => base_url('dashboard'),
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Invalid email or password!!'
            ]);
        }
    }

    public function register(){
        $data = [
            "title" => "Register",
            "desc" => "Discription",
            "content" => view("Backend\Views\\register"),
        ];
        return view("Backend\Views\auth", $data);
    }

    public function submitregister()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'firstname' => ['label' => lang('App.firstname'), 'rules' => 'required'],
            'lastname' => ['label' => lang('App.lastname'), 'rules' => 'required'],
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
        $password = password_hash($this->request->getPost('password'), PASSWORD_BCRYPT); 
        $firstname = $this->request->getPost('firstname');
        $lastname = $this->request->getPost('lastname');
        $uid = uniqid(); 
        $is_admin = 1;
        $usertype = 1;
        $status = 0;

        $data = [
            "email" => $email,
            "password" => $password, 
            "firstname" => $firstname,
            "lastname" => $lastname,
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

    private function generateCaptcha()
    {
        helper('captcha');

        $captchaConfig = [
            'img_path'      => WRITEPATH . 'captcha/',
            'img_url'       => base_url('writable/captcha/'),
            'font_path'     => WRITEPATH . 'fonts/captcha.ttf',
            'img_width'     => 343,
            'img_height'    => 64,
            'expiration'    => 600,
            'word_length'   => 4,
            'font_size'     => 32,
            'img_id'        => 'Imageid',
            'pool'          => '23456789abcdefghijkmnpqrstuvwxyz',
            'colors'        => [
                'background' => [255, 255, 255],
                'border' => [228, 229, 231],
                'text' => [49, 141, 1],
                'grid' => [241, 243, 246]
            ]
        ];

        return create_captcha($captchaConfig);
    }

    public function forgot() {
        $data = [
            "title" => "forgot",
            "desc" => "Discription",
            "content" => view("Backend\Views\\forgot"),
        ];
        return view("Backend\Views\auth", $data);
    }

    public function logout()
    { 
        $session = session();
        $this->model->last_logout($session->id);
        session()->destroy();
        return redirect()->to('login');
    }
   
    public function show404() {
        $session = session();
        $baseurl = base_url('login');
        $pagename = 'show404';
    
        if (!$session->get('isLogIn')) {
            $pagename = 'redirect';
        };
    
        $data = [
            "title" => $this->config['name'],
            "desc" => $this->config['desc'],
            "content" => view("Frontend\\Views\\$pagename")
        ];
    
        echo view("Frontend\\Views\\index", $data);
    }

    public function forgot_check()
    {
        $email = $this->request->getPost('forgot', FILTER_SANITIZE_EMAIL);
        $user = $this->db->table('user')->where('email', $email)->get()->getRow();
        $send_email = $this->db->table('email_config')->where('email_config_id',1)->get()->getRow();	

        if ($user) {
            $random_key = "RK" . date('y') . strtoupper(bin2hex(random_bytes(2))); // Generate secure token
            
            $this->db->table('user')->where('email', $email)->update(['password_reset_token' => $random_key]);

            $emailConfig = new \Config\Email();

            $emailService = \Config\Services::email();
            $config = array(
                'protocol'  => $send_email->protocol,
                'SMTPHost' => $send_email->smtp_host,
                'SMTPPort' => $send_email->smtp_port,
                'SMTPUser' => $send_email->sender,
                'SMTPPass' => $send_email->smtp_password,
                'mailtype'  => $send_email->mailtype,
                'charset'   => 'utf-8'
            );
            $emailService->initialize((array) $config);

            $subject = "Password Reset";
            $htmlContent = "Your OTP code is <b>{$random_key}</b>";

            $emailService->setFrom($emailConfig->fromEmail, $emailConfig->fromName);
            $emailService->setTo(strtolower($email));
            $emailService->setSubject($subject);
            $emailService->setMessage($htmlContent);
            
            if (!$emailService->send()) {
                return $this->response->setJSON(['status' => 'true', 'msg' => "OTP Code Sent To Email", 'email' => $email]);
            } else {
                return $this->response->setJSON(['status' => 'false', 'msg' => 'Failed to send OTP email']);
            }
        } else {
            return $this->response->setJSON(['status' => 'false', 'msg' => 'Email Not Found']);
        }
    }

    public function check_code()
    {
        $code = $this->request->getPost('forgot', FILTER_SANITIZE_STRING);
        $email = $this->request->getPost('hemail', FILTER_SANITIZE_EMAIL);
        $user = $this->db->table('user')->where('email', $email)->where('password_reset_token', $code)->get()->getRow();
        if ($user) {
            return $this->response->setJSON(['status' => 'true', 'msg' => "Please Enter New Password"]);
        } else {
            return $this->response->setJSON(['status' => 'false', 'msg' => 'OTP Code Does Not Match']);
        }
    }

    public function new_password()
    {
        $password = $this->request->getPost('forgot', FILTER_SANITIZE_STRING);
        $email = $this->request->getPost('hemail', FILTER_SANITIZE_EMAIL);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $user = $this->db->table('user')->where('email', $email)->get()->getRow();
        if ($user) {
            $this->db->table('user')->where('email', $email)->update([
                'password' => $hashedPassword,
                'password_reset_token' => ''
            ]);
            return $this->response->setJSON(['status' => 'true', 'msg' => "Password Changed Successfully"]);
        } else {
            return $this->response->setJSON(['status' => 'false', 'msg' => 'Please Try Again']);
        }
    }

    function randstrGen($mode = null, $len = null) {
        $result = "";
        if ($mode == 1):
            $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        elseif ($mode == 2):
            $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        elseif ($mode == 3):
            $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
        elseif ($mode == 4):
            $chars = "0123456789";
        endif;
        $charArray = str_split($chars);
        for ($i = 0; $i < $len; $i++) {
            $randItem = array_rand($charArray);
            $result .= "" . $charArray[$randItem];
        }
        return $result;
    }

    public function singleuploader()
    {
        $file = $this->request->getFile('file');
        if (!$file) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'No file was uploaded.',
            ]);
        }
        $fileType = $this->request->getPost('filetype');
        $allowedTypes = [];
        if ($fileType === 'image') {
            $allowedTypes = ['jpg', 'jpeg', 'png', 'webp'];
            $maxFileSize = 5 * 1024 * 1024; 
        } elseif ($fileType === 'document') {
            $allowedTypes = ['pdf', 'xls', 'xlsx'];
            $maxFileSize = 5 * 1024 * 1024; 
        } elseif ($fileType === 'video'){
            $allowedTypes = [
                'mp4', 'avi', 'mov', 'wmv', 'flv',
                'mkv', 'webm', 'mpeg', 'mpg', '3gp',
                'ogg', 'm4v'
            ];
            $maxFileSize = 25 * 1024 * 1024; 
        }
        else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Invalid file type provided.',
            ]);
        }
        $fileExtension = $file->getClientExtension();
        if (!in_array($fileExtension, $allowedTypes)) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => "Invalid file format. Allowed formats: " . implode(', ', $allowedTypes),
            ]);
        }
        
        if ($file->getSize() > $maxFileSize) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'File size exceeds the maximum limit of 5 MB.',
            ]);
        }
        if ($file->isValid() && !$file->hasMoved()) {
            $uploadPath = WRITEPATH . 'uploads/' . $fileType;
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }
            $newName = $file->getRandomName();
            $file->move($uploadPath, $newName);
            return $this->response->setJSON([
                'status' => 'success',
                'filename' => 'uploads/' . $fileType . '/' . $newName,
                'message' => 'File uploaded successfully.',
            ]);
        }
        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Failed to upload the file.',
        ]);
    }

    public function multiuploader()
    {
        $files = $this->request->getFiles();
        $fileType = $this->request->getPost('filetype');
        $allowedTypes = [];

        if ($fileType === 'image') {
            $allowedTypes = ['jpg', 'jpeg', 'png', 'webp'];
        } elseif ($fileType === 'document') {
            $allowedTypes = ['pdf', 'xls', 'xlsx'];
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Invalid file type provided.',
            ]);
        }

        $uploadedFiles = $files['files'];
        $uploadedPaths = [];

        foreach ($uploadedFiles as $key => $file) {
            if ($file->isValid() && !$file->hasMoved()) {
                $ext = $file->getClientExtension();
                if (!in_array($ext, $allowedTypes)) {
                    continue;
                }

                if ($file->getSize() > 5 * 1024 * 1024) {
                    continue;
                }

                $uploadPath = FCPATH . 'uploads/' . $fileType;
                if (!is_dir($uploadPath)) {
                    mkdir($uploadPath, 0777, true);
                }

                $newName = $file->getRandomName();
                $file->move($uploadPath, $newName);

                $uploadedPaths[] = [
                    'id' => rand(10,1000),
                    'file' => 'uploads/' . $fileType . '/' . $newName,
                    'original_name' => $file->getClientName(),
                    'size' => $file->getSize(),
                    'extension' => $ext
                ];
            }
        }

        if (empty($uploadedPaths)) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'No valid files were uploaded.',
            ]);
        }

        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Files uploaded successfully.',
            'files' => $uploadedPaths,
        ]);
    }

}