- Ambiente - 
Com o intuíto de agilizar o processo de manter
um ambiente configurado para utilizar laravel e todas as 
suas ferramentas, instalei o 'laragon' para tal.
Todas as instalações de dependências foram realizadas dentro do ambiente
do laragon.

- Estrutura -
A estrutura utilizada segue o padrão MVC do laravel, criando as entidades em classes de tipo modelo (model),
para ali manter os atributos das entidades do projeto. Foi escolhido tal estrutura por questão de legibilidade do código,
agilidade de desenvolvimento (utilizando de todos os recursos disponíveis na documentação
do laravel)

- Regra de negócio - 
3 novas entidades foram identificadas no projeto além da 'Bike', para tornar-lo mais legível e distinguir as ações da aplicação:
 - Cliente
 - Loja
 - Compra
Para assim, não só manter o controle das bicicletas, mas ter um registro da compra e relaciona-la a um cliente e uma loja. 

- Controladores - 
Foi utilizado comandos nativos do laravel para criar os controladores com as assinaturas e nome dos métodos 
pré-definidos.

- Integração do backend com interface - 
Após criado os métodos padrão CRUD das clases, foi necessário instalado da dependência do utilizando composer laravel/ui "^1.2" para fazer a integração
da interface com o backend. Para estruturar as rotas e a autenticação, foi utilizado o comando 'npm install && npm run dev'