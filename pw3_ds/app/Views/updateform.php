<?php
helper('form');

echo form_open('calculos/recebe_dados');
echo form_input('id', 'Id');
echo form_input('a', 'Alterar valor A');
echo form_input('b', 'Alterar valor B');
echo form_input('c', 'Alterar valor C');

echo form_submit('mysubmit', 'Novo Calculo');

echo form_close();