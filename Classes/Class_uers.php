<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User {

    private $amount = 0;
    private $name = '';
    private $inBank = '';

    public function __construct($name, $start_amount) {
        $this->name = $name;
        $this->amount = $start_amount;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getName() {
        return $this->name;
    }

    public function inBank() {
        return $this->inBank;
    }

    public function deposit($deposit) {
        if ($deposit > 0) {
            $this->amount += $deposit;
        } else {
            throw new Exception("Deposit has to be positive");
        }
    }

    public function withdraw($withdrawal, $is_admin = false) {
        if (
                (
                $this->amount > 0 && $this->amount >= $withdrawal
                ) || $is_admin
        ) {
            $this->amount -= $withdrawal;
        } else {
            throw new Exception("There is no money, 😭");
        }
    }

}
