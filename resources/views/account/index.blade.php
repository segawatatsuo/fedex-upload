{{--@extends('../layouts.app')--}}
@extends('../layouts.login')

@section('content')


    <div class="container">


        <div class="container mt-4">
            <div class="row">
                <div class="col-md-4">
                </div>
            </div>
        </div>


        <div class="container mb-4 mt-4">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>My page</h3>
                </div>
            </div>
        </div>


        <form method="post">
            @csrf

            <div class="mx-auto" style="width: 18rem;">


                <div class="card" style="width: 18rem;margin-bottom:40px">
                    
                        <button formaction="{{ 'account/order' }}" type="submit" class="btn btn-success"
                            style="width:100%;height:60px;font-size:20px">Order History</button>

                </div>

                <div class="card" style="width: 18rem;margin-bottom:40px">
                        <button formaction="{{ 'account/address' }}" type="submit" class="btn btn-success"
                        style="width:100%;height:60px;font-size:20px">Account detail</button>
                </div>


                <div class="card" style="width: 18rem;margin-bottom:40px">
                        <button formaction="{{ 'account/quotation' }}" type="submit" class="btn btn-success"
                        style="width:100%;height:60px;font-size:20px">Quotation</button>
                </div>

                <div class="card mt-4" style="width: 18rem;">
                        <button formaction="{{ 'account/invoice' }}" class="btn btn-success"
                        style="width:100%;height:60px;font-size:20px">Invoice</button>
                </div>


            </div>
        </form>

    </div>
    <br><br><br>

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
