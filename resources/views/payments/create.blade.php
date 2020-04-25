@extends('layouts.app')

@section('content')
    <h1>Payment Details</h1>

    <h4 class="text-center"><strong>Grand Total: </strong>${{ $order->total }}</h4>

    <div class="text-center mb-3">
        <form
            class="d-inline"
            method="POST"
            action="{{ route('orders.payments.store', ['order' => $order->id]) }}"
        >
            @csrf
            <button class="btn btn-success" type="submit">Pay</button>
        </form>
    </div>
@endsection
