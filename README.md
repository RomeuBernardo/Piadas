# PiadaAPI - Primeira Aula Prática

Este projeto foi desenvolvido como parte da primeira aula prática da formação em desenvolvimento backend utilizando Laravel. Durante a aula, construímos uma API simples para buscar e criar piadas, além de entender conceitos iniciais de desenvolvimento com Laravel.

## Funcionalidades

- **Buscar Piada**: Retorna uma piada aleatória a partir de uma base de dados.
- **Criar Piada**: Permite adicionar uma nova piada à base de dados.

## Tecnologias Utilizadas

- **PHP 8.x**
- **Laravel 10.x**
- **SQLite** (ou o banco de dados da sua escolha)

## Requisitos

- PHP 8.x ou superior
- Composer
- SQLite ou outro banco de dados configurado no arquivo `.env`

## Instalação

1. Clone este repositório:

    ```bash
    git clone https://seurepositorio.git
    cd PiadaAPI
    ```

2. Instale as dependências:

    ```bash
    composer install
    ```

3. Crie e configure o arquivo `.env`:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. Configure o banco de dados no arquivo `.env`. Se estiver usando SQLite, crie um arquivo `database.sqlite`:

    ```bash
    touch database/database.sqlite
    ```

5. Inicie o servidor de desenvolvimento:

    ```bash
    php artisan serve
    ```

## Como Usar

### Buscar uma Piada

- **Método**: GET
- **Rota**: `/api/piadas`
- **Descrição**: Retorna uma piada aleatória.

### Criar uma Piada

- **Método**: POST
- **Rota**: `/api/piadas`
- **Parâmetros**:
    - `setup` (string, obrigatório): O texto da piada.
    - `punchiline` (string, obrigatório): O texto da piada.
- **Descrição**: Adiciona uma nova piada ao array.

## Conceitos Abordados

Durante a aula, cobrimos os seguintes conceitos:

- Estrutura básica de um projeto Laravel.
- Criação e configuração de controladores.
- Definição de rotas para API.

