
 function cek(){
 if(form.angka1.value == "" || form.angka2.value == ""){
 alert("data kosong"); //jika angka kosong maka pesan akan tampil
 exit;
 }
 }
 function tambah() {
 cek(); //panggil function cek
 a=eval(form.angka1.value); //mengisi variabel a dengan isi dari input name angka1
 b=eval(form.angka2.value); //mengisi variabel b dengan isi dari input name angka2
 c=a+b //menjumlahkan kedua variabel
 form.total.value = c; //memberikan hasil penjumlahan ke input name total
 }
 function kali() {
 cek();
 a=eval(form.angka1.value);
 b=eval(form.angka2.value);
 c=a*b
 form.total.value = c;
 }
 function kurang() {
 cek();
 a=eval(form.angka1.value);
 b=eval(form.angka2.value);
 c=a-b
 form.total.value = c;
 }
 function bagi() {
 cek();
 a=eval(form.angka1.value);
 b=eval(form.angka2.value);
 c=a/b
 form.total.value = c;
 }
 function reset() {
 form.angka1.value="";
 form.angka2.value="";
 form.total.value = "";
 }
