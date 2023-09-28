<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;

class CustomerOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $customer_order;
    public function __construct(CustomerOrder $customerOrder)
    {
        $this->customer_order = $customerOrder;
    }
    public function index()
    {
        $customerOrder = $this->customer_order->all();
        return view('customerOrder.index',compact('customerOrder'))
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customerOrder.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomerOrderRequest $request)
    {
        $customerOrder = $this->customer_order;
        $customerOrder->create($request->all());
        return view('customerOrder.view',compact('customerOrder'))
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customerOrder = $this->customer_order->find($id);
        return view('customerOrder.view',compact('customerOrder'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customerOrder = $this->customer_order->find($id);
        return view('customerOrder.view',compact('customerOrder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CustomerOrderRequest $request, string $id)
    {
        $customerOrder = $this->customer_order->find($id);
        $customer_order->update($request->all());
        return redirect()->route('customer_order.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customerOrder = $this->customer_order->find($id);
        $customerOrder->delete();
        return redirect()->route('customer_order.index');
    }
}
