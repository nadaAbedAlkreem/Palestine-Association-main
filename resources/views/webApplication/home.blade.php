@extends('webApplication.layouts.app')

@section('web_content')
   









<header class="heade">
      <div class="back_heder"></div>
      <div class="">

        <div class="slide_heder" >
          <!-- Swiper -->
          <div class="swiper mySwiper arow d-flex">
            <div class="swiper-wrapper ">
              <div class="swiper-slide centerimgheder">
                <img src="{{url('imges/Placeholder.png')}}" alt="">
                <img class="shado" src="{{url('imges/Program icons/Rectangle 1502.png')}}" alt="">
                <div class="textimg textimg1 animate__animated animate__fadeInUp">
                  <h1>الذين ليس لديهم أمل ! </h1>
                  <p>بيئة متميزة ، مؤسسة خيرية ، نموذج إبداعي طبيعي</p>
                  <button class="mored">عرض التفاصيل</button>
                </div>

              </div>
              <div class="swiper-slide centerimgheder d-flex">
                <img src="imges/Placeholder.png" alt="">
                <img class="shado" src="{{url('imges/Program icons/Rectangle 1502.png')}}" alt="">
                <div class="textimg textimg2 animate__animated animate__fadeInUp">
                  <h1>الذين ليس لديهم أمل ! </h1>
                  <p>بيئة متميزة ، مؤسسة خيرية ، نموذج إبداعي طبيعي</p>
                  <!-- <form action="">
                    <div class="serch">
                      <input type="text">
                      <div class="serchtex"><p><a href="">بحث</a></p></div>
                    </div>
                  </form> -->
                  
                </div>

              </div>
              <div class="swiper-slide centerimgheder">
                <img src="{{url('imges/iiii2.jpeg')}}" alt="">
                <img class="shado" src="{{url('imges/Program icons/Rectangle 1502.png')}}" alt="">
                <div class="textimg textimg3 animate__animated animate__fadeInUp">
                  <h1>الذين ليس لديهم أمل ! </h1>
                  <p>بيئة متميزة ، مؤسسة خيرية ، نموذج إبداعي طبيعي</p>
                  <button class="usbtn">تواصل معنا </button>
                </div>
              </div>
        </div>
        <div class="next "><i class='bx bx-right-arrow-alt'></i></div>
        <div class="prev"><i class='bx bx-left-arrow-alt'></i></div>
        <div class="swiper-pagination"></div>
      </div>
      </div>
      </div>

    </header>

    <section class="news  ">
      <div class="containerr">
        <div class="textnews">
          <h1>اخر الأخبار</h1>
          <a href="news.html"><h6>عرض الكل</h6></a>
        </div>

        <div class="swiper mySwiper2">
          <div class="swiper-wrapper ">

           <a href="news_details.html"> <div class=" card cardNews swiper-slide" style=" border: none;">
              <img src="imges/WhatsApp Image 2022-08-30 at 3.37.42 AM.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="news_details.html"><h5 class="card-title">زيارة وفد رفيع >زيارة وفد رفيع المستوى >زيارة وفد رفيع المستوى >زيارستوى المستوى</h5></a>
                <p class="card-text">تعمل الجمعية على تعزيز مفاهم حماية البيئة من خلال نشر الوعي البيئي
                </p>
            
              </div>
            </div>
          </a>

          <a href="news_details.html"> 
            <div class=" card cardNews swiper-slide">
              <img src="imges/ii2.png" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="news_details.html"><h5 class="card-title">وفد رفيع المستوى وفد رفيع المستوى</h5></a>
                <p class="card-text">تعمل الجمعية على تعزيز مفاهم حماية البيئة من خلال نشر الوعي البيئي
                </p>
                 
              </div>
            </div>
          </a>


            <a href="news_details.html"> 
            <div class=" card cardNews swiper-slide" >
              <img src="imges/ii3.png" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="news_details.html"><h5 class="card-title">زيارة وفد رفيع المستوى</h5></a>
                <p class="card-text">تعمل الجمعية على تعزيز مفاهم حماية البيئة من خلال نشر الوعي البيئي
                </p>
                 
              </div>
            </div>
          </a>


            <a href="news_details.html"> 
            <div class=" card cardNews swiper-slide">
              <img src="imges/ii4.png" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="news_details.html"><h5 class="card-title">زيارة وفد رفيع المستوى</h5></a>
                <p class="card-text">تعمل الجمعية على تعزيز مفاهم حماية البيئة من خلال نشر الوعي البيئي
                </p>
                 
              </div>
            </div>
          </a>
          <a href="news_details.html"> 
            <div class=" card cardNews swiper-slide">
              <img src="imges/ii4.png" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="news_details.html"><h5 class="card-title">زيارة وفد رفيع المستوى</h5></a>
                <p class="card-text">تعمل الجمعية على تعزيز مفاهم حماية البيئة من خلال نشر الوعي البيئي
                </p>
                 
              </div>
            </div>
          </a>
          <a href="news_details.html"> 
            <div class=" card cardNews swiper-slide">
              <img src="imges/ii4.png" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="news_details.html"><h5 class="card-title">زيارة وفد رفيع المستوى</h5></a>
                <p class="card-text">تعمل الجمعية على تعزيز مفاهم حماية البيئة من خلال نشر الوعي البيئي
                </p>
                 
              </div>
            </div>
          </a>

            <a href="news_details.html"> 
            <div class=" card cardNews swiper-slide">
              <img src="imges/ii4.png" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="news_details.html"><h5 class="card-title">زيارة وفد رفيع المستوى</h5></a>
                <p class="card-text">تعمل الجمعية على تعزيز مفاهم حماية البيئة من خلال نشر الوعي البيئي
                </p>
                 
              </div>
            </div>
          </a>

          </div>
          <div class="swiper-pagination"></div>
        </div>

    </section>

    <section class="association_pro">
      <div class="containerr">
        <div class="textnews">
          <h1> برامج الجمعية</h1>
          <a href="programs.html"><h6>عرض الكل</h6></a>
        </div>

        <div class="allcardpro">
          <a href="Program_Details.html">
          <div class="cardpro" >
            <img src="imges/Layer_21.png" alt="" data-tilt data-tilt-scale="1.1">
            <h4><a href="Program_Details.html">الإغاثة والطوارئ</a></h4>
            <p>مصداقية أنها فعالة من حيث التكلفة
              والخبرة وعملية تمكين شبكة الانترنت
              أن التحسينات قنوات سلس تماماً</p>
          </div>
        </a>

        <a href="Program_Details.html">
          <div class="cardpro">
            <img src="imges/Layer_2_00000167396982694258960430000016806119312875533229_.png" alt="" data-tilt data-tilt-scale="1.1">
            <h4><a href="Program_Details.html"> حماية البيئة</a></h4>
            <p>مصداقية أنها فعالة من حيث التكلفة
              والخبرة وعملية تمكين شبكة الانترنت
              أن التحسينات قنوات سلس تماماً</p>
          </div>
        </a>

          <a href="Program_Details.html">
          <div class="cardpro">
            <img src="imges/Layer_1-2.png" alt="" data-tilt data-tilt-scale="1.1">
            <h4> <a href="Program_Details.html">بناء القدرات</a></h4>
            <p>مصداقية أنها فعالة من حيث التكلفة
              والخبرة وعملية تمكين شبكة الانترنت
              أن التحسينات قنوات سلس تماماً</p>
          </div>
        </a>

          <a href="Program_Details.html">
          <div class="cardpro">
            <img src="imges/lay4.png" data-tilt data-tilt-scale="1.1" alt="">
            <h4> <a href="Program_Details.html">التمكين الاقتصادي</a></h4>
            <p>مصداقية أنها فعالة من حيث التكلفة
              والخبرة وعملية تمكين شبكة الانترنت
              أن التحسينات قنوات سلس تماماً</p>
          </div>
        </a>


        </div>

      </div>
    </section>



    <section class="count_sec" id="count_sec">
      <div class="containerr">
        <div class="textnews">
          <h1> أبرز الإنجازات</h1>
        </div>

        <div class="allcardpro">
          <div class="cardpro crad_achievements" >
            <img class="h" src="imges/Group 7814.png" alt="" data-tilt data-tilt-scale="1.1">
            <h3> الشركات العالمية</h3>
            <div class="con">
              <h2  class="counter" data-target="1500"></h2><h2>+</span>
            </div>

          </div>
          <div class="cardpro crad_achievements">
            <img src="imges/Group 7815.png" alt="" data-tilt data-tilt-scale="1.1">
            <h3> المتبرعين</h3>
            <div class="con">
              <h2  class="counter" data-target="100"></h2><h2>+</span>
            </div>

          </div>
          <div class="cardpro crad_achievements">
            <img src="imges/Group 7816.png" alt="" data-tilt data-tilt-scale="1.1">
            <h3> مهمات منجزة</h3>
            <div class="con">
              <h2  class="counter" data-target="500"></h2><h2>+</span>
            </div>
          </div>
          <div class="cardpro crad_achievements">
            <img src="imges/Group 7817.png" alt="" data-tilt data-tilt-scale="1.1">
            <h3 > عدد المتطوعين</h3>
            <div class="con">
              <h2  class="counter" data-target="4500"></h2><h2>+</span>
            </div>
           

          </div>

        </div>

      </div>
    </section>


    <section class="comp_section">
      <div class="containerr">
        <div class="textnews">
          <h1> الشــركـــاء</h1>
        </div>

        <div class="arow3">
          <div class="swiper mySwiper3">
            <div class="swiper-wrapper ">
              <div class="swiper-slide">
                <div class="card_comp">
                  <img src="imges/Group 3671.png" alt="">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card_comp">
                  <img src="imges/Group 3673.png" alt="">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card_comp">
                  <img src="imges/Group 3677.png" alt="">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card_comp">
                  <img src="imges/Group 3679.png" alt="">
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>

          <div class="nextt "><i class='bx bx-right-arrow-alt'></i>
            <h5>السابق</h5>
          </div>
          <div class="prevt"><i class='bx bx-left-arrow-alt'></i>
            <h5>التالي</h5>
          </div>


        </div>



      </div>
    </section>






















   
 
@endsection
