# 📚 Sistema de Biblioteca Universitária em PHP

## Descrição
Sistema de gerenciamento de livros para biblioteca universitária desenvolvido em PHP, com diferentes funcionalidades para professores e bibliotecários.

## Funcionalidades Principais

### 👤 Área de Login
- Dois tipos de usuários:
  - **Professor** 
  - **Bibliotecário** 
- Sistema de sessões para controle de acesso

### 📕 Cadastro de Livros (Bibliotecário)
- Adiciona novos livros ao acervo
- Armazena em arquivo `livros.txt`
- Formato: `Título|Autor|Editora|ISBN`

### 📝 Recomendações (Professores)
- Cadastra sugestões de compra
- Armazena em arquivo `pedidos.txt`
- Mesmo formato dos livros

### 🔍 Consultas
- **Visualizar livros**: disponível para ambos perfis
- **Ver pedidos**: apenas para bibliotecário

## Tecnologia Utilizada
- PHP estruturado
- Armazenamento em arquivos texto
- Gerenciamento de sessões

## Como Usar
1. Acesse `index.php`
2. Faça login como professor ou bibliotecário
3. Acesse as funcionalidades conforme seu perfil
