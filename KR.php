<pre>
<?php
//
////#1
//$x=mt_rand(1, 100);
//$n=mt_rand(1, 100);
//
//echo "X = $x, N = $n<br>\n";
//
//$sum=$n+$x;
//echo "$n+$x = $sum<br>\n";
//
//$dif=$n-$x;
//echo "$n+$x = $dif<br>\n";
//
//$div=$n/$x;
//echo "$n/$x = $div<br>\n";
//
//$mul=$n*$x;
//echo "$n*$x = $dif<br>\n";
//
//$bal=$n%$x;
//echo "$n%$x = $bal<br>\n";
//
//$deg=$n**$x;
//echo "$n**$x = $deg<br>\n";
//
//$conc = $x.$n;
//echo "конкатенация ".$conc;
//
//if ($x == $n) {
//	echo "Обе переменные равны";
//}else{
//	echo"Переменные не равны";
//}
//
//if ($x === $n) {
//	echo "Обе переменные тождественно равны";
//}else{
//	echo"Переменные тождественно не равны";
//}
//
//$invX = (-1)*$x;
//$invN = (-1)*$n;
//
//echo "инвертированный Х равен $invX<br>\n";
//echo "инвертированный N равен $invN<br>\n";
//
//
////#2
//echo "<br><hr>\n";
//
//$x=mt_rand(1, 100);
//$y=mt_rand(1, 100);
//
//$res=((2*$x)**4)+sin($y)-(($x+$y)/(7-$x))*sqrt($y+($x**2));
//
//echo "X = $x, Y = $y, Result = $res";
//
////#3
//echo "<br><hr>\n";
//
//$n=mt_rand(100, 999);
//
//echo "$n<br>\n";
//
//$n1="$n";
//$nArr=[];
//$nStr="";
//
//for ($i=0; $i<=2; $i++){
//	$n2=substr($n1, $i, 1);
//	$nArr[]=$n2;
//}
//
//rsort($nArr);
//
//foreach($nArr as $val){
//	$nStr.=$val;
//}
//
//$nStr=(integer)$nStr;
//
//echo $nStr;
//
////#4
//echo "<br><hr>\n";
//
//$arr1=["a", "b", "c"];
//$arr2=["c", "d", "e"];
//
//$arr3=array_merge($arr1,$arr2);
//
//echo "<pre>";
//print_r($arr1);
//print_r($arr2);
//print_r($arr3);
//echo "</pre>";
//
////#5
//echo "<br><hr>\n";
//
//$n=mt_rand(1, 20);
//
//for ($i=0; $i<=$n; $i++){
//	$arr[]=mt_rand(-50, 50);
//}
//
//echo "<pre>";
//print_r($arr);
//echo "</pre><br>\n";
//
//foreach($arr as $key => $value){
//	if ($value==0){
//		unset($arr[$key]);
//	}
//
//	if (($value%5)==0){
//		$arr[$key]=$value**2;
//	}
//}
//
//echo "<pre>";
//print_r($arr);
//echo "</pre>";
//
////#6
//echo "<br><hr>\n";
//
//?>
<!---->
<!--<form method="post">-->
<!--<select name="course">-->
<!--<option value="1">php</option>-->
<!--<option value="2">html</option>-->
<!--<option value="3">Java</option>-->
<!--</select>-->
<!--<input type="submit" name="3" value="Я выбрал"><br>-->
<!--</form>-->
<!---->
<?php
//
//$arr=[[3000, "Ivan Ivanov"],
//[2000, "Alex Petrov"],
//[3500, "Dmitriy Rubin"]];
//
//if(isset($_POST["course"])){
//	if($_POST["course"]==1){
//		echo "Ваш курс php, его стоимость ".$arr[0][0].", его преподаёт ".$arr[0][1].".";
//	}elseif($_POST["course"]==2){
//		echo "Ваш курс php, его стоимость ".$arr[1][0].", его преподаёт ".$arr[1][1].".";
//	}elseif($_POST["course"]==3){
//		echo "Ваш курс php, его стоимость ".$arr[2][0].", его преподаёт ".$arr[2][1].".";
//	}
//}
//
////#7
//echo "<br><hr>\n";
//
//$cont = file_get_contents("text.txt");
//echo $cont;
//
//$arrCont=explode(" ", $cont);
//
//foreach($arrCont as $key=>$value){
//	$value=trim($value);
//	if(substr($value,0,3)=="aba"){
//		echo"1";
//		$abaCont=file_get_contents("aba.txt");
//		$abaStr=$abaCont.$value." ";
//		file_put_contents("aba.txt", $abaStr);
//	}
//	if (strpos($value,"abc")!=FALSE){
//		echo"2";
//		$abcCont=file_get_contents("abc.txt");
//		$abcStr=$abcCont.$value." ";
//		file_put_contents("abc.txt", $abcStr);
//	}
//}
//
////#8
//
//$str1="., !";
//$str2="Hello Beer GET POST";
//$newStr="";
//$k=0;
//
//for ($i=0; $i<=strlen($str1); $i++){
//	$arr1[]=substr($str1, $i, 1);
//}
//
//$arr2=explode(" ", $str2);
//
//foreach($arr2 as $value){
//	$newStr.=$value;
//	$newStr.=$arr1[$k];
//	$k++;
//}
//
//echo "<br>".$newStr;
//
////#9
//?>
<!--<form method="POST">-->
<!--<input type="text" name="city">-->
<!---->
<!--<input type="submit">-->
<!--</form>-->
<?php
//$strCity="";
//
//if(isset($_POST['city'])){
//	$arrCity=explode(" ", $_POST['city']);
//	rsort($arrCity);
//	$strCity=implode(" ", $arrCity);
//}
//
//echo "<br>\n".$strCity;

