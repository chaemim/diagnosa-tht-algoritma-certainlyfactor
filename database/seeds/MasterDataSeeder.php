<?php

use Illuminate\Database\Seeder;

use App\Gejala;
use App\Kerusakan;
use App\Solusi;
use App\Aturan;

class MasterDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampelKerusakan = [
        	['kd' => 'K01', 'nama' => 'Mesin Tidak Bekerja'],
			['kd' => 'K02', 'nama' => 'Tenaga Mesin Rendah'],
			['kd' => 'K03', 'nama' => 'Mesin Tidak Berhenti'],
			['kd' => 'K04', 'nama' => 'Mesin Berasap Hitam'],
			['kd' => 'K05', 'nama' => 'Mesin Berasap Putih'],
			['kd' => 'K06', 'nama' => 'Mesin tidak bisa tinggi diam'],
			['kd' => 'K07', 'nama' => 'Mesin mengetuk'],
			['kd' => 'K08', 'nama' => 'Konsumsi minyak berlebihan'],
			['kd' => 'K09', 'nama' => 'Oli Dicampur Dalam Collant'],
			['kd' => 'K10', 'nama' => 'Tingkat Minyak Naik '],
			['kd' => 'K11', 'nama' => 'Suhu Pendingin Naik Ketinggi'],
			['kd' => 'K12', 'nama' => 'Daya Hidrolik Rensah'],
			['kd' => 'K13', 'nama' => 'Kecepatan Booming Lambat'],
			['kd' => 'K14', 'nama' => 'Pergeseran Hidrolik yang Berlebihan'],
			['kd' => 'K15', 'nama' => 'Perjalanan Penyimpanan dari standart'],
			['kd' => 'K16', 'nama' => 'Kecepatan Perjalanan Lambat'],
			['kd' => 'K17', 'nama' => 'Mesin Tidak bisa mengayun'],
			['kd' => 'K18', 'nama' => 'Bullclamp can not Open/Close ( SHOVEL )'],
			['kd' => 'K19', 'nama' => 'Track Tension Loose'],
			['kd' => 'K20', 'nama' => 'Abnormal worn out at under carriage'],
			['kd' => 'K21', 'nama' => 'Crack at attachment & frame'],
        ];

        $sampelGejala = [
        	['kd' => 'G01', 'nama' => 'Terdapat udara yang terjebak didalam fuel system'],
			['kd' => 'G02', 'nama' => 'Keabnormalan pada supply pump, shut-off valve'],
			['kd' => 'G03', 'nama' => 'Cranking rpm tidak tercapai'],
			['kd' => 'G04', 'nama' => 'Fuel tercampur air'],
			['kd' => 'G05', 'nama' => 'Terjadi kebuntuan pada Air cleaner atau fuel filter'],
			['kd' => 'G06', 'nama' => 'Injection timing tidak tepat'],
			['kd' => 'G07', 'nama' => 'Keabnormalan pada supply pump, shut-off valve'],
			['kd' => 'G08', 'nama' => 'Lingkage thottle atau Current throttle drive kurang maksimal'],
			['kd' => 'G09', 'nama' => 'Kwalitas fuel jelek : bercampur air, minyak tanah (kerosin) atau kotoran lainnya'],
			['kd' => 'G10', 'nama' => 'Shut-off solenoid valve putus'],
			['kd' => 'G11', 'nama' => 'O-ring injector sisi fuel return bocor, sehingga masuk ke port metering'],
			['kd' => 'G12', 'nama' => 'Air cleaner buntu'],
			['kd' => 'G13', 'nama' => 'Turbocharger abnormal'],
			['kd' => 'G14', 'nama' => 'Over fuelling karena keabnormalan pada control fuel system'],
			['kd' => 'G15', 'nama' => 'Unit beroperasi pada daerah ketinggian, sehingga kerapatan udara luar relatif lebih kecil'],
			['kd' => 'G16', 'nama' => 'Ujung Injector pecah, sehingga tidak terjadi injection spray'],
			['kd' => 'G17', 'nama' => 'Injection Timing tidak tepat'],
			['kd' => 'G18', 'nama' => 'Fuel control dial (potentiometer) abnormal'],
			['kd' => 'G19', 'nama' => 'Keabnormalan pada ECM'],
			['kd' => 'G20', 'nama' => 'Misadjustment engine speed sensor'],
			['kd' => 'G21', 'nama' => 'Timing injection terlalu cepat atau lambat'],
			['kd' => 'G22', 'nama' => 'Terjadi keausan berlebihan pada main bearing'],
			['kd' => 'G23', 'nama' => 'Adjustment valve clearance tidak tepat. Dsb'],
			['kd' => 'G24', 'nama' => 'Keausan pada liner atau ring piston terlalu besar (oil up)'],
			['kd' => 'G25', 'nama' => 'Keausan pada valve guide terlalu besar (oil down)'],
			['kd' => 'G26', 'nama' => 'Kerusakan turbocharger, keausan pada bushing atau seal, sehingga oli bocor ke sisi blower atau impeller.'],
			['kd' => 'G27', 'nama' => 'Terjadi keretakan pada cylinder head atau engine block pada sisi jalur air.'],
			['kd' => 'G28', 'nama' => 'O-ring liner bocor'],
			['kd' => 'G29', 'nama' => 'O-ring gasket cylinder head bocor'],
			['kd' => 'G30', 'nama' => 'Oil cooler bocor'],
			['kd' => 'G31', 'nama' => 'Keausan Plunger FIP terlalu besar, sehingga fuel bocor ke dalam case FIP'],
			['kd' => 'G32', 'nama' => 'Nozzle atau injector pecah, sehingga fuel langsung bocor ke ruang bakar dan turun melalui ring piston masuk ke crank case'],
			['kd' => 'G33', 'nama' => 'O-ring return port nozzle atau plunger bocor'],
			['kd' => 'G34', 'nama' => 'Jika level bertambah tinggi karena bercampur dengan air maka, penyebabnya sama dengan oil engine bercampur air diatas'],
			['kd' => 'G35', 'nama' => 'Core & Fin radiator buntu'],
			['kd' => 'G36', 'nama' => 'Air radiator kurang'],
			['kd' => 'G37', 'nama' => 'Thermostat jammed'],
			['kd' => 'G38', 'nama' => 'Vaccum valve (cap radiator) tidak berfungsi'],
			['kd' => 'G39', 'nama' => 'Water pump slip, atau internal leakage terlalu besar'],
			['kd' => 'G40', 'nama' => 'Setting Primary valve terlalu rendah'],
			['kd' => 'G41', 'nama' => 'Internal leakage pada main pump terlalu besar'],
			['kd' => 'G42', 'nama' => 'Internal leakage pada boom cylinder berlebihan'],
			['kd' => 'G43', 'nama' => 'Internal leakage pada main pump terlalu besar'],
			['kd' => 'G44', 'nama' => 'Internal leakage pada cylinder berlebihan'],
			['kd' => 'G45', 'nama' => 'Internal leakage pada control valve berlebihan'],
			['kd' => 'G46', 'nama' => 'Setting secondary valve terlalu rendah'],
			['kd' => 'G47', 'nama' => 'Jumlah link kedua sisi tidak sama, (salah satu sudah dipotong)'],
			['kd' => 'G48', 'nama' => 'Track tension kedua sisi tidak sama'],
			['kd' => 'G49', 'nama' => 'Travel motor salah satu sisi abnormal (internal leakage terlalu besar)'],
			['kd' => 'G50', 'nama' => 'Internal leakage pada rotary joint'],
			['kd' => 'G51', 'nama' => 'Internal leakage pada travel motor berlebihan'],
			['kd' => 'G52', 'nama' => 'Internal leakage pada main pump berlebihan'],
			['kd' => 'G53', 'nama' => 'Flow discharge pump terlalu kecil '],
			['kd' => 'G54', 'nama' => 'Misadjutment travel PPC valve linkage, sehingga output pressure PPC valve terlalu kecil'],
			['kd' => 'G55', 'nama' => 'Swing pump abnormal (internal leakage terlalu besar)'],
			['kd' => 'G56', 'nama' => 'Swing motor abnormal (internal leakage terlalu besar)'],
			['kd' => 'G57', 'nama' => 'Swing brake jammed'],
			['kd' => 'G58', 'nama' => 'PPC valve bull clamp abnormal'],
			['kd' => 'G59', 'nama' => 'Spool C/V bull clamp jammed'],
			['kd' => 'G60', 'nama' => 'Internal leakage pada bull-clamp cylinder terlalu besar. '],
			['kd' => 'G61', 'nama' => 'Seal track adjuster bocor'],
			['kd' => 'G62', 'nama' => 'Link pitch terlalu besar'],
			['kd' => 'G63', 'nama' => 'HIC piston bocor'],
			['kd' => 'G64', 'nama' => 'Terlalu sering travel jarak jauh'],
			['kd' => 'G65', 'nama' => 'Medan operasi abrasive'],
			['kd' => 'G66', 'nama' => 'Track tension terlalu kencang'],
			['kd' => 'G67', 'nama' => 'Misoperation'],
			['kd' => 'G68', 'nama' => 'Material fatique'],
			['kd' => 'G69', 'nama' => 'Miss maintenance'],
        ];

        $sampelSolusi = [
        	['kd' => 'S01', 'nama' => 'Ajas kembali dan kondisi'],
			['kd' => 'S02', 'nama' => 'Atur'],
			['kd' => 'S03', 'nama' => 'Atur sistem udara sesuaikan dengan area / lokasi beraktifitas'],
			['kd' => 'S04', 'nama' => 'Bersihkan air cleaner'],
			['kd' => 'S05', 'nama' => 'Bersihkan dan ganti '],
			['kd' => 'S06', 'nama' => 'Bersihkan radiator'],
			['kd' => 'S07', 'nama' => 'Bongkar dan cek yang ada kebocoran diganti'],
			['kd' => 'S08', 'nama' => 'Bongkar dan stabilkan kembali '],
			['kd' => 'S09', 'nama' => 'Bongkar injector bersihkan dan o-ring digantikan'],
			['kd' => 'S10', 'nama' => 'Cek '],
			['kd' => 'S11', 'nama' => 'Cek ali swing'],
			['kd' => 'S12', 'nama' => 'Cek dan service '],
			['kd' => 'S13', 'nama' => 'Cek dgn bersihkan pump dan serta ganti Valvenya'],
			['kd' => 'S14', 'nama' => 'Cek di tangki dan cek fuel sistem dengan cara manual '],
			['kd' => 'S15', 'nama' => 'Cek kalau ada kebocoran '],
			['kd' => 'S16', 'nama' => 'Cek kalau ada yang aus dan setel kembali '],
			['kd' => 'S17', 'nama' => 'Cek kalau perlu ganti oring nya'],
			['kd' => 'S18', 'nama' => 'Cek pump dan setel kembali pump'],
			['kd' => 'S19', 'nama' => 'Cek trek dan kurangi trek yang jauh '],
			['kd' => 'S20', 'nama' => 'Ganti'],
			['kd' => 'S21', 'nama' => 'Ganti air cleaner dan fuel filter'],
			['kd' => 'S22', 'nama' => 'Ganti dan cek apakah cylindernya masih baik'],
			['kd' => 'S23', 'nama' => 'Ganti injector '],
			['kd' => 'S24', 'nama' => 'Ganti nozzle'],
			['kd' => 'S25', 'nama' => 'Ganti o-ringnya '],
			['kd' => 'S26', 'nama' => 'Ganti plunger atau di kalibrasi'],
			['kd' => 'S27', 'nama' => 'Ganti seal dan bushingnya'],
			['kd' => 'S28', 'nama' => 'Ganti sealnya'],
			['kd' => 'S29', 'nama' => 'kontrol tracknya '],
			['kd' => 'S30', 'nama' => 'Kuras tangki dan fuel, filter atas bawah diganti yang baru'],
			['kd' => 'S31', 'nama' => 'Kuras tangki fuel dang anti filter minyak '],
			['kd' => 'S32', 'nama' => 'Liniear dan ring diganti'],
			['kd' => 'S33', 'nama' => 'Maintence ulang'],
			['kd' => 'S34', 'nama' => 'Naikan lagi tambah setengah '],
			['kd' => 'S35', 'nama' => 'Periksa kebocoran di area host / selang fuel'],
			['kd' => 'S36', 'nama' => 'Periksa kebocoran di host yang berkaitan dengan turbocharger atau diganti'],
			['kd' => 'S37', 'nama' => 'Samakan potong bila perlu sejajarkan'],
			['kd' => 'S38', 'nama' => 'Service '],
			['kd' => 'S39', 'nama' => 'Setabilkan '],
			['kd' => 'S40', 'nama' => 'Setel '],
			['kd' => 'S41', 'nama' => 'Setel dan Samakan'],
			['kd' => 'S42', 'nama' => 'Setel kalau tidak bisa normal diganti'],
			['kd' => 'S43', 'nama' => 'Setel kembali timingnya '],
			['kd' => 'S44', 'nama' => 'Setel naikan '],
			['kd' => 'S45', 'nama' => 'Setel sesuaikan satuannya'],
			['kd' => 'S46', 'nama' => 'Setel standartkan'],
			['kd' => 'S47', 'nama' => 'Setel ulang / service cek kebocoran'],
			['kd' => 'S48', 'nama' => 'Tambah preasurenya'],
			['kd' => 'S49', 'nama' => 'Tambahkan air radiator dan cek kalau ada kebocoran'],
        ];

        foreach ($sampelGejala as $gejala) {
        	$sampel = new Gejala;
        	$sampel->kd = $gejala['kd'];
        	$sampel->nama = $gejala['nama'];
        	$sampel->save();
        }

        foreach ($sampelKerusakan as $kerusakan) {
        	$sampel = new Kerusakan;
        	$sampel->kd = $kerusakan['kd'];
        	$sampel->nama = $kerusakan['nama'];
        	$sampel->save();
        }

        foreach ($sampelSolusi as $solusi) {
        	$sampel = new Solusi;
        	$sampel->kd = $solusi['kd'];
        	$sampel->nama = $solusi['nama'];
        	$sampel->save();
        }
    }
}
