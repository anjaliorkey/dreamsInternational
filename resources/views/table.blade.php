@extends('layouts.app')
@section('content')
@include('include.navbar')
<section id="home">
    <div class="bg-holder" style="background-image:url(public/assets/img/gallery/hero.png);background-position:center;background-size:cover; height: 20px;"></div>
</section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Address</th>
                                <th scope="col">City</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Captcha</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->mobile }}</td> 
                                <td>{{ $value->address }}</td>
                                <td>{{ $value->city }}</td>
                                <td>{{ $value->gender }}</td>
                               
                                <td>  <img src="{{ url('public/img/'.$value->photo) }}"style="height: 100px; width: 150px;"></td>
                                 <td>{{ $value->captcha }}</td>
                                <td><button><a href="/{{$value->id}}">Edit</a></button></td>
                                <td><button><a href="/delete/{{$value->id}}">Delete</a></button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
      @include('include.footer')

@endsection
