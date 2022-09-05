<?php 
 include "../../inc/header_admin.php"; ?>

<html>
    <head>
    </head>
    <body>
        <form method="post" action="#">
        To : <input type="text" name="mail_to" class="form-control"> <br/>
        Subject :   <input type="text" name="mail_sub" class="form-control">
       <br/>
         Message   <input type="text" name="mail_msg" class="form-control"
         >
        <br/>
            <input type="submit" value="Send Email">
        </form>
    </body>
</html>