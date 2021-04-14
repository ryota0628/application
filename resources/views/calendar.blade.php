@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">{{ $calendar->getTitle() }}</div>
               <div class="card-body">
					{!! $calendar->render() !!}
               </div>
           </div>
       </div>
   </div>
</div>
<a href='/schedules/register' style="font-size:30pt;font-weight:bold;"><center>[予定登録はこちら]<center></a><!--登録ページへのリンク-->
@endsection