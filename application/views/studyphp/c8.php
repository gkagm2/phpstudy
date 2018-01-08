<!--제목-->
<h3>배열의 등위 연산자</h3>
<pre>
배열의 연산자는 숫자처럼 사칙연산이 되는 것은 아니지만 배열을 더하거나 같은 원소들을 가졌는지
또한 두 배열이 완벽히 일치하는지 등을 검사할 수 있는 배열만의 특별한 연산자다.

$b = array(1=>2, 0=>1); 에서
1=>2는
1번째 index에 2를 넣는다는 말이고 
0=>1은
0번째 index에 1을 넣는다는 말인가?

키값... 애매하군.
</pre>


<!--코드-->
<hr><h4>소스코드</h4> <hr>
<pre>
$a = array(1, 2);
$b = array(2, 1);
if( $a == $b ){
    echo '$a와 $b는 같은 원소를 갖는다.';
} else {
    echo '$a와 $b는 다른 원소를 갖는다.';
}

echo '< br>';

$a = array(1, 2);
$b = array(1=>2, 0=>1);

if($a == $b){
    echo '$a와 $b는 같은 원소를 갖는다.';
} else {
    echo '$a와 $b는 다른 원소를 갖는다.';
}
</pre>

<!--결과-->
<hr><h4>결과</h4> <hr>
<?php
$a = array(1, 2);
$b = array(2, 1);
if( $a == $b ){
    echo '$a와 $b는 같은 원소를 갖는다.';
} else {
    echo '$a와 $b는 다른 원소를 갖는다.';
}

echo '<br>';

$a = array(1, 2);
$b = array(1=>2, 0=>1);

if($a == $b){
    echo '$a와 $b는 같은 원소를 갖는다.';
} else {
    echo '$a와 $b는 다른 원소를 갖는다.';
}


?>
