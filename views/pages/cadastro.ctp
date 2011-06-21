<li id="largura_texto">

    <div id="faixa-listrada" style="margin-top: 30px; width: 650px; margin-bottom: -20px;"></div>
    <div id="fundo-titulo" style="margin-left: 0; font-size: 15px;">CADASTRO</div>
    <br>
<div id="cadastro">
    <?php echo $this->Form->create('Usuario', array('action' => 'cadastro')) ?>
    <?php echo $this->Form->input('nome_usuario', array('label' => 'Nome completo*: ', 'size' => '50', 'id' => 'nome')) ?>
    <span style="font-size: 10px; font-family: arial; color: #333;  margin-top: -8px; position: absolute; display:none" id="error-nome">Campo NOME não pode ficar vazio.</span>
    <?php echo $this->Form->input('email_usuario', array('label' => 'E-mail*: ', 'size' => '58', 'id'=>'email')) ?>
    <span style="font-size: 10px; font-family: arial; color: #333;  margin-top: -8px; position: absolute; display:none" id="error-email">Campo E-MAIL não pode ficar vazio ou o Campo E-MAIL tem que ser um e-mail válido.</span>
    <?php echo $this->Form->input('login_usuario', array('label' => 'Login*: ', 'size' => '59', 'id'=>'login')) ?>
    <span style="font-size: 10px; font-family: arial; color: #333;  margin-top: -8px; position: absolute; display:none" id="error-login">Campo LOGIN não pode ficar vazio.</span>
    <?php echo $this->Form->input('senha_usuario', array('label' => 'Senha*: ', 'size' => '29', 'id'=>'senha', 'type'=>'password')) ?>
    <span style="font-size: 10px; font-family: arial; color: #333;  margin-top: -8px; position: absolute; display:none" id="error-senha">Campo SENHA não pode ficar vazio ou o campo SENHA deve contar no minímo 6 caracteres.</span>
    <?php echo $this->Form->input('confirmar_senha_usuario', array('label' => 'Confirmar Senha: ', 'size' => '20', 'id'=>'senha-2', 'type'=>'password')) ?>
        <span style="font-size: 10px; font-family: arial; color: #333;  margin-top: -8px; position: absolute; display:none" id="error-senha-2">A senha deve ser a mesma nos dois campos.</span>
    <div style="margin-left: 20px">
        <span style="font-size: 12px; font-family: arial; color: #666">*Preenchimento obrigatório.</span>
        <br /><br>
        <br />
        <p style="font-size: 14px; color: #333; font-family: arial;">Deseja receber newsletters com novidades, promoções, eventos e outras informações?</p><br /><br />
        <input type="radio" name="data[Usuario][email_marketing_usuario]" id="UsuarioEmailMarketingUsuario1" value="1"  /><span class="newsletter">Sim</span>
        <input type="radio" name="data[Usuario][email_marketing_usuario]" id="UsuarioEmailMarketingUsuario0" value="0" checked="checked"  /><span class="newsletter">Não</span><br/><br/>

        <?php echo $this->Form->submit('Cadastrar') ?>
        <?php echo $this->Form->end() ?>
    </div>
</div>


    
</li>