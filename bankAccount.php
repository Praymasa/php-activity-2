<?php

class BankAccount {
    private $accountNumber;
    private $balance;
    
    public function __construct($accountNumber, $initialBalance = 0) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }
    
    public function getAccountNumber() {
        return $this->accountNumber;
    }
    
    public function getBalance() {
        return $this->balance;
    }
    
    public function deposit($amount) {
        if ($amount <= 0) {
            return false;
        }
        $this->balance += $amount;
        return true;
    }
    
    public function withdraw($amount) {
        if ($amount <= 0 || $amount > $this->balance) {
            return false;
        }
        $this->balance -= $amount;
        return true;
    }
}

$account = new BankAccount("1234567890", 1000);
echo "Account Number: " . $account->getAccountNumber() . "<br>";
echo "Initial Balance: $" . $account->getBalance() . "<br>";

$account->deposit(1500);
echo "Balance after deposit: $" . $account->getBalance() . "<br>";

// $account->withdraw(0);
// echo "Balance after withdrawal: $" . $account->getBalance();
