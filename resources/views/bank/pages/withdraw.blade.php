@extends('bank.bank_home')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Withdraw Money</h3>
                    </div>
                    <div class="card-body">
                        @if(session('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                        @endif

                            <form method="post" action="{{route('bank-withdraw')}}">
                            @csrf
                            <div class="form-group">
                                <label for="amount">Enter Amount to Withdraw:</label>
                                <input type="number" class="form-control" id="amount" name="amount" required>
                            </div>
                                <button type="submit" class="btn btn-primary">Withdraw</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
