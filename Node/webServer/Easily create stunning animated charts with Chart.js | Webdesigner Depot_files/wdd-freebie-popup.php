
/*! mobile-detect - v1.1.0 - 2015-05-11
https://github.com/hgoebl/mobile-detect.js */!function(a,b){a(function(){"use strict";function a(a,b){return null!=a&&null!=b&&a.toLowerCase()===b.toLowerCase()}function c(a){for(var b in a)g.call(a,b)&&(a[b]=new RegExp(a[b],"i"))}function d(a,b){this.ua=a||"",this._cache={},this.maxPhoneWidth=b||600}var e={};e.mobileDetectRules={phones:{iPhone:"\\biPhone\\b|\\biPod\\b",BlackBerry:"BlackBerry|\\bBB10\\b|rim[0-9]+",HTC:"HTC|HTC.*(Sensation|Evo|Vision|Explorer|6800|8100|8900|A7272|S510e|C110e|Legend|Desire|T8282)|APX515CKT|Qtek9090|APA9292KT|HD_mini|Sensation.*Z710e|PG86100|Z715e|Desire.*(A8181|HD)|ADR6200|ADR6400L|ADR6425|001HT|Inspire 4G|Android.*\\bEVO\\b|T-Mobile G1|Z520m",Nexus:"Nexus One|Nexus S|Galaxy.*Nexus|Android.*Nexus.*Mobile|Nexus 4|Nexus 5|Nexus 6",Dell:"Dell.*Streak|Dell.*Aero|Dell.*Venue|DELL.*Venue Pro|Dell Flash|Dell Smoke|Dell Mini 3iX|XCD28|XCD35|\\b001DL\\b|\\b101DL\\b|\\bGS01\\b",Motorola:"Motorola|DROIDX|DROID BIONIC|\\bDroid\\b.*Build|Android.*Xoom|HRI39|MOT-|A1260|A1680|A555|A853|A855|A953|A955|A956|Motorola.*ELECTRIFY|Motorola.*i1|i867|i940|MB200|MB300|MB501|MB502|MB508|MB511|MB520|MB525|MB526|MB611|MB612|MB632|MB810|MB855|MB860|MB861|MB865|MB870|ME501|ME502|ME511|ME525|ME600|ME632|ME722|ME811|ME860|ME863|ME865|MT620|MT710|MT716|MT720|MT810|MT870|MT917|Motorola.*TITANIUM|WX435|WX445|XT300|XT301|XT311|XT316|XT317|XT319|XT320|XT390|XT502|XT530|XT531|XT532|XT535|XT603|XT610|XT611|XT615|XT681|XT701|XT702|XT711|XT720|XT800|XT806|XT860|XT862|XT875|XT882|XT883|XT894|XT901|XT907|XT909|XT910|XT912|XT928|XT926|XT915|XT919|XT925",Samsung:"Samsung|SGH-I337|BGT-S5230|GT-B2100|GT-B2700|GT-B2710|GT-B3210|GT-B3310|GT-B3410|GT-B3730|GT-B3740|GT-B5510|GT-B5512|GT-B5722|GT-B6520|GT-B7300|GT-B7320|GT-B7330|GT-B7350|GT-B7510|GT-B7722|GT-B7800|GT-C3010|GT-C3011|GT-C3060|GT-C3200|GT-C3212|GT-C3212I|GT-C3262|GT-C3222|GT-C3300|GT-C3300K|GT-C3303|GT-C3303K|GT-C3310|GT-C3322|GT-C3330|GT-C3350|GT-C3500|GT-C3510|GT-C3530|GT-C3630|GT-C3780|GT-C5010|GT-C5212|GT-C6620|GT-C6625|GT-C6712|GT-E1050|GT-E1070|GT-E1075|GT-E1080|GT-E1081|GT-E1085|GT-E1087|GT-E1100|GT-E1107|GT-E1110|GT-E1120|GT-E1125|GT-E1130|GT-E1160|GT-E1170|GT-E1175|GT-E1180|GT-E1182|GT-E1200|GT-E1210|GT-E1225|GT-E1230|GT-E1390|GT-E2100|GT-E2120|GT-E2121|GT-E2152|GT-E2220|GT-E2222|GT-E2230|GT-E2232|GT-E2250|GT-E2370|GT-E2550|GT-E2652|GT-E3210|GT-E3213|GT-I5500|GT-I5503|GT-I5700|GT-I5800|GT-I5801|GT-I6410|GT-I6420|GT-I7110|GT-I7410|GT-I7500|GT-I8000|GT-I8150|GT-I8160|GT-I8190|GT-I8320|GT-I8330|GT-I8350|GT-I8530|GT-I8700|GT-I8703|GT-I8910|GT-I9000|GT-I9001|GT-I9003|GT-I9010|GT-I9020|GT-I9023|GT-I9070|GT-I9082|GT-I9100|GT-I9103|GT-I9220|GT-I9250|GT-I9300|GT-I9305|GT-I9500|GT-I9505|GT-M3510|GT-M5650|GT-M7500|GT-M7600|GT-M7603|GT-M8800|GT-M8910|GT-N7000|GT-S3110|GT-S3310|GT-S3350|GT-S3353|GT-S3370|GT-S3650|GT-S3653|GT-S3770|GT-S3850|GT-S5210|GT-S5220|GT-S5229|GT-S5230|GT-S5233|GT-S5250|GT-S5253|GT-S5260|GT-S5263|GT-S5270|GT-S5300|GT-S5330|GT-S5350|GT-S5360|GT-S5363|GT-S5369|GT-S5380|GT-S5380D|GT-S5560|GT-S5570|GT-S5600|GT-S5603|GT-S5610|GT-S5620|GT-S5660|GT-S5670|GT-S5690|GT-S5750|GT-S5780|GT-S5830|GT-S5839|GT-S6102|GT-S6500|GT-S7070|GT-S7200|GT-S7220|GT-S7230|GT-S7233|GT-S7250|GT-S7500|GT-S7530|GT-S7550|GT-S7562|GT-S7710|GT-S8000|GT-S8003|GT-S8500|GT-S8530|GT-S8600|SCH-A310|SCH-A530|SCH-A570|SCH-A610|SCH-A630|SCH-A650|SCH-A790|SCH-A795|SCH-A850|SCH-A870|SCH-A890|SCH-A930|SCH-A950|SCH-A970|SCH-A990|SCH-I100|SCH-I110|SCH-I400|SCH-I405|SCH-I500|SCH-I510|SCH-I515|SCH-I600|SCH-I730|SCH-I760|SCH-I770|SCH-I830|SCH-I910|SCH-I920|SCH-I959|SCH-LC11|SCH-N150|SCH-N300|SCH-R100|SCH-R300|SCH-R351|SCH-R400|SCH-R410|SCH-T300|SCH-U310|SCH-U320|SCH-U350|SCH-U360|SCH-U365|SCH-U370|SCH-U380|SCH-U410|SCH-U430|SCH-U450|SCH-U460|SCH-U470|SCH-U490|SCH-U540|SCH-U550|SCH-U620|SCH-U640|SCH-U650|SCH-U660|SCH-U700|SCH-U740|SCH-U750|SCH-U810|SCH-U820|SCH-U900|SCH-U940|SCH-U960|SCS-26UC|SGH-A107|SGH-A117|SGH-A127|SGH-A137|SGH-A157|SGH-A167|SGH-A177|SGH-A187|SGH-A197|SGH-A227|SGH-A237|SGH-A257|SGH-A437|SGH-A517|SGH-A597|SGH-A637|SGH-A657|SGH-A667|SGH-A687|SGH-A697|SGH-A707|SGH-A717|SGH-A727|SGH-A737|SGH-A747|SGH-A767|SGH-A777|SGH-A797|SGH-A817|SGH-A827|SGH-A837|SGH-A847|SGH-A867|SGH-A877|SGH-A887|SGH-A897|SGH-A927|SGH-B100|SGH-B130|SGH-B200|SGH-B220|SGH-C100|SGH-C110|SGH-C120|SGH-C130|SGH-C140|SGH-C160|SGH-C170|SGH-C180|SGH-C200|SGH-C207|SGH-C210|SGH-C225|SGH-C230|SGH-C417|SGH-C450|SGH-D307|SGH-D347|SGH-D357|SGH-D407|SGH-D415|SGH-D780|SGH-D807|SGH-D980|SGH-E105|SGH-E200|SGH-E315|SGH-E316|SGH-E317|SGH-E335|SGH-E590|SGH-E635|SGH-E715|SGH-E890|SGH-F300|SGH-F480|SGH-I200|SGH-I300|SGH-I320|SGH-I550|SGH-I577|SGH-I600|SGH-I607|SGH-I617|SGH-I627|SGH-I637|SGH-I677|SGH-I700|SGH-I717|SGH-I727|SGH-i747M|SGH-I777|SGH-I780|SGH-I827|SGH-I847|SGH-I857|SGH-I896|SGH-I897|SGH-I900|SGH-I907|SGH-I917|SGH-I927|SGH-I937|SGH-I997|SGH-J150|SGH-J200|SGH-L170|SGH-L700|SGH-M110|SGH-M150|SGH-M200|SGH-N105|SGH-N500|SGH-N600|SGH-N620|SGH-N625|SGH-N700|SGH-N710|SGH-P107|SGH-P207|SGH-P300|SGH-P310|SGH-P520|SGH-P735|SGH-P777|SGH-Q105|SGH-R210|SGH-R220|SGH-R225|SGH-S105|SGH-S307|SGH-T109|SGH-T119|SGH-T139|SGH-T209|SGH-T219|SGH-T229|SGH-T239|SGH-T249|SGH-T259|SGH-T309|SGH-T319|SGH-T329|SGH-T339|SGH-T349|SGH-T359|SGH-T369|SGH-T379|SGH-T409|SGH-T429|SGH-T439|SGH-T459|SGH-T469|SGH-T479|SGH-T499|SGH-T509|SGH-T519|SGH-T539|SGH-T559|SGH-T589|SGH-T609|SGH-T619|SGH-T629|SGH-T639|SGH-T659|SGH-T669|SGH-T679|SGH-T709|SGH-T719|SGH-T729|SGH-T739|SGH-T746|SGH-T749|SGH-T759|SGH-T769|SGH-T809|SGH-T819|SGH-T839|SGH-T919|SGH-T929|SGH-T939|SGH-T959|SGH-T989|SGH-U100|SGH-U200|SGH-U800|SGH-V205|SGH-V206|SGH-X100|SGH-X105|SGH-X120|SGH-X140|SGH-X426|SGH-X427|SGH-X475|SGH-X495|SGH-X497|SGH-X507|SGH-X600|SGH-X610|SGH-X620|SGH-X630|SGH-X700|SGH-X820|SGH-X890|SGH-Z130|SGH-Z150|SGH-Z170|SGH-ZX10|SGH-ZX20|SHW-M110|SPH-A120|SPH-A400|SPH-A420|SPH-A460|SPH-A500|SPH-A560|SPH-A600|SPH-A620|SPH-A660|SPH-A700|SPH-A740|SPH-A760|SPH-A790|SPH-A800|SPH-A820|SPH-A840|SPH-A880|SPH-A900|SPH-A940|SPH-A960|SPH-D600|SPH-D700|SPH-D710|SPH-D720|SPH-I300|SPH-I325|SPH-I330|SPH-I350|SPH-I500|SPH-I600|SPH-I700|SPH-L700|SPH-M100|SPH-M220|SPH-M240|SPH-M300|SPH-M305|SPH-M320|SPH-M330|SPH-M350|SPH-M360|SPH-M370|SPH-M380|SPH-M510|SPH-M540|SPH-M550|SPH-M560|SPH-M570|SPH-M580|SPH-M610|SPH-M620|SPH-M630|SPH-M800|SPH-M810|SPH-M850|SPH-M900|SPH-M910|SPH-M920|SPH-M930|SPH-N100|SPH-N200|SPH-N240|SPH-N300|SPH-N400|SPH-Z400|SWC-E100|SCH-i909|GT-N7100|GT-N7105|SCH-I535|SM-N900A|SGH-I317|SGH-T999L|GT-S5360B|GT-I8262|GT-S6802|GT-S6312|GT-S6310|GT-S5312|GT-S5310|GT-I9105|GT-I8510|GT-S6790N|SM-G7105|SM-N9005|GT-S5301|GT-I9295|GT-I9195|SM-C101|GT-S7392|GT-S7560|GT-B7610|GT-I5510|GT-S7582|GT-S7530E|GT-I8750|SM-G9006V|SM-G9008V|SM-G9009D|SM-G900A|SM-G900D|SM-G900F|SM-G900H|SM-G900I|SM-G900J|SM-G900K|SM-G900L|SM-G900M|SM-G900P|SM-G900R4|SM-G900S|SM-G900T|SM-G900V|SM-G900W8|SHV-E160K",LG:"\\bLG\\b;|LG[- ]?(C800|C900|E400|E610|E900|E-900|F160|F180K|F180L|F180S|730|855|L160|LS740|LS840|LS970|LU6200|MS690|MS695|MS770|MS840|MS870|MS910|P500|P700|P705|VM696|AS680|AS695|AX840|C729|E970|GS505|272|C395|E739BK|E960|L55C|L75C|LS696|LS860|P769BK|P350|P500|P509|P870|UN272|US730|VS840|VS950|LN272|LN510|LS670|LS855|LW690|MN270|MN510|P509|P769|P930|UN200|UN270|UN510|UN610|US670|US740|US760|UX265|UX840|VN271|VN530|VS660|VS700|VS740|VS750|VS910|VS920|VS930|VX9200|VX11000|AX840A|LW770|P506|P925|P999|E612|D955|D802)",Sony:"SonyST|SonyLT|SonyEricsson|SonyEricssonLT15iv|LT18i|E10i|LT28h|LT26w|SonyEricssonMT27i|C5303|C6902|C6903|C6906|C6943|D2533",Asus:"Asus.*Galaxy|PadFone.*Mobile",Micromax:"Micromax.*\\b(A210|A92|A88|A72|A111|A110Q|A115|A116|A110|A90S|A26|A51|A35|A54|A25|A27|A89|A68|A65|A57|A90)\\b",Palm:"PalmSource|Palm",Vertu:"Vertu|Vertu.*Ltd|Vertu.*Ascent|Vertu.*Ayxta|Vertu.*Constellation(F|Quest)?|Vertu.*Monika|Vertu.*Signature",Pantech:"PANTECH|IM-A850S|IM-A840S|IM-A830L|IM-A830K|IM-A830S|IM-A820L|IM-A810K|IM-A810S|IM-A800S|IM-T100K|IM-A725L|IM-A780L|IM-A775C|IM-A770K|IM-A760S|IM-A750K|IM-A740S|IM-A730S|IM-A720L|IM-A710K|IM-A690L|IM-A690S|IM-A650S|IM-A630K|IM-A600S|VEGA PTL21|PT003|P8010|ADR910L|P6030|P6020|P9070|P4100|P9060|P5000|CDM8992|TXT8045|ADR8995|IS11PT|P2030|P6010|P8000|PT002|IS06|CDM8999|P9050|PT001|TXT8040|P2020|P9020|P2000|P7040|P7000|C790",Fly:"IQ230|IQ444|IQ450|IQ440|IQ442|IQ441|IQ245|IQ256|IQ236|IQ255|IQ235|IQ245|IQ275|IQ240|IQ285|IQ280|IQ270|IQ260|IQ250",Wiko:"KITE 4G|HIGHWAY|GETAWAY|STAIRWAY|DARKSIDE|DARKFULL|DARKNIGHT|DARKMOON|SLIDE|WAX 4G|RAINBOW|BLOOM|SUNSET|GOA|LENNY|BARRY|IGGY|OZZY|CINK FIVE|CINK PEAX|CINK PEAX 2|CINK SLIM|CINK SLIM 2|CINK +|CINK KING|CINK PEAX|CINK SLIM|SUBLIM",iMobile:"i-mobile (IQ|i-STYLE|idea|ZAA|Hitz)",SimValley:"\\b(SP-80|XT-930|SX-340|XT-930|SX-310|SP-360|SP60|SPT-800|SP-120|SPT-800|SP-140|SPX-5|SPX-8|SP-100|SPX-8|SPX-12)\\b",Wolfgang:"AT-B24D|AT-AS50HD|AT-AS40W|AT-AS55HD|AT-AS45q2|AT-B26D|AT-AS50Q",Alcatel:"Alcatel",Nintendo:"Nintendo 3DS",Amoi:"Amoi",INQ:"INQ",GenericPhone:"Tapatalk|PDA;|SAGEM|\\bmmp\\b|pocket|\\bpsp\\b|symbian|Smartphone|smartfon|treo|up.browser|up.link|vodafone|\\bwap\\b|nokia|Series40|Series60|S60|SonyEricsson|N900|MAUI.*WAP.*Browser"},tablets:{iPad:"iPad|iPad.*Mobile",NexusTablet:"Android.*Nexus[\\s]+(7|9|10)|^.*Android.*Nexus(?:(?!Mobile).)*$",SamsungTablet:"SAMSUNG.*Tablet|Galaxy.*Tab|SC-01C|GT-P1000|GT-P1003|GT-P1010|GT-P3105|GT-P6210|GT-P6800|GT-P6810|GT-P7100|GT-P7300|GT-P7310|GT-P7500|GT-P7510|SCH-I800|SCH-I815|SCH-I905|SGH-I957|SGH-I987|SGH-T849|SGH-T859|SGH-T869|SPH-P100|GT-P3100|GT-P3108|GT-P3110|GT-P5100|GT-P5110|GT-P6200|GT-P7320|GT-P7511|GT-N8000|GT-P8510|SGH-I497|SPH-P500|SGH-T779|SCH-I705|SCH-I915|GT-N8013|GT-P3113|GT-P5113|GT-P8110|GT-N8010|GT-N8005|GT-N8020|GT-P1013|GT-P6201|GT-P7501|GT-N5100|GT-N5105|GT-N5110|SHV-E140K|SHV-E140L|SHV-E140S|SHV-E150S|SHV-E230K|SHV-E230L|SHV-E230S|SHW-M180K|SHW-M180L|SHW-M180S|SHW-M180W|SHW-M300W|SHW-M305W|SHW-M380K|SHW-M380S|SHW-M380W|SHW-M430W|SHW-M480K|SHW-M480S|SHW-M480W|SHW-M485W|SHW-M486W|SHW-M500W|GT-I9228|SCH-P739|SCH-I925|GT-I9200|GT-I9205|GT-P5200|GT-P5210|GT-P5210X|SM-T311|SM-T310|SM-T310X|SM-T210|SM-T210R|SM-T211|SM-P600|SM-P601|SM-P605|SM-P900|SM-P901|SM-T217|SM-T217A|SM-T217S|SM-P6000|SM-T3100|SGH-I467|XE500|SM-T110|GT-P5220|GT-I9200X|GT-N5110X|GT-N5120|SM-P905|SM-T111|SM-T2105|SM-T315|SM-T320|SM-T320X|SM-T321|SM-T520|SM-T525|SM-T530NU|SM-T230NU|SM-T330NU|SM-T900|XE500T1C|SM-P605V|SM-P905V|SM-T337V|SM-T537V|SM-T707V|SM-T807V|SM-P600X|SM-P900X|SM-T210X|SM-T230|SM-T230X|SM-T325|GT-P7503|SM-T531|SM-T330|SM-T530|SM-T705C|SM-T535|SM-T331|SM-T800|SM-T700|SM-T537|SM-T807|SM-P907A|SM-T337A|SM-T537A|SM-T707A|SM-T807A|SM-T237P|SM-T807P|SM-P607T|SM-T217T|SM-T337T|SM-T807T",Kindle:"Kindle|Silk.*Accelerated|Android.*\\b(KFOT|KFTT|KFJWI|KFJWA|KFOTE|KFSOWI|KFTHWI|KFTHWA|KFAPWI|KFAPWA|WFJWAE|KFSAWA|KFSAWI|KFASWI)\\b",SurfaceTablet:"Windows NT [0-9.]+; ARM;.*(Tablet|ARMBJS)",HPTablet:"HP Slate (7|8|10)|HP ElitePad 900|hp-tablet|EliteBook.*Touch|HP 8|Slate 21|HP SlateBook 10",AsusTablet:"^.*PadFone((?!Mobile).)*$|Transformer|TF101|TF101G|TF300T|TF300TG|TF300TL|TF700T|TF700KL|TF701T|TF810C|ME171|ME301T|ME302C|ME371MG|ME370T|ME372MG|ME172V|ME173X|ME400C|Slider SL101|\\bK00F\\b|\\bK00C\\b|\\bK00E\\b|\\bK00L\\b|TX201LA|ME176C|ME102A|\\bM80TA\\b|ME372CL|ME560CG|ME372CG|ME302KL",BlackBerryTablet:"PlayBook|RIM Tablet",HTCtablet:"HTC_Flyer_P512|HTC Flyer|HTC Jetstream|HTC-P715a|HTC EVO View 4G|PG41200|PG09410",MotorolaTablet:"xoom|sholest|MZ615|MZ605|MZ505|MZ601|MZ602|MZ603|MZ604|MZ606|MZ607|MZ608|MZ609|MZ615|MZ616|MZ617",NookTablet:"Android.*Nook|NookColor|nook browser|BNRV200|BNRV200A|BNTV250|BNTV250A|BNTV400|BNTV600|LogicPD Zoom2",AcerTablet:"Android.*; \\b(A100|A101|A110|A200|A210|A211|A500|A501|A510|A511|A700|A701|W500|W500P|W501|W501P|W510|W511|W700|G100|G100W|B1-A71|B1-710|B1-711|A1-810|A1-811|A1-830)\\b|W3-810|\\bA3-A10\\b|\\bA3-A11\\b",ToshibaTablet:"Android.*(AT100|AT105|AT200|AT205|AT270|AT275|AT300|AT305|AT1S5|AT500|AT570|AT700|AT830)|TOSHIBA.*FOLIO",LGTablet:"\\bL-06C|LG-V909|LG-V900|LG-V700|LG-V510|LG-V500|LG-V410|LG-V400|LG-VK810\\b",FujitsuTablet:"Android.*\\b(F-01D|F-02F|F-05E|F-10D|M532|Q572)\\b",PrestigioTablet:"PMP3170B|PMP3270B|PMP3470B|PMP7170B|PMP3370B|PMP3570C|PMP5870C|PMP3670B|PMP5570C|PMP5770D|PMP3970B|PMP3870C|PMP5580C|PMP5880D|PMP5780D|PMP5588C|PMP7280C|PMP7280C3G|PMP7280|PMP7880D|PMP5597D|PMP5597|PMP7100D|PER3464|PER3274|PER3574|PER3884|PER5274|PER5474|PMP5097CPRO|PMP5097|PMP7380D|PMP5297C|PMP5297C_QUAD",LenovoTablet:"Idea(Tab|Pad)( A1|A10| K1|)|ThinkPad([ ]+)?Tablet|Lenovo.*(S2109|S2110|S5000|S6000|K3011|A3000|A3500|A1000|A2107|A2109|A1107|A5500|A7600|B6000|B8000|B8080)(-|)(FL|F|HV|H|)",DellTablet:"Venue 11|Venue 8|Venue 7|Dell Streak 10|Dell Streak 7",YarvikTablet:"Android.*\\b(TAB210|TAB211|TAB224|TAB250|TAB260|TAB264|TAB310|TAB360|TAB364|TAB410|TAB411|TAB420|TAB424|TAB450|TAB460|TAB461|TAB464|TAB465|TAB467|TAB468|TAB07-100|TAB07-101|TAB07-150|TAB07-151|TAB07-152|TAB07-200|TAB07-201-3G|TAB07-210|TAB07-211|TAB07-212|TAB07-214|TAB07-220|TAB07-400|TAB07-485|TAB08-150|TAB08-200|TAB08-201-3G|TAB08-201-30|TAB09-100|TAB09-211|TAB09-410|TAB10-150|TAB10-201|TAB10-211|TAB10-400|TAB10-410|TAB13-201|TAB274EUK|TAB275EUK|TAB374EUK|TAB462EUK|TAB474EUK|TAB9-200)\\b",MedionTablet:"Android.*\\bOYO\\b|LIFE.*(P9212|P9514|P9516|S9512)|LIFETAB",ArnovaTablet:"AN10G2|AN7bG3|AN7fG3|AN8G3|AN8cG3|AN7G3|AN9G3|AN7dG3|AN7dG3ST|AN7dG3ChildPad|AN10bG3|AN10bG3DT|AN9G2",IntensoTablet:"INM8002KP|INM1010FP|INM805ND|Intenso Tab|TAB1004",IRUTablet:"M702pro",MegafonTablet:"MegaFon V9|\\bZTE V9\\b|Android.*\\bMT7A\\b",EbodaTablet:"E-Boda (Supreme|Impresspeed|Izzycomm|Essential)",AllViewTablet:"Allview.*(Viva|Alldro|City|Speed|All TV|Frenzy|Quasar|Shine|TX1|AX1|AX2)",ArchosTablet:"\\b(101G9|80G9|A101IT)\\b|Qilive 97R|Archos5|\\bARCHOS (70|79|80|90|97|101|FAMILYPAD|)(b|)(G10| Cobalt| TITANIUM(HD|)| Xenon| Neon|XSK| 2| XS 2| PLATINUM| CARBON|GAMEPAD)\\b",AinolTablet:"NOVO7|NOVO8|NOVO10|Novo7Aurora|Novo7Basic|NOVO7PALADIN|novo9-Spark",SonyTablet:"Sony.*Tablet|Xperia Tablet|Sony Tablet S|SO-03E|SGPT12|SGPT13|SGPT114|SGPT121|SGPT122|SGPT123|SGPT111|SGPT112|SGPT113|SGPT131|SGPT132|SGPT133|SGPT211|SGPT212|SGPT213|SGP311|SGP312|SGP321|EBRD1101|EBRD1102|EBRD1201|SGP351|SGP341|SGP511|SGP512|SGP521|SGP541|SGP551|SGP621|SGP612",PhilipsTablet:"\\b(PI2010|PI3000|PI3100|PI3105|PI3110|PI3205|PI3210|PI3900|PI4010|PI7000|PI7100)\\b",CubeTablet:"Android.*(K8GT|U9GT|U10GT|U16GT|U17GT|U18GT|U19GT|U20GT|U23GT|U30GT)|CUBE U8GT",CobyTablet:"MID1042|MID1045|MID1125|MID1126|MID7012|MID7014|MID7015|MID7034|MID7035|MID7036|MID7042|MID7048|MID7127|MID8042|MID8048|MID8127|MID9042|MID9740|MID9742|MID7022|MID7010",MIDTablet:"M9701|M9000|M9100|M806|M1052|M806|T703|MID701|MID713|MID710|MID727|MID760|MID830|MID728|MID933|MID125|MID810|MID732|MID120|MID930|MID800|MID731|MID900|MID100|MID820|MID735|MID980|MID130|MID833|MID737|MID960|MID135|MID860|MID736|MID140|MID930|MID835|MID733",MSITablet:"MSI \\b(Primo 73K|Primo 73L|Primo 81L|Primo 77|Primo 93|Primo 75|Primo 76|Primo 73|Primo 81|Primo 91|Primo 90|Enjoy 71|Enjoy 7|Enjoy 10)\\b",SMiTTablet:"Android.*(\\bMID\\b|MID-560|MTV-T1200|MTV-PND531|MTV-P1101|MTV-PND530)",RockChipTablet:"Android.*(RK2818|RK2808A|RK2918|RK3066)|RK2738|RK2808A",FlyTablet:"IQ310|Fly Vision",bqTablet:"(bq)?.*(Elcano|Curie|Edison|Maxwell|Kepler|Pascal|Tesla|Hypatia|Platon|Newton|Livingstone|Cervantes|Avant|Aquaris E10)|Maxwell.*Lite|Maxwell.*Plus",HuaweiTablet:"MediaPad|MediaPad 7 Youth|IDEOS S7|S7-201c|S7-202u|S7-101|S7-103|S7-104|S7-105|S7-106|S7-201|S7-Slim",NecTablet:"\\bN-06D|\\bN-08D",PantechTablet:"Pantech.*P4100",BronchoTablet:"Broncho.*(N701|N708|N802|a710)",VersusTablet:"TOUCHPAD.*[78910]|\\bTOUCHTAB\\b",ZyncTablet:"z1000|Z99 2G|z99|z930|z999|z990|z909|Z919|z900",PositivoTablet:"TB07STA|TB10STA|TB07FTA|TB10FTA",NabiTablet:"Android.*\\bNabi",KoboTablet:"Kobo Touch|\\bK080\\b|\\bVox\\b Build|\\bArc\\b Build",DanewTablet:"DSlide.*\\b(700|701R|702|703R|704|802|970|971|972|973|974|1010|1012)\\b",TexetTablet:"NaviPad|TB-772A|TM-7045|TM-7055|TM-9750|TM-7016|TM-7024|TM-7026|TM-7041|TM-7043|TM-7047|TM-8041|TM-9741|TM-9747|TM-9748|TM-9751|TM-7022|TM-7021|TM-7020|TM-7011|TM-7010|TM-7023|TM-7025|TM-7037W|TM-7038W|TM-7027W|TM-9720|TM-9725|TM-9737W|TM-1020|TM-9738W|TM-9740|TM-9743W|TB-807A|TB-771A|TB-727A|TB-725A|TB-719A|TB-823A|TB-805A|TB-723A|TB-715A|TB-707A|TB-705A|TB-709A|TB-711A|TB-890HD|TB-880HD|TB-790HD|TB-780HD|TB-770HD|TB-721HD|TB-710HD|TB-434HD|TB-860HD|TB-840HD|TB-760HD|TB-750HD|TB-740HD|TB-730HD|TB-722HD|TB-720HD|TB-700HD|TB-500HD|TB-470HD|TB-431HD|TB-430HD|TB-506|TB-504|TB-446|TB-436|TB-416|TB-146SE|TB-126SE",PlaystationTablet:"Playstation.*(Portable|Vita)",TrekstorTablet:"ST10416-1|VT10416-1|ST70408-1|ST702xx-1|ST702xx-2|ST80208|ST97216|ST70104-2|VT10416-2|ST10216-2A|SurfTab",PyleAudioTablet:"\\b(PTBL10CEU|PTBL10C|PTBL72BC|PTBL72BCEU|PTBL7CEU|PTBL7C|PTBL92BC|PTBL92BCEU|PTBL9CEU|PTBL9CUK|PTBL9C)\\b",AdvanTablet:"Android.* \\b(E3A|T3X|T5C|T5B|T3E|T3C|T3B|T1J|T1F|T2A|T1H|T1i|E1C|T1-E|T5-A|T4|E1-B|T2Ci|T1-B|T1-D|O1-A|E1-A|T1-A|T3A|T4i)\\b ",DanyTechTablet:"Genius Tab G3|Genius Tab S2|Genius Tab Q3|Genius Tab G4|Genius Tab Q4|Genius Tab G-II|Genius TAB GII|Genius TAB GIII|Genius Tab S1",GalapadTablet:"Android.*\\bG1\\b",MicromaxTablet:"Funbook|Micromax.*\\b(P250|P560|P360|P362|P600|P300|P350|P500|P275)\\b",KarbonnTablet:"Android.*\\b(A39|A37|A34|ST8|ST10|ST7|Smart Tab3|Smart Tab2)\\b",AllFineTablet:"Fine7 Genius|Fine7 Shine|Fine7 Air|Fine8 Style|Fine9 More|Fine10 Joy|Fine11 Wide",PROSCANTablet:"\\b(PEM63|PLT1023G|PLT1041|PLT1044|PLT1044G|PLT1091|PLT4311|PLT4311PL|PLT4315|PLT7030|PLT7033|PLT7033D|PLT7035|PLT7035D|PLT7044K|PLT7045K|PLT7045KB|PLT7071KG|PLT7072|PLT7223G|PLT7225G|PLT7777G|PLT7810K|PLT7849G|PLT7851G|PLT7852G|PLT8015|PLT8031|PLT8034|PLT8036|PLT8080K|PLT8082|PLT8088|PLT8223G|PLT8234G|PLT8235G|PLT8816K|PLT9011|PLT9045K|PLT9233G|PLT9735|PLT9760G|PLT9770G)\\b",YONESTablet:"BQ1078|BC1003|BC1077|RK9702|BC9730|BC9001|IT9001|BC7008|BC7010|BC708|BC728|BC7012|BC7030|BC7027|BC7026",ChangJiaTablet:"TPC7102|TPC7103|TPC7105|TPC7106|TPC7107|TPC7201|TPC7203|TPC7205|TPC7210|TPC7708|TPC7709|TPC7712|TPC7110|TPC8101|TPC8103|TPC8105|TPC8106|TPC8203|TPC8205|TPC8503|TPC9106|TPC9701|TPC97101|TPC97103|TPC97105|TPC97106|TPC97111|TPC97113|TPC97203|TPC97603|TPC97809|TPC97205|TPC10101|TPC10103|TPC10106|TPC10111|TPC10203|TPC10205|TPC10503",GUTablet:"TX-A1301|TX-M9002|Q702|kf026",PointOfViewTablet:"TAB-P506|TAB-navi-7-3G-M|TAB-P517|TAB-P-527|TAB-P701|TAB-P703|TAB-P721|TAB-P731N|TAB-P741|TAB-P825|TAB-P905|TAB-P925|TAB-PR945|TAB-PL1015|TAB-P1025|TAB-PI1045|TAB-P1325|TAB-PROTAB[0-9]+|TAB-PROTAB25|TAB-PROTAB26|TAB-PROTAB27|TAB-PROTAB26XL|TAB-PROTAB2-IPS9|TAB-PROTAB30-IPS9|TAB-PROTAB25XXL|TAB-PROTAB26-IPS10|TAB-PROTAB30-IPS10",OvermaxTablet:"OV-(SteelCore|NewBase|Basecore|Baseone|Exellen|Quattor|EduTab|Solution|ACTION|BasicTab|TeddyTab|MagicTab|Stream|TB-08|TB-09)",HCLTablet:"HCL.*Tablet|Connect-3G-2.0|Connect-2G-2.0|ME Tablet U1|ME Tablet U2|ME Tablet G1|ME Tablet X1|ME Tablet Y2|ME Tablet Sync",DPSTablet:"DPS Dream 9|DPS Dual 7",VistureTablet:"V97 HD|i75 3G|Visture V4( HD)?|Visture V5( HD)?|Visture V10",CrestaTablet:"CTP(-)?810|CTP(-)?818|CTP(-)?828|CTP(-)?838|CTP(-)?888|CTP(-)?978|CTP(-)?980|CTP(-)?987|CTP(-)?988|CTP(-)?989",MediatekTablet:"\\bMT8125|MT8389|MT8135|MT8377\\b",ConcordeTablet:"Concorde([ ]+)?Tab|ConCorde ReadMan",GoCleverTablet:"GOCLEVER TAB|A7GOCLEVER|M1042|M7841|M742|R1042BK|R1041|TAB A975|TAB A7842|TAB A741|TAB A741L|TAB M723G|TAB M721|TAB A1021|TAB I921|TAB R721|TAB I720|TAB T76|TAB R70|TAB R76.2|TAB R106|TAB R83.2|TAB M813G|TAB I721|GCTA722|TAB I70|TAB I71|TAB S73|TAB R73|TAB R74|TAB R93|TAB R75|TAB R76.1|TAB A73|TAB A93|TAB A93.2|TAB T72|TAB R83|TAB R974|TAB R973|TAB A101|TAB A103|TAB A104|TAB A104.2|R105BK|M713G|A972BK|TAB A971|TAB R974.2|TAB R104|TAB R83.3|TAB A1042",ModecomTablet:"FreeTAB 9000|FreeTAB 7.4|FreeTAB 7004|FreeTAB 7800|FreeTAB 2096|FreeTAB 7.5|FreeTAB 1014|FreeTAB 1001 |FreeTAB 8001|FreeTAB 9706|FreeTAB 9702|FreeTAB 7003|FreeTAB 7002|FreeTAB 1002|FreeTAB 7801|FreeTAB 1331|FreeTAB 1004|FreeTAB 8002|FreeTAB 8014|FreeTAB 9704|FreeTAB 1003",VoninoTablet:"\\b(Argus[ _]?S|Diamond[ _]?79HD|Emerald[ _]?78E|Luna[ _]?70C|Onyx[ _]?S|Onyx[ _]?Z|Orin[ _]?HD|Orin[ _]?S|Otis[ _]?S|SpeedStar[ _]?S|Magnet[ _]?M9|Primus[ _]?94[ _]?3G|Primus[ _]?94HD|Primus[ _]?QS|Android.*\\bQ8\\b|Sirius[ _]?EVO[ _]?QS|Sirius[ _]?QS|Spirit[ _]?S)\\b",ECSTablet:"V07OT2|TM105A|S10OT1|TR10CS1",StorexTablet:"eZee[_']?(Tab|Go)[0-9]+|TabLC7|Looney Tunes Tab",VodafoneTablet:"SmartTab([ ]+)?[0-9]+|SmartTabII10|SmartTabII7",EssentielBTablet:"Smart[ ']?TAB[ ]+?[0-9]+|Family[ ']?TAB2",RossMoorTablet:"RM-790|RM-997|RMD-878G|RMD-974R|RMT-705A|RMT-701|RME-601|RMT-501|RMT-711",iMobileTablet:"i-mobile i-note",TolinoTablet:"tolino tab [0-9.]+|tolino shine",AudioSonicTablet:"\\bC-22Q|T7-QC|T-17B|T-17P\\b",AMPETablet:"Android.* A78 ",SkkTablet:"Android.* (SKYPAD|PHOENIX|CYCLOPS)",TecnoTablet:"TECNO P9",JXDTablet:"Android.*\\b(F3000|A3300|JXD5000|JXD3000|JXD2000|JXD300B|JXD300|S5800|S7800|S602b|S5110b|S7300|S5300|S602|S603|S5100|S5110|S601|S7100a|P3000F|P3000s|P101|P200s|P1000m|P200m|P9100|P1000s|S6600b|S908|P1000|P300|S18|S6600|S9100)\\b",iJoyTablet:"Tablet (Spirit 7|Essentia|Galatea|Fusion|Onix 7|Landa|Titan|Scooby|Deox|Stella|Themis|Argon|Unique 7|Sygnus|Hexen|Finity 7|Cream|Cream X2|Jade|Neon 7|Neron 7|Kandy|Scape|Saphyr 7|Rebel|Biox|Rebel|Rebel 8GB|Myst|Draco 7|Myst|Tab7-004|Myst|Tadeo Jones|Tablet Boing|Arrow|Draco Dual Cam|Aurix|Mint|Amity|Revolution|Finity 9|Neon 9|T9w|Amity 4GB Dual Cam|Stone 4GB|Stone 8GB|Andromeda|Silken|X2|Andromeda II|Halley|Flame|Saphyr 9,7|Touch 8|Planet|Triton|Unique 10|Hexen 10|Memphis 4GB|Memphis 8GB|Onix 10)",FX2Tablet:"FX2 PAD7|FX2 PAD10",XoroTablet:"KidsPAD 701|PAD[ ]?712|PAD[ ]?714|PAD[ ]?716|PAD[ ]?717|PAD[ ]?718|PAD[ ]?720|PAD[ ]?721|PAD[ ]?722|PAD[ ]?790|PAD[ ]?792|PAD[ ]?900|PAD[ ]?9715D|PAD[ ]?9716DR|PAD[ ]?9718DR|PAD[ ]?9719QR|PAD[ ]?9720QR|TelePAD1030|Telepad1032|TelePAD730|TelePAD731|TelePAD732|TelePAD735Q|TelePAD830|TelePAD9730|TelePAD795|MegaPAD 1331|MegaPAD 1851|MegaPAD 2151",ViewsonicTablet:"ViewPad 10pi|ViewPad 10e|ViewPad 10s|ViewPad E72|ViewPad7|ViewPad E100|ViewPad 7e|ViewSonic VB733|VB100a",OdysTablet:"LOOX|XENO10|ODYS[ -](Space|EVO|Xpress|NOON)|\\bXELIO\\b|Xelio10Pro|XELIO7PHONETAB|XELIO10EXTREME|XELIOPT2|NEO_QUAD10",CaptivaTablet:"CAPTIVA PAD",IconbitTablet:"NetTAB|NT-3702|NT-3702S|NT-3702S|NT-3603P|NT-3603P|NT-0704S|NT-0704S|NT-3805C|NT-3805C|NT-0806C|NT-0806C|NT-0909T|NT-0909T|NT-0907S|NT-0907S|NT-0902S|NT-0902S",TeclastTablet:"T98 4G|\\bP80\\b|\\bX90HD\\b|X98 Air|X98 Air 3G|\\bX89\\b|P80 3G|\\bX80h\\b|P98 Air|\\bX89HD\\b|P98 3G|\\bP90HD\\b|P89 3G|X98 3G|\\bP70h\\b|P79HD 3G|G18d 3G|\\bP79HD\\b|\\bP89s\\b|\\bA88\\b|\\bP10HD\\b|\\bP19HD\\b|G18 3G|\\bP78HD\\b|\\bA78\\b|\\bP75\\b|G17s 3G|G17h 3G|\\bP85t\\b|\\bP90\\b|\\bP11\\b|\\bP98t\\b|\\bP98HD\\b|\\bG18d\\b|\\bP85s\\b|\\bP11HD\\b|\\bP88s\\b|\\bA80HD\\b|\\bA80se\\b|\\bA10h\\b|\\bP89\\b|\\bP78s\\b|\\bG18\\b|\\bP85\\b|\\bA70h\\b|\\bA70\\b|\\bG17\\b|\\bP18\\b|\\bA80s\\b|\\bA11s\\b|\\bP88HD\\b|\\bA80h\\b|\\bP76s\\b|\\bP76h\\b|\\bP98\\b|\\bA10HD\\b|\\bP78\\b|\\bP88\\b|\\bA11\\b|\\bA10t\\b|\\bP76a\\b|\\bP76t\\b|\\bP76e\\b|\\bP85HD\\b|\\bP85a\\b|\\bP86\\b|\\bP75HD\\b|\\bP76v\\b|\\bA12\\b|\\bP75a\\b|\\bA15\\b|\\bP76Ti\\b|\\bP81HD\\b|\\bA10\\b|\\bT760VE\\b|\\bT720HD\\b|\\bP76\\b|\\bP73\\b|\\bP71\\b|\\bP72\\b|\\bT720SE\\b|\\bC520Ti\\b|\\bT760\\b|\\bT720VE\\b|T720-3GE|T720-WiFi",OndaTablet:"\\b(V975i|Vi30|VX530|V701|Vi60|V701s|Vi50|V801s|V719|Vx610w|VX610W|V819i|Vi10|VX580W|Vi10|V711s|V813|V811|V820w|V820|Vi20|V711|VI30W|V712|V891w|V972|V819w|V820w|Vi60|V820w|V711|V813s|V801|V819|V975s|V801|V819|V819|V818|V811|V712|V975m|V101w|V961w|V812|V818|V971|V971s|V919|V989|V116w|V102w|V973|Vi40)\\b[\\s]+",JaytechTablet:"TPC-PA762",BlaupunktTablet:"Endeavour 800NG|Endeavour 1010",DigmaTablet:"\\b(iDx10|iDx9|iDx8|iDx7|iDxD7|iDxD8|iDsQ8|iDsQ7|iDsQ8|iDsD10|iDnD7|3TS804H|iDsQ11|iDj7|iDs10)\\b",EvolioTablet:"ARIA_Mini_wifi|Aria[ _]Mini|Evolio X10|Evolio X7|Evolio X8|\\bEvotab\\b|\\bNeura\\b",LavaTablet:"QPAD E704|\\bIvoryS\\b|E-TAB IVORY",CelkonTablet:"CT695|CT888|CT[\\s]?910|CT7 Tab|CT9 Tab|CT3 Tab|CT2 Tab|CT1 Tab|C820|C720|\\bCT-1\\b",WolderTablet:"miTab \\b(DIAMOND|SPACE|BROOKLYN|NEO|FLY|MANHATTAN|FUNK|EVOLUTION|SKY|GOCAR|IRON|GENIUS|POP|MINT|EPSILON|BROADWAY|JUMP|HOP|LEGEND|NEW AGE|LINE|ADVANCE|FEEL|FOLLOW|LIKE|LINK|LIVE|THINK|FREEDOM|CHICAGO|CLEVELAND|BALTIMORE-GH|IOWA|BOSTON|SEATTLE|PHOENIX|DALLAS|IN 101|MasterChef)\\b",MiTablet:"\\bMI PAD\\b|\\bHM NOTE 1W\\b",NibiruTablet:"Nibiru M1|Nibiru Jupiter One",NexoTablet:"NEXO NOVA|NEXO 10|NEXO AVIO|NEXO FREE|NEXO GO|NEXO EVO|NEXO 3G|NEXO SMART|NEXO KIDDO|NEXO MOBI",UbislateTablet:"UbiSlate[\\s]?7C",PocketBookTablet:"Pocketbook",Hudl:"Hudl HT7S3",TelstraTablet:"T-Hub2",GenericTablet:"Android.*\\b97D\\b|Tablet(?!.*PC)|BNTV250A|MID-WCDMA|LogicPD Zoom2|\\bA7EB\\b|CatNova8|A1_07|CT704|CT1002|\\bM721\\b|rk30sdk|\\bEVOTAB\\b|M758A|ET904|ALUMIUM10|Smartfren Tab|Endeavour 1010|Tablet-PC-4|Tagi Tab|\\bM6pro\\b|CT1020W|arc 10HD|\\bJolla\\b"},oss:{AndroidOS:"Android",BlackBerryOS:"blackberry|\\bBB10\\b|rim tablet os",PalmOS:"PalmOS|avantgo|blazer|elaine|hiptop|palm|plucker|xiino",SymbianOS:"Symbian|SymbOS|Series60|Series40|SYB-[0-9]+|\\bS60\\b",WindowsMobileOS:"Windows CE.*(PPC|Smartphone|Mobile|[0-9]{3}x[0-9]{3})|Window Mobile|Windows Phone [0-9.]+|WCE;",WindowsPhoneOS:"Windows Phone 8.1|Windows Phone 8.0|Windows Phone OS|XBLWP7|ZuneWP7|Windows NT 6.[23]; ARM;",iOS:"\\biPhone.*Mobile|\\biPod|\\biPad",MeeGoOS:"MeeGo",MaemoOS:"Maemo",JavaOS:"J2ME/|\\bMIDP\\b|\\bCLDC\\b",webOS:"webOS|hpwOS",badaOS:"\\bBada\\b",BREWOS:"BREW"},uas:{Chrome:"\\bCrMo\\b|CriOS|Android.*Chrome/[.0-9]* (Mobile)?",Dolfin:"\\bDolfin\\b",Opera:"Opera.*Mini|Opera.*Mobi|Android.*Opera|Mobile.*OPR/[0-9.]+|Coast/[0-9.]+",Skyfire:"Skyfire",IE:"IEMobile|MSIEMobile",Firefox:"fennec|firefox.*maemo|(Mobile|Tablet).*Firefox|Firefox.*Mobile",Bolt:"bolt",TeaShark:"teashark",Blazer:"Blazer",Safari:"Version.*Mobile.*Safari|Safari.*Mobile|MobileSafari",Tizen:"Tizen",UCBrowser:"UC.*Browser|UCWEB",baiduboxapp:"baiduboxapp",baidubrowser:"baidubrowser",DiigoBrowser:"DiigoBrowser",Puffin:"Puffin",Mercury:"\\bMercury\\b",ObigoBrowser:"Obigo",NetFront:"NF-Browser",GenericBrowser:"NokiaBrowser|OviBrowser|OneBrowser|TwonkyBeamBrowser|SEMC.*Browser|FlyFlow|Minimo|NetFront|Novarra-Vision|MQQBrowser|MicroMessenger"},props:{Mobile:"Mobile/[VER]",Build:"Build/[VER]",Version:"Version/[VER]",VendorID:"VendorID/[VER]",iPad:"iPad.*CPU[a-z ]+[VER]",iPhone:"iPhone.*CPU[a-z ]+[VER]",iPod:"iPod.*CPU[a-z ]+[VER]",Kindle:"Kindle/[VER]",Chrome:["Chrome/[VER]","CriOS/[VER]","CrMo/[VER]"],Coast:["Coast/[VER]"],Dolfin:"Dolfin/[VER]",Firefox:"Firefox/[VER]",Fennec:"Fennec/[VER]",IE:["IEMobile/[VER];","IEMobile [VER]","MSIE [VER];","Trident/[0-9.]+;.*rv:[VER]"],NetFront:"NetFront/[VER]",NokiaBrowser:"NokiaBrowser/[VER]",Opera:[" OPR/[VER]","Opera Mini/[VER]","Version/[VER]"],"Opera Mini":"Opera Mini/[VER]","Opera Mobi":"Version/[VER]","UC Browser":"UC Browser[VER]",MQQBrowser:"MQQBrowser/[VER]",MicroMessenger:"MicroMessenger/[VER]",baiduboxapp:"baiduboxapp/[VER]",baidubrowser:"baidubrowser/[VER]",Iron:"Iron/[VER]",Safari:["Version/[VER]","Safari/[VER]"],Skyfire:"Skyfire/[VER]",Tizen:"Tizen/[VER]",Webkit:"webkit[ /][VER]",Gecko:"Gecko/[VER]",Trident:"Trident/[VER]",Presto:"Presto/[VER]",iOS:" \\bi?OS\\b [VER][ ;]{1}",Android:"Android [VER]",BlackBerry:["BlackBerry[\\w]+/[VER]","BlackBerry.*Version/[VER]","Version/[VER]"],BREW:"BREW [VER]",Java:"Java/[VER]","Windows Phone OS":["Windows Phone OS [VER]","Windows Phone [VER]"],"Windows Phone":"Windows Phone [VER]","Windows CE":"Windows CE/[VER]","Windows NT":"Windows NT [VER]",Symbian:["SymbianOS/[VER]","Symbian/[VER]"],webOS:["webOS/[VER]","hpwOS/[VER];"]},utils:{Bot:"Googlebot|facebookexternalhit|AdsBot-Google|Google Keyword Suggestion|Facebot|YandexBot|bingbot|ia_archiver|AhrefsBot|Ezooms|GSLFbot|WBSearchBot|Twitterbot|TweetmemeBot|Twikle|PaperLiBot|Wotbox|UnwindFetchor",MobileBot:"Googlebot-Mobile|AdsBot-Google-Mobile|YahooSeeker/M1A1-R2D2",DesktopMode:"WPDesktop",TV:"SonyDTV|HbbTV",WebKit:"(webkit)[ /]([\\w.]+)",Console:"\\b(Nintendo|Nintendo WiiU|Nintendo 3DS|PLAYSTATION|Xbox)\\b",Watch:"SM-V700"}},e.detectMobileBrowsers={fullPattern:/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i,shortPattern:/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i};var f,g=Object.prototype.hasOwnProperty;return e.FALLBACK_PHONE="UnknownPhone",e.FALLBACK_TABLET="UnknownTablet",e.FALLBACK_MOBILE="UnknownMobile",f="isArray"in Array?Array.isArray:function(a){return"[object Array]"===Object.prototype.toString.call(a)},function(){var a,b,d,h,i,j,k=e.mobileDetectRules;for(a in k.props)if(g.call(k.props,a)){for(b=k.props[a],f(b)||(b=[b]),i=b.length,h=0;i>h;++h)d=b[h],j=d.indexOf("[VER]"),j>=0&&(d=d.substring(0,j)+"([\\w._\\+]+)"+d.substring(j+5)),b[h]=new RegExp(d,"i");k.props[a]=b}c(k.oss),c(k.phones),c(k.tablets),c(k.uas),c(k.utils),k.oss0={WindowsPhoneOS:k.oss.WindowsPhoneOS,WindowsMobileOS:k.oss.WindowsMobileOS}}(),e.findMatch=function(a,b){for(var c in a)if(g.call(a,c)&&a[c].test(b))return c;return null},e.getVersionStr=function(a,b){var c,d,f,h,i=e.mobileDetectRules.props;if(g.call(i,a))for(c=i[a],f=c.length,d=0;f>d;++d)if(h=c[d].exec(b),null!==h)return h[1];return null},e.getVersion=function(a,b){var c=e.getVersionStr(a,b);return c?e.prepareVersionNo(c):NaN},e.prepareVersionNo=function(a){var b;return b=a.split(/[a-z._ \/\-]/i),1===b.length&&(a=b[0]),b.length>1&&(a=b[0]+".",b.shift(),a+=b.join("")),Number(a)},e.isMobileFallback=function(a){return e.detectMobileBrowsers.fullPattern.test(a)||e.detectMobileBrowsers.shortPattern.test(a.substr(0,4))},e.prepareDetectionCache=function(a,c,f){if(a.mobile===b){var g,h,i;return(h=e.findMatch(e.mobileDetectRules.tablets,c))?(a.mobile=a.tablet=h,void(a.phone=null)):(g=e.findMatch(e.mobileDetectRules.phones,c))?(a.mobile=a.phone=g,void(a.tablet=null)):void(e.isMobileFallback(c)?(i=d.isPhoneSized(f),i===b?(a.mobile=e.FALLBACK_MOBILE,a.tablet=a.phone=null):i?(a.mobile=a.phone=e.FALLBACK_PHONE,a.tablet=null):(a.mobile=a.tablet=e.FALLBACK_TABLET,a.phone=null)):a.mobile=a.tablet=a.phone=null)}},e.mobileGrade=function(a){var b=null!==a.mobile();return a.os("iOS")&&a.version("iPad")>=4.3||a.os("iOS")&&a.version("iPhone")>=3.1||a.os("iOS")&&a.version("iPod")>=3.1||a.version("Android")>2.1&&a.is("Webkit")||a.version("Windows Phone OS")>=7||a.is("BlackBerry")&&a.version("BlackBerry")>=6||a.match("Playbook.*Tablet")||a.version("webOS")>=1.4&&a.match("Palm|Pre|Pixi")||a.match("hp.*TouchPad")||a.is("Firefox")&&a.version("Firefox")>=12||a.is("Chrome")&&a.is("AndroidOS")&&a.version("Android")>=4||a.is("Skyfire")&&a.version("Skyfire")>=4.1&&a.is("AndroidOS")&&a.version("Android")>=2.3||a.is("Opera")&&a.version("Opera Mobi")>11&&a.is("AndroidOS")||a.is("MeeGoOS")||a.is("Tizen")||a.is("Dolfin")&&a.version("Bada")>=2||(a.is("UC Browser")||a.is("Dolfin"))&&a.version("Android")>=2.3||a.match("Kindle Fire")||a.is("Kindle")&&a.version("Kindle")>=3||a.is("AndroidOS")&&a.is("NookTablet")||a.version("Chrome")>=11&&!b||a.version("Safari")>=5&&!b||a.version("Firefox")>=4&&!b||a.version("MSIE")>=7&&!b||a.version("Opera")>=10&&!b?"A":a.os("iOS")&&a.version("iPad")<4.3||a.os("iOS")&&a.version("iPhone")<3.1||a.os("iOS")&&a.version("iPod")<3.1||a.is("Blackberry")&&a.version("BlackBerry")>=5&&a.version("BlackBerry")<6||a.version("Opera Mini")>=5&&a.version("Opera Mini")<=6.5&&(a.version("Android")>=2.3||a.is("iOS"))||a.match("NokiaN8|NokiaC7|N97.*Series60|Symbian/3")||a.version("Opera Mobi")>=11&&a.is("SymbianOS")?"B":(a.version("BlackBerry")<5||a.match("MSIEMobile|Windows CE.*Mobile")||a.version("Windows Mobile")<=5.2,
"C")},e.detectOS=function(a){return e.findMatch(e.mobileDetectRules.oss0,a)||e.findMatch(e.mobileDetectRules.oss,a)},e.getDeviceSmallerSide=function(){return window.screen.width<window.screen.height?window.screen.width:window.screen.height},d.prototype={constructor:d,mobile:function(){return e.prepareDetectionCache(this._cache,this.ua,this.maxPhoneWidth),this._cache.mobile},phone:function(){return e.prepareDetectionCache(this._cache,this.ua,this.maxPhoneWidth),this._cache.phone},tablet:function(){return e.prepareDetectionCache(this._cache,this.ua,this.maxPhoneWidth),this._cache.tablet},userAgent:function(){return this._cache.userAgent===b&&(this._cache.userAgent=e.findMatch(e.mobileDetectRules.uas,this.ua)),this._cache.userAgent},os:function(){return this._cache.os===b&&(this._cache.os=e.detectOS(this.ua)),this._cache.os},version:function(a){return e.getVersion(a,this.ua)},versionStr:function(a){return e.getVersionStr(a,this.ua)},is:function(b){return a(b,this.userAgent())||a(b,this.os())||a(b,this.phone())||a(b,this.tablet())||a(b,e.findMatch(e.mobileDetectRules.utils,this.ua))},match:function(a){return a instanceof RegExp||(a=new RegExp(a,"i")),a.test(this.ua)},isPhoneSized:function(a){return d.isPhoneSized(a||this.maxPhoneWidth)},mobileGrade:function(){return this._cache.grade===b&&(this._cache.grade=e.mobileGrade(this)),this._cache.grade}},"undefined"!=typeof window&&window.screen?d.isPhoneSized=function(a){return 0>a?b:e.getDeviceSmallerSide()<=a}:d.isPhoneSized=function(){},d._impl=e,d})}(function(a){if("undefined"!=typeof module&&module.exports)return function(a){module.exports=a()};if("function"==typeof define&&define.amd)return define;if("undefined"!=typeof window)return function(a){window.MobileDetect=a()};throw new Error("unknown environment")}());
var mobileDetectObject = new MobileDetect(window.navigator.userAgent);
var isPhone =  mobileDetectObject.phone();

