<?php
set_time_limit(0);
include 'config.php';
if(isset($_GET['k'])){
    $k = $_GET['k'];
    if(strlen($k)!=5)
        die("Key's length is 5, and in range [a-f0-9].");
    for($i=0;$i<strlen($k);$i++)
    {
        if($k[$i]!=$masterkey[$i])
            die("Key is incorrect");
        sleep(3);
    }
    echo $FLAG;
}
else{
    echo <<<EOD
<a href="index.txt">source</a>
<form action="index.php">
    <input name="k" maxlength="5" size="5"><input type="submit">
</form>
EOD;
}
?>
