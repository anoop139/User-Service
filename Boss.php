<?php
include("Conn.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="styleSheet" type="text/css" href="Sty2.css"/>
    <style>
    
        .d1
        {
            background-color:white;
            height: 456px;
            width: 600px;
        }
        .d1
        {
            padding-top:68px;         
            padding-left: 100px;
            margin-top: 50px;
            margin-left: 0px;
        }
        #textBox
        {
            height: 428px;
        }
        .d1
        {
          float: left;
            //padding-bottom: 50px;
        }
        #textBox
        {
            padding-top: 95px;
            text-align:center;
        }
      #Update 
      {
          padding-left: 30px;
          padding-right:30px ;
         
      }
      #name
      {
          height: 200px;
      }
     #textBox
     {
         height: 175px;
     }
     #name
    {
        text-align:center;
    }
    #Next
    {
        padding-top:22px;
        text-align:right;
    }
    #disp 
    {
        padding: 10px;
    }
   
   #nb 
   {
       padding: 100px;
   }
   #nb 
   {
       background-color:white;
       height: 170px;
       width: 108px;
   }
  #nb 
  {
      padding-left: 1200px;
  }

    </style>
</head>
<body>
    <form action="#"> 
        <div class="d1" id="name">
            <h1>Enter Employers Name</h1>
            <h1>Enter Employers Address</h1>
            <?php
            $uid =$_GET['uid'];
            //echo"The uid is ".$uid;
            ?>
        </div>
        <div hidden><input type="number"  id="ol" name="uid" value="<?php echo$uid;?>" ></div>
      <div class="d1" id="textBox"><input type="text"  id="changeName" name="name"><br><br><br>	  
                                    <input type="text"  id="changeName" name="address">    
      <?php
    if(isset($_GET['upd']))
    {

    $fx  = $_GET['uid'];
    $bname  = $_GET['name'];
    $badd  = $_GET['address'];
    $insert  ="insert into empl(ename, adress, ep)values('$bname','$badd', $fx)";
    $query   =mysqli_query($conn, $insert);
    if ($query)
     {
        # code...
        echo"<br><h2>Employer details inserted succefully</h2>";
    }
    else {
        echo"<br>inserted failed";
    }
    
    }
    
    
    
    ?>   <br><br>
      <input type="submit" value="Update" id="Update" name="upd"><br>
     <div id="Next">
     
     </div>
       </div>
    
    </form>
    <form action="Display.php" id="nb">
      <input type="submit" value="click here to view" id="disp"><br>
      </form> 
</body>
</html>