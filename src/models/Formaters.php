<?php

class Formatador {
    public static function formataData($data){
        $antes = array('Jan', 'Feb', "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
        $depois = array("Janeiro", "Fevereiro", "Março", "Abril", 
        "Maio", "Junho", "Julho", "Agosto", "Setembro",
         "Outubro", "Novembro", "Dezembro");
        $dataFormatada = str_replace($antes, $depois, $data);
       $antesDia = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        
        $depoisDia = array("Domingo", "Segunda Feira", "Terça Feira", "Quarta Feira",
         "Quinta Feira", "Sexta Feira","Sábado");
         $dataFormatada2 = str_replace($antesDia, $depoisDia, $dataFormatada);
         return $dataFormatada2;
    

    
        
   
}}
