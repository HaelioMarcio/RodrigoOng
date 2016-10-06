<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "O Pequeno Nazareno", // set false to total remove
            'description'  => 'A Associação O Pequeno Nazareno é uma organização  não   governamental sem fins lucrativos, especializada no trabalho com de    crianças e adolescentes em situação de moradias nas ruas e suas   famílias, com  atendimento em Fortaleza, Recife, Manaus e militância em todo   Brasil e na Europa.  Tornar sensível o poder público e a sociedade sobre   a gravíssima violação dos  direitos praticada contra crianças e   adolescentes que vivem nas ruas e  garantir-lhes um atendimento de   qualidade é parte fundamental de nosso  trabalho. As tragédias   familiares, os traumas da rua, o acesso as drogas, a  pobreza extrema   são nossos desafios cotidianos. Convencer uma criança a sair da  rua e   assumir um novo projeto de vida é uma tarefa demasiadamente complexa.    Convencer &quot;a rua&quot; a sair de dentro da criança é um desafio ainda  maior.   Não adianta acolher a criança da rua, mudando o lugar em que ela vive,    sem que ocorra uma mudança de valores em sua vida. A experiência do   dia-a-dia  foi promovendo o entendimento necessário para a afirmação de   uma pedagogia capaz  de oportunizar a mudança esperada. Hoje, com apenas   16 anos de existência  a organização O Pequeno Nazareno vem se    afirmando como uma das maiores instituições em território Nacional no    atendimento à crianças em situação de moradia nas ruas, atuando de   maneira  global na educação social de rua, atendimento institucional,   educação formal, a  profissionalizante, atendimento familiar, e   construção e controle de políticas  publicas para o público em foco.   Está na hora de dizer: Basta de crianças  morando nas ruas! ', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => [],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'        => "O Pequeno Nazareno", // set false to total remove
            'description'  => 'A Associação O Pequeno Nazareno é uma organização  não   governamental sem fins lucrativos, especializada no trabalho com de    crianças e adolescentes em situação de moradias nas ruas e suas   famílias, com  atendimento em Fortaleza, Recife, Manaus e militância em todo   Brasil e na Europa.  Tornar sensível o poder público e a sociedade sobre   a gravíssima violação dos  direitos praticada contra crianças e   adolescentes que vivem nas ruas e  garantir-lhes um atendimento de   qualidade é parte fundamental de nosso  trabalho. As tragédias   familiares, os traumas da rua, o acesso as drogas, a  pobreza extrema   são nossos desafios cotidianos. Convencer uma criança a sair da  rua e   assumir um novo projeto de vida é uma tarefa demasiadamente complexa.    Convencer &quot;a rua&quot; a sair de dentro da criança é um desafio ainda  maior.   Não adianta acolher a criança da rua, mudando o lugar em que ela vive,    sem que ocorra uma mudança de valores em sua vida. A experiência do   dia-a-dia  foi promovendo o entendimento necessário para a afirmação de   uma pedagogia capaz  de oportunizar a mudança esperada. Hoje, com apenas   16 anos de existência  a organização O Pequeno Nazareno vem se    afirmando como uma das maiores instituições em território Nacional no    atendimento à crianças em situação de moradia nas ruas, atuando de   maneira  global na educação social de rua, atendimento institucional,   educação formal, a  profissionalizante, atendimento familiar, e   construção e controle de políticas  publicas para o público em foco.   Está na hora de dizer: Basta de crianças  morando nas ruas! ', // set false to total remove
            'url'         => 'http://www.opequenonazareno.org.br/',
            'type'        => 'site',
            'site_name'   => 'O Pequeno Nazareno',
            'images'      => ['http://www.opequenonazareno.org.br/img/portfolio/muito-boa.jpg'],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
          //'card'        => 'summary',
          //'site'        => '@LuizVinicius73',
        ],
    ],
];
