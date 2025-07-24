
# 📚 CRUD - Sistema de Gerenciamento de Textos

Este projeto é um CRUD (Create, Read, Update, Delete) desenvolvido em **PHP puro**, seguindo o padrão **MVC** (Model - View - Controller), e usando **MySQL** como banco de dados. Foi criado com foco na organização do código e separação clara entre lógica, visual e acesso ao banco.

---

## 🛠️ Funcionalidades

- ✅ Cadastrar novo texto
- 📄 Listar textos existentes
- ✏️ Editar texto
- 🗑️ Excluir texto com confirmação
- 🌐 Navegação entre telas via Controller
- 💾 Uso de prepared statements para segurança (evita SQL Injection)

---

## 🧑‍💻 Tecnologias utilizadas

- PHP 8.4.10
- MySQL
- Padrão MVC
- HTML5
- CSS3
- XAMPP (servidor local para desenvolvimento)

---

## 🗄️ Estrutura da tabela `textos`

```sql
CREATE TABLE textos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(255) NOT NULL,
  conteudo TEXT NOT NULL,
  data_criacao DATETIME DEFAULT CURRENT_TIMESTAMP
);
