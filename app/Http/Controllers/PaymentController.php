<?php

namespace App\Http\Controllers;

use App\Services\MidtransService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $midtransService;

    public function __construct(MidtransService $midtransService)
    {
        $this->midtransService = $midtransService;
    }

    public function createPayment(Request $request)
    {
        $validated = $request->validate([
            'order_id' => 'required|string',
            'gross_amount' => 'required|numeric',
            'customer_name' => 'required|string',
            'customer_email' => 'required|email',
            'customer_phone' => 'required|string',
        ]);

        $redirectUrl = $this->midtransService->createTransaction(
            $validated['order_id'],
            $validated['gross_amount'],
            $validated['customer_name'],
            $validated['customer_email'],
            $validated['customer_phone']
        );

        return redirect()->away($redirectUrl);
    }

    public function paymentSuccess(Request $request)
    {
        $phone = $request->input('phone');
        $message = "Terima kasih, pembayaran Anda telah berhasil. Order ID: {$request->input('order_id')}. Detail lebih lanjut akan dikirimkan via email.";

        $whatsappUrl = "https://wa.me/+6282138539895{$phone}?text=" . urlencode($message);

        return redirect()->away($whatsappUrl);
    }


    public function showPaymentDetails(Request $request)
    {
        return view('payment.details', [
            'order_id' => $request->input('order_id'),
            'gross_amount' => $request->input('gross_amount'),
            'customer_name' => $request->input('customer_name'),
            'customer_email' => $request->input('customer_email'),
            'customer_phone' => $request->input('customer_phone'),
        ]);
    }
}
