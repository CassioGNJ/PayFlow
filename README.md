<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Status da Build"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total de Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Última Versão Estável"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="Licença"></a>
</p>

## Sobre o PayFlow

**PayFlow** é um sistema de pagamentos simples desenvolvido com **Laravel** que simula a integração com diversos métodos de pagamento, como cartões de crédito, transferências bancárias e outros. Ele permite o processamento assíncrono de transações utilizando **Redis** como fila de mensagens e **cache** para otimizar o desempenho.

Este projeto demonstra habilidades em integração com APIs, gerenciamento de filas com Redis e otimização de cache, tudo sem custos adicionais.

---

## **Tecnologias Utilizadas**
- **Laravel:** Framework PHP para desenvolvimento backend.
- **MySQL/MariaDB:** Banco de dados relacional para armazenar os dados das transações.
- **Redis:** Armazenamento de cache e gerenciamento de filas de mensagens.
- **Stripe/PayPal API:** Integração simulada com gateways de pagamento.

---

## **Principais Funcionalidades**
1. **Cadastro de Usuário:**
   - Usuários podem se registrar com dados pessoais e informações de pagamento.
   - Os dados de pagamento são armazenados de forma segura utilizando criptografia.

2. **Registro de Transações:**
   - Transações são registradas no banco de dados com status (pendente, concluída, falhada).
   - O sistema atualiza o status da transação após a confirmação do pagamento.

3. **Integração com APIs de Pagamento:**
   - Integração simulada com **Stripe** ou **PayPal** para processamento de pagamentos.
   - Comprovantes de pagamento são gerados após a conclusão.

4. **Processamento Assíncrono com Redis:**
   - As transações são enfileiradas no Redis para processamento assíncrono.
   - O status da transação é atualizado após o processamento.

5. **Cache com Redis:**
   - Dados temporários são armazenados em cache utilizando Redis para melhorar o desempenho.

6. **Monitoramento com PM2:**
   - O processo do Laravel é gerenciado com **PM2** para garantir alta disponibilidade e desempenho.

---

## **Instalação e Configuração**

### **Pré-requisitos**
- **PHP 8.0+**
- **Composer** (Gerenciador de dependências PHP)
- **MySQL/MariaDB**
- **Redis** (Instalar Redis localmente ou usar uma instância gratuita como Redis Labs)
- **PM2** (Gerenciador de processos Node.js)

### **Passos para Instalação**

1. **Clonar o Repositório**
   - Clone o repositório para o seu diretório de trabalho:
     ```bash
     git clone https://github.com/usuario/payflow.git
     cd payflow
     ```

2. **Instalar Dependências**
   - Instale as dependências do Laravel:
     ```bash
     composer install
     ```

3. **Configurar o Banco de Dados**
   - Crie um banco de dados MySQL/MariaDB e atualize o arquivo `.env` com suas credenciais:
     ```dotenv
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=payflow
     DB_USERNAME=root
     DB_PASSWORD=
     ```

4. **Configurar o Redis**
   - No arquivo `.env`, configure o Redis:
     ```dotenv
     CACHE_DRIVER=redis
     SESSION_DRIVER=redis
     QUEUE_CONNECTION=redis
     ```

5. **Configurar Stripe/PayPal**
   - Defina as credenciais da API no arquivo `.env`:
     ```dotenv
     STRIPE_KEY=sua-chave-stripe
     STRIPE_SECRET=seu-secreto-stripe
     PAYPAL_CLIENT_ID=seu-id-cliente-paypal
     PAYPAL_SECRET=seu-secreto-paypal
     ```

6. **Executar Migrations**
   - Execute as migrations para criar as tabelas necessárias:
     ```bash
     php artisan migrate
     ```

7. **Instalar e Configurar PM2**
   - Instale o PM2 globalmente:
     ```bash
     npm install pm2@latest -g
     ```
   - Inicie a aplicação Laravel com o PM2:
     ```bash
     pm2 start php artisan serve --name "payflow"
     ```

---

## **Usando o Sistema**

1. **Cadastro de Usuário:**
   - Acesse a página de cadastro e insira os dados do usuário.
   - O sistema irá registrar o usuário e os dados de pagamento.

2. **Registro de Transações:**
   - O usuário pode iniciar uma transação de pagamento.
   - O sistema enviará uma solicitação para a API de pagamento (ex: Stripe).
   - O status da transação será atualizado conforme a resposta.

3. **Processamento Assíncrono com Redis:**
   - A transação será enfileirada no Redis para processamento assíncrono.
   - O status será atualizado após o processamento.

4. **Monitoramento e Desempenho:**
   - O sistema é monitorado com o PM2 para garantir que o processo do Laravel esteja sempre em execução.

---

## **Testes**
- **Testes de Integração com API de Pagamento:** Teste a comunicação com as APIs de pagamento (Stripe ou PayPal).
- **Testes de Filas (Redis):** Verifique se as transações estão sendo processadas corretamente pelas filas.
- **Testes de Cache (Redis):** Certifique-se de que os dados estão sendo armazenados e recuperados corretamente do Redis.

---

## **Conclusão**
**PayFlow** é um sistema de pagamentos simples e eficiente que utiliza **Redis** para filas de mensagens e cache, tornando-o uma solução econômica para processamento de pagamentos. O projeto demonstra habilidades em integração com APIs, processamento assíncrono e otimização de desempenho. Ele pode ser expandido para incluir recursos adicionais, como notificações em tempo real, relatórios detalhados de transações e muito mais.

---

## **Patrocinadores do Laravel**

Gostaríamos de agradecer aos seguintes patrocinadores pelo financiamento ao desenvolvimento do Laravel. Se você está interessado em se tornar um patrocinador, visite o [programa de Parceiros do Laravel](https://partners.laravel.com).

### **Parceiros Premium**

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

---

## **Contribuindo**

Obrigado por considerar contribuir para o projeto PayFlow! O guia de contribuição pode ser encontrado na [documentação do Laravel](https://laravel.com/docs/contributions).

## **Código de Conduta**

Para garantir que a comunidade Laravel seja acolhedora para todos, por favor, revise e siga o [Código de Conduta](https://laravel.com/docs/contributions#code-of-conduct).

## **Vulnerabilidades de Segurança**

Se você descobrir uma vulnerabilidade de segurança dentro do PayFlow, envie um e-mail para Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). Todas as vulnerabilidades de segurança serão prontamente tratadas.

## **Licença**

O projeto PayFlow é um software open-source licenciado sob a [licença MIT](https://opensource.org/licenses/MIT).
