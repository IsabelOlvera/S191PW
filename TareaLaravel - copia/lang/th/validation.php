<?php

declare(strict_types=1);

return [
    'accepted'             => 'ข้อมูล :attribute ต้องผ่านการยอมรับก่อน',
    'accepted_if'          => 'ข้อมูล :attribute ต้องผ่านการยอมรับ เมื่อ :other เป็น :value',
    'active_url'           => 'ข้อมูล :attribute ไม่ใช่ URL ที่ถูกรูปแบบ',
    'after'                => 'ข้อมูล :attribute ต้องเป็นวันที่หลังจาก :date',
    'after_or_equal'       => 'ข้อมูล :attribute ต้องเป็นวันที่ตั้งแต่วันที่ :date หรือหลังจากนั้น',
    'alpha'                => 'ข้อมูล :attribute ต้องเป็นตัวอักษรภาษาอังกฤษเท่านั้น',
    'alpha_dash'           => 'ข้อมูล :attribute ต้องเป็นตัวอักษรภาษาอังกฤษ ตัวเลข และ _ เท่านั้น',
    'alpha_num'            => 'ข้อมูล :attribute ต้องเป็นตัวอักษรภาษาอังกฤษ ตัวเลข เท่านั้น',
    'array'                => 'ข้อมูล :attribute ต้องเป็น array เท่านั้น',
    'ascii'                => ':attribute ต้องมีอักขระและสัญลักษณ์ที่เป็นตัวอักษรและตัวเลขคละกันแบบไบต์เดี่ยวเท่านั้น',
    'before'               => 'ข้อมูล :attribute ต้องเป็นวันที่ก่อน :date',
    'before_or_equal'      => 'ข้อมูล :attribute ต้องเป็นวันที่ก่อนหรือเท่ากับวันที่ :date',
    'between'              => [
        'array'   => 'ข้อมูล :attribute ต้องมีค่าระหว่าง :min - :max ค่า',
        'file'    => 'ข้อมูล :attribute ต้องมีขนาดระหว่าง :min - :max กิโลไบต์',
        'numeric' => 'ข้อมูล :attribute ต้องอยู่ในช่วงระหว่าง :min - :max',
        'string'  => 'ข้อมูล :attribute ต้องยาวระหว่าง :min - :max ตัวอักษร',
    ],
    'boolean'              => 'ข้อมูล :attribute ต้องเป็นจริงหรือเท็จเท่านั้น',
    'can'                  => 'ช่องข้อมูล :attribute มีค่าที่ไม่ได้รับอนุญาต',
    'confirmed'            => 'ข้อมูล :attribute ไม่ตรงกัน',
    'contains'             => 'ช่องข้อมูล :attribute นี้ยังขาดข้อมูลที่ต้องกรอก',
    'current_password'     => 'รหัสผ่านไม่ถูกต้อง',
    'date'                 => 'ข้อมูล :attribute ต้องเป็นวันที่',
    'date_equals'          => 'ข้อมูล :attribute ต้องเป็นวันที่ที่เท่ากับ :date',
    'date_format'          => 'ข้อมูล :attribute ไม่ตรงกับข้อมูล :format ที่กำหนด',
    'decimal'              => ':attribute ต้องมีทศนิยม :decimal ตำแหน่ง',
    'declined'             => 'ข้อมูล :attribute ต้องถูกปฏิเสธ',
    'declined_if'          => 'ข้อมูล :attribute ต้องถูกปฏิเสธเมื่อ :other มีค่าเท่ากับ :value',
    'different'            => 'ข้อมูล :attribute และ :other ต้องไม่เท่ากัน',
    'digits'               => 'ข้อมูล :attribute ต้องเป็น :digits',
    'digits_between'       => 'ข้อมูล :attribute ต้องอยู่ในช่วงระหว่าง :min ถึง :max',
    'dimensions'           => 'ข้อมูล :attribute มีขนาดไม่ถูกต้อง',
    'distinct'             => 'ข้อมูล :attribute มีค่าที่ซ้ำกัน',
    'doesnt_end_with'      => 'ข้อมูล :attribute ไม่ควรลงท้ายด้วยค่าดังต่อไปนี้: :values',
    'doesnt_start_with'    => 'ข้อมูล :attribute ไม่ควรเริ่มต้นด้วยค่าดังต่อไปนี้: :values',
    'email'                => 'ข้อมูล :attribute ต้องเป็นอีเมล์',
    'ends_with'            => 'ข้อมูล :attribute ต้องจบด้วยค่าดังต่อไปนี้: :values',
    'enum'                 => 'ข้อมูล :attribute ที่เลือกไม่ถูกต้อง',
    'exists'               => 'ข้อมูล :attribute ที่เลือกไม่ถูกต้อง',
    'extensions'           => 'ช่อง :attribute ต้องมีส่วนขยายอย่างใดอย่างหนึ่งต่อไปนี้: :values',
    'file'                 => 'ข้อมูล :attribute ต้องเป็นไฟล์',
    'filled'               => 'จำเป็นต้องกรอกข้อมูล :attribute',
    'gt'                   => [
        'array'   => 'ข้อมูล :attribute ต้องมีค่ามากกว่า :value',
        'file'    => 'ข้อมูล :attribute ต้องมีขนาดมากกว่า :value กิโลไบต์',
        'numeric' => 'ข้อมูล :attribute ต้องมีค่ามากกว่า :value',
        'string'  => 'ข้อมูล :attribute ต้องยาวมากกว่า :value ตัวอักษร',
    ],
    'gte'                  => [
        'array'   => 'ข้อมูล :attribute ต้องมีค่า :value หรือมากกว่า',
        'file'    => 'ข้อมูล :attribute ต้องมีขนาดมากกว่าหรือเท่ากับ :value กิโลไบต์',
        'numeric' => 'ข้อมูล :attribute ต้องมีค่ามากกว่าหรือเท่ากับ :value',
        'string'  => 'ข้อมูล :attribute ต้องยาวมากกว่าหรือเท่ากับ :value ตัวอักษร',
    ],
    'hex_color'            => 'ช่อง :attribute ต้องเป็นสีเลขฐานสิบหกที่ถูกต้อง',
    'image'                => 'ข้อมูล :attribute ต้องเป็นรูปภาพ',
    'in'                   => 'ข้อมูลที่ถูกเลือกใน :attribute ไม่ถูกต้อง',
    'in_array'             => 'ข้อมูล :attribute ไม่มีอยู่ภายในค่าของ :other',
    'integer'              => 'ข้อมูล :attribute ต้องเป็นตัวเลข',
    'ip'                   => 'ข้อมูล :attribute ต้องเป็น IP',
    'ipv4'                 => 'ข้อมูล :attribute ต้องตรงตามรูปแบบที่อยู่ IPv4',
    'ipv6'                 => 'ข้อมูล :attribute ต้องตรงตามรูปแบบที่อยู่ IPv6',
    'json'                 => 'ข้อมูล :attribute ต้องเป็นอักขระ JSON ที่สมบูรณ์',
    'list'                 => 'ช่อง :attribute ต้องเป็นรายการ',
    'lowercase'            => ':attribute ต้องเป็นตัวพิมพ์เล็ก',
    'lt'                   => [
        'array'   => 'ข้อมูล :attribute ต้องมีน้อยกว่า :value ค่า',
        'file'    => 'ข้อมูล :attribute ต้องมีขนาดน้อยกว่า :value กิโลไบต์',
        'numeric' => 'ข้อมูล :attribute ต้องมีค่าน้อยกว่า :value',
        'string'  => 'ข้อมูล :attribute ต้องยาวน้อยกว่า :value ตัวอักษร',
    ],
    'lte'                  => [
        'array'   => 'ข้อมูล :attribute ต้องมีไม่เกิน :value ค่า',
        'file'    => 'ข้อมูล :attribute ต้องมีขนาดน้อยกว่าหรือเท่ากับ :value กิโลไบต์',
        'numeric' => 'ข้อมูล :attribute ต้องมีค่าน้อยกว่าหรือเท่ากับ :value',
        'string'  => 'ข้อมูล :attribute ต้องยาวน้อยกว่าหรือเท่ากับ :value ตัวอักษร',
    ],
    'mac_address'          => ':attribute ต้องเป็นที่อยู่ MAC ที่ถูกต้อง',
    'max'                  => [
        'array'   => 'ข้อมูล :attribute ต้องมีไม่เกิน :max ค่า',
        'file'    => 'ข้อมูล :attribute ต้องมีขนาดไม่เกิน :max กิโลไบต์',
        'numeric' => 'ข้อมูล :attribute ต้องมีค่าไม่เกิน :max',
        'string'  => 'ข้อมูล :attribute ต้องยาวไม่เกิน :max ตัวอักษร',
    ],
    'max_digits'           => ':attribute ต้องไม่เกิน :max หลัก',
    'mimes'                => 'ข้อมูล :attribute ต้องเป็นชนิดแฟ้ม: :values',
    'mimetypes'            => 'ข้อมูล :attribute ต้องเป็นชนิดแฟ้ม: :values',
    'min'                  => [
        'array'   => 'ข้อมูล :attribute ต้องมีอย่างน้อย :min ค่า',
        'file'    => 'ข้อมูล :attribute ต้องมีขนาดอย่างน้อย :min กิโลไบต์',
        'numeric' => 'ข้อมูล :attribute ต้องมีค่าอย่างน้อย :min',
        'string'  => 'ข้อมูล :attribute ต้องยาวอย่างน้อย :min ตัวอักษร',
    ],
    'min_digits'           => ':attribute ต้องมีอย่างน้อย :min หลัก',
    'missing'              => 'ช่องข้อมูล :attribute ต้องหายไป',
    'missing_if'           => 'ช่องข้อมูล :attribute ต้องหายไป เมื่อ :other เป็น :value',
    'missing_unless'       => 'ช่องข้อมูล :attribute ต้องหายไป เว้นแต่ :other จะเป็น :value',
    'missing_with'         => 'ช่องข้อมูล :attribute ต้องหายไป เมื่อมี :values',
    'missing_with_all'     => 'ช่องข้อมูล :attribute ต้องหายไป เมื่อมี :values',
    'multiple_of'          => 'ค่า :attribute จะต้องเป็นผลคูณของ :value',
    'not_in'               => 'ข้อมูล ที่เลือกจาก :attribute ไม่ถูกต้อง',
    'not_regex'            => 'ข้อมูล :attribute มีรูปแบบไม่ถูกต้อง',
    'numeric'              => 'ข้อมูล :attribute ต้องเป็นตัวเลข',
    'password'             => [
        'letters'       => 'ข้อมูล :attribute ต้องประกอบด้วยตัวอักษรอย่างน้อย 1 ตัว',
        'mixed'         => 'ข้อมูล :attribute ต้องประกอบด้วยอักษรพิมพ์ใหญ่อย่างน้อย 1 ตัว และอักษรพิมพ์เล็กอย่างน้อย 1 ตัว',
        'numbers'       => 'ข้อมูล :attribute ต้องประกอบด้วยตัวเลขอย่างน้อย 1 ตัว',
        'symbols'       => 'ข้อมูล :attribute ต้องประกอบด้วยสัญลักษณ์อย่างน้อย 1 ตัว',
        'uncompromised' => 'ข้อมูล :attribute นี้ถูกพบในข้อมูลที่รั่วไหล โปรดเลือก :attribute อื่น',
    ],
    'present'              => 'ต้องมีช่องข้อมูล :attribute',
    'present_if'           => 'ต้องมีช่องข้อมูล :attribute เมื่อ :other เป็น :value',
    'present_unless'       => 'ต้องมีช่องข้อมูล :attribute เว้นแต่ :other อยู่ใน :value',
    'present_with'         => 'ต้องมีช่องข้อมูล :attribute เมื่อมี :values',
    'present_with_all'     => 'ต้องมีช่องข้อมูล :attribute เมื่อมี :values',
    'prohibited'           => 'ช่องข้อมูล :attribute ถูกห้ามไม่ให้ใช้',
    'prohibited_if'        => 'ช่องข้อมูล :attribute ถูกห้ามไม่ให้ใช้ เมื่อ :other เป็น :value',
    'prohibited_unless'    => 'ช่องข้อมูล :attribute ถูกห้ามไม่ให้ใช้ เว้นแต่ :other อยู่ใน :values',
    'prohibits'            => 'ช่องข้อมูล :attribute กันไม่ให้ :other มีได้',
    'regex'                => 'ข้อมูล :attribute มีรูปแบบไม่ถูกต้อง',
    'required'             => 'ต้องกรอกช่องข้อมูล :attribute',
    'required_array_keys'  => 'ช่องข้อมูล :attribute ต้องมีรายการสำหรับ: :values',
    'required_if'          => 'ต้องกรอกช่องข้อมูล :attribute เมื่อ :other เป็น :value',
    'required_if_accepted' => 'ต้องกรอกช่องข้อมูล :attribute เมื่อยอมรับ :other',
    'required_if_declined' => 'ต้องกรอกช่องข้อมูล :attribute เมื่อ :other ถูกปฏิเสธ',
    'required_unless'      => 'ต้องกรอกช่องข้อมูล :attribute เว้นแต่ :other อยู่ใน :values',
    'required_with'        => 'ต้องกรอกช่องข้อมูล :attribute เมื่อมี :values',
    'required_with_all'    => 'ต้องกรอกช่องข้อมูล :attribute เมื่อมี :values',
    'required_without'     => 'ต้องกรอกช่องข้อมูล :attribute เมื่อไม่มี :values',
    'required_without_all' => 'ต้องกรอกช่องข้อมูล :attribute เมื่อไม่มี :values ทั้งหมด',
    'same'                 => 'ข้อมูล :attribute และ :other ต้องตรงกัน',
    'size'                 => [
        'array'   => 'ข้อมูล :attribute ต้องเท่ากับ :size ค่า',
        'file'    => 'ข้อมูล :attribute ต้องเท่ากับ :size กิโลไบต์',
        'numeric' => 'ข้อมูล :attribute ต้องเท่ากับ :size',
        'string'  => 'ข้อมูล :attribute ต้องเท่ากับ :size ตัวอักษร',
    ],
    'starts_with'          => 'ข้อมูล :attribute ต้องเริ่มด้วยค่าใดค่าหนึ่งต่อไปนี้: :values',
    'string'               => 'ข้อมูล :attribute ต้องเป็นอักขระ',
    'timezone'             => 'ข้อมูล :attribute ต้องเป็นข้อมูลเขตเวลาที่ถูกต้อง',
    'ulid'                 => ':attribute ต้องเป็น ULID ที่ถูกต้อง',
    'unique'               => ':attribute ถูกใช้ไปแล้ว',
    'uploaded'             => 'ไม่สามารถอัปโหลดข้อมูล :attribute ได้',
    'uppercase'            => ':attribute ต้องเป็นตัวพิมพ์ใหญ่',
    'url'                  => 'ข้อมูล :attribute ต้องเป็น URL ที่ถูกรูปแบบ',
    'uuid'                 => 'ข้อมูล :attribute ต้องเป็นค่า UUID ที่ถูกรูปแบบ',
];