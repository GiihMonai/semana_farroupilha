<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
 $con = new mysqli("localhost", "root", "", "escola");
 $con->set_charset("utf8mb4");
 // 1) Consultar todos os alunos cadastrados
 $sql = "SELECT id, nome, idade, curso FROM alunos";
 $resultado = $con->query($sql);
 // 2) Exibir os registros retornados
 while ($aluno = $resultado->fetch_assoc()) {
 echo "ID: " . $aluno['id'] .
 " - Nome: " . $aluno['nome'] .
 " - Idade: " . $aluno['idade'] .
 " - Curso: " . $aluno['curso'] . "<br>";
 }
} catch (mysqli_sql_exception $e) {
 echo "Erro: " . $e->getMessage();
} finally {
 $con->close();
}
?>
