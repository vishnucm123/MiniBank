<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BankingController extends Controller
{
    public function depositIndex()
    {
        return view('bank.pages.deposit');
    }

    public function depositStore(Request $request)
    {

        $request->validate([
            'amount' => 'required|numeric|min:0.01',
        ]);

        $user = auth()->user()->load('account');

        if ($user->account) {
            $account = $user->account;
        } else {

            $account = new Account();
            $account->user_id = $user->id;
            $account->balance = 0;
            $account->save();
        }

        $initialDepositAmount = $request->input('amount');

        $account->balance += $initialDepositAmount;
        $account->save();

        Transaction::create([
            'account_id' => $account->id,
            'amount' => $request->input('amount'),
            'type' => 'deposit',
            'details' => 'Deposit',
        ]);

        $message = "Deposit successful!";
        return redirect(route('statement-index'))->with('message', $message);

    }

    public function withdrawIndex(){


        return view('bank.pages.withdraw');
    }

    public function withdrawStore(Request $request){

        $request->validate([
            'amount' => 'required|numeric|min:0.01',
        ]);

        $user = auth()->user()->load('account');

        if ($user->account) {
            $account = $user->account;
        } else {
            $account = new Account();
            $account->user_id = $user->id;
            $account->balance = 0;
            $account->save();
        }

        $withdrawalAmount = $request->input('amount');

        if ($withdrawalAmount > 0 && $account->balance >= $withdrawalAmount) {

            $account->balance -= $withdrawalAmount;
            $account->save();

            Transaction::create([
                'account_id' => $account->id,
                'amount' => $withdrawalAmount,
                'type' => 'withdrawal',
                'details' => 'Withdrawal',
            ]);

            $message = "Withdrawal successful!";
        } else {
            $message = "Insufficient balance or invalid amount for withdrawal.";
        }

        return redirect(route('statement-index'))->with('message', $message);

    }


    public function transferIndex(){

        return view('bank.pages.transfer');

    }

    public function transferStore(Request $request){

        $request->validate([
            'email' => 'required|email|exists:users,email',
            'amount' => 'required|numeric|min:0.01',
        ]);

        $sender = auth()->user()->load('account');
        $recipientEmail = $request->input('email');
        $amount = $request->input('amount');

// Check if the sender has an account
        if (!$sender->account) {
            // Create an account for the sender
            $senderAccount = new Account();
            $senderAccount->user_id = $sender->id;
            $senderAccount->balance = 0; // Initial balance
            $senderAccount->save();
            $sender->account()->associate($senderAccount);
        }

// Check if the recipient exists
        $recipient = User::where('email', $recipientEmail)->first();

        if ($recipient) {
            $recipientAccount = $recipient->account;

            // Check if the sender has sufficient balance
            if ($amount > 0 && $sender->account->balance >= $amount) {
                // Proceed with the transfer
                $sender->account->balance -= $amount;
                $recipientAccount->balance += $amount;

                $sender->account->save();
                $recipientAccount->save();

                // Record the transaction for sender
                Transaction::create([
                    'account_id' => $sender->account->id,
                    'amount' => -$amount,
                    'type' => 'transfer',
                    'details' => 'Transfer to ' . $recipient->email,
                ]);

                // Record the transaction for recipient
                Transaction::create([
                    'account_id' => $recipientAccount->id,
                    'amount' => $amount,
                    'type' => 'transfer',
                    'details' => 'Transfer from ' . $sender->email,
                ]);

                $message = "Transfer successful!";
            } else {
                $message = "Insufficient balance or invalid amount for transfer.";
            }
        } else {
            $message = "Recipient with email '$recipientEmail' not found.";
        }

        return redirect(route('statement-index'))->with('message', $message);
    }


    public function statementIndex(){

        $user = auth()->user();
        $account = $user->account;
        $perPage = 10;

        $transactions = Transaction::where('account_id', $account->id)
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);

        return view('bank.pages.statement', compact('transactions'));

    }


}
