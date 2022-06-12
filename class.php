<?php
    class MathBase
    {
        public $number;
        public $base;
        public $leftbase;
        public $amal;


        public function save($number,$base,$leftbase):string{
            return base_convert($number,$base,$leftbase);
        }

        public function and_bin($n,$m)
        {
            return $n & $m;
        }
        public function or_bin($n,$m)
        {
            return $n | $m;
        }

        public function rig_bin($n,$m)
        {
            return $n >> $m;
        }
        public function left_bin($n,$m)
        {
            return $n << $m;
        }

        public function not_bin($n)
        {
            return ~$n;
        }
    }
?>