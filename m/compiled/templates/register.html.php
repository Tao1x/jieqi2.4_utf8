<?php
echo '

<form class="form" name="frmregister" id="frmregister" action="'.$this->_tpl_vars['form_action'].'?do=submit" method="post">
	<fieldset>

		<div class="frow head">已有账号？ 请点击 <a class="hot" href="'.$this->_tpl_vars['jieqi_url'].'/login.php">登录</a></div>

		<div class="frow">
			<label class="col4 flabel"><span class="hot">*</span>用户名：</label>
			<div class="col8 last">
			<input type="text" class="text" name="username" id="username" maxlength="30" value="" onBlur="Ajax.Update(\''.$this->_tpl_vars['check_url'].'?item=u&username=\'+this.value, {outid:\'usermsg\', tipid:\'usermsg\', onLoading:\'<img border=\\\'0\\\' height=\\\'13\\\' width=\\\'13\\\' src=\\\''.$this->_tpl_vars['jieqi_url'].'/images/loading.gif\\\' /> Loading...\'});" />
			<div class="fss" id="usermsg">&nbsp;</div>
			</div>			
		</div>

		<div class="frow">
			<label class="col4 flabel"><span class="hot">*</span>密码：</label>
			<div class="col8 last">
			<input type="password" class="text" name="password" id="password" maxlength="20" value="" onBlur="Ajax.Update(\''.$this->_tpl_vars['check_url'].'?item=p&password=\'+this.value, {outid:\'passmsg\', tipid:\'passmsg\', onLoading:\'<img border=\\\'0\\\' height=\\\'13\\\' width=\\\'13\\\' src=\\\''.$this->_tpl_vars['jieqi_url'].'/images/loading.gif\\\' /> Loading...\'});" />
			<div class="fss" id="passmsg">&nbsp;</div>
			</div>
		</div>

		<div class="frow">
			<label class="col4 flabel"><span class="hot">*</span>确认密码：</label>
			<div class="col8 last">
			<input type="password" class="text" name="repassword" id="repassword" maxlength="20" value="" onBlur="Ajax.Update(\''.$this->_tpl_vars['check_url'].'?item=r&password=\'+password.value+\'&repassword=\'+this.value, {outid:\'repassmsg\', tipid:\'repassmsg\', onLoading:\'<img border=\\\'0\\\' height=\\\'13\\\' width=\\\'13\\\' src=\\\''.$this->_tpl_vars['jieqi_url'].'/images/loading.gif\\\' /> Loading...\'});"/>
			<div class="fss" id="repassmsg">&nbsp;</div>
			</div>
		</div>

		<div class="frow">
			<label class="col4 flabel"><span class="hot">*</span>Email：</label>
			<div class="col8 last">
			<input type="text" class="text" name="email" id="email" maxlength="60" value="" onBlur="Ajax.Update(\''.$this->_tpl_vars['check_url'].'?item=m&email=\'+this.value, {outid:\'mailmsg\', tipid:\'mailmsg\', onLoading:\'<img border=\\\'0\\\' height=\\\'13\\\' width=\\\'13\\\' src=\\\''.$this->_tpl_vars['jieqi_url'].'/images/loading.gif\\\' /> Loading...\'});"/>
			<div class="fss" id="mailmsg">&nbsp;</div>
			</div>
		</div>
		';
if($this->_tpl_vars['show_emailrand'] == 1){
echo '
		<div class="frow">
			<label class="col4 flabel">Email验证码：</label>
			<div class="col8 last">
				<input type="text" class="text" style="width:6em;" name="emailrand" id="emailrand"><input type="button" name="btnemailrand" id="btnemailrand" class="button" style="cursor:pointer;" value="发送验证码" onclick="if(typeof sendemailrand != \'function\') loadJs(\''.$this->_tpl_vars['jieqi_url'].'/scripts/register.js\'); sendemailrand(this);" />
				<div class="fss gray">发送后请检查您的Email获取验证码</div>
			</div>
		</div>
		';
}
echo '
		';
if($this->_tpl_vars['show_checkcode'] == 1){
echo '
		<div class="frow">
			<label class="col4 flabel">图片验证码：</label>
			<div class="col8 last">
				<input type="text" class="text" style="width:6em;" name="checkcode" id="checkcode" onfocus="if(this.form.imgccode.style.display == \'none\'){this.form.imgccode.src = \''.$this->_tpl_vars['jieqi_url'].'/checkcode.php?rand='.$this->_tpl_vars['jieqi_time'].'\';this.form.imgccode.style.display = \'\';}" title="点击显示验证码"><img name="imgccode" src="" style="cursor:pointer;vertical-align:middle;margin-left:3px;display:none;" onclick="this.src=\''.$this->_tpl_vars['jieqi_url'].'/checkcode.php?rand=\'+Math.random();" title="点击刷新验证码">
			</div>
		</div>
		';
}
echo '
		<div class="frow">
			<label class="col4 flabel">&nbsp;</label>
			<div class="col8 last">
			<button type="submit" class="button" name="submit">注　册</button>
			<input type="hidden" name="act" value="newuser"/>
			'.$this->_tpl_vars['jieqi_token_input'].'
			</div>
		</div>
	</fieldset>
</form>';
?>