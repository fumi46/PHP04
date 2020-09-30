<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       //課題１
       function times($x){
            $result = 2 * $x;

            return $result;
       }
       echo times(100);
       echo "<br/>";

       
       //課題２
       function f($a, $b){
           $result = $a + $b;

           return $result;
       }
       echo f(30,5);
       echo "<br/>";


       //課題３
       function times2($arr){
         $arr = array(1,3,5,7,9);
         $result = array_product($arr);  //配列の値の積

         return $result;
       }
       echo times2($arr);
       echo "<br/>";


       //課題４
       function max_array($arr){
       // とりあえず配列の最初の要素を一番大きい値とする
         $arr = array(1,12,9,5);
         $max_number = $arr[0];
         foreach($arr as $a){      //順次処理 配列内のとある要素変数$a
            if($a > $max_number){  //配列内の現在の要素が、それまでのどの要素よりも大きければ
               $max_number = $a;   //現在の要素を最大値とする。
            }
         }

         return $max_number;
        }
        echo max_array($arr);
        echo "<br/>";

      
        //課題５
        //strip_tags  HTMLタグ影響の除去
        $sample = '<p>sample test</p><h1>課題５</h1><strong>要素</strong>';
        echo strip_tags($sample,'<strong>')."\n";   //strongのHTMLダグだけ適用。それ以外は除去（テキストのみの表示）。
        echo "<br/>";

        //array_push  要素の結合
        $stack = array('a', 'b', 'c');
        array_push($stack, 'd', 'e');  //$stackの後に要素d,eを追加する。
        print_r($stack);
        echo "<br/>";

        //array_merge  配列の結合
        $array1 = [1,2,3,4];
        $array2 = [5,6,7];                      //配列$array1と配列$array2を結合し、
        $array = array_merge($array1, $array2); //$arrayという新しい変数を作る。
        print_r($array);
        echo "<br/>";

        $animals1 = [ 0 =>'cat', 1 =>'dog', 2 =>'bird'];
        $animals2 = [ 0 =>'monkey', 1 =>'zebra', 3 =>'tiger']; //$animals1と$animals2を結合し、
        $animals = array_merge($animals1, $animals2);          //$animalsという新しい変数を作る。
        print_r($animals);
        echo "<br/>";

        //time・date  今の時刻
        echo '現在の時刻は:'.time();  
        echo "<br/>";

        date_default_timezone_set('Asia/Tokyo');  //東京時間へ変更
        echo '現在の時刻は:'.date('Y-m-d - M(D) H:i:s',time());  //年月日 曜日 時分秒
        echo "<br/>";
        
        //mktime  指定時刻
        $timestamp = mktime(3,10,50,10,3,2025);  //(時、分、秒、年、日、年)
        echo '時刻:'.date('Y-m-d - M(D) H:i:s',$timestamp);
        echo "<br/>";

    ?>
</body>
</html>