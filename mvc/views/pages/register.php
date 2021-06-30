<?php 
    if(isset($_POST)) print_r($_POST);
    print_r($_GET) ;
?>
<form action="/Register/dangky" method="post">
<input type="text" name="name">
<input type="submit" value="submit">
</form>
<a href="/Home">home</a>
