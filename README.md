
- como no teste era api as rotas foram desenvolvidas no padrao rest ok,
 
- a rota de atualizar o paciente vc colocou como post, mas no padrão de api e put blz se for testar no postman.

-tem outro detalhe no test nao t nao tinha tabela de usaurio fazendo relacionamento com a tabela de medico, então pra se logar com jwt precisava de e-mail e password.
então eu coloquei um relacionamento a mais la beleza, quando você rodar o 
- php artisan migrate –seed.

- vai gerar vários usuarios com relacionamento com medico assim você conseguif azer os teste logado na app beleza,

- a senha e password ai você pega aqual quer e-mail no banco de dados e faz o login.



- api/cidades   

- api/cidades   

- api/cidades/create  

- api/cidades/{cidade}  

- api/cidades/{cidade}  

- api/cidades/{cidade} 

- api/cidades/{cidade}/edit  

- api/cidades/{id_cidade}/medicos 

- api/login  

- api/logout  

- api/me  

- api/medicos  

- api/medicos   

- api/medicos/create  

- api/medicos/{id_medico}/pacientes 

- api/medicos/{id_medico}/pacientes 

- api/medicos/{medico}  

- api/medicos/{medico}  

- api/medicos/{medico}  

- api/medicos/{medico}/edit 

- api/pacientes  

- api/pacientes 

- api/pacientes/create  

- api/pacientes/{paciente}  

- api/pacientes/{paciente}  

- api/pacientes/{paciente}  

- api/pacientes/{paciente}/edit 

- api/refresh  