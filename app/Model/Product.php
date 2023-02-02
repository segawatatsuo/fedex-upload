<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_code',
        'jan_code',
        'asin',
        'category',
        'group',
        'color',
        'color_map',
        'capacity',
        'title_header',
        'product_name',
        'price',
        'packaging_height',
        'packaging_vertical',
        'packaging_width',
        'packaging_weight',
        'unit_of_length',
        'units',
        'unit_type',
        'stock',
        'deadline',
        'depiction1',
        'depiction2',
        'img1',
        'img2',
        'img3',
        'img4',
        'img5',
        'group_j',
        'color_j',
        'product_name_j',
        'sort_order',
        'brand_name',
        'spec',
        'unit',
        'number_of_pieces',
        'ean_code',
        'sku_code',
        'manufacturing_delivery_date',
        'stock_delivery_date',
        'price_regular',
        'price_fedex',
        'price_air_1',
        'price_air_2',
        'price_ship',
        'sds_file_upload',
        'explosives_un',
        'explosives_class',
        'fedex_commercial_invoice_text',
        'fedex_commercial_invoice_hs_code',
        'fedex_commercial_invoice_unit_value',
        'dangerous_goods_declaration_sipping_name',
        'dangerous_goods_declaration_box_type',
        'dangerous_goods_declaration_packing',
        'product_size_w',
        'product_size_d',
        'product_size_h',
        'product_weight',
        'input_number',
        'carton_size_w',
        'carton_size_d',
        'carton_size_h',
        'carton_weight_net',
        'carton_weight_gross',
        'carton_weight_m3',
    ];
    //保存したいカラム名が複数の場合


    //1対多リレーション
    //親側に子の名前のメソッドを作る
    public function Userinformations()
    {
        return $this->hasOne('App\Model\Userinformation');
    }

    public function Order_details()
    {
        return $this->belongsTo("App\Model\Order_detail", 'product_code');
    }
}
