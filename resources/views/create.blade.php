@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Item plaatsen</div>

               <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    
                    <form method="POST" action="ads">
                        @csrf
                            <div class="form-group row">
                            <label for="titel" class="col-md-4 col-form-label text-md-right">Titel </label><br>
                            <div class="col-md-6">
                            <input type="text" name="title"><br>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="beschrijving" class="col-md-4 col-form-label text-md-right">Beschrijving </label><br>
                        <div class="col-md-6">
                            <input type="text" name="body"><br>
                            </div>
                        </div>
                            <div class="form-group row">
                            <label for="vraagprijs" class="col-md-4 col-form-label text-md-right"> Vraagprijs</label><br>
                            <div class="col-md-6">
                            <input type="" name="asking_price"><br>
                                </div>
                                  </div>
                                <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Plaatsen') }}
                                </button>
                                    </div>
                        </div>
                    
        
                    
                    
                   </form>
            </div>
        </div>
    </div>
</div>
@endsection 