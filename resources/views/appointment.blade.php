@extends('layouts.main')

@section('content') 
    <!-- page-header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-caption">
                        <h1 class="page-title">Guest Appointment</h1>
                        <p class="page-subtitle text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores suscipit cupiditate id eius voluptate voluptatem, tempora dolores odio, quasi, fuga minima aspernatur ipsam. Magnam assumenda mollitia, culpa numquam fugit nam!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.page-header-->

    <section class="card-section mt-5">
        <div class="container">
            <div class="card-block bg-white rounded-5">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <!-- section-title -->
                        <div class="section-title mb-0">
                            <p class="text-center">Make appointment to aiia</p>
                        </div>
                        <!-- /.section-title -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-card>
        <div class="form-group">
            <h2>Tujuan kedatangan Anda?</h2>
            <select class="browser-default custom-select mt-5" id="exampleFormControlSelect1" required>
                <option value="" selected>-- pilih opsi --</option>
                <option>KEPO</option>
                <option>KEPO</option>
                <option>KEPO</option>
                <option>KEPO</option>
                <option>KEPO</option>
            </select>
            <small id="emailHelp" class="form-text text-muted">Pilih sesuai tujuan anda</small>
        </div>
    </x-card>

    <x-card>
        <div class="form-group">
            <h2>Siapa Nama Kamu Cyok?</h2>
            <input type="email" class="form-control mt-5" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukin nama cyok" required>
            <small id="emailHelp" class="form-text text-muted">Masukkan nama lengkap</small>
        </div>
    </x-card>

    <x-card>
        <div class="form-group">
            <h2>Apa Agenda Kamu Cyok?</h2>
            <div class="boxes mt-5">
                <input type="checkbox" id="box-1">
                <label for="box-1">Makan bareng sacho</label>
                
                <input type="checkbox" id="box-2">
                <label for="box-2">Jalan-jalan keliling aisin</label>
                
                <input type="checkbox" id="box-3">
                <label for="box-3">Makan di kantin aisin</label>
            </div>
            <small id="emailHelp" class="form-text text-muted mt-3">Pilih satu atau lebih</small>
        </div>
    </x-card>

    <x-card>
        <h2>Plan visit</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <select class="browser-default custom-select mt-5" id="exampleFormControlSelect1" required>
                        <option value="" selected>-- pilih frekuensi --</option>
                        <option>Daily</option>
                        <option>Weekly</option>
                        <option>Monthly</option>
                    </select>
                    <small id="emailHelp" class="form-text text-muted">Pilih frekuensi kedatangan</small>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label class="control-label" for="datetimepicker-1">Select Date</label>
                        <input type="date" name="date" id="date" class="form-control"/>
                        <small id="emailHelp" class="form-text text-muted">Pilih tanggal</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label class="control-label" for="datetimepicker-2">Select Time</label>
                        <input type="time" name="time" id="time" class="form-control"/>
                        <small id="emailHelp" class="form-text text-muted">Pilih jam</small>
                    </div>
                </div>
            </div>
        </div>
    </x-card>

    <x-card>
        <div class="form-group">
            <h2>Berapa banyak tamu?</h2>
            <input type="number" class="form-control mt-5" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jumlah orang" required>
            <small id="emailHelp" class="form-text text-muted">Jumlah tamu yang datang</small>
        </div>
    </x-card>

    <x-card>
        <h2>Siapa PIC yang ditemui Cyok?</h2>
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-6 col-sm-6">
                <div class="form-group">
                    <input type="email" class="form-control mt-5" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukkan aja cyok" required>
                    <small id="emailHelp" class="form-text text-muted">Nama PIC yang akan ditemui beserta department</small>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="form-group">
                    <select class="browser-default custom-select mt-5" id="exampleFormControlSelect1" required>
                        <option value="" selected>-- pilih Department --</option>
                        <option>IT Development</option>
                        <option>KEPO</option>
                        <option>KEPO</option>
                        <option>KEPO</option>
                        <option>KEPO</option>
                    </select>
                </div>
            </div>
        </div>
    </x-card>

    <x-card>
        <h2>Detail Aktivitas lu apa cyok?</h2>
        <div class="form-group mt-5">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </x-card>

    <div class="container mb-5">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <button type="button" class="btn btn-lg btn-dark"><i class="far fa-paper-plane pr-3"></i></i>Submit</button>
            </div>
        </div>
    </div>
@endsection