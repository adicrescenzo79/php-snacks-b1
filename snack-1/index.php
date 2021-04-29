<?php
$giornata = [
  [
    'host' => 'Civitavecchia',
    'guest' =>'Ladispoli',
    'hPoints' => 5,
    'gpoints' => 3
  ],
  [
    'host' => 'Roma',
    'guest' => 'Bracciano',
    'hPoints' => 4,
    'gpoints' => 8
  ],
  [
    'host' => 'Cerveteri',
    'guest' => 'Tarquinia',
    'hPoints' => 10,
    'gpoints' => 6
  ],
  [
    'host' => 'Santa Marinella',
    'guest' => 'Ostia',
    'hPoints' => 3,
    'gpoints' => 3
  ]
];

for ($i=0; $i < count($giornata); $i++) { ?>

  <div class="">
    <?=$giornata[$i]['host']?> - <?=$giornata[$i]['guest']?> | <?=$giornata[$i]['hPoints']?>-<?=$giornata[$i]['gpoints']?>
  </div>

<?php
}

?>
