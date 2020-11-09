- Ambiente - 
Com o intuíto de agilizar o processo de manter
um ambiente configurado para utilizar laravel e todas as 
suas ferramentas, instalei o 'laragon' para tal.
Todas as instalações e configurações de de dependências f
oram realizadas dentro do ambiente do laragon.

- Estrutura -
A estrutura utilizada segue o padrão MVC do laravel, criando as entidades em classes de tipo modelo (model),
para ali manter os atributos das entidades do projeto. Foi escolhido tal estrutura por questão de legibilidade do código,
agilidade de desenvolvimento (utilizando de todos os recursos disponíveis na documentação do laravel)

- Controladores - 
Foi utilizado comandos nativos do laravel para criar os controladores com as assinaturas e nome dos métodos 
pré-definidos.

- Testes -
Foram criados testes de unidade para os atributos da classe Bike
Foram criados 2 testes de funcionalidade para testar as rotas

- Endpoints API - 
GET 	http://api-bike.test/api/bikes/ - Lista todas as bikes cadastradas e seus atributos
GET 	http://api-bike.test/api/bikes/{id} - Consulta uma bike pelo id
DELETE 	http://api-bike.test/api/bikes/{id} - Deleta uma bike pelo id
PUT 	http://api-bike.test/api/bikes/{id} - Atualiza todas as informações de uma bike pelo id
PATH 	http://api-bike.test/api/bikes/{id} - Atualiza alguma informação expecífica de uma bike pelo id
POST 	http://api-bike.test/api/bikes - Cria uma bike ao enviar os parâmetros informados

$paramns = {
    "descricao": "Caloi",
    "modelo": "078B",
    "preco": 250,
    "data_cadastro": "2018-01-01 00:00:00",
    "vendida": 0
}


Plus
- Integração do backend com interface - 
Após criado os métodos padrão CRUD das clases e testados os endpoints por meio da ferramenta PostMan, 
foi instalado uma dependência do laravel com o composer chamdado: laravel/ui "^1.2" para fazer a integração
do backend com a interface, para assim ter um plus da API criada e também testada na camada da aplicação. 