<?php $this->load->view('print/headjs.php');?>

<body>
<div id="content" class="container_12 clearfix">
<div id="content-main" class="grid_2">

<link href="<?php echo base_url()?>assets/css/surat.css" rel="stylesheet" type="text/css" />
<div>
<table width="100%">

<tr> <img src="<?php echo LogoDesa($desa['logo']);?>" alt="" class="logo"></tr>

<div class="header">
<h4 class="kop">PEMERINTAH KABUPATEN <?php echo strtoupper(unpenetration($desa['nama_kabupaten']))?> </h4>
<h4 class="kop">KECAMATAN <?php echo strtoupper(unpenetration($desa['nama_kecamatan']))?> </h4>
<h4 class="kop">DESA <?php echo strtoupper(unpenetration($desa['nama_desa']))?></h4>
<h5 class="kop2"><?php echo (unpenetration($desa['alamat_kantor']))?> </h5>
<div style="text-align: center;">
<hr /></div></div>

</table>
<table width="100%">
</table>
<table width="100%">
<div align="center"><u><h4 class="kop">SURAT KETERANGAN BEDA IDENTITAS</h4></u></div>
<div align="center"><h4 class="kop2">Nomor : 471.2/<?php echo $input['nomor']?>/PEM/<?php echo date("Y")?></h4></div>
</table>
<div class="clear"></div>

<table width="100%">

<tr><td class="indentasi">Yang bertanda tangan dibawah ini Kepala Desa <?php echo unpenetration($desa['nama_desa'])?> Kecamatan <?php echo unpenetration($desa['nama_kecamatan'])?> Kabupaten <?php echo unpenetration($desa['nama_kabupaten'])?> Provinsi <?php echo unpenetration($desa['nama_propinsi'])?> menerangkan dengan sebenarnya kepada :  </td></tr>
<tr>

<link href="<?php echo base_url()?>assets/css/report.css" rel="stylesheet" type="text/css">
<table class="border thick">
	<thead>
		<tr class="border thick">

<?php
	$i=0;
	if($anggota){
		foreach($anggota AS $data1){
			$i++;
		}
	}
?>

<tr></tr>
<?php  if($anggota){ ?>


		<tr>
			<th align="center" width=''>No</th>
			<th align="center" width='250'>Nama</th>
			<th align="center" >NIK</th>
			<th align="center" align="center">Jenis Kelamin</th>
			<th align="center" width='450' align="center">Tempat Tanggal Lahir</th>
			<th align="center" >Pekerjaan</th>
			<th align="center" >Alamat</th>
			</tr>
		</thead>

		<tbody>
		</tr>
	<tbody><?php  $i=0;?>
		<?php  foreach($anggota AS $data1){$i++;?>
		<tr>
            <td align="center"width="4"> <?php echo $i?></td>
			<td> <?php echo unpenetration($data1['nama'])?></td>
			<td align="center"><?php echo $data1['nik']?></td>
			<td align="center"><?php echo $data1['sex']?></td>
			<td align="left"> <?php echo $data1['tempatlahir']?>, <?php echo tgl_indo($data1['tanggallahir'])?></td>
			<td align="left"><?php echo $data1['pekerjaan']?></td>
			<td align="center"><?php echo $data['alamat']?></td>
		</tr>
		</tr>
		</thead>

		<tbody>
		<?php  }?>
	</tbody>

<?php  } ?>
<tr></tr>
<?php  if($pengikut){ ?>
<tr></tr>
<tr></tr>
<?php  } ?>
</table>
<table width="100%">
<tr></tr>
<tr></tr>
<tr><td class="indentasi">Bahwa nama tersebut diatas merupakan identitas yang tertera pada KTP dan Kartu Keluarga (KK) sedangkan pada Kartu Indonesia Sehat (KIS) tertulis : </td></tr>
<tr></tr>
<link href="<?php echo base_url()?>assets/css/report.css" rel="stylesheet" type="text/css">
<table class="border thick">
	<thead>
		<tr class="border thick">
			<tr>
			<th align="center" width='10'>No</th>
			<th align="center" width='100'>No. Kartu</th>
			<th align="center" width='150'>Nama di Kartu</th>
			<th align="center" width='90'>NIK</th>
			<th align="center" width='150'>Alamat di Kartu</th>
			<th align="center" width='80'>Tanggal Lahir</th>
			<th align="center" width='80'>Faskes Tingkat I</th>
			<tr>
	</thead>
</tr>
<thead>
<tbody>
			<tr>
			<td align="center"><?php echo $input['nomor1']?></td>
			<td align="center"><?php echo $input['kartu1']?></td>
			<td align="left"><?php echo $input['nama1']?></td>
			<td align="center"><?php echo $input['nik1']?></td>
			<td align="left"><?php echo $input['alamat1']?></td>
			<td align="left"><?php echo $input['ttl1']?></td>
			<td align="center"><?php echo $input['faskes1']?></tr></td>
