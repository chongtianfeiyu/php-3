<?php
/**
 * ʵ����һ��redis ��
*/
class Redis{

	private $obj;
	private $connect;

	public function __construct()
	{
		$this->obj = new Redis();
	}
	/**
	 * ��������  
    */
	public function connect($host,$port)
	{
		$this->connect = $this->obj->connect($host,$port);
	}
	/**
     * set 
	*/
	public function set($key,$value)
	{
		return $this->connect->set($key,$value)
	}
	/**
     * setex ��ʧЧʱ��
    */
	public function setex($key,$value,$time)
	{
		return $this->connect->setex($key,$time,$value);
	}
	/**
     * get
	*/
	public function get($key)
	{
		return $this->connect->get($key);
	}
}
