<?php

class Playerroster extends CI_Model
{
    function __construct() {
        parent::__construct();
    }

    // Returns the players array for the roster page
    function all() {
        return $this->player_array;
    }
    //Array for players on the roster
    var $player_array = array(
        array(
            'id'      => '1',
            '#'       => '50',
            'name'    => 'Anthony, Stephone',
            'pos'     => 'LB',
            'ht'      => '6-3',
            'wt'      => '245',
            'age'     => '32',
            'exp'     => 'R',
            'college' => 'Clemson',
        ),
        array(
            'id'      => '2',
            '#'       => '72',
            'name'    => 'Armstead, Terron',
            'pos'     => 'CB',
            'ht'      => '6-1',
            'wt'      => '205',
            'age'     => '23',
            'exp'     => '3',
            'college' => 'North Carolina State',
        ),
        array(
            'id'      => '3',
            '#'       => '90',
            'name'    => 'Barnes, Tavaris',
            'pos'     => 'LB',
            'ht'      => '6-3',
            'wt'      => '234',
            'age'     => '24',
            'exp'     => '3',
            'college' => 'Miami (Fla.)',
        ),
        array(
            'id'      => '4',
            '#'       => '40',
            'name'    => 'Breaux, Delvin',
            'pos'     => 'S',
            'ht'      => '6-0',
            'wt'      => '210',
            'age'     => '27',
            'exp'     => '4',
            'college' => 'Nebraska',
        ),
        array(
            'id'      => '5',
            '#'       => '9',
            'name'    => 'Brees, Drew',
            'pos'     => 'DL',
            'ht'      => '6-5',
            'wt'      => '273',
            'age'     => '25',
            'exp'     => '2',
            'college' => 'Mississippi State',
        ),
        array(
            'id'      => '6',
            '#'       => '39',
            'name'    => 'Browner, Brandon',
            'pos'     => 'LB',
            'ht'      => '6-2',
            'wt'      => '236',
            'age'     => '23',
            'exp'     => 'R',
            'college' => 'Florida',
        ),
        array(
            'id'      => '7',
            '#'       => '31',
            'name'    => 'Byrd, Jairus',
            'pos'     => 'OL',
            'ht'      => '6-6',
            'wt'      => '320',
            'age'     => '33',
            'exp'     => '11',
            'college' => 'Washington',
        ),
        array(
            'id'      => '8',
            '#'       => '16',
            'name'    => 'Coleman, Brandon',
            'pos'     => 'C/G',
            'ht'      => '6-5',
            'wt'      => '315',
            'age'     => '29',
            'exp'     => '4',
            'college' => 'Utah',
        ),
        array(
            'id'      => '9',
            '#'       => '12',
            'name'    => 'Colston, Marques',
            'pos'     => 'QB',
            'ht'      => '6-3',
            'wt'      => '214',
            'age'     => '24',
            'exp'     => '2',
            'college' => 'Fresno State',
        ),
        array(
            'id'      => '10',
            '#'       => '10',
            'name'    => 'Cooks, Brandin',
            'pos'     => 'CB',
            'ht'      => '6-0',
            'wt'      => '204',
            'age'     => '25',
            'exp'     => '2',
            'college' => 'Ohio',
        ),
        array(
            'id'      => '11',
            '#'       => '95',
            'name'    => 'Davison, Tyeler',
            'pos'     => 'LS',
            'ht'      => '6-3',
            'wt'      => '240',
            'age'     => '34',
            'exp'     => '9',
            'college' => 'Maryland',
        ),
        array(
            'id'      => '12',
            '#'       => '20',
            'name'    => 'Dixon, Brian',
            'pos'     => 'WR',
            'ht'      => '6-1',
            'wt'      => '211',
            'age'     => '21',
            'exp'     => 'R',
            'college' => 'Alabama',
        ),
        array(
            'id'      => '13',
            '#'       => '47',
            'name'    => 'Drescher, Justin',
            'pos'     => 'WR',
            'ht'      => '6-1',
            'wt'      => '214',
            'age'     => '28',
            'exp'     => '7',
            'college' => 'Texas Tech',
        ),
        array(
            'id'      => '14',
            '#'       => '91',
            'name'    => 'Edebali, Kasim',
            'pos'     => 'DE',
            'ht'      => '6-3',
            'wt'      => '280',
            'age'     => '21',
            'exp'     => 'R',
            'college' => 'Florida State',
        ),
        array(
            'id'      => '15',
            '#'       => '59',
            'name'    => 'Ellerbe, Dannell',
            'pos'     => 'DT',
            'ht'      => '6-2',
            'wt'      => '334',
            'age'     => '24',
            'exp'     => '2',
            'college' => 'Louisiana Tech',
        ),
        array(
            'id'      => '16',
            '#'       => '73',
            'name'    => 'Evans, Jahri',
            'pos'     => 'OL',
            'ht'      => '6-4',
            'wt'      => '323',
            'age'     => '23',
            'exp'     => 'R',
            'college' => 'Miami (Fla.)',
        ),
        array(
            'id'      => '17',
            '#'       => '71',
            'name'    => 'Eulls, Kaleb',
            'pos'     => 'CB',
            'ht'      => '5-11',
            'wt'      => '190',
            'age'     => '25',
            'exp'     => '3',
            'college' => 'Houston',
        ),
        array(
            'id'      => '18',
            '#'       => '18',
            'name'    => 'Grayson, Garrett',
            'pos'     => 'LB',
            'ht'      => '6-0',
            'wt'      => '231',
            'age'     => '22',
            'exp'     => 'R',
            'college' => 'Kansas',
        ),
        array(
            'id'      => '19',
            '#'       => '58',
            'name'    => 'Gwacham, Obum',
            'pos'     => 'RB',
            'ht'      => '5-11',
            'wt'      => '215',
            'age'     => '26',
            'exp'     => '5',
            'college' => 'Nebraska',
        ),
        array(
            'id'      => '20',
            '#'       => '57',
            'name'    => 'Hawthorne, David',
            'pos'     => 'WR',
            'ht'      => '6-4',
            'wt'      => '210',
            'age'     => '27',
            'exp'     => '4',
            'college' => 'Hillsdale',
        ),
        array(
            'id'      => '21',
            '#'       => '89',
            'name'    => 'Hill, Josh',
            'pos'     => 'T',
            'ht'      => '6-7',
            'wt'      => '330',
            'age'     => '28',
            'exp'     => '6',
            'college' => 'Northern Iowa',
        ),
        array(
            'id'      => '22',
            '#'       => '2',
            'name'    => 'Hocker, Zach',
            'pos'     => 'C',
            'ht'      => '6-2',
            'wt'      => '300',
            'age'     => '26',
            'exp'     => '5',
            'college' => 'Florida State',
        ),
        array(
            'id'      => '23',
            '#'       => '53',
            'name'    => 'Hocker, Zach',
            'pos'     => 'G',
            'ht'      => '6-3',
            'wt'      => '336',
            'age'     => '24',
            'exp'     => '2',
            'college' => 'Mississippi State',
        ),
        array(
            'id'      => '24',
            '#'       => '22',
            'name'    => 'Ingram, Mark',
            'pos'     => 'K',
            'ht'      => '6-1',
            'wt'      => '258',
            'age'     => '37',
            'exp'     => '16',
            'college' => 'Florida State',
        ),
        array(
            'id'      => '25',
            '#'       => '92',
            'name'    => 'Jenkins, John',
            'pos'     => 'RB',
            'ht'      => '6-0',
            'wt'      => '195',
            'age'     => '27',
            'exp'     => '5',
            'college' => 'Eastern Washington',
        ),
        array(
            'id'      => '26',
            '#'       => '35',
            'name'    => 'Johnson, Austin',
            'pos'     => 'P',
            'ht'      => '6-0',
            'wt'      => '192',
            'age'     => '26',
            'exp'     => '4',
            'college' => 'Fort Valley State',
        ),
        array(
            'id'      => '27',
            '#'       => '30',
            'name'    => 'Jones, Don',
            'pos'     => 'SS',
            'ht'      => '6-0',
            'wt'      => '209',
            'age'     => '23',
            'exp'     => 'R',
            'college' => 'Norfolk State',
        ),
        array(
            'id'      => '28',
            '#'       => '94',
            'name'    => 'Jordan, Cameron',
            'pos'     => 'LB',
            'ht'      => '6-0',
            'wt'      => '241',
            'age'     => '29',
            'exp'     => '8',
            'college' => 'Oklahoma',
        ),
        array(
            'id'      => '29',
            '#'       => '44',
            'name'    => 'Kikaha, Hauoli',
            'pos'     => 'DE',
            'ht'      => '6-3',
            'wt'      => '252',
            'age'     => '24',
            'exp'     => '2',
            'college' => 'Buffalo',
        ),
        array(
            'id'      => '30',
            '#'       => '68',
            'name'    => 'Lelito, Tim',
            'pos'     => 'DE',
            'ht'      => '6-3',
            'wt'      => '252',
            'age'     => '24',
            'exp'     => '3',
            'college' => 'Idaho',
        ),
        array(
            'id'      => '31',
            '#'       => '21',
            'name'    => 'Lewis, Keenan',
            'pos'     => 'S',
            'ht'      => '6-3',
            'wt'      => '225',
            'age'     => '27',
            'exp'     => '6',
            'college' => 'USC',
        ),
        array(
            'id'      => '32',
            '#'       => '56',
            'name'    => 'Mauti, Michael',
            'pos'     => 'OL',
            'ht'      => '6-5',
            'wt'      => '309',
            'age'     => '26',
            'exp'     => '3',
            'college' => 'Alabama-Birmingham',
        ),
        array(
            'id'      => '33',
            '#'       => '21',
            'name'    => 'McDonald, Dexter',
            'pos'     => 'CB',
            'ht'      => '6-1',
            'wt'      => '200',
            'age'     => '23',
            'exp'     => 'R',
            'college' => 'Kansas',
        ),
        array(
            'id'      => '34',
            '#'       => '7',
            'name'    => 'McCown, Luke',
            'pos'     => 'DT',
            'ht'      => '6-3',
            'wt'      => '310',
            'age'     => '25',
            'exp'     => '3',
            'college' => 'Oklahoma',
        ),
        array(
            'id'      => '35',
            '#'       => '77',
            'name'    => 'McGlynn, Mike',
            'pos'     => 'CB',
            'ht'      => '6-3',
            'wt'      => '211',
            'age'     => '26',
            'exp'     => '2',
            'college' => 'Utah',
        ),
        array(
            'id'      => '36',
            '#'       => '13',
            'name'    => 'Morgan, Joseph',
            'pos'     => 'QB',
            'ht'      => '6-1',
            'wt'      => '210',
            'age'     => '25',
            'exp'     => '3',
            'college' => 'Penn State',
        ),
        array(
            'id'      => '37',
            '#'       => '6',
            'name'    => 'Morstead, Thomas',
            'pos'     => 'RB',
            'ht'      => '6-3',
            'wt'      => '225',
            'age'     => '25',
            'exp'     => '3',
            'college' => 'Central Florida',
        ),
        array(
            'id'      => '38',
            '#'       => '23',
            'name'    => 'Murphy, Marcus',
            'pos'     => 'FB',
            'ht'      => '6-1',
            'wt'      => '240',
            'age'     => '26',
            'exp'     => '3',
            'college' => 'North Texas',
        ),
        array(
            'id'      => '39',
            '#'       => '75',
            'name'    => 'Peat, Andrus',
            'pos'     => 'T',
            'ht'      => '6-4',
            'wt'      => '340',
            'age'     => '32',
            'exp'     => '10',
            'college' => 'Utah State',
        ),
        array(
            'id'      => '40',
            '#'       => '38',
            'name'    => 'Phillips, Kenny',
            'pos'     => 'FB',
            'ht'      => '6-1',
            'wt'      => '250',
            'age'     => '30',
            'exp'     => '6',
            'college' => 'Washington',
        ),
        array(
            'id'      => '41',
            '#'       => '81',
            'name'    => 'Rivera, Mychal',
            'pos'     => 'TE',
            'ht'      => '6-3',
            'wt'      => '245',
            'age'     => '25',
            'exp'     => '3',
            'college' => 'Tennessee',
        ),
        array(
            'id'      => '42',
            '#'       => '78',
            'name'    => 'Richardson, Bobby',
            'pos'     => 'WR',
            'ht'      => '6-2',
            'wt'      => '195',
            'age'     => '24',
            'exp'     => '1',
            'college' => 'West Alabama',
        ),
        array(
            'id'      => '43',
            '#'       => '29',
            'name'    => 'Robinson, Khiry',
            'pos'     => 'LB',
            'ht'      => '6-4',
            'wt'      => '265',
            'age'     => '26',
            'exp'     => '5',
            'college' => 'Missouri',
        ),
        array(
            'id'      => '44',
            '#'       => '33',
            'name'    => 'Sanford, Jamarca',
            'pos'     => 'TE',
            'ht'      => '6-6',
            'wt'      => '265',
            'age'     => '27',
            'exp'     => '5',
            'college' => 'Marshall',
        ),
        array(
            'id'      => '45',
            '#'       => '83',
            'name'    => 'Snead, Willie',
            'pos'     => 'LB',
            'ht'      => '6-0',
            'wt'      => '226',
            'age'     => '26',
            'exp'     => '5',
            'college' => 'USC',
        ),
        array(
            'id'      => '46',
            '#'       => '28',
            'name'    => 'Spiller, C.J.',
            'pos'     => 'WR',
            'ht'      => '6-3',
            'wt'      => '200',
            'age'     => '27',
            'exp'     => '4',
            'college' => 'Temple',
        ),
        array(
            'id'      => '47',
            '#'       => '64',
            'name'    => 'Strief, Zach',
            'pos'     => 'CB',
            'ht'      => '6-1',
            'wt'      => '200',
            'age'     => '25',
            'exp'     => '3',
            'college' => 'Auburn',
        ),
        array(
            'id'      => '48',
            '#'       => '27',
            'name'    => 'Swann, Damian',
            'pos'     => 'DE',
            'ht'      => '6-5',
            'wt'      => '265',
            'age'     => '32',
            'exp'     => '11',
            'college' => 'Notre Dame',
        ),
        array(
            'id'      => '49',
            '#'       => '60',
            'name'    => 'Unger, Max',
            'pos'     => 'TE',
            'ht'      => '6-4',
            'wt'      => '258',
            'age'     => '23',
            'exp'     => 'R',
            'college' => 'Miami (Fla.)',
        ),
        array(
            'id'      => '50',
            '#'       => '82',
            'name'    => 'Watson, Benjamin',
            'pos'     => 'OL',
            'ht'      => '6-7',
            'wt'      => '333',
            'age'     => '27',
            'exp'     => '5',
            'college' => 'West Texas A&M',
        ),
        array(
            'id'      => '51',
            '#'       => '93',
            'name'    => 'Williams, Kevin',
            'pos'     => 'DT',
            'ht'      => '6-3',
            'wt'      => '315',
            'age'     => '28',
            'exp'     => '6',
            'college' => 'Tennessee',
        ),
        array(
            'id'      => '52',
            '#'       => '24',
            'name'    => 'Wilson, Kyle',
            'pos'     => 'DL',
            'ht'      => '6-3',
            'wt'      => '300',
            'age'     => '28',
            'exp'     => '6',
            'college' => 'East Carolina',
        ),
    );

}