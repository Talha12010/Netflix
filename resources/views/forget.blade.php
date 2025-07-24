<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            color: white;
        }
        .background {
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
    background: url('./images/image.jpg') no-repeat center center / cover;
    z-index: -2;
    filter: blur(0.6px);
   
  }
.new{
   display: flex;
  justify-content: space-between;
}
.img{
    height: 100px ;
    width: 200px ;
}
.btn{
    background-color: red;
    color: white;
    font-size: 20px;
    height: 40px;
    border: 5px solid red;
    margin-top: 22px;
    margin-right: 10px;
}
.aabb{
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
    width: 380px;
    height: 400px;
    justify-content: center;
    margin: auto;
    margin-top: 100px;
    border-radius: 5px;
}
        h1{
            text-align: center;
            margin-top: 30px;
            padding-top: 30px;
        }
        input{
            width: 300px;
            height: 50px;
            margin: 10px;
            font-size: 17px;
            border-radius: 5px;
            border: 1px solid gray;
            padding-left: 10px;
            background-color: black;
            color: white;
            margin-top: 18px;
            margin-left: 30px;
        }
        .input1{
            background-color: red;
            
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="new">
    <img class="img" src="./images/logo.png" alt="img" srcset="">
    <button class="btn">Sign In </button>
    </div>
    <div class="aabb">
        <h1>Forget Password</h1>
        
            <input type="email" name="email" placeholder="Enter your email" required><br><br>
            <input class="input1" type="submit" value="Send Reset Link">
       
    </div>
</body>
</html>