<!DOCTYPE html>
<html>
<body>
<?php
    for($no=1;$no<=50;$no++){
        if($no % 5 == 0 && $no % 3 == 0){
            echo "$no = ";echo "<font style='color:red;'>foobar</font><br>";
        }
        else if ($no % 3 == 0){
            echo "$no = ";echo "<font style='color:blue;'>foo</font><br>";
        }else if($no % 5 == 0){
            echo "$no = ";echo "<font style='color:green;'>bar</font><br>";
        }
    }
?>

</body>
</html>