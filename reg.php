<!doctype HTML>
<?php

?>

<html>
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="regiter,signup,member">
    <meta name="author" content="MajidShah@cruzmachine">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Register with us </title>
  </head>
<!--body starts from here -->
  <body>
  <style type="text/css">
#mydiv {
  position:fixed;
  top: 40%;
  left: 50%;
  width:50em;
  height:18em;
  margin-top: -9em; /*set to a negative number 1/2 of your height*/
  margin-left: -15em; /*set to a negative number 1/2 of your width*/
}

</style>
    <div id=mydiv>
      <form name=frm1 method=post action=reg.php>
        &nbspEnter UserName &nbsp&nbsp<input type=text name="uname" placeholder="Enter User Name"> <br><br>
        &nbspEnter Email &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type=text name="uemail" placeholder="Enter Your E-mail Address"> <br><br>
        &nbspGender : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp<input type=radio name="ugender" value="MALE"> Male
        &nbsp<input type=radio name="ugender" value="FEMALE"> Female  <br> <br>
        &nbspBirth Date&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select name="umonth">
          <option>Jan</option>
          <option>Feb</option>
          <option>Mar</option>
          <option>Apr</option>
          <option>May</option>
          <option>Jun</option>
          <option>Jul</option>
          <option>Aug</option>
          <option>Sep</option>
          <option>Oct</option>
          <option>Nov</option>
          <option>Dec</option>
        </select>
        <select name=uday>
          <?php
          for($i=1;$i<32;$i++)
          {
            echo "<option>".$i."</option>";
          }
          ?>
        </select>
        <select name=uyear>
          <?php
          for($i=1950;$i<2018;$i++)
          {
            echo "<option>".$i."</option>";
          }
          ?>
        </select> <br><br>
        &nbspEnter Passwrod &nbsp&nbsp&nbsp&nbsp&nbsp<input type=password placeholder="Use Strong Password"><br><br>
        &nbspConfirm Password&nbsp&nbsp<input type=password placeholder="Use Strong Password">
          <br><br><br>
        <input type=submit value=SignUp name=usignup style="height:10%; width:45%" >
      </form>
    </div>
  </body>

<html>
