@extends('bank.bank_home')

@section('content')


    <div class="container">
        <h1>Account Statement</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Amount</th>
                <th>Type</th>
                <th>Details</th>
                <th>Balance</th>
            </tr>
            </thead>
            <tbody>
            @foreach($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->created_at->toDateString() }}</td>
                    <td>{{ $transaction->created_at->toTimeString() }}</td>
                    <td>{{ $transaction->amount }}</td>
                    <td>{{ $transaction->type }}</td>
                    <td>{{ $transaction->details }}</td>
                    <td>{{ $transaction->account->balance }}</td>
                </tr>
            @endforeach

            </tbody>

        </table>

        {{ $transactions->links() }}

    </div>


@endsection
