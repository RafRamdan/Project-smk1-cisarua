<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')) {
            $customers = Customer::where('name_customer','like','%'.$request->search.'%')
            ->orwhere('email','like','%'.$request->search.'%')
            ->orwhere('phone','like','%'.$request->search.'%')
            ->orwhere('address','like','%'.$request->search.'%')->paginate(10);
           }else{
            $customers = Customer::paginate(10);
           }
        return view('customers.index',
        compact(['customers']));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_customer' => 'required|min:5',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);
        Customer::create([
            'name_customer'=> $request->name_customer,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'address'=> $request->address,
        ]);

        return redirect('customers')->with('success','Data customer berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customers.edit',compact(['customer']));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name_customer' => 'required|min:5',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);
        $customer = Customer::find($id);
        $customer->update([
            'name_customer'=> $request->name_customer,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'address'=> $request->address,
        ]);

        return redirect('customers')->with('success','Data customer berhasil diubah.');
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('customers')->with('success','Data customer berhasil dihapus');
    }
}
