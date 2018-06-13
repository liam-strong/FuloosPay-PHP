# Fuloos RPC API

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

# check_account
# check_invoice
# add_invoice
# check_accesskey


## Closing

I love help, if you think you can make this class better make a pull request! :)
