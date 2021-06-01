<?php if (!defined('IN_PHPBB')) exit; ?>Subject: Bem Vindo(a) ao <?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>

<?php echo (isset($this->_rootref['WELCOME_MSG'])) ? $this->_rootref['WELCOME_MSG'] : ''; ?>

Por favor, guarde este email para posteriores consultas. A informação da sua conta é a seguinte:

----------------------------
Usuário: 	<?php echo (isset($this->_rootref['USERNAME'])) ? $this->_rootref['USERNAME'] : ''; ?>

URL do Fórum:   <?php echo (isset($this->_rootref['U_BOARD'])) ? $this->_rootref['U_BOARD'] : ''; ?>
----------------------------

Sua senha foi armazenada com segurança em nosso banco de dados e não poderá ser recuperada. Caso tenha esquecido a mesma, você poderá definir uma nova usando este endereço de email associado a esta conta no login da comunidade.

Obrigado por registrar-se.

<?php echo (isset($this->_rootref['EMAIL_SIG'])) ? $this->_rootref['EMAIL_SIG'] : ''; ?>