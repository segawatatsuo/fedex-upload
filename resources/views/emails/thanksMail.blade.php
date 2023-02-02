<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "https://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta name="viewport" content="target-densitydpi=device-dpi,width=device-width,maximum-scale=1.0,user-scalable=yes">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-2022-jp" />
    <meta http-equiv="Content-Language" content="en">
    <title>C.C.Medico Thank you for your order.</title>
    <style type="text/css">
        html {
            width: 100%;
            height: 100%;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        th,
        td .line {
            border: solid 1px #333;
            /* 線の種類 太さ 色 */
        }
    </style>
</head>

<body style="width:100%;height:100%;margin:0;padding:0;">


    <!-- 全体の背景色を指定するためのtable -->
    <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#ededed"
        style="width:100%;height:100%;background-color:#ededed;">
        <td valign="top">
            <!-- 横幅を指定するためのtable -->
            <table width="600" align="center" border="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff"
                style="width:600px;background-color:#ffffff;">
                <!-- コンテンツを記述するためのtable -->
                <table width="100%" border="0" cellpadding="20" cellspacing="0">
                    <tr>
                        <td valign="top" align="left">

                            <!-- ヘッダーエリア -->
                            <table width="100%" border="0" cellpadding="20" cellspacing="0">
                                <tr>
                                    <td class="responsive-td" valign="top" align="left"
                                        style="background-color:#000000;">
                                        <img src="https://www.ccmedico.com/fedex/storage/ccm.jpg" alt="ccmedico logo"
                                            width="120" height="38" style="max-width:100%;color:#ffffff;">
                                    </td>
                                </tr>
                            </table>
                            <!-- コンテンツエリア -->
                            <table width="100%" border="0" cellpadding="10" cellspacing="0">
                                <tr>
                                    <th class="responsive-td" valign="top" align="center">
                                        <font size="3" color="#000000"
                                            style="font-size:16px;color:#000000;line-height:1.4;">Order Confirmation
                                        </font>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        Thank you for shopping with CCM EXPORT.<br>
                                        You will receive a confirmation when your items<br>
                                        have been shipped.<br>
                                        Your order details are displayed below.<br>
                                        If you would like to check the status of your order<br>
                                        or make any changes, please visit the Account Page.
                                    </td>
                                </tr>
                            </table>

                            <table width="100%" border="0" cellpadding="10" cellspacing="0">

                                <tr>
                                    <th colspan="2" align="left">
                                        <font size="3" color="#000000"
                                            style="font-size:16px;color:#000000;line-height:1.4;">shipping address
                                        </font>
                                    </th>
                                </tr>

                                <tr>
                                    <td style="width: 20%">consignee</td>
                                    <td style="width: 80%">{{ $content['consignee'] }}</td>
                                </tr>
                                <tr>
                                    <td>country</td>
                                    <td>{{ $content['country'] }}</td>
                                </tr>
                                <tr>
                                    <td>address_line1</td>
                                    <td>{{ $content['address_line1'] }}</td>
                                </tr>
                                <tr>
                                    <td>address_line2</td>
                                    <td>{{ $content['address_line2'] }}</td>
                                </tr>
                                <tr>
                                    <td>city</td>
                                    <td>{{ $content['city'] }}</td>
                                </tr>
                                <tr>
                                    <td>state</td>
                                    <td>{{ $content['state'] }}</td>
                                </tr>
                                <tr>
                                    <td>zip</td>
                                    <td>{{ $content['zip'] }}</td>
                                </tr>
                                <tr>
                                    <td>phone</td>
                                    <td>{{ $content['phone'] }}</td>
                                </tr>
                                <tr>
                                    <td>fax</td>
                                    <td>{{ $content['fax'] }}</td>
                                </tr>
                            </table>

                            <table width="100%" border="0" cellpadding="10" cellspacing="0">

                                <tr>
                                    <th colspan="2" align="left">
                                        <font size="3" color="#000000"
                                            style="font-size:16px;color:#000000;line-height:1.4;">Head office</font>
                                    </th>
                                </tr>
                                <tr>
                                    <td style="width: 20%">address_line1</td>
                                    <td style="width: 80%">{{ $content['bill_company_address_line1'] }}</td>
                                </tr>
                                <tr>
                                    <td>address_line2</td>
                                    <td>{{ $content['bill_company_address_line2'] }}</td>
                                </tr>

                                <tr>
                                    <td>city</td>
                                    <td>{{ $content['bill_company_city'] }}</td>
                                </tr>
                                <tr>
                                    <td>state</td>
                                    <td> {{ $content['bill_company_state'] }}</td>
                                </tr>
                                <tr>
                                    <td>country</td>
                                    <td>{{ $content['bill_company_country'] }}</td>
                                </tr>
                                <tr>
                                    <td>zip</td>
                                    <td>{{ $content['bill_company_zip'] }}</td>
                                </tr>
                                <tr>
                                    <td>phone</td>
                                    <td>{{ $content['bill_company_phone'] }}</td>
                                </tr>
                                <tr>
                                    <td>president</td>
                                    <td>{{ $content['president'] }}</td>
                                </tr>

                            </table>

                            <table border="1" style="border-collapse: collapse" cellpadding="5">
                                <tr>
                                    <td align="center">Description of goods </td>
                                    <td align="center">Unit Price (ExWork)</td>
                                    <td align="center">Ctn</td>
                                    <td align="center">Quantity</td>
                                    <td align="center">Amount(USD)</td>
                                </tr>
                                @foreach ($content['items'] as $a)
                                <tr>
                                    <td align="left">{{ $a[1] }}</td>
                                    <td align="right">{{ $a[2] }}</td>
                                    <td align="right">{{ $a[3] }}</td>
                                    <td align="right">{{ $a[4] }}</td>
                                    <td align="right">{{ $a[5] }}</td>
                                </tr>
                                @endforeach
                            </table>


                            <p>carton total:{{ $content['ctn_total'] }}</p>
                            <p>quantity total:{{ $content['quantity_total'] }}</p>
                            <p>amount total(USD):{{ $content['amount_total'] }}</p>




                            <!-- フッターエリア -->
                            <table width="100%" border="0" cellpadding="20" cellspacing="0">
                                <tr>
                                    <td class="responsive-td" valign="top" align="left"
                                        style="background-color:#000000;">
                                        <font size="2" color="#ffffff" style="font-size:14px;color:#ffffff;">
                                            C.C.Medico Co.,Ltd.<br>
                                            1-12-1 sibuy markcity W22 JP, Dogenzaka,, Shibuya Ku,, Tokyo,, 150-0043
                                            Japan<br>
                                            phone：<a href="tel:+81-3-6897-4086"
                                                style="color:#ffffff;">+81-3-6897-4086</a><br>
                                            <br>
                                            Copyright c 2022 C.C. Medico Co.,Ltd. All Rights Reserved.
                                        </font>
                                    </td>
                                </tr>
                            </table>


                        </td>
                    </tr>
                </table>
            </table>
        </td>
    </table>

</body>

</html>
