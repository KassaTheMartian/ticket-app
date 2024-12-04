<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'email' => 'required|email|unique:customers,email|unique:users,email',
            'phone' => 'required|digits_between:10,11|unique:customers,phone|unique:users,phone',
        ]);

        Customer::create($request->all());
        return redirect()->route('customers.index')->with('success', 'Khách hàng đã được tạo.');
    }
    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.show', compact('customer'));
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email|unique:customers,email,' . $id,
            'phone' => 'required|digits_between:10,11|unique:users,phone|unique:customers,phone,' . $id,
        ]);
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());
        return redirect()->route('customers.index')->with('success', 'Khách hàng đã được cập nhật.');
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Khách hàng đã được xóa.');
    }
}
