<h1>FizzBuzz問題</h1>
<form action="fizzbuzz.php" method="post">
<p>FizzNum: <input type="text" name="fizz" placeholder="整数値を入力してください"></p>
<p>BuzzNum: <input type="text" name="buzz" placeholder="整数値を入力してください"></p>
<input type="submit" name="submit" value="実行">
</form> 

<p>【出力】</p>

<?php 
  if(!empty($_POST["submit"])){
    $fizz = $_POST['fizz'];
    $buzz = $_POST['buzz'];
    if($fizz === "0" && $buzz === "0"){
      echo "整数値を入力してください";
      return;
    }elseif(ctype_digit($fizz) && ctype_digit($buzz)){
      for($i=1;$i<100;$i++){
        if($i % $fizz === 0 && $i % $buzz === 0){
          echo "FizzBuzz ".$i."<br>";
        }elseif($i % $fizz === 0){
          echo "Fizz ".$i."<br>";
        }elseif($i % $buzz === 0){
          echo "Buzz ".$i."<br>";
        }
    }
  }else{
    echo "整数値を入力してください";
  }
}
?>