<!DOCTYPE html>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

    <?php
    function chuvihcn ($a,$b){ 
    $chuvi = 2 * ($a + $b);
    return $chuvi;
    }
    $a = 5;
    $b = 6;
    $chuvi = chuvihcn($a,$b);

    echo "chu vi hình chữ nhật =" . $chuvi;
    echo "<br>";

    function ptb1($a,$b){
        if ($a==0){
            if ($b==0){
            return "pt vô số nghiệm";
            }else{
                return "pt vô nghiệm";
            }
        } else{
            $x=-$b/$a;
            return "pt có nghiệm là :" . $x;
        }
    }
    $a = 5;
    $b = 10;
    $ketqua = ptb1($a,$b);
    echo "$a * x + $b = 0" . "<br>";
    echo $ketqua . "<br>";

    echo "bài 3"."<br>";
    $arr = array(
        "1"=>"Cao Trọng Nghĩa",
        "2"=>"Nghĩa Trọng Cao",
        "3"=>"Cao Nghĩa Trọng ",
        "4"=>"Trọng Cao Nghĩa",
        "5"=>"Nghĩa Cao Trọng",
    );
    foreach($arr as $stt=>$ten){
        echo "bạn có stt: ".$stt.", tên là: ".$ten;
        echo"<br>";
    }

    ?>
</body>
</html>