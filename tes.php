<!-- <!DOCTYPE html>
<html>
<head>
	<title>sdf</title>
</head>
<body>
	<h2></h2>
</body>
	<script type="text/javascript">
		let h2 = document.querySelector('h2')
		let str = '10,000,000,000'
		var justOneDot = str.replace(/[.](?=.*?\.)/g, '');
		var outStr = parseFloat(justOneDot.replace(/,/g,'')); 

			h2.innerHTML = outStr;

	</script>
</html> -->



<!DOCTYPE html>
<html>
<head>
	<title>Membuat Format Rupiah Dengan Javascript - www.malasngoding.com</title>
</head>
<body>

	<style type="text/css">
	body {
		font-family: sans-serif;
	}
	.kotak {
		width: 350px;
		margin: auto;
		margin-top: 15px;
		padding: 10px;
	}

	p{
		margin-bottom: 20px;
		color: #0004ff;
	}

	input {
		text-align: right;
		width: 100%;
		margin-bottom: 20px;
		margin-top: 10px;
		padding: 7px 10px;
		font-size: 18px;
	}
	</style>

	<center>
		<h1>Membuat Format Rupiah Dengan Javascript <br/> www.malasngoding.com</h1>
	</center>

	<div class="kotak">
		<p>Ketik jumlah nominal pada form di bawah ini.</p>
		<span>Nominal Rupiah. :</span>
		<input type="text" id="rupiah"/>
        <button onclick="convert()">convert</button>

        <input type="text" name="" id="hasil">

        <input type="text" name="" id="balik">
	</div>


	<script type="text/javascript">

    function convert(){
        var rupiah = document.getElementById('rupiah');
        var hasil = document.getElementById('hasil');
        var ba;ik = document.getElementById('balik');


        hasil.value = delFormatRupiah(rupiah.value);
        balik.value= formatRupiah(hasil.value,'Rp ');


    }
		
		var rupiah = document.getElementById('rupiah');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, '');
		});

		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^.\d]/g, '').toString(),
			split   		= number_string.split('.'),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? ',' : '';
				rupiah += separator + ribuan.join(',');
			}

			rupiah = split[1] != undefined ? rupiah + '.' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp ' + rupiah : '');
        }
        


        function delFormatRupiah(num){

            var str = "? this is a ? test999 ?";
var justOneDot = str.replace(/[.](?=.*?\.)/g, '');
var outStr = parseFloat(justOneDot.replace(/[^0-9.]/g,'')); 
//document.write(result);
            return (outStr);
        }
	</script>
</body>
</html>