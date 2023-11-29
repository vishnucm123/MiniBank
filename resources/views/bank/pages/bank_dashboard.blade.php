@extends('bank.bank_home')

@section('content')

<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-12">
            <div
                class="alert alert-success alert-dismissible fade show"
                role="alert">

                @if (auth()->check())
                    <table>
                        <tr>
                            <th>Name</th>
                            <td><strong>Welcome</strong> You're successfully logged in. {{ auth()->user()->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ auth()->user()->email }}</td>
                        </tr>
                    </table>

                @endif





                <button
                    type="button"
                    class="close"
                    data-dismiss="alert"
                    aria-label="Close"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>

@endsection
