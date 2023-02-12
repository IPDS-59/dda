<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Kolom :attribute harus diterima.',
    'accepted_if' => 'Kolom :attribute harus diterima jika :other adalah :value.',
    'active_url' => ':attribute bukan URL yang valid.',
    'after' => ':attribute harus berupa tanggal setelah :date.',
    'after_or_equal' => ':attribute harus berupa tanggal setelah atau sama dengan :date.',
    'alpha' => ':attribute hanya boleh berisi huruf.',
    'alpha_dash' => ':attribute hanya boleh berisi huruf, angka, dash, dan underscore.',
    'alpha_num' => ':attribute hanya boleh berisi huruf dan angka.',
    'array' => ':attribute harus berupa array.',
    'ascii' => ':attribute hanya boleh berisi karakter alfanumerik satu byte dan simbol.',
    'before' => ':attribute harus berupa tanggal sebelum :date.',
    'before_or_equal' => ':attribute harus berupa tanggal sebelum atau sama dengan :date.',
    'between' => [
        'array' => ':attribute harus memiliki antara :min dan :max item.',
        'file' => ':attribute harus memiliki ukuran antara :min dan :max kilobita.',
        'numeric' => ':attribute harus memiliki nilai antara :min dan :max.',
        'string' => ':attribute harus memiliki panjang antara :min dan :max karakter.',
    ],
    'boolean' => 'Kolom :attribute harus bernilai true atau false.',
    'confirmed' => 'Konfirmasi :attribute tidak cocok.',
    'current_password' => 'Password salah.',
    'date' => ':attribute bukan tanggal yang valid.',
    'date_equals' => ':attribute harus berupa tanggal yang sama dengan :date.',
    'date_format' => ':attribute tidak sesuai dengan format :format.',
    'decimal' => ':attribute harus memiliki :decimal digit desimal.',
    'declined' => 'Kolom :attribute harus ditolak.',
    'declined_if' => 'Kolom :attribute harus ditolak jika :other adalah :value.',
    'different' => ':attribute dan :other harus berbeda.',
    'digits' => ':attribute harus memiliki :digits digit.',
    'digits_between' => ':attribute harus memiliki panjang antara :min dan :max digit.',
    'dimensions' => ':attribute memiliki dimensi gambar yang tidak valid.',
    'distinct' => 'Kolom :attribute memiliki nilai yang duplikat.',
    'doesnt_end_with' => ':attribute tidak boleh diakhiri dengan salah satu dari nilai berikut: :values.',
    'doesnt_start_with' => ':attribute tidak boleh diawali dengan salah satu dari nilai berikut: :values.',
    'email' => ':attribute harus berupa alamat email yang valid.',
    'ends_with' => ':attribute harus diakhiri dengan salah satu dari nilai berikut: :values.',
    'enum' => ':attribute yang dipilih tidak valid.',
    'exists' => ':attribute yang dipilih tidak valid.',
    'file' => ':attribute harus berupa file.',
    'filled' => 'Kolom :attribute harus memiliki nilai.',
    'gt' => [
        'array' => 'Kolom :attribute harus memiliki lebih dari :value item.',
        'file' => 'Kolom :attribute harus lebih besar dari :value kilobita.',
        'numeric' => 'Kolom :attribute harus lebih besar dari :value.',
        'string' => 'Kolom :attribute harus lebih besar dari :value karakter.',
    ],
    'gte' => [
        'array' => 'Kolom :attribute harus memiliki :value item atau lebih.',
        'file' => 'Kolom :attribute harus lebih besar dari atau sama dengan :value kilobita.',
        'numeric' => 'Kolom :attribute harus lebih besar dari atau sama dengan :value.',
        'string' => 'Kolom :attribute harus lebih besar dari atau sama dengan :value karakter.',
    ],
    'image' => 'Kolom :attribute harus berupa gambar.',
    'in' => 'Kolom :attribute yang dipilih tidak valid.',
    'in_array' => 'Kolom :attribute tidak ada dalam :other.',
    'integer' => 'Kolom :attribute harus berupa bilangan bulat.',
    'ip' => 'Kolom :attribute harus berisi alamat IP yang valid.',
    'ipv4' => 'Kolom :attribute harus berisi alamat IP IPv4 yang valid.',
    'ipv6' => 'Kolom :attribute harus bersi alamat IPv6 yang valid.',
    'json' => 'Kolom :attribute harus bersi JSON string yang valid.',
    'lowercase' => 'Kolom :attribute harus dalam huruf kecil.',
    'lt' => [
        'array' => 'Kolom :attribute harus memiliki kurang dari :value item.',
        'file' => 'Kolom :attribute harus memiliki ukuran kurang dari :value kilobita.',
        'numeric' => 'Kolom :attribute harus memiliki nilai kurang dari :value.',
        'string' => 'Kolom :attribute harus memiliki panjang kurang dari :value karakter.',
    ],
    'lte' => [
        'array' => 'Kolom :attribute tidak boleh memiliki lebih dari :value item.',
        'file' => 'Kolom :attribute harus memiliki ukuran kurang dari atau sama dengan :value kilobita.',
        'numeric' => 'Kolom :attribute harus memiliki nilai kurang dari atau sama dengan :value.',
        'string' => 'Kolom :attribute harus memiliki panjang kurang dari atau sama dengan :value karakter.',
    ],
    'mac_address' => 'Kolom :attribute harus merupakan alamat MAC yang valid.',
    'max' => [
        'array' => 'Kolom :attribute tidak boleh memiliki lebih dari :max item.',
        'file' => 'Kolom :attribute harus memiliki ukuran tidak lebih dari :max kilobita.',
        'numeric' => 'Kolom :attribute harus memiliki nilai tidak lebih dari :max.',
        'string' => 'Kolom :attribute harus memiliki panjang tidak lebih dari :max karakter.',
    ],
    'max_digits' => 'Kolom :attribute tidak boleh memiliki lebih dari :max digit.',
    'mimes' => 'File :attribute harus memiliki tipe: :values.',
    'mimetypes' => 'File :attribute harus memiliki tipe: :values.',
    'min' => [
        'array' => ':attribute harus memiliki minimal :min item.',
        'file' => ':attribute harus memiliki ukuran minimal :min kilobita.',
        'numeric' => ':attribute harus bernilai minimal :min.',
        'string' => ':attribute harus memiliki minimal :min karakter.',
    ],
    'min_digits' => ':attribute harus memiliki minimal :min digit.',
    'multiple_of' => ':attribute harus merupakan kelipatan dari :value.',
    'not_in' => ':attribute yang dipilih tidak valid.',
    'not_regex' => 'Format :attribute tidak valid.',
    'numeric' => ':attribute harus berupa angka.',
    'password' => [
        'letters' => ':attribute harus memiliki minimal satu huruf.',
        'mixed' => ':attribute harus memiliki minimal satu huruf kapital dan satu huruf kecil.',
        'numbers' => ':attribute harus memiliki minimal satu angka.',
        'symbols' => ':attribute harus memiliki minimal satu simbol.',
        'uncompromised' => ':attribute yang diberikan telah muncul dalam kebocoran data. Silakan pilih :attribute yang berbeda.',
    ],
    'present' => 'Kolom :attribute harus hadir.',
    'prohibited' => 'Kolom :attribute tidak diizinkan.',
    'prohibited_if' => 'Kolom :attribute tidak diizinkan jika :other adalah :value.',
    'prohibited_unless' => 'Kolom :attribute tidak diizinkan kecuali :other ada dalam :values.',
    'prohibits' => 'Kolom :attribute mencegah :other dari hadir.',
    'regex' => 'Format :attribute tidak valid.',
    'required' => 'Kolom :attribute wajib diisi.',
    'required_array_keys' => 'Kolom :attribute harus memuat entri untuk: :values.',
    'required_if' => 'Kolom :attribute wajib diisi jika :other adalah :value.',
    'required_if_accepted' => 'Kolom :attribute wajib diisi jika :other diterima.',
    'required_unless' => 'Kolom :attribute wajib diisi kecuali :other ada dalam :values.',
    'required_with' => 'Kolom :attribute wajib diisi ketika :values hadir.',
    'required_with_all' => 'Kolom :attribute wajib diisi ketika semua :values hadir.',
    'required_without' => 'Kolom :attribute wajib diisi ketika :values tidak hadir.',
    'required_without_all' => 'Kolom :attribute wajib diisi ketika tidak ada :values yang hadir.',
    'same' => ':attribute dan :other harus sama.',
    'size' => [
        'array' => ':Attribute harus mengandung :size item.',
        'file' => ':Attribute harus memiliki ukuran :size kilobita.',
        'numeric' => ':Attribute harus memiliki nilai :size.',
        'string' => ':Attribute harus memiliki :size karakter.',
    ],
    'starts_with' => ':Attribute harus diawali dengan salah satu dari berikut: :values.',
    'string' => ':Attribute harus berupa string.',
    'timezone' => ':Attribute harus merupakan zona waktu yang valid.',
    'unique' => ':Attribute telah dipakai sebelumnya.',
    'uploaded' => ':Attribute gagal diunggah.',
    'uppercase' => ':Attribute harus berupa huruf kapital.',
    'url' => ':Attribute harus berupa URL yang valid.',
    'ulid' => ':Attribute harus berupa ULID yang valid.',
    'uuid' => ':Attribute harus berupa UUID yang valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
