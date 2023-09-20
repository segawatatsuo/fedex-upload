{{--@extends('../layouts.app')--}}
@extends('../layouts.login')

@section('content')

<!--
    <div class="container-fluid" style="padding:0;">
        <div class="d-flex align-items-center justify-content-center h3"
            style="height:50px;background: #131921;color: azure;">
            NAV YOURACCOUNT
        </div>
    </div>
-->

    <div class="container">


        <div class="container mt-4">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-8 text-right">
                    <span><a href=" {{ route('account.index') }} ">アカウントサービス</a> / お客様のご住所</span>
                </div>

            </div>
        </div>


        <div class="container mb-4 mt-4">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Address</h3>
                </div>
            </div>
        </div>

        <form method="post">
            @csrf
            <div class="card-deck mx-auto" style="width:40rem">

                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        Consignee
                    </div>
                    <div class="card-body">
                        <div>
                            <label for="name" class="mt">name:</label>

<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required placeholder="">
@error('importer_name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror

                            <label for="address_line1" class="mt">address_line1:</label>
                                <input id="address_line1" type="text" class="form-control @error('address_line1') is-invalid @enderror" name="address_line1" value="{{ $user->userinformations->address_line1 }}" required placeholder="">
                                @error('address_line1')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            <label for="address_line2" class="mt">address_line2:</label>
                                <input id="address_line2" type="text" class="form-control @error('address_line2') is-invalid @enderror" name="address_line2" value="{{ $user->userinformations->address_line2 }}" required placeholder="">
                                @error('address_line2')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            <label for="city" class="mt">city:</label>
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ $user->userinformations->city }}" required placeholder="">
                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            <label for="state" class="mt">state:</label>
                                <input id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ $user->userinformations->state }}" required placeholder="">
                                @error('state')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            <label for="country" class="mt">country:</label>
                                <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ $user->country }}" required placeholder="">
                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            <label for="zip" class="mt">zip:</label>
                                <input id="zip" type="text" class="form-control @error('zip') is-invalid @enderror" name="zip" value="{{ $user->userinformations->zip }}" required placeholder="">
                                @error('zip')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            <label for="phone" class="mt">phone:</label>
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->userinformations->phone }}" required placeholder="">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            <label for="email" class="mt">email:</label>
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required placeholder="">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror


                        </div>

                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        Head Office
                    </div>
                    <div class="card-body">
                        <div>
                            <label for="president" class="mt">president:</label>
                                <input id="president" type="text" class="form-control @error('president') is-invalid @enderror" name="president" value="{{ $user->userinformations->president }}" required placeholder="">
                                @error('president')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror


                            <label for="company_name" class="mt">company_name:</label>
                                <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ $user->company_name }}" required placeholder="">
                                @error('company_name')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror


                            <label for="bill_company_address_line1" class="mt">bill_company_address_line1:</label>
                                <input id="bill_company_address_line1" type="text" class="form-control @error('bill_company_address_line1') is-invalid @enderror" name="bill_company_address_line1" value="{{ $user->userinformations->bill_company_address_line1 }}" required placeholder="">
                                @error('bill_company_address_line1')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            <label for="bill_company_address_line2" class="mt">bill_company_address_line2:</label>
                                <input id="bill_company_address_line2" type="text" class="form-control @error('bill_company_address_line2') is-invalid @enderror" name="bill_company_address_line2" value="{{ $user->userinformations->bill_company_address_line2 }}" required placeholder="">
                                @error('bill_company_address_line2')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror


                            <label for="bill_company_city" class="mt">bill_company_city:</label>
                                <input id="bill_company_city" type="text" class="form-control @error('bill_company_city') is-invalid @enderror" name="bill_company_city" value="{{ $user->userinformations->bill_company_city }}" required placeholder="">
                                @error('bill_company_city')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            <label for="bill_company_state" class="mt">bill_company_state:</label>
                                <input id="bill_company_state" type="text" class="form-control @error('bill_company_state') is-invalid @enderror" name="bill_company_state" value="{{ $user->userinformations->bill_company_state }}" required placeholder="">
                                @error('bill_company_state')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror



                            <label for="bill_company_country" class="mt">bill_company_country:</label>
                                <input id="bill_company_country" type="text" class="form-control @error('bill_company_country') is-invalid @enderror" name="bill_company_country" value="{{ $user->userinformations->bill_company_country }}" required placeholder="">
                                @error('bill_company_country')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            <label for="bill_company_zip" class="mt">bill_company_zip:</label>
                                <input id="bill_company_zip" type="text" class="form-control @error('bill_company_zip') is-invalid @enderror" name="bill_company_zip" value="{{ $user->userinformations->bill_company_zip }}" required placeholder="">
                                @error('bill_company_zip')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            <label for="name" class="mt">bill_company_phone:</label>
                                <input id="bill_company_phone" type="text" class="form-control @error('bill_company_phone') is-invalid @enderror" name="bill_company_phone" value="{{ $user->userinformations->bill_company_phone }}" required placeholder="">
                                @error('bill_company_phone')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                        </div>

                    </div>
                </div>
                <div class="col-12 mb-5 mt-5">
                    <div class="text-center">
                        <button formaction="{{ 'update' }}" type="submit" class="btn btn-warning btn-lg">update</button>
                    </div>
                </div>

            </div>

        </form>





    </div>

    <!--
    <hr>
    <div class="container-fluid ">
        <div class="row mt-5 mb-5 ">
            <div class="col text-center " style="font-size: 11px; ">
                Copyright c 2022 C.C. Medico Co.,Ltd. All Rights Reserved.
            </div>
        </div>
    </div>
-->

    <!--end of container-->
@stop
