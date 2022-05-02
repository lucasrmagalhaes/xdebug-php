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