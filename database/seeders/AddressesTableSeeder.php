<?php
namespace Database\Seeders;


use App\Models\AddressCountry;
use App\Models\AddressDistrict;
use App\Models\AddressRegion;
use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $address_regions = [
            ['id' => '1','name' => 'ARUSHA','country_id' => '1'],
            ['id' => '2','name' => 'DAR ES SALAAM','country_id' => '1'],
            ['id' => '3','name' => 'DODOMA','country_id' => '1'],
            ['id' => '4','name' => 'GEITA','country_id' => '1'],
            ['id' => '5','name' => 'IRINGA','country_id' => '1'],
            ['id' => '6','name' => 'KAGERA','country_id' => '1'],
            ['id' => '7','name' => 'KATAVI','country_id' => '1'],
            ['id' => '8','name' => 'KIGOMA','country_id' => '1'],
            ['id' => '9','name' => 'KILIMANJARO','country_id' => '1'],
            ['id' => '10','name' => 'LINDI','country_id' => '1'],
            ['id' => '11','name' => 'MANYARA','country_id' => '1'],
            ['id' => '12','name' => 'MARA','country_id' => '1'],
            ['id' => '13','name' => 'MBEYA','country_id' => '1'],
            ['id' => '14','name' => 'MOROGORO','country_id' => '1'],
            ['id' => '15','name' => 'MTWARA','country_id' => '1'],
            ['id' => '16','name' => 'MWANZA','country_id' => '1'],
            ['id' => '17','name' => 'NJOMBE','country_id' => '1'],
            ['id' => '18','name' => 'KASKAZINI PEMBA','country_id' => '1'],
            ['id' => '19','name' => 'KUSINI PEMBA','country_id' => '1'],
            ['id' => '20','name' => 'PWANI','country_id' => '1'],
            ['id' => '21','name' => 'RUKWA','country_id' => '1'],
            ['id' => '22','name' => 'RUVUMA','country_id' => '1'],
            ['id' => '23','name' => 'SHINYANGA','country_id' => '1'],
            ['id' => '24','name' => 'SONGWE','country_id' => '1'],
            ['id' => '25','name' => 'TABORA','country_id' => '1'],
            ['id' => '26','name' => 'KASKAZINI UNGUJA','country_id' => '1'],
            ['id' => '27','name' => 'KUSINI UNGUJA','country_id' => '1']
        ];
        $address_districts = [
            ['id' => '1','name' => 'ARUSHA CBD','region_id' => '1'],
            ['id' => '2','name' => 'ARUSHA','region_id' => '1'],
            ['id' => '3','name' => 'Arumeru','region_id' => '1'],
            ['id' => '4','name' => 'Monduli','region_id' => '1'],
            ['id' => '5','name' => 'Longido','region_id' => '1'],
            ['id' => '6','name' => 'Karatu','region_id' => '1'],
            ['id' => '7','name' => 'Ngorongoro','region_id' => '1'],
            ['id' => '8','name' => 'Ilala','region_id' => '2'],
            ['id' => '9','name' => 'Kigamboni','region_id' => '2'],
            ['id' => '10','name' => 'Kinondoni','region_id' => '2'],
            ['id' => '11','name' => 'Temeke','region_id' => '2'],
            ['id' => '12','name' => 'Ubungo','region_id' => '2'],
            ['id' => '13','name' => 'DODOMA CBD','region_id' => '3'],
            ['id' => '14','name' => 'DODOMA','region_id' => '3'],
            ['id' => '15','name' => 'BAHI','region_id' => '3'],
            ['id' => '16','name' => 'CHAMWINO','region_id' => '3'],
            ['id' => '17','name' => 'KONGWA','region_id' => '3'],
            ['id' => '18','name' => 'MPWAPWA','region_id' => '3'],
            ['id' => '19','name' => 'KONDOA','region_id' => '3'],
            ['id' => '20','name' => 'CHEMBA','region_id' => '3'],
            ['id' => '21','name' => 'GEITA','region_id' => '4'],
            ['id' => '22','name' => 'NYANG\'HWALE','region_id' => '4'],
            ['id' => '23','name' => 'CHATO','region_id' => '4'],
            ['id' => '24','name' => 'MBOGWE','region_id' => '4'],
            ['id' => '25','name' => 'BUKOMBE','region_id' => '4'],
            ['id' => '26','name' => 'IRINGA CBD','region_id' => '5'],
            ['id' => '27','name' => 'IRINGA','region_id' => '5'],
            ['id' => '28','name' => 'KILOLO','region_id' => '5'],
            ['id' => '29','name' => 'MUFINDI','region_id' => '5'],
            ['id' => '30','name' => 'BUKOBA CBD','region_id' => '6'],
            ['id' => '31','name' => 'BUKOBA','region_id' => '6'],
            ['id' => '32','name' => 'MISSENYI','region_id' => '6'],
            ['id' => '33','name' => 'KARAGWE','region_id' => '6'],
            ['id' => '34','name' => 'MULEBA','region_id' => '6'],
            ['id' => '35','name' => 'BIHARAMULO','region_id' => '6'],
            ['id' => '36','name' => 'NGARA','region_id' => '6'],
            ['id' => '37','name' => 'Kyerwa','region_id' => '6'],
            ['id' => '38','name' => 'MPANDA -CBD','region_id' => '7'],
            ['id' => '39','name' => 'TANGANYIKA','region_id' => '7'],
            ['id' => '40','name' => 'Mlele','region_id' => '7'],
            ['id' => '41','name' => 'KIGOMA CBD','region_id' => '8'],
            ['id' => '42','name' => 'KIGOMA','region_id' => '8'],
            ['id' => '43','name' => 'Kasulu','region_id' => '8'],
            ['id' => '44','name' => 'KIBONDO','region_id' => '8'],
            ['id' => '45','name' => 'Buhigwe','region_id' => '8'],
            ['id' => '46','name' => 'Uvinza','region_id' => '8'],
            ['id' => '47','name' => 'Kakonko','region_id' => '8'],
            ['id' => '49','name' => 'MOSHI CBD','region_id' => '9'],
            ['id' => '50','name' => 'MOSHI','region_id' => '9'],
            ['id' => '51','name' => 'HAI','region_id' => '9'],
            ['id' => '52','name' => 'SIHA','region_id' => '9'],
            ['id' => '53','name' => 'MWANGA','region_id' => '9'],
            ['id' => '54','name' => 'SAME','region_id' => '9'],
            ['id' => '59','name' => 'ROMBO','region_id' => '9'],
            ['id' => '60','name' => 'LINDI  CBD','region_id' => '10'],
            ['id' => '61','name' => 'LINDI','region_id' => '10'],
            ['id' => '62','name' => 'NACHINGWEA','region_id' => '10'],
            ['id' => '63','name' => 'KILWA','region_id' => '10'],
            ['id' => '64','name' => 'Liwale','region_id' => '10'],
            ['id' => '65','name' => 'Ruangwa','region_id' => '10'],
            ['id' => '66','name' => 'BABATI CBD','region_id' => '11'],
            ['id' => '67','name' => 'BABATI','region_id' => '11'],
            ['id' => '68','name' => 'Hanang\'','region_id' => '11'],
            ['id' => '69','name' => 'MBULU','region_id' => '11'],
            ['id' => '70','name' => 'KITETO','region_id' => '11'],
            ['id' => '71','name' => 'SIMANJIRO','region_id' => '11'],
            ['id' => '72','name' => 'MUSOMA CBD','region_id' => '12'],
            ['id' => '73','name' => 'Butiama','region_id' => '12'],
            ['id' => '74','name' => 'RORYA','region_id' => '12'],
            ['id' => '75','name' => 'TARIME','region_id' => '12'],
            ['id' => '76','name' => 'BUNDA','region_id' => '12'],
            ['id' => '77','name' => 'SERENGETI','region_id' => '12'],
            ['id' => '78','name' => 'MBEYA CBD','region_id' => '13'],
            ['id' => '79','name' => 'MBEYA','region_id' => '13'],
            ['id' => '80','name' => 'Rungwe','region_id' => '13'],
            ['id' => '81','name' => 'Mbarali','region_id' => '13'],
            ['id' => '82','name' => 'Kyela','region_id' => '13'],
            ['id' => '83','name' => 'Chunya','region_id' => '13'],
            ['id' => '84','name' => 'MOROGORO CBD','region_id' => '14'],
            ['id' => '85','name' => 'MOROGORO','region_id' => '14'],
            ['id' => '86','name' => 'Mvomero','region_id' => '14'],
            ['id' => '87','name' => 'KILOSA','region_id' => '14'],
            ['id' => '88','name' => 'KILOMBERO','region_id' => '14'],
            ['id' => '89','name' => 'ULANGA','region_id' => '14'],
            ['id' => '90','name' => 'GAIRO','region_id' => '14'],
            ['id' => '91','name' => 'Malinyi','region_id' => '14'],
            ['id' => '92','name' => 'MTWARA CBD','region_id' => '15'],
            ['id' => '93','name' => 'MTWARA','region_id' => '15'],
            ['id' => '94','name' => 'TANDAHIMBA','region_id' => '15'],
            ['id' => '95','name' => 'NEWALA','region_id' => '15'],
            ['id' => '96','name' => 'MASASI','region_id' => '15'],
            ['id' => '97','name' => 'NANYUMBU','region_id' => '15'],
            ['id' => '98','name' => 'NYAMAGANA','region_id' => '16'],
            ['id' => '99','name' => 'ILEMELA','region_id' => '16'],
            ['id' => '100','name' => 'SENGEREMA','region_id' => '16'],
            ['id' => '101','name' => 'MAGU','region_id' => '16'],
            ['id' => '102','name' => 'MISUNGWI','region_id' => '16'],
            ['id' => '103','name' => 'UKEREWE','region_id' => '16'],
            ['id' => '104','name' => 'Kwimba','region_id' => '16'],
            ['id' => '105','name' => 'NJOMBE CBD','region_id' => '17'],
            ['id' => '106','name' => 'NJOMBE','region_id' => '17'],
            ['id' => '107','name' => 'WANGING\'OMBE','region_id' => '17'],
            ['id' => '108','name' => 'Ludewa','region_id' => '17'],
            ['id' => '109','name' => 'MAKETE','region_id' => '17'],
            ['id' => '110','name' => 'WETE','region_id' => '18'],
            ['id' => '111','name' => 'MICHEWENI','region_id' => '18'],
            ['id' => '112','name' => 'MKOANI','region_id' => '19'],
            ['id' => '113','name' => 'CHAKECHAKE','region_id' => '19'],
            ['id' => '114','name' => 'KIBAHA CBD','region_id' => '20'],
            ['id' => '115','name' => 'KIBAHA','region_id' => '20'],
            ['id' => '116','name' => 'BAGAMOYO','region_id' => '20'],
            ['id' => '117','name' => 'KISARAWE','region_id' => '20'],
            ['id' => '118','name' => 'MKURANGA','region_id' => '20'],
            ['id' => '119','name' => 'RUFIJI','region_id' => '20'],
            ['id' => '120','name' => 'MAFIA','region_id' => '20'],
            ['id' => '121','name' => 'KIBITI','region_id' => '20'],
            ['id' => '122','name' => 'SUMBAWANGA CBD','region_id' => '21'],
            ['id' => '123','name' => 'SUMBAWANGA','region_id' => '21'],
            ['id' => '124','name' => 'NKASI','region_id' => '21'],
            ['id' => '125','name' => 'Kalambo','region_id' => '21'],
            ['id' => '126','name' => 'SONGEA CBD','region_id' => '22'],
            ['id' => '127','name' => 'SONGEA','region_id' => '22'],
            ['id' => '128','name' => 'NAMTUMBO','region_id' => '22'],
            ['id' => '129','name' => 'MBINGA','region_id' => '22'],
            ['id' => '130','name' => 'NYASA','region_id' => '22'],
            ['id' => '131','name' => 'TUNDURU','region_id' => '22'],
            ['id' => '132','name' => 'SHINYANGA CBD','region_id' => '23'],
            ['id' => '133','name' => 'SHINYANGA','region_id' => '23'],
            ['id' => '134','name' => 'KAHAMA','region_id' => '23'],
            ['id' => '135','name' => 'KISHAPU','region_id' => '23'],
            ['id' => '136','name' => 'SONGWE','region_id' => '24'],
            ['id' => '137','name' => 'Mbozi','region_id' => '24'],
            ['id' => '138','name' => 'Ileje','region_id' => '24'],
            ['id' => '139','name' => 'Momba','region_id' => '24'],
            ['id' => '140','name' => 'TABORA CBD','region_id' => '25'],
            ['id' => '141','name' => 'Sokoni','region_id' => '25'],
            ['id' => '142','name' => 'UYUI','region_id' => '25'],
            ['id' => '143','name' => 'SIKONGE','region_id' => '25'],
            ['id' => '144','name' => 'NZEGA','region_id' => '25'],
            ['id' => '145','name' => 'URAMBO','region_id' => '25'],
            ['id' => '146','name' => 'IGUNGA','region_id' => '25'],
            ['id' => '147','name' => 'Kaliua','region_id' => '25'],
            ['id' => '148','name' => 'KASKAZINI A','region_id' => '26'],
            ['id' => '149','name' => 'KASKAZINI B','region_id' => '26'],
            ['id' => '150','name' => 'KUSINI','region_id' => '27'],
            ['id' => '151','name' => 'KATI','region_id' => '27']
        ];
        $this->command->getOutput()->writeln("<fg=yellow>Seeding:</> Regions");

        foreach ($address_regions as $i => $r) {
            $r['created_at'] = $r['updated_at'] = now();
            $r['id'] = $i+1;
            unset($r['country_id']);
            AddressRegion::create($r);
        }
        $this->command->getOutput()->writeln("<fg=yellow>Seeding:</> Districts");
        foreach ($address_districts as $j => $d) {
            $d['created_at'] = $d['updated_at'] = now();
            $d['id'] = $j+1;
            AddressDistrict::create($d);
        }
    }
}
