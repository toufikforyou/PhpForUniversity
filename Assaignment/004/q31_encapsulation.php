<?php
class BankAccount {
    private $balance;

    public function __construct($initialBalance = 0) {
        $this->balance = $initialBalance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited: " . $amount . "<br>";
        } else {
            echo "Deposit amount must be positive.<br>";
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $this->balance >= $amount) {
            $this->balance -= $amount;
            echo "Withdrew: " . $amount . "<br>";
        } else {
            echo "Invalid withdrawal amount or insufficient funds.<br>";
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

$myAccount = new BankAccount(1000);

$myAccount->deposit(500);
$myAccount->withdraw(200);

echo "Current Balance: " . $myAccount->getBalance();
?>
