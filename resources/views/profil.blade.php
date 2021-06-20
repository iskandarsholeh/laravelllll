@extends('layout/main')
@section('title', 'Profile')
@section('content')
<?php 
$thisPage = "profile";
?>
        <div class="content">
            <a href="#openModal">Open Modal</a>

            <div id="openModal" class="modalDialog">
                <div> <a href="#close" title="Close" class="close">X</a>

                    <body>
                        <div class="main">
                            <h1>Todo by <a target="_blank" href="sikon.xyz">Sikon</a></h1>
                            <input type="text" placeholder="Type and press Enter &#8594;" id="todo" />
                            <button id="button">+</button>
                            <!-- <div class='actions'>
            <input type="submit" value="Login" disabled="disabled" />
        </div> -->
                            <!-- <div class="inputField">
            <input type="text" placeholder="Add your new todo">
            <button><i class="fas fa-plus"></i></button>
        </div> -->
                            <p class="text-info">Tap on todo to remove them.</p>
                            <div class="container">
                                <!-- incomplete todo -->
                                <div class="incomplete"></div>
                            </div>
                            <span>You have <span class="pendingTasks"></span> pending tasks</span>
                            <button class="btn">Clear All</button>
                        </div>
                        <!-- link to jq and external js -->


                </div>
            </div>


            <center>
                <font size="24" face="Roboto"><strong>My Profil</strong></font>
            </center>
            <br>
            <div class="img"></div>
            <!-- <center><img src="img/aku.jpeg" width="300" height="300"></center> -->
            <br>
            <h2>Tentang Saya</h2>
            <p>Halo perkenalkan nama saya <strong>Iskandar Sholeh</strong></p>
            <table>
                <tr>
                    <td> Nama Lengkap </td>
                    <td> : Iskandar Sholeh </td>
                </tr>
                <tr>
                    <td> Jenis Kelamin </td>
                    <td> : Laki-laki </td>
                </tr>
                <tr>
                    <td> Agama </td>
                    <td> : Islam </td>
                </tr>
                <tr>
                    <td> Tempat/Tanggal Lahir </td>
                    <td> : Bangkalan/19 April 2001 </td>
                </tr>
                <tr>
                    <td> Alamat </td>
                    <td> : Bangkalan </td>
                </tr>
            </table>
            <h2>Sosial Media</h2>
            <a target="blank_" href="https://www.facebook.com/11iskandar/">
                <img src="/img/fb.png" style="width:42px;height:42px;"></a>
            <a target="blank_" href="https://www.instagram.com/ini.iskan/">
                <img src="/img/instag.png" style="width:42px;height:42px;"></a>

        </div>



       


        @endsection