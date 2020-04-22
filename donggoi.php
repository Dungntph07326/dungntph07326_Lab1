<?php
class BankAccount {
    public $email;
    public $pass;
    private $_balance;

    public function setBalance($balance) {
        $this->_balance = $balance;
    }

    public function getBalance() {
        return $this->_balance;
    }
}

$peter = new BankAccount;
$peter->email = 'dungntph07326@.edu.vn';
$peter->setBalance(10000000);
echo $peter->getBalance();


?>