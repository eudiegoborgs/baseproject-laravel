<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function removeAccentuation($texto)
{
    $conversao = array('á' => 'a', 'à' => 'a', 'ã' => 'a', 'â' => 'a', 'é' => 'e',
        'ê' => 'e', 'í' => 'i', 'ï' => 'i', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', "ö" => "o",
        'ú' => 'u', 'ü' => 'u', 'ç' => 'c', 'ñ' => 'n', 'Á' => 'A', 'À' => 'A', 'Ã' => 'A',
        'Â' => 'A', 'É' => 'E', 'Ê' => 'E', 'Í' => 'I', 'Ï' => 'I', "Ö" => "O", 'Ó' => 'O',
        'Ô' => 'O', 'Õ' => 'O', 'Ú' => 'U', 'Ü' => 'U', 'Ç' => 'C', 'Ñ' => 'N', "'" => "");
    return strtr($texto, $conversao);
}

function makeUrlString($string)
{
    return str_replace(array("-–--","-–-","-–"), '-', str_replace(array(" ","(", ")", "'","/","----","---","--"), "-", Str::lower(trim(retira_acentos($string)))));
}

function removeDoubleSpace($palavra)
{
    while (strpos($palavra,'  ') !== false){
        $palavra = str_replace('  ', ' ', $palavra);
    }
    return $palavra;
}

function clearStringUrl($palavra)
{
    $palavra = strtolower($palavra);
    $palavra = str_replace("-", " ", $palavra);
    $palavra = str_replace("–", " ", $palavra);
    $palavra = str_replace(",", " ", $palavra);
    $palavra = str_replace(":", " ", $palavra);
    $palavra = str_replace(".", " ", $palavra);
    $palavra = str_replace("/", " ", $palavra);
    $palavra = str_replace("(", " ", $palavra);
    $palavra = str_replace(")", " ", $palavra);
    $palavra = trim($palavra);
    $palavra = str_replace("  ", " ", $palavra);
    $palavra = removeDoubleSpace($palavra);
    $palavra = str_replace(" ", "-", $palavra);
    $palavra = removeAccentuation($palavra);
    $palavra = preg_replace('/[^A-Za-z0-9\ -]/', '', $palavra);
    return makeUrlString(strtolower($palavra));
}

function formatDateToView($data)
{
    $ret = "00/00/0000";
    if (isset($data) && $data != "0000-00-00") {
        $itens = explode("/",$data);
        if (count($itens) > 2 && strlen($itens[0]) == 2 && strlen($itens[1]) == 2 && strlen($itens[2]) >= 4){
            $ret = substr($data, 0, 10);
        } else {
            $ret = date("d/m/Y", strtotime($data));
        }
    }
    return $ret;
}
function formatDateAndHourToView($data)
{
    $ret = "00/00/0000 00:00";
    if (isset($data) && $data != '' && substr($data,0,10) != "0000-00-00") {
        $ret = date("d/m/Y H:i", strtotime($data));
    }
    return $ret;
}
function formatDateToDB($data)
{
    $ret = '0000-00-00';
    if (substr_count($data, '/') > 0){
        $itens = explode("/",$data);
        if (count($itens) >= 3){
            $ret = substr($itens[2],0,4).'-'.$itens[1].'-'.$itens[0];
        }
    }
    return $ret;
}
function formatDateAndHourToDB($data)
{
    return formatDateToDB($data).substr($data,10);
}

function nameMonthInPtBR($mes = '')
{
    if($mes == '')  $mes = date('m');
    switch ($mes) {
        case 1:
            return  'Janeiro';
        case 2:
            return 'Fevereiro';
        case 3:
            return 'Março';
        case 4:
            return 'Abril';
        case 5:
            return 'Maio';
        case 6:
            return 'Junho';
        case 7:
            return 'Julho';
        case 8:
            return 'Agosto';
        case 9:
            return 'Setembro';
        case 10:
            return 'Outubro';
        case 11;
            return 'Novembro';
        case 12:
            return 'Dezembro';
    }
}

function lastDayofMonth(int $month, int $year = null)
{
    if ($year === null) {
        $year = date("Y");
    }
    return date("t", mktime(0,0,0,$month,'01',$ano));
}

function getAmountToPercent($percent, $total)
{
	return ($percent / 100) * $total;
}

