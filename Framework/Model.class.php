<?php
/**
 * Created by PhpStorm.
 * User: leiliang
 * Date: 2016/4/23
 * Time: 11:56
 */
class Model{
    protected $db;
    public $fields = array();
    public function __construct()
    {

        //载入配置文件
        $config =  require CONFIG_PATH."myshop.config.php";
        $this->db = DB::getInstance($config['db']);
        $this->getFields();
    }

    //声明一个方法获取表名
    public function getTable(){
        $str = get_class($this);
        return substr($str,0,-5);
    }
    //查询所有数据
    public function getAll($table="*",$where=""){
        $tName = $this->getTable();
        $sql = "select $table from `$tName`";
        if(!empty($where)){
            $sql.= " where $where";
        }
        return $this->db->fetchAll($sql);
    }
    public function getOne($field="*",$where=""){
        $tName = $this->getTable();
        $sql = "select $field from `$tName`";
        if(!empty($where)){
            $sql.= " where $where";
        }
        return $this->db->fetchRow($sql);
    }
    //获取所有字段
    public function getFields(){
        $tName = $this->getTable();
        $sql = "desc `$tName`";
        $rows = $this->db->fetchAll($sql);
        foreach($rows as $row){
            if($row['Key'] == "PRI"){
                $this->fields['PRI'] = $row['Field'];
            }else{
                $this->fields[] = $row['Field'];
            }
        }
    }
    //添加一个删除的方法
    public function delete($id){
        $tName = $this->getTable();
        $sql = "delete from `$tName` where `{$this->fields['PRI']}` = '$id'";
        return $this->db->query($sql);
    }
    //构建一个读取一条数据的方法
    public function getRowByKey($id){
        $tName = $this->getTable();
        $sql =  "select * from `$tName` where `{$this->fields['PRI']}` = $id";
        return $this->db->fetchRow($sql);

    }

    public function fiterFields($post){

//
        //遍历$post;
        foreach($post as $key=>$val){
            //判定$key在不在  $this->fields中
            if(!in_array($key, $this->fields)){
                unset($post[$key]);
            }
        }
        return $post;
    }
    //取得字段名 字符串
    public function getFieldsString($data){
        //字段名,字段名, ...

//           var_dump(array_keys($data));
        //找字段
        $arr =  array_keys($data);
        //给数组每个值加上反引号
        $arr=array_map(function($val){return "`$val`";}, $arr);
//           var_dump($arr);
        return implode(",", $arr);
    }
//             取值的字符串
    public function getValueString($data){
        $arr=  array_values($data);
//          var_dump($arr);
//          拼接单引号
        $arr=  array_map(function($val){return "'$val'";}, $arr);
        //转为字符处
        return implode(",", $arr);

    }

    //声明方法 拼接 插入语句
    public function insertValues($post){
        //表单项的所有名字 全部命名为 字段名
        // 寻找字段名
        $data=$this->fiterFields($post);
        //构建字段形式
        $fields=$this->getFieldsString($data);
        //获取值得字符串
        $values=$this->getValueString($data);
        //拼接语句
        $sql="insert into `{$this->getTable()}`($fields) values($values)";
        //执行语句
        return $this->db->query($sql);
    }
    //构建更新方法
    public function modify($post,$condition=""){
        $post = $this->fiterFields($post);
        $str = "";
        foreach($post as $key=>$value){
            $str.="`$key`='$value',";
        }
        $str = rtrim($str,",");
        $sql = "update `{$this->getTable()}` set $str";
        if(empty($condition)){
            $sql.=" where `{$this->fields['PRI']}`={$post[$this->fields['PRI']]}";
        }else{
            $sql.=" where $condition";
        }
        return $this->db->query($sql);

    }
 /*   //获取中条数
    public function getCount($keyword=""){
        $sql = "select count(*) from `{$this->getTable()}` where username like '%$keyword%' or telephone like '%$keyword%'";
        return $this->db->fetchColumn($sql);
    }
    //获取分页
    public function getPage($fields="*",$page=1,$pageSize=2,$keyword=""){
        $start = ($page-1)*$pageSize;
        $sql = "select $fields from `{$this->getTable()}` where `username` like '%{$keyword}%' or `telephone` like '%{$keyword}%' limit $start,$pageSize";
        return $this->db->fetchAll($sql);
    }
    */

    //分页开始
    //获取中条数
    public function getCount(){
        $sql = "select count(*) from `{$this->getTable()}`";
        return $this->db->fetchColumn($sql);
    }
    //获取分页
    public function getPage($fields="*",$page=1,$pageSize=2){
        $start = ($page-1)*$pageSize;
        $sql = "select $fields from `{$this->getTable()}` limit $start,$pageSize";
        return $this->db->fetchAll($sql);
    }
    //分页结束

   
    
}