<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Comment </title>
    <style>
    .p1{
            font-family: Elephant;
            font-weight: bold;
            font-size: 20px;
            align-items: center;
        }
        form{
            width: 450px;
            height:300px;
        border: 2px solid red;
        }
        tr{
            color: deeppink;
            font-size: 25px;
        }
        tr td{
            font-size: 20px;
            color:  black;
            width: 100px;
            height: 40px;
        }
          tr td input{
            font-size: 20px;
            color:  black;
            width: 200px;
            height: 30px;
        }
    </style>
</head>
<body>
<center>
    <button><a href="friendform.php">Friend</a></button>
    <button><a href="multimedia.php">Multimedia</a></button>
</div>
<form action="comment.php" method="POST">
    <table><tr><h3  style="font-size: 20px;color: deeppink;"><i>Comment FORM</i></h3></tr>
    <tr><td>Content ID</td>
    <td><input type="number" name="content_id" id="content"></td>
    </tr>
    <tr><td>User ID</td>
    <td><input type="number" name="user_id" id="user"></td>
    </tr>
    
      <tr><td>    </td><td><input type="submit" name="send"  value="send" style="background-color: black;color: white; width: 100px;">
    <input type="submit" name="send"  value="cancel" style="background-color: black;color: violet;width: 100px;"></td></tr>
</table>
</form>
<div><footer style="background-color:black;text-align: center;width:100%;height:auto; color: white;font-size: 25px;"><p>&copy Designed by Group 5  YEAR TWO BIT GROUP A &reg 2024</p></footer></div>
</center>
</body>
</html>