function percent($amount, $total){
    $ret = 0;
    if($total > 0){
        $ret = ($amount/$total) * 100;
    }
    return number_format($ret, 1, '.', '') . " %";
}

function diffBetween2DatesInMonths($startDate, $endDate)
{
    $startDate = new DateTime($startDate);
    $endDate = new DateTime($endDate);
    $diff = $startDate->diff($endDate);
    $diffYears = $diff->format('%Y') * 12;
    $diffMonths = $diff->format('%m');
    return $diffYears+$diffMonths;
}

function getAge($birth)
{
    $time = strtotime($birth);
    $years = date('Y') - date('Y', $time);
    if ((date('n', $time) <= date('n'))) {
        $years++;
    }
    return $years;
}

function formatHour($hour)
{
    $ret = "00:00";
    if ($hour) {
        $items = explode(":", $hour);
        $ret = sprintf("%02s:%02s", $items[0], $items[1]);
    }
    return $ret;
}

function formatMoneyInBRReal($number)
{
    return number_format((float)$number, 2, ',', '.');
}

function formatMoneyInDolar($number)
{
    return ((float)str_replace(",", ".", str_replace(".", "", $number)));
}

function depura($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}

function mask($val, $mask)
{
    $maskared = '';
    $k = 0;
    for ($i = 0; $i <= strlen($mask) - 1; $i++) {
        if ($mask[$i] == '#') {
            if (isset($val[$k]))
                $maskared .= $val[$k++];
        }
        else {
            if (isset($mask[$i]))
                $maskared .= $mask[$i];
        }
    }
    return $maskared;
}

function formatCPF($cpf)
{
    return mask(str_replace('.','',str_replace('-','',$cpf)),'###.###.###-##');
}

function formatCNPJ($cnpj)
{
    return mask(str_replace('.','',str_replace('-','',str_replace('/','',$cnpj))),'##.###.###/####-##');
}

function geraLog($txt){
    global $nome_arquivo_log;
    if ($nome_arquivo_log == ''){
        $nome_arquivo_log = 'log_'.date('YmdHis').'.txt';
    }
    file_put_contents($nome_arquivo_log,var_export($txt, true));
}

function cpfIdValid($cpf = null) {
    // Verifica se um número foi informado
    if(empty($cpf)) {
        return false;
    }
    // Elimina possivel mascara
    $cpf = str_replace(array('.','-'), '', $cpf);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
    // Verifica se o numero de digitos informados é igual a 11
    if (strlen($cpf) != 11) {
        return false;
    }
    // Verifica se nenhuma das sequências invalidas abaixo
    // foi digitada. Caso afirmativo, retorna falso
    else if ($cpf == '00000000000' ||
        $cpf == '11111111111' ||
        $cpf == '22222222222' ||
        $cpf == '33333333333' ||
        $cpf == '44444444444' ||
        $cpf == '55555555555' ||
        $cpf == '66666666666' ||
        $cpf == '77777777777' ||
        $cpf == '88888888888' ||
        $cpf == '99999999999') {
        return false;
     // Calcula os digitos verificadores para verificar se o
     // CPF é válido
     } else {
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
        return true;
    }
}

// Cria uma função que retorna o timestamp de uma data no formato DD/MM/AAAA
function geraTimestamp($data) {
    $partes = '';
    if (substr_count($data,'/') > 0){
        $partes = explode('/', $data);
        return mktime(0, 0, 0, $partes[1], $partes[0], $partes[2]);
    } else if (substr_count($data, '-') > 0){
        $partes = explode('-', $data);
        return mktime(0, 0, 0, $partes[1], $partes[2], $partes[0]);
    }
}

// retorna a quantidade de dias entre 2 datas as datas devem ser informadas no formato d/m/Y
function diffBetween2Dates($startDate = '', $endDate = '')
{
    if ($startDate == '' || $endDate == ''){
        return false;
    }
    // Usa a função criada e pega o timestamp das duas datas:
    $startTime = geraTimestamp($startDate);
    $endTime = geraTimestamp($endDate);
    // Calcula a diferença de segundos entre as duas datas:
    $diff = $startTime - $endTime; // 19522800 segundos
    // Calcula a diferença de dias
    return (int)floor( $diff / (60 * 60 * 24)); // 225 dias
}