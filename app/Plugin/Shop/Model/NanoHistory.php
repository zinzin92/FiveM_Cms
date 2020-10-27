<?php
class NanoHistory extends ShopAppModel {
  public $belongsTo = array(
    'User',
    'Nano' => array(
      'foreignKey' => 'offer_id'
    )
  );
}
