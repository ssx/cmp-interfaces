<?php

namespace Banking\Interfaces;

interface BankInterface {

    public function __construct($balance);

    public function deposit($pence) : int;

    public function withdraw($pence) : int;

    public function getInterestRate();

}