# Fuloos Pay API

A PHP implementation Class for Fuloos Pay API.

## Introduction

This is used by developers to allow store owners to start accepting Fuloos Coin using the easiest solution to accept payments and manage invoices.

## How to Use

This class is very simple to use, you need to simply include the api.class.php file and initialize it.

```php

  // Include the class file
  require_once 'api.class.php';
  
  // Start the fuloos class with the RPC Information
  $FuloosPay = new \API\FuloosPay("Access-Key");
  
  // Send request to the API
  $Fuloos->_check_key();
  

```

Now the Fuloos Pay API class is ready.

### Error Catcher

This application has an error catching mechanism so you can easily differentiate errors. 

Any errors will invoke a new Exception to be called. I am still working on this feature to have named Exceptions for better usability, but for now they simply give detail error messages.

# Methods

# _checkaccount
      @JSON Array:
        status of request:
        full_name:
        email_address:
        balance:
        last_login:
        account_status:

   
        
```
{
    "status": "200",
    "method": "check_account",
    "result": {
        "full_name": "Jimmy's Account",
        "email_address": "test_jim@example.com",
        "balance": 4000,
        "usd_balance": 300,
        "last_login": 4 hours ago,
        "account_status": active
    }
}
```

# _checkinvoice

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
        
```
{
    "status": "200",
    "method": "check_invoice",
    "result": {
        "status": 0,
        "amount_fls": 100,
        "amount_usd": 10,
        "invoice_link": "https://www.fuloospay.net/invoice/feb8169433e2c1e6cba4e55f373fec",
        "invoice_id": "feb8169433e2c1e6cba4e55f373fec",
    }
}
```



## Closing

I love help, if you think you can make this class better make a pull request! :)
