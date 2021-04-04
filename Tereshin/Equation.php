<?php

namespace Tereshin;

Class Equation
{
    public function li_solve($a, $b)
    {

        if ($a == 0) {
            throw new TereshinException("Ошибка: уравнения не существует.");
        }
        MyLog::log("Определено, что это линейное уравнение");
        return $this->X = array(-($b / $a));
    }

    protected $X;
}

?>