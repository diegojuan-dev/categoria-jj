<?php

$idade = $_POST['idade'];
$peso = $_POST['peso'];
$faixa = $_POST['faixa'];
$sexo = $_POST['sexo'];
$categoria = "";
$divisao = "";
$tempo_de_luta = "";

if($sexo == 'Masculino'){               //Verificação do sexo Masculino
    if($idade == 4){                    //Categoria Pré-Mirim I Masculino             
        if($peso <= 14.7){
            $divisao = "Pluma";
        }if($peso > 14.7 && $peso <= 18.0){
            $divisao = "Pena";
        }if($peso > 18.0 && $peso <= 21.0){
            $divisao = "Leve";
        }if($peso > 21.0 && $peso <= 24.0){
            $divisao = "Médio";
        }if($peso > 24.0 && $peso <= 27.0){
            $divisao = "Meio Pesado";
        }if($peso > 27.0 && $peso <= 30.0){
            $divisao = "Pesado";
        }if($peso > 30.0 && $peso <= 33.0){
            $divisao = "Super Pesado";
        }if($peso > 33.0){
            $divisao = "Pesadíssimo";
        }
        $categoria = "Pré-Mirim I Masculino";
        $tempo_de_luta = "2 minutos";
    }elseif($idade == 5){                //Categoria Pré-Mirim II Masculino                                        
            if($peso <= 17.9){
                $divisao = "Pluma";
            }if($peso > 17.9 && $peso <= 20.0){
                $divisao = "Pena";
            }if($peso > 20.0 && $peso <= 24.0){
                $divisao = "Leve";
            }if($peso > 24.0 && $peso <= 26.0){
                $divisao = "Médio";
            }if($peso > 26.0 && $peso <= 29.0){
                $divisao = "Meio Pesado";
            }if($peso > 29.0 && $peso <= 32.0){
                $divisao = "Pesado";
            }if($peso > 32.0 && $peso <= 35.0){
                $divisao = "Super Pesado";
            }if($peso > 35.0){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Pré-Mirim II Masculino";
            $tempo_de_luta = "2 minutos";
        }elseif($idade == 6){                //Categoria Pré-Mirim III Masculino                                        
            if($peso <= 18.9){
                $divisao = "Pluma";
            }if($peso > 18.9 && $peso <= 22.0){
                $divisao = "Pena";
            }if($peso > 22.0 && $peso <= 25.0){
                $divisao = "Leve";
            }if($peso > 25.0 && $peso <= 28.0){
                $divisao = "Médio";
            }if($peso > 28.0 && $peso <= 31.2){
                $divisao = "Meio Pesado";
            }if($peso > 31.2 && $peso <= 34.2){
                $divisao = "Pesado";
            }if($peso > 34.2 && $peso <= 37.2){
                $divisao = "Super Pesado";
            }if($peso > 37.2){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Pré-Mirim III Masculino";
            $tempo_de_luta = "2 minutos";
        }elseif($idade == 7){                //Categoria Mirim I Masculino                                        
            if($peso <= 21.0){
                $divisao = "Pluma";
            }if($peso > 21.0 && $peso <= 24.0){
                $divisao = "Pena";
            }if($peso > 24.0 && $peso <= 27.0){
                $divisao = "Leve";
            }if($peso > 27.0 && $peso <= 30.2){
                $divisao = "Médio";
            }if($peso > 30.2 && $peso <= 33.2){
                $divisao = "Meio Pesado";
            }if($peso > 33.2 && $peso <= 36.2){
                $divisao = "Pesado";
            }if($peso > 36.2 && $peso <= 39.3){
                $divisao = "Super Pesado";
            }if($peso > 39.3){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Mirim I Masculino";
            $tempo_de_luta = "3 minutos";
        }elseif($idade == 8){                //Categoria Mirim II Masculino                                        
            if($peso <= 24.0){
                $divisao = "Pluma";
            }if($peso > 24.0 && $peso <= 27.0){
                $divisao = "Pena";
            }if($peso > 27.0 && $peso <= 30.2){
                $divisao = "Leve";
            }if($peso > 30.2 && $peso <= 33.2){
                $divisao = "Médio";
            }if($peso > 33.2 && $peso <= 36.2){
                $divisao = "Meio Pesado";
            }if($peso > 36.2 && $peso <= 39.3){
                $divisao = "Pesado";
            }if($peso > 39.3 && $peso <= 42.3){
                $divisao = "Super Pesado";
            }if($peso > 42.3){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Mirim II Masculino";
            $tempo_de_luta = "3 minutos";
        }elseif($idade == 9){                //Categoria Mirim III Masculino                                        
            if($peso <= 27.0){
                $divisao = "Pluma";
            }if($peso > 27.0 && $peso <= 30.2){
                $divisao = "Pena";
            }if($peso > 30.2 && $peso <= 33.2){
                $divisao = "Leve";
            }if($peso > 33.2 && $peso <= 36.2){
                $divisao = "Médio";
            }if($peso > 36.2 && $peso <= 39.3){
                $divisao = "Meio Pesado";
            }if($peso > 39.3 && $peso <= 42.3){
                $divisao = "Pesado";
            }if($peso > 42.3 && $peso <= 45.3){
                $divisao = "Super Pesado";
            }if($peso > 45.3){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Mirim III Masculino";
            $tempo_de_luta = "3 minutos";
        }elseif($idade == 10){               //Categoria Infantil I Masculino
            if($peso <= 27.0){
                $divisao = "Galo";
            }if($peso > 27.0 && $peso <= 30.2){
                $divisao = "Pluma";
            }if($peso > 30.2 && $peso <= 33.2){
                $divisao = "Pena";
            }if($peso > 33.2 && $peso <= 36.2){
                $divisao = "Leve";
            }if($peso > 36.2 && $peso <= 39.3){
                $divisao = "Médio";
            }if($peso > 39.3 && $peso <= 42.3){
                $divisao = "Meio Pesado";
            }if($peso > 42.3 && $peso <= 45.3){
                $divisao = "Pesado";
            }if($peso > 45.3 && $peso <= 48.3){
                $divisao = "Super Pesado";
            }if($peso > 48.3){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Infantil I Masculino";
            $tempo_de_luta = "4 minutos";
        }elseif($idade == 11){               //Categoria Infantil II Masculino  
            if($peso <= 30.2){
                $divisao = "Galo";
            }if($peso > 30.2 && $peso <= 33.2){
                $divisao = "Pluma";
            }if($peso > 33.2 && $peso <= 36.2){
                $divisao = "Pena";
            }if($peso > 36.2 && $peso <= 39.3){
                $divisao = "Leve";
            }if($peso > 39.3 && $peso <= 42.3){
                $divisao = "Médio";
            }if($peso > 42.3 && $peso <= 45.3){
                $divisao = "Meio Pesado";
            }if($peso > 45.3 && $peso <= 48.3){
                $divisao = "Pesado";
            }if($peso > 48.3 && $peso <= 51.5){
                $divisao = "Super Pesado";
            }if($peso > 51.5){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Infantil II Masculino";
            $tempo_de_luta = "4 minutos";
        }elseif($idade == 12){               //Categoria Infantil III Masculino  
            if($peso <= 32.3){
                $divisao = "Galo";
            }if($peso > 32.3 && $peso <= 36.2){
                $divisao = "Pluma";
            }if($peso > 36.2 && $peso <= 40.3){
                $divisao = "Pena";
            }if($peso > 40.3 && $peso <= 44.3){
                $divisao = "Leve";
            }if($peso > 44.3 && $peso <= 48.3){
                $divisao = "Médio";
            }if($peso > 48.3 && $peso <= 52.5){
                $divisao = "Meio Pesado";
            }if($peso > 52.5 && $peso <= 56.5){
                $divisao = "Pesado";
            }if($peso > 56.5 && $peso <= 60.5){
                $divisao = "Super Pesado";
            }if($peso > 60.5){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Infantil III Masculino";
            $tempo_de_luta = "4 minutos";
        }elseif($idade == 13){               //Categoria Infanto-Juvenil I Masculino 
            if($peso <= 36.2){
                $divisao = "Galo";
            }if($peso > 36.2 && $peso <= 40.3){
                $divisao = "Pluma";
            }if($peso > 40.3 && $peso <= 44.3){
                $divisao = "Pena";
            }if($peso > 44.3 && $peso <= 48.3){
                $divisao = "Leve";
            }if($peso > 48.3 && $peso <= 52.5){
                $divisao = "Médio";
            }if($peso > 52.5 && $peso <= 56.5){
                $divisao = "Meio Pesado";
            }if($peso > 56.5 && $peso <= 60.5){
                $divisao = "Pesado";
            }if($peso > 60.5 && $peso <= 65.0){
                $divisao = "Super Pesado";
            }if($peso > 65.0){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Infanto-Juvenil I Masculino";
            $tempo_de_luta = "4 minutos";
        }elseif($idade == 14){               //Categoria Infanto-Juvenil II Masculino  
            if($peso <= 40.3){
                $divisao = "Galo";
            }if($peso > 40.3 && $peso <= 44.3){
                $divisao = "Pluma";
            }if($peso > 44.3 && $peso <= 48.3){
                $divisao = "Pena";
            }if($peso > 48.3 && $peso <= 52.5){
                $divisao = "Leve";
            }if($peso > 52.5 && $peso <= 56.5){
                $divisao = "Médio";
            }if($peso > 56.5 && $peso <= 60.5){
                $divisao = "Meio Pesado";
            }if($peso > 60.5 && $peso <= 65.0){
                $divisao = "Pesado";
            }if($peso > 65.0 && $peso <= 69.0){
                $divisao = "Super Pesado";
            }if($peso > 69.0){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Infanto-Juvenil II Masculino";
            $tempo_de_luta = "4 minutos";
        }elseif($idade == 15){               //Categoria Infanto-Juvenil III Masculino
            if($peso <= 44.3){
                $divisao = "Galo";
            }if($peso > 44.3 && $peso <= 48.3){
                $divisao = "Pluma";
            }if($peso > 48.3 && $peso <= 52.5){
                $divisao = "Pena";
            }if($peso > 52.5 && $peso <= 56.5){
                $divisao = "Leve";
            }if($peso > 56.5 && $peso <= 60.5){
                $divisao = "Médio";
            }if($peso > 60.5 && $peso <= 65.0){
                $divisao = "Meio Pesado";
            }if($peso > 65.0 && $peso <= 69.0){
                $divisao = "Pesado";
            }if($peso > 69.0 && $peso <= 73.0){
                $divisao = "Super Pesado";
            }if($peso > 73.0){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Infanto-Juvenil III Masculino";
            $tempo_de_luta = "4 minutos";
        }elseif($idade == 16){               //Categoria Juvenil I Masculino
            if($peso <= 48.5){
                $divisao = "Galo";
            }if($peso > 48.5 && $peso <= 53.5){
                $divisao = "Pluma";
            }if($peso > 53.5 && $peso <= 58.5){
                $divisao = "Pena";
            }if($peso > 58.5 && $peso <= 64.0){
                $divisao = "Leve";
            }if($peso > 64.0 && $peso <= 69.0){
                $divisao = "Médio";
            }if($peso > 69.0 && $peso <= 74.0){
                $divisao = "Meio Pesado";
            }if($peso > 74.0 && $peso <= 79.3){
                $divisao = "Pesado";
            }if($peso > 79.3 && $peso <= 84.3){
                $divisao = "Super Pesado";
            }if($peso > 84.3){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Juvenil I Masculino";
            $tempo_de_luta = "5 minutos";
        }elseif($idade == 17){               //Categoria Juvenil II Masculino
            if($peso <= 53.5){
                $divisao = "Galo";
            }if($peso > 53.5 && $peso <= 58.5){
                $divisao = "Pluma";
            }if($peso > 58.5 && $peso <= 64.0){
                $divisao = "Pena";
            }if($peso > 64.0 && $peso <= 69.0){
                $divisao = "Leve";
            }if($peso > 69.0 && $peso <= 74.0){
                $divisao = "Médio";
            }if($peso > 74.0 && $peso <= 79.3){
                $divisao = "Meio Pesado";
            }if($peso > 79.3 && $peso <= 84.3){
                $divisao = "Pesado";
            }if($peso > 84.3 && $peso <= 89.3){
                $divisao = "Super Pesado";
            }if($peso > 89.3){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Juvenil II Masculino";
            $tempo_de_luta = "5 minutos";
        }elseif($idade >= 18 && $idade <= 29){               //Categoria Adulto Masculino
            if($peso <= 57.5){                
                $divisao = "Galo";                                            
            }if($peso > 57.5 && $peso <= 64.0){
                $divisao = "Pluma";
            }if($peso > 64.0 && $peso <= 70.0){
                $divisao = "Pena";
            }if($peso > 70.0 && $peso <= 76.0){
                $divisao = "Leve";
            }if($peso > 76.0 && $peso <= 82.3){
                $divisao = "Médio";
            }if($peso > 82.3 && $peso <= 88.3){
                $divisao = "Meio Pesado";
            }if($peso > 88.3 && $peso <= 94.3){
                $divisao = "Pesado";
            }if($peso > 94.3 && $peso <= 100.5){
                $divisao = "Super Pesado";
            }if($peso > 100.5){
                $divisao = "Pesadíssimo";
            }if($faixa == 'Branca') {             //Tempo de luta Adulto Branca
                $tempo_de_luta = "5 minutos";
            }if($faixa == 'Azul') {             //Tempo de luta Adulto Azul
                $tempo_de_luta = "6 minutos";
            }if($faixa == 'Roxa') {             //Tempo de luta Adulto Roxa
                $tempo_de_luta = "7 minutos";
            }if($faixa == 'Marrom') {             //Tempo de luta Adulto Marrom
                $tempo_de_luta = "8 minutos";
            }if($faixa == 'Preta') {             //Tempo de luta Adulto Preta
                $tempo_de_luta = "10 minutos";
            }
            $categoria = "Adulto Masculino";
        }elseif($idade > 29 && $idade < 36){               //Categoria Master 1 Masculino
            if($peso <= 57.5){                
                $divisao = "Galo";                                            
            }if($peso > 57.5 && $peso <= 64.0){
                $divisao = "Pluma";
            }if($peso > 64.0 && $peso <= 70.0){
                $divisao = "Pena";
            }if($peso > 70.0 && $peso <= 76.0){
                $divisao = "Leve";
            }if($peso > 76.0 && $peso <= 82.3){
                $divisao = "Médio";
            }if($peso > 82.3 && $peso <= 88.3){
                $divisao = "Meio Pesado";
            }if($peso > 88.3 && $peso <= 94.3){
                $divisao = "Pesado";
            }if($peso > 94.3 && $peso <= 100.5){
                $divisao = "Super Pesado";
            }if($peso > 100.5){
                $divisao = "Pesadíssimo";
            }if($faixa == 'Branca') {             //Tempo de luta Master 1 Branca
                $tempo_de_luta = "5 minutos";
            }if($faixa == 'Azul') {             //Tempo de luta Master 1 Azul
                $tempo_de_luta = "5 minutos";
            }if($faixa == 'Roxa') {             //Tempo de luta Master 1 Roxa
                $tempo_de_luta = "6 minutos";
            }if($faixa == 'Marrom') {             //Tempo de luta Master 1 Marrom
                $tempo_de_luta = "6 minutos";
            }if($faixa == 'Preta') {             //Tempo de luta Master 1 Preta
                $tempo_de_luta = "6 minutos";
            }
            $categoria = "Master 1 Masculino";
        }elseif($idade >= 36 && $idade < 41){               //Categoria Master 2 Masculino
            if($peso <= 57.5){                
                $divisao = "Galo";                                            
            }if($peso > 57.5 && $peso <= 64.0){
                $divisao = "Pluma";
            }if($peso > 64.0 && $peso <= 70.0){
                $divisao = "Pena";
            }if($peso > 70.0 && $peso <= 76.0){
                $divisao = "Leve";
            }if($peso > 76.0 && $peso <= 82.3){
                $divisao = "Médio";
            }if($peso > 82.3 && $peso <= 88.3){
                $divisao = "Meio Pesado";
            }if($peso > 88.3 && $peso <= 94.3){
                $divisao = "Pesado";
            }if($peso > 94.3 && $peso <= 100.5){
                $divisao = "Super Pesado";
            }if($peso > 100.5){
                $divisao = "Pesadíssimo";
            }if($faixa == 'Branca' || $faixa == 'Azul' || $faixa == 'Roxa' || $faixa == 'Marrom' || $faixa == 'Preta') {             //Tempo de luta Master 2
                $tempo_de_luta = "5 minutos";               
            }
            $categoria = "Master 2 Masculino";
    }elseif($idade >=41 && $idade < 46){               //Categoria Master 3 Masculino
            if($peso <= 57.5){                
                $divisao = "Galo";                                            
            }if($peso > 57.5 && $peso <= 64.0){
                $divisao = "Pluma";
            }if($peso > 64.0 && $peso <= 70.0){
                $divisao = "Pena";
            }if($peso > 70.0 && $peso <= 76.0){
                $divisao = "Leve";
            }if($peso > 76.0 && $peso <= 82.3){
                $divisao = "Médio";
            }if($peso > 82.3 && $peso <= 88.3){
                $divisao = "Meio Pesado";
            }if($peso > 88.3 && $peso <= 94.3){
                $divisao = "Pesado";
            }if($peso > 94.3 && $peso <= 100.5){
                $divisao = "Super Pesado";
            }if($peso > 100.5){
                $divisao = "Pesadíssimo";
            }if($faixa == 'Branca' || $faixa == 'Azul' || $faixa == 'Roxa' || $faixa == 'Marrom' || $faixa == 'Preta') {             //Tempo de luta Master 3
                $tempo_de_luta = "5 minutos";               
            }
            $categoria = "Master 3 Masculino";
        }elseif($idade >=46 && $idade < 51){               //Categoria Master 4 Masculino
            if($peso <= 57.5){                
                $divisao = "Galo";                                            
            }if($peso > 57.5 && $peso <= 64.0){
                $divisao = "Pluma";
            }if($peso > 64.0 && $peso <= 70.0){
                $divisao = "Pena";
            }if($peso > 70.0 && $peso <= 76.0){
                $divisao = "Leve";
            }if($peso > 76.0 && $peso <= 82.3){
                $divisao = "Médio";
            }if($peso > 82.3 && $peso <= 88.3){
                $divisao = "Meio Pesado";
            }if($peso > 88.3 && $peso <= 94.3){
                $divisao = "Pesado";
            }if($peso > 94.3 && $peso <= 100.5){
                $divisao = "Super Pesado";
            }if($peso > 100.5){
                $divisao = "Pesadíssimo";
            }if($faixa == 'Branca' || $faixa == 'Azul' || $faixa == 'Roxa' || $faixa == 'Marrom' || $faixa == 'Preta') {             //Tempo de luta Master 4
                $tempo_de_luta = "5 minutos";               
            }
            $categoria = "Master 4 Masculino";
        }elseif($idade >= 51 && $idade < 56){               //Categoria Master 5 Masculino
            if($peso <= 57.5){                
                $divisao = "Galo";                                            
            }if($peso > 57.5 && $peso <= 64.0){
                $divisao = "Pluma";
            }if($peso > 64.0 && $peso <= 70.0){
                $divisao = "Pena";
            }if($peso > 70.0 && $peso <= 76.0){
                $divisao = "Leve";
            }if($peso > 76.0 && $peso <= 82.3){
                $divisao = "Médio";
            }if($peso > 82.3 && $peso <= 88.3){
                $divisao = "Meio Pesado";
            }if($peso > 88.3 && $peso <= 94.3){
                $divisao = "Pesado";
            }if($peso > 94.3 && $peso <= 100.5){
                $divisao = "Super Pesado";
            }if($peso > 100.5){
                $divisao = "Pesadíssimo";
            }if($faixa == 'Branca' || $faixa == 'Azul' || $faixa == 'Roxa' || $faixa == 'Marrom' || $faixa == 'Preta') {             //Tempo de luta Master 5
                $tempo_de_luta = "5 minutos";               
            }
            $categoria = "Master 5 Masculino";
        }elseif($idade >= 56 && $idade < 61){               //Categoria Master 6 Masculino
            if($peso <= 57.5){                
                $divisao = "Galo";                                            
            }if($peso > 57.5 && $peso <= 64.0){
                $divisao = "Pluma";
            }if($peso > 64.0 && $peso <= 70.0){
                $divisao = "Pena";
            }if($peso > 70.0 && $peso <= 76.0){
                $divisao = "Leve";
            }if($peso > 76.0 && $peso <= 82.3){
                $divisao = "Médio";
            }if($peso > 82.3 && $peso <= 88.3){
                $divisao = "Meio Pesado";
            }if($peso > 88.3 && $peso <= 94.3){
                $divisao = "Pesado";
            }if($peso > 94.3 && $peso <= 100.5){
                $divisao = "Super Pesado";
            }if($peso > 100.5){
                $divisao = "Pesadíssimo";
            }if($faixa == 'Branca' || $faixa == 'Azul' || $faixa == 'Roxa' || $faixa == 'Marrom' || $faixa == 'Preta') {             //Tempo de luta Master 6
                $tempo_de_luta = "5 minutos";               
            }
            $categoria = "Master 6 Masculino";
        }elseif($idade >= 61 && $idade <= 120){               //Categoria Master 7 Masculino
            if($peso <= 57.5){                
                $divisao = "Galo";                                            
            }if($peso > 57.5 && $peso <= 64.0){
                $divisao = "Pluma";
            }if($peso > 64.0 && $peso <= 70.0){
                $divisao = "Pena";
            }if($peso > 70.0 && $peso <= 76.0){
                $divisao = "Leve";
            }if($peso > 76.0 && $peso <= 82.3){
                $divisao = "Médio";
            }if($peso > 82.3 && $peso <= 88.3){
                $divisao = "Meio Pesado";
            }if($peso > 88.3 && $peso <= 94.3){
                $divisao = "Pesado";
            }if($peso > 94.3 && $peso <= 100.5){
                $divisao = "Super Pesado";
            }if($peso > 100.5){
                $divisao = "Pesadíssimo";
            }if($faixa == 'Branca' || $faixa == 'Azul' || $faixa == 'Roxa' || $faixa == 'Marrom' || $faixa == 'Preta') {             //Tempo de luta Master 7
                $tempo_de_luta = "5 minutos";               
            }
            $categoria = "Master 7 Masculino";
        }
}   

if($sexo == 'Feminino'){                //Verificação do sexo Feminino
    if($idade == 4){                    //Categoria Pré-Mirim I Feminino             
        if($peso <= 14.7){
            $divisao = "Pluma";
        }if($peso > 14.7 && $peso <= 18.0){
            $divisao = "Pena";
        }if($peso > 18.0 && $peso <= 21.0){
            $divisao = "Leve";
        }if($peso > 21.0 && $peso <= 24.0){
            $divisao = "Médio";
        }if($peso > 24.0 && $peso <= 27.0){
            $divisao = "Meio Pesado";
        }if($peso > 27.0 && $peso <= 30.0){
            $divisao = "Pesado";
        }if($peso > 30.0 && $peso <= 33.0){
            $divisao = "Super Pesado";
        }if($peso > 33.0){
            $divisao = "Pesadíssimo";
        }
        $categoria = "Pré-Mirim I Feminino";
        $tempo_de_luta = "2 minutos";
    }elseif($idade == 5){                //Categoria Pré-Mirim II Feminino                                        
            if($peso <= 17.9){
                $divisao = "Pluma";
            }if($peso > 17.9 && $peso <= 20.0){
                $divisao = "Pena";
            }if($peso > 20.0 && $peso <= 24.0){
                $divisao = "Leve";
            }if($peso > 24.0 && $peso <= 26.0){
                $divisao = "Médio";
            }if($peso > 26.0 && $peso <= 29.0){
                $divisao = "Meio Pesado";
            }if($peso > 29.0 && $peso <= 32.0){
                $divisao = "Pesado";
            }if($peso > 32.0 && $peso <= 35.0){
                $divisao = "Super Pesado";
            }if($peso > 35.0){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Pré-Mirim II Feminino";
            $tempo_de_luta = "2 minutos";
        }elseif($idade == 6){                //Categoria Pré-Mirim III Feminino                                        
            if($peso <= 18.9){
                $divisao = "Pluma";
            }if($peso > 18.9 && $peso <= 22.0){
                $divisao = "Pena";
            }if($peso > 22.0 && $peso <= 25.0){
                $divisao = "Leve";
            }if($peso > 25.0 && $peso <= 28.0){
                $divisao = "Médio";
            }if($peso > 28.0 && $peso <= 31.2){
                $divisao = "Meio Pesado";
            }if($peso > 31.2 && $peso <= 34.2){
                $divisao = "Pesado";
            }if($peso > 34.2 && $peso <= 37.2){
                $divisao = "Super Pesado";
            }if($peso > 37.2){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Pré-Mirim III Feminino";
            $tempo_de_luta = "2 minutos";
        }elseif($idade == 7){                //Categoria Mirim I Feminino                                        
            if($peso <= 21.0){
                $divisao = "Pluma";
            }if($peso > 21.0 && $peso <= 24.0){
                $divisao = "Pena";
            }if($peso > 24.0 && $peso <= 27.0){
                $divisao = "Leve";
            }if($peso > 27.0 && $peso <= 30.2){
                $divisao = "Médio";
            }if($peso > 30.2 && $peso <= 33.2){
                $divisao = "Meio Pesado";
            }if($peso > 33.2 && $peso <= 36.2){
                $divisao = "Pesado";
            }if($peso > 36.2 && $peso <= 39.3){
                $divisao = "Super Pesado";
            }if($peso > 39.3){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Mirim I Feminino";
            $tempo_de_luta = "3 minutos";
        }elseif($idade == 8){                //Categoria Mirim II Feminino                                        
            if($peso <= 24.0){
                $divisao = "Pluma";
            }if($peso > 24.0 && $peso <= 27.0){
                $divisao = "Pena";
            }if($peso > 27.0 && $peso <= 30.2){
                $divisao = "Leve";
            }if($peso > 30.2 && $peso <= 33.2){
                $divisao = "Médio";
            }if($peso > 33.2 && $peso <= 36.2){
                $divisao = "Meio Pesado";
            }if($peso > 36.2 && $peso <= 39.3){
                $divisao = "Pesado";
            }if($peso > 39.3 && $peso <= 42.3){
                $divisao = "Super Pesado";
            }if($peso > 42.3){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Mirim II Feminino";
            $tempo_de_luta = "3 minutos";
        }elseif($idade == 9){                //Categoria Mirim III Feminino                                        
            if($peso <= 27.0){
                $divisao = "Pluma";
            }if($peso > 27.0 && $peso <= 30.2){
                $divisao = "Pena";
            }if($peso > 30.2 && $peso <= 33.2){
                $divisao = "Leve";
            }if($peso > 33.2 && $peso <= 36.2){
                $divisao = "Médio";
            }if($peso > 36.2 && $peso <= 39.3){
                $divisao = "Meio Pesado";
            }if($peso > 39.3 && $peso <= 42.3){
                $divisao = "Pesado";
            }if($peso > 42.3 && $peso <= 45.3){
                $divisao = "Super Pesado";
            }if($peso > 45.3){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Mirim III Feminino";
            $tempo_de_luta = "3 minutos";
        }elseif($idade == 10){               //Categoria Infantil I Feminino
            if($peso <= 27.0){
                $divisao = "Galo";
            }if($peso > 27.0 && $peso <= 30.2){
                $divisao = "Pluma";
            }if($peso > 30.2 && $peso <= 33.2){
                $divisao = "Pena";
            }if($peso > 33.2 && $peso <= 36.2){
                $divisao = "Leve";
            }if($peso > 36.2 && $peso <= 39.3){
                $divisao = "Médio";
            }if($peso > 39.3 && $peso <= 42.3){
                $divisao = "Meio Pesado";
            }if($peso > 42.3 && $peso <= 45.3){
                $divisao = "Pesado";
            }if($peso > 45.3 && $peso <= 48.3){
                $divisao = "Super Pesado";
            }if($peso > 48.3){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Infantil I Feminino";
            $tempo_de_luta = "4 minutos";
        }elseif($idade == 11){               //Categoria Infantil II Feminino  
            if($peso <= 30.2){
                $divisao = "Galo";
            }if($peso > 30.2 && $peso <= 33.2){
                $divisao = "Pluma";
            }if($peso > 33.2 && $peso <= 36.2){
                $divisao = "Pena";
            }if($peso > 36.2 && $peso <= 39.3){
                $divisao = "Leve";
            }if($peso > 39.3 && $peso <= 42.3){
                $divisao = "Médio";
            }if($peso > 42.3 && $peso <= 45.3){
                $divisao = "Meio Pesado";
            }if($peso > 45.3 && $peso <= 48.3){
                $divisao = "Pesado";
            }if($peso > 48.3 && $peso <= 51.5){
                $divisao = "Super Pesado";
            }if($peso > 51.5){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Infantil II Feminino";
            $tempo_de_luta = "4 minutos";
        }elseif($idade == 12){               //Categoria Infantil III Feminino  
            if($peso <= 32.3){
                $divisao = "Galo";
            }if($peso > 32.3 && $peso <= 36.2){
                $divisao = "Pluma";
            }if($peso > 36.2 && $peso <= 40.3){
                $divisao = "Pena";
            }if($peso > 40.3 && $peso <= 44.3){
                $divisao = "Leve";
            }if($peso > 44.3 && $peso <= 48.3){
                $divisao = "Médio";
            }if($peso > 48.3 && $peso <= 52.5){
                $divisao = "Meio Pesado";
            }if($peso > 52.5 && $peso <= 56.5){
                $divisao = "Pesado";
            }if($peso > 56.5 && $peso <= 60.5){
                $divisao = "Super Pesado";
            }if($peso > 60.5){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Infantil III Feminino";
            $tempo_de_luta = "4 minutos";
        }elseif($idade == 13){               //Categoria Infanto-Juvenil I Feminino 
            if($peso <= 36.2){
                $divisao = "Galo";
            }if($peso > 36.2 && $peso <= 40.3){
                $divisao = "Pluma";
            }if($peso > 40.3 && $peso <= 44.3){
                $divisao = "Pena";
            }if($peso > 44.3 && $peso <= 48.3){
                $divisao = "Leve";
            }if($peso > 48.3 && $peso <= 52.5){
                $divisao = "Médio";
            }if($peso > 52.5 && $peso <= 56.5){
                $divisao = "Meio Pesado";
            }if($peso > 56.5 && $peso <= 60.5){
                $divisao = "Pesado";
            }if($peso > 60.5 && $peso <= 65.0){
                $divisao = "Super Pesado";
            }if($peso > 65.0){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Infanto-Juvenil I Feminino";
            $tempo_de_luta = "4 minutos";
        }elseif($idade == 14){               //Categoria Infanto-Juvenil II Feminino  
            if($peso <= 40.3){
                $divisao = "Galo";
            }if($peso > 40.3 && $peso <= 44.3){
                $divisao = "Pluma";
            }if($peso > 44.3 && $peso <= 48.3){
                $divisao = "Pena";
            }if($peso > 48.3 && $peso <= 52.5){
                $divisao = "Leve";
            }if($peso > 52.5 && $peso <= 56.5){
                $divisao = "Médio";
            }if($peso > 56.5 && $peso <= 60.5){
                $divisao = "Meio Pesado";
            }if($peso > 60.5 && $peso <= 65.0){
                $divisao = "Pesado";
            }if($peso > 65.0 && $peso <= 69.0){
                $divisao = "Super Pesado";
            }if($peso > 69.0){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Infanto-Juvenil II Feminino";
            $tempo_de_luta = "4 minutos";
        }elseif($idade == 15){               //Categoria Infanto-Juvenil III Feminino
            if($peso <= 44.3){
                $divisao = "Galo";
            }if($peso > 44.3 && $peso <= 48.3){
                $divisao = "Pluma";
            }if($peso > 48.3 && $peso <= 52.5){
                $divisao = "Pena";
            }if($peso > 52.5 && $peso <= 56.5){
                $divisao = "Leve";
            }if($peso > 56.5 && $peso <= 60.5){
                $divisao = "Médio";
            }if($peso > 60.5 && $peso <= 65.0){
                $divisao = "Meio Pesado";
            }if($peso > 65.0 && $peso <= 69.0){
                $divisao = "Pesado";
            }if($peso > 69.0 && $peso <= 73.0){
                $divisao = "Super Pesado";
            }if($peso > 73.0){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Infanto-Juvenil III Feminino";
            $tempo_de_luta = "4 minutos";
        }elseif($idade == 16){               //Categoria Juvenil I Feminino
            if($peso <= 44.3){
                $divisao = "Galo";
            }if($peso > 44.3 && $peso <= 48.3){
                $divisao = "Pluma";
            }if($peso > 48.3 && $peso <= 52.5){
                $divisao = "Pena";
            }if($peso > 52.5 && $peso <= 56.5){
                $divisao = "Leve";
            }if($peso > 56.5 && $peso <= 60.5){
                $divisao = "Médio";
            }if($peso > 60.5 && $peso <= 65.0){
                $divisao = "Meio Pesado";
            }if($peso > 65.0 && $peso <= 69.0){
                $divisao = "Pesado";
            }if($peso > 69.0 && $peso <= 73.0){
                $divisao = "Super Pesado";
            }if($peso > 73.0){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Juvenil I Feminino";
            $tempo_de_luta = "5 minutos";
        }elseif($idade == 17){               //Categoria Juvenil II Feminino
            if($peso <= 44.3){
                $divisao = "Galo";
            }if($peso > 44.3 && $peso <= 48.3){
                $divisao = "Pluma";
            }if($peso > 48.3 && $peso <= 52.5){
                $divisao = "Pena";
            }if($peso > 52.5 && $peso <= 56.5){
                $divisao = "Leve";
            }if($peso > 56.5 && $peso <= 60.5){
                $divisao = "Médio";
            }if($peso > 60.5 && $peso <= 65.0){
                $divisao = "Meio Pesado";
            }if($peso > 65.0 && $peso <= 69.0){
                $divisao = "Pesado";
            }if($peso > 69.0 && $peso <= 73.0){
                $divisao = "Super Pesado";
            }if($peso > 73.0){
                $divisao = "Pesadíssimo";
            }
            $categoria = "Juvenil II Feminino";
            $tempo_de_luta = "5 minutos";
        }elseif($idade >= 18 && $idade <= 29){               //Categoria Adulto Feminino
            if($peso <= 48.5){                
                $divisao = "Galo";                                            
            }if($peso > 48.5 && $peso <= 53.5){
                $divisao = "Pluma";
            }if($peso > 53.5 && $peso <= 58.5){
                $divisao = "Pena";
            }if($peso > 58.5 && $peso <= 64.0){
                $divisao = "Leve";
            }if($peso > 64.0 && $peso <= 69.0){
                $divisao = "Médio";
            }if($peso > 69.0 && $peso <= 74.0){
                $divisao = "Meio Pesado";
            }if($peso > 74.0 && $peso <= 79.3){
                $divisao = "Pesado";
            }if($peso > 79.3 && $peso <= 84.3){
                $divisao = "Super Pesado";
            }if($peso > 84.3){
                $divisao = "Pesadíssimo";
            }if($faixa == 'Branca') {             //Tempo de luta Adulto Branca
                $tempo_de_luta = "5 minutos";
            }if($faixa == 'Azul') {             //Tempo de luta Adulto Azul
                $tempo_de_luta = "6 minutos";
            }if($faixa == 'Roxa') {             //Tempo de luta Adulto Roxa
                $tempo_de_luta = "7 minutos";
            }if($faixa == 'Marrom') {             //Tempo de luta Adulto Marrom
                $tempo_de_luta = "8 minutos";
            }if($faixa == 'Preta') {             //Tempo de luta Adulto Preta
                $tempo_de_luta = "10 minutos";
            }
            $categoria = "Adulto Feminino";
        }elseif($idade >= 30 && $idade < 36){               //Categoria Master 1 Feminino
            if($peso <= 48.5){                
                $divisao = "Galo";                                            
            }if($peso > 48.5 && $peso <= 53.5){
                $divisao = "Pluma";
            }if($peso > 53.5 && $peso <= 58.5){
                $divisao = "Pena";
            }if($peso > 58.5 && $peso <= 64.0){
                $divisao = "Leve";
            }if($peso > 64.0 && $peso <= 69.0){
                $divisao = "Médio";
            }if($peso > 69.0 && $peso <= 74.0){
                $divisao = "Meio Pesado";
            }if($peso > 74.0 && $peso <= 79.3){
                $divisao = "Pesado";
            }if($peso > 79.3 && $peso <= 84.3){
                $divisao = "Super Pesado";
            }if($peso > 84.3){
                $divisao = "Pesadíssimo";
            }if($faixa == 'Branca') {             //Tempo de luta Master 1 Feminino Branca
                $tempo_de_luta = "5 minutos";
            }if($faixa == 'Azul') {             //Tempo de luta Master 1 Feminino Azul
                $tempo_de_luta = "5 minutos";
            }if($faixa == 'Roxa') {             //Tempo de luta Master 1 Feminino Roxa
                $tempo_de_luta = "6 minutos";
            }if($faixa == 'Marrom') {             //Tempo de luta Master 1 Feminino Marrom
                $tempo_de_luta = "6 minutos";
            }if($faixa == 'Preta') {             //Tempo de luta Master 1 Feminino Preta
                $tempo_de_luta = "6 minutos";
            }
            $categoria = "Master 1 Feminino";
        }elseif($idade >= 36 && $idade < 41){               //Categoria Master 2 Feminino
            if($peso <= 48.5){                
                $divisao = "Galo";                                            
            }if($peso > 48.5 && $peso <= 53.5){
                $divisao = "Pluma";
            }if($peso > 53.5 && $peso <= 58.5){
                $divisao = "Pena";
            }if($peso > 58.5 && $peso <= 64.0){
                $divisao = "Leve";
            }if($peso > 64.0 && $peso <= 69.0){
                $divisao = "Médio";
            }if($peso > 69.0 && $peso <= 74.0){
                $divisao = "Meio Pesado";
            }if($peso > 74.0 && $peso <= 79.3){
                $divisao = "Pesado";
            }if($peso > 79.3 && $peso <= 84.3){
                $divisao = "Super Pesado";
            }if($peso > 84.3){
                $divisao = "Pesadíssimo";
            }if($faixa == 'Branca' || $faixa == 'Azul' || $faixa == 'Roxa' || $faixa == 'Marrom' || $faixa == 'Preta') {             //Tempo de luta Master 2
                $tempo_de_luta = "5 minutos";               
            }
            $categoria = "Master 2 Feminino";
        }elseif($idade >= 41 && $idade < 46){               //Categoria Master 3 Feminino
            if($peso <= 48.5){                
                $divisao = "Galo";                                            
            }if($peso > 48.5 && $peso <= 53.5){
                $divisao = "Pluma";
            }if($peso > 53.5 && $peso <= 58.5){
                $divisao = "Pena";
            }if($peso > 58.5 && $peso <= 64.0){
                $divisao = "Leve";
            }if($peso > 64.0 && $peso <= 69.0){
                $divisao = "Médio";
            }if($peso > 69.0 && $peso <= 74.0){
                $divisao = "Meio Pesado";
            }if($peso > 74.0 && $peso <= 79.3){
                $divisao = "Pesado";
            }if($peso > 79.3 && $peso <= 84.3){
                $divisao = "Super Pesado";
            }if($peso > 84.3){
                $divisao = "Pesadíssimo";
            }if($faixa == 'Branca' || $faixa == 'Azul' || $faixa == 'Roxa' || $faixa == 'Marrom' || $faixa == 'Preta') {             //Tempo de luta Master 2
                $tempo_de_luta = "5 minutos";               
            }
            $categoria = "Master 3 Feminino";
        }elseif($idade >= 46 && $idade < 51){               //Categoria Master 4 Feminino
            if($peso <= 48.5){                
                $divisao = "Galo";                                            
            }if($peso > 48.5 && $peso <= 53.5){
                $divisao = "Pluma";
            }if($peso > 53.5 && $peso <= 58.5){
                $divisao = "Pena";
            }if($peso > 58.5 && $peso <= 64.0){
                $divisao = "Leve";
            }if($peso > 64.0 && $peso <= 69.0){
                $divisao = "Médio";
            }if($peso > 69.0 && $peso <= 74.0){
                $divisao = "Meio Pesado";
            }if($peso > 74.0 && $peso <= 79.3){
                $divisao = "Pesado";
            }if($peso > 79.3 && $peso <= 84.3){
                $divisao = "Super Pesado";
            }if($peso > 84.3){
                $divisao = "Pesadíssimo";
            }if($faixa == 'Branca' || $faixa == 'Azul' || $faixa == 'Roxa' || $faixa == 'Marrom' || $faixa == 'Preta') {             //Tempo de luta Master 2
                $tempo_de_luta = "5 minutos";               
            }
            $categoria = "Master 4 Feminino";
        }elseif($idade >= 51 && $idade < 56){               //Categoria Master 5 Feminino
            if($peso <= 48.5){                
                $divisao = "Galo";                                            
            }if($peso > 48.5 && $peso <= 53.5){
                $divisao = "Pluma";
            }if($peso > 53.5 && $peso <= 58.5){
                $divisao = "Pena";
            }if($peso > 58.5 && $peso <= 64.0){
                $divisao = "Leve";
            }if($peso > 64.0 && $peso <= 69.0){
                $divisao = "Médio";
            }if($peso > 69.0 && $peso <= 74.0){
                $divisao = "Meio Pesado";
            }if($peso > 74.0 && $peso <= 79.3){
                $divisao = "Pesado";
            }if($peso > 79.3 && $peso <= 84.3){
                $divisao = "Super Pesado";
            }if($peso > 84.3){
                $divisao = "Pesadíssimo";
            }if($faixa == 'Branca' || $faixa == 'Azul' || $faixa == 'Roxa' || $faixa == 'Marrom' || $faixa == 'Preta') {             //Tempo de luta Master 2
                $tempo_de_luta = "5 minutos";               
            }
            $categoria = "Master 5 Feminino";
        }elseif($idade >= 56 && $idade < 61){               //Categoria Master 6 Feminino
            if($peso <= 48.5){                
                $divisao = "Galo";                                            
            }if($peso > 48.5 && $peso <= 53.5){
                $divisao = "Pluma";
            }if($peso > 53.5 && $peso <= 58.5){
                $divisao = "Pena";
            }if($peso > 58.5 && $peso <= 64.0){
                $divisao = "Leve";
            }if($peso > 64.0 && $peso <= 69.0){
                $divisao = "Médio";
            }if($peso > 69.0 && $peso <= 74.0){
                $divisao = "Meio Pesado";
            }if($peso > 74.0 && $peso <= 79.3){
                $divisao = "Pesado";
            }if($peso > 79.3 && $peso <= 84.3){
                $divisao = "Super Pesado";
            }if($peso > 84.3){
                $divisao = "Pesadíssimo";
            }if($faixa == 'Branca' || $faixa == 'Azul' || $faixa == 'Roxa' || $faixa == 'Marrom' || $faixa == 'Preta') {             //Tempo de luta Master 2
                $tempo_de_luta = "5 minutos";               
            }
            $categoria = "Master 6 Feminino";
        }elseif($idade >= 61 && $idade <= 120){               //Categoria Master 7 Feminino
            if($peso <= 48.5){                
                $divisao = "Galo";                                            
            }if($peso > 48.5 && $peso <= 53.5){
                $divisao = "Pluma";
            }if($peso > 53.5 && $peso <= 58.5){
                $divisao = "Pena";
            }if($peso > 58.5 && $peso <= 64.0){
                $divisao = "Leve";
            }if($peso > 64.0 && $peso <= 69.0){
                $divisao = "Médio";
            }if($peso > 69.0 && $peso <= 74.0){
                $divisao = "Meio Pesado";
            }if($peso > 74.0 && $peso <= 79.3){
                $divisao = "Pesado";
            }if($peso > 79.3 && $peso <= 84.3){
                $divisao = "Super Pesado";
            }if($peso > 84.3){
                $divisao = "Pesadíssimo";
            }if($faixa == 'Branca' || $faixa == 'Azul' || $faixa == 'Roxa' || $faixa == 'Marrom' || $faixa == 'Preta') {             //Tempo de luta Master 2
                $tempo_de_luta = "5 minutos";               
            }
            $categoria = "Master 7 Feminino";
        }  
    } 


?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <title>ArtSuave | Categoria</title>
    <link rel="stylesheet" type="text/css" href="style.css">  
</head>
<body>  
    <div>  
    <table>	

		<tr>
			<td colspan="2">Resultado</td>
        </tr>
        
		<tr>
			<td>Faixa</td>
			<td>
                <?php                    
                    echo $faixa;                                 
                ?>
            </td>
        </tr>
        
		<tr>
			<td>Categoria</td>
			<td>
                <?php                    
                    echo $categoria;                                 
                ?></td>
		    </tr>
		<tr>
			<td>Divisão</td>
			<td>
                <?php                    
                    echo $divisao;                                 
                ?></td>
            </tr>       
		<tr>
			<td>Tempo de luta</td>
			<td>
                <?php                    
                    echo $tempo_de_luta;                                 
                ?>
            </td>
        </tr>	
        
    </table>
</div>
                        <div id="btn">
                            <a href="index.html"><input id="btn_refazer" type="submit" value="Refazer"></a>
                        </div>

                    
</body>
</html>