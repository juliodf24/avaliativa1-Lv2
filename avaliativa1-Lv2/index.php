<?PHP
include 'Empregado.php';
include 'Fatura.php';


$celular = new Fatura();
$celular->setNumero("132d5");
$celular->setDescricao("smartphone com o sistema operacional Android");
$celular->setPrecoUnid(1500.00);
$celular->setQtdItem(2);


$total = $celular->getTotalFatura();
echo("\n o valor total da fatura é : R$ $total \n");


$emp1 = new Empregado;
$emp1->setNome('Paulo');
$emp1->setSobrenome('Cesar');
$emp1->setSalarioMensal(120);

$emp2 = new Empregado;
$emp2->setNome('João');
$emp2->setSobrenome('francisco');
$emp2->setSalarioMensal(220);





$salarioAnual = $emp1->getSalarioAnual();

echo("\n o salario anual do empregado 1 é R$: $salarioAnual");


$salarioAnual = $emp2->getSalarioAnual();

echo("\n o salario anual do empregado 2 é R$: $salarioAnual \n");



$salarioNovo = $emp1->aumento(10);
echo("\n o salario anual do empregado 1 com aumento é R$: $salarioNovo");




$salarioNovo = $emp2->aumento(10);
echo("\n o salario anual do empregado 2 com aumento é R$: $salarioNovo");