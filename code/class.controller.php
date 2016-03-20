
<?php
session_start();

 include "class.citizenmethods.php";
 include "class.missing_citizenmethods.php";
 include "class.criminalmethods.php";
 include "class.fir_datamethods.php";
 include "class.log_complaintmethods.php";
 include "class.pass1methods.php";
 include "class.admin_newsmethods.php";
 include "class.statusmethods.php";
 
class controller
{
	private $submit;
	private $edit;
	private $link;
	function __construct()
	{
		if(isset($_REQUEST["submit"]))
		{
		$this->submit=$_REQUEST["submit"];
		}
		else
		{
		$this->submit="";
		}
		
	
		if(isset($_REQUEST["edit"]))
		{
		$this->edit=$_REQUEST["edit"];
		}
		else
		{
		$this->edit="";
		}
		
		if(isset($_REQUEST["link"]))
		{
		$this->link=$_REQUEST["link"];
		}
		else
		{
		$this->link="";
		}
		
		//mapping of pages
		if($this->link=="ecrime_home")
		{
			header("location:ecrime_home.php");
		}
		if($this->link=="admin_home")
		{
			header("location:admin_home.php");
		}
		if($this->link=="ecrime_index")
		{
			header("location:ecrime_index.php");
		}
		if($this->link=="citizen_register")
		{
			header("location:citizen_register.php");
		}
		if($this->link=="manage_criminal_data")
		{
			header("location:manage_criminal_data.php");
		}
		if($this->link=="manage_missing_citizen")
		{
			header("location:manage_missing_citizen.php");
		}
		if($this->link=="ecrime_viewcom")
		{
			header("location:ecrime_viewcom.php");
		}
		if($this->link=="ecrime_change_pass1")
		{
			header("location:change_pass1.php");
		}
		if($this->link=="ecrime_change_pass2")
		{
			header("location:change_pass2.php");
		}
		if($this->link=="regional_news1")
		{
			header("location:regional_news1.php");
		}
		if($this->link=="regional_news2")
		{
			header("location:regional_news2.php");
		}
		if($this->link=="logout1")
		{
			header("location:logout1.php");
		}
		if($this->link=="logout2")
		{
			header("location:logout2.php");
		}
		if($this->link=="complaint_history")
		{
			header("location:complaint_history.php");
		}
		if($this->link=="search")
		{
			header("location:search.php");
		}
		if($this->link=="view_status")
		{
			header("location:view_status_user.php");
		}
		
		//Status
		if($this->link=="update_status")
		{
			$fir_data_obj=new fir_datamethods();
			$arr=$fir_data_obj->search_by_criteria("select * from fir_data");
			$_SESSION["fir_arr"]=$arr;
			
			header("location:update_status.php");
		}
		
		if($this->link=="edit_complaint_status")
		{
			$case_id=$_GET["case_id"];
			echo $case_id;
			
			$_SESSION["case_id"]=$case_id;
			
			$statusmethods_obj=new statusmethods();
			$status_obj=$statusmethods_obj->search_status($case_id);
		
			//echo "000".$status_obj->updated_by."000";
		
			$_SESSION["status_obj"]=$status_obj;
						
			header("location:complaint_details2.php");
		}
		if($this->link=="missing_citizen_view")
		{
			$first_name=$_GET["first_name"];
			//echo $first_name;
			/* $missing_citizen_obj=new missing_citizenmethods();
			$missing_details_obj=$missing_citizen_obj->search_by_criteria("select * from missing_citizen_record where missing_citizen_f_name=$first_name");
			$_SESSION["missing_details_obj"]=$missing_details_obj;
			
			echo "<font color=red>".$_SESSION["missing_details_obj"]->missing_citizen_f_name."</font>"; */
			header("location:missing_citizen_details.php?first_name=$first_name");
		}
		if($this->link=="bulletin")
		{
			//echo "bulletins";
			
			$reg_id=$_GET["d1"];
			//echo "0000000000000".$reg_id;
			header("location:bulletins.php?reg_id=$reg_id");
		}
		
		
		
		
		//View all records
		
		if($this->link=="citizen_all_data")
		{
			//echo "hiiiiii";
			$citizen_obj=new citizenmethods();
			$arr=$citizen_obj->search_by_criteria("select * from citizen_record");
			$_SESSION["citizen_arr"]=$arr;
			
			header("location:citizen_all_data.php");
		}
		if($this->link=="missing_citizen_all_data")
		{
			//echo "hellloooooooo";
			$missing_citizen_obj=new missing_citizenmethods();
			$arr=$missing_citizen_obj->search_by_criteria("select * from missing_citizen_record");
			$_SESSION["missing_citizen_arr"]=$arr;
			
			header("location:missing_citizen_all_data.php");
		}
		if($this->link=="missing_citizen_all_data2")
		{
			//echo "hellloooooooo";
			$missing_citizen_obj=new missing_citizenmethods();
			$arr=$missing_citizen_obj->search_by_criteria("select * from missing_citizen_record");
			$_SESSION["missing_citizen_arr"]=$arr;
			
			header("location:missing_citizen_all_data2.php");
		}
		if($this->link=="criminal_all_data")
		{
			//echo "heeeelllllllllooo";
			$criminalmethods_obj=new criminalmethods();
						
			$arr=$criminalmethods_obj->search_by_criteria("select * from criminal_record");
			$_SESSION["criminal_arr"]=$arr;
			
			header("location:criminal_all_data.php");
		}
		
		//Edit all data
		
		if($this->link=="edit_citizen_data")
		{
			$citizen_id=$_GET["citizen_id"];
			$citizen_f_name=$_GET["citizen_f_name"];
			//echo $citizen_id;
			$citizenmethods_obj=new citizenmethods();
			$citizen_obj=$citizenmethods_obj->search_citizen_record($citizen_id,$citizen_f_name);
			
			$_SESSION["citizen_obj"]=$citizen_obj;
				//echo "<font color=red>".$_SESSION["citizen_obj"]->citizen_f_name."</font>";
			header("location:edit_citizen_register.php");
			
		}
		if($this->link=="edit_criminal_data")
		{
			$criminal_id=$_GET["criminal_id"];
			$criminal_f_name=$_GET["criminal_f_name"];
			
			$criminalmethods_obj=new criminalmethods();
			$criminal_obj=$criminalmethods_obj->search_criminal_record($criminal_id,$criminal_f_name);
				
				$_SESSION["criminal_obj"]=$criminal_obj;
				//echo "<font color=red>".$_SESSION["criminal_obj"]->criminal_f_name."</font>";
			header("location:edit_criminal_data.php");
			
		}
		
		if($this->link=="edit_missing_citizen_data")
		{
			$missing_citizen_id=$_GET["missing_citizen_id"];
			$missing_citizen_f_name=$_GET["missing_citizen_f_name"];
			
			$missing_citizenmethods_obj=new missing_citizenmethods();
			$missing_citizen_obj=$missing_citizenmethods_obj->search_missing_citizen($missing_citizen_id,$missing_citizen_f_name);
			$_SESSION["missing_citizen_obj"]=$missing_citizen_obj;
			//echo "<font color=red>".$_SESSION["missing_citizen_obj"]->missing_citizen_f_name."</font>";
				
			header("location:edit_missing_citizen.php");
		}
		
		//Delete all data
		
		if($this->link=="delete_citizen_data")
		{
			$citizen_id=$_GET["citizen_id"];
			$citizen_f_name=$_GET["citizen_f_name"];
			//echo $citizen_id;
			$citizenmethods_obj=new citizenmethods();
			$citizen_obj=$citizenmethods_obj->search_citizen_record($citizen_id,$citizen_f_name);
			$citizenmethods_obj->delete_citizen_record($citizen_obj);
			
			$arr=$citizen_obj->search_by_criteria("select * from citizen_record");
			$_SESSION["citizen_arr"]=$arr;
			
			header("location:citizen_all_data.php");
		}
		if($this->link=="delete_criminal_data")
		{
			$criminal_id=$_GET["criminal_id"];
			$criminal_f_name=$_GET["criminal_f_name"];
			
			$criminalmethods_obj=new criminalmethods();
			$criminal_obj=$criminalmethods_obj->search_criminal_record($criminal_id,$criminal_f_name);
			$criminalmethods_obj->delete_criminal_record($criminal_obj);
			
						
			$arr=$criminalmethods_obj->search_by_criteria("select * from criminal_record");
			$_SESSION["criminal_arr"]=$arr;
			
			header("location:criminal_all_data.php");
			
		}
		if($this->link=="delete_missing_citizen_data")
		{
			$missing_citizen_id=$_GET["missing_citizen_id"];
			$missing_citizen_f_name=$_GET["missing_citizen_f_name"];
			
			$missing_citizenmethods_obj=new missing_citizenmethods();
			$missing_citizen_obj=$missing_citizenmethods_obj->search_missing_citizen($missing_citizen_id,$missing_citizen_f_name);
			$missing_citizenmethods_obj->delete_missing_citizen($missing_citizen_obj);
			
			$arr=$missing_citizenmethods_obj->search_by_criteria("select * from missing_citizen_record");
			$_SESSION["missing_citizen_arr"]=$arr;
			
			header("location:missing_citizen_all_data.php");
		}
		
		
		//Admin  Login
		if($this->submit=="ecrime_admin_index_submit")
		{
			$email=$_POST["email"];
			$password=$_POST["password"];
			if($email=="Admin" && $password=="Admin")
		
			{
			  $_SESSION["unm"]=$email;
			
				header("location:admin_home.php");
			}
			else
			{
				header("location:ecrime_admin_login.php?err=111");
			}
		}
		
		// User Login
		if($this->submit=="ecrime_index_submit")
		{
				$citizenmethods_obj=new citizenmethods();
				
				//$citizen_id=$_POST["citizen_id"];
				$email=$_POST["email"];
				$password=$_POST["password"];
				
				$pop_citizen_obj=$citizenmethods_obj->populate_citizen_password($email,$password);
				//echo $pop_citizen_obj->email;
	    
				$citizen_obj=$citizenmethods_obj->search_citizen_password($pop_citizen_obj->email,$pop_citizen_obj->password);
				 
				if($citizen_obj->email == $pop_citizen_obj->email)
				{
					$_SESSION["citizen_obj"]=$citizen_obj;
					
					$_SESSION["email"]=$citizen_obj->email;
					echo"&&&&&".$citizen_obj->citizen_f_name."&&&";
					$_SESSION["citizen_f_name"]=$citizen_obj->citizen_f_name;
					$_SESSION["citizen_m_name"]=$citizen_obj->citizen_m_name;
					$_SESSION["citizen_l_name"]=$citizen_obj->citizen_l_name;
					
					
					
					//echo "<font color=red>".$_SESSION["citizen_obj"]."</font>";
				 //echo "Successfully login";
				 header("location:ecrime_index.php");
				}
				else
				{
					header("location:ecrime_login.php?err=111");
				}
				//
		}
		
		//Citizen registration
		
		if($this->submit=="ecrime_citizen_register_submit")
		{
			echo"hii";
			$citizenmethods_obj=new citizenmethods();
		
			$citizen_id=$_POST["citizen_id"];
			$citizen_f_name=$_POST["citizen_f_name"];
			$citizen_m_name=$_POST["citizen_m_name"];
			$citizen_l_name=$_POST["citizen_l_name"];	
			$mob_no=$_POST["mob_no"];
			$res_no=$_POST["res_no"];
			$email=$_POST["email"];
			$dob=$_POST["dob"];
			$location=$_POST["location"];
			$details=$_POST["details"];
			
			
			 $pic=$_FILES["pic"]["name"];
			 $img_tmp=$_FILES["pic"]["tmp_name"];
			 move_uploaded_file($img_tmp,"../images/".$pic);
			 
			//$pop_citizen_obj=$citizenmethods_obj->populate_citizen_record($citizen_f_name,$citizen_m_name,'','','','','','','','','','');
		
			$pop_citizen_obj=$citizenmethods_obj->populate_citizen_record($citizen_id,$citizen_f_name,$citizen_m_name,$citizen_l_name,$mob_no,$res_no,$email,$dob,$location,$details,$pic);
	    
			$citizen_obj=$citizenmethods_obj->search_citizen_record($pop_citizen_obj->citizen_id,$pop_citizen_obj->citizen_f_name);
			if($citizen_obj->citizen_f_name==$pop_citizen_obj->citizen_f_name)
			{
				echo"<b>Record Already present:</b>";
			}
			else
			{
				$citizenmethods_obj->insert_citizen_record($pop_citizen_obj);
				$citizen_obj=$citizenmethods_obj->search_citizen_record($pop_citizen_obj->citizen_id,$pop_citizen_obj->citizen_f_name);
				$_SESSION["citizen_obj"]=$citizen_obj;
				//echo "<font color=red>".$_SESSION["citizen_obj"]->citizen_f_name."</font>";
				
				header("location:edit_citizen_register.php");
			}
		}
		
		//Criminal record
		
		if($this->submit=="ecrime_manage_criminal_data_submit")
		{
			echo "by by";
			$criminalmethods_obj=new criminalmethods();
			
			$criminal_id=$_POST["criminal_id"];
			$criminal_f_name=$_POST["criminal_f_name"];
			$criminal_m_name=$_POST["criminal_m_name"];
			$criminal_l_name=$_POST["criminal_l_name"];
			$dob=$_POST["dob"];
			$mob_no=$_POST["mob_no"];
			$res_no=$_POST["res_no"];
			$address=$_POST["address"];
			$skin_color=$_POST["skin_color"];
			$hair_color=$_POST["hair_color"];
			$height=$_POST["height"];
			$weight=$_POST["weight"];
			$scars=$_POST["scars"];
			$phy_deformity=$_POST["phy_deformity"];
			
			$pic=$_FILES["pic"]["name"];
			$img_tmp=$_FILES["pic"]["tmp_name"];
			move_uploaded_file($img_tmp,"../images/".$pic);
			 
			$pop_criminal_obj=$criminalmethods_obj->populate_criminal_record($criminal_id,$criminal_f_name,$criminal_m_name,$criminal_l_name,$dob,$mob_no,$res_no,$address,$skin_color,$hair_color,$height,$weight,$scars,$phy_deformity,$pic);
			
			$criminal_obj=$criminalmethods_obj->search_criminal_record($pop_criminal_obj->criminal_id,$pop_criminal_obj->criminal_f_name);
			if($criminal_obj->criminal_f_name==$pop_criminal_obj->criminal_f_name)
			{
				echo"<b>Record Already present:</b>";
			}
			else
			{
				//echo "record is not present";
				$criminalmethods_obj->insert_criminal_record($pop_criminal_obj);
				$criminal_obj=$criminalmethods_obj->search_criminal_record($pop_criminal_obj->criminal_id,$pop_criminal_obj->criminal_f_name);
				
				$_SESSION["criminal_obj"]=$criminal_obj;
				//echo "<font color=red>".$_SESSION["criminal_obj"]->criminal_f_name."</font>";
				
				header("location:edit_criminal_data.php");
			}
			
		}
		
		//Missing Citizen
		
		if($this->submit=="ecrime_manage_missing_citizen_submit")
		{
			echo"hello";
			$missing_citizenmethods_obj=new missing_citizenmethods();
			
			$missing_citizen_id=$_POST["missing_citizen_id"];
			$missing_citizen_f_name=$_POST["missing_citizen_f_name"];
			$missing_citizen_m_name=$_POST["missing_citizen_m_name"];
			$missing_citizen_l_name=$_POST["missing_citizen_l_name"];
			$mob_no=$_POST["mob_no"];
			$res_no=$_POST["res_no"];
			$address=$_POST["address"];
			$dob=$_POST["dob"];
			$details=$_POST["details"];
			$skin_color=$_POST["skin_color"];
			$hair_color=$_POST["hair_color"];
			$height=$_POST["height"];
		
			//$pop_missing_citizen_obj=$missing_citizenmethods_obj->populate_missing_citizen($missing_citizen_id,$missing_citizen_f_name,$missing_citizen_m_name,$missing_citizen_l_name,'','','','','','','','');
			$pop_missing_citizen_obj=$missing_citizenmethods_obj->populate_missing_citizen($missing_citizen_id,$missing_citizen_f_name,$missing_citizen_m_name,$missing_citizen_l_name,$mob_no,$res_no,$address,$dob,$details,$skin_color,$hair_color,$height);
		
			$missing_citizen_obj=$missing_citizenmethods_obj->search_missing_citizen($pop_missing_citizen_obj->missing_citizen_id,$pop_missing_citizen_obj->missing_citizen_f_name);
			if($missing_citizen_obj->missing_citizen_f_name==$pop_missing_citizen_obj->missing_citizen_f_name)
			{
				echo"<b>Record Already present:";
			}
			else
			{
				$missing_citizenmethods_obj->insert_missing_citizen($pop_missing_citizen_obj);
				$missing_citizen_obj=$missing_citizenmethods_obj->search_missing_citizen($pop_missing_citizen_obj->missing_citizen_id,$pop_missing_citizen_obj->missing_citizen_f_name);
				
				$_SESSION["missing_citizen_obj"]=$missing_citizen_obj;
				echo "<font color=red>".$_SESSION["missing_citizen_obj"]->missing_citizen_f_name."</font>";
				
				header("location:edit_missing_citizen.php");
			}
	
		}
		//Edit citizen registration
		if($this->edit=="ecrime_citizen_register_edit")
		{
			//echo "We are updating";
			$citizenmethods_obj=new citizenmethods();
		
			$citizen_id=$_POST["citizen_id"];
			$citizen_f_name=$_POST["citizen_f_name"];
			$citizen_m_name=$_POST["citizen_m_name"];
			$citizen_l_name=$_POST["citizen_l_name"];	
			$mob_no=$_POST["mob_no"];
			$res_no=$_POST["res_no"];
			$email=$_POST["email"];
			$dob=$_POST["dob"];
			$location=$_POST["location"];
			$details=$_POST["details"];
			 
			 $pic=$_FILES["pic"]["name"];
			 $img_tmp=$_FILES["pic"]["tmp_name"];
			 move_uploaded_file($img_tmp,"../images/".$pic);
			 
			 $pop_citizen_obj=$citizenmethods_obj->populate_citizen_record($citizen_id,$citizen_f_name,$citizen_m_name,$citizen_l_name,$mob_no,$res_no,$email,$dob,$location,$details,$pic);
			 $citizenmethods_obj->update_citizen_record($pop_citizen_obj);
		} 
		
		//Edit criminal record
		
		if($this->edit=="ecrime_manage_criminal_data_edit")
		{
			$criminalmethods_obj=new criminalmethods();
			
			$criminal_id=$_POST["criminal_id"];
			$criminal_f_name=$_POST["criminal_f_name"];
			$criminal_m_name=$_POST["criminal_m_name"];
			$criminal_l_name=$_POST["criminal_l_name"];
			$dob=$_POST["dob"];
			$mob_no=$_POST["mob_no"];
			$res_no=$_POST["res_no"];
			$address=$_POST["address"];
			$skin_color=$_POST["skin_color"];
			$hair_color=$_POST["hair_color"];
			$height=$_POST["height"];
			$weight=$_POST["weight"];
			$scars=$_POST["scars"];
			$phy_deformity=$_POST["phy_deformity"];
			
			$pic=$_FILES["pic"]["name"];
			$img_tmp=$_FILES["pic"]["tmp_name"];
			move_uploaded_file($img_tmp,"../images/".$pic);
			 
			$pop_criminal_obj=$criminalmethods_obj->populate_criminal_record($criminal_id,$criminal_f_name,$criminal_m_name,$criminal_l_name,$dob,$mob_no,$res_no,$address,$skin_color,$hair_color,$height,$weight,$scars,$phy_deformity,$pic);
			$criminalmethods_obj->update_criminal_record($pop_criminal_obj);
		}
		
		//Edit misssing citizen
		if($this->edit=="ecrime_missing_citizen_edit")
		{
			$missing_citizenmethods_obj=new missing_citizenmethods();
			
			$missing_citizen_id=$_POST["missing_citizen_id"];
			$missing_citizen_f_name=$_POST["missing_citizen_f_name"];
			$missing_citizen_m_name=$_POST["missing_citizen_m_name"];
			$missing_citizen_l_name=$_POST["missing_citizen_l_name"];
			$mob_no=$_POST["mob_no"];
			$res_no=$_POST["res_no"];
			$address=$_POST["address"];
			$dob=$_POST["dob"];
			$details=$_POST["details"];
			$skin_color=$_POST["skin_color"];
			$hair_color=$_POST["hair_color"];
			$height=$_POST["height"];
			
			$pop_missing_citizen_obj=$missing_citizenmethods_obj->populate_missing_citizen($missing_citizen_id,$missing_citizen_f_name,$missing_citizen_m_name,$missing_citizen_l_name,$mob_no,$res_no,$address,$dob,$details,$skin_color,$hair_color,$height);
			$missing_citizenmethods_obj->update_missing_citizen($pop_missing_citizen_obj);
		}
		//Log complaint
		
		if($this->submit=="log_complaint_submit")
		{
			//echo "log complaint";
			$log_complaintmethods_obj=new log_complaintmethods();
			
			$case_id=$_POST["case_id"];
			$crime_id=$_POST["crime_id"];
						
			$log_complaint_obj=$log_complaintmethods_obj->populate_log_complaint($case_id,$crime_id);
			
			$_SESSION["log_complaint_obj"]=$log_complaint_obj;
			
			header("location:log_complaint.php");
		}
		
		//FIR registration
		
		if($this->submit=="log_robbery_submit")
		{
			echo "robbery";
			$fir_datamethods_obj=new fir_datamethods();
		
			//$crime_id=$_GET["crime_id"];
			
			$case_id=$_POST["case_id"];
			$crime_id=$_POST["crime_id"];
			$crime_name=$_POST["crime_name"];
			$location=$_POST["location"];
			$citizen_id=$_POST["citizen_id"];
			$fdate=$_POST["fdate"];
			$ans1=$_POST["ans1"];
			$ans2=$_POST["ans2"];
			$ans3=$_POST["ans3"];
			$ans4=$_POST["ans4"];
			$ans5=$_POST["ans5"];
			
			$pop_fir_data_obj=$fir_datamethods_obj->populate_fir_data($case_id,$crime_id,$crime_name,$location,$citizen_id,$fdate,$ans1,$ans2,$ans3,$ans4,$ans5);
			$fir_data_obj=$fir_datamethods_obj->search_fir_data($pop_fir_data_obj->case_id,$pop_fir_data_obj->crime_id,$pop_fir_data_obj->crime_name,$pop_fir_data_obj->citizen_id);
			if($fir_data_obj->case_id==$pop_fir_data_obj->case_id)
			{
				echo"<b>Record Already present:</b>";
			}
			else
			{
				//echo "Record is not present";
				$fir_datamethods_obj->insert_fir_data($pop_fir_data_obj);
				$fir_datamethods_obj->insert_fir_status($pop_fir_data_obj);
				
				$fir_data_obj=$fir_datamethods_obj->search_fir_data($pop_fir_data_obj->case_id,$pop_fir_data_obj->crime_name,$pop_fir_data_obj->citizen_id);
				$_SESSION["fir_data_obj"]=$fir_data_obj;
				echo "<font color=red>".$_SESSION["fir_data_obj"]->crime_name."</font></br>";
				
			}
		}
		
		//Change password user
		
		if($this->submit=="ecrime_change_pass1_submit")
		{

			$pass1methods_obj=new pass1methods();
			
			$email=$_POST["email"];
			$old_pass=$_POST["old_pass"];
			$new_pass=$_POST["new_pass"];
			$retype_pass=$_POST["retype_pass"];
			
			$pop_pass1_obj=$pass1methods_obj->populate_change_pass1($email,$old_pass,$new_pass,$retype_pass);
			$pass1methods_obj->update_password($pop_pass1_obj);
		}
		//Change password administrator
		if($this->submit=="ecrime_change_pass2_submit")
		{
			
			$pass1methods_obj=new pass1methods();
			
			$email=$_POST["email"];
			$old_pass=$_POST["old_pass"];
			$new_pass=$_POST["new_pass"];
			$retype_pass=$_POST["retype_pass"];
			
			$pop_pass1_obj=$pass1methods_obj->populate_change_pass1($email,$old_pass,$new_pass,$retype_pass);
			$pass1methods_obj->update_password($pop_pass1_obj);
		}
		//regional news submit
		if($this->submit=="regional_news_submit")
		{
			$reg_name=$_POST["reg_name"];
			//echo "region entered";
			header("location:all_map.php?reg_name=$reg_name");
		}
		
		//regional news admin submit
		if($this->submit=="regional_news_admin_submit")
		{
			//echo "news for admin";
			$reg_name=$_POST["reg_name"];
			header("location:admin_news.php?reg_name=$reg_name");
		}
		
		//admin news submit
		if($this->submit=="admin_news_submit")
		{
			$admin_newsmethods_obj=new admin_newsmethods();
			
			$news_id=$_POST["news_id"];
			$reg_id=$_POST["reg_id"];
			$ndate=$_POST["ndate"];
			
			$news_pdf=$_FILES["news_pdf"]["name"];
			$pdf_tmp=$_FILES["news_pdf"]["tmp_name"];
			move_uploaded_file($pdf_tmp,"../pdf/".$news_pdf);
			
			$pop_admin_obj=$admin_newsmethods_obj->populate_admin_news($news_id,$reg_id,$ndate,$news_pdf);
			$admin_newsmethods_obj->insert_admin_news($pop_admin_obj);
		}
		
		//search complaint submit
		if($this->submit=="search_complaint_submit")
		{
		 //echo "search complaint";
		 $case_id=$_POST["case_id"];
		 
		 $statusmethods_obj=new statusmethods();
		$status_obj=$statusmethods_obj->search_status($case_id);
		
		//echo "000".$status_obj->updated_by."000";
		
		 $_SESSION["status_obj"]=$status_obj;
		 
		// echo "my".$_SESSION["status_obj"]->updated_by."my";
		  header("location:complaint_details.php?case_id=$case_id");
		}
		
		//Status of complaint submit
		
		if($this->submit=="complaint_details2_submit")
		{
			//$case_id=$_POST["case_id"];
			$status=$_POST["status"];
			//header("location:complaint_details_status.php?status=$status");
			
		}
		if($this->submit=="view_status_user_submit")
		{
			$case_id=$_POST["case_id"];
			//$status=$_POST["status"];
			header("location:complaint_details_status.php?case_id=$case_id");
			
		}
		
		
		if($this->submit=="complaint_details_submit")
		{
			$statusmethods_obj=new statusmethods();
			$case_id=$_SESSION["id"];
			
			$status=$_POST["status"];
			$criminal_id=$_POST["criminal_id"];
			$updated_by=$_SESSION["unm"];
			$updated_date=date('y-m-d');
			
			$pop_status_obj=$statusmethods_obj->populate_change_status($case_id,$status,$criminal_id,$updated_by,$updated_date);
			$statusmethods_obj->update_status($pop_status_obj);
			//echo "status changed";
		}
	}	
		
		
	
}
$controller_obj=new controller();
echo "In controller";
?>
