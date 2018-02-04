var _appTitle = '权盈金服';

function getJSON(url) {
	return $.getJSON(url).then(function(data) {
		console.log('getJSON done',url,data);
		var d = $.Deferred();
		data = parseAPIJSONStr(data);
		d.resolve(data);
		return d.promise();
	},function(error) {
		console.log('getJSON done',url,error);
		var d = $.Deferred();
		d.reject({status:false,"msg":"系统繁忙，请稍后重试"});
		return d.promise();
	})
}

function isLogin() {
	return getJSON('http://option.fintgroup.com/users/need_tel').then(function(data) {
		console.log('isPhoneBind',data);
		var d = $.Deferred();
		if(data==null)d.reject();
		else
		{
			if(data && data['status']==false)
			{
				d.resolve(data);
			}
			else
			{
				d.reject(data);
			}
		}
		console.log('isPhoneBind','data',data,d.state());	
		return d.promise();	
	},function(error) {
		var d = $.Deferred();
		d.reject({status:false,"msg":"系统繁忙，请稍后重试"});
		return d.promise();
		console.log('isPhoneBind','error',error);
	})
}

function sendSMS(phoneNo) {
	var url = 'http://option.fintgroup.com/users/send_sms_code/'+phoneNo;
	return getJSON(url).then(function(data) {
		console.log('sendSMS','data',data);
		var d = $.Deferred();
		if(data==null)d.reject();
		else
		{
			if(data && data['status']==true)
			{
				d.resolve(data);
			}
			else
			{
				d.reject(data);
			}
		}
		return d.promise();	
	},function(error) {
		console.log('sendSMS','error',error);
	})
}

function validSMS(phonePin) {
	var url = 'http://option.fintgroup.com/users/check_tel/'+phonePin;
	return getJSON(url).then(function(data) {
		console.log('validSMS','data',data);
		var d = $.Deferred();
		if(data==null)d.reject();
		else
		{
			if(data && data['status']==true)
			{
				d.resolve(data);
			}
			else
			{
				d.reject(data);
			}
		}
		return d.promise();	
	},function(error) {
		console.log('validSMS','error',error);
	})
}

function getPersonInfo() {
	var url = 'http://option.fintgroup.com/myhome/index/json';
	return getJSON(url);
}

function parseAPIJSONStr(data) {
	var obj = {};
	if(typeof data ==="string")
	{
		try{
			obj = JSON.parse(data);
		}catch(e){
			obj = {};
		}
	}
	else
	{
		obj = data;
	}
	return obj;
}


function qAlert(msg) {
	app.dialog.alert(msg,_appTitle);
}