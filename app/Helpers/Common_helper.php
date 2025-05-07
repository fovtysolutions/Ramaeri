<?php
use CodeIgniter\HTTP\URI;
use Config\Services;
use Config\Database;

if (!function_exists('getInfoById')) {
    function getInfoById($table,$id,$value) {
        $db = Database::connect();
        $query = $db->table($table)->where('id',$id)->get();
        $row = $query->getRow();
        if($row){
            return $row->$value;
        }else{
            return false;
        }
    }
}

if (!function_exists('getInfoByUid')) {
    function getInfoByUid($table,$uid,$value) {
        $db = Database::connect();
        $query = $db->table($table)->where('admin_uid',$uid)->get();
        $row = $query->getRow();
        if($row){
            return $row->$value;
        }else{
            return false;
        }
    }
}

if( ! function_exists('getOrdinalSuffix') ){
    function getOrdinalSuffix($number) {
        if (!in_array(($number % 100), [11, 12, 13])) {
            switch ($number % 10) {
                case 1: return 'st';
                case 2: return 'nd';
                case 3: return 'rd';
            }
        }
        return 'th';
    }
}

if( ! function_exists('_e') ){
    function _e($text = '', $strip_tags = true){
        if($strip_tags){
            if(DEMO){
                if( filter_var($text, FILTER_VALIDATE_EMAIL) ){
                    echo hideEmailAddress($text);
                }else{
                    if($text != ""){
                        echo strip_tags($text);
                    }else{
                        echo $text;
                    }
                }
            }else{
                if($text != ""){
                    echo strip_tags($text);
                }else{
                    echo $text;
                }
            }
        }else{
            echo $text;
        }
    }
}

if( ! function_exists('_ec') ){
    function _ec($text = '', $strip_tags = true){
        if(DEMO){
            if( filter_var($text, FILTER_VALIDATE_EMAIL) ){
                echo hideEmailAddress($text);
            }else{
                echo $text;
            }
        }else{
            echo $text;
        }
    }
}

if( ! function_exists('get_module_paths') ){
    function get_module_paths(){
        $configs = array();
        $folders = array(
            ROOTPATH . 'inc/plugins/',
            ROOTPATH . 'inc/core/',
            ROOTPATH . 'inc/superadmin/',
            ROOTPATH . 'inc/themes/backend/',
            ROOTPATH . 'inc/themes/frontend/',
        );

        $module_paths = array();

        foreach ( $folders as $folder )
        {
            $directories = glob( $folder . '*' );

            if ( !empty( $directories ) )
            {
                foreach ( $directories as $directory )
                {
                    if( file_exists( $directory . "/Config.php" ) ){
                        $module_paths[] = $directory;
                    }
                }
            }
        }

        return $module_paths;
    }
}

// if( ! function_exists("get_option") ){
//     function get_option($key, $value = ""){
//         $option = db_get("value", "sp_options", "name = '".$key."'");
//         if(empty($option)){
//             db_insert("sp_options", [ "name" => $key, "value" => $value ] );
//             return $value;
//         }else{
//             return $option->value;
//         }
//     }
// }

if( ! function_exists('getCurrency') ){
    function getCurrency() {
        $db = \Config\Database::connect();
        
        $query = $db->table('currency')
                    ->join('hotel_booking_setup', 'hotel_booking_setup.currency = currency.id', 'left')
                    ->get();
        
        return $query->getRow(); 
    }
}

if( ! function_exists('maxfindate') ){
    function maxfindate() {
        $db = \Config\Database::connect();
        
        $query = $db->table("tbl_financialyear")
                    ->select("end_date")
                    ->where("start_date <=", date("Y-m-d"))
                    ->where("end_date >=", date("Y-m-d"))
                    ->where("is_active", 2)
                    ->get();
        
        $row = $query->getRow(); 

        return !empty($row->end_date) ? $row->end_date : '';
    } 
} 

if (!function_exists('display')) {
    function display($text = null) {
        $db = \Config\Database::connect();
        $table  = 'language';
        $phrase = 'phrase';
        $setting_table = 'setting';
        $default_lang  = 'english';

        // Get language setting from `setting` table
        $data = $db->table($setting_table)->get()->getRow();

        $language = !empty($data->language) ? $data->language : $default_lang;

        if (!empty($text)) {
            if ($db->tableExists($table)) { 
                if ($db->fieldExists($phrase, $table)) { 
                    if ($db->fieldExists($language, $table)) {
                        $row = $db->table($table)
                                  ->select($language)
                                  ->where($phrase, $text)
                                  ->get()
                                  ->getRow(); 

                        return !empty($row->$language) ? esc($row->$language) : false;
                    }
                }
            }
        }
        return false;
    }
}

