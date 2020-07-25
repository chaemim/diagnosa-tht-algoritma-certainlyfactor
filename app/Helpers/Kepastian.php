<?php

function kepastian_cf($value)
{
    if ((-1 <= $value) && (-0.900 >= $value)) {
        return 'TIDAK PASTI';
    }
    elseif ((-0.899 <= $value) && (-0.700 >= $value)) {
        return 'HAMPIR TIDAK PASTI';
    }
    elseif ((-0.699 <= $value) && (-0.500 >= $value)) {
        return 'KEMUNGKINAN TIDAK';
    }
    elseif ((-0.499 <= $value) && (-0.300 >= $value)) {
        return 'MUNGKIN TIDAK';
    }
    elseif ((-0.299 <= $value) && (0.299 >= $value)) {
        return 'TIDAK TAHU';
    }
    elseif ((0.300 <= $value) && (0.499 >= $value)) {
        return 'MUNGKIN';
    }
    elseif ((0.500 <= $value) && (0.699 >= $value)) {
        return 'KEMUNGKINAN BESAR';
    }
    elseif ((0.700 <= $value) && (0.899 >= $value)) {
        return 'HAMPIR PASTI';
    }
    elseif ((0.900 <= $value) && (1 >= $value)) {
        return 'PASTI';
    }
    else{
        return 'UNKNOWN';
    }
}