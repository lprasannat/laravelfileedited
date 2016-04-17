<?php
if($_POST){
    $some=$_POST['some'];
    $someelse=$_POST['someelse'];
    echo $some,'',$someelse;
}
?>
<form action='' method='post'>
    <input type='text' name='some'>
    <input type='text' name='someelse'>
    <input type='submit' value='submit'>
</form>