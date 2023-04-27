<?php ?>
<h1>Hello</h1>
<html>
    <head></head>
    <body>
    <form>  
      <h2>Students Registration form</h2>
     <fieldset>  
        <legend>Students personal information</legend>  
         <!-----for namee----->
        <label>Enter your full name:</label><br>  
        Name:- <input type="text" name="name"><br><br>
         
        <!-----for email----->
        <label>Enter your email:</label><br>  
         <input type="email" name="email"><br><br>
         
         <!-----phone number----->
         <label>Enter your Phone no. :-</label><br>
         <input type="number" name="number"/><br><br>

         <!--date of birth-->
         <label>Date of birth:</label><br>
         <input type="date" name="date-of-birth"><br><br>
         <!-----button "submit"----->
         <input type="reset" value="Reset">
         <input type="submit" value="Sign-up">  
    </body>
</html>