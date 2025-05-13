@extends('layouts.user-dashboard')

@section('title', 'Панель користувача')

@section('content')
<section class="container my-5">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-left mb-3">Ласкаво просимо, {{ $user->name }}! Ми дуже раді бачити вас серед нас!</h3>
            <div class="card shadow-sm">
                <div class="card-body">
                    @foreach ($cards as $card)
                        <div class="mb-4">
                            <h4 class="card-title">Дані картки</h4>
                            <p><strong>Номер карти:</strong> {{ $card->card_number }}</p>
                            <p><strong>Баланс карти:</strong> {{ $card->balance }} грн</p>
                            <div class="my-3">
                                <h5>Поїздки:</h5>
                                @forelse($card->trips as $trip)
                                    <p>Поїздка: {{ $trip->ticket_types->name }} | {{ $trip->ticket_types->price }} грн | {{ $trip->transports->transport_type }} | {{ $trip->transports->transport_number }} | {{ $trip->transports->city->name }} | {{ $trip->created_at }}</p>
                                @empty
                                    <p class="text-muted">Дані відсутні</p>
                                @endforelse
                            </div>
                            <div class="my-3">
                                <h5>Транзакції поповнення:</h5>
                                @forelse ($card->transactions->where('transactions_type', 'replenishment') as $transaction)
                                    <p>+ {{ $transaction->sum }} грн | {{ $transaction->created_at }}</p>
                                @empty
                                    <p class="text-muted">Дані відсутні</p>
                                @endforelse
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="mt-4">
                {{ $cards->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</section>
@endsection
