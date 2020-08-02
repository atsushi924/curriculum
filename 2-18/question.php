<?php 
$my_name = $_POST['my_name'];

$question = array();
$question = array('80','22','20','21');
$answer = $question[0];


$question2 = array();
$question2 = array('PHP','Python','JAVA','HTML');
 
$answer2 = $question2[0];

$question3 = array();
$question3 = array('join','select','insert','update');
 
$answer3 = $question3[1];
?>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
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
  <p>お疲れ様です<?php echo $my_name; ?>さん</p>
    <h2 class="question">①HTTPプロトコルで使用されるポート番号は何番？</h2>
    <form class="answer" method="POST" action="answer.php"> 
        <?php foreach($question as $value){ ?>
            <input type="radio" name="question" value="<?php echo $value; ?>"/> 
        <?php echo $value; ?> 
            <input type="hidden" name="answer" value="<?php echo $answer; ?>"> 
        <?php }?>
    <h2 class="question">②動的Webページを作成するための言語は？</h2>
        <?php foreach($question2 as $value2){ ?>
           <input type="radio" name="question2" value="<?php echo $value2; ?>"/> 
        <?php echo $value2; ?> 
            <input type="hidden" name="answer2" value="<?php echo $answer2; ?>"> 
        <?php }?>
    <h2 class="question">③MySQLで情報を取得するためのコマンドは？</h2>
        <?php foreach($question3 as $value3){ ?>
           <input type="radio" name="question3" value="<?php echo $value3; ?>"/> 
        <?php echo $value3; ?> 
            <input type="hidden" name="answer3" value="<?php echo $answer3; ?>"> 
        <?php }?>
            <input type="hidden" name="my_name" value="<?php echo $my_name; ?>"/>
        <?php echo "<br>" ?> 
            <input type="submit" value="回答する"/>
    </form>
  </div>
</body>
</html>