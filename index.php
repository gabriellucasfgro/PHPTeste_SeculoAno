<?php

function seculoAno(int $ano) {
    return ceil($ano/100);
}

echo seculoAno(1905);

?>