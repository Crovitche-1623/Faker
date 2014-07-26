<?php

namespace Faker\Provider\id_ID;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        // 8804 234
        '#######',

        // 7777 4444
        '########',
    );

    protected static $internationalPrefixes = array('+62', '(+62)');

    /**
     * @link http://id.wikipedia.org/wiki/Daftar_kode_telepon_di_Indonesia
     */
    protected static $regionalCodes = array(
        "021", "022", "0231", "0232", "0233", "0234", "024", "0251", "0252", "0253", 
        "0254", "0257", "0260", "0261", "0262", "0263", "0264", "0265", "0266", 
        "0267", "0271", "0272", "0273", "0274", "0275", "0276", "0280", "0281", 
        "0282", "0283", "0284", "0285", "0286", "0287", "0289", "0291", "0292", 
        "0293", "0294", "0295", "0296", "0297", "0298", "0299", "031", "0321", 
        "0322", "0323", "0324", "0325", "0327", "0328", "0331", "0332", "0333", 
        "0334", "0335", "0336", "0338", "0341", "0342", "0343", "0351", "0352", 
        "0353", "0354", "0355", "0356", "0357", "0358", "0361", "0362", "0363", 
        "0364", "0365", "0366", "0368", "0370", "0371", "0372", "0373", "0374", 
        "0376", "0380", "0381", "0382", "0383", "0384", "0385", "0386", "0387", 
        "0388", "0389", "0401", "0402", "0403", "0404", "0405", "0408", "0410", 
        "0411", "0413", "0414", "0417", "0418", "0419", "0420", "0421", "0422", 
        "0423", "0426", "0427", "0428", "0430", "0431", "0432", "0434", "0435", 
        "0438", "0443", "0445", "0450", "0451", "0452", "0453", "0454", "0455", 
        "0457", "0458", "0461", "0462", "0463", "0464", "0465", "0471", "0472", 
        "0473", "0474", "0475", "0481", "0482", "0484", "0485", "0511", "0512", 
        "0513", "0517", "0518", "0522", "0525", "0526", "0527", "0528", "0531", 
        "0532", "0534", "0536", "0537", "0538", "0539", "0541", "0542", "0543", 
        "0545", "0548", "0549", "0551", "0552", "0553", "0554", "0556", "0561", 
        "0562", "0563", "0564", "0565", "0567", "0568", "061", "0620", "0621", 
        "0622", "0623", "0624", "0625", "0626", "0627", "0628", "0629", "0630", 
        "0631", "0632", "0633", "0634", "0635", "0636", "0639", "0641", "0642", 
        "0643", "0644", "0645", "0646", "0650", "0651", "0652", "0653", "0654", 
        "0655", "0656", "0657", "0658", "0659", "0702", "0711", "0712", "0713", 
        "0714", "0715", "0716", "0717", "0718", "0719", "0721", "0722", "0723", 
        "0724", "0725", "0726", "0727", "0728", "0729", "0730", "0731", "0732", 
        "0733", "0734", "0735", "0736", "0737", "0738", "0739", "0740", "0741", 
        "0742", "0743", "0744", "0745", "0746", "0747", "0748", "0751", "0752", 
        "0753", "0754", "0755", "0756", "0757", "0760", "0761", "0762", "0763", 
        "0764", "0765", "0766", "0767", "0768", "0769", "0770", "0771", "0772", 
        "0773", "0776", "0777", "0778", "0779", "0901", "0902", "0910", "0911", 
        "0913", "0914", "0915", "0916", "0917", "0918", "0921", "0922", "0923", 
        "0924", "0927", "0929", "0931", "0951", "0952", "0955", "0956", "0957", 
        "0966", "0967", "0969", "0971", "0975", "0980", "0981", "0983", "0984", 
        "0985", "0986",
    );

    /**
     * @link http://id.wikipedia.org/wiki/Daftar_kode_telepon_di_Indonesia#Seluler
     */
    protected static $mobileNumberPrefixes = array(
        '0811', '0812', '0813', '0852', '0853', '0821', '0822', '0823', '0814', '0815',
        '0816', '0855', '0856', '0857', '0858', '0817', '0818', '0819', '0859', '0877',
        '0878', '0831', '0832', '0838', '0828', '0881', '0882', '0887', '0888', '0896',
        '0897', '0898'
    );

    protected static $mobileNumberFormats = array(
        // 0811 XXX XXX, 10 digits, very old
        '######',
        
        // 0811 XXXX XXX, 11 digits
        '#######',
        
        // 0811 XXXX XXXX, 12 digits
        '########',
    );

    public static function internationalNumber()
    {
        return static::numerify(
            static::randomElement(static::$internationalPrefixes)
            . static::randomElement(static::$formats)
        );
    }

    public static function regionalNumber()
    {
        return static::numerify(
            static::randomElement(static::$regionalCodes)
            . static::randomElement(static::$formats)
        );
    }

    public static function mobileNumber()
    {
        return static::numerify(
            static::randomElement(static::$mobileNumberPrefixes)
            . static::randomElement(static::$mobileNumberFormats)
        );
    }
}