var wdnPopupWidgetContent = wdn_base64_decode('PHN0eWxlPg0KI3dkbi1wb3B1cC1vdmVybGF5IHsNCnBvc2l0aW9uOiBmaXhlZDsNCmJhY2tncm91bmQ6IHJnYmEoMCwwLDAsMC41KTsNCmxlZnQ6IDA7DQp0b3A6IDA7DQp3aWR0aDogMTAwJTsNCmhlaWdodDogMTAwJTsNCnotaW5kZXg6IDE0MDA7DQpkaXNwbGF5OiBub25lOw0KfQ0KDQoud2RuLXBvcHVwLWFjdGl2ZSAjd2RuLXBvcHVwLW92ZXJsYXkgew0KZGlzcGxheTogYmxvY2s7DQp9DQoNCiN3ZG4tc2l0ZS1wb3B1cCB7DQptYXgtd2lkdGg6IDEwMCU7DQp3aWR0aDogODAwcHg7DQp0b3A6IDUwJTsNCmxlZnQ6IDUwJTsNCm1hcmdpbi1sZWZ0OiAtNDAwcHg7DQptYXJnaW4tdG9wOiAtMTU1cHg7DQpwb3NpdGlvbjogZml4ZWQ7DQp6LWluZGV4OiAxNDAxOw0KdmlzaWJpbGl0eTogaGlkZGVuOw0KLXdlYmtpdC1mb250LXNtb290aGluZzogYW50aWFsaWFzZWQ7DQotbW96LW9zeC1mb250LXNtb290aGluZzogZ3JheXNjYWxlOw0KDQotd2Via2l0LXBlcnNwZWN0aXZlOiAxMzAwcHg7DQotbW96LXBlcnNwZWN0aXZlOiAxMzAwcHg7DQpwZXJzcGVjdGl2ZTogMTMwMHB4Ow0KZm9udC1mYW1pbHk6J0hlbHZldGljYSBOZXVlJyxBcmlhbCxzYW5zLXNlcmlmOw0KfQ0KDQoud2RuLXBvcHVwLWFjdGl2ZSAjd2RuLXNpdGUtcG9wdXAgew0KdmlzaWJpbGl0eTogdmlzaWJsZTsNCn0NCg0KI3dkbi1zaXRlLXBvcHVwLWlubmVyIHsNCmJhY2tncm91bmQ6ICNmZmY7DQotd2Via2l0LXRyYW5zZm9ybS1zdHlsZTogcHJlc2VydmUtM2Q7DQotbW96LXRyYW5zZm9ybS1zdHlsZTogcHJlc2VydmUtM2Q7DQp0cmFuc2Zvcm0tc3R5bGU6IHByZXNlcnZlLTNkOw0KLXdlYmtpdC10cmFuc2Zvcm06IHJvdGF0ZVgoLTcwZGVnKTsNCi1tb3otdHJhbnNmb3JtOiByb3RhdGVYKC03MGRlZyk7DQotbXMtdHJhbnNmb3JtOiByb3RhdGVYKC03MGRlZyk7DQp0cmFuc2Zvcm06IHJvdGF0ZVgoLTcwZGVnKTsNCi13ZWJraXQtdHJhbnNpdGlvbjogYWxsIDAuM3MgZWFzZS1pbi1vdXQ7DQotbW96LXRyYW5zaXRpb246IGFsbCAwLjNzIGVhc2UtaW4tb3V0Ow0KdHJhbnNpdGlvbjogYWxsIDAuM3MgZWFzZS1pbi1vdXQ7DQpvcGFjaXR5OiAwOw0KcG9zaXRpb246cmVsYXRpdmU7IHotaW5kZXg6MjsNCn0NCg0KLndkbi1wb3B1cC1hY3RpdmUgI3dkbi1zaXRlLXBvcHVwLWlubmVyIHsNCi13ZWJraXQtdHJhbnNmb3JtOiByb3RhdGVYKDBkZWcpOw0KLW1vei10cmFuc2Zvcm06IHJvdGF0ZVgoMGRlZyk7DQotbXMtdHJhbnNmb3JtOiByb3RhdGVYKDBkZWcpOw0KdHJhbnNmb3JtOiByb3RhdGVYKDBkZWcpOw0Kb3BhY2l0eTogMTsNCn0NCg0KI3dkbi1wb3B1cC1oZWFkZXIgeyB0ZXh0LWFsaWduOkNlbnRlcjsgY29sb3I6IzAwMDsgZm9udC1zaXplOjMwcHg7IA0KcGFkZGluZzoxNXB4IDA7DQpiYWNrZ3JvdW5kOiNmYWIyM2E7DQpmb250LXdlaWdodDpib2xkOw0KcG9zaXRpb246cmVsYXRpdmU7DQp9DQoNCiN3ZG4tcG9wdXAtY2xvc2UtYnRuIHsgcmlnaHQ6MHB4OyBwb3NpdGlvbjphYnNvbHV0ZTsgdG9wOjA7IG1hcmdpbi10b3A6MnB4OyBtYXJnaW4tcmlnaHQ6MnB4OyAgb3BhY2l0eTowLjU7fQ0KI3dkbi1wb3B1cC1jbG9zZS1idG46aG92ZXIge29wYWNpdHk6MC44O30NCg0KI3dkbi1wb3B1cC1pbWcge2Rpc3BsYXk6YmxvY2s7IHdpZHRoOjEwMCU7IG1hcmdpbjowIDAgMjBweCAwOyB9DQoNCiN3ZG4tcG9wdXAtZm9ybSB7cGFkZGluZzowIDUwcHggMjBweDsgdGV4dC1hbGlnbjpjZW50ZXI7fQ0KDQojd2RuLXBvcHVwLXRlcm1zIHsgbWFyZ2luLXRvcDoxNXB4OyB0ZXh0LWFsaWduOmxlZnQ7fQ0KI3dkbi1wb3B1cC10ZXJtcy1ub3RpY2UgYSwgI3dkbi1wb3B1cC10ZXJtcy1ub3RpY2UgeyBjb2xvcjojN2U3ZTdlOyBmb250LXNpemU6MTJweDsgdGV4dC1kZWNvcmF0aW9uOm5vbmU7fQ0KI3dkbi1wb3B1cC10ZXJtcy1ub3RpY2UgYTpob3ZlciB7IHRleHQtZGVjb3JhdGlvbjp1bmRlcmxpbmU7fQ0KI3dkbi1wb3B1cC10ZXJtcy1ub3RpY2UgeyB9DQojd2RuLXBvcHVwLWFncmVlIHsgZmxvYXQ6bGVmdDsgbWFyZ2luLXJpZ2h0OjVweDt9DQojd2RuLXBvcHVwLWVtYWlsIHsNCmZvbnQtc2l6ZToxNnB4Ow0Kb3V0bGluZTpub25lOw0KYmFja2dyb3VuZDojZjBmMGYwOyANCmJvcmRlcjoxcHggc29saWQgI2M5YzljOTsgDQpib3gtc2l6aW5nOmJvcmRlci1ib3g7DQotd2Via2l0LWJveC1zaXppbmc6Ym9yZGVyLWJveDsNCi1tb3otYm94LXNpemluZzpib3JkZXItYm94Ow0KaGVpZ2h0OjQ4cHg7DQp3aWR0aDo0MDBweDsNCnBhZGRpbmc6MCAyMHB4Ow0KbWFyZ2luLXRvcDowOw0KdmVydGljYWwtYWxpZ246dG9wOw0KfQ0KDQoNCiN3ZG4tcG9wdXAtYnRuOmhvdmVyIHtiYWNrZ3JvdW5kOiNmYWIyM2E7DQpjb2xvcjogI2ZhYjIzYTsNCmJhY2tncm91bmQ6ICMxYzIyMjc7DQp9DQojd2RuLXBvcHVwLWJ0bnsNCi13ZWJraXQtdHJhbnNpdGlvbjogYWxsIDAuM3MgZWFzZS1pbi1vdXQ7DQotbW96LXRyYW5zaXRpb246IGFsbCAwLjNzIGVhc2UtaW4tb3V0Ow0KdHJhbnNpdGlvbjogYWxsIDAuM3MgZWFzZS1pbi1vdXQ7DQpiYWNrZ3JvdW5kOiAjZmFiMjNhOw0KYm9yZGVyOiAycHggc29saWQgI2ZhYjIzYTsNCmZvbnQtc2l6ZToxNnB4Ow0KdGV4dC10cmFuc2Zvcm06dXBwZXJjYXNlOw0KY29sb3I6IzFmMWYxZjsNCmJveC1zaXppbmc6Ym9yZGVyLWJveDsNCi13ZWJraXQtYm94LXNpemluZzpib3JkZXItYm94Ow0KLW1vei1ib3gtc2l6aW5nOmJvcmRlci1ib3g7DQpoZWlnaHQ6NDhweDsNCndpZHRoOjE4MHB4Ow0KZGlzcGxheTppbmxpbmUtYmxvY2s7DQoNCm91dGxpbmU6bm9uZTsNCi8qYm9yZGVyLXJhZGl1czozcHg7DQotd2Via2l0LWJvcmRlci1yYWRpdXM6M3B4Ow0KLW1vei1ib3JkZXItcmFkaXVzOjNweDsNCiovDQptYXJnaW4tbGVmdDoxMHB4Ow0KbWFyZ2luLXRvcDowOw0KdmVydGljYWwtYWxpZ246dG9wOw0KcGFkZGluZzowOw0KZm9udC13ZWlnaHQ6Ym9sZDsNCn0NCg0KI3dkbi1wb3B1cC1lbnRlci10ZXh0IHsgY29sb3I6IzAwMDsgZm9udC13ZWlnaHQ6Ym9sZDsgZm9udC1zaXplOjIwcHg7IHRleHQtYWxpZ246Y2VudGVyOyBtYXJnaW4tYm90dG9tOjE1cHg7IH0NCg0KI3dkbi1wb3B1cC1iYWNrIHsgcG9zaXRpb246YWJzb2x1dGU7IHRleHQtYWxpZ246Y2VudGVyOw0KaGVpZ2h0OiAxMDAlOw0Kd2lkdGg6MTAwJTsNCglwb3NpdGlvbjogYWJzb2x1dGU7DQoJdG9wOiAwOw0KCQ0KCS13ZWJraXQtdHJhbnNmb3JtOiByb3RhdGVZKC0xODBkZWcpOw0KCSAgIC1tb3otdHJhbnNmb3JtOiByb3RhdGVZKC0xODBkZWcpOw0KICAgICAtby10cmFuc2Zvcm06IHJvdGF0ZVkoLTE4MGRlZyk7DQoJICAgdHJhbnNmb3JtOiByb3RhdGVZKC0xODBkZWcpOw0KICAgICANCgktd2Via2l0LXRyYW5zZm9ybS1zdHlsZTogcHJlc2VydmUtM2Q7DQoJICAgLW1vei10cmFuc2Zvcm0tc3R5bGU6IHByZXNlcnZlLTNkOw0KICAgICAtby10cmFuc2Zvcm0tc3R5bGU6IHByZXNlcnZlLTNkOw0KICAgICB0cmFuc2Zvcm0tc3R5bGU6IHByZXNlcnZlLTNkOw0KICAgICANCgktd2Via2l0LWJhY2tmYWNlLXZpc2liaWxpdHk6IGhpZGRlbjsNCgkgICAtbW96LWJhY2tmYWNlLXZpc2liaWxpdHk6IGhpZGRlbjsNCiAgICAgLW8tYmFja2ZhY2UtdmlzaWJpbGl0eTogaGlkZGVuOw0KICAgICBiYWNrZmFjZS12aXNpYmlsaXR5OiBoaWRkZW47DQogICAgIA0KCS13ZWJraXQtdHJhbnNpdGlvbjogYWxsIC4zcyBlYXNlLWluLW91dDsNCgkgICAtbW96LXRyYW5zaXRpb246IGFsbCAuM3MgZWFzZS1pbi1vdXQ7DQoJCS1tcy10cmFuc2l0aW9uOiBhbGwgLjNzIGVhc2UtaW4tb3V0Ow0KCQkgLW8tdHJhbnNpdGlvbjogYWxsIC4zcyBlYXNlLWluLW91dDsNCgkJCXRyYW5zaXRpb246IGFsbCAuM3MgZWFzZS1pbi1vdXQ7DQp9DQoNCi53ZG4tZmxpcHBlZCAgI3dkbi1zaXRlLXBvcHVwLWlubmVyIHsNCiAgei1pbmRleDogOTAwOw0KCS13ZWJraXQtdHJhbnNmb3JtOiByb3RhdGVZKDE4MGRlZyk7DQoJLW1vei10cmFuc2Zvcm06IHJvdGF0ZVkoMTgwZGVnKTsNCiAgLW8tdHJhbnNmb3JtOiByb3RhdGVZKDE4MGRlZyk7DQogIHRyYW5zZm9ybTogcm90YXRlWSgxODBkZWcpOw0KICAtd2Via2l0LWJhY2tmYWNlLXZpc2liaWxpdHk6IGhpZGRlbjsNCgkgICAtbW96LWJhY2tmYWNlLXZpc2liaWxpdHk6IGhpZGRlbjsNCiAgICAgLW8tYmFja2ZhY2UtdmlzaWJpbGl0eTogaGlkZGVuOw0KfQ0KDQoud2RuLWZsaXBwZWQgI3dkbi1wb3B1cC1iYWNrIHsNCgl6LWluZGV4OiAxMDAwOw0KICBiYWNrZ3JvdW5kOiNmZmY7DQoJLXdlYmtpdC10cmFuc2Zvcm06IHJvdGF0ZVgoMGRlZykgcm90YXRlWSgwZGVnKTsNCgktbW96LXRyYW5zZm9ybTogcm90YXRlWCgwZGVnKSByb3RhdGVZKDBkZWcpOw0KICAtby10cmFuc2Zvcm06IHJvdGF0ZVgoMGRlZykgcm90YXRlWSgwZGVnKTsNCiAgdHJhbnNmb3JtOiByb3RhdGVYKDBkZWcpIHJvdGF0ZVkoMGRlZyk7DQp9DQoNCiN3ZG4tcG9wdXAtdGhhbmtzIHsgcG9zaXRpb246YWJzb2x1dGU7IHRvcDo1MCU7IGxlZnQ6MDsgcG9zaXRpb246YWJzb2x1dGU7IGZvbnQtd2VpZ2h0OmJvbGQ7DQpmb250LXNpemU6MzBweDsNCnRleHQtYWxpZ246Y2VudGVyOw0Kd2lkdGg6MTAwJTsNCmNvbG9yOiMzMzM7DQptYXJnaW4tdG9wOi00MHB4Ow0KfQ0KDQojd2RuLXBvcHVwLXRoYW5rcyBzdHJvbmcgeyBkaXNwbGF5OmJsb2NrOyBmb250LXNpemU6NTBweDsgbWFyZ2luLWJvdHRvbToxMHB4O30NCg0KDQogQG1lZGlhIHNjcmVlbiBhbmQgKG1heC1oZWlnaHQ6IDc2OHB4KXsNCiAgI3dkbi1zaXRlLXBvcHVwIHsgd2lkdGg6NzAwcHg7fQ0KICAjd2RuLXBvcHVwLWVudGVyLXRleHQgeyBmb250LXNpemU6MTZweDt9DQogICN3ZG4tcG9wdXAtaGVhZGVyIHsgZm9udC1zaXplOjI2cHg7IHBhZGRpbmc6MTBweCAwO30NCiAgI3dkbi1wb3B1cC10ZXJtcy1ub3RpY2UgYSwgI3dkbi1wb3B1cC10ZXJtcy1ub3RpY2UgeyBmb250LXNpemU6MTFweDt9DQp9DQoNCg0KDQoNCg0KQG1lZGlhIHNjcmVlbiBhbmQgKG1heC1oZWlnaHQ6IDU5MHB4KXsNCiAgICN3ZG4tcG9wdXAtaW1nIHsgbWF4LWhlaWdodDoxODBweDsgd2lkdGg6YXV0bzsgZGlzcGxheTppbmxpbmUtYmxvY2s7fQ0KICAgI3dkbi1zaXRlLXBvcHVwLWlubmVyIHsgdGV4dC1hbGlnbjpjZW50ZXI7fQ0KICAgDQogICAjd2RuLXBvcHVwLWhlYWRlciB7IGZvbnQtc2l6ZToyNHB4O30NCiAgI3dkbi1wb3B1cC1lbnRlci10ZXh0IHsgZm9udC1zaXplOjE2cHg7fQ0KICAjd2RuLXBvcHVwLWZvcm0ge3BhZGRpbmc6IDAgMjBweCAyMHB4O30NCiAgI3dkbi1wb3B1cC1lbWFpbCwgI3dkbi1wb3B1cC1idG4geyBoZWlnaHQ6MzhweDt9DQp9DQoNCkBtZWRpYSBzY3JlZW4gYW5kIChtYXgtd2lkdGg6NzUwcHggKXsNCiAgDQogICN3ZG4tcG9wdXAtaGVhZGVyIHsgZm9udC1zaXplOjI0cHg7fQ0KICAjd2RuLXBvcHVwLWVudGVyLXRleHQgeyBmb250LXNpemU6MTZweDt9DQogICN3ZG4tcG9wdXAtZW1haWwgeyB3aWR0aDoxMDAlO30NCiAgI3dkbi1wb3B1cC1idG4geyBtYXJnaW4tdG9wOjE1cHg7fQ0KICANCiAgI3dkbi1wb3B1cC1lbWFpbCwgI3dkbi1wb3B1cC1idG4geyBoZWlnaHQ6MzhweDsgbWFyZ2luLWxlZnQ6MDt9DQogICN3ZG4tcG9wdXAtZm9ybSB7cGFkZGluZzogMCAyMHB4IDIwcHg7fQ0KfQ0KDQpAbWVkaWEgc2NyZWVuIGFuZCAobWF4LXdpZHRoOjMyMHB4ICl7DQogI3dkbi1wb3B1cC1oZWFkZXIgew0KICBmb250LXNpemU6IDIwcHg7IHBhZGRpbmc6MTBweCAwOw0KIH0NCiAgDQogICN3ZG4tcG9wdXAtZW50ZXItdGV4dCB7DQogICBmb250LXNpemU6IDE0cHg7DQogIH0NCiAgDQp9DQoNCjwvc3R5bGU+DQoNCjxkaXYgaWQ9Indkbi1wb3B1cC1vdmVybGF5Ij48L2Rpdj4NCjxkaXYgaWQ9Indkbi1zaXRlLXBvcHVwIiA+DQogIDxkaXYgaWQ9Indkbi1zaXRlLXBvcHVwLWlubmVyIj4NCiAgICA8ZGl2IGlkPSJ3ZG4tcG9wdXAtaGVhZGVyIj5GcmVlIGRvd25sb2FkOiAxMDAgYmVzdCBwaWNqdW1ibyBpbWFnZXMgICAgICA8YSBocmVmPSIjIiBpZD0id2RuLXBvcHVwLWNsb3NlLWJ0biIgb25jbGljaz0icmV0dXJuIHdkblBvcHVwQ2xvc2UoKTsiPg0KICAgICAgICA8aW1nIHNyYz0iaHR0cHM6Ly93ZWJkZXNpZ25lcmRlcG90LnMzLmFtYXpvbmF3cy5jb20vcG9wdXAvY2xvc2UtYnRuLTIucG5nIiB3aWR0aD0iMzIiIGhlaWdodD0iMzIiIGFsdD0iQ2xvc2UiIC8+DQogICAgICA8L2E+DQogICAgPC9kaXY+DQogICAgDQogICAgPGRpdiBpZD0id2RuLXBvcHVwLWltZy13cmFwIj4NCiAgICAgIDxpbWcgc3JjPSJodHRwOi8vbmV0ZG5hLndlYmRlc2lnbmVyZGVwb3QuY29tL3VwbG9hZHMvMjAxNS8xMS9mZWF0dXJlZF9waWNqdW1iby0xMDI0eDUwMy5qcGciIGFsdD0iIiBpZD0id2RuLXBvcHVwLWltZyIgLz4NCiAgICA8L2Rpdj4NCiAgICAgIA0KICAgIDxmb3JtIG1ldGhvZD0icG9zdCIgYWN0aW9uPSIiIG5hbWU9Indkbl9wb3B1cF9mb3JtIiBpZD0id2RuLXBvcHVwLWZvcm0iIG9uc3VibWl0PSJyZXR1cm4gc3VibWl0V2RkUG9wdXBGb3JtKCk7Ij4NCiAgICAgICA8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJyZWYiIHZhbHVlPSJ3ZGRwb3B1cCIgLz4NCiAgICAgICA8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJyZWZJRCIgdmFsdWU9IndkZHBvcHVwIiAvPg0KICAgICAgIDxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImNvZGUiIHZhbHVlPSJkZThkZTg4M2QzMzA3MDQzYTRlZjEyNDdmMjc5ZGI2YSIgLz4NCiAgICAgICA8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJ3ZGRfcG9zdF9pZCIgdmFsdWU9Ijc5Nzk0IiAvPg0KICAgICAgIDxkaXYgaWQ9Indkbi1wb3B1cC1lbnRlci10ZXh0Ij5FbnRlciB5b3VyIGVtYWlsIGFkZHJlc3MgYmVsb3cgdG8gcmVjZWl2ZSB5b3VyIGZyZWViaWU8L2Rpdj4NCiAgICAgICA8aW5wdXQgaWQ9Indkbi1wb3B1cC1lbWFpbCIgdHlwZT0iZW1haWwiIG5hbWU9ImVtYWlsIiBwbGFjZWhvbGRlcj0iRU5URVIgWU9VUiBFTUFJTCBIRVJFIiAvPg0KICAgICAgIDxidXR0b24gaWQ9Indkbi1wb3B1cC1idG4iPkZyZWUgZG93bmxvYWQ8L2J1dHRvbj4NCiAgICAgICA8ZGl2IGlkPSJ3ZG4tcG9wdXAtdGVybXMiPg0KICAgICAgICAgPGlucHV0IHR5cGU9ImNoZWNrYm94IiBuYW1lPSJhZ3JlZSIgaWQ9Indkbi1wb3B1cC1hZ3JlZSIgdmFsdWU9IjEiIC8+DQogICAgICAgICA8ZGl2IGlkPSJ3ZG4tcG9wdXAtdGVybXMtbm90aWNlIj4NCiAgICAgICAgICAgSSBhZ3JlZSB0byByZWNlaXZlIHdlZWtseSBuZXdzbGV0dGVycyBmcm9tIDxhIGhyZWY9Imh0dHA6Ly9XZWJkZXNpZ25lckRlcG90LmNvbSI+V2ViZGVzaWduZXJEZXBvdC5jb208L2E+IGFuZCANCiAgICAgICAgICAgPGEgaHJlZj0iaHR0cDovL1dlYmRlc2lnbmVyTmV3cy5jb20iPldlYmRlc2lnbmVyTmV3cy5jb208L2E+LiBVbnN1YnNjcmliZSBhdCBhbnkgdGltZS4gWW91ciBlbWFpbCB3aWxsIG5vdCBiZSBzb2xkL3JlbnRlZCAodW5zdWJzY3JpYmUgYXQgYW55IHRpbWUpDQogICAgICAgICA8L2Rpdj4NCiAgICAgICA8L2Rpdj4NCiAgICA8L2Zvcm0+IA0KICAgIDxhIGhyZWY9IiMiIGNsYXNzPSJ3ZG4tc2l0ZS1wb3B1cC1jbG9zZSI+PC9hPg0KICA8L2Rpdj4NCiAgDQogIDxkaXYgaWQ9Indkbi1wb3B1cC1iYWNrIj4NCiAgICA8ZGl2IGlkPSJ3ZG4tcG9wdXAtdGhhbmtzIj4NCiAgICAgICAgPHN0cm9uZz5UaGFuayB5b3UhPC9zdHJvbmc+IA0KICAgICAgICBUaGUgZmlsZXMgaGF2ZSBiZWVuIGVtYWlsZWQgdG8geW91ciBhZGRyZXNzDQogICAgICA8L2Rpdj4NCiAgPC9kaXY+DQo8L2Rpdj4NCg0K');

