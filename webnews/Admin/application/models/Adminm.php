<?php
class Adminm extends CI_Model
{
	public function insertdata()
	{
		$name=$this->input->post('name');	
		$email=$this->input->post('email');
		$pass=$this->input->post('pass');
		$cpass=$this->input->post('cpass');
	    if($cpass=="")
		{
			echo "please enter password";
		}
		else if($cpass!=$pass)
		{
			echo "password mismatch";	
		}
		else
		{
			$insert=array(
		                "Aname"=>$name,
		                "Aemail"=>$email,
						"password"=>$pass		
		
		              );
			$this->db->insert('admin_register',$insert);
			redirect('Adminc');
		}
	}
	public function logindata()
	{
		
		$email=$this->input->post('email');
	    $pass=$this->input->post('pass');
		$this->db->where('Aemail',$email);	
		$this->db->where('astatus',"Active");	
		$this->db->where('password',$pass);	
		return $this->db->get('admin_register')->row();	
		
	}
	
	public function logindata2()
	{
		
		$email=$this->input->post('email');
	    $pass=$this->input->post('pass');
		$this->db->where('Aemail',$email);	
		$this->db->where('astatus',"Active");	
		$this->db->where('password',$pass);	
		return $this->db->get('admin_register')->result();	
		
	}
	public function updatedata()
	{
		$npass=$this->input->post('npass');
		$cpass=$this->input->post('cpass');	
		$chkemail=$this->session->userdata('forgetemail');
		$update=array
				(
				'password'=>$npass
				);
		$this->db->where('Aemail',$chkemail);
		$this->db->update('admin_register',$update);
		
	}
	public function getadmindata()
	{
		return $this->db->get('admin_register')->row();	
			}
		
	
	
	
}
?>