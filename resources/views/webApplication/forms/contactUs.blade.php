@extends('webApplication.layouts.app')

@section('web_content')
   

<link rel="stylesheet" href="{{url('css/contact_us.css')}}" />


<div class="containerr">
        <section class="hedsid" >
             <h6><a href="index.html">الرئسية / </a></h6><h6>   تواصل معنا   </h6>
        </section>
        <section class="about">
            <h1>   اتصل بنا </h1>

            <div class="body_cotact">
              <form id="contactUsForm" >
                @csrf
                <div class="right_contact">
                     <div class="input_name">
                      
                        <input type="text"  name="full_name" placeholder="الاسم كامل">
                        <input type="text" name="email" placeholder="البريد الالكتروني">
                     </div>
                     <textarea name="message"  cols="30" rows="10" placeholder="رسالتك"></textarea>
                     <div class="checkbox_text">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <p>أوافق على سياسة الخصوصية</p>
                     </div>
                     <button   type="submit" class="btn_donate"> إرسال</button>
               </form>      
                     

                </div>
                <div class="left_contact">
                    <h1>معلومات التواصل</h1>
                    <div class="line_contant"></div>

                    <div class="icon_text_contact">
                        <div class="imgd">
                            <img src="imges/Group 7904.png" alt="">
                        </div>
                      
                        <p>972-592616000+</p>  
                    </div>
                    <div class="icon_text_contact">
                        <div class="imgd">
                            <img src="imges/Group 7903.png" alt="">
                        </div>
                        <p>admin@paeep.ps</p>  
                    </div>
                    <div class="icon_text_contact">
                        <div class="imgd">
                            <img src="imges/Path 5860.png" alt="">
                        </div>
                        <p>غزة-فلسطين-الرمال-شارع عمرو بن العاص<br>
                            مقابل مدرسة المامونية خلف معلب<br>
                            فلسطين</p>  
                    </div>
                    
                    <div class="alliconbt">
                        <a href="#">
                          <div class="icon_footericon">
                            <div class="imgfooticon">
                              <i class='bx bxl-twitter'></i>
                            </div>
                          </div>
                        </a>
                        <a href="#">
                          <div class="icon_footericon">
                            <div class="imgfooticon">
                              <i class='bx bxl-facebook'></i>
                            </div>
                          </div>
                        </a>
                        <a href="#">
                          <div class="icon_footericon">
                            <div class="imgfooticon">
                              <i class='bx bxl-instagram'></i>
                            </div>
                          </div>
                        </a>
                        
                        <a href="#">
                          <div class="icon_footericon">
                            <div class="imgfooticon">
                              <i class='bx bx-lemon'></i>
                            </div>
                          </div>
                        </a>
                      </div>
          
                </div>
            </div>


        </section>
    </div>
		<script src="{{url('assets/js/scripts.bundle.js')}}"></script>

    <script type="text/javascript">
                           $('#contactUsForm').on('submit',function(e)
                                {   
                                    e.preventDefault();
                                    var checkbox = document.getElementById("flexCheckDefault");
                                   if (checkbox.checked) {

                                    let formData = new FormData($('#contactUsForm')[0]);
                                    $.ajaxSetup({
                                    headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            } });
                                    $.ajax(
                                    {
                                    type:"POST",
                                    url: "contactUs/store",
                                    data:formData,
                                    contentType:false, // determint type object 
                                    processData: false,  // processing on response 
                                    success:function(response)
                                    {
                                    console.log(response);
                                    console.log("response");

                                     Swal.fire({
                                                    text: "You have successfully send message!",
                                                    icon: "success",
                                                    buttonsStyling: false,
                                                    confirmButtonText: "Ok, got it!",
                                                    customClass: 
                                                    {
                                                        confirmButton: "btn btn-primary",
                                                    }
                                        })
                                       

                                
                                    },
                                
                                    error: function(response) 
                                        {
                                            console.log(response)  ; 
                                                Swal.fire(
                                                    {
                                                            text:  response.responseJSON.message  , 
                                                            icon: "error",
                                                            buttonsStyling: false,
                                                            confirmButtonText: "Ok, got it!",
                                                                customClass: {
                                                                    confirmButton: "btn btn-primary",

                                                                    }
                                                        })
                                        },
                                    });







                                   }else
                                     {
                                        Swal.fire(
                                          {
                                              text:  "You must specify the value of the terms"  , 
                                              icon: "error",
                                              buttonsStyling: false,
                                              confirmButtonText: "Ok, got it!",
                                                  customClass: {
                                                      confirmButton: "btn btn-primary"
                                                      }
                                          })

                                    }


 
                        
                                
                                
                                });

   
                           </script>     



@endsection