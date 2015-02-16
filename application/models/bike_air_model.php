<?PHP

class Bike_air_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    
    function get_all_list() {
        $query_strings = '';
        $query_strings .= "SELECT * FROM BIKE_AIR";
        return $this -> db -> query($query_strings) -> result();
    }
    
    
    //총 개수 가져오기
    function get_all_count() {
        // $query_strings = '';
        // $query_strings .= "SELECT COUNT(*) 'total_count' FROM BIKE_AIR";
        // return $this -> db -> query($query_strings) -> result().'total_count';
        
        return $this->db->count_all("BIKE_AIR");
    }
    
    
    function get_page_list($list_start, $list_size) {
        $query_strings = '';
        $query_strings .= " SELECT * FROM BIKE_AIR";
        $query_strings .= " LIMIT ". $list_start . ", ". $list_size;
        return $this -> db -> query($query_strings) -> result();
    }
    
    
    function get_one_data($idx) {
        $query_strings = '';
        $query_strings .= " SELECT * FROM BIKE_AIR";
        $query_strings .= " WHERE IDX = ".$idx. " ";
        return $this -> db -> query($query_strings) -> result();
    }
    
    
    
    

    function get_list_all() {
        $query_strings = '';
        $query_strings .= "SELECT * FROM DP_RANK  ";
        $query_strings .= " ORDER BY ID DESC ";
        return $this -> db -> query($query_strings) -> result();
    }

    function get_list_top100() {
        $query_strings = '';
        $query_strings .= "SELECT * FROM DP_RANK  ";
        $query_strings .= " ORDER BY POINT DESC ";
        $query_strings .= " LIMIT 0, 100 ";
        return $this -> db -> query($query_strings) -> result();
    }

    function get_list($start, $page, $idx) {
        $query_strings = '';
        $query_strings .= "SELECT * FROM BIKE_AIR_USED_BOARD  ";
        $query_strings .= " WHERE BA_IDX = " . $idx;
        $query_strings .= " ORDER BY REG_DT DESC ";
        $query_strings .= " LIMIT " . $start . "," . $page;
        return $this -> db -> query($query_strings) -> result();
    }

    function get_item_one($id) {
        $query_strings = '';
        $query_strings .= "SELECT * FROM BOARD  ";
        $query_strings .= " WHERE ID = " . $id;
        return $this -> db -> query($query_strings) -> row();
    }

    function insert_data($point, $name) {
        date_default_timezone_set('Asia/Seoul');
        $date = date("Y-m-d H:i:s", time());

        $query_strings = '';
        $query_strings .= "INSERT INTO DP_RANK (";
        $query_strings .= " POINT, NAME, REG_DT";
        $query_strings .= " ) VALUE (";
        $query_strings .= sprintf("%s,", $point);
        $query_strings .= sprintf("'%s',", $name);
        $query_strings .= sprintf("'%s'", $date);
        $query_strings .= ")";

        $this -> db -> query($query_strings);

        return $this -> db -> insert_id();

    }

}
?>