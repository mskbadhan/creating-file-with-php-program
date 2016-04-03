
<title>GETTING REAL IP OF THE VISITOR</title>
<style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:100);
    body{
        background: #34495e;
        text-align: center;
        font-size:20px;
        margin-top:100px;
        color:white;
        font-family:'Raleway', sans-serif;
    }

    .submit{
        width:105px;
        height:30px;
        background: #2dffdf;
        font-size: 17px;
        color:black;
        font-family: monospace;
    }
    input#userInput{
        height:30px;
        width: 250px;
        font-size: 15px;
        color:black;
    }
    a{
        color:white;
        text-decoration: underline;
    }
</style>


<?php 

if(isset($_POST["creatCommand"])){
    if(!empty($_POST["fileName"])){
    $fileName=$_POST["fileName"];
    fopen($fileName,"w");
    }
}

?>

<h1>Please name the file that you want to create</h1>
<form method="POST">
   <input type="text" name="fileName" id="userInput">
    <input type="submit" value="Creat file" name="creatCommand" class="submit">
</form>