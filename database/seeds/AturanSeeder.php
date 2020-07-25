<?php

use Illuminate\Database\Seeder;
use App\Aturan;

class AturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampelAturan = [
        	['kerusakan_kd' => 'K01', 'gejala_kd' => 'G01', 'solusi_kd' => 'S35', 'mb' => 1, 'md' => 0],
			['kerusakan_kd' => 'K01', 'gejala_kd' => 'G02', 'solusi_kd' => 'S18', 'mb' => 0.9, 'md' => 0.04],
			['kerusakan_kd' => 'K01', 'gejala_kd' => 'G03', 'solusi_kd' => 'S04', 'mb' => 0.76, 'md' => 0.05],
			['kerusakan_kd' => 'K01', 'gejala_kd' => 'G04', 'solusi_kd' => 'S31', 'mb' => 0.9, 'md' => 0.02],
			['kerusakan_kd' => 'K02', 'gejala_kd' => 'G05', 'solusi_kd' => 'S21', 'mb' => 1, 'md' => 0],
			['kerusakan_kd' => 'K02', 'gejala_kd' => 'G06', 'solusi_kd' => 'S43', 'mb' => 0.88, 'md' => 0.05],
			['kerusakan_kd' => 'K02', 'gejala_kd' => 'G07', 'solusi_kd' => 'S13', 'mb' => 0.89, 'md' => 0.04],
			['kerusakan_kd' => 'K02', 'gejala_kd' => 'G08', 'solusi_kd' => 'S02', 'mb' => 1, 'md' => 0],
			['kerusakan_kd' => 'K02', 'gejala_kd' => 'G09', 'solusi_kd' => 'S30', 'mb' => 0.9, 'md' => 0.06],
			['kerusakan_kd' => 'K03', 'gejala_kd' => 'G10', 'solusi_kd' => 'S20', 'mb' => 0.89, 'md' => 0.5],
			['kerusakan_kd' => 'K03', 'gejala_kd' => 'G11', 'solusi_kd' => 'S09', 'mb' => 0.89, 'md' => 0.04],
			['kerusakan_kd' => 'K04', 'gejala_kd' => 'G12', 'solusi_kd' => 'S04', 'mb' => 0.89, 'md' => 0.08],
			['kerusakan_kd' => 'K04', 'gejala_kd' => 'G13', 'solusi_kd' => 'S36', 'mb' => 0.9, 'md' => 0.2],
			['kerusakan_kd' => 'K04', 'gejala_kd' => 'G14', 'solusi_kd' => 'S14', 'mb' => 0.89, 'md' => 0.03],
			['kerusakan_kd' => 'K04', 'gejala_kd' => 'G15', 'solusi_kd' => 'S03', 'mb' => 0.89, 'md' => 0.04],
			['kerusakan_kd' => 'K05', 'gejala_kd' => 'G16', 'solusi_kd' => 'S23', 'mb' => 0.89, 'md' => 0.04],
			['kerusakan_kd' => 'K05', 'gejala_kd' => 'G17', 'solusi_kd' => 'S45', 'mb' => 0.9, 'md' => 0.06],
			['kerusakan_kd' => 'K06', 'gejala_kd' => 'G18', 'solusi_kd' => 'S38', 'mb' => 0.89, 'md' => 0.05],
			['kerusakan_kd' => 'K06', 'gejala_kd' => 'G19', 'solusi_kd' => 'S38', 'mb' => 0.9, 'md' => 0.01],
			['kerusakan_kd' => 'K06', 'gejala_kd' => 'G20', 'solusi_kd' => 'S42', 'mb' => 0.89, 'md' => 0.06],
			['kerusakan_kd' => 'K07', 'gejala_kd' => 'G21', 'solusi_kd' => 'S47', 'mb' => 0.9, 'md' => 0.2],
			['kerusakan_kd' => 'K07', 'gejala_kd' => 'G22', 'solusi_kd' => 'S20', 'mb' => 0.9, 'md' => 0.03],
			['kerusakan_kd' => 'K07', 'gejala_kd' => 'G23', 'solusi_kd' => 'S16', 'mb' => 0.89, 'md' => 0.08],
			['kerusakan_kd' => 'K08', 'gejala_kd' => 'G24', 'solusi_kd' => 'S32', 'mb' => 0.89, 'md' => 0.05],
			['kerusakan_kd' => 'K08', 'gejala_kd' => 'G25', 'solusi_kd' => 'S20', 'mb' => 0.9, 'md' => 0.01],
			['kerusakan_kd' => 'K08', 'gejala_kd' => 'G26', 'solusi_kd' => 'S27', 'mb' => 0.89, 'md' => 0.07],
			['kerusakan_kd' => 'K09', 'gejala_kd' => 'G27', 'solusi_kd' => 'S28', 'mb' => 0.89, 'md' => 0.07],
			['kerusakan_kd' => 'K09', 'gejala_kd' => 'G28', 'solusi_kd' => 'S25', 'mb' => 0.76, 'md' => 0.08],
			['kerusakan_kd' => 'K09', 'gejala_kd' => 'G29', 'solusi_kd' => 'S22', 'mb' => 0.9, 'md' => 0.02],
			['kerusakan_kd' => 'K09', 'gejala_kd' => 'G30', 'solusi_kd' => 'S20', 'mb' => 0.9, 'md' => 0.01],
			['kerusakan_kd' => 'K10', 'gejala_kd' => 'G31', 'solusi_kd' => 'S26', 'mb' => 0.9, 'md' => 0.03],
			['kerusakan_kd' => 'K10', 'gejala_kd' => 'G32', 'solusi_kd' => 'S24', 'mb' => 0.9, 'md' => 0.03],
			['kerusakan_kd' => 'K10', 'gejala_kd' => 'G33', 'solusi_kd' => 'S20', 'mb' => 0.9, 'md' => 0.05],
			['kerusakan_kd' => 'K10', 'gejala_kd' => 'G34', 'solusi_kd' => 'S07', 'mb' => 0.89, 'md' => 0.08],
			['kerusakan_kd' => 'K11', 'gejala_kd' => 'G35', 'solusi_kd' => 'S06', 'mb' => 0.69, 'md' => 0.09],
			['kerusakan_kd' => 'K11', 'gejala_kd' => 'G36', 'solusi_kd' => 'S49', 'mb' => 0.9, 'md' => 0.02],
			['kerusakan_kd' => 'K11', 'gejala_kd' => 'G37', 'solusi_kd' => 'S20', 'mb' => 0.9, 'md' => 0.04],
			['kerusakan_kd' => 'K11', 'gejala_kd' => 'G38', 'solusi_kd' => 'S20', 'mb' => 1, 'md' => 0],
			['kerusakan_kd' => 'K11', 'gejala_kd' => 'G39', 'solusi_kd' => 'S12', 'mb' => 0.9, 'md' => 0.05],
			['kerusakan_kd' => 'K12', 'gejala_kd' => 'G40', 'solusi_kd' => 'S40', 'mb' => 0.9, 'md' => 0.05],
			['kerusakan_kd' => 'K12', 'gejala_kd' => 'G41', 'solusi_kd' => 'S40', 'mb' => 0.9, 'md' => 0.07],
			['kerusakan_kd' => 'K13', 'gejala_kd' => 'G42', 'solusi_kd' => 'S40', 'mb' => 0.9, 'md' => 0.01],
			['kerusakan_kd' => 'K13', 'gejala_kd' => 'G43', 'solusi_kd' => 'S46', 'mb' => 0.9, 'md' => 0.05],
			['kerusakan_kd' => 'K14', 'gejala_kd' => 'G44', 'solusi_kd' => 'S46', 'mb' => 0.9, 'md' => 0.05],
			['kerusakan_kd' => 'K14', 'gejala_kd' => 'G45', 'solusi_kd' => 'S40', 'mb' => 0.9, 'md' => 0.05],
			['kerusakan_kd' => 'K14', 'gejala_kd' => 'G46', 'solusi_kd' => 'S44', 'mb' => 0.9, 'md' => 0.07],
			['kerusakan_kd' => 'K15', 'gejala_kd' => 'G47', 'solusi_kd' => 'S37', 'mb' => 0.9, 'md' => 0.03],
			['kerusakan_kd' => 'K15', 'gejala_kd' => 'G48', 'solusi_kd' => 'S41', 'mb' => 0.9, 'md' => 0.05],
			['kerusakan_kd' => 'K15', 'gejala_kd' => 'G49', 'solusi_kd' => 'S41', 'mb' => 0.89, 'md' => 0.06],
			['kerusakan_kd' => 'K15', 'gejala_kd' => 'G50', 'solusi_kd' => 'S10', 'mb' => 0.89, 'md' => 0.07],
			['kerusakan_kd' => 'K16', 'gejala_kd' => 'G51', 'solusi_kd' => 'S39', 'mb' => 0.89, 'md' => 0.07],
			['kerusakan_kd' => 'K16', 'gejala_kd' => 'G52', 'solusi_kd' => 'S08', 'mb' => 0.89, 'md' => 0.02],
			['kerusakan_kd' => 'K16', 'gejala_kd' => 'G53', 'solusi_kd' => 'S34', 'mb' => 0.9, 'md' => 0.01],
			['kerusakan_kd' => 'K16', 'gejala_kd' => 'G54', 'solusi_kd' => 'S48', 'mb' => 0.89, 'md' => 0.03],
			['kerusakan_kd' => 'K17', 'gejala_kd' => 'G55', 'solusi_kd' => 'S11', 'mb' => 0.9, 'md' => 0.04],
			['kerusakan_kd' => 'K17', 'gejala_kd' => 'G56', 'solusi_kd' => 'S15', 'mb' => 0.9, 'md' => 0.08],
			['kerusakan_kd' => 'K17', 'gejala_kd' => 'G57', 'solusi_kd' => 'S17', 'mb' => 0.9, 'md' => 0.07],
			['kerusakan_kd' => 'K18', 'gejala_kd' => 'G58', 'solusi_kd' => 'S20', 'mb' => 0.89, 'md' => 0.05],
			['kerusakan_kd' => 'K18', 'gejala_kd' => 'G59', 'solusi_kd' => 'S20', 'mb' => 0.89, 'md' => 0.06],
			['kerusakan_kd' => 'K18', 'gejala_kd' => 'G60', 'solusi_kd' => 'S05', 'mb' => 0.7, 'md' => 0.07],
			['kerusakan_kd' => 'K19', 'gejala_kd' => 'G61', 'solusi_kd' => 'S20', 'mb' => 0.9, 'md' => 0.02],
			['kerusakan_kd' => 'K19', 'gejala_kd' => 'G62', 'solusi_kd' => 'S41', 'mb' => 0.89, 'md' => 0.05],
			['kerusakan_kd' => 'K19', 'gejala_kd' => 'G63', 'solusi_kd' => 'S20', 'mb' => 0.9, 'md' => 0.01],
			['kerusakan_kd' => 'K20', 'gejala_kd' => 'G64', 'solusi_kd' => 'S19', 'mb' => 0.89, 'md' => 0.06],
			['kerusakan_kd' => 'K20', 'gejala_kd' => 'G65', 'solusi_kd' => 'S29', 'mb' => 0.9, 'md' => 0.04],
			['kerusakan_kd' => 'K20', 'gejala_kd' => 'G66', 'solusi_kd' => 'S01', 'mb' => 0.83, 'md' => 0.05],
			['kerusakan_kd' => 'K21', 'gejala_kd' => 'G67', 'solusi_kd' => 'S38', 'mb' => 0.89, 'md' => 0.06],
			['kerusakan_kd' => 'K21', 'gejala_kd' => 'G68', 'solusi_kd' => 'S38', 'mb' => 0.9, 'md' => 0.04],
			['kerusakan_kd' => 'K21', 'gejala_kd' => 'G69', 'solusi_kd' => 'S33', 'mb' => 0.89, 'md' => 0.03],
        ];

        foreach ($sampelAturan as $aturan) {
        	$sam = new Aturan;
        	$sam->kerusakan_kd = $aturan['kerusakan_kd'];
        	$sam->gejala_kd = $aturan['gejala_kd'];
        	$sam->solusi_kd = $aturan['solusi_kd'];
        	$sam->mb = $aturan['mb'];
        	$sam->md = $aturan['md'];
        	$sam->save();
        }
    }
}
