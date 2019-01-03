@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
            <div id="container">
    <table id="tbl" style="width:100%" border="1"><tr><th style="cursor:pointer" onclick="loadPage('title', this)" class="title">title</th><th style="cursor:pointer" onclick="loadPage('body', this)" class="description">description</th><th style="cursor:pointer" onclick="loadPage('asking_price', this)" class="asking price">asking price</th><th style="cursor:pointer" onclick="loadPage('created_at', this)" class="datum">datum &#9660</th></tr>
    <tbody id="contenttable">
    </tbody>
    </table>
    </div>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/mp.js') }}"></script>
@endsection