var wdnPopupVisits = wdn_Popup_Get_Cookie('wdd-popup-visits');
if(!wdnPopupVisits){
    wdnPopupVisits = 1;
}  
else{
    wdnPopupVisits = 1 + parseInt(wdnPopupVisits);
}

if(wdnPopupVisits <= 3 ){
  wdn_Popup_Set_Cookie('wdd-popup-visits', wdnPopupVisits, 1, '/' );
}

if( !isPhone && !(wdn_Popup_Get_Cookie('wdd-popup-closed') || wdn_Popup_Get_Cookie('wdd-popup-freebie-email')  ) 
   && wdnPopupVisits == 3 ){
  
    wdnPopupVisits++;
  wdn_Popup_Set_Cookie('wdd-popup-visits', wdnPopupVisits, 1, '/' );
    
  document.body.innerHTML += wdnPopupWidgetContent;

  setTimeout(function(){
    document.body.className += " wdn-popup-active";
    
    var popup = document.getElementById('wdn-site-popup');
    popup.style.marginLeft = -Math.ceil(popup.offsetWidth * 0.5) + "px";
    popup.style.marginTop = -Math.ceil(popup.offsetHeight * 0.5) + "px";
    document.getElementById('wdn-popup-overlay').addEventListener("click", wdnBodyClickEvent);
    
    /*
    var xmlhttp;
    if (window.XMLHttpRequest){
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    }
    else{
      // code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    
    var params = "ajax=1&ref=wddpopup";
    xmlhttp.open("POST","http://www.webdesignerdepot.com/widget/wdd-popup-track.php", true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.setRequestHeader("Content-length", params.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(params);
    */
    
    setTimeout(function(){
       var popup = document.getElementById('wdn-site-popup');
      popup.style.marginLeft = -Math.ceil(popup.offsetWidth * 0.5) + "px";
      popup.style.marginTop = -Math.ceil(popup.offsetHeight * 0.5) + "px";
    }, 3000); 
    
  }, 1000 );
  
  
  
}

