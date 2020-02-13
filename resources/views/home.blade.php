@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3">
           <img src="svg/logo.png" class="rounded-circle" style="width: 120px; height: 120px;">
       </div>

       <div class="col-9">
        <div><h1>{{$userV->username}}}</h1></div>
           <div class="d-flex">
              <div class="pr-5"><strong>153</strong>posts</div>
               <div class="pr-5"><strong>23k</strong> followers</div>
               <div class="pr-5"><strong>212</strong> following</div>

       </div>

        <div class="pt-4">{{$userV->profile->title}}}</div>
           <div>{{$userV->profile->decription}}}</div>
           <div><a href="#">{{$userV->profile->url}}}</a> </div>
   </div>
       <div class="row pt-4">
           <div class="col-4">
               <img src="svg/logo.png" alt="#" class="w-100" />
           </div>

           <div class="col-4">
               <img src="svg/logo.png" alt="#" class="w-100"/>
           </div>

           <div class="col-4">
               <img src="svg/logo.png" alt="#" class="w-100"/>
           </div>
       </div>


</div>
@endsection
