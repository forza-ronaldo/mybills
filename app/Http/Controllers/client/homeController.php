<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\question;
use App\User;
use Illuminate\Http\Request;
use App\Events\pop;
use App\Events\addNewQuestion;

class homeController extends Controller
{
    public  function  index()
    {
        $users = User::Where('group_id', '=', '2')->count();

        $count_telecome = file_get_contents(Billing_CORPORATION_DOMAIN_NAME . 'api/archivedTelecomeBill/count?searsh=all');
        $count_telecome = json_decode($count_telecome, true);
        $count_telecome = $count_telecome['count'];

        $count_water = file_get_contents(Billing_CORPORATION_DOMAIN_NAME . 'api/archivedWaterBill/count?searsh=all');
        $count_water = json_decode($count_water, true);
        $count_water = $count_water['count'];

        $count_electricty = file_get_contents(Billing_CORPORATION_DOMAIN_NAME . 'api/archivedElectricityBill/count?searsh=all');
        $count_electricty = json_decode($count_electricty, true);
        $count_electricty = $count_electricty['count'];

        $count_total = $count_electricty + $count_water + $count_telecome;
        return view('client.client', compact('users', 'count_total'));
    } //end index
    public function telecome(Request $request)
    {
        /*$request->validate([
            'phone_number' => 'required|numeric'
        ]);*/
        $phone_number = $request->phone_number;
        $data = file_get_contents(Billing_CORPORATION_DOMAIN_NAME . 'api/newTelecomeBill?searsh=' . $phone_number);
        $data = json_decode($data);
        $bills = $data->data;

        return view('client.bill.yourBills', compact('bills'));
    } //end telecome
    public function water(Request $request)
    {
        $counter_number = $request->counter_number;
        $data = file_get_contents(Billing_CORPORATION_DOMAIN_NAME . 'api/newWaterBill?searsh=' . $counter_number);
        $data = json_decode($data);
        $bills = $data->data;

        return view('client.bill.yourBills', compact('bills'));
    } //end water
    public function electricity(Request $request)
    {
        $hour_number = $request->hour_number;
        $data = file_get_contents(Billing_CORPORATION_DOMAIN_NAME . 'api/newElectricityBill?searsh=' . $hour_number);
        $data = json_decode($data);
        $bills = $data->data;

        return view('client.bill.yourBills', compact('bills'));
    } //end electricity
}
