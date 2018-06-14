<?php

  namespace API;

  class FuloosPay {

    // Global Variables
    public $access_key;


    /* Initialize the API Class */

    public function __construct($accesskey)
    {
      if(!isset($accesskey))
      {
        // If missing parameters, return this error.
        die("Please check your Access Key Information...");
      } else {
        // Set the parameters.
        $this->access_key = $accesskey;
      }
    }


    /*

      @Method: Returns the checkaccount method
      @JSON Array:
        status of request:
        full_name:
        email_address:
        balance:
        last_login:
        account_status:

    */

    public function _checkaccount()
    {
      $data = $this->run(
        array(
          'key' => $this->access_key,
          'method' => "check_account"
        )
      );

      return $data;
    }




    /*

      @Method: Returns the checkinvoice command:
      @JSON Array:
        status of request:
        status of invoice:
        amount_fls:
        amount_usd:
        invoice_link:
        invoice_id:

        //Status Codes:
        1: Unpaid
        2: Paid

    */

    public function _checkinvoice($invoiceID)
    {
      $data = $this->run(
        array(
          'key' => $this->access_key,
          'method' => "check_invoice",
          'invoice_id' => $invoiceID
        )
      );

      return $data;
    }


    /*

      @Method: Returns the checkinvoice command:
      @JSON Array:
        status of request:
        status of invoice:
        amount_fls:
        amount_usd:
        invoice_link:
        invoice_id:

        //Status Codes:
        1: Unpaid
        2: Paid

    */

    public function _fuloosprice()
    {
      $data = $this->run(
        array(
          'key' => $this->access_key,
          'method' => "fuloos_price",
        )
      );

      return $data;
    }




    /*
      Please do not edit the run method, this is used to send request to the API.
      If this is changed, please make sure you know what you are doing..
    */

    public function run($data)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'https://panel.fuloospay.net/api/');
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_ENCODING, 'Content-Type: application/json');
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_TIMEOUT, 120);
      $server_output = curl_exec ($ch);
      return json_decode($server_output, true);
    }

  }

?>
