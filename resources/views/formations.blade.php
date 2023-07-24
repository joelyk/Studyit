@extends('app')

@section('contentformation')

<section id="menu">
    <h4 class="mini_title">Nos Formations</h4>
    <h2 class="title"> Certifiantes </h2>

    
    
    @foreach ($formations as $form)
    <div class="dishes">
          <div class="dish">
            <img src="{{ asset('images/python.png') }}">
            <h2>{{$form->title}}</h2>
            <a href="geniusniveau1.Nombre de Formations"> Plus d'infos </a>
          </div>
          <div class="dish">
           <img src="{{ asset('images/css.jpg') }}">
           <p> Nombre de Formations 2</p>
           <h2>{{$form->title}}</h2>
           <a href="geniusniveau2.Nombre de Formations"> Plus d'infos </a>
         </div>
         <div class="dish">
           <img src="{{ asset('images/django.jpg') }}">
           <p> Nombre de Formations 3</p>
           <h2>{{$form->title}}</h2>
           <a href="geniusniveau3.Nombre de Formations"> Plus d'infos </a>
         </div>
         <div class="dish">
           <img src="{{ asset('images/laravel.png') }}">
           <p> Nombre de Formations 1</p>
           <h2>{{$form->title}}</h2>
           <a href="#"> Plus d'infos </a>
         </div>
         <div class="dish">
          <img src="{{ asset('images/reactjs.png') }}">
          <p> Nombre de Formations 2</p>
          <h2>{{$form->title}}</h2>
          <a href="#"> Plus d'infos </a>
        </div>
        <div class="dish">
          <img src="{{ asset('images/css.jpg') }}">
          <p> Nombre de Formations 3</p>
          <h2>{{$form->title}}</h2>
          <a href="#"> Plus d'infos </a>
        </div>
       
    </div>
    @endforeach
    
  </section>



@endsection
