<?php
namespace App\Helpers;

use App\Helpers\Set;

class Result extends Objects {

   const CODE_SUCCESS = 0;
   const INFO_SUCCESS = 'OK';

   public function __construct($guid = 0, $code = self::CODE_SUCCESS, $info = self::INFO_SUCCESS) {

      parent::__construct(
      array(
        'guid' => $guid,
        'code' => $code,
        'info' => $info,
        'data' => null,
      ),
      array(
        'guid',
        'code',
        'info',
        'data',
      )
    );
   }

   public function index(){
      return ('this is index');
   }

   public function clear() {

      $this->guid = 0;
      $this->code = self::CODE_SUCCESS;
      $this->info = self::INFO_SUCCESS;
   }

   public function toArray() {

      return $this->pull();
   }

   public function toJson() {

      return json_encode($this->toArray());
   }
}