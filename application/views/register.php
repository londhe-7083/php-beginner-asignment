<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .rform{
            width:"400px";
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2); 
        }

        label{
            margin-bottom:5px;
        }

        input{
            padding:10px;
            margin-bottom: 10px;
            border-radius:5px;
            border: 1px solid #ddd;
            width: 100%;
        }

        button{
            width: 100%;
        }
    </style>
</head>
<body>
    


<div class="container">
    <div class="border mt-4 p-4  m-auto rform" style="width:400px">
        <h2 class="text-center text-primary">
            Registeration form
        </h2><br>
        <div class="">
            <form class="" action="<?=base_url()?>index/register"  method="post" >
                <label> User name</label><br>
                <input type="text" id="username" placeholder="Enter Your User Name" name="username"><br>
                <label> User email</label><br>
                <input type="email" id="email" placeholder="Enter Your Email" name="email"><br>
                <label> Password</label><br>
                <input type="password" id="userpass" placeholder="Enter Your Password" name="pass">
                <button class="btn btn-primary"> Register</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>