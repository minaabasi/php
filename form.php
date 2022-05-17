<?php

    $name= $email = $tell =$sex ="";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(empty($_POST['name'])){
            $name = '*فرمت نام صحیح نمی باشد.';
        }
        if(empty($_POST['email'])){
            $email = '*فرمت ایمیل صحیح نمی باشد.';
        }
        if(empty($_POST['tell'])){
            $tell = '*فرمت تلفن صحیح نمی باشد.';
        }

        if(empty($_POST['sex'])){
            $sex = '* الزامی می باشد.';
        }
        
    }

?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            border-radius: 15px;
        }
        form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50% , -50%);
            padding: 10px;
            border: 1px solid gray;
        }
        form>div{
            margin-top: 10px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;


        }


        form>h2{
            text-align: center;
        }

        input{
            border: none;
            background-color: lightblue;
        }

        #submit{
            width: 100%;
            color: wheat;
            background-color: blue;
        }

        span{
            color: red;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> " method="post" >
        <h2> ثبت نام</h2>
        <div>
            <label>نام:</label>
            <input type="text" name="name" >
        </div>
        <span><?php echo $name; ?></span>
        <div>
            <label>ایمیل:</label>
            <input type="text" name="email" >
        </div>
        <span><?php echo $email; ?></span>

        <div>
            <label>شماره تماس:</label>
            <input type="text" name="tell" >
        </div>
        <span><?php echo $tell ;?></span>

        <div>
            <label>جنسیت:</label>
            <input type="radio" name="sex" value="femail" <?php if(!empty($_POST['sex']) && $_POST['sex']== 'femail'){echo "checked";}?> >زن
            <input type="radio" name="sex" value="mail" <?php if(!empty($_POST['sex']) && $_POST['sex']== 'mail'){echo "checked";}?>>مرد
        </div>
        <span><?php echo $sex ; ?></span>
        <div>
            <input id="submit" type="submit" value="ارسال" >
        </div>


    </form>
</body>
</html>