//#10

$pizza=[
	"vet"=>[50, "Ветчина"],
	"gov"=>[55, "Говядина"],
	"sal"=>[50, "Салями"],
	"gri"=>[45, "Грибная"],
	"veg"=>[45, "Веганская"]
];

$pizzaKeys=array_keys($pizza);

$drinks=[
	"non"=>[0 ,"Без напитков"],
	"col"=>[10.5, "coca cola"],
	"fan"=>[10.5, "fanta"],
	"spr"=>[10.5, "sprite"]
];

$drinksKeys=array_keys($drinks);

?>
<form method="POST">
Выберете пиццу:
<select name="pizza">
	<?php
	foreach ($pizza as $key=>$value){
		echo"<option value='".$key."' ".
			((isset($_POST['pizza']) && $_POST['pizza']==$key)? "selected" : "").">".$value[1]."</option>";
	}
	?>
</select>
<br>
Выберете напиток:
<select name="drink">
<?php
foreach ($drinks as $key=>$value){
	echo"<option value='".$key."'".
		((isset($_POST['drink']) && $_POST['drink']==$key)? "selected" : "").">".$value[1]."</option>";
}
?>
</select>

<input type="checkbox" name="discount" value="0.9">Я счастливый обладатель скидки!</input>

Как далеко нам ехать?
<input type="text" name="road">

<input type="submit" value="Оформить заказ!">
</form>
<?php

if (isset($_POST['pizza']) && in_array($_POST['pizza'], $pizzaKeys)){
	$pizzaCoin=$pizza[$_POST['pizza']][0];
}else{
	echo "У нас нет такой пиццы.";
}

if (isset($_POST['drink']) && in_array($_POST['drink'], $drinksKeys)){
	$drinkCoin=$drinks[$_POST['drink']][0];
}else{
	echo "У нас нет таких напитков.";
}

if (isset($_POST['discount']) && $_POST['discount']==0.9){
	$discount=$_POST['discount'];
}else{
	$discount=1;
}

if (isset($_POST['road']) && is_numeric($_POST['road']) && ($_POST['road']<=50 && $_POST['road']>0)){
	$roadCoin=$_POST['road']*3;
}else{
	echo "Пожалуйста, введите корректное растояние до Вас.";
}

if (isset($pizzaCoin) && isset($drinkCoin) && isset($discount) && isset($roadCoin)){
	$coin=round(($pizzaCoin+$drinkCoin+$roadCoin)*$discount, 2);
	echo "Стоимость Вашего заказа составляет $coin гривень.";
}

?>
</pre>