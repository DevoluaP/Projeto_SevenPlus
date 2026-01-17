# SevenPlus

SevenPlus é um projeto de streaming que simula as funcionalidades de uma plataforma de vídeo sob demanda, incluindo gerenciamento de perfis, planos de assinatura e muito mais.

## Tecnologias Utilizadas

- HTML5
- CSS3
- JavaScript
- PHP

## Estrutura do Projeto

```
Projeto_SevenPlus/
│
├── css/                          # Arquivos de estilo
├── js/                           # Scripts JavaScript
├── img/                          # Imagens e recursos visuais
├── headerEfooter/                # Componentes de cabeçalho e rodapé
│
├── acesso.php                    # Controle de acesso
├── adicionar-perfil.php          # Adição de novos perfis
├── aparelhos-conectados.php      # Gestão de dispositivos
├── assinatura.php                # Gerenciamento de assinaturas
├── cadastro.php                  # Registro de novos usuários
├── email-enviado.php             # Confirmação de envio de e-mail
├── esqueci-senha.php             # Recuperação de senha
├── gerenciaFormaPgto.php         # Gestão de pagamentos
├── login.php                     # Autenticação de usuários
├── nova-senha.php                # Redefinição de senha
├── pagamento.php                 # Processamento de pagamentos
├── pagina-home.php               # Página inicial da plataforma
├── pagina-inicial.php            # Landing page
├── perfis.php                    # Gerenciamento de perfis
├── planos.php                    # Exibição de planos
├── quemEstaAssistindo.php        # Seleção de perfil
├── resgatarPrePago.php           # Resgate de códigos
├── seguranca.php                 # Configurações de segurança
└── senha-alterada.php            # Confirmação de alteração
```

## Como Executar

1. **Clone o repositório:**
   ```bash
   git clone https://github.com/DevoluaP/Projeto_SevenPlus.git
   ```

2. **Configure o servidor:**
   - Certifique-se de ter um servidor web com suporte a PHP instalado (Apache, Nginx, XAMPP, etc.)
   - Copie os arquivos para o diretório do servidor web

3. **Acesse a aplicação:**
   - Abra o navegador e acesse `http://localhost/Projeto_SevenPlus`

## Páginas Principais

- **`pagina-inicial.php`** - Landing page de apresentação
- **`login.php`** - Tela de autenticação
- **`cadastro.php`** - Registro de novos usuários
- **`planos.php`** - Escolha do plano de assinatura
- **`perfis.php`** - Gerenciamento de perfis
- **`quemEstaAssistindo.php`** - Seleção de perfil
- **`pagina-home.php`** - Página principal com conteúdo

## Contribuindo

Contribuições são bem-vindas! Sinta-se à vontade para:

1. Fazer um fork do projeto
2. Criar uma branch para sua feature (`git checkout -b feature/NovaFuncionalidade`)
3. Commit suas mudanças (`git commit -m 'Adiciona nova funcionalidade'`)
4. Push para a branch (`git push origin feature/NovaFuncionalidade`)
5. Abrir um Pull Request
