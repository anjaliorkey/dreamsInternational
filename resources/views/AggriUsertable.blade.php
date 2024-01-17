@extends('layouts.app')

@section('content')
    @include('include.navbar')

    <section id="home">
        <div class="bg-holder" style="background-image:url(public/assets/img/gallery/hero.png);background-position:center;background-size:cover; height: 20px;"></div>
    </section>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Old Agreement Reference</th>
                                        <th scope="col">Agreement Tenure in Months</th>
                                        <th scope="col">Rent Amount</th>
                                        <th scope="col">Society Maintenance will be paid by</th>
                                        <th scope="col">Furniture and Appliances</th>
                                        <th scope="col">Miscellaneous</th>
                                        <th scope="col">Agreement Start Date</th>
                                        <th scope="col">Deposit Amount</th>
                                        <th scope="col">Agreement Cost shall be born by</th>
                                        <th scope="col">Tenant Type</th>
                                        <th scope="col">Total Tenant</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($blogsDemoTo as $valueDemo)
                                        <tr>
                                            <td>{{ $valueDemo->id }}</td>
                                            <td>{{ $valueDemo->firstname }}</td>
                                            <td>{{ $valueDemo->lastname }}</td>
                                            <td>{{ $valueDemo->phone }}</td>
                                            <td>{{ $valueDemo->email }}</td>
                                            <td>{{ $valueDemo->oldagrement }}</td>
                                            <td>{{ $valueDemo->tenorMonth }}</td>
                                            <td>{{ $valueDemo->rentamt }}</td>
                                            <td>{{ $valueDemo->socityMaintenance }}</td>
                                            <td>{{ $valueDemo->FurnitureandAppliances }}</td>
                                            <td>{{ $valueDemo->Miscellaneous }}</td>
                                            <td>{{ $valueDemo->AgreementStartDate }}</td>
                                            <td>{{ $valueDemo->DepositAmount }}</td>
                                            <td>{{ $valueDemo->Agreementcost }}</td>
                                            <td>{{ $valueDemo->tenantType }}</td>
                                            <td>{{ $valueDemo->totalTenant }}</td>
                                            <td>
                                                <button class="btn btn-primary"><a href="/editDemo/{idsDemo}/{{$valueDemo->id}}" style="color: white;">Edit</a></button>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger"><a href="/deleteDemo/{idsText}/{{$valueDemo->id}}" style="color: white;">Delete</a></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('include.footer')
@endsection
