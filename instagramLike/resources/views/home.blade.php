@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/Dolphin-logo.svg/180px-Dolphin-logo.svg.png" alt="">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{ $user->username }}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>
                {{ $user->profile->description }}
            </div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
        
        <div class="row pt-5">
            <div class="col-4">
                <img src="https://instagram.fzag4-1.fna.fbcdn.net/vp/31e0b0720b8be92ece1488cc93296bb6/5DF5A311/t51.2885-15/sh0.08/e35/c3.0.743.743a/s640x640/68657064_406038826685251_8840140737341399690_n.jpg?_nc_ht=instagram.fzag4-1.fna.fbcdn.net" class="w-100" alt="">
            </div>
            <div class="col-4">
                <img src="https://instagram.fzag4-1.fna.fbcdn.net/vp/941d929763a481626bc728cc4b33f855/5E056371/t51.2885-15/sh0.08/e35/c0.75.877.877a/s640x640/67524515_156209612234747_3747271840880064739_n.jpg?_nc_ht=instagram.fzag4-1.fna.fbcdn.net" class="w-100" alt="">
            </div>
            <div class="col-4">
                <img src="https://instagram.fzag4-1.fna.fbcdn.net/vp/97e98d9d6728401aa4903ae9d39ccb07/5DF558D5/t51.2885-15/e35/c96.0.557.557/69461407_170809170634599_1337765637046294646_n.jpg?_nc_ht=instagram.fzag4-1.fna.fbcdn.net" class="w-100" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
