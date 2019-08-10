<?php
namespace App\Helpers;

class Result{

   const CODE_SUCCESS = 0;
   const INFO_SUCCESS = 'OK';
   const CODE_FAILED  = 1;
   const INFO_FAILED  = 'FAIL';

   public function index(){
      
      return ('this is index');
   }

   public function success($data){
      $result = array(
         'guid' => 0,
         'code' => self::CODE_SUCCESS,
         'info' => self::INFO_SUCCESS,
         'data' => $data,
      );

      return $result;
   }

   public function failed($data){
      $result = array(
         'guid' => 0,
         'code' => self::CODE_FAILED,
         'info' => self::INFO_FAILED,
         'data' => $data,
      );

      return $result;
   }
}