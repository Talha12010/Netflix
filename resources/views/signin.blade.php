<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {  
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
  .img{
    height: 120px ;
    width: 220px ;
    margin-left: 30px;
}
.a{
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
   height: 600px;
    width: 400px;
    justify-content: center;
    margin: auto;
    display: row;
    text-align: center;
}
.input{ 
    width: 300px;
    height: 50px;
    margin: 10px;
    font-size: 17px;
    border-radius: 5px;
    border: 1px solid gray;
    border-radius: 3px;
    padding-left: 10px;
    background-color: black;
    color: white;
    margin-top: 18px;
    justify-content: center;
}
.btn1{
    width: 300px;
    height: 40px;
    margin: 10px;
    border-radius: 5px;
    border: none;
    background-color: red;
    color: white;
    font-size: 16px;
    margin-top: 22px;
}
.aa{
    padding-top: 44px;
    margin-right: 200px;
    color: white;
    text-align: center;
    text-align: center;
}
.btn2{
    width: 300px;
    height: 40px;
    margin: 10px;
    border-radius: 5px;
    border: none;
    background-color: rgb(131, 129, 129);
    color: white;
    font-size: 16px;
}
.ae{
    color: gray;
    text-align: center;
    font-size: 20px;
    margin-top: 16px;

}
.aaa,.aaaa{
    margin-top: 22px;
    
    
}
.ga{
    color: white;
    font-size: 20px;
    margin-top: 10px;
}
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="new">
        <img class="img" src="{{ asset('images/logo.png') }}" alt="img">
        <div class="a">
            <h1 class="aa">Sign In</h1>
            
          <form action="{{ route('signin') }}" method="POST">
    @csrf
    <input type="text" name="email" class="input" placeholder="Email address" required>
    <input type="password" name="password" class="input" placeholder="Password" required>

    <button type="submit" class="btn1">Sign In</button> 
</form>
                
            </form>
            
            <h3 class="ae">OR</h3>
            
            <input type="button" class="btn2" value="Sign In with code">
            <br/>
            <a class="ga" href="{{ url('/forget') }}">Forget Password?</a>
            <br/>
            <label class="aaa">
                <input class="aaaa" type="checkbox" name="remember" value="yes">
                Remember me
            </label>
        </div>
    </div>
</body>
</html>