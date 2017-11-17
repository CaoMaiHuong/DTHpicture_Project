function validate(){
  		var tenDN = document.getElementById("username").value.length;
  		if(tenDN == 0){
    		alert("Vui lòng nhập tên đăng nhập");
  		}
    	else if(tenDN <= 4){
    		alert("Tên đăng nhập quá ngắn");
  		}
        var email = document.getElementById('email');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(email.value)) {
        alert('Hãy nhập địa chỉ email hợp lệ.\nVí dụ: Example@gmail.com');
        email.focus;
        return false;
    	}
        var pass =  document.getElementById("password").value.length;
        if(pass == 0){
    		alert("Vui lòng nhập mật khẩu");
  		}
    	else if(pass < 8){
    		alert("Mật khẩu cần ít nhất 8 kí tự");
           
  		}
        var cfpass =  document.getElementById("confirm-password").value.length;
        if(cfpass != pass){
        	alert("Mật khẩu nhập lại chưa đúng");
        }
  }