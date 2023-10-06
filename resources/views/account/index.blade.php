@extends('../layouts.login')


@section('content')

    <div class="container-fluid" style="padding:0;">
        <div class="d-flex align-items-center justify-content-center h3"
            style="height:50px;background: #131921;color: azure;">
            ORDER PLAN
        </div>
    </div>
    <div class="container-fluid" style="background-color: rgb(54, 54, 54);">
        <div class="container">
            <div class="progressbar">
                <div class="item active">PLAN</div>
                <div class="item">Quotation</div>
                <div class="item">INVOICE</div>
                <div class="item">ORDER</div>
                <div class="item">FACTORY</div>
                <div class="item">SHIP</div>
                <div class="item">ARRIVAL</div>
            </div>
        </div>
    </div>

    <!-- フラッシュメッセージ -->
    @if (session('flash_message'))
        <div class="flash_message bg-danger text-center py-3 my-0">
            <h3>{!! session('flash_message') !!}</h3>
        </div>
    @endif

    <div class="container mt-4">

 <div>
    <table class="table">
        <tr>
            <td>date</td>
        </tr>
    </table>


</div>   



    </div>

    {{ session('user[consignee]') }}

    <div class="container mt-4" id="ItemList">

    </div>

@stop
