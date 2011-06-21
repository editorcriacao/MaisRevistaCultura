<li id="largura_texto">

    <div id="faixa-listrada" style="margin-top: 30px; width: 650px; margin-bottom: -20px;"></div>
    <div id="fundo-titulo" style="margin-left: 0; font-size: 15px;">CONTATO</div>
    <br>
    <div id="contato">
    <p>Preencha os campos abaixo para em contato com o site Giro São Paulo.</p>
    <br>
    <div id="colunas-formulario">
        <div id="coluna-um">
            <?php echo $this->Form->create('Sac', array('action' => 'contato', 'id' => 'faleConosco')) ?>
            <?php echo $this->Form->input('nomeCompleto', array('label' => 'Nome:', 'size' => '33')) ?>
            <?php echo $this->Form->input('email', array('label' => 'E-mail:', 'size' => '33')) ?>
            <?php echo $this->Form->input('endereço', array('label' => 'Endereço:', 'size' => '29')) ?>
            <?php echo $this->Form->input('estado', array('label' => 'Estado:', 'size' => '32')) ?>
            <?php echo $this->Form->input('cidade', array('label' => 'Cidade:', 'size' => '32')) ?>
            <ul id="telefone-vagas">
                <li style="margin-right: 11px; *margin-right: 3px; ">
                    <?php echo $this->Form->input('ddd', array('label' => 'DDD:', 'size' => '2')) ?>
                </li>
                <li>
                    <?php echo $this->Form->input('telefone', array('label' => 'Telefone:', 'size' => '11')) ?>
                </li>
            </ul>
        </div>
        <div id="coluna-dois">
            <p style="width: 200px; float: left; padding-left: 2px; margin-bottom: 0; padding-left: 10px\9; *padding-left: 2px;">Sua mensagem:</p>
            <?php echo $this->Form->input('mensagem', array('label' => ' ', 'type' => 'textarea', 'style' => 'width:290px; *margin-top:-200px !important; *width:270px !important; margin-top: 5px;')) ?>
            <?php echo $this->Form->submit('ENVIAR', array('style' => 'float:right; margin-right: 12px; margin-top: 10px; *margin-top:-190px !important; *margin-left: -10px !important;')) ?>
                </div>

        <?php echo $this->Form->end() ?>
    </div>
    <br>

</div>









</li>
