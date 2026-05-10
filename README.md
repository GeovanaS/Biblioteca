# Sistema de Biblioteca 📚

Sistema web desenvolvido em PHP e MySQL para gerenciamento de uma biblioteca acadêmica.

---

## Funcionalidades

### 👨‍🎓 Alunos
- Cadastro de alunos
- Listagem de alunos
- Edição de alunos
- Exclusão de alunos

### 📖 Livros
- Cadastro de livros
- Associação de livros com áreas
- Controle de disponibilidade
- Listagem de livros
- Edição e exclusão

### 🏷️ Áreas
- Cadastro de áreas
- Listagem de áreas
- Edição e exclusão

### 🔄 Reservas / Empréstimos
- Empréstimo de livros
- Seleção de múltiplos livros
- Controle de status
- Devolução de livros
- Atualização automática de disponibilidade

---

# Tecnologias Utilizadas

- PHP
- MySQL
- HTML5
- CSS3
- XAMPP

---

# Estrutura do Projeto

```bash
biblioteca/
│
├── aluno/
├── area/
├── livro/
├── reserva/
├── includes/
├── css/
├── sql/
└── index.php
```

---

# Banco de Dados

O banco de dados utilizado chama-se:

```sql
biblioteca
```

Importe o arquivo:

```bash
sql/biblioteca.sql
```

no phpMyAdmin.

---

# Como Executar o Projeto

## 1. Clonar o repositório

```bash
git clone https://github.com/GeovanaS/Biblioteca.git
```

---

## 2. Mover para a pasta do XAMPP

Coloque o projeto dentro da pasta:

```bash
htdocs
```

Exemplo:

```bash
C:/xampp/htdocs/biblioteca
```

---

## 3. Iniciar o XAMPP

Ative:
- Apache
- MySQL

---

## 4. Criar o banco de dados

Abra o phpMyAdmin:

```bash
http://localhost/phpmyadmin
```

Importe o arquivo:

```bash
biblioteca.sql
```

---

## 5. Executar o sistema

Abra no navegador:

```bash
http://localhost/biblioteca
```

---

# Funcionalidades do Sistema

## Cadastro de Livro
- Seleção da área através de selectbox
- Livro inicia como disponível

## Reserva de Livros
- Apenas livros disponíveis aparecem
- Possibilidade de selecionar múltiplos livros

## Devolução
- Atualiza o status da reserva
- Atualiza o status do livro automaticamente

---

# Autor

Projeto desenvolvido por Geovana Silveira.
