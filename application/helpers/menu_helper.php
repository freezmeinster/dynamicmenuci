<?php

if ( ! function_exists('menu_list'))
{
    function menu_list()
    {
        $CI =& get_instance();
        $CI->load->model("Halaman");
        return $CI->Halaman->all();
    }
}
?>