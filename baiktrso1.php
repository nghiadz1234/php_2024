<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>
    <?php
    //b8
    function giaiptb2($a,$b,$c){
        if ($a==0){
            if ($b==0){
                if ($c==0){
                    return "Phương trình vô số nghiệm";
                } else{
                    return "Phương trình vô nghiệm";
                }
            } else {
                $x = -$c/$b;
                return "Phương trình có nghiệm duy nhất: x =" . $x;
            }
        }
        $delta = $b * $b - 4 * $a * $c;
        if ($delta > 0) {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            return "Phương trình có hai nghiệm phân biệt: x1 = $x1 và x2 = $x2";
        } elseif ($delta == 0) {
            $x = -$b / (2 * $a);
            return "Phương trình có nghiệm kép: x = $x";
        } else {
            return "Phương trình vô nghiệm.";
        }
    }
    echo giaiptb2(0, 5, 6);
    echo "<br>";

    //b9
    
    function hcn($width, $height) {
        // Duyệt qua từng hàng
        for ($i = 0; $i < $height; $i++) {
            // Duyệt qua từng cột
            for ($j = 0; $j < $width; $j++) {
                if ($i == 0 || $i == $height - 1 || $j == 0 || $j == $width - 1) {
                    echo "*";
                } else {
                    echo " "; 
                }
            }
            echo "\n";
        }
    }
    
    hcn(7, 5);

    //10
    function tinhTrungBinhCong($mang) {
        // Kiểm tra nếu mảng không rỗng
        if (count($mang) == 0) {
            return 0;
        }
    
        $tong = array_sum($mang);
    
        $soLuong = count($mang);
    
        $trungBinhCong = $tong / $soLuong;
    
        return $trungBinhCong;
    }
    
    $mang = [2, 4, 6, 8, 200];
    echo tinhTrungBinhCong($mang);
?>
</pre>


    

</body>
</html>