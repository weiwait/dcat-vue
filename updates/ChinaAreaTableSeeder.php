<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChinaAreaSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('china_areas')->delete();

        \DB::table('china_areas')->insert(array (
            0 =>
            array (
                'code' => 110000,
                'level' => 1,
                'name' => '北京市',
                'pcode' => 0,
            ),
            1 =>
            array (
                'code' => 110100,
                'level' => 2,
                'name' => '市辖区',
                'pcode' => 110000,
            ),
            2 =>
            array (
                'code' => 110101,
                'level' => 3,
                'name' => '东城区',
                'pcode' => 110100,
            ),
            3 =>
            array (
                'code' => 110102,
                'level' => 3,
                'name' => '西城区',
                'pcode' => 110100,
            ),
            4 =>
            array (
                'code' => 110105,
                'level' => 3,
                'name' => '朝阳区',
                'pcode' => 110100,
            ),
            5 =>
            array (
                'code' => 110106,
                'level' => 3,
                'name' => '丰台区',
                'pcode' => 110100,
            ),
            6 =>
            array (
                'code' => 110107,
                'level' => 3,
                'name' => '石景山区',
                'pcode' => 110100,
            ),
            7 =>
            array (
                'code' => 110108,
                'level' => 3,
                'name' => '海淀区',
                'pcode' => 110100,
            ),
            8 =>
            array (
                'code' => 110109,
                'level' => 3,
                'name' => '门头沟区',
                'pcode' => 110100,
            ),
            9 =>
            array (
                'code' => 110111,
                'level' => 3,
                'name' => '房山区',
                'pcode' => 110100,
            ),
            10 =>
            array (
                'code' => 110112,
                'level' => 3,
                'name' => '通州区',
                'pcode' => 110100,
            ),
            11 =>
            array (
                'code' => 110113,
                'level' => 3,
                'name' => '顺义区',
                'pcode' => 110100,
            ),
            12 =>
            array (
                'code' => 110114,
                'level' => 3,
                'name' => '昌平区',
                'pcode' => 110100,
            ),
            13 =>
            array (
                'code' => 110115,
                'level' => 3,
                'name' => '大兴区',
                'pcode' => 110100,
            ),
            14 =>
            array (
                'code' => 110116,
                'level' => 3,
                'name' => '怀柔区',
                'pcode' => 110100,
            ),
            15 =>
            array (
                'code' => 110117,
                'level' => 3,
                'name' => '平谷区',
                'pcode' => 110100,
            ),
            16 =>
            array (
                'code' => 110118,
                'level' => 3,
                'name' => '密云区',
                'pcode' => 110100,
            ),
            17 =>
            array (
                'code' => 110119,
                'level' => 3,
                'name' => '延庆区',
                'pcode' => 110100,
            ),
            18 =>
            array (
                'code' => 120000,
                'level' => 1,
                'name' => '天津市',
                'pcode' => 0,
            ),
            19 =>
            array (
                'code' => 120100,
                'level' => 2,
                'name' => '市辖区',
                'pcode' => 120000,
            ),
            20 =>
            array (
                'code' => 120101,
                'level' => 3,
                'name' => '和平区',
                'pcode' => 120100,
            ),
            21 =>
            array (
                'code' => 120102,
                'level' => 3,
                'name' => '河东区',
                'pcode' => 120100,
            ),
            22 =>
            array (
                'code' => 120103,
                'level' => 3,
                'name' => '河西区',
                'pcode' => 120100,
            ),
            23 =>
            array (
                'code' => 120104,
                'level' => 3,
                'name' => '南开区',
                'pcode' => 120100,
            ),
            24 =>
            array (
                'code' => 120105,
                'level' => 3,
                'name' => '河北区',
                'pcode' => 120100,
            ),
            25 =>
            array (
                'code' => 120106,
                'level' => 3,
                'name' => '红桥区',
                'pcode' => 120100,
            ),
            26 =>
            array (
                'code' => 120110,
                'level' => 3,
                'name' => '东丽区',
                'pcode' => 120100,
            ),
            27 =>
            array (
                'code' => 120111,
                'level' => 3,
                'name' => '西青区',
                'pcode' => 120100,
            ),
            28 =>
            array (
                'code' => 120112,
                'level' => 3,
                'name' => '津南区',
                'pcode' => 120100,
            ),
            29 =>
            array (
                'code' => 120113,
                'level' => 3,
                'name' => '北辰区',
                'pcode' => 120100,
            ),
            30 =>
            array (
                'code' => 120114,
                'level' => 3,
                'name' => '武清区',
                'pcode' => 120100,
            ),
            31 =>
            array (
                'code' => 120115,
                'level' => 3,
                'name' => '宝坻区',
                'pcode' => 120100,
            ),
            32 =>
            array (
                'code' => 120116,
                'level' => 3,
                'name' => '滨海新区',
                'pcode' => 120100,
            ),
            33 =>
            array (
                'code' => 120117,
                'level' => 3,
                'name' => '宁河区',
                'pcode' => 120100,
            ),
            34 =>
            array (
                'code' => 120118,
                'level' => 3,
                'name' => '静海区',
                'pcode' => 120100,
            ),
            35 =>
            array (
                'code' => 120119,
                'level' => 3,
                'name' => '蓟州区',
                'pcode' => 120100,
            ),
            36 =>
            array (
                'code' => 130000,
                'level' => 1,
                'name' => '河北省',
                'pcode' => 0,
            ),
            37 =>
            array (
                'code' => 130100,
                'level' => 2,
                'name' => '石家庄市',
                'pcode' => 130000,
            ),
            38 =>
            array (
                'code' => 130101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 130100,
            ),
            39 =>
            array (
                'code' => 130102,
                'level' => 3,
                'name' => '长安区',
                'pcode' => 130100,
            ),
            40 =>
            array (
                'code' => 130104,
                'level' => 3,
                'name' => '桥西区',
                'pcode' => 130100,
            ),
            41 =>
            array (
                'code' => 130105,
                'level' => 3,
                'name' => '新华区',
                'pcode' => 130100,
            ),
            42 =>
            array (
                'code' => 130107,
                'level' => 3,
                'name' => '井陉矿区',
                'pcode' => 130100,
            ),
            43 =>
            array (
                'code' => 130108,
                'level' => 3,
                'name' => '裕华区',
                'pcode' => 130100,
            ),
            44 =>
            array (
                'code' => 130109,
                'level' => 3,
                'name' => '藁城区',
                'pcode' => 130100,
            ),
            45 =>
            array (
                'code' => 130110,
                'level' => 3,
                'name' => '鹿泉区',
                'pcode' => 130100,
            ),
            46 =>
            array (
                'code' => 130111,
                'level' => 3,
                'name' => '栾城区',
                'pcode' => 130100,
            ),
            47 =>
            array (
                'code' => 130121,
                'level' => 3,
                'name' => '井陉县',
                'pcode' => 130100,
            ),
            48 =>
            array (
                'code' => 130123,
                'level' => 3,
                'name' => '正定县',
                'pcode' => 130100,
            ),
            49 =>
            array (
                'code' => 130125,
                'level' => 3,
                'name' => '行唐县',
                'pcode' => 130100,
            ),
            50 =>
            array (
                'code' => 130126,
                'level' => 3,
                'name' => '灵寿县',
                'pcode' => 130100,
            ),
            51 =>
            array (
                'code' => 130127,
                'level' => 3,
                'name' => '高邑县',
                'pcode' => 130100,
            ),
            52 =>
            array (
                'code' => 130128,
                'level' => 3,
                'name' => '深泽县',
                'pcode' => 130100,
            ),
            53 =>
            array (
                'code' => 130129,
                'level' => 3,
                'name' => '赞皇县',
                'pcode' => 130100,
            ),
            54 =>
            array (
                'code' => 130130,
                'level' => 3,
                'name' => '无极县',
                'pcode' => 130100,
            ),
            55 =>
            array (
                'code' => 130131,
                'level' => 3,
                'name' => '平山县',
                'pcode' => 130100,
            ),
            56 =>
            array (
                'code' => 130132,
                'level' => 3,
                'name' => '元氏县',
                'pcode' => 130100,
            ),
            57 =>
            array (
                'code' => 130133,
                'level' => 3,
                'name' => '赵县',
                'pcode' => 130100,
            ),
            58 =>
            array (
                'code' => 130171,
                'level' => 3,
                'name' => '石家庄高新技术产业开发区',
                'pcode' => 130100,
            ),
            59 =>
            array (
                'code' => 130172,
                'level' => 3,
                'name' => '石家庄循环化工园区',
                'pcode' => 130100,
            ),
            60 =>
            array (
                'code' => 130181,
                'level' => 3,
                'name' => '辛集市',
                'pcode' => 130100,
            ),
            61 =>
            array (
                'code' => 130183,
                'level' => 3,
                'name' => '晋州市',
                'pcode' => 130100,
            ),
            62 =>
            array (
                'code' => 130184,
                'level' => 3,
                'name' => '新乐市',
                'pcode' => 130100,
            ),
            63 =>
            array (
                'code' => 130200,
                'level' => 2,
                'name' => '唐山市',
                'pcode' => 130000,
            ),
            64 =>
            array (
                'code' => 130201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 130200,
            ),
            65 =>
            array (
                'code' => 130202,
                'level' => 3,
                'name' => '路南区',
                'pcode' => 130200,
            ),
            66 =>
            array (
                'code' => 130203,
                'level' => 3,
                'name' => '路北区',
                'pcode' => 130200,
            ),
            67 =>
            array (
                'code' => 130204,
                'level' => 3,
                'name' => '古冶区',
                'pcode' => 130200,
            ),
            68 =>
            array (
                'code' => 130205,
                'level' => 3,
                'name' => '开平区',
                'pcode' => 130200,
            ),
            69 =>
            array (
                'code' => 130207,
                'level' => 3,
                'name' => '丰南区',
                'pcode' => 130200,
            ),
            70 =>
            array (
                'code' => 130208,
                'level' => 3,
                'name' => '丰润区',
                'pcode' => 130200,
            ),
            71 =>
            array (
                'code' => 130209,
                'level' => 3,
                'name' => '曹妃甸区',
                'pcode' => 130200,
            ),
            72 =>
            array (
                'code' => 130224,
                'level' => 3,
                'name' => '滦南县',
                'pcode' => 130200,
            ),
            73 =>
            array (
                'code' => 130225,
                'level' => 3,
                'name' => '乐亭县',
                'pcode' => 130200,
            ),
            74 =>
            array (
                'code' => 130227,
                'level' => 3,
                'name' => '迁西县',
                'pcode' => 130200,
            ),
            75 =>
            array (
                'code' => 130229,
                'level' => 3,
                'name' => '玉田县',
                'pcode' => 130200,
            ),
            76 =>
            array (
                'code' => 130271,
                'level' => 3,
                'name' => '河北唐山芦台经济开发区',
                'pcode' => 130200,
            ),
            77 =>
            array (
                'code' => 130272,
                'level' => 3,
                'name' => '唐山市汉沽管理区',
                'pcode' => 130200,
            ),
            78 =>
            array (
                'code' => 130273,
                'level' => 3,
                'name' => '唐山高新技术产业开发区',
                'pcode' => 130200,
            ),
            79 =>
            array (
                'code' => 130274,
                'level' => 3,
                'name' => '河北唐山海港经济开发区',
                'pcode' => 130200,
            ),
            80 =>
            array (
                'code' => 130281,
                'level' => 3,
                'name' => '遵化市',
                'pcode' => 130200,
            ),
            81 =>
            array (
                'code' => 130283,
                'level' => 3,
                'name' => '迁安市',
                'pcode' => 130200,
            ),
            82 =>
            array (
                'code' => 130284,
                'level' => 3,
                'name' => '滦州市',
                'pcode' => 130200,
            ),
            83 =>
            array (
                'code' => 130300,
                'level' => 2,
                'name' => '秦皇岛市',
                'pcode' => 130000,
            ),
            84 =>
            array (
                'code' => 130301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 130300,
            ),
            85 =>
            array (
                'code' => 130302,
                'level' => 3,
                'name' => '海港区',
                'pcode' => 130300,
            ),
            86 =>
            array (
                'code' => 130303,
                'level' => 3,
                'name' => '山海关区',
                'pcode' => 130300,
            ),
            87 =>
            array (
                'code' => 130304,
                'level' => 3,
                'name' => '北戴河区',
                'pcode' => 130300,
            ),
            88 =>
            array (
                'code' => 130306,
                'level' => 3,
                'name' => '抚宁区',
                'pcode' => 130300,
            ),
            89 =>
            array (
                'code' => 130321,
                'level' => 3,
                'name' => '青龙满族自治县',
                'pcode' => 130300,
            ),
            90 =>
            array (
                'code' => 130322,
                'level' => 3,
                'name' => '昌黎县',
                'pcode' => 130300,
            ),
            91 =>
            array (
                'code' => 130324,
                'level' => 3,
                'name' => '卢龙县',
                'pcode' => 130300,
            ),
            92 =>
            array (
                'code' => 130371,
                'level' => 3,
                'name' => '秦皇岛市经济技术开发区',
                'pcode' => 130300,
            ),
            93 =>
            array (
                'code' => 130372,
                'level' => 3,
                'name' => '北戴河新区',
                'pcode' => 130300,
            ),
            94 =>
            array (
                'code' => 130400,
                'level' => 2,
                'name' => '邯郸市',
                'pcode' => 130000,
            ),
            95 =>
            array (
                'code' => 130401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 130400,
            ),
            96 =>
            array (
                'code' => 130402,
                'level' => 3,
                'name' => '邯山区',
                'pcode' => 130400,
            ),
            97 =>
            array (
                'code' => 130403,
                'level' => 3,
                'name' => '丛台区',
                'pcode' => 130400,
            ),
            98 =>
            array (
                'code' => 130404,
                'level' => 3,
                'name' => '复兴区',
                'pcode' => 130400,
            ),
            99 =>
            array (
                'code' => 130406,
                'level' => 3,
                'name' => '峰峰矿区',
                'pcode' => 130400,
            ),
            100 =>
            array (
                'code' => 130407,
                'level' => 3,
                'name' => '肥乡区',
                'pcode' => 130400,
            ),
            101 =>
            array (
                'code' => 130408,
                'level' => 3,
                'name' => '永年区',
                'pcode' => 130400,
            ),
            102 =>
            array (
                'code' => 130423,
                'level' => 3,
                'name' => '临漳县',
                'pcode' => 130400,
            ),
            103 =>
            array (
                'code' => 130424,
                'level' => 3,
                'name' => '成安县',
                'pcode' => 130400,
            ),
            104 =>
            array (
                'code' => 130425,
                'level' => 3,
                'name' => '大名县',
                'pcode' => 130400,
            ),
            105 =>
            array (
                'code' => 130426,
                'level' => 3,
                'name' => '涉县',
                'pcode' => 130400,
            ),
            106 =>
            array (
                'code' => 130427,
                'level' => 3,
                'name' => '磁县',
                'pcode' => 130400,
            ),
            107 =>
            array (
                'code' => 130430,
                'level' => 3,
                'name' => '邱县',
                'pcode' => 130400,
            ),
            108 =>
            array (
                'code' => 130431,
                'level' => 3,
                'name' => '鸡泽县',
                'pcode' => 130400,
            ),
            109 =>
            array (
                'code' => 130432,
                'level' => 3,
                'name' => '广平县',
                'pcode' => 130400,
            ),
            110 =>
            array (
                'code' => 130433,
                'level' => 3,
                'name' => '馆陶县',
                'pcode' => 130400,
            ),
            111 =>
            array (
                'code' => 130434,
                'level' => 3,
                'name' => '魏县',
                'pcode' => 130400,
            ),
            112 =>
            array (
                'code' => 130435,
                'level' => 3,
                'name' => '曲周县',
                'pcode' => 130400,
            ),
            113 =>
            array (
                'code' => 130471,
                'level' => 3,
                'name' => '邯郸经济技术开发区',
                'pcode' => 130400,
            ),
            114 =>
            array (
                'code' => 130473,
                'level' => 3,
                'name' => '邯郸冀南新区',
                'pcode' => 130400,
            ),
            115 =>
            array (
                'code' => 130481,
                'level' => 3,
                'name' => '武安市',
                'pcode' => 130400,
            ),
            116 =>
            array (
                'code' => 130500,
                'level' => 2,
                'name' => '邢台市',
                'pcode' => 130000,
            ),
            117 =>
            array (
                'code' => 130501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 130500,
            ),
            118 =>
            array (
                'code' => 130502,
                'level' => 3,
                'name' => '襄都区',
                'pcode' => 130500,
            ),
            119 =>
            array (
                'code' => 130503,
                'level' => 3,
                'name' => '信都区',
                'pcode' => 130500,
            ),
            120 =>
            array (
                'code' => 130505,
                'level' => 3,
                'name' => '任泽区',
                'pcode' => 130500,
            ),
            121 =>
            array (
                'code' => 130506,
                'level' => 3,
                'name' => '南和区',
                'pcode' => 130500,
            ),
            122 =>
            array (
                'code' => 130522,
                'level' => 3,
                'name' => '临城县',
                'pcode' => 130500,
            ),
            123 =>
            array (
                'code' => 130523,
                'level' => 3,
                'name' => '内丘县',
                'pcode' => 130500,
            ),
            124 =>
            array (
                'code' => 130524,
                'level' => 3,
                'name' => '柏乡县',
                'pcode' => 130500,
            ),
            125 =>
            array (
                'code' => 130525,
                'level' => 3,
                'name' => '隆尧县',
                'pcode' => 130500,
            ),
            126 =>
            array (
                'code' => 130528,
                'level' => 3,
                'name' => '宁晋县',
                'pcode' => 130500,
            ),
            127 =>
            array (
                'code' => 130529,
                'level' => 3,
                'name' => '巨鹿县',
                'pcode' => 130500,
            ),
            128 =>
            array (
                'code' => 130530,
                'level' => 3,
                'name' => '新河县',
                'pcode' => 130500,
            ),
            129 =>
            array (
                'code' => 130531,
                'level' => 3,
                'name' => '广宗县',
                'pcode' => 130500,
            ),
            130 =>
            array (
                'code' => 130532,
                'level' => 3,
                'name' => '平乡县',
                'pcode' => 130500,
            ),
            131 =>
            array (
                'code' => 130533,
                'level' => 3,
                'name' => '威县',
                'pcode' => 130500,
            ),
            132 =>
            array (
                'code' => 130534,
                'level' => 3,
                'name' => '清河县',
                'pcode' => 130500,
            ),
            133 =>
            array (
                'code' => 130535,
                'level' => 3,
                'name' => '临西县',
                'pcode' => 130500,
            ),
            134 =>
            array (
                'code' => 130571,
                'level' => 3,
                'name' => '河北邢台经济开发区',
                'pcode' => 130500,
            ),
            135 =>
            array (
                'code' => 130581,
                'level' => 3,
                'name' => '南宫市',
                'pcode' => 130500,
            ),
            136 =>
            array (
                'code' => 130582,
                'level' => 3,
                'name' => '沙河市',
                'pcode' => 130500,
            ),
            137 =>
            array (
                'code' => 130600,
                'level' => 2,
                'name' => '保定市',
                'pcode' => 130000,
            ),
            138 =>
            array (
                'code' => 130601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 130600,
            ),
            139 =>
            array (
                'code' => 130602,
                'level' => 3,
                'name' => '竞秀区',
                'pcode' => 130600,
            ),
            140 =>
            array (
                'code' => 130606,
                'level' => 3,
                'name' => '莲池区',
                'pcode' => 130600,
            ),
            141 =>
            array (
                'code' => 130607,
                'level' => 3,
                'name' => '满城区',
                'pcode' => 130600,
            ),
            142 =>
            array (
                'code' => 130608,
                'level' => 3,
                'name' => '清苑区',
                'pcode' => 130600,
            ),
            143 =>
            array (
                'code' => 130609,
                'level' => 3,
                'name' => '徐水区',
                'pcode' => 130600,
            ),
            144 =>
            array (
                'code' => 130623,
                'level' => 3,
                'name' => '涞水县',
                'pcode' => 130600,
            ),
            145 =>
            array (
                'code' => 130624,
                'level' => 3,
                'name' => '阜平县',
                'pcode' => 130600,
            ),
            146 =>
            array (
                'code' => 130626,
                'level' => 3,
                'name' => '定兴县',
                'pcode' => 130600,
            ),
            147 =>
            array (
                'code' => 130627,
                'level' => 3,
                'name' => '唐县',
                'pcode' => 130600,
            ),
            148 =>
            array (
                'code' => 130628,
                'level' => 3,
                'name' => '高阳县',
                'pcode' => 130600,
            ),
            149 =>
            array (
                'code' => 130629,
                'level' => 3,
                'name' => '容城县',
                'pcode' => 130600,
            ),
            150 =>
            array (
                'code' => 130630,
                'level' => 3,
                'name' => '涞源县',
                'pcode' => 130600,
            ),
            151 =>
            array (
                'code' => 130631,
                'level' => 3,
                'name' => '望都县',
                'pcode' => 130600,
            ),
            152 =>
            array (
                'code' => 130632,
                'level' => 3,
                'name' => '安新县',
                'pcode' => 130600,
            ),
            153 =>
            array (
                'code' => 130633,
                'level' => 3,
                'name' => '易县',
                'pcode' => 130600,
            ),
            154 =>
            array (
                'code' => 130634,
                'level' => 3,
                'name' => '曲阳县',
                'pcode' => 130600,
            ),
            155 =>
            array (
                'code' => 130635,
                'level' => 3,
                'name' => '蠡县',
                'pcode' => 130600,
            ),
            156 =>
            array (
                'code' => 130636,
                'level' => 3,
                'name' => '顺平县',
                'pcode' => 130600,
            ),
            157 =>
            array (
                'code' => 130637,
                'level' => 3,
                'name' => '博野县',
                'pcode' => 130600,
            ),
            158 =>
            array (
                'code' => 130638,
                'level' => 3,
                'name' => '雄县',
                'pcode' => 130600,
            ),
            159 =>
            array (
                'code' => 130671,
                'level' => 3,
                'name' => '保定高新技术产业开发区',
                'pcode' => 130600,
            ),
            160 =>
            array (
                'code' => 130672,
                'level' => 3,
                'name' => '保定白沟新城',
                'pcode' => 130600,
            ),
            161 =>
            array (
                'code' => 130681,
                'level' => 3,
                'name' => '涿州市',
                'pcode' => 130600,
            ),
            162 =>
            array (
                'code' => 130682,
                'level' => 3,
                'name' => '定州市',
                'pcode' => 130600,
            ),
            163 =>
            array (
                'code' => 130683,
                'level' => 3,
                'name' => '安国市',
                'pcode' => 130600,
            ),
            164 =>
            array (
                'code' => 130684,
                'level' => 3,
                'name' => '高碑店市',
                'pcode' => 130600,
            ),
            165 =>
            array (
                'code' => 130700,
                'level' => 2,
                'name' => '张家口市',
                'pcode' => 130000,
            ),
            166 =>
            array (
                'code' => 130701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 130700,
            ),
            167 =>
            array (
                'code' => 130702,
                'level' => 3,
                'name' => '桥东区',
                'pcode' => 130700,
            ),
            168 =>
            array (
                'code' => 130703,
                'level' => 3,
                'name' => '桥西区',
                'pcode' => 130700,
            ),
            169 =>
            array (
                'code' => 130705,
                'level' => 3,
                'name' => '宣化区',
                'pcode' => 130700,
            ),
            170 =>
            array (
                'code' => 130706,
                'level' => 3,
                'name' => '下花园区',
                'pcode' => 130700,
            ),
            171 =>
            array (
                'code' => 130708,
                'level' => 3,
                'name' => '万全区',
                'pcode' => 130700,
            ),
            172 =>
            array (
                'code' => 130709,
                'level' => 3,
                'name' => '崇礼区',
                'pcode' => 130700,
            ),
            173 =>
            array (
                'code' => 130722,
                'level' => 3,
                'name' => '张北县',
                'pcode' => 130700,
            ),
            174 =>
            array (
                'code' => 130723,
                'level' => 3,
                'name' => '康保县',
                'pcode' => 130700,
            ),
            175 =>
            array (
                'code' => 130724,
                'level' => 3,
                'name' => '沽源县',
                'pcode' => 130700,
            ),
            176 =>
            array (
                'code' => 130725,
                'level' => 3,
                'name' => '尚义县',
                'pcode' => 130700,
            ),
            177 =>
            array (
                'code' => 130726,
                'level' => 3,
                'name' => '蔚县',
                'pcode' => 130700,
            ),
            178 =>
            array (
                'code' => 130727,
                'level' => 3,
                'name' => '阳原县',
                'pcode' => 130700,
            ),
            179 =>
            array (
                'code' => 130728,
                'level' => 3,
                'name' => '怀安县',
                'pcode' => 130700,
            ),
            180 =>
            array (
                'code' => 130730,
                'level' => 3,
                'name' => '怀来县',
                'pcode' => 130700,
            ),
            181 =>
            array (
                'code' => 130731,
                'level' => 3,
                'name' => '涿鹿县',
                'pcode' => 130700,
            ),
            182 =>
            array (
                'code' => 130732,
                'level' => 3,
                'name' => '赤城县',
                'pcode' => 130700,
            ),
            183 =>
            array (
                'code' => 130771,
                'level' => 3,
                'name' => '张家口经济开发区',
                'pcode' => 130700,
            ),
            184 =>
            array (
                'code' => 130772,
                'level' => 3,
                'name' => '张家口市察北管理区',
                'pcode' => 130700,
            ),
            185 =>
            array (
                'code' => 130773,
                'level' => 3,
                'name' => '张家口市塞北管理区',
                'pcode' => 130700,
            ),
            186 =>
            array (
                'code' => 130800,
                'level' => 2,
                'name' => '承德市',
                'pcode' => 130000,
            ),
            187 =>
            array (
                'code' => 130801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 130800,
            ),
            188 =>
            array (
                'code' => 130802,
                'level' => 3,
                'name' => '双桥区',
                'pcode' => 130800,
            ),
            189 =>
            array (
                'code' => 130803,
                'level' => 3,
                'name' => '双滦区',
                'pcode' => 130800,
            ),
            190 =>
            array (
                'code' => 130804,
                'level' => 3,
                'name' => '鹰手营子矿区',
                'pcode' => 130800,
            ),
            191 =>
            array (
                'code' => 130821,
                'level' => 3,
                'name' => '承德县',
                'pcode' => 130800,
            ),
            192 =>
            array (
                'code' => 130822,
                'level' => 3,
                'name' => '兴隆县',
                'pcode' => 130800,
            ),
            193 =>
            array (
                'code' => 130824,
                'level' => 3,
                'name' => '滦平县',
                'pcode' => 130800,
            ),
            194 =>
            array (
                'code' => 130825,
                'level' => 3,
                'name' => '隆化县',
                'pcode' => 130800,
            ),
            195 =>
            array (
                'code' => 130826,
                'level' => 3,
                'name' => '丰宁满族自治县',
                'pcode' => 130800,
            ),
            196 =>
            array (
                'code' => 130827,
                'level' => 3,
                'name' => '宽城满族自治县',
                'pcode' => 130800,
            ),
            197 =>
            array (
                'code' => 130828,
                'level' => 3,
                'name' => '围场满族蒙古族自治县',
                'pcode' => 130800,
            ),
            198 =>
            array (
                'code' => 130871,
                'level' => 3,
                'name' => '承德高新技术产业开发区',
                'pcode' => 130800,
            ),
            199 =>
            array (
                'code' => 130881,
                'level' => 3,
                'name' => '平泉市',
                'pcode' => 130800,
            ),
            200 =>
            array (
                'code' => 130900,
                'level' => 2,
                'name' => '沧州市',
                'pcode' => 130000,
            ),
            201 =>
            array (
                'code' => 130901,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 130900,
            ),
            202 =>
            array (
                'code' => 130902,
                'level' => 3,
                'name' => '新华区',
                'pcode' => 130900,
            ),
            203 =>
            array (
                'code' => 130903,
                'level' => 3,
                'name' => '运河区',
                'pcode' => 130900,
            ),
            204 =>
            array (
                'code' => 130921,
                'level' => 3,
                'name' => '沧县',
                'pcode' => 130900,
            ),
            205 =>
            array (
                'code' => 130922,
                'level' => 3,
                'name' => '青县',
                'pcode' => 130900,
            ),
            206 =>
            array (
                'code' => 130923,
                'level' => 3,
                'name' => '东光县',
                'pcode' => 130900,
            ),
            207 =>
            array (
                'code' => 130924,
                'level' => 3,
                'name' => '海兴县',
                'pcode' => 130900,
            ),
            208 =>
            array (
                'code' => 130925,
                'level' => 3,
                'name' => '盐山县',
                'pcode' => 130900,
            ),
            209 =>
            array (
                'code' => 130926,
                'level' => 3,
                'name' => '肃宁县',
                'pcode' => 130900,
            ),
            210 =>
            array (
                'code' => 130927,
                'level' => 3,
                'name' => '南皮县',
                'pcode' => 130900,
            ),
            211 =>
            array (
                'code' => 130928,
                'level' => 3,
                'name' => '吴桥县',
                'pcode' => 130900,
            ),
            212 =>
            array (
                'code' => 130929,
                'level' => 3,
                'name' => '献县',
                'pcode' => 130900,
            ),
            213 =>
            array (
                'code' => 130930,
                'level' => 3,
                'name' => '孟村回族自治县',
                'pcode' => 130900,
            ),
            214 =>
            array (
                'code' => 130971,
                'level' => 3,
                'name' => '河北沧州经济开发区',
                'pcode' => 130900,
            ),
            215 =>
            array (
                'code' => 130972,
                'level' => 3,
                'name' => '沧州高新技术产业开发区',
                'pcode' => 130900,
            ),
            216 =>
            array (
                'code' => 130973,
                'level' => 3,
                'name' => '沧州渤海新区',
                'pcode' => 130900,
            ),
            217 =>
            array (
                'code' => 130981,
                'level' => 3,
                'name' => '泊头市',
                'pcode' => 130900,
            ),
            218 =>
            array (
                'code' => 130982,
                'level' => 3,
                'name' => '任丘市',
                'pcode' => 130900,
            ),
            219 =>
            array (
                'code' => 130983,
                'level' => 3,
                'name' => '黄骅市',
                'pcode' => 130900,
            ),
            220 =>
            array (
                'code' => 130984,
                'level' => 3,
                'name' => '河间市',
                'pcode' => 130900,
            ),
            221 =>
            array (
                'code' => 131000,
                'level' => 2,
                'name' => '廊坊市',
                'pcode' => 130000,
            ),
            222 =>
            array (
                'code' => 131001,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 131000,
            ),
            223 =>
            array (
                'code' => 131002,
                'level' => 3,
                'name' => '安次区',
                'pcode' => 131000,
            ),
            224 =>
            array (
                'code' => 131003,
                'level' => 3,
                'name' => '广阳区',
                'pcode' => 131000,
            ),
            225 =>
            array (
                'code' => 131022,
                'level' => 3,
                'name' => '固安县',
                'pcode' => 131000,
            ),
            226 =>
            array (
                'code' => 131023,
                'level' => 3,
                'name' => '永清县',
                'pcode' => 131000,
            ),
            227 =>
            array (
                'code' => 131024,
                'level' => 3,
                'name' => '香河县',
                'pcode' => 131000,
            ),
            228 =>
            array (
                'code' => 131025,
                'level' => 3,
                'name' => '大城县',
                'pcode' => 131000,
            ),
            229 =>
            array (
                'code' => 131026,
                'level' => 3,
                'name' => '文安县',
                'pcode' => 131000,
            ),
            230 =>
            array (
                'code' => 131028,
                'level' => 3,
                'name' => '大厂回族自治县',
                'pcode' => 131000,
            ),
            231 =>
            array (
                'code' => 131071,
                'level' => 3,
                'name' => '廊坊经济技术开发区',
                'pcode' => 131000,
            ),
            232 =>
            array (
                'code' => 131081,
                'level' => 3,
                'name' => '霸州市',
                'pcode' => 131000,
            ),
            233 =>
            array (
                'code' => 131082,
                'level' => 3,
                'name' => '三河市',
                'pcode' => 131000,
            ),
            234 =>
            array (
                'code' => 131100,
                'level' => 2,
                'name' => '衡水市',
                'pcode' => 130000,
            ),
            235 =>
            array (
                'code' => 131101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 131100,
            ),
            236 =>
            array (
                'code' => 131102,
                'level' => 3,
                'name' => '桃城区',
                'pcode' => 131100,
            ),
            237 =>
            array (
                'code' => 131103,
                'level' => 3,
                'name' => '冀州区',
                'pcode' => 131100,
            ),
            238 =>
            array (
                'code' => 131121,
                'level' => 3,
                'name' => '枣强县',
                'pcode' => 131100,
            ),
            239 =>
            array (
                'code' => 131122,
                'level' => 3,
                'name' => '武邑县',
                'pcode' => 131100,
            ),
            240 =>
            array (
                'code' => 131123,
                'level' => 3,
                'name' => '武强县',
                'pcode' => 131100,
            ),
            241 =>
            array (
                'code' => 131124,
                'level' => 3,
                'name' => '饶阳县',
                'pcode' => 131100,
            ),
            242 =>
            array (
                'code' => 131125,
                'level' => 3,
                'name' => '安平县',
                'pcode' => 131100,
            ),
            243 =>
            array (
                'code' => 131126,
                'level' => 3,
                'name' => '故城县',
                'pcode' => 131100,
            ),
            244 =>
            array (
                'code' => 131127,
                'level' => 3,
                'name' => '景县',
                'pcode' => 131100,
            ),
            245 =>
            array (
                'code' => 131128,
                'level' => 3,
                'name' => '阜城县',
                'pcode' => 131100,
            ),
            246 =>
            array (
                'code' => 131171,
                'level' => 3,
                'name' => '河北衡水高新技术产业开发区',
                'pcode' => 131100,
            ),
            247 =>
            array (
                'code' => 131172,
                'level' => 3,
                'name' => '衡水滨湖新区',
                'pcode' => 131100,
            ),
            248 =>
            array (
                'code' => 131182,
                'level' => 3,
                'name' => '深州市',
                'pcode' => 131100,
            ),
            249 =>
            array (
                'code' => 140000,
                'level' => 1,
                'name' => '山西省',
                'pcode' => 0,
            ),
            250 =>
            array (
                'code' => 140100,
                'level' => 2,
                'name' => '太原市',
                'pcode' => 140000,
            ),
            251 =>
            array (
                'code' => 140101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 140100,
            ),
            252 =>
            array (
                'code' => 140105,
                'level' => 3,
                'name' => '小店区',
                'pcode' => 140100,
            ),
            253 =>
            array (
                'code' => 140106,
                'level' => 3,
                'name' => '迎泽区',
                'pcode' => 140100,
            ),
            254 =>
            array (
                'code' => 140107,
                'level' => 3,
                'name' => '杏花岭区',
                'pcode' => 140100,
            ),
            255 =>
            array (
                'code' => 140108,
                'level' => 3,
                'name' => '尖草坪区',
                'pcode' => 140100,
            ),
            256 =>
            array (
                'code' => 140109,
                'level' => 3,
                'name' => '万柏林区',
                'pcode' => 140100,
            ),
            257 =>
            array (
                'code' => 140110,
                'level' => 3,
                'name' => '晋源区',
                'pcode' => 140100,
            ),
            258 =>
            array (
                'code' => 140121,
                'level' => 3,
                'name' => '清徐县',
                'pcode' => 140100,
            ),
            259 =>
            array (
                'code' => 140122,
                'level' => 3,
                'name' => '阳曲县',
                'pcode' => 140100,
            ),
            260 =>
            array (
                'code' => 140123,
                'level' => 3,
                'name' => '娄烦县',
                'pcode' => 140100,
            ),
            261 =>
            array (
                'code' => 140171,
                'level' => 3,
                'name' => '山西转型综合改革示范区',
                'pcode' => 140100,
            ),
            262 =>
            array (
                'code' => 140181,
                'level' => 3,
                'name' => '古交市',
                'pcode' => 140100,
            ),
            263 =>
            array (
                'code' => 140200,
                'level' => 2,
                'name' => '大同市',
                'pcode' => 140000,
            ),
            264 =>
            array (
                'code' => 140201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 140200,
            ),
            265 =>
            array (
                'code' => 140212,
                'level' => 3,
                'name' => '新荣区',
                'pcode' => 140200,
            ),
            266 =>
            array (
                'code' => 140213,
                'level' => 3,
                'name' => '平城区',
                'pcode' => 140200,
            ),
            267 =>
            array (
                'code' => 140214,
                'level' => 3,
                'name' => '云冈区',
                'pcode' => 140200,
            ),
            268 =>
            array (
                'code' => 140215,
                'level' => 3,
                'name' => '云州区',
                'pcode' => 140200,
            ),
            269 =>
            array (
                'code' => 140221,
                'level' => 3,
                'name' => '阳高县',
                'pcode' => 140200,
            ),
            270 =>
            array (
                'code' => 140222,
                'level' => 3,
                'name' => '天镇县',
                'pcode' => 140200,
            ),
            271 =>
            array (
                'code' => 140223,
                'level' => 3,
                'name' => '广灵县',
                'pcode' => 140200,
            ),
            272 =>
            array (
                'code' => 140224,
                'level' => 3,
                'name' => '灵丘县',
                'pcode' => 140200,
            ),
            273 =>
            array (
                'code' => 140225,
                'level' => 3,
                'name' => '浑源县',
                'pcode' => 140200,
            ),
            274 =>
            array (
                'code' => 140226,
                'level' => 3,
                'name' => '左云县',
                'pcode' => 140200,
            ),
            275 =>
            array (
                'code' => 140271,
                'level' => 3,
                'name' => '山西大同经济开发区',
                'pcode' => 140200,
            ),
            276 =>
            array (
                'code' => 140300,
                'level' => 2,
                'name' => '阳泉市',
                'pcode' => 140000,
            ),
            277 =>
            array (
                'code' => 140301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 140300,
            ),
            278 =>
            array (
                'code' => 140302,
                'level' => 3,
                'name' => '城区',
                'pcode' => 140300,
            ),
            279 =>
            array (
                'code' => 140303,
                'level' => 3,
                'name' => '矿区',
                'pcode' => 140300,
            ),
            280 =>
            array (
                'code' => 140311,
                'level' => 3,
                'name' => '郊区',
                'pcode' => 140300,
            ),
            281 =>
            array (
                'code' => 140321,
                'level' => 3,
                'name' => '平定县',
                'pcode' => 140300,
            ),
            282 =>
            array (
                'code' => 140322,
                'level' => 3,
                'name' => '盂县',
                'pcode' => 140300,
            ),
            283 =>
            array (
                'code' => 140400,
                'level' => 2,
                'name' => '长治市',
                'pcode' => 140000,
            ),
            284 =>
            array (
                'code' => 140401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 140400,
            ),
            285 =>
            array (
                'code' => 140403,
                'level' => 3,
                'name' => '潞州区',
                'pcode' => 140400,
            ),
            286 =>
            array (
                'code' => 140404,
                'level' => 3,
                'name' => '上党区',
                'pcode' => 140400,
            ),
            287 =>
            array (
                'code' => 140405,
                'level' => 3,
                'name' => '屯留区',
                'pcode' => 140400,
            ),
            288 =>
            array (
                'code' => 140406,
                'level' => 3,
                'name' => '潞城区',
                'pcode' => 140400,
            ),
            289 =>
            array (
                'code' => 140423,
                'level' => 3,
                'name' => '襄垣县',
                'pcode' => 140400,
            ),
            290 =>
            array (
                'code' => 140425,
                'level' => 3,
                'name' => '平顺县',
                'pcode' => 140400,
            ),
            291 =>
            array (
                'code' => 140426,
                'level' => 3,
                'name' => '黎城县',
                'pcode' => 140400,
            ),
            292 =>
            array (
                'code' => 140427,
                'level' => 3,
                'name' => '壶关县',
                'pcode' => 140400,
            ),
            293 =>
            array (
                'code' => 140428,
                'level' => 3,
                'name' => '长子县',
                'pcode' => 140400,
            ),
            294 =>
            array (
                'code' => 140429,
                'level' => 3,
                'name' => '武乡县',
                'pcode' => 140400,
            ),
            295 =>
            array (
                'code' => 140430,
                'level' => 3,
                'name' => '沁县',
                'pcode' => 140400,
            ),
            296 =>
            array (
                'code' => 140431,
                'level' => 3,
                'name' => '沁源县',
                'pcode' => 140400,
            ),
            297 =>
            array (
                'code' => 140471,
                'level' => 3,
                'name' => '山西长治高新技术产业园区',
                'pcode' => 140400,
            ),
            298 =>
            array (
                'code' => 140500,
                'level' => 2,
                'name' => '晋城市',
                'pcode' => 140000,
            ),
            299 =>
            array (
                'code' => 140501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 140500,
            ),
            300 =>
            array (
                'code' => 140502,
                'level' => 3,
                'name' => '城区',
                'pcode' => 140500,
            ),
            301 =>
            array (
                'code' => 140521,
                'level' => 3,
                'name' => '沁水县',
                'pcode' => 140500,
            ),
            302 =>
            array (
                'code' => 140522,
                'level' => 3,
                'name' => '阳城县',
                'pcode' => 140500,
            ),
            303 =>
            array (
                'code' => 140524,
                'level' => 3,
                'name' => '陵川县',
                'pcode' => 140500,
            ),
            304 =>
            array (
                'code' => 140525,
                'level' => 3,
                'name' => '泽州县',
                'pcode' => 140500,
            ),
            305 =>
            array (
                'code' => 140581,
                'level' => 3,
                'name' => '高平市',
                'pcode' => 140500,
            ),
            306 =>
            array (
                'code' => 140600,
                'level' => 2,
                'name' => '朔州市',
                'pcode' => 140000,
            ),
            307 =>
            array (
                'code' => 140601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 140600,
            ),
            308 =>
            array (
                'code' => 140602,
                'level' => 3,
                'name' => '朔城区',
                'pcode' => 140600,
            ),
            309 =>
            array (
                'code' => 140603,
                'level' => 3,
                'name' => '平鲁区',
                'pcode' => 140600,
            ),
            310 =>
            array (
                'code' => 140621,
                'level' => 3,
                'name' => '山阴县',
                'pcode' => 140600,
            ),
            311 =>
            array (
                'code' => 140622,
                'level' => 3,
                'name' => '应县',
                'pcode' => 140600,
            ),
            312 =>
            array (
                'code' => 140623,
                'level' => 3,
                'name' => '右玉县',
                'pcode' => 140600,
            ),
            313 =>
            array (
                'code' => 140671,
                'level' => 3,
                'name' => '山西朔州经济开发区',
                'pcode' => 140600,
            ),
            314 =>
            array (
                'code' => 140681,
                'level' => 3,
                'name' => '怀仁市',
                'pcode' => 140600,
            ),
            315 =>
            array (
                'code' => 140700,
                'level' => 2,
                'name' => '晋中市',
                'pcode' => 140000,
            ),
            316 =>
            array (
                'code' => 140701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 140700,
            ),
            317 =>
            array (
                'code' => 140702,
                'level' => 3,
                'name' => '榆次区',
                'pcode' => 140700,
            ),
            318 =>
            array (
                'code' => 140703,
                'level' => 3,
                'name' => '太谷区',
                'pcode' => 140700,
            ),
            319 =>
            array (
                'code' => 140721,
                'level' => 3,
                'name' => '榆社县',
                'pcode' => 140700,
            ),
            320 =>
            array (
                'code' => 140722,
                'level' => 3,
                'name' => '左权县',
                'pcode' => 140700,
            ),
            321 =>
            array (
                'code' => 140723,
                'level' => 3,
                'name' => '和顺县',
                'pcode' => 140700,
            ),
            322 =>
            array (
                'code' => 140724,
                'level' => 3,
                'name' => '昔阳县',
                'pcode' => 140700,
            ),
            323 =>
            array (
                'code' => 140725,
                'level' => 3,
                'name' => '寿阳县',
                'pcode' => 140700,
            ),
            324 =>
            array (
                'code' => 140727,
                'level' => 3,
                'name' => '祁县',
                'pcode' => 140700,
            ),
            325 =>
            array (
                'code' => 140728,
                'level' => 3,
                'name' => '平遥县',
                'pcode' => 140700,
            ),
            326 =>
            array (
                'code' => 140729,
                'level' => 3,
                'name' => '灵石县',
                'pcode' => 140700,
            ),
            327 =>
            array (
                'code' => 140781,
                'level' => 3,
                'name' => '介休市',
                'pcode' => 140700,
            ),
            328 =>
            array (
                'code' => 140800,
                'level' => 2,
                'name' => '运城市',
                'pcode' => 140000,
            ),
            329 =>
            array (
                'code' => 140801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 140800,
            ),
            330 =>
            array (
                'code' => 140802,
                'level' => 3,
                'name' => '盐湖区',
                'pcode' => 140800,
            ),
            331 =>
            array (
                'code' => 140821,
                'level' => 3,
                'name' => '临猗县',
                'pcode' => 140800,
            ),
            332 =>
            array (
                'code' => 140822,
                'level' => 3,
                'name' => '万荣县',
                'pcode' => 140800,
            ),
            333 =>
            array (
                'code' => 140823,
                'level' => 3,
                'name' => '闻喜县',
                'pcode' => 140800,
            ),
            334 =>
            array (
                'code' => 140824,
                'level' => 3,
                'name' => '稷山县',
                'pcode' => 140800,
            ),
            335 =>
            array (
                'code' => 140825,
                'level' => 3,
                'name' => '新绛县',
                'pcode' => 140800,
            ),
            336 =>
            array (
                'code' => 140826,
                'level' => 3,
                'name' => '绛县',
                'pcode' => 140800,
            ),
            337 =>
            array (
                'code' => 140827,
                'level' => 3,
                'name' => '垣曲县',
                'pcode' => 140800,
            ),
            338 =>
            array (
                'code' => 140828,
                'level' => 3,
                'name' => '夏县',
                'pcode' => 140800,
            ),
            339 =>
            array (
                'code' => 140829,
                'level' => 3,
                'name' => '平陆县',
                'pcode' => 140800,
            ),
            340 =>
            array (
                'code' => 140830,
                'level' => 3,
                'name' => '芮城县',
                'pcode' => 140800,
            ),
            341 =>
            array (
                'code' => 140881,
                'level' => 3,
                'name' => '永济市',
                'pcode' => 140800,
            ),
            342 =>
            array (
                'code' => 140882,
                'level' => 3,
                'name' => '河津市',
                'pcode' => 140800,
            ),
            343 =>
            array (
                'code' => 140900,
                'level' => 2,
                'name' => '忻州市',
                'pcode' => 140000,
            ),
            344 =>
            array (
                'code' => 140901,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 140900,
            ),
            345 =>
            array (
                'code' => 140902,
                'level' => 3,
                'name' => '忻府区',
                'pcode' => 140900,
            ),
            346 =>
            array (
                'code' => 140921,
                'level' => 3,
                'name' => '定襄县',
                'pcode' => 140900,
            ),
            347 =>
            array (
                'code' => 140922,
                'level' => 3,
                'name' => '五台县',
                'pcode' => 140900,
            ),
            348 =>
            array (
                'code' => 140923,
                'level' => 3,
                'name' => '代县',
                'pcode' => 140900,
            ),
            349 =>
            array (
                'code' => 140924,
                'level' => 3,
                'name' => '繁峙县',
                'pcode' => 140900,
            ),
            350 =>
            array (
                'code' => 140925,
                'level' => 3,
                'name' => '宁武县',
                'pcode' => 140900,
            ),
            351 =>
            array (
                'code' => 140926,
                'level' => 3,
                'name' => '静乐县',
                'pcode' => 140900,
            ),
            352 =>
            array (
                'code' => 140927,
                'level' => 3,
                'name' => '神池县',
                'pcode' => 140900,
            ),
            353 =>
            array (
                'code' => 140928,
                'level' => 3,
                'name' => '五寨县',
                'pcode' => 140900,
            ),
            354 =>
            array (
                'code' => 140929,
                'level' => 3,
                'name' => '岢岚县',
                'pcode' => 140900,
            ),
            355 =>
            array (
                'code' => 140930,
                'level' => 3,
                'name' => '河曲县',
                'pcode' => 140900,
            ),
            356 =>
            array (
                'code' => 140931,
                'level' => 3,
                'name' => '保德县',
                'pcode' => 140900,
            ),
            357 =>
            array (
                'code' => 140932,
                'level' => 3,
                'name' => '偏关县',
                'pcode' => 140900,
            ),
            358 =>
            array (
                'code' => 140971,
                'level' => 3,
                'name' => '五台山风景名胜区',
                'pcode' => 140900,
            ),
            359 =>
            array (
                'code' => 140981,
                'level' => 3,
                'name' => '原平市',
                'pcode' => 140900,
            ),
            360 =>
            array (
                'code' => 141000,
                'level' => 2,
                'name' => '临汾市',
                'pcode' => 140000,
            ),
            361 =>
            array (
                'code' => 141001,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 141000,
            ),
            362 =>
            array (
                'code' => 141002,
                'level' => 3,
                'name' => '尧都区',
                'pcode' => 141000,
            ),
            363 =>
            array (
                'code' => 141021,
                'level' => 3,
                'name' => '曲沃县',
                'pcode' => 141000,
            ),
            364 =>
            array (
                'code' => 141022,
                'level' => 3,
                'name' => '翼城县',
                'pcode' => 141000,
            ),
            365 =>
            array (
                'code' => 141023,
                'level' => 3,
                'name' => '襄汾县',
                'pcode' => 141000,
            ),
            366 =>
            array (
                'code' => 141024,
                'level' => 3,
                'name' => '洪洞县',
                'pcode' => 141000,
            ),
            367 =>
            array (
                'code' => 141025,
                'level' => 3,
                'name' => '古县',
                'pcode' => 141000,
            ),
            368 =>
            array (
                'code' => 141026,
                'level' => 3,
                'name' => '安泽县',
                'pcode' => 141000,
            ),
            369 =>
            array (
                'code' => 141027,
                'level' => 3,
                'name' => '浮山县',
                'pcode' => 141000,
            ),
            370 =>
            array (
                'code' => 141028,
                'level' => 3,
                'name' => '吉县',
                'pcode' => 141000,
            ),
            371 =>
            array (
                'code' => 141029,
                'level' => 3,
                'name' => '乡宁县',
                'pcode' => 141000,
            ),
            372 =>
            array (
                'code' => 141030,
                'level' => 3,
                'name' => '大宁县',
                'pcode' => 141000,
            ),
            373 =>
            array (
                'code' => 141031,
                'level' => 3,
                'name' => '隰县',
                'pcode' => 141000,
            ),
            374 =>
            array (
                'code' => 141032,
                'level' => 3,
                'name' => '永和县',
                'pcode' => 141000,
            ),
            375 =>
            array (
                'code' => 141033,
                'level' => 3,
                'name' => '蒲县',
                'pcode' => 141000,
            ),
            376 =>
            array (
                'code' => 141034,
                'level' => 3,
                'name' => '汾西县',
                'pcode' => 141000,
            ),
            377 =>
            array (
                'code' => 141081,
                'level' => 3,
                'name' => '侯马市',
                'pcode' => 141000,
            ),
            378 =>
            array (
                'code' => 141082,
                'level' => 3,
                'name' => '霍州市',
                'pcode' => 141000,
            ),
            379 =>
            array (
                'code' => 141100,
                'level' => 2,
                'name' => '吕梁市',
                'pcode' => 140000,
            ),
            380 =>
            array (
                'code' => 141101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 141100,
            ),
            381 =>
            array (
                'code' => 141102,
                'level' => 3,
                'name' => '离石区',
                'pcode' => 141100,
            ),
            382 =>
            array (
                'code' => 141121,
                'level' => 3,
                'name' => '文水县',
                'pcode' => 141100,
            ),
            383 =>
            array (
                'code' => 141122,
                'level' => 3,
                'name' => '交城县',
                'pcode' => 141100,
            ),
            384 =>
            array (
                'code' => 141123,
                'level' => 3,
                'name' => '兴县',
                'pcode' => 141100,
            ),
            385 =>
            array (
                'code' => 141124,
                'level' => 3,
                'name' => '临县',
                'pcode' => 141100,
            ),
            386 =>
            array (
                'code' => 141125,
                'level' => 3,
                'name' => '柳林县',
                'pcode' => 141100,
            ),
            387 =>
            array (
                'code' => 141126,
                'level' => 3,
                'name' => '石楼县',
                'pcode' => 141100,
            ),
            388 =>
            array (
                'code' => 141127,
                'level' => 3,
                'name' => '岚县',
                'pcode' => 141100,
            ),
            389 =>
            array (
                'code' => 141128,
                'level' => 3,
                'name' => '方山县',
                'pcode' => 141100,
            ),
            390 =>
            array (
                'code' => 141129,
                'level' => 3,
                'name' => '中阳县',
                'pcode' => 141100,
            ),
            391 =>
            array (
                'code' => 141130,
                'level' => 3,
                'name' => '交口县',
                'pcode' => 141100,
            ),
            392 =>
            array (
                'code' => 141181,
                'level' => 3,
                'name' => '孝义市',
                'pcode' => 141100,
            ),
            393 =>
            array (
                'code' => 141182,
                'level' => 3,
                'name' => '汾阳市',
                'pcode' => 141100,
            ),
            394 =>
            array (
                'code' => 150000,
                'level' => 1,
                'name' => '内蒙古自治区',
                'pcode' => 0,
            ),
            395 =>
            array (
                'code' => 150100,
                'level' => 2,
                'name' => '呼和浩特市',
                'pcode' => 150000,
            ),
            396 =>
            array (
                'code' => 150101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 150100,
            ),
            397 =>
            array (
                'code' => 150102,
                'level' => 3,
                'name' => '新城区',
                'pcode' => 150100,
            ),
            398 =>
            array (
                'code' => 150103,
                'level' => 3,
                'name' => '回民区',
                'pcode' => 150100,
            ),
            399 =>
            array (
                'code' => 150104,
                'level' => 3,
                'name' => '玉泉区',
                'pcode' => 150100,
            ),
            400 =>
            array (
                'code' => 150105,
                'level' => 3,
                'name' => '赛罕区',
                'pcode' => 150100,
            ),
            401 =>
            array (
                'code' => 150121,
                'level' => 3,
                'name' => '土默特左旗',
                'pcode' => 150100,
            ),
            402 =>
            array (
                'code' => 150122,
                'level' => 3,
                'name' => '托克托县',
                'pcode' => 150100,
            ),
            403 =>
            array (
                'code' => 150123,
                'level' => 3,
                'name' => '和林格尔县',
                'pcode' => 150100,
            ),
            404 =>
            array (
                'code' => 150124,
                'level' => 3,
                'name' => '清水河县',
                'pcode' => 150100,
            ),
            405 =>
            array (
                'code' => 150125,
                'level' => 3,
                'name' => '武川县',
                'pcode' => 150100,
            ),
            406 =>
            array (
                'code' => 150172,
                'level' => 3,
                'name' => '呼和浩特经济技术开发区',
                'pcode' => 150100,
            ),
            407 =>
            array (
                'code' => 150200,
                'level' => 2,
                'name' => '包头市',
                'pcode' => 150000,
            ),
            408 =>
            array (
                'code' => 150201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 150200,
            ),
            409 =>
            array (
                'code' => 150202,
                'level' => 3,
                'name' => '东河区',
                'pcode' => 150200,
            ),
            410 =>
            array (
                'code' => 150203,
                'level' => 3,
                'name' => '昆都仑区',
                'pcode' => 150200,
            ),
            411 =>
            array (
                'code' => 150204,
                'level' => 3,
                'name' => '青山区',
                'pcode' => 150200,
            ),
            412 =>
            array (
                'code' => 150205,
                'level' => 3,
                'name' => '石拐区',
                'pcode' => 150200,
            ),
            413 =>
            array (
                'code' => 150206,
                'level' => 3,
                'name' => '白云鄂博矿区',
                'pcode' => 150200,
            ),
            414 =>
            array (
                'code' => 150207,
                'level' => 3,
                'name' => '九原区',
                'pcode' => 150200,
            ),
            415 =>
            array (
                'code' => 150221,
                'level' => 3,
                'name' => '土默特右旗',
                'pcode' => 150200,
            ),
            416 =>
            array (
                'code' => 150222,
                'level' => 3,
                'name' => '固阳县',
                'pcode' => 150200,
            ),
            417 =>
            array (
                'code' => 150223,
                'level' => 3,
                'name' => '达尔罕茂明安联合旗',
                'pcode' => 150200,
            ),
            418 =>
            array (
                'code' => 150271,
                'level' => 3,
                'name' => '包头稀土高新技术产业开发区',
                'pcode' => 150200,
            ),
            419 =>
            array (
                'code' => 150300,
                'level' => 2,
                'name' => '乌海市',
                'pcode' => 150000,
            ),
            420 =>
            array (
                'code' => 150301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 150300,
            ),
            421 =>
            array (
                'code' => 150302,
                'level' => 3,
                'name' => '海勃湾区',
                'pcode' => 150300,
            ),
            422 =>
            array (
                'code' => 150303,
                'level' => 3,
                'name' => '海南区',
                'pcode' => 150300,
            ),
            423 =>
            array (
                'code' => 150304,
                'level' => 3,
                'name' => '乌达区',
                'pcode' => 150300,
            ),
            424 =>
            array (
                'code' => 150400,
                'level' => 2,
                'name' => '赤峰市',
                'pcode' => 150000,
            ),
            425 =>
            array (
                'code' => 150401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 150400,
            ),
            426 =>
            array (
                'code' => 150402,
                'level' => 3,
                'name' => '红山区',
                'pcode' => 150400,
            ),
            427 =>
            array (
                'code' => 150403,
                'level' => 3,
                'name' => '元宝山区',
                'pcode' => 150400,
            ),
            428 =>
            array (
                'code' => 150404,
                'level' => 3,
                'name' => '松山区',
                'pcode' => 150400,
            ),
            429 =>
            array (
                'code' => 150421,
                'level' => 3,
                'name' => '阿鲁科尔沁旗',
                'pcode' => 150400,
            ),
            430 =>
            array (
                'code' => 150422,
                'level' => 3,
                'name' => '巴林左旗',
                'pcode' => 150400,
            ),
            431 =>
            array (
                'code' => 150423,
                'level' => 3,
                'name' => '巴林右旗',
                'pcode' => 150400,
            ),
            432 =>
            array (
                'code' => 150424,
                'level' => 3,
                'name' => '林西县',
                'pcode' => 150400,
            ),
            433 =>
            array (
                'code' => 150425,
                'level' => 3,
                'name' => '克什克腾旗',
                'pcode' => 150400,
            ),
            434 =>
            array (
                'code' => 150426,
                'level' => 3,
                'name' => '翁牛特旗',
                'pcode' => 150400,
            ),
            435 =>
            array (
                'code' => 150428,
                'level' => 3,
                'name' => '喀喇沁旗',
                'pcode' => 150400,
            ),
            436 =>
            array (
                'code' => 150429,
                'level' => 3,
                'name' => '宁城县',
                'pcode' => 150400,
            ),
            437 =>
            array (
                'code' => 150430,
                'level' => 3,
                'name' => '敖汉旗',
                'pcode' => 150400,
            ),
            438 =>
            array (
                'code' => 150500,
                'level' => 2,
                'name' => '通辽市',
                'pcode' => 150000,
            ),
            439 =>
            array (
                'code' => 150501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 150500,
            ),
            440 =>
            array (
                'code' => 150502,
                'level' => 3,
                'name' => '科尔沁区',
                'pcode' => 150500,
            ),
            441 =>
            array (
                'code' => 150521,
                'level' => 3,
                'name' => '科尔沁左翼中旗',
                'pcode' => 150500,
            ),
            442 =>
            array (
                'code' => 150522,
                'level' => 3,
                'name' => '科尔沁左翼后旗',
                'pcode' => 150500,
            ),
            443 =>
            array (
                'code' => 150523,
                'level' => 3,
                'name' => '开鲁县',
                'pcode' => 150500,
            ),
            444 =>
            array (
                'code' => 150524,
                'level' => 3,
                'name' => '库伦旗',
                'pcode' => 150500,
            ),
            445 =>
            array (
                'code' => 150525,
                'level' => 3,
                'name' => '奈曼旗',
                'pcode' => 150500,
            ),
            446 =>
            array (
                'code' => 150526,
                'level' => 3,
                'name' => '扎鲁特旗',
                'pcode' => 150500,
            ),
            447 =>
            array (
                'code' => 150571,
                'level' => 3,
                'name' => '通辽经济技术开发区',
                'pcode' => 150500,
            ),
            448 =>
            array (
                'code' => 150581,
                'level' => 3,
                'name' => '霍林郭勒市',
                'pcode' => 150500,
            ),
            449 =>
            array (
                'code' => 150600,
                'level' => 2,
                'name' => '鄂尔多斯市',
                'pcode' => 150000,
            ),
            450 =>
            array (
                'code' => 150601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 150600,
            ),
            451 =>
            array (
                'code' => 150602,
                'level' => 3,
                'name' => '东胜区',
                'pcode' => 150600,
            ),
            452 =>
            array (
                'code' => 150603,
                'level' => 3,
                'name' => '康巴什区',
                'pcode' => 150600,
            ),
            453 =>
            array (
                'code' => 150621,
                'level' => 3,
                'name' => '达拉特旗',
                'pcode' => 150600,
            ),
            454 =>
            array (
                'code' => 150622,
                'level' => 3,
                'name' => '准格尔旗',
                'pcode' => 150600,
            ),
            455 =>
            array (
                'code' => 150623,
                'level' => 3,
                'name' => '鄂托克前旗',
                'pcode' => 150600,
            ),
            456 =>
            array (
                'code' => 150624,
                'level' => 3,
                'name' => '鄂托克旗',
                'pcode' => 150600,
            ),
            457 =>
            array (
                'code' => 150625,
                'level' => 3,
                'name' => '杭锦旗',
                'pcode' => 150600,
            ),
            458 =>
            array (
                'code' => 150626,
                'level' => 3,
                'name' => '乌审旗',
                'pcode' => 150600,
            ),
            459 =>
            array (
                'code' => 150627,
                'level' => 3,
                'name' => '伊金霍洛旗',
                'pcode' => 150600,
            ),
            460 =>
            array (
                'code' => 150700,
                'level' => 2,
                'name' => '呼伦贝尔市',
                'pcode' => 150000,
            ),
            461 =>
            array (
                'code' => 150701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 150700,
            ),
            462 =>
            array (
                'code' => 150702,
                'level' => 3,
                'name' => '海拉尔区',
                'pcode' => 150700,
            ),
            463 =>
            array (
                'code' => 150703,
                'level' => 3,
                'name' => '扎赉诺尔区',
                'pcode' => 150700,
            ),
            464 =>
            array (
                'code' => 150721,
                'level' => 3,
                'name' => '阿荣旗',
                'pcode' => 150700,
            ),
            465 =>
            array (
                'code' => 150722,
                'level' => 3,
                'name' => '莫力达瓦达斡尔族自治旗',
                'pcode' => 150700,
            ),
            466 =>
            array (
                'code' => 150723,
                'level' => 3,
                'name' => '鄂伦春自治旗',
                'pcode' => 150700,
            ),
            467 =>
            array (
                'code' => 150724,
                'level' => 3,
                'name' => '鄂温克族自治旗',
                'pcode' => 150700,
            ),
            468 =>
            array (
                'code' => 150725,
                'level' => 3,
                'name' => '陈巴尔虎旗',
                'pcode' => 150700,
            ),
            469 =>
            array (
                'code' => 150726,
                'level' => 3,
                'name' => '新巴尔虎左旗',
                'pcode' => 150700,
            ),
            470 =>
            array (
                'code' => 150727,
                'level' => 3,
                'name' => '新巴尔虎右旗',
                'pcode' => 150700,
            ),
            471 =>
            array (
                'code' => 150781,
                'level' => 3,
                'name' => '满洲里市',
                'pcode' => 150700,
            ),
            472 =>
            array (
                'code' => 150782,
                'level' => 3,
                'name' => '牙克石市',
                'pcode' => 150700,
            ),
            473 =>
            array (
                'code' => 150783,
                'level' => 3,
                'name' => '扎兰屯市',
                'pcode' => 150700,
            ),
            474 =>
            array (
                'code' => 150784,
                'level' => 3,
                'name' => '额尔古纳市',
                'pcode' => 150700,
            ),
            475 =>
            array (
                'code' => 150785,
                'level' => 3,
                'name' => '根河市',
                'pcode' => 150700,
            ),
            476 =>
            array (
                'code' => 150800,
                'level' => 2,
                'name' => '巴彦淖尔市',
                'pcode' => 150000,
            ),
            477 =>
            array (
                'code' => 150801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 150800,
            ),
            478 =>
            array (
                'code' => 150802,
                'level' => 3,
                'name' => '临河区',
                'pcode' => 150800,
            ),
            479 =>
            array (
                'code' => 150821,
                'level' => 3,
                'name' => '五原县',
                'pcode' => 150800,
            ),
            480 =>
            array (
                'code' => 150822,
                'level' => 3,
                'name' => '磴口县',
                'pcode' => 150800,
            ),
            481 =>
            array (
                'code' => 150823,
                'level' => 3,
                'name' => '乌拉特前旗',
                'pcode' => 150800,
            ),
            482 =>
            array (
                'code' => 150824,
                'level' => 3,
                'name' => '乌拉特中旗',
                'pcode' => 150800,
            ),
            483 =>
            array (
                'code' => 150825,
                'level' => 3,
                'name' => '乌拉特后旗',
                'pcode' => 150800,
            ),
            484 =>
            array (
                'code' => 150826,
                'level' => 3,
                'name' => '杭锦后旗',
                'pcode' => 150800,
            ),
            485 =>
            array (
                'code' => 150900,
                'level' => 2,
                'name' => '乌兰察布市',
                'pcode' => 150000,
            ),
            486 =>
            array (
                'code' => 150901,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 150900,
            ),
            487 =>
            array (
                'code' => 150902,
                'level' => 3,
                'name' => '集宁区',
                'pcode' => 150900,
            ),
            488 =>
            array (
                'code' => 150921,
                'level' => 3,
                'name' => '卓资县',
                'pcode' => 150900,
            ),
            489 =>
            array (
                'code' => 150922,
                'level' => 3,
                'name' => '化德县',
                'pcode' => 150900,
            ),
            490 =>
            array (
                'code' => 150923,
                'level' => 3,
                'name' => '商都县',
                'pcode' => 150900,
            ),
            491 =>
            array (
                'code' => 150924,
                'level' => 3,
                'name' => '兴和县',
                'pcode' => 150900,
            ),
            492 =>
            array (
                'code' => 150925,
                'level' => 3,
                'name' => '凉城县',
                'pcode' => 150900,
            ),
            493 =>
            array (
                'code' => 150926,
                'level' => 3,
                'name' => '察哈尔右翼前旗',
                'pcode' => 150900,
            ),
            494 =>
            array (
                'code' => 150927,
                'level' => 3,
                'name' => '察哈尔右翼中旗',
                'pcode' => 150900,
            ),
            495 =>
            array (
                'code' => 150928,
                'level' => 3,
                'name' => '察哈尔右翼后旗',
                'pcode' => 150900,
            ),
            496 =>
            array (
                'code' => 150929,
                'level' => 3,
                'name' => '四子王旗',
                'pcode' => 150900,
            ),
            497 =>
            array (
                'code' => 150981,
                'level' => 3,
                'name' => '丰镇市',
                'pcode' => 150900,
            ),
            498 =>
            array (
                'code' => 152200,
                'level' => 2,
                'name' => '兴安盟',
                'pcode' => 150000,
            ),
            499 =>
            array (
                'code' => 152201,
                'level' => 3,
                'name' => '乌兰浩特市',
                'pcode' => 152200,
            ),
        ));
        \DB::table('china_areas')->insert(array (
            0 =>
            array (
                'code' => 152202,
                'level' => 3,
                'name' => '阿尔山市',
                'pcode' => 152200,
            ),
            1 =>
            array (
                'code' => 152221,
                'level' => 3,
                'name' => '科尔沁右翼前旗',
                'pcode' => 152200,
            ),
            2 =>
            array (
                'code' => 152222,
                'level' => 3,
                'name' => '科尔沁右翼中旗',
                'pcode' => 152200,
            ),
            3 =>
            array (
                'code' => 152223,
                'level' => 3,
                'name' => '扎赉特旗',
                'pcode' => 152200,
            ),
            4 =>
            array (
                'code' => 152224,
                'level' => 3,
                'name' => '突泉县',
                'pcode' => 152200,
            ),
            5 =>
            array (
                'code' => 152500,
                'level' => 2,
                'name' => '锡林郭勒盟',
                'pcode' => 150000,
            ),
            6 =>
            array (
                'code' => 152501,
                'level' => 3,
                'name' => '二连浩特市',
                'pcode' => 152500,
            ),
            7 =>
            array (
                'code' => 152502,
                'level' => 3,
                'name' => '锡林浩特市',
                'pcode' => 152500,
            ),
            8 =>
            array (
                'code' => 152522,
                'level' => 3,
                'name' => '阿巴嘎旗',
                'pcode' => 152500,
            ),
            9 =>
            array (
                'code' => 152523,
                'level' => 3,
                'name' => '苏尼特左旗',
                'pcode' => 152500,
            ),
            10 =>
            array (
                'code' => 152524,
                'level' => 3,
                'name' => '苏尼特右旗',
                'pcode' => 152500,
            ),
            11 =>
            array (
                'code' => 152525,
                'level' => 3,
                'name' => '东乌珠穆沁旗',
                'pcode' => 152500,
            ),
            12 =>
            array (
                'code' => 152526,
                'level' => 3,
                'name' => '西乌珠穆沁旗',
                'pcode' => 152500,
            ),
            13 =>
            array (
                'code' => 152527,
                'level' => 3,
                'name' => '太仆寺旗',
                'pcode' => 152500,
            ),
            14 =>
            array (
                'code' => 152528,
                'level' => 3,
                'name' => '镶黄旗',
                'pcode' => 152500,
            ),
            15 =>
            array (
                'code' => 152529,
                'level' => 3,
                'name' => '正镶白旗',
                'pcode' => 152500,
            ),
            16 =>
            array (
                'code' => 152530,
                'level' => 3,
                'name' => '正蓝旗',
                'pcode' => 152500,
            ),
            17 =>
            array (
                'code' => 152531,
                'level' => 3,
                'name' => '多伦县',
                'pcode' => 152500,
            ),
            18 =>
            array (
                'code' => 152571,
                'level' => 3,
                'name' => '乌拉盖管委会',
                'pcode' => 152500,
            ),
            19 =>
            array (
                'code' => 152900,
                'level' => 2,
                'name' => '阿拉善盟',
                'pcode' => 150000,
            ),
            20 =>
            array (
                'code' => 152921,
                'level' => 3,
                'name' => '阿拉善左旗',
                'pcode' => 152900,
            ),
            21 =>
            array (
                'code' => 152922,
                'level' => 3,
                'name' => '阿拉善右旗',
                'pcode' => 152900,
            ),
            22 =>
            array (
                'code' => 152923,
                'level' => 3,
                'name' => '额济纳旗',
                'pcode' => 152900,
            ),
            23 =>
            array (
                'code' => 152971,
                'level' => 3,
                'name' => '内蒙古阿拉善经济开发区',
                'pcode' => 152900,
            ),
            24 =>
            array (
                'code' => 210000,
                'level' => 1,
                'name' => '辽宁省',
                'pcode' => 0,
            ),
            25 =>
            array (
                'code' => 210100,
                'level' => 2,
                'name' => '沈阳市',
                'pcode' => 210000,
            ),
            26 =>
            array (
                'code' => 210101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 210100,
            ),
            27 =>
            array (
                'code' => 210102,
                'level' => 3,
                'name' => '和平区',
                'pcode' => 210100,
            ),
            28 =>
            array (
                'code' => 210103,
                'level' => 3,
                'name' => '沈河区',
                'pcode' => 210100,
            ),
            29 =>
            array (
                'code' => 210104,
                'level' => 3,
                'name' => '大东区',
                'pcode' => 210100,
            ),
            30 =>
            array (
                'code' => 210105,
                'level' => 3,
                'name' => '皇姑区',
                'pcode' => 210100,
            ),
            31 =>
            array (
                'code' => 210106,
                'level' => 3,
                'name' => '铁西区',
                'pcode' => 210100,
            ),
            32 =>
            array (
                'code' => 210111,
                'level' => 3,
                'name' => '苏家屯区',
                'pcode' => 210100,
            ),
            33 =>
            array (
                'code' => 210112,
                'level' => 3,
                'name' => '浑南区',
                'pcode' => 210100,
            ),
            34 =>
            array (
                'code' => 210113,
                'level' => 3,
                'name' => '沈北新区',
                'pcode' => 210100,
            ),
            35 =>
            array (
                'code' => 210114,
                'level' => 3,
                'name' => '于洪区',
                'pcode' => 210100,
            ),
            36 =>
            array (
                'code' => 210115,
                'level' => 3,
                'name' => '辽中区',
                'pcode' => 210100,
            ),
            37 =>
            array (
                'code' => 210123,
                'level' => 3,
                'name' => '康平县',
                'pcode' => 210100,
            ),
            38 =>
            array (
                'code' => 210124,
                'level' => 3,
                'name' => '法库县',
                'pcode' => 210100,
            ),
            39 =>
            array (
                'code' => 210181,
                'level' => 3,
                'name' => '新民市',
                'pcode' => 210100,
            ),
            40 =>
            array (
                'code' => 210200,
                'level' => 2,
                'name' => '大连市',
                'pcode' => 210000,
            ),
            41 =>
            array (
                'code' => 210201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 210200,
            ),
            42 =>
            array (
                'code' => 210202,
                'level' => 3,
                'name' => '中山区',
                'pcode' => 210200,
            ),
            43 =>
            array (
                'code' => 210203,
                'level' => 3,
                'name' => '西岗区',
                'pcode' => 210200,
            ),
            44 =>
            array (
                'code' => 210204,
                'level' => 3,
                'name' => '沙河口区',
                'pcode' => 210200,
            ),
            45 =>
            array (
                'code' => 210211,
                'level' => 3,
                'name' => '甘井子区',
                'pcode' => 210200,
            ),
            46 =>
            array (
                'code' => 210212,
                'level' => 3,
                'name' => '旅顺口区',
                'pcode' => 210200,
            ),
            47 =>
            array (
                'code' => 210213,
                'level' => 3,
                'name' => '金州区',
                'pcode' => 210200,
            ),
            48 =>
            array (
                'code' => 210214,
                'level' => 3,
                'name' => '普兰店区',
                'pcode' => 210200,
            ),
            49 =>
            array (
                'code' => 210224,
                'level' => 3,
                'name' => '长海县',
                'pcode' => 210200,
            ),
            50 =>
            array (
                'code' => 210281,
                'level' => 3,
                'name' => '瓦房店市',
                'pcode' => 210200,
            ),
            51 =>
            array (
                'code' => 210283,
                'level' => 3,
                'name' => '庄河市',
                'pcode' => 210200,
            ),
            52 =>
            array (
                'code' => 210300,
                'level' => 2,
                'name' => '鞍山市',
                'pcode' => 210000,
            ),
            53 =>
            array (
                'code' => 210301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 210300,
            ),
            54 =>
            array (
                'code' => 210302,
                'level' => 3,
                'name' => '铁东区',
                'pcode' => 210300,
            ),
            55 =>
            array (
                'code' => 210303,
                'level' => 3,
                'name' => '铁西区',
                'pcode' => 210300,
            ),
            56 =>
            array (
                'code' => 210304,
                'level' => 3,
                'name' => '立山区',
                'pcode' => 210300,
            ),
            57 =>
            array (
                'code' => 210311,
                'level' => 3,
                'name' => '千山区',
                'pcode' => 210300,
            ),
            58 =>
            array (
                'code' => 210321,
                'level' => 3,
                'name' => '台安县',
                'pcode' => 210300,
            ),
            59 =>
            array (
                'code' => 210323,
                'level' => 3,
                'name' => '岫岩满族自治县',
                'pcode' => 210300,
            ),
            60 =>
            array (
                'code' => 210381,
                'level' => 3,
                'name' => '海城市',
                'pcode' => 210300,
            ),
            61 =>
            array (
                'code' => 210400,
                'level' => 2,
                'name' => '抚顺市',
                'pcode' => 210000,
            ),
            62 =>
            array (
                'code' => 210401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 210400,
            ),
            63 =>
            array (
                'code' => 210402,
                'level' => 3,
                'name' => '新抚区',
                'pcode' => 210400,
            ),
            64 =>
            array (
                'code' => 210403,
                'level' => 3,
                'name' => '东洲区',
                'pcode' => 210400,
            ),
            65 =>
            array (
                'code' => 210404,
                'level' => 3,
                'name' => '望花区',
                'pcode' => 210400,
            ),
            66 =>
            array (
                'code' => 210411,
                'level' => 3,
                'name' => '顺城区',
                'pcode' => 210400,
            ),
            67 =>
            array (
                'code' => 210421,
                'level' => 3,
                'name' => '抚顺县',
                'pcode' => 210400,
            ),
            68 =>
            array (
                'code' => 210422,
                'level' => 3,
                'name' => '新宾满族自治县',
                'pcode' => 210400,
            ),
            69 =>
            array (
                'code' => 210423,
                'level' => 3,
                'name' => '清原满族自治县',
                'pcode' => 210400,
            ),
            70 =>
            array (
                'code' => 210500,
                'level' => 2,
                'name' => '本溪市',
                'pcode' => 210000,
            ),
            71 =>
            array (
                'code' => 210501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 210500,
            ),
            72 =>
            array (
                'code' => 210502,
                'level' => 3,
                'name' => '平山区',
                'pcode' => 210500,
            ),
            73 =>
            array (
                'code' => 210503,
                'level' => 3,
                'name' => '溪湖区',
                'pcode' => 210500,
            ),
            74 =>
            array (
                'code' => 210504,
                'level' => 3,
                'name' => '明山区',
                'pcode' => 210500,
            ),
            75 =>
            array (
                'code' => 210505,
                'level' => 3,
                'name' => '南芬区',
                'pcode' => 210500,
            ),
            76 =>
            array (
                'code' => 210521,
                'level' => 3,
                'name' => '本溪满族自治县',
                'pcode' => 210500,
            ),
            77 =>
            array (
                'code' => 210522,
                'level' => 3,
                'name' => '桓仁满族自治县',
                'pcode' => 210500,
            ),
            78 =>
            array (
                'code' => 210600,
                'level' => 2,
                'name' => '丹东市',
                'pcode' => 210000,
            ),
            79 =>
            array (
                'code' => 210601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 210600,
            ),
            80 =>
            array (
                'code' => 210602,
                'level' => 3,
                'name' => '元宝区',
                'pcode' => 210600,
            ),
            81 =>
            array (
                'code' => 210603,
                'level' => 3,
                'name' => '振兴区',
                'pcode' => 210600,
            ),
            82 =>
            array (
                'code' => 210604,
                'level' => 3,
                'name' => '振安区',
                'pcode' => 210600,
            ),
            83 =>
            array (
                'code' => 210624,
                'level' => 3,
                'name' => '宽甸满族自治县',
                'pcode' => 210600,
            ),
            84 =>
            array (
                'code' => 210681,
                'level' => 3,
                'name' => '东港市',
                'pcode' => 210600,
            ),
            85 =>
            array (
                'code' => 210682,
                'level' => 3,
                'name' => '凤城市',
                'pcode' => 210600,
            ),
            86 =>
            array (
                'code' => 210700,
                'level' => 2,
                'name' => '锦州市',
                'pcode' => 210000,
            ),
            87 =>
            array (
                'code' => 210701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 210700,
            ),
            88 =>
            array (
                'code' => 210702,
                'level' => 3,
                'name' => '古塔区',
                'pcode' => 210700,
            ),
            89 =>
            array (
                'code' => 210703,
                'level' => 3,
                'name' => '凌河区',
                'pcode' => 210700,
            ),
            90 =>
            array (
                'code' => 210711,
                'level' => 3,
                'name' => '太和区',
                'pcode' => 210700,
            ),
            91 =>
            array (
                'code' => 210726,
                'level' => 3,
                'name' => '黑山县',
                'pcode' => 210700,
            ),
            92 =>
            array (
                'code' => 210727,
                'level' => 3,
                'name' => '义县',
                'pcode' => 210700,
            ),
            93 =>
            array (
                'code' => 210781,
                'level' => 3,
                'name' => '凌海市',
                'pcode' => 210700,
            ),
            94 =>
            array (
                'code' => 210782,
                'level' => 3,
                'name' => '北镇市',
                'pcode' => 210700,
            ),
            95 =>
            array (
                'code' => 210800,
                'level' => 2,
                'name' => '营口市',
                'pcode' => 210000,
            ),
            96 =>
            array (
                'code' => 210801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 210800,
            ),
            97 =>
            array (
                'code' => 210802,
                'level' => 3,
                'name' => '站前区',
                'pcode' => 210800,
            ),
            98 =>
            array (
                'code' => 210803,
                'level' => 3,
                'name' => '西市区',
                'pcode' => 210800,
            ),
            99 =>
            array (
                'code' => 210804,
                'level' => 3,
                'name' => '鲅鱼圈区',
                'pcode' => 210800,
            ),
            100 =>
            array (
                'code' => 210811,
                'level' => 3,
                'name' => '老边区',
                'pcode' => 210800,
            ),
            101 =>
            array (
                'code' => 210881,
                'level' => 3,
                'name' => '盖州市',
                'pcode' => 210800,
            ),
            102 =>
            array (
                'code' => 210882,
                'level' => 3,
                'name' => '大石桥市',
                'pcode' => 210800,
            ),
            103 =>
            array (
                'code' => 210900,
                'level' => 2,
                'name' => '阜新市',
                'pcode' => 210000,
            ),
            104 =>
            array (
                'code' => 210901,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 210900,
            ),
            105 =>
            array (
                'code' => 210902,
                'level' => 3,
                'name' => '海州区',
                'pcode' => 210900,
            ),
            106 =>
            array (
                'code' => 210903,
                'level' => 3,
                'name' => '新邱区',
                'pcode' => 210900,
            ),
            107 =>
            array (
                'code' => 210904,
                'level' => 3,
                'name' => '太平区',
                'pcode' => 210900,
            ),
            108 =>
            array (
                'code' => 210905,
                'level' => 3,
                'name' => '清河门区',
                'pcode' => 210900,
            ),
            109 =>
            array (
                'code' => 210911,
                'level' => 3,
                'name' => '细河区',
                'pcode' => 210900,
            ),
            110 =>
            array (
                'code' => 210921,
                'level' => 3,
                'name' => '阜新蒙古族自治县',
                'pcode' => 210900,
            ),
            111 =>
            array (
                'code' => 210922,
                'level' => 3,
                'name' => '彰武县',
                'pcode' => 210900,
            ),
            112 =>
            array (
                'code' => 211000,
                'level' => 2,
                'name' => '辽阳市',
                'pcode' => 210000,
            ),
            113 =>
            array (
                'code' => 211001,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 211000,
            ),
            114 =>
            array (
                'code' => 211002,
                'level' => 3,
                'name' => '白塔区',
                'pcode' => 211000,
            ),
            115 =>
            array (
                'code' => 211003,
                'level' => 3,
                'name' => '文圣区',
                'pcode' => 211000,
            ),
            116 =>
            array (
                'code' => 211004,
                'level' => 3,
                'name' => '宏伟区',
                'pcode' => 211000,
            ),
            117 =>
            array (
                'code' => 211005,
                'level' => 3,
                'name' => '弓长岭区',
                'pcode' => 211000,
            ),
            118 =>
            array (
                'code' => 211011,
                'level' => 3,
                'name' => '太子河区',
                'pcode' => 211000,
            ),
            119 =>
            array (
                'code' => 211021,
                'level' => 3,
                'name' => '辽阳县',
                'pcode' => 211000,
            ),
            120 =>
            array (
                'code' => 211081,
                'level' => 3,
                'name' => '灯塔市',
                'pcode' => 211000,
            ),
            121 =>
            array (
                'code' => 211100,
                'level' => 2,
                'name' => '盘锦市',
                'pcode' => 210000,
            ),
            122 =>
            array (
                'code' => 211101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 211100,
            ),
            123 =>
            array (
                'code' => 211102,
                'level' => 3,
                'name' => '双台子区',
                'pcode' => 211100,
            ),
            124 =>
            array (
                'code' => 211103,
                'level' => 3,
                'name' => '兴隆台区',
                'pcode' => 211100,
            ),
            125 =>
            array (
                'code' => 211104,
                'level' => 3,
                'name' => '大洼区',
                'pcode' => 211100,
            ),
            126 =>
            array (
                'code' => 211122,
                'level' => 3,
                'name' => '盘山县',
                'pcode' => 211100,
            ),
            127 =>
            array (
                'code' => 211200,
                'level' => 2,
                'name' => '铁岭市',
                'pcode' => 210000,
            ),
            128 =>
            array (
                'code' => 211201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 211200,
            ),
            129 =>
            array (
                'code' => 211202,
                'level' => 3,
                'name' => '银州区',
                'pcode' => 211200,
            ),
            130 =>
            array (
                'code' => 211204,
                'level' => 3,
                'name' => '清河区',
                'pcode' => 211200,
            ),
            131 =>
            array (
                'code' => 211221,
                'level' => 3,
                'name' => '铁岭县',
                'pcode' => 211200,
            ),
            132 =>
            array (
                'code' => 211223,
                'level' => 3,
                'name' => '西丰县',
                'pcode' => 211200,
            ),
            133 =>
            array (
                'code' => 211224,
                'level' => 3,
                'name' => '昌图县',
                'pcode' => 211200,
            ),
            134 =>
            array (
                'code' => 211281,
                'level' => 3,
                'name' => '调兵山市',
                'pcode' => 211200,
            ),
            135 =>
            array (
                'code' => 211282,
                'level' => 3,
                'name' => '开原市',
                'pcode' => 211200,
            ),
            136 =>
            array (
                'code' => 211300,
                'level' => 2,
                'name' => '朝阳市',
                'pcode' => 210000,
            ),
            137 =>
            array (
                'code' => 211301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 211300,
            ),
            138 =>
            array (
                'code' => 211302,
                'level' => 3,
                'name' => '双塔区',
                'pcode' => 211300,
            ),
            139 =>
            array (
                'code' => 211303,
                'level' => 3,
                'name' => '龙城区',
                'pcode' => 211300,
            ),
            140 =>
            array (
                'code' => 211321,
                'level' => 3,
                'name' => '朝阳县',
                'pcode' => 211300,
            ),
            141 =>
            array (
                'code' => 211322,
                'level' => 3,
                'name' => '建平县',
                'pcode' => 211300,
            ),
            142 =>
            array (
                'code' => 211324,
                'level' => 3,
                'name' => '喀喇沁左翼蒙古族自治县',
                'pcode' => 211300,
            ),
            143 =>
            array (
                'code' => 211381,
                'level' => 3,
                'name' => '北票市',
                'pcode' => 211300,
            ),
            144 =>
            array (
                'code' => 211382,
                'level' => 3,
                'name' => '凌源市',
                'pcode' => 211300,
            ),
            145 =>
            array (
                'code' => 211400,
                'level' => 2,
                'name' => '葫芦岛市',
                'pcode' => 210000,
            ),
            146 =>
            array (
                'code' => 211401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 211400,
            ),
            147 =>
            array (
                'code' => 211402,
                'level' => 3,
                'name' => '连山区',
                'pcode' => 211400,
            ),
            148 =>
            array (
                'code' => 211403,
                'level' => 3,
                'name' => '龙港区',
                'pcode' => 211400,
            ),
            149 =>
            array (
                'code' => 211404,
                'level' => 3,
                'name' => '南票区',
                'pcode' => 211400,
            ),
            150 =>
            array (
                'code' => 211421,
                'level' => 3,
                'name' => '绥中县',
                'pcode' => 211400,
            ),
            151 =>
            array (
                'code' => 211422,
                'level' => 3,
                'name' => '建昌县',
                'pcode' => 211400,
            ),
            152 =>
            array (
                'code' => 211481,
                'level' => 3,
                'name' => '兴城市',
                'pcode' => 211400,
            ),
            153 =>
            array (
                'code' => 220000,
                'level' => 1,
                'name' => '吉林省',
                'pcode' => 0,
            ),
            154 =>
            array (
                'code' => 220100,
                'level' => 2,
                'name' => '长春市',
                'pcode' => 220000,
            ),
            155 =>
            array (
                'code' => 220101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 220100,
            ),
            156 =>
            array (
                'code' => 220102,
                'level' => 3,
                'name' => '南关区',
                'pcode' => 220100,
            ),
            157 =>
            array (
                'code' => 220103,
                'level' => 3,
                'name' => '宽城区',
                'pcode' => 220100,
            ),
            158 =>
            array (
                'code' => 220104,
                'level' => 3,
                'name' => '朝阳区',
                'pcode' => 220100,
            ),
            159 =>
            array (
                'code' => 220105,
                'level' => 3,
                'name' => '二道区',
                'pcode' => 220100,
            ),
            160 =>
            array (
                'code' => 220106,
                'level' => 3,
                'name' => '绿园区',
                'pcode' => 220100,
            ),
            161 =>
            array (
                'code' => 220112,
                'level' => 3,
                'name' => '双阳区',
                'pcode' => 220100,
            ),
            162 =>
            array (
                'code' => 220113,
                'level' => 3,
                'name' => '九台区',
                'pcode' => 220100,
            ),
            163 =>
            array (
                'code' => 220122,
                'level' => 3,
                'name' => '农安县',
                'pcode' => 220100,
            ),
            164 =>
            array (
                'code' => 220171,
                'level' => 3,
                'name' => '长春经济技术开发区',
                'pcode' => 220100,
            ),
            165 =>
            array (
                'code' => 220172,
                'level' => 3,
                'name' => '长春净月高新技术产业开发区',
                'pcode' => 220100,
            ),
            166 =>
            array (
                'code' => 220173,
                'level' => 3,
                'name' => '长春高新技术产业开发区',
                'pcode' => 220100,
            ),
            167 =>
            array (
                'code' => 220174,
                'level' => 3,
                'name' => '长春汽车经济技术开发区',
                'pcode' => 220100,
            ),
            168 =>
            array (
                'code' => 220182,
                'level' => 3,
                'name' => '榆树市',
                'pcode' => 220100,
            ),
            169 =>
            array (
                'code' => 220183,
                'level' => 3,
                'name' => '德惠市',
                'pcode' => 220100,
            ),
            170 =>
            array (
                'code' => 220184,
                'level' => 3,
                'name' => '公主岭市',
                'pcode' => 220100,
            ),
            171 =>
            array (
                'code' => 220200,
                'level' => 2,
                'name' => '吉林市',
                'pcode' => 220000,
            ),
            172 =>
            array (
                'code' => 220201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 220200,
            ),
            173 =>
            array (
                'code' => 220202,
                'level' => 3,
                'name' => '昌邑区',
                'pcode' => 220200,
            ),
            174 =>
            array (
                'code' => 220203,
                'level' => 3,
                'name' => '龙潭区',
                'pcode' => 220200,
            ),
            175 =>
            array (
                'code' => 220204,
                'level' => 3,
                'name' => '船营区',
                'pcode' => 220200,
            ),
            176 =>
            array (
                'code' => 220211,
                'level' => 3,
                'name' => '丰满区',
                'pcode' => 220200,
            ),
            177 =>
            array (
                'code' => 220221,
                'level' => 3,
                'name' => '永吉县',
                'pcode' => 220200,
            ),
            178 =>
            array (
                'code' => 220271,
                'level' => 3,
                'name' => '吉林经济开发区',
                'pcode' => 220200,
            ),
            179 =>
            array (
                'code' => 220272,
                'level' => 3,
                'name' => '吉林高新技术产业开发区',
                'pcode' => 220200,
            ),
            180 =>
            array (
                'code' => 220273,
                'level' => 3,
                'name' => '吉林中国新加坡食品区',
                'pcode' => 220200,
            ),
            181 =>
            array (
                'code' => 220281,
                'level' => 3,
                'name' => '蛟河市',
                'pcode' => 220200,
            ),
            182 =>
            array (
                'code' => 220282,
                'level' => 3,
                'name' => '桦甸市',
                'pcode' => 220200,
            ),
            183 =>
            array (
                'code' => 220283,
                'level' => 3,
                'name' => '舒兰市',
                'pcode' => 220200,
            ),
            184 =>
            array (
                'code' => 220284,
                'level' => 3,
                'name' => '磐石市',
                'pcode' => 220200,
            ),
            185 =>
            array (
                'code' => 220300,
                'level' => 2,
                'name' => '四平市',
                'pcode' => 220000,
            ),
            186 =>
            array (
                'code' => 220301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 220300,
            ),
            187 =>
            array (
                'code' => 220302,
                'level' => 3,
                'name' => '铁西区',
                'pcode' => 220300,
            ),
            188 =>
            array (
                'code' => 220303,
                'level' => 3,
                'name' => '铁东区',
                'pcode' => 220300,
            ),
            189 =>
            array (
                'code' => 220322,
                'level' => 3,
                'name' => '梨树县',
                'pcode' => 220300,
            ),
            190 =>
            array (
                'code' => 220323,
                'level' => 3,
                'name' => '伊通满族自治县',
                'pcode' => 220300,
            ),
            191 =>
            array (
                'code' => 220382,
                'level' => 3,
                'name' => '双辽市',
                'pcode' => 220300,
            ),
            192 =>
            array (
                'code' => 220400,
                'level' => 2,
                'name' => '辽源市',
                'pcode' => 220000,
            ),
            193 =>
            array (
                'code' => 220401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 220400,
            ),
            194 =>
            array (
                'code' => 220402,
                'level' => 3,
                'name' => '龙山区',
                'pcode' => 220400,
            ),
            195 =>
            array (
                'code' => 220403,
                'level' => 3,
                'name' => '西安区',
                'pcode' => 220400,
            ),
            196 =>
            array (
                'code' => 220421,
                'level' => 3,
                'name' => '东丰县',
                'pcode' => 220400,
            ),
            197 =>
            array (
                'code' => 220422,
                'level' => 3,
                'name' => '东辽县',
                'pcode' => 220400,
            ),
            198 =>
            array (
                'code' => 220500,
                'level' => 2,
                'name' => '通化市',
                'pcode' => 220000,
            ),
            199 =>
            array (
                'code' => 220501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 220500,
            ),
            200 =>
            array (
                'code' => 220502,
                'level' => 3,
                'name' => '东昌区',
                'pcode' => 220500,
            ),
            201 =>
            array (
                'code' => 220503,
                'level' => 3,
                'name' => '二道江区',
                'pcode' => 220500,
            ),
            202 =>
            array (
                'code' => 220521,
                'level' => 3,
                'name' => '通化县',
                'pcode' => 220500,
            ),
            203 =>
            array (
                'code' => 220523,
                'level' => 3,
                'name' => '辉南县',
                'pcode' => 220500,
            ),
            204 =>
            array (
                'code' => 220524,
                'level' => 3,
                'name' => '柳河县',
                'pcode' => 220500,
            ),
            205 =>
            array (
                'code' => 220581,
                'level' => 3,
                'name' => '梅河口市',
                'pcode' => 220500,
            ),
            206 =>
            array (
                'code' => 220582,
                'level' => 3,
                'name' => '集安市',
                'pcode' => 220500,
            ),
            207 =>
            array (
                'code' => 220600,
                'level' => 2,
                'name' => '白山市',
                'pcode' => 220000,
            ),
            208 =>
            array (
                'code' => 220601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 220600,
            ),
            209 =>
            array (
                'code' => 220602,
                'level' => 3,
                'name' => '浑江区',
                'pcode' => 220600,
            ),
            210 =>
            array (
                'code' => 220605,
                'level' => 3,
                'name' => '江源区',
                'pcode' => 220600,
            ),
            211 =>
            array (
                'code' => 220621,
                'level' => 3,
                'name' => '抚松县',
                'pcode' => 220600,
            ),
            212 =>
            array (
                'code' => 220622,
                'level' => 3,
                'name' => '靖宇县',
                'pcode' => 220600,
            ),
            213 =>
            array (
                'code' => 220623,
                'level' => 3,
                'name' => '长白朝鲜族自治县',
                'pcode' => 220600,
            ),
            214 =>
            array (
                'code' => 220681,
                'level' => 3,
                'name' => '临江市',
                'pcode' => 220600,
            ),
            215 =>
            array (
                'code' => 220700,
                'level' => 2,
                'name' => '松原市',
                'pcode' => 220000,
            ),
            216 =>
            array (
                'code' => 220701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 220700,
            ),
            217 =>
            array (
                'code' => 220702,
                'level' => 3,
                'name' => '宁江区',
                'pcode' => 220700,
            ),
            218 =>
            array (
                'code' => 220721,
                'level' => 3,
                'name' => '前郭尔罗斯蒙古族自治县',
                'pcode' => 220700,
            ),
            219 =>
            array (
                'code' => 220722,
                'level' => 3,
                'name' => '长岭县',
                'pcode' => 220700,
            ),
            220 =>
            array (
                'code' => 220723,
                'level' => 3,
                'name' => '乾安县',
                'pcode' => 220700,
            ),
            221 =>
            array (
                'code' => 220771,
                'level' => 3,
                'name' => '吉林松原经济开发区',
                'pcode' => 220700,
            ),
            222 =>
            array (
                'code' => 220781,
                'level' => 3,
                'name' => '扶余市',
                'pcode' => 220700,
            ),
            223 =>
            array (
                'code' => 220800,
                'level' => 2,
                'name' => '白城市',
                'pcode' => 220000,
            ),
            224 =>
            array (
                'code' => 220801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 220800,
            ),
            225 =>
            array (
                'code' => 220802,
                'level' => 3,
                'name' => '洮北区',
                'pcode' => 220800,
            ),
            226 =>
            array (
                'code' => 220821,
                'level' => 3,
                'name' => '镇赉县',
                'pcode' => 220800,
            ),
            227 =>
            array (
                'code' => 220822,
                'level' => 3,
                'name' => '通榆县',
                'pcode' => 220800,
            ),
            228 =>
            array (
                'code' => 220871,
                'level' => 3,
                'name' => '吉林白城经济开发区',
                'pcode' => 220800,
            ),
            229 =>
            array (
                'code' => 220881,
                'level' => 3,
                'name' => '洮南市',
                'pcode' => 220800,
            ),
            230 =>
            array (
                'code' => 220882,
                'level' => 3,
                'name' => '大安市',
                'pcode' => 220800,
            ),
            231 =>
            array (
                'code' => 222400,
                'level' => 2,
                'name' => '延边朝鲜族自治州',
                'pcode' => 220000,
            ),
            232 =>
            array (
                'code' => 222401,
                'level' => 3,
                'name' => '延吉市',
                'pcode' => 222400,
            ),
            233 =>
            array (
                'code' => 222402,
                'level' => 3,
                'name' => '图们市',
                'pcode' => 222400,
            ),
            234 =>
            array (
                'code' => 222403,
                'level' => 3,
                'name' => '敦化市',
                'pcode' => 222400,
            ),
            235 =>
            array (
                'code' => 222404,
                'level' => 3,
                'name' => '珲春市',
                'pcode' => 222400,
            ),
            236 =>
            array (
                'code' => 222405,
                'level' => 3,
                'name' => '龙井市',
                'pcode' => 222400,
            ),
            237 =>
            array (
                'code' => 222406,
                'level' => 3,
                'name' => '和龙市',
                'pcode' => 222400,
            ),
            238 =>
            array (
                'code' => 222424,
                'level' => 3,
                'name' => '汪清县',
                'pcode' => 222400,
            ),
            239 =>
            array (
                'code' => 222426,
                'level' => 3,
                'name' => '安图县',
                'pcode' => 222400,
            ),
            240 =>
            array (
                'code' => 230000,
                'level' => 1,
                'name' => '黑龙江省',
                'pcode' => 0,
            ),
            241 =>
            array (
                'code' => 230100,
                'level' => 2,
                'name' => '哈尔滨市',
                'pcode' => 230000,
            ),
            242 =>
            array (
                'code' => 230101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 230100,
            ),
            243 =>
            array (
                'code' => 230102,
                'level' => 3,
                'name' => '道里区',
                'pcode' => 230100,
            ),
            244 =>
            array (
                'code' => 230103,
                'level' => 3,
                'name' => '南岗区',
                'pcode' => 230100,
            ),
            245 =>
            array (
                'code' => 230104,
                'level' => 3,
                'name' => '道外区',
                'pcode' => 230100,
            ),
            246 =>
            array (
                'code' => 230108,
                'level' => 3,
                'name' => '平房区',
                'pcode' => 230100,
            ),
            247 =>
            array (
                'code' => 230109,
                'level' => 3,
                'name' => '松北区',
                'pcode' => 230100,
            ),
            248 =>
            array (
                'code' => 230110,
                'level' => 3,
                'name' => '香坊区',
                'pcode' => 230100,
            ),
            249 =>
            array (
                'code' => 230111,
                'level' => 3,
                'name' => '呼兰区',
                'pcode' => 230100,
            ),
            250 =>
            array (
                'code' => 230112,
                'level' => 3,
                'name' => '阿城区',
                'pcode' => 230100,
            ),
            251 =>
            array (
                'code' => 230113,
                'level' => 3,
                'name' => '双城区',
                'pcode' => 230100,
            ),
            252 =>
            array (
                'code' => 230123,
                'level' => 3,
                'name' => '依兰县',
                'pcode' => 230100,
            ),
            253 =>
            array (
                'code' => 230124,
                'level' => 3,
                'name' => '方正县',
                'pcode' => 230100,
            ),
            254 =>
            array (
                'code' => 230125,
                'level' => 3,
                'name' => '宾县',
                'pcode' => 230100,
            ),
            255 =>
            array (
                'code' => 230126,
                'level' => 3,
                'name' => '巴彦县',
                'pcode' => 230100,
            ),
            256 =>
            array (
                'code' => 230127,
                'level' => 3,
                'name' => '木兰县',
                'pcode' => 230100,
            ),
            257 =>
            array (
                'code' => 230128,
                'level' => 3,
                'name' => '通河县',
                'pcode' => 230100,
            ),
            258 =>
            array (
                'code' => 230129,
                'level' => 3,
                'name' => '延寿县',
                'pcode' => 230100,
            ),
            259 =>
            array (
                'code' => 230183,
                'level' => 3,
                'name' => '尚志市',
                'pcode' => 230100,
            ),
            260 =>
            array (
                'code' => 230184,
                'level' => 3,
                'name' => '五常市',
                'pcode' => 230100,
            ),
            261 =>
            array (
                'code' => 230200,
                'level' => 2,
                'name' => '齐齐哈尔市',
                'pcode' => 230000,
            ),
            262 =>
            array (
                'code' => 230201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 230200,
            ),
            263 =>
            array (
                'code' => 230202,
                'level' => 3,
                'name' => '龙沙区',
                'pcode' => 230200,
            ),
            264 =>
            array (
                'code' => 230203,
                'level' => 3,
                'name' => '建华区',
                'pcode' => 230200,
            ),
            265 =>
            array (
                'code' => 230204,
                'level' => 3,
                'name' => '铁锋区',
                'pcode' => 230200,
            ),
            266 =>
            array (
                'code' => 230205,
                'level' => 3,
                'name' => '昂昂溪区',
                'pcode' => 230200,
            ),
            267 =>
            array (
                'code' => 230206,
                'level' => 3,
                'name' => '富拉尔基区',
                'pcode' => 230200,
            ),
            268 =>
            array (
                'code' => 230207,
                'level' => 3,
                'name' => '碾子山区',
                'pcode' => 230200,
            ),
            269 =>
            array (
                'code' => 230208,
                'level' => 3,
                'name' => '梅里斯达斡尔族区',
                'pcode' => 230200,
            ),
            270 =>
            array (
                'code' => 230221,
                'level' => 3,
                'name' => '龙江县',
                'pcode' => 230200,
            ),
            271 =>
            array (
                'code' => 230223,
                'level' => 3,
                'name' => '依安县',
                'pcode' => 230200,
            ),
            272 =>
            array (
                'code' => 230224,
                'level' => 3,
                'name' => '泰来县',
                'pcode' => 230200,
            ),
            273 =>
            array (
                'code' => 230225,
                'level' => 3,
                'name' => '甘南县',
                'pcode' => 230200,
            ),
            274 =>
            array (
                'code' => 230227,
                'level' => 3,
                'name' => '富裕县',
                'pcode' => 230200,
            ),
            275 =>
            array (
                'code' => 230229,
                'level' => 3,
                'name' => '克山县',
                'pcode' => 230200,
            ),
            276 =>
            array (
                'code' => 230230,
                'level' => 3,
                'name' => '克东县',
                'pcode' => 230200,
            ),
            277 =>
            array (
                'code' => 230231,
                'level' => 3,
                'name' => '拜泉县',
                'pcode' => 230200,
            ),
            278 =>
            array (
                'code' => 230281,
                'level' => 3,
                'name' => '讷河市',
                'pcode' => 230200,
            ),
            279 =>
            array (
                'code' => 230300,
                'level' => 2,
                'name' => '鸡西市',
                'pcode' => 230000,
            ),
            280 =>
            array (
                'code' => 230301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 230300,
            ),
            281 =>
            array (
                'code' => 230302,
                'level' => 3,
                'name' => '鸡冠区',
                'pcode' => 230300,
            ),
            282 =>
            array (
                'code' => 230303,
                'level' => 3,
                'name' => '恒山区',
                'pcode' => 230300,
            ),
            283 =>
            array (
                'code' => 230304,
                'level' => 3,
                'name' => '滴道区',
                'pcode' => 230300,
            ),
            284 =>
            array (
                'code' => 230305,
                'level' => 3,
                'name' => '梨树区',
                'pcode' => 230300,
            ),
            285 =>
            array (
                'code' => 230306,
                'level' => 3,
                'name' => '城子河区',
                'pcode' => 230300,
            ),
            286 =>
            array (
                'code' => 230307,
                'level' => 3,
                'name' => '麻山区',
                'pcode' => 230300,
            ),
            287 =>
            array (
                'code' => 230321,
                'level' => 3,
                'name' => '鸡东县',
                'pcode' => 230300,
            ),
            288 =>
            array (
                'code' => 230381,
                'level' => 3,
                'name' => '虎林市',
                'pcode' => 230300,
            ),
            289 =>
            array (
                'code' => 230382,
                'level' => 3,
                'name' => '密山市',
                'pcode' => 230300,
            ),
            290 =>
            array (
                'code' => 230400,
                'level' => 2,
                'name' => '鹤岗市',
                'pcode' => 230000,
            ),
            291 =>
            array (
                'code' => 230401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 230400,
            ),
            292 =>
            array (
                'code' => 230402,
                'level' => 3,
                'name' => '向阳区',
                'pcode' => 230400,
            ),
            293 =>
            array (
                'code' => 230403,
                'level' => 3,
                'name' => '工农区',
                'pcode' => 230400,
            ),
            294 =>
            array (
                'code' => 230404,
                'level' => 3,
                'name' => '南山区',
                'pcode' => 230400,
            ),
            295 =>
            array (
                'code' => 230405,
                'level' => 3,
                'name' => '兴安区',
                'pcode' => 230400,
            ),
            296 =>
            array (
                'code' => 230406,
                'level' => 3,
                'name' => '东山区',
                'pcode' => 230400,
            ),
            297 =>
            array (
                'code' => 230407,
                'level' => 3,
                'name' => '兴山区',
                'pcode' => 230400,
            ),
            298 =>
            array (
                'code' => 230421,
                'level' => 3,
                'name' => '萝北县',
                'pcode' => 230400,
            ),
            299 =>
            array (
                'code' => 230422,
                'level' => 3,
                'name' => '绥滨县',
                'pcode' => 230400,
            ),
            300 =>
            array (
                'code' => 230500,
                'level' => 2,
                'name' => '双鸭山市',
                'pcode' => 230000,
            ),
            301 =>
            array (
                'code' => 230501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 230500,
            ),
            302 =>
            array (
                'code' => 230502,
                'level' => 3,
                'name' => '尖山区',
                'pcode' => 230500,
            ),
            303 =>
            array (
                'code' => 230503,
                'level' => 3,
                'name' => '岭东区',
                'pcode' => 230500,
            ),
            304 =>
            array (
                'code' => 230505,
                'level' => 3,
                'name' => '四方台区',
                'pcode' => 230500,
            ),
            305 =>
            array (
                'code' => 230506,
                'level' => 3,
                'name' => '宝山区',
                'pcode' => 230500,
            ),
            306 =>
            array (
                'code' => 230521,
                'level' => 3,
                'name' => '集贤县',
                'pcode' => 230500,
            ),
            307 =>
            array (
                'code' => 230522,
                'level' => 3,
                'name' => '友谊县',
                'pcode' => 230500,
            ),
            308 =>
            array (
                'code' => 230523,
                'level' => 3,
                'name' => '宝清县',
                'pcode' => 230500,
            ),
            309 =>
            array (
                'code' => 230524,
                'level' => 3,
                'name' => '饶河县',
                'pcode' => 230500,
            ),
            310 =>
            array (
                'code' => 230600,
                'level' => 2,
                'name' => '大庆市',
                'pcode' => 230000,
            ),
            311 =>
            array (
                'code' => 230601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 230600,
            ),
            312 =>
            array (
                'code' => 230602,
                'level' => 3,
                'name' => '萨尔图区',
                'pcode' => 230600,
            ),
            313 =>
            array (
                'code' => 230603,
                'level' => 3,
                'name' => '龙凤区',
                'pcode' => 230600,
            ),
            314 =>
            array (
                'code' => 230604,
                'level' => 3,
                'name' => '让胡路区',
                'pcode' => 230600,
            ),
            315 =>
            array (
                'code' => 230605,
                'level' => 3,
                'name' => '红岗区',
                'pcode' => 230600,
            ),
            316 =>
            array (
                'code' => 230606,
                'level' => 3,
                'name' => '大同区',
                'pcode' => 230600,
            ),
            317 =>
            array (
                'code' => 230621,
                'level' => 3,
                'name' => '肇州县',
                'pcode' => 230600,
            ),
            318 =>
            array (
                'code' => 230622,
                'level' => 3,
                'name' => '肇源县',
                'pcode' => 230600,
            ),
            319 =>
            array (
                'code' => 230623,
                'level' => 3,
                'name' => '林甸县',
                'pcode' => 230600,
            ),
            320 =>
            array (
                'code' => 230624,
                'level' => 3,
                'name' => '杜尔伯特蒙古族自治县',
                'pcode' => 230600,
            ),
            321 =>
            array (
                'code' => 230671,
                'level' => 3,
                'name' => '大庆高新技术产业开发区',
                'pcode' => 230600,
            ),
            322 =>
            array (
                'code' => 230700,
                'level' => 2,
                'name' => '伊春市',
                'pcode' => 230000,
            ),
            323 =>
            array (
                'code' => 230701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 230700,
            ),
            324 =>
            array (
                'code' => 230717,
                'level' => 3,
                'name' => '伊美区',
                'pcode' => 230700,
            ),
            325 =>
            array (
                'code' => 230718,
                'level' => 3,
                'name' => '乌翠区',
                'pcode' => 230700,
            ),
            326 =>
            array (
                'code' => 230719,
                'level' => 3,
                'name' => '友好区',
                'pcode' => 230700,
            ),
            327 =>
            array (
                'code' => 230722,
                'level' => 3,
                'name' => '嘉荫县',
                'pcode' => 230700,
            ),
            328 =>
            array (
                'code' => 230723,
                'level' => 3,
                'name' => '汤旺县',
                'pcode' => 230700,
            ),
            329 =>
            array (
                'code' => 230724,
                'level' => 3,
                'name' => '丰林县',
                'pcode' => 230700,
            ),
            330 =>
            array (
                'code' => 230725,
                'level' => 3,
                'name' => '大箐山县',
                'pcode' => 230700,
            ),
            331 =>
            array (
                'code' => 230726,
                'level' => 3,
                'name' => '南岔县',
                'pcode' => 230700,
            ),
            332 =>
            array (
                'code' => 230751,
                'level' => 3,
                'name' => '金林区',
                'pcode' => 230700,
            ),
            333 =>
            array (
                'code' => 230781,
                'level' => 3,
                'name' => '铁力市',
                'pcode' => 230700,
            ),
            334 =>
            array (
                'code' => 230800,
                'level' => 2,
                'name' => '佳木斯市',
                'pcode' => 230000,
            ),
            335 =>
            array (
                'code' => 230801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 230800,
            ),
            336 =>
            array (
                'code' => 230803,
                'level' => 3,
                'name' => '向阳区',
                'pcode' => 230800,
            ),
            337 =>
            array (
                'code' => 230804,
                'level' => 3,
                'name' => '前进区',
                'pcode' => 230800,
            ),
            338 =>
            array (
                'code' => 230805,
                'level' => 3,
                'name' => '东风区',
                'pcode' => 230800,
            ),
            339 =>
            array (
                'code' => 230811,
                'level' => 3,
                'name' => '郊区',
                'pcode' => 230800,
            ),
            340 =>
            array (
                'code' => 230822,
                'level' => 3,
                'name' => '桦南县',
                'pcode' => 230800,
            ),
            341 =>
            array (
                'code' => 230826,
                'level' => 3,
                'name' => '桦川县',
                'pcode' => 230800,
            ),
            342 =>
            array (
                'code' => 230828,
                'level' => 3,
                'name' => '汤原县',
                'pcode' => 230800,
            ),
            343 =>
            array (
                'code' => 230881,
                'level' => 3,
                'name' => '同江市',
                'pcode' => 230800,
            ),
            344 =>
            array (
                'code' => 230882,
                'level' => 3,
                'name' => '富锦市',
                'pcode' => 230800,
            ),
            345 =>
            array (
                'code' => 230883,
                'level' => 3,
                'name' => '抚远市',
                'pcode' => 230800,
            ),
            346 =>
            array (
                'code' => 230900,
                'level' => 2,
                'name' => '七台河市',
                'pcode' => 230000,
            ),
            347 =>
            array (
                'code' => 230901,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 230900,
            ),
            348 =>
            array (
                'code' => 230902,
                'level' => 3,
                'name' => '新兴区',
                'pcode' => 230900,
            ),
            349 =>
            array (
                'code' => 230903,
                'level' => 3,
                'name' => '桃山区',
                'pcode' => 230900,
            ),
            350 =>
            array (
                'code' => 230904,
                'level' => 3,
                'name' => '茄子河区',
                'pcode' => 230900,
            ),
            351 =>
            array (
                'code' => 230921,
                'level' => 3,
                'name' => '勃利县',
                'pcode' => 230900,
            ),
            352 =>
            array (
                'code' => 231000,
                'level' => 2,
                'name' => '牡丹江市',
                'pcode' => 230000,
            ),
            353 =>
            array (
                'code' => 231001,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 231000,
            ),
            354 =>
            array (
                'code' => 231002,
                'level' => 3,
                'name' => '东安区',
                'pcode' => 231000,
            ),
            355 =>
            array (
                'code' => 231003,
                'level' => 3,
                'name' => '阳明区',
                'pcode' => 231000,
            ),
            356 =>
            array (
                'code' => 231004,
                'level' => 3,
                'name' => '爱民区',
                'pcode' => 231000,
            ),
            357 =>
            array (
                'code' => 231005,
                'level' => 3,
                'name' => '西安区',
                'pcode' => 231000,
            ),
            358 =>
            array (
                'code' => 231025,
                'level' => 3,
                'name' => '林口县',
                'pcode' => 231000,
            ),
            359 =>
            array (
                'code' => 231071,
                'level' => 3,
                'name' => '牡丹江经济技术开发区',
                'pcode' => 231000,
            ),
            360 =>
            array (
                'code' => 231081,
                'level' => 3,
                'name' => '绥芬河市',
                'pcode' => 231000,
            ),
            361 =>
            array (
                'code' => 231083,
                'level' => 3,
                'name' => '海林市',
                'pcode' => 231000,
            ),
            362 =>
            array (
                'code' => 231084,
                'level' => 3,
                'name' => '宁安市',
                'pcode' => 231000,
            ),
            363 =>
            array (
                'code' => 231085,
                'level' => 3,
                'name' => '穆棱市',
                'pcode' => 231000,
            ),
            364 =>
            array (
                'code' => 231086,
                'level' => 3,
                'name' => '东宁市',
                'pcode' => 231000,
            ),
            365 =>
            array (
                'code' => 231100,
                'level' => 2,
                'name' => '黑河市',
                'pcode' => 230000,
            ),
            366 =>
            array (
                'code' => 231101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 231100,
            ),
            367 =>
            array (
                'code' => 231102,
                'level' => 3,
                'name' => '爱辉区',
                'pcode' => 231100,
            ),
            368 =>
            array (
                'code' => 231123,
                'level' => 3,
                'name' => '逊克县',
                'pcode' => 231100,
            ),
            369 =>
            array (
                'code' => 231124,
                'level' => 3,
                'name' => '孙吴县',
                'pcode' => 231100,
            ),
            370 =>
            array (
                'code' => 231181,
                'level' => 3,
                'name' => '北安市',
                'pcode' => 231100,
            ),
            371 =>
            array (
                'code' => 231182,
                'level' => 3,
                'name' => '五大连池市',
                'pcode' => 231100,
            ),
            372 =>
            array (
                'code' => 231183,
                'level' => 3,
                'name' => '嫩江市',
                'pcode' => 231100,
            ),
            373 =>
            array (
                'code' => 231200,
                'level' => 2,
                'name' => '绥化市',
                'pcode' => 230000,
            ),
            374 =>
            array (
                'code' => 231201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 231200,
            ),
            375 =>
            array (
                'code' => 231202,
                'level' => 3,
                'name' => '北林区',
                'pcode' => 231200,
            ),
            376 =>
            array (
                'code' => 231221,
                'level' => 3,
                'name' => '望奎县',
                'pcode' => 231200,
            ),
            377 =>
            array (
                'code' => 231222,
                'level' => 3,
                'name' => '兰西县',
                'pcode' => 231200,
            ),
            378 =>
            array (
                'code' => 231223,
                'level' => 3,
                'name' => '青冈县',
                'pcode' => 231200,
            ),
            379 =>
            array (
                'code' => 231224,
                'level' => 3,
                'name' => '庆安县',
                'pcode' => 231200,
            ),
            380 =>
            array (
                'code' => 231225,
                'level' => 3,
                'name' => '明水县',
                'pcode' => 231200,
            ),
            381 =>
            array (
                'code' => 231226,
                'level' => 3,
                'name' => '绥棱县',
                'pcode' => 231200,
            ),
            382 =>
            array (
                'code' => 231281,
                'level' => 3,
                'name' => '安达市',
                'pcode' => 231200,
            ),
            383 =>
            array (
                'code' => 231282,
                'level' => 3,
                'name' => '肇东市',
                'pcode' => 231200,
            ),
            384 =>
            array (
                'code' => 231283,
                'level' => 3,
                'name' => '海伦市',
                'pcode' => 231200,
            ),
            385 =>
            array (
                'code' => 232700,
                'level' => 2,
                'name' => '大兴安岭地区',
                'pcode' => 230000,
            ),
            386 =>
            array (
                'code' => 232701,
                'level' => 3,
                'name' => '漠河市',
                'pcode' => 232700,
            ),
            387 =>
            array (
                'code' => 232721,
                'level' => 3,
                'name' => '呼玛县',
                'pcode' => 232700,
            ),
            388 =>
            array (
                'code' => 232722,
                'level' => 3,
                'name' => '塔河县',
                'pcode' => 232700,
            ),
            389 =>
            array (
                'code' => 232761,
                'level' => 3,
                'name' => '加格达奇区',
                'pcode' => 232700,
            ),
            390 =>
            array (
                'code' => 232762,
                'level' => 3,
                'name' => '松岭区',
                'pcode' => 232700,
            ),
            391 =>
            array (
                'code' => 232763,
                'level' => 3,
                'name' => '新林区',
                'pcode' => 232700,
            ),
            392 =>
            array (
                'code' => 232764,
                'level' => 3,
                'name' => '呼中区',
                'pcode' => 232700,
            ),
            393 =>
            array (
                'code' => 310000,
                'level' => 1,
                'name' => '上海市',
                'pcode' => 0,
            ),
            394 =>
            array (
                'code' => 310100,
                'level' => 2,
                'name' => '市辖区',
                'pcode' => 310000,
            ),
            395 =>
            array (
                'code' => 310101,
                'level' => 3,
                'name' => '黄浦区',
                'pcode' => 310100,
            ),
            396 =>
            array (
                'code' => 310104,
                'level' => 3,
                'name' => '徐汇区',
                'pcode' => 310100,
            ),
            397 =>
            array (
                'code' => 310105,
                'level' => 3,
                'name' => '长宁区',
                'pcode' => 310100,
            ),
            398 =>
            array (
                'code' => 310106,
                'level' => 3,
                'name' => '静安区',
                'pcode' => 310100,
            ),
            399 =>
            array (
                'code' => 310107,
                'level' => 3,
                'name' => '普陀区',
                'pcode' => 310100,
            ),
            400 =>
            array (
                'code' => 310109,
                'level' => 3,
                'name' => '虹口区',
                'pcode' => 310100,
            ),
            401 =>
            array (
                'code' => 310110,
                'level' => 3,
                'name' => '杨浦区',
                'pcode' => 310100,
            ),
            402 =>
            array (
                'code' => 310112,
                'level' => 3,
                'name' => '闵行区',
                'pcode' => 310100,
            ),
            403 =>
            array (
                'code' => 310113,
                'level' => 3,
                'name' => '宝山区',
                'pcode' => 310100,
            ),
            404 =>
            array (
                'code' => 310114,
                'level' => 3,
                'name' => '嘉定区',
                'pcode' => 310100,
            ),
            405 =>
            array (
                'code' => 310115,
                'level' => 3,
                'name' => '浦东新区',
                'pcode' => 310100,
            ),
            406 =>
            array (
                'code' => 310116,
                'level' => 3,
                'name' => '金山区',
                'pcode' => 310100,
            ),
            407 =>
            array (
                'code' => 310117,
                'level' => 3,
                'name' => '松江区',
                'pcode' => 310100,
            ),
            408 =>
            array (
                'code' => 310118,
                'level' => 3,
                'name' => '青浦区',
                'pcode' => 310100,
            ),
            409 =>
            array (
                'code' => 310120,
                'level' => 3,
                'name' => '奉贤区',
                'pcode' => 310100,
            ),
            410 =>
            array (
                'code' => 310151,
                'level' => 3,
                'name' => '崇明区',
                'pcode' => 310100,
            ),
            411 =>
            array (
                'code' => 320000,
                'level' => 1,
                'name' => '江苏省',
                'pcode' => 0,
            ),
            412 =>
            array (
                'code' => 320100,
                'level' => 2,
                'name' => '南京市',
                'pcode' => 320000,
            ),
            413 =>
            array (
                'code' => 320101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 320100,
            ),
            414 =>
            array (
                'code' => 320102,
                'level' => 3,
                'name' => '玄武区',
                'pcode' => 320100,
            ),
            415 =>
            array (
                'code' => 320104,
                'level' => 3,
                'name' => '秦淮区',
                'pcode' => 320100,
            ),
            416 =>
            array (
                'code' => 320105,
                'level' => 3,
                'name' => '建邺区',
                'pcode' => 320100,
            ),
            417 =>
            array (
                'code' => 320106,
                'level' => 3,
                'name' => '鼓楼区',
                'pcode' => 320100,
            ),
            418 =>
            array (
                'code' => 320111,
                'level' => 3,
                'name' => '浦口区',
                'pcode' => 320100,
            ),
            419 =>
            array (
                'code' => 320113,
                'level' => 3,
                'name' => '栖霞区',
                'pcode' => 320100,
            ),
            420 =>
            array (
                'code' => 320114,
                'level' => 3,
                'name' => '雨花台区',
                'pcode' => 320100,
            ),
            421 =>
            array (
                'code' => 320115,
                'level' => 3,
                'name' => '江宁区',
                'pcode' => 320100,
            ),
            422 =>
            array (
                'code' => 320116,
                'level' => 3,
                'name' => '六合区',
                'pcode' => 320100,
            ),
            423 =>
            array (
                'code' => 320117,
                'level' => 3,
                'name' => '溧水区',
                'pcode' => 320100,
            ),
            424 =>
            array (
                'code' => 320118,
                'level' => 3,
                'name' => '高淳区',
                'pcode' => 320100,
            ),
            425 =>
            array (
                'code' => 320200,
                'level' => 2,
                'name' => '无锡市',
                'pcode' => 320000,
            ),
            426 =>
            array (
                'code' => 320201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 320200,
            ),
            427 =>
            array (
                'code' => 320205,
                'level' => 3,
                'name' => '锡山区',
                'pcode' => 320200,
            ),
            428 =>
            array (
                'code' => 320206,
                'level' => 3,
                'name' => '惠山区',
                'pcode' => 320200,
            ),
            429 =>
            array (
                'code' => 320211,
                'level' => 3,
                'name' => '滨湖区',
                'pcode' => 320200,
            ),
            430 =>
            array (
                'code' => 320213,
                'level' => 3,
                'name' => '梁溪区',
                'pcode' => 320200,
            ),
            431 =>
            array (
                'code' => 320214,
                'level' => 3,
                'name' => '新吴区',
                'pcode' => 320200,
            ),
            432 =>
            array (
                'code' => 320281,
                'level' => 3,
                'name' => '江阴市',
                'pcode' => 320200,
            ),
            433 =>
            array (
                'code' => 320282,
                'level' => 3,
                'name' => '宜兴市',
                'pcode' => 320200,
            ),
            434 =>
            array (
                'code' => 320300,
                'level' => 2,
                'name' => '徐州市',
                'pcode' => 320000,
            ),
            435 =>
            array (
                'code' => 320301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 320300,
            ),
            436 =>
            array (
                'code' => 320302,
                'level' => 3,
                'name' => '鼓楼区',
                'pcode' => 320300,
            ),
            437 =>
            array (
                'code' => 320303,
                'level' => 3,
                'name' => '云龙区',
                'pcode' => 320300,
            ),
            438 =>
            array (
                'code' => 320305,
                'level' => 3,
                'name' => '贾汪区',
                'pcode' => 320300,
            ),
            439 =>
            array (
                'code' => 320311,
                'level' => 3,
                'name' => '泉山区',
                'pcode' => 320300,
            ),
            440 =>
            array (
                'code' => 320312,
                'level' => 3,
                'name' => '铜山区',
                'pcode' => 320300,
            ),
            441 =>
            array (
                'code' => 320321,
                'level' => 3,
                'name' => '丰县',
                'pcode' => 320300,
            ),
            442 =>
            array (
                'code' => 320322,
                'level' => 3,
                'name' => '沛县',
                'pcode' => 320300,
            ),
            443 =>
            array (
                'code' => 320324,
                'level' => 3,
                'name' => '睢宁县',
                'pcode' => 320300,
            ),
            444 =>
            array (
                'code' => 320371,
                'level' => 3,
                'name' => '徐州经济技术开发区',
                'pcode' => 320300,
            ),
            445 =>
            array (
                'code' => 320381,
                'level' => 3,
                'name' => '新沂市',
                'pcode' => 320300,
            ),
            446 =>
            array (
                'code' => 320382,
                'level' => 3,
                'name' => '邳州市',
                'pcode' => 320300,
            ),
            447 =>
            array (
                'code' => 320400,
                'level' => 2,
                'name' => '常州市',
                'pcode' => 320000,
            ),
            448 =>
            array (
                'code' => 320401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 320400,
            ),
            449 =>
            array (
                'code' => 320402,
                'level' => 3,
                'name' => '天宁区',
                'pcode' => 320400,
            ),
            450 =>
            array (
                'code' => 320404,
                'level' => 3,
                'name' => '钟楼区',
                'pcode' => 320400,
            ),
            451 =>
            array (
                'code' => 320411,
                'level' => 3,
                'name' => '新北区',
                'pcode' => 320400,
            ),
            452 =>
            array (
                'code' => 320412,
                'level' => 3,
                'name' => '武进区',
                'pcode' => 320400,
            ),
            453 =>
            array (
                'code' => 320413,
                'level' => 3,
                'name' => '金坛区',
                'pcode' => 320400,
            ),
            454 =>
            array (
                'code' => 320481,
                'level' => 3,
                'name' => '溧阳市',
                'pcode' => 320400,
            ),
            455 =>
            array (
                'code' => 320500,
                'level' => 2,
                'name' => '苏州市',
                'pcode' => 320000,
            ),
            456 =>
            array (
                'code' => 320501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 320500,
            ),
            457 =>
            array (
                'code' => 320505,
                'level' => 3,
                'name' => '虎丘区',
                'pcode' => 320500,
            ),
            458 =>
            array (
                'code' => 320506,
                'level' => 3,
                'name' => '吴中区',
                'pcode' => 320500,
            ),
            459 =>
            array (
                'code' => 320507,
                'level' => 3,
                'name' => '相城区',
                'pcode' => 320500,
            ),
            460 =>
            array (
                'code' => 320508,
                'level' => 3,
                'name' => '姑苏区',
                'pcode' => 320500,
            ),
            461 =>
            array (
                'code' => 320509,
                'level' => 3,
                'name' => '吴江区',
                'pcode' => 320500,
            ),
            462 =>
            array (
                'code' => 320571,
                'level' => 3,
                'name' => '苏州工业园区',
                'pcode' => 320500,
            ),
            463 =>
            array (
                'code' => 320581,
                'level' => 3,
                'name' => '常熟市',
                'pcode' => 320500,
            ),
            464 =>
            array (
                'code' => 320582,
                'level' => 3,
                'name' => '张家港市',
                'pcode' => 320500,
            ),
            465 =>
            array (
                'code' => 320583,
                'level' => 3,
                'name' => '昆山市',
                'pcode' => 320500,
            ),
            466 =>
            array (
                'code' => 320585,
                'level' => 3,
                'name' => '太仓市',
                'pcode' => 320500,
            ),
            467 =>
            array (
                'code' => 320600,
                'level' => 2,
                'name' => '南通市',
                'pcode' => 320000,
            ),
            468 =>
            array (
                'code' => 320601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 320600,
            ),
            469 =>
            array (
                'code' => 320602,
                'level' => 3,
                'name' => '崇川区',
                'pcode' => 320600,
            ),
            470 =>
            array (
                'code' => 320611,
                'level' => 3,
                'name' => '港闸区',
                'pcode' => 320600,
            ),
            471 =>
            array (
                'code' => 320612,
                'level' => 3,
                'name' => '通州区',
                'pcode' => 320600,
            ),
            472 =>
            array (
                'code' => 320623,
                'level' => 3,
                'name' => '如东县',
                'pcode' => 320600,
            ),
            473 =>
            array (
                'code' => 320671,
                'level' => 3,
                'name' => '南通经济技术开发区',
                'pcode' => 320600,
            ),
            474 =>
            array (
                'code' => 320681,
                'level' => 3,
                'name' => '启东市',
                'pcode' => 320600,
            ),
            475 =>
            array (
                'code' => 320682,
                'level' => 3,
                'name' => '如皋市',
                'pcode' => 320600,
            ),
            476 =>
            array (
                'code' => 320684,
                'level' => 3,
                'name' => '海门市',
                'pcode' => 320600,
            ),
            477 =>
            array (
                'code' => 320685,
                'level' => 3,
                'name' => '海安市',
                'pcode' => 320600,
            ),
            478 =>
            array (
                'code' => 320700,
                'level' => 2,
                'name' => '连云港市',
                'pcode' => 320000,
            ),
            479 =>
            array (
                'code' => 320701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 320700,
            ),
            480 =>
            array (
                'code' => 320703,
                'level' => 3,
                'name' => '连云区',
                'pcode' => 320700,
            ),
            481 =>
            array (
                'code' => 320706,
                'level' => 3,
                'name' => '海州区',
                'pcode' => 320700,
            ),
            482 =>
            array (
                'code' => 320707,
                'level' => 3,
                'name' => '赣榆区',
                'pcode' => 320700,
            ),
            483 =>
            array (
                'code' => 320722,
                'level' => 3,
                'name' => '东海县',
                'pcode' => 320700,
            ),
            484 =>
            array (
                'code' => 320723,
                'level' => 3,
                'name' => '灌云县',
                'pcode' => 320700,
            ),
            485 =>
            array (
                'code' => 320724,
                'level' => 3,
                'name' => '灌南县',
                'pcode' => 320700,
            ),
            486 =>
            array (
                'code' => 320771,
                'level' => 3,
                'name' => '连云港经济技术开发区',
                'pcode' => 320700,
            ),
            487 =>
            array (
                'code' => 320772,
                'level' => 3,
                'name' => '连云港高新技术产业开发区',
                'pcode' => 320700,
            ),
            488 =>
            array (
                'code' => 320800,
                'level' => 2,
                'name' => '淮安市',
                'pcode' => 320000,
            ),
            489 =>
            array (
                'code' => 320801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 320800,
            ),
            490 =>
            array (
                'code' => 320803,
                'level' => 3,
                'name' => '淮安区',
                'pcode' => 320800,
            ),
            491 =>
            array (
                'code' => 320804,
                'level' => 3,
                'name' => '淮阴区',
                'pcode' => 320800,
            ),
            492 =>
            array (
                'code' => 320812,
                'level' => 3,
                'name' => '清江浦区',
                'pcode' => 320800,
            ),
            493 =>
            array (
                'code' => 320813,
                'level' => 3,
                'name' => '洪泽区',
                'pcode' => 320800,
            ),
            494 =>
            array (
                'code' => 320826,
                'level' => 3,
                'name' => '涟水县',
                'pcode' => 320800,
            ),
            495 =>
            array (
                'code' => 320830,
                'level' => 3,
                'name' => '盱眙县',
                'pcode' => 320800,
            ),
            496 =>
            array (
                'code' => 320831,
                'level' => 3,
                'name' => '金湖县',
                'pcode' => 320800,
            ),
            497 =>
            array (
                'code' => 320871,
                'level' => 3,
                'name' => '淮安经济技术开发区',
                'pcode' => 320800,
            ),
            498 =>
            array (
                'code' => 320900,
                'level' => 2,
                'name' => '盐城市',
                'pcode' => 320000,
            ),
            499 =>
            array (
                'code' => 320901,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 320900,
            ),
        ));
        \DB::table('china_areas')->insert(array (
            0 =>
            array (
                'code' => 320902,
                'level' => 3,
                'name' => '亭湖区',
                'pcode' => 320900,
            ),
            1 =>
            array (
                'code' => 320903,
                'level' => 3,
                'name' => '盐都区',
                'pcode' => 320900,
            ),
            2 =>
            array (
                'code' => 320904,
                'level' => 3,
                'name' => '大丰区',
                'pcode' => 320900,
            ),
            3 =>
            array (
                'code' => 320921,
                'level' => 3,
                'name' => '响水县',
                'pcode' => 320900,
            ),
            4 =>
            array (
                'code' => 320922,
                'level' => 3,
                'name' => '滨海县',
                'pcode' => 320900,
            ),
            5 =>
            array (
                'code' => 320923,
                'level' => 3,
                'name' => '阜宁县',
                'pcode' => 320900,
            ),
            6 =>
            array (
                'code' => 320924,
                'level' => 3,
                'name' => '射阳县',
                'pcode' => 320900,
            ),
            7 =>
            array (
                'code' => 320925,
                'level' => 3,
                'name' => '建湖县',
                'pcode' => 320900,
            ),
            8 =>
            array (
                'code' => 320971,
                'level' => 3,
                'name' => '盐城经济技术开发区',
                'pcode' => 320900,
            ),
            9 =>
            array (
                'code' => 320981,
                'level' => 3,
                'name' => '东台市',
                'pcode' => 320900,
            ),
            10 =>
            array (
                'code' => 321000,
                'level' => 2,
                'name' => '扬州市',
                'pcode' => 320000,
            ),
            11 =>
            array (
                'code' => 321001,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 321000,
            ),
            12 =>
            array (
                'code' => 321002,
                'level' => 3,
                'name' => '广陵区',
                'pcode' => 321000,
            ),
            13 =>
            array (
                'code' => 321003,
                'level' => 3,
                'name' => '邗江区',
                'pcode' => 321000,
            ),
            14 =>
            array (
                'code' => 321012,
                'level' => 3,
                'name' => '江都区',
                'pcode' => 321000,
            ),
            15 =>
            array (
                'code' => 321023,
                'level' => 3,
                'name' => '宝应县',
                'pcode' => 321000,
            ),
            16 =>
            array (
                'code' => 321071,
                'level' => 3,
                'name' => '扬州经济技术开发区',
                'pcode' => 321000,
            ),
            17 =>
            array (
                'code' => 321081,
                'level' => 3,
                'name' => '仪征市',
                'pcode' => 321000,
            ),
            18 =>
            array (
                'code' => 321084,
                'level' => 3,
                'name' => '高邮市',
                'pcode' => 321000,
            ),
            19 =>
            array (
                'code' => 321100,
                'level' => 2,
                'name' => '镇江市',
                'pcode' => 320000,
            ),
            20 =>
            array (
                'code' => 321101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 321100,
            ),
            21 =>
            array (
                'code' => 321102,
                'level' => 3,
                'name' => '京口区',
                'pcode' => 321100,
            ),
            22 =>
            array (
                'code' => 321111,
                'level' => 3,
                'name' => '润州区',
                'pcode' => 321100,
            ),
            23 =>
            array (
                'code' => 321112,
                'level' => 3,
                'name' => '丹徒区',
                'pcode' => 321100,
            ),
            24 =>
            array (
                'code' => 321171,
                'level' => 3,
                'name' => '镇江新区',
                'pcode' => 321100,
            ),
            25 =>
            array (
                'code' => 321181,
                'level' => 3,
                'name' => '丹阳市',
                'pcode' => 321100,
            ),
            26 =>
            array (
                'code' => 321182,
                'level' => 3,
                'name' => '扬中市',
                'pcode' => 321100,
            ),
            27 =>
            array (
                'code' => 321183,
                'level' => 3,
                'name' => '句容市',
                'pcode' => 321100,
            ),
            28 =>
            array (
                'code' => 321200,
                'level' => 2,
                'name' => '泰州市',
                'pcode' => 320000,
            ),
            29 =>
            array (
                'code' => 321201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 321200,
            ),
            30 =>
            array (
                'code' => 321202,
                'level' => 3,
                'name' => '海陵区',
                'pcode' => 321200,
            ),
            31 =>
            array (
                'code' => 321203,
                'level' => 3,
                'name' => '高港区',
                'pcode' => 321200,
            ),
            32 =>
            array (
                'code' => 321204,
                'level' => 3,
                'name' => '姜堰区',
                'pcode' => 321200,
            ),
            33 =>
            array (
                'code' => 321271,
                'level' => 3,
                'name' => '泰州医药高新技术产业开发区',
                'pcode' => 321200,
            ),
            34 =>
            array (
                'code' => 321281,
                'level' => 3,
                'name' => '兴化市',
                'pcode' => 321200,
            ),
            35 =>
            array (
                'code' => 321282,
                'level' => 3,
                'name' => '靖江市',
                'pcode' => 321200,
            ),
            36 =>
            array (
                'code' => 321283,
                'level' => 3,
                'name' => '泰兴市',
                'pcode' => 321200,
            ),
            37 =>
            array (
                'code' => 321300,
                'level' => 2,
                'name' => '宿迁市',
                'pcode' => 320000,
            ),
            38 =>
            array (
                'code' => 321301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 321300,
            ),
            39 =>
            array (
                'code' => 321302,
                'level' => 3,
                'name' => '宿城区',
                'pcode' => 321300,
            ),
            40 =>
            array (
                'code' => 321311,
                'level' => 3,
                'name' => '宿豫区',
                'pcode' => 321300,
            ),
            41 =>
            array (
                'code' => 321322,
                'level' => 3,
                'name' => '沭阳县',
                'pcode' => 321300,
            ),
            42 =>
            array (
                'code' => 321323,
                'level' => 3,
                'name' => '泗阳县',
                'pcode' => 321300,
            ),
            43 =>
            array (
                'code' => 321324,
                'level' => 3,
                'name' => '泗洪县',
                'pcode' => 321300,
            ),
            44 =>
            array (
                'code' => 321371,
                'level' => 3,
                'name' => '宿迁经济技术开发区',
                'pcode' => 321300,
            ),
            45 =>
            array (
                'code' => 330000,
                'level' => 1,
                'name' => '浙江省',
                'pcode' => 0,
            ),
            46 =>
            array (
                'code' => 330100,
                'level' => 2,
                'name' => '杭州市',
                'pcode' => 330000,
            ),
            47 =>
            array (
                'code' => 330101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 330100,
            ),
            48 =>
            array (
                'code' => 330102,
                'level' => 3,
                'name' => '上城区',
                'pcode' => 330100,
            ),
            49 =>
            array (
                'code' => 330103,
                'level' => 3,
                'name' => '下城区',
                'pcode' => 330100,
            ),
            50 =>
            array (
                'code' => 330104,
                'level' => 3,
                'name' => '江干区',
                'pcode' => 330100,
            ),
            51 =>
            array (
                'code' => 330105,
                'level' => 3,
                'name' => '拱墅区',
                'pcode' => 330100,
            ),
            52 =>
            array (
                'code' => 330106,
                'level' => 3,
                'name' => '西湖区',
                'pcode' => 330100,
            ),
            53 =>
            array (
                'code' => 330108,
                'level' => 3,
                'name' => '滨江区',
                'pcode' => 330100,
            ),
            54 =>
            array (
                'code' => 330109,
                'level' => 3,
                'name' => '萧山区',
                'pcode' => 330100,
            ),
            55 =>
            array (
                'code' => 330110,
                'level' => 3,
                'name' => '余杭区',
                'pcode' => 330100,
            ),
            56 =>
            array (
                'code' => 330111,
                'level' => 3,
                'name' => '富阳区',
                'pcode' => 330100,
            ),
            57 =>
            array (
                'code' => 330112,
                'level' => 3,
                'name' => '临安区',
                'pcode' => 330100,
            ),
            58 =>
            array (
                'code' => 330122,
                'level' => 3,
                'name' => '桐庐县',
                'pcode' => 330100,
            ),
            59 =>
            array (
                'code' => 330127,
                'level' => 3,
                'name' => '淳安县',
                'pcode' => 330100,
            ),
            60 =>
            array (
                'code' => 330182,
                'level' => 3,
                'name' => '建德市',
                'pcode' => 330100,
            ),
            61 =>
            array (
                'code' => 330200,
                'level' => 2,
                'name' => '宁波市',
                'pcode' => 330000,
            ),
            62 =>
            array (
                'code' => 330201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 330200,
            ),
            63 =>
            array (
                'code' => 330203,
                'level' => 3,
                'name' => '海曙区',
                'pcode' => 330200,
            ),
            64 =>
            array (
                'code' => 330205,
                'level' => 3,
                'name' => '江北区',
                'pcode' => 330200,
            ),
            65 =>
            array (
                'code' => 330206,
                'level' => 3,
                'name' => '北仑区',
                'pcode' => 330200,
            ),
            66 =>
            array (
                'code' => 330211,
                'level' => 3,
                'name' => '镇海区',
                'pcode' => 330200,
            ),
            67 =>
            array (
                'code' => 330212,
                'level' => 3,
                'name' => '鄞州区',
                'pcode' => 330200,
            ),
            68 =>
            array (
                'code' => 330213,
                'level' => 3,
                'name' => '奉化区',
                'pcode' => 330200,
            ),
            69 =>
            array (
                'code' => 330225,
                'level' => 3,
                'name' => '象山县',
                'pcode' => 330200,
            ),
            70 =>
            array (
                'code' => 330226,
                'level' => 3,
                'name' => '宁海县',
                'pcode' => 330200,
            ),
            71 =>
            array (
                'code' => 330281,
                'level' => 3,
                'name' => '余姚市',
                'pcode' => 330200,
            ),
            72 =>
            array (
                'code' => 330282,
                'level' => 3,
                'name' => '慈溪市',
                'pcode' => 330200,
            ),
            73 =>
            array (
                'code' => 330300,
                'level' => 2,
                'name' => '温州市',
                'pcode' => 330000,
            ),
            74 =>
            array (
                'code' => 330301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 330300,
            ),
            75 =>
            array (
                'code' => 330302,
                'level' => 3,
                'name' => '鹿城区',
                'pcode' => 330300,
            ),
            76 =>
            array (
                'code' => 330303,
                'level' => 3,
                'name' => '龙湾区',
                'pcode' => 330300,
            ),
            77 =>
            array (
                'code' => 330304,
                'level' => 3,
                'name' => '瓯海区',
                'pcode' => 330300,
            ),
            78 =>
            array (
                'code' => 330305,
                'level' => 3,
                'name' => '洞头区',
                'pcode' => 330300,
            ),
            79 =>
            array (
                'code' => 330324,
                'level' => 3,
                'name' => '永嘉县',
                'pcode' => 330300,
            ),
            80 =>
            array (
                'code' => 330326,
                'level' => 3,
                'name' => '平阳县',
                'pcode' => 330300,
            ),
            81 =>
            array (
                'code' => 330327,
                'level' => 3,
                'name' => '苍南县',
                'pcode' => 330300,
            ),
            82 =>
            array (
                'code' => 330328,
                'level' => 3,
                'name' => '文成县',
                'pcode' => 330300,
            ),
            83 =>
            array (
                'code' => 330329,
                'level' => 3,
                'name' => '泰顺县',
                'pcode' => 330300,
            ),
            84 =>
            array (
                'code' => 330371,
                'level' => 3,
                'name' => '温州经济技术开发区',
                'pcode' => 330300,
            ),
            85 =>
            array (
                'code' => 330381,
                'level' => 3,
                'name' => '瑞安市',
                'pcode' => 330300,
            ),
            86 =>
            array (
                'code' => 330382,
                'level' => 3,
                'name' => '乐清市',
                'pcode' => 330300,
            ),
            87 =>
            array (
                'code' => 330383,
                'level' => 3,
                'name' => '龙港市',
                'pcode' => 330300,
            ),
            88 =>
            array (
                'code' => 330400,
                'level' => 2,
                'name' => '嘉兴市',
                'pcode' => 330000,
            ),
            89 =>
            array (
                'code' => 330401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 330400,
            ),
            90 =>
            array (
                'code' => 330402,
                'level' => 3,
                'name' => '南湖区',
                'pcode' => 330400,
            ),
            91 =>
            array (
                'code' => 330411,
                'level' => 3,
                'name' => '秀洲区',
                'pcode' => 330400,
            ),
            92 =>
            array (
                'code' => 330421,
                'level' => 3,
                'name' => '嘉善县',
                'pcode' => 330400,
            ),
            93 =>
            array (
                'code' => 330424,
                'level' => 3,
                'name' => '海盐县',
                'pcode' => 330400,
            ),
            94 =>
            array (
                'code' => 330481,
                'level' => 3,
                'name' => '海宁市',
                'pcode' => 330400,
            ),
            95 =>
            array (
                'code' => 330482,
                'level' => 3,
                'name' => '平湖市',
                'pcode' => 330400,
            ),
            96 =>
            array (
                'code' => 330483,
                'level' => 3,
                'name' => '桐乡市',
                'pcode' => 330400,
            ),
            97 =>
            array (
                'code' => 330500,
                'level' => 2,
                'name' => '湖州市',
                'pcode' => 330000,
            ),
            98 =>
            array (
                'code' => 330501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 330500,
            ),
            99 =>
            array (
                'code' => 330502,
                'level' => 3,
                'name' => '吴兴区',
                'pcode' => 330500,
            ),
            100 =>
            array (
                'code' => 330503,
                'level' => 3,
                'name' => '南浔区',
                'pcode' => 330500,
            ),
            101 =>
            array (
                'code' => 330521,
                'level' => 3,
                'name' => '德清县',
                'pcode' => 330500,
            ),
            102 =>
            array (
                'code' => 330522,
                'level' => 3,
                'name' => '长兴县',
                'pcode' => 330500,
            ),
            103 =>
            array (
                'code' => 330523,
                'level' => 3,
                'name' => '安吉县',
                'pcode' => 330500,
            ),
            104 =>
            array (
                'code' => 330600,
                'level' => 2,
                'name' => '绍兴市',
                'pcode' => 330000,
            ),
            105 =>
            array (
                'code' => 330601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 330600,
            ),
            106 =>
            array (
                'code' => 330602,
                'level' => 3,
                'name' => '越城区',
                'pcode' => 330600,
            ),
            107 =>
            array (
                'code' => 330603,
                'level' => 3,
                'name' => '柯桥区',
                'pcode' => 330600,
            ),
            108 =>
            array (
                'code' => 330604,
                'level' => 3,
                'name' => '上虞区',
                'pcode' => 330600,
            ),
            109 =>
            array (
                'code' => 330624,
                'level' => 3,
                'name' => '新昌县',
                'pcode' => 330600,
            ),
            110 =>
            array (
                'code' => 330681,
                'level' => 3,
                'name' => '诸暨市',
                'pcode' => 330600,
            ),
            111 =>
            array (
                'code' => 330683,
                'level' => 3,
                'name' => '嵊州市',
                'pcode' => 330600,
            ),
            112 =>
            array (
                'code' => 330700,
                'level' => 2,
                'name' => '金华市',
                'pcode' => 330000,
            ),
            113 =>
            array (
                'code' => 330701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 330700,
            ),
            114 =>
            array (
                'code' => 330702,
                'level' => 3,
                'name' => '婺城区',
                'pcode' => 330700,
            ),
            115 =>
            array (
                'code' => 330703,
                'level' => 3,
                'name' => '金东区',
                'pcode' => 330700,
            ),
            116 =>
            array (
                'code' => 330723,
                'level' => 3,
                'name' => '武义县',
                'pcode' => 330700,
            ),
            117 =>
            array (
                'code' => 330726,
                'level' => 3,
                'name' => '浦江县',
                'pcode' => 330700,
            ),
            118 =>
            array (
                'code' => 330727,
                'level' => 3,
                'name' => '磐安县',
                'pcode' => 330700,
            ),
            119 =>
            array (
                'code' => 330781,
                'level' => 3,
                'name' => '兰溪市',
                'pcode' => 330700,
            ),
            120 =>
            array (
                'code' => 330782,
                'level' => 3,
                'name' => '义乌市',
                'pcode' => 330700,
            ),
            121 =>
            array (
                'code' => 330783,
                'level' => 3,
                'name' => '东阳市',
                'pcode' => 330700,
            ),
            122 =>
            array (
                'code' => 330784,
                'level' => 3,
                'name' => '永康市',
                'pcode' => 330700,
            ),
            123 =>
            array (
                'code' => 330800,
                'level' => 2,
                'name' => '衢州市',
                'pcode' => 330000,
            ),
            124 =>
            array (
                'code' => 330801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 330800,
            ),
            125 =>
            array (
                'code' => 330802,
                'level' => 3,
                'name' => '柯城区',
                'pcode' => 330800,
            ),
            126 =>
            array (
                'code' => 330803,
                'level' => 3,
                'name' => '衢江区',
                'pcode' => 330800,
            ),
            127 =>
            array (
                'code' => 330822,
                'level' => 3,
                'name' => '常山县',
                'pcode' => 330800,
            ),
            128 =>
            array (
                'code' => 330824,
                'level' => 3,
                'name' => '开化县',
                'pcode' => 330800,
            ),
            129 =>
            array (
                'code' => 330825,
                'level' => 3,
                'name' => '龙游县',
                'pcode' => 330800,
            ),
            130 =>
            array (
                'code' => 330881,
                'level' => 3,
                'name' => '江山市',
                'pcode' => 330800,
            ),
            131 =>
            array (
                'code' => 330900,
                'level' => 2,
                'name' => '舟山市',
                'pcode' => 330000,
            ),
            132 =>
            array (
                'code' => 330901,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 330900,
            ),
            133 =>
            array (
                'code' => 330902,
                'level' => 3,
                'name' => '定海区',
                'pcode' => 330900,
            ),
            134 =>
            array (
                'code' => 330903,
                'level' => 3,
                'name' => '普陀区',
                'pcode' => 330900,
            ),
            135 =>
            array (
                'code' => 330921,
                'level' => 3,
                'name' => '岱山县',
                'pcode' => 330900,
            ),
            136 =>
            array (
                'code' => 330922,
                'level' => 3,
                'name' => '嵊泗县',
                'pcode' => 330900,
            ),
            137 =>
            array (
                'code' => 331000,
                'level' => 2,
                'name' => '台州市',
                'pcode' => 330000,
            ),
            138 =>
            array (
                'code' => 331001,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 331000,
            ),
            139 =>
            array (
                'code' => 331002,
                'level' => 3,
                'name' => '椒江区',
                'pcode' => 331000,
            ),
            140 =>
            array (
                'code' => 331003,
                'level' => 3,
                'name' => '黄岩区',
                'pcode' => 331000,
            ),
            141 =>
            array (
                'code' => 331004,
                'level' => 3,
                'name' => '路桥区',
                'pcode' => 331000,
            ),
            142 =>
            array (
                'code' => 331022,
                'level' => 3,
                'name' => '三门县',
                'pcode' => 331000,
            ),
            143 =>
            array (
                'code' => 331023,
                'level' => 3,
                'name' => '天台县',
                'pcode' => 331000,
            ),
            144 =>
            array (
                'code' => 331024,
                'level' => 3,
                'name' => '仙居县',
                'pcode' => 331000,
            ),
            145 =>
            array (
                'code' => 331081,
                'level' => 3,
                'name' => '温岭市',
                'pcode' => 331000,
            ),
            146 =>
            array (
                'code' => 331082,
                'level' => 3,
                'name' => '临海市',
                'pcode' => 331000,
            ),
            147 =>
            array (
                'code' => 331083,
                'level' => 3,
                'name' => '玉环市',
                'pcode' => 331000,
            ),
            148 =>
            array (
                'code' => 331100,
                'level' => 2,
                'name' => '丽水市',
                'pcode' => 330000,
            ),
            149 =>
            array (
                'code' => 331101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 331100,
            ),
            150 =>
            array (
                'code' => 331102,
                'level' => 3,
                'name' => '莲都区',
                'pcode' => 331100,
            ),
            151 =>
            array (
                'code' => 331121,
                'level' => 3,
                'name' => '青田县',
                'pcode' => 331100,
            ),
            152 =>
            array (
                'code' => 331122,
                'level' => 3,
                'name' => '缙云县',
                'pcode' => 331100,
            ),
            153 =>
            array (
                'code' => 331123,
                'level' => 3,
                'name' => '遂昌县',
                'pcode' => 331100,
            ),
            154 =>
            array (
                'code' => 331124,
                'level' => 3,
                'name' => '松阳县',
                'pcode' => 331100,
            ),
            155 =>
            array (
                'code' => 331125,
                'level' => 3,
                'name' => '云和县',
                'pcode' => 331100,
            ),
            156 =>
            array (
                'code' => 331126,
                'level' => 3,
                'name' => '庆元县',
                'pcode' => 331100,
            ),
            157 =>
            array (
                'code' => 331127,
                'level' => 3,
                'name' => '景宁畲族自治县',
                'pcode' => 331100,
            ),
            158 =>
            array (
                'code' => 331181,
                'level' => 3,
                'name' => '龙泉市',
                'pcode' => 331100,
            ),
            159 =>
            array (
                'code' => 340000,
                'level' => 1,
                'name' => '安徽省',
                'pcode' => 0,
            ),
            160 =>
            array (
                'code' => 340100,
                'level' => 2,
                'name' => '合肥市',
                'pcode' => 340000,
            ),
            161 =>
            array (
                'code' => 340101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 340100,
            ),
            162 =>
            array (
                'code' => 340102,
                'level' => 3,
                'name' => '瑶海区',
                'pcode' => 340100,
            ),
            163 =>
            array (
                'code' => 340103,
                'level' => 3,
                'name' => '庐阳区',
                'pcode' => 340100,
            ),
            164 =>
            array (
                'code' => 340104,
                'level' => 3,
                'name' => '蜀山区',
                'pcode' => 340100,
            ),
            165 =>
            array (
                'code' => 340111,
                'level' => 3,
                'name' => '包河区',
                'pcode' => 340100,
            ),
            166 =>
            array (
                'code' => 340121,
                'level' => 3,
                'name' => '长丰县',
                'pcode' => 340100,
            ),
            167 =>
            array (
                'code' => 340122,
                'level' => 3,
                'name' => '肥东县',
                'pcode' => 340100,
            ),
            168 =>
            array (
                'code' => 340123,
                'level' => 3,
                'name' => '肥西县',
                'pcode' => 340100,
            ),
            169 =>
            array (
                'code' => 340124,
                'level' => 3,
                'name' => '庐江县',
                'pcode' => 340100,
            ),
            170 =>
            array (
                'code' => 340171,
                'level' => 3,
                'name' => '合肥高新技术产业开发区',
                'pcode' => 340100,
            ),
            171 =>
            array (
                'code' => 340172,
                'level' => 3,
                'name' => '合肥经济技术开发区',
                'pcode' => 340100,
            ),
            172 =>
            array (
                'code' => 340173,
                'level' => 3,
                'name' => '合肥新站高新技术产业开发区',
                'pcode' => 340100,
            ),
            173 =>
            array (
                'code' => 340181,
                'level' => 3,
                'name' => '巢湖市',
                'pcode' => 340100,
            ),
            174 =>
            array (
                'code' => 340200,
                'level' => 2,
                'name' => '芜湖市',
                'pcode' => 340000,
            ),
            175 =>
            array (
                'code' => 340201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 340200,
            ),
            176 =>
            array (
                'code' => 340202,
                'level' => 3,
                'name' => '镜湖区',
                'pcode' => 340200,
            ),
            177 =>
            array (
                'code' => 340203,
                'level' => 3,
                'name' => '弋江区',
                'pcode' => 340200,
            ),
            178 =>
            array (
                'code' => 340207,
                'level' => 3,
                'name' => '鸠江区',
                'pcode' => 340200,
            ),
            179 =>
            array (
                'code' => 340208,
                'level' => 3,
                'name' => '三山区',
                'pcode' => 340200,
            ),
            180 =>
            array (
                'code' => 340221,
                'level' => 3,
                'name' => '芜湖县',
                'pcode' => 340200,
            ),
            181 =>
            array (
                'code' => 340222,
                'level' => 3,
                'name' => '繁昌县',
                'pcode' => 340200,
            ),
            182 =>
            array (
                'code' => 340223,
                'level' => 3,
                'name' => '南陵县',
                'pcode' => 340200,
            ),
            183 =>
            array (
                'code' => 340271,
                'level' => 3,
                'name' => '芜湖经济技术开发区',
                'pcode' => 340200,
            ),
            184 =>
            array (
                'code' => 340272,
                'level' => 3,
                'name' => '安徽芜湖长江大桥经济开发区',
                'pcode' => 340200,
            ),
            185 =>
            array (
                'code' => 340281,
                'level' => 3,
                'name' => '无为市',
                'pcode' => 340200,
            ),
            186 =>
            array (
                'code' => 340300,
                'level' => 2,
                'name' => '蚌埠市',
                'pcode' => 340000,
            ),
            187 =>
            array (
                'code' => 340301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 340300,
            ),
            188 =>
            array (
                'code' => 340302,
                'level' => 3,
                'name' => '龙子湖区',
                'pcode' => 340300,
            ),
            189 =>
            array (
                'code' => 340303,
                'level' => 3,
                'name' => '蚌山区',
                'pcode' => 340300,
            ),
            190 =>
            array (
                'code' => 340304,
                'level' => 3,
                'name' => '禹会区',
                'pcode' => 340300,
            ),
            191 =>
            array (
                'code' => 340311,
                'level' => 3,
                'name' => '淮上区',
                'pcode' => 340300,
            ),
            192 =>
            array (
                'code' => 340321,
                'level' => 3,
                'name' => '怀远县',
                'pcode' => 340300,
            ),
            193 =>
            array (
                'code' => 340322,
                'level' => 3,
                'name' => '五河县',
                'pcode' => 340300,
            ),
            194 =>
            array (
                'code' => 340323,
                'level' => 3,
                'name' => '固镇县',
                'pcode' => 340300,
            ),
            195 =>
            array (
                'code' => 340371,
                'level' => 3,
                'name' => '蚌埠市高新技术开发区',
                'pcode' => 340300,
            ),
            196 =>
            array (
                'code' => 340372,
                'level' => 3,
                'name' => '蚌埠市经济开发区',
                'pcode' => 340300,
            ),
            197 =>
            array (
                'code' => 340400,
                'level' => 2,
                'name' => '淮南市',
                'pcode' => 340000,
            ),
            198 =>
            array (
                'code' => 340401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 340400,
            ),
            199 =>
            array (
                'code' => 340402,
                'level' => 3,
                'name' => '大通区',
                'pcode' => 340400,
            ),
            200 =>
            array (
                'code' => 340403,
                'level' => 3,
                'name' => '田家庵区',
                'pcode' => 340400,
            ),
            201 =>
            array (
                'code' => 340404,
                'level' => 3,
                'name' => '谢家集区',
                'pcode' => 340400,
            ),
            202 =>
            array (
                'code' => 340405,
                'level' => 3,
                'name' => '八公山区',
                'pcode' => 340400,
            ),
            203 =>
            array (
                'code' => 340406,
                'level' => 3,
                'name' => '潘集区',
                'pcode' => 340400,
            ),
            204 =>
            array (
                'code' => 340421,
                'level' => 3,
                'name' => '凤台县',
                'pcode' => 340400,
            ),
            205 =>
            array (
                'code' => 340422,
                'level' => 3,
                'name' => '寿县',
                'pcode' => 340400,
            ),
            206 =>
            array (
                'code' => 340500,
                'level' => 2,
                'name' => '马鞍山市',
                'pcode' => 340000,
            ),
            207 =>
            array (
                'code' => 340501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 340500,
            ),
            208 =>
            array (
                'code' => 340503,
                'level' => 3,
                'name' => '花山区',
                'pcode' => 340500,
            ),
            209 =>
            array (
                'code' => 340504,
                'level' => 3,
                'name' => '雨山区',
                'pcode' => 340500,
            ),
            210 =>
            array (
                'code' => 340506,
                'level' => 3,
                'name' => '博望区',
                'pcode' => 340500,
            ),
            211 =>
            array (
                'code' => 340521,
                'level' => 3,
                'name' => '当涂县',
                'pcode' => 340500,
            ),
            212 =>
            array (
                'code' => 340522,
                'level' => 3,
                'name' => '含山县',
                'pcode' => 340500,
            ),
            213 =>
            array (
                'code' => 340523,
                'level' => 3,
                'name' => '和县',
                'pcode' => 340500,
            ),
            214 =>
            array (
                'code' => 340600,
                'level' => 2,
                'name' => '淮北市',
                'pcode' => 340000,
            ),
            215 =>
            array (
                'code' => 340601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 340600,
            ),
            216 =>
            array (
                'code' => 340602,
                'level' => 3,
                'name' => '杜集区',
                'pcode' => 340600,
            ),
            217 =>
            array (
                'code' => 340603,
                'level' => 3,
                'name' => '相山区',
                'pcode' => 340600,
            ),
            218 =>
            array (
                'code' => 340604,
                'level' => 3,
                'name' => '烈山区',
                'pcode' => 340600,
            ),
            219 =>
            array (
                'code' => 340621,
                'level' => 3,
                'name' => '濉溪县',
                'pcode' => 340600,
            ),
            220 =>
            array (
                'code' => 340700,
                'level' => 2,
                'name' => '铜陵市',
                'pcode' => 340000,
            ),
            221 =>
            array (
                'code' => 340701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 340700,
            ),
            222 =>
            array (
                'code' => 340705,
                'level' => 3,
                'name' => '铜官区',
                'pcode' => 340700,
            ),
            223 =>
            array (
                'code' => 340706,
                'level' => 3,
                'name' => '义安区',
                'pcode' => 340700,
            ),
            224 =>
            array (
                'code' => 340711,
                'level' => 3,
                'name' => '郊区',
                'pcode' => 340700,
            ),
            225 =>
            array (
                'code' => 340722,
                'level' => 3,
                'name' => '枞阳县',
                'pcode' => 340700,
            ),
            226 =>
            array (
                'code' => 340800,
                'level' => 2,
                'name' => '安庆市',
                'pcode' => 340000,
            ),
            227 =>
            array (
                'code' => 340801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 340800,
            ),
            228 =>
            array (
                'code' => 340802,
                'level' => 3,
                'name' => '迎江区',
                'pcode' => 340800,
            ),
            229 =>
            array (
                'code' => 340803,
                'level' => 3,
                'name' => '大观区',
                'pcode' => 340800,
            ),
            230 =>
            array (
                'code' => 340811,
                'level' => 3,
                'name' => '宜秀区',
                'pcode' => 340800,
            ),
            231 =>
            array (
                'code' => 340822,
                'level' => 3,
                'name' => '怀宁县',
                'pcode' => 340800,
            ),
            232 =>
            array (
                'code' => 340825,
                'level' => 3,
                'name' => '太湖县',
                'pcode' => 340800,
            ),
            233 =>
            array (
                'code' => 340826,
                'level' => 3,
                'name' => '宿松县',
                'pcode' => 340800,
            ),
            234 =>
            array (
                'code' => 340827,
                'level' => 3,
                'name' => '望江县',
                'pcode' => 340800,
            ),
            235 =>
            array (
                'code' => 340828,
                'level' => 3,
                'name' => '岳西县',
                'pcode' => 340800,
            ),
            236 =>
            array (
                'code' => 340871,
                'level' => 3,
                'name' => '安徽安庆经济开发区',
                'pcode' => 340800,
            ),
            237 =>
            array (
                'code' => 340881,
                'level' => 3,
                'name' => '桐城市',
                'pcode' => 340800,
            ),
            238 =>
            array (
                'code' => 340882,
                'level' => 3,
                'name' => '潜山市',
                'pcode' => 340800,
            ),
            239 =>
            array (
                'code' => 341000,
                'level' => 2,
                'name' => '黄山市',
                'pcode' => 340000,
            ),
            240 =>
            array (
                'code' => 341001,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 341000,
            ),
            241 =>
            array (
                'code' => 341002,
                'level' => 3,
                'name' => '屯溪区',
                'pcode' => 341000,
            ),
            242 =>
            array (
                'code' => 341003,
                'level' => 3,
                'name' => '黄山区',
                'pcode' => 341000,
            ),
            243 =>
            array (
                'code' => 341004,
                'level' => 3,
                'name' => '徽州区',
                'pcode' => 341000,
            ),
            244 =>
            array (
                'code' => 341021,
                'level' => 3,
                'name' => '歙县',
                'pcode' => 341000,
            ),
            245 =>
            array (
                'code' => 341022,
                'level' => 3,
                'name' => '休宁县',
                'pcode' => 341000,
            ),
            246 =>
            array (
                'code' => 341023,
                'level' => 3,
                'name' => '黟县',
                'pcode' => 341000,
            ),
            247 =>
            array (
                'code' => 341024,
                'level' => 3,
                'name' => '祁门县',
                'pcode' => 341000,
            ),
            248 =>
            array (
                'code' => 341100,
                'level' => 2,
                'name' => '滁州市',
                'pcode' => 340000,
            ),
            249 =>
            array (
                'code' => 341101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 341100,
            ),
            250 =>
            array (
                'code' => 341102,
                'level' => 3,
                'name' => '琅琊区',
                'pcode' => 341100,
            ),
            251 =>
            array (
                'code' => 341103,
                'level' => 3,
                'name' => '南谯区',
                'pcode' => 341100,
            ),
            252 =>
            array (
                'code' => 341122,
                'level' => 3,
                'name' => '来安县',
                'pcode' => 341100,
            ),
            253 =>
            array (
                'code' => 341124,
                'level' => 3,
                'name' => '全椒县',
                'pcode' => 341100,
            ),
            254 =>
            array (
                'code' => 341125,
                'level' => 3,
                'name' => '定远县',
                'pcode' => 341100,
            ),
            255 =>
            array (
                'code' => 341126,
                'level' => 3,
                'name' => '凤阳县',
                'pcode' => 341100,
            ),
            256 =>
            array (
                'code' => 341171,
                'level' => 3,
                'name' => '苏滁现代产业园',
                'pcode' => 341100,
            ),
            257 =>
            array (
                'code' => 341172,
                'level' => 3,
                'name' => '滁州经济技术开发区',
                'pcode' => 341100,
            ),
            258 =>
            array (
                'code' => 341181,
                'level' => 3,
                'name' => '天长市',
                'pcode' => 341100,
            ),
            259 =>
            array (
                'code' => 341182,
                'level' => 3,
                'name' => '明光市',
                'pcode' => 341100,
            ),
            260 =>
            array (
                'code' => 341200,
                'level' => 2,
                'name' => '阜阳市',
                'pcode' => 340000,
            ),
            261 =>
            array (
                'code' => 341201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 341200,
            ),
            262 =>
            array (
                'code' => 341202,
                'level' => 3,
                'name' => '颍州区',
                'pcode' => 341200,
            ),
            263 =>
            array (
                'code' => 341203,
                'level' => 3,
                'name' => '颍东区',
                'pcode' => 341200,
            ),
            264 =>
            array (
                'code' => 341204,
                'level' => 3,
                'name' => '颍泉区',
                'pcode' => 341200,
            ),
            265 =>
            array (
                'code' => 341221,
                'level' => 3,
                'name' => '临泉县',
                'pcode' => 341200,
            ),
            266 =>
            array (
                'code' => 341222,
                'level' => 3,
                'name' => '太和县',
                'pcode' => 341200,
            ),
            267 =>
            array (
                'code' => 341225,
                'level' => 3,
                'name' => '阜南县',
                'pcode' => 341200,
            ),
            268 =>
            array (
                'code' => 341226,
                'level' => 3,
                'name' => '颍上县',
                'pcode' => 341200,
            ),
            269 =>
            array (
                'code' => 341271,
                'level' => 3,
                'name' => '阜阳合肥现代产业园区',
                'pcode' => 341200,
            ),
            270 =>
            array (
                'code' => 341272,
                'level' => 3,
                'name' => '阜阳经济技术开发区',
                'pcode' => 341200,
            ),
            271 =>
            array (
                'code' => 341282,
                'level' => 3,
                'name' => '界首市',
                'pcode' => 341200,
            ),
            272 =>
            array (
                'code' => 341300,
                'level' => 2,
                'name' => '宿州市',
                'pcode' => 340000,
            ),
            273 =>
            array (
                'code' => 341301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 341300,
            ),
            274 =>
            array (
                'code' => 341302,
                'level' => 3,
                'name' => '埇桥区',
                'pcode' => 341300,
            ),
            275 =>
            array (
                'code' => 341321,
                'level' => 3,
                'name' => '砀山县',
                'pcode' => 341300,
            ),
            276 =>
            array (
                'code' => 341322,
                'level' => 3,
                'name' => '萧县',
                'pcode' => 341300,
            ),
            277 =>
            array (
                'code' => 341323,
                'level' => 3,
                'name' => '灵璧县',
                'pcode' => 341300,
            ),
            278 =>
            array (
                'code' => 341324,
                'level' => 3,
                'name' => '泗县',
                'pcode' => 341300,
            ),
            279 =>
            array (
                'code' => 341371,
                'level' => 3,
                'name' => '宿州马鞍山现代产业园区',
                'pcode' => 341300,
            ),
            280 =>
            array (
                'code' => 341372,
                'level' => 3,
                'name' => '宿州经济技术开发区',
                'pcode' => 341300,
            ),
            281 =>
            array (
                'code' => 341500,
                'level' => 2,
                'name' => '六安市',
                'pcode' => 340000,
            ),
            282 =>
            array (
                'code' => 341501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 341500,
            ),
            283 =>
            array (
                'code' => 341502,
                'level' => 3,
                'name' => '金安区',
                'pcode' => 341500,
            ),
            284 =>
            array (
                'code' => 341503,
                'level' => 3,
                'name' => '裕安区',
                'pcode' => 341500,
            ),
            285 =>
            array (
                'code' => 341504,
                'level' => 3,
                'name' => '叶集区',
                'pcode' => 341500,
            ),
            286 =>
            array (
                'code' => 341522,
                'level' => 3,
                'name' => '霍邱县',
                'pcode' => 341500,
            ),
            287 =>
            array (
                'code' => 341523,
                'level' => 3,
                'name' => '舒城县',
                'pcode' => 341500,
            ),
            288 =>
            array (
                'code' => 341524,
                'level' => 3,
                'name' => '金寨县',
                'pcode' => 341500,
            ),
            289 =>
            array (
                'code' => 341525,
                'level' => 3,
                'name' => '霍山县',
                'pcode' => 341500,
            ),
            290 =>
            array (
                'code' => 341600,
                'level' => 2,
                'name' => '亳州市',
                'pcode' => 340000,
            ),
            291 =>
            array (
                'code' => 341601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 341600,
            ),
            292 =>
            array (
                'code' => 341602,
                'level' => 3,
                'name' => '谯城区',
                'pcode' => 341600,
            ),
            293 =>
            array (
                'code' => 341621,
                'level' => 3,
                'name' => '涡阳县',
                'pcode' => 341600,
            ),
            294 =>
            array (
                'code' => 341622,
                'level' => 3,
                'name' => '蒙城县',
                'pcode' => 341600,
            ),
            295 =>
            array (
                'code' => 341623,
                'level' => 3,
                'name' => '利辛县',
                'pcode' => 341600,
            ),
            296 =>
            array (
                'code' => 341700,
                'level' => 2,
                'name' => '池州市',
                'pcode' => 340000,
            ),
            297 =>
            array (
                'code' => 341701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 341700,
            ),
            298 =>
            array (
                'code' => 341702,
                'level' => 3,
                'name' => '贵池区',
                'pcode' => 341700,
            ),
            299 =>
            array (
                'code' => 341721,
                'level' => 3,
                'name' => '东至县',
                'pcode' => 341700,
            ),
            300 =>
            array (
                'code' => 341722,
                'level' => 3,
                'name' => '石台县',
                'pcode' => 341700,
            ),
            301 =>
            array (
                'code' => 341723,
                'level' => 3,
                'name' => '青阳县',
                'pcode' => 341700,
            ),
            302 =>
            array (
                'code' => 341800,
                'level' => 2,
                'name' => '宣城市',
                'pcode' => 340000,
            ),
            303 =>
            array (
                'code' => 341801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 341800,
            ),
            304 =>
            array (
                'code' => 341802,
                'level' => 3,
                'name' => '宣州区',
                'pcode' => 341800,
            ),
            305 =>
            array (
                'code' => 341821,
                'level' => 3,
                'name' => '郎溪县',
                'pcode' => 341800,
            ),
            306 =>
            array (
                'code' => 341823,
                'level' => 3,
                'name' => '泾县',
                'pcode' => 341800,
            ),
            307 =>
            array (
                'code' => 341824,
                'level' => 3,
                'name' => '绩溪县',
                'pcode' => 341800,
            ),
            308 =>
            array (
                'code' => 341825,
                'level' => 3,
                'name' => '旌德县',
                'pcode' => 341800,
            ),
            309 =>
            array (
                'code' => 341871,
                'level' => 3,
                'name' => '宣城市经济开发区',
                'pcode' => 341800,
            ),
            310 =>
            array (
                'code' => 341881,
                'level' => 3,
                'name' => '宁国市',
                'pcode' => 341800,
            ),
            311 =>
            array (
                'code' => 341882,
                'level' => 3,
                'name' => '广德市',
                'pcode' => 341800,
            ),
            312 =>
            array (
                'code' => 350000,
                'level' => 1,
                'name' => '福建省',
                'pcode' => 0,
            ),
            313 =>
            array (
                'code' => 350100,
                'level' => 2,
                'name' => '福州市',
                'pcode' => 350000,
            ),
            314 =>
            array (
                'code' => 350101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 350100,
            ),
            315 =>
            array (
                'code' => 350102,
                'level' => 3,
                'name' => '鼓楼区',
                'pcode' => 350100,
            ),
            316 =>
            array (
                'code' => 350103,
                'level' => 3,
                'name' => '台江区',
                'pcode' => 350100,
            ),
            317 =>
            array (
                'code' => 350104,
                'level' => 3,
                'name' => '仓山区',
                'pcode' => 350100,
            ),
            318 =>
            array (
                'code' => 350105,
                'level' => 3,
                'name' => '马尾区',
                'pcode' => 350100,
            ),
            319 =>
            array (
                'code' => 350111,
                'level' => 3,
                'name' => '晋安区',
                'pcode' => 350100,
            ),
            320 =>
            array (
                'code' => 350112,
                'level' => 3,
                'name' => '长乐区',
                'pcode' => 350100,
            ),
            321 =>
            array (
                'code' => 350121,
                'level' => 3,
                'name' => '闽侯县',
                'pcode' => 350100,
            ),
            322 =>
            array (
                'code' => 350122,
                'level' => 3,
                'name' => '连江县',
                'pcode' => 350100,
            ),
            323 =>
            array (
                'code' => 350123,
                'level' => 3,
                'name' => '罗源县',
                'pcode' => 350100,
            ),
            324 =>
            array (
                'code' => 350124,
                'level' => 3,
                'name' => '闽清县',
                'pcode' => 350100,
            ),
            325 =>
            array (
                'code' => 350125,
                'level' => 3,
                'name' => '永泰县',
                'pcode' => 350100,
            ),
            326 =>
            array (
                'code' => 350128,
                'level' => 3,
                'name' => '平潭县',
                'pcode' => 350100,
            ),
            327 =>
            array (
                'code' => 350181,
                'level' => 3,
                'name' => '福清市',
                'pcode' => 350100,
            ),
            328 =>
            array (
                'code' => 350200,
                'level' => 2,
                'name' => '厦门市',
                'pcode' => 350000,
            ),
            329 =>
            array (
                'code' => 350201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 350200,
            ),
            330 =>
            array (
                'code' => 350203,
                'level' => 3,
                'name' => '思明区',
                'pcode' => 350200,
            ),
            331 =>
            array (
                'code' => 350205,
                'level' => 3,
                'name' => '海沧区',
                'pcode' => 350200,
            ),
            332 =>
            array (
                'code' => 350206,
                'level' => 3,
                'name' => '湖里区',
                'pcode' => 350200,
            ),
            333 =>
            array (
                'code' => 350211,
                'level' => 3,
                'name' => '集美区',
                'pcode' => 350200,
            ),
            334 =>
            array (
                'code' => 350212,
                'level' => 3,
                'name' => '同安区',
                'pcode' => 350200,
            ),
            335 =>
            array (
                'code' => 350213,
                'level' => 3,
                'name' => '翔安区',
                'pcode' => 350200,
            ),
            336 =>
            array (
                'code' => 350300,
                'level' => 2,
                'name' => '莆田市',
                'pcode' => 350000,
            ),
            337 =>
            array (
                'code' => 350301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 350300,
            ),
            338 =>
            array (
                'code' => 350302,
                'level' => 3,
                'name' => '城厢区',
                'pcode' => 350300,
            ),
            339 =>
            array (
                'code' => 350303,
                'level' => 3,
                'name' => '涵江区',
                'pcode' => 350300,
            ),
            340 =>
            array (
                'code' => 350304,
                'level' => 3,
                'name' => '荔城区',
                'pcode' => 350300,
            ),
            341 =>
            array (
                'code' => 350305,
                'level' => 3,
                'name' => '秀屿区',
                'pcode' => 350300,
            ),
            342 =>
            array (
                'code' => 350322,
                'level' => 3,
                'name' => '仙游县',
                'pcode' => 350300,
            ),
            343 =>
            array (
                'code' => 350400,
                'level' => 2,
                'name' => '三明市',
                'pcode' => 350000,
            ),
            344 =>
            array (
                'code' => 350401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 350400,
            ),
            345 =>
            array (
                'code' => 350402,
                'level' => 3,
                'name' => '梅列区',
                'pcode' => 350400,
            ),
            346 =>
            array (
                'code' => 350403,
                'level' => 3,
                'name' => '三元区',
                'pcode' => 350400,
            ),
            347 =>
            array (
                'code' => 350421,
                'level' => 3,
                'name' => '明溪县',
                'pcode' => 350400,
            ),
            348 =>
            array (
                'code' => 350423,
                'level' => 3,
                'name' => '清流县',
                'pcode' => 350400,
            ),
            349 =>
            array (
                'code' => 350424,
                'level' => 3,
                'name' => '宁化县',
                'pcode' => 350400,
            ),
            350 =>
            array (
                'code' => 350425,
                'level' => 3,
                'name' => '大田县',
                'pcode' => 350400,
            ),
            351 =>
            array (
                'code' => 350426,
                'level' => 3,
                'name' => '尤溪县',
                'pcode' => 350400,
            ),
            352 =>
            array (
                'code' => 350427,
                'level' => 3,
                'name' => '沙县',
                'pcode' => 350400,
            ),
            353 =>
            array (
                'code' => 350428,
                'level' => 3,
                'name' => '将乐县',
                'pcode' => 350400,
            ),
            354 =>
            array (
                'code' => 350429,
                'level' => 3,
                'name' => '泰宁县',
                'pcode' => 350400,
            ),
            355 =>
            array (
                'code' => 350430,
                'level' => 3,
                'name' => '建宁县',
                'pcode' => 350400,
            ),
            356 =>
            array (
                'code' => 350481,
                'level' => 3,
                'name' => '永安市',
                'pcode' => 350400,
            ),
            357 =>
            array (
                'code' => 350500,
                'level' => 2,
                'name' => '泉州市',
                'pcode' => 350000,
            ),
            358 =>
            array (
                'code' => 350501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 350500,
            ),
            359 =>
            array (
                'code' => 350502,
                'level' => 3,
                'name' => '鲤城区',
                'pcode' => 350500,
            ),
            360 =>
            array (
                'code' => 350503,
                'level' => 3,
                'name' => '丰泽区',
                'pcode' => 350500,
            ),
            361 =>
            array (
                'code' => 350504,
                'level' => 3,
                'name' => '洛江区',
                'pcode' => 350500,
            ),
            362 =>
            array (
                'code' => 350505,
                'level' => 3,
                'name' => '泉港区',
                'pcode' => 350500,
            ),
            363 =>
            array (
                'code' => 350521,
                'level' => 3,
                'name' => '惠安县',
                'pcode' => 350500,
            ),
            364 =>
            array (
                'code' => 350524,
                'level' => 3,
                'name' => '安溪县',
                'pcode' => 350500,
            ),
            365 =>
            array (
                'code' => 350525,
                'level' => 3,
                'name' => '永春县',
                'pcode' => 350500,
            ),
            366 =>
            array (
                'code' => 350526,
                'level' => 3,
                'name' => '德化县',
                'pcode' => 350500,
            ),
            367 =>
            array (
                'code' => 350527,
                'level' => 3,
                'name' => '金门县',
                'pcode' => 350500,
            ),
            368 =>
            array (
                'code' => 350581,
                'level' => 3,
                'name' => '石狮市',
                'pcode' => 350500,
            ),
            369 =>
            array (
                'code' => 350582,
                'level' => 3,
                'name' => '晋江市',
                'pcode' => 350500,
            ),
            370 =>
            array (
                'code' => 350583,
                'level' => 3,
                'name' => '南安市',
                'pcode' => 350500,
            ),
            371 =>
            array (
                'code' => 350600,
                'level' => 2,
                'name' => '漳州市',
                'pcode' => 350000,
            ),
            372 =>
            array (
                'code' => 350601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 350600,
            ),
            373 =>
            array (
                'code' => 350602,
                'level' => 3,
                'name' => '芗城区',
                'pcode' => 350600,
            ),
            374 =>
            array (
                'code' => 350603,
                'level' => 3,
                'name' => '龙文区',
                'pcode' => 350600,
            ),
            375 =>
            array (
                'code' => 350622,
                'level' => 3,
                'name' => '云霄县',
                'pcode' => 350600,
            ),
            376 =>
            array (
                'code' => 350623,
                'level' => 3,
                'name' => '漳浦县',
                'pcode' => 350600,
            ),
            377 =>
            array (
                'code' => 350624,
                'level' => 3,
                'name' => '诏安县',
                'pcode' => 350600,
            ),
            378 =>
            array (
                'code' => 350625,
                'level' => 3,
                'name' => '长泰县',
                'pcode' => 350600,
            ),
            379 =>
            array (
                'code' => 350626,
                'level' => 3,
                'name' => '东山县',
                'pcode' => 350600,
            ),
            380 =>
            array (
                'code' => 350627,
                'level' => 3,
                'name' => '南靖县',
                'pcode' => 350600,
            ),
            381 =>
            array (
                'code' => 350628,
                'level' => 3,
                'name' => '平和县',
                'pcode' => 350600,
            ),
            382 =>
            array (
                'code' => 350629,
                'level' => 3,
                'name' => '华安县',
                'pcode' => 350600,
            ),
            383 =>
            array (
                'code' => 350681,
                'level' => 3,
                'name' => '龙海市',
                'pcode' => 350600,
            ),
            384 =>
            array (
                'code' => 350700,
                'level' => 2,
                'name' => '南平市',
                'pcode' => 350000,
            ),
            385 =>
            array (
                'code' => 350701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 350700,
            ),
            386 =>
            array (
                'code' => 350702,
                'level' => 3,
                'name' => '延平区',
                'pcode' => 350700,
            ),
            387 =>
            array (
                'code' => 350703,
                'level' => 3,
                'name' => '建阳区',
                'pcode' => 350700,
            ),
            388 =>
            array (
                'code' => 350721,
                'level' => 3,
                'name' => '顺昌县',
                'pcode' => 350700,
            ),
            389 =>
            array (
                'code' => 350722,
                'level' => 3,
                'name' => '浦城县',
                'pcode' => 350700,
            ),
            390 =>
            array (
                'code' => 350723,
                'level' => 3,
                'name' => '光泽县',
                'pcode' => 350700,
            ),
            391 =>
            array (
                'code' => 350724,
                'level' => 3,
                'name' => '松溪县',
                'pcode' => 350700,
            ),
            392 =>
            array (
                'code' => 350725,
                'level' => 3,
                'name' => '政和县',
                'pcode' => 350700,
            ),
            393 =>
            array (
                'code' => 350781,
                'level' => 3,
                'name' => '邵武市',
                'pcode' => 350700,
            ),
            394 =>
            array (
                'code' => 350782,
                'level' => 3,
                'name' => '武夷山市',
                'pcode' => 350700,
            ),
            395 =>
            array (
                'code' => 350783,
                'level' => 3,
                'name' => '建瓯市',
                'pcode' => 350700,
            ),
            396 =>
            array (
                'code' => 350800,
                'level' => 2,
                'name' => '龙岩市',
                'pcode' => 350000,
            ),
            397 =>
            array (
                'code' => 350801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 350800,
            ),
            398 =>
            array (
                'code' => 350802,
                'level' => 3,
                'name' => '新罗区',
                'pcode' => 350800,
            ),
            399 =>
            array (
                'code' => 350803,
                'level' => 3,
                'name' => '永定区',
                'pcode' => 350800,
            ),
            400 =>
            array (
                'code' => 350821,
                'level' => 3,
                'name' => '长汀县',
                'pcode' => 350800,
            ),
            401 =>
            array (
                'code' => 350823,
                'level' => 3,
                'name' => '上杭县',
                'pcode' => 350800,
            ),
            402 =>
            array (
                'code' => 350824,
                'level' => 3,
                'name' => '武平县',
                'pcode' => 350800,
            ),
            403 =>
            array (
                'code' => 350825,
                'level' => 3,
                'name' => '连城县',
                'pcode' => 350800,
            ),
            404 =>
            array (
                'code' => 350881,
                'level' => 3,
                'name' => '漳平市',
                'pcode' => 350800,
            ),
            405 =>
            array (
                'code' => 350900,
                'level' => 2,
                'name' => '宁德市',
                'pcode' => 350000,
            ),
            406 =>
            array (
                'code' => 350901,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 350900,
            ),
            407 =>
            array (
                'code' => 350902,
                'level' => 3,
                'name' => '蕉城区',
                'pcode' => 350900,
            ),
            408 =>
            array (
                'code' => 350921,
                'level' => 3,
                'name' => '霞浦县',
                'pcode' => 350900,
            ),
            409 =>
            array (
                'code' => 350922,
                'level' => 3,
                'name' => '古田县',
                'pcode' => 350900,
            ),
            410 =>
            array (
                'code' => 350923,
                'level' => 3,
                'name' => '屏南县',
                'pcode' => 350900,
            ),
            411 =>
            array (
                'code' => 350924,
                'level' => 3,
                'name' => '寿宁县',
                'pcode' => 350900,
            ),
            412 =>
            array (
                'code' => 350925,
                'level' => 3,
                'name' => '周宁县',
                'pcode' => 350900,
            ),
            413 =>
            array (
                'code' => 350926,
                'level' => 3,
                'name' => '柘荣县',
                'pcode' => 350900,
            ),
            414 =>
            array (
                'code' => 350981,
                'level' => 3,
                'name' => '福安市',
                'pcode' => 350900,
            ),
            415 =>
            array (
                'code' => 350982,
                'level' => 3,
                'name' => '福鼎市',
                'pcode' => 350900,
            ),
            416 =>
            array (
                'code' => 360000,
                'level' => 1,
                'name' => '江西省',
                'pcode' => 0,
            ),
            417 =>
            array (
                'code' => 360100,
                'level' => 2,
                'name' => '南昌市',
                'pcode' => 360000,
            ),
            418 =>
            array (
                'code' => 360101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 360100,
            ),
            419 =>
            array (
                'code' => 360102,
                'level' => 3,
                'name' => '东湖区',
                'pcode' => 360100,
            ),
            420 =>
            array (
                'code' => 360103,
                'level' => 3,
                'name' => '西湖区',
                'pcode' => 360100,
            ),
            421 =>
            array (
                'code' => 360104,
                'level' => 3,
                'name' => '青云谱区',
                'pcode' => 360100,
            ),
            422 =>
            array (
                'code' => 360111,
                'level' => 3,
                'name' => '青山湖区',
                'pcode' => 360100,
            ),
            423 =>
            array (
                'code' => 360112,
                'level' => 3,
                'name' => '新建区',
                'pcode' => 360100,
            ),
            424 =>
            array (
                'code' => 360113,
                'level' => 3,
                'name' => '红谷滩区',
                'pcode' => 360100,
            ),
            425 =>
            array (
                'code' => 360121,
                'level' => 3,
                'name' => '南昌县',
                'pcode' => 360100,
            ),
            426 =>
            array (
                'code' => 360123,
                'level' => 3,
                'name' => '安义县',
                'pcode' => 360100,
            ),
            427 =>
            array (
                'code' => 360124,
                'level' => 3,
                'name' => '进贤县',
                'pcode' => 360100,
            ),
            428 =>
            array (
                'code' => 360200,
                'level' => 2,
                'name' => '景德镇市',
                'pcode' => 360000,
            ),
            429 =>
            array (
                'code' => 360201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 360200,
            ),
            430 =>
            array (
                'code' => 360202,
                'level' => 3,
                'name' => '昌江区',
                'pcode' => 360200,
            ),
            431 =>
            array (
                'code' => 360203,
                'level' => 3,
                'name' => '珠山区',
                'pcode' => 360200,
            ),
            432 =>
            array (
                'code' => 360222,
                'level' => 3,
                'name' => '浮梁县',
                'pcode' => 360200,
            ),
            433 =>
            array (
                'code' => 360281,
                'level' => 3,
                'name' => '乐平市',
                'pcode' => 360200,
            ),
            434 =>
            array (
                'code' => 360300,
                'level' => 2,
                'name' => '萍乡市',
                'pcode' => 360000,
            ),
            435 =>
            array (
                'code' => 360301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 360300,
            ),
            436 =>
            array (
                'code' => 360302,
                'level' => 3,
                'name' => '安源区',
                'pcode' => 360300,
            ),
            437 =>
            array (
                'code' => 360313,
                'level' => 3,
                'name' => '湘东区',
                'pcode' => 360300,
            ),
            438 =>
            array (
                'code' => 360321,
                'level' => 3,
                'name' => '莲花县',
                'pcode' => 360300,
            ),
            439 =>
            array (
                'code' => 360322,
                'level' => 3,
                'name' => '上栗县',
                'pcode' => 360300,
            ),
            440 =>
            array (
                'code' => 360323,
                'level' => 3,
                'name' => '芦溪县',
                'pcode' => 360300,
            ),
            441 =>
            array (
                'code' => 360400,
                'level' => 2,
                'name' => '九江市',
                'pcode' => 360000,
            ),
            442 =>
            array (
                'code' => 360401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 360400,
            ),
            443 =>
            array (
                'code' => 360402,
                'level' => 3,
                'name' => '濂溪区',
                'pcode' => 360400,
            ),
            444 =>
            array (
                'code' => 360403,
                'level' => 3,
                'name' => '浔阳区',
                'pcode' => 360400,
            ),
            445 =>
            array (
                'code' => 360404,
                'level' => 3,
                'name' => '柴桑区',
                'pcode' => 360400,
            ),
            446 =>
            array (
                'code' => 360423,
                'level' => 3,
                'name' => '武宁县',
                'pcode' => 360400,
            ),
            447 =>
            array (
                'code' => 360424,
                'level' => 3,
                'name' => '修水县',
                'pcode' => 360400,
            ),
            448 =>
            array (
                'code' => 360425,
                'level' => 3,
                'name' => '永修县',
                'pcode' => 360400,
            ),
            449 =>
            array (
                'code' => 360426,
                'level' => 3,
                'name' => '德安县',
                'pcode' => 360400,
            ),
            450 =>
            array (
                'code' => 360428,
                'level' => 3,
                'name' => '都昌县',
                'pcode' => 360400,
            ),
            451 =>
            array (
                'code' => 360429,
                'level' => 3,
                'name' => '湖口县',
                'pcode' => 360400,
            ),
            452 =>
            array (
                'code' => 360430,
                'level' => 3,
                'name' => '彭泽县',
                'pcode' => 360400,
            ),
            453 =>
            array (
                'code' => 360481,
                'level' => 3,
                'name' => '瑞昌市',
                'pcode' => 360400,
            ),
            454 =>
            array (
                'code' => 360482,
                'level' => 3,
                'name' => '共青城市',
                'pcode' => 360400,
            ),
            455 =>
            array (
                'code' => 360483,
                'level' => 3,
                'name' => '庐山市',
                'pcode' => 360400,
            ),
            456 =>
            array (
                'code' => 360500,
                'level' => 2,
                'name' => '新余市',
                'pcode' => 360000,
            ),
            457 =>
            array (
                'code' => 360501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 360500,
            ),
            458 =>
            array (
                'code' => 360502,
                'level' => 3,
                'name' => '渝水区',
                'pcode' => 360500,
            ),
            459 =>
            array (
                'code' => 360521,
                'level' => 3,
                'name' => '分宜县',
                'pcode' => 360500,
            ),
            460 =>
            array (
                'code' => 360600,
                'level' => 2,
                'name' => '鹰潭市',
                'pcode' => 360000,
            ),
            461 =>
            array (
                'code' => 360601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 360600,
            ),
            462 =>
            array (
                'code' => 360602,
                'level' => 3,
                'name' => '月湖区',
                'pcode' => 360600,
            ),
            463 =>
            array (
                'code' => 360603,
                'level' => 3,
                'name' => '余江区',
                'pcode' => 360600,
            ),
            464 =>
            array (
                'code' => 360681,
                'level' => 3,
                'name' => '贵溪市',
                'pcode' => 360600,
            ),
            465 =>
            array (
                'code' => 360700,
                'level' => 2,
                'name' => '赣州市',
                'pcode' => 360000,
            ),
            466 =>
            array (
                'code' => 360701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 360700,
            ),
            467 =>
            array (
                'code' => 360702,
                'level' => 3,
                'name' => '章贡区',
                'pcode' => 360700,
            ),
            468 =>
            array (
                'code' => 360703,
                'level' => 3,
                'name' => '南康区',
                'pcode' => 360700,
            ),
            469 =>
            array (
                'code' => 360704,
                'level' => 3,
                'name' => '赣县区',
                'pcode' => 360700,
            ),
            470 =>
            array (
                'code' => 360722,
                'level' => 3,
                'name' => '信丰县',
                'pcode' => 360700,
            ),
            471 =>
            array (
                'code' => 360723,
                'level' => 3,
                'name' => '大余县',
                'pcode' => 360700,
            ),
            472 =>
            array (
                'code' => 360724,
                'level' => 3,
                'name' => '上犹县',
                'pcode' => 360700,
            ),
            473 =>
            array (
                'code' => 360725,
                'level' => 3,
                'name' => '崇义县',
                'pcode' => 360700,
            ),
            474 =>
            array (
                'code' => 360726,
                'level' => 3,
                'name' => '安远县',
                'pcode' => 360700,
            ),
            475 =>
            array (
                'code' => 360728,
                'level' => 3,
                'name' => '定南县',
                'pcode' => 360700,
            ),
            476 =>
            array (
                'code' => 360729,
                'level' => 3,
                'name' => '全南县',
                'pcode' => 360700,
            ),
            477 =>
            array (
                'code' => 360730,
                'level' => 3,
                'name' => '宁都县',
                'pcode' => 360700,
            ),
            478 =>
            array (
                'code' => 360731,
                'level' => 3,
                'name' => '于都县',
                'pcode' => 360700,
            ),
            479 =>
            array (
                'code' => 360732,
                'level' => 3,
                'name' => '兴国县',
                'pcode' => 360700,
            ),
            480 =>
            array (
                'code' => 360733,
                'level' => 3,
                'name' => '会昌县',
                'pcode' => 360700,
            ),
            481 =>
            array (
                'code' => 360734,
                'level' => 3,
                'name' => '寻乌县',
                'pcode' => 360700,
            ),
            482 =>
            array (
                'code' => 360735,
                'level' => 3,
                'name' => '石城县',
                'pcode' => 360700,
            ),
            483 =>
            array (
                'code' => 360781,
                'level' => 3,
                'name' => '瑞金市',
                'pcode' => 360700,
            ),
            484 =>
            array (
                'code' => 360783,
                'level' => 3,
                'name' => '龙南市',
                'pcode' => 360700,
            ),
            485 =>
            array (
                'code' => 360800,
                'level' => 2,
                'name' => '吉安市',
                'pcode' => 360000,
            ),
            486 =>
            array (
                'code' => 360801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 360800,
            ),
            487 =>
            array (
                'code' => 360802,
                'level' => 3,
                'name' => '吉州区',
                'pcode' => 360800,
            ),
            488 =>
            array (
                'code' => 360803,
                'level' => 3,
                'name' => '青原区',
                'pcode' => 360800,
            ),
            489 =>
            array (
                'code' => 360821,
                'level' => 3,
                'name' => '吉安县',
                'pcode' => 360800,
            ),
            490 =>
            array (
                'code' => 360822,
                'level' => 3,
                'name' => '吉水县',
                'pcode' => 360800,
            ),
            491 =>
            array (
                'code' => 360823,
                'level' => 3,
                'name' => '峡江县',
                'pcode' => 360800,
            ),
            492 =>
            array (
                'code' => 360824,
                'level' => 3,
                'name' => '新干县',
                'pcode' => 360800,
            ),
            493 =>
            array (
                'code' => 360825,
                'level' => 3,
                'name' => '永丰县',
                'pcode' => 360800,
            ),
            494 =>
            array (
                'code' => 360826,
                'level' => 3,
                'name' => '泰和县',
                'pcode' => 360800,
            ),
            495 =>
            array (
                'code' => 360827,
                'level' => 3,
                'name' => '遂川县',
                'pcode' => 360800,
            ),
            496 =>
            array (
                'code' => 360828,
                'level' => 3,
                'name' => '万安县',
                'pcode' => 360800,
            ),
            497 =>
            array (
                'code' => 360829,
                'level' => 3,
                'name' => '安福县',
                'pcode' => 360800,
            ),
            498 =>
            array (
                'code' => 360830,
                'level' => 3,
                'name' => '永新县',
                'pcode' => 360800,
            ),
            499 =>
            array (
                'code' => 360881,
                'level' => 3,
                'name' => '井冈山市',
                'pcode' => 360800,
            ),
        ));
        \DB::table('china_areas')->insert(array (
            0 =>
            array (
                'code' => 360900,
                'level' => 2,
                'name' => '宜春市',
                'pcode' => 360000,
            ),
            1 =>
            array (
                'code' => 360901,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 360900,
            ),
            2 =>
            array (
                'code' => 360902,
                'level' => 3,
                'name' => '袁州区',
                'pcode' => 360900,
            ),
            3 =>
            array (
                'code' => 360921,
                'level' => 3,
                'name' => '奉新县',
                'pcode' => 360900,
            ),
            4 =>
            array (
                'code' => 360922,
                'level' => 3,
                'name' => '万载县',
                'pcode' => 360900,
            ),
            5 =>
            array (
                'code' => 360923,
                'level' => 3,
                'name' => '上高县',
                'pcode' => 360900,
            ),
            6 =>
            array (
                'code' => 360924,
                'level' => 3,
                'name' => '宜丰县',
                'pcode' => 360900,
            ),
            7 =>
            array (
                'code' => 360925,
                'level' => 3,
                'name' => '靖安县',
                'pcode' => 360900,
            ),
            8 =>
            array (
                'code' => 360926,
                'level' => 3,
                'name' => '铜鼓县',
                'pcode' => 360900,
            ),
            9 =>
            array (
                'code' => 360981,
                'level' => 3,
                'name' => '丰城市',
                'pcode' => 360900,
            ),
            10 =>
            array (
                'code' => 360982,
                'level' => 3,
                'name' => '樟树市',
                'pcode' => 360900,
            ),
            11 =>
            array (
                'code' => 360983,
                'level' => 3,
                'name' => '高安市',
                'pcode' => 360900,
            ),
            12 =>
            array (
                'code' => 361000,
                'level' => 2,
                'name' => '抚州市',
                'pcode' => 360000,
            ),
            13 =>
            array (
                'code' => 361001,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 361000,
            ),
            14 =>
            array (
                'code' => 361002,
                'level' => 3,
                'name' => '临川区',
                'pcode' => 361000,
            ),
            15 =>
            array (
                'code' => 361003,
                'level' => 3,
                'name' => '东乡区',
                'pcode' => 361000,
            ),
            16 =>
            array (
                'code' => 361021,
                'level' => 3,
                'name' => '南城县',
                'pcode' => 361000,
            ),
            17 =>
            array (
                'code' => 361022,
                'level' => 3,
                'name' => '黎川县',
                'pcode' => 361000,
            ),
            18 =>
            array (
                'code' => 361023,
                'level' => 3,
                'name' => '南丰县',
                'pcode' => 361000,
            ),
            19 =>
            array (
                'code' => 361024,
                'level' => 3,
                'name' => '崇仁县',
                'pcode' => 361000,
            ),
            20 =>
            array (
                'code' => 361025,
                'level' => 3,
                'name' => '乐安县',
                'pcode' => 361000,
            ),
            21 =>
            array (
                'code' => 361026,
                'level' => 3,
                'name' => '宜黄县',
                'pcode' => 361000,
            ),
            22 =>
            array (
                'code' => 361027,
                'level' => 3,
                'name' => '金溪县',
                'pcode' => 361000,
            ),
            23 =>
            array (
                'code' => 361028,
                'level' => 3,
                'name' => '资溪县',
                'pcode' => 361000,
            ),
            24 =>
            array (
                'code' => 361030,
                'level' => 3,
                'name' => '广昌县',
                'pcode' => 361000,
            ),
            25 =>
            array (
                'code' => 361100,
                'level' => 2,
                'name' => '上饶市',
                'pcode' => 360000,
            ),
            26 =>
            array (
                'code' => 361101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 361100,
            ),
            27 =>
            array (
                'code' => 361102,
                'level' => 3,
                'name' => '信州区',
                'pcode' => 361100,
            ),
            28 =>
            array (
                'code' => 361103,
                'level' => 3,
                'name' => '广丰区',
                'pcode' => 361100,
            ),
            29 =>
            array (
                'code' => 361104,
                'level' => 3,
                'name' => '广信区',
                'pcode' => 361100,
            ),
            30 =>
            array (
                'code' => 361123,
                'level' => 3,
                'name' => '玉山县',
                'pcode' => 361100,
            ),
            31 =>
            array (
                'code' => 361124,
                'level' => 3,
                'name' => '铅山县',
                'pcode' => 361100,
            ),
            32 =>
            array (
                'code' => 361125,
                'level' => 3,
                'name' => '横峰县',
                'pcode' => 361100,
            ),
            33 =>
            array (
                'code' => 361126,
                'level' => 3,
                'name' => '弋阳县',
                'pcode' => 361100,
            ),
            34 =>
            array (
                'code' => 361127,
                'level' => 3,
                'name' => '余干县',
                'pcode' => 361100,
            ),
            35 =>
            array (
                'code' => 361128,
                'level' => 3,
                'name' => '鄱阳县',
                'pcode' => 361100,
            ),
            36 =>
            array (
                'code' => 361129,
                'level' => 3,
                'name' => '万年县',
                'pcode' => 361100,
            ),
            37 =>
            array (
                'code' => 361130,
                'level' => 3,
                'name' => '婺源县',
                'pcode' => 361100,
            ),
            38 =>
            array (
                'code' => 361181,
                'level' => 3,
                'name' => '德兴市',
                'pcode' => 361100,
            ),
            39 =>
            array (
                'code' => 370000,
                'level' => 1,
                'name' => '山东省',
                'pcode' => 0,
            ),
            40 =>
            array (
                'code' => 370100,
                'level' => 2,
                'name' => '济南市',
                'pcode' => 370000,
            ),
            41 =>
            array (
                'code' => 370101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 370100,
            ),
            42 =>
            array (
                'code' => 370102,
                'level' => 3,
                'name' => '历下区',
                'pcode' => 370100,
            ),
            43 =>
            array (
                'code' => 370103,
                'level' => 3,
                'name' => '市中区',
                'pcode' => 370100,
            ),
            44 =>
            array (
                'code' => 370104,
                'level' => 3,
                'name' => '槐荫区',
                'pcode' => 370100,
            ),
            45 =>
            array (
                'code' => 370105,
                'level' => 3,
                'name' => '天桥区',
                'pcode' => 370100,
            ),
            46 =>
            array (
                'code' => 370112,
                'level' => 3,
                'name' => '历城区',
                'pcode' => 370100,
            ),
            47 =>
            array (
                'code' => 370113,
                'level' => 3,
                'name' => '长清区',
                'pcode' => 370100,
            ),
            48 =>
            array (
                'code' => 370114,
                'level' => 3,
                'name' => '章丘区',
                'pcode' => 370100,
            ),
            49 =>
            array (
                'code' => 370115,
                'level' => 3,
                'name' => '济阳区',
                'pcode' => 370100,
            ),
            50 =>
            array (
                'code' => 370116,
                'level' => 3,
                'name' => '莱芜区',
                'pcode' => 370100,
            ),
            51 =>
            array (
                'code' => 370117,
                'level' => 3,
                'name' => '钢城区',
                'pcode' => 370100,
            ),
            52 =>
            array (
                'code' => 370124,
                'level' => 3,
                'name' => '平阴县',
                'pcode' => 370100,
            ),
            53 =>
            array (
                'code' => 370126,
                'level' => 3,
                'name' => '商河县',
                'pcode' => 370100,
            ),
            54 =>
            array (
                'code' => 370171,
                'level' => 3,
                'name' => '济南高新技术产业开发区',
                'pcode' => 370100,
            ),
            55 =>
            array (
                'code' => 370200,
                'level' => 2,
                'name' => '青岛市',
                'pcode' => 370000,
            ),
            56 =>
            array (
                'code' => 370201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 370200,
            ),
            57 =>
            array (
                'code' => 370202,
                'level' => 3,
                'name' => '市南区',
                'pcode' => 370200,
            ),
            58 =>
            array (
                'code' => 370203,
                'level' => 3,
                'name' => '市北区',
                'pcode' => 370200,
            ),
            59 =>
            array (
                'code' => 370211,
                'level' => 3,
                'name' => '黄岛区',
                'pcode' => 370200,
            ),
            60 =>
            array (
                'code' => 370212,
                'level' => 3,
                'name' => '崂山区',
                'pcode' => 370200,
            ),
            61 =>
            array (
                'code' => 370213,
                'level' => 3,
                'name' => '李沧区',
                'pcode' => 370200,
            ),
            62 =>
            array (
                'code' => 370214,
                'level' => 3,
                'name' => '城阳区',
                'pcode' => 370200,
            ),
            63 =>
            array (
                'code' => 370215,
                'level' => 3,
                'name' => '即墨区',
                'pcode' => 370200,
            ),
            64 =>
            array (
                'code' => 370271,
                'level' => 3,
                'name' => '青岛高新技术产业开发区',
                'pcode' => 370200,
            ),
            65 =>
            array (
                'code' => 370281,
                'level' => 3,
                'name' => '胶州市',
                'pcode' => 370200,
            ),
            66 =>
            array (
                'code' => 370283,
                'level' => 3,
                'name' => '平度市',
                'pcode' => 370200,
            ),
            67 =>
            array (
                'code' => 370285,
                'level' => 3,
                'name' => '莱西市',
                'pcode' => 370200,
            ),
            68 =>
            array (
                'code' => 370300,
                'level' => 2,
                'name' => '淄博市',
                'pcode' => 370000,
            ),
            69 =>
            array (
                'code' => 370301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 370300,
            ),
            70 =>
            array (
                'code' => 370302,
                'level' => 3,
                'name' => '淄川区',
                'pcode' => 370300,
            ),
            71 =>
            array (
                'code' => 370303,
                'level' => 3,
                'name' => '张店区',
                'pcode' => 370300,
            ),
            72 =>
            array (
                'code' => 370304,
                'level' => 3,
                'name' => '博山区',
                'pcode' => 370300,
            ),
            73 =>
            array (
                'code' => 370305,
                'level' => 3,
                'name' => '临淄区',
                'pcode' => 370300,
            ),
            74 =>
            array (
                'code' => 370306,
                'level' => 3,
                'name' => '周村区',
                'pcode' => 370300,
            ),
            75 =>
            array (
                'code' => 370321,
                'level' => 3,
                'name' => '桓台县',
                'pcode' => 370300,
            ),
            76 =>
            array (
                'code' => 370322,
                'level' => 3,
                'name' => '高青县',
                'pcode' => 370300,
            ),
            77 =>
            array (
                'code' => 370323,
                'level' => 3,
                'name' => '沂源县',
                'pcode' => 370300,
            ),
            78 =>
            array (
                'code' => 370400,
                'level' => 2,
                'name' => '枣庄市',
                'pcode' => 370000,
            ),
            79 =>
            array (
                'code' => 370401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 370400,
            ),
            80 =>
            array (
                'code' => 370402,
                'level' => 3,
                'name' => '市中区',
                'pcode' => 370400,
            ),
            81 =>
            array (
                'code' => 370403,
                'level' => 3,
                'name' => '薛城区',
                'pcode' => 370400,
            ),
            82 =>
            array (
                'code' => 370404,
                'level' => 3,
                'name' => '峄城区',
                'pcode' => 370400,
            ),
            83 =>
            array (
                'code' => 370405,
                'level' => 3,
                'name' => '台儿庄区',
                'pcode' => 370400,
            ),
            84 =>
            array (
                'code' => 370406,
                'level' => 3,
                'name' => '山亭区',
                'pcode' => 370400,
            ),
            85 =>
            array (
                'code' => 370481,
                'level' => 3,
                'name' => '滕州市',
                'pcode' => 370400,
            ),
            86 =>
            array (
                'code' => 370500,
                'level' => 2,
                'name' => '东营市',
                'pcode' => 370000,
            ),
            87 =>
            array (
                'code' => 370501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 370500,
            ),
            88 =>
            array (
                'code' => 370502,
                'level' => 3,
                'name' => '东营区',
                'pcode' => 370500,
            ),
            89 =>
            array (
                'code' => 370503,
                'level' => 3,
                'name' => '河口区',
                'pcode' => 370500,
            ),
            90 =>
            array (
                'code' => 370505,
                'level' => 3,
                'name' => '垦利区',
                'pcode' => 370500,
            ),
            91 =>
            array (
                'code' => 370522,
                'level' => 3,
                'name' => '利津县',
                'pcode' => 370500,
            ),
            92 =>
            array (
                'code' => 370523,
                'level' => 3,
                'name' => '广饶县',
                'pcode' => 370500,
            ),
            93 =>
            array (
                'code' => 370571,
                'level' => 3,
                'name' => '东营经济技术开发区',
                'pcode' => 370500,
            ),
            94 =>
            array (
                'code' => 370572,
                'level' => 3,
                'name' => '东营港经济开发区',
                'pcode' => 370500,
            ),
            95 =>
            array (
                'code' => 370600,
                'level' => 2,
                'name' => '烟台市',
                'pcode' => 370000,
            ),
            96 =>
            array (
                'code' => 370601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 370600,
            ),
            97 =>
            array (
                'code' => 370602,
                'level' => 3,
                'name' => '芝罘区',
                'pcode' => 370600,
            ),
            98 =>
            array (
                'code' => 370611,
                'level' => 3,
                'name' => '福山区',
                'pcode' => 370600,
            ),
            99 =>
            array (
                'code' => 370612,
                'level' => 3,
                'name' => '牟平区',
                'pcode' => 370600,
            ),
            100 =>
            array (
                'code' => 370613,
                'level' => 3,
                'name' => '莱山区',
                'pcode' => 370600,
            ),
            101 =>
            array (
                'code' => 370614,
                'level' => 3,
                'name' => '蓬莱区',
                'pcode' => 370600,
            ),
            102 =>
            array (
                'code' => 370671,
                'level' => 3,
                'name' => '烟台高新技术产业开发区',
                'pcode' => 370600,
            ),
            103 =>
            array (
                'code' => 370672,
                'level' => 3,
                'name' => '烟台经济技术开发区',
                'pcode' => 370600,
            ),
            104 =>
            array (
                'code' => 370681,
                'level' => 3,
                'name' => '龙口市',
                'pcode' => 370600,
            ),
            105 =>
            array (
                'code' => 370682,
                'level' => 3,
                'name' => '莱阳市',
                'pcode' => 370600,
            ),
            106 =>
            array (
                'code' => 370683,
                'level' => 3,
                'name' => '莱州市',
                'pcode' => 370600,
            ),
            107 =>
            array (
                'code' => 370685,
                'level' => 3,
                'name' => '招远市',
                'pcode' => 370600,
            ),
            108 =>
            array (
                'code' => 370686,
                'level' => 3,
                'name' => '栖霞市',
                'pcode' => 370600,
            ),
            109 =>
            array (
                'code' => 370687,
                'level' => 3,
                'name' => '海阳市',
                'pcode' => 370600,
            ),
            110 =>
            array (
                'code' => 370700,
                'level' => 2,
                'name' => '潍坊市',
                'pcode' => 370000,
            ),
            111 =>
            array (
                'code' => 370701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 370700,
            ),
            112 =>
            array (
                'code' => 370702,
                'level' => 3,
                'name' => '潍城区',
                'pcode' => 370700,
            ),
            113 =>
            array (
                'code' => 370703,
                'level' => 3,
                'name' => '寒亭区',
                'pcode' => 370700,
            ),
            114 =>
            array (
                'code' => 370704,
                'level' => 3,
                'name' => '坊子区',
                'pcode' => 370700,
            ),
            115 =>
            array (
                'code' => 370705,
                'level' => 3,
                'name' => '奎文区',
                'pcode' => 370700,
            ),
            116 =>
            array (
                'code' => 370724,
                'level' => 3,
                'name' => '临朐县',
                'pcode' => 370700,
            ),
            117 =>
            array (
                'code' => 370725,
                'level' => 3,
                'name' => '昌乐县',
                'pcode' => 370700,
            ),
            118 =>
            array (
                'code' => 370772,
                'level' => 3,
                'name' => '潍坊滨海经济技术开发区',
                'pcode' => 370700,
            ),
            119 =>
            array (
                'code' => 370781,
                'level' => 3,
                'name' => '青州市',
                'pcode' => 370700,
            ),
            120 =>
            array (
                'code' => 370782,
                'level' => 3,
                'name' => '诸城市',
                'pcode' => 370700,
            ),
            121 =>
            array (
                'code' => 370783,
                'level' => 3,
                'name' => '寿光市',
                'pcode' => 370700,
            ),
            122 =>
            array (
                'code' => 370784,
                'level' => 3,
                'name' => '安丘市',
                'pcode' => 370700,
            ),
            123 =>
            array (
                'code' => 370785,
                'level' => 3,
                'name' => '高密市',
                'pcode' => 370700,
            ),
            124 =>
            array (
                'code' => 370786,
                'level' => 3,
                'name' => '昌邑市',
                'pcode' => 370700,
            ),
            125 =>
            array (
                'code' => 370800,
                'level' => 2,
                'name' => '济宁市',
                'pcode' => 370000,
            ),
            126 =>
            array (
                'code' => 370801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 370800,
            ),
            127 =>
            array (
                'code' => 370811,
                'level' => 3,
                'name' => '任城区',
                'pcode' => 370800,
            ),
            128 =>
            array (
                'code' => 370812,
                'level' => 3,
                'name' => '兖州区',
                'pcode' => 370800,
            ),
            129 =>
            array (
                'code' => 370826,
                'level' => 3,
                'name' => '微山县',
                'pcode' => 370800,
            ),
            130 =>
            array (
                'code' => 370827,
                'level' => 3,
                'name' => '鱼台县',
                'pcode' => 370800,
            ),
            131 =>
            array (
                'code' => 370828,
                'level' => 3,
                'name' => '金乡县',
                'pcode' => 370800,
            ),
            132 =>
            array (
                'code' => 370829,
                'level' => 3,
                'name' => '嘉祥县',
                'pcode' => 370800,
            ),
            133 =>
            array (
                'code' => 370830,
                'level' => 3,
                'name' => '汶上县',
                'pcode' => 370800,
            ),
            134 =>
            array (
                'code' => 370831,
                'level' => 3,
                'name' => '泗水县',
                'pcode' => 370800,
            ),
            135 =>
            array (
                'code' => 370832,
                'level' => 3,
                'name' => '梁山县',
                'pcode' => 370800,
            ),
            136 =>
            array (
                'code' => 370871,
                'level' => 3,
                'name' => '济宁高新技术产业开发区',
                'pcode' => 370800,
            ),
            137 =>
            array (
                'code' => 370881,
                'level' => 3,
                'name' => '曲阜市',
                'pcode' => 370800,
            ),
            138 =>
            array (
                'code' => 370883,
                'level' => 3,
                'name' => '邹城市',
                'pcode' => 370800,
            ),
            139 =>
            array (
                'code' => 370900,
                'level' => 2,
                'name' => '泰安市',
                'pcode' => 370000,
            ),
            140 =>
            array (
                'code' => 370901,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 370900,
            ),
            141 =>
            array (
                'code' => 370902,
                'level' => 3,
                'name' => '泰山区',
                'pcode' => 370900,
            ),
            142 =>
            array (
                'code' => 370911,
                'level' => 3,
                'name' => '岱岳区',
                'pcode' => 370900,
            ),
            143 =>
            array (
                'code' => 370921,
                'level' => 3,
                'name' => '宁阳县',
                'pcode' => 370900,
            ),
            144 =>
            array (
                'code' => 370923,
                'level' => 3,
                'name' => '东平县',
                'pcode' => 370900,
            ),
            145 =>
            array (
                'code' => 370982,
                'level' => 3,
                'name' => '新泰市',
                'pcode' => 370900,
            ),
            146 =>
            array (
                'code' => 370983,
                'level' => 3,
                'name' => '肥城市',
                'pcode' => 370900,
            ),
            147 =>
            array (
                'code' => 371000,
                'level' => 2,
                'name' => '威海市',
                'pcode' => 370000,
            ),
            148 =>
            array (
                'code' => 371001,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 371000,
            ),
            149 =>
            array (
                'code' => 371002,
                'level' => 3,
                'name' => '环翠区',
                'pcode' => 371000,
            ),
            150 =>
            array (
                'code' => 371003,
                'level' => 3,
                'name' => '文登区',
                'pcode' => 371000,
            ),
            151 =>
            array (
                'code' => 371071,
                'level' => 3,
                'name' => '威海火炬高技术产业开发区',
                'pcode' => 371000,
            ),
            152 =>
            array (
                'code' => 371072,
                'level' => 3,
                'name' => '威海经济技术开发区',
                'pcode' => 371000,
            ),
            153 =>
            array (
                'code' => 371073,
                'level' => 3,
                'name' => '威海临港经济技术开发区',
                'pcode' => 371000,
            ),
            154 =>
            array (
                'code' => 371082,
                'level' => 3,
                'name' => '荣成市',
                'pcode' => 371000,
            ),
            155 =>
            array (
                'code' => 371083,
                'level' => 3,
                'name' => '乳山市',
                'pcode' => 371000,
            ),
            156 =>
            array (
                'code' => 371100,
                'level' => 2,
                'name' => '日照市',
                'pcode' => 370000,
            ),
            157 =>
            array (
                'code' => 371101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 371100,
            ),
            158 =>
            array (
                'code' => 371102,
                'level' => 3,
                'name' => '东港区',
                'pcode' => 371100,
            ),
            159 =>
            array (
                'code' => 371103,
                'level' => 3,
                'name' => '岚山区',
                'pcode' => 371100,
            ),
            160 =>
            array (
                'code' => 371121,
                'level' => 3,
                'name' => '五莲县',
                'pcode' => 371100,
            ),
            161 =>
            array (
                'code' => 371122,
                'level' => 3,
                'name' => '莒县',
                'pcode' => 371100,
            ),
            162 =>
            array (
                'code' => 371171,
                'level' => 3,
                'name' => '日照经济技术开发区',
                'pcode' => 371100,
            ),
            163 =>
            array (
                'code' => 371300,
                'level' => 2,
                'name' => '临沂市',
                'pcode' => 370000,
            ),
            164 =>
            array (
                'code' => 371301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 371300,
            ),
            165 =>
            array (
                'code' => 371302,
                'level' => 3,
                'name' => '兰山区',
                'pcode' => 371300,
            ),
            166 =>
            array (
                'code' => 371311,
                'level' => 3,
                'name' => '罗庄区',
                'pcode' => 371300,
            ),
            167 =>
            array (
                'code' => 371312,
                'level' => 3,
                'name' => '河东区',
                'pcode' => 371300,
            ),
            168 =>
            array (
                'code' => 371321,
                'level' => 3,
                'name' => '沂南县',
                'pcode' => 371300,
            ),
            169 =>
            array (
                'code' => 371322,
                'level' => 3,
                'name' => '郯城县',
                'pcode' => 371300,
            ),
            170 =>
            array (
                'code' => 371323,
                'level' => 3,
                'name' => '沂水县',
                'pcode' => 371300,
            ),
            171 =>
            array (
                'code' => 371324,
                'level' => 3,
                'name' => '兰陵县',
                'pcode' => 371300,
            ),
            172 =>
            array (
                'code' => 371325,
                'level' => 3,
                'name' => '费县',
                'pcode' => 371300,
            ),
            173 =>
            array (
                'code' => 371326,
                'level' => 3,
                'name' => '平邑县',
                'pcode' => 371300,
            ),
            174 =>
            array (
                'code' => 371327,
                'level' => 3,
                'name' => '莒南县',
                'pcode' => 371300,
            ),
            175 =>
            array (
                'code' => 371328,
                'level' => 3,
                'name' => '蒙阴县',
                'pcode' => 371300,
            ),
            176 =>
            array (
                'code' => 371329,
                'level' => 3,
                'name' => '临沭县',
                'pcode' => 371300,
            ),
            177 =>
            array (
                'code' => 371371,
                'level' => 3,
                'name' => '临沂高新技术产业开发区',
                'pcode' => 371300,
            ),
            178 =>
            array (
                'code' => 371400,
                'level' => 2,
                'name' => '德州市',
                'pcode' => 370000,
            ),
            179 =>
            array (
                'code' => 371401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 371400,
            ),
            180 =>
            array (
                'code' => 371402,
                'level' => 3,
                'name' => '德城区',
                'pcode' => 371400,
            ),
            181 =>
            array (
                'code' => 371403,
                'level' => 3,
                'name' => '陵城区',
                'pcode' => 371400,
            ),
            182 =>
            array (
                'code' => 371422,
                'level' => 3,
                'name' => '宁津县',
                'pcode' => 371400,
            ),
            183 =>
            array (
                'code' => 371423,
                'level' => 3,
                'name' => '庆云县',
                'pcode' => 371400,
            ),
            184 =>
            array (
                'code' => 371424,
                'level' => 3,
                'name' => '临邑县',
                'pcode' => 371400,
            ),
            185 =>
            array (
                'code' => 371425,
                'level' => 3,
                'name' => '齐河县',
                'pcode' => 371400,
            ),
            186 =>
            array (
                'code' => 371426,
                'level' => 3,
                'name' => '平原县',
                'pcode' => 371400,
            ),
            187 =>
            array (
                'code' => 371427,
                'level' => 3,
                'name' => '夏津县',
                'pcode' => 371400,
            ),
            188 =>
            array (
                'code' => 371428,
                'level' => 3,
                'name' => '武城县',
                'pcode' => 371400,
            ),
            189 =>
            array (
                'code' => 371471,
                'level' => 3,
                'name' => '德州经济技术开发区',
                'pcode' => 371400,
            ),
            190 =>
            array (
                'code' => 371472,
                'level' => 3,
                'name' => '德州运河经济开发区',
                'pcode' => 371400,
            ),
            191 =>
            array (
                'code' => 371481,
                'level' => 3,
                'name' => '乐陵市',
                'pcode' => 371400,
            ),
            192 =>
            array (
                'code' => 371482,
                'level' => 3,
                'name' => '禹城市',
                'pcode' => 371400,
            ),
            193 =>
            array (
                'code' => 371500,
                'level' => 2,
                'name' => '聊城市',
                'pcode' => 370000,
            ),
            194 =>
            array (
                'code' => 371501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 371500,
            ),
            195 =>
            array (
                'code' => 371502,
                'level' => 3,
                'name' => '东昌府区',
                'pcode' => 371500,
            ),
            196 =>
            array (
                'code' => 371503,
                'level' => 3,
                'name' => '茌平区',
                'pcode' => 371500,
            ),
            197 =>
            array (
                'code' => 371521,
                'level' => 3,
                'name' => '阳谷县',
                'pcode' => 371500,
            ),
            198 =>
            array (
                'code' => 371522,
                'level' => 3,
                'name' => '莘县',
                'pcode' => 371500,
            ),
            199 =>
            array (
                'code' => 371524,
                'level' => 3,
                'name' => '东阿县',
                'pcode' => 371500,
            ),
            200 =>
            array (
                'code' => 371525,
                'level' => 3,
                'name' => '冠县',
                'pcode' => 371500,
            ),
            201 =>
            array (
                'code' => 371526,
                'level' => 3,
                'name' => '高唐县',
                'pcode' => 371500,
            ),
            202 =>
            array (
                'code' => 371581,
                'level' => 3,
                'name' => '临清市',
                'pcode' => 371500,
            ),
            203 =>
            array (
                'code' => 371600,
                'level' => 2,
                'name' => '滨州市',
                'pcode' => 370000,
            ),
            204 =>
            array (
                'code' => 371601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 371600,
            ),
            205 =>
            array (
                'code' => 371602,
                'level' => 3,
                'name' => '滨城区',
                'pcode' => 371600,
            ),
            206 =>
            array (
                'code' => 371603,
                'level' => 3,
                'name' => '沾化区',
                'pcode' => 371600,
            ),
            207 =>
            array (
                'code' => 371621,
                'level' => 3,
                'name' => '惠民县',
                'pcode' => 371600,
            ),
            208 =>
            array (
                'code' => 371622,
                'level' => 3,
                'name' => '阳信县',
                'pcode' => 371600,
            ),
            209 =>
            array (
                'code' => 371623,
                'level' => 3,
                'name' => '无棣县',
                'pcode' => 371600,
            ),
            210 =>
            array (
                'code' => 371625,
                'level' => 3,
                'name' => '博兴县',
                'pcode' => 371600,
            ),
            211 =>
            array (
                'code' => 371681,
                'level' => 3,
                'name' => '邹平市',
                'pcode' => 371600,
            ),
            212 =>
            array (
                'code' => 371700,
                'level' => 2,
                'name' => '菏泽市',
                'pcode' => 370000,
            ),
            213 =>
            array (
                'code' => 371701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 371700,
            ),
            214 =>
            array (
                'code' => 371702,
                'level' => 3,
                'name' => '牡丹区',
                'pcode' => 371700,
            ),
            215 =>
            array (
                'code' => 371703,
                'level' => 3,
                'name' => '定陶区',
                'pcode' => 371700,
            ),
            216 =>
            array (
                'code' => 371721,
                'level' => 3,
                'name' => '曹县',
                'pcode' => 371700,
            ),
            217 =>
            array (
                'code' => 371722,
                'level' => 3,
                'name' => '单县',
                'pcode' => 371700,
            ),
            218 =>
            array (
                'code' => 371723,
                'level' => 3,
                'name' => '成武县',
                'pcode' => 371700,
            ),
            219 =>
            array (
                'code' => 371724,
                'level' => 3,
                'name' => '巨野县',
                'pcode' => 371700,
            ),
            220 =>
            array (
                'code' => 371725,
                'level' => 3,
                'name' => '郓城县',
                'pcode' => 371700,
            ),
            221 =>
            array (
                'code' => 371726,
                'level' => 3,
                'name' => '鄄城县',
                'pcode' => 371700,
            ),
            222 =>
            array (
                'code' => 371728,
                'level' => 3,
                'name' => '东明县',
                'pcode' => 371700,
            ),
            223 =>
            array (
                'code' => 371771,
                'level' => 3,
                'name' => '菏泽经济技术开发区',
                'pcode' => 371700,
            ),
            224 =>
            array (
                'code' => 371772,
                'level' => 3,
                'name' => '菏泽高新技术开发区',
                'pcode' => 371700,
            ),
            225 =>
            array (
                'code' => 410000,
                'level' => 1,
                'name' => '河南省',
                'pcode' => 0,
            ),
            226 =>
            array (
                'code' => 410100,
                'level' => 2,
                'name' => '郑州市',
                'pcode' => 410000,
            ),
            227 =>
            array (
                'code' => 410101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 410100,
            ),
            228 =>
            array (
                'code' => 410102,
                'level' => 3,
                'name' => '中原区',
                'pcode' => 410100,
            ),
            229 =>
            array (
                'code' => 410103,
                'level' => 3,
                'name' => '二七区',
                'pcode' => 410100,
            ),
            230 =>
            array (
                'code' => 410104,
                'level' => 3,
                'name' => '管城回族区',
                'pcode' => 410100,
            ),
            231 =>
            array (
                'code' => 410105,
                'level' => 3,
                'name' => '金水区',
                'pcode' => 410100,
            ),
            232 =>
            array (
                'code' => 410106,
                'level' => 3,
                'name' => '上街区',
                'pcode' => 410100,
            ),
            233 =>
            array (
                'code' => 410108,
                'level' => 3,
                'name' => '惠济区',
                'pcode' => 410100,
            ),
            234 =>
            array (
                'code' => 410122,
                'level' => 3,
                'name' => '中牟县',
                'pcode' => 410100,
            ),
            235 =>
            array (
                'code' => 410171,
                'level' => 3,
                'name' => '郑州经济技术开发区',
                'pcode' => 410100,
            ),
            236 =>
            array (
                'code' => 410172,
                'level' => 3,
                'name' => '郑州高新技术产业开发区',
                'pcode' => 410100,
            ),
            237 =>
            array (
                'code' => 410173,
                'level' => 3,
                'name' => '郑州航空港经济综合实验区',
                'pcode' => 410100,
            ),
            238 =>
            array (
                'code' => 410181,
                'level' => 3,
                'name' => '巩义市',
                'pcode' => 410100,
            ),
            239 =>
            array (
                'code' => 410182,
                'level' => 3,
                'name' => '荥阳市',
                'pcode' => 410100,
            ),
            240 =>
            array (
                'code' => 410183,
                'level' => 3,
                'name' => '新密市',
                'pcode' => 410100,
            ),
            241 =>
            array (
                'code' => 410184,
                'level' => 3,
                'name' => '新郑市',
                'pcode' => 410100,
            ),
            242 =>
            array (
                'code' => 410185,
                'level' => 3,
                'name' => '登封市',
                'pcode' => 410100,
            ),
            243 =>
            array (
                'code' => 410200,
                'level' => 2,
                'name' => '开封市',
                'pcode' => 410000,
            ),
            244 =>
            array (
                'code' => 410201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 410200,
            ),
            245 =>
            array (
                'code' => 410202,
                'level' => 3,
                'name' => '龙亭区',
                'pcode' => 410200,
            ),
            246 =>
            array (
                'code' => 410203,
                'level' => 3,
                'name' => '顺河回族区',
                'pcode' => 410200,
            ),
            247 =>
            array (
                'code' => 410204,
                'level' => 3,
                'name' => '鼓楼区',
                'pcode' => 410200,
            ),
            248 =>
            array (
                'code' => 410205,
                'level' => 3,
                'name' => '禹王台区',
                'pcode' => 410200,
            ),
            249 =>
            array (
                'code' => 410212,
                'level' => 3,
                'name' => '祥符区',
                'pcode' => 410200,
            ),
            250 =>
            array (
                'code' => 410221,
                'level' => 3,
                'name' => '杞县',
                'pcode' => 410200,
            ),
            251 =>
            array (
                'code' => 410222,
                'level' => 3,
                'name' => '通许县',
                'pcode' => 410200,
            ),
            252 =>
            array (
                'code' => 410223,
                'level' => 3,
                'name' => '尉氏县',
                'pcode' => 410200,
            ),
            253 =>
            array (
                'code' => 410225,
                'level' => 3,
                'name' => '兰考县',
                'pcode' => 410200,
            ),
            254 =>
            array (
                'code' => 410300,
                'level' => 2,
                'name' => '洛阳市',
                'pcode' => 410000,
            ),
            255 =>
            array (
                'code' => 410301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 410300,
            ),
            256 =>
            array (
                'code' => 410302,
                'level' => 3,
                'name' => '老城区',
                'pcode' => 410300,
            ),
            257 =>
            array (
                'code' => 410303,
                'level' => 3,
                'name' => '西工区',
                'pcode' => 410300,
            ),
            258 =>
            array (
                'code' => 410304,
                'level' => 3,
                'name' => '瀍河回族区',
                'pcode' => 410300,
            ),
            259 =>
            array (
                'code' => 410305,
                'level' => 3,
                'name' => '涧西区',
                'pcode' => 410300,
            ),
            260 =>
            array (
                'code' => 410306,
                'level' => 3,
                'name' => '吉利区',
                'pcode' => 410300,
            ),
            261 =>
            array (
                'code' => 410311,
                'level' => 3,
                'name' => '洛龙区',
                'pcode' => 410300,
            ),
            262 =>
            array (
                'code' => 410322,
                'level' => 3,
                'name' => '孟津县',
                'pcode' => 410300,
            ),
            263 =>
            array (
                'code' => 410323,
                'level' => 3,
                'name' => '新安县',
                'pcode' => 410300,
            ),
            264 =>
            array (
                'code' => 410324,
                'level' => 3,
                'name' => '栾川县',
                'pcode' => 410300,
            ),
            265 =>
            array (
                'code' => 410325,
                'level' => 3,
                'name' => '嵩县',
                'pcode' => 410300,
            ),
            266 =>
            array (
                'code' => 410326,
                'level' => 3,
                'name' => '汝阳县',
                'pcode' => 410300,
            ),
            267 =>
            array (
                'code' => 410327,
                'level' => 3,
                'name' => '宜阳县',
                'pcode' => 410300,
            ),
            268 =>
            array (
                'code' => 410328,
                'level' => 3,
                'name' => '洛宁县',
                'pcode' => 410300,
            ),
            269 =>
            array (
                'code' => 410329,
                'level' => 3,
                'name' => '伊川县',
                'pcode' => 410300,
            ),
            270 =>
            array (
                'code' => 410371,
                'level' => 3,
                'name' => '洛阳高新技术产业开发区',
                'pcode' => 410300,
            ),
            271 =>
            array (
                'code' => 410381,
                'level' => 3,
                'name' => '偃师市',
                'pcode' => 410300,
            ),
            272 =>
            array (
                'code' => 410400,
                'level' => 2,
                'name' => '平顶山市',
                'pcode' => 410000,
            ),
            273 =>
            array (
                'code' => 410401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 410400,
            ),
            274 =>
            array (
                'code' => 410402,
                'level' => 3,
                'name' => '新华区',
                'pcode' => 410400,
            ),
            275 =>
            array (
                'code' => 410403,
                'level' => 3,
                'name' => '卫东区',
                'pcode' => 410400,
            ),
            276 =>
            array (
                'code' => 410404,
                'level' => 3,
                'name' => '石龙区',
                'pcode' => 410400,
            ),
            277 =>
            array (
                'code' => 410411,
                'level' => 3,
                'name' => '湛河区',
                'pcode' => 410400,
            ),
            278 =>
            array (
                'code' => 410421,
                'level' => 3,
                'name' => '宝丰县',
                'pcode' => 410400,
            ),
            279 =>
            array (
                'code' => 410422,
                'level' => 3,
                'name' => '叶县',
                'pcode' => 410400,
            ),
            280 =>
            array (
                'code' => 410423,
                'level' => 3,
                'name' => '鲁山县',
                'pcode' => 410400,
            ),
            281 =>
            array (
                'code' => 410425,
                'level' => 3,
                'name' => '郏县',
                'pcode' => 410400,
            ),
            282 =>
            array (
                'code' => 410471,
                'level' => 3,
                'name' => '平顶山高新技术产业开发区',
                'pcode' => 410400,
            ),
            283 =>
            array (
                'code' => 410472,
                'level' => 3,
                'name' => '平顶山市城乡一体化示范区',
                'pcode' => 410400,
            ),
            284 =>
            array (
                'code' => 410481,
                'level' => 3,
                'name' => '舞钢市',
                'pcode' => 410400,
            ),
            285 =>
            array (
                'code' => 410482,
                'level' => 3,
                'name' => '汝州市',
                'pcode' => 410400,
            ),
            286 =>
            array (
                'code' => 410500,
                'level' => 2,
                'name' => '安阳市',
                'pcode' => 410000,
            ),
            287 =>
            array (
                'code' => 410501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 410500,
            ),
            288 =>
            array (
                'code' => 410502,
                'level' => 3,
                'name' => '文峰区',
                'pcode' => 410500,
            ),
            289 =>
            array (
                'code' => 410503,
                'level' => 3,
                'name' => '北关区',
                'pcode' => 410500,
            ),
            290 =>
            array (
                'code' => 410505,
                'level' => 3,
                'name' => '殷都区',
                'pcode' => 410500,
            ),
            291 =>
            array (
                'code' => 410506,
                'level' => 3,
                'name' => '龙安区',
                'pcode' => 410500,
            ),
            292 =>
            array (
                'code' => 410522,
                'level' => 3,
                'name' => '安阳县',
                'pcode' => 410500,
            ),
            293 =>
            array (
                'code' => 410523,
                'level' => 3,
                'name' => '汤阴县',
                'pcode' => 410500,
            ),
            294 =>
            array (
                'code' => 410526,
                'level' => 3,
                'name' => '滑县',
                'pcode' => 410500,
            ),
            295 =>
            array (
                'code' => 410527,
                'level' => 3,
                'name' => '内黄县',
                'pcode' => 410500,
            ),
            296 =>
            array (
                'code' => 410571,
                'level' => 3,
                'name' => '安阳高新技术产业开发区',
                'pcode' => 410500,
            ),
            297 =>
            array (
                'code' => 410581,
                'level' => 3,
                'name' => '林州市',
                'pcode' => 410500,
            ),
            298 =>
            array (
                'code' => 410600,
                'level' => 2,
                'name' => '鹤壁市',
                'pcode' => 410000,
            ),
            299 =>
            array (
                'code' => 410601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 410600,
            ),
            300 =>
            array (
                'code' => 410602,
                'level' => 3,
                'name' => '鹤山区',
                'pcode' => 410600,
            ),
            301 =>
            array (
                'code' => 410603,
                'level' => 3,
                'name' => '山城区',
                'pcode' => 410600,
            ),
            302 =>
            array (
                'code' => 410611,
                'level' => 3,
                'name' => '淇滨区',
                'pcode' => 410600,
            ),
            303 =>
            array (
                'code' => 410621,
                'level' => 3,
                'name' => '浚县',
                'pcode' => 410600,
            ),
            304 =>
            array (
                'code' => 410622,
                'level' => 3,
                'name' => '淇县',
                'pcode' => 410600,
            ),
            305 =>
            array (
                'code' => 410671,
                'level' => 3,
                'name' => '鹤壁经济技术开发区',
                'pcode' => 410600,
            ),
            306 =>
            array (
                'code' => 410700,
                'level' => 2,
                'name' => '新乡市',
                'pcode' => 410000,
            ),
            307 =>
            array (
                'code' => 410701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 410700,
            ),
            308 =>
            array (
                'code' => 410702,
                'level' => 3,
                'name' => '红旗区',
                'pcode' => 410700,
            ),
            309 =>
            array (
                'code' => 410703,
                'level' => 3,
                'name' => '卫滨区',
                'pcode' => 410700,
            ),
            310 =>
            array (
                'code' => 410704,
                'level' => 3,
                'name' => '凤泉区',
                'pcode' => 410700,
            ),
            311 =>
            array (
                'code' => 410711,
                'level' => 3,
                'name' => '牧野区',
                'pcode' => 410700,
            ),
            312 =>
            array (
                'code' => 410721,
                'level' => 3,
                'name' => '新乡县',
                'pcode' => 410700,
            ),
            313 =>
            array (
                'code' => 410724,
                'level' => 3,
                'name' => '获嘉县',
                'pcode' => 410700,
            ),
            314 =>
            array (
                'code' => 410725,
                'level' => 3,
                'name' => '原阳县',
                'pcode' => 410700,
            ),
            315 =>
            array (
                'code' => 410726,
                'level' => 3,
                'name' => '延津县',
                'pcode' => 410700,
            ),
            316 =>
            array (
                'code' => 410727,
                'level' => 3,
                'name' => '封丘县',
                'pcode' => 410700,
            ),
            317 =>
            array (
                'code' => 410771,
                'level' => 3,
                'name' => '新乡高新技术产业开发区',
                'pcode' => 410700,
            ),
            318 =>
            array (
                'code' => 410772,
                'level' => 3,
                'name' => '新乡经济技术开发区',
                'pcode' => 410700,
            ),
            319 =>
            array (
                'code' => 410773,
                'level' => 3,
                'name' => '新乡市平原城乡一体化示范区',
                'pcode' => 410700,
            ),
            320 =>
            array (
                'code' => 410781,
                'level' => 3,
                'name' => '卫辉市',
                'pcode' => 410700,
            ),
            321 =>
            array (
                'code' => 410782,
                'level' => 3,
                'name' => '辉县市',
                'pcode' => 410700,
            ),
            322 =>
            array (
                'code' => 410783,
                'level' => 3,
                'name' => '长垣市',
                'pcode' => 410700,
            ),
            323 =>
            array (
                'code' => 410800,
                'level' => 2,
                'name' => '焦作市',
                'pcode' => 410000,
            ),
            324 =>
            array (
                'code' => 410801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 410800,
            ),
            325 =>
            array (
                'code' => 410802,
                'level' => 3,
                'name' => '解放区',
                'pcode' => 410800,
            ),
            326 =>
            array (
                'code' => 410803,
                'level' => 3,
                'name' => '中站区',
                'pcode' => 410800,
            ),
            327 =>
            array (
                'code' => 410804,
                'level' => 3,
                'name' => '马村区',
                'pcode' => 410800,
            ),
            328 =>
            array (
                'code' => 410811,
                'level' => 3,
                'name' => '山阳区',
                'pcode' => 410800,
            ),
            329 =>
            array (
                'code' => 410821,
                'level' => 3,
                'name' => '修武县',
                'pcode' => 410800,
            ),
            330 =>
            array (
                'code' => 410822,
                'level' => 3,
                'name' => '博爱县',
                'pcode' => 410800,
            ),
            331 =>
            array (
                'code' => 410823,
                'level' => 3,
                'name' => '武陟县',
                'pcode' => 410800,
            ),
            332 =>
            array (
                'code' => 410825,
                'level' => 3,
                'name' => '温县',
                'pcode' => 410800,
            ),
            333 =>
            array (
                'code' => 410871,
                'level' => 3,
                'name' => '焦作城乡一体化示范区',
                'pcode' => 410800,
            ),
            334 =>
            array (
                'code' => 410882,
                'level' => 3,
                'name' => '沁阳市',
                'pcode' => 410800,
            ),
            335 =>
            array (
                'code' => 410883,
                'level' => 3,
                'name' => '孟州市',
                'pcode' => 410800,
            ),
            336 =>
            array (
                'code' => 410900,
                'level' => 2,
                'name' => '濮阳市',
                'pcode' => 410000,
            ),
            337 =>
            array (
                'code' => 410901,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 410900,
            ),
            338 =>
            array (
                'code' => 410902,
                'level' => 3,
                'name' => '华龙区',
                'pcode' => 410900,
            ),
            339 =>
            array (
                'code' => 410922,
                'level' => 3,
                'name' => '清丰县',
                'pcode' => 410900,
            ),
            340 =>
            array (
                'code' => 410923,
                'level' => 3,
                'name' => '南乐县',
                'pcode' => 410900,
            ),
            341 =>
            array (
                'code' => 410926,
                'level' => 3,
                'name' => '范县',
                'pcode' => 410900,
            ),
            342 =>
            array (
                'code' => 410927,
                'level' => 3,
                'name' => '台前县',
                'pcode' => 410900,
            ),
            343 =>
            array (
                'code' => 410928,
                'level' => 3,
                'name' => '濮阳县',
                'pcode' => 410900,
            ),
            344 =>
            array (
                'code' => 410971,
                'level' => 3,
                'name' => '河南濮阳工业园区',
                'pcode' => 410900,
            ),
            345 =>
            array (
                'code' => 410972,
                'level' => 3,
                'name' => '濮阳经济技术开发区',
                'pcode' => 410900,
            ),
            346 =>
            array (
                'code' => 411000,
                'level' => 2,
                'name' => '许昌市',
                'pcode' => 410000,
            ),
            347 =>
            array (
                'code' => 411001,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 411000,
            ),
            348 =>
            array (
                'code' => 411002,
                'level' => 3,
                'name' => '魏都区',
                'pcode' => 411000,
            ),
            349 =>
            array (
                'code' => 411003,
                'level' => 3,
                'name' => '建安区',
                'pcode' => 411000,
            ),
            350 =>
            array (
                'code' => 411024,
                'level' => 3,
                'name' => '鄢陵县',
                'pcode' => 411000,
            ),
            351 =>
            array (
                'code' => 411025,
                'level' => 3,
                'name' => '襄城县',
                'pcode' => 411000,
            ),
            352 =>
            array (
                'code' => 411071,
                'level' => 3,
                'name' => '许昌经济技术开发区',
                'pcode' => 411000,
            ),
            353 =>
            array (
                'code' => 411081,
                'level' => 3,
                'name' => '禹州市',
                'pcode' => 411000,
            ),
            354 =>
            array (
                'code' => 411082,
                'level' => 3,
                'name' => '长葛市',
                'pcode' => 411000,
            ),
            355 =>
            array (
                'code' => 411100,
                'level' => 2,
                'name' => '漯河市',
                'pcode' => 410000,
            ),
            356 =>
            array (
                'code' => 411101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 411100,
            ),
            357 =>
            array (
                'code' => 411102,
                'level' => 3,
                'name' => '源汇区',
                'pcode' => 411100,
            ),
            358 =>
            array (
                'code' => 411103,
                'level' => 3,
                'name' => '郾城区',
                'pcode' => 411100,
            ),
            359 =>
            array (
                'code' => 411104,
                'level' => 3,
                'name' => '召陵区',
                'pcode' => 411100,
            ),
            360 =>
            array (
                'code' => 411121,
                'level' => 3,
                'name' => '舞阳县',
                'pcode' => 411100,
            ),
            361 =>
            array (
                'code' => 411122,
                'level' => 3,
                'name' => '临颍县',
                'pcode' => 411100,
            ),
            362 =>
            array (
                'code' => 411171,
                'level' => 3,
                'name' => '漯河经济技术开发区',
                'pcode' => 411100,
            ),
            363 =>
            array (
                'code' => 411200,
                'level' => 2,
                'name' => '三门峡市',
                'pcode' => 410000,
            ),
            364 =>
            array (
                'code' => 411201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 411200,
            ),
            365 =>
            array (
                'code' => 411202,
                'level' => 3,
                'name' => '湖滨区',
                'pcode' => 411200,
            ),
            366 =>
            array (
                'code' => 411203,
                'level' => 3,
                'name' => '陕州区',
                'pcode' => 411200,
            ),
            367 =>
            array (
                'code' => 411221,
                'level' => 3,
                'name' => '渑池县',
                'pcode' => 411200,
            ),
            368 =>
            array (
                'code' => 411224,
                'level' => 3,
                'name' => '卢氏县',
                'pcode' => 411200,
            ),
            369 =>
            array (
                'code' => 411271,
                'level' => 3,
                'name' => '河南三门峡经济开发区',
                'pcode' => 411200,
            ),
            370 =>
            array (
                'code' => 411281,
                'level' => 3,
                'name' => '义马市',
                'pcode' => 411200,
            ),
            371 =>
            array (
                'code' => 411282,
                'level' => 3,
                'name' => '灵宝市',
                'pcode' => 411200,
            ),
            372 =>
            array (
                'code' => 411300,
                'level' => 2,
                'name' => '南阳市',
                'pcode' => 410000,
            ),
            373 =>
            array (
                'code' => 411301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 411300,
            ),
            374 =>
            array (
                'code' => 411302,
                'level' => 3,
                'name' => '宛城区',
                'pcode' => 411300,
            ),
            375 =>
            array (
                'code' => 411303,
                'level' => 3,
                'name' => '卧龙区',
                'pcode' => 411300,
            ),
            376 =>
            array (
                'code' => 411321,
                'level' => 3,
                'name' => '南召县',
                'pcode' => 411300,
            ),
            377 =>
            array (
                'code' => 411322,
                'level' => 3,
                'name' => '方城县',
                'pcode' => 411300,
            ),
            378 =>
            array (
                'code' => 411323,
                'level' => 3,
                'name' => '西峡县',
                'pcode' => 411300,
            ),
            379 =>
            array (
                'code' => 411324,
                'level' => 3,
                'name' => '镇平县',
                'pcode' => 411300,
            ),
            380 =>
            array (
                'code' => 411325,
                'level' => 3,
                'name' => '内乡县',
                'pcode' => 411300,
            ),
            381 =>
            array (
                'code' => 411326,
                'level' => 3,
                'name' => '淅川县',
                'pcode' => 411300,
            ),
            382 =>
            array (
                'code' => 411327,
                'level' => 3,
                'name' => '社旗县',
                'pcode' => 411300,
            ),
            383 =>
            array (
                'code' => 411328,
                'level' => 3,
                'name' => '唐河县',
                'pcode' => 411300,
            ),
            384 =>
            array (
                'code' => 411329,
                'level' => 3,
                'name' => '新野县',
                'pcode' => 411300,
            ),
            385 =>
            array (
                'code' => 411330,
                'level' => 3,
                'name' => '桐柏县',
                'pcode' => 411300,
            ),
            386 =>
            array (
                'code' => 411371,
                'level' => 3,
                'name' => '南阳高新技术产业开发区',
                'pcode' => 411300,
            ),
            387 =>
            array (
                'code' => 411372,
                'level' => 3,
                'name' => '南阳市城乡一体化示范区',
                'pcode' => 411300,
            ),
            388 =>
            array (
                'code' => 411381,
                'level' => 3,
                'name' => '邓州市',
                'pcode' => 411300,
            ),
            389 =>
            array (
                'code' => 411400,
                'level' => 2,
                'name' => '商丘市',
                'pcode' => 410000,
            ),
            390 =>
            array (
                'code' => 411401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 411400,
            ),
            391 =>
            array (
                'code' => 411402,
                'level' => 3,
                'name' => '梁园区',
                'pcode' => 411400,
            ),
            392 =>
            array (
                'code' => 411403,
                'level' => 3,
                'name' => '睢阳区',
                'pcode' => 411400,
            ),
            393 =>
            array (
                'code' => 411421,
                'level' => 3,
                'name' => '民权县',
                'pcode' => 411400,
            ),
            394 =>
            array (
                'code' => 411422,
                'level' => 3,
                'name' => '睢县',
                'pcode' => 411400,
            ),
            395 =>
            array (
                'code' => 411423,
                'level' => 3,
                'name' => '宁陵县',
                'pcode' => 411400,
            ),
            396 =>
            array (
                'code' => 411424,
                'level' => 3,
                'name' => '柘城县',
                'pcode' => 411400,
            ),
            397 =>
            array (
                'code' => 411425,
                'level' => 3,
                'name' => '虞城县',
                'pcode' => 411400,
            ),
            398 =>
            array (
                'code' => 411426,
                'level' => 3,
                'name' => '夏邑县',
                'pcode' => 411400,
            ),
            399 =>
            array (
                'code' => 411471,
                'level' => 3,
                'name' => '豫东综合物流产业聚集区',
                'pcode' => 411400,
            ),
            400 =>
            array (
                'code' => 411472,
                'level' => 3,
                'name' => '河南商丘经济开发区',
                'pcode' => 411400,
            ),
            401 =>
            array (
                'code' => 411481,
                'level' => 3,
                'name' => '永城市',
                'pcode' => 411400,
            ),
            402 =>
            array (
                'code' => 411500,
                'level' => 2,
                'name' => '信阳市',
                'pcode' => 410000,
            ),
            403 =>
            array (
                'code' => 411501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 411500,
            ),
            404 =>
            array (
                'code' => 411502,
                'level' => 3,
                'name' => '浉河区',
                'pcode' => 411500,
            ),
            405 =>
            array (
                'code' => 411503,
                'level' => 3,
                'name' => '平桥区',
                'pcode' => 411500,
            ),
            406 =>
            array (
                'code' => 411521,
                'level' => 3,
                'name' => '罗山县',
                'pcode' => 411500,
            ),
            407 =>
            array (
                'code' => 411522,
                'level' => 3,
                'name' => '光山县',
                'pcode' => 411500,
            ),
            408 =>
            array (
                'code' => 411523,
                'level' => 3,
                'name' => '新县',
                'pcode' => 411500,
            ),
            409 =>
            array (
                'code' => 411524,
                'level' => 3,
                'name' => '商城县',
                'pcode' => 411500,
            ),
            410 =>
            array (
                'code' => 411525,
                'level' => 3,
                'name' => '固始县',
                'pcode' => 411500,
            ),
            411 =>
            array (
                'code' => 411526,
                'level' => 3,
                'name' => '潢川县',
                'pcode' => 411500,
            ),
            412 =>
            array (
                'code' => 411527,
                'level' => 3,
                'name' => '淮滨县',
                'pcode' => 411500,
            ),
            413 =>
            array (
                'code' => 411528,
                'level' => 3,
                'name' => '息县',
                'pcode' => 411500,
            ),
            414 =>
            array (
                'code' => 411571,
                'level' => 3,
                'name' => '信阳高新技术产业开发区',
                'pcode' => 411500,
            ),
            415 =>
            array (
                'code' => 411600,
                'level' => 2,
                'name' => '周口市',
                'pcode' => 410000,
            ),
            416 =>
            array (
                'code' => 411601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 411600,
            ),
            417 =>
            array (
                'code' => 411602,
                'level' => 3,
                'name' => '川汇区',
                'pcode' => 411600,
            ),
            418 =>
            array (
                'code' => 411603,
                'level' => 3,
                'name' => '淮阳区',
                'pcode' => 411600,
            ),
            419 =>
            array (
                'code' => 411621,
                'level' => 3,
                'name' => '扶沟县',
                'pcode' => 411600,
            ),
            420 =>
            array (
                'code' => 411622,
                'level' => 3,
                'name' => '西华县',
                'pcode' => 411600,
            ),
            421 =>
            array (
                'code' => 411623,
                'level' => 3,
                'name' => '商水县',
                'pcode' => 411600,
            ),
            422 =>
            array (
                'code' => 411624,
                'level' => 3,
                'name' => '沈丘县',
                'pcode' => 411600,
            ),
            423 =>
            array (
                'code' => 411625,
                'level' => 3,
                'name' => '郸城县',
                'pcode' => 411600,
            ),
            424 =>
            array (
                'code' => 411627,
                'level' => 3,
                'name' => '太康县',
                'pcode' => 411600,
            ),
            425 =>
            array (
                'code' => 411628,
                'level' => 3,
                'name' => '鹿邑县',
                'pcode' => 411600,
            ),
            426 =>
            array (
                'code' => 411671,
                'level' => 3,
                'name' => '河南周口经济开发区',
                'pcode' => 411600,
            ),
            427 =>
            array (
                'code' => 411681,
                'level' => 3,
                'name' => '项城市',
                'pcode' => 411600,
            ),
            428 =>
            array (
                'code' => 411700,
                'level' => 2,
                'name' => '驻马店市',
                'pcode' => 410000,
            ),
            429 =>
            array (
                'code' => 411701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 411700,
            ),
            430 =>
            array (
                'code' => 411702,
                'level' => 3,
                'name' => '驿城区',
                'pcode' => 411700,
            ),
            431 =>
            array (
                'code' => 411721,
                'level' => 3,
                'name' => '西平县',
                'pcode' => 411700,
            ),
            432 =>
            array (
                'code' => 411722,
                'level' => 3,
                'name' => '上蔡县',
                'pcode' => 411700,
            ),
            433 =>
            array (
                'code' => 411723,
                'level' => 3,
                'name' => '平舆县',
                'pcode' => 411700,
            ),
            434 =>
            array (
                'code' => 411724,
                'level' => 3,
                'name' => '正阳县',
                'pcode' => 411700,
            ),
            435 =>
            array (
                'code' => 411725,
                'level' => 3,
                'name' => '确山县',
                'pcode' => 411700,
            ),
            436 =>
            array (
                'code' => 411726,
                'level' => 3,
                'name' => '泌阳县',
                'pcode' => 411700,
            ),
            437 =>
            array (
                'code' => 411727,
                'level' => 3,
                'name' => '汝南县',
                'pcode' => 411700,
            ),
            438 =>
            array (
                'code' => 411728,
                'level' => 3,
                'name' => '遂平县',
                'pcode' => 411700,
            ),
            439 =>
            array (
                'code' => 411729,
                'level' => 3,
                'name' => '新蔡县',
                'pcode' => 411700,
            ),
            440 =>
            array (
                'code' => 411771,
                'level' => 3,
                'name' => '河南驻马店经济开发区',
                'pcode' => 411700,
            ),
            441 =>
            array (
                'code' => 419000,
                'level' => 2,
                'name' => '省直辖县级行政区划',
                'pcode' => 410000,
            ),
            442 =>
            array (
                'code' => 419001,
                'level' => 3,
                'name' => '济源市',
                'pcode' => 419000,
            ),
            443 =>
            array (
                'code' => 420000,
                'level' => 1,
                'name' => '湖北省',
                'pcode' => 0,
            ),
            444 =>
            array (
                'code' => 420100,
                'level' => 2,
                'name' => '武汉市',
                'pcode' => 420000,
            ),
            445 =>
            array (
                'code' => 420101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 420100,
            ),
            446 =>
            array (
                'code' => 420102,
                'level' => 3,
                'name' => '江岸区',
                'pcode' => 420100,
            ),
            447 =>
            array (
                'code' => 420103,
                'level' => 3,
                'name' => '江汉区',
                'pcode' => 420100,
            ),
            448 =>
            array (
                'code' => 420104,
                'level' => 3,
                'name' => '硚口区',
                'pcode' => 420100,
            ),
            449 =>
            array (
                'code' => 420105,
                'level' => 3,
                'name' => '汉阳区',
                'pcode' => 420100,
            ),
            450 =>
            array (
                'code' => 420106,
                'level' => 3,
                'name' => '武昌区',
                'pcode' => 420100,
            ),
            451 =>
            array (
                'code' => 420107,
                'level' => 3,
                'name' => '青山区',
                'pcode' => 420100,
            ),
            452 =>
            array (
                'code' => 420111,
                'level' => 3,
                'name' => '洪山区',
                'pcode' => 420100,
            ),
            453 =>
            array (
                'code' => 420112,
                'level' => 3,
                'name' => '东西湖区',
                'pcode' => 420100,
            ),
            454 =>
            array (
                'code' => 420113,
                'level' => 3,
                'name' => '汉南区',
                'pcode' => 420100,
            ),
            455 =>
            array (
                'code' => 420114,
                'level' => 3,
                'name' => '蔡甸区',
                'pcode' => 420100,
            ),
            456 =>
            array (
                'code' => 420115,
                'level' => 3,
                'name' => '江夏区',
                'pcode' => 420100,
            ),
            457 =>
            array (
                'code' => 420116,
                'level' => 3,
                'name' => '黄陂区',
                'pcode' => 420100,
            ),
            458 =>
            array (
                'code' => 420117,
                'level' => 3,
                'name' => '新洲区',
                'pcode' => 420100,
            ),
            459 =>
            array (
                'code' => 420200,
                'level' => 2,
                'name' => '黄石市',
                'pcode' => 420000,
            ),
            460 =>
            array (
                'code' => 420201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 420200,
            ),
            461 =>
            array (
                'code' => 420202,
                'level' => 3,
                'name' => '黄石港区',
                'pcode' => 420200,
            ),
            462 =>
            array (
                'code' => 420203,
                'level' => 3,
                'name' => '西塞山区',
                'pcode' => 420200,
            ),
            463 =>
            array (
                'code' => 420204,
                'level' => 3,
                'name' => '下陆区',
                'pcode' => 420200,
            ),
            464 =>
            array (
                'code' => 420205,
                'level' => 3,
                'name' => '铁山区',
                'pcode' => 420200,
            ),
            465 =>
            array (
                'code' => 420222,
                'level' => 3,
                'name' => '阳新县',
                'pcode' => 420200,
            ),
            466 =>
            array (
                'code' => 420281,
                'level' => 3,
                'name' => '大冶市',
                'pcode' => 420200,
            ),
            467 =>
            array (
                'code' => 420300,
                'level' => 2,
                'name' => '十堰市',
                'pcode' => 420000,
            ),
            468 =>
            array (
                'code' => 420301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 420300,
            ),
            469 =>
            array (
                'code' => 420302,
                'level' => 3,
                'name' => '茅箭区',
                'pcode' => 420300,
            ),
            470 =>
            array (
                'code' => 420303,
                'level' => 3,
                'name' => '张湾区',
                'pcode' => 420300,
            ),
            471 =>
            array (
                'code' => 420304,
                'level' => 3,
                'name' => '郧阳区',
                'pcode' => 420300,
            ),
            472 =>
            array (
                'code' => 420322,
                'level' => 3,
                'name' => '郧西县',
                'pcode' => 420300,
            ),
            473 =>
            array (
                'code' => 420323,
                'level' => 3,
                'name' => '竹山县',
                'pcode' => 420300,
            ),
            474 =>
            array (
                'code' => 420324,
                'level' => 3,
                'name' => '竹溪县',
                'pcode' => 420300,
            ),
            475 =>
            array (
                'code' => 420325,
                'level' => 3,
                'name' => '房县',
                'pcode' => 420300,
            ),
            476 =>
            array (
                'code' => 420381,
                'level' => 3,
                'name' => '丹江口市',
                'pcode' => 420300,
            ),
            477 =>
            array (
                'code' => 420500,
                'level' => 2,
                'name' => '宜昌市',
                'pcode' => 420000,
            ),
            478 =>
            array (
                'code' => 420501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 420500,
            ),
            479 =>
            array (
                'code' => 420502,
                'level' => 3,
                'name' => '西陵区',
                'pcode' => 420500,
            ),
            480 =>
            array (
                'code' => 420503,
                'level' => 3,
                'name' => '伍家岗区',
                'pcode' => 420500,
            ),
            481 =>
            array (
                'code' => 420504,
                'level' => 3,
                'name' => '点军区',
                'pcode' => 420500,
            ),
            482 =>
            array (
                'code' => 420505,
                'level' => 3,
                'name' => '猇亭区',
                'pcode' => 420500,
            ),
            483 =>
            array (
                'code' => 420506,
                'level' => 3,
                'name' => '夷陵区',
                'pcode' => 420500,
            ),
            484 =>
            array (
                'code' => 420525,
                'level' => 3,
                'name' => '远安县',
                'pcode' => 420500,
            ),
            485 =>
            array (
                'code' => 420526,
                'level' => 3,
                'name' => '兴山县',
                'pcode' => 420500,
            ),
            486 =>
            array (
                'code' => 420527,
                'level' => 3,
                'name' => '秭归县',
                'pcode' => 420500,
            ),
            487 =>
            array (
                'code' => 420528,
                'level' => 3,
                'name' => '长阳土家族自治县',
                'pcode' => 420500,
            ),
            488 =>
            array (
                'code' => 420529,
                'level' => 3,
                'name' => '五峰土家族自治县',
                'pcode' => 420500,
            ),
            489 =>
            array (
                'code' => 420581,
                'level' => 3,
                'name' => '宜都市',
                'pcode' => 420500,
            ),
            490 =>
            array (
                'code' => 420582,
                'level' => 3,
                'name' => '当阳市',
                'pcode' => 420500,
            ),
            491 =>
            array (
                'code' => 420583,
                'level' => 3,
                'name' => '枝江市',
                'pcode' => 420500,
            ),
            492 =>
            array (
                'code' => 420600,
                'level' => 2,
                'name' => '襄阳市',
                'pcode' => 420000,
            ),
            493 =>
            array (
                'code' => 420601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 420600,
            ),
            494 =>
            array (
                'code' => 420602,
                'level' => 3,
                'name' => '襄城区',
                'pcode' => 420600,
            ),
            495 =>
            array (
                'code' => 420606,
                'level' => 3,
                'name' => '樊城区',
                'pcode' => 420600,
            ),
            496 =>
            array (
                'code' => 420607,
                'level' => 3,
                'name' => '襄州区',
                'pcode' => 420600,
            ),
            497 =>
            array (
                'code' => 420624,
                'level' => 3,
                'name' => '南漳县',
                'pcode' => 420600,
            ),
            498 =>
            array (
                'code' => 420625,
                'level' => 3,
                'name' => '谷城县',
                'pcode' => 420600,
            ),
            499 =>
            array (
                'code' => 420626,
                'level' => 3,
                'name' => '保康县',
                'pcode' => 420600,
            ),
        ));
        \DB::table('china_areas')->insert(array (
            0 =>
            array (
                'code' => 420682,
                'level' => 3,
                'name' => '老河口市',
                'pcode' => 420600,
            ),
            1 =>
            array (
                'code' => 420683,
                'level' => 3,
                'name' => '枣阳市',
                'pcode' => 420600,
            ),
            2 =>
            array (
                'code' => 420684,
                'level' => 3,
                'name' => '宜城市',
                'pcode' => 420600,
            ),
            3 =>
            array (
                'code' => 420700,
                'level' => 2,
                'name' => '鄂州市',
                'pcode' => 420000,
            ),
            4 =>
            array (
                'code' => 420701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 420700,
            ),
            5 =>
            array (
                'code' => 420702,
                'level' => 3,
                'name' => '梁子湖区',
                'pcode' => 420700,
            ),
            6 =>
            array (
                'code' => 420703,
                'level' => 3,
                'name' => '华容区',
                'pcode' => 420700,
            ),
            7 =>
            array (
                'code' => 420704,
                'level' => 3,
                'name' => '鄂城区',
                'pcode' => 420700,
            ),
            8 =>
            array (
                'code' => 420800,
                'level' => 2,
                'name' => '荆门市',
                'pcode' => 420000,
            ),
            9 =>
            array (
                'code' => 420801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 420800,
            ),
            10 =>
            array (
                'code' => 420802,
                'level' => 3,
                'name' => '东宝区',
                'pcode' => 420800,
            ),
            11 =>
            array (
                'code' => 420804,
                'level' => 3,
                'name' => '掇刀区',
                'pcode' => 420800,
            ),
            12 =>
            array (
                'code' => 420822,
                'level' => 3,
                'name' => '沙洋县',
                'pcode' => 420800,
            ),
            13 =>
            array (
                'code' => 420881,
                'level' => 3,
                'name' => '钟祥市',
                'pcode' => 420800,
            ),
            14 =>
            array (
                'code' => 420882,
                'level' => 3,
                'name' => '京山市',
                'pcode' => 420800,
            ),
            15 =>
            array (
                'code' => 420900,
                'level' => 2,
                'name' => '孝感市',
                'pcode' => 420000,
            ),
            16 =>
            array (
                'code' => 420901,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 420900,
            ),
            17 =>
            array (
                'code' => 420902,
                'level' => 3,
                'name' => '孝南区',
                'pcode' => 420900,
            ),
            18 =>
            array (
                'code' => 420921,
                'level' => 3,
                'name' => '孝昌县',
                'pcode' => 420900,
            ),
            19 =>
            array (
                'code' => 420922,
                'level' => 3,
                'name' => '大悟县',
                'pcode' => 420900,
            ),
            20 =>
            array (
                'code' => 420923,
                'level' => 3,
                'name' => '云梦县',
                'pcode' => 420900,
            ),
            21 =>
            array (
                'code' => 420981,
                'level' => 3,
                'name' => '应城市',
                'pcode' => 420900,
            ),
            22 =>
            array (
                'code' => 420982,
                'level' => 3,
                'name' => '安陆市',
                'pcode' => 420900,
            ),
            23 =>
            array (
                'code' => 420984,
                'level' => 3,
                'name' => '汉川市',
                'pcode' => 420900,
            ),
            24 =>
            array (
                'code' => 421000,
                'level' => 2,
                'name' => '荆州市',
                'pcode' => 420000,
            ),
            25 =>
            array (
                'code' => 421001,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 421000,
            ),
            26 =>
            array (
                'code' => 421002,
                'level' => 3,
                'name' => '沙市区',
                'pcode' => 421000,
            ),
            27 =>
            array (
                'code' => 421003,
                'level' => 3,
                'name' => '荆州区',
                'pcode' => 421000,
            ),
            28 =>
            array (
                'code' => 421022,
                'level' => 3,
                'name' => '公安县',
                'pcode' => 421000,
            ),
            29 =>
            array (
                'code' => 421023,
                'level' => 3,
                'name' => '监利县',
                'pcode' => 421000,
            ),
            30 =>
            array (
                'code' => 421024,
                'level' => 3,
                'name' => '江陵县',
                'pcode' => 421000,
            ),
            31 =>
            array (
                'code' => 421071,
                'level' => 3,
                'name' => '荆州经济技术开发区',
                'pcode' => 421000,
            ),
            32 =>
            array (
                'code' => 421081,
                'level' => 3,
                'name' => '石首市',
                'pcode' => 421000,
            ),
            33 =>
            array (
                'code' => 421083,
                'level' => 3,
                'name' => '洪湖市',
                'pcode' => 421000,
            ),
            34 =>
            array (
                'code' => 421087,
                'level' => 3,
                'name' => '松滋市',
                'pcode' => 421000,
            ),
            35 =>
            array (
                'code' => 421100,
                'level' => 2,
                'name' => '黄冈市',
                'pcode' => 420000,
            ),
            36 =>
            array (
                'code' => 421101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 421100,
            ),
            37 =>
            array (
                'code' => 421102,
                'level' => 3,
                'name' => '黄州区',
                'pcode' => 421100,
            ),
            38 =>
            array (
                'code' => 421121,
                'level' => 3,
                'name' => '团风县',
                'pcode' => 421100,
            ),
            39 =>
            array (
                'code' => 421122,
                'level' => 3,
                'name' => '红安县',
                'pcode' => 421100,
            ),
            40 =>
            array (
                'code' => 421123,
                'level' => 3,
                'name' => '罗田县',
                'pcode' => 421100,
            ),
            41 =>
            array (
                'code' => 421124,
                'level' => 3,
                'name' => '英山县',
                'pcode' => 421100,
            ),
            42 =>
            array (
                'code' => 421125,
                'level' => 3,
                'name' => '浠水县',
                'pcode' => 421100,
            ),
            43 =>
            array (
                'code' => 421126,
                'level' => 3,
                'name' => '蕲春县',
                'pcode' => 421100,
            ),
            44 =>
            array (
                'code' => 421127,
                'level' => 3,
                'name' => '黄梅县',
                'pcode' => 421100,
            ),
            45 =>
            array (
                'code' => 421171,
                'level' => 3,
                'name' => '龙感湖管理区',
                'pcode' => 421100,
            ),
            46 =>
            array (
                'code' => 421181,
                'level' => 3,
                'name' => '麻城市',
                'pcode' => 421100,
            ),
            47 =>
            array (
                'code' => 421182,
                'level' => 3,
                'name' => '武穴市',
                'pcode' => 421100,
            ),
            48 =>
            array (
                'code' => 421200,
                'level' => 2,
                'name' => '咸宁市',
                'pcode' => 420000,
            ),
            49 =>
            array (
                'code' => 421201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 421200,
            ),
            50 =>
            array (
                'code' => 421202,
                'level' => 3,
                'name' => '咸安区',
                'pcode' => 421200,
            ),
            51 =>
            array (
                'code' => 421221,
                'level' => 3,
                'name' => '嘉鱼县',
                'pcode' => 421200,
            ),
            52 =>
            array (
                'code' => 421222,
                'level' => 3,
                'name' => '通城县',
                'pcode' => 421200,
            ),
            53 =>
            array (
                'code' => 421223,
                'level' => 3,
                'name' => '崇阳县',
                'pcode' => 421200,
            ),
            54 =>
            array (
                'code' => 421224,
                'level' => 3,
                'name' => '通山县',
                'pcode' => 421200,
            ),
            55 =>
            array (
                'code' => 421281,
                'level' => 3,
                'name' => '赤壁市',
                'pcode' => 421200,
            ),
            56 =>
            array (
                'code' => 421300,
                'level' => 2,
                'name' => '随州市',
                'pcode' => 420000,
            ),
            57 =>
            array (
                'code' => 421301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 421300,
            ),
            58 =>
            array (
                'code' => 421303,
                'level' => 3,
                'name' => '曾都区',
                'pcode' => 421300,
            ),
            59 =>
            array (
                'code' => 421321,
                'level' => 3,
                'name' => '随县',
                'pcode' => 421300,
            ),
            60 =>
            array (
                'code' => 421381,
                'level' => 3,
                'name' => '广水市',
                'pcode' => 421300,
            ),
            61 =>
            array (
                'code' => 422800,
                'level' => 2,
                'name' => '恩施土家族苗族自治州',
                'pcode' => 420000,
            ),
            62 =>
            array (
                'code' => 422801,
                'level' => 3,
                'name' => '恩施市',
                'pcode' => 422800,
            ),
            63 =>
            array (
                'code' => 422802,
                'level' => 3,
                'name' => '利川市',
                'pcode' => 422800,
            ),
            64 =>
            array (
                'code' => 422822,
                'level' => 3,
                'name' => '建始县',
                'pcode' => 422800,
            ),
            65 =>
            array (
                'code' => 422823,
                'level' => 3,
                'name' => '巴东县',
                'pcode' => 422800,
            ),
            66 =>
            array (
                'code' => 422825,
                'level' => 3,
                'name' => '宣恩县',
                'pcode' => 422800,
            ),
            67 =>
            array (
                'code' => 422826,
                'level' => 3,
                'name' => '咸丰县',
                'pcode' => 422800,
            ),
            68 =>
            array (
                'code' => 422827,
                'level' => 3,
                'name' => '来凤县',
                'pcode' => 422800,
            ),
            69 =>
            array (
                'code' => 422828,
                'level' => 3,
                'name' => '鹤峰县',
                'pcode' => 422800,
            ),
            70 =>
            array (
                'code' => 429000,
                'level' => 2,
                'name' => '省直辖县级行政区划',
                'pcode' => 420000,
            ),
            71 =>
            array (
                'code' => 429004,
                'level' => 3,
                'name' => '仙桃市',
                'pcode' => 429000,
            ),
            72 =>
            array (
                'code' => 429005,
                'level' => 3,
                'name' => '潜江市',
                'pcode' => 429000,
            ),
            73 =>
            array (
                'code' => 429006,
                'level' => 3,
                'name' => '天门市',
                'pcode' => 429000,
            ),
            74 =>
            array (
                'code' => 429021,
                'level' => 3,
                'name' => '神农架林区',
                'pcode' => 429000,
            ),
            75 =>
            array (
                'code' => 430000,
                'level' => 1,
                'name' => '湖南省',
                'pcode' => 0,
            ),
            76 =>
            array (
                'code' => 430100,
                'level' => 2,
                'name' => '长沙市',
                'pcode' => 430000,
            ),
            77 =>
            array (
                'code' => 430101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 430100,
            ),
            78 =>
            array (
                'code' => 430102,
                'level' => 3,
                'name' => '芙蓉区',
                'pcode' => 430100,
            ),
            79 =>
            array (
                'code' => 430103,
                'level' => 3,
                'name' => '天心区',
                'pcode' => 430100,
            ),
            80 =>
            array (
                'code' => 430104,
                'level' => 3,
                'name' => '岳麓区',
                'pcode' => 430100,
            ),
            81 =>
            array (
                'code' => 430105,
                'level' => 3,
                'name' => '开福区',
                'pcode' => 430100,
            ),
            82 =>
            array (
                'code' => 430111,
                'level' => 3,
                'name' => '雨花区',
                'pcode' => 430100,
            ),
            83 =>
            array (
                'code' => 430112,
                'level' => 3,
                'name' => '望城区',
                'pcode' => 430100,
            ),
            84 =>
            array (
                'code' => 430121,
                'level' => 3,
                'name' => '长沙县',
                'pcode' => 430100,
            ),
            85 =>
            array (
                'code' => 430181,
                'level' => 3,
                'name' => '浏阳市',
                'pcode' => 430100,
            ),
            86 =>
            array (
                'code' => 430182,
                'level' => 3,
                'name' => '宁乡市',
                'pcode' => 430100,
            ),
            87 =>
            array (
                'code' => 430200,
                'level' => 2,
                'name' => '株洲市',
                'pcode' => 430000,
            ),
            88 =>
            array (
                'code' => 430201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 430200,
            ),
            89 =>
            array (
                'code' => 430202,
                'level' => 3,
                'name' => '荷塘区',
                'pcode' => 430200,
            ),
            90 =>
            array (
                'code' => 430203,
                'level' => 3,
                'name' => '芦淞区',
                'pcode' => 430200,
            ),
            91 =>
            array (
                'code' => 430204,
                'level' => 3,
                'name' => '石峰区',
                'pcode' => 430200,
            ),
            92 =>
            array (
                'code' => 430211,
                'level' => 3,
                'name' => '天元区',
                'pcode' => 430200,
            ),
            93 =>
            array (
                'code' => 430212,
                'level' => 3,
                'name' => '渌口区',
                'pcode' => 430200,
            ),
            94 =>
            array (
                'code' => 430223,
                'level' => 3,
                'name' => '攸县',
                'pcode' => 430200,
            ),
            95 =>
            array (
                'code' => 430224,
                'level' => 3,
                'name' => '茶陵县',
                'pcode' => 430200,
            ),
            96 =>
            array (
                'code' => 430225,
                'level' => 3,
                'name' => '炎陵县',
                'pcode' => 430200,
            ),
            97 =>
            array (
                'code' => 430271,
                'level' => 3,
                'name' => '云龙示范区',
                'pcode' => 430200,
            ),
            98 =>
            array (
                'code' => 430281,
                'level' => 3,
                'name' => '醴陵市',
                'pcode' => 430200,
            ),
            99 =>
            array (
                'code' => 430300,
                'level' => 2,
                'name' => '湘潭市',
                'pcode' => 430000,
            ),
            100 =>
            array (
                'code' => 430301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 430300,
            ),
            101 =>
            array (
                'code' => 430302,
                'level' => 3,
                'name' => '雨湖区',
                'pcode' => 430300,
            ),
            102 =>
            array (
                'code' => 430304,
                'level' => 3,
                'name' => '岳塘区',
                'pcode' => 430300,
            ),
            103 =>
            array (
                'code' => 430321,
                'level' => 3,
                'name' => '湘潭县',
                'pcode' => 430300,
            ),
            104 =>
            array (
                'code' => 430371,
                'level' => 3,
                'name' => '湖南湘潭高新技术产业园区',
                'pcode' => 430300,
            ),
            105 =>
            array (
                'code' => 430372,
                'level' => 3,
                'name' => '湘潭昭山示范区',
                'pcode' => 430300,
            ),
            106 =>
            array (
                'code' => 430373,
                'level' => 3,
                'name' => '湘潭九华示范区',
                'pcode' => 430300,
            ),
            107 =>
            array (
                'code' => 430381,
                'level' => 3,
                'name' => '湘乡市',
                'pcode' => 430300,
            ),
            108 =>
            array (
                'code' => 430382,
                'level' => 3,
                'name' => '韶山市',
                'pcode' => 430300,
            ),
            109 =>
            array (
                'code' => 430400,
                'level' => 2,
                'name' => '衡阳市',
                'pcode' => 430000,
            ),
            110 =>
            array (
                'code' => 430401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 430400,
            ),
            111 =>
            array (
                'code' => 430405,
                'level' => 3,
                'name' => '珠晖区',
                'pcode' => 430400,
            ),
            112 =>
            array (
                'code' => 430406,
                'level' => 3,
                'name' => '雁峰区',
                'pcode' => 430400,
            ),
            113 =>
            array (
                'code' => 430407,
                'level' => 3,
                'name' => '石鼓区',
                'pcode' => 430400,
            ),
            114 =>
            array (
                'code' => 430408,
                'level' => 3,
                'name' => '蒸湘区',
                'pcode' => 430400,
            ),
            115 =>
            array (
                'code' => 430412,
                'level' => 3,
                'name' => '南岳区',
                'pcode' => 430400,
            ),
            116 =>
            array (
                'code' => 430421,
                'level' => 3,
                'name' => '衡阳县',
                'pcode' => 430400,
            ),
            117 =>
            array (
                'code' => 430422,
                'level' => 3,
                'name' => '衡南县',
                'pcode' => 430400,
            ),
            118 =>
            array (
                'code' => 430423,
                'level' => 3,
                'name' => '衡山县',
                'pcode' => 430400,
            ),
            119 =>
            array (
                'code' => 430424,
                'level' => 3,
                'name' => '衡东县',
                'pcode' => 430400,
            ),
            120 =>
            array (
                'code' => 430426,
                'level' => 3,
                'name' => '祁东县',
                'pcode' => 430400,
            ),
            121 =>
            array (
                'code' => 430471,
                'level' => 3,
                'name' => '衡阳综合保税区',
                'pcode' => 430400,
            ),
            122 =>
            array (
                'code' => 430472,
                'level' => 3,
                'name' => '湖南衡阳高新技术产业园区',
                'pcode' => 430400,
            ),
            123 =>
            array (
                'code' => 430473,
                'level' => 3,
                'name' => '湖南衡阳松木经济开发区',
                'pcode' => 430400,
            ),
            124 =>
            array (
                'code' => 430481,
                'level' => 3,
                'name' => '耒阳市',
                'pcode' => 430400,
            ),
            125 =>
            array (
                'code' => 430482,
                'level' => 3,
                'name' => '常宁市',
                'pcode' => 430400,
            ),
            126 =>
            array (
                'code' => 430500,
                'level' => 2,
                'name' => '邵阳市',
                'pcode' => 430000,
            ),
            127 =>
            array (
                'code' => 430501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 430500,
            ),
            128 =>
            array (
                'code' => 430502,
                'level' => 3,
                'name' => '双清区',
                'pcode' => 430500,
            ),
            129 =>
            array (
                'code' => 430503,
                'level' => 3,
                'name' => '大祥区',
                'pcode' => 430500,
            ),
            130 =>
            array (
                'code' => 430511,
                'level' => 3,
                'name' => '北塔区',
                'pcode' => 430500,
            ),
            131 =>
            array (
                'code' => 430522,
                'level' => 3,
                'name' => '新邵县',
                'pcode' => 430500,
            ),
            132 =>
            array (
                'code' => 430523,
                'level' => 3,
                'name' => '邵阳县',
                'pcode' => 430500,
            ),
            133 =>
            array (
                'code' => 430524,
                'level' => 3,
                'name' => '隆回县',
                'pcode' => 430500,
            ),
            134 =>
            array (
                'code' => 430525,
                'level' => 3,
                'name' => '洞口县',
                'pcode' => 430500,
            ),
            135 =>
            array (
                'code' => 430527,
                'level' => 3,
                'name' => '绥宁县',
                'pcode' => 430500,
            ),
            136 =>
            array (
                'code' => 430528,
                'level' => 3,
                'name' => '新宁县',
                'pcode' => 430500,
            ),
            137 =>
            array (
                'code' => 430529,
                'level' => 3,
                'name' => '城步苗族自治县',
                'pcode' => 430500,
            ),
            138 =>
            array (
                'code' => 430581,
                'level' => 3,
                'name' => '武冈市',
                'pcode' => 430500,
            ),
            139 =>
            array (
                'code' => 430582,
                'level' => 3,
                'name' => '邵东市',
                'pcode' => 430500,
            ),
            140 =>
            array (
                'code' => 430600,
                'level' => 2,
                'name' => '岳阳市',
                'pcode' => 430000,
            ),
            141 =>
            array (
                'code' => 430601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 430600,
            ),
            142 =>
            array (
                'code' => 430602,
                'level' => 3,
                'name' => '岳阳楼区',
                'pcode' => 430600,
            ),
            143 =>
            array (
                'code' => 430603,
                'level' => 3,
                'name' => '云溪区',
                'pcode' => 430600,
            ),
            144 =>
            array (
                'code' => 430611,
                'level' => 3,
                'name' => '君山区',
                'pcode' => 430600,
            ),
            145 =>
            array (
                'code' => 430621,
                'level' => 3,
                'name' => '岳阳县',
                'pcode' => 430600,
            ),
            146 =>
            array (
                'code' => 430623,
                'level' => 3,
                'name' => '华容县',
                'pcode' => 430600,
            ),
            147 =>
            array (
                'code' => 430624,
                'level' => 3,
                'name' => '湘阴县',
                'pcode' => 430600,
            ),
            148 =>
            array (
                'code' => 430626,
                'level' => 3,
                'name' => '平江县',
                'pcode' => 430600,
            ),
            149 =>
            array (
                'code' => 430671,
                'level' => 3,
                'name' => '岳阳市屈原管理区',
                'pcode' => 430600,
            ),
            150 =>
            array (
                'code' => 430681,
                'level' => 3,
                'name' => '汨罗市',
                'pcode' => 430600,
            ),
            151 =>
            array (
                'code' => 430682,
                'level' => 3,
                'name' => '临湘市',
                'pcode' => 430600,
            ),
            152 =>
            array (
                'code' => 430700,
                'level' => 2,
                'name' => '常德市',
                'pcode' => 430000,
            ),
            153 =>
            array (
                'code' => 430701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 430700,
            ),
            154 =>
            array (
                'code' => 430702,
                'level' => 3,
                'name' => '武陵区',
                'pcode' => 430700,
            ),
            155 =>
            array (
                'code' => 430703,
                'level' => 3,
                'name' => '鼎城区',
                'pcode' => 430700,
            ),
            156 =>
            array (
                'code' => 430721,
                'level' => 3,
                'name' => '安乡县',
                'pcode' => 430700,
            ),
            157 =>
            array (
                'code' => 430722,
                'level' => 3,
                'name' => '汉寿县',
                'pcode' => 430700,
            ),
            158 =>
            array (
                'code' => 430723,
                'level' => 3,
                'name' => '澧县',
                'pcode' => 430700,
            ),
            159 =>
            array (
                'code' => 430724,
                'level' => 3,
                'name' => '临澧县',
                'pcode' => 430700,
            ),
            160 =>
            array (
                'code' => 430725,
                'level' => 3,
                'name' => '桃源县',
                'pcode' => 430700,
            ),
            161 =>
            array (
                'code' => 430726,
                'level' => 3,
                'name' => '石门县',
                'pcode' => 430700,
            ),
            162 =>
            array (
                'code' => 430771,
                'level' => 3,
                'name' => '常德市西洞庭管理区',
                'pcode' => 430700,
            ),
            163 =>
            array (
                'code' => 430781,
                'level' => 3,
                'name' => '津市市',
                'pcode' => 430700,
            ),
            164 =>
            array (
                'code' => 430800,
                'level' => 2,
                'name' => '张家界市',
                'pcode' => 430000,
            ),
            165 =>
            array (
                'code' => 430801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 430800,
            ),
            166 =>
            array (
                'code' => 430802,
                'level' => 3,
                'name' => '永定区',
                'pcode' => 430800,
            ),
            167 =>
            array (
                'code' => 430811,
                'level' => 3,
                'name' => '武陵源区',
                'pcode' => 430800,
            ),
            168 =>
            array (
                'code' => 430821,
                'level' => 3,
                'name' => '慈利县',
                'pcode' => 430800,
            ),
            169 =>
            array (
                'code' => 430822,
                'level' => 3,
                'name' => '桑植县',
                'pcode' => 430800,
            ),
            170 =>
            array (
                'code' => 430900,
                'level' => 2,
                'name' => '益阳市',
                'pcode' => 430000,
            ),
            171 =>
            array (
                'code' => 430901,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 430900,
            ),
            172 =>
            array (
                'code' => 430902,
                'level' => 3,
                'name' => '资阳区',
                'pcode' => 430900,
            ),
            173 =>
            array (
                'code' => 430903,
                'level' => 3,
                'name' => '赫山区',
                'pcode' => 430900,
            ),
            174 =>
            array (
                'code' => 430921,
                'level' => 3,
                'name' => '南县',
                'pcode' => 430900,
            ),
            175 =>
            array (
                'code' => 430922,
                'level' => 3,
                'name' => '桃江县',
                'pcode' => 430900,
            ),
            176 =>
            array (
                'code' => 430923,
                'level' => 3,
                'name' => '安化县',
                'pcode' => 430900,
            ),
            177 =>
            array (
                'code' => 430971,
                'level' => 3,
                'name' => '益阳市大通湖管理区',
                'pcode' => 430900,
            ),
            178 =>
            array (
                'code' => 430972,
                'level' => 3,
                'name' => '湖南益阳高新技术产业园区',
                'pcode' => 430900,
            ),
            179 =>
            array (
                'code' => 430981,
                'level' => 3,
                'name' => '沅江市',
                'pcode' => 430900,
            ),
            180 =>
            array (
                'code' => 431000,
                'level' => 2,
                'name' => '郴州市',
                'pcode' => 430000,
            ),
            181 =>
            array (
                'code' => 431001,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 431000,
            ),
            182 =>
            array (
                'code' => 431002,
                'level' => 3,
                'name' => '北湖区',
                'pcode' => 431000,
            ),
            183 =>
            array (
                'code' => 431003,
                'level' => 3,
                'name' => '苏仙区',
                'pcode' => 431000,
            ),
            184 =>
            array (
                'code' => 431021,
                'level' => 3,
                'name' => '桂阳县',
                'pcode' => 431000,
            ),
            185 =>
            array (
                'code' => 431022,
                'level' => 3,
                'name' => '宜章县',
                'pcode' => 431000,
            ),
            186 =>
            array (
                'code' => 431023,
                'level' => 3,
                'name' => '永兴县',
                'pcode' => 431000,
            ),
            187 =>
            array (
                'code' => 431024,
                'level' => 3,
                'name' => '嘉禾县',
                'pcode' => 431000,
            ),
            188 =>
            array (
                'code' => 431025,
                'level' => 3,
                'name' => '临武县',
                'pcode' => 431000,
            ),
            189 =>
            array (
                'code' => 431026,
                'level' => 3,
                'name' => '汝城县',
                'pcode' => 431000,
            ),
            190 =>
            array (
                'code' => 431027,
                'level' => 3,
                'name' => '桂东县',
                'pcode' => 431000,
            ),
            191 =>
            array (
                'code' => 431028,
                'level' => 3,
                'name' => '安仁县',
                'pcode' => 431000,
            ),
            192 =>
            array (
                'code' => 431081,
                'level' => 3,
                'name' => '资兴市',
                'pcode' => 431000,
            ),
            193 =>
            array (
                'code' => 431100,
                'level' => 2,
                'name' => '永州市',
                'pcode' => 430000,
            ),
            194 =>
            array (
                'code' => 431101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 431100,
            ),
            195 =>
            array (
                'code' => 431102,
                'level' => 3,
                'name' => '零陵区',
                'pcode' => 431100,
            ),
            196 =>
            array (
                'code' => 431103,
                'level' => 3,
                'name' => '冷水滩区',
                'pcode' => 431100,
            ),
            197 =>
            array (
                'code' => 431121,
                'level' => 3,
                'name' => '祁阳县',
                'pcode' => 431100,
            ),
            198 =>
            array (
                'code' => 431122,
                'level' => 3,
                'name' => '东安县',
                'pcode' => 431100,
            ),
            199 =>
            array (
                'code' => 431123,
                'level' => 3,
                'name' => '双牌县',
                'pcode' => 431100,
            ),
            200 =>
            array (
                'code' => 431124,
                'level' => 3,
                'name' => '道县',
                'pcode' => 431100,
            ),
            201 =>
            array (
                'code' => 431125,
                'level' => 3,
                'name' => '江永县',
                'pcode' => 431100,
            ),
            202 =>
            array (
                'code' => 431126,
                'level' => 3,
                'name' => '宁远县',
                'pcode' => 431100,
            ),
            203 =>
            array (
                'code' => 431127,
                'level' => 3,
                'name' => '蓝山县',
                'pcode' => 431100,
            ),
            204 =>
            array (
                'code' => 431128,
                'level' => 3,
                'name' => '新田县',
                'pcode' => 431100,
            ),
            205 =>
            array (
                'code' => 431129,
                'level' => 3,
                'name' => '江华瑶族自治县',
                'pcode' => 431100,
            ),
            206 =>
            array (
                'code' => 431171,
                'level' => 3,
                'name' => '永州经济技术开发区',
                'pcode' => 431100,
            ),
            207 =>
            array (
                'code' => 431172,
                'level' => 3,
                'name' => '永州市金洞管理区',
                'pcode' => 431100,
            ),
            208 =>
            array (
                'code' => 431173,
                'level' => 3,
                'name' => '永州市回龙圩管理区',
                'pcode' => 431100,
            ),
            209 =>
            array (
                'code' => 431200,
                'level' => 2,
                'name' => '怀化市',
                'pcode' => 430000,
            ),
            210 =>
            array (
                'code' => 431201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 431200,
            ),
            211 =>
            array (
                'code' => 431202,
                'level' => 3,
                'name' => '鹤城区',
                'pcode' => 431200,
            ),
            212 =>
            array (
                'code' => 431221,
                'level' => 3,
                'name' => '中方县',
                'pcode' => 431200,
            ),
            213 =>
            array (
                'code' => 431222,
                'level' => 3,
                'name' => '沅陵县',
                'pcode' => 431200,
            ),
            214 =>
            array (
                'code' => 431223,
                'level' => 3,
                'name' => '辰溪县',
                'pcode' => 431200,
            ),
            215 =>
            array (
                'code' => 431224,
                'level' => 3,
                'name' => '溆浦县',
                'pcode' => 431200,
            ),
            216 =>
            array (
                'code' => 431225,
                'level' => 3,
                'name' => '会同县',
                'pcode' => 431200,
            ),
            217 =>
            array (
                'code' => 431226,
                'level' => 3,
                'name' => '麻阳苗族自治县',
                'pcode' => 431200,
            ),
            218 =>
            array (
                'code' => 431227,
                'level' => 3,
                'name' => '新晃侗族自治县',
                'pcode' => 431200,
            ),
            219 =>
            array (
                'code' => 431228,
                'level' => 3,
                'name' => '芷江侗族自治县',
                'pcode' => 431200,
            ),
            220 =>
            array (
                'code' => 431229,
                'level' => 3,
                'name' => '靖州苗族侗族自治县',
                'pcode' => 431200,
            ),
            221 =>
            array (
                'code' => 431230,
                'level' => 3,
                'name' => '通道侗族自治县',
                'pcode' => 431200,
            ),
            222 =>
            array (
                'code' => 431271,
                'level' => 3,
                'name' => '怀化市洪江管理区',
                'pcode' => 431200,
            ),
            223 =>
            array (
                'code' => 431281,
                'level' => 3,
                'name' => '洪江市',
                'pcode' => 431200,
            ),
            224 =>
            array (
                'code' => 431300,
                'level' => 2,
                'name' => '娄底市',
                'pcode' => 430000,
            ),
            225 =>
            array (
                'code' => 431301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 431300,
            ),
            226 =>
            array (
                'code' => 431302,
                'level' => 3,
                'name' => '娄星区',
                'pcode' => 431300,
            ),
            227 =>
            array (
                'code' => 431321,
                'level' => 3,
                'name' => '双峰县',
                'pcode' => 431300,
            ),
            228 =>
            array (
                'code' => 431322,
                'level' => 3,
                'name' => '新化县',
                'pcode' => 431300,
            ),
            229 =>
            array (
                'code' => 431381,
                'level' => 3,
                'name' => '冷水江市',
                'pcode' => 431300,
            ),
            230 =>
            array (
                'code' => 431382,
                'level' => 3,
                'name' => '涟源市',
                'pcode' => 431300,
            ),
            231 =>
            array (
                'code' => 433100,
                'level' => 2,
                'name' => '湘西土家族苗族自治州',
                'pcode' => 430000,
            ),
            232 =>
            array (
                'code' => 433101,
                'level' => 3,
                'name' => '吉首市',
                'pcode' => 433100,
            ),
            233 =>
            array (
                'code' => 433122,
                'level' => 3,
                'name' => '泸溪县',
                'pcode' => 433100,
            ),
            234 =>
            array (
                'code' => 433123,
                'level' => 3,
                'name' => '凤凰县',
                'pcode' => 433100,
            ),
            235 =>
            array (
                'code' => 433124,
                'level' => 3,
                'name' => '花垣县',
                'pcode' => 433100,
            ),
            236 =>
            array (
                'code' => 433125,
                'level' => 3,
                'name' => '保靖县',
                'pcode' => 433100,
            ),
            237 =>
            array (
                'code' => 433126,
                'level' => 3,
                'name' => '古丈县',
                'pcode' => 433100,
            ),
            238 =>
            array (
                'code' => 433127,
                'level' => 3,
                'name' => '永顺县',
                'pcode' => 433100,
            ),
            239 =>
            array (
                'code' => 433130,
                'level' => 3,
                'name' => '龙山县',
                'pcode' => 433100,
            ),
            240 =>
            array (
                'code' => 440000,
                'level' => 1,
                'name' => '广东省',
                'pcode' => 0,
            ),
            241 =>
            array (
                'code' => 440100,
                'level' => 2,
                'name' => '广州市',
                'pcode' => 440000,
            ),
            242 =>
            array (
                'code' => 440101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 440100,
            ),
            243 =>
            array (
                'code' => 440103,
                'level' => 3,
                'name' => '荔湾区',
                'pcode' => 440100,
            ),
            244 =>
            array (
                'code' => 440104,
                'level' => 3,
                'name' => '越秀区',
                'pcode' => 440100,
            ),
            245 =>
            array (
                'code' => 440105,
                'level' => 3,
                'name' => '海珠区',
                'pcode' => 440100,
            ),
            246 =>
            array (
                'code' => 440106,
                'level' => 3,
                'name' => '天河区',
                'pcode' => 440100,
            ),
            247 =>
            array (
                'code' => 440111,
                'level' => 3,
                'name' => '白云区',
                'pcode' => 440100,
            ),
            248 =>
            array (
                'code' => 440112,
                'level' => 3,
                'name' => '黄埔区',
                'pcode' => 440100,
            ),
            249 =>
            array (
                'code' => 440113,
                'level' => 3,
                'name' => '番禺区',
                'pcode' => 440100,
            ),
            250 =>
            array (
                'code' => 440114,
                'level' => 3,
                'name' => '花都区',
                'pcode' => 440100,
            ),
            251 =>
            array (
                'code' => 440115,
                'level' => 3,
                'name' => '南沙区',
                'pcode' => 440100,
            ),
            252 =>
            array (
                'code' => 440117,
                'level' => 3,
                'name' => '从化区',
                'pcode' => 440100,
            ),
            253 =>
            array (
                'code' => 440118,
                'level' => 3,
                'name' => '增城区',
                'pcode' => 440100,
            ),
            254 =>
            array (
                'code' => 440200,
                'level' => 2,
                'name' => '韶关市',
                'pcode' => 440000,
            ),
            255 =>
            array (
                'code' => 440201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 440200,
            ),
            256 =>
            array (
                'code' => 440203,
                'level' => 3,
                'name' => '武江区',
                'pcode' => 440200,
            ),
            257 =>
            array (
                'code' => 440204,
                'level' => 3,
                'name' => '浈江区',
                'pcode' => 440200,
            ),
            258 =>
            array (
                'code' => 440205,
                'level' => 3,
                'name' => '曲江区',
                'pcode' => 440200,
            ),
            259 =>
            array (
                'code' => 440222,
                'level' => 3,
                'name' => '始兴县',
                'pcode' => 440200,
            ),
            260 =>
            array (
                'code' => 440224,
                'level' => 3,
                'name' => '仁化县',
                'pcode' => 440200,
            ),
            261 =>
            array (
                'code' => 440229,
                'level' => 3,
                'name' => '翁源县',
                'pcode' => 440200,
            ),
            262 =>
            array (
                'code' => 440232,
                'level' => 3,
                'name' => '乳源瑶族自治县',
                'pcode' => 440200,
            ),
            263 =>
            array (
                'code' => 440233,
                'level' => 3,
                'name' => '新丰县',
                'pcode' => 440200,
            ),
            264 =>
            array (
                'code' => 440281,
                'level' => 3,
                'name' => '乐昌市',
                'pcode' => 440200,
            ),
            265 =>
            array (
                'code' => 440282,
                'level' => 3,
                'name' => '南雄市',
                'pcode' => 440200,
            ),
            266 =>
            array (
                'code' => 440300,
                'level' => 2,
                'name' => '深圳市',
                'pcode' => 440000,
            ),
            267 =>
            array (
                'code' => 440301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 440300,
            ),
            268 =>
            array (
                'code' => 440303,
                'level' => 3,
                'name' => '罗湖区',
                'pcode' => 440300,
            ),
            269 =>
            array (
                'code' => 440304,
                'level' => 3,
                'name' => '福田区',
                'pcode' => 440300,
            ),
            270 =>
            array (
                'code' => 440305,
                'level' => 3,
                'name' => '南山区',
                'pcode' => 440300,
            ),
            271 =>
            array (
                'code' => 440306,
                'level' => 3,
                'name' => '宝安区',
                'pcode' => 440300,
            ),
            272 =>
            array (
                'code' => 440307,
                'level' => 3,
                'name' => '龙岗区',
                'pcode' => 440300,
            ),
            273 =>
            array (
                'code' => 440308,
                'level' => 3,
                'name' => '盐田区',
                'pcode' => 440300,
            ),
            274 =>
            array (
                'code' => 440309,
                'level' => 3,
                'name' => '龙华区',
                'pcode' => 440300,
            ),
            275 =>
            array (
                'code' => 440310,
                'level' => 3,
                'name' => '坪山区',
                'pcode' => 440300,
            ),
            276 =>
            array (
                'code' => 440311,
                'level' => 3,
                'name' => '光明区',
                'pcode' => 440300,
            ),
            277 =>
            array (
                'code' => 440400,
                'level' => 2,
                'name' => '珠海市',
                'pcode' => 440000,
            ),
            278 =>
            array (
                'code' => 440401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 440400,
            ),
            279 =>
            array (
                'code' => 440402,
                'level' => 3,
                'name' => '香洲区',
                'pcode' => 440400,
            ),
            280 =>
            array (
                'code' => 440403,
                'level' => 3,
                'name' => '斗门区',
                'pcode' => 440400,
            ),
            281 =>
            array (
                'code' => 440404,
                'level' => 3,
                'name' => '金湾区',
                'pcode' => 440400,
            ),
            282 =>
            array (
                'code' => 440500,
                'level' => 2,
                'name' => '汕头市',
                'pcode' => 440000,
            ),
            283 =>
            array (
                'code' => 440501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 440500,
            ),
            284 =>
            array (
                'code' => 440507,
                'level' => 3,
                'name' => '龙湖区',
                'pcode' => 440500,
            ),
            285 =>
            array (
                'code' => 440511,
                'level' => 3,
                'name' => '金平区',
                'pcode' => 440500,
            ),
            286 =>
            array (
                'code' => 440512,
                'level' => 3,
                'name' => '濠江区',
                'pcode' => 440500,
            ),
            287 =>
            array (
                'code' => 440513,
                'level' => 3,
                'name' => '潮阳区',
                'pcode' => 440500,
            ),
            288 =>
            array (
                'code' => 440514,
                'level' => 3,
                'name' => '潮南区',
                'pcode' => 440500,
            ),
            289 =>
            array (
                'code' => 440515,
                'level' => 3,
                'name' => '澄海区',
                'pcode' => 440500,
            ),
            290 =>
            array (
                'code' => 440523,
                'level' => 3,
                'name' => '南澳县',
                'pcode' => 440500,
            ),
            291 =>
            array (
                'code' => 440600,
                'level' => 2,
                'name' => '佛山市',
                'pcode' => 440000,
            ),
            292 =>
            array (
                'code' => 440601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 440600,
            ),
            293 =>
            array (
                'code' => 440604,
                'level' => 3,
                'name' => '禅城区',
                'pcode' => 440600,
            ),
            294 =>
            array (
                'code' => 440605,
                'level' => 3,
                'name' => '南海区',
                'pcode' => 440600,
            ),
            295 =>
            array (
                'code' => 440606,
                'level' => 3,
                'name' => '顺德区',
                'pcode' => 440600,
            ),
            296 =>
            array (
                'code' => 440607,
                'level' => 3,
                'name' => '三水区',
                'pcode' => 440600,
            ),
            297 =>
            array (
                'code' => 440608,
                'level' => 3,
                'name' => '高明区',
                'pcode' => 440600,
            ),
            298 =>
            array (
                'code' => 440700,
                'level' => 2,
                'name' => '江门市',
                'pcode' => 440000,
            ),
            299 =>
            array (
                'code' => 440701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 440700,
            ),
            300 =>
            array (
                'code' => 440703,
                'level' => 3,
                'name' => '蓬江区',
                'pcode' => 440700,
            ),
            301 =>
            array (
                'code' => 440704,
                'level' => 3,
                'name' => '江海区',
                'pcode' => 440700,
            ),
            302 =>
            array (
                'code' => 440705,
                'level' => 3,
                'name' => '新会区',
                'pcode' => 440700,
            ),
            303 =>
            array (
                'code' => 440781,
                'level' => 3,
                'name' => '台山市',
                'pcode' => 440700,
            ),
            304 =>
            array (
                'code' => 440783,
                'level' => 3,
                'name' => '开平市',
                'pcode' => 440700,
            ),
            305 =>
            array (
                'code' => 440784,
                'level' => 3,
                'name' => '鹤山市',
                'pcode' => 440700,
            ),
            306 =>
            array (
                'code' => 440785,
                'level' => 3,
                'name' => '恩平市',
                'pcode' => 440700,
            ),
            307 =>
            array (
                'code' => 440800,
                'level' => 2,
                'name' => '湛江市',
                'pcode' => 440000,
            ),
            308 =>
            array (
                'code' => 440801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 440800,
            ),
            309 =>
            array (
                'code' => 440802,
                'level' => 3,
                'name' => '赤坎区',
                'pcode' => 440800,
            ),
            310 =>
            array (
                'code' => 440803,
                'level' => 3,
                'name' => '霞山区',
                'pcode' => 440800,
            ),
            311 =>
            array (
                'code' => 440804,
                'level' => 3,
                'name' => '坡头区',
                'pcode' => 440800,
            ),
            312 =>
            array (
                'code' => 440811,
                'level' => 3,
                'name' => '麻章区',
                'pcode' => 440800,
            ),
            313 =>
            array (
                'code' => 440823,
                'level' => 3,
                'name' => '遂溪县',
                'pcode' => 440800,
            ),
            314 =>
            array (
                'code' => 440825,
                'level' => 3,
                'name' => '徐闻县',
                'pcode' => 440800,
            ),
            315 =>
            array (
                'code' => 440881,
                'level' => 3,
                'name' => '廉江市',
                'pcode' => 440800,
            ),
            316 =>
            array (
                'code' => 440882,
                'level' => 3,
                'name' => '雷州市',
                'pcode' => 440800,
            ),
            317 =>
            array (
                'code' => 440883,
                'level' => 3,
                'name' => '吴川市',
                'pcode' => 440800,
            ),
            318 =>
            array (
                'code' => 440900,
                'level' => 2,
                'name' => '茂名市',
                'pcode' => 440000,
            ),
            319 =>
            array (
                'code' => 440901,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 440900,
            ),
            320 =>
            array (
                'code' => 440902,
                'level' => 3,
                'name' => '茂南区',
                'pcode' => 440900,
            ),
            321 =>
            array (
                'code' => 440904,
                'level' => 3,
                'name' => '电白区',
                'pcode' => 440900,
            ),
            322 =>
            array (
                'code' => 440981,
                'level' => 3,
                'name' => '高州市',
                'pcode' => 440900,
            ),
            323 =>
            array (
                'code' => 440982,
                'level' => 3,
                'name' => '化州市',
                'pcode' => 440900,
            ),
            324 =>
            array (
                'code' => 440983,
                'level' => 3,
                'name' => '信宜市',
                'pcode' => 440900,
            ),
            325 =>
            array (
                'code' => 441200,
                'level' => 2,
                'name' => '肇庆市',
                'pcode' => 440000,
            ),
            326 =>
            array (
                'code' => 441201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 441200,
            ),
            327 =>
            array (
                'code' => 441202,
                'level' => 3,
                'name' => '端州区',
                'pcode' => 441200,
            ),
            328 =>
            array (
                'code' => 441203,
                'level' => 3,
                'name' => '鼎湖区',
                'pcode' => 441200,
            ),
            329 =>
            array (
                'code' => 441204,
                'level' => 3,
                'name' => '高要区',
                'pcode' => 441200,
            ),
            330 =>
            array (
                'code' => 441223,
                'level' => 3,
                'name' => '广宁县',
                'pcode' => 441200,
            ),
            331 =>
            array (
                'code' => 441224,
                'level' => 3,
                'name' => '怀集县',
                'pcode' => 441200,
            ),
            332 =>
            array (
                'code' => 441225,
                'level' => 3,
                'name' => '封开县',
                'pcode' => 441200,
            ),
            333 =>
            array (
                'code' => 441226,
                'level' => 3,
                'name' => '德庆县',
                'pcode' => 441200,
            ),
            334 =>
            array (
                'code' => 441284,
                'level' => 3,
                'name' => '四会市',
                'pcode' => 441200,
            ),
            335 =>
            array (
                'code' => 441300,
                'level' => 2,
                'name' => '惠州市',
                'pcode' => 440000,
            ),
            336 =>
            array (
                'code' => 441301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 441300,
            ),
            337 =>
            array (
                'code' => 441302,
                'level' => 3,
                'name' => '惠城区',
                'pcode' => 441300,
            ),
            338 =>
            array (
                'code' => 441303,
                'level' => 3,
                'name' => '惠阳区',
                'pcode' => 441300,
            ),
            339 =>
            array (
                'code' => 441322,
                'level' => 3,
                'name' => '博罗县',
                'pcode' => 441300,
            ),
            340 =>
            array (
                'code' => 441323,
                'level' => 3,
                'name' => '惠东县',
                'pcode' => 441300,
            ),
            341 =>
            array (
                'code' => 441324,
                'level' => 3,
                'name' => '龙门县',
                'pcode' => 441300,
            ),
            342 =>
            array (
                'code' => 441400,
                'level' => 2,
                'name' => '梅州市',
                'pcode' => 440000,
            ),
            343 =>
            array (
                'code' => 441401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 441400,
            ),
            344 =>
            array (
                'code' => 441402,
                'level' => 3,
                'name' => '梅江区',
                'pcode' => 441400,
            ),
            345 =>
            array (
                'code' => 441403,
                'level' => 3,
                'name' => '梅县区',
                'pcode' => 441400,
            ),
            346 =>
            array (
                'code' => 441422,
                'level' => 3,
                'name' => '大埔县',
                'pcode' => 441400,
            ),
            347 =>
            array (
                'code' => 441423,
                'level' => 3,
                'name' => '丰顺县',
                'pcode' => 441400,
            ),
            348 =>
            array (
                'code' => 441424,
                'level' => 3,
                'name' => '五华县',
                'pcode' => 441400,
            ),
            349 =>
            array (
                'code' => 441426,
                'level' => 3,
                'name' => '平远县',
                'pcode' => 441400,
            ),
            350 =>
            array (
                'code' => 441427,
                'level' => 3,
                'name' => '蕉岭县',
                'pcode' => 441400,
            ),
            351 =>
            array (
                'code' => 441481,
                'level' => 3,
                'name' => '兴宁市',
                'pcode' => 441400,
            ),
            352 =>
            array (
                'code' => 441500,
                'level' => 2,
                'name' => '汕尾市',
                'pcode' => 440000,
            ),
            353 =>
            array (
                'code' => 441501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 441500,
            ),
            354 =>
            array (
                'code' => 441502,
                'level' => 3,
                'name' => '城区',
                'pcode' => 441500,
            ),
            355 =>
            array (
                'code' => 441521,
                'level' => 3,
                'name' => '海丰县',
                'pcode' => 441500,
            ),
            356 =>
            array (
                'code' => 441523,
                'level' => 3,
                'name' => '陆河县',
                'pcode' => 441500,
            ),
            357 =>
            array (
                'code' => 441581,
                'level' => 3,
                'name' => '陆丰市',
                'pcode' => 441500,
            ),
            358 =>
            array (
                'code' => 441600,
                'level' => 2,
                'name' => '河源市',
                'pcode' => 440000,
            ),
            359 =>
            array (
                'code' => 441601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 441600,
            ),
            360 =>
            array (
                'code' => 441602,
                'level' => 3,
                'name' => '源城区',
                'pcode' => 441600,
            ),
            361 =>
            array (
                'code' => 441621,
                'level' => 3,
                'name' => '紫金县',
                'pcode' => 441600,
            ),
            362 =>
            array (
                'code' => 441622,
                'level' => 3,
                'name' => '龙川县',
                'pcode' => 441600,
            ),
            363 =>
            array (
                'code' => 441623,
                'level' => 3,
                'name' => '连平县',
                'pcode' => 441600,
            ),
            364 =>
            array (
                'code' => 441624,
                'level' => 3,
                'name' => '和平县',
                'pcode' => 441600,
            ),
            365 =>
            array (
                'code' => 441625,
                'level' => 3,
                'name' => '东源县',
                'pcode' => 441600,
            ),
            366 =>
            array (
                'code' => 441700,
                'level' => 2,
                'name' => '阳江市',
                'pcode' => 440000,
            ),
            367 =>
            array (
                'code' => 441701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 441700,
            ),
            368 =>
            array (
                'code' => 441702,
                'level' => 3,
                'name' => '江城区',
                'pcode' => 441700,
            ),
            369 =>
            array (
                'code' => 441704,
                'level' => 3,
                'name' => '阳东区',
                'pcode' => 441700,
            ),
            370 =>
            array (
                'code' => 441721,
                'level' => 3,
                'name' => '阳西县',
                'pcode' => 441700,
            ),
            371 =>
            array (
                'code' => 441781,
                'level' => 3,
                'name' => '阳春市',
                'pcode' => 441700,
            ),
            372 =>
            array (
                'code' => 441800,
                'level' => 2,
                'name' => '清远市',
                'pcode' => 440000,
            ),
            373 =>
            array (
                'code' => 441801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 441800,
            ),
            374 =>
            array (
                'code' => 441802,
                'level' => 3,
                'name' => '清城区',
                'pcode' => 441800,
            ),
            375 =>
            array (
                'code' => 441803,
                'level' => 3,
                'name' => '清新区',
                'pcode' => 441800,
            ),
            376 =>
            array (
                'code' => 441821,
                'level' => 3,
                'name' => '佛冈县',
                'pcode' => 441800,
            ),
            377 =>
            array (
                'code' => 441823,
                'level' => 3,
                'name' => '阳山县',
                'pcode' => 441800,
            ),
            378 =>
            array (
                'code' => 441825,
                'level' => 3,
                'name' => '连山壮族瑶族自治县',
                'pcode' => 441800,
            ),
            379 =>
            array (
                'code' => 441826,
                'level' => 3,
                'name' => '连南瑶族自治县',
                'pcode' => 441800,
            ),
            380 =>
            array (
                'code' => 441881,
                'level' => 3,
                'name' => '英德市',
                'pcode' => 441800,
            ),
            381 =>
            array (
                'code' => 441882,
                'level' => 3,
                'name' => '连州市',
                'pcode' => 441800,
            ),
            382 =>
            array (
                'code' => 441900,
                'level' => 2,
                'name' => '东莞市',
                'pcode' => 440000,
            ),
            383 =>
            array (
                'code' => 442000,
                'level' => 2,
                'name' => '中山市',
                'pcode' => 440000,
            ),
            384 =>
            array (
                'code' => 445100,
                'level' => 2,
                'name' => '潮州市',
                'pcode' => 440000,
            ),
            385 =>
            array (
                'code' => 445101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 445100,
            ),
            386 =>
            array (
                'code' => 445102,
                'level' => 3,
                'name' => '湘桥区',
                'pcode' => 445100,
            ),
            387 =>
            array (
                'code' => 445103,
                'level' => 3,
                'name' => '潮安区',
                'pcode' => 445100,
            ),
            388 =>
            array (
                'code' => 445122,
                'level' => 3,
                'name' => '饶平县',
                'pcode' => 445100,
            ),
            389 =>
            array (
                'code' => 445200,
                'level' => 2,
                'name' => '揭阳市',
                'pcode' => 440000,
            ),
            390 =>
            array (
                'code' => 445201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 445200,
            ),
            391 =>
            array (
                'code' => 445202,
                'level' => 3,
                'name' => '榕城区',
                'pcode' => 445200,
            ),
            392 =>
            array (
                'code' => 445203,
                'level' => 3,
                'name' => '揭东区',
                'pcode' => 445200,
            ),
            393 =>
            array (
                'code' => 445222,
                'level' => 3,
                'name' => '揭西县',
                'pcode' => 445200,
            ),
            394 =>
            array (
                'code' => 445224,
                'level' => 3,
                'name' => '惠来县',
                'pcode' => 445200,
            ),
            395 =>
            array (
                'code' => 445281,
                'level' => 3,
                'name' => '普宁市',
                'pcode' => 445200,
            ),
            396 =>
            array (
                'code' => 445300,
                'level' => 2,
                'name' => '云浮市',
                'pcode' => 440000,
            ),
            397 =>
            array (
                'code' => 445301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 445300,
            ),
            398 =>
            array (
                'code' => 445302,
                'level' => 3,
                'name' => '云城区',
                'pcode' => 445300,
            ),
            399 =>
            array (
                'code' => 445303,
                'level' => 3,
                'name' => '云安区',
                'pcode' => 445300,
            ),
            400 =>
            array (
                'code' => 445321,
                'level' => 3,
                'name' => '新兴县',
                'pcode' => 445300,
            ),
            401 =>
            array (
                'code' => 445322,
                'level' => 3,
                'name' => '郁南县',
                'pcode' => 445300,
            ),
            402 =>
            array (
                'code' => 445381,
                'level' => 3,
                'name' => '罗定市',
                'pcode' => 445300,
            ),
            403 =>
            array (
                'code' => 450000,
                'level' => 1,
                'name' => '广西壮族自治区',
                'pcode' => 0,
            ),
            404 =>
            array (
                'code' => 450100,
                'level' => 2,
                'name' => '南宁市',
                'pcode' => 450000,
            ),
            405 =>
            array (
                'code' => 450101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 450100,
            ),
            406 =>
            array (
                'code' => 450102,
                'level' => 3,
                'name' => '兴宁区',
                'pcode' => 450100,
            ),
            407 =>
            array (
                'code' => 450103,
                'level' => 3,
                'name' => '青秀区',
                'pcode' => 450100,
            ),
            408 =>
            array (
                'code' => 450105,
                'level' => 3,
                'name' => '江南区',
                'pcode' => 450100,
            ),
            409 =>
            array (
                'code' => 450107,
                'level' => 3,
                'name' => '西乡塘区',
                'pcode' => 450100,
            ),
            410 =>
            array (
                'code' => 450108,
                'level' => 3,
                'name' => '良庆区',
                'pcode' => 450100,
            ),
            411 =>
            array (
                'code' => 450109,
                'level' => 3,
                'name' => '邕宁区',
                'pcode' => 450100,
            ),
            412 =>
            array (
                'code' => 450110,
                'level' => 3,
                'name' => '武鸣区',
                'pcode' => 450100,
            ),
            413 =>
            array (
                'code' => 450123,
                'level' => 3,
                'name' => '隆安县',
                'pcode' => 450100,
            ),
            414 =>
            array (
                'code' => 450124,
                'level' => 3,
                'name' => '马山县',
                'pcode' => 450100,
            ),
            415 =>
            array (
                'code' => 450125,
                'level' => 3,
                'name' => '上林县',
                'pcode' => 450100,
            ),
            416 =>
            array (
                'code' => 450126,
                'level' => 3,
                'name' => '宾阳县',
                'pcode' => 450100,
            ),
            417 =>
            array (
                'code' => 450127,
                'level' => 3,
                'name' => '横县',
                'pcode' => 450100,
            ),
            418 =>
            array (
                'code' => 450200,
                'level' => 2,
                'name' => '柳州市',
                'pcode' => 450000,
            ),
            419 =>
            array (
                'code' => 450201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 450200,
            ),
            420 =>
            array (
                'code' => 450202,
                'level' => 3,
                'name' => '城中区',
                'pcode' => 450200,
            ),
            421 =>
            array (
                'code' => 450203,
                'level' => 3,
                'name' => '鱼峰区',
                'pcode' => 450200,
            ),
            422 =>
            array (
                'code' => 450204,
                'level' => 3,
                'name' => '柳南区',
                'pcode' => 450200,
            ),
            423 =>
            array (
                'code' => 450205,
                'level' => 3,
                'name' => '柳北区',
                'pcode' => 450200,
            ),
            424 =>
            array (
                'code' => 450206,
                'level' => 3,
                'name' => '柳江区',
                'pcode' => 450200,
            ),
            425 =>
            array (
                'code' => 450222,
                'level' => 3,
                'name' => '柳城县',
                'pcode' => 450200,
            ),
            426 =>
            array (
                'code' => 450223,
                'level' => 3,
                'name' => '鹿寨县',
                'pcode' => 450200,
            ),
            427 =>
            array (
                'code' => 450224,
                'level' => 3,
                'name' => '融安县',
                'pcode' => 450200,
            ),
            428 =>
            array (
                'code' => 450225,
                'level' => 3,
                'name' => '融水苗族自治县',
                'pcode' => 450200,
            ),
            429 =>
            array (
                'code' => 450226,
                'level' => 3,
                'name' => '三江侗族自治县',
                'pcode' => 450200,
            ),
            430 =>
            array (
                'code' => 450300,
                'level' => 2,
                'name' => '桂林市',
                'pcode' => 450000,
            ),
            431 =>
            array (
                'code' => 450301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 450300,
            ),
            432 =>
            array (
                'code' => 450302,
                'level' => 3,
                'name' => '秀峰区',
                'pcode' => 450300,
            ),
            433 =>
            array (
                'code' => 450303,
                'level' => 3,
                'name' => '叠彩区',
                'pcode' => 450300,
            ),
            434 =>
            array (
                'code' => 450304,
                'level' => 3,
                'name' => '象山区',
                'pcode' => 450300,
            ),
            435 =>
            array (
                'code' => 450305,
                'level' => 3,
                'name' => '七星区',
                'pcode' => 450300,
            ),
            436 =>
            array (
                'code' => 450311,
                'level' => 3,
                'name' => '雁山区',
                'pcode' => 450300,
            ),
            437 =>
            array (
                'code' => 450312,
                'level' => 3,
                'name' => '临桂区',
                'pcode' => 450300,
            ),
            438 =>
            array (
                'code' => 450321,
                'level' => 3,
                'name' => '阳朔县',
                'pcode' => 450300,
            ),
            439 =>
            array (
                'code' => 450323,
                'level' => 3,
                'name' => '灵川县',
                'pcode' => 450300,
            ),
            440 =>
            array (
                'code' => 450324,
                'level' => 3,
                'name' => '全州县',
                'pcode' => 450300,
            ),
            441 =>
            array (
                'code' => 450325,
                'level' => 3,
                'name' => '兴安县',
                'pcode' => 450300,
            ),
            442 =>
            array (
                'code' => 450326,
                'level' => 3,
                'name' => '永福县',
                'pcode' => 450300,
            ),
            443 =>
            array (
                'code' => 450327,
                'level' => 3,
                'name' => '灌阳县',
                'pcode' => 450300,
            ),
            444 =>
            array (
                'code' => 450328,
                'level' => 3,
                'name' => '龙胜各族自治县',
                'pcode' => 450300,
            ),
            445 =>
            array (
                'code' => 450329,
                'level' => 3,
                'name' => '资源县',
                'pcode' => 450300,
            ),
            446 =>
            array (
                'code' => 450330,
                'level' => 3,
                'name' => '平乐县',
                'pcode' => 450300,
            ),
            447 =>
            array (
                'code' => 450332,
                'level' => 3,
                'name' => '恭城瑶族自治县',
                'pcode' => 450300,
            ),
            448 =>
            array (
                'code' => 450381,
                'level' => 3,
                'name' => '荔浦市',
                'pcode' => 450300,
            ),
            449 =>
            array (
                'code' => 450400,
                'level' => 2,
                'name' => '梧州市',
                'pcode' => 450000,
            ),
            450 =>
            array (
                'code' => 450401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 450400,
            ),
            451 =>
            array (
                'code' => 450403,
                'level' => 3,
                'name' => '万秀区',
                'pcode' => 450400,
            ),
            452 =>
            array (
                'code' => 450405,
                'level' => 3,
                'name' => '长洲区',
                'pcode' => 450400,
            ),
            453 =>
            array (
                'code' => 450406,
                'level' => 3,
                'name' => '龙圩区',
                'pcode' => 450400,
            ),
            454 =>
            array (
                'code' => 450421,
                'level' => 3,
                'name' => '苍梧县',
                'pcode' => 450400,
            ),
            455 =>
            array (
                'code' => 450422,
                'level' => 3,
                'name' => '藤县',
                'pcode' => 450400,
            ),
            456 =>
            array (
                'code' => 450423,
                'level' => 3,
                'name' => '蒙山县',
                'pcode' => 450400,
            ),
            457 =>
            array (
                'code' => 450481,
                'level' => 3,
                'name' => '岑溪市',
                'pcode' => 450400,
            ),
            458 =>
            array (
                'code' => 450500,
                'level' => 2,
                'name' => '北海市',
                'pcode' => 450000,
            ),
            459 =>
            array (
                'code' => 450501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 450500,
            ),
            460 =>
            array (
                'code' => 450502,
                'level' => 3,
                'name' => '海城区',
                'pcode' => 450500,
            ),
            461 =>
            array (
                'code' => 450503,
                'level' => 3,
                'name' => '银海区',
                'pcode' => 450500,
            ),
            462 =>
            array (
                'code' => 450512,
                'level' => 3,
                'name' => '铁山港区',
                'pcode' => 450500,
            ),
            463 =>
            array (
                'code' => 450521,
                'level' => 3,
                'name' => '合浦县',
                'pcode' => 450500,
            ),
            464 =>
            array (
                'code' => 450600,
                'level' => 2,
                'name' => '防城港市',
                'pcode' => 450000,
            ),
            465 =>
            array (
                'code' => 450601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 450600,
            ),
            466 =>
            array (
                'code' => 450602,
                'level' => 3,
                'name' => '港口区',
                'pcode' => 450600,
            ),
            467 =>
            array (
                'code' => 450603,
                'level' => 3,
                'name' => '防城区',
                'pcode' => 450600,
            ),
            468 =>
            array (
                'code' => 450621,
                'level' => 3,
                'name' => '上思县',
                'pcode' => 450600,
            ),
            469 =>
            array (
                'code' => 450681,
                'level' => 3,
                'name' => '东兴市',
                'pcode' => 450600,
            ),
            470 =>
            array (
                'code' => 450700,
                'level' => 2,
                'name' => '钦州市',
                'pcode' => 450000,
            ),
            471 =>
            array (
                'code' => 450701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 450700,
            ),
            472 =>
            array (
                'code' => 450702,
                'level' => 3,
                'name' => '钦南区',
                'pcode' => 450700,
            ),
            473 =>
            array (
                'code' => 450703,
                'level' => 3,
                'name' => '钦北区',
                'pcode' => 450700,
            ),
            474 =>
            array (
                'code' => 450721,
                'level' => 3,
                'name' => '灵山县',
                'pcode' => 450700,
            ),
            475 =>
            array (
                'code' => 450722,
                'level' => 3,
                'name' => '浦北县',
                'pcode' => 450700,
            ),
            476 =>
            array (
                'code' => 450800,
                'level' => 2,
                'name' => '贵港市',
                'pcode' => 450000,
            ),
            477 =>
            array (
                'code' => 450801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 450800,
            ),
            478 =>
            array (
                'code' => 450802,
                'level' => 3,
                'name' => '港北区',
                'pcode' => 450800,
            ),
            479 =>
            array (
                'code' => 450803,
                'level' => 3,
                'name' => '港南区',
                'pcode' => 450800,
            ),
            480 =>
            array (
                'code' => 450804,
                'level' => 3,
                'name' => '覃塘区',
                'pcode' => 450800,
            ),
            481 =>
            array (
                'code' => 450821,
                'level' => 3,
                'name' => '平南县',
                'pcode' => 450800,
            ),
            482 =>
            array (
                'code' => 450881,
                'level' => 3,
                'name' => '桂平市',
                'pcode' => 450800,
            ),
            483 =>
            array (
                'code' => 450900,
                'level' => 2,
                'name' => '玉林市',
                'pcode' => 450000,
            ),
            484 =>
            array (
                'code' => 450901,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 450900,
            ),
            485 =>
            array (
                'code' => 450902,
                'level' => 3,
                'name' => '玉州区',
                'pcode' => 450900,
            ),
            486 =>
            array (
                'code' => 450903,
                'level' => 3,
                'name' => '福绵区',
                'pcode' => 450900,
            ),
            487 =>
            array (
                'code' => 450921,
                'level' => 3,
                'name' => '容县',
                'pcode' => 450900,
            ),
            488 =>
            array (
                'code' => 450922,
                'level' => 3,
                'name' => '陆川县',
                'pcode' => 450900,
            ),
            489 =>
            array (
                'code' => 450923,
                'level' => 3,
                'name' => '博白县',
                'pcode' => 450900,
            ),
            490 =>
            array (
                'code' => 450924,
                'level' => 3,
                'name' => '兴业县',
                'pcode' => 450900,
            ),
            491 =>
            array (
                'code' => 450981,
                'level' => 3,
                'name' => '北流市',
                'pcode' => 450900,
            ),
            492 =>
            array (
                'code' => 451000,
                'level' => 2,
                'name' => '百色市',
                'pcode' => 450000,
            ),
            493 =>
            array (
                'code' => 451001,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 451000,
            ),
            494 =>
            array (
                'code' => 451002,
                'level' => 3,
                'name' => '右江区',
                'pcode' => 451000,
            ),
            495 =>
            array (
                'code' => 451003,
                'level' => 3,
                'name' => '田阳区',
                'pcode' => 451000,
            ),
            496 =>
            array (
                'code' => 451022,
                'level' => 3,
                'name' => '田东县',
                'pcode' => 451000,
            ),
            497 =>
            array (
                'code' => 451024,
                'level' => 3,
                'name' => '德保县',
                'pcode' => 451000,
            ),
            498 =>
            array (
                'code' => 451026,
                'level' => 3,
                'name' => '那坡县',
                'pcode' => 451000,
            ),
            499 =>
            array (
                'code' => 451027,
                'level' => 3,
                'name' => '凌云县',
                'pcode' => 451000,
            ),
        ));
        \DB::table('china_areas')->insert(array (
            0 =>
            array (
                'code' => 451028,
                'level' => 3,
                'name' => '乐业县',
                'pcode' => 451000,
            ),
            1 =>
            array (
                'code' => 451029,
                'level' => 3,
                'name' => '田林县',
                'pcode' => 451000,
            ),
            2 =>
            array (
                'code' => 451030,
                'level' => 3,
                'name' => '西林县',
                'pcode' => 451000,
            ),
            3 =>
            array (
                'code' => 451031,
                'level' => 3,
                'name' => '隆林各族自治县',
                'pcode' => 451000,
            ),
            4 =>
            array (
                'code' => 451081,
                'level' => 3,
                'name' => '靖西市',
                'pcode' => 451000,
            ),
            5 =>
            array (
                'code' => 451082,
                'level' => 3,
                'name' => '平果市',
                'pcode' => 451000,
            ),
            6 =>
            array (
                'code' => 451100,
                'level' => 2,
                'name' => '贺州市',
                'pcode' => 450000,
            ),
            7 =>
            array (
                'code' => 451101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 451100,
            ),
            8 =>
            array (
                'code' => 451102,
                'level' => 3,
                'name' => '八步区',
                'pcode' => 451100,
            ),
            9 =>
            array (
                'code' => 451103,
                'level' => 3,
                'name' => '平桂区',
                'pcode' => 451100,
            ),
            10 =>
            array (
                'code' => 451121,
                'level' => 3,
                'name' => '昭平县',
                'pcode' => 451100,
            ),
            11 =>
            array (
                'code' => 451122,
                'level' => 3,
                'name' => '钟山县',
                'pcode' => 451100,
            ),
            12 =>
            array (
                'code' => 451123,
                'level' => 3,
                'name' => '富川瑶族自治县',
                'pcode' => 451100,
            ),
            13 =>
            array (
                'code' => 451200,
                'level' => 2,
                'name' => '河池市',
                'pcode' => 450000,
            ),
            14 =>
            array (
                'code' => 451201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 451200,
            ),
            15 =>
            array (
                'code' => 451202,
                'level' => 3,
                'name' => '金城江区',
                'pcode' => 451200,
            ),
            16 =>
            array (
                'code' => 451203,
                'level' => 3,
                'name' => '宜州区',
                'pcode' => 451200,
            ),
            17 =>
            array (
                'code' => 451221,
                'level' => 3,
                'name' => '南丹县',
                'pcode' => 451200,
            ),
            18 =>
            array (
                'code' => 451222,
                'level' => 3,
                'name' => '天峨县',
                'pcode' => 451200,
            ),
            19 =>
            array (
                'code' => 451223,
                'level' => 3,
                'name' => '凤山县',
                'pcode' => 451200,
            ),
            20 =>
            array (
                'code' => 451224,
                'level' => 3,
                'name' => '东兰县',
                'pcode' => 451200,
            ),
            21 =>
            array (
                'code' => 451225,
                'level' => 3,
                'name' => '罗城仫佬族自治县',
                'pcode' => 451200,
            ),
            22 =>
            array (
                'code' => 451226,
                'level' => 3,
                'name' => '环江毛南族自治县',
                'pcode' => 451200,
            ),
            23 =>
            array (
                'code' => 451227,
                'level' => 3,
                'name' => '巴马瑶族自治县',
                'pcode' => 451200,
            ),
            24 =>
            array (
                'code' => 451228,
                'level' => 3,
                'name' => '都安瑶族自治县',
                'pcode' => 451200,
            ),
            25 =>
            array (
                'code' => 451229,
                'level' => 3,
                'name' => '大化瑶族自治县',
                'pcode' => 451200,
            ),
            26 =>
            array (
                'code' => 451300,
                'level' => 2,
                'name' => '来宾市',
                'pcode' => 450000,
            ),
            27 =>
            array (
                'code' => 451301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 451300,
            ),
            28 =>
            array (
                'code' => 451302,
                'level' => 3,
                'name' => '兴宾区',
                'pcode' => 451300,
            ),
            29 =>
            array (
                'code' => 451321,
                'level' => 3,
                'name' => '忻城县',
                'pcode' => 451300,
            ),
            30 =>
            array (
                'code' => 451322,
                'level' => 3,
                'name' => '象州县',
                'pcode' => 451300,
            ),
            31 =>
            array (
                'code' => 451323,
                'level' => 3,
                'name' => '武宣县',
                'pcode' => 451300,
            ),
            32 =>
            array (
                'code' => 451324,
                'level' => 3,
                'name' => '金秀瑶族自治县',
                'pcode' => 451300,
            ),
            33 =>
            array (
                'code' => 451381,
                'level' => 3,
                'name' => '合山市',
                'pcode' => 451300,
            ),
            34 =>
            array (
                'code' => 451400,
                'level' => 2,
                'name' => '崇左市',
                'pcode' => 450000,
            ),
            35 =>
            array (
                'code' => 451401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 451400,
            ),
            36 =>
            array (
                'code' => 451402,
                'level' => 3,
                'name' => '江州区',
                'pcode' => 451400,
            ),
            37 =>
            array (
                'code' => 451421,
                'level' => 3,
                'name' => '扶绥县',
                'pcode' => 451400,
            ),
            38 =>
            array (
                'code' => 451422,
                'level' => 3,
                'name' => '宁明县',
                'pcode' => 451400,
            ),
            39 =>
            array (
                'code' => 451423,
                'level' => 3,
                'name' => '龙州县',
                'pcode' => 451400,
            ),
            40 =>
            array (
                'code' => 451424,
                'level' => 3,
                'name' => '大新县',
                'pcode' => 451400,
            ),
            41 =>
            array (
                'code' => 451425,
                'level' => 3,
                'name' => '天等县',
                'pcode' => 451400,
            ),
            42 =>
            array (
                'code' => 451481,
                'level' => 3,
                'name' => '凭祥市',
                'pcode' => 451400,
            ),
            43 =>
            array (
                'code' => 460000,
                'level' => 1,
                'name' => '海南省',
                'pcode' => 0,
            ),
            44 =>
            array (
                'code' => 460100,
                'level' => 2,
                'name' => '海口市',
                'pcode' => 460000,
            ),
            45 =>
            array (
                'code' => 460101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 460100,
            ),
            46 =>
            array (
                'code' => 460105,
                'level' => 3,
                'name' => '秀英区',
                'pcode' => 460100,
            ),
            47 =>
            array (
                'code' => 460106,
                'level' => 3,
                'name' => '龙华区',
                'pcode' => 460100,
            ),
            48 =>
            array (
                'code' => 460107,
                'level' => 3,
                'name' => '琼山区',
                'pcode' => 460100,
            ),
            49 =>
            array (
                'code' => 460108,
                'level' => 3,
                'name' => '美兰区',
                'pcode' => 460100,
            ),
            50 =>
            array (
                'code' => 460200,
                'level' => 2,
                'name' => '三亚市',
                'pcode' => 460000,
            ),
            51 =>
            array (
                'code' => 460201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 460200,
            ),
            52 =>
            array (
                'code' => 460202,
                'level' => 3,
                'name' => '海棠区',
                'pcode' => 460200,
            ),
            53 =>
            array (
                'code' => 460203,
                'level' => 3,
                'name' => '吉阳区',
                'pcode' => 460200,
            ),
            54 =>
            array (
                'code' => 460204,
                'level' => 3,
                'name' => '天涯区',
                'pcode' => 460200,
            ),
            55 =>
            array (
                'code' => 460205,
                'level' => 3,
                'name' => '崖州区',
                'pcode' => 460200,
            ),
            56 =>
            array (
                'code' => 460300,
                'level' => 2,
                'name' => '三沙市',
                'pcode' => 460000,
            ),
            57 =>
            array (
                'code' => 460321,
                'level' => 3,
                'name' => '西沙群岛',
                'pcode' => 460300,
            ),
            58 =>
            array (
                'code' => 460322,
                'level' => 3,
                'name' => '南沙群岛',
                'pcode' => 460300,
            ),
            59 =>
            array (
                'code' => 460323,
                'level' => 3,
                'name' => '中沙群岛的岛礁及其海域',
                'pcode' => 460300,
            ),
            60 =>
            array (
                'code' => 460400,
                'level' => 2,
                'name' => '儋州市',
                'pcode' => 460000,
            ),
            61 =>
            array (
                'code' => 469000,
                'level' => 2,
                'name' => '省直辖县级行政区划',
                'pcode' => 460000,
            ),
            62 =>
            array (
                'code' => 469001,
                'level' => 3,
                'name' => '五指山市',
                'pcode' => 469000,
            ),
            63 =>
            array (
                'code' => 469002,
                'level' => 3,
                'name' => '琼海市',
                'pcode' => 469000,
            ),
            64 =>
            array (
                'code' => 469005,
                'level' => 3,
                'name' => '文昌市',
                'pcode' => 469000,
            ),
            65 =>
            array (
                'code' => 469006,
                'level' => 3,
                'name' => '万宁市',
                'pcode' => 469000,
            ),
            66 =>
            array (
                'code' => 469007,
                'level' => 3,
                'name' => '东方市',
                'pcode' => 469000,
            ),
            67 =>
            array (
                'code' => 469021,
                'level' => 3,
                'name' => '定安县',
                'pcode' => 469000,
            ),
            68 =>
            array (
                'code' => 469022,
                'level' => 3,
                'name' => '屯昌县',
                'pcode' => 469000,
            ),
            69 =>
            array (
                'code' => 469023,
                'level' => 3,
                'name' => '澄迈县',
                'pcode' => 469000,
            ),
            70 =>
            array (
                'code' => 469024,
                'level' => 3,
                'name' => '临高县',
                'pcode' => 469000,
            ),
            71 =>
            array (
                'code' => 469025,
                'level' => 3,
                'name' => '白沙黎族自治县',
                'pcode' => 469000,
            ),
            72 =>
            array (
                'code' => 469026,
                'level' => 3,
                'name' => '昌江黎族自治县',
                'pcode' => 469000,
            ),
            73 =>
            array (
                'code' => 469027,
                'level' => 3,
                'name' => '乐东黎族自治县',
                'pcode' => 469000,
            ),
            74 =>
            array (
                'code' => 469028,
                'level' => 3,
                'name' => '陵水黎族自治县',
                'pcode' => 469000,
            ),
            75 =>
            array (
                'code' => 469029,
                'level' => 3,
                'name' => '保亭黎族苗族自治县',
                'pcode' => 469000,
            ),
            76 =>
            array (
                'code' => 469030,
                'level' => 3,
                'name' => '琼中黎族苗族自治县',
                'pcode' => 469000,
            ),
            77 =>
            array (
                'code' => 500000,
                'level' => 1,
                'name' => '重庆市',
                'pcode' => 0,
            ),
            78 =>
            array (
                'code' => 500100,
                'level' => 2,
                'name' => '市辖区',
                'pcode' => 500000,
            ),
            79 =>
            array (
                'code' => 500101,
                'level' => 3,
                'name' => '万州区',
                'pcode' => 500100,
            ),
            80 =>
            array (
                'code' => 500102,
                'level' => 3,
                'name' => '涪陵区',
                'pcode' => 500100,
            ),
            81 =>
            array (
                'code' => 500103,
                'level' => 3,
                'name' => '渝中区',
                'pcode' => 500100,
            ),
            82 =>
            array (
                'code' => 500104,
                'level' => 3,
                'name' => '大渡口区',
                'pcode' => 500100,
            ),
            83 =>
            array (
                'code' => 500105,
                'level' => 3,
                'name' => '江北区',
                'pcode' => 500100,
            ),
            84 =>
            array (
                'code' => 500106,
                'level' => 3,
                'name' => '沙坪坝区',
                'pcode' => 500100,
            ),
            85 =>
            array (
                'code' => 500107,
                'level' => 3,
                'name' => '九龙坡区',
                'pcode' => 500100,
            ),
            86 =>
            array (
                'code' => 500108,
                'level' => 3,
                'name' => '南岸区',
                'pcode' => 500100,
            ),
            87 =>
            array (
                'code' => 500109,
                'level' => 3,
                'name' => '北碚区',
                'pcode' => 500100,
            ),
            88 =>
            array (
                'code' => 500110,
                'level' => 3,
                'name' => '綦江区',
                'pcode' => 500100,
            ),
            89 =>
            array (
                'code' => 500111,
                'level' => 3,
                'name' => '大足区',
                'pcode' => 500100,
            ),
            90 =>
            array (
                'code' => 500112,
                'level' => 3,
                'name' => '渝北区',
                'pcode' => 500100,
            ),
            91 =>
            array (
                'code' => 500113,
                'level' => 3,
                'name' => '巴南区',
                'pcode' => 500100,
            ),
            92 =>
            array (
                'code' => 500114,
                'level' => 3,
                'name' => '黔江区',
                'pcode' => 500100,
            ),
            93 =>
            array (
                'code' => 500115,
                'level' => 3,
                'name' => '长寿区',
                'pcode' => 500100,
            ),
            94 =>
            array (
                'code' => 500116,
                'level' => 3,
                'name' => '江津区',
                'pcode' => 500100,
            ),
            95 =>
            array (
                'code' => 500117,
                'level' => 3,
                'name' => '合川区',
                'pcode' => 500100,
            ),
            96 =>
            array (
                'code' => 500118,
                'level' => 3,
                'name' => '永川区',
                'pcode' => 500100,
            ),
            97 =>
            array (
                'code' => 500119,
                'level' => 3,
                'name' => '南川区',
                'pcode' => 500100,
            ),
            98 =>
            array (
                'code' => 500120,
                'level' => 3,
                'name' => '璧山区',
                'pcode' => 500100,
            ),
            99 =>
            array (
                'code' => 500151,
                'level' => 3,
                'name' => '铜梁区',
                'pcode' => 500100,
            ),
            100 =>
            array (
                'code' => 500152,
                'level' => 3,
                'name' => '潼南区',
                'pcode' => 500100,
            ),
            101 =>
            array (
                'code' => 500153,
                'level' => 3,
                'name' => '荣昌区',
                'pcode' => 500100,
            ),
            102 =>
            array (
                'code' => 500154,
                'level' => 3,
                'name' => '开州区',
                'pcode' => 500100,
            ),
            103 =>
            array (
                'code' => 500155,
                'level' => 3,
                'name' => '梁平区',
                'pcode' => 500100,
            ),
            104 =>
            array (
                'code' => 500156,
                'level' => 3,
                'name' => '武隆区',
                'pcode' => 500100,
            ),
            105 =>
            array (
                'code' => 500200,
                'level' => 2,
                'name' => '县',
                'pcode' => 500000,
            ),
            106 =>
            array (
                'code' => 500229,
                'level' => 3,
                'name' => '城口县',
                'pcode' => 500200,
            ),
            107 =>
            array (
                'code' => 500230,
                'level' => 3,
                'name' => '丰都县',
                'pcode' => 500200,
            ),
            108 =>
            array (
                'code' => 500231,
                'level' => 3,
                'name' => '垫江县',
                'pcode' => 500200,
            ),
            109 =>
            array (
                'code' => 500233,
                'level' => 3,
                'name' => '忠县',
                'pcode' => 500200,
            ),
            110 =>
            array (
                'code' => 500235,
                'level' => 3,
                'name' => '云阳县',
                'pcode' => 500200,
            ),
            111 =>
            array (
                'code' => 500236,
                'level' => 3,
                'name' => '奉节县',
                'pcode' => 500200,
            ),
            112 =>
            array (
                'code' => 500237,
                'level' => 3,
                'name' => '巫山县',
                'pcode' => 500200,
            ),
            113 =>
            array (
                'code' => 500238,
                'level' => 3,
                'name' => '巫溪县',
                'pcode' => 500200,
            ),
            114 =>
            array (
                'code' => 500240,
                'level' => 3,
                'name' => '石柱土家族自治县',
                'pcode' => 500200,
            ),
            115 =>
            array (
                'code' => 500241,
                'level' => 3,
                'name' => '秀山土家族苗族自治县',
                'pcode' => 500200,
            ),
            116 =>
            array (
                'code' => 500242,
                'level' => 3,
                'name' => '酉阳土家族苗族自治县',
                'pcode' => 500200,
            ),
            117 =>
            array (
                'code' => 500243,
                'level' => 3,
                'name' => '彭水苗族土家族自治县',
                'pcode' => 500200,
            ),
            118 =>
            array (
                'code' => 510000,
                'level' => 1,
                'name' => '四川省',
                'pcode' => 0,
            ),
            119 =>
            array (
                'code' => 510100,
                'level' => 2,
                'name' => '成都市',
                'pcode' => 510000,
            ),
            120 =>
            array (
                'code' => 510101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 510100,
            ),
            121 =>
            array (
                'code' => 510104,
                'level' => 3,
                'name' => '锦江区',
                'pcode' => 510100,
            ),
            122 =>
            array (
                'code' => 510105,
                'level' => 3,
                'name' => '青羊区',
                'pcode' => 510100,
            ),
            123 =>
            array (
                'code' => 510106,
                'level' => 3,
                'name' => '金牛区',
                'pcode' => 510100,
            ),
            124 =>
            array (
                'code' => 510107,
                'level' => 3,
                'name' => '武侯区',
                'pcode' => 510100,
            ),
            125 =>
            array (
                'code' => 510108,
                'level' => 3,
                'name' => '成华区',
                'pcode' => 510100,
            ),
            126 =>
            array (
                'code' => 510112,
                'level' => 3,
                'name' => '龙泉驿区',
                'pcode' => 510100,
            ),
            127 =>
            array (
                'code' => 510113,
                'level' => 3,
                'name' => '青白江区',
                'pcode' => 510100,
            ),
            128 =>
            array (
                'code' => 510114,
                'level' => 3,
                'name' => '新都区',
                'pcode' => 510100,
            ),
            129 =>
            array (
                'code' => 510115,
                'level' => 3,
                'name' => '温江区',
                'pcode' => 510100,
            ),
            130 =>
            array (
                'code' => 510116,
                'level' => 3,
                'name' => '双流区',
                'pcode' => 510100,
            ),
            131 =>
            array (
                'code' => 510117,
                'level' => 3,
                'name' => '郫都区',
                'pcode' => 510100,
            ),
            132 =>
            array (
                'code' => 510118,
                'level' => 3,
                'name' => '新津区',
                'pcode' => 510100,
            ),
            133 =>
            array (
                'code' => 510121,
                'level' => 3,
                'name' => '金堂县',
                'pcode' => 510100,
            ),
            134 =>
            array (
                'code' => 510129,
                'level' => 3,
                'name' => '大邑县',
                'pcode' => 510100,
            ),
            135 =>
            array (
                'code' => 510131,
                'level' => 3,
                'name' => '蒲江县',
                'pcode' => 510100,
            ),
            136 =>
            array (
                'code' => 510181,
                'level' => 3,
                'name' => '都江堰市',
                'pcode' => 510100,
            ),
            137 =>
            array (
                'code' => 510182,
                'level' => 3,
                'name' => '彭州市',
                'pcode' => 510100,
            ),
            138 =>
            array (
                'code' => 510183,
                'level' => 3,
                'name' => '邛崃市',
                'pcode' => 510100,
            ),
            139 =>
            array (
                'code' => 510184,
                'level' => 3,
                'name' => '崇州市',
                'pcode' => 510100,
            ),
            140 =>
            array (
                'code' => 510185,
                'level' => 3,
                'name' => '简阳市',
                'pcode' => 510100,
            ),
            141 =>
            array (
                'code' => 510300,
                'level' => 2,
                'name' => '自贡市',
                'pcode' => 510000,
            ),
            142 =>
            array (
                'code' => 510301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 510300,
            ),
            143 =>
            array (
                'code' => 510302,
                'level' => 3,
                'name' => '自流井区',
                'pcode' => 510300,
            ),
            144 =>
            array (
                'code' => 510303,
                'level' => 3,
                'name' => '贡井区',
                'pcode' => 510300,
            ),
            145 =>
            array (
                'code' => 510304,
                'level' => 3,
                'name' => '大安区',
                'pcode' => 510300,
            ),
            146 =>
            array (
                'code' => 510311,
                'level' => 3,
                'name' => '沿滩区',
                'pcode' => 510300,
            ),
            147 =>
            array (
                'code' => 510321,
                'level' => 3,
                'name' => '荣县',
                'pcode' => 510300,
            ),
            148 =>
            array (
                'code' => 510322,
                'level' => 3,
                'name' => '富顺县',
                'pcode' => 510300,
            ),
            149 =>
            array (
                'code' => 510400,
                'level' => 2,
                'name' => '攀枝花市',
                'pcode' => 510000,
            ),
            150 =>
            array (
                'code' => 510401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 510400,
            ),
            151 =>
            array (
                'code' => 510402,
                'level' => 3,
                'name' => '东区',
                'pcode' => 510400,
            ),
            152 =>
            array (
                'code' => 510403,
                'level' => 3,
                'name' => '西区',
                'pcode' => 510400,
            ),
            153 =>
            array (
                'code' => 510411,
                'level' => 3,
                'name' => '仁和区',
                'pcode' => 510400,
            ),
            154 =>
            array (
                'code' => 510421,
                'level' => 3,
                'name' => '米易县',
                'pcode' => 510400,
            ),
            155 =>
            array (
                'code' => 510422,
                'level' => 3,
                'name' => '盐边县',
                'pcode' => 510400,
            ),
            156 =>
            array (
                'code' => 510500,
                'level' => 2,
                'name' => '泸州市',
                'pcode' => 510000,
            ),
            157 =>
            array (
                'code' => 510501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 510500,
            ),
            158 =>
            array (
                'code' => 510502,
                'level' => 3,
                'name' => '江阳区',
                'pcode' => 510500,
            ),
            159 =>
            array (
                'code' => 510503,
                'level' => 3,
                'name' => '纳溪区',
                'pcode' => 510500,
            ),
            160 =>
            array (
                'code' => 510504,
                'level' => 3,
                'name' => '龙马潭区',
                'pcode' => 510500,
            ),
            161 =>
            array (
                'code' => 510521,
                'level' => 3,
                'name' => '泸县',
                'pcode' => 510500,
            ),
            162 =>
            array (
                'code' => 510522,
                'level' => 3,
                'name' => '合江县',
                'pcode' => 510500,
            ),
            163 =>
            array (
                'code' => 510524,
                'level' => 3,
                'name' => '叙永县',
                'pcode' => 510500,
            ),
            164 =>
            array (
                'code' => 510525,
                'level' => 3,
                'name' => '古蔺县',
                'pcode' => 510500,
            ),
            165 =>
            array (
                'code' => 510600,
                'level' => 2,
                'name' => '德阳市',
                'pcode' => 510000,
            ),
            166 =>
            array (
                'code' => 510601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 510600,
            ),
            167 =>
            array (
                'code' => 510603,
                'level' => 3,
                'name' => '旌阳区',
                'pcode' => 510600,
            ),
            168 =>
            array (
                'code' => 510604,
                'level' => 3,
                'name' => '罗江区',
                'pcode' => 510600,
            ),
            169 =>
            array (
                'code' => 510623,
                'level' => 3,
                'name' => '中江县',
                'pcode' => 510600,
            ),
            170 =>
            array (
                'code' => 510681,
                'level' => 3,
                'name' => '广汉市',
                'pcode' => 510600,
            ),
            171 =>
            array (
                'code' => 510682,
                'level' => 3,
                'name' => '什邡市',
                'pcode' => 510600,
            ),
            172 =>
            array (
                'code' => 510683,
                'level' => 3,
                'name' => '绵竹市',
                'pcode' => 510600,
            ),
            173 =>
            array (
                'code' => 510700,
                'level' => 2,
                'name' => '绵阳市',
                'pcode' => 510000,
            ),
            174 =>
            array (
                'code' => 510701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 510700,
            ),
            175 =>
            array (
                'code' => 510703,
                'level' => 3,
                'name' => '涪城区',
                'pcode' => 510700,
            ),
            176 =>
            array (
                'code' => 510704,
                'level' => 3,
                'name' => '游仙区',
                'pcode' => 510700,
            ),
            177 =>
            array (
                'code' => 510705,
                'level' => 3,
                'name' => '安州区',
                'pcode' => 510700,
            ),
            178 =>
            array (
                'code' => 510722,
                'level' => 3,
                'name' => '三台县',
                'pcode' => 510700,
            ),
            179 =>
            array (
                'code' => 510723,
                'level' => 3,
                'name' => '盐亭县',
                'pcode' => 510700,
            ),
            180 =>
            array (
                'code' => 510725,
                'level' => 3,
                'name' => '梓潼县',
                'pcode' => 510700,
            ),
            181 =>
            array (
                'code' => 510726,
                'level' => 3,
                'name' => '北川羌族自治县',
                'pcode' => 510700,
            ),
            182 =>
            array (
                'code' => 510727,
                'level' => 3,
                'name' => '平武县',
                'pcode' => 510700,
            ),
            183 =>
            array (
                'code' => 510781,
                'level' => 3,
                'name' => '江油市',
                'pcode' => 510700,
            ),
            184 =>
            array (
                'code' => 510800,
                'level' => 2,
                'name' => '广元市',
                'pcode' => 510000,
            ),
            185 =>
            array (
                'code' => 510801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 510800,
            ),
            186 =>
            array (
                'code' => 510802,
                'level' => 3,
                'name' => '利州区',
                'pcode' => 510800,
            ),
            187 =>
            array (
                'code' => 510811,
                'level' => 3,
                'name' => '昭化区',
                'pcode' => 510800,
            ),
            188 =>
            array (
                'code' => 510812,
                'level' => 3,
                'name' => '朝天区',
                'pcode' => 510800,
            ),
            189 =>
            array (
                'code' => 510821,
                'level' => 3,
                'name' => '旺苍县',
                'pcode' => 510800,
            ),
            190 =>
            array (
                'code' => 510822,
                'level' => 3,
                'name' => '青川县',
                'pcode' => 510800,
            ),
            191 =>
            array (
                'code' => 510823,
                'level' => 3,
                'name' => '剑阁县',
                'pcode' => 510800,
            ),
            192 =>
            array (
                'code' => 510824,
                'level' => 3,
                'name' => '苍溪县',
                'pcode' => 510800,
            ),
            193 =>
            array (
                'code' => 510900,
                'level' => 2,
                'name' => '遂宁市',
                'pcode' => 510000,
            ),
            194 =>
            array (
                'code' => 510901,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 510900,
            ),
            195 =>
            array (
                'code' => 510903,
                'level' => 3,
                'name' => '船山区',
                'pcode' => 510900,
            ),
            196 =>
            array (
                'code' => 510904,
                'level' => 3,
                'name' => '安居区',
                'pcode' => 510900,
            ),
            197 =>
            array (
                'code' => 510921,
                'level' => 3,
                'name' => '蓬溪县',
                'pcode' => 510900,
            ),
            198 =>
            array (
                'code' => 510923,
                'level' => 3,
                'name' => '大英县',
                'pcode' => 510900,
            ),
            199 =>
            array (
                'code' => 510981,
                'level' => 3,
                'name' => '射洪市',
                'pcode' => 510900,
            ),
            200 =>
            array (
                'code' => 511000,
                'level' => 2,
                'name' => '内江市',
                'pcode' => 510000,
            ),
            201 =>
            array (
                'code' => 511001,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 511000,
            ),
            202 =>
            array (
                'code' => 511002,
                'level' => 3,
                'name' => '市中区',
                'pcode' => 511000,
            ),
            203 =>
            array (
                'code' => 511011,
                'level' => 3,
                'name' => '东兴区',
                'pcode' => 511000,
            ),
            204 =>
            array (
                'code' => 511024,
                'level' => 3,
                'name' => '威远县',
                'pcode' => 511000,
            ),
            205 =>
            array (
                'code' => 511025,
                'level' => 3,
                'name' => '资中县',
                'pcode' => 511000,
            ),
            206 =>
            array (
                'code' => 511071,
                'level' => 3,
                'name' => '内江经济开发区',
                'pcode' => 511000,
            ),
            207 =>
            array (
                'code' => 511083,
                'level' => 3,
                'name' => '隆昌市',
                'pcode' => 511000,
            ),
            208 =>
            array (
                'code' => 511100,
                'level' => 2,
                'name' => '乐山市',
                'pcode' => 510000,
            ),
            209 =>
            array (
                'code' => 511101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 511100,
            ),
            210 =>
            array (
                'code' => 511102,
                'level' => 3,
                'name' => '市中区',
                'pcode' => 511100,
            ),
            211 =>
            array (
                'code' => 511111,
                'level' => 3,
                'name' => '沙湾区',
                'pcode' => 511100,
            ),
            212 =>
            array (
                'code' => 511112,
                'level' => 3,
                'name' => '五通桥区',
                'pcode' => 511100,
            ),
            213 =>
            array (
                'code' => 511113,
                'level' => 3,
                'name' => '金口河区',
                'pcode' => 511100,
            ),
            214 =>
            array (
                'code' => 511123,
                'level' => 3,
                'name' => '犍为县',
                'pcode' => 511100,
            ),
            215 =>
            array (
                'code' => 511124,
                'level' => 3,
                'name' => '井研县',
                'pcode' => 511100,
            ),
            216 =>
            array (
                'code' => 511126,
                'level' => 3,
                'name' => '夹江县',
                'pcode' => 511100,
            ),
            217 =>
            array (
                'code' => 511129,
                'level' => 3,
                'name' => '沐川县',
                'pcode' => 511100,
            ),
            218 =>
            array (
                'code' => 511132,
                'level' => 3,
                'name' => '峨边彝族自治县',
                'pcode' => 511100,
            ),
            219 =>
            array (
                'code' => 511133,
                'level' => 3,
                'name' => '马边彝族自治县',
                'pcode' => 511100,
            ),
            220 =>
            array (
                'code' => 511181,
                'level' => 3,
                'name' => '峨眉山市',
                'pcode' => 511100,
            ),
            221 =>
            array (
                'code' => 511300,
                'level' => 2,
                'name' => '南充市',
                'pcode' => 510000,
            ),
            222 =>
            array (
                'code' => 511301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 511300,
            ),
            223 =>
            array (
                'code' => 511302,
                'level' => 3,
                'name' => '顺庆区',
                'pcode' => 511300,
            ),
            224 =>
            array (
                'code' => 511303,
                'level' => 3,
                'name' => '高坪区',
                'pcode' => 511300,
            ),
            225 =>
            array (
                'code' => 511304,
                'level' => 3,
                'name' => '嘉陵区',
                'pcode' => 511300,
            ),
            226 =>
            array (
                'code' => 511321,
                'level' => 3,
                'name' => '南部县',
                'pcode' => 511300,
            ),
            227 =>
            array (
                'code' => 511322,
                'level' => 3,
                'name' => '营山县',
                'pcode' => 511300,
            ),
            228 =>
            array (
                'code' => 511323,
                'level' => 3,
                'name' => '蓬安县',
                'pcode' => 511300,
            ),
            229 =>
            array (
                'code' => 511324,
                'level' => 3,
                'name' => '仪陇县',
                'pcode' => 511300,
            ),
            230 =>
            array (
                'code' => 511325,
                'level' => 3,
                'name' => '西充县',
                'pcode' => 511300,
            ),
            231 =>
            array (
                'code' => 511381,
                'level' => 3,
                'name' => '阆中市',
                'pcode' => 511300,
            ),
            232 =>
            array (
                'code' => 511400,
                'level' => 2,
                'name' => '眉山市',
                'pcode' => 510000,
            ),
            233 =>
            array (
                'code' => 511401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 511400,
            ),
            234 =>
            array (
                'code' => 511402,
                'level' => 3,
                'name' => '东坡区',
                'pcode' => 511400,
            ),
            235 =>
            array (
                'code' => 511403,
                'level' => 3,
                'name' => '彭山区',
                'pcode' => 511400,
            ),
            236 =>
            array (
                'code' => 511421,
                'level' => 3,
                'name' => '仁寿县',
                'pcode' => 511400,
            ),
            237 =>
            array (
                'code' => 511423,
                'level' => 3,
                'name' => '洪雅县',
                'pcode' => 511400,
            ),
            238 =>
            array (
                'code' => 511424,
                'level' => 3,
                'name' => '丹棱县',
                'pcode' => 511400,
            ),
            239 =>
            array (
                'code' => 511425,
                'level' => 3,
                'name' => '青神县',
                'pcode' => 511400,
            ),
            240 =>
            array (
                'code' => 511500,
                'level' => 2,
                'name' => '宜宾市',
                'pcode' => 510000,
            ),
            241 =>
            array (
                'code' => 511501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 511500,
            ),
            242 =>
            array (
                'code' => 511502,
                'level' => 3,
                'name' => '翠屏区',
                'pcode' => 511500,
            ),
            243 =>
            array (
                'code' => 511503,
                'level' => 3,
                'name' => '南溪区',
                'pcode' => 511500,
            ),
            244 =>
            array (
                'code' => 511504,
                'level' => 3,
                'name' => '叙州区',
                'pcode' => 511500,
            ),
            245 =>
            array (
                'code' => 511523,
                'level' => 3,
                'name' => '江安县',
                'pcode' => 511500,
            ),
            246 =>
            array (
                'code' => 511524,
                'level' => 3,
                'name' => '长宁县',
                'pcode' => 511500,
            ),
            247 =>
            array (
                'code' => 511525,
                'level' => 3,
                'name' => '高县',
                'pcode' => 511500,
            ),
            248 =>
            array (
                'code' => 511526,
                'level' => 3,
                'name' => '珙县',
                'pcode' => 511500,
            ),
            249 =>
            array (
                'code' => 511527,
                'level' => 3,
                'name' => '筠连县',
                'pcode' => 511500,
            ),
            250 =>
            array (
                'code' => 511528,
                'level' => 3,
                'name' => '兴文县',
                'pcode' => 511500,
            ),
            251 =>
            array (
                'code' => 511529,
                'level' => 3,
                'name' => '屏山县',
                'pcode' => 511500,
            ),
            252 =>
            array (
                'code' => 511600,
                'level' => 2,
                'name' => '广安市',
                'pcode' => 510000,
            ),
            253 =>
            array (
                'code' => 511601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 511600,
            ),
            254 =>
            array (
                'code' => 511602,
                'level' => 3,
                'name' => '广安区',
                'pcode' => 511600,
            ),
            255 =>
            array (
                'code' => 511603,
                'level' => 3,
                'name' => '前锋区',
                'pcode' => 511600,
            ),
            256 =>
            array (
                'code' => 511621,
                'level' => 3,
                'name' => '岳池县',
                'pcode' => 511600,
            ),
            257 =>
            array (
                'code' => 511622,
                'level' => 3,
                'name' => '武胜县',
                'pcode' => 511600,
            ),
            258 =>
            array (
                'code' => 511623,
                'level' => 3,
                'name' => '邻水县',
                'pcode' => 511600,
            ),
            259 =>
            array (
                'code' => 511681,
                'level' => 3,
                'name' => '华蓥市',
                'pcode' => 511600,
            ),
            260 =>
            array (
                'code' => 511700,
                'level' => 2,
                'name' => '达州市',
                'pcode' => 510000,
            ),
            261 =>
            array (
                'code' => 511701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 511700,
            ),
            262 =>
            array (
                'code' => 511702,
                'level' => 3,
                'name' => '通川区',
                'pcode' => 511700,
            ),
            263 =>
            array (
                'code' => 511703,
                'level' => 3,
                'name' => '达川区',
                'pcode' => 511700,
            ),
            264 =>
            array (
                'code' => 511722,
                'level' => 3,
                'name' => '宣汉县',
                'pcode' => 511700,
            ),
            265 =>
            array (
                'code' => 511723,
                'level' => 3,
                'name' => '开江县',
                'pcode' => 511700,
            ),
            266 =>
            array (
                'code' => 511724,
                'level' => 3,
                'name' => '大竹县',
                'pcode' => 511700,
            ),
            267 =>
            array (
                'code' => 511725,
                'level' => 3,
                'name' => '渠县',
                'pcode' => 511700,
            ),
            268 =>
            array (
                'code' => 511771,
                'level' => 3,
                'name' => '达州经济开发区',
                'pcode' => 511700,
            ),
            269 =>
            array (
                'code' => 511781,
                'level' => 3,
                'name' => '万源市',
                'pcode' => 511700,
            ),
            270 =>
            array (
                'code' => 511800,
                'level' => 2,
                'name' => '雅安市',
                'pcode' => 510000,
            ),
            271 =>
            array (
                'code' => 511801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 511800,
            ),
            272 =>
            array (
                'code' => 511802,
                'level' => 3,
                'name' => '雨城区',
                'pcode' => 511800,
            ),
            273 =>
            array (
                'code' => 511803,
                'level' => 3,
                'name' => '名山区',
                'pcode' => 511800,
            ),
            274 =>
            array (
                'code' => 511822,
                'level' => 3,
                'name' => '荥经县',
                'pcode' => 511800,
            ),
            275 =>
            array (
                'code' => 511823,
                'level' => 3,
                'name' => '汉源县',
                'pcode' => 511800,
            ),
            276 =>
            array (
                'code' => 511824,
                'level' => 3,
                'name' => '石棉县',
                'pcode' => 511800,
            ),
            277 =>
            array (
                'code' => 511825,
                'level' => 3,
                'name' => '天全县',
                'pcode' => 511800,
            ),
            278 =>
            array (
                'code' => 511826,
                'level' => 3,
                'name' => '芦山县',
                'pcode' => 511800,
            ),
            279 =>
            array (
                'code' => 511827,
                'level' => 3,
                'name' => '宝兴县',
                'pcode' => 511800,
            ),
            280 =>
            array (
                'code' => 511900,
                'level' => 2,
                'name' => '巴中市',
                'pcode' => 510000,
            ),
            281 =>
            array (
                'code' => 511901,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 511900,
            ),
            282 =>
            array (
                'code' => 511902,
                'level' => 3,
                'name' => '巴州区',
                'pcode' => 511900,
            ),
            283 =>
            array (
                'code' => 511903,
                'level' => 3,
                'name' => '恩阳区',
                'pcode' => 511900,
            ),
            284 =>
            array (
                'code' => 511921,
                'level' => 3,
                'name' => '通江县',
                'pcode' => 511900,
            ),
            285 =>
            array (
                'code' => 511922,
                'level' => 3,
                'name' => '南江县',
                'pcode' => 511900,
            ),
            286 =>
            array (
                'code' => 511923,
                'level' => 3,
                'name' => '平昌县',
                'pcode' => 511900,
            ),
            287 =>
            array (
                'code' => 511971,
                'level' => 3,
                'name' => '巴中经济开发区',
                'pcode' => 511900,
            ),
            288 =>
            array (
                'code' => 512000,
                'level' => 2,
                'name' => '资阳市',
                'pcode' => 510000,
            ),
            289 =>
            array (
                'code' => 512001,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 512000,
            ),
            290 =>
            array (
                'code' => 512002,
                'level' => 3,
                'name' => '雁江区',
                'pcode' => 512000,
            ),
            291 =>
            array (
                'code' => 512021,
                'level' => 3,
                'name' => '安岳县',
                'pcode' => 512000,
            ),
            292 =>
            array (
                'code' => 512022,
                'level' => 3,
                'name' => '乐至县',
                'pcode' => 512000,
            ),
            293 =>
            array (
                'code' => 513200,
                'level' => 2,
                'name' => '阿坝藏族羌族自治州',
                'pcode' => 510000,
            ),
            294 =>
            array (
                'code' => 513201,
                'level' => 3,
                'name' => '马尔康市',
                'pcode' => 513200,
            ),
            295 =>
            array (
                'code' => 513221,
                'level' => 3,
                'name' => '汶川县',
                'pcode' => 513200,
            ),
            296 =>
            array (
                'code' => 513222,
                'level' => 3,
                'name' => '理县',
                'pcode' => 513200,
            ),
            297 =>
            array (
                'code' => 513223,
                'level' => 3,
                'name' => '茂县',
                'pcode' => 513200,
            ),
            298 =>
            array (
                'code' => 513224,
                'level' => 3,
                'name' => '松潘县',
                'pcode' => 513200,
            ),
            299 =>
            array (
                'code' => 513225,
                'level' => 3,
                'name' => '九寨沟县',
                'pcode' => 513200,
            ),
            300 =>
            array (
                'code' => 513226,
                'level' => 3,
                'name' => '金川县',
                'pcode' => 513200,
            ),
            301 =>
            array (
                'code' => 513227,
                'level' => 3,
                'name' => '小金县',
                'pcode' => 513200,
            ),
            302 =>
            array (
                'code' => 513228,
                'level' => 3,
                'name' => '黑水县',
                'pcode' => 513200,
            ),
            303 =>
            array (
                'code' => 513230,
                'level' => 3,
                'name' => '壤塘县',
                'pcode' => 513200,
            ),
            304 =>
            array (
                'code' => 513231,
                'level' => 3,
                'name' => '阿坝县',
                'pcode' => 513200,
            ),
            305 =>
            array (
                'code' => 513232,
                'level' => 3,
                'name' => '若尔盖县',
                'pcode' => 513200,
            ),
            306 =>
            array (
                'code' => 513233,
                'level' => 3,
                'name' => '红原县',
                'pcode' => 513200,
            ),
            307 =>
            array (
                'code' => 513300,
                'level' => 2,
                'name' => '甘孜藏族自治州',
                'pcode' => 510000,
            ),
            308 =>
            array (
                'code' => 513301,
                'level' => 3,
                'name' => '康定市',
                'pcode' => 513300,
            ),
            309 =>
            array (
                'code' => 513322,
                'level' => 3,
                'name' => '泸定县',
                'pcode' => 513300,
            ),
            310 =>
            array (
                'code' => 513323,
                'level' => 3,
                'name' => '丹巴县',
                'pcode' => 513300,
            ),
            311 =>
            array (
                'code' => 513324,
                'level' => 3,
                'name' => '九龙县',
                'pcode' => 513300,
            ),
            312 =>
            array (
                'code' => 513325,
                'level' => 3,
                'name' => '雅江县',
                'pcode' => 513300,
            ),
            313 =>
            array (
                'code' => 513326,
                'level' => 3,
                'name' => '道孚县',
                'pcode' => 513300,
            ),
            314 =>
            array (
                'code' => 513327,
                'level' => 3,
                'name' => '炉霍县',
                'pcode' => 513300,
            ),
            315 =>
            array (
                'code' => 513328,
                'level' => 3,
                'name' => '甘孜县',
                'pcode' => 513300,
            ),
            316 =>
            array (
                'code' => 513329,
                'level' => 3,
                'name' => '新龙县',
                'pcode' => 513300,
            ),
            317 =>
            array (
                'code' => 513330,
                'level' => 3,
                'name' => '德格县',
                'pcode' => 513300,
            ),
            318 =>
            array (
                'code' => 513331,
                'level' => 3,
                'name' => '白玉县',
                'pcode' => 513300,
            ),
            319 =>
            array (
                'code' => 513332,
                'level' => 3,
                'name' => '石渠县',
                'pcode' => 513300,
            ),
            320 =>
            array (
                'code' => 513333,
                'level' => 3,
                'name' => '色达县',
                'pcode' => 513300,
            ),
            321 =>
            array (
                'code' => 513334,
                'level' => 3,
                'name' => '理塘县',
                'pcode' => 513300,
            ),
            322 =>
            array (
                'code' => 513335,
                'level' => 3,
                'name' => '巴塘县',
                'pcode' => 513300,
            ),
            323 =>
            array (
                'code' => 513336,
                'level' => 3,
                'name' => '乡城县',
                'pcode' => 513300,
            ),
            324 =>
            array (
                'code' => 513337,
                'level' => 3,
                'name' => '稻城县',
                'pcode' => 513300,
            ),
            325 =>
            array (
                'code' => 513338,
                'level' => 3,
                'name' => '得荣县',
                'pcode' => 513300,
            ),
            326 =>
            array (
                'code' => 513400,
                'level' => 2,
                'name' => '凉山彝族自治州',
                'pcode' => 510000,
            ),
            327 =>
            array (
                'code' => 513401,
                'level' => 3,
                'name' => '西昌市',
                'pcode' => 513400,
            ),
            328 =>
            array (
                'code' => 513422,
                'level' => 3,
                'name' => '木里藏族自治县',
                'pcode' => 513400,
            ),
            329 =>
            array (
                'code' => 513423,
                'level' => 3,
                'name' => '盐源县',
                'pcode' => 513400,
            ),
            330 =>
            array (
                'code' => 513424,
                'level' => 3,
                'name' => '德昌县',
                'pcode' => 513400,
            ),
            331 =>
            array (
                'code' => 513425,
                'level' => 3,
                'name' => '会理县',
                'pcode' => 513400,
            ),
            332 =>
            array (
                'code' => 513426,
                'level' => 3,
                'name' => '会东县',
                'pcode' => 513400,
            ),
            333 =>
            array (
                'code' => 513427,
                'level' => 3,
                'name' => '宁南县',
                'pcode' => 513400,
            ),
            334 =>
            array (
                'code' => 513428,
                'level' => 3,
                'name' => '普格县',
                'pcode' => 513400,
            ),
            335 =>
            array (
                'code' => 513429,
                'level' => 3,
                'name' => '布拖县',
                'pcode' => 513400,
            ),
            336 =>
            array (
                'code' => 513430,
                'level' => 3,
                'name' => '金阳县',
                'pcode' => 513400,
            ),
            337 =>
            array (
                'code' => 513431,
                'level' => 3,
                'name' => '昭觉县',
                'pcode' => 513400,
            ),
            338 =>
            array (
                'code' => 513432,
                'level' => 3,
                'name' => '喜德县',
                'pcode' => 513400,
            ),
            339 =>
            array (
                'code' => 513433,
                'level' => 3,
                'name' => '冕宁县',
                'pcode' => 513400,
            ),
            340 =>
            array (
                'code' => 513434,
                'level' => 3,
                'name' => '越西县',
                'pcode' => 513400,
            ),
            341 =>
            array (
                'code' => 513435,
                'level' => 3,
                'name' => '甘洛县',
                'pcode' => 513400,
            ),
            342 =>
            array (
                'code' => 513436,
                'level' => 3,
                'name' => '美姑县',
                'pcode' => 513400,
            ),
            343 =>
            array (
                'code' => 513437,
                'level' => 3,
                'name' => '雷波县',
                'pcode' => 513400,
            ),
            344 =>
            array (
                'code' => 520000,
                'level' => 1,
                'name' => '贵州省',
                'pcode' => 0,
            ),
            345 =>
            array (
                'code' => 520100,
                'level' => 2,
                'name' => '贵阳市',
                'pcode' => 520000,
            ),
            346 =>
            array (
                'code' => 520101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 520100,
            ),
            347 =>
            array (
                'code' => 520102,
                'level' => 3,
                'name' => '南明区',
                'pcode' => 520100,
            ),
            348 =>
            array (
                'code' => 520103,
                'level' => 3,
                'name' => '云岩区',
                'pcode' => 520100,
            ),
            349 =>
            array (
                'code' => 520111,
                'level' => 3,
                'name' => '花溪区',
                'pcode' => 520100,
            ),
            350 =>
            array (
                'code' => 520112,
                'level' => 3,
                'name' => '乌当区',
                'pcode' => 520100,
            ),
            351 =>
            array (
                'code' => 520113,
                'level' => 3,
                'name' => '白云区',
                'pcode' => 520100,
            ),
            352 =>
            array (
                'code' => 520115,
                'level' => 3,
                'name' => '观山湖区',
                'pcode' => 520100,
            ),
            353 =>
            array (
                'code' => 520121,
                'level' => 3,
                'name' => '开阳县',
                'pcode' => 520100,
            ),
            354 =>
            array (
                'code' => 520122,
                'level' => 3,
                'name' => '息烽县',
                'pcode' => 520100,
            ),
            355 =>
            array (
                'code' => 520123,
                'level' => 3,
                'name' => '修文县',
                'pcode' => 520100,
            ),
            356 =>
            array (
                'code' => 520181,
                'level' => 3,
                'name' => '清镇市',
                'pcode' => 520100,
            ),
            357 =>
            array (
                'code' => 520200,
                'level' => 2,
                'name' => '六盘水市',
                'pcode' => 520000,
            ),
            358 =>
            array (
                'code' => 520201,
                'level' => 3,
                'name' => '钟山区',
                'pcode' => 520200,
            ),
            359 =>
            array (
                'code' => 520203,
                'level' => 3,
                'name' => '六枝特区',
                'pcode' => 520200,
            ),
            360 =>
            array (
                'code' => 520221,
                'level' => 3,
                'name' => '水城县',
                'pcode' => 520200,
            ),
            361 =>
            array (
                'code' => 520281,
                'level' => 3,
                'name' => '盘州市',
                'pcode' => 520200,
            ),
            362 =>
            array (
                'code' => 520300,
                'level' => 2,
                'name' => '遵义市',
                'pcode' => 520000,
            ),
            363 =>
            array (
                'code' => 520301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 520300,
            ),
            364 =>
            array (
                'code' => 520302,
                'level' => 3,
                'name' => '红花岗区',
                'pcode' => 520300,
            ),
            365 =>
            array (
                'code' => 520303,
                'level' => 3,
                'name' => '汇川区',
                'pcode' => 520300,
            ),
            366 =>
            array (
                'code' => 520304,
                'level' => 3,
                'name' => '播州区',
                'pcode' => 520300,
            ),
            367 =>
            array (
                'code' => 520322,
                'level' => 3,
                'name' => '桐梓县',
                'pcode' => 520300,
            ),
            368 =>
            array (
                'code' => 520323,
                'level' => 3,
                'name' => '绥阳县',
                'pcode' => 520300,
            ),
            369 =>
            array (
                'code' => 520324,
                'level' => 3,
                'name' => '正安县',
                'pcode' => 520300,
            ),
            370 =>
            array (
                'code' => 520325,
                'level' => 3,
                'name' => '道真仡佬族苗族自治县',
                'pcode' => 520300,
            ),
            371 =>
            array (
                'code' => 520326,
                'level' => 3,
                'name' => '务川仡佬族苗族自治县',
                'pcode' => 520300,
            ),
            372 =>
            array (
                'code' => 520327,
                'level' => 3,
                'name' => '凤冈县',
                'pcode' => 520300,
            ),
            373 =>
            array (
                'code' => 520328,
                'level' => 3,
                'name' => '湄潭县',
                'pcode' => 520300,
            ),
            374 =>
            array (
                'code' => 520329,
                'level' => 3,
                'name' => '余庆县',
                'pcode' => 520300,
            ),
            375 =>
            array (
                'code' => 520330,
                'level' => 3,
                'name' => '习水县',
                'pcode' => 520300,
            ),
            376 =>
            array (
                'code' => 520381,
                'level' => 3,
                'name' => '赤水市',
                'pcode' => 520300,
            ),
            377 =>
            array (
                'code' => 520382,
                'level' => 3,
                'name' => '仁怀市',
                'pcode' => 520300,
            ),
            378 =>
            array (
                'code' => 520400,
                'level' => 2,
                'name' => '安顺市',
                'pcode' => 520000,
            ),
            379 =>
            array (
                'code' => 520401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 520400,
            ),
            380 =>
            array (
                'code' => 520402,
                'level' => 3,
                'name' => '西秀区',
                'pcode' => 520400,
            ),
            381 =>
            array (
                'code' => 520403,
                'level' => 3,
                'name' => '平坝区',
                'pcode' => 520400,
            ),
            382 =>
            array (
                'code' => 520422,
                'level' => 3,
                'name' => '普定县',
                'pcode' => 520400,
            ),
            383 =>
            array (
                'code' => 520423,
                'level' => 3,
                'name' => '镇宁布依族苗族自治县',
                'pcode' => 520400,
            ),
            384 =>
            array (
                'code' => 520424,
                'level' => 3,
                'name' => '关岭布依族苗族自治县',
                'pcode' => 520400,
            ),
            385 =>
            array (
                'code' => 520425,
                'level' => 3,
                'name' => '紫云苗族布依族自治县',
                'pcode' => 520400,
            ),
            386 =>
            array (
                'code' => 520500,
                'level' => 2,
                'name' => '毕节市',
                'pcode' => 520000,
            ),
            387 =>
            array (
                'code' => 520501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 520500,
            ),
            388 =>
            array (
                'code' => 520502,
                'level' => 3,
                'name' => '七星关区',
                'pcode' => 520500,
            ),
            389 =>
            array (
                'code' => 520521,
                'level' => 3,
                'name' => '大方县',
                'pcode' => 520500,
            ),
            390 =>
            array (
                'code' => 520522,
                'level' => 3,
                'name' => '黔西县',
                'pcode' => 520500,
            ),
            391 =>
            array (
                'code' => 520523,
                'level' => 3,
                'name' => '金沙县',
                'pcode' => 520500,
            ),
            392 =>
            array (
                'code' => 520524,
                'level' => 3,
                'name' => '织金县',
                'pcode' => 520500,
            ),
            393 =>
            array (
                'code' => 520525,
                'level' => 3,
                'name' => '纳雍县',
                'pcode' => 520500,
            ),
            394 =>
            array (
                'code' => 520526,
                'level' => 3,
                'name' => '威宁彝族回族苗族自治县',
                'pcode' => 520500,
            ),
            395 =>
            array (
                'code' => 520527,
                'level' => 3,
                'name' => '赫章县',
                'pcode' => 520500,
            ),
            396 =>
            array (
                'code' => 520600,
                'level' => 2,
                'name' => '铜仁市',
                'pcode' => 520000,
            ),
            397 =>
            array (
                'code' => 520601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 520600,
            ),
            398 =>
            array (
                'code' => 520602,
                'level' => 3,
                'name' => '碧江区',
                'pcode' => 520600,
            ),
            399 =>
            array (
                'code' => 520603,
                'level' => 3,
                'name' => '万山区',
                'pcode' => 520600,
            ),
            400 =>
            array (
                'code' => 520621,
                'level' => 3,
                'name' => '江口县',
                'pcode' => 520600,
            ),
            401 =>
            array (
                'code' => 520622,
                'level' => 3,
                'name' => '玉屏侗族自治县',
                'pcode' => 520600,
            ),
            402 =>
            array (
                'code' => 520623,
                'level' => 3,
                'name' => '石阡县',
                'pcode' => 520600,
            ),
            403 =>
            array (
                'code' => 520624,
                'level' => 3,
                'name' => '思南县',
                'pcode' => 520600,
            ),
            404 =>
            array (
                'code' => 520625,
                'level' => 3,
                'name' => '印江土家族苗族自治县',
                'pcode' => 520600,
            ),
            405 =>
            array (
                'code' => 520626,
                'level' => 3,
                'name' => '德江县',
                'pcode' => 520600,
            ),
            406 =>
            array (
                'code' => 520627,
                'level' => 3,
                'name' => '沿河土家族自治县',
                'pcode' => 520600,
            ),
            407 =>
            array (
                'code' => 520628,
                'level' => 3,
                'name' => '松桃苗族自治县',
                'pcode' => 520600,
            ),
            408 =>
            array (
                'code' => 522300,
                'level' => 2,
                'name' => '黔西南布依族苗族自治州',
                'pcode' => 520000,
            ),
            409 =>
            array (
                'code' => 522301,
                'level' => 3,
                'name' => '兴义市',
                'pcode' => 522300,
            ),
            410 =>
            array (
                'code' => 522302,
                'level' => 3,
                'name' => '兴仁市',
                'pcode' => 522300,
            ),
            411 =>
            array (
                'code' => 522323,
                'level' => 3,
                'name' => '普安县',
                'pcode' => 522300,
            ),
            412 =>
            array (
                'code' => 522324,
                'level' => 3,
                'name' => '晴隆县',
                'pcode' => 522300,
            ),
            413 =>
            array (
                'code' => 522325,
                'level' => 3,
                'name' => '贞丰县',
                'pcode' => 522300,
            ),
            414 =>
            array (
                'code' => 522326,
                'level' => 3,
                'name' => '望谟县',
                'pcode' => 522300,
            ),
            415 =>
            array (
                'code' => 522327,
                'level' => 3,
                'name' => '册亨县',
                'pcode' => 522300,
            ),
            416 =>
            array (
                'code' => 522328,
                'level' => 3,
                'name' => '安龙县',
                'pcode' => 522300,
            ),
            417 =>
            array (
                'code' => 522600,
                'level' => 2,
                'name' => '黔东南苗族侗族自治州',
                'pcode' => 520000,
            ),
            418 =>
            array (
                'code' => 522601,
                'level' => 3,
                'name' => '凯里市',
                'pcode' => 522600,
            ),
            419 =>
            array (
                'code' => 522622,
                'level' => 3,
                'name' => '黄平县',
                'pcode' => 522600,
            ),
            420 =>
            array (
                'code' => 522623,
                'level' => 3,
                'name' => '施秉县',
                'pcode' => 522600,
            ),
            421 =>
            array (
                'code' => 522624,
                'level' => 3,
                'name' => '三穗县',
                'pcode' => 522600,
            ),
            422 =>
            array (
                'code' => 522625,
                'level' => 3,
                'name' => '镇远县',
                'pcode' => 522600,
            ),
            423 =>
            array (
                'code' => 522626,
                'level' => 3,
                'name' => '岑巩县',
                'pcode' => 522600,
            ),
            424 =>
            array (
                'code' => 522627,
                'level' => 3,
                'name' => '天柱县',
                'pcode' => 522600,
            ),
            425 =>
            array (
                'code' => 522628,
                'level' => 3,
                'name' => '锦屏县',
                'pcode' => 522600,
            ),
            426 =>
            array (
                'code' => 522629,
                'level' => 3,
                'name' => '剑河县',
                'pcode' => 522600,
            ),
            427 =>
            array (
                'code' => 522630,
                'level' => 3,
                'name' => '台江县',
                'pcode' => 522600,
            ),
            428 =>
            array (
                'code' => 522631,
                'level' => 3,
                'name' => '黎平县',
                'pcode' => 522600,
            ),
            429 =>
            array (
                'code' => 522632,
                'level' => 3,
                'name' => '榕江县',
                'pcode' => 522600,
            ),
            430 =>
            array (
                'code' => 522633,
                'level' => 3,
                'name' => '从江县',
                'pcode' => 522600,
            ),
            431 =>
            array (
                'code' => 522634,
                'level' => 3,
                'name' => '雷山县',
                'pcode' => 522600,
            ),
            432 =>
            array (
                'code' => 522635,
                'level' => 3,
                'name' => '麻江县',
                'pcode' => 522600,
            ),
            433 =>
            array (
                'code' => 522636,
                'level' => 3,
                'name' => '丹寨县',
                'pcode' => 522600,
            ),
            434 =>
            array (
                'code' => 522700,
                'level' => 2,
                'name' => '黔南布依族苗族自治州',
                'pcode' => 520000,
            ),
            435 =>
            array (
                'code' => 522701,
                'level' => 3,
                'name' => '都匀市',
                'pcode' => 522700,
            ),
            436 =>
            array (
                'code' => 522702,
                'level' => 3,
                'name' => '福泉市',
                'pcode' => 522700,
            ),
            437 =>
            array (
                'code' => 522722,
                'level' => 3,
                'name' => '荔波县',
                'pcode' => 522700,
            ),
            438 =>
            array (
                'code' => 522723,
                'level' => 3,
                'name' => '贵定县',
                'pcode' => 522700,
            ),
            439 =>
            array (
                'code' => 522725,
                'level' => 3,
                'name' => '瓮安县',
                'pcode' => 522700,
            ),
            440 =>
            array (
                'code' => 522726,
                'level' => 3,
                'name' => '独山县',
                'pcode' => 522700,
            ),
            441 =>
            array (
                'code' => 522727,
                'level' => 3,
                'name' => '平塘县',
                'pcode' => 522700,
            ),
            442 =>
            array (
                'code' => 522728,
                'level' => 3,
                'name' => '罗甸县',
                'pcode' => 522700,
            ),
            443 =>
            array (
                'code' => 522729,
                'level' => 3,
                'name' => '长顺县',
                'pcode' => 522700,
            ),
            444 =>
            array (
                'code' => 522730,
                'level' => 3,
                'name' => '龙里县',
                'pcode' => 522700,
            ),
            445 =>
            array (
                'code' => 522731,
                'level' => 3,
                'name' => '惠水县',
                'pcode' => 522700,
            ),
            446 =>
            array (
                'code' => 522732,
                'level' => 3,
                'name' => '三都水族自治县',
                'pcode' => 522700,
            ),
            447 =>
            array (
                'code' => 530000,
                'level' => 1,
                'name' => '云南省',
                'pcode' => 0,
            ),
            448 =>
            array (
                'code' => 530100,
                'level' => 2,
                'name' => '昆明市',
                'pcode' => 530000,
            ),
            449 =>
            array (
                'code' => 530101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 530100,
            ),
            450 =>
            array (
                'code' => 530102,
                'level' => 3,
                'name' => '五华区',
                'pcode' => 530100,
            ),
            451 =>
            array (
                'code' => 530103,
                'level' => 3,
                'name' => '盘龙区',
                'pcode' => 530100,
            ),
            452 =>
            array (
                'code' => 530111,
                'level' => 3,
                'name' => '官渡区',
                'pcode' => 530100,
            ),
            453 =>
            array (
                'code' => 530112,
                'level' => 3,
                'name' => '西山区',
                'pcode' => 530100,
            ),
            454 =>
            array (
                'code' => 530113,
                'level' => 3,
                'name' => '东川区',
                'pcode' => 530100,
            ),
            455 =>
            array (
                'code' => 530114,
                'level' => 3,
                'name' => '呈贡区',
                'pcode' => 530100,
            ),
            456 =>
            array (
                'code' => 530115,
                'level' => 3,
                'name' => '晋宁区',
                'pcode' => 530100,
            ),
            457 =>
            array (
                'code' => 530124,
                'level' => 3,
                'name' => '富民县',
                'pcode' => 530100,
            ),
            458 =>
            array (
                'code' => 530125,
                'level' => 3,
                'name' => '宜良县',
                'pcode' => 530100,
            ),
            459 =>
            array (
                'code' => 530126,
                'level' => 3,
                'name' => '石林彝族自治县',
                'pcode' => 530100,
            ),
            460 =>
            array (
                'code' => 530127,
                'level' => 3,
                'name' => '嵩明县',
                'pcode' => 530100,
            ),
            461 =>
            array (
                'code' => 530128,
                'level' => 3,
                'name' => '禄劝彝族苗族自治县',
                'pcode' => 530100,
            ),
            462 =>
            array (
                'code' => 530129,
                'level' => 3,
                'name' => '寻甸回族彝族自治县',
                'pcode' => 530100,
            ),
            463 =>
            array (
                'code' => 530181,
                'level' => 3,
                'name' => '安宁市',
                'pcode' => 530100,
            ),
            464 =>
            array (
                'code' => 530300,
                'level' => 2,
                'name' => '曲靖市',
                'pcode' => 530000,
            ),
            465 =>
            array (
                'code' => 530301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 530300,
            ),
            466 =>
            array (
                'code' => 530302,
                'level' => 3,
                'name' => '麒麟区',
                'pcode' => 530300,
            ),
            467 =>
            array (
                'code' => 530303,
                'level' => 3,
                'name' => '沾益区',
                'pcode' => 530300,
            ),
            468 =>
            array (
                'code' => 530304,
                'level' => 3,
                'name' => '马龙区',
                'pcode' => 530300,
            ),
            469 =>
            array (
                'code' => 530322,
                'level' => 3,
                'name' => '陆良县',
                'pcode' => 530300,
            ),
            470 =>
            array (
                'code' => 530323,
                'level' => 3,
                'name' => '师宗县',
                'pcode' => 530300,
            ),
            471 =>
            array (
                'code' => 530324,
                'level' => 3,
                'name' => '罗平县',
                'pcode' => 530300,
            ),
            472 =>
            array (
                'code' => 530325,
                'level' => 3,
                'name' => '富源县',
                'pcode' => 530300,
            ),
            473 =>
            array (
                'code' => 530326,
                'level' => 3,
                'name' => '会泽县',
                'pcode' => 530300,
            ),
            474 =>
            array (
                'code' => 530381,
                'level' => 3,
                'name' => '宣威市',
                'pcode' => 530300,
            ),
            475 =>
            array (
                'code' => 530400,
                'level' => 2,
                'name' => '玉溪市',
                'pcode' => 530000,
            ),
            476 =>
            array (
                'code' => 530401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 530400,
            ),
            477 =>
            array (
                'code' => 530402,
                'level' => 3,
                'name' => '红塔区',
                'pcode' => 530400,
            ),
            478 =>
            array (
                'code' => 530403,
                'level' => 3,
                'name' => '江川区',
                'pcode' => 530400,
            ),
            479 =>
            array (
                'code' => 530423,
                'level' => 3,
                'name' => '通海县',
                'pcode' => 530400,
            ),
            480 =>
            array (
                'code' => 530424,
                'level' => 3,
                'name' => '华宁县',
                'pcode' => 530400,
            ),
            481 =>
            array (
                'code' => 530425,
                'level' => 3,
                'name' => '易门县',
                'pcode' => 530400,
            ),
            482 =>
            array (
                'code' => 530426,
                'level' => 3,
                'name' => '峨山彝族自治县',
                'pcode' => 530400,
            ),
            483 =>
            array (
                'code' => 530427,
                'level' => 3,
                'name' => '新平彝族傣族自治县',
                'pcode' => 530400,
            ),
            484 =>
            array (
                'code' => 530428,
                'level' => 3,
                'name' => '元江哈尼族彝族傣族自治县',
                'pcode' => 530400,
            ),
            485 =>
            array (
                'code' => 530481,
                'level' => 3,
                'name' => '澄江市',
                'pcode' => 530400,
            ),
            486 =>
            array (
                'code' => 530500,
                'level' => 2,
                'name' => '保山市',
                'pcode' => 530000,
            ),
            487 =>
            array (
                'code' => 530501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 530500,
            ),
            488 =>
            array (
                'code' => 530502,
                'level' => 3,
                'name' => '隆阳区',
                'pcode' => 530500,
            ),
            489 =>
            array (
                'code' => 530521,
                'level' => 3,
                'name' => '施甸县',
                'pcode' => 530500,
            ),
            490 =>
            array (
                'code' => 530523,
                'level' => 3,
                'name' => '龙陵县',
                'pcode' => 530500,
            ),
            491 =>
            array (
                'code' => 530524,
                'level' => 3,
                'name' => '昌宁县',
                'pcode' => 530500,
            ),
            492 =>
            array (
                'code' => 530581,
                'level' => 3,
                'name' => '腾冲市',
                'pcode' => 530500,
            ),
            493 =>
            array (
                'code' => 530600,
                'level' => 2,
                'name' => '昭通市',
                'pcode' => 530000,
            ),
            494 =>
            array (
                'code' => 530601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 530600,
            ),
            495 =>
            array (
                'code' => 530602,
                'level' => 3,
                'name' => '昭阳区',
                'pcode' => 530600,
            ),
            496 =>
            array (
                'code' => 530621,
                'level' => 3,
                'name' => '鲁甸县',
                'pcode' => 530600,
            ),
            497 =>
            array (
                'code' => 530622,
                'level' => 3,
                'name' => '巧家县',
                'pcode' => 530600,
            ),
            498 =>
            array (
                'code' => 530623,
                'level' => 3,
                'name' => '盐津县',
                'pcode' => 530600,
            ),
            499 =>
            array (
                'code' => 530624,
                'level' => 3,
                'name' => '大关县',
                'pcode' => 530600,
            ),
        ));
        \DB::table('china_areas')->insert(array (
            0 =>
            array (
                'code' => 530625,
                'level' => 3,
                'name' => '永善县',
                'pcode' => 530600,
            ),
            1 =>
            array (
                'code' => 530626,
                'level' => 3,
                'name' => '绥江县',
                'pcode' => 530600,
            ),
            2 =>
            array (
                'code' => 530627,
                'level' => 3,
                'name' => '镇雄县',
                'pcode' => 530600,
            ),
            3 =>
            array (
                'code' => 530628,
                'level' => 3,
                'name' => '彝良县',
                'pcode' => 530600,
            ),
            4 =>
            array (
                'code' => 530629,
                'level' => 3,
                'name' => '威信县',
                'pcode' => 530600,
            ),
            5 =>
            array (
                'code' => 530681,
                'level' => 3,
                'name' => '水富市',
                'pcode' => 530600,
            ),
            6 =>
            array (
                'code' => 530700,
                'level' => 2,
                'name' => '丽江市',
                'pcode' => 530000,
            ),
            7 =>
            array (
                'code' => 530701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 530700,
            ),
            8 =>
            array (
                'code' => 530702,
                'level' => 3,
                'name' => '古城区',
                'pcode' => 530700,
            ),
            9 =>
            array (
                'code' => 530721,
                'level' => 3,
                'name' => '玉龙纳西族自治县',
                'pcode' => 530700,
            ),
            10 =>
            array (
                'code' => 530722,
                'level' => 3,
                'name' => '永胜县',
                'pcode' => 530700,
            ),
            11 =>
            array (
                'code' => 530723,
                'level' => 3,
                'name' => '华坪县',
                'pcode' => 530700,
            ),
            12 =>
            array (
                'code' => 530724,
                'level' => 3,
                'name' => '宁蒗彝族自治县',
                'pcode' => 530700,
            ),
            13 =>
            array (
                'code' => 530800,
                'level' => 2,
                'name' => '普洱市',
                'pcode' => 530000,
            ),
            14 =>
            array (
                'code' => 530801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 530800,
            ),
            15 =>
            array (
                'code' => 530802,
                'level' => 3,
                'name' => '思茅区',
                'pcode' => 530800,
            ),
            16 =>
            array (
                'code' => 530821,
                'level' => 3,
                'name' => '宁洱哈尼族彝族自治县',
                'pcode' => 530800,
            ),
            17 =>
            array (
                'code' => 530822,
                'level' => 3,
                'name' => '墨江哈尼族自治县',
                'pcode' => 530800,
            ),
            18 =>
            array (
                'code' => 530823,
                'level' => 3,
                'name' => '景东彝族自治县',
                'pcode' => 530800,
            ),
            19 =>
            array (
                'code' => 530824,
                'level' => 3,
                'name' => '景谷傣族彝族自治县',
                'pcode' => 530800,
            ),
            20 =>
            array (
                'code' => 530825,
                'level' => 3,
                'name' => '镇沅彝族哈尼族拉祜族自治县',
                'pcode' => 530800,
            ),
            21 =>
            array (
                'code' => 530826,
                'level' => 3,
                'name' => '江城哈尼族彝族自治县',
                'pcode' => 530800,
            ),
            22 =>
            array (
                'code' => 530827,
                'level' => 3,
                'name' => '孟连傣族拉祜族佤族自治县',
                'pcode' => 530800,
            ),
            23 =>
            array (
                'code' => 530828,
                'level' => 3,
                'name' => '澜沧拉祜族自治县',
                'pcode' => 530800,
            ),
            24 =>
            array (
                'code' => 530829,
                'level' => 3,
                'name' => '西盟佤族自治县',
                'pcode' => 530800,
            ),
            25 =>
            array (
                'code' => 530900,
                'level' => 2,
                'name' => '临沧市',
                'pcode' => 530000,
            ),
            26 =>
            array (
                'code' => 530901,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 530900,
            ),
            27 =>
            array (
                'code' => 530902,
                'level' => 3,
                'name' => '临翔区',
                'pcode' => 530900,
            ),
            28 =>
            array (
                'code' => 530921,
                'level' => 3,
                'name' => '凤庆县',
                'pcode' => 530900,
            ),
            29 =>
            array (
                'code' => 530922,
                'level' => 3,
                'name' => '云县',
                'pcode' => 530900,
            ),
            30 =>
            array (
                'code' => 530923,
                'level' => 3,
                'name' => '永德县',
                'pcode' => 530900,
            ),
            31 =>
            array (
                'code' => 530924,
                'level' => 3,
                'name' => '镇康县',
                'pcode' => 530900,
            ),
            32 =>
            array (
                'code' => 530925,
                'level' => 3,
                'name' => '双江拉祜族佤族布朗族傣族自治县',
                'pcode' => 530900,
            ),
            33 =>
            array (
                'code' => 530926,
                'level' => 3,
                'name' => '耿马傣族佤族自治县',
                'pcode' => 530900,
            ),
            34 =>
            array (
                'code' => 530927,
                'level' => 3,
                'name' => '沧源佤族自治县',
                'pcode' => 530900,
            ),
            35 =>
            array (
                'code' => 532300,
                'level' => 2,
                'name' => '楚雄彝族自治州',
                'pcode' => 530000,
            ),
            36 =>
            array (
                'code' => 532301,
                'level' => 3,
                'name' => '楚雄市',
                'pcode' => 532300,
            ),
            37 =>
            array (
                'code' => 532322,
                'level' => 3,
                'name' => '双柏县',
                'pcode' => 532300,
            ),
            38 =>
            array (
                'code' => 532323,
                'level' => 3,
                'name' => '牟定县',
                'pcode' => 532300,
            ),
            39 =>
            array (
                'code' => 532324,
                'level' => 3,
                'name' => '南华县',
                'pcode' => 532300,
            ),
            40 =>
            array (
                'code' => 532325,
                'level' => 3,
                'name' => '姚安县',
                'pcode' => 532300,
            ),
            41 =>
            array (
                'code' => 532326,
                'level' => 3,
                'name' => '大姚县',
                'pcode' => 532300,
            ),
            42 =>
            array (
                'code' => 532327,
                'level' => 3,
                'name' => '永仁县',
                'pcode' => 532300,
            ),
            43 =>
            array (
                'code' => 532328,
                'level' => 3,
                'name' => '元谋县',
                'pcode' => 532300,
            ),
            44 =>
            array (
                'code' => 532329,
                'level' => 3,
                'name' => '武定县',
                'pcode' => 532300,
            ),
            45 =>
            array (
                'code' => 532331,
                'level' => 3,
                'name' => '禄丰县',
                'pcode' => 532300,
            ),
            46 =>
            array (
                'code' => 532500,
                'level' => 2,
                'name' => '红河哈尼族彝族自治州',
                'pcode' => 530000,
            ),
            47 =>
            array (
                'code' => 532501,
                'level' => 3,
                'name' => '个旧市',
                'pcode' => 532500,
            ),
            48 =>
            array (
                'code' => 532502,
                'level' => 3,
                'name' => '开远市',
                'pcode' => 532500,
            ),
            49 =>
            array (
                'code' => 532503,
                'level' => 3,
                'name' => '蒙自市',
                'pcode' => 532500,
            ),
            50 =>
            array (
                'code' => 532504,
                'level' => 3,
                'name' => '弥勒市',
                'pcode' => 532500,
            ),
            51 =>
            array (
                'code' => 532523,
                'level' => 3,
                'name' => '屏边苗族自治县',
                'pcode' => 532500,
            ),
            52 =>
            array (
                'code' => 532524,
                'level' => 3,
                'name' => '建水县',
                'pcode' => 532500,
            ),
            53 =>
            array (
                'code' => 532525,
                'level' => 3,
                'name' => '石屏县',
                'pcode' => 532500,
            ),
            54 =>
            array (
                'code' => 532527,
                'level' => 3,
                'name' => '泸西县',
                'pcode' => 532500,
            ),
            55 =>
            array (
                'code' => 532528,
                'level' => 3,
                'name' => '元阳县',
                'pcode' => 532500,
            ),
            56 =>
            array (
                'code' => 532529,
                'level' => 3,
                'name' => '红河县',
                'pcode' => 532500,
            ),
            57 =>
            array (
                'code' => 532530,
                'level' => 3,
                'name' => '金平苗族瑶族傣族自治县',
                'pcode' => 532500,
            ),
            58 =>
            array (
                'code' => 532531,
                'level' => 3,
                'name' => '绿春县',
                'pcode' => 532500,
            ),
            59 =>
            array (
                'code' => 532532,
                'level' => 3,
                'name' => '河口瑶族自治县',
                'pcode' => 532500,
            ),
            60 =>
            array (
                'code' => 532600,
                'level' => 2,
                'name' => '文山壮族苗族自治州',
                'pcode' => 530000,
            ),
            61 =>
            array (
                'code' => 532601,
                'level' => 3,
                'name' => '文山市',
                'pcode' => 532600,
            ),
            62 =>
            array (
                'code' => 532622,
                'level' => 3,
                'name' => '砚山县',
                'pcode' => 532600,
            ),
            63 =>
            array (
                'code' => 532623,
                'level' => 3,
                'name' => '西畴县',
                'pcode' => 532600,
            ),
            64 =>
            array (
                'code' => 532624,
                'level' => 3,
                'name' => '麻栗坡县',
                'pcode' => 532600,
            ),
            65 =>
            array (
                'code' => 532625,
                'level' => 3,
                'name' => '马关县',
                'pcode' => 532600,
            ),
            66 =>
            array (
                'code' => 532626,
                'level' => 3,
                'name' => '丘北县',
                'pcode' => 532600,
            ),
            67 =>
            array (
                'code' => 532627,
                'level' => 3,
                'name' => '广南县',
                'pcode' => 532600,
            ),
            68 =>
            array (
                'code' => 532628,
                'level' => 3,
                'name' => '富宁县',
                'pcode' => 532600,
            ),
            69 =>
            array (
                'code' => 532800,
                'level' => 2,
                'name' => '西双版纳傣族自治州',
                'pcode' => 530000,
            ),
            70 =>
            array (
                'code' => 532801,
                'level' => 3,
                'name' => '景洪市',
                'pcode' => 532800,
            ),
            71 =>
            array (
                'code' => 532822,
                'level' => 3,
                'name' => '勐海县',
                'pcode' => 532800,
            ),
            72 =>
            array (
                'code' => 532823,
                'level' => 3,
                'name' => '勐腊县',
                'pcode' => 532800,
            ),
            73 =>
            array (
                'code' => 532900,
                'level' => 2,
                'name' => '大理白族自治州',
                'pcode' => 530000,
            ),
            74 =>
            array (
                'code' => 532901,
                'level' => 3,
                'name' => '大理市',
                'pcode' => 532900,
            ),
            75 =>
            array (
                'code' => 532922,
                'level' => 3,
                'name' => '漾濞彝族自治县',
                'pcode' => 532900,
            ),
            76 =>
            array (
                'code' => 532923,
                'level' => 3,
                'name' => '祥云县',
                'pcode' => 532900,
            ),
            77 =>
            array (
                'code' => 532924,
                'level' => 3,
                'name' => '宾川县',
                'pcode' => 532900,
            ),
            78 =>
            array (
                'code' => 532925,
                'level' => 3,
                'name' => '弥渡县',
                'pcode' => 532900,
            ),
            79 =>
            array (
                'code' => 532926,
                'level' => 3,
                'name' => '南涧彝族自治县',
                'pcode' => 532900,
            ),
            80 =>
            array (
                'code' => 532927,
                'level' => 3,
                'name' => '巍山彝族回族自治县',
                'pcode' => 532900,
            ),
            81 =>
            array (
                'code' => 532928,
                'level' => 3,
                'name' => '永平县',
                'pcode' => 532900,
            ),
            82 =>
            array (
                'code' => 532929,
                'level' => 3,
                'name' => '云龙县',
                'pcode' => 532900,
            ),
            83 =>
            array (
                'code' => 532930,
                'level' => 3,
                'name' => '洱源县',
                'pcode' => 532900,
            ),
            84 =>
            array (
                'code' => 532931,
                'level' => 3,
                'name' => '剑川县',
                'pcode' => 532900,
            ),
            85 =>
            array (
                'code' => 532932,
                'level' => 3,
                'name' => '鹤庆县',
                'pcode' => 532900,
            ),
            86 =>
            array (
                'code' => 533100,
                'level' => 2,
                'name' => '德宏傣族景颇族自治州',
                'pcode' => 530000,
            ),
            87 =>
            array (
                'code' => 533102,
                'level' => 3,
                'name' => '瑞丽市',
                'pcode' => 533100,
            ),
            88 =>
            array (
                'code' => 533103,
                'level' => 3,
                'name' => '芒市',
                'pcode' => 533100,
            ),
            89 =>
            array (
                'code' => 533122,
                'level' => 3,
                'name' => '梁河县',
                'pcode' => 533100,
            ),
            90 =>
            array (
                'code' => 533123,
                'level' => 3,
                'name' => '盈江县',
                'pcode' => 533100,
            ),
            91 =>
            array (
                'code' => 533124,
                'level' => 3,
                'name' => '陇川县',
                'pcode' => 533100,
            ),
            92 =>
            array (
                'code' => 533300,
                'level' => 2,
                'name' => '怒江傈僳族自治州',
                'pcode' => 530000,
            ),
            93 =>
            array (
                'code' => 533301,
                'level' => 3,
                'name' => '泸水市',
                'pcode' => 533300,
            ),
            94 =>
            array (
                'code' => 533323,
                'level' => 3,
                'name' => '福贡县',
                'pcode' => 533300,
            ),
            95 =>
            array (
                'code' => 533324,
                'level' => 3,
                'name' => '贡山独龙族怒族自治县',
                'pcode' => 533300,
            ),
            96 =>
            array (
                'code' => 533325,
                'level' => 3,
                'name' => '兰坪白族普米族自治县',
                'pcode' => 533300,
            ),
            97 =>
            array (
                'code' => 533400,
                'level' => 2,
                'name' => '迪庆藏族自治州',
                'pcode' => 530000,
            ),
            98 =>
            array (
                'code' => 533401,
                'level' => 3,
                'name' => '香格里拉市',
                'pcode' => 533400,
            ),
            99 =>
            array (
                'code' => 533422,
                'level' => 3,
                'name' => '德钦县',
                'pcode' => 533400,
            ),
            100 =>
            array (
                'code' => 533423,
                'level' => 3,
                'name' => '维西傈僳族自治县',
                'pcode' => 533400,
            ),
            101 =>
            array (
                'code' => 540000,
                'level' => 1,
                'name' => '西藏自治区',
                'pcode' => 0,
            ),
            102 =>
            array (
                'code' => 540100,
                'level' => 2,
                'name' => '拉萨市',
                'pcode' => 540000,
            ),
            103 =>
            array (
                'code' => 540101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 540100,
            ),
            104 =>
            array (
                'code' => 540102,
                'level' => 3,
                'name' => '城关区',
                'pcode' => 540100,
            ),
            105 =>
            array (
                'code' => 540103,
                'level' => 3,
                'name' => '堆龙德庆区',
                'pcode' => 540100,
            ),
            106 =>
            array (
                'code' => 540104,
                'level' => 3,
                'name' => '达孜区',
                'pcode' => 540100,
            ),
            107 =>
            array (
                'code' => 540121,
                'level' => 3,
                'name' => '林周县',
                'pcode' => 540100,
            ),
            108 =>
            array (
                'code' => 540122,
                'level' => 3,
                'name' => '当雄县',
                'pcode' => 540100,
            ),
            109 =>
            array (
                'code' => 540123,
                'level' => 3,
                'name' => '尼木县',
                'pcode' => 540100,
            ),
            110 =>
            array (
                'code' => 540124,
                'level' => 3,
                'name' => '曲水县',
                'pcode' => 540100,
            ),
            111 =>
            array (
                'code' => 540127,
                'level' => 3,
                'name' => '墨竹工卡县',
                'pcode' => 540100,
            ),
            112 =>
            array (
                'code' => 540171,
                'level' => 3,
                'name' => '格尔木藏青工业园区',
                'pcode' => 540100,
            ),
            113 =>
            array (
                'code' => 540172,
                'level' => 3,
                'name' => '拉萨经济技术开发区',
                'pcode' => 540100,
            ),
            114 =>
            array (
                'code' => 540173,
                'level' => 3,
                'name' => '西藏文化旅游创意园区',
                'pcode' => 540100,
            ),
            115 =>
            array (
                'code' => 540174,
                'level' => 3,
                'name' => '达孜工业园区',
                'pcode' => 540100,
            ),
            116 =>
            array (
                'code' => 540200,
                'level' => 2,
                'name' => '日喀则市',
                'pcode' => 540000,
            ),
            117 =>
            array (
                'code' => 540202,
                'level' => 3,
                'name' => '桑珠孜区',
                'pcode' => 540200,
            ),
            118 =>
            array (
                'code' => 540221,
                'level' => 3,
                'name' => '南木林县',
                'pcode' => 540200,
            ),
            119 =>
            array (
                'code' => 540222,
                'level' => 3,
                'name' => '江孜县',
                'pcode' => 540200,
            ),
            120 =>
            array (
                'code' => 540223,
                'level' => 3,
                'name' => '定日县',
                'pcode' => 540200,
            ),
            121 =>
            array (
                'code' => 540224,
                'level' => 3,
                'name' => '萨迦县',
                'pcode' => 540200,
            ),
            122 =>
            array (
                'code' => 540225,
                'level' => 3,
                'name' => '拉孜县',
                'pcode' => 540200,
            ),
            123 =>
            array (
                'code' => 540226,
                'level' => 3,
                'name' => '昂仁县',
                'pcode' => 540200,
            ),
            124 =>
            array (
                'code' => 540227,
                'level' => 3,
                'name' => '谢通门县',
                'pcode' => 540200,
            ),
            125 =>
            array (
                'code' => 540228,
                'level' => 3,
                'name' => '白朗县',
                'pcode' => 540200,
            ),
            126 =>
            array (
                'code' => 540229,
                'level' => 3,
                'name' => '仁布县',
                'pcode' => 540200,
            ),
            127 =>
            array (
                'code' => 540230,
                'level' => 3,
                'name' => '康马县',
                'pcode' => 540200,
            ),
            128 =>
            array (
                'code' => 540231,
                'level' => 3,
                'name' => '定结县',
                'pcode' => 540200,
            ),
            129 =>
            array (
                'code' => 540232,
                'level' => 3,
                'name' => '仲巴县',
                'pcode' => 540200,
            ),
            130 =>
            array (
                'code' => 540233,
                'level' => 3,
                'name' => '亚东县',
                'pcode' => 540200,
            ),
            131 =>
            array (
                'code' => 540234,
                'level' => 3,
                'name' => '吉隆县',
                'pcode' => 540200,
            ),
            132 =>
            array (
                'code' => 540235,
                'level' => 3,
                'name' => '聂拉木县',
                'pcode' => 540200,
            ),
            133 =>
            array (
                'code' => 540236,
                'level' => 3,
                'name' => '萨嘎县',
                'pcode' => 540200,
            ),
            134 =>
            array (
                'code' => 540237,
                'level' => 3,
                'name' => '岗巴县',
                'pcode' => 540200,
            ),
            135 =>
            array (
                'code' => 540300,
                'level' => 2,
                'name' => '昌都市',
                'pcode' => 540000,
            ),
            136 =>
            array (
                'code' => 540302,
                'level' => 3,
                'name' => '卡若区',
                'pcode' => 540300,
            ),
            137 =>
            array (
                'code' => 540321,
                'level' => 3,
                'name' => '江达县',
                'pcode' => 540300,
            ),
            138 =>
            array (
                'code' => 540322,
                'level' => 3,
                'name' => '贡觉县',
                'pcode' => 540300,
            ),
            139 =>
            array (
                'code' => 540323,
                'level' => 3,
                'name' => '类乌齐县',
                'pcode' => 540300,
            ),
            140 =>
            array (
                'code' => 540324,
                'level' => 3,
                'name' => '丁青县',
                'pcode' => 540300,
            ),
            141 =>
            array (
                'code' => 540325,
                'level' => 3,
                'name' => '察雅县',
                'pcode' => 540300,
            ),
            142 =>
            array (
                'code' => 540326,
                'level' => 3,
                'name' => '八宿县',
                'pcode' => 540300,
            ),
            143 =>
            array (
                'code' => 540327,
                'level' => 3,
                'name' => '左贡县',
                'pcode' => 540300,
            ),
            144 =>
            array (
                'code' => 540328,
                'level' => 3,
                'name' => '芒康县',
                'pcode' => 540300,
            ),
            145 =>
            array (
                'code' => 540329,
                'level' => 3,
                'name' => '洛隆县',
                'pcode' => 540300,
            ),
            146 =>
            array (
                'code' => 540330,
                'level' => 3,
                'name' => '边坝县',
                'pcode' => 540300,
            ),
            147 =>
            array (
                'code' => 540400,
                'level' => 2,
                'name' => '林芝市',
                'pcode' => 540000,
            ),
            148 =>
            array (
                'code' => 540402,
                'level' => 3,
                'name' => '巴宜区',
                'pcode' => 540400,
            ),
            149 =>
            array (
                'code' => 540421,
                'level' => 3,
                'name' => '工布江达县',
                'pcode' => 540400,
            ),
            150 =>
            array (
                'code' => 540422,
                'level' => 3,
                'name' => '米林县',
                'pcode' => 540400,
            ),
            151 =>
            array (
                'code' => 540423,
                'level' => 3,
                'name' => '墨脱县',
                'pcode' => 540400,
            ),
            152 =>
            array (
                'code' => 540424,
                'level' => 3,
                'name' => '波密县',
                'pcode' => 540400,
            ),
            153 =>
            array (
                'code' => 540425,
                'level' => 3,
                'name' => '察隅县',
                'pcode' => 540400,
            ),
            154 =>
            array (
                'code' => 540426,
                'level' => 3,
                'name' => '朗县',
                'pcode' => 540400,
            ),
            155 =>
            array (
                'code' => 540500,
                'level' => 2,
                'name' => '山南市',
                'pcode' => 540000,
            ),
            156 =>
            array (
                'code' => 540501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 540500,
            ),
            157 =>
            array (
                'code' => 540502,
                'level' => 3,
                'name' => '乃东区',
                'pcode' => 540500,
            ),
            158 =>
            array (
                'code' => 540521,
                'level' => 3,
                'name' => '扎囊县',
                'pcode' => 540500,
            ),
            159 =>
            array (
                'code' => 540522,
                'level' => 3,
                'name' => '贡嘎县',
                'pcode' => 540500,
            ),
            160 =>
            array (
                'code' => 540523,
                'level' => 3,
                'name' => '桑日县',
                'pcode' => 540500,
            ),
            161 =>
            array (
                'code' => 540524,
                'level' => 3,
                'name' => '琼结县',
                'pcode' => 540500,
            ),
            162 =>
            array (
                'code' => 540525,
                'level' => 3,
                'name' => '曲松县',
                'pcode' => 540500,
            ),
            163 =>
            array (
                'code' => 540526,
                'level' => 3,
                'name' => '措美县',
                'pcode' => 540500,
            ),
            164 =>
            array (
                'code' => 540527,
                'level' => 3,
                'name' => '洛扎县',
                'pcode' => 540500,
            ),
            165 =>
            array (
                'code' => 540528,
                'level' => 3,
                'name' => '加查县',
                'pcode' => 540500,
            ),
            166 =>
            array (
                'code' => 540529,
                'level' => 3,
                'name' => '隆子县',
                'pcode' => 540500,
            ),
            167 =>
            array (
                'code' => 540530,
                'level' => 3,
                'name' => '错那县',
                'pcode' => 540500,
            ),
            168 =>
            array (
                'code' => 540531,
                'level' => 3,
                'name' => '浪卡子县',
                'pcode' => 540500,
            ),
            169 =>
            array (
                'code' => 540600,
                'level' => 2,
                'name' => '那曲市',
                'pcode' => 540000,
            ),
            170 =>
            array (
                'code' => 540602,
                'level' => 3,
                'name' => '色尼区',
                'pcode' => 540600,
            ),
            171 =>
            array (
                'code' => 540621,
                'level' => 3,
                'name' => '嘉黎县',
                'pcode' => 540600,
            ),
            172 =>
            array (
                'code' => 540622,
                'level' => 3,
                'name' => '比如县',
                'pcode' => 540600,
            ),
            173 =>
            array (
                'code' => 540623,
                'level' => 3,
                'name' => '聂荣县',
                'pcode' => 540600,
            ),
            174 =>
            array (
                'code' => 540624,
                'level' => 3,
                'name' => '安多县',
                'pcode' => 540600,
            ),
            175 =>
            array (
                'code' => 540625,
                'level' => 3,
                'name' => '申扎县',
                'pcode' => 540600,
            ),
            176 =>
            array (
                'code' => 540626,
                'level' => 3,
                'name' => '索县',
                'pcode' => 540600,
            ),
            177 =>
            array (
                'code' => 540627,
                'level' => 3,
                'name' => '班戈县',
                'pcode' => 540600,
            ),
            178 =>
            array (
                'code' => 540628,
                'level' => 3,
                'name' => '巴青县',
                'pcode' => 540600,
            ),
            179 =>
            array (
                'code' => 540629,
                'level' => 3,
                'name' => '尼玛县',
                'pcode' => 540600,
            ),
            180 =>
            array (
                'code' => 540630,
                'level' => 3,
                'name' => '双湖县',
                'pcode' => 540600,
            ),
            181 =>
            array (
                'code' => 542500,
                'level' => 2,
                'name' => '阿里地区',
                'pcode' => 540000,
            ),
            182 =>
            array (
                'code' => 542521,
                'level' => 3,
                'name' => '普兰县',
                'pcode' => 542500,
            ),
            183 =>
            array (
                'code' => 542522,
                'level' => 3,
                'name' => '札达县',
                'pcode' => 542500,
            ),
            184 =>
            array (
                'code' => 542523,
                'level' => 3,
                'name' => '噶尔县',
                'pcode' => 542500,
            ),
            185 =>
            array (
                'code' => 542524,
                'level' => 3,
                'name' => '日土县',
                'pcode' => 542500,
            ),
            186 =>
            array (
                'code' => 542525,
                'level' => 3,
                'name' => '革吉县',
                'pcode' => 542500,
            ),
            187 =>
            array (
                'code' => 542526,
                'level' => 3,
                'name' => '改则县',
                'pcode' => 542500,
            ),
            188 =>
            array (
                'code' => 542527,
                'level' => 3,
                'name' => '措勤县',
                'pcode' => 542500,
            ),
            189 =>
            array (
                'code' => 610000,
                'level' => 1,
                'name' => '陕西省',
                'pcode' => 0,
            ),
            190 =>
            array (
                'code' => 610100,
                'level' => 2,
                'name' => '西安市',
                'pcode' => 610000,
            ),
            191 =>
            array (
                'code' => 610101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 610100,
            ),
            192 =>
            array (
                'code' => 610102,
                'level' => 3,
                'name' => '新城区',
                'pcode' => 610100,
            ),
            193 =>
            array (
                'code' => 610103,
                'level' => 3,
                'name' => '碑林区',
                'pcode' => 610100,
            ),
            194 =>
            array (
                'code' => 610104,
                'level' => 3,
                'name' => '莲湖区',
                'pcode' => 610100,
            ),
            195 =>
            array (
                'code' => 610111,
                'level' => 3,
                'name' => '灞桥区',
                'pcode' => 610100,
            ),
            196 =>
            array (
                'code' => 610112,
                'level' => 3,
                'name' => '未央区',
                'pcode' => 610100,
            ),
            197 =>
            array (
                'code' => 610113,
                'level' => 3,
                'name' => '雁塔区',
                'pcode' => 610100,
            ),
            198 =>
            array (
                'code' => 610114,
                'level' => 3,
                'name' => '阎良区',
                'pcode' => 610100,
            ),
            199 =>
            array (
                'code' => 610115,
                'level' => 3,
                'name' => '临潼区',
                'pcode' => 610100,
            ),
            200 =>
            array (
                'code' => 610116,
                'level' => 3,
                'name' => '长安区',
                'pcode' => 610100,
            ),
            201 =>
            array (
                'code' => 610117,
                'level' => 3,
                'name' => '高陵区',
                'pcode' => 610100,
            ),
            202 =>
            array (
                'code' => 610118,
                'level' => 3,
                'name' => '鄠邑区',
                'pcode' => 610100,
            ),
            203 =>
            array (
                'code' => 610122,
                'level' => 3,
                'name' => '蓝田县',
                'pcode' => 610100,
            ),
            204 =>
            array (
                'code' => 610124,
                'level' => 3,
                'name' => '周至县',
                'pcode' => 610100,
            ),
            205 =>
            array (
                'code' => 610200,
                'level' => 2,
                'name' => '铜川市',
                'pcode' => 610000,
            ),
            206 =>
            array (
                'code' => 610201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 610200,
            ),
            207 =>
            array (
                'code' => 610202,
                'level' => 3,
                'name' => '王益区',
                'pcode' => 610200,
            ),
            208 =>
            array (
                'code' => 610203,
                'level' => 3,
                'name' => '印台区',
                'pcode' => 610200,
            ),
            209 =>
            array (
                'code' => 610204,
                'level' => 3,
                'name' => '耀州区',
                'pcode' => 610200,
            ),
            210 =>
            array (
                'code' => 610222,
                'level' => 3,
                'name' => '宜君县',
                'pcode' => 610200,
            ),
            211 =>
            array (
                'code' => 610300,
                'level' => 2,
                'name' => '宝鸡市',
                'pcode' => 610000,
            ),
            212 =>
            array (
                'code' => 610301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 610300,
            ),
            213 =>
            array (
                'code' => 610302,
                'level' => 3,
                'name' => '渭滨区',
                'pcode' => 610300,
            ),
            214 =>
            array (
                'code' => 610303,
                'level' => 3,
                'name' => '金台区',
                'pcode' => 610300,
            ),
            215 =>
            array (
                'code' => 610304,
                'level' => 3,
                'name' => '陈仓区',
                'pcode' => 610300,
            ),
            216 =>
            array (
                'code' => 610322,
                'level' => 3,
                'name' => '凤翔县',
                'pcode' => 610300,
            ),
            217 =>
            array (
                'code' => 610323,
                'level' => 3,
                'name' => '岐山县',
                'pcode' => 610300,
            ),
            218 =>
            array (
                'code' => 610324,
                'level' => 3,
                'name' => '扶风县',
                'pcode' => 610300,
            ),
            219 =>
            array (
                'code' => 610326,
                'level' => 3,
                'name' => '眉县',
                'pcode' => 610300,
            ),
            220 =>
            array (
                'code' => 610327,
                'level' => 3,
                'name' => '陇县',
                'pcode' => 610300,
            ),
            221 =>
            array (
                'code' => 610328,
                'level' => 3,
                'name' => '千阳县',
                'pcode' => 610300,
            ),
            222 =>
            array (
                'code' => 610329,
                'level' => 3,
                'name' => '麟游县',
                'pcode' => 610300,
            ),
            223 =>
            array (
                'code' => 610330,
                'level' => 3,
                'name' => '凤县',
                'pcode' => 610300,
            ),
            224 =>
            array (
                'code' => 610331,
                'level' => 3,
                'name' => '太白县',
                'pcode' => 610300,
            ),
            225 =>
            array (
                'code' => 610400,
                'level' => 2,
                'name' => '咸阳市',
                'pcode' => 610000,
            ),
            226 =>
            array (
                'code' => 610401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 610400,
            ),
            227 =>
            array (
                'code' => 610402,
                'level' => 3,
                'name' => '秦都区',
                'pcode' => 610400,
            ),
            228 =>
            array (
                'code' => 610403,
                'level' => 3,
                'name' => '杨陵区',
                'pcode' => 610400,
            ),
            229 =>
            array (
                'code' => 610404,
                'level' => 3,
                'name' => '渭城区',
                'pcode' => 610400,
            ),
            230 =>
            array (
                'code' => 610422,
                'level' => 3,
                'name' => '三原县',
                'pcode' => 610400,
            ),
            231 =>
            array (
                'code' => 610423,
                'level' => 3,
                'name' => '泾阳县',
                'pcode' => 610400,
            ),
            232 =>
            array (
                'code' => 610424,
                'level' => 3,
                'name' => '乾县',
                'pcode' => 610400,
            ),
            233 =>
            array (
                'code' => 610425,
                'level' => 3,
                'name' => '礼泉县',
                'pcode' => 610400,
            ),
            234 =>
            array (
                'code' => 610426,
                'level' => 3,
                'name' => '永寿县',
                'pcode' => 610400,
            ),
            235 =>
            array (
                'code' => 610428,
                'level' => 3,
                'name' => '长武县',
                'pcode' => 610400,
            ),
            236 =>
            array (
                'code' => 610429,
                'level' => 3,
                'name' => '旬邑县',
                'pcode' => 610400,
            ),
            237 =>
            array (
                'code' => 610430,
                'level' => 3,
                'name' => '淳化县',
                'pcode' => 610400,
            ),
            238 =>
            array (
                'code' => 610431,
                'level' => 3,
                'name' => '武功县',
                'pcode' => 610400,
            ),
            239 =>
            array (
                'code' => 610481,
                'level' => 3,
                'name' => '兴平市',
                'pcode' => 610400,
            ),
            240 =>
            array (
                'code' => 610482,
                'level' => 3,
                'name' => '彬州市',
                'pcode' => 610400,
            ),
            241 =>
            array (
                'code' => 610500,
                'level' => 2,
                'name' => '渭南市',
                'pcode' => 610000,
            ),
            242 =>
            array (
                'code' => 610501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 610500,
            ),
            243 =>
            array (
                'code' => 610502,
                'level' => 3,
                'name' => '临渭区',
                'pcode' => 610500,
            ),
            244 =>
            array (
                'code' => 610503,
                'level' => 3,
                'name' => '华州区',
                'pcode' => 610500,
            ),
            245 =>
            array (
                'code' => 610522,
                'level' => 3,
                'name' => '潼关县',
                'pcode' => 610500,
            ),
            246 =>
            array (
                'code' => 610523,
                'level' => 3,
                'name' => '大荔县',
                'pcode' => 610500,
            ),
            247 =>
            array (
                'code' => 610524,
                'level' => 3,
                'name' => '合阳县',
                'pcode' => 610500,
            ),
            248 =>
            array (
                'code' => 610525,
                'level' => 3,
                'name' => '澄城县',
                'pcode' => 610500,
            ),
            249 =>
            array (
                'code' => 610526,
                'level' => 3,
                'name' => '蒲城县',
                'pcode' => 610500,
            ),
            250 =>
            array (
                'code' => 610527,
                'level' => 3,
                'name' => '白水县',
                'pcode' => 610500,
            ),
            251 =>
            array (
                'code' => 610528,
                'level' => 3,
                'name' => '富平县',
                'pcode' => 610500,
            ),
            252 =>
            array (
                'code' => 610581,
                'level' => 3,
                'name' => '韩城市',
                'pcode' => 610500,
            ),
            253 =>
            array (
                'code' => 610582,
                'level' => 3,
                'name' => '华阴市',
                'pcode' => 610500,
            ),
            254 =>
            array (
                'code' => 610600,
                'level' => 2,
                'name' => '延安市',
                'pcode' => 610000,
            ),
            255 =>
            array (
                'code' => 610601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 610600,
            ),
            256 =>
            array (
                'code' => 610602,
                'level' => 3,
                'name' => '宝塔区',
                'pcode' => 610600,
            ),
            257 =>
            array (
                'code' => 610603,
                'level' => 3,
                'name' => '安塞区',
                'pcode' => 610600,
            ),
            258 =>
            array (
                'code' => 610621,
                'level' => 3,
                'name' => '延长县',
                'pcode' => 610600,
            ),
            259 =>
            array (
                'code' => 610622,
                'level' => 3,
                'name' => '延川县',
                'pcode' => 610600,
            ),
            260 =>
            array (
                'code' => 610625,
                'level' => 3,
                'name' => '志丹县',
                'pcode' => 610600,
            ),
            261 =>
            array (
                'code' => 610626,
                'level' => 3,
                'name' => '吴起县',
                'pcode' => 610600,
            ),
            262 =>
            array (
                'code' => 610627,
                'level' => 3,
                'name' => '甘泉县',
                'pcode' => 610600,
            ),
            263 =>
            array (
                'code' => 610628,
                'level' => 3,
                'name' => '富县',
                'pcode' => 610600,
            ),
            264 =>
            array (
                'code' => 610629,
                'level' => 3,
                'name' => '洛川县',
                'pcode' => 610600,
            ),
            265 =>
            array (
                'code' => 610630,
                'level' => 3,
                'name' => '宜川县',
                'pcode' => 610600,
            ),
            266 =>
            array (
                'code' => 610631,
                'level' => 3,
                'name' => '黄龙县',
                'pcode' => 610600,
            ),
            267 =>
            array (
                'code' => 610632,
                'level' => 3,
                'name' => '黄陵县',
                'pcode' => 610600,
            ),
            268 =>
            array (
                'code' => 610681,
                'level' => 3,
                'name' => '子长市',
                'pcode' => 610600,
            ),
            269 =>
            array (
                'code' => 610700,
                'level' => 2,
                'name' => '汉中市',
                'pcode' => 610000,
            ),
            270 =>
            array (
                'code' => 610701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 610700,
            ),
            271 =>
            array (
                'code' => 610702,
                'level' => 3,
                'name' => '汉台区',
                'pcode' => 610700,
            ),
            272 =>
            array (
                'code' => 610703,
                'level' => 3,
                'name' => '南郑区',
                'pcode' => 610700,
            ),
            273 =>
            array (
                'code' => 610722,
                'level' => 3,
                'name' => '城固县',
                'pcode' => 610700,
            ),
            274 =>
            array (
                'code' => 610723,
                'level' => 3,
                'name' => '洋县',
                'pcode' => 610700,
            ),
            275 =>
            array (
                'code' => 610724,
                'level' => 3,
                'name' => '西乡县',
                'pcode' => 610700,
            ),
            276 =>
            array (
                'code' => 610725,
                'level' => 3,
                'name' => '勉县',
                'pcode' => 610700,
            ),
            277 =>
            array (
                'code' => 610726,
                'level' => 3,
                'name' => '宁强县',
                'pcode' => 610700,
            ),
            278 =>
            array (
                'code' => 610727,
                'level' => 3,
                'name' => '略阳县',
                'pcode' => 610700,
            ),
            279 =>
            array (
                'code' => 610728,
                'level' => 3,
                'name' => '镇巴县',
                'pcode' => 610700,
            ),
            280 =>
            array (
                'code' => 610729,
                'level' => 3,
                'name' => '留坝县',
                'pcode' => 610700,
            ),
            281 =>
            array (
                'code' => 610730,
                'level' => 3,
                'name' => '佛坪县',
                'pcode' => 610700,
            ),
            282 =>
            array (
                'code' => 610800,
                'level' => 2,
                'name' => '榆林市',
                'pcode' => 610000,
            ),
            283 =>
            array (
                'code' => 610801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 610800,
            ),
            284 =>
            array (
                'code' => 610802,
                'level' => 3,
                'name' => '榆阳区',
                'pcode' => 610800,
            ),
            285 =>
            array (
                'code' => 610803,
                'level' => 3,
                'name' => '横山区',
                'pcode' => 610800,
            ),
            286 =>
            array (
                'code' => 610822,
                'level' => 3,
                'name' => '府谷县',
                'pcode' => 610800,
            ),
            287 =>
            array (
                'code' => 610824,
                'level' => 3,
                'name' => '靖边县',
                'pcode' => 610800,
            ),
            288 =>
            array (
                'code' => 610825,
                'level' => 3,
                'name' => '定边县',
                'pcode' => 610800,
            ),
            289 =>
            array (
                'code' => 610826,
                'level' => 3,
                'name' => '绥德县',
                'pcode' => 610800,
            ),
            290 =>
            array (
                'code' => 610827,
                'level' => 3,
                'name' => '米脂县',
                'pcode' => 610800,
            ),
            291 =>
            array (
                'code' => 610828,
                'level' => 3,
                'name' => '佳县',
                'pcode' => 610800,
            ),
            292 =>
            array (
                'code' => 610829,
                'level' => 3,
                'name' => '吴堡县',
                'pcode' => 610800,
            ),
            293 =>
            array (
                'code' => 610830,
                'level' => 3,
                'name' => '清涧县',
                'pcode' => 610800,
            ),
            294 =>
            array (
                'code' => 610831,
                'level' => 3,
                'name' => '子洲县',
                'pcode' => 610800,
            ),
            295 =>
            array (
                'code' => 610881,
                'level' => 3,
                'name' => '神木市',
                'pcode' => 610800,
            ),
            296 =>
            array (
                'code' => 610900,
                'level' => 2,
                'name' => '安康市',
                'pcode' => 610000,
            ),
            297 =>
            array (
                'code' => 610901,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 610900,
            ),
            298 =>
            array (
                'code' => 610902,
                'level' => 3,
                'name' => '汉滨区',
                'pcode' => 610900,
            ),
            299 =>
            array (
                'code' => 610921,
                'level' => 3,
                'name' => '汉阴县',
                'pcode' => 610900,
            ),
            300 =>
            array (
                'code' => 610922,
                'level' => 3,
                'name' => '石泉县',
                'pcode' => 610900,
            ),
            301 =>
            array (
                'code' => 610923,
                'level' => 3,
                'name' => '宁陕县',
                'pcode' => 610900,
            ),
            302 =>
            array (
                'code' => 610924,
                'level' => 3,
                'name' => '紫阳县',
                'pcode' => 610900,
            ),
            303 =>
            array (
                'code' => 610925,
                'level' => 3,
                'name' => '岚皋县',
                'pcode' => 610900,
            ),
            304 =>
            array (
                'code' => 610926,
                'level' => 3,
                'name' => '平利县',
                'pcode' => 610900,
            ),
            305 =>
            array (
                'code' => 610927,
                'level' => 3,
                'name' => '镇坪县',
                'pcode' => 610900,
            ),
            306 =>
            array (
                'code' => 610928,
                'level' => 3,
                'name' => '旬阳县',
                'pcode' => 610900,
            ),
            307 =>
            array (
                'code' => 610929,
                'level' => 3,
                'name' => '白河县',
                'pcode' => 610900,
            ),
            308 =>
            array (
                'code' => 611000,
                'level' => 2,
                'name' => '商洛市',
                'pcode' => 610000,
            ),
            309 =>
            array (
                'code' => 611001,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 611000,
            ),
            310 =>
            array (
                'code' => 611002,
                'level' => 3,
                'name' => '商州区',
                'pcode' => 611000,
            ),
            311 =>
            array (
                'code' => 611021,
                'level' => 3,
                'name' => '洛南县',
                'pcode' => 611000,
            ),
            312 =>
            array (
                'code' => 611022,
                'level' => 3,
                'name' => '丹凤县',
                'pcode' => 611000,
            ),
            313 =>
            array (
                'code' => 611023,
                'level' => 3,
                'name' => '商南县',
                'pcode' => 611000,
            ),
            314 =>
            array (
                'code' => 611024,
                'level' => 3,
                'name' => '山阳县',
                'pcode' => 611000,
            ),
            315 =>
            array (
                'code' => 611025,
                'level' => 3,
                'name' => '镇安县',
                'pcode' => 611000,
            ),
            316 =>
            array (
                'code' => 611026,
                'level' => 3,
                'name' => '柞水县',
                'pcode' => 611000,
            ),
            317 =>
            array (
                'code' => 620000,
                'level' => 1,
                'name' => '甘肃省',
                'pcode' => 0,
            ),
            318 =>
            array (
                'code' => 620100,
                'level' => 2,
                'name' => '兰州市',
                'pcode' => 620000,
            ),
            319 =>
            array (
                'code' => 620101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 620100,
            ),
            320 =>
            array (
                'code' => 620102,
                'level' => 3,
                'name' => '城关区',
                'pcode' => 620100,
            ),
            321 =>
            array (
                'code' => 620103,
                'level' => 3,
                'name' => '七里河区',
                'pcode' => 620100,
            ),
            322 =>
            array (
                'code' => 620104,
                'level' => 3,
                'name' => '西固区',
                'pcode' => 620100,
            ),
            323 =>
            array (
                'code' => 620105,
                'level' => 3,
                'name' => '安宁区',
                'pcode' => 620100,
            ),
            324 =>
            array (
                'code' => 620111,
                'level' => 3,
                'name' => '红古区',
                'pcode' => 620100,
            ),
            325 =>
            array (
                'code' => 620121,
                'level' => 3,
                'name' => '永登县',
                'pcode' => 620100,
            ),
            326 =>
            array (
                'code' => 620122,
                'level' => 3,
                'name' => '皋兰县',
                'pcode' => 620100,
            ),
            327 =>
            array (
                'code' => 620123,
                'level' => 3,
                'name' => '榆中县',
                'pcode' => 620100,
            ),
            328 =>
            array (
                'code' => 620171,
                'level' => 3,
                'name' => '兰州新区',
                'pcode' => 620100,
            ),
            329 =>
            array (
                'code' => 620200,
                'level' => 2,
                'name' => '嘉峪关市',
                'pcode' => 620000,
            ),
            330 =>
            array (
                'code' => 620201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 620200,
            ),
            331 =>
            array (
                'code' => 620300,
                'level' => 2,
                'name' => '金昌市',
                'pcode' => 620000,
            ),
            332 =>
            array (
                'code' => 620301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 620300,
            ),
            333 =>
            array (
                'code' => 620302,
                'level' => 3,
                'name' => '金川区',
                'pcode' => 620300,
            ),
            334 =>
            array (
                'code' => 620321,
                'level' => 3,
                'name' => '永昌县',
                'pcode' => 620300,
            ),
            335 =>
            array (
                'code' => 620400,
                'level' => 2,
                'name' => '白银市',
                'pcode' => 620000,
            ),
            336 =>
            array (
                'code' => 620401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 620400,
            ),
            337 =>
            array (
                'code' => 620402,
                'level' => 3,
                'name' => '白银区',
                'pcode' => 620400,
            ),
            338 =>
            array (
                'code' => 620403,
                'level' => 3,
                'name' => '平川区',
                'pcode' => 620400,
            ),
            339 =>
            array (
                'code' => 620421,
                'level' => 3,
                'name' => '靖远县',
                'pcode' => 620400,
            ),
            340 =>
            array (
                'code' => 620422,
                'level' => 3,
                'name' => '会宁县',
                'pcode' => 620400,
            ),
            341 =>
            array (
                'code' => 620423,
                'level' => 3,
                'name' => '景泰县',
                'pcode' => 620400,
            ),
            342 =>
            array (
                'code' => 620500,
                'level' => 2,
                'name' => '天水市',
                'pcode' => 620000,
            ),
            343 =>
            array (
                'code' => 620501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 620500,
            ),
            344 =>
            array (
                'code' => 620502,
                'level' => 3,
                'name' => '秦州区',
                'pcode' => 620500,
            ),
            345 =>
            array (
                'code' => 620503,
                'level' => 3,
                'name' => '麦积区',
                'pcode' => 620500,
            ),
            346 =>
            array (
                'code' => 620521,
                'level' => 3,
                'name' => '清水县',
                'pcode' => 620500,
            ),
            347 =>
            array (
                'code' => 620522,
                'level' => 3,
                'name' => '秦安县',
                'pcode' => 620500,
            ),
            348 =>
            array (
                'code' => 620523,
                'level' => 3,
                'name' => '甘谷县',
                'pcode' => 620500,
            ),
            349 =>
            array (
                'code' => 620524,
                'level' => 3,
                'name' => '武山县',
                'pcode' => 620500,
            ),
            350 =>
            array (
                'code' => 620525,
                'level' => 3,
                'name' => '张家川回族自治县',
                'pcode' => 620500,
            ),
            351 =>
            array (
                'code' => 620600,
                'level' => 2,
                'name' => '武威市',
                'pcode' => 620000,
            ),
            352 =>
            array (
                'code' => 620601,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 620600,
            ),
            353 =>
            array (
                'code' => 620602,
                'level' => 3,
                'name' => '凉州区',
                'pcode' => 620600,
            ),
            354 =>
            array (
                'code' => 620621,
                'level' => 3,
                'name' => '民勤县',
                'pcode' => 620600,
            ),
            355 =>
            array (
                'code' => 620622,
                'level' => 3,
                'name' => '古浪县',
                'pcode' => 620600,
            ),
            356 =>
            array (
                'code' => 620623,
                'level' => 3,
                'name' => '天祝藏族自治县',
                'pcode' => 620600,
            ),
            357 =>
            array (
                'code' => 620700,
                'level' => 2,
                'name' => '张掖市',
                'pcode' => 620000,
            ),
            358 =>
            array (
                'code' => 620701,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 620700,
            ),
            359 =>
            array (
                'code' => 620702,
                'level' => 3,
                'name' => '甘州区',
                'pcode' => 620700,
            ),
            360 =>
            array (
                'code' => 620721,
                'level' => 3,
                'name' => '肃南裕固族自治县',
                'pcode' => 620700,
            ),
            361 =>
            array (
                'code' => 620722,
                'level' => 3,
                'name' => '民乐县',
                'pcode' => 620700,
            ),
            362 =>
            array (
                'code' => 620723,
                'level' => 3,
                'name' => '临泽县',
                'pcode' => 620700,
            ),
            363 =>
            array (
                'code' => 620724,
                'level' => 3,
                'name' => '高台县',
                'pcode' => 620700,
            ),
            364 =>
            array (
                'code' => 620725,
                'level' => 3,
                'name' => '山丹县',
                'pcode' => 620700,
            ),
            365 =>
            array (
                'code' => 620800,
                'level' => 2,
                'name' => '平凉市',
                'pcode' => 620000,
            ),
            366 =>
            array (
                'code' => 620801,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 620800,
            ),
            367 =>
            array (
                'code' => 620802,
                'level' => 3,
                'name' => '崆峒区',
                'pcode' => 620800,
            ),
            368 =>
            array (
                'code' => 620821,
                'level' => 3,
                'name' => '泾川县',
                'pcode' => 620800,
            ),
            369 =>
            array (
                'code' => 620822,
                'level' => 3,
                'name' => '灵台县',
                'pcode' => 620800,
            ),
            370 =>
            array (
                'code' => 620823,
                'level' => 3,
                'name' => '崇信县',
                'pcode' => 620800,
            ),
            371 =>
            array (
                'code' => 620825,
                'level' => 3,
                'name' => '庄浪县',
                'pcode' => 620800,
            ),
            372 =>
            array (
                'code' => 620826,
                'level' => 3,
                'name' => '静宁县',
                'pcode' => 620800,
            ),
            373 =>
            array (
                'code' => 620881,
                'level' => 3,
                'name' => '华亭市',
                'pcode' => 620800,
            ),
            374 =>
            array (
                'code' => 620900,
                'level' => 2,
                'name' => '酒泉市',
                'pcode' => 620000,
            ),
            375 =>
            array (
                'code' => 620901,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 620900,
            ),
            376 =>
            array (
                'code' => 620902,
                'level' => 3,
                'name' => '肃州区',
                'pcode' => 620900,
            ),
            377 =>
            array (
                'code' => 620921,
                'level' => 3,
                'name' => '金塔县',
                'pcode' => 620900,
            ),
            378 =>
            array (
                'code' => 620922,
                'level' => 3,
                'name' => '瓜州县',
                'pcode' => 620900,
            ),
            379 =>
            array (
                'code' => 620923,
                'level' => 3,
                'name' => '肃北蒙古族自治县',
                'pcode' => 620900,
            ),
            380 =>
            array (
                'code' => 620924,
                'level' => 3,
                'name' => '阿克塞哈萨克族自治县',
                'pcode' => 620900,
            ),
            381 =>
            array (
                'code' => 620981,
                'level' => 3,
                'name' => '玉门市',
                'pcode' => 620900,
            ),
            382 =>
            array (
                'code' => 620982,
                'level' => 3,
                'name' => '敦煌市',
                'pcode' => 620900,
            ),
            383 =>
            array (
                'code' => 621000,
                'level' => 2,
                'name' => '庆阳市',
                'pcode' => 620000,
            ),
            384 =>
            array (
                'code' => 621001,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 621000,
            ),
            385 =>
            array (
                'code' => 621002,
                'level' => 3,
                'name' => '西峰区',
                'pcode' => 621000,
            ),
            386 =>
            array (
                'code' => 621021,
                'level' => 3,
                'name' => '庆城县',
                'pcode' => 621000,
            ),
            387 =>
            array (
                'code' => 621022,
                'level' => 3,
                'name' => '环县',
                'pcode' => 621000,
            ),
            388 =>
            array (
                'code' => 621023,
                'level' => 3,
                'name' => '华池县',
                'pcode' => 621000,
            ),
            389 =>
            array (
                'code' => 621024,
                'level' => 3,
                'name' => '合水县',
                'pcode' => 621000,
            ),
            390 =>
            array (
                'code' => 621025,
                'level' => 3,
                'name' => '正宁县',
                'pcode' => 621000,
            ),
            391 =>
            array (
                'code' => 621026,
                'level' => 3,
                'name' => '宁县',
                'pcode' => 621000,
            ),
            392 =>
            array (
                'code' => 621027,
                'level' => 3,
                'name' => '镇原县',
                'pcode' => 621000,
            ),
            393 =>
            array (
                'code' => 621100,
                'level' => 2,
                'name' => '定西市',
                'pcode' => 620000,
            ),
            394 =>
            array (
                'code' => 621101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 621100,
            ),
            395 =>
            array (
                'code' => 621102,
                'level' => 3,
                'name' => '安定区',
                'pcode' => 621100,
            ),
            396 =>
            array (
                'code' => 621121,
                'level' => 3,
                'name' => '通渭县',
                'pcode' => 621100,
            ),
            397 =>
            array (
                'code' => 621122,
                'level' => 3,
                'name' => '陇西县',
                'pcode' => 621100,
            ),
            398 =>
            array (
                'code' => 621123,
                'level' => 3,
                'name' => '渭源县',
                'pcode' => 621100,
            ),
            399 =>
            array (
                'code' => 621124,
                'level' => 3,
                'name' => '临洮县',
                'pcode' => 621100,
            ),
            400 =>
            array (
                'code' => 621125,
                'level' => 3,
                'name' => '漳县',
                'pcode' => 621100,
            ),
            401 =>
            array (
                'code' => 621126,
                'level' => 3,
                'name' => '岷县',
                'pcode' => 621100,
            ),
            402 =>
            array (
                'code' => 621200,
                'level' => 2,
                'name' => '陇南市',
                'pcode' => 620000,
            ),
            403 =>
            array (
                'code' => 621201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 621200,
            ),
            404 =>
            array (
                'code' => 621202,
                'level' => 3,
                'name' => '武都区',
                'pcode' => 621200,
            ),
            405 =>
            array (
                'code' => 621221,
                'level' => 3,
                'name' => '成县',
                'pcode' => 621200,
            ),
            406 =>
            array (
                'code' => 621222,
                'level' => 3,
                'name' => '文县',
                'pcode' => 621200,
            ),
            407 =>
            array (
                'code' => 621223,
                'level' => 3,
                'name' => '宕昌县',
                'pcode' => 621200,
            ),
            408 =>
            array (
                'code' => 621224,
                'level' => 3,
                'name' => '康县',
                'pcode' => 621200,
            ),
            409 =>
            array (
                'code' => 621225,
                'level' => 3,
                'name' => '西和县',
                'pcode' => 621200,
            ),
            410 =>
            array (
                'code' => 621226,
                'level' => 3,
                'name' => '礼县',
                'pcode' => 621200,
            ),
            411 =>
            array (
                'code' => 621227,
                'level' => 3,
                'name' => '徽县',
                'pcode' => 621200,
            ),
            412 =>
            array (
                'code' => 621228,
                'level' => 3,
                'name' => '两当县',
                'pcode' => 621200,
            ),
            413 =>
            array (
                'code' => 622900,
                'level' => 2,
                'name' => '临夏回族自治州',
                'pcode' => 620000,
            ),
            414 =>
            array (
                'code' => 622901,
                'level' => 3,
                'name' => '临夏市',
                'pcode' => 622900,
            ),
            415 =>
            array (
                'code' => 622921,
                'level' => 3,
                'name' => '临夏县',
                'pcode' => 622900,
            ),
            416 =>
            array (
                'code' => 622922,
                'level' => 3,
                'name' => '康乐县',
                'pcode' => 622900,
            ),
            417 =>
            array (
                'code' => 622923,
                'level' => 3,
                'name' => '永靖县',
                'pcode' => 622900,
            ),
            418 =>
            array (
                'code' => 622924,
                'level' => 3,
                'name' => '广河县',
                'pcode' => 622900,
            ),
            419 =>
            array (
                'code' => 622925,
                'level' => 3,
                'name' => '和政县',
                'pcode' => 622900,
            ),
            420 =>
            array (
                'code' => 622926,
                'level' => 3,
                'name' => '东乡族自治县',
                'pcode' => 622900,
            ),
            421 =>
            array (
                'code' => 622927,
                'level' => 3,
                'name' => '积石山保安族东乡族撒拉族自治县',
                'pcode' => 622900,
            ),
            422 =>
            array (
                'code' => 623000,
                'level' => 2,
                'name' => '甘南藏族自治州',
                'pcode' => 620000,
            ),
            423 =>
            array (
                'code' => 623001,
                'level' => 3,
                'name' => '合作市',
                'pcode' => 623000,
            ),
            424 =>
            array (
                'code' => 623021,
                'level' => 3,
                'name' => '临潭县',
                'pcode' => 623000,
            ),
            425 =>
            array (
                'code' => 623022,
                'level' => 3,
                'name' => '卓尼县',
                'pcode' => 623000,
            ),
            426 =>
            array (
                'code' => 623023,
                'level' => 3,
                'name' => '舟曲县',
                'pcode' => 623000,
            ),
            427 =>
            array (
                'code' => 623024,
                'level' => 3,
                'name' => '迭部县',
                'pcode' => 623000,
            ),
            428 =>
            array (
                'code' => 623025,
                'level' => 3,
                'name' => '玛曲县',
                'pcode' => 623000,
            ),
            429 =>
            array (
                'code' => 623026,
                'level' => 3,
                'name' => '碌曲县',
                'pcode' => 623000,
            ),
            430 =>
            array (
                'code' => 623027,
                'level' => 3,
                'name' => '夏河县',
                'pcode' => 623000,
            ),
            431 =>
            array (
                'code' => 630000,
                'level' => 1,
                'name' => '青海省',
                'pcode' => 0,
            ),
            432 =>
            array (
                'code' => 630100,
                'level' => 2,
                'name' => '西宁市',
                'pcode' => 630000,
            ),
            433 =>
            array (
                'code' => 630101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 630100,
            ),
            434 =>
            array (
                'code' => 630102,
                'level' => 3,
                'name' => '城东区',
                'pcode' => 630100,
            ),
            435 =>
            array (
                'code' => 630103,
                'level' => 3,
                'name' => '城中区',
                'pcode' => 630100,
            ),
            436 =>
            array (
                'code' => 630104,
                'level' => 3,
                'name' => '城西区',
                'pcode' => 630100,
            ),
            437 =>
            array (
                'code' => 630105,
                'level' => 3,
                'name' => '城北区',
                'pcode' => 630100,
            ),
            438 =>
            array (
                'code' => 630106,
                'level' => 3,
                'name' => '湟中区',
                'pcode' => 630100,
            ),
            439 =>
            array (
                'code' => 630121,
                'level' => 3,
                'name' => '大通回族土族自治县',
                'pcode' => 630100,
            ),
            440 =>
            array (
                'code' => 630123,
                'level' => 3,
                'name' => '湟源县',
                'pcode' => 630100,
            ),
            441 =>
            array (
                'code' => 630200,
                'level' => 2,
                'name' => '海东市',
                'pcode' => 630000,
            ),
            442 =>
            array (
                'code' => 630202,
                'level' => 3,
                'name' => '乐都区',
                'pcode' => 630200,
            ),
            443 =>
            array (
                'code' => 630203,
                'level' => 3,
                'name' => '平安区',
                'pcode' => 630200,
            ),
            444 =>
            array (
                'code' => 630222,
                'level' => 3,
                'name' => '民和回族土族自治县',
                'pcode' => 630200,
            ),
            445 =>
            array (
                'code' => 630223,
                'level' => 3,
                'name' => '互助土族自治县',
                'pcode' => 630200,
            ),
            446 =>
            array (
                'code' => 630224,
                'level' => 3,
                'name' => '化隆回族自治县',
                'pcode' => 630200,
            ),
            447 =>
            array (
                'code' => 630225,
                'level' => 3,
                'name' => '循化撒拉族自治县',
                'pcode' => 630200,
            ),
            448 =>
            array (
                'code' => 632200,
                'level' => 2,
                'name' => '海北藏族自治州',
                'pcode' => 630000,
            ),
            449 =>
            array (
                'code' => 632221,
                'level' => 3,
                'name' => '门源回族自治县',
                'pcode' => 632200,
            ),
            450 =>
            array (
                'code' => 632222,
                'level' => 3,
                'name' => '祁连县',
                'pcode' => 632200,
            ),
            451 =>
            array (
                'code' => 632223,
                'level' => 3,
                'name' => '海晏县',
                'pcode' => 632200,
            ),
            452 =>
            array (
                'code' => 632224,
                'level' => 3,
                'name' => '刚察县',
                'pcode' => 632200,
            ),
            453 =>
            array (
                'code' => 632300,
                'level' => 2,
                'name' => '黄南藏族自治州',
                'pcode' => 630000,
            ),
            454 =>
            array (
                'code' => 632321,
                'level' => 3,
                'name' => '同仁县',
                'pcode' => 632300,
            ),
            455 =>
            array (
                'code' => 632322,
                'level' => 3,
                'name' => '尖扎县',
                'pcode' => 632300,
            ),
            456 =>
            array (
                'code' => 632323,
                'level' => 3,
                'name' => '泽库县',
                'pcode' => 632300,
            ),
            457 =>
            array (
                'code' => 632324,
                'level' => 3,
                'name' => '河南蒙古族自治县',
                'pcode' => 632300,
            ),
            458 =>
            array (
                'code' => 632500,
                'level' => 2,
                'name' => '海南藏族自治州',
                'pcode' => 630000,
            ),
            459 =>
            array (
                'code' => 632521,
                'level' => 3,
                'name' => '共和县',
                'pcode' => 632500,
            ),
            460 =>
            array (
                'code' => 632522,
                'level' => 3,
                'name' => '同德县',
                'pcode' => 632500,
            ),
            461 =>
            array (
                'code' => 632523,
                'level' => 3,
                'name' => '贵德县',
                'pcode' => 632500,
            ),
            462 =>
            array (
                'code' => 632524,
                'level' => 3,
                'name' => '兴海县',
                'pcode' => 632500,
            ),
            463 =>
            array (
                'code' => 632525,
                'level' => 3,
                'name' => '贵南县',
                'pcode' => 632500,
            ),
            464 =>
            array (
                'code' => 632600,
                'level' => 2,
                'name' => '果洛藏族自治州',
                'pcode' => 630000,
            ),
            465 =>
            array (
                'code' => 632621,
                'level' => 3,
                'name' => '玛沁县',
                'pcode' => 632600,
            ),
            466 =>
            array (
                'code' => 632622,
                'level' => 3,
                'name' => '班玛县',
                'pcode' => 632600,
            ),
            467 =>
            array (
                'code' => 632623,
                'level' => 3,
                'name' => '甘德县',
                'pcode' => 632600,
            ),
            468 =>
            array (
                'code' => 632624,
                'level' => 3,
                'name' => '达日县',
                'pcode' => 632600,
            ),
            469 =>
            array (
                'code' => 632625,
                'level' => 3,
                'name' => '久治县',
                'pcode' => 632600,
            ),
            470 =>
            array (
                'code' => 632626,
                'level' => 3,
                'name' => '玛多县',
                'pcode' => 632600,
            ),
            471 =>
            array (
                'code' => 632700,
                'level' => 2,
                'name' => '玉树藏族自治州',
                'pcode' => 630000,
            ),
            472 =>
            array (
                'code' => 632701,
                'level' => 3,
                'name' => '玉树市',
                'pcode' => 632700,
            ),
            473 =>
            array (
                'code' => 632722,
                'level' => 3,
                'name' => '杂多县',
                'pcode' => 632700,
            ),
            474 =>
            array (
                'code' => 632723,
                'level' => 3,
                'name' => '称多县',
                'pcode' => 632700,
            ),
            475 =>
            array (
                'code' => 632724,
                'level' => 3,
                'name' => '治多县',
                'pcode' => 632700,
            ),
            476 =>
            array (
                'code' => 632725,
                'level' => 3,
                'name' => '囊谦县',
                'pcode' => 632700,
            ),
            477 =>
            array (
                'code' => 632726,
                'level' => 3,
                'name' => '曲麻莱县',
                'pcode' => 632700,
            ),
            478 =>
            array (
                'code' => 632800,
                'level' => 2,
                'name' => '海西蒙古族藏族自治州',
                'pcode' => 630000,
            ),
            479 =>
            array (
                'code' => 632801,
                'level' => 3,
                'name' => '格尔木市',
                'pcode' => 632800,
            ),
            480 =>
            array (
                'code' => 632802,
                'level' => 3,
                'name' => '德令哈市',
                'pcode' => 632800,
            ),
            481 =>
            array (
                'code' => 632803,
                'level' => 3,
                'name' => '茫崖市',
                'pcode' => 632800,
            ),
            482 =>
            array (
                'code' => 632821,
                'level' => 3,
                'name' => '乌兰县',
                'pcode' => 632800,
            ),
            483 =>
            array (
                'code' => 632822,
                'level' => 3,
                'name' => '都兰县',
                'pcode' => 632800,
            ),
            484 =>
            array (
                'code' => 632823,
                'level' => 3,
                'name' => '天峻县',
                'pcode' => 632800,
            ),
            485 =>
            array (
                'code' => 632857,
                'level' => 3,
                'name' => '大柴旦行政委员会',
                'pcode' => 632800,
            ),
            486 =>
            array (
                'code' => 640000,
                'level' => 1,
                'name' => '宁夏回族自治区',
                'pcode' => 0,
            ),
            487 =>
            array (
                'code' => 640100,
                'level' => 2,
                'name' => '银川市',
                'pcode' => 640000,
            ),
            488 =>
            array (
                'code' => 640101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 640100,
            ),
            489 =>
            array (
                'code' => 640104,
                'level' => 3,
                'name' => '兴庆区',
                'pcode' => 640100,
            ),
            490 =>
            array (
                'code' => 640105,
                'level' => 3,
                'name' => '西夏区',
                'pcode' => 640100,
            ),
            491 =>
            array (
                'code' => 640106,
                'level' => 3,
                'name' => '金凤区',
                'pcode' => 640100,
            ),
            492 =>
            array (
                'code' => 640121,
                'level' => 3,
                'name' => '永宁县',
                'pcode' => 640100,
            ),
            493 =>
            array (
                'code' => 640122,
                'level' => 3,
                'name' => '贺兰县',
                'pcode' => 640100,
            ),
            494 =>
            array (
                'code' => 640181,
                'level' => 3,
                'name' => '灵武市',
                'pcode' => 640100,
            ),
            495 =>
            array (
                'code' => 640200,
                'level' => 2,
                'name' => '石嘴山市',
                'pcode' => 640000,
            ),
            496 =>
            array (
                'code' => 640201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 640200,
            ),
            497 =>
            array (
                'code' => 640202,
                'level' => 3,
                'name' => '大武口区',
                'pcode' => 640200,
            ),
            498 =>
            array (
                'code' => 640205,
                'level' => 3,
                'name' => '惠农区',
                'pcode' => 640200,
            ),
            499 =>
            array (
                'code' => 640221,
                'level' => 3,
                'name' => '平罗县',
                'pcode' => 640200,
            ),
        ));
        \DB::table('china_areas')->insert(array (
            0 =>
            array (
                'code' => 640300,
                'level' => 2,
                'name' => '吴忠市',
                'pcode' => 640000,
            ),
            1 =>
            array (
                'code' => 640301,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 640300,
            ),
            2 =>
            array (
                'code' => 640302,
                'level' => 3,
                'name' => '利通区',
                'pcode' => 640300,
            ),
            3 =>
            array (
                'code' => 640303,
                'level' => 3,
                'name' => '红寺堡区',
                'pcode' => 640300,
            ),
            4 =>
            array (
                'code' => 640323,
                'level' => 3,
                'name' => '盐池县',
                'pcode' => 640300,
            ),
            5 =>
            array (
                'code' => 640324,
                'level' => 3,
                'name' => '同心县',
                'pcode' => 640300,
            ),
            6 =>
            array (
                'code' => 640381,
                'level' => 3,
                'name' => '青铜峡市',
                'pcode' => 640300,
            ),
            7 =>
            array (
                'code' => 640400,
                'level' => 2,
                'name' => '固原市',
                'pcode' => 640000,
            ),
            8 =>
            array (
                'code' => 640401,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 640400,
            ),
            9 =>
            array (
                'code' => 640402,
                'level' => 3,
                'name' => '原州区',
                'pcode' => 640400,
            ),
            10 =>
            array (
                'code' => 640422,
                'level' => 3,
                'name' => '西吉县',
                'pcode' => 640400,
            ),
            11 =>
            array (
                'code' => 640423,
                'level' => 3,
                'name' => '隆德县',
                'pcode' => 640400,
            ),
            12 =>
            array (
                'code' => 640424,
                'level' => 3,
                'name' => '泾源县',
                'pcode' => 640400,
            ),
            13 =>
            array (
                'code' => 640425,
                'level' => 3,
                'name' => '彭阳县',
                'pcode' => 640400,
            ),
            14 =>
            array (
                'code' => 640500,
                'level' => 2,
                'name' => '中卫市',
                'pcode' => 640000,
            ),
            15 =>
            array (
                'code' => 640501,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 640500,
            ),
            16 =>
            array (
                'code' => 640502,
                'level' => 3,
                'name' => '沙坡头区',
                'pcode' => 640500,
            ),
            17 =>
            array (
                'code' => 640521,
                'level' => 3,
                'name' => '中宁县',
                'pcode' => 640500,
            ),
            18 =>
            array (
                'code' => 640522,
                'level' => 3,
                'name' => '海原县',
                'pcode' => 640500,
            ),
            19 =>
            array (
                'code' => 650000,
                'level' => 1,
                'name' => '新疆维吾尔自治区',
                'pcode' => 0,
            ),
            20 =>
            array (
                'code' => 650100,
                'level' => 2,
                'name' => '乌鲁木齐市',
                'pcode' => 650000,
            ),
            21 =>
            array (
                'code' => 650101,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 650100,
            ),
            22 =>
            array (
                'code' => 650102,
                'level' => 3,
                'name' => '天山区',
                'pcode' => 650100,
            ),
            23 =>
            array (
                'code' => 650103,
                'level' => 3,
                'name' => '沙依巴克区',
                'pcode' => 650100,
            ),
            24 =>
            array (
                'code' => 650104,
                'level' => 3,
                'name' => '新市区',
                'pcode' => 650100,
            ),
            25 =>
            array (
                'code' => 650105,
                'level' => 3,
                'name' => '水磨沟区',
                'pcode' => 650100,
            ),
            26 =>
            array (
                'code' => 650106,
                'level' => 3,
                'name' => '头屯河区',
                'pcode' => 650100,
            ),
            27 =>
            array (
                'code' => 650107,
                'level' => 3,
                'name' => '达坂城区',
                'pcode' => 650100,
            ),
            28 =>
            array (
                'code' => 650109,
                'level' => 3,
                'name' => '米东区',
                'pcode' => 650100,
            ),
            29 =>
            array (
                'code' => 650121,
                'level' => 3,
                'name' => '乌鲁木齐县',
                'pcode' => 650100,
            ),
            30 =>
            array (
                'code' => 650200,
                'level' => 2,
                'name' => '克拉玛依市',
                'pcode' => 650000,
            ),
            31 =>
            array (
                'code' => 650201,
                'level' => 3,
                'name' => '市辖区',
                'pcode' => 650200,
            ),
            32 =>
            array (
                'code' => 650202,
                'level' => 3,
                'name' => '独山子区',
                'pcode' => 650200,
            ),
            33 =>
            array (
                'code' => 650203,
                'level' => 3,
                'name' => '克拉玛依区',
                'pcode' => 650200,
            ),
            34 =>
            array (
                'code' => 650204,
                'level' => 3,
                'name' => '白碱滩区',
                'pcode' => 650200,
            ),
            35 =>
            array (
                'code' => 650205,
                'level' => 3,
                'name' => '乌尔禾区',
                'pcode' => 650200,
            ),
            36 =>
            array (
                'code' => 650400,
                'level' => 2,
                'name' => '吐鲁番市',
                'pcode' => 650000,
            ),
            37 =>
            array (
                'code' => 650402,
                'level' => 3,
                'name' => '高昌区',
                'pcode' => 650400,
            ),
            38 =>
            array (
                'code' => 650421,
                'level' => 3,
                'name' => '鄯善县',
                'pcode' => 650400,
            ),
            39 =>
            array (
                'code' => 650422,
                'level' => 3,
                'name' => '托克逊县',
                'pcode' => 650400,
            ),
            40 =>
            array (
                'code' => 650500,
                'level' => 2,
                'name' => '哈密市',
                'pcode' => 650000,
            ),
            41 =>
            array (
                'code' => 650502,
                'level' => 3,
                'name' => '伊州区',
                'pcode' => 650500,
            ),
            42 =>
            array (
                'code' => 650521,
                'level' => 3,
                'name' => '巴里坤哈萨克自治县',
                'pcode' => 650500,
            ),
            43 =>
            array (
                'code' => 650522,
                'level' => 3,
                'name' => '伊吾县',
                'pcode' => 650500,
            ),
            44 =>
            array (
                'code' => 652300,
                'level' => 2,
                'name' => '昌吉回族自治州',
                'pcode' => 650000,
            ),
            45 =>
            array (
                'code' => 652301,
                'level' => 3,
                'name' => '昌吉市',
                'pcode' => 652300,
            ),
            46 =>
            array (
                'code' => 652302,
                'level' => 3,
                'name' => '阜康市',
                'pcode' => 652300,
            ),
            47 =>
            array (
                'code' => 652323,
                'level' => 3,
                'name' => '呼图壁县',
                'pcode' => 652300,
            ),
            48 =>
            array (
                'code' => 652324,
                'level' => 3,
                'name' => '玛纳斯县',
                'pcode' => 652300,
            ),
            49 =>
            array (
                'code' => 652325,
                'level' => 3,
                'name' => '奇台县',
                'pcode' => 652300,
            ),
            50 =>
            array (
                'code' => 652327,
                'level' => 3,
                'name' => '吉木萨尔县',
                'pcode' => 652300,
            ),
            51 =>
            array (
                'code' => 652328,
                'level' => 3,
                'name' => '木垒哈萨克自治县',
                'pcode' => 652300,
            ),
            52 =>
            array (
                'code' => 652700,
                'level' => 2,
                'name' => '博尔塔拉蒙古自治州',
                'pcode' => 650000,
            ),
            53 =>
            array (
                'code' => 652701,
                'level' => 3,
                'name' => '博乐市',
                'pcode' => 652700,
            ),
            54 =>
            array (
                'code' => 652702,
                'level' => 3,
                'name' => '阿拉山口市',
                'pcode' => 652700,
            ),
            55 =>
            array (
                'code' => 652722,
                'level' => 3,
                'name' => '精河县',
                'pcode' => 652700,
            ),
            56 =>
            array (
                'code' => 652723,
                'level' => 3,
                'name' => '温泉县',
                'pcode' => 652700,
            ),
            57 =>
            array (
                'code' => 652800,
                'level' => 2,
                'name' => '巴音郭楞蒙古自治州',
                'pcode' => 650000,
            ),
            58 =>
            array (
                'code' => 652801,
                'level' => 3,
                'name' => '库尔勒市',
                'pcode' => 652800,
            ),
            59 =>
            array (
                'code' => 652822,
                'level' => 3,
                'name' => '轮台县',
                'pcode' => 652800,
            ),
            60 =>
            array (
                'code' => 652823,
                'level' => 3,
                'name' => '尉犁县',
                'pcode' => 652800,
            ),
            61 =>
            array (
                'code' => 652824,
                'level' => 3,
                'name' => '若羌县',
                'pcode' => 652800,
            ),
            62 =>
            array (
                'code' => 652825,
                'level' => 3,
                'name' => '且末县',
                'pcode' => 652800,
            ),
            63 =>
            array (
                'code' => 652826,
                'level' => 3,
                'name' => '焉耆回族自治县',
                'pcode' => 652800,
            ),
            64 =>
            array (
                'code' => 652827,
                'level' => 3,
                'name' => '和静县',
                'pcode' => 652800,
            ),
            65 =>
            array (
                'code' => 652828,
                'level' => 3,
                'name' => '和硕县',
                'pcode' => 652800,
            ),
            66 =>
            array (
                'code' => 652829,
                'level' => 3,
                'name' => '博湖县',
                'pcode' => 652800,
            ),
            67 =>
            array (
                'code' => 652871,
                'level' => 3,
                'name' => '库尔勒经济技术开发区',
                'pcode' => 652800,
            ),
            68 =>
            array (
                'code' => 652900,
                'level' => 2,
                'name' => '阿克苏地区',
                'pcode' => 650000,
            ),
            69 =>
            array (
                'code' => 652901,
                'level' => 3,
                'name' => '阿克苏市',
                'pcode' => 652900,
            ),
            70 =>
            array (
                'code' => 652902,
                'level' => 3,
                'name' => '库车市',
                'pcode' => 652900,
            ),
            71 =>
            array (
                'code' => 652922,
                'level' => 3,
                'name' => '温宿县',
                'pcode' => 652900,
            ),
            72 =>
            array (
                'code' => 652924,
                'level' => 3,
                'name' => '沙雅县',
                'pcode' => 652900,
            ),
            73 =>
            array (
                'code' => 652925,
                'level' => 3,
                'name' => '新和县',
                'pcode' => 652900,
            ),
            74 =>
            array (
                'code' => 652926,
                'level' => 3,
                'name' => '拜城县',
                'pcode' => 652900,
            ),
            75 =>
            array (
                'code' => 652927,
                'level' => 3,
                'name' => '乌什县',
                'pcode' => 652900,
            ),
            76 =>
            array (
                'code' => 652928,
                'level' => 3,
                'name' => '阿瓦提县',
                'pcode' => 652900,
            ),
            77 =>
            array (
                'code' => 652929,
                'level' => 3,
                'name' => '柯坪县',
                'pcode' => 652900,
            ),
            78 =>
            array (
                'code' => 653000,
                'level' => 2,
                'name' => '克孜勒苏柯尔克孜自治州',
                'pcode' => 650000,
            ),
            79 =>
            array (
                'code' => 653001,
                'level' => 3,
                'name' => '阿图什市',
                'pcode' => 653000,
            ),
            80 =>
            array (
                'code' => 653022,
                'level' => 3,
                'name' => '阿克陶县',
                'pcode' => 653000,
            ),
            81 =>
            array (
                'code' => 653023,
                'level' => 3,
                'name' => '阿合奇县',
                'pcode' => 653000,
            ),
            82 =>
            array (
                'code' => 653024,
                'level' => 3,
                'name' => '乌恰县',
                'pcode' => 653000,
            ),
            83 =>
            array (
                'code' => 653100,
                'level' => 2,
                'name' => '喀什地区',
                'pcode' => 650000,
            ),
            84 =>
            array (
                'code' => 653101,
                'level' => 3,
                'name' => '喀什市',
                'pcode' => 653100,
            ),
            85 =>
            array (
                'code' => 653121,
                'level' => 3,
                'name' => '疏附县',
                'pcode' => 653100,
            ),
            86 =>
            array (
                'code' => 653122,
                'level' => 3,
                'name' => '疏勒县',
                'pcode' => 653100,
            ),
            87 =>
            array (
                'code' => 653123,
                'level' => 3,
                'name' => '英吉沙县',
                'pcode' => 653100,
            ),
            88 =>
            array (
                'code' => 653124,
                'level' => 3,
                'name' => '泽普县',
                'pcode' => 653100,
            ),
            89 =>
            array (
                'code' => 653125,
                'level' => 3,
                'name' => '莎车县',
                'pcode' => 653100,
            ),
            90 =>
            array (
                'code' => 653126,
                'level' => 3,
                'name' => '叶城县',
                'pcode' => 653100,
            ),
            91 =>
            array (
                'code' => 653127,
                'level' => 3,
                'name' => '麦盖提县',
                'pcode' => 653100,
            ),
            92 =>
            array (
                'code' => 653128,
                'level' => 3,
                'name' => '岳普湖县',
                'pcode' => 653100,
            ),
            93 =>
            array (
                'code' => 653129,
                'level' => 3,
                'name' => '伽师县',
                'pcode' => 653100,
            ),
            94 =>
            array (
                'code' => 653130,
                'level' => 3,
                'name' => '巴楚县',
                'pcode' => 653100,
            ),
            95 =>
            array (
                'code' => 653131,
                'level' => 3,
                'name' => '塔什库尔干塔吉克自治县',
                'pcode' => 653100,
            ),
            96 =>
            array (
                'code' => 653200,
                'level' => 2,
                'name' => '和田地区',
                'pcode' => 650000,
            ),
            97 =>
            array (
                'code' => 653201,
                'level' => 3,
                'name' => '和田市',
                'pcode' => 653200,
            ),
            98 =>
            array (
                'code' => 653221,
                'level' => 3,
                'name' => '和田县',
                'pcode' => 653200,
            ),
            99 =>
            array (
                'code' => 653222,
                'level' => 3,
                'name' => '墨玉县',
                'pcode' => 653200,
            ),
            100 =>
            array (
                'code' => 653223,
                'level' => 3,
                'name' => '皮山县',
                'pcode' => 653200,
            ),
            101 =>
            array (
                'code' => 653224,
                'level' => 3,
                'name' => '洛浦县',
                'pcode' => 653200,
            ),
            102 =>
            array (
                'code' => 653225,
                'level' => 3,
                'name' => '策勒县',
                'pcode' => 653200,
            ),
            103 =>
            array (
                'code' => 653226,
                'level' => 3,
                'name' => '于田县',
                'pcode' => 653200,
            ),
            104 =>
            array (
                'code' => 653227,
                'level' => 3,
                'name' => '民丰县',
                'pcode' => 653200,
            ),
            105 =>
            array (
                'code' => 654000,
                'level' => 2,
                'name' => '伊犁哈萨克自治州',
                'pcode' => 650000,
            ),
            106 =>
            array (
                'code' => 654002,
                'level' => 3,
                'name' => '伊宁市',
                'pcode' => 654000,
            ),
            107 =>
            array (
                'code' => 654003,
                'level' => 3,
                'name' => '奎屯市',
                'pcode' => 654000,
            ),
            108 =>
            array (
                'code' => 654004,
                'level' => 3,
                'name' => '霍尔果斯市',
                'pcode' => 654000,
            ),
            109 =>
            array (
                'code' => 654021,
                'level' => 3,
                'name' => '伊宁县',
                'pcode' => 654000,
            ),
            110 =>
            array (
                'code' => 654022,
                'level' => 3,
                'name' => '察布查尔锡伯自治县',
                'pcode' => 654000,
            ),
            111 =>
            array (
                'code' => 654023,
                'level' => 3,
                'name' => '霍城县',
                'pcode' => 654000,
            ),
            112 =>
            array (
                'code' => 654024,
                'level' => 3,
                'name' => '巩留县',
                'pcode' => 654000,
            ),
            113 =>
            array (
                'code' => 654025,
                'level' => 3,
                'name' => '新源县',
                'pcode' => 654000,
            ),
            114 =>
            array (
                'code' => 654026,
                'level' => 3,
                'name' => '昭苏县',
                'pcode' => 654000,
            ),
            115 =>
            array (
                'code' => 654027,
                'level' => 3,
                'name' => '特克斯县',
                'pcode' => 654000,
            ),
            116 =>
            array (
                'code' => 654028,
                'level' => 3,
                'name' => '尼勒克县',
                'pcode' => 654000,
            ),
            117 =>
            array (
                'code' => 654200,
                'level' => 2,
                'name' => '塔城地区',
                'pcode' => 650000,
            ),
            118 =>
            array (
                'code' => 654201,
                'level' => 3,
                'name' => '塔城市',
                'pcode' => 654200,
            ),
            119 =>
            array (
                'code' => 654202,
                'level' => 3,
                'name' => '乌苏市',
                'pcode' => 654200,
            ),
            120 =>
            array (
                'code' => 654221,
                'level' => 3,
                'name' => '额敏县',
                'pcode' => 654200,
            ),
            121 =>
            array (
                'code' => 654223,
                'level' => 3,
                'name' => '沙湾县',
                'pcode' => 654200,
            ),
            122 =>
            array (
                'code' => 654224,
                'level' => 3,
                'name' => '托里县',
                'pcode' => 654200,
            ),
            123 =>
            array (
                'code' => 654225,
                'level' => 3,
                'name' => '裕民县',
                'pcode' => 654200,
            ),
            124 =>
            array (
                'code' => 654226,
                'level' => 3,
                'name' => '和布克赛尔蒙古自治县',
                'pcode' => 654200,
            ),
            125 =>
            array (
                'code' => 654300,
                'level' => 2,
                'name' => '阿勒泰地区',
                'pcode' => 650000,
            ),
            126 =>
            array (
                'code' => 654301,
                'level' => 3,
                'name' => '阿勒泰市',
                'pcode' => 654300,
            ),
            127 =>
            array (
                'code' => 654321,
                'level' => 3,
                'name' => '布尔津县',
                'pcode' => 654300,
            ),
            128 =>
            array (
                'code' => 654322,
                'level' => 3,
                'name' => '富蕴县',
                'pcode' => 654300,
            ),
            129 =>
            array (
                'code' => 654323,
                'level' => 3,
                'name' => '福海县',
                'pcode' => 654300,
            ),
            130 =>
            array (
                'code' => 654324,
                'level' => 3,
                'name' => '哈巴河县',
                'pcode' => 654300,
            ),
            131 =>
            array (
                'code' => 654325,
                'level' => 3,
                'name' => '青河县',
                'pcode' => 654300,
            ),
            132 =>
            array (
                'code' => 654326,
                'level' => 3,
                'name' => '吉木乃县',
                'pcode' => 654300,
            ),
            133 =>
            array (
                'code' => 659000,
                'level' => 2,
                'name' => '自治区直辖县级行政区划',
                'pcode' => 650000,
            ),
            134 =>
            array (
                'code' => 659001,
                'level' => 3,
                'name' => '石河子市',
                'pcode' => 659000,
            ),
            135 =>
            array (
                'code' => 659002,
                'level' => 3,
                'name' => '阿拉尔市',
                'pcode' => 659000,
            ),
            136 =>
            array (
                'code' => 659003,
                'level' => 3,
                'name' => '图木舒克市',
                'pcode' => 659000,
            ),
            137 =>
            array (
                'code' => 659004,
                'level' => 3,
                'name' => '五家渠市',
                'pcode' => 659000,
            ),
            138 =>
            array (
                'code' => 659005,
                'level' => 3,
                'name' => '北屯市',
                'pcode' => 659000,
            ),
            139 =>
            array (
                'code' => 659006,
                'level' => 3,
                'name' => '铁门关市',
                'pcode' => 659000,
            ),
            140 =>
            array (
                'code' => 659007,
                'level' => 3,
                'name' => '双河市',
                'pcode' => 659000,
            ),
            141 =>
            array (
                'code' => 659008,
                'level' => 3,
                'name' => '可克达拉市',
                'pcode' => 659000,
            ),
            142 =>
            array (
                'code' => 659009,
                'level' => 3,
                'name' => '昆玉市',
                'pcode' => 659000,
            ),
            143 =>
            array (
                'code' => 659010,
                'level' => 3,
                'name' => '胡杨河市',
                'pcode' => 659000,
            ),
        ));


    }
}
