<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
$question = $_POST['question'];
$answer = $_POST['answer'];

$question2 = $_POST['question2'];
$answer2 = $_POST['answer2'];

$question3 = $_POST['question3'];
$answer3 = $_POST['answer3'];
?>

<?php
 if($question == $answer){
    $result = "正解！";
}else{
    $result = "残念･･･";
}
?>

<?php
if($question2 == $answer2){
    $result2 = "正解！";
}else{
    $result2 = "残念･･･";
}
?>

<?php
if($question3 == $answer3){
    $result3 = "正解！";
}else{
    $result3 = "残念･･･";
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="style1.css">
</head>
<body>
  <div>
    <p><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え
<?php 
echo "<br>";
echo $result ?></p>
<p>②の答え
<?php 
echo "<br>";
echo $result2 ?></p>
<p>③の答え
<?php 
echo "<br>";
echo $result3 ?></p>
  </div>
</body>
</html>