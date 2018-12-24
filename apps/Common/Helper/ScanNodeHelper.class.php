<?php
namespace Common\Helper;

class ScanNodeHelper{

    public function scanFile($module="Admin"){
 
        $dir = APP_PATH.$module.'/Controller/';
        $dh = opendir(realpath($dir));
        $files = array();
        while (($file = readdir($dh))!= false){
            if(stristr($file,'Controller.class.php')){
                $file=substr($file,0,-20);
                $files[]=$file;
            }
        }
        return $files;
    }

    public function getAllNode($module="Admin"){
        $classes=$this->scanFile($module);
        $node = array();
        foreach($classes as $class){
			$classname =   "\\$module\Controller\\$class".'Controller';
			$obj = new $classname();
			$methods = get_class_methods($obj);
			$parent = get_parent_class($classname);
			$baseclass = 'BaseController';
			if(strstr($parent,$baseclass)) {// ����Ǽ̳и��࣬ɾ�����෽��
				$parentmethods = $this->getSubMethod($module,$baseclass);
			}else{
				continue;//���Ǽ̳�base�Ĳ���ҪȨ����֤
			}
			foreach($methods as $method) {
				if(in_array($method,$parentmethods)) {
					continue;
				}
				$node[$class][] = strtolower($method);
			}
        }
		return $node;
    }
	
	public function getSubMethod($module,$baseClass='BaseController') {
			$classname =   "\\$module\Controller\\$baseClass";
			$obj = new $classname();
			$methods = get_class_methods($obj);
			return $methods;
	}

}