function wdnPopupClose(){
  document.getElementById('wdn-popup-overlay').removeEventListener("click", wdnBodyClickEvent);
  document.body.className = document.body.className.replace(/\s*wdn-popup-active/i,'');
  wdn_Popup_Set_Cookie('wdd-popup-closed', true , 0 , '/' );
  if(wdnCloseTimeout){
    clearTimeout(wdnCloseTimeout);
    wdnCloseTimeout = null;
  }
  return false;
}

function wdnBodyClickEvent(e){
  wdnPopupClose(); 
}  

function wdn_base64_decode (data) {
    // http://kevin.vanzonneveld.net
    // +   original by: Tyler Akins (http://rumkin.com)
    // +   improved by: Thunder.m
    // +      input by: Aman Gupta
    // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +   bugfixed by: Onno Marsman
    // +   bugfixed by: Pellentesque Malesuada
    // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +      input by: Brett Zamir (http://brett-zamir.me)
    // +   bugfixed by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // -    depends on: utf8_decode
    // *     example 1: base64_decode('S2V2aW4gdmFuIFpvbm5ldmVsZA==');
    // *     returns 1: 'Kevin van Zonneveld'
    // mozilla has this native
    // - but breaks in 2.0.0.12!
    //if (typeof this.window['btoa'] == 'function') {
    //    return btoa(data);
    //}
    var b64 = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
    var o1, o2, o3, h1, h2, h3, h4, bits, i = 0,
        ac = 0,
        dec = "",
        tmp_arr = [];

    if (!data) {
        return data;
    }

    data += '';

    do { // unpack four hexets into three octets using index points in b64
        h1 = b64.indexOf(data.charAt(i++));
        h2 = b64.indexOf(data.charAt(i++));
        h3 = b64.indexOf(data.charAt(i++));
        h4 = b64.indexOf(data.charAt(i++));

        bits = h1 << 18 | h2 << 12 | h3 << 6 | h4;

        o1 = bits >> 16 & 0xff;
        o2 = bits >> 8 & 0xff;
        o3 = bits & 0xff;

        if (h3 == 64) {
            tmp_arr[ac++] = String.fromCharCode(o1);
        } else if (h4 == 64) {
            tmp_arr[ac++] = String.fromCharCode(o1, o2);
        } else {
            tmp_arr[ac++] = String.fromCharCode(o1, o2, o3);
        }
    } while (i < data.length);

    dec = tmp_arr.join('');
    dec = wdn_utf8_decode(dec);

    return dec;
}

