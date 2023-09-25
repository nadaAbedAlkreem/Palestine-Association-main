@extends('webApplication.layouts.app')

@section('web_content')
   

<body>
    <div class="container">

        <div class="card">
            <div class="form">

                 <div class="left-side">
                    <div class="left-heading">
                        
                    </div>
                    <div class="steps-content">
                        <h3><span class="step-number">  </span>المعلومات الاساسية </h3>
               
                    </div>
                    <ul class="progress-bar">
                        <li class="active">المعلومات الاساسية</li>
                        <li>معلومت اضافية</li>
                      
                    </ul> 
                </div>
               
                <div class="right-side">
                <form id ="SubmitFormVolunteer">
                    @csrf

                    <div class="main active">

                        <div class="text">
                            <h2 style="font-weight: bold;">طلب التطوع</h2>
                            <p>الرجاء تعبئة البيانات</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require  name ="name" id="user_name" placeholder=" الاسم كامل">

                            </div>
                            <div class="input-div">
                                <input type="number" name="mobile" required "  
                                    placeholder="رقم الموبايل">

                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text"  name="email" required require id="user_name" placeholder="البريد الالكتروني">

                            </div>
                            <div class="input-div">
                                <input name="address" type="text" required  placeholder="العنوان بالتفصيل">

                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <select  name="volunteered">
                                    <option selected hidden>هل تطوعت من قبل؟</option>
                                    <option value = "1" >نعم</option>
                                    <option value= "0" >لا</option>
                                </select>

                            </div>

                        </div>
                        <div class="input-text">

                            <div class="input-div">
                                <input type="text"  name="volunteered_place" required require  placeholder="اذا نعم اذكر بختصار">
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">

                                <select  name="skills">
                                    <option  selected hidden>هل لديك أي مهارات أو صفات معينة يمكنك استخدامها في عملك التطوعي؟ </option>
                                    <option value = "1">نعم</option>
                                    <option  value ="0">لا</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-text">

                            <div class="input-div">
                                <input type="text" name="volunteer_skills" required require  placeholder="اذكر تطوعك بختصار">
                            </div>
                        </div>
                        <div class="buttons" >
                            <button class="next_button">التالي</button>
                        </div>


                    </div>
                    <div class="main">

                        <div class="text">
                            <h2>معلومات اضافية</h2>
                            <p>الرجاء ادخال البيانات</p>
                        </div>



                        <div class="input-text">
                            <div class="input-div">
                                <input type="date"  name="beginning_volunteering">
                                <span>بداية التطوع</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="date" name="end_volunteering" >
                                <span>نهاية التطوع</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="study_experience_volunteer"   require id="user_name"
                                    style="height: 93px;">
                                <span>الخبرة الدراسية</span>
                            </div>

                        </div>
                        <div class="input-text">
                            <div class="input-div fileinput">
                                <input type="file" name="cv_volunteer" >
                                <span>السيرة الذاتية</span>
                            </div>
                        </div>

                        <div class="buttons button_space">
                            <button class="back_button">الرجوع</button>
                            <button class="next_button">تسجيل</button>
                        </div>
                    </div>
                    </form>


                    <div class="main">
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                        </svg>

                        <div class="text congrats">
                            <h2>تم الطلب بنجاح</h2>
                            <p>شكرا لك <span class="shown_name"></span>تم إرسال معلوماتك بنجاح.</p>
                        </div>
                    </div>



                </div>
               
             </div>
        </div>
 
    </div>

  
    <script src="{{url('js/volunteerrequest.js')}}"></script>
<script defer src="{{url('js/jquery library.js')}}"></script>
<script defer src="{{url('js/bootstrap.min.js')}}"></script>
<script defer src="{{url('js/main.js')}}"></script>
</body>

 

@endsection