

@extends('layouts.app')

@section('title', 'Transaction History')

@section('contents')
    <h1>Transaction History</h1>
    <table>
        <thead>
        <tr>
            <th>Description</th>
            <th>Amount</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($transactions as $transaction)
            <tr>
                <td>{{ $transaction->description }}</td>
                <td>{{ $transaction->amount }}</td>
                <td>{{ $transaction->created_at->format('Y-m-d H:i:s') }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
