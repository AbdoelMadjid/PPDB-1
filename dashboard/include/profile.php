<h2>Profile</h2>

<div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">
<div class="card" style="margin-top: 50px">
<div class="card-header" data-background-color="blue">
<h4 class="title">Biodata Pendaftar</h4>
<p class="category">Periksan data anda dibawah, pastikan sudah benar</p>
</div>
<div class="card-content table-responsive">

<h3 style="overflow: hidden;"><b>Data Siswa</b></h3>
<table class="table table-hover">

    <tbody>
        <tr>
            <td><b>Email</b></td>
            <td>: <?php echo $email; ?> </td>
        </tr>
        <tr>
            <td><b>Nama</b></td>
            <td>: <?php echo $nama; ?></td>
        </tr>
        <tr>
            <td><b>Nama Panggilan</b></td>
            <td>: <?php echo $nama_panggilan;; ?></td>
        </tr>
        <tr>
            <td><b>TTL</b></td>
            <td>: <?php echo $tempat_lahir.", ".$tanggal_lahir;; ?>, <?php isset($_SESSION['birth_date'])  ?  print($_SESSION['birth_date']) : "2009-01-01"; ?></td>
        </tr>
        <tr>
            <td><b>Jenis Kelamin</b></td>
            <td>: <?php echo $jenis_kelamin; ?></td>
        </tr>
        
        <tr>
            <td><b>Anak Ke -</b></td>
            <td>: <?php echo $anak_ke." dari ".$jumlah_saudara?> bersaudara</td>
        </tr>
        
        <tr>
            <td><b>Agama</b></td>
            <td>: <?php echo $agama; ?></td>
        </tr>
        <tr>
            <td><b>Cita-cita</b></td>
            <td>: <?php echo $cita_cita; ?></td>
        </tr>
        <tr>
            <td><b>Hobby</b></td>
            <td>: <?php echo $hobby; ?></td>
        </tr>
        <tr>
            <td><b>Berat Badan</b></td>
            <td>: <?php echo $berat_badan; ?></td>
        </tr>
        <tr>
            <td><b>Tinggi Badan</b></td>
            <td>: <?php echo $tinggi_badan; ?></td>
        </tr>
        <tr>
            <td><b>Golongan Darah</b></td>
            <td>: <?php echo $gol_darah; ?></td>
        </tr>
    </tbody>
</table>

<h3><b>Data Alamat</b></h3>
<table class="table table-hover">

    <tbody>
        <tr>
            <td><b>Alamat Rumah</b></td>
            <td>: <?php echo $alamat_rumah;; ?></td>
        </tr>
        <tr>
            <td><b>RT</b></td>
            <td>: <?php echo $rt; ?></td>
        </tr>
        <tr>
            <td><b>RW</b></td>
            <td>: <?php echo $rw; ?></td>
        </tr>
        
        <tr>
            <td><b>Kelurahan</b></td>
            <td>: <?php echo $kelurahan; ?></td>
        </tr>
        
        <tr>
            <td><b>Kecamatan</b></td>
            <td>: <?php echo $kecamatan; ?></td>
        </tr>
        <tr>
            <td><b>Kota/Kabupaten</b></td>
            <td>: <?php echo $kota_kabupaten; ?></td>
        </tr>
        <tr>
            <td><b>Provinsi</b></td>
            <td>: <?php echo $provinsi; ?></td>
        </tr>
        <tr>
            <td><b>Kode Pos</b></td>
            <td>: <?php echo $pendidikan_terakhir_ibu; ?></td>
        </tr>
        
        <tr>
            <td><b>No Telpon Rumah</b></td>
            <td>: <?php echo $no_telpon_rumah; ?></td>
        </tr>
        
        <tr>
            <td><b>Tinggal Dengan</b></td>
            <td>: <?php echo $tinggal_dengan; ?></td>
        </tr>
    </tbody>
</table>

<h3><b>Data Orangtua</b></h3>
<table class="table table-hover">

    <tbody>
        <tr>
            <td><b>Nama Ayah</b></td>
            <td>: <?php echo $nama_ayah;; ?></td>
        </tr>
        <tr>
            <td><b>TTL</b></td>
            <td>: <?php echo $tempat_lahir_ayah.", ".$tanggal_lahir_ayah; ?></td>
        </tr>
        <tr>
            <td><b>Pendidikan Terakhir</b></td>
            <td>: <?php echo $pendidikan_terakhir_ayah;; ?></td>
        </tr>
        
        <tr>
            <td><b>Pekerjaan</b></td>
            <td>: <?php echo $pekerjaan_ayah; ?></td>
        </tr>
        
        <tr>
            <td><b>Agama</b></td>
            <td>: <?php echo $agama_ayah; ?></td>
        </tr>
        <tr>
            <td><b>Nama Ibu</b></td>
            <td>: <?php echo $nama_ibu;; ?></td>
        </tr>
        <tr>
            <td><b>TTL</b></td>
            <td>: <?php echo $tempat_lahir_ibu.", ".$tanggal_lahir_ibu; ?></td>
        </tr>
        <tr>
            <td><b>Pendidikan Terakhir</b></td>
            <td>: <?php echo $pendidikan_terakhir_ibu; ?></td>
        </tr>
        
        <tr>
            <td><b>Pekerjaan</b></td>
            <td>: <?php echo $pekerjaan_ibu; ?></td>
        </tr>
        
        <tr>
            <td><b>Agama</b></td>
            <td>: <?php echo $agama_ibu; ?></td>
        </tr>
        <tr>
            <td><b>Telp/HP</b></td>
            <td>: <?php echo $telp; ?></td>
        </tr>
    </tbody>
</table>

<h3><b>Data Rata-rata Nilai dari kelas 7-9</b></h3>
<table class="table table-hover">

    <tbody>
        <tr>
            <td><b>PAI</b></td>
            <td>: <?php echo $pai; ?></td>
        </tr>
        <tr>
            <td><b>Bahasa Indonesia</b></td>
            <td>: <?php echo $indo; ?></td>
        </tr>
        <tr>
            <td><b>Bahsa Inggris</b></td>
            <td>: <?php echo $inggris; ?></td>
        </tr>
        
        <tr>
            <td><b>Matematika</b></td>
            <td>: <?php echo $mate; ?></td>
        </tr>
        
        <tr>
            <td><b>IPA</b></td>
            <td>: <?php echo $ipa; ?></td>
        </tr>
        <tr>
            <td><b>IPS</b></td>
            <td>: <?php echo $ips; ?></td>
        </tr>
        <tr>
            <td><b>Pretasi yang pernah diraih</b></td>
            <td>: <?php echo $prestasi; ?></td>
        </tr>
        <tr>
            <td><b>Info SMK Wikrama 1 Garut dari</b></td>
            <td>: <?php echo $info_wkgarut; ?></td>
        </tr>
    </tbody>
</table>

