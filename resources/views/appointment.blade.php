@extends('layouts.main')

@section('content') 
    <!-- page-header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 overlay">
                    <div class="page-caption">
                        <h1 class="page-title">Guest Appointment</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.page-header-->

    <x-card>
        
    </x-card>

    <x-card>
        <div class="form-group">
            <h2>Tujuan kedatangan Anda?</h2>
            <select class="form-control mt-5" id="exampleFormControlSelect1">
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
            <input type="email" class="form-control mt-5" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukin nama cyok">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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
            <small id="emailHelp" class="form-text text-muted mt-3">Pilih satu atau banyak juga boleh</small>
        </div>
    </x-card>

    <x-card>
        <h2>Plan visit</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <select class="form-control mt-5" id="exampleFormControlSelect1">
                        <option value="" selected>-- pilih frekuensi --</option>
                        <option>Daily</option>
                        <option>Weekly</option>
                        <option>Monthly</option>
                    </select>
                    <small id="emailHelp" class="form-text text-muted">Pilih frekuensi</small>
                </div>
            </div>
        </div>
        <div class="row mt-3    ">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label class="control-label" for="datetimepicker-1">Select Date</label>
                        <input type="text" id="datetimepicker-1" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label class="control-label" for="datetimepicker-2">Select Time</label>
                        <input type="text" id="datetimepicker-2" class="form-control" />
                    </div>
                </div>
            </div>
        </div>
    </x-card>

    <x-card>
        <h2>Siapa PIC yang ditemui Cyok?</h2>
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-8">
                <div class="form-group">
                    <input type="email" class="form-control mt-5" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukkan aja cyok">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-4">
                <div class="form-group">
                    <select class="form-control mt-5" id="exampleFormControlSelect1">
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

    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <button type="button" class="btn btn-pink"><i class="fas fa-plane pr-2" aria-hidden="true"></i>Submit</button>
            </div>
        </div>
    </div>
@endsection