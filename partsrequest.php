<?php


if($_POST["message"]) {


mail("tobymullins@mendopower.com", "Parts Request",


$_POST["Here is a parts request"]. "From: no-reply@mendopower.com");


}


?>



<!DOCTYPE html>

<html lang="en-US">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width">
      <link rel="stylesheet" type="text/css" href="resources/css/style.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">
      <title>Parts Request</title>
   </head>
   <header>
      <h4 class="address">73 Nancy Lane, Willits, CA. 95490</h4>
      <h4 class="phone">(707)354-5955</h4>
   </header>
   <body>
      <div>
         <h1 class="parts-heading">Parts Request</h1>
         <h4 class="parts-instruction">Please fill out all the fields below. Give as much detail as you can. We will email you an estimate for the parts and approximate lead time.</h4>
      </div>
      <form method="post" action="textrequest.php">
         <ul>
            <li>
               <label for="first-name">First Name:</label>
               <input type="text" id="first-name" name="first_name"/>
            </li>
            <li>
               <label for="last-name">Last Name:</label>
               <input type="text" id="last-name" name="last_name"/>
            </li>
            <li>
               <label for="email">E-mail:</label>
               <input type="email" id="email" name="user_email" />
            </li>
            <li>
               <label for="shipping-address">Shipping Address:</label>
               <input type="text" id="shipping-address" name="shipping_address"/>
            </li>
            <li>
               <label for="city">City:</label>
               <input type="text" id="city" name="city"/>
            </li>
            <li>
               <label for="state">State:</label>
               <input type="text" id="state" name="state"/>
            </li>
            <li>
               <label for="zip-code">Zip-code:</label>
               <input type="text" id="zip-code" name="zip_code"/>
            </li>
            <li>
               <label for="make">Make:</label>
               <input type="text" id="make" name="make"/>
            </li>
            <li>
               <label for="model">Model:</label>
               <input type="text" id="model" name="model"/>
            </li>
            <li>
               <label for="serial-number">Serial Number:</label>
               <input type="text" id="serial-number" name="serial-number"/>
            </li>
            <li>
               <label for="desc-of-parts">Please describe the parts needed:</label>
               <textarea id="desc-of-parts" name="desc-of-parts"></textarea>
            </li>
            <li class="button">
               <button type="submit">Submit</button>
            </li>
         </ul>
      </form>
   </body>
</html>
