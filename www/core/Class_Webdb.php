<?
abstract class Baza{
    protected $host;
    protected $Login;
    protected $Pass;
    protected $NameBd;
}

class Webdb extends Baza{
    public $Date =array();
    public $Query;
    public $Selection;
    public $Count;
    public $RecordCount;
    public $DateName =array();
    public $NameTable;
    function __construct(){
        $this->host = "172.33.10.50";
        $this->Login = "root";
        $this->Pass =  "root";
        $this->NameBd = "2222";
        $this->Connect = mysql_connect ($this->host, $this->Login,$this->Pass);
        mysql_select_db($this->NameBd);
    }
    public function Query($query)
    {
        $this->Query= mysql_query($query,$this->Connect);
        $this->Count=  mysql_num_fields($this->Query);
        $this->RecordCount =  mysql_num_rows($this->Query);
        $this->PoleName();
        $this->NameTable =mysql_field_table($this->Query,1);

    }
    public function SqlQuery($query)
    {
        $this->Query = mysql_query($query,$this->Connect);
        if (!$this->Query) {
            $message  = 'Неверный запрос: ' . mysql_error() . "\n";
            $message .= 'Запрос целиком: ' . $query;
            echo('<script language="JavaScript">alert("'.$message.'");</script>');
            die($message);

        }
    }
    public function PoleName(){
        for($i=0;$i<$this->Count;$i++) {
          array_push($this->DateName,mysql_field_name($this->Query, $i));
        }
    }
    public function SqlDate(){
        return mysql_fetch_array($this->Query);
    }
    public function AllSql(){
        $this->Date = array();
        while ($arr=mysql_fetch_array($this->Query)){
          //  for($i=0;$i<$this->Count;$i++)
            //{
                array_push($this->Date,$arr);
           // }
        }
        //var_dump($this->Date);
    }
}
?>
