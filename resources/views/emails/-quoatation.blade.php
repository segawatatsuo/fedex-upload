<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title></title>
        <style>
            .table-gray{
                background-color: #EEEEEE;
            }

        </style>
    </head>
    <body>
        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
            <tr>
                <td align="center" valign="top">
                    <table border="0" cellpadding="20" cellspacing="0" width="600" id="emailContainer">
                        <tr>
                            <td align="center" valign="top">
                                {!! nl2br($content['contents']) !!}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <table border="1" cellpadding="5" cellspacing="0" height="100%" width="100%" id="bodyTable">
            <tr>
                <th style="width:20%" class="table-gray">Shipper</th>
                <td style="width:80%;">{{ $content['shipper'] }}</td>
            </tr>
            <tr>
                <th class="table-gray">Consignee</th>
                <td>{{ $content['consignee'] }}</td>
            </tr>
            <tr>
                <th class="table-gray">Port ofr Loading</th>
                <td>
                    {{ $content['port_of_loading'] }}
                </td>
            </tr>
            <tr>
                <th class="table-gray">Final Destination</th>
                <td>{{-- $content['final_destination'] --}}</td>
            </tr>
            <tr>
                <th class="table-gray">Sailing on (ETD)</th>
                <td>{{ $content['sailing_on'] }}</td>
            </tr>
            <tr>
                <th class="table-gray">Arriving on (ETA)</th>
                <td>{{ $content['Arriving on'] }}</td>
            </tr>
            <tr>
                <th class="table-gray">Quotaition Deadline</th>
                <td>{{ $content['quotaition_deadline'] }}</td>
            </tr>
        </table>
        <br>

        <table border="1" cellpadding="5" cellspacing="0" height="100%" width="100%" id="bodyTable">
            <!--見出し-->
            <tr>
                <th style="width:5%" class="table-gray"></th>
                <th style="width:43%" class="table-gray">Description of goods</th>
                <th style="width:10%;text-align:center;" class="table-gray">Ctn</th>
                <th style="width:10%;text-align:center;" class="table-gray">Quantity</th>
                <th colspan="2" style="width:22%;text-align:center;" class="table-gray">Unit Price (Ex-Work)</th>
                <th colspan="2" style="width:10%;text-align:center;" class="table-gray">Amount</th>
            </tr>




            <!--内容-->
            @php
                $no = 1;
            @endphp

            @foreach ( $items as $item )
            <tr>
                <td>{{ $no }}</td>
                <td>{{ $item[1] }}</td>
                <td style="text-align:right;">{{ number_format($item[3]) }}</td>
                <td style="text-align:right;">{{ number_format($item[4]) }}</td>
                <td>USD</td>
                <td style="text-align:right;">{{ number_format($item[2]) }}</td>
                <td>USD</td>
                <td style="text-align:right;">{{ number_format($item[5]) }}</td>
            </tr>
            @php
                $no += 1;
            @endphp
            @endforeach


        

            <!-- TOTAL -->
            <tr>
                <td></td>
                <th>TOTAL</th>
                <th style="text-align:right;">{{ number_format($content['ctn_total']) }}</th>
                <th style="text-align:right;">{{ number_format($content['quantity_total']) }}</th>
                <th colspan="2"></th>
                <th>USD</th>
                <th style="text-align:right;">{{ number_format($content['amount_total']) }}</th>
            </tr>
        </table>


<br>

        <div>After the payment at USD {{ $content['amount_total'] }} was confirmed, an order becomes effective.</div>
        
        <div>Bank information:</div>
        <table>
            <tr>
                <th align="left">Bank</th>
                <td> </td>
                <td>{{ session('bank') }}</td>
            </tr>
            <tr>
                <th  align="left">Branch</th>
                <td> </td>
                <td>{{ session('branch') }}</td>
            </tr>
            <tr>
                <th  align="left">SWIFT Code</th>
                <td> </td>
                <td>{{ session('swift_code') }}</td>
            </tr>
            <tr>
                <th  align="left">Account #</th>
                <td> </td>
                <td>{{ session('account') }}</td>
            </tr>
            <tr>
                <th  align="left">Name</th>
                <td> </td>
                <td>{{ session('name') }}</td>
            </tr>
        </table>
        <br>

        <div>Shipment : By Fedex</div>
        <div>Made in Japan</div>
        <div>C.C.Medico Co.,Ltd.</div>
        <div>
            <img src="http://127.0.0.1:8000/storage/hamada.png" class="img-fluid sign-border">
        </div>
        <div>
            Yoshiumi Hamada. President
        </div>




    </body>
</html>
