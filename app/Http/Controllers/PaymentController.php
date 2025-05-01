<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();

        return view('Payments.index', ['payments' => $payments]);
    }

    public function create()
    {
        return view('Payments.create');
    }

    public function store(StorePaymentRequest $request)
    {
        $validatedData = $request->validated();

        Payment::create($validatedData);

        return redirect()->route('payments.index');
    }

    public function show(string $id)
    {
        abort(404); // Returning 404 as the show view was not built
    }

    public function edit(string $id)
    {
        $payment = Payment::findOrFail($id);

        return view('Payments.edit', ['payment' => $payment]);
    }

    public function update(UpdatePaymentRequest $request, string $id)
    {
        $validatedData = $request->validated();

        $payment = Payment::findOrFail($id);

        $payment->update($validatedData);

        return redirect()->route('payments.index');
    }

    public function destroy(string $id)
    {
        $payment = Payment::findOrFail($id);

        $payment->delete();

        return redirect()->route('payments.index');
    }
}
