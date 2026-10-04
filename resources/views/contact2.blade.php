<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/project.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="khan">
        <p>به لیلیه سحر خوش امدید</p>


    </div>
    <nav class="navbar">
        <div class="navbar-container">
            <img src="logo.jpg" alt="logo" class="logo">
            <ul class="navbar-links">
                <li>
                    <a href="project.html">درباره لیلیه</a>
                </li>
                <li>
                    <a href="inform.html">معلومات</a>

                </li>
                <li> <a href="contact2.html">ارتباط با ما</a></li>
                <li> <a href="room.html">در باره اتاق</a></li>
                <li> <a href="index.html">صفحه اصلی</a> </li>
                 <li> <a href="index.html">مسولیت های  مخاطبین</a> </li>

            </ul>
        </div>
    </nav>
    <section id="co" class="contact" dir="rtl">
        <h2>صفحه ارتباطات</h2>

        <div class="contact-child">
            <div class="child-item1">
                <h3>معلومات ارتباطی</h3>
                <h4> موقعیت لیلیه</h4>
                <p id="pra-location">
                    لیلیه ما نزدیک  به پوهنتون است<br> که محصلین می توامد در کمترین مدتت<br> زماد به درس های خویش حاضر شود
                </p>
                <h4 c-n-e>نمبر تماس</h4>
                <p>0702298908</p>
                <h4>ایمیل ادرس</h4>
                <p>ali123@gmail.com</p>
                <p>ادرس :<br>جوک مدد روبروی دروازه فرقه لیلیه  سحر </p>
            </div>
            <div class="child-item2">

                <h4>فورم ثبت نام</h4>
               <form class="form-contact" id="contactForm">

    <div class="element-contact">
        <label>نام</label>
        <input id="name" type="text" placeholder="نام خود را وارد نمایید">
        <small class="error"></small>
    </div>

    <div class="element-contact">
        <label>نمبر تلفن</label>
        <input id="phone" type="text" placeholder="نمبر تلفن">
        <small class="error"></small>
    </div>

    <div class="element-contact">
        <label>ایمیل</label>
        <input id="email" type="email" placeholder="Email">
        <small class="error"></small>
    </div>

    <div class="element-contact">
        <label>تاریخ ورود</label>
        <input id="date" type="date">
        <small class="error"></small>
    </div>

    <div class="element-contact">
        <label>پیام</label>
        <input id="message" type="text" placeholder="پیام">
        <small class="error"></small>
    </div>

    <button type="submit" id="btn" >ثبت کردن</button>

    <p id="success"></p>

</form>
        </div>
    </section>



    <footer class="footer" dir="rtl">
        <div class="footer-container">
            <div class="footer-about">
                <p>لیلیه ما یگ جای  مناسب  برای  درس خواندن و زنده گی بهتر<br> میباشد
                       و  دارای کتاب خانه عمومی میباشد <br>و  محصلین  میتواند درس های خودرا میخواند و ما کوشش کردیم<br> تا شما دوستان عزیز در سهولت و ارامی  زنده گی نمایید </p>
            </div>
            <div class="footer-link">
                <h3>انواع لینک ها</h3>
                <ul >
                    <li><a href="">صفحه اصلی</a></li>
                    <li><a href="">در باره لیلیه</a></li>
                    <li><a href="">ارتباط با ما</a></li>
                    <li><a href="">اتاق ها </a></li>
                    <li><a href="">سوال ها</a> </li>
                </ul>

            </div>
            <div class="footer-contact">
                <h3>طریقه ارتباط با ما</h3>
                <p>ادرس :چوک مدد روبروی فرقه</p>
                <p>نمبر تماس:۰۷۷۶۸۱۷۳۱۳</p>
                <p> ایمیل ادرس :walimohammad sahar123@gmail.com</p>
            </div>
        </div>
    </footer>

   <small class="error"></small>



</body>
</html>
<script src=" {{ asset('js/pro.js')}}">



const form = document.getElementById("contactForm");

const nameInput = document.getElementById("name");
const phoneInput = document.getElementById("phone");
const emailInput = document.getElementById("email");
const dateInput = document.getElementById("date");
const messageInput = document.getElementById("message");
const success = document.getElementById("success");


// تابع نمایش خطا
function showError(input, message){

    input.style.border = "2px solid red";
    input.nextElementSibling.innerText = message;

}

// تابع موفق
function showSuccess(input){

    input.style.border = "2px solid green";
    input.nextElementSibling.innerText = "";

}


// submit form
form.addEventListener("submit", function(e){

    e.preventDefault();

    let valid = true;

    // validation name
    let namePattern = /^[A-Za-zا-ی\s]+$/;

    if(nameInput.value.trim() === ""){
        showError(nameInput , "نام ضروری است");
        valid = false;
    }
    else if(!namePattern.test(nameInput.value)){
        showError(nameInput , "فقط حروف وارد نمایید");
        valid = false;
    }
    else{
        showSuccess(nameInput);
    }


    // validation phone
    if(phoneInput.value.trim() === ""){
        showError(phoneInput , "نمبر وارد نشده است");
        valid = false;
    }
    else if(isNaN(phoneInput.value)){
        showError(phoneInput , "فقط عدد وارد نمایید");
        valid = false;
    }
    else{
        showSuccess(phoneInput);
    }


    // validation email
    let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    if(emailInput.value.trim() === ""){
        showError(emailInput , "ایمیل موجود نیست");
        valid = false;
    }
    else if(!emailPattern.test(emailInput.value)){
        showError(emailInput , "ایمیل درست نیست");
        valid = false;
    }
    else{
        showSuccess(emailInput);
    }


    // validation date
    if(dateInput.value === ""){
        showError(dateInput , "تاریخ ضروری است");
        valid = false;
    }
    else{
        showSuccess(dateInput);
    }


    // validation message
    if(messageInput.value.trim() === ""){
        showError(messageInput , "پیام ضروری است");
        valid = false;
    }
    else if(messageInput.value.trim().length < 5){
        showError(messageInput , "پیام حداقل ۵ حرف باشد");
        valid = false;
    }
    else{
        showSuccess(messageInput);
    }


    if(valid){
        // success
if(valid){

    // ذخیره در localStorage
    localStorage.setItem("name", nameInput.value);
    localStorage.setItem("phone", phoneInput.value);
    localStorage.setItem("email", emailInput.value);
    localStorage.setItem("date", dateInput.value);
    localStorage.setItem("message", messageInput.value);

   // success.innerText = "✅ فورم موفقانه ارسال شد";

    alert("به کمیابی ثبت شدید ");

    form.reset();

}

        //success.innerText = "✅ فورم موفقانه ارسال شد";

        form.reset();
        alert("به کمیابی ثبت شدید")

    }
    window.onload = function(){

    nameInput.value = localStorage.getItem("name") || "";
    phoneInput.value = localStorage.getItem("phone") || "";
    emailInput.value = localStorage.getItem("email") || "";
    dateInput.value = localStorage.getItem("date") || "";
    messageInput.value = localStorage.getItem("message") || "";

}

});


</script>


</body>
</html>
