<?php 

/**
 * check the array key and return the value 
 * 
 * @param array $array
 * @return extract array value safely
 */
if (!function_exists('get_array_value')) {

    function get_array_value($array, $key) {
        if (is_array($array) && array_key_exists($key, $array)) {
            return $array[$key];
        }
    }

}



/**
 * convert time string to 24 hours format 
 * 01:00 AM will be converted as 13:00:00 
 * 
 * @param string $time  required time format = 01:00 AM/PM
 * @return 24hrs time
 */
if (!function_exists('convert_time_to_24hours_format')) {

    function convert_time_to_24hours_format($time = "00:00 AM") {
         if (!$time)
            $time = "00:00 AM";

        if (strpos($time, "AM")) {
            $time = trim(str_replace("AM", "", $time));
            $check_time = explode(":", $time);
            if ($check_time[0] == 12) {
                $time = "00:" . get_array_value($check_time, 1);
            }
        } else if (strpos($time, "PM")) {
            $time = trim(str_replace("PM", "", $time));
            $check_time = explode(":", $time);
            if ($check_time[0] > 0 && $check_time[0] < 12) {
                $time = $check_time[0] + 12 . ":" . get_array_value($check_time, 1);
            }
        }
        
        $array_time = explode(":", $time);
        
        $hour = get_array_value($array_time, 0)? get_array_value($array_time, 0): "00";
        $minute = get_array_value($array_time, 1)? get_array_value($array_time, 1): "00";
        $secound = get_array_value($array_time, 2)? get_array_value($array_time, 2): "00";
        
        
        return $hour.":".$minute.":".$secound;
    }

}

if ( ! function_exists('get_settings'))
{

    function get_settings($type)
    {

        $CI = get_instance();
        $CI->load->database();
        $des = $CI->db->get_where('settings', array('type' => $type))->row('description');

        return $des;


    }
}

if ( ! function_exists('get_userEmailByName'))
{

    function get_userEmailByName($key)
    {

        $CI = get_instance();
        $CI->load->database();
        $des = $CI->db->get_where('users', array('userName' => $key))->row('email');
        return $des;

    }
}

if ( ! function_exists('get_userEmailByID'))
{

    function get_userEmailByID($key)
    {

        $CI = get_instance();
        $CI->load->database();
        $des = $CI->db->get_where('users', array('id' => $key))->row('email');
        return $des;

    }
}

if ( ! function_exists('get_BDMName'))
{

    function get_BDMName($key)
    {

        $CI = get_instance();
        $CI->load->database();
        $des = $CI->db->get_where('users', array('id' => $key))->row('bdm_name');
        return $des;

    }
}



