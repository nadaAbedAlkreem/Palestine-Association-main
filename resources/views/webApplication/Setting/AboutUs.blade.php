@extends('webApplication.layouts.app')

@section('web_content')
<link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('css/about-association.css')}}" />
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<div class="containerr">
    <section class="hedsid" >
         <h6><a href="index.html">الرئسية / </a></h6><h6> من نحن </h6>
    </section>
     <section class="aboutt">
    @if(!empty($aboutUs) ) 
     @foreach($aboutUs as $key )
     @if($key->groub == "association")
      @switch($key->key)
       @case('association_title_ar')
          <h1>  {{$key->value}} </h1>

        @break  
        @case('association_content_ar')

        <div class="card_about">
            <div class="text_card">
            <p>
            {{$key->value}} 
            </p>
               <h5><a href="#">تصفح اخر الاخبار  </a></h5>
            </div>

            <div class="img_card_about">
                 @case('association_image')
                <img src="{{ asset('/storage2/' . $key->value) }}"  alt="">
                

            </div>
            
        </div>
        @break  

        @endswitch   
       @endif      
 
 

       @if($key->groub == "vision")
        @switch($key->key)
          @case('vision_title_ar')


        <div class="card_about">
            <div class="text_card">
            <h1>  {{$key->value}} </h1>
            @break  
            @case('vision_content_ar')

            <p>
            {{$key->value}} 
            </p>

                <h5><a href="#">تصفح اخر الاخبار  </a></h5>
            </div>

            <div class="img_card_about">
                <img src="imges/Group 7868b.png" alt="">
            </div>
        </div>
        @break  


        @endswitch      
        @endif   
  
 




      @if($key->groub == "message")

      @switch($key->key)
      @case('message_title_ar')
 

        <div class="card_about">
            <div class="text_card">
            <h1>  {{$key->value}} </h1>
            @break  
            @case('message_content_ar')
 
            <p>
            {{$key->value}} 
            </p>

               <h5><a href="#">تصفح اخر الاخبار  </a></h5>
            </div>

            <div class="img_card_about">
                <img src="imges/Group 7868b.png" alt="">
            </div>
        </div>
        @break  


        @endswitch      
       @endif   
      @endforeach  
      @endif
  

     

      
 
   
    </section>

</div>


<script src="{{url('js/jquery library.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>
  

@endsection
