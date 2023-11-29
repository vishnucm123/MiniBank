@extends('bank.bank_home')

@section('content')

    <div class="container">
        <h1>Bank Transfer</h1>
        @if(session('message'))
            <div class="alert alert-info">{{ session('message') }}</div>
        @endif

        <form method="post" action="{{ route('transfer-store')}}">
            @csrf
            <div class="form-group">
                <label for="email">Recipient Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="form-group">
                <label for="amount">Amount to Transfer:</label>
                <input type="number" class="form-control" name="amount" required>
            </div>

            <button type="submit" class="btn btn-primary">Transfer</button>
        </form>
    </div>


@endsection
