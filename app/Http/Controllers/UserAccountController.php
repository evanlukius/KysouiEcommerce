<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class UserAccountController extends Controller
{
    public function addresses()
    {
        $user = auth()->user();
        $addresses = Address::where('user_id', $user->id)->get();

        return view('user.addresses.index', compact('addresses'));
    }

    public function editAddress($address_id)
    {
        $address = Address::findOrFail($address_id);

        return view('user.addresses.edit', compact('address'));
    }
}
