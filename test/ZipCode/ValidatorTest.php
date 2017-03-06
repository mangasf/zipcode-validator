<?php
namespace Uvinum\Tests\ZipCode;

use Uvinum\ZipCode\Validator;

class ValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function validCountriesZipCodesProvider()
    {
        return [
            ["AT", "4053"],
            ["GB", "Sa6 5ll"],
            ["GB", "CV31 2HR"],
            ["GB", "G84 8JG"],
            ["GB", "SK4 4HL"],
            ["GB", "CF31 1QN"],
            ["GB", "SW20 8DT"],
            ["DE", "40231"],
            ["NL", "3012XC"],
            ["GB", "IV3 5JT"],
            ["GB", "m3 7by"],
            ["GB", "sa111bz"],
            ["GB", "wd34ju"],
            ["GB", "G74 2aa"],
            ["GB", "RH10 3TW"],
            ["DE", "71573"],
            ["GB", "HP27 9QB"],
            ["GB", "fk9 4nu"],
            ["GB", "N8 8RB "],
            ["GB", "NG347DN"],
            ["GB", "DA5 2JF"],
            ["FR", "66300"],
            ["GB", "OX1 2HB"],
            ["GB", "M20 5LN"],
            ["GB", "RH1 3DL"],
            ["GB", "CV31 3AZ"],
            ["NL", "1062XK"],
            ["GB", "UB1 2SB"],
            ["ES", "08711"],
            ["GB", "HG1 5LT"],
            ["GB", "GL12 8UD"],
            ["ES", "06600"],
            ["DE", "73547"],
            ["GB", "DD111AN"],
            ["DE", "55218"],
            ["DE", "07607"],
            ["GB", "DT35NH"],
            ["GB", "CT10 2HT"],
            ["GB", "WS14 0JL"],
            ["GB", "OL2 7AE"],
            ["ES", "45222"],
            ["GB", "g468tj"],
            ["GB", "W1F7BE"],
            ["GB", "SE15 3JQ"],
            ["GB", "TS18 4JH"],
            ["FR", "31350"],
            ["GB", "b74 3af"],
            ["PT", "7040-114"],
            ["GB", "EH13 0NE"],
            ["GB", "DD1 4QB"],
            ["ES", "45662"],
            ["ES", "41806"],
            ["ES", "19117"],
            ["GB", "bn3 3jx"],
            ["GB", "Cw7 3aq"],
            ["GB", "CH45 1LY"],
            ["GB", "DE3 0RU"],
            ["GB", "dy53yr"],
            ["ES", "05530"],
            ["GB", "BS284SR"],
            ["GB", "SW19 8EL"],
            ["IT", "13010"],
            ["GB", "NE209AP"],
            ["FR", "59118"],
            ["GB", "Wv11 3ua"],
            ["IT", "19124"],
            ["FR", "17111"],
            ["ES", "25690"],
            ["DE", "58566"],
            ["ES", "49519"],
            ["GB", "IG3 9SB"],
            ["GB", "SE26 4QP"],
            ["NL", "1261 GA"],
            ["GB", "SG1 6GS"],
            ["GB", "HG31PG"],
            ["GB", "TR210PT"],
            ["GB", "WS5 3AQ"],
            ["GB", "WF14 0JL"],
            ["GB", "KY15 7JG"],
            ["GB", "CM6 2LT"],
            ["GB", "TW14 9PG"],
            ["GB", "NN72JR"],
            ["GB", "g21 3ph"],
            ["GB", "BD4 9RS"],
            ["IT", "56048"],
            ["ES", "36416"],
            ["GB", "M14 7TG"],
            ["GB", "ne21de"],
            ["GB", "da7 6ea"],
            ["GB", "DD36RT"],
            ["GB", "B27 6he"],
            ["GB", "NP7 0BP"],
            ["GB", "EX38 8EB"],
            ["GB", "CR6 9DA"],
            ["GB", "HR2 0TG"],
            ["FR", "25800"],
            ["ES", "36700"],
            ["GB", "AB42 1PZ"],
            ["ES", "12192"],
            ["GB", "G334Px X"],
            ["GB", "SW1Y5JG"],
            ["PT", "2410-037"],
            ["GB", "SN1 2AJ"],
            ["GB", "PR9 9NW"],
            ["GB", "WS2 7BF"],
            ["GB", "HP3 8NH"],
            ["PT", "4490-036"],
            ["GB", "Bt45 5sf"],
            ["GB", "SK8 2DU"],
            ["GB", "S445DY"],
            ["GB", "S18 8RN"],
            ["GB", "SN77SB"],
            ["GB", "SO17 3SZ"],
            ["GB", "tw9 4dx"],
            ["FR", "56150"],
            ["GB", "OX15 4GF"],
            ["GB", "BD16 1PE"],
            ["GB", "E105QU"],
            ["GB", "En9 1hl"],
            ["GB", "Fy84pl"],
            ["GB", "NG162TN"],
            ["GB", "Ky11zn"],
            ["GB", "Bd13 5HF "],
            ["FR", "55100"],
            ["GB", "pe389ha"],
            ["GB", "Ls150an"],
            ["GB", "RG20 9PS"],
            ["GB", "CB1 3AN"],
            ["ES", "33187"],
            ["DE", "64832"],
            ["BE", "2580"],
            ["BE", "2240"],
            ["DE", "91781"],
            ["NL", "2574 BD"],
            ["GB", "L29 7WJ"],
            ["GB", "PL177PL"],
            ["BE", "1457"],
            ["FR", "60490"],
            ["FR", "25250"],
            ["IT", "73043"],
            ["GB", "BT15 3ES"],
            ["GB", "cm13 2pp"],
            ["NL", "4207 PB"],
            ["GB", "Tw91nn"],
            ["GB", "PO139AE"],
            ["GB", "LA13 9JQ"],
            ["GB", "IG11 8QU"],
            ["GB", "BS5 6JR"],
            ["GB", "BT1 6JH "],
            ["FR", "24640"],
            ["DE", "65201"],
            ["GB", "ML37FS"],
            ["ES", "07750"],
            ["ES", "39210"],
            ["GB", "NN1 4BZ"],
            ["GB", "L18 3ER"],
            ["DE", "83233"],
            ["DE", "82327"],
            ["GB", "S9 2SP"],
            ["NL", "3135"],
            ["GB", "Wr52ar"],
            ["IT", "67051"],
            ["GB", "BH5 1ND"],
            ["NL", "9712AV"],
            ["GB", "EX49AD"],
            ["DE", "25368"],
            ["FR", "50290"],
            ["GB", "LS7 4NS "],
            ["GB", "Dn14 5hn"],
            ["ES", "45710"],
            ["GB", " HG1 2HU"],
            ["GB", "DN332BG "],
            ["GB", "PH2 7DJ"],
            ["GB", "IP3 8AL"],
            ["DE", "71334"],
            ["GB", "SO17 1NN"],
            ["GB", "BN2 9ZL"],
            ["GB", "cv34 4bu"],
            ["ES", "30189"],
            ["BE", "7800"],
            ["GB", "BL34PN"],
            ["SE", "18738"],
            ["GB", "Se9 4SL"],
            ["GB", "CM13 3TU"],
            ["GB", "RH12 1NY"],
            ["GB", "AL1 5HE"],
            ["GB", "ME97TG"],
            ["GB", "SO529FZ"],
            ["GB", "bt36 4pt"],
            ["GB", "BT618LE"],
            ["AT", "6561"],
            ["GB", "N1 8HG"],
            ["GB", "DA11 8EF"],
            ["GB", "Br33dn"],
            ["DE", "13086"],
            ["GB", "LS12 1EX"],
            ["GB", "DA68EH"],
            ["ES", "33554"],
            ["GB", "AB54 6BF"],
            ["GB", "DA145LF "],
            ["DE", "71297"],
            ["GB", "RH9 8DJ"],
            ["GB", "NP76BL"],
            ["NL", "6131 hl"],
            ["GB", "Le5 0ff"],
            ["GB", "TR164QL"],
            ["GB", "TD1 3JB"],
            ["GB", "E14 3EF"],
            ["GB", "Tr19 7qg"],
            ["GB", "WA159DY"],
            ["GB", "Me13hs "],
            ["FR", "05220"],
            ["FR", "32500"],
            ["GB", "UB3 4QL"],
            ["DE", "39418"],
            ["FR", "31250"],
            ["FR", "87110"],
            ["GB", "Tw1 3sx"],
            ["GB", "se153qj"],
            ["GB", "W1H 6EQ"],
            ["GB", "Bs228py"],
            ["GB", "NR3 1RB"],
            ["GB", "sk67lz"],
            ["FR", "88300"],
            ["GB", "DA11SY"],
            ["FR", "77380"],
            ["GB", "SO14 0BN "],
            ["GB", "N9 0DL"],
            ["GB", "wv4 5le"],
            ["GB", "DT11 8PX"],
            ["GB", "GU20 6DY"],
            ["GB", "N20TS"],
            ["ES", "16630"],
            ["GB", "rh55be"],
            ["IT", "04020"],
            ["GB", "TW11 0BH"],
            ["GB", "Ox154lu"],
            ["FR", "49070"],
            ["GB", "hp6 5he"],
            ["GB", "GL54 1DU"],
            ["IT", "46100"],
            ["NL", "2905RG"],
            ["GB", "FY2 0WX "],
            ["GB", "CA14 2PY"],
            ["GB", "WA8 4SL "],
            ["ES", "03638"],
            ["GB", "DY12 1PG"],
            ["GB", "SW6 7QL"],
            ["AT", "1040"],
            ["GB", "Ky59ef"],
            ["GB", "IG3 9LF "],
            ["BE", "4670"],
            ["GB", "SW19 4EU"],
            ["GB", "GL4 3LE"],
            ["GB", "DY1 2DJ"],
            ["GB", "DN16 1HJ"],
            ["GB", "BR8 8DP"],
            ["GB", "CB7 5PB"],
            ["ES", "23179"],
            ["IT", "44021"],
            ["GB", "LE50PQ"],
            ["GB", "PR2 9QA"],
            ["GB", "SW19 8RB"],
            ["AT", "2000"],
            ["GB", "WV4 6QX"],
            ["GB", "G466jj"],
            ["GB", "Rm17 5hr"],
            ["GB", "M21 9JT"],
            ["ES", "44640"],
            ["GB", "BN2 5JL"],
            ["GB", "M9 4FA"],
            ["GB", "BR1 5AS"],
            ["GB", "WS140LG"],
            ["GB", "KA308BU"],
            ["GB", "mk14 5du"],
            ["GB", "NW9 7BX"],
            ["GB", "CV6 4HP"],
            ["FR", "59249"],
            ["GB", "CV3 2DJ"],
            ["IT", "42019"],
            ["GB", "LS12 1XG"],
            ["GB", "SL1 3ER"],
            ["ES", "05270"],
            ["GB", "DA15GQ"],
            ["GB", "DA12 2SB"],
            ["GB", "Wa94uu"],
            ["GB", "WV4 5DR"],
            ["GB", "FY6 7LB"],
            ["ES", "43373"],
            ["ES", "17200"],
            ["GB", "SN15 4NJ"],
            ["GB", "wv4 5el"],
            ["GB", "LE16 9AA"],
            ["GB", "WA169Jj"],
            ["FR", "78380"],
            ["GB", "E5 0JE"],
            ["GB", "Np165fa"],
            ["ES", "47529"],
            ["GB", "CM8 1PL"],
            ["GB", "EX10 9TU"],
            ["GB", "L25 4TD"],
            ["GB", "CR2 7EZ"],
            ["FR", "28100"],
            ["GB", "w1j 5hd"],
            ["GB", "DN22 7YN"],
            ["GB", "HU51LL"],
            ["GB", "BN11 2AY"],
            ["GB", "BL64JF"],
            ["GB", "DY12 1HU"],
            ["GB", "CR2 7jq"],
            ["GB", "AB21 9SE"],
            ["GB", "NR32 3PT"],
            ["GB", "E15 2SL"],
            ["GB", "NE46 3SB"],
            ["GB", "Bn36dl"],
            ["GB", "bh140lp"],
            ["GB", "G44 5UG"],
            ["GB", "nr86tn"],
            ["GB", "PO228PX"],
            ["GB", "W1H 5HH"],
            ["GB", "CV324TN"],
            ["GB", "Bb44dj"],
            ["GB", "NR104JP"],
            ["GB", "Rh11 9sd"],
            ["BE", "9930"],
            ["GB", "n156lj"],
            ["IT", "86039"],
            ["GB", "LA20 6BX"],
            ["GB", "LE2 4TN"],
            ["NL", "7582PL"],
            ["GB", "W5 4SH"],
            ["GB", "SE59HW"],
            ["GB", "gu289jt"],
            ["DE", "66571"],
            ["GB", "td14 5tw"],
            ["GB", "IG8 8QH"],
            ["GB", "TA10 9AR"],
            ["IT", "36065"],
            ["GB", "E14 8BJ"],
            ["GB", "N19 4DR"],
            ["ES", "22500"],
            ["GB", "EN1 1JJ"],
            ["NL", "3371"],
            ["GB", "PE13 4TT"],
            ["ES", "31800"],
            ["ES", "07518"],
            ["GB", "EH44 6LU"],
            ["DE", "81373"],
            ["DE", "16341"],
            ["GB", "nr218au"],
            ["DE", "85445"],
            ["DE", "40597"],
            ["ES", "48383"],
            ["GB", "rh12 4ba"],
            ["GB", "BB1 9ba"],
            ["GB", "WF4 1PY"],
            ["GB", "WF3 1SX"],
            ["DE", "45525"],
            ["GB", "WA8 3LF"],
            ["GB", "EN1 2JA"],
            ["DE", "83022"],
            ["GB", "SL6 8HX"],
            ["GB", "ng15 7sf"],
            ["GB", "WD6 1SL"],
            ["ES", "09172"],
            ["FR", "31880"],
            ["GB", "BS21 7XB"],
            ["GB", "pa8 7bq"],
            ["IT", "11028"],
            ["GB", "RM156JH"],
            ["GB", "BT45 8LU"],
            ["GB", "NE43 7UB"],
            ["GB", "BT43 6SN"],
            ["DE", "04347"],
            ["GB", "Gu111ag "],
            ["GB", "RG179DX"],
            ["GB", "LS24 9EG"],
            ["GB", "CT4 8HE"],
            ["GB", "sw8 5bd"],
            ["GB", "BB10 2TP"],
            ["GB", "RM4 1LD"],
            ["GB", "W1J 0BD"],
            ["FR", "92410"],
            ["GB", "NW2 2PU"],
            ["GB", "E107QN"],
            ["GB", "GU2 7AG"],
            ["GB", "hp143tt"],
            ["ES", "46299"],
            ["NL", "2903gc"],
            ["GB", "DD5 2JD"],
            ["GB", "PO77FD"],
            ["IT", "12018"],
            ["GB", "So19 8gd"],
            ["GB", "LE97QE"],
            ["GB", "Sw64uh "],
            ["GB", "TN316BJ "],
            ["GB", "DL15 8EA"],
            ["GB", "Sw84jh"],
            ["GB", "B689QG"],
            ["GB", "MK94AE"],
            ["GB", "dd11 1jn"],
            ["IT", "23020"],
            ["GB", "PE21 8SA"],
            ["GB", "LN2 4RD"],
            ["DE", "84028"],
            ["NL", "2131TV"],
            ["GB", "BT43 6AN"],
            ["GB", "BN245AH"],
            ["IT", "73021"],
            ["GB", "RG127ZE"],
            ["GB", "ky13 9su"],
            ["GB", "UB2 5JE"],
            ["NL", "1633GV"],
            ["GB", "B45 0LH"],
            ["ES", "27377"],
            ["FR", "53210"],
            ["GB", "LE672DT"],
            ["GB", "L190LR"],
            ["GB", "Ch43 7qs"],
            ["GB", "HG1 4TH"],
            ["GB", "HA9 9BP"],
            ["ES", "18698"],
            ["GB", "LS8 2LQ"],
            ["DE", "23881"],
            ["GB", "W1H 7QE"],
            ["ES", "13730"],
            ["GB", "Tw11pp"],
            ["GB", "Pr6 0la"],
            ["BE", "6030"],
            ["GB", "L25 6HR"],
            ["GB", "TQ26LL"],
            ["NL", "3263 PE"],
            ["GB", "SS12 9QH"],
            ["GB", "EX4 2DF"],
            ["IT", "23801"],
            ["GB", "TA2 6SR"],
            ["GB", "E1 6QH"],
            ["FR", "42990"],
            ["GB", "M43 6HF"],
            ["DE", "50678"],
            ["GB", "sw11 3tt"],
            ["GB", "Fk13 6ht"],
            ["GB", "RH118TF"],
            ["ES", "21600"],
            ["GB", "SE16 3LP"],
            ["GB", "M9 8NR"],
            ["GB", "LS28 9HW"],
            ["GB", "sa10 6nt"],
            ["GB", "WV14 9YE"],
            ["BE", "1701"],
            ["GB", "SL2 5HF"],
            ["ES", "37260"],
            ["ES", "25130"],
            ["GB", "DT2 7JD"],
            ["GB", "L9 3AL"],
            ["GB", "Po3 5ep "],
            ["NL", "4621ja"],
            ["GB", "Nr31 0lq "],
            ["GB", "NG22 0NR"],
            ["GB", "PO12 4TT"],
            ["GB", "NE30 4NX"],
            ["BE", "9051"],
            ["GB", "TQ9 7HL"],
            ["GB", "E14 0BB"],
            ["GB", "HA5 4PE"],
            ["GB", "LA12 7AF"],
            ["GB", "CV9 3AZ"],
            ["DE", "63828"],
            ["GB", "GU140JR"],
            ["GB", "PL305AT"],
            ["NL", "8453VE"],
            ["IT", "38070"],
            ["GB", "M19 3jx"],
            ["IT", "26032"],
            ["GB", "BS6 5AJ"],
            ["ES", "06207"],
            ["GB", "CF31 4BP"],
            ["NL", "1622LD"],
            ["NL", "3311RM"],
            ["ES", "50021"],
            ["DE", "38667"],
            ["IT", "47018"],
            ["GB", "HA3 9RJ"],
            ["GB", "SE9 2JY"],
            ["FR", "29246"],
            ["GB", "Eh48 2gh"],
            ["NL", "3295pg"],
            ["GB", "HU14 3QY"],
            ["IT", "10123"],
            ["DE", "59302"],
            ["DE", "72355"],
            ["GB", "DN119JG"],
            ["DE", "41366"],
            ["PT", "4425-617"],
            ["DE", "20257"],
            ["GB", "WC1X 8PX"],
            ["GB", "ML2 9NB"],
            ["GB", "Bt5 4rp"],
            ["IT", "61041"],
            ["ES", "09311"],
            ["BE", "4280"],
            ["IT", "66041"],
            ["GB", "sl44xa"],
            ["GB", "CH43 7SF"],
            ["GB", "LA80EE"],
            ["GB", "EC2A 2RS"],
            ["GB", "G76 8NU"],
            ["IT", "32013"],
            ["GB", "PL288SB"],
            ["DE", "06774"],
            ["GB", "GL5 2SH"],
            ["GB", "RM9 6HP"],
            ["IT", "20091"],
            ["GB", "CF71 7QL"],
            ["GB", "LL120UD"],
            ["GB", "PH2 0DJ"],
            ["GB", "pe13 4ps"],
            ["GB", "SO40 8EY"],
            ["FR", "25170"],
            ["NL", "6902PE"],
            ["DE", "41334"],
            ["GB", "BH14 8HA"],
            ["GB", "PH6 2LT"],
            ["GB", "Cf315dy"],
            ["GB", "NP16 5AZ"],
            ["GB", "nn72eu"],
            ["GB", "ME13 0AS"],
            ["GB", "RM7 0HA"],
            ["ES", "33540"],
            ["GB", "N1 9LG"],
            ["GB", "EX2 9BU"],
            ["GB", "LU54DG"],
            ["GB", "W23ET"],
            ["GB", "se5 9pg"],
            ["GB", "Ig38tn"],
            ["NL", "3062KH"],
            ["IT", "30028"],
            ["GB", "RH13 9GN"],
            ["DE", "22459"],
            ["GB", "Le10 1yg"],
            ["GB", "RM7 8EA"],
            ["GB", "HP23 4LJ"],
            ["IT", "25046"],
            ["GB", "Ex41dz "],
            ["GB", "SA17 4AS"],
            ["GB", "sw8 4xx"],
            ["ES", "02007"],
            ["GB", "BR8 7PG"],
            ["GB", "Kt58pw"],
            ["ES", "18330"],
            ["GB", "Wv4 5hh"],
            ["GB", "HG3 1RB"],
            ["GB", "HA9 7NZ"],
            ["NL", "3165AD"],
            ["GB", "bt20 3eg"],
            ["GB", "BT717UB"],
            ["ES", "20577"],
            ["GB", "B458QQ"],
            ["GB", "W1J 6NE"],
            ["PT", "1500-556"],
            ["GB", "EH10 6TJ"],
            ["GB", "Ox142ly "],
            ["GB", "Nr322qe"],
            ["DE", "53572"],
            ["GB", "CM11 1HH"],
            ["GB", "OL2 6SL"],
            ["GB", "l20 4jd"],
            ["GB", "WC2B 5PT"],
            ["GB", "Tq124hh"],
            ["FR", "13115"],
            ["GB", "CH492RQ "],
            ["PT", "3730-106"],
            ["GB", "WR11 1JY"],
            ["BE", "9840"],
            ["GB", "PO377NA"],
            ["GB", "OL3 5DF"],
            ["FR", "38390"],
            ["FR", "95180"],
            ["GB", "SN11 9JY"],
            ["GB", "EH11 1LZ"],
            ["GB", "B16 9PH"],
            ["FR", "70130"],
            ["GB", "E1 5NB"],
            ["DE", "01662"],
            ["GB", "Le4 9lf"],
            ["GB", "AB51 3SA"],
            ["GB", "MK41 0JY"],
            ["GB", "ME10 1UB"],
            ["DE", "89567"],
            ["DE", "51109"],
            ["SE", "16345"],
            ["ES", "36839"],
            ["GB", "SK2 5AN"],
            ["ES", "48311"],
            ["GB", "KT25UA"],
            ["GB", "WF50JU"],
            ["GB", "sk9 1ny"],
            ["GB", "DN6 8HP"],
            ["DE", "27283"],
            ["DE", "94036"],
            ["NL", "3069 XR"],
            ["NL", "2034 BV"],
            ["IT", "06050"],
            ["GB", "G77 5EB"],
            ["NL", "1188 DP"],
            ["GB", "Cv21 3fd"],
            ["GB", "WR11 4UP"],
            ["GB", "GL2 2GU"],
            ["GB", "w113DA"],
            ["GB", "KA8 9AU"],
            ["GB", "LE2 4NY"],
            ["ES", "08504"],
            ["GB", "IP11 9HN"],
            ["ES", "16415"],
            ["DE", "21244"],
            ["GB", "BN10 8BF"],
            ["NL", "9356 BX"],
            ["NL", "7511jv"],
            ["GB", "LE3 3RY"],
            ["GB", "EH54 8QA"],
            ["BE", "2223"],
            ["GB", "BN2 6WB"],
            ["FR", "13750"],
            ["ES", "41130"],
            ["GB", "EH8 9JT"],
            ["FR", "08110"],
            ["GB", "S63 7JZ"],
            ["ES", "28942"],
            ["GB", "LS25 1NB"],
            ["IT", "01022"],
            ["FR", "22620"],
            ["GB", "M160DA"],
            ["DE", "21271"],
            ["NL", "5554CG"],
            ["GB", "IV35RQ "],
            ["ES", "03810"],
            ["AT", "5661"],
            ["GB", "hg3 4ed"],
            ["GB", "SW17 7AE"],
            ["ES", "30590"],
            ["GB", "SE1 9RQ"],
            ["ES", "17850"],
            ["GB", "TW5 9TB"],
            ["GB", "CV8 2RU"],
            ["GB", "RG88TG"],
            ["ES", "27514"],
            ["GB", "OX37JH"],
            ["GB", "rm26hh"],
            ["GB", "nr319nq"],
            ["GB", "Ky4 8bb"],
            ["GB", "RH15 0TP"],
            ["GB", "PR25 2DY"],
            ["GB", "L17 7DT"],
            ["GB", "SA470NW "],
            ["GB", "NR10 3JJ"],
            ["IT", "39043"],
            ["GB", "SA1 5QQ"],
            ["FR", "68370"],
            ["ES", "47153"],
            ["DE", "56068"],
            ["GB", "KT2 7JB"],
            ["DE", "78054"],
            ["GB", "G5 9PS"],
            ["IT", "26861"],
            ["GB", "cf15 9jx"],
            ["GB", "RM16 2NX"],
            ["GB", "AB21 9BG"],
            ["ES", "50320"],
            ["AT", "4840"],
            ["FR", "07240"],
            ["FR", "68500"],
            ["DE", "10119"],
            ["GB", "RH201HR"],
            ["GB", "SO152JZ"],
            ["IT", "30122"],
            ["GB", "TW9 1YD"],
            ["GB", "PR16EP"],
            ["GB", "LL11 3AA"],
            ["GB", "CV34 6NF"],
            ["ES", "14820"],
            ["DE", "72505"],
            ["GB", "SW1Y 4DN"],
            ["NL", "4002HA"],
            ["DE", "69502"],
            ["GB", "PO3 6DN"],
            ["GB", "M15 4AW"],
            ["GB", "ME196BW"],
            ["GB", "Me89qf"],
            ["DE", "30900"],
            ["GB", "SO32 1PB"],
            ["ES", "15670"],
            ["NL", "2291 cs"],
            ["GB", "G1 1DT"],
            ["GB", "HP41EG"],
            ["GB", "BH20 7BD"],
            ["GB", "rg1 3hj"],
            ["GB", "N16 9NG"],
            ["GB", "Ml9 1ha"],
            ["GB", "BS36 2JH"],
            ["GB", "gl504dw"],
            ["GB", "SY20 8EG"],
            ["ES", "28803"],
            ["GB", "RG8 8JJ"],
            ["GB", "NE12 9SP"],
            ["NL", "5221BP"],
            ["GB", "WS1 3TA"],
            ["ES", "10450"],
            ["GB", "SE13 5BX"],
            ["DE", "69245"],
            ["GB", "DY8 2XQ"],
            ["IT", "48012"],
            ["NL", "4264ST"],
            ["GB", "WR10 1HF"],
            ["NL", "5611HW"],
            ["GB", "OX14 5QJ"],
            ["GB", "RH10 4HX"],
            ["GB", "EH47AP "],
            ["GB", "LE15 8AZ"],
            ["FR", "42110"],
            ["GB", "BA3 2RT"],
            ["GB", "PO18 8HG"],
            ["FR", "40120"],
            ["GB", "ME7 4LA"],
            ["IT", "21043"],
            ["GB", "Le2 5yb "],
            ["GB", "Mk42ad "],
            ["GB", "G74 1bn"],
            ["ES", "43593"],
            ["AT", "5102"],
            ["GB", "SA31 3DD"],
            ["GB", "HA1 1UD"],
            ["GB", "NW9 0LU "],
            ["GB", "Bt30 9dq"],
            ["FR", "50510"],
            ["ES", "06670"],
            ["GB", "OL9 6QQ"],
            ["GB", "EC4Y 0DY"],
            ["GB", "ne389hr"],
            ["BE", "4053"],
            ["ES", "07860"],
            ["NL", "5421LB"],
            ["GB", "WR66ER"],
            ["GB", "SW3 3HW"],
            ["GB", "G213AH"],
            ["GB", "wv45hd"],
            ["GB", "LE11 3UQ"],
            ["GB", "OX10 8DQ"],
            ["GB", "Bt10 0ea"],
            ["GB", "KT58NQ"],
            ["GB", "TN15 6QD"],
            ["GB", "TQ6 9PQ"],
            ["GB", "SL9 7AQ"],
            ["GB", "cv61ay"],
            ["GB", "SR1 1QN"],
            ["FR", "07300"],
            ["GB", "BL0 9EA"],
            ["GB", "PO35 5TW"],
            ["GB", "SO32 2RF"],
            ["GB", "L9 3AW"],
            ["GB", "B604Nh"],
            ["GB", "PH19 1AG"],
            ["FR", "22640"],
            ["GB", "b20 1la"],
            ["GB", "SL2 2LD"],
            ["ES", "46292"],
            ["GB", "OX3 8EA"],
            ["GB", "AL2 1AD"],
            ["GB", "B21 9HY"],
            ["IT", "41124"],
            ["GB", "Sw153ne"],
            ["GB", "E1 1PY"],
            ["GB", "CO11 2XA "],
            ["GB", "Eh48 1as"],
            ["GB", "G783eu"],
            ["GB", "Rg12 7rb"],
            ["FR", "69320"],
            ["GB", "NN1 3qt "],
            ["DE", "76227"],
            ["ES", "31174"],
            ["FR", "54840"],
            ["GB", "sm1 1rh"],
            ["IT", "13898"],
            ["GB", "TN174QA"],
            ["ES", "27430"],
            ["GB", "BN23 6ET"],
            ["GB", "NW10 5HG"],
            ["DE", "42857"],
            ["GB", "LL55 2RL"],
            ["SE", "21851"],
            ["GB", "S118FB"],
            ["GB", "EH141PA"],
            ["DE", "10789"],
            ["GB", "N15 4PS"],
            ["IT", "81031"],
            ["FR", "05300"],
            ["SE", "21133"],
            ["GB", "WD6 3PY"],
            ["SE", "18753"],
            ["NL", "7551DJ"],
            ["ES", "04270"],
            ["GB", "SL1 3LH"],
            ["GB", "Cv128da"],
            ["GB", "NP20 3ES"],
            ["ES", "06005"],
            ["GB", "PR8 2PS"],
            ["GB", "BN6 8UD"],
            ["GB", "S6 3JS"],
            ["GB", "Po22 8hh"],
            ["NL", "1106"],
            ["GB", "SY11 1PZ"],
            ["DE", "45478"],
            ["GB", "SA17 4BS"],
            ["GB", "CV23 0EY"],
            ["GB", "sy81da"],
            ["DE", "77791"],
            ["FR", "89530"],
            ["ES", "41520"],
            ["NL", "1381GV"],
            ["GB", "L7 0ep"],
            ["GB", "B93 9ay"],
            ["GB", "n3 3ee"],
            ["GB", "EX2 8ny"],
            ["GB", "BH255DB"],
            ["GB", "CV227EE"],
            ["ES", "36475"],
            ["NL", "5505jj"],
            ["GB", "g758un"],
            ["GB", "FK5 3BU"],
            ["GB", "HD47AZ"],
            ["GB", "CF23 6QP"],
            ["GB", "OX13 5NX"],
            ["GB", "KA19 8DL"],
            ["GB", "KY1 1XF"],
            ["GB", "LS28 7SW"],
            ["IT", "39034"],
            ["IT", "50033"],
            ["GB", "M14 7BT"],
            ["GB", "LE2 7ST"],
            ["GB", "GU4 7JY"],
            ["GB", "NE10 8SB"],
            ["NL", "8921BL"],
            ["NL", "4202MS"],
            ["GB", "DY3 4LN"],
            ["GB", "EH2 3ee"],
            ["GB", "OL9 9LZ"],
            ["GB", "GU11PD"],
            ["GB", "GU8 4SF"],
            ["GB", "G61 2JS"],
            ["GB", "Tq47bs"],
            ["GB", "Sn2 5lp"],
            ["ES", "10868"],
            ["ES", "08737"],
            ["GB", "Ky7 5nu"],
            ["GB", "YO176QX"],
            ["GB", "S10 3AN"],
            ["GB", "CV6 3LQ"],
            ["DE", "89171"],
            ["GB", "GU15 2RH"],
            ["BE", "3700"],
            ["GB", "GL5 2JF"],
            ["GB", "RH5 5LS"],
            ["NL", "3404 AS"],
            ["IT", "97019"],
            ["GB", "BR4 9PB"],
            ["GB", "WA10 4DL"],
            ["BE", "4800"],
            ["FR", "46260"],
            ["GB", "TQ13 8AH"],
            ["GB", "TA36JA"],
            ["FR", "77650"],
            ["GB", "PO13 9AE"],
            ["DE", "64665"],
            ["GB", "OX14JF"],
            ["NL", "1091DJ"],
            ["NL", "5263 GL"],
            ["GB", "DN159NF"],
            ["GB", "BD14 6EW"],
            ["GB", "W1T 3PQ"],
            ["GB", "B71 4JS"],
            ["FR", "73350"],
            ["DE", "61381"],
            ["ES", "05220"],
            ["GB", "B3 2NT"],
            ["GB", "MK16 8SG"],
            ["GB", "sn15 3db"],
            ["GB", "BN2 3HP"],
            ["GB", "L24 1US"],
            ["GB", "BH10 7AS"],
            ["GB", "LE3 2FR"],
            ["GB", "EH10 5XD "],
            ["PT", "4740-493"],
            ["NL", "1648 HJ"],
            ["ES", "03177"],
            ["GB", "BN150NY"],
            ["GB", "TW200BY"],
            ["GB", "SW8 5AW "],
            ["GB", "EC1V4LA"],
            ["GB", "GU21 5SW"],
            ["GB", "BH217PE"],
            ["ES", "26510"],
            ["GB", "SA36 0EE"],
            ["ES", "04662"],
            ["GB", "G140NF"],
            ["GB", "CF453AU"],
            ["ES", "19198"],
            ["GB", "CB5 8RJ"],
            ["FR", "55000"],
            ["GB", "RG10 8PY"],
            ["GB", "sp4 7ee"],
            ["DE", "56130"],
            ["GB", "BL0 9JE "],
            ["GB", "CM4 0ET"],
            ["GB", "BS27 3ND"],
            ["ES", "44560"],
            ["PT", "2430-446"],
            ["FR", "60130"],
            ["DE", "42489"],
            ["FR", "33560"],
            ["AT", "8522"],
            ["GB", "NR86YT"],
            ["DE", "63934"],
            ["GB", "WV4 4LT"],
            ["NL", "2288EE"],
            ["GB", "cv5 6pd"],
            ["IT", "39047"],
            ["DE", "20099"],
            ["GB", "W1J5EF"],
            ["ES", "28140"],
            ["GB", "ct11np"],
            ["NL", "1703CA"],
            ["IT", "35022"],
            ["GB", "bt34 3ny"],
            ["GB", "LS10 1NA"],
            ["GB", "KT9 1SN"],
            ["GB", "B5 4TU"],
            ["IT", "49040"],
            ["ES", "06280"],
            ["GB", "ST54LT"],
            ["GB", "SL6 7EF"],
            ["GB", "PO36 9BX"],
            ["GB", "BT20 5LA"],
            ["GB", "HP178XB"],
            ["IT", "00142"],
            ["ES", "04750"],
            ["GB", "AB387AQ"],
            ["NL", "3707SE"],
            ["GB", "PE13DG"],
            ["PT", "4400-004"],
            ["GB", "So50 4LW"],
            ["FR", "02700"],
            ["GB", "ln4 4ye"],
            ["GB", "dn21 5jn"],
            ["GB", "DG7 3PD"],
            ["ES", "46169"],
            ["GB", "TS80ST"],
            ["GB", "S87LH"],
            ["GB", "S10 1DA"],
            ["DE", "30629"],
            ["GB", "bl0 9wh"],
            ["GB", "Sw16 1up"],
            ["GB", "SK7 5NE"],
            ["GB", "Wv132qg"],
            ["GB", "ex4 8px"],
            ["DE", "21483"],
            ["GB", "GL55 6QH"],
            ["GB", "DA7 6nl"],
            ["GB", "SO23 9HA"],
            ["ES", "29160"],
            ["GB", "BN124XQ"],
            ["GB", "CB58RJ"],
            ["GB", "N6 5RR"],
            ["FR", "78013"],
            ["GB", "Ml60ld"],
            ["FR", "21560"],
            ["GB", "Dg64xf "],
            ["GB", "Ne280dw "],
            ["BE", "4030"]
        ];
    }

    public function invalidCountriesZipCodesProvider()
    {
        return [
            ["AT", "a-1080"],
            ["GB", "Ts 18 1SL"],
            ["GB", "BL9OLU"],
            ["GB", "La 16 7du"],
            ["GB", "PE19  5YN"],
            ["FR", "211130"],
            ["IT", "25056 "],
            ["GB", "Y010 5DD"],
            ["GB", "SN25-3AD"],
            ["BE", "01190"],
            ["GB", "UB6 7 AU"],
            ["GB", "EC1A &BE"],
            ["NL", "3723 hk "],
            ["PT", "2720-493 "],
            ["PT", "1600_612"],
            ["GB", "Sy4 2 EP"],
            ["PT", "1350"],
            ["GB", "p09 2qn"],
            ["FR", "34830 "],
            ["GB", "sso 9la"],
            ["GB", "FY 8 4PL"],
            ["GB", "FU3 3AP"],
            ["PT", "6350"],
            ["ES", "635089"],
        ];
    }


    /** @test
     * @dataProvider validCountriesZipCodesProvider
     */
    public function testValidZipCodes($country_iso_code, $zip_code)
    {
        $zip_code_validator = new Validator();
        $this->assertTrue($zip_code_validator->validate($country_iso_code, $zip_code));
    }

    /** @test
     * @dataProvider invalidCountriesZipCodesProvider
     */
    public function testInValidZipCodes($country_iso_code, $zip_code)
    {
        $zip_code_validator = new Validator();
        $this->assertFalse($zip_code_validator->validate($country_iso_code, $zip_code));
    }
}
