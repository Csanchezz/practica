<?php 
	$indice_detallado = array(
    array('nombre' => 'Introducción', 'num' => 3),
    array('nombre' => 'Descripción',   'num' => 5, 'subtemas' => array(
            array('nombre' => 'Funciones','num' => 6,
                'subtemas' => array(
                    array('nombre' => 'Funciones detalladas', 'num'=>8)
                    )
                ),
            array('nombre' => 'Actividades','num' => 9)
            )
        ),
    array('nombre' => 'Contenido','num' => 15,
        'subtemas' => array(
            array('nombre' => 'Interfaces', 'num' => 15),
            array('nombre' => 'Funciones específicas','num' => 15),
            array('nombre' => 'Atributos', 'num' => 20,
                'subtemas' => array(
                    array('nombre' => 'Propiedades generales', 'num' => 22),
                    array('nombre' => 'Propiedades únicas', 'num' => 24)
                    )
                ),
            array('nombre' => 'Consideraciones', 'num' => 26)
            )
        ),
    array('nombre' => 'Apéndices','num' => 27)
    );

    $indice_loco = array(
    array('nombre' => 'Introducción', 'num' => 3),
    array('nombre' => 'Descripción',   'num' => 5, 'subtemas' => array(
            array('nombre' => 'Funciones','num' => 6,
                'subtemas' => array(
                    array('nombre' => 'Funciones detalladas', 'num'=>8,
                        'subtemas'=> array(
                            array('nombre'=>'algo', 'num'=>0,
                                'subtemas' => array(
                                    array('nombre'=> 'así', 'num' => 0,
                                        'subtemas'=> array(
                                            array('nombre'=>'como', 'num'=>0,
                                                'subtemas'=> array(
                                                    array('nombre'=>'esto', 'num'=>0,
                                                        'subtemas'=> array(
                                                            array('nombre'=>'xD', 'num'=>0)
                                                            ))
                                                    ))
                                            ))
                                    ))
                            ))
                    )
                ),
            array('nombre' => 'Actividades','num' => 9)
            )
        ),
    array('nombre' => 'Contenido','num' => 15,
        'subtemas' => array(
            array('nombre' => 'Interfaces', 'num' => 15),
            array('nombre' => 'Funciones específicas','num' => 15),
            array('nombre' => 'Atributos', 'num' => 20,
                'subtemas' => array(
                    array('nombre' => 'Propiedades generales', 'num' => 22),
                    array('nombre' => 'Propiedades únicas', 'num' => 24)
                    )
                ),
            array('nombre' => 'Consideraciones', 'num' => 26)
            )
        ),
    array('nombre' => 'Apéndices','num' => 27)
    );
    
	
	
 ?>