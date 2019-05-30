@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="data:image/png;base64,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" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div>
            <h1>{{ 'username' }}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23K</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold"> ( $user->profile->title ) </div>
            <div>( $user->profile->description )</div>
            <div><a href="#">( $user->profile->url ?? 'N/A' )</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://pbs.twimg.com/profile_images/1785557537/311368_10150363477252001_601572000_8817201_1251174387_n_400x400.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-lhr3-1.cdninstagram.com/vp/ef992e4cdc2191e2c7e20ebbd70fbba5/5D9941AD/t51.2885-19/s150x150/31211004_168181440466262_54181085453484032_n.jpg?_nc_ht=scontent-lhr3-1.cdninstagram.com" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://pbs.twimg.com/media/CwcZVRrVQAAteio.jpg:large" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://pbs.twimg.com/profile_images/747722070671429632/Kzxmd2Wv_400x400.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection
