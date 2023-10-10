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
                @foreach ($data as $hoge)
                    <tr>

                        <td style="width: 15%">{{ $hoge->created_at }}</td>
                        <td style="width: 15%">{{ $hoge->quotation_no }}</td>
                        <td style="width: 15%">
                            @if (isset($hoge->invoices->invoice_no))
                                {{ $hoge->invoices->invoice_no }}
                            @endif
                        </td>
                        <td style="width: 15%">
                            @if (isset($hoge->invoices->order_confirms->order_no))
                                {{ $hoge->invoices->order_confirms->order_no }}
                            @endif
                        </td>
                        <td style="width: 15%"></td>
                        <td style="width: 15%"></td>
                        <td style="width: 10%"></td>

                    </tr>
                @endforeach
            </table>


        </div>



    </div>

    {{ session('user[consignee]') }}

    <div class="container mt-4" id="ItemList">
        {{ $data->links() }}
    </div>

@stop
