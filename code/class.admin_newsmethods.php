<?php
include "class.admin_news.php";

class admin_newsmethods
{
	private $con;
	function __construct()
	{
		
		$this->con=mysql_connect("localhost","root","");
		if(!$this->con)
		{
			die("connection failed".mysql_error());
		}
		mysql_select_db("ecrime",$this->con);
	}
	function populate_admin_news($news_id,$reg_id,$ndate,$news_pdf)
	{
		$admin_news_obj=new admin_news();
		
		$admin_news_obj->news_id=$news_id;
		$admin_news_obj->reg_id=$reg_id;
		$admin_news_obj->ndate=$ndate;
		$admin_news_obj->news_pdf=$news_pdf;
		
		return(Object)$admin_news_obj;
	}
	function insert_admin_news($admin_news_obj)
	{
		echo "admin news";
		
		$stt=mysql_query("insert into news(news_id,reg_id,ndate,news_pdf)
					values ($admin_news_obj->news_id,$admin_news_obj->reg_id,'".$admin_news_obj->ndate."','".$admin_news_obj->news_pdf."')");	
						if($stt)
						{
							echo "record inserted";
						}
						
		
	}
}
?>