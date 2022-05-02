<h3 align="center">PHP Xdebug: ferramenta de debug e profiling</h3>

---

*Rodar um teste específico*
```
vendor/bin/phpunit --filter testBuscaLeiloesNaoFinalizados
```

---

**Por que var_dump não parece uma forma profissional de depurar?** <br>
Porque, para cada ponto do código que quisermos analisar, precisamos editar o código fonte. <br>
Se precisamos alterar o código fonte para analisar um ponto da aplicação, temos mais trabalho do que deveríamos. Além disso, existe sempre a possibilidade de esquecermos esse código de debug e enviar para produção.

---

[xdebug](https://xdebug.org/) <br>
[xdebug/wizard](https://xdebug.org/wizard)

**Windows** <br>
Rodar o comando ```phpinfo()``` e color na text area do wizard; <br>
Analisar as informações; <br>
Fazer o download; <br>
Renomear o arquivo para ```php_xdebug.dll``` <br>
Mover o arquivo para ```php/ext/```; e <br>
Adicionar no final do ```php.ini``` a extensão ```zend_extension = xdebug```.

**Linux/MAC**
```
pecl install xdebug
```

---

**Como é possível uma extensão do PHP alterar uma função já existente?** <br>
A função não é alterada, já que a extensão (Xdebug) reescreve-a. <br>
A função var_dump é redefinida pela extensão Xdebug. A "nova versão" traz mais informações do que a função original.

---

*Exibir erros*
```
display_errors = On
```

*Forçar exibição dos erros*
```
xdebug.force_display_errors = 1
```

*Qual o nível de erro que o PHP deve exibir*
```
error_reporting = E_ALL
```

*Forçar exibição do nível de erros*
```
xdebug.force_error_reporting = E_ALL
```

*Parar/interromper a aplicação quando encontrar um erro*
```
xdebug.halt_level = E_NOTICE
```

```@``` na frente de uma função ou código não exibe erros ou warning, serve para mascarar um erro.

*Com essa opção mesmo utilizando ```@``` o erro ou warning irá aparecer*
```
xdebug.scream = 1
```

---

**Onde, por padrão, são definidas as configurações para o PHP?** <br>
No arquivo ```php.ini``` <br>
O caminho para este arquivo pode ser encontrado através do comando ```php -i```, ou através da função ```phpinfo()```. Neste arquivo, diversas configurações podem ser informadas para personalizar a execução do PHP e suas extensões.

---