@extends('layout') 
@section('title','Home page')
@section('content')

 <!-- # site main content
        ================================================== -->
        <section id="content" class="s-content">

            <section class="s-pageheader pageheader">
                 <div class="row">
                     <div class="column xl-12">
                         <h1 class="page-title">
                      
                             Personal Information
                         </h1>
                     </div>
                 </div>
            </section>   
  
            <section class="s-pagecontent pagecontent">
  
                 <div class="row">
                     <div class="column xl-12 grid-block">          
     
                         <!-- <div class="grid-full">         -->
                             <div class="grid-full grid-list-items">
  
                                 <div class="grid-list-items__item blog-card">
                                     <div class="blog-card__header">
                                         <div class="blog-card__cat-links">
                                             <a href="blog.html">Membe 1</a>
                                         </div>
                                        
                                     </div>
                                     <div class="blog-card__text">
                                         <p>
                                           Full name: {{$fullName}}<br>
                                          Date of birth:{{  $dateOfbirth }}<br>
                                           Address: {{ $address }}<br>
                                           Email :  <a href="mailto:{{ $email }}">Maile me</a><br>
                                           Gender: {{ $gender  }}<br>
                                           Nationality is:{{$nationality  }}<br>
                                           Student in :{{ $studentLevel }}
                                         </p>
                                     </div>
                                 </div> <!-- end blog-card -->
  
                                 <div class="grid-list-items__item blog-card">
                                     <div class="blog-card__header">
                                         <div class="blog-card__cat-links">
                                             <a href="blog.html">Membe 2</a>
                                         </div>
                                     </div>
                                     <div class="blog-card__text">
                                         <p>
                                          Full name: Amat al-Rahman Fahd Bamasoud<br>
                                          Date of birth: 24/11/2000<br>
                                           Address: Mukalla<br>
                                           Email :  <a href="famtatlrahman@gmail.com">Maile me</a><br>
                                           Gender: female<br>
                                           Nationality is Yemeni<br>
                                           Student in Level 3
                                         </p>
                                     </div>
                                 </div> <!-- end blog-card -->
  
  
                                 <div class="grid-list-items__item blog-card">
                                     <div class="blog-card__header">
                                         <div class="blog-card__cat-links">
                                             <a href="blog.html">Member 3</a>
                                         </div>
                                     </div>
                                     <div class="blog-card__text">
                                         <p>
                                          Full name: Noormubarak faraj bin thabit<br>
                                          Date of birth: 5/8/2001<br>
                                           Address: Yemen/Mukalaa<br>
                                           Email :  <a href="nooralnahdi113@gmail.com">Maile me</a><br>
                                           Gender: female<br>
                                           Nationality is Yemeni<br>
                                           Student in Level 3

                                        
                                         </p>
                                     </div>
                                 </div> <!-- end blog card -->
                                 
                                 
                 </div> <!-- end row -->
  
                
  
            </section>
  
     </section> <!-- s-content-->
  
     <!-- # cta  ================================================== -->
     @endsection  



