# Resumo do Curso: Laravel 11/12 - Multi-Guard Authentication System A-Z

## 🧠 Principais Tópicos Abordados

### 🔐 Autenticação com Multi-Guards
- Conceito de guards no Laravel.
- Configuração de múltiplos guardas no `auth.php`.
- Criação de middlewares customizados para proteger rotas de acordo com o tipo de usuário.

### 👤 Gestão de Usuários
- Criação de modelos separados para Admins e Users.
- Definição de tabelas, migrations e factories específicas para cada tipo de usuário.
- Registro e login independentes para usuários e administradores.

### 🌐 Sistema de Rotas Separadas
- Organização de rotas por tipo de usuário (admin/user).
- Aplicação de middlewares de autenticação personalizados.
- Redirecionamentos após login com base no tipo de usuário.

### 🧪 Validação e Segurança
- Validação customizada dos formulários de login e registro.
- Proteção contra ataques CSRF e uso correto de middlewares de segurança.

### 🧰 Painéis de Controle Independentes
- Criação de dashboards distintos para usuários e administradores.
- Controle de acesso baseado no tipo de autenticação ativa.

### 🧼 Logout e Redirecionamento
- Logout para diferentes guards.
- Redirecionamento adequado após logout.

## 🛠️ Tecnologias e Ferramentas Utilizadas
- Laravel 11/12
- Blade Templates
- Eloquent ORM
- Laravel Breeze (como base leve para autenticação)
- Middleware, Service Providers e Guards

---

