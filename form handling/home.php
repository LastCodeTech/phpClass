<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display:flex;
            justify-content: center;
            align-items: center;
            
            min-height:100vh;
            background-color: #8C00FF;
        }
        input::placeholder{
            font-size:1.3rem;
            color:#ff1e69;
            padding-left: 10px;
            
        }
        label{
            font-size:1.5rem;
            font-weight:lighter;
            color:white;
        }
        
    </style>
</head>
<body  >
    <div style="background-color:#450693; padding:40px 50px;border-radius:15px; border:1px solid #FFC400">

    
    <form method="post" action="processing.php">
        <label for="username">username</label><br />
        <input type="text" name="username" id="username" placeholder="input username" required style="color:#ff1e69; border-radius: 15px; padding:0px 10px;font-size:1.3rem; outline: none; height:50px;width:30rem;">
        <br />
        <div style="margin-top: 30px;"><label for="password">password</label><br />
        <input type="password" name="password" id="password" placeholder="input password" required style="color:#ff1e69; border-radius:15px; padding:0px 10px;font-size:1.3rem;  outline: none; height:50px;width:30rem;">
       </div>
        <br />
        <div style="display:flex;justify-content: center;align-items: center; margin:15px 0px">
            <input type="submit" value="login" style="padding:10px 25px;font-size:1.4rem; border-radius:20px; color:#ff1e69;background-color: white; border:none">
        </div>
    </form>
    </div>
</body>
</html>