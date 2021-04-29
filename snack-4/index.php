<?php
  $alunni = [
    [
      'nome' => 'Alessandro',
      'cognome' => 'Di Crescenzo',
      [
        6,
        9,
        7,
      ],
    ],
    [
      'nome' => 'Daniele',
      'cognome' => 'Cinti',
      [
        3,
        6,
        2,
      ],
    ],
    [
      'nome' => 'Luca',
      'cognome' => 'Santillo',
      [
        9,
        7,
        10,
      ],
    ],
  ];


  for ($i=0; $i < count($alunni); $i++) {
    $somma = array_sum($alunni[$i][0]);
    $media = $somma / count($alunni[$i][0]);
    $media = round ( $media , $precision = 1 , $mode = PHP_ROUND_HALF_UP );
    $alunni[$i]['media'] = $media; ?>

    <span><?=$alunni[$i]['nome']?></span>
    <span><?=$alunni[$i]['cognome']?></span> ||
    <span><?=$alunni[$i]['media']?></span>
    <br>
<?php
  }




?>
