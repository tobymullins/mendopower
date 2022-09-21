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
    <title>My test page</title>
  </head>
  <body>
   <form method="post" action="techrequest.php">
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
            <label for="tech-question">Please describe your technical issue:</label>
            <textarea id="tech-question" name="tech-question"></textarea>
         </li>
         <li class="button">
            <button type="submit">Submit</button>
         </li>
      </ul>
   </form>
  </body>
</html>
