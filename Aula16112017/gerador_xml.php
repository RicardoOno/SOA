<?php
//adiciona no header a instrução de que este é um arquivo xml
header('content-type: application/xml');

//array com informações de disciplinas
$alunos = array (
    
  ['NOME'=>'Arthur Cairo dos Santos',
   'RA'=>'2650831513004'
  ],

     
  ['NOME'=>'Ricardo Tadashi Ono',
   'RA'=>'2650831513030'
  ],
       
  ['NOME'=>'Mauro Eduardo Camargo',
   'RA'=>'2650831513010'
  ],
       
  ['NOME'=>'Marlon Narciso Lima de Sá',
   'RA'=>'2650831513025'
  ],
    
  ['NOME'=>'Jonadab Silva',
   'RA'=>'2650831513022'
  ],
       
  ['NOME'=>'Matheus Martins Almeida',
   'RA'=>'2650831513047'
  ],
       
  ['NOME'=>'Elton Santos',
   'RA'=>'2650831513035'
  ],
       
  ['NOME'=>'Matheus Lancaster',
   'RA'=>'2650831513029'
  ],
       
  ['NOME'=>'Geovane Moraes',
   'RA'=>'26508315130216'
  ],
       
  ['NOME'=>'Karen Lara',
   'RA'=>'2650831513020'
  ],
);
//Cria um xml com disciplinas na raiz
$xml = new SimpleXMLElement('<alunos/>');


//roda um foreach no array de disciplinas
foreach($alunos as $aluno)
{
    if ($_GET['ra'] === $aluno['RA']){
  //joga os dados da disciplina atual para variaveis
  $nome= $aluno['NOME'];
  $ra= $aluno['RA'];



  //adiciona um nó filho chamado disciplina e atribui sua posição para uma variável.
  $aluno = $xml->addChild('aluno');

  //povoa o nó de disciplina atual com os dados.
  $aluno->addChild('NOME', $nome);
  $aluno->addChild('RA', $ra);
  
}


}

//exibe o xml
echo $xml->asXML();

?>
