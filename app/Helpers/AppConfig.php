<?php 

use App\Models\Admin;

if (! function_exists('short_description')) {
    function short_description($str) {
            $description = substr($str, 0, 10);
            return $description;
    }
}




if(!function_exists('get_app_setting')){
    function get_app_setting($setting_type){
        $setting = App\Models\AppSetting::with(['siteLogo','siteFavicon'])->latest()->first();
        if($setting[$setting_type]){

            if($setting_type == 'logo' && $setting->siteLogo){
                return $setting->siteLogo->file;
            }
            if($setting_type == 'favicon' && $setting->siteFavicon){
                return $setting->siteFavicon->file;
            }

            return $setting[$setting_type];
        }
        
    }
}

if (!function_exists('getAdmin')) {
    function getAdmin($get_detail) {
        $admin = \Auth::guard('admin')->user();
        if (!$admin) {
            return "No admin is currently logged in";
        }
        if (!in_array($get_detail, ['password', 'role', 'role_id'])) {
            if (isset($admin[$get_detail])) {
                return $admin[$get_detail];
            }
        }
        if ($get_detail == 'role') {
            $admin = $admin->load('role'); 
            if ($admin->role) {
                return $admin->role->display_name;
            }
            return "Role not found";
        }

        if ($get_detail == 'role_id') {
            return $admin->role_id ?? "Role ID not found";
        }

        
    }
}

if (!function_exists('status')) {

    function status($id){
        $weight = App\Models\Status::where(['id'=> $id])->first();
        if($weight){
            return $weight->status_badge;
        }
        return null;
    }
}


if (!function_exists('userName')) {
    function userName($id){
        $client = Admin::find($id);
        $id = $client->id .'1a';

        if($client->role_id == 2){
            $nameClass = '';
            $companyClass = 'text-success';
        }
        elseif($client->role_id == 3){
            $nameClass = '';
            $companyClass = 'text-secondary';
        }
        elseif($client->role_id == 4){
            $nameClass = '';
            $companyClass = 'text-success';
        }
        elseif($client->role_id == 5){
            $nameClass = '';
            $companyClass = 'text-dark';
        }
        elseif($client->role_id == 6){
            $nameClass = '';
            $companyClass = 'text-danger';
        }
      
        else{
            $nameClass = '';
            $companyClass = 'text-muted';
        }

        return '<div class="d-flex align-items-center">
                <div class="flex-grow-1">
                    <div>
                        <h5 class="mb-1 fs-14 '.$nameClass.'">'.$client->first_name .' '. $client->last_name .'</h5>
                        <p class="mb-0 fs-13 '.$companyClass.'">'. $client->company_name .'</p>
                    </div>
                </div>
            </div>';

    //     if($client->media){
    //         return '<div class="d-flex align-items-center">
    //             <div class="avatar-group-item material-shadow">
    //                 <div class="flex-shrink-0 avatar-sm me-3 bg-light rounded-circle" style="position:relative; overflow: hidden;">
    //                     '. getFile($client->media->file, $id) .'
    //                 </div>
    //             </div>
    //             <div class="flex-grow-1">
    //                 <div>
    //                     <h5 class="mb-1 fs-14 '.$nameClass.'">'.$client->first_name .' '. $client->last_name .'</h5>
    //                     <p class="mb-0 fs-13 '.$companyClass.'">'. $client->company_name .'</p>
    //                 </div>
    //             </div>
    //         </div>';
    //     } else{
    //         return '<div class="d-flex align-items-center">
    //             <div class="flex-shrink-0 rounded-circle bg-light '.$nameClass.' material-shadow avatar-sm me-3" style="position:relative; overflow: hidden;">
    //                 <span style="letter-spacing: 1px;position: absolute; top: 0; bottom: 0; left: 0; right: 0; margin: auto; display: inline-table;">'. Str::upper(Str::limit($client->first_name, 1,'').Str::limit($client->last_name, 1,'')) .'</span>
    //             </div>
    //             <div class="flex-grow-1">
    //                 <div>
    //                     <h5 class="mb-1 fs-14 '.$nameClass.'">'.$client->first_name .' '. $client->last_name .'</h5>
    //                     <p class="mb-0 fs-13 '.$companyClass.'">'. $client->company_name .'</p>
    //                 </div>
    //             </div>
    //         </div>';
    //     }
     }

    if (!function_exists('getFile')) {
        function getFile($file, $id) {
            if ($file > 0){
                $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
    
                if (in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif'])) {
                    return "<a style='line-height: 40px; width: 46px; display: block; padding: 2px;display: flex; justify-content: center; align-items: center; height: 100%;' class='glightbox' data-gallery='".$id."' href='".asset($file)."'>
                                <img class='img-fluid' src='".asset($file)."'/>
                            </a>";
                } elseif ($fileExtension == 'pdf') {
                    return "<a class='glightbox' data-gallery='".$id."' href='".asset($file)."'>
                                <img class='img-fluid' src='".asset('icons/pdf.png')."'/>
                            </a>";
                }
            }
            return "N/A";
        }
    }

    if (!function_exists('productLeadgerIn')) {
        function productLeadgerIn($type, $quantity) {
        }
    }

    if (!function_exists('mtToKg')) {    
        function mtToKg($metricTon){
            $kilograms = $metricTon * 1000;
            return $kilograms;
        }
    }

    if (!function_exists('kgToMt')) {
        function kgToMt($kilograms){
            $metricTons = $kilograms / 1000;
            return $metricTons;
        }
    }
}


if (!function_exists('numberToWords')) {
    function numberToWords($number) {
        $no = floor($number);
        $point = round($number - $no, 2) * 100;
        $hundred = null;
        $digits_1 = strlen($no);
        $i = 0;
        $str = array();
        $words = array('0' => '', '1' => 'One', '2' => 'Two',
                       '3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
                       '7' => 'Seven', '8' => 'Eight', '9' => 'Nine',
                       '10' => 'Ten', '11' => 'Eleven', '12' => 'Twelve',
                       '13' => 'Thirteen', '14' => 'Fourteen',
                       '15' => 'Fifteen', '16' => 'Sixteen', '17' => 'Seventeen',
                       '18' => 'Eighteen', '19' => 'Nineteen', '20' => 'Twenty',
                       '30' => 'Thirty', '40' => 'Forty', '50' => 'Fifty',
                       '60' => 'Sixty', '70' => 'Seventy',
                       '80' => 'Eighty', '90' => 'Ninety');
        $digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
        while ($i < $digits_1) {
            $divider = ($i == 2) ? 10 : 100;
            $number = floor($no % $divider);
            $no = floor($no / $divider);
            $i += ($divider == 10) ? 1 : 2;
            if ($number) {
                $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
                $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
                $str [] = ($number < 21) ? $words[$number] .
                    " " . $digits[$counter] . $plural . " " . $hundred
                    :
                    $words[floor($number / 10) * 10]
                    . " " . $words[$number % 10] . " " . $digits[$counter] . $plural . " " . $hundred;
            } else $str[] = null;
        }
        $str = array_reverse($str);
        $result = implode('', $str);
        $points = ($point) ? " and " . $words[$point / 10] . " " .
                  $words[$point = $point % 10] . " Paise" : '';
        return $result . "Rupees" . $points;
    }
}

