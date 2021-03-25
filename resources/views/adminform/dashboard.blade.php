@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adim Form Login </div>

                <div class="card-body">
                    <P> Admin .. Welcome !</P>
                    <div> <button type="submit" class="btn btn-primary> {{route('admin.logout')}}</button></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
