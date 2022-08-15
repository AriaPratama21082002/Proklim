<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
          <h1>Lembaga</h1>
            <form>
                <div class="inner">
                            <div class="form-title">
                              <h3 class="">Lembaga</h3>
                            </div>
                            <div class="form-content">

                              <div class="row">
                                <div class="col-md-12 ">

                                  <div class="form-group field-signupform-nama_org required">

<input type="text" id="signupform-nama_org" class="form-control input-lg do1" name="SignupForm[nama_org]" title="Diisi dengan nama penanggung jawab aksi pengendalian perubahan iklim." placeholder="Nama Lembaga" data-toggle="tooltip" data-placement="left" aria-required="true">

<p class="help-block help-block-error"></p>
</div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6 col-sm-12">
                                                                    <div class="form-group field-signupform-id_member_type required">

<select id="signupform-id_member_type" class="form-control" name="SignupForm[id_member_type]" title="Pilih jenis lembaga." data-toggle="tooltip" data-placement="left" aria-required="true">
<option value="">--Jenis Lembaga--</option>
<option value="1">Kementerian/Lembaga</option>
<option value="2">Pemerintah Provinsi</option>
<option value="3">Pemerintah Desa</option>
<option value="4">Lembaga Swadaya Masyarakat (LSM)</option>
<option value="5">Dunia Usaha</option>
<option value="6">Masyarakat Umum / Lembaga Adat</option>
<option value="7">Lembaga Mitra</option>
<option value="9">Perguruan Tinggi</option>
<option value="10">Lembaga Penelitian</option>
<option value="11">Pemerintah Kota</option>
<option value="12">Pemerintah Kabupaten</option>
<option value="13">Lain - lain</option>
</select>

<p class="help-block help-block-error"></p>
</div>                                </div>

                                <div class="col-md-6 col-sm-12">
                                  <div class="form-group field-signupform-website">

<input type="text" id="signupform-website" class="form-control input-lg" name="SignupForm[website]" title="Diisi dengan alamat website lembaga yang dikelolanya." placeholder="Website" data-toggle="tooltip" data-placement="left">

<p class="help-block help-block-error"></p>
</div>                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6 col-sm-12">
                                  <div class="form-group field-signupform-email required">

<input type="text" id="signupform-email" class="form-control input-lg do3" name="SignupForm[email]" title="Diisi dengan alamat email lembaga yang diwakili." placeholder="Email" data-toggle="tooltip" data-placement="left" aria-required="true">

<p class="help-block help-block-error"></p>
</div>                                </div>
                                <div class="col-md-6 col-sm-12">
                                  <div class="form-group field-signupform-telepon required">

<input type="text" id="signupform-telepon" class="form-control input-lg do3" name="SignupForm[telepon]" title="Diisi dengan no telepon penanggung jawab aksi yang bisa dihubungi." placeholder="Telepon" data-toggle="tooltip" data-placement="left" aria-required="true">

<p class="help-block help-block-error"></p>
</div>                                </div>
                              </div>

                              <div class="row">

                                <div class="col-md-6 col-sm-12">
                                  <div class="form-group field-signupform-alamat required">

<textarea id="signupform-alamat" class="form-control input-lg input-long pull-right" name="SignupForm[alamat]" title="Diisi dengan alamat dari lembaga yang diwakili." placeholder="Alamat" data-toggle="tooltip" data-placement="left" aria-required="true"></textarea>

<p class="help-block help-block-error"></p>
</div>                                </div>

                                <div class="col-md-6 col-sm-12">

                                                                    <div class="form-group field-signupform-id_provinsi required">

<select id="signupform-id_provinsi" class="form-control" name="SignupForm[id_provinsi]" title="Pilih provinsi" data-toggle="tooltip" data-placement="left" onchange="$.get(
                                      &quot;/index.php?r=site%2Fkabkot&quot;,
                                      { id: $(this).val() }
                                      ).done(function( data ) {
                                        $(&quot;select#signupform-id_kabkota&quot;).html(data);
                                    })" aria-required="true">
<option value="">--Provinsi--</option>
<option value="11">ACEH</option>
<option value="12">SUMATERA UTARA</option>
<option value="13">SUMATERA BARAT</option>
<option value="14">RIAU</option>
<option value="15">JAMBI</option>
<option value="16">SUMATERA SELATAN</option>
<option value="17">BENGKULU</option>
<option value="18">LAMPUNG</option>
<option value="19">KEPULAUAN BANGKA BELITUNG</option>
<option value="21">KEPULAUAN RIAU</option>
<option value="31">DKI JAKARTA</option>
<option value="32">JAWA BARAT</option>
<option value="33">JAWA TENGAH</option>
<option value="34">D I YOGYAKARTA</option>
<option value="35">JAWA TIMUR</option>
<option value="36">BANTEN</option>
<option value="51">BALI</option>
<option value="52">NUSA TENGGARA BARAT</option>
<option value="53">NUSA TENGGARA TIMUR</option>
<option value="61">KALIMANTAN BARAT</option>
<option value="62">KALIMANTAN TENGAH</option>
<option value="63">KALIMANTAN SELATAN</option>
<option value="64">KALIMANTAN TIMUR</option>
<option value="65">KALIMANTAN UTARA</option>
<option value="71">SULAWESI UTARA</option>
<option value="72">SULAWESI TENGAH</option>
<option value="73">SULAWESI SELATAN</option>
<option value="74">SULAWESI TENGGARA</option>
<option value="75">GORONTALO</option>
<option value="76">SULAWESI BARAT</option>
<option value="81">MALUKU</option>
<option value="82">MALUKU UTARA</option>
<option value="91">PAPUA BARAT</option>
<option value="94">PAPUA</option>
</select>

<p class="help-block help-block-error"></p>
</div>
                                  
                                  <div class="form-group field-signupform-id_kabkota required">

<select id="signupform-id_kabkota" class="form-control" name="SignupForm[id_kabkota]" title="Pilih kabupaten/kota" data-toggle="tooltip" data-placement="left" aria-required="true">
<option value="">--Pilih Kabupaten / Kota--</option>
</select>

<p class="help-block help-block-error"></p>
</div>
                                  <div class="form-group field-signupform-kodepos required">

<input type="text" id="signupform-kodepos" class="form-control input-lg" name="SignupForm[kodepos]" title="Diisi kodepos tempat organisasi penanggung jawab aksi berlokasi." placeholder="Kode Pos" data-toggle="tooltip" data-placement="left" aria-required="true">

<p class="help-block help-block-error"></p>
</div>
                                </div>
                              </div>

                            </div><!-- form content -->
                          </div>
            </form>
        </div>
    </body>
</html>