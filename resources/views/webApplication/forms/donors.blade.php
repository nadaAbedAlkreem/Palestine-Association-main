@extends('webApplication.layouts.app')

@section('web_content')
<link rel="stylesheet" href="{{url('css/en/style.ltr.css')}}">
    <link rel="stylesheet" href="{{url('css/en/donate.ltr.css')}}" />
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{url('build/css/intlTelInput.min.css')}}">
    <link rel="stylesheet" href="{{url('build/css/demo.css')}}">


<div class="containerr">
    <section class="hedsid" >
         <h6><a href="index.html">الرئسية / </a></h6><h6>  تبرع الان </h6>
    </section>

    <section class="aboutt">
        <h1> تبرع الان </h1>

        <form class="body_donate" id="formStoreDonores">
            <div class="right_donate">
              @csrf
                <h2>تفاصيل المتبرع</h2>
                <div class="blowline"></div>
            
                <div class="input_donate">
                    <input name="name"   type="text" placeholder="اسم المتبرع">
                    <input  name="email" type="email" placeholder="البريد الالكتروني">
                </div>
                
                <div class="input_donate">
                  <div class="selectPhone" >
                    <input  name="mobile" class="inputPhoneI" type="tel" id="phone" placeholder="رقم الهاتف">
                  </div>
                    <select name="project" class="form-select" aria-label="">
                    <option selected>اختر المشروع الذي تود التبرع به</option>

                    @if(!empty($programs))
                    @foreach($programs as $value)

                    <option value="{{$value->id}}">{{$value->title}} </option>
                    @endforeach
                    @endif
                    </select>
                </div>
                <div class="input_donate">
                    <select type="text" class="form-select" id="country" name="country" placeholder="الدولة">
                      <option value="">اختر الدولة</option>
                    </select>
                    <select name="city" id="state" class="form-select" >
                      <option value="">اختر المدينة</option>
                    </select>
                </div>
                <div class="input_donate">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="رسالتك لنا"></textarea>
                </div>
                <div class="inputCheck">
                  <input name="announcing_donor" class="form-check-input" type="checkbox" value="" id="announcing_donor">
                  <label class="form-check-label" for="announcing_donor">
                    التعريف بالمتبرع
                    <br>
                    لا بأس بذكر اسمي في في لوائح الشرف والشكر
                  </label>
                </div>




            </div>


            <div class="leftdonateForm" >
              <div class="mt-4">

                <label style="font-weight: bold; font-size: 16px;" for="">اختر المبلغ المراد التبرع به</label>

                <div class="cardsDonate">
                  <div class="cardDonate active">
                    <i class='bx bx-check'></i>
                    <span  >$20</span>
                  </div>
                  <div class="cardDonate">
                    <i class='bx bx-check'></i>
                    <span>$50</span>
                  </div>
                  <div class="cardDonate"> 
                    <i class='bx bx-check'></i>
                    <span>$100</span>
                  </div>
                  <div class="cardDonate">
                    <i class='bx bx-check'></i>
                    <span>$500</span>
                  </div>
                  <div class="cardDonate">
                    <i class='bx bx-check'></i>
                    <span>$1000</span>
                  </div>
                  <div class="cardDonate">
                    <i class='bx bx-check'></i>
                    <span>$2000</span>
                  </div>

                </div>
                <div>
                  <div class="inputCheck anotherAmount">
                    <input class="form-check-input inputCheckA" type="checkbox" value="" name="defaultCheck2" id="defaultCheck2">
                    <label class="form-check-label " for="defaultCheck2">
                      إضافة مبلغ اخر
                    </label>
                  </div>
                </div>
                <div class="input_donate">
                  <div class=" inputPriceI  input-group mb-3" style=" max-width:300px;">
                    <span class=" input-group-text textDI inputCA" >$</span>
                    <input  name="add_money" type="number" class="form-control inputCA" disabled aria-label="Amount (to the nearest dollar)">
                  </div>
                </div>

              </div>

              <div class="mt-4">

                <h5>طريقة التبرع</h5>

                <div class="cardsDonate">
                 
              
                  <div class="cardDonateS">
                    <i class='bx bx-check' active></i>
                    <img src="images/stripe-purple-300x300.svg" alt="">
                  </div>
                </div>

              </div>

              <button type="button" class="btnDonare">تبرع</button>


              <div class="mt-4">

                <h5>موثوق من</h5>

                <div class="imgGC">
                  <img src="images/masterCardS.svg" alt="">
                  <img src="images/visaa.svg" alt="">
                  <img src="images/3d-secure.svg" alt="">
                  <img src="images/paypal.svg" alt="">
                  
                  <div class="d-flex gap-2">
                    <img class="imgS" src="images/secureCheckOut.svg" alt="">
                    <img class="imgS" src="images/privacyProtected.svg" alt="">
                  </div>
                </div>
              </div>
            </div>

            
            

            
          </form>

          




    </section>

      
 
</div>



<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input,{});

  output = document.querySelector("#output");

var iti = window.intlTelInput(input, {
  nationalMode: true,
  utilsScript: "../../build/js/utils.js?1678446285328" // just for formatting/placeholders etc
});

var handleChange = function() {
  var text = (iti.isValidNumber()) ? "International: " + iti.getNumber() : "Please enter a number below";
  var textNode = document.createTextNode(text);
  output.innerHTML = "";
  output.appendChild(textNode);
};

// listen to "keyup", but also "change" to update when the user selects a country
input.addEventListener('change', handleChange);
input.addEventListener('keyup', handleChange);

</script>

  <script>
        $(".cardDonate").click(function(){

        $(".cardDonate").removeClass("active");
        $(".inputCheckA").prop( "checked", false );
        $(".inputCA").prop( "disabled", true );
        $(".inputCA").val( "" )
        $(this).addClass("active");

});
      $(".anotherAmount").click(function(){
      $(".cardDonate").removeClass("active");
      if ($('.anotherAmount').attr('checked')){
        $(".inputCA").prop( "disabled", true );
      }else{
        $(".inputCA").prop( "disabled", false );
      }
      $(".inputCA").val( "" )
});

/////////////////////////////////////////

$(".cardDonateS").click(function(){

$(".cardDonateS").removeClass("active");
$(this).addClass("active");

});



  </script>


  <script src="{{url('css/plugins.bundle.js')}}"></script>
  <script src="{{url('js/bootstrap.min.js')}}"></script>
  <script src="{{url('js/countrySelect.js')}}"></script>
  <script src="{{url('js/main.js')}}"></script>
  <script src="{{url('build/js/intlTelInput.min.js')}}"></script>
  <script src="{{url('build/js/nationalMode.js')}}"></script>
  <script src="{{url('js/donors.js')}}"></script>







@endsection