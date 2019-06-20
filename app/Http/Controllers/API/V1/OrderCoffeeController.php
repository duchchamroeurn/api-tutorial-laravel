<?php

namespace App\Http\Controllers\API\V1;

use App\Model\OrderCoffee;
use Illuminate\Http\Request;

class OrderCoffeeController extends APIBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order_coffee = OrderCoffee::all();
        return $this->responseSuccess('The orders retrieve success',$order_coffee, 200);

        // return response()->json($order_coffee);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order_coffee = new OrderCoffee();
        $order_coffee->name = $request->name;
        $order_coffee->email = $request->email;
        $order_coffee->type = $request->type;
        $order_coffee->size = $request->size;
        $order_coffee->save();

        return $this->responseSuccess('The order have been sent.', $order_coffee, 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\OrderCoffee  $orderCoffee
     * @return \Illuminate\Http\Response
     */
    public function show(OrderCoffee $orderCoffee)
    {
        //
        return $this->responseSuccess('The order found', $orderCoffee, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\OrderCoffee  $orderCoffee
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderCoffee $orderCoffee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\OrderCoffee  $orderCoffee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderCoffee $orderCoffee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\OrderCoffee  $orderCoffee
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderCoffee $orderCoffee)
    {
        //
    }
}