function wdn_utf8_decode (str_data) {
    // http://kevin.vanzonneveld.net
    // +   original by: Webtoolkit.info (http://www.webtoolkit.info/)
    // +      input by: Aman Gupta
    // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +   improved by: Norman "zEh" Fuchs
    // +   bugfixed by: hitwork
    // +   bugfixed by: Onno Marsman
    // +      input by: Brett Zamir (http://brett-zamir.me)
    // +   bugfixed by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // *     example 1: utf8_decode('Kevin van Zonneveld');
    // *     returns 1: 'Kevin van Zonneveld'
    var tmp_arr = [],
        i = 0,
        ac = 0,
        c1 = 0,
        c2 = 0,
        c3 = 0;

    str_data += '';

    while (i < str_data.length) {
        c1 = str_data.charCodeAt(i);
        if (c1 < 128) {
            tmp_arr[ac++] = String.fromCharCode(c1);
            i++;
        } else if (c1 > 191 && c1 < 224) {
            c2 = str_data.charCodeAt(i + 1);
            tmp_arr[ac++] = String.fromCharCode(((c1 & 31) << 6) | (c2 & 63));
            i += 2;
        } else {
            c2 = str_data.charCodeAt(i + 1);
            c3 = str_data.charCodeAt(i + 2);
            tmp_arr[ac++] = String.fromCharCode(((c1 & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
            i += 3;
        }
    }

    return tmp_arr.join('');
}


var wdnCloseTimeout;
function submitWddPopupForm(){
   var email = document.forms['wdn_popup_form'].elements['email'].value;
   var ref = document.forms['wdn_popup_form'].elements['ref'].value;
   var refID = document.forms['wdn_popup_form'].elements['refID'].value;
   var code = document.forms['wdn_popup_form'].elements['code'].value;
   var wdd_post_id = document.forms['wdn_popup_form'].elements['wdd_post_id'].value;
   
  
  if(!validateEmailForWdnPopup(email)){
  	alert('Please enter a valid email address');
  	return false;
  }
  
  
  
  var agreed = document.forms['wdn_popup_form'].elements['agree'].checked;
  if(!agreed){
    alert('Please agree to the terms');
    return false;
  }
  
   var xmlhttp;
  if (window.XMLHttpRequest){
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  }
  else{
  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  xmlhttp.onreadystatechange=function(){
  if (xmlhttp.readyState==4 && xmlhttp.status==200){
      document.forms['wdn_popup_form'].elements['email'].value = '';
      document.getElementById('wdn-site-popup').className += " wdn-flipped";
      wdnCloseTimeout = setTimeout(function(){
         wdnPopupClose();
      }, 1500);
    }
  }
  
  
  var params = "ajax=1&code=de8de883d3307043a4ef1247f279db6a&wdd_post_id=79794&refID=wddpopup&ref="+ ref +"&email="+ email.replace('+','%2b');
  xmlhttp.open("POST","http://www.webdesignerdepot.com/widget/subscribeMdFreebie.php", true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.setRequestHeader("Content-length", params.length);
  xmlhttp.setRequestHeader("Connection", "close");
  
  xmlhttp.send(params);
  
  document.forms['wdn_popup_form'].elements['email'].value = 'Please wait...';
  
  
  
  wdn_Popup_Set_Cookie('wdd-popup-freebie-email', email , 365, '/' );
  return false;
}

function validateEmailForWdnPopup(email){ 
 var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/ 
 return email.match(re) 
}



function wdn_Popup_Get_Cookie( check_name ) {
	// first we'll split this cookie up into name/value pairs
	// note: document.cookie only returns name=value, not the other components
	var a_all_cookies = document.cookie.split( ';' );
	var a_temp_cookie = '';
	var cookie_name = '';
	var cookie_value = '';
	var b_cookie_found = false; // set boolean t/f default f

	for ( i = 0; i < a_all_cookies.length; i++ )
	{
		// now we'll split apart each name=value pair
		a_temp_cookie = a_all_cookies[i].split( '=' );


		// and trim left/right whitespace while we're at it
		cookie_name = a_temp_cookie[0].replace(/^\s+|\s+$/g, '');

		// if the extracted name matches passed check_name
		if ( cookie_name == check_name )
		{
			b_cookie_found = true;
			// we need to handle case where cookie has no value but exists (no = sign, that is):
			if ( a_temp_cookie.length > 1 )
			{
				cookie_value = unescape( a_temp_cookie[1].replace(/^\s+|\s+$/g, '') );
			}
			// note that in cases where cookie is initialized but no value, null is returned
			return cookie_value;
			break;
		}
		a_temp_cookie = null;
		cookie_name = '';
	}
	if ( !b_cookie_found )
	{
		return null;
	}
}


function wdn_Popup_Set_Cookie( name, value, expires, path, domain, secure ){
// set time, it's in milliseconds
var today = new Date();
today.setTime( today.getTime() );

/*
if the expires variable is set, make the correct
expires time, the current script below will set
it for x number of days, to make it for hours,
delete * 24, for minutes, delete * 60 * 24
*/
if ( expires )
{
expires = expires * 1000 * 60 * 60 * 24;
}
var expires_date = new Date( today.getTime() + (expires) );

document.cookie = name + "=" +escape( value ) +
( ( expires ) ? ";expires=" + expires_date.toGMTString() : "" ) +
( ( path ) ? ";path=" + path : "" ) +
( ( domain ) ? ";domain=" + domain : "" ) +
( ( secure ) ? ";secure" : "" );
}



