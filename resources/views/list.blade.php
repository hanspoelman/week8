@extends('layouts.app')

@section('content')
<div class="container">
    <table id="tbl" style="font-size:18px;"><tr><th class="Sort by:" style="padding: 15px;">Sort by:</th><th style="cursor:pointer; padding: 15px;" onclick="loadPage('title', this)" class="title">title</th><th style="cursor:pointer;padding: 15px;" onclick="loadPage('body', this)" class="description">description</th><th style="cursor:pointer;padding: 15px;" onclick="loadPage('asking_price', this)" class="asking price">asking price</th><th style="cursor:pointer;padding: 15px;" onclick="loadPage('created_at', this)" class="datum">datum &#9660</th></tr>
   </table>  
  
    <div class="row" id="contenttable">
    </div>
</div>

<script type="text/javascript" src="{{ URL::asset('js/mp.js') }}"></script>
@endsection
