@extends('layouts.main')

@section('title', 'ProSimRacing - Обратная связь')
@section('seo_description', 'ProSimRacing.Ru - портал, посвященный виртуальному спорту (симрейсингу), на котором вы найдете новости, статьи, рукодства, освящение турниров и чемпионатов, статьи о прокатном картинге и автоспорту')
@section('keywords', 'prosimracing, iRacing, ACC, Assetto Corsa, Assetto Corsa Competizione, simracing, виртуальный автоспорт, новости, киберспорт')
@section('og_title', 'ProSimracing')
@section('og_description', 'ProSimRacing.Ru - портал, посвященный виртуальному спорту (симрейсингу), на котором вы найдете новости, статьи, рукодства, освящение турниров и чемпионатов, статьи о прокатном картинге и автоспорту')
@section('og_image'){{ asset('assets/img/preview.jpg') }}@endsection

@section('content')

<h1 class="main-section__title main-section__title_tag-margin">Обратная связь</h1>

<div class="contacts__container">
   <p class="contacts__p">Связаться с администрацией портала можно разными способами:</p>
   <ul class="contacts__ul">
      <li class="contacts__li-item">Написать на нашу общую почту: <a class="contacts__li-link" href="mailto:info@prosimracing.ru">info@prosimracing.ru</a></li>
      <li class="contacts__li-item">Написать личное сообщение в нашей группе в социальной сети ВКонтакте: <a class="contacts__li-link" href="https://vk.com/prosimracing">ProSimRacing</a></li>
      <li class="contacts__li-item">Присоединится к нашему Discord-серверу: <a class="contacts__li-link" href="https://discord.gg/3TDKBKRSQ7">приглашение</a></li>
      <li class="contacts__li-item">В скором времени будет доступна форма обратной связи, через которую вы сможете написать представителям администрации непосредственно с сайта</li>
   </ul>
</div>
<!-- End Content wrapper--> 

@endsection