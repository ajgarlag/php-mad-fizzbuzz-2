<?php

namespace PHPMad;

class Foo
{

    public function run()
    {
        $data = array();
        for ($i = 1; $i <= 100; $i++) {
            $data[] = $this->generateNumber($i);
        }
        return $data;
    }

    private function generateNumber($pos)
    {
        if ($pos % 3 == 0 && $pos % 5 == 0) {
            return 'FizzBuzz';
        } elseif ($pos % 3 == 0) {
            return 'Fizz';
        } elseif ($pos % 5 == 0) {
            return 'Buzz';
        }

        return $pos;
    }

}
