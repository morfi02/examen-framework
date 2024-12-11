<?php



    class Aula extends Tabla
    {
        const TABLA = 'aulas';

        const LetraAula = ['D' => 'LomoIzquierdo', 'I' => 'LomoDerecho'];
        const PLANTA = ['P' => 'Primera', 'S' => 'Segunda', 'T' => 'Tercera'];

        function __construct()
        {
            parent::__construct(self::TABLA);

        }



        function existeAula($nombre,$letra,$numero,$planta,$id='')
        {
            $opt = [];
            
            $opt['select']['nombre']     = '';
            $opt['where']['nombre']      = $nombre;
            $opt['where']['letra'] = $letra;
            $opt['where']['numero']       = $numero;
            $opt['where']['planta']   = $planta;

            if(!empty($id))
                $opt['notwhere']['id'] = $id;
      
        
        
            $resultado = $this->seleccionar($opt);

            return $resultado->num_rows;
            
        }
    }