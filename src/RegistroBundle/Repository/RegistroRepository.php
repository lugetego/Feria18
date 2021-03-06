<?php

namespace RegistroBundle\Repository;
use RegistroBundle\Entity\Registro;
use Symfony\Component\PropertyAccess\PropertyAccess;


use Doctrine\ORM\EntityRepository;


/**
 * RegistroRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */

class RegistroRepository extends EntityRepository
{
    public function countActividad($horario)
    {
        $accessor = PropertyAccess::createPropertyAccessor();
        $registros = $this->findByActivo(true);
        $burbujas = $braille = $canguro = $club = $dimensiones = $divulgamat =
        $expo = $gato = $ciga = $teatromatico = $penrose = $museo = $irya =
        $rompecabezas = $topologia = $papiroacertijos = $planetario = 0;

        foreach ($registros as $registro) {
            $actividad = array_search(true, $accessor->getValue($registro, $horario));
            switch ($actividad) {
                case 'braille':
                    $braille = $braille + 1;
                    break;
                case 'burbujas':
                    $burbujas = $burbujas + 1;
                    break;
                case 'canguro':
                    $canguro = $canguro + 1;
                    break;
                case 'club':
                    $club = $club + 1;
                    break;
                case 'dimensiones':
                    $dimensiones = $dimensiones + 1;
                    break;
                case 'divulgamat':
                    $divulgamat = $divulgamat + 1;
                    break;
                case 'expo':
                    $expo = $expo + 1;
                    break;
                case 'gato':
                    $gato = $gato + 1;
                    break;
                case 'ciga':
                    $ciga = $ciga + 1;
                    break;
                case 'teatromatico':
                    $teatromatico = $teatromatico + 1;
                    break;
                case 'penrose':
                    $penrose = $penrose + 1;
                    break;
                case 'museo':
                    $museo = $museo + 1;
                    break;
                case 'irya':
                    $irya = $irya + 1;
                    break;
                case 'planetario':
                    $planetario = $planetario + 1;
                    break;
                case 'rompecabezas':
                    $rompecabezas = $rompecabezas + 1;
                    break;
                case 'topologia':
                    $topologia = $topologia + 1;
                    break;
                case 'papiroacertijos':
                    $papiroacertijos = $papiroacertijos + 1;
                    break;

            }
        }

        $total = array (
            'braille'=> $braille,
            'burbujas'=>$burbujas,
            'canguro'=>$canguro,
            'club'=>$club,
            'dimensiones'=>$dimensiones,
            'divulgamat'=>$divulgamat,
            'expo'=>$expo,
            'gato'=>$gato,
            'ciga'=>$ciga,
            'teatromatico'=>$teatromatico,
            'penrose'=>$penrose,
            'museo'=>$museo,
            'irya'=>$irya,
            'rompecabezas'=>$rompecabezas,
            'topologia'=>$topologia,
            'papiroacertijos'=>$papiroacertijos,
            );

        return $total;

    }

}