<tr></tr>
</thead>
</tbody>
</tr>
<tr>
			<td align="center"><?php echo $input['nomor2']?></td>
			<td align="center"><?php echo $input['kartu2']?></td>
			<td align="left"><?php echo $input['nama2']?></td>
			<td align="center"><?php echo $input['nik2']?></td>
			<td align="left"><?php echo $input['alamat2']?></td>
			<td align="left"><?php echo $input['ttl2']?></td>
			<td align="center"><?php echo $input['faskes2']?></td>
 			<tr>
</tr>
<tr>
			<td align="center"><?php echo $input['nomor3']?>
			<td align="center"><?php echo $input['kartu3']?>
			<td align="left"><?php echo $input['nama3']?>
			<td align="center"><?php echo $input['nik3']?>
			<td align="left"><?php echo $input['alamat3']?>
			<td align="left"><?php echo $input['ttl3']?>
			<td align="center"><?php echo $input['faskes3']?></td>
			<tr>
</tr>
<tr>
			<td align="center"><?php echo $input['nomor4']?></td>
			<td align="center"><?php echo $input['kartu4']?></td>
			<td align="left"><?php echo $input['nama4']?></td>
			<td align="center"><?php echo $input['nik4']?></td>
			<td align="left"><?php echo $input['alamat4']?></td>
			<td align="left"><?php echo $input['ttl4']?></td>
			<td align="center"><?php echo $input['faskes4']?></td>
			<tr>
</tr>
<tr>
			<td align="center"><?php echo $input['nomor5']?></td>
			<td align="center"><?php echo $input['kartu5']?></td>
			<td align="left"><?php echo $input['nama5']?></td>
			<td align="center"><?php echo $input['nik5']?></td>
			<td align="left"><?php echo $input['alamat5']?></td>
			<td align="left"><?php echo $input['ttl5']?></td>
			<td align="center"><?php echo $input['faskes5']?></td>
			<tr>
</tr>
<tr>
			<td align="center"><?php echo $input['nomor6']?></td>
			<td align="center"><?php echo $input['kartu6']?></td>
			<td align="left"><?php echo $input['nama6']?></td>
			<td align="center"><?php echo $input['nik6']?></td>
			<td align="left"><?php echo $input['alamat6']?></td>
			<td align="left"><?php echo $input['ttl6']?></td>
			<td align="center"><?php echo $input['faskes6']?></td>
			<tr>
</tr>
<tr>
			<td align="center"><?php echo $input['nomor7']?></td>
			<td align="center"><?php echo $input['kartu7']?></td>
			<td align="left"><?php echo $input['nama7']?></td>
			<td align="center"><?php echo $input['nik7']?></td>
			<td align="left"><?php echo $input['alamat7']?></td>
			<td align="left"><?php echo $input['ttl7']?></td>
			<td align="center"><?php echo $input['faskes7']?></td>
			<tr>
</tr>
<thead>
<tbody>
</tbody>

<table width="100%">
<tr></tr>
<tr><td class="indentasi">Dan Menurut Pengamatan dan Pengetahuan Kami hingga saat dikeluarkannya surat keterangan ini bahwa yang namanya diatas merupakan orang yang satu/ sama.</td></tr>
<tr></tr>
</table>
<table width="100%">
<tr></tr>
<tr></tr>
<tr><td class="indentasi">Surat Keterangan ini dibuat untuk Keperluan : <b><?php echo $input['keperluan']?>
<tr></tr>
</table>
<table width="100%">
<tr></tr>
<tr><td class="indentasi">Demikian surat keterangan ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya</td></tr>
<tr></tr>
</table>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
</table></div>
<table width="100%">
<tr></tr>
<tr></tr>
<tr></tr>
<tr><td></td><td width="55%"></td><td align="center"><?php echo unpenetration($desa['nama_desa'])?>, <?php echo $tanggal_sekarang?></td></tr>
<tr><td></td><td width="55%"></td><td align="center"><?php echo ($input['atas_nama'])?></td></tr>
<tr><td></td><td width="55%"></td><td align="center"><?php echo unpenetration($input['jabatan'])?></td></tr>
</table></div>
<table width="100%">
</table></div>
<table width="100%">
</table></div>
<table width="100%">
</table></div>
<table width="100%">
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr><td></td><td width="55%"></td><td align="center"><b><u><?php echo unpenetration($input['pamong'])?> </u></td></tr>
<tr><td></td><td width="55%"></td><td align="center"><?php echo ($input['pamong_nip'])?></td></tr>
</table>  </div></div>
<div id="aside">
</div>
</div>
</body>
</html>
