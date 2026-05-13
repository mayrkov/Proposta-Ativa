Para que sua equipe (Daniel, Whendel, Miguel, Gustavo e Mairon) consiga rodar o projeto "Proposta Ativa" de forma idêntica à sua, preparei este arquivo **README.md** focado na configuração do ambiente.

---

## 🚀 Guia de Configuração: Projeto Proposta Ativa

Este guia contém os passos necessários para configurar o ambiente de desenvolvimento e garantir que todos os membros da equipe utilizem as mesmas dependências e configurações.

### 📋 Pré-requisitos

Antes de começar, certifique-se de ter instalado:

* **PHP** (>= 8.2)
* **Composer**
* **Node.js & NPM**
* **MySQL**

---

### 🔧 Passo a Passo para Iniciar

Siga estas etapas após clonar o repositório:

#### 1. Instalar Dependências do PHP

```bash
composer install

```

#### 2. Configurar o Arquivo de Ambiente

Crie uma cópia do arquivo `.env.example` e renomeie para `.env`. Certifique-se de que as configurações do banco de dados correspondam ao seu ambiente local (como visto na imagem **image_3a4296.jpg**):

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=proposta_ativa
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha

```

#### 3. Gerar a Chave da Aplicação

```bash
php artisan key:generate

```

#### 4. Instalar Dependências do Node e Corrigir o JavaScript

Como o Breeze foi instalado com o stack **Blade & Alpine**, precisamos garantir que os arquivos de suporte existam.

* Verifique se o arquivo `resources/js/bootstrap.js` existe.
* Caso não exista, crie-o com o seguinte conteúdo para evitar erros no Vite:
```javascript
import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

```



#### 5. Compilar os Assets

Execute o comando para gerar os arquivos processados de CSS e JS:

```bash
npm install
npm run build

```

#### 6. Executar as Migrações

Para criar as tabelas de autenticação (Login/Register) e outras tabelas do sistema:

```bash
php artisan migrate

```

---

### 🖥️ Executando o Projeto

Para visualizar a aplicação em desenvolvimento, você precisará de dois terminais abertos:

1. **Terminal 1 (Servidor PHP):**

```bash
    php artisan serve
    ```
2.  **Terminal 2 (Vite - Live Reload):**
    ```bash
    npm run dev
    ```

### 🛠️ Tecnologias Utilizadas no Momento
*   **Framework:** Laravel 11+
*   **Autenticação:** Laravel Breeze (Blade/Alpine)
*   **Testes:** Pest PHP
*   **Build Tool:** Vite

---


```