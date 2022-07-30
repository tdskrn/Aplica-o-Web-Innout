<?php

session_start();
requireValidSession();

loadModel('Formaters');

$date = (new DateTime())->getTimestamp();
$today = Formatador::formataData(date('d \d\e M \d\e Y', $date));



loadTemplateView('day_records', [
    'today' => $today,

]);
