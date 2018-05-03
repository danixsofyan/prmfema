<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('logoadmin'))
{
   function logoadmin()
   {
      $ci = & get_instance();
      $ci->load->model('Home_m');
      $check = $ci->Home_m->get_pengaturan();
      if($check){
          foreach ($check->result() as $row) {
              $logoadmin = $row->logoadmin;
          }
      }else{
        $logoadmin = NULL;
      }
      return $logoadmin;
   }
}

if ( ! function_exists('addVooters'))
{
   function addVooters($jumlahVooter = 1, $panjangPassword = 5)
   {
      $ci = & get_instance();
      $ci->load->model('Vooter_m');

      $string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
      $len = strlen($string);

      for ($i=0; $i < $jumlahVooter; $i++) { 
        $pass = '';
        for($j=1;$j<=$panjangPassword; $j++){
            $start = rand(0, $len);
            $pass .= substr($string, $start, 1);
        }
        $data['password'] = $pass;
        $ci->Vooter_m->addVooters($data);
      }
      
      return true;
   }
}

