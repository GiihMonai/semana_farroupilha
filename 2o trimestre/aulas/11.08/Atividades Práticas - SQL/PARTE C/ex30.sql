-- a) LEFT JOIN clientes e pedidos
SELECT c.nome_cli, p.num_ped FROM cliente c LEFT JOIN pedido p ON c.cod_cli = p.cd_cli;

-- b) RIGHT JOIN pedidos e vendedores
SELECT p.num_ped, v.nome_vend FROM pedido p RIGHT JOIN vendedor v ON p.cd_vend = v.cod_vend;