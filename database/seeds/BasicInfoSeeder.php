<?php

use Illuminate\Database\Seeder;

class BasicInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('basics')->insert([
            'nombre_centro' => 'Centro Peruano Japonés de Investigaciones Sísmicas y Mitigación de Desastres (CISMID)',
            'descripcion_centro' => 'El Centro Peruano-Japonés de Investigaciones Sísmicas y Mitigación de Desastres, fue establecido en 1986 por la Facultad de Ingeniería Civil (FIC) de la Universidad Nacional de Ingeniería (UNI) y financiado gracias a la cooperación del Gobierno del Japón a través de su Agencia de Cooperación Internacional (JICA). ',
            'direccion' => 'Av. Túpac Amaru N 1150',
            'distrito' => 'Lima 25',
            'telefono' => ' (+51) 1 482-0804',
            'correo_centro' => 'director@uni.edu.pe',
            'nosotros' => 'Difusión de conocimientos en prevención y mitigación de desastres a través de la investigación y aplicación de tecnologías propias para contribuir al desarrollo sostenible y prosperidad de los pueblos del país.',
        ]);
    }
}
