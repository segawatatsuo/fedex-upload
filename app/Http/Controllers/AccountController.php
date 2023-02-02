<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Model\User;
use App\Model\Product;
use App\Model\Preference;
use App\Model\Quotation;
use App\Model\userinformations;
use App\Model\Order;
use App\Model\Order_detail;
use App\Model\Invoice;
use Carbon\Carbon;
use App\Model\Quitation_serial_number;
use App\Model\Invoice_serial_number;
use App\Model\Image;
use App\Model\Expirie;

class AccountController extends Controller
{
    public function index()
    {
        return view('account/index');
    }

    public function order()
    {
        $id=Auth::id();

        $od=Order::query();
        $orders=$od->where('user_id', $id)->orderByDesc('created_at')->paginate(10);
        return view('account/order', compact('orders'));
    }
    public function order_each($id)
    {
        //$img = Image::where('id',$id)->get();
        $order = Order::with('order_details')->where('id', $id)->first();
        $img = Image::where('order_no', $order->order_no)->get();
        //$imgはcollection
        if ($img->contains('about', 'payment')) {
            $about="送金画像あり";
        } else {
            $about="送金画像なし";
        }
        return view('account/order_each', compact('order', 'about'));
    }


    public function address()
    {
        $id = Auth::id();
        $users = User::with('Userinformations')->where('id', $id)->first();
        /*
        if ($user->address_line1=="") {
            return redirect()->route('account.index');
         }
         */
        return view('account/show', compact('users'));
    }

    public function edit()
    {
        $id = Auth::id();
        $user = User::with('Userinformations')->where('id', $id)->first();

        return view('account/edit', compact('user'));
    }

    public function quotation()
    {
        $id=Auth::id();
        /*
        $orders = Quitation_serial_number::query()
        ->where('user_id', '=', $id)
        ->orderByDesc('id')
        ->paginate(10);
        */
        $orders =Quotation::where('consignee_no', '=', $id)->where('create_PDF', '>=', '2022-01-01 00:00:01')->orderByDesc('id')->paginate(10);
        ;
        return view('account/quotation', compact('orders'));
    }

    public function invoice()
    {
        //$id=Auth::id();
        //$iv=Invoice::query();
        //$invoices=$iv->orderByDesc('created_at')->paginate(10);
        //return view('account/invoice',compact('invoices'));

        $id=Auth::id();
        /*
        $orders = Invoice_serial_number::query()
        ->where('user_id', '=', $id)
        ->orderByDesc('id')
        ->paginate(10);
        */
        $orders =Invoice::where('customers_id', '=', $id)->where('create_PDF', '>=', '2022-01-01 00:00:01')->orderByDesc('id')->paginate(10);
        ;

        return view('account/invoice', compact('orders'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'country' => 'required',
            'company_name' => 'required',
            'address_line1' => 'required',
            'address_line2' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'phone' => 'required',
            'bill_company_address_line1' => 'required',
            'bill_company_address_line2' => 'required',
            'bill_company_city' => 'required',
            'bill_company_state' => 'required',
            'bill_company_country' => 'required',
            'bill_company_zip' => 'required',
            'bill_company_phone' => 'required',
            'president' => 'required'
        ]);

        $id = $request->id;
        $users = User::find($id);


        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->company_name = $request->input('company_name');
        $users->userinformations->country_codes = $request->input('country_codes');

        $users->userinformations->consignee = $request->input('consignee');
        $users->userinformations->address_line1 = $request->input('address_line1');
        $users->userinformations->address_line2 = $request->input('address_line2');
        $users->userinformations->city = $request->input('city');
        $users->userinformations->state = $request->input('state');
        $users->country = $request->input('country');
        $users->userinformations->state = $request->input('state');
        $users->userinformations->zip = $request->input('zip');
        $users->userinformations->phone = $request->input('phone');
        $users->userinformations->person = $request->input('person');
        $users->userinformations->bill_company_address_line1 = $request->input('bill_company_address_line1');
        $users->userinformations->bill_company_address_line2 = $request->input('bill_company_address_line2');
        $users->userinformations->bill_company_city = $request->input('bill_company_city');
        $users->userinformations->bill_company_state = $request->input('bill_company_state');
        $users->userinformations->bill_company_country = $request->input('bill_company_country');
        $users->userinformations->bill_company_zip = $request->input('bill_company_zip');
        $users->userinformations->bill_company_phone = $request->input('bill_company_phone');
        $users->userinformations->president = $request->input('president');
        $users->userinformations->industry = $request->input('industry');
        $users->userinformations->business_items = $request->input('business_items');
        $users->userinformations->customer_name = $request->input('customer_name');
        $users->userinformations->fedex = $request->input('fedex');
        $users->userinformations->sns = $request->input('sns');
        $users->userinformations->trading_term = $request->input('trading_term');
        $users->userinformations->trading_history = $request->input('trading_history');
        $users->userinformations->trading_rank = $request->input('trading_rank');
        $users->userinformations->initial = $request->input('initial');
        $users->userinformations->website = $request->input('website');

        $users->save();
        $users->userinformations->save();
        return redirect(route('account.address'))->with('flash_message', '更新しました');
    }

    public function img_store(Request $request)
    {
        $order_no = $request->order_no;
        $user_id = $request->user_id;
        // 画像フォームでリクエストした画像を取得
        $img = $request->file('img_path');
        // 画像情報がセットされていれば、保存処理を実行
        if (isset($img)) {
            // storage > public > img配下に画像が保存される
            $path = $img->store('img', 'public');
            // store処理が実行できたらDBに保存処理を実行
            if ($path) {
                // DBに登録する処理
                Image::create([
                    'img_path' => $path,
                    'order_no' => $order_no,
                    'user_id'  => $user_id,
                    'about' => 'payment'
                ]);
            }
        }

        //　リダイレクト
        return redirect()->route('account.index');
    }
}
