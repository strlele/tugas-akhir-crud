@extends('layout.main')

@section('section')
<section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Riwayat Pemesanan</h2>

        <div class="mt-6 sm:mt-8">
            @if ($orders->isEmpty())
                <p class="text-center text-gray-600">Anda belum melakukan pemesanan.</p>
            @else
                <div class="space-y-4">
                    @foreach ($orders as $order)
                        <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                            <p class="font-medium">Pesanan #{{ $order->id }}</p>
                            <p>Status: {{ $order->status }}</p>
                            <p>Total: Rp {{ number_format($order->total, 0, ',', '.') }}</p>

                            <div class="mt-4 space-y-2">
                                @foreach ($order->items as $item)
                                    <p>{{ $item->product->name }} - x{{ $item->quantity }} (Rp {{ number_format($item->price, 0, ',', '.') }})</p>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</section>
@endsection