if( ! function_exists('hideEmailAddress') ){
    function hideEmailAddress($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            list($first, $last) = explode('@', $email);
            $first = str_replace(substr($first, '3'), str_repeat('*', strlen($first)-3), $first);
            $last = explode('.', $last);
            $last_domain = str_replace(substr($last['0'], '1'), str_repeat('*', strlen($last['0'])-1), $last['0']);
            $hideEmailAddress = $first.'@'.$last_domain.'.'.$last['1'];
            return $hideEmailAddress;
        }
    }
}


if( ! function_exists('directory_map') ){
    function directory_map($source_dir, $directory_depth = 0, $hidden = FALSE)
    {
        if ($fp = @opendir($source_dir))
        {
            $filedata	= array();
            $new_depth	= $directory_depth - 1;
            $source_dir	= rtrim($source_dir, DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR;

            while (FALSE !== ($file = readdir($fp)))
            {
                // Remove '.', '..', and hidden files [optional]
                if ($file === '.' OR $file === '..' OR ($hidden === FALSE && $file[0] === '.'))
                {
                    continue;
                }

                is_dir($source_dir.$file) && $file .= DIRECTORY_SEPARATOR;

                if (($directory_depth < 1 OR $new_depth > 0) && is_dir($source_dir.$file))
                {
                    $filedata[$file] = directory_map($source_dir.$file, $new_depth, $hidden);
                }
                else
                {
                    $filedata[] = $file;
                }
            }

            closedir($fp);
            return $filedata;
        }

        return FALSE;
    }
}

if( ! function_exists("uri") ){
    function uri( $type , $value = "" ){
        $uri = service('uri');

        $data = false;
        
        switch ($type) {
            case 'segment':
                try {
                    $data = $uri->getSegment($value);
                } catch (Exception $e) {}
                break;
        }
        return $data;
    }
}

if ( ! function_exists('form_open'))
{
	/**
	 * Form Declaration
	 *
	 * Creates the opening portion of the form.
	 *
	 * @param	string	the URI segments of the form destination
	 * @param	array	a key/value pair of attributes
	 * @param	array	a key/value pair hidden data
	 * @return	string
	 */
	function form_open($action = '', $attributes = [], $hidden = [])
    {
        $request = Services::request();
        $security = Services::security();
        $securityConfig = config('Security'); // Corrected CSRF config

        // If no action is provided, set it to the current URL
        if (empty($action)) {
            $action = current_url();
        }
        // If action is not a full URL, convert it to a full site URL
        elseif (strpos($action, '://') === false) {
            $action = site_url($action);
        }

        $attributes = _attributes_to_string($attributes);

        if (stripos($attributes, 'method=') === false) {
            $attributes .= ' method="post"';
        }

        if (stripos($attributes, 'accept-charset=') === false) {
            $attributes .= ' accept-charset="' . strtolower(config('App')->charset) . '"';
        }

        $form = '<form action="' . $action . '"' . $attributes . ">\n";

        // Add hidden fields
        if (is_array($hidden)) {
            foreach ($hidden as $name => $value) {
                $form .= '<input type="hidden" name="' . esc($name) . '" value="' . esc($value) . "\" />\n";
            }
        }

        // ✅ Corrected CSRF Protection Check
        if ($securityConfig->csrfProtection && stripos($form, 'method="get"') === false) {
            $csrfName = $security->getCSRFTokenName();
            $csrfHash = $security->getCSRFHash();
            $form .= '<input type="hidden" name="' . esc($csrfName) . '" value="' . esc($csrfHash) . "\" />\n";
        }

        return $form;
    }
}

if ( ! function_exists('_attributes_to_string'))
{
	/**
	 * Attributes To String
	 *
	 * Helper function used by some of the form helpers
	 *
	 * @param	mixed
	 * @return	string
	 */
	function _attributes_to_string($attributes)
	{
		if (empty($attributes))
		{
			return '';
		}

		if (is_object($attributes))
		{
			$attributes = (array) $attributes;
		}

		if (is_array($attributes))
		{
			$atts = '';

			foreach ($attributes as $key => $val)
			{
				$atts .= ' '.$key.'="'.$val.'"';
			}

			return $atts;
		}

		if (is_string($attributes))
		{
			return ' '.$attributes;
		}

		return FALSE;
	}
}
