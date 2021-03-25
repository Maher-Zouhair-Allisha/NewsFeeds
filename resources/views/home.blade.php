@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!

                        <br />

                        @if(isset($_GET['try_teeneger']))
                            You are tryign to access teenager page
                            <br />
                            you should wait {{15-auth()->user()->age}} years to access this page
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
