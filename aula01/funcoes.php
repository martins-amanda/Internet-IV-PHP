<?php
//Função que soma 2 numeros e retorna o resultado
function fc_soma($_n1, $_n2)
{
    return $_n1 + $_n2;
}
//Função que subtrai 2 numeros e retorna o resultado
function fc_subtrai($_n1, $_n2)
{
    return $_n1 - $_n2;
}
//Função que multiplica 2 numeros e retorna o resultado
function fc_multiplica($_n1, $_n2)
{
    return $_n1 * $_n2;
}
//Função que divide 2 numeros e retorna o resultado
function fc_divide($_n1, $_n2)
{
    if ($_n2==0){
        return 0;
    }
    else
    return $_n1 / $_n2;
}
