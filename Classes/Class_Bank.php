<?php

class Bank {

    private $name = '';
    private $bank_type = '';
    private $admin_right = false;

    public function __construct($name, $bank_type) {
        $this->name = $name;
        $this->bank_type = $bank_type;
    }

    public function get_Name() {
        return $this->name;
    }

    public function get_bank_policy() {
        switch ($this->bank_type) {
            case 1:
                echo 'No admin overdraft withdrawal!';
            case 2:
                echo 'Take what you want we crazy';
            case 3:
                echo "We'll let faith decide if you can overdraft";
        }
    }

    public function get_Admin_right() {
        return $this->admin_right;
    }

    public function allow_users_to_admin() {
        if ($this->withdraw_as_admin($this->bank_type)) {
            echo 'allowed!';
        } else {
            echo 'denied!';
        }
    }

    private function withdraw_as_admin($permission) {
        switch ($permission) {
            case 1:
                return $this->admin_right = false;
            case 2:
                return $this->admin_right = true;
            case 3:
                return $this->admin_right == rand(0, 1);
        }
    }

}
