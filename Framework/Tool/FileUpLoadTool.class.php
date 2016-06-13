<?php
header("content-type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: leiliang
 * Date: 2016/5/3
 * Time: 17:30
 */
class FileUpLoadTool{
    //定义上传大小
    private $maxSize;
    //上传提示错误信息
    private $mag = "";
    //允许上传类型
    private $type = array(
        "image/jpeg",
        "image/png",
        "image/gif"
    );
    //文件保存的路径
    private $path;
    //文件前缀
    private $pre;
    public function __construct(){
        //初始化对象，配置文件载入
        $this->maxSize = $GLOBALS['config']['upload']['maxSize'];
        $this->path = $GLOBALS['config']['upload']['path'];
        $this->pre = $GLOBALS['config']['upload']['pre'];
    }
    public function upload($file){
            if($file["error"]!=0){
                $this->mag = "文件上传错误";
            }elseif($file['size']>$this->maxSize){
                $this->mag = "文件超过大小";
            }elseif(!in_array($file['type'],$this->type)){
                $this->mag = "文件格式错误";
            }
            if($this->mag == ""){
                $fileName = uniqid($this->pre);
                $str = $file['name'];
                $extName = substr($str,strrpos($str,"."));
                $uploadName = $fileName.$extName;
                move_uploaded_file($file['tmp_name'],$this->path.$uploadName);
                return $uploadName;
            }else{
                return false;
            }
    }

    //多上传的方法
    public function multiUpload($files){
        $nameArr = array();
        for($i=0; $i<count($files['name']); $i++){
            $file['name']=$files['name'][$i];
            $file['type']=$files['type'][$i];
            $file['tmp_name']=$files['tmp_name'][$i];
            $file['error']=$files['error'][$i];
            $file['size']=$files['size'][$i];
            $nameArr[] = $this->upload($file);
        }
        return $nameArr;
    }

}
