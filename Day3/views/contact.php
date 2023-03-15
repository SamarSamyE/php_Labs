<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="form-box" >
            <div class="form-value">
    <form id="form" action="index.php" method="post" name="contactForm" >
    <div class="inputbox">
        <input type="text" name="name" value="<?php echo remember_Variable("name");?>">
        <label for="">Name</label>
        <h4 id="error"></h4><?php echo $nameErr;?></h4>
    
    </div>
    <div class="inputbox">    
        <input type="input" name="email" value="<?php echo remember_Variable("email");?>">
        <label for="">Email</label>
        <h4 id="error"><?php echo $emailErr;?></h4>

    </div>    
    <div class="inputbox">
        <textarea name="message" cols="35" rows="10" style="margin-left: 3%;" value="<?php echo remember_Variable("message");?>"></textarea>
        <h4 id="error"><?php echo $msgErr;?></h4>
    </div>    
    <h4 id="error"><?php echo $error;?></h4>
    <div style="display: flex; flex-direction: row;">
    <button type="submit">Send Message</button> 
    <button >Clear</button>
</div>
    </form>
</div>
</div> 
</section>   
</body>
</html>