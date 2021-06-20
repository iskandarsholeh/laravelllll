@extends('layout/main')
@section('title', 'Home')
@section('content')
<?php 
$thisPage = "home";
?>
        <div class="content">
        @foreach($data_news as $news)
            <a href="#">
                <img src="{{ asset('image/news/'. $news->picture)}}" class="gambardepan">
            </a>
            <h2>{{$news->title}}</h2><br> {{$news->content}}
            <br>
            <h5>{{$news->updated_at}} by {{$news->author_id}}</h5>
            <hr />

            @endforeach
            <a href="#">
                <img src="img/zoo.jpg" class="gambardepan">
            </a>
            <h2>3 Jenis Plankton</h2><br> Plankton sendiri merupakan salah satu organisme mikroskopis karena bentuknya yang kecil. Dan mereka hidup di atas mau pun di permukaan samudera atau yang disebut dengan zona pelagis. Mereka juga bisa ditemukan di
            laut dan badan air. Nama plankton diambil dari bahasa Yunani planktos, yaitu yang artinya pengembara. Secara umum, plankton memiliki ukuran kecil yaitu kurang dari 1 mm atau sekitar 0,000039 inci. Namun ada juga spesies plankton yang berukuran....<br>
            <h5>10 Maret 2021 Penulis by Iskandar Sholeh</h5>

            <hr />

            <a href="#">
                <img src="img/zoo.jpg" class="gambardepan">
            </a>
            <h2>3 Jenis Plankton</h2><br> Plankton sendiri merupakan salah satu organisme mikroskopis karena bentuknya yang kecil. Dan mereka hidup di atas mau pun di permukaan samudera atau yang disebut dengan zona pelagis. Mereka juga bisa ditemukan di
            laut dan badan air. Nama plankton diambil dari bahasa Yunani planktos, yaitu yang artinya pengembara. Secara umum, plankton memiliki ukuran kecil yaitu kurang dari 1 mm atau sekitar 0,000039 inci. Namun ada juga spesies plankton yang berukuran....<br>
            <h5>10 Maret 2021 Penulis by Iskandar Sholeh</h5>

            <hr />

            <a href="#">
                <img src="img/babi.jpg" class="gambardepan">
            </a>
            <h2>Bahaya Bulu Babi</h2>
            <br> Apabila kamu tertusuk bulu babi, kamu harus segera melakukan penanganan yang tepat. Sebab, lambat laun kamu akan merasakan gatal-gatal, pegal, perih, dan nyeri di sekujur tubuh. Bila tidak segera ditangani pun, kamu akan merasakan rasa
            gatal yang berkepanjangan, bahkan bisa lebih dari seminggu......
            <br><br>
            <h5>07 Maret 2021 Penulis by Iskandar Sholeh</h5>
            </a>
            <hr />
        </div>


        @endsection