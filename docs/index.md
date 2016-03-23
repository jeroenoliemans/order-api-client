# Order API

The order API is proivided by [beslist.nl].

The order API provides the webshop with a list of orders for their webshop. There are 3 ways for a webshop to receive their orders

  - **Order XML (XML)**: the webshop pulls the orders in xml format with a webservice.
  - **Order Push (JSON)**: the API pushes new orders directly to the webshop.
  - **Order fetch (JSON)**: the shop pulls the orders in JSON format.


### Installing the client

Change your composer.json file to include the beslist order api client

```json
"require": {
    "beslist/order-bundle": "dev-develop",
}
```

run composer install

```sh
$ cd navigate to directory
$ composer install
```
   [beslist.nl]: <https://www.beslist.nl>