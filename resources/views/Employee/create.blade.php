@extends('layouts.app')

@section('content')
    <style>
        .form-animate {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease-in-out forwards;
        }

        .form-animate:nth-child(1) { animation-delay: 0.1s; }
        .form-animate:nth-child(2) { animation-delay: 0.2s; }
        .form-animate:nth-child(3) { animation-delay: 0.3s; }
        .form-animate:nth-child(4) { animation-delay: 0.4s; }
        .form-animate:nth-child(5) { animation-delay: 0.5s; }
        .form-animate:nth-child(6) { animation-delay: 0.6s; }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        input:focus {
            border-color: #5cb85c !important;
            box-shadow: 0 0 0 0.2rem rgba(92, 184, 92, 0.25);
        }

        .card-title {
            font-weight: bold;
            letter-spacing: 1px;
        }
    </style>

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm border-0 card-secondary">
                        <div class="card-header bg-success text-white">
                            <h3 class="card-title">Add New Employee</h3>
                        </div>

                        <form action="{{route('employee.store')}}" method="POST">
                            @csrf
                            <div class="card-body row g-3">
                                <div class="form-group col-md-6 form-animate">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control" name="fname" placeholder="Enter first name">
                                    @error('fname') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="form-group col-md-6 form-animate">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control" name="lname" placeholder="Enter last name">
                                    @error('lname') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="form-group col-md-6 form-animate">
                                    <label for="midname">Middle Name</label>
                                    <input type="text" class="form-control" name="midname" placeholder="Enter middle name">
                                    @error('midname') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="form-group col-md-6 form-animate">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="Enter address">
                                    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="form-group col-md-6 form-animate">
                                    <label for="age">Age</label>
                                    <input type="number" class="form-control" name="age" placeholder="Enter age">
                                    @error('age') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="form-group col-md-6 form-animate">
                                    <label for="zip">Zip</label>
                                    <input type="number" class="form-control" name="zip" placeholder="Enter ZIP code">
                                    @error('zip') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="card-footer bg-light">
                                <button type="submit" class="btn btn-success w-100">
                                    <strong>Submit</strong>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
