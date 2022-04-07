<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<?php
$cen_sura = $_GET["cen_sura"];
$cafe="Na' tazzulella e' cafè e mai niente cè fanno sapè
nui cè puzzammo e famme, o sanno tutte quante
e invece e c'aiutà c'abboffano e' cafè
Na' tazzulella e' cafè ca sigaretta a coppa pe nun verè
che stanno chine e sbaglie, fanno sulo mbruoglie
s'allisciano se vattono se pigliano o' cafè
E nui passammo e uaie e nun puttimmo suppurtà
e chiste invece e rà na mano s'allisciano se vattono se
magniano a città
Na' tazzulella e' cafè acconcia a vocca a chi nun po'sapè
e nui tirammo annanz che rulore e' panze
e invece e c'aiutà c'abboffano e' cafè
Na' tazzulella e' cafè ca' sigaretta a coppa pè nun verè
s'aizano e' palazze fanno cose e' pazze ci girano
c'avotano ci iengono e' tasse..";

#per censurare bisogna inserire nell url (?cen_sura=tazzulella)

$cafe_censura="Na' tazzulella e' cafè e mai niente cè fanno sapè
nui cè puzzammo e famme, o sanno tutte quante
e invece e c'aiutà c'abboffano e' cafè
Na' tazzulella e' cafè ca sigaretta a coppa pe nun verè
che stanno chine e sbaglie, fanno sulo mbruoglie
s'allisciano se vattono se pigliano o' cafè
E nui passammo e uaie e nun puttimmo suppurtà
e chiste invece e rà na mano s'allisciano se vattono se
magniano a città
Na' tazzulella e' cafè acconcia a vocca a chi nun po'sapè
e nui tirammo annanz che rulore e' panze
e invece e c'aiutà c'abboffano e' cafè
Na' tazzulella e' cafè ca' sigaretta a coppa pè nun verè
s'aizano e' palazze fanno cose e' pazze ci girano
c'avotano ci iengono e' tasse..";
$text_change= str_replace($cen_sura, '***', $cafe_censura);
?>

<stron>Questo paragrafo contiene:<?=strlen($cafe); ?> caratteri</stron>
<pre><?=  $cafe ?></pre>
<hr>
<pre><?=  $text_change ?></pre>


</body>
</html>
