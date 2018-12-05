function showtime(){
			var thoigian = new Date();
			var gio = thoigian.getHours();
			var phut = thoigian.getMinutes();
			var giay = thoigian.getSeconds();
			document.getElementById("dongho").innerHTML= gio+" : "+phut+" : "+giay;
			setTimeout(showtime,1000);
		}
		showtime();

var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd = '0'+dd
} 

if(mm<10) {
    mm = '0'+mm
} 

today = dd + '/' + mm + '/' + yyyy;
document.getElementById("today").innerHTML=today;

