@extends('webApplication.layouts.app')

@section('web_content')
   
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
                        <li class="active">المعلومات العامة عن الجمعية</li>
                        <li>معلومات اضافية</li>
                        <li>معلومات اضافية</li>
                        <li>معلومات عن المركز</li>
                        <li>نطاق عملية المؤسسة</li>
                        <li>نطاق عملية المؤسسة</li>
                    </ul> 
                </div>
                <div class="right-side">

                <form id="formCompany">
                    @csrf
                    <div class="main active">
                         <div class="text">
                            <h2>المعلومات العامة عن الجمعية</h2>
                            <p>الرجاء تعبئة البيانات</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="organization_name" id="organization_name" style=" font-size: 12px;" placeholder="يرجى كتابة الاسم القانوني الكامل لمنظمتك وأي تسميات مختصرة">
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div" style="top: -10px;">
                                <select name="organization_type" id="organization_type" >
                                    <option selected hidden >نوع المنظمة</option>
                                    <option  value="Cultural Center">مركز ثقافي وفني</option>
                                    <option value="Educational or Higher Education Institution">مؤسسة تعليمية أو تعليم عالي</option>
                                    <option value ="Governmental Entity">جهة حكومية</option>
                                    <option value="International Non-Governmental Organization">منظمة غير حكومية دولية</option>
                                    <option value="Media and Press Organization">منظمة اعلام وصحافة </option>
                                    <option value="Non-Governmental Organization">منظمة غير حكومية </option>
                                    <option value="Organizations persons with disabilities">منظمات الأشخاص ذوي الإعاقة</option>
                                    <option value="private company">شركة خاصة </option>
                                    <option value="research and advocacy centre">مركز بحوث ومناصرة </option>
                                    <option value="social institution">مؤسسة اجتماعية</option>
                                    <option value="technical or vocational education institute">معهد تعليم تقني أو مهني</option>
                                    <option value="youth group">مجموعة شبابية</option>
                                    <option value="youth training centre">مركز تدريب الشباب</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="main_branch_address" id="main_branch_address"  placeholder="عنوان الفرع الرئيسي">
                            </div>

                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                    <input type="date"  name="year_founded">
                                    <span >سنة التأسيس</span>
                             </div>
                        </div>

                        <div class="buttons button_space">
                                <button type="button"  class="next_button">التالي </button>
                                </div>
                    </div>

                    <div class="main">
                        <!-- <small><i class="fa fa-smile-o"></i></small> -->
                        <div class="text">
                            <h2>معلومات اضافية</h2>
                            <!-- --------------------------- -->
                            <p>الرجاء ادخال البيانات</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="email"  placeholder="الموقع الالكتروني الرسمي">
                            </div>

                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text"  name="instagram" placeholder="انستجــرام">
                               
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="facebock"   placeholder=" فيس بــوك">
                            
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div"  >
                                <input type="number"  name="annual_budget"  placeholder="الميزانية السنوية">
                                
                            </div>
                            <div class="input-div" >
                                <input type="number"  name="number_of_centers"  placeholder="عدد المراكز">
                              
                            </div>
                            <div class="input-div" >
                                <input type="number"name="number_of_employees" placeholder="عدد الموظفين">
              
                            </div>
                        </div>
                        <div class="buttons button_space" >
                            <button  type="button" class="back_button"  >الرجوع</button>
                            <button type="button" class="next_button">التالي</button>
                        </div>
                    </div>
                    <div class="main">
                        <!-- <small><i class="fa fa-smile-o"></i></small> -->
                        <div class="text">
                            <h2>معلومات اضافية</h2>
                            <p>معلومات اضافية</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <textarea class="form-control" id="center_locations" name="center_locations" rows="4" placeholder="مواقع المركز" style="height: 100px;" style="font-family: 'Cairo', sans-serif;"></textarea>
                                
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div" >
                                <input type="number" name="registration_number_ministry_interior" placeholder=" رقم التسجيل لدى وزارة الداخلية" >
                               
                            </div>
                        
                        </div>
                        <div class="input-text">
                            <div class="input-div"  >
                                <input type="number"   name="registration_number_ministry_Finance" placeholder="  رقم التسجيل لدى وزارة المالية" >
                              
                            </div>
                        </div>
                        <div class="buttons button_space">
                            <button type="button" class="back_button" >الرجوع</button>
                            <button type="button"  class="next_button">التالي</button>
                        </div>
                    </div>
                    <!-- ----------------------------- -->
                    <div class="main">
                        <!-- <small><i class="fa fa-smile-o"></i></small> -->
                        <div class="text">
                            <h2>نطاق عملية المؤسسة</h2>
                            <p>الرجاء تعبئة البيانات</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div" >
                                <input type="number"  name="Number_current_projects" placeholder="عدد المشاريع الحالية">
                          
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div" >
                                <textarea class="form-control"   name="main_donors_projects" id="message" name="message" rows="4" placeholder="المانحون الرئيسيون من مشاريع سابقة/حاليا" style="height: 100px;" style="font-family: 'Cairo', sans-serif;"></textarea>
                                
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div" >
                                <textarea class="form-control" name="number_employees_organization" name="message" rows="4" placeholder="اجمالي عدد الموظفين التي تتعامل معهم منظمتك" style="height: 100px;" style="font-family: 'Cairo', sans-serif;"></textarea>
                                
                            </div>
                        </div>
                     
                        <div class="buttons button_space">
                            <button type="button" class="back_button" >الرجوع</button>
                            <button type="button" class="next_button">التالي</button>
                        </div>
                    </div>
                     <!-- ---------------- -->
                    <div class="main">
                        <!-- <small><i class="fa fa-smile-o"></i></small> -->
                        <div class="text">
                            <h2>نطاق عملية المؤسسة</h2>
                            <p>الرجاء تعبئة البيانات</p>
                        </div>
                       
                        <div class="input-text">
                            <div class="input-div" >
                                <textarea class="form-control" id="message" rows="4" name="nationalities_of_beneficiaries" placeholder="جنسيات المستفدين" style="height: 100px;"></textarea>
                                
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div" >
                                <textarea class="form-control" id="message" name="age_group_beneficiaries" rows="4" placeholder="الفئة العمرية للمستفيدين" style="height: 100px;"></textarea>
                                
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <textarea class="form-control" id="message" name="strategic_goals" rows="4" placeholder="تعداد الاهداف الاستراتيجية الرئيسية التي تهدف منظمتك الي تحقيقها في السنوات الثلاثة - الخمس القادمة" style="height: 100px;"></textarea>
                                
                            </div>
                        </div>
                     
                        <div class="buttons button_space">
                            <button type="button" class="back_button" >الرجوع</button>
                            <button type="button" class="next_button">التالي</button>
                        </div>
                    </div>
                     <!-- ---------------- -->
                     <!-- ---------------- -->
                    <div class="main">
                        <!-- <small><i class="fa fa-smile-o"></i></small> -->
                        <div class="text">
                            <h2>نطاق عملية المؤسسة</h2>
                            <p>الرجاء تعبئة البيانات</p>
                        </div>
                       
                        <div class="input-text">
                            <div class="input-div fileinput">
                                <input type="file" name="registration_certificate_ministry_interior" >
                                <span>شهادة تسجيل منظمتكو/علم وخبر من وزارة الداخلية</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div fileinput">
                                <input type="file" name="company_organizational_structure" >
                                <span>الهيكل التنظيمي لشركتك</span>
                            </div>
                        </div>
                        <div class="buttons button_space">
                            <button type="button"   class="back_button">الرجوع</button>
                            <button type="button"  class="next_button">التالي</button>
                        </div>
                    </div>

                    </form>
              
                    <div class="main">
                        <svg class="checkmark"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0
                            52 52">
                            <circle class="checkmark__circle" cx="26"
                                cy="26" r="25" fill="none" />
                                <path class="checkmark__check" fill="none"
                                    d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                                </svg>

                                <div class="text congrats">
                                    <h2>تم الطلب بنجاح</h2>
                                    <p>شكرا لك <span class="shown_name"></span>تم
                                        إرسال معلوماتك بنجاح.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="{{url('assets/js/scripts.bundle.js')}}"></script>  
    <script src="{{url('js/companyrequest.js')}}"></script>
<script defer src="{{url('js/jquery library.js')}}"></script>
<script defer src="{{url('js/bootstrap.min.js')}}"></script>
<script defer src="{{url('js/main.js')}}"></script>


@endsection