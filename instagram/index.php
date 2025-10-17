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
            background-color: #CBCBCB;
        }
        input::placeholder{
            font-size:1.3rem;
            color:#ff1e69;
            padding-left: 10px;
           color:#777C6D;
            
        }
        label{
            font-size:1.5rem;
            font-weight:lighter;
            color:white;
            color:black;
        }
        
    </style>
</head>
<body  >
    <div style="background-color:#B7B89F; padding:40px 50px;border-radius:15px; border:1px solid #777C6D">

    
    <form method="post" action="include/process.php">
        <label for="username">username</label><br />
        <input type="text" name="username" id="username" placeholder="input username" required style="border:1px solid #777C6D; color:#ff1e69; border-radius: 15px; padding:0px 10px;font-size:1.3rem; outline: none; height:50px;width:30rem;">
        <br />
        <div style="margin-top: 30px;"><label for="password">Article</label><br />
       <textarea  style="height:120px;width:30rem;border-radius:15px;outline:none;padding:10px 15px;font-size:1.3rem" id="article" name="article" placeholder="input Article" required></textarea>
    </div>
        <br />
        <div style="display:flex;justify-content: center;align-items: center; margin:15px 0px">
            <input type="submit" value="post" style="border:1px solid #777C6D; padding:10px 25px;font-size:1.4rem; border-radius:20px; color:black;background-color: white; ">
        </div>
    </form>
    </div>
</body>